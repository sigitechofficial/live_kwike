<?php

namespace App\Repositories\StoreRepository;

use App\Http\Requests\HomeRequest;
use App\Http\Resources\CategoryProductsResource;
use App\Http\Resources\CategoryResources;
use App\Http\Resources\ProductResource;
use App\Models\Banner;
use App\Models\Cart;
use App\Models\Category;
use App\Models\Order;
use App\Models\Product;

use App\Models\ProductStore;
use App\Models\Store;

use App\Models\UserFavorite;
use http\Env\Request;
use Illuminate\Support\Facades\DB;
use function Symfony\Component\String\s;

class StoreRepository implements StoreRepositoryInterface
{

    public function getNearestStore($request)
    {
        $store = Store::getNearestStore($request->get('latitude'), $request->get('longitude'));
        if (!$store) {
            errorResponse('0', 'Something went wrong.!', ['there is no Store in your location'], 200);
        }
        $banners = Banner::getBanners();
        $featureProducts = DB::table("product_stores")
            ->select('product_stores.id as product_store_id',
                'product_stores.store_id as store_id','products.title',
                'products.image','products.unit','products.items_per_unit',
                'products.price','products.min_order','products.discount',
                'products.discount_price','product_stores.stock','products.is_18_plus')

            ->Join('products','products.id','=','product_stores.product_id')
            ->where(['store_id'=>$store->id,'is_featured'=>1])
            ->get();
        $categories = Category::getHomeCategories();
        return [
            'images_url'=>env('IMAGE_URL'),
            'store' => $store,
            'banners' => $banners,
            'featuredProduct' => $featureProducts,
            'categories' => $categories,

        ];
    }
    public function subCategoriesProduct($request)
    {
        $categories=Category::with(['subCategories.products.productStore'=>function ($q) use($request){
            $q->whereHas('products.productStore',function ($q) use ($request){
                $q->where('store_id','=',$request->get('store_id'))->whereHas('products.productStore');
            });
        }])
            ->find($request->get('sub_cate_id'));
        foreach ($categories->subCategories as $category){
            foreach ($category->products as $key=>$product){
                if(!count($product->productStore) > 0){
                    unset($category->products[$key]);
                }
            }
        }

        $discount=  DB::table("product_stores")
            ->select('product_stores.id as product_store_id',
                'product_stores.store_id as store_id','products.title',
                'products.image','products.unit','products.items_per_unit',
                'products.price','products.min_order','products.discount',
                'products.discount_price','product_stores.stock','products.is_18_plus')
            ->Join('products','products.id','=','product_stores.product_id')
            ->where(['store_id'=>$request->get('store_id')])
            ->get();

//        $discount->discount=[
//            'products'=>$discount
//        ];
//        $categories->subCategories[0]=$discount;

        $categories = CategoryProductsResource::make($categories);
        return [
            'images_url'=>env('IMAGE_URL'),
            'categories'=>$categories
        ];
    }
    public function productDetail($product_store_id)
    {
        $products = ProductStore::with('products.tags', 'products.nutrition')->findOrFail($product_store_id);
        $storeProducts=  DB::table("product_stores")
            ->select('product_stores.id as product_store_id',
                'product_stores.store_id as store_id','products.title',
                'products.image','products.unit','products.items_per_unit',
                'products.price','products.min_order','products.discount',
                'products.discount_price','product_stores.stock','products.is_18_plus')
            ->Join('products','products.id','=','product_stores.product_id')
            ->where(['store_id'=>$products->store_id])
            ->get();
        return [
            'images_url'=>env('IMAGE_URL'),
            'product_detail'=>ProductResource::make($products),
            'other_products'=>$storeProducts
        ];

    }

    public function favorites($request)
    {
        $favorites=  DB::table("product_stores")
            ->select('product_stores.id as product_store_id',
                'product_stores.store_id as store_id','products.title',
                'products.image','products.unit','products.items_per_unit',
                'products.price','products.min_order','products.discount',
                'products.discount_price','product_stores.stock','products.is_18_plus')
            ->Join('products','products.id','=','product_stores.product_id')
            ->join('user_favorites','user_favorites.product_store_id','=','product_stores.id')
            ->where('user_favorites.user_id',auth()->id())
            ->where('store_id',$request->get('store_id'))
            ->get();
        return [
            'images_url'=>env('IMAGE_URL'),
            'favoriteList'=>$favorites,
        ];
    }

    public function addToFavorite($request)
    {
        if ($request->get('product_store_id') == null) {
            errorResponse('0', 'Something went wrong.!', ['product store id is required'], 200);
        }
        if (UserFavorite::where(['user_id' => auth()->id(), 'product_store_id' => $request->get('product_store_id')])->exists()) {
            errorResponse('0', 'Something went wrong.!', ['Product is already in user favorite list'], 200);
        }
        auth()->user()->favorites()->attach($request->get('product_store_id'));
        return 1;
    }
    public function removeFavorite($request)
    {
        if ($request->get('product_store_id') == null) {
            errorResponse('0', 'Something went wrong.!', ['product store id is required'], 200);
        }
        if (!UserFavorite::where(['user_id' => auth()->id(), 'product_store_id' => $request->get('product_store_id')])->exists()) {
            errorResponse('0', 'Something went wrong.!', ['Store product id not exist'], 200);
        }
        auth()->user()->favorites()->detach($request->get('product_store_id'));
        return 1;
    }

    public function cart()
    {
        $cart = Cart::where('user_id', auth()->id())->first();
        if (!$cart) {
            errorResponse('0', 'Something went wrong.!', ['Your cart is Empty'], 200);
        }
        $cart_items = DB::table("product_stores")
            ->select('cart_items.id as cart_item_id', 'products.title', 'products.image', 'products.unit', 'products.items_per_unit', 'cart_items.price')
            ->Join('products', 'products.id', '=', 'product_stores.product_id')
            ->join('cart_items', 'cart_items.product_store_id', '=', 'product_stores.id')
            ->where('cart_items.cart_id', $cart->id)
            ->get();
        return [
            'images_url'=>env('IMAGE_URL'),
            'cart' => $cart,
            'cart_items' => $cart_items
        ];
    }

    public function addToCart($request)
    {
        $cart = Cart::where('user_id', auth()->id())->first();
        if ($cart) {
            if ($cart->store_id != $request->get('store_id')) {
                errorResponse('0', 'Something went wrong.!', ['You have an cart in other store please remove it first'], 200);
            }
            if (DB::table('cart_items')->where(['cart_id' => $cart->id, 'product_store_id' => $request->get('product_store_id')])->exists()) {
                errorResponse('0', 'Something went wrong.!', ['Product already added into cart'], 200);
            }
        } else {
            $cart = Cart::create([
                'user_id' => auth()->id(),
                'store_id' => $request->get('store_id')
            ]);
        }
        $storeProduct = ProductStore::findorfail($request->get('product_store_id'));
        $price = $storeProduct->price * $request->get('quantity');
        $tax = $storeProduct->tax * $request->get('quantity');
        $total = $storeProduct->price * $request->get('quantity') - $storeProduct->discount * $request->get('quantity');
        DB::table('cart_items')->insert([
            'cart_id' => $cart->id,
            'product_store_id' => $request->get('product_store_id'),
            'quantity' => $request->get('quantity'),
            'price' => $price,
            'tax' => $tax,
            'total' => $total,
        ]);
        return 1;
    }
    public function order($request)
    {
       $cart=auth()->user()->cart()->with('cartItems')->get();
       $order=Order::insert([
           'user_id'=>auth()->id(),
           'store_id'=>$cart->store_id,
           'payment_method_id'=>1,
           'is_paid'=>'yes',

       ]);

    }
}

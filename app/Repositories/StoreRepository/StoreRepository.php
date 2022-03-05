<?php

namespace App\Repositories\StoreRepository;

use App\Http\Requests\HomeRequest;
use App\Http\Resources\CategoryProductsResource;
use App\Http\Resources\CategoryResources;
use App\Http\Resources\ProductResource;
use App\Models\AppSetting;
use App\Models\Banner;
use App\Models\Cart;
use App\Models\CartItem;
use App\Models\Category;
use App\Models\PaymentMethod;
use App\Models\Voucher;
use App\Models\Order;
use App\Models\Product;

use App\Models\ProductStore;
use App\Models\Store;

use App\Models\UserFavorite;

use Exception;
use http\Env\Request;
use Illuminate\Support\Facades\DB;
use function Symfony\Component\String\s;

class StoreRepository implements StoreRepositoryInterface
{
    private $stripe;

    public function __construct()
    {
        $this->stripe = new \Stripe\StripeClient(env('STRIPE_SECRET_KEY'));
    }

    public function getNearestStore($request)
    {
        $store = Store::getNearestStore($request->get('latitude'), $request->get('longitude'));
        if (!$store) {
            errorResponse('0', 'Something went wrong.!', ['there is no Store in your location'], 200);
        }
        $banners = Banner::getBanners();
        $featureProducts = DB::table("product_stores")
            ->select('product_stores.id as product_store_id',
                'product_stores.store_id as store_id', 'products.title',
                'products.image', 'products.unit', 'products.items_per_unit',
                'products.price', 'products.min_order', 'products.discount',
                'products.discount_price', 'product_stores.stock', 'products.is_18_plus')
            ->Join('products', 'products.id', '=', 'product_stores.product_id')
            ->where(['store_id' => $store->id, 'product_stores.is_featured' => 1])
            ->get();
        $categories = Category::getHomeCategories();
        return [
            'images_url' => env('IMAGE_URL'),
            'store' => $store,
            'banners' => $banners,
            'featuredProduct' => $featureProducts,
            'categories' => $categories,

        ];
    }

    public function subCategoriesProduct($request)
    {
        $categories = Category::with(['subCategories.products.productStore' => function ($q) use ($request) {
            $q->whereHas('products.productStore', function ($q) use ($request) {
                $q->where('store_id', '=', $request->get('store_id'))->whereHas('products.productStore');
            });
        }])
            ->find($request->get('sub_cate_id'));
        foreach ($categories->subCategories as $category) {
            foreach ($category->products as $key => $product) {
                if (!count($product->productStore) > 0) {
                    unset($category->products[$key]);
                }
            }
        }

        $discount = DB::table("product_stores")
            ->select('product_stores.id as product_store_id',
                'product_stores.store_id as store_id', 'products.title',
                'products.image', 'products.unit', 'products.items_per_unit',
                'products.price', 'products.min_order', 'products.discount',
                'products.discount_price', 'product_stores.stock', 'products.is_18_plus')
            ->Join('products', 'products.id', '=', 'product_stores.product_id')
            ->where(['store_id' => $request->get('store_id')])
            ->get();

//        $discount->discount=[
//            'products'=>$discount
//        ];
//        $categories->subCategories[0]=$discount;

        $categories = CategoryProductsResource::make($categories);
        return [
            'images_url' => env('IMAGE_URL'),
            'categories' => $categories
        ];
    }

    public function productDetail($product_store_id)
    {
        $products = ProductStore::with('products.tags', 'products.nutrition')->findOrFail($product_store_id);
        $storeProducts = DB::table("product_stores")
            ->select('product_stores.id as product_store_id',
                'product_stores.store_id as store_id', 'products.title',
                'products.image', 'products.unit', 'products.items_per_unit',
                'products.price', 'products.min_order', 'products.discount',
                'products.discount_price', 'product_stores.stock', 'products.is_18_plus')
            ->Join('products', 'products.id', '=', 'product_stores.product_id')
            ->where(['store_id' => $products->store_id])
            ->get();
        return [
            'images_url' => env('IMAGE_URL'),
            'product_detail' => ProductResource::make($products),
            'other_products' => $storeProducts
        ];

    }

    public function favorites($request)
    {
        $favorites = DB::table("product_stores")
            ->select('product_stores.id as product_store_id',
                'product_stores.store_id as store_id', 'products.title',
                'products.image', 'products.unit', 'products.items_per_unit',
                'products.price', 'products.min_order', 'products.discount',
                'products.discount_price', 'product_stores.stock', 'products.is_18_plus')
            ->Join('products', 'products.id', '=', 'product_stores.product_id')
            ->join('user_favorites', 'user_favorites.product_store_id', '=', 'product_stores.id')
            ->where('user_favorites.user_id', auth()->id())
            ->where('store_id', $request->get('store_id'))
            ->get();
        return [
            'images_url' => env('IMAGE_URL'),
            'favoriteList' => $favorites,
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
            'images_url' => env('IMAGE_URL'),
            'cart' => $cart,
            'cart_items' => $cart_items
        ];
    }


    public function applyVoucher($request)
    {
        $cart = Cart::where('user_id', auth()->id())->first();
        if (!$cart) {
            errorResponse('0', 'Something went wrong.!', ['You have no product in your cart'], 200);
        }
        if ($cart->voucher_code != null) {
            errorResponse('0', 'Something went wrong.!', ['You have already applied voucher'], 200);
        }
        $voucher = Voucher::where([['code', $request->code], ['no_of_use', '>', 0], ['start_date', '<=', date('Y-m-d')], ['end_date', '>=', date('Y-m-d')]])->first();
        if (!$voucher) {
            errorResponse('0', 'Something went wrong.!', ['this voucher is not available'], 200);
        }
        if ($voucher->applied_total >= $cart->total) {
            errorResponse('0', 'Something went wrong.!', ['Apply on minimum amount is ' . $voucher->applied_total], 200);
        }
        $total = $cart->total - ($voucher->discount / 100) * $cart->total;
        $cart->total = $total;
        $cart->voucher_code = $voucher->code;
        $cart->voucher_discount = $voucher->discount;
        $cart->save();

        return $cart;
    }

    public function addToCart($request)
    {

        $haveProducts = [];
        foreach ($request->get('products') as $product) {
            $product['is_deleted'] = 0;
            $product['is_quantity_changed'] = 0;
            $product['is_price_changed'] = 0;
            $storeProduct = ProductStore::with('products')->find($product['product_store_id']);
            if ($storeProduct->stock > 0) {
                if ($storeProduct->stock <= $product['quantity']) {
                    $product['quantity'] = $storeProduct->stock;
                    $product['is_quantity_changed'] = 1;
                }
                if ($storeProduct->products->discount == 0) {
                    if ($storeProduct->products->price != $product['price']) {
                        $product['price'] = $storeProduct->products->price;
                        $product['is_price_changed'] = 1;
                    }
                } else {
                    if ($storeProduct->products->discount_price != $product['price']) {
                        $product['price'] = $storeProduct->products->discount_price;
                        $product['is_price_changed'] = 1;
                    }
                }

            } else {
                $product['is_deleted'] = 1;
            }
            $haveProducts[] = $product;
        }

        if (count($haveProducts) > 0) {
            $cart = Cart::where('user_id', auth()->id())->first();
            if ($cart) {
                DB::table('cart_items')->where('cart_id', $cart->id)->delete();
                $cart->delete();
            }
            $cart = Cart::create([
                'user_id' => auth()->id(),
                'store_id' => $request->get('store_id')
            ]);
            foreach ($haveProducts as $product) {

                if ($product['is_deleted'] == 0) {
                    DB::table('cart_items')->insert([
                        'cart_id' => $cart->id,
                        'product_store_id' => $product['product_store_id'],
                        'quantity' => $product['quantity'],
                        'price' => $product['price'],
                        'tax' => 0,
                        'total' => $product['price'] * $product['quantity'],
                    ]);
                }

            }
            $subTotal = DB::table('cart_items')->where('cart_id', $cart->id)->sum('total');
            $cart->sub_total = $subTotal;
            $cart->total = $subTotal;
            $cart->save();
            return $haveProducts;
        }
        return 0;
    }

    public function paymentMethods()
    {
        return [
            'images_url' => env('IMAGE_URL'),
            'paymentMethods' => PaymentMethod::where('status', 1)->get()
        ];
    }

    public function order($request)
    {
        DB::beginTransaction();
        try {
//            dd(env('STRIPE_SECRET_KEY'),env('IMAGE_URL'));
            $cart = Cart::where('user_id', auth()->id())->first();
            if (!$cart) {
                errorResponse('0', 'Something went wrong.!', ['You have no product in your cart'], 200);
            }
            $cart->cartItems = DB::table('cart_items')->where('cart_id', $cart->id)->get();


            if ($cart) {
                $request->customer_id = auth()->user()->stripe_customer_id;
                if ($request->payment_method == 'stripe') {
                    if ($request->card_type == 'new') {
                        $token = $this->stripe->tokens->create([
                            'card' => [

                                'number' => $request->input('card_number'),
                                'exp_month' => $request->input('exp_month'),
                                'exp_year' => $request->input('exp_year'),
                                'cvc' => $request->input('cvc'),
                            ],
                        ]);
                        $capture = $this->stripe->charges->create([
                            "amount" => $cart->total * 100,
                            "currency" => "usd",
                            "source" => $token->id, // obtained with Stripe.js
                            "capture" => false
                        ]);
                        $request->nonce = $capture->id;
                        if ($request->card_save == 1) {
                            $flag = 0;
                            $cards = $this->stripe->paymentMethods->all([
                                'customer' => $request->customer_id,
                                'type' => 'card',
                            ]);

                            if (count($cards) < 1) {
                                $flag = 1;
                            }

                            $pm = $this->stripe->paymentMethods->create([
                                'type' => 'card',
                                'card' => [
                                    'number' => $request->input('card_number'),
                                    'exp_month' => $request->input('exp_month'),
                                    'exp_year' => $request->input('exp_year'),
                                    'cvc' => $request->input('cvc'),
                                ],
                            ]);

                            $attach = $this->stripe->paymentMethods->attach(
                                $pm['id'],
                                ['customer' => $request->customer_id]
                            );

                            if ($flag == 1) {
                                $result = $this->stripe->customers->update(
                                    $request->customer_id,
                                    ['invoice_settings' => array('default_payment_method' => $pm['id'])]
                                );
                            }
                        }
                    }
                    if ($request->card_type == 'old') {
                        $charge = $this->stripe->paymentIntents->create([
                            'amount' => $cart->total * 100,
                            'currency' => 'USD',
                            'customer' => $request->customer_id,
                            'payment_method' => $request->pm_id,
                            'payment_method_types' => ['card'],
                            'capture_method' => 'manual'
                        ]);

                        $request->nonce = $charge->id;
                    }
                } else {
                    $request->nonce = null;
                }
                $orderNo = 'kwikemart-' . rand(1000000, 9999999);
                $order = Order::create([
                    'order_no' => $orderNo,
                    'user_id' => auth()->id(),
                    'store_id' => $cart->store_id,
                    'user_address_id' => $request->user_address_id,
                    'voucher_code' => $cart->voucher_code ?? null,
                    'voucher_discount' => $cart->voucher_discount ?? null,
                    'sub_total' => $cart->sub_total,
                    'total' => $cart->total,
                    'schedule_date' => $request->schedule_date,
                    'order_type' => $request->order_type,
                    'nonce' => $request->nonce,
                    'payment_method' => $request->payment_method,
                    'card_type' => $request->card_type,
                    'status' => 'pending',
                    'is_paid' => 'No'
                ]);
                foreach ($cart->cartItems as $item) {
                    $productStore = ProductStore::find($item->product_store_id);

                    if (!$productStore->stock >= $item->quantity) {
                        DB::rollBack();
                        errorResponse('0', 'Server error.!', 'Something went wrong. Please try again later', 200);
                    }
                    DB::table('order_items')->insert([
                        'order_id' => $order->id,
                        'product_store_id' => $item->product_store_id,
                        'quantity' => $item->quantity,
                        'price' => $item->price,
                        'total' => $item->total,
                    ]);

                    $productStore->stock = $productStore->stock - $item->quantity;
                    $productStore->save();
                }
                $admin_order_commission = AppSetting::where('shortcode','order_commission')->where('value1','admin_order_commission')->first()->value2;

                $store_commission=Store::find($cart->store_id)->order_commission;
                if($store_commission){
                    $retailer_order_commission =$store_commission;
                }else{
                    $retailer_order_commission = AppSetting::where('shortcode','order_commission')->where( 'value1','retailer_order_commission')->first()->value2;
                }
                $driver_order_commission = AppSetting::where('shortcode','order_commission')->where('value1','driver_order_commission')->first()->value2;
                DB::table('orders_commission')->insert([
                    'order_id' => $order->id,
                    'admin_commission_percentage' => $admin_order_commission,
                    'retailer_commission_percentage' => $retailer_order_commission,
                    'driver_commission_percentage' => $driver_order_commission,
                    'admin_commission' =>$order->sub_total - (($admin_order_commission / 100) * $order->sub_total),
                    'retailer_commission' =>$order->sub_total -  (($retailer_order_commission / 100) * $order->sub_total),
                    'driver_commission' =>$order->sub_total -  (($driver_order_commission / 100) * $order->sub_total),
                ]);

                DB::table('cart_items')->where('cart_id', $cart->id)->delete();
                $cart->delete();

                DB::commit();
                return 1;
            }
            errorResponse('0', 'Something went wrong', 'Your cart is empty please add products', 200);

        } catch (\Stripe\Exception\RateLimitException $e) {
            errorResponse('0', 'Validation error.!', $e->getError()->message, 200);
        } catch (\Stripe\Exception\InvalidRequestException $e) {
            errorResponse('0', 'Validation error.!', $e->getError()->message, 200);
        } catch (\Stripe\Exception\AuthenticationException $e) {
            errorResponse('0', 'Validation error.!', $e->getError()->message, 200);
        } catch (\Stripe\Exception\ApiConnectionException $e) {
            errorResponse('0', 'Validation error.!', $e->getError()->message, 200);
        } catch (\Stripe\Exception\ApiErrorException $e) {
            errorResponse('0', 'Validation error.!', $e->getError()->message, 200);
        } catch (\Exception $e) {

            DB::rollBack();
            responseNow(0, 'Server error', 'Something went wrong. Please try again later');
        }
    }

}

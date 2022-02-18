<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\CartRequest;
use App\Http\Requests\FavoriteRequest;
use App\Http\Requests\HomeRequest;
use App\Models\Category;
use App\Repositories\StoreRepository\StoreRepositoryInterface;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    public $store;
    public function __construct(StoreRepositoryInterface $store){
        $this->store=$store;
    }

    public function home(HomeRequest $request){
        $data = $this->store->getNearestStore($request);
        ResponseNow('1', 'welcome to '.$data['store']->name, $data, 200);
    }
    public function subCategoriesProduct(Request $request){

        $data = $this->store->subCategoriesProduct($request);
        ResponseNow('1', 'Category with products ', $data, 200);

    }
    public function productDetail($product_store_id){
        $data = $this->store->productDetail($product_store_id);
        ResponseNow('1', 'Product detail ', $data, 200);
    }
    public function favorites(FavoriteRequest $request){
        $data = $this->store->favorites($request);

        ResponseNow('1', 'Favorite list is ', $data, 200);
    }
    public function addToFavorite(Request $request){
        $data = $this->store->AddToFavorite($request);
        if ($data){
            ResponseNow('1', 'favorite successfully added', null, 200);
        }
    }
    public function cart(){
        $cart = $this->store->cart();
        ResponseNow('1', 'Cart Detail is ', $cart, 200);
    }
    public  function addToCart(CartRequest $request){
       $data=$this->store->AddToCart($request);
        if ($data){
            ResponseNow('1', 'Cart item successfully added', null, 200);
        }
    }
    public function order(Request $request){
        $data=$this->store->order($request);
        if ($data){
            ResponseNow('1', 'Order placed Successfully', null, 200);
        }
    }

}
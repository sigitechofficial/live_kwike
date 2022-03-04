<?php

namespace App\Repositories\ProductRepository;

use App\Http\Resources\UserResource;
use App\Models\AppSetting;
use App\Models\Role;
use App\Models\User;
use App\Repositories\ProductRepository\ProductRepositoryInterface;
use App\Http\Requests\RegisterRequest;
use App\Models\Product;
use App\Models\ProductStore;
use App\Models\UserRole;
use App\Models\UserStore;
use App\Traits\CreateStripeCustomerTrait;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;


class ProductRepository implements ProductRepositoryInterface
{

    public function select($product_id){
        $user_id = Auth::user()->id;
        $store_id = User::where('id',$user_id)->has('store')->with('store')->first()->store->first()->id;
        
        $check_product_store = ProductStore::where('store_id',$store_id)->where('product_id',$product_id)->first();
        
        if($check_product_store == null){
            $product_store = ProductStore::create([
                'product_id' => $product_id,
                'store_id' => $store_id,
                'stock' => '0',
            ]);
        }
        else{
            $product_store = $check_product_store;
        }
        return $product_store;
    }
    
    public function deselect($product_id){
        $user_id = Auth::user()->id;
        $store_id = User::where('id',$user_id)->has('store')->with('store')->first()->store->first()->id;
        
        $check_product_store = ProductStore::where('store_id',$store_id)->where('product_id',$product_id)->first();
        
        if($check_product_store != null){
            $check_product_store->delete();
            
            // $check_product_store->active = 0;
            // $check_product_store->save();
            
        }
        return 0;
    }

}

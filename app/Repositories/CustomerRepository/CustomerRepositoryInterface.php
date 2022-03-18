<?php

namespace App\Repositories\CustomerRepository;

use App\Http\Requests\HomeRequest;
use Illuminate\Http\Request;


interface CustomerRepositoryInterface {

    public function getNearestStore($request);
    public function subCategoriesProduct($request);
    public function productDetail($store_product_id);
    public function favorites($request);
    public function addToFavorite($request);
    public function removeFavorite($request);
    public function addToCart($request);
    public function Cart();
    public function order($request);
    public function paymentMethods();
    public function applyVoucher($request);
    public function storeSearch($request);
    public function ordersList($request);
    public function orderDetail($request);
    public function searchKeywordList();
    public function SearchProducts($request);

}

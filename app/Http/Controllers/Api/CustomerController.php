<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\CartRequest;
use App\Http\Requests\FavoriteRequest;
use App\Http\Requests\HomeRequest;
use App\Http\Requests\OrderDetailRequest;
use App\Http\Requests\OrderListRequest;
use App\Http\Requests\OrderPlaceRequest;
use App\Http\Requests\SearchProductsRequest;
use App\Http\Requests\VoucherRequest;
use App\Repositories\CustomerRepository\CustomerRepository;
use App\Repositories\CustomerRepository\CustomerRepositoryInterface;
use App\Repositories\StoreRepository\StoreRepositoryInterface;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public $customer;

    public function __construct(CustomerRepositoryInterface $customer)
    {
        $this->customer = $customer;
    }

    public function homeCategories(HomeRequest $request)
    {
        $data = $this->customer->getNearestStore($request);
        ResponseNow('1', 'welcome to ' . $data['store']->name, $data, 200);
    }
    public function storeSearch(HomeRequest $request){
        $data = $this->customer->storeSearch($request);
        ResponseNow('1', 'Store exists', $data, 200);
    }

    public function subCategoriesProduct(Request $request)
    {

        $data = $this->customer->subCategoriesProduct($request);
        ResponseNow('1', 'Category with products ', $data, 200);

    }

    public function productDetail($product_store_id)
    {
        $data = $this->customer->productDetail($product_store_id);
        ResponseNow('1', 'Product detail ', $data, 200);
    }

    public function favorites(FavoriteRequest $request)
    {
        $data = $this->customer->favorites($request);

        ResponseNow('1', 'Favorite list is ', $data, 200);
    }

    public function addToFavorite(Request $request)
    {
        $data = $this->customer->AddToFavorite($request);
        if ($data) {
            ResponseNow('1', 'favorite successfully added', [], 200);
        }
    }

    public function removeFavorite(Request $request)
    {
        $data = $this->customer->removeFavorite($request);
        if ($data) {
            ResponseNow('1', 'favorite successfully remove', [], 200);
        }
    }

    public function cart()
    {
        $cart = $this->customer->cart();
        ResponseNow('1', 'Cart Detail is ', $cart, 200);
    }

    public function addToCart(CartRequest $request)
    {

        $data = $this->customer->AddToCart($request);
        if ($data == 0) {
            errorResponse('0', 'Something went wrong', ['No product in the list'], 200);
        }
        ResponseNow('1', 'products added to cart successfully', $data, 200);
    }

    public function applyVoucher(VoucherRequest $request){
        $data = $this->customer->applyVoucher($request);
        ResponseNow('1', 'Voucher applied successfully', $data, 200);
    }

    public function paymentMethods()
    {
        $data = $this->customer->paymentMethods();
        ResponseNow('1', 'Applicable payment methods list', $data, 200);

    }

    public function order(OrderPlaceRequest $request)
    {
        $data = $this->customer->order($request);
        if ($data) {
            ResponseNow('1', 'Order placed Successfully', $data, 200);
        }
    }
    public function ordersList(OrderListRequest $request){
        $orders=$this->customer->ordersList($request);
        ResponseNow('1', 'List for '.$request->status.' orders', $orders, 200);

    }
    public function orderDetail(OrderDetailRequest $request){
        $order=$this->customer->orderDetail($request);
        ResponseNow('1', 'Order detail is', $order, 200);
    }
    public function searchProducts(SearchProductsRequest $request){
        $searchProducts=$this->customer->SearchProducts($request);
        ResponseNow('1', 'Searched Products list', $searchProducts, 200);
    }
    public function searchKeywordList(){
        $keywords=$this->customer->searchKeywordList();
        ResponseNow('1', 'Searched keyword list', $keywords, 200);
    }
}

<?php

namespace App\Http\Controllers\Retailer;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\ProductStore;
use App\Models\Store;
use App\Models\User;
use App\Models\UserStore;
use App\Repositories\ProductRepository\ProductRepositoryInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    public $product;

    public function __construct(ProductRepositoryInterface $product)
    {
        $this->product = $product;
    }

    public function select($product_id){
        $this->product->select($product_id);
        return redirect()->back()->with('info',"Product Added");
    }
    
    public function deselect($product_id){
        $this->product->deselect($product_id);
        return redirect()->back()->with('info',"Product Removed");
    }

    public function selected(){
        $store = Auth::user()->store->first();
        $products = Product::has('productStore')->with('productStore')->with('productStore.products')->get();
        $store_id = $store->id;
        return view('retailer.pages.products.index')->with('products',$products)->with('store_id',$store_id);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::with('productStore')->with('productStore.products')->get();
        $store_id = Auth::user()->store->first()->id;
        return view('retailer.pages.products.index')->with('products',$products)->with('store_id',$store_id);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

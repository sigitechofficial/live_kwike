<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Nutrition;
use App\Models\ProductNutrition;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductNutritionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Product $product)
    {
        $nutritions = Nutrition::all();
        $product_nutritions = ProductNutrition::where('product_id',$product->id)->get();        
        return view('admin.pages.product_nutrition.index')->with('product',$product)->with('product_nutritions',$product_nutritions)->with('nutritions',$nutritions);
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
        // dd($request->all());
        $data = $request->except(['_token']);
        $product_nutrition = ProductNutrition::create($data);
        if($product_nutrition){
            return redirect()->back()->with('info','New Product Nutrition Added');
        }
        else{
            return redirect()->back()->with('danger','Something went wrong');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ProductNutrition  $productNutrition
     * @return \Illuminate\Http\Response
     */
    public function show(ProductNutrition $productNutrition)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ProductNutrition  $productNutrition
     * @return \Illuminate\Http\Response
     */
    public function edit(ProductNutrition $productNutrition)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ProductNutrition  $productNutrition
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ProductNutrition $productNutrition)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ProductNutrition  $productNutrition
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $productNutrition = ProductNutrition::find($request->id);
        if($productNutrition->delete()){
            return redirect()->back()->with('info','Product Nutrition Deleted');
        }
        else{
            return redirect()->back()->with('danger','Something went wrong');
        }
    }
}

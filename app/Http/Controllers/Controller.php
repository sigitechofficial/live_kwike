<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\Category;
use App\Models\Product;
use App\Models\User;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    
    public function home(){
        $categories = Category::where('active','1')->count();
        $products = Product::where('active','1')->count();
        $users = User::where('id','>','0')->count();
        $drivers = User::where('id','>','0')->whereHas('user_role.role', function ($query) {$query->where('name', '=', 'driver');})->with('user_role.role')->count();
        
        return view('admin.pages.home')
                        ->with('drivers',$drivers)
                        ->with('users',$users)
                        ->with('products',$products)
                        ->with('categories',$categories);
    }
}

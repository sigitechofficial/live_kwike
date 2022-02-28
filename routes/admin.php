<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\DriverController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\NutritionController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\ProductNutritionController;
use App\Http\Controllers\Admin\ProductTagController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\StoreController;
use App\Http\Controllers\Admin\TagController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\UserRoleController;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Clear Cache facade value:
Route::get('/clear', function() {
    $exitCode = Artisan::call('cache:clear');
    $exitCode = Artisan::call('optimize');
    $exitCode = Artisan::call('route:cache');
    $exitCode = Artisan::call('route:clear');
    $exitCode = Artisan::call('view:clear');
    $exitCode = Artisan::call('config:cache');
    $exitCode = Artisan::call('config:clear');
return '<h1>Cache facade value cleared</h1>';
});


Route::prefix("admin")->group( function (){
    Route::get('/', function () {
        return view('admin.pages.auth.login');
    });
    
    Route::get('/login', function () {
        return view('admin.pages.auth.login');
    })->name('admin/login');
    
    Route::get('/forget_password', function () {
        return view('admin.pages.auth.forget_password');
    })->name('forget_password');
    
    Route::get('/home', [HomeController::class,'index'])->name('admin/home');
    
    Route::get('/users_list', function () {
        return view('admin.pages.users.users_list');
    })->name('users_list');
    
    
    Route::get('/users', [UserController::class, "index"])->name('user.index');
    Route::get('/user', [UserController::class, "show"])->name('user.show');
    Route::get('/user/edit/{id}', [UserController::class, "edit"])->name('user.edit');
    Route::get('/user/create', [UserController::class, "create"])->name('user.create');
    Route::post('/update_user/{id}', [UserController::class, "update"])->name('user.update');
    Route::post('/user/store', [UserController::class, "store"])->name('user.store');
    
    Route::get('/roles', [RoleController::class, "index"])->name('roles.index');
    Route::get('/roles/create', [RoleController::class, "create"])->name('roles.create');
    Route::post('/roles/store', [RoleController::class, "store"])->name('roles.store');
    Route::get('/roles/edit/{id}', [RoleController::class, "edit"])->name('roles.edit');
    Route::post('/roles/update/{id}', [RoleController::class, "update"])->name('roles.update');
    Route::post('/roles/delete', [RoleController::class, "delete"])->name('roles.delete');
    
    Route::get('/user/roles/create', [UserRoleController::class, "create"])->name('userroles.create');
    Route::post('/user/roles/store', [UserRoleController::class, "store"])->name('userroles.store');
    
    Route::get('/change_user_status', [UserController::class, 'change_user_status'])->name('change_user_status');
    
    Route::get('/drivers', [DriverController::class, "index"])->name('driver.index');
    Route::get('/edit_driver', [DriverController::class, "edit"])->name('edit_driver');
    Route::get('/orders_by_drivers', [DriverController::class, "show"])->name('orders_by_drivers');
    Route::post('/update_driver/{id}', [DriverController::class, "update"])->name('driver.update');
    
    Route::get('/tags',[TagController::class, "index"])->name('tags.index');
    Route::get('/tags/create',[TagController::class, "create"])->name('tags.create');
    Route::get('/tags/edit/{id}',[TagController::class, "edit"])->name('tags.edit');
    Route::post('/tags/update/{id}',[TagController::class, "update"])->name('tags.update');
    Route::post('/tags/destroy/{id}',[TagController::class, "destroy"])->name('tags.destroy');
    Route::post('/tags/store',[TagController::class, "store"])->name('tags.store');
    
    Route::get('/category', [CategoryController::class, "index"])->name('category.index');
    Route::get('/category/change/{id}', [CategoryController::class, "change"])->name('category.change.status');
    
    Route::get('/category/create', [CategoryController::class, "create"])->name('category.create');
    Route::get('/category/create/sub', [CategoryController::class, "create_sub"])->name('category.create.sub');
    Route::get('/category/create/sub/sub', [CategoryController::class, "create_sub_sub"])->name('category.create.sub.sub');
    Route::get('/category_get', [CategoryController::class, "get_sub_category"])->name('category.get');
    
    Route::post('/category/store', [CategoryController::class, "store"])->name('category.store');
    Route::get('/load_sub_category', [CategoryController::class, "load_sub"])->name('category.load_sub');
    Route::post('/view_sub_category', [CategoryController::class, "view_sub"])->name('category.view_sub');
    Route::get('/category/edit/{category}', [CategoryController::class, "edit"])->name('category.edit');
    Route::post('/category/update/{category}', [CategoryController::class, "update"])->name('category.update');
    Route::get('/category/{category}', [CategoryController::class, "show"])->name('category.show');
    Route::get('/category/{category}/{sub_category}', [CategoryController::class, "show_sub"])->name('category.show.sub');
    
    Route::get('/products', [ProductController::class, "index"])->name('products');
    Route::get('/products_create', [ProductController::class, "create"])->name('products.create');
    Route::post('/products_store', [ProductController::class, "store"])->name('products.store');
    Route::post('/products_store/destroy/{id}', [ProductController::class, "destroy"])->name('products.destroy');
    Route::get('/edit_products', [ProductController::class, "edit"])->name('edit_products');
    
    Route::get('/nutritions', [NutritionController::class, "index"])->name('nutritions.index');
    Route::get('/nutritions/deleted', [NutritionController::class, "deleted"])->name('nutritions.deleted');
    Route::post('/nutritions/restore/{id}', [NutritionController::class, "restore"])->name('nutritions.restore');
    Route::post('/nutritions/delete/{id}', [NutritionController::class, "hardDelete"])->name('nutritions.hard.delete');
    Route::get('/nutritions/create', [NutritionController::class, "create"])->name('nutritions.create');
    Route::post('/nutritions/store', [NutritionController::class, "store"])->name('nutritions.store');
    Route::get('/nutritions/edit/{id}', [NutritionController::class, "edit"])->name('nutritions.edit');
    Route::post('/nutritions/update/{id}', [NutritionController::class, "update"])->name('nutritions.update');
    Route::post('/nutritions/destroy/{id}', [NutritionController::class, "destroy"])->name('nutritions.destroy');
    
    Route::get('/products_nutrition/{product}', [ProductNutritionController::class, "index"])->name('nutrition.index');
    Route::post('/products_nutrition/store', [ProductNutritionController::class, "store"])->name('nutrition.store');
    Route::post('/products_nutrition/destroy', [ProductNutritionController::class, "destroy"])->name('nutrition.destroy');
    
    Route::get('/products_tag/{product}', [ProductTagController::class, "index"])->name('tag.index');
    Route::post('/products_tag/store', [ProductTagController::class, "store"])->name('tag.store');
    Route::post('/products_tag/destroy', [ProductTagController::class, "destroy"])->name('tag.destroy');
    
    Route::get('/retailers', [StoreController::class, "index"])->name('retailers.index');
    
    
    
    Route::get('/edit_user', function () {
        return view('admin.pages.users.edit_user');
    })->name('edit_user');
    
    Route::get('/view_userorderhistory', function () {
        return view('admin.pages.users.view_userorderhistory');
    })->name('view_userorderhistory');

});
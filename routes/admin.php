<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\DriverController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\NutritionController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\ProductNutritionController;
use App\Http\Controllers\Admin\ProductTagController;
use App\Http\Controllers\Admin\TagController;
use App\Http\Controllers\Admin\UserController;
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

Route::get('/admin', function () {
    return view('admin.pages.auth.login');
});

Route::get('admin/login', function () {
    return view('admin.pages.auth.login');
})->name('admin/login');

Route::get('admin/forget_password', function () {
    return view('admin.pages.auth.forget_password');
})->name('forget_password');

Route::get('admin/home', [HomeController::class,'index'])->name('admin/home');

Route::get('admin/users_list', function () {
    return view('admin.pages.users.users_list');
})->name('users_list');


Route::get('admin/users', [UserController::class, "index"])->name('user.index');
Route::get('admin/user', [UserController::class, "show"])->name('user.show');
Route::get('admin/user/edit/{id}', [UserController::class, "edit"])->name('user.edit');
Route::get('admin/user/create', [UserController::class, "create"])->name('user.create');
Route::post('admin/update_user/{id}', [UserController::class, "update"])->name('user.update');

Route::get('admin/change_user_status', [UserController::class, 'change_user_status'])->name('change_user_status');

Route::get('admin/drivers', [DriverController::class, "index"])->name('driver.index');
Route::get('admin/edit_driver', [DriverController::class, "edit"])->name('edit_driver');
Route::get('admin/orders_by_drivers', [DriverController::class, "show"])->name('orders_by_drivers');
Route::post('admin/update_driver/{id}', [DriverController::class, "update"])->name('driver.update');

Route::get('admin/tags',[TagController::class, "index"])->name('tags.index');
Route::get('admin/tags/create',[TagController::class, "create"])->name('tags.create');
Route::get('admin/tags/edit/{id}',[TagController::class, "edit"])->name('tags.edit');
Route::post('admin/tags/update/{id}',[TagController::class, "update"])->name('tags.update');
Route::post('admin/tags/destroy/{id}',[TagController::class, "destroy"])->name('tags.destroy');
Route::post('admin/tags/store',[TagController::class, "store"])->name('tags.store');

Route::get('admin/category', [CategoryController::class, "index"])->name('category.index');
Route::get('admin/category/change/{id}', [CategoryController::class, "change"])->name('category.change.status');

Route::get('admin/category/create', [CategoryController::class, "create"])->name('category.create');
Route::get('admin/category/create/sub', [CategoryController::class, "create_sub"])->name('category.create.sub');
Route::get('admin/category/create/sub/sub', [CategoryController::class, "create_sub_sub"])->name('category.create.sub.sub');
Route::get('admin/category_get', [CategoryController::class, "get_sub_category"])->name('category.get');

Route::post('admin/category/store', [CategoryController::class, "store"])->name('category.store');
Route::get('admin/load_sub_category', [CategoryController::class, "load_sub"])->name('category.load_sub');
Route::post('admin/view_sub_category', [CategoryController::class, "view_sub"])->name('category.view_sub');
Route::get('admin/category/edit/{category}', [CategoryController::class, "edit"])->name('category.edit');
Route::post('admin/category/update/{category}', [CategoryController::class, "update"])->name('category.update');
Route::get('admin/category/{category}', [CategoryController::class, "show"])->name('category.show');
Route::get('admin/category/{category}/{sub_category}', [CategoryController::class, "show_sub"])->name('category.show.sub');

Route::get('admin/products', [ProductController::class, "index"])->name('products');
Route::get('admin/products_create', [ProductController::class, "create"])->name('products.create');
Route::post('admin/products_store', [ProductController::class, "store"])->name('products.store');
Route::post('admin/products_store/destroy/{id}', [ProductController::class, "destroy"])->name('products.destroy');
Route::get('admin/edit_products', [ProductController::class, "edit"])->name('edit_products');

Route::get('admin/nutritions', [NutritionController::class, "index"])->name('nutritions.index');
Route::get('admin/nutritions/deleted', [NutritionController::class, "deleted"])->name('nutritions.deleted');
Route::post('admin/nutritions/restore/{id}', [NutritionController::class, "restore"])->name('nutritions.restore');
Route::post('admin/nutritions/delete/{id}', [NutritionController::class, "hardDelete"])->name('nutritions.hard.delete');
Route::get('admin/nutritions/create', [NutritionController::class, "create"])->name('nutritions.create');
Route::post('admin/nutritions/store', [NutritionController::class, "store"])->name('nutritions.store');
Route::get('admin/nutritions/edit/{id}', [NutritionController::class, "edit"])->name('nutritions.edit');
Route::post('admin/nutritions/update/{id}', [NutritionController::class, "update"])->name('nutritions.update');
Route::post('admin/nutritions/destroy/{id}', [NutritionController::class, "destroy"])->name('nutritions.destroy');

Route::get('admin/products_nutrition/{product}', [ProductNutritionController::class, "index"])->name('nutrition.index');
Route::post('admin/products_nutrition/store', [ProductNutritionController::class, "store"])->name('nutrition.store');
Route::post('admin/products_nutrition/destroy', [ProductNutritionController::class, "destroy"])->name('nutrition.destroy');

Route::get('admin/products_tag/{product}', [ProductTagController::class, "index"])->name('tag.index');
Route::post('admin/products_tag/store', [ProductTagController::class, "store"])->name('tag.store');
Route::post('admin/products_tag/destroy', [ProductTagController::class, "destroy"])->name('tag.destroy');

Route::get('admin/all_retailer', [App\Http\Controllers\StoreController::class, "index"])->name('all_retailer');



Route::get('admin/edit_user', function () {
    return view('admin.pages.users.edit_user');
})->name('edit_user');

Route::get('admin/view_userorderhistory', function () {
    return view('admin.pages.users.view_userorderhistory');
})->name('view_userorderhistory');











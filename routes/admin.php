<?php

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
})->name('login');

Route::get('admin/forget_password', function () {
    return view('admin.pages.auth.forget_password');
})->name('forget_password');

Route::get('admin/home', function () {
    return view('admin.pages.home');
})->name('admin/home');

Route::get('admin/users_list', function () {
    return view('admin.pages.users.users_list');
})->name('users_list');


Route::get('admin/all_user', [App\Http\Controllers\UserController::class, "index"])->name('all_user');
Route::get('admin/user', [App\Http\Controllers\UserController::class, "show"])->name('user.show');
Route::get('admin/user_edit', [App\Http\Controllers\UserController::class, "edit"])->name('user.edit');
Route::get('admin/add_user', [App\Http\Controllers\UserController::class, "create"])->name('add_user');
Route::post('admin/update_user/{id}', [App\Http\Controllers\UserController::class, "update"])->name('user.update');

Route::get('admin/change_user_status', [App\Http\Controllers\UserController::class, 'change_user_status'])->name('change_user_status');

Route::get('admin/all_drivers', [App\Http\Controllers\DriverController::class, "index"])->name('all_drivers');
Route::get('admin/edit_driver', [App\Http\Controllers\DriverController::class, "edit"])->name('edit_driver');
Route::get('admin/orders_by_drivers', [App\Http\Controllers\DriverController::class, "show"])->name('orders_by_drivers');
Route::post('admin/update_driver/{id}', [App\Http\Controllers\DriverController::class, "update"])->name('driver.update');

Route::get('admin/category', [App\Http\Controllers\CategoryController::class, "index"])->name('category.index');

Route::get('admin/category/create', [App\Http\Controllers\CategoryController::class, "create"])->name('category.create');
Route::get('admin/category/create/sub', [App\Http\Controllers\CategoryController::class, "create_sub"])->name('category.create.sub');
Route::get('admin/category/create/sub/sub', [App\Http\Controllers\CategoryController::class, "create_sub_sub"])->name('category.create.sub.sub');
Route::get('admin/category_get', [App\Http\Controllers\CategoryController::class, "get_sub_category"])->name('category.get');

Route::post('admin/category/store', [App\Http\Controllers\CategoryController::class, "store"])->name('category.store');
Route::get('admin/load_sub_category', [App\Http\Controllers\CategoryController::class, "load_sub"])->name('category.load_sub');
Route::post('admin/view_sub_category', [App\Http\Controllers\CategoryController::class, "view_sub"])->name('category.view_sub');
Route::get('admin/category/edit/{category}', [App\Http\Controllers\CategoryController::class, "edit"])->name('category.edit');
Route::post('admin/category/update/{category}', [App\Http\Controllers\CategoryController::class, "update"])->name('category.update');
Route::get('admin/category/{category}', [App\Http\Controllers\CategoryController::class, "show"])->name('category.show');
Route::get('admin/category/{category}/{sub_category}', [App\Http\Controllers\CategoryController::class, "show_sub"])->name('category.show.sub');

Route::get('admin/all_retailer', [App\Http\Controllers\StoreController::class, "index"])->name('all_retailer');

Route::get('admin/products', [App\Http\Controllers\ProductController::class, "index"])->name('products');
Route::get('admin/products_create', [App\Http\Controllers\ProductController::class, "create"])->name('products.create');
Route::post('admin/products_store', [App\Http\Controllers\ProductController::class, "store"])->name('products.store');
Route::get('admin/edit_products', [App\Http\Controllers\ProductController::class, "edit"])->name('edit_products');

Route::get('admin/products_nutrition/{product}', [App\Http\Controllers\ProductNutritionController::class, "index"])->name('nutrition.index');
Route::post('admin/products_nutrition/store', [App\Http\Controllers\ProductNutritionController::class, "store"])->name('nutrition.store');
Route::post('admin/products_nutrition/destroy', [App\Http\Controllers\ProductNutritionController::class, "destroy"])->name('nutrition.destroy');

Route::get('admin/edit_user', function () {
    return view('admin.pages.users.edit_user');
})->name('edit_user');

Route::get('admin/view_userorderhistory', function () {
    return view('admin.pages.users.view_userorderhistory');
})->name('view_userorderhistory');











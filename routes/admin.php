<?php

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

Route::get('/', function () {
    return view('auth/login');
});

Route::get('login', function () {
    return view('auth/login');
})->name('login');

Route::get('forget_password', function () {
    return view('auth/forget_password');
})->name('forget_password');

Route::get('admin/home', function () {
    return view('admin/home');
})->name('admin/home');

Route::get('users_list', function () {
    return view('users/users_list');
})->name('users_list');




// apny waly new ye hen 

// Route::get('/', function () {
//     return view('loginandforget/login');
// });

Route::get('addup_inventory', function () {
    return view('inventoryproduct/addup_inventory');
})->name('addup_inventory');

Route::get('category_management', function () {
    return view('inventoryproduct/category_management');
})->name('category_management');

Route::get('postcode_based', function () {
    return view('areaselectallocation/postcode_based');
})->name('postcode_based');

Route::get('map_selection', function () {
    return view('areaselectallocation/map_selection');
})->name('map_selection');

Route::get('autocustomer_invoices', function () {
    return view('invoicesandchargesmanagement/autocustomer_invoices');
})->name('autocustomer_invoices');

Route::get('invoices', function () {
    return view('invoicesandchargesmanagement/invoices');
})->name('invoices');

Route::get('addvoucher_referralcodes', function () {
    return view('vouchersandreferralcodes/addvoucher_referralcodes');
})->name('addvoucher_referralcodes');

Route::get('all_referralcode', function () {
    return view('vouchersandreferralcodes/all_referralcode');
})->name('all_referralcode');

Route::get('edit_promocode', function () {
    return view('vouchersandreferralcodes/edit_promocode');
})->name('edit_promocode');

Route::get('run_reports', function () {
    return view('reports/run_reports');
})->name('run_reports');

Route::get('deductions', function () {
    return view('settings/deductions');
})->name('deductions');

Route::get('push_notifications', function () {
    return view('settings/push_notifications');
})->name('push_notifications');

Route::get('sms_integration', function () {
    return view('settings/sms_integration');
})->name('sms_integration');

Route::get('payment_integration', function () {
    return view('settings/payment_integration');
})->name('payment_integration');

Route::get('auto_release_payment', function () {
    return view('releasepayment/auto_release_payment');
})->name('auto_release_payment');

Route::get('send_notifications', function () {
    return view('pushnotifications/send_notifications');
})->name('send_notifications');





Route::get('mark_products', function () {
    return view('inventoryproducts/mark_products');
})->name('mark_products');


Route::get('add_sub_category', function () {
    return view('categorymanagement/add_sub_category');
})->name('add_sub_category');


Route::get('assign_category', function () {
    return view('categorymanagement/assign_category');
})->name('assign_category');

Route::get('update_change_store_information', function () {
    return view('settingsnew/update_change_store_information');
})->name('update_change_store_information');

Route::get('adds_driver', function () {
    return view('drivermanagement/adds_driver');
})->name('adds_driver');



Route::get('order_details', function () {
    return view('orders/order_details');
})->name('order_details');

Route::get('order_status', function () {
    return view('orders/order_status');
})->name('order_status');

Route::get('order_time', function () {
    return view('orders/order_time');
})->name('order_time');

Route::get('routes', function () {
    return view('gps/routes');
})->name('routes');

Route::get('update_info', function () {
    return view('settingnew/update_info');
})->name('update_info');

Route::get('new_order', function () {
    return view('activitypushnotifications/new_order');
})->name('new_order');

// Route::get('login', function () {
//     return view('authentication/login');
// })->name('login');

Route::get('landing_page', function () {
    return view('dashboardlandingpage/landing_page');
})->name('landing_page');

Route::get('main_navigation', function () {
    return view('dashboardlandingpage/main_navigation');
})->name('main_navigation');

Route::get('signup', function () {
    return view('retailermanagement/signup');
})->name('signup');

Route::get('registeration', function () {
    return view('retailermanagement/registeration');
})->name('registeration');

Route::get('add_retail', function () {
    return view('retailmanagement/add_retail');
})->name('add_retail');



Route::get('pending_retailer', function () {
    return view('retailmanagement/pending_retailer');
})->name('pending_retailer');

Route::get('demo', function () {
    return view('retailmanagement/demo');
})->name('demo');

Route::get('pending_retailerview', function () {
    return view('retailmanagement/pending_retailerview');
})->name('pending_retailerview');

Route::get('orderstabs', function () {
    return view('retailmanagement/orderstabs');
})->name('orderstabs');

Route::get('referral_code', function () {
    return view('vouchersandreferralcodes/referral_code');
})->name('referral_code');

Route::get('all_vouchers', function () {
    return view('vouchersandreferralcodes/all_vouchers');
})->name('all_vouchers');

Route::get('edit_vouchers', function () {
    return view('vouchersandreferralcodes/edit_vouchers');
})->name('edit_vouchers');

Route::get('settings', function () {
    return view('settings');
})->name('settings');

Route::get('front_end_settings', function () {
    return view('front_end_settings');
})->name('front_end_settings');




Route::get('driver_pendingrequests', function () {
    return view('drivermanagement/driver_pendingrequests');
})->name('driver_pendingrequests');

Route::get('add_news', function () {
    return view('Newsroom/add_news');
})->name('add_news');

Route::get('all_news', function () {
    return view('Newsroom/all_news');
})->name('all_news');

Route::get('retailer_earnings', function () {
    return view('earnings/retailer_earnings');
})->name('retailer_earnings');

Route::get('driver_earnings', function () {
    return view('earnings/driver_earnings');
})->name('driver_earnings');

Route::get('restaurants_earnings_viewdetail', function () {
    return view('earnings/restaurants_earnings_viewdetail');
})->name('restaurants_earnings_viewdetail');

Route::get('driver_earnings', function () {
    return view('earnings/driver_earnings');
})->name('driver_earnings');

Route::get('customer_notifications', function () {
    return view('pushnotifications/customer_notifications');
})->name('customer_notifications');

Route::get('driver_notifications', function () {
    return view('pushnotifications/driver_notifications');
})->name('driver_notifications');

Route::get('retailer_notifications', function () {
    return view('pushnotifications/retailer_notifications');
})->name('retailer_notifications');

Route::get('forgotpassword', function () {
    return view('loginandforget/forgotpassword');
})->name('forgotpassword');


Route::get('all_user', [App\Http\Controllers\UserController::class, "index"])->name('all_user');
Route::get('user', [App\Http\Controllers\UserController::class, "show"])->name('user.show');
Route::get('user_edit', [App\Http\Controllers\UserController::class, "edit"])->name('user.edit');
Route::get('add_user', [App\Http\Controllers\UserController::class, "create"])->name('add_user');
Route::post('update_user/{id}', [App\Http\Controllers\UserController::class, "update"])->name('user.update');

Route::get('change_user_status', [App\Http\Controllers\UserController::class, 'change_user_status'])->name('change_user_status');

Route::get('all_drivers', [App\Http\Controllers\DriverController::class, "index"])->name('all_drivers');
Route::get('edit_driver', [App\Http\Controllers\DriverController::class, "edit"])->name('edit_driver');
Route::get('orders_by_drivers', [App\Http\Controllers\DriverController::class, "show"])->name('orders_by_drivers');
Route::post('update_driver/{id}', [App\Http\Controllers\DriverController::class, "update"])->name('driver.update');

Route::get('category', [App\Http\Controllers\CategoryController::class, "index"])->name('category.index');

Route::get('category/create', [App\Http\Controllers\CategoryController::class, "create"])->name('category.create');
Route::get('category/create/sub', [App\Http\Controllers\CategoryController::class, "create_sub"])->name('category.create.sub');
Route::get('category/create/sub/sub', [App\Http\Controllers\CategoryController::class, "create_sub_sub"])->name('category.create.sub.sub');
Route::get('category_get', [App\Http\Controllers\CategoryController::class, "get_sub_category"])->name('category.get');

Route::post('category/store', [App\Http\Controllers\CategoryController::class, "store"])->name('category.store');
Route::get('load_sub_category', [App\Http\Controllers\CategoryController::class, "load_sub"])->name('category.load_sub');
Route::post('view_sub_category', [App\Http\Controllers\CategoryController::class, "view_sub"])->name('category.view_sub');
Route::get('category/edit/{category}', [App\Http\Controllers\CategoryController::class, "edit"])->name('category.edit');
Route::post('category/update/{category}', [App\Http\Controllers\CategoryController::class, "update"])->name('category.update');
Route::get('category/{category}', [App\Http\Controllers\CategoryController::class, "show"])->name('category.show');
Route::get('category/{category}/{sub_category}', [App\Http\Controllers\CategoryController::class, "show_sub"])->name('category.show.sub');

Route::get('all_retailer', [App\Http\Controllers\StoreController::class, "index"])->name('all_retailer');

Route::get('products', [App\Http\Controllers\ProductController::class, "index"])->name('products');
Route::get('products_create', [App\Http\Controllers\ProductController::class, "create"])->name('products.create');
Route::post('products_store', [App\Http\Controllers\ProductController::class, "store"])->name('products.store');
Route::get('edit_products', [App\Http\Controllers\ProductController::class, "edit"])->name('edit_products');

Route::get('products_nutrition/{product}', [App\Http\Controllers\ProductNutritionController::class, "index"])->name('nutrition.index');
Route::post('products_nutrition/store', [App\Http\Controllers\ProductNutritionController::class, "store"])->name('nutrition.store');
Route::post('products_nutrition/destroy', [App\Http\Controllers\ProductNutritionController::class, "destroy"])->name('nutrition.destroy');

Route::get('edit_user', function () {
    return view('users/edit_user');
})->name('edit_user');

Route::get('view_userorderhistory', function () {
    return view('users/view_userorderhistory');
})->name('view_userorderhistory');











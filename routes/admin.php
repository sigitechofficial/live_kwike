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

Route::get('/admin', function () {
    return view('auth/login');
});

Route::get('admin/login', function () {
    return view('admin/auth/login');
})->name('login');

Route::get('admin/forget_password', function () {
    return view('admin/auth/forget_password');
})->name('forget_password');

Route::get('admin/home', function () {
    return view('admin/admin/home');
})->name('admin/home');

Route::get('admin/users_list', function () {
    return view('admin/users/users_list');
})->name('users_list');




// apny waly new ye hen 

// Route::get('/', function () {
//     return view('loginandforget/login');
// });

Route::get('admin/addup_inventory', function () {
    return view('admin/inventoryproduct/addup_inventory');
})->name('addup_inventory');

Route::get('admin/category_management', function () {
    return view('admin/inventoryproduct/category_management');
})->name('category_management');

Route::get('admin/postcode_based', function () {
    return view('admin/areaselectallocation/postcode_based');
})->name('postcode_based');

Route::get('admin/map_selection', function () {
    return view('admin/areaselectallocation/map_selection');
})->name('map_selection');

Route::get('admin/autocustomer_invoices', function () {
    return view('admin/invoicesandchargesmanagement/autocustomer_invoices');
})->name('autocustomer_invoices');

Route::get('admin/invoices', function () {
    return view('admin/invoicesandchargesmanagement/invoices');
})->name('invoices');

Route::get('admin/addvoucher_referralcodes', function () {
    return view('admin/vouchersandreferralcodes/addvoucher_referralcodes');
})->name('addvoucher_referralcodes');

Route::get('admin/all_referralcode', function () {
    return view('admin/vouchersandreferralcodes/all_referralcode');
})->name('all_referralcode');

Route::get('admin/edit_promocode', function () {
    return view('admin/vouchersandreferralcodes/edit_promocode');
})->name('edit_promocode');

Route::get('admin/run_reports', function () {
    return view('admin/reports/run_reports');
})->name('run_reports');

Route::get('admin/deductions', function () {
    return view('admin/settings/deductions');
})->name('deductions');

Route::get('admin/push_notifications', function () {
    return view('admin/settings/push_notifications');
})->name('push_notifications');

Route::get('admin/sms_integration', function () {
    return view('admin/settings/sms_integration');
})->name('sms_integration');

Route::get('admin/payment_integration', function () {
    return view('admin/settings/payment_integration');
})->name('payment_integration');

Route::get('admin/auto_release_payment', function () {
    return view('admin/releasepayment/auto_release_payment');
})->name('auto_release_payment');

Route::get('admin/send_notifications', function () {
    return view('admin/pushnotifications/send_notifications');
})->name('send_notifications');





Route::get('admin/mark_products', function () {
    return view('admin/inventoryproducts/mark_products');
})->name('mark_products');


Route::get('admin/add_sub_category', function () {
    return view('admin/categorymanagement/add_sub_category');
})->name('add_sub_category');


Route::get('admin/assign_category', function () {
    return view('admin/categorymanagement/assign_category');
})->name('assign_category');

Route::get('admin/update_change_store_information', function () {
    return view('admin/settingsnew/update_change_store_information');
})->name('update_change_store_information');

Route::get('admin/adds_driver', function () {
    return view('admin/drivermanagement/adds_driver');
})->name('adds_driver');



Route::get('admin/order_details', function () {
    return view('admin/orders/order_details');
})->name('order_details');

Route::get('admin/order_status', function () {
    return view('admin/orders/order_status');
})->name('order_status');

Route::get('admin/order_time', function () {
    return view('admin/orders/order_time');
})->name('order_time');

Route::get('admin/routes', function () {
    return view('admin/gps/routes');
})->name('routes');

Route::get('admin/update_info', function () {
    return view('admin/settingnew/update_info');
})->name('update_info');

Route::get('admin/new_order', function () {
    return view('admin/activitypushnotifications/new_order');
})->name('new_order');

// Route::get('login', function () {
//     return view('authentication/login');
// })->name('login');

Route::get('admin/landing_page', function () {
    return view('admin/dashboardlandingpage/landing_page');
})->name('landing_page');

Route::get('admin/main_navigation', function () {
    return view('admin/dashboardlandingpage/main_navigation');
})->name('main_navigation');

Route::get('admin/signup', function () {
    return view('admin/retailermanagement/signup');
})->name('signup');

Route::get('admin/registeration', function () {
    return view('admin/retailermanagement/registeration');
})->name('registeration');

Route::get('admin/add_retail', function () {
    return view('admin/retailmanagement/add_retail');
})->name('add_retail');



Route::get('admin/pending_retailer', function () {
    return view('admin/retailmanagement/pending_retailer');
})->name('pending_retailer');

Route::get('admin/demo', function () {
    return view('admin/retailmanagement/demo');
})->name('demo');

Route::get('admin/pending_retailerview', function () {
    return view('admin/retailmanagement/pending_retailerview');
})->name('pending_retailerview');

Route::get('admin/orderstabs', function () {
    return view('admin/retailmanagement/orderstabs');
})->name('orderstabs');

Route::get('admin/referral_code', function () {
    return view('admin/vouchersandreferralcodes/referral_code');
})->name('referral_code');

Route::get('admin/all_vouchers', function () {
    return view('admin/vouchersandreferralcodes/all_vouchers');
})->name('all_vouchers');

Route::get('admin/edit_vouchers', function () {
    return view('admin/vouchersandreferralcodes/edit_vouchers');
})->name('edit_vouchers');

Route::get('admin/settings', function () {
    return view('admin/settings');
})->name('settings');

Route::get('admin/front_end_settings', function () {
    return view('admin/front_end_settings');
})->name('front_end_settings');




Route::get('admin/driver_pendingrequests', function () {
    return view('admin/drivermanagement/driver_pendingrequests');
})->name('driver_pendingrequests');

Route::get('admin/add_news', function () {
    return view('admin/Newsroom/add_news');
})->name('add_news');

Route::get('admin/all_news', function () {
    return view('admin/Newsroom/all_news');
})->name('all_news');

Route::get('admin/retailer_earnings', function () {
    return view('admin/earnings/retailer_earnings');
})->name('retailer_earnings');

Route::get('admin/driver_earnings', function () {
    return view('admin/earnings/driver_earnings');
})->name('driver_earnings');

Route::get('admin/restaurants_earnings_viewdetail', function () {
    return view('admin/earnings/restaurants_earnings_viewdetail');
})->name('restaurants_earnings_viewdetail');

Route::get('admin/driver_earnings', function () {
    return view('admin/earnings/driver_earnings');
})->name('driver_earnings');

Route::get('admin/customer_notifications', function () {
    return view('admin/pushnotifications/customer_notifications');
})->name('customer_notifications');

Route::get('admin/driver_notifications', function () {
    return view('admin/pushnotifications/driver_notifications');
})->name('driver_notifications');

Route::get('admin/retailer_notifications', function () {
    return view('admin/pushnotifications/retailer_notifications');
})->name('retailer_notifications');

Route::get('admin/forgotpassword', function () {
    return view('admin/loginandforget/forgotpassword');
})->name('forgotpassword');


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
    return view('admin/users/edit_user');
})->name('edit_user');

Route::get('admin/view_userorderhistory', function () {
    return view('admin/users/view_userorderhistory');
})->name('view_userorderhistory');











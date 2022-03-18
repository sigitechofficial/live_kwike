<?php

namespace App\Http\Controllers\Api;

use App\Http\Middleware\VerifyAPIAccess;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::group(['middleware' => [VerifyAPIAccess::class, 'throttle:60,1']], function () {

    Route::post('register', [UserController::class, 'store']);
    Route::post('login', [AuthController::class, 'login']);
    Route::post('login/driver', [AuthController::class, 'loginDriver']);

    Route::prefix('guest/user')->group(function () {

        Route::post('home', [CustomerController::class, 'homeCategories']);
        Route::post('store/search', [CustomerController::class, 'storeSearch']);
        Route::get('product/detail/{product_store_id}', [CustomerController::class, 'productDetail']);
        Route::post('category/products', [CustomerController::class, 'subCategoriesProduct']);

    });

    Route::group(['middleware' => ['auth:sanctum']], function () {
        Route::post('update/user', [UserController::class, 'update']);
        Route::post('change_password', [AuthController::class, 'changePassword']);
        Route::post('reset_password', [AuthController::class, 'resetPassword']);
        Route::post('logout', [AuthController::class, 'logout']);
        Route::post('addbank', [BankController::class, 'store']);
        Route::post('getbanks', [BankController::class, 'index']);
        Route::post('updatebank', [BankController::class, 'update']);
        Route::prefix('favorites')->group(function () {
            Route::post('/', [CustomerController::class, 'favorites']);
            Route::post('add', [CustomerController::class, 'addToFavorite']);
            Route::post('remove', [CustomerController::class, 'removeFavorite']);
        });
        Route::prefix('address')->group(function () {
            Route::get('/', [UserController::class, 'userAddress']);
            Route::post('add', [UserController::class, 'addAddress']);
            Route::post('remove', [UserController::class, 'removeAddress']);
        });
        Route::prefix('cart')->group(function () {
            Route::get('/', [CustomerController::class, 'cart']);
            Route::post('add', [CustomerController::class, 'addToCart']);
        });
        Route::prefix('order')->group(function () {
            Route::post('place', [CustomerController::class, 'order'])->name('order.place');
        });
        Route::prefix('stripe')->group(function () {
            Route::get('card/list', [StripeController::class, 'cardList']);
            Route::post('add/card', [StripeController::class, 'addCard']);
            Route::post('remove/card', [StripeController::class, 'removeCard']);
        });
        Route::prefix('driver')->group(function () {
            Route::get('/getorders', [DriverController::class, 'getorders']);
            Route::get('/order/detail', [DriverController::class, 'order_detail']);
            Route::get('/order/accept', [DriverController::class, 'order_accept']);
            Route::get('/order/picked', [DriverController::class, 'order_picked']);
            Route::get('/order/completed', [DriverController::class, 'order_completed']);
        });
        Route::get('payment/methods', [CustomerController::class, 'paymentMethods']);
        Route::post('apply/voucher', [CustomerController::class, 'applyVoucher']);
        Route::prefix('orders')->group(function (){
            Route::post('list', [CustomerController::class, 'ordersList']);
            Route::post('detail', [CustomerController::class, 'orderDetail']);

        });

        Route::prefix('search')->group(function (){
            Route::post('/',[CustomerController::class,'searchProducts'])->name('search');
            Route::get('/list',[CustomerController::class,'searchKeywordList'])->name('search.list');
        });
    });

    Route::prefix('retailer')->group(function () {
        Route::post('login', [AuthController::class, 'RetailerLogin']);
        Route::group(['middleware' => ['auth:sanctum']], function () {
            Route::prefix('orders')->group(function (){
                Route::post('list', [StoreController::class, 'orders']);
                Route::post('detail', [StoreController::class, 'orderDetail']);
                Route::post('busy/mode',[StoreController::class,'busyMode']);
                Route::post('pause',[StoreController::class,'pauseOrders']);
                Route::post('forever/open',[StoreController::class,'foreverOpen']);
            });

        });
    });

});

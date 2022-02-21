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

    Route::prefix('guest/user')->group(function () {

        Route::post('home', [StoreController::class, 'home']);
        Route::get('product/detail/{product_store_id}', [StoreController::class, 'productDetail']);
        Route::post('category/products', [StoreController::class, 'subCategoriesProduct']);

    });

    Route::group(['middleware' => ['auth:sanctum']], function () {
        Route::prefix('favorites')->group(function (){
            Route::post('/', [StoreController::class, 'favorites']);
            Route::post('add', [StoreController::class, 'addToFavorite']);
        });
        Route::prefix('cart')->group(function (){
            Route::get('/',[StoreController::class,'cart']);
            Route::post('add', [StoreController::class, 'addToCart']);
        });
        Route::prefix('order')->group(function (){
            Route::post('place',[StoreController::class,'order'])->name('order.place');
        });
        Route::prefix('stripe')->group(function () {
            Route::get('card/list', [StripeController::class, 'cardList']);
            Route::post('add/card', [StripeController::class, 'addCard']);
            Route::post('removeCard', [StripeController::class, 'removeCard']);
        });
    });
});

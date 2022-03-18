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


    Route::post('login', [AuthController::class, 'RetailerLogin']);
    Route::prefix('orders')->group(function (){
        Route::post('/',[StoreController::class,'orders']);
    });
//    Route::group(['middleware' => ['auth:sanctum']], function () {
//
//    });
});

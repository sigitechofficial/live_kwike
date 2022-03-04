<?php

use App\Http\Controllers\Retailer\AuthController;
use App\Http\Controllers\Retailer\DriverController;
use App\Http\Controllers\Retailer\HomeController;
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

Route::prefix("retailer")->group( function (){

    Route::get('/login', [AuthController::class,'show_login'])->name('retailer/login');
    Route::post('/login', [AuthController::class,'login_check'])->name('retailer/login/check');
    Route::get('/forget_password', [AuthController::class,'show_forgot_password'])->name('retailer/forget_password');
    
    Route::middleware('retailer')->group(function(){
        Route::get('/logout', [AuthController::class,'logout'])->name('retailer/logout');
        Route::get('/', [HomeController::class,'index'])->name('retailer/home');

        Route::prefix('drivers')->group( function (){
            Route::get('/',[DriverController::class,'index'])->name('drivers.index');
            Route::get('/create',[DriverController::class,'create'])->name('drivers.create');
            Route::post('/store',[DriverController::class,'store'])->name('drivers.store');
        });
    });
});
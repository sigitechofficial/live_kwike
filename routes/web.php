<?php

use App\Http\Controllers\Website\FrontEndSettingsController;
use App\Http\Controllers\Website\UserController;
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
Route::get('/clear', function () {
    Artisan::call('cache:clear');
    echo 'clear cache';
});
Route::get('/migrate', function () {
    Artisan::call('migrate');
    Artisan::call('db:seed');
    echo 'migrate run';
});

Route::get('/', function () {
    return view('website.home');
})->name('home');

// Route::get('signup', function () {
//     return view('website.auth.signup');
// })->name('signup');


Route::get('signin', function () {
    return view('website.auth.signin');
})->name('signin');

// Route::get('terms_conditions', function () {
//     return view('terms_conditions');
// })->name('terms_conditions');

// Route::get('privacy_policy', function () {
//     return view('privacy_policy');
// })->name('privacy_policy');


Route::post('signup', [UserController::class, 'create'])->name('signup1');
Route::get('signup', [UserController::class, 'show_driver_signup_form'])->name('signup');
Route::post('driver/signup', [UserController::class, 'driver_signup'])->name('signup.driver');
Route::post('terms_conditions', [FrontEndSettingsController::class, 'create_tnc'])->name('terms_conditions1');
Route::get('terms_conditions', [FrontEndSettingsController::class, 'show_tnc'])->name('terms_conditions');
Route::post('privacy_policy', [FrontEndSettingsController::class, 'create_privacy'])->name('privacy_policy1');
Route::get('privacy_policy', [FrontEndSettingsController::class, 'show_privacy'])->name('privacy_policy');



require __DIR__.'/auth.php';
require __DIR__.'/admin.php';
require __DIR__.'/retailer.php';
require __DIR__.'/website.php';

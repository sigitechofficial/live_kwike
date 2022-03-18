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

//Reoptimized class loader:
Route::get('/optimize', function() {
    $exitCode = Artisan::call('optimize');
    return '<h1>Reoptimized class loader</h1>';
});

//Route cache:
Route::get('/route-cache', function() {
    $exitCode = Artisan::call('route:cache');
    return '<h1>Routes cached</h1>';
});

//Clear Route cache:
Route::get('/route-clear', function() {
    $exitCode = Artisan::call('route:clear');
    return '<h1>Route cache cleared</h1>';
});

//Clear View cache:
Route::get('/view-clear', function() {
    $exitCode = Artisan::call('view:clear');
    return '<h1>View cache cleared</h1>';
});

//Clear Config cache:
Route::get('/config-cache', function() {
    $exitCode = Artisan::call('config:cache');
    return '<h1>Clear Config cleared</h1>';
});


//Clear Config cache:
Route::get('/config-clear', function() {
    $exitCode = Artisan::call('config:clear');
    return '<h1>Clear Config cleared</h1>';
});

// clear routes end here************************** 


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
Route::post('terms_conditions', [FrontEndSettingsController::class, 'create_tnc'])->name('terms_conditions1');
Route::get('terms_conditions', [FrontEndSettingsController::class, 'show_tnc'])->name('terms_conditions');
Route::post('privacy_policy', [FrontEndSettingsController::class, 'create_privacy'])->name('privacy_policy1');
Route::get('privacy_policy', [FrontEndSettingsController::class, 'show_privacy'])->name('privacy_policy');

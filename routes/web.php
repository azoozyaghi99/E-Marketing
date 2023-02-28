<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Web\CartController;
use App\Http\Controllers\Web\CartProductController;
use App\Http\Controllers\Web\CategoryController;
use App\Http\Controllers\Web\CityController;
use App\Http\Controllers\Web\CountryController;
use App\Http\Controllers\Web\FeedBackController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Web\OrderController;
use App\Http\Controllers\Web\OrderProductController;
use App\Http\Controllers\Web\ProductController;
use App\Http\Controllers\Web\UserAddressController;
use App\Http\Controllers\Web\UserController;
use App\Http\Controllers\Web\UserFavController;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

//Auth::routes();
Auth::routes([
    'register' => false, // Routes of Registration
    'reset' => false,    // Routes of Password Reset
    'verify' => false,   // Routes of Email Verification
    'confirm' => false,   // Routes of Email Verification
]);
/*Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');*/
Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::group(['middleware' => ['auth']], function () {
    Route::resource('cart', CartController::class);
    Route::resource('cart-product', CartProductController::class);
    Route::resource('category', CategoryController::class);
    Route::resource('city', CityController::class);
    Route::resource('country', CountryController::class);
    Route::resource('feedback', FeedBackController::class);
    Route::resource('order', OrderController::class);
    Route::resource('order-product', OrderProductController::class);
    Route::resource('product', ProductController::class);
    Route::resource('user-address', UserAddressController::class);
    Route::resource('user', UserController::class);
    Route::resource('user-fav', UserFavController::class);
});

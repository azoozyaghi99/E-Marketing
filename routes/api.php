<?php

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\CartController;
use App\Http\Controllers\Api\CategoryController;
use App\Http\Controllers\Api\CountryController;
use App\Http\Controllers\Api\FeedBackController;
use App\Http\Controllers\Api\OrderController;
use App\Http\Controllers\Api\ProductController;
use App\Http\Controllers\Api\UserAddressController;
use App\Http\Controllers\Api\UserFavController;
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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// Auth Request : with out auth
Route::prefix('Auth')->group(function () {
    Route::post('register',[AuthController::class,'register']);
    Route::post('login',[AuthController::class,'login']);
});

Route::group(['middleware' => ['auth:api']], function () {

    // Auth Request : with auth
    Route::prefix('Auth')->group(function () {
        Route::get('get_user',[AuthController::class,'get_user']);
        Route::post('update_user',[AuthController::class,'update_user']);
        Route::post('change_password_by_auth',[AuthController::class,'change_password_by_auth']);
        Route::get('logout',[AuthController::class,'logout']);
    });

    Route::apiResource('category',CategoryController::class)->only(['index','show']);
    Route::apiResource('country',CountryController::class)->only(['index','show']);
    Route::apiResource('product',ProductController::class)->only(['index','show']);
    Route::apiResource('fav',UserFavController::class)->only(['index','store']);
    Route::apiResource('feedback',FeedBackController::class)->only(['store']);
    Route::apiResource('cart',CartController::class)->only(['index','store','update','destroy']);
    Route::apiResource('order',OrderController::class);
    Route::apiResource('address',UserAddressController::class);
});

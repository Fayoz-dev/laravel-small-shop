<?php

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\BrandController;
use App\Http\Controllers\Api\CategoryController;
use App\Http\Controllers\Api\OrderController;
use App\Http\Controllers\Api\ProductController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

//Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//    return $request->user();
//});

Route::post('login',[AuthController::class,'login']);
Route::post('logout',[AuthController::class,'logout']);
Route::post('register',[AuthController::class,'register']);
Route::get('user',[AuthController::class,'user'])->middleware('auth:sanctum');

Route::apiResources([
    'categories' => CategoryController::class,
    'brands' => BrandController::class,
    'products' => ProductController::class,
    'orders' => OrderController::class,

]);

Route::get('/product-filter',[ProductController::class,'filter']);
Route::get('search/{name}', [ProductController::class,'search']);

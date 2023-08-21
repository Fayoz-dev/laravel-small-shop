<?php

use App\Http\Controllers\Admin\BrandController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

 Route::get('home',[ HomeController::class, 'home'])->name('home');
 Route::get('login',[ AuthController::class,'login'])->name('login');
 Route::post('authenticate',[AuthController::class, 'authenticate'])->name('authenticate');
 Route::post('logout',[AuthController::class, 'logout'])->name('logout');
 Route::get('register', [AuthController::class,'register'])->name('register');
 Route::post('register',[ AuthController::class,'register_store'])->name('register.store');
 Route::resource('categories', CategoryController::class)->middleware('roleAdmin');
 Route::resource('brands', BrandController::class)->middleware('roleAdmin');
 Route::resource('products', ProductController::class)->middleware('roleAdmin');
 Route::resource('users', UserController::class)->middleware('roleAdmin');
 Route::resource('orders', OrderController::class)->middleware('roleOperator');




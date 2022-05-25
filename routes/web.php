<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ListController;
use App\Http\Controllers\ProductController;
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
Route::any('products/search', [ProductController::class,'search'])->name('products.search');
Route::get('/', [ProductController::class, 'index']);
Route::resource('products', ProductController::class);
Route::resource('categories', CategoryController::class);
Route::get('products/{product}',[ProductController::class, 'destroy']);
Route::get('categories/{category}',[CategoryController::class, 'destroy']);

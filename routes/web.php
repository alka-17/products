<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;

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


Route::get('/', [ProductController::class, 'index'])->name('product');
Route::get('product/{id}/detail', [ProductController::class, 'detail'])->name('product.detail');

Route::post('add-to-cart', [CartController::class, 'addToCart'])->name('add.to.cart');
Route::get('cart', [CartController::class, 'cart'])->name('cart');
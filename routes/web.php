<?php

use App\Http\Controllers\ProductsController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/products'[ProductsController::class, 'index'])->name('products.index');
Route::get('/', [ProductsController::class, 'index'])->name('products.index');
Route::get('/product/{id}', [ProductsController::class, 'show'])->name('products.show');
Route::post('/products', [ProductsController::class, 'store'])->name('products.store');
Route::put('/product/{id}', [ProductsController::class, 'update'])->name('products.update');
Route::delete('/product/{id}', [ProductsController::class, 'destroy'])->name('products.destroy');

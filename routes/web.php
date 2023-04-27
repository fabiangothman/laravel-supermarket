<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CreateController;
use App\Http\Controllers\DeleteController;
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

Route::get('/', function () {
  return view('home');
})->name('home');

Route::get('/welcome', function () {
  return view('welcome');
})->name('welcome')->middleware('auth');

Route::get('/list', [ProductController::class, 'list'])->name('list');
Route::get('/create', [CreateController::class, 'index'])->name('create');
Route::get('/delete', [DeleteController::class, 'index'])->name('delete');

/**
 * Session endpoints
 */
Route::get('/login', function () {
  return view('login');
})->name('login');
Route::post('/login', [AuthController::class, 'authenticate']);
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

/**
 * Product endpoints
 */
Route::get('/products', [ProductController::class, 'index'])->name('products.index')->middleware('auth');
Route::get('/products/create', [ProductController::class, 'create'])->name('products.create')->middleware('auth');
Route::post('/products', [ProductController::class, 'store'])->name('products.store')->middleware('auth');
Route::get('/products/{product}', [ProductController::class, 'show'])->name('products.show')->middleware('auth');
Route::get('/products/{product}/edit', [ProductController::class, 'edit'])->name('products.edit')->middleware('auth');
Route::put('/products/{product}', [ProductController::class, 'update'])->name('products.update')->middleware('auth');
Route::delete('/products/{product}', [ProductController::class, 'destroy'])->name('products.destroy')->middleware('auth');

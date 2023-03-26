<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CreateController;
use App\Http\Controllers\DeleteController;
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

Route::get('/products', function () {
  return view('products');
})->name('products');

Route::get('/contact', function () {
  return view('contact');
})->name('contact');

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

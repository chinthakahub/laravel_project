<?php

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
    return view('welcome');
});

Auth::routes();
Route::get('/', [App\Http\Controllers\ProductController::class, 'home'])->name('home');
Route::get('/AddNewProduct', [App\Http\Controllers\ProductController::class, 'AddNewProduct'])->name('AddNewProduct');
Route::post('/saveProduct', [App\Http\Controllers\ProductController::class, 'saveProduct'])->name('saveProduct');
Route::get('/showProduct', [App\Http\Controllers\ProductController::class, 'showProduct'])->name('showProduct');
Route::get('/editProduct', [App\Http\Controllers\ProductController::class, 'editProduct'])->name('editProduct');
Route::post('/updateProduct', [App\Http\Controllers\ProductController::class, 'updateProduct'])->name('updateProduct');
Route::get('/deleteProduct', [App\Http\Controllers\ProductController::class, 'deleteProduct'])->name('deleteProduct');




// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

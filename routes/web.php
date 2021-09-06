<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

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

Route::get('product-list', [ProductController::class, 'index'])->name('list');
Route::get('product-list/{id}/edit', [ProductController::class, 'edit']);
Route::post('product-list/store', [ProductController::class, 'store'])->name('store');
Route::get('product-list/delete/{id}', [ProductController::class, 'destroy'])->name('delete');

<?php

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

Route::get('/', function () {
    return view('index');
}) -> name('index');


Route::resource('/products', App\Http\Controllers\ProductController::class);
Route::get('/products/{product}/delete',[App\Http\Controllers\ProductController::class, 'delete'])-> name('products.delete');
Route::get('/clients/{client}/delete',[App\Http\Controllers\ClientController::class, 'delete'])-> name('clients.delete');
Route::get('/sales/{sale}/delete',[App\Http\Controllers\SaleController::class, 'delete'])-> name('sales.delete');
Route::resource('/clients', App\Http\Controllers\ClientController::class);
Route::resource('/sales', App\Http\Controllers\SaleController::class);
Route::resource('/categories', App\Http\Controllers\CategoryController::class);
Route::resource('/purchases', App\Http\Controllers\PurchaseController::class);
Route::resource('/sales_details', App\Http\Controllers\Sale_detailController::class);
Route::resource('/suppliers', App\Http\Controllers\SupplierController::class);

<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ProductController;


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

Route::controller(ProductController::class)->group(function() {
    Route::get('products', 'index');
    Route::post('products/add', 'store');
    Route::put('products/{product_id}', 'update');
    Route::delete('products/{product_id}', 'destroy');
    Route::get('products/categories', 'categories');
    Route::get('products/categories/{category_name}', 'categoryProducts');
    Route::get('products/{product_id}', 'show');
});

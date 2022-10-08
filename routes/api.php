<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ProductController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Routes for the Product RESTful API

Route::controller(ProductController::class)->group(function() {
    Route::get('products', 'index');
    Route::post('products/add', 'store');
    Route::put('products/{product_id}', 'update');
    Route::delete('products/{product_id}', 'destroy');
    Route::get('products/categories', 'categories');
    Route::get('products/categories/{category_name}', 'categoryProducts');
    Route::get('products/{product_id}', 'show');
});

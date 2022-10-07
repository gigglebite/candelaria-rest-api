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
Route::get('/products/categories',[ProductController::class,'categories']);
Route::get('/products/categories/{category_name}',[ProductController::class,'categoryProducts']);
Route::get('/products/{product_id}',[ProductController::class,'show']);
Route::apiResource('products', ProductController::class);
Route::put('/products/{product_id}',[ProductController::class,'update']);
Route::delete('/products/{product_id}',[ProductController::class,'destroy']);
Route::get('/products/search/{keywords}', [ProductController::class,'search']);
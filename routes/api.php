<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::get('categories', 'App\Http\Controllers\Api\CategoryController@index');
Route::get('category/{id}','App\Http\Controllers\Api\CategoryController@show');
Route::post('categories', 'App\Http\Controllers\Api\CategoryController@store');
Route::put('categories/{id}', 'App\Http\Controllers\Api\CategoryController@update');
Route::delete('categories/{id}', 'App\Http\Controllers\Api\CategoryController@delete');

Route::get('products', 'App\Http\Controllers\Api\ProductController@index');
Route::post('products', 'App\Http\Controllers\Api\ProductController@store');

<?php

use Illuminate\Http\Request;

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

//Route::middleware('auth:api')->get('/user', function (Request $request) {
//    return $request->user();
//});

Route::prefix('/categories')->group( function () {
    Route::get('/', 'CategorieController@index');
    Route::get('/{id}', 'CategorieController@show');
});
Route::prefix('/products')->group( function () {
    Route::get('/', 'ProductController@index');
    Route::get('/product_category/{id}', 'ProductController@showCategory');
    Route::get('/{id}', 'ProductController@show');
});

<?php

use App\Products;
use App\Customers;
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

/* Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});*/


Route::get('products', 'ProductController@index');
Route::get('products/{product}', 'ProductController@show');

Route::group(['middleware' => ['jwt.verify']], function() {

    Route::post('products', 'ProductController@store');
    Route::put('products/{product}', 'ProductController@update');
    Route::delete('products/{product}', 'ProductController@delete');
    Route::post('customers', 'CustomerController@store');
    Route::get('customers', 'CustomerController@index');
    Route::get('customers/{customer}', 'CustomerController@show');
    Route::delete('customers/{customer}', 'CustomerController@delete');
});

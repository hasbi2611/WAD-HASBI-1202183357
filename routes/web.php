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
    return view('home');
});
/*
Route::get('/history', function () {
    return view('history');
});
*/
//Route::get('product', 'ProductController@index');
Route::get('/product', 'App\Http\Controllers\HomeController@index');
Route::get('/order', 'App\Http\Controllers\HomeController@indexorder');
Route::get('/', 'App\Http\Controllers\HomeController@indexhistory');
Route::get('/product.inputproduct', 'App\Http\Controllers\ProductController@create');
Route::get('/order.inputorder', 'App\Http\Controllers\OrderController@create');
Route::get('/order.inputorder', 'App\Http\Controllers\OrderController@index');
Route::post('products', 'App\Http\Controllers\ProductController@store');
Route::get('products', 'App\Http\Controllers\ProductController@index');

Route::delete('products/{id}', 'App\Http\Controllers\ProductController@destroy');
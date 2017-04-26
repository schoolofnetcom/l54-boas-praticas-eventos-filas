<?php

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

Route::get('/home', 'HomeController@index');
Route::group(['middleware' => 'auth'], function(){
    Route::resource('products', 'ProductsController', ['only' => ['index']]);
    Route::resource('stock_entries', 'StockEntriesController', ['only' => ['index', 'create', 'store']]);
    Route::resource('stock_outputs', 'StockOutputsController', ['only' => ['index', 'create', 'store']]);
    Route::resource('orders','OrdersController',['only' => ['create','store']]);
});

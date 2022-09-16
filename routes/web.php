<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/products', 'ProductController@index')->name('products.index');
Route::get('/products/{product}/show', 'ProductController@show')->name('products.show');

Route::get('/orders', 'OrderController@index')->name('orders.index');
Route::post('/orders', 'OrderController@store')->name('orders.store');
Route::get('/orders/{order}/show', 'OrderController@show')->name('orders.show');

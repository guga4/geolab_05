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

Route::get('/', 'ProductsController@main');
Route::get('/product/{product}', 'ProductsController@product');

Route::resource('admin/products', 'Admin\ProductsController');

Route::get('/test', function() {
    return Storage::url('test');
});
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

Route::resource('admin/category', 'CategoryController');
Route::resource('admin/product', 'ProductController');


//Test route cho view bên client
Route::get('/home', function () {
    return view('client.client-page-layout');
});

Route::get('/category', function () {
    return view('client.category-list');
});

Route::get('/product', function () {
    return view('client.product-detail');
});

Route::get('/cart', function () {
    return view('client.card-page');
});

Route::get('/contact-us', function () {
    return view('client.contact-page');
});
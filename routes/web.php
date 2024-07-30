<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/productList', function () {
    return view('products.productList');
});

Route::get('/productGrid', function () {
    return view('products.productGrid');
});

Route::get('/productDetails', function () {
    return view('products.productDetails');
});

Route::get('/single_Product', function () {
    return view('single_Product');
});

Route::get('/single_Post', function () {
    return view('single_Product');
});

Route::get('/shoppingCart', function () {
    return view('/shoppingCart');
});

Route::get('/checkOut', function () {
    return view('/checkOut');
});
 
Route::get('/blog', function () {
    return view('/blog');
});

Route::get('/single_Post', function () {
    return view('/single_Post');
});
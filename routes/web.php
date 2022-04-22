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


Route::get('/admin/users', function () {
    return view('admin.pages.users');
});

Route::get('/admin/login', function () {
    return view('admin.pages.login');
});

Route::get('/', function () {
    return view('front.pages.home');
});

Route::get('/carrito', function () {
    return view('front.pages.cart');
});

Route::get('/checkout', function () {
    return view('front.pages.checkout');
});

Route::get('/contacto', function () {
    return view('front.pages.contact');
});

Route::get('/producto', function () {
    return view('front.pages.product');
});

Route::get('/productos', function () {
    return view('front.pages.products');
});
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
    return view('home.template');
});

Route::get('/cart', function () {
    return view('cart.cart');
});

Route::get('/account', function () {
    return view('account.account');
});

Route::get('/checkout', function () {
    return view('checkout.checkout');
});

Route::get('/contact', function () {
    return view('contact.contact');
});


Route::get('/shop', function () {
    return view('shop.shop', ['rangeSlider' => true]);
});


Route::get('/single', function () {
    return view('single.single');
});


Route::get('/terms', function () {
    return view('terms.terms');
});

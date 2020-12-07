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

Route::get('/', 'IndexController@index');

Route::get('/tienda', 'ProductoController@home');
Route::get('/productos/{producto}', 'ProductoController@single');
Route::resource('admin/productos', 'ProductoController');



Route::get('/cart', function () {
    return view('cart.cart', ['rangeSlider' => true]);
});

Route::get('/account', function () {
    return view('account.account', ['rangeSlider' => true]);
});

Route::get('/checkout', function () {
    return view('checkout.checkout', ['rangeSlider' => true]);
});

Route::get('/contact', function () {
    return view('contact.contact', ['rangeSlider' => true]);
});


Route::get('/shop', function () {
    return view('shop.shop', ['rangeSlider' => true]);
});


Route::get('/single', function () {
    return view('single.single', ['rangeSlider' => true]);
});


Route::get('/terms', function () {
    return view('terms.terms', ['rangeSlider' => true]);
});

Route::get('/404', function () {
    return view('404.404', ['rangeSlider' => true]);
});

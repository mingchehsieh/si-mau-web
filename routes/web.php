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

use App\News;


Route::get('/', function () {
    return view('home');
});
Route::get('news', function () {
    return view('news');
});
Route::get('news2', function () {
    return view('news2');
});
Route::get('product', function () {
    return view('product');
});
Route::get('product2', function () {
    return view('product2');
});
Route::get('product3', function () {
    return view('product3');
});
Route::get('contact', function () {
    return view('contact');
});
Route::get('about', function () {
    return view('about');
});

Route::get('/lang/set/{lang}', 'LocaleController@setLang');





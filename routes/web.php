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
    return view('app.home');
});

Route::get('/preview', function () {
    return view('app.preview');
});

Route::get('/delivery', function () {
    return view('app.delivery');
});

Route::get('/about', function () {
    return view('app.about');
});

Route::get('/contact', function () {
    return view('app.contact');
});

Route::get('/news', function () {
    return view('app.news');
});

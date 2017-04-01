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

Route::get('/', 'HomeController@index');

Route::get('/preview', 'HomeController@preview');

Route::get('/delivery', 'HomeController@delivery');

Route::get('/about', 'HomeController@about');

Route::get('/contact', 'HomeController@contact');

Route::get('/news', 'HomeController@news');

Route::get('/login', 'AuthController@showLogin')->name('login');

Route::get('/register', 'AuthController@showRegister');

Route::get('/account', 'CustomerController@index');

Route::post('/register', 'AuthController@register');

Route::post('/login', 'AuthController@login');

Route::get('/feedback', 'AuthController@feedback');

Route::group(['middleware' => 'auth'], function () {

    Route::get('/account', 'CustomerController@index');

    Route::get('/change-password', 'CustomerController@showChangePassword');

    Route::get('/account-address', 'CustomerController@getAddress');

    Route::get('/logout', 'AuthController@logout');

    Route::post('/get-account-info', 'CustomerController@getAccountInfo');

    Route::post('/update-account-info', 'CustomerController@updateAccountInfo');

    Route::post('/change-password-account', 'CustomerController@changePasswordAccount');
});

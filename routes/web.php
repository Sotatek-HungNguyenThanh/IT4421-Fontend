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

Route::get('/login', 'Customer\AuthController@showLogin')->name('login');

Route::get('/register', 'Customer\AuthController@showRegister');

Route::get('/account', 'Customer\HomeController@index');

Route::post('/register', 'Customer\AuthController@register');

Route::post('/login', 'Customer\AuthController@login');

Route::get('/feedback', 'Customer\AuthController@feedback');

Route::post('/feedback', 'Customer\AuthController@addFeedback');

Route::group(['middleware' => 'auth'], function () {

    Route::get('/account', 'Customer\HomeController@index');

    Route::get('/change-password', 'Customer\HomeController@showChangePassword');

    Route::get('/account-address', 'Customer\HomeController@getAddress');

    Route::get('/logout', 'Customer\AuthController@logout');

    Route::post('/get-account-info', 'Customer\HomeController@getAccountInfo');

    Route::post('/update-account-info', 'Customer\HomeController@updateAccountInfo');

    Route::post('/change-password-account', 'Customer\HomeController@changePasswordAccount');
});

Route::group(['prefix' => 'admin','middleware' => 'auth'], function () {

});
Route::get('admin/login', 'Admin\AuthController@showLogin');

Route::post('admin/login', 'Admin\AuthController@login');

Route::get('/admin', 'Admin\AuthController@index');

Route::get('/admin/add-new-supplier', 'Admin\AuthController@addSuppliers');


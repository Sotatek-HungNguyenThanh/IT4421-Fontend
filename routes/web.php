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

Route::get('/login', 'Customer\AuthController@showLogin')->name('login');

Route::get('/register', 'Customer\AuthController@showRegister');

Route::get('/account', 'Customer\HomeController@index');

Route::post('/register', 'Customer\AuthController@register');

Route::post('/login', 'Customer\AuthController@login');

Route::get('/feedback', 'Customer\AuthController@feedback');

Route::post('/feedback', 'Customer\AuthController@addFeedback');

Route::post('get-list-new-product', 'ProductController@getListNewProduct');

Route::post('get-product-by-id', 'ProductController@getProductByID');

Route::post('cart/add', 'CartController@add');

Route::post('cart/update', 'CartController@update');

Route::post('cart/remove', 'CartController@remove');

Route::post('cart/get-cart', 'CartController@getCart');

Route::post('cart/create-order', 'CartController@createOrder');

Route::post('/search', 'ProductController@search');

Route::get('/product', function (){
    return view('app.product_details');
});

Route::get('/search', function (){
    return view('app.search');
});

Route::get('/list-product', function (){
    return view('app.list_product');
});

Route::get('/checkout', function (){
    return view('app.checkout');
});

Route::get('/cart', function (){
    return view('app.cart');
});

Route::group(['middleware' => 'auth'], function () {

    Route::get('/account', 'Customer\HomeController@index');

    Route::get('/change-password', 'Customer\HomeController@showChangePassword');

    Route::get('/account-address', 'Customer\HomeController@getAddress');

    Route::get('/logout', 'Customer\AuthController@logout');

    Route::post('/get-account-info', 'Customer\HomeController@getAccountInfo');

    Route::post('/update-account-info', 'Customer\HomeController@updateAccountInfo');

    Route::post('/change-password-account', 'Customer\HomeController@changePasswordAccount');
});

Route::group(['prefix' => 'admin','middleware' => 'admin'], function () {

    Route::get('/', 'Admin\AuthController@index');

    Route::get('/home', function (){
        return view('admin.home');
    });

    Route::get('/logout', 'Admin\AuthController@logout');

    Route::get('/change-password', 'Admin\AuthController@showChangePasswordPage');

    Route::get('/manage-suppliers', 'Admin\SupplierController@showManageSuppliersPage');

    Route::get('/manage-products', 'Admin\ProductController@showManageProductsPage');

    Route::get('/create-supplier', 'Admin\SupplierController@showCreateSupplierPage');

    Route::post('/create-supplier', 'Admin\SupplierController@createSupplier');

    Route::post('/get-supplier', 'Admin\SupplierController@getSupplier');

    Route::post('/update-supplier', 'Admin\SupplierController@updateSupplier');

    Route::post('/delete-supplier', 'Admin\SupplierController@deleteSupplier');

    Route::get('/add-product', 'Admin\ProductController@showCreateProductPage');

    Route::post('/get-list-suppliers', 'Admin\SupplierController@getListSuppliers');

    Route::post('/create-product', 'Admin\ProductController@createProduct');

    Route::post('/get-list-product', 'Admin\ProductController@getListProduct');

    Route::post('/delete-product', 'Admin\ProductController@deleteProduct');

    Route::get('product/{id}', function (){
        return view('admin.product_preview');
    });


    Route::post('product/{id}', 'Admin\ProductController@getProduct');

    Route::post('remove-variant', 'Admin\ProductController@removeVariant');

    Route::post('update-product', 'Admin\ProductController@updateProduct');

});
Route::get('admin/login', 'Admin\AuthController@showLoginForm');

Route::post('admin/login', 'Admin\AuthController@login');


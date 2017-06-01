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
//Admin

Route::group(['prefix' => 'admin','middleware' => 'admin'], function () {

    Route::get('/', 'Admin\HomeController@showHomePage');

    Route::get('/home', 'Admin\HomeController@showHomePage');

    Route::get('/logout', 'Admin\AuthController@logout');

    Route::get('/list-suppliers', 'Admin\SupplierController@showListSupplierPage');

    Route::get('/list-products', 'Admin\ProductController@showListProductsPage');

    Route::get('/create-supplier', 'Admin\SupplierController@showCreateSupplierPage');

    Route::post('/create-supplier', 'Admin\SupplierController@createSupplier');

    Route::post('/get-supplier', 'Admin\SupplierController@getSupplier');

    Route::post('/update-supplier', 'Admin\SupplierController@updateSupplier');

    Route::post('/delete-supplier', 'Admin\SupplierController@deleteSupplier');

    Route::get('/create-product', 'Admin\ProductController@showCreateProductPage');

    Route::post('/get-list-suppliers', 'Admin\SupplierController@getListSuppliers');

    Route::post('/create-product', 'Admin\ProductController@createProduct');

    Route::post('/get-list-product', 'Admin\ProductController@getListProduct');

    Route::post('/delete-product', 'Admin\ProductController@deleteProduct');

    Route::get('product/{id}', 'Admin\ProductController@showUpdateProductPage');

    Route::post('product/{id}', 'Admin\ProductController@getProduct');

    Route::post('remove-variant', 'Admin\ProductController@removeVariant');

    Route::post('update-product', 'Admin\ProductController@updateProduct');

    Route::post('get-list-customer', 'Admin\CustomerController@getListCustomer');

    Route::post('delete-customer', 'Admin\CustomerController@deleteCustomer');

    Route::post('get-all-order', 'Admin\OrderController@getAllOrder');

    Route::post('update-status-order', 'Admin\OrderController@updateStatusOrder');

    Route::get('list-customer', 'Admin\CustomerController@showListCustomerPage');

    Route::get('list-order', 'Admin\OrderController@showListOrderPage');

    Route::get('dashboard', 'Admin\HomeController@showDashboardPage');

    Route::post('get-data-dashboard', 'Admin\HomeController@getDataDashBoard');

});
Route::get('admin/login', 'Admin\AuthController@showLoginPage');

Route::post('admin/login', 'Admin\AuthController@login');


//Customer


Route::get('/login', 'Customer\AuthController@showLoginPage')->name('login');

Route::get('/register', 'Customer\AuthController@showRegisterPage');

Route::post('/register', 'Customer\AuthController@register');

Route::post('/login', 'Customer\AuthController@login');

Route::group(['middleware' => 'auth'], function () {

    Route::get('/account', 'Customer\AccountController@showAccountPage');

    Route::get('/change-password', 'Customer\AccountController@showChangePasswordPage');

    Route::get('/account-address', 'Customer\AccountController@showAccountAddressPage');

    Route::get('/logout', 'Customer\AuthController@logout');

    Route::post('/get-account-info', 'Customer\AccountController@getAccountInfo');

    Route::post('/update-account-info', 'Customer\AccountController@updateAccountInfo');

    Route::post('/change-password-account', 'Customer\AccountController@changePassword');

    Route::post('/get-list-order', 'Customer\OrderController@getListOrder');

    Route::get('/history-transaction', 'Customer\OrderController@showHistoryTransactionPage');
});

//Guest

Route::get('/feedback', 'Guest\FeedbackController@showFeedbackPage');

Route::post('/feedback', 'Guest\FeedbackController@createFeedback');

Route::get('/', 'Guest\HomeController@showHomePage');

Route::get('/home', 'Guest\HomeController@showHomePage');

Route::post('get-list-new-product', 'Guest\ProductController@getListNewProduct');

Route::post('get-product-by-id', 'Guest\ProductController@getProductByID');

Route::post('cart/add', 'Guest\CartController@add');

Route::post('cart/update', 'Guest\CartController@update');

Route::post('cart/remove', 'Guest\CartController@remove');

Route::post('cart/get-cart', 'Guest\CartController@getCart');

Route::post('cart/create-order', 'Guest\CartController@createOrder');

Route::post('/search', 'Guest\ProductController@search');

Route::get('/product/{id}', 'Guest\ProductController@showProductDetailPage');

Route::post('/product/{id}', 'Guest\ProductController@getProductByUrl');

Route::get('/products/{name?}', 'Guest\ProductController@showProductFilterPage');

Route::post('/products/filter-category', 'Guest\ProductController@getListProduct');

Route::get('/search', "Guest\HomeController@showSearchPage");

Route::get('/checkout', "Guest\HomeController@showCheckoutPage");

Route::get('/cart', "Guest\HomeController@showCartPage");



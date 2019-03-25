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

//Route::get('/', function () {
//    return view('index');
//});

Route::get('/', [
    'uses' => 'ShopFrontController@index',
    'as' => 'index'
]);

Auth::routes();

Route::get('customer/login', [
    'uses' => 'Auth\LoginController@showCustomerLogin',
    'as' => 'auth.customer.login'
]);

Route::post('/customer/login', [
    'uses' => 'Auth\LoginController@customerLogin',
    'as' => 'customer.login'
]);

Route::get('/customer/register', [
    'uses' => 'Auth\RegisterController@customerRegisterForm',
    'as' => 'customer.register'
]);

Route::post('register/customer', [
   'uses' => 'Auth\RegisterController@createCustomer',
    'as' => 'customer.create'
]);

#######################SHOP CONTROLLER SIDE###############################################

Route::get('category/{id}' , [
    'uses' => 'ShopFrontController@categoryPage',
    'as' => 'shop.category'
]);

Route::get('product/{id}' , [
    'uses' => 'ShopFrontController@productDetail',
    'as' => 'shop.product.detail'
]);

Route::get('products' , [
    'uses' => 'ShopFrontController@productsDisplay',
    'as' => 'shop.products'
]);



Route::group(['middleware' => ['auth:customer']], function() {

    Route::get('cart' , [
        'uses' => 'ShopFrontController@displayCart',
        'as' => 'shop.cart'
    ]);

    Route::get('checkout' , [
        'uses' => 'ShopFrontController@displayCheckout',
        'as' => 'shop.checkout'
    ]);

    Route::post('addtocart' , [
        'uses' => 'CartController@addToCart',
        'as' => 'shop.addtocart'
    ]);

    Route::get('cart/empty' , [
        'uses' => 'CartController@emptyCart',
        'as' => 'shop.cart.empty'
    ]);

    Route::post('cart/remove/{id}' , [
        'uses' => 'CartController@destroy',
        'as' => 'shop.cart.remove'
    ]);

    Route::post('cart/qty/{id}' , [
        'uses' => 'CartController@updateQty',
        'as' => 'shop.cart.qty'
    ]);

    Route::post('checkout/order' , [
        'uses' => 'CartController@checkout',
        'as' => 'shop.checkout.order'
    ]);

    Route::get('orders/' , [
        'uses' => 'ShopFrontController@displayOrders',
        'as' => 'shop.orders'
    ]);


});





###########################################################################################

##############################ADMIN SIDE###########################################

Route::group(['middleware' => ['auth']], function() {

    Route::get('/home', 'AdminController@index')->name('home');

    Route::group(['prefix' => 'admin'], function() {

        Route::resource('categories', 'CategoriesController');

        Route::resource('products', 'ProductsController');

        Route::resource('users', 'UsersController');

        Route::resource('customers', 'CustomersController');

//        Route::post('/product/update/{id}', [
//            'uses' => 'ProductsController@update',
//            'as' => 'product.update'
//        ]);


    });



});

######################################################################################
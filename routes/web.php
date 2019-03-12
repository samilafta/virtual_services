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
    return view('index');
});

Auth::routes();

Route::get('customer/login', [
    'uses' => 'Auth\LoginController@showCustomerLogin',
    'as' => 'auth.customer.login'
]);


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
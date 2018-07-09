<?php

Route::get('customers','CustomerController@index');
Route::get('customers/view/{id}','CustomerController@view');
Route::get('customers/add', 'CustomerController@add');
Route::post('customers/add', 'CustomerController@create');
Route::get('customers/edit/{id}', 'CustomerController@edit');
Route::post('customers/edit/{id}', 'CustomerController@update');
Route::get('customers/delete/{id}', 'CustomerController@delete');

Route::get('products', 'ProductController@index');
Route::get('products/view/{id}', 'ProductController@view');
Route::get('products/add', 'ProductController@add');
Route::post('products/add', 'ProductController@create');
Route::get('products/edit/{id}', 'ProductController@edit');
Route::post('products/edit/{id}', 'ProductController@update');
Route::get('products/delete/{id}', 'ProductController@delete');


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

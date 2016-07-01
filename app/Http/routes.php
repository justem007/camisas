<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register index of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to cindex when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'api/rest'], function () {
//    rotas das categorias
    Route::get('categories', ['as' => 'categories.index', 'uses' => 'CategoryController@index']);
    Route::get('categories/create', ['as' => 'categorie.create', 'uses' => 'CategoryController@create']);
    Route::post('categories', ['as' => 'categorie.store', 'uses' => 'CategoryController@store']);
    Route::get('categories/{category_id}', ['as' => 'categorie.show', 'uses' => 'CategoryController@show']);
    Route::get('categories/{id}/edit', ['as' => 'categorie.edit', 'uses' => 'CategoryController@edit']);
    Route::put('categories/{id}', ['as' => 'categorie.update', 'uses' => 'CategoryController@update']);
    Route::delete('categories/{id}', ['as' => 'categorie.destroy', 'uses' => 'CategoryController@destroy']);
//    rotas do produtos
    Route::get('products', ['as' => 'product.index', 'uses' => 'ProductController@index']);
    Route::get('product/create', ['as' => 'product.create', 'uses' => 'ProductController@create']);
    Route::post('product', ['as' => 'product.store', 'uses' => 'ProductController@store']);
    Route::get('product/{id}', ['as' => 'product.show', 'uses' => 'ProductController@show']);
    Route::get('product/{id}edit', ['as' => 'product.edit', 'uses' => 'ProductController@edit']);
    Route::put('product/{id}', ['as' => 'product.update', 'uses' => 'ProductController@update']);
    Route::delete('product/{id}', ['as' => 'product.destroy', 'uses' => 'ProductController@destroy']);
//    rotas das imagens
    Route::get('images', ['as' => 'image.index', 'uses' => 'ImageController@index']);
    Route::get('image/create', ['as' => 'image.create', 'uses' => 'ImageController@create']);
    Route::post('image', ['as' => 'image.store', 'uses' => 'ImageController@store']);
    Route::get('image/{id}', ['as' => 'image.show', 'uses' => 'ImageController@show']);
    Route::get('image/{id}/edit', ['as' => 'image.edit', 'uses' => 'ImageController@edit']);
    Route::put('image/{id}', ['as' => 'image.update', 'uses' => 'ImageController@update']);
    Route::delete('image/{id}', ['as' => 'image.destroy', 'uses' => 'ImageController@destroy']);
//    rotas de itens no estoque
    Route::get('stockitems', ['as' => 'stockitem.index', 'use' => 'StockitemsController@index']);
    Route::get('stockitem/create', ['as' => 'stockitem.create', 'use' => 'StockitemsController@create']);
    Route::post('stockitem', ['as' => 'stockitem.store', 'use' => 'StockitemsController@store']);
    Route::get('stockitem/{id}', ['as' => 'stockitem.show', 'use' => 'StockitemsController@show']);
    Route::get('stockitem/{id}/edit', ['as' => 'stockitem.edit', 'use' => 'StockitemsController@edit']);
    Route::put('stockitem/{id}', ['as' => 'stockitem.update', 'use' => 'StockitemsController@update']);
    Route::delete('stockitem/{id}', ['as' => 'stockitem.destroy', 'use' => 'StockitemsController@destroy']);
//    rotas do websites - lojas revendedores
    Route::get('websites', ['as' => 'websites.index', 'uses' => 'WebsiteController@index']);
    Route::get('website/create', ['as' => 'website.create', 'uses' => 'WebsiteController@create']);
    Route::post('website', ['as' => 'website.store', 'uses' => 'WebsiteController@store']);
    Route::get('website/{id}', ['as' => 'website.show', 'uses' => 'WebsiteController@show']);
    Route::get('website/{id}/edit', ['as' => 'website.edit', 'uses' => 'WebsiteController@edit']);
    Route::put('website/{id}', ['as' => 'website.update', 'uses' => 'WebsiteController@update']);
    Route::delete('website/{id}', ['as' => 'website.destroy', 'uses' => 'WebsiteController@destroy']);
//    rotas cadastro de clientes
    Route::get('customers', ['as' => 'customer.index', 'use' => 'CustomerController@index']);
    Route::get('customers/create', ['as' => 'customer.create', 'use' => 'CustomerController@create']);
    Route::post('customers', ['as' => 'customer.store', 'use' => 'CustomerController@store']);
    Route::get('customers/{id}', ['as' => 'customer.show', 'use' => 'CustomerController@show']);
    Route::put('customers/{id}/edit', ['as' => 'customer.edit', 'use' => 'CustomerController@edit']);
    Route::put('customers/{id}', ['as' => 'customer.update', 'use' => 'CustomerController@update']);
    Route::delete('customers/{id}', ['as' => 'customerId', 'use' => 'CustomerController@destroy']);
//    rotas de comprovantes de pagamentos
    Route::get('comprovantes', ['as' => 'comprovantes', 'use' => 'ComprovanteController@index']);
    Route::get('comprovantes/{id}', ['as' => 'comprovanteId', 'use' => 'ComprovanteController@show']);
    Route::post('comprovantes', ['as' => 'comprovantes', 'use' => 'ComprovanteController@create']);
    Route::put('comprovantes/{id}', ['as' => 'comprovanteId', 'use' => 'ComprovanteController@store']);
    Route::delete('comprovantes/{id}', ['as' => 'comprovanteId', 'use' => 'ComprovanteController@destroy']);
//    rotas das vendas
    Route::get('orders', ['as' => 'orders', 'use' => 'OrderController@index']);
    Route::get('orders/{id}', ['as' => 'orderId', 'use' => 'OrderController@show']);
    Route::post('orders', ['as' => 'orders', 'use' => 'OrderController@create']);
    Route::put('orders/{id}', ['as' => 'orderId', 'use' => 'OrderController@store']);
    Route::delete('orders/{id}', ['as' => 'orders', 'use' => 'OrderController@destroy']);
});


<?php

use Illuminate\Support\Facades\Session;

Route::get('/', 'PaginasController@main');
Route::get('categorias', 'PaginasController@categorias');
Route::get('exemplo', 'PaginasController@exemplo');

Route::get('token', function () {
    return Session::token();
});

Route::get('info', function (){
      echo phpinfo();
});


Route::get('categories/profile', 'CategoryController@find');

Route::group(['prefix' => 'api/rest'], function () {
//    rotas das categorias
    Route::get('categories', ['as' => 'categories.index', 'uses' => 'CategoryController@index']);
    Route::get('categories/create', ['as' => 'categories.create', 'uses' => 'CategoryController@create']);
    Route::post('categories', ['as' => 'categories.store', 'uses' => 'CategoryController@store']);
    Route::get('categories/{category_id}', ['as' => 'categories.show', 'uses' => 'CategoryController@show']);
    Route::get('categories/{id}/edit', ['as' => 'categories.edit', 'uses' => 'CategoryController@edit']);
    Route::put('categories/{id}', ['as' => 'categories.update', 'uses' => 'CategoryController@update']);
    Route::delete('categories/{id}', ['as' => 'categories.destroy', 'uses' => 'CategoryController@destroy']);

//    rotas do produtos
    Route::get('products', ['as' => 'products.index', 'uses' => 'ProductsController@index']);
    Route::get('product/create', ['as' => 'products.create', 'uses' => 'ProductsController@create']);
    Route::post('product', ['as' => 'products.store', 'uses' => 'ProductsController@store']);
    Route::get('product/{id}', ['as' => 'products.show', 'uses' => 'ProductsController@show']);
    Route::get('product/{id}edit', ['as' => 'products.edit', 'uses' => 'ProductsController@edit']);
    Route::put('product/{id}', ['as' => 'products.update', 'uses' => 'ProductsController@update']);
    Route::delete('product/{id}', ['as' => 'products.destroy', 'uses' => 'ProductsController@destroy']);
//    rotas das imagens
    Route::get('images', ['as' => 'images.index', 'uses' => 'ImageController@index']);
    Route::get('image/create', ['as' => 'images.create', 'uses' => 'ImageController@create']);
    Route::post('images', ['as' => 'images.store', 'uses' => 'ImageController@store']);
    Route::get('images/{id}', ['as' => 'images.show', 'uses' => 'ImageController@show']);
    Route::get('images/{id}/edit', ['as' => 'images.edit', 'uses' => 'ImageController@edit']);
    Route::put('images/{id}', ['as' => 'images.update', 'uses' => 'ImageController@update']);
    Route::delete('images/{id}', ['as' => 'images.destroy', 'uses' => 'ImageController@destroy']);
//    rotas de itens no estoque
    Route::get('stockitems', ['as' => 'stockitems.index', 'use' => 'StockitemsController@index']);
    Route::get('stockitems/create', ['as' => 'stockitems.create', 'use' => 'StockitemsController@create']);
    Route::post('stockitems', ['as' => 'stockitems.store', 'use' => 'StockitemsController@store']);
    Route::get('stockitems/{id}', ['as' => 'stockitems.show', 'use' => 'StockitemsController@show']);
    Route::get('stockitems/{id}/edit', ['as' => 'stockitems.edit', 'use' => 'StockitemsController@edit']);
    Route::put('stockitems/{id}', ['as' => 'stockitems.update', 'use' => 'StockitemsController@update']);
    Route::delete('stockitems/{id}', ['as' => 'stockitems.destroy', 'use' => 'StockitemsController@destroy']);
//    rotas do websites - lojas revendedores
    Route::get('websites', ['as' => 'websites.index', 'uses' => 'WebsiteController@index']);
    Route::get('websites/create', ['as' => 'websites.create', 'uses' => 'WebsiteController@create']);
    Route::post('websites', ['as' => 'websites.store', 'uses' => 'WebsiteController@store']);
    Route::get('websites/{id}', ['as' => 'websites.show', 'uses' => 'WebsiteController@show']);
    Route::get('websites/{id}/edit', ['as' => 'websites.edit', 'uses' => 'WebsiteController@edit']);
    Route::put('websites/{id}', ['as' => 'websites.update', 'uses' => 'WebsiteController@update']);
    Route::delete('websites/{id}', ['as' => 'websites.destroy', 'uses' => 'WebsiteController@destroy']);
//    rotas cadastro de clientes
    Route::get('customers', ['as' => 'customers.index', 'use' => 'CustomerController@index']);
    Route::get('customers/create', ['as' => 'customers.create', 'use' => 'CustomerController@create']);
    Route::post('customers', ['as' => 'customers.store', 'use' => 'CustomerController@store']);
    Route::get('customers/{id}', ['as' => 'customers.show', 'use' => 'CustomerController@show']);
    Route::put('customers/{id}/edit', ['as' => 'customers.edit', 'use' => 'CustomerController@edit']);
    Route::put('customers/{id}', ['as' => 'customers.update', 'use' => 'CustomerController@update']);
    Route::delete('customers/{id}', ['as' => 'customers.destroy', 'use' => 'CustomerController@destroy']);
//    rotas de comprovantes de pagamentos
    Route::get('comprovantes', ['as' => 'comprovantes.index', 'use' => 'ComprovanteController@index']);
    Route::get('comprovantes/create', ['as' => 'comprovantes.create', 'use' => 'ComprovanteController@create']);
    Route::post('comprovantes', ['as' => 'comprovantes.store', 'use' => 'ComprovanteController@store']);
    Route::get('comprovantes/{id}', ['as' => 'comprovantes.show', 'use' => 'ComprovanteController@show']);
    Route::get('comprovantes/{id}/edit', ['as' => 'comprovantes.edit', 'use' => 'ComprovanteController@edit']);
    Route::put('comprovantes/{id}', ['as' => 'comprovantes.update', 'use' => 'ComprovanteController@update']);
    Route::delete('comprovantes/{id}', ['as' => 'comprovantes.destroy', 'use' => 'ComprovanteController@destroy']);
//    rotas das vendas
    Route::get('orders', ['as' => 'orders.index', 'use' => 'OrderController@index']);
    Route::get('orders/create', ['as' => 'orders.create', 'use' => 'OrderController@create']);
    Route::post('orders', ['as' => 'orders.store', 'use' => 'OrderController@store']);
    Route::get('orders/{id}', ['as' => 'orders.show', 'use' => 'OrderController@show']);
    Route::post('orders/{id}/edit', ['as' => 'orders.edit', 'use' => 'OrderController@edit']);
    Route::put('orders/{id}', ['as' => 'orders.update', 'use' => 'OrderController@update']);
    Route::delete('orders/{id}', ['as' => 'orders.destroy', 'use' => 'OrderController@destroy']);
});


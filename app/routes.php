<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

// Bind route parameters
Route::model('article', 'Article');
Route::model('factura', 'Factura');
Route::model('proveidor', 'Proveidor');

// ## ARTICLES ##

// Show pages.
Route::get('/', 'ArticlesController@index');
Route::get('/article/create', 'ArticlesController@create');
Route::get('/article/edit/{article}', 'ArticlesController@edit');
Route::get('/article/delete/{article}', 'ArticlesController@delete');
Route::get('/article/filter/stock', 'ArticlesController@stock');

// Handle form submissions.
Route::post('/article/create', 'ArticlesController@handleCreate');
Route::post('/article/edit', 'ArticlesController@handleEdit');
Route::post('/article/delete', 'ArticlesController@handleDelete');

// ## FACTURES ##

// Show pages.
Route::get('/factura', 'FacturesController@index');
Route::get('/factura/create', 'FacturesController@create');
Route::get('/factura/edit/{factura}', 'FacturesController@edit');
Route::get('/factura/delete/{factura}', 'FacturesController@delete');

// Handle form submissions.
Route::post('/factura/create', 'FacturesController@handleCreate');
Route::post('/factura/edit', 'FacturesController@handleEdit');
Route::post('/factura/delete', 'FacturesController@handleDelete');

// ## PROVEIDORS ##

// Show pages.
Route::get('/proveidor', 'ProveidorsController@index');
Route::get('/proveidor/create', 'ProveidorsController@create');
Route::get('/proveidor/edit/{proveidor}', 'ProveidorsController@edit');
Route::get('/proveidor/delete/{proveidor}', 'ProveidorsController@delete');

// Handle form submissions.
Route::post('/proveidor/create', 'ProveidorsController@handleCreate');
Route::post('/proveidor/edit', 'ProveidorsController@handleEdit');
Route::post('/proveidor/delete', 'ProveidorsController@handleDelete');

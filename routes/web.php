<?php
use Illuminate\Routing\MiddlewareNameResolver;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function() {
    return view('welcome');
});

Route::group(['prefix' => 'admin', 'namespace' => 'Admin'], function(){
    Route::resource('clients', 'ClientController');
});

Route::group(['prefix' => 'admin', 'namespace' => 'Admin'], function() {
    Route::resource('products', 'ProductController');
    /*Route::get('/products', 'ProductController@index')->name('products.index');
    Route::get('/products/edit/{id}', 'ProductController@edit')->name('products.edit');
    Route::get('/products/create', 'ProductController@create')->name('products.create');
    Route::post('/products', 'ProductController@store')->name('products.store');
    Route::put('/products/update/{id}', 'ProductController@update')->name('products.update');
    Route::get('/products/destroy', 'ProductController@destroy')->name('products.destroy');*/
});


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
    return view('/site/index');
});

Route::group(['prefix' => 'admin', 'namespace' => 'Admin'], function(){
    Route::resource('clients', 'ClientController');
});

Route::group(['prefix' => 'admin', 'namespace' => 'Admin'], function(){
    Route::resource('providers', 'ProviderController');
});

Route::group(['prefix' => 'admin', 'namespace' => 'Admin'], function () {
    Route::post('categories/index', 'CategoryController@search')->name('categories.search');
    Route::resource('categories', 'CategoryController');
});


Route::group(['prefix' => 'admin', 'namespace' => 'Admin'], function() {
    Route::resource('products', 'ProductController');
});




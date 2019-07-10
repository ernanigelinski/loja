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
    Route::resource('clientes', 'ClienteController');
});

Route::group(['prefix' => 'admin', 'namespace' => 'Admin'], function(){
    Route::resource('fornecedores', 'FornecedorController');
});

Route::group(['prefix' => 'admin', 'namespace' => 'Admin'], function() {
    Route::resource('produtos', 'ProdutoController');
});

Route::group(['prefix' => 'admin', 'namespace' => 'Admin'], function(){
    Route::resource('compras', 'CompraController');
});

Route::group(['prefix' => 'admin', 'namespace' => 'Admin'], function(){
    Route::resource('vendas', 'VendaController');
});



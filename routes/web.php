<?php

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

Route::get('/', function () {
    return view('/index');
});

Route::get('/central/produtos', function () {
    return view('/central/admprodutos');
});

Route::get('/central/vendas', function () {
    return view('/central/admvendas');
});

// PRODUTOS
Route::get('/produtos/novo', 'ProdutosController@create');
Route::post('/produtos/novo', 'ProdutosController@store')->name('cadastrar_produto');
Route::get('/produtos/ver/{id}', 'ProdutosController@show');
Route::get('/produtos/editar/{id}', 'ProdutosController@edit');
Route::post('/produtos/editar/{id}', 'ProdutosController@update')->name('alterar_produto');
Route::get('/produtos/excluir/{id}', 'ProdutosController@delete');
Route::post('/produtos/excluir/{id}', 'ProdutosController@destroy')->name('excluir_produto');

// VENDAS
Route::get('/vendas/novo', 'VendasController@create');
Route::post('/vendas/novo', 'VendasController@store')->name('cadastrar_venda');
Route::get('/vendas/ver/{id}', 'VendasController@show');
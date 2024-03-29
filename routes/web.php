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

Route::get('/', 'HomeController@index');
Route::get('/sobre', 'HomeController@sobre');

Route::get('/produtos', 'ProdutoController@index');
Route::get('/produto/{id}', 'ProdutoController@show');
Route::get('/produtos/categoria/{id}', 'ProdutoController@filtroCategoria');

Route::get('/admin/produto/', 'ProdutoController@admin');

Route::get('/admin/produto/create', 'ProdutoController@create');
Route::post('/admin/produto/insert', 'ProdutoController@insert');

Route::get('/admin/produto/{id}', 'ProdutoController@update');
Route::post('/admin/produto/{id}', 'ProdutoController@put');

Route::get('/admin/produto/excluir/{id}', 'ProdutoController@delete');
Route::post('/admin/produto/excluir/{id}', 'ProdutoController@remove');

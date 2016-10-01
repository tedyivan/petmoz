<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

//Route::get('categoria','CategoriaController@index');
Route::resource('categoria','CategoriaController');
Route::group(['middleware' => 'auth'], function ()
{

	Route::resource('categoria','CategoriaController',['except' => ['index','show']]);
});



Route::get('produtos/{categoria}','ProdutoController@produtos');


Route::get('produtomodal/{id}','ProdutoController@showmodalproduto');
Route::get('produtomobile/{id}','ProdutoController@showprodutomobile');

Route::resource('produto', 'ProdutoController'); 

Route::group(['middleware' => 'auth'], function ()
{
	
	Route::resource('produto', 'ProdutoController',['except' => ['index','show']]);

});



Route::resource('image','ImageController');
Route::group(['middleware' => 'auth'], function ()
{
	Route::resource('image','ImageController',['except' => ['index','show']]);
	
});


Route::get('tblprodutos','AdministradorController@produtos');

Route::group(['middleware' => 'auth'], function ()
{
	Route::resource('administrador','AdministradorController',['only' => ['index','show']]);
	
});

Route::resource('texto','TextoController');

Route::group(['middleware' => 'auth'], function ()
{
	Route::resource('texto','TextoController',['only' => ['index','show']]);
	
});


Route::resource('servico','ServicoController');

Route::resource('servicoimage','ServicoImageController');

Route::resource('figura','FiguraController');

Route::resource('about','AboutController');





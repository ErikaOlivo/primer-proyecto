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
/*
Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
*/
/*
Route::get('bienvenido',function(){
	return 'Hola!';
});
*/

/*
Route::get('cliente', function(){
	echo "Los Clientes";
});
*/
/*Se visualiza el primer registro de la tabla clientes que esta asociada al modelo Cliente*/
/*
Route::get('/', function(){
	$cliente = App\Cliente::first();
	echo $cliente->direccion;
});
*/
/*Se visualiza el registro que se indica según parámetro de la tabla clientes que esta asociada al modelo Cliente*/
/*
Route::get('/', function(){
	$cliente = App\Cliente::find(2);
	echo $cliente->nombre;
});
*/
/*
Route::get('/{ID}', function({ID}){
	$cliente = App\Cliente::find({ID});
	echo $cliente->nombre;
});
*/
/*
Route::get('/', function(){
	$cliente = App\Cliente::where('nombre','=','luis')->first();
	echo $cliente->ID;
});
*/



//Route::get('/{name?}', 'MyController@index');

//Route::resource('makers','WelcomeController',['except' => ['create','edit']]);

Route::resource('makers','MakerController',['except' => ['create','edit']]);

Route::resource('vehiculos','VehiculoController',['only' => ['index']]);

Route::resource('makers.vehiculos','MakersVehiculosController',['except' => ['create','edit']]);

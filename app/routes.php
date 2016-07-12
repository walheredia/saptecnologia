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

//Login
	/*Llamadas al controlador Auth*/
	Route::get('login', 'AuthController@showLogin'); // Mostrar login
	Route::post('login', 'AuthController@postLogin'); // Verificar datos
	Route::get('logout', 'AuthController@logOut'); // Finalizar sesión

/*Rutas privadas solo para usuarios autenticados*/
Route::group(['before' => 'auth'], function()
{

});
    
    Route::get('/', 'HomeController@showWelcome'); // Vista de inicio

//Usuarios    
	Route::post('registrar_usuario', 'UsuariosController@post_nuevo');
	Route::get('lista_usuarios', 'UsuariosController@all_users');
	Route::get('registrar_usuario', 'UsuariosController@get_nuevo');


App::missing(function($exception) {
    return "Exception";

});
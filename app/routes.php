<?php

/*Llamadas al controlador Auth*/
Route::get('login', 'AuthController@showLogin'); // Mostrar login
Route::post('login', 'AuthController@postLogin'); // Verificar datos
Route::get('logout', 'AuthController@logOut'); // Finalizar sesión


	
/*Rutas privadas solo para usuarios autenticados*/
Route::group(['before' => 'auth'], function()
{
	Route::get('/', 'HomeController@showWelcome'); // Vista de inicio

//Usuarios    
	Route::post('registrar_usuario', 'UsuariosController@post_nuevo');
	Route::get('lista_usuarios', 'UsuariosController@all_users');
	Route::get('registrar_usuario', 'UsuariosController@get_nuevo');
});
App::missing(function($exception) {
    return "Exception";

});
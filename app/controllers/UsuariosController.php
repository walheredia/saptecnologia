<?php

	class UsuariosController extends BaseController {
		public function get_nuevo(){
			$user = Auth::user();
			$tipousuarios = TipoUsuario::all();
					return View::make('registrar_usuario')->with('tipousuarios', $tipousuarios);
			}

		public function post_nuevo(){
			$inputs = Input::all();
			$reglas = array(
				'nombre' => 'required', 
				'apellido' => 'required',
				'telefono' => 'required',
				'direccion' => 'required',
				'localidad' => 'required',
				'provincia' => 'required',
				'email' => 'email|unique:users,email',
				'fecha_ingreso' => 'required',
				'username' => 'required|unique:users,username',
				'password' => 'required|min:5|max:20',
				'confirmar_clave' => 'required|same:password',
				'tipo_usuario' => 'required',
			);
			$mensajes = array(
				'required' => 'Campo Obligatorio',
			);

			$validar = Validator::make($inputs, $reglas);

			if($validar->fails()){	
				Input::flash();
				return Redirect::back()->withInput()->withErrors($validar);
			}
			else{
				$clave = Input::get('password');

				$user = new User;
				$user->id_tipousuario = Input::get('tipo_usuario');
				$user->nombre = Input::get('nombre');
				$user->apellido = Input::get('apellido');
				$user->telefono = Input::get('telefono');
				$user->direccion = Input::get('direccion');
				$user->localidad = Input::get('localidad');
				$user->provincia = Input::get('provincia');
				$user->email = Input::get('email');
				$user->fecha_ing = Input::get('fecha_ingreso');
				$user->username = Input::get('username');
				$user->password = Hash::make($clave);			
				$user->estado = Input::get('estado');
				
		        $user->save();
				return Redirect::to('lista_usuarios')->with('error', 'El usuario ha sido registrado con Éxito')->withInput();
			}
		}
		public function all_users() {
			$users = User::all();
			return View::make('lista_usuarios')->with('users', $users);
		}
	}


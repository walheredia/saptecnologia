@extends ('layout')

@section ('content')

<div class="container">

	<div class="row text-center">

		<h1>Datos del nuevo usuario</h1>

		<div class="col-md-10 col-md-offset-1 text-left">
			@if ($errors->any())
			    <div class="alert alert-danger">
			      <button type="button" class="close" data-dismiss="alert">&times;</button>
			      <strong>Por favor corrige los siguentes errores:</strong>
			      <ul>
			      @foreach ($errors->all() as $error)
			        <li>{{ $error }}</li>
			      @endforeach
			      </ul>
			    </div>
			@endif
			<form action="{{ URL::asset('registrar_usuario') }}" method="POST" class="form-vertical" role="form">

				<fieldset class="cool-fieldset">
					<div class="form-group">
						<div class="col-sm-6">
			  				<p class="help-block margin-bottom-cero"><small>Nombre: </small></p>
			  				<input type="text" class="form-control" placeholder="Nombre..." name="nombre" id="nombre" value="{{ Input::old('nombre') }}">
				  		</div>

						<div class="col-sm-6">
			  				<p class="help-block margin-bottom-cero"><small>Apellido: </small></p>
			  				<input type="text" class="form-control" placeholder="Apellido..." name="apellido" id="apellido" value="{{ Input::old('apellido') }}">
				  		</div>		  			
				  	</div>
				  	<div class="form-group">
				  		<div class="col-sm-3">
			  				<p class="help-block margin-bottom-cero"><small>Teléfono:</small></p>
			  				<input type="text" class="form-control" placeholder="Teléfono..." name="telefono" id="telefono" value="{{ Input::old('telefono') }}">
				  		</div>
				  		<div class="col-sm-3">
			  				<p class="help-block margin-bottom-cero"><small>Dirección:</small></p>
			  				<input type="text" class="form-control" placeholder="Dirección..." name="direccion" id="direccion" value="{{ Input::old('direccion') }}">
				  		</div>
				  		<div class="col-sm-3">
			  				<p class="help-block margin-bottom-cero"><small>Localidad:</small></p>
			  				<input type="text" class="form-control" placeholder="Localidad..." name="localidad" id="localidad" value="{{ Input::old('localidad') }}">
				  		</div>
				  		<div class="col-sm-3">
			  				<p class="help-block margin-bottom-cero"><small>Provincia:</small></p>
			  				<input type="text" class="form-control" placeholder="Provincia..." name="provincia" id="provincia" value="{{ Input::old('provincia') }}">
				  		</div>
					</div>

				  	<div class="form-group">
						<div class="col-sm-6">
			  				<p class="help-block margin-bottom-cero"><small>E-mail:</small></p>
			  				<input type="email" class="form-control" placeholder="E-mail..." name="email" id="email" value="{{ Input::old('email') }}">
				  		</div>
				  		<div class="col-sm-6">
			  				<p class="help-block margin-bottom-cero"><small>Fecha Ingreso:</small></p>
	  						<input type="date" class="form-control" placeholder="Fecha Ingreso..." name="fecha_ingreso" id="fecha_ingreso">
				  		</div>				  		
					</div>

				  	<div class="form-group">
					 	<div class="col-sm-4">
			  				<p class="help-block margin-bottom-cero"><small>Nombre de usuario:</small></p>
		  					<input type="text" class="form-control" placeholder="Nombre de usuario..." name="username" id="username" value="{{ Input::old('username') }}">
			  			</div>	
				  		<div class="col-sm-4">
			  				<p class="help-block margin-bottom-cero"><small>Contraseña:</small></p>
			  				<input type="password" class="form-control" placeholder="Contraseña..." name="password" id="password">
				  		</div>
				  		<div class="col-sm-4">
			  				<p class="help-block margin-bottom-cero"><small>Confirmar Contraseña:</small></p>
			  				<input type="password" class="form-control" placeholder="Confirmar Contraseña..." name="confirmar_clave" id="confirmar_clave">
				  		</div>
				  	</div>
				  	<div class="form-group">
				  		<div class="col-sm-10">
			  				<p class="help-block margin-bottom-cero"><small>Tipo de Usuario:</small></p>
			  				<select class="form-control" name="tipo_usuario" id="tipo_usuario" data-val="tipo_usuario">
			  					<option value="" selected disabled>Por favor, Seleccione</option>
			  					@foreach ($tipousuarios as $t)
		                          <option value="{{ $t->id_tipousuario }}">{{ $t->tipo_usuario }}</option>
		                        @endforeach
			  				</select>
				  		</div>
				  		<div class="col-sm-2">
				  			<p class="help-block margin-bottom-cero"><small>Estado:</small></p>
				  			<div class="checkbox">
						    	<label>
						      		<input type="checkbox" name="estado" id="estado" value="{{ Input::old('estado') }}"> Activo
						    	</label>
					  		</div>
				  		</div>	
				  	</div>

					<div class="form-group">					
						<div class="col-sm-12">
							<br>
							<input type="submit" value="Registrar Usuario" class="btn btn-success form-control">
						</div>
					</div>							  	

				</fieldset>					

			</form>

		</div>

	</div>

</div>

@stop
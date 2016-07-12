@extends ('layout')

@section ('content')
<div class="container">
	<div class="row text-center">
	<h3>Usuarios</h3>
		@if(Session::has('error'))
            <div class="alert alert-success">
              <button type="button" class="close" data-dismiss="alert">&times;</button>
                {{ Session::get('error') }}
              </ul>
            </div>
        @endif
		<table class="table table-bordered table-hover" style="font-size: 12px;">
			<thead>
				<tr>
			  		<th>ID Usuario</th>
			  		<th>Nombre de Usuario</th>
			 		<th>Nombre</th>
			  		<th>Apellido</th>
			  		<th>E-Mail</th>
			  		<th>Tipo de Usuario</th>
			  		<th>Editar</th>
			  		<th>Eliminar</th>
				</tr>
			</thead>
	  		<tbody>
	  			@foreach($users as $user)
				<tr>
					<td>{{ $user->id_usuario }}</td>
					<td>{{ $user->username }}</td>
			 		<td>{{ $user->nombre }}</td>
			 		<td>{{ $user->apellido }}</td>
			 		<td>{{ $user->email }}</td>
			 		@if($user->id_tipousuario === 1)
			 			<td>Administrador</td>
			 		@elseif($user->id_tipousuario === 2)
			 			<td>Cliente</td>
			 		@else
			 			<td>Proveedor</td>
			 		@endif
			 		<td><a href="#"><span class="glyphicon glyphicon-pencil"></a></span></td>
					<td><a href="#" <span class="glyphicon glyphicon-remove"></span></a></td>
				</tr>
				@endforeach
	  		</tbody>	
		</table>
	</div>
</div>	
@stop

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>SAP 2016 - Tecnología</title>
	<link rel="stylesheet" href="{{ URL::asset('css/bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{ URL::asset('css/bootstrap-theme.min.css') }}">
	<link rel="stylesheet" href="{{ URL::asset('css/vendor/jquery-ui-1.10.3.custom.min.css') }}">
	<style>
		table tr {
			text-align: left;
			margin: 10px;
		}
	</style>	

</head>
<body>
	<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
		<div class="navbar-header">
	    	<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
	      		<span class="sr-only">Toggle navigation</span>
	      		<span class="icon-bar"></span>
	      		<span class="icon-bar"></span>
	      		<span class="icon-bar"></span>
	    	</button>
	    	<a class="navbar-brand" href="{{ URL::asset('') }}">Inicio</a>
	  	</div>
	  	<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	  		 <ul class="nav navbar-nav">
	  		 	<li class="dropdown">
			        <a href="#" class="dropdown-toggle" data-toggle="dropdown"> Recursos <b class="caret"></b></a>
			        <ul class="dropdown-menu">
			  		 	<li><a href="#">Registrar un nuevo Recurso</a></li>
			  		 	<li><a href="#">Listado de Recursos</a></li>
			        </ul>
		      	</li>
	  		 </ul>
	  		 <ul class="nav navbar-nav navbar-right">
	  		 	<li class="dropdown">
			        <a href="#" class="dropdown-toggle" data-toggle="dropdown"> Opciones de Usuario <strong>{{ Session::get('username') }}</strong> <b class="caret"></b></a>
			        <ul class="dropdown-menu">
			  		 	<li><a href="{{ URL::asset('registrar_usuario') }}">Registrar un nuevo usuario</a></li>
			  		 	<li><a href="{{ URL::asset('lista_usuarios') }}">Listado de usuarios</a></li>
			        	<li><a href="#">Cerrar Sesión</a></li>
			        </ul>
		      	</li>
		    </ul>
	  	</div>
	</div>
	<br><br><br>
	@yield('content')
	<script src="{{ URL::asset('js/jquery-2.0.3.min.js') }}"></script>
	<script src="{{ URL::asset('js/bootstrap.min.js') }}"></script>
	<script src="{{ URL::asset('js/jquery-ui-1.10.3.custom.min.js') }}"></script>
	<script src="{{ URL::asset('js/main.js') }}"></script>
</body>
</html>
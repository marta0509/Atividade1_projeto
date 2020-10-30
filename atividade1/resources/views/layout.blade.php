<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>@yield('titulo-pagina')</title> 
	<link rel="stylesheet"  href="{{asset('CSS/bootstrap.min.css')}}">
	<link rel="stylesheet"  href="{{asset('CSS/all.css')}}">
	<link rel="stylesheet" type="text/css" src="{{URL::asset('CSS/estilos.css')}}">
	
</head>
<body>

<!--Cabeçalho-->
	<p style="text-align: center">
	<a href="{{route('entrada')}}" ><img src="img/logo.png" height="180px"></a>
	</p>

	<div style="background:#F78181; padding: 15px" class="row">
		<div class="col-md-1">
			
		</div>

		<div class="col-md-2">
			<a style="color: pink" href="{{route('entrada')}}"><i class="fas fa-home"></i></a>
		</div>

		<div class="col-md-2">
			<a style="color: pink" href="{{route('empresa')}}"><i class="far fa-building"></i></a>
		</div>

		<div class="col-md-2">
			<a style="color: pink" href="{{route('noticias')}}"><i class="far fa-newspaper"></i></a>
		</div>
			
		<div class="col-md-2">
			<a style="color: pink" href="{{route('onde.estamos')}}"><i class="fas fa-map-marked-alt"></i></a>
		</div>

		<div class="col-md-2">
			<a style="color: pink" href="{{route('mostrar.form')}}"><i class="far fa-envelope"></i></a>
		</div>
	</div>	
	<br>

	<h1 style="text-align: center;color: #F78181">@yield('header')</h1>
	@yield('conteudo')

<!--Rodapé-->
<br>

	<footer style="position: relative;background-color:#F78181;color: #FFF;width: 100%;text-align: center;line-height: 40px;bottom: 0px">Copyright: Marta Machado</footer>
	
	<script src="{{asset('JS/all.js')}}"></script>
	<script src="{{asset('JS/jquery-3.5.1.min.js')}}"></script>
	<script src="{{asset('JS/bootstrap.js')}}"></script>
</body>
</html>
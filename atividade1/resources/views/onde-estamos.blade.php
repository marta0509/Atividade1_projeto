@extends('layout')
@section('titulo-pagina')
Onde Estamos
@endsection
@section('header')
Estamos Aqui!!
@endsection
@section('conteudo')
<br>
<div class="row"> 
	<div class="col-md-1"></div>
	<div class="col-md-10">
		<p>Conheça as lojas da MakeupLine e a sua localização exata.</p>
	</div>
	<div class="col-md-1"></div>
</div>
<br>
<div class="row" style="text-align: center"> 
	<div class="col-md-1">
		
	</div>
	<div class="col-md-5">
		<H5>Lisboa</H5>
		<p>Centro Vasco da Gama - <b>Piso 3</b></p>
		<img src="img/map_lisboa.png" width="300px" height="250px">
	</div>
	<div class="col-md-5">
		<H5>Porto</H5>
		<p>Norte Shopping - <b>Piso 1</b></p>
		<img src="img/map_porto.png" width="300px" height="250px">
	</div>
	<div class="col-md-1">
		
	</div>
	
</div>

<br>

<div class="row" style="text-align: center"> 
	<div class="col-md-1">
		
	</div>
	<div class="col-md-5">
		<H5>França-paris</H5>
		<p>Carrousel du Louvre - <b>Piso 0</b></p>
		<img src="img/map_franca.png" height="300px">
	</div>
	<div class="col-md-5">
		<H5>Faro - Brevemente</H5>
		<p>Forum Algarve - <b>Piso 0</b></p>
		<img src="img/map_faro.png" height="300px">
	</div>
	<div class="col-md-1">
		
	</div>
</div>
@endsection
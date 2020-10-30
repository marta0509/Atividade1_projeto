@extends('layout')
@section('titulo-pagina')
Contacte-nos
@endsection
@section('header')
Mensagem enviada com sucesso
@endsection
@section('conteudo')
	<br>
	<p style="text-align: center;">
		<b style="color:#F78181">Nome: </b>{{$nome}}<br>
		<b style="color:#F78181">Apelido: </b>{{$apelido}}<br>
		<b style="color:#F78181">Email: </b>{{$mail}}<br>
		<b style="color:#F78181">Mensagem: </b>{{$mensagem}}<br>
	</p>

	<br>

	<p style="text-align: center">
		<a href="{{route('entrada')}}">
			<button style="background:white;color:#F78181" href="{{route('entrada')}}" ><b>Voltar</b></button>
		</a>
	</p>
@endsection
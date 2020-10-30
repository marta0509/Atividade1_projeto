@extends('layout')
@section('titulo-pagina')
Formulário
@endsection
@section('header')
Login
@endsection
@section('conteudo')
	<!--aqui fica o form-->
<br>

	<div class="row">
		<div class="col-md-4">
			
		</div>

		<div class="col-md-4">
			<form method="post" action="{{route('processar.form')}}">
				@csrf
				<label for="nome" style="color: #F78181"><b>Nome:</b></label>
				<input type="text" name="nome">
				<br>

				<label for="apelido" style="color: #F78181"><b>Apelido:</b></label>
				<input type="text" name="apelido">
				<br>

				<label for="mail" style="color: #F78181"><b>Email:</b></label>
				<input type="text" name="mail">
				<br>

				<label for="mensagem" style="color: #F78181"><b>Mensagem:</b></label>
				<input type="text" name="mensagem">
				<br>
				<br>
				<button style="background: white;color:#F78181 " type="submit"><b>Enviar</b></button>
				
			</form>
		</div>

		<div class="col-md-4">
			
		</div>
	</div>
@endsection
@extends('index')

@include('ed-2015.menu.menu-portada')

@section('contenido')
<br>

<div class="jumbotron">
	<h1>Bienvenidos al torneo de PPTLS</h1>

	<p class="lead text-justify">Os damos la bienvenida a la presente edición (2015) del torneo de Piedra - Papel - Tijera - Lagarto - Spock. El ganador recibirá una placa conmemorativa y un diploma, además, se obsequiará a todos los participantes con una camiseta.</p>

	<p class="lead text-justify">¡Qué gane el mejor!</p>

	<p>
		<a class="btn btn-lg btn-success" href="{{ url('/2015/inscripcion') }}" role="button">Inscripciones</a>
	</p>
</div>
@endsection
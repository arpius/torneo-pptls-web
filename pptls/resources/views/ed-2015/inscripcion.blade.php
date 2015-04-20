@extends('index')

@include('ed-2015.menu.menu-portada')

@section('contenido')
<br>

<div class="row">
	<div class="col-md-12">
		<div class="panel panel-default">
			<div class="panel-heading">Nuevo jugador</div>
			<div class="panel-body">
				
				@include('ed-2015.formulario.mensajes')

				{!! Form::open(['url' => '2015/inscripcion', 'method' => 'post']) !!}
					@include('ed-2015.formulario.campos')

					<button type="submit" class="btn btn-default">Confirmar</button>
				{!! Form::close() !!}
			</div>
		</div>
	</div>
</div>
@endsection
@extends('index')

@include('ed-2015.menu.menu-clasificacion')

@section('contenido')
<br>

<div class="panel panel-default">
	<br>
	
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				@include('ed-2015.formulario.tabla')
			</div>
			{!! $jugadores->render() !!}
		</div>
	</div>

</div>
@endsection
@extends('index')

@include('ed-2015.menu.menu-reglamento')

@section('contenido')
<br>

<div class="panel panel-default">
	<div class="panel-body row">
		<div class="col-lg-4 col-lg-offset-2">
			<ul class="list-group lead text-justify">
				<li class="list-group-item list-group-item-tijeras">Tijera corta papel.</li>
				<li class="list-group-item list-group-item-warning">Papel cubre piedra.</li>
				<li class="list-group-item list-group-item-danger">Piedra aplasta lagarto.</li>
				<li class="list-group-item list-group-item-success">Lagarto envenena a Spock.</li>
				<li class="list-group-item list-group-item-info">Spock destroza tijera.</li>
				<li class="list-group-item list-group-item-tijeras">Tijera decapita lagarto.</li>
				<li class="list-group-item list-group-item-success">Lagarto come papel.</li>
				<li class="list-group-item list-group-item-warning">Papel refuta a Spock.</li>
				<li class="list-group-item list-group-item-info">Spock vaporiza piedra.</li>
				<li class="list-group-item list-group-item-danger">Piedra aplasta tijera.</li>
			</ul>
		</div>

		<div class="col-lg-6">
			{!! Html::image('img/pptls.jpg', 'normas pptls', array('class' => 'img-responsive center-block')) !!}
		</div>
	</div>
</div>
@endsection
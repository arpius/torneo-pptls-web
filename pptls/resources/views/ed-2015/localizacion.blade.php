@extends('index')

@include('ed-2015.menu.menu-localizacion')

@section('contenido')
<br>

<div class="panel panel-default">
  	<div class="panel-body">
  		<div class="col-lg-12">
    		<p class="lead text-justify">
    			<span class="alert-warning">El evento se desarrollará el día 17 de mayo a partir de las 11:00 de la mañana en la plaza Juan Urrutia de Amurrio (Araba). Una vez terminado el torneo se procederá al reparto de premios.</span>
    		</p>
		</div>

		<div class="col-lg-5">
    		<img class="img-thumbnail" src="http://maps.googleapis.com/maps/api/staticmap?center=43.052413,-3.001316&zoom=10&size=440x460&markers=color:purple%7C43.052468, -3.000801&sensor=false">
    	</div>

    	<div class="col-lg-2"></div>

    	<div class="col-lg-5">
    		<img class="img-thumbnail" src="http://maps.googleapis.com/maps/api/staticmap?center=43.052413,-3.001316&zoom=18&size=440x460&markers=color:purple%7C43.052468, -3.000801&sensor=false">
    	</div>
	</div>
</div>
@endsection
@section('menu')
	<ul class="nav nav-pills nav-justified">
		<li role="presentation" class="active">{!! Html::link('2015', 'Inicio') !!}</li>
		<li role="presentation">{!! Html::link('2015/reglamento', 'Reglamento') !!}</li>
		<li role="presentation">{!! Html::link('2015/localizacion', 'Localización') !!}</li>
		<li role="presentation">{!! Html::link('2015/clasificacion', 'Clasificación') !!}</li>
	</ul>
@stop
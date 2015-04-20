<div class="form-group">
	{!! Form::label('nombre', 'Nombre') !!}
	{!! Form::text('nombre', null, ['class' => 'form-control', 'placeholder' => 'Introduce tu nombre de pila...']) !!}
</div>
<div class="form-group">
	{!! Form::label('apellido', 'Primer apellido') !!}
	{!! Form::text('apellido', null, ['class' => 'form-control', 'placeholder' => 'Introduce tu primer apellido...']) !!}
</div>
<div class="form-group">
	{!! Form::label('localidad', 'Localidad') !!}
	{!! Form::text('localidad', null, ['class' => 'form-control', 'placeholder' => 'Introduce tu localidad...']) !!}
</div>
<div class="form-group">
	{!! Form::label('provincia', 'Provincia') !!}
	{!! Form::select('provincia', $provincias, null, ['class' => 'form-control']) !!}
</div>
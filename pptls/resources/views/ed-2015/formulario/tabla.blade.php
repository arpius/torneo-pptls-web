<table class="table table-striped">
	<tr>
		<th>#</th>
		<th>Nombre</th>
		<th>Apellido</th>
		<th>Localidad</th>
		<th>Provincia</th>
		<th>Victorias</th>
		<th>Derrotas</th>
	</tr>

	@foreach ($jugadores as $jugador)
	<tr data-id="{{ $jugador->id }}">
		<td>{{ $jugador->id }}</td>
		<td>{{ $jugador->nombre }}</td>
		<td>{{ $jugador->apellido }}</td>
		<td>{{ $jugador->localidad }}</td>
		<td>{{ $jugador->provincia }}</td>
		<td>{{ $jugador->victorias }}</td>
		<td>{{ $jugador->derrotas }}</td>
	</tr>
	@endforeach
</table>
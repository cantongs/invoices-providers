@extends('layouts.layout')

@section('content')

	<div class="page-header">
		<h1>Factures <small>relació material-proveïdor</small></h1>
	</div>

	@if ($factures->isEmpty())
		<p>No hi ha factures a llistar</p>
		<a href="{{ action('FacturesController@create') }}" class="btn btn-default">Alta factura</a>
	@else
		<a href="{{ action('FacturesController@create') }}" class="btn btn-default">Alta factura</a>
		<table class="table table-striped table-compressed table-hover">
			<thead>
				<tr>
					<th>Id</th>
					<th>Proveïdor</th>
					<th>Data</th>
					<th>Alta el</th>
					<th>Modificada el</th>
					<th>Accions</th>
				</tr>
			</thead>
			<tbody>
				@foreach($factures as $factura)
				<tr>
					<td>{{ $factura->idfactura }}</td>
					{{ $proveidor = Factura::find(1)->proveidor }}
					<td>{{ $proveidor->nom }}</td>
					<td>{{ $factura->data }}</td>
					<td>{{ $factura->created_at }}</td>
					<td>{{ $factura->updated_at }}</td>
					<td>
						<a href="{{ action('FacturesController@edit', $factura->id) }}" class="btn btn-default">Edita</a>
						<a href="{{ action('FacturesController@delete', $factura->id) }}" class="btn btn-danger">Esborra</a>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
	@endif
@stop
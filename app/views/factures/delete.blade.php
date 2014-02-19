@extends('layouts.layout')

@section('content')
	<?php $articles = Factura::find($factura->id)->articles ?>
	@if (count($articles) > 0)
	<div class="page-header">
        <h4>Hi ha material vinculat a la factura. No puc esborrar!</h4>
    </div>
    @else
    <div class="page-header">
        <h1>Elimina factura {{ $factura->idfactura }} <small>Estàs segur?</small></h1>
    </div>
    <form action="{{ action('FacturesController@handleDelete') }}" method="post" role="form">
        <input type="hidden" name="factura" value="{{ $factura->id }}" />
        <input type="submit" class="btn btn-danger" value="Si" />
        <a href="{{ action('FacturesController@index') }}" class="btn btn-default">No!</a>
    </form>
    @endif
@stop
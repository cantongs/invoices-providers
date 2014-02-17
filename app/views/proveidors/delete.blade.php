@extends('layouts.layout')

@section('content')
    <div class="page-header">
        <h1>Elimina {{ $proveidor->nom }} <small>Estàs segur?</small></h1>
    </div>
    <form action="{{ action('ProveidorsController@handleDelete') }}" method="post" role="form">
        <input type="hidden" name="proveidor" value="{{ $proveidor->id }}" />
        <input type="submit" class="btn btn-danger" value="Si" />
        <a href="{{ action('ProveidorsController@index') }}" class="btn btn-default">No!</a>
    </form>
@stop
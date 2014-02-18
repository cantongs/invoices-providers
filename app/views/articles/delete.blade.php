@extends('layouts.layout')

@section('content')
    <div class="page-header">
        <h1>Elimina material {{ $article->descripcio }} amb nº serie {{ $article->nserie }} <small>Estàs segur?</small></h1>
    </div>
    <form action="{{ action('ArticlesController@handleDelete') }}" method="post" role="form">
        <input type="hidden" name="article" value="{{ $article->id }}" />
        <input type="submit" class="btn btn-danger" value="Si" />
        <a href="{{ action('ArticlesController@index') }}" class="btn btn-default">No!</a>
    </form>
@stop
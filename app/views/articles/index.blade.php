@extends('layouts.layout')

@section('content') <!-- injecció contingut dins secció layout. va emparellat amb stop -->

    <div class="page-header">
        <h1>Articles <small>relació material-factura</small></h1>
    </div>

    @if ($articles->isEmpty())
        <p>No hi ha articles! :(</p>
    @else
        <a href="{{ action('ArticlesController@create') }}" class="btn btn-default">Nova entrada</a>
        <table class="table table-striped table-compressed table-hover">
            <thead>
                <tr>
                    <th>Descripcio</th>
                    <th>Numero Serie</th>
                    <th>Quantitat</th>
                    <th>Factura</th>
                    <th>Accions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($articles as $article)
                <tr>
                    <td>{{ $article->descripcio }}</td>
                    <td>{{ $article->nserie }}</td>
                    <td>{{ $article->quantitat }}</td>
                    <td>10/2013</td>
                    <td>
                        <a href="{{ action('ArticlesController@edit', $article->id) }}" class="btn btn-default">Edit</a>
                        <a href="{{ action('ArticlesController@delete', $article->id) }}" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    @endif
@stop
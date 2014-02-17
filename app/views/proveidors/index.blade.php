@extends('layouts.layout')

@section('content') <!-- injecció contingut dins secció layout. va emparellat amb stop -->

    <div class="page-header">
        <h1>Proveïdors</h1>
    </div>

    @if ($proveidors->isEmpty())
        <p>No hi ha proveïdors! :(</p>
        <a href="{{ action('ProveidorsController@create') }}" class="btn btn-default">Nou proveïdor</a>
    @else
        <a href="{{ action('ProveidorsController@create') }}" class="btn btn-default">Nou proveïdor</a>
        <table class="table table-striped table-compressed table-hover">
            <thead>
                <tr>
                    <th>Nom</th>
                    <th>Actiu</th>
                    <th>Creat el</th>
                    <th>Modificat el</th>
                    <th>Accions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($proveidors as $proveidor)
                <tr>
                    <td>{{ $proveidor->nom }}</td>
                    <td>{{ $proveidor->actiu ? 'Yes' : 'No' }}</td>
                    <td>{{ $proveidor->created_at }}</td>
                    <td>{{ $proveidor->updated_at }}</td>
                    <td>
                        <a href="{{ action('ProveidorsController@edit', $proveidor->id) }}" class="btn btn-default">Edita</a>
                        <a href="{{ action('ProveidorsController@delete', $proveidor->id) }}" class="btn btn-danger">Esborra</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    @endif
@stop
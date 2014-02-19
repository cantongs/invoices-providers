@extends('layouts.layout')

@section('content') <!-- injecció contingut dins secció layout. va emparellat amb stop -->

    <div class="page-header">
        <h1>Material <small>relació article-factura</small></h1>
    </div>

    @if ($articles->isEmpty())
        <p>No hi ha articles inventariats :(</p>
        <a href="{{ action('ArticlesController@create') }}" class="btn btn-default">Nova entrada</a>
    @else
        <a href="{{ action('ArticlesController@create') }}" class="btn btn-default">Nova entrada</a>
        <table class="table table-compressed">
            <thead>
                <tr>
                    <th>Descripcio</th>
                    <th>Numero Serie</th>
                    <th>Quantitat</th>
                    <th>Factura</th>
                    <th>Creat el</th>
                    <th>Modificat el</th>
                    <th>Accions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($articles as $article)
                <tr>
                    <td>{{ $article->descripcio }}</td>
                    <td>{{ $article->nserie }}</td>
                    <td>{{ $article->quantitat }}</td>
                    <?php 
                        $factura = Article::find($article->id)->factura;
                        $proveidor = Factura::find($factura->id)->proveidor;
                    ?>
                    <td title="{{ $proveidor->nom }}"><strong>{{ $factura->idfactura }}</strong></td>
                    <td>{{ $factura->created_at }}</td>
                    <td>{{ $factura->updated_at }}</td>
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
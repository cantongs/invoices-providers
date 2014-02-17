@extends('layouts.layout')

@section('content')

    @if (!isset($proveidor->id))
        <p>No hi ha proveïdor</p>
    @else
    <div class="page-header">
        <h1>Edit proveïdor</h1>
    </div>

    <form action="{{ action('ProveidorsController@handleEdit') }}" method="post" role="form">
        <input type="hidden" name="id" value="{{ $proveidor->id }}">

        <div class="form-group">
            <label for="nom">Nom</label>
            <input type="text" class="form-control" name="nom" value="{{ $proveidor->nom }}" />
        </div>
        <div class="checkbox">
            <label for="actiu">
                <input type="checkbox" name="actiu" {{ $proveidor->actiu ? 'checked' : '' }} /> Actiu?
            </label>
        </div>
        <input type="submit" value="Save" class="btn btn-primary" />
        <a href="{{ action('ProveidorsController@index') }}" class="btn btn-link">Cancel</a>
    </form>
    @endif
@stop
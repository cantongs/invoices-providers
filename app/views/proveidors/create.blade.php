@extends('layouts.layout')

@section('content')
    <div class="page-header">
        <h1>Crea nou proveïdor</h1>
    </div>

    <form class="form-horizontal form-small" action="{{ action('ProveidorsController@handleCreate') }}" method="post" role="form">
        <div class="form-group">
            <div class="col-lg-3">
                <label for="nom">Nom</label>
                <input type="text" class="form-control" name="nom" />
            </div>
        </div>
        <div class="form-group">
            <div class="col-lg-3">
                <div class="checkbox">
                    <label for="actiu">Actiu?</label>
                    <input type="checkbox" name="actiu" />
                </div>
            </div>
        </div>
        <br>
        
        <input type="submit" value="Create" class="btn btn-primary" />
        <a href="{{ action('ProveidorsController@index') }}" class="btn btn-link">Cancel</a>
    </form>
@stop
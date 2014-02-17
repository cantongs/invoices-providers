@extends('layouts.layout')

@section('content')
    <div class="page-header">
        <h1>Crea nou article <small> i emparella amb la seva factura</small></h1>
    </div>

    <form class="form-horizontal form-small" action="{{ action('ArticlesController@handleCreate') }}" method="post" role="form">
        <div class="form-group">
            <div class="col-lg-5">
                <label for="descripcio">Descripcio</label>
                <input type="text" class="form-control" name="descripcio" />
            </div>
        </div>
        <div class="form-group">
            <div class="col-lg-4">
                <label for="nserie">N.Serie</label>
                <input type="text" class="form-control" name="nserie" />
            </div>
        </div>
        <div class="form-group">
            <div class="col-lg-1">
                <label for="quantitat">Quantitat</label>
                <input type="text" class="form-control" name="quantitat" />
            </div>
        </div>
         <div class="form-group">
            <div class="col-lg-3">
                <label for="factura">Factura</label>
                <select class="form-control">
                    <option>1/2013</option>
                    <option>3/2012</option>
                    <option>3/2013</option>
                    <option>4/2012</option>
                    <option>5/2013</option>
                </select>
            </div>
        </div>
        <input type="submit" value="Create" class="btn btn-primary" />
        <a href="{{ action('ArticlesController@index') }}" class="btn btn-link">Cancel</a>
    </form>
@stop
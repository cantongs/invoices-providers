@extends('layouts.layout')

@section('content')
    <div class="page-header">
        <h1>Crea nova factura</h1>
    </div>

    <form class="form-horizontal form-small" action="{{ action('FacturesController@handleCreate') }}" method="post" role="form">
        <div class="form-group">
            <div class="col-lg-2">
                <label for="idfactura">Idfactura</label>
                <input class="required" type="text" class="form-control" name="idfactura" placeholder="10/2013" />
            </div>
        </div>
        <div class="form-group">
            <div class="col-lg-2">
                <label for="proveidor">Proveïdor</label>
                <select name="idproveidor">
                    <?php $proveidors = Proveidor::whereRaw('actiu=1')->get(); ?>
                    @foreach($proveidors as $proveidor)
                    <option value="{{ $proveidor->id }}">{{ $proveidor->nom }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <!--<div class="form-group">
            <div class="col-lg-2">
                <label for="data">Data</label>
                <input class="required" type="text" class="form-control" name="data" placeholder="17-02-2014" />
            </div>
        </div>-->
        <br>
        
        <input type="submit" value="Create" class="btn btn-primary" />
        <a href="{{ action('FacturesController@index') }}" class="btn btn-link">Cancel</a>
    </form>
@stop
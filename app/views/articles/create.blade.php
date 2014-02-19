@extends('layouts.layout')

@section('content')
    <div class="page-header">
        <h1>Crea nou article <small> i emparella amb la seva factura</small></h1>
    </div>

    <form class="form-horizontal form-small" action="{{ action('ArticlesController@handleCreate') }}" method="post" role="form">
        <div class="form-group">
            <div class="col-lg-6">
                <label for="descripcio">Descripcio</label>
                <input class="required" type="text" class="form-control" name="descripcio" />
            </div>
        </div>
        <div class="form-group">
            <div class="col-lg-2">
                <label for="nserie">N.Serie</label>
                <input type="text" class="form-control" name="nserie" />
            </div>
        </div>
        <div class="form-group">
            <div class="col-lg-1">
                <label for="quantitat">Quantitat</label>
                <input class="required" type="text" class="form-control" name="quantitat" maxlength="2" />
            </div>
        </div>
         <div class="form-group">
            <div class="col-lg-3">
                <label for="factura">Factura</label>
                <select class="form-control" name="idfactura">
                    <?php $factures = Factura::all(); ?>
                    @foreach($factures as $factura)
                    <?php $proveidor = Factura::find($factura->id)->proveidor; ?>
                    <option value="{{ $factura->id }}">{{ $factura->idfactura }} - {{ $proveidor->nom }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <input type="submit" value="Create" class="btn btn-primary" />
        <a href="{{ action('ArticlesController@index') }}" class="btn btn-link">Cancel</a>
    </form>
@stop
@extends('layouts.layout')

@section('content')

    <div class="page-header">
        <h1>Edita factura</h1>
    </div>

    <form class="form-horizontal form-small" action="{{ action('FacturesController@handleEdit') }}" method="post" role="form">
        <input type="hidden" name="id" value="{{ $factura->id }}">

        <div class="form-group">
            <div class="col-lg-2">
                <label for="idfactura">Idfactura</label>
                <input type="text" class="form-control" name="idfactura" value="{{ $factura->idfactura }}" />
            </div>
        </div>
        <div class="form-group">
            <div class="col-lg-2">
                <label for="proveidor">Proveïdor</label>
                <select name="idproveidor">
                    <?php $proveidors = Proveidor::all(); ?>
                    @foreach($proveidors as $proveidor)
                    <option value="{{ $proveidor->id }}" {{ $proveidor->id == $factura->idproveidor ? 'selected' : '' }}>{{ $proveidor->nom }}</option>
                    @endforeach
                </select>
            </div>
        </div>
         <div class="form-group">
            <div class="col-lg-2">
                <label for="data">Data</label>
                <input type="text" class="form-control" name="data" value="{{ $factura->data }}" />
            </div>
        </div>
        <br>
        
        <input type="submit" value="Edita" class="btn btn-primary" />
        <a href="{{ action('FacturesController@index') }}" class="btn btn-link">Cancel</a>
    </form>
@stop
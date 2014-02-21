@extends('layouts.layout')

@section('content')

    <div class="page-header">
        <h1>Edita article</h1>
    </div>

    <form class="form-horizontal form-small" action="{{ action('ArticlesController@handleEdit') }}" method="post" role="form">
        <input type="hidden" name="id" value="{{ $article->id }}">

        <div class="form-group">
            <div class="col-lg-4">
                <label for="descripcio">Descripcio</label>
                <input type="text" class="form-control" name="descripcio" value="{{ $article->descripcio }}" />
            </div>
        </div>
        <div class="form-group">
            <div class="col-lg-2">
                <label for="nserie">N.Serie</label>
                <input type="text" class="form-control" name="nserie" value="{{ $article->nserie }}" />
            </div>
        </div>
        <div class="form-group">
            <div class="col-lg-1">
                <label for="quantitat">Quantitat</label>
                <input type="text" class="form-control" name="quantitat" maxlength="2" value="{{ $article->quantitat }}" />
            </div>
        </div>
        <div class="form-group">
            <div class="col-lg-1">
                <div class="checkbox">
                    <label for="actiu">
                        <input type="checkbox" name="actiu" {{ $article->actiu ? 'checked' : '' }} /> Actiu?
                    </label>
                </div>
            </div>
        </div>
         <div class="form-group">
            <div class="col-lg-3">
                <label for="factura">Factura</label>
                <select class="form-control" name="idfactura">
                    <?php $factures = Factura::all(); ?>
                    @foreach($factures as $factura)
                    <?php $proveidor = Factura::find($factura->id)->proveidor; ?>
                    <option value="{{ $factura->id }}" {{ $factura->id == $article->idfactura ? 'selected' : '' }}>{{ $factura->idfactura }} - {{ $proveidor->nom }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <input type="submit" value="Edita" class="btn btn-primary" />
        <a href="{{ action('ArticlesController@index') }}" class="btn btn-link">Cancel</a>
    </form>
@stop
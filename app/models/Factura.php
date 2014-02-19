<?php

class Factura extends Eloquent {

	protected $table = 'factures';

	public function proveidor()
	{
		return $this->belongsTo('Proveidor', 'idproveidor', 'id');
	}

	public function articles()
	{
		return $this->hasMany('Article', 'idfactura', 'id' );
	}
}
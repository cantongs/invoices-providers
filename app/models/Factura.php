<?php

class Factura extends Eloquent {

	protected $table = 'factures';

	public function proveidor()
	{
		return $this->belongsTo('Proveidor');
	}
}
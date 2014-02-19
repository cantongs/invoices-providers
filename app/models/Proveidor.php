<?php

class Proveidor extends Eloquent {

	public function factures()
	{
		return $this->hasMany('Factura', 'idproveidor', 'id');
	}

}
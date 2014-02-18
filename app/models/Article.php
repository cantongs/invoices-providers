<?php

class Article extends Eloquent {

	public function factura()
	{
		return $this->belongsTo('Factura', 'idfactura', 'id');
	}

}
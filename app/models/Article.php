<?php

class Article extends Eloquent {

	public function factura()
	{
		return $this->hasOne('Factura');
	}

}
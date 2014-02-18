<?php

class FacturesController extends BaseController
{

	/**
	* Display a listing of factures
	*
	* @return Response
	*/
	public function index()
	{
		$factures = Factura::all();
		return View::make('factures.index', compact('factures'));
	}

	public function create()
	{
		// show the create factura form
		return View::make('factures.create');
	}

	public function handleCreate()
	{
		// Handle create form submission
		$factura = new Factura;
		$factura->idfactura 		= Input::get('idfactura');
		$factura->idproveidor 	= Input::get('idproveidor');
		$factura->data 			= Input::get('data');
		$factura->save();

		return Redirect::action('FacturesController@index');
	}

	public function edit(Factura $factura)
	{
		// Show the edit article form
		return View::make('factures.edit', compact('factura'));
	}

	public function handleEdit()
	{
		// Handle edit form submission
		$factura = Factura::findOrFail(Input::get('id'));
		$factura->idfactura		= Input::get('idfactura');
		$factura->idproveidor 	= Input::get('idproveidor');
		$factura->data 			= Input::get('data');
		$factura->save();

		return Redirect::action('FacturesController@index');
	}

	public function delete(Factura $factura)
	{
		// Show delete confirmation page
		return View::make('factures.delete', compact('factura'));
	}

	public function handleDelete()
	{
		// Handle the delete confirmation
		$factura = Factura::findOrFail(Input::get('factura'));
		$factura->delete();

		return Redirect::action('FacturesController@index');
	}
}
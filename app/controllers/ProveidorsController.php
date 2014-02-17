<?php

class ProveidorsController extends BaseController
{

	/**
	* Display a listing of factures
	*
	* @return Response
	*/
	public function index()
	{
		$proveidors = Proveidor::all();
		return View::make('proveidors.index', compact('proveidors'));
	}

	public function create()
	{
		// show the create factura form
		return View::make('proveidors.create');
	}

	public function handleCreate()
	{
		// Handle create form submission
		$proveidor = new Proveidor;
		$proveidor->nom 		= Input::get('nom');
		$proveidor->actiu 		= Input::has('actiu');
		$proveidor->save();

		return Redirect::action('ProveidorsController@index');
	}

	public function edit(Proveidor $proveidor)
	{
		// Show the edit proveidor form
		return View::make('proveidors.edit', compact('proveidor'));
	}

	public function handleEdit()
	{
		// Handle edit form submission
		$proveidor = Proveidor::findOrFail(Input::get('id'));
		$proveidor->nom 	= Input::get('nom');
		$proveidor->actiu 	= Input::has('actiu');
		$proveidor->save();

		return Redirect::action('ProveidorsController@index');
	}

	public function delete(Proveidor $proveidor)
	{
		// Show delete confirmation page
		return View::make('proveidors.delete', compact('proveidor'));
	}

	public function handleDelete()
	{
		// Handle the delete confirmation
		$proveidor = Proveidor::findOrFail(Input::get('proveidor'));
		$proveidor->delete();

		return Redirect::action('ProveidorsController@index');
	}
}
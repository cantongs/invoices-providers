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
	}

	public function edit(Article $article)
	{
		// Show the edit article form
		return View::make('factures.edit');
	}

	public function handleEdit()
	{
		// Handle edit form submission
	}

	public function delete()
	{
		// Show delete confirmation page
		return View::make('delete');
	}

	public function handleDelete()
	{
		// Handle the delete confirmation
	}
}
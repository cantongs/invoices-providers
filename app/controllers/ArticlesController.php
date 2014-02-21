<?php

class ArticlesController extends BaseController
{

	/**
	* Display a listing of materials
	*
	* @return Response
	*/
	public function index()
	{
		$articles = Article::all();
		return View::make('articles.index', compact('articles'));
	}

	public function create()
	{
		// show the create article form
		return View::make('articles.create');
	}

	public function handleCreate()
	{
		// Handle create form submission
		$article = new Article;
		$article->descripcio		= Input::get('descripcio');
		$article->nserie 			= Input::get('nserie');
		$article->quantitat 		= Input::get('quantitat');
		$article->idfactura			= Input::get('idfactura');
		$article->actiu 			= Input::has('actiu');
		$article->save();

		return Redirect::action('ArticlesController@index');
	}

	public function edit(Article $article)
	{
		// Show the edit article form
		return View::make('articles.edit', compact('article'));
	}

	public function handleEdit()
	{
		// Handle edit form submission
		$article = Article::findOrFail(Input::get('id'));
		$article->descripcio 		= Input::get('descripcio');
		$article->nserie 			= Input::get('nserie');
		$article->quantitat 		= Input::get('quantitat');
		$article->idfactura 		= Input::get('idfactura');
		$article->actiu 			= Input::has('actiu');
		$article->save();

		return Redirect::action('ArticlesController@index');
	}

	public function delete(Article $article)
	{
		// Show delete confirmation page
		return View::make('articles.delete', compact('article'));
	}

	public function handleDelete()
	{
		// Handle the delete confirmation
		//$id = Input::get('article');
		$article = Article::findOrFail(Input::get('article'));
		$article->delete();

		return Redirect::action('ArticlesController@index');
	}

	public function stock()
	{
		$articles = Article::where('actiu', '=', 0)->get();
		return View::make('articles.index', compact('articles'));
	}
}
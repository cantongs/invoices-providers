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
	}

	public function edit(Article $article)
	{
		// Show the edit article form
		return View::make('articles.edit');
	}

	public function handleEdit()
	{
		// Handle edit form submission
	}

	public function delete(Article $article)
	{
		// Show delete confirmation page
		return View::make('articles.delete', compact('article'));
	}

	public function handleDelete(Article $article)
	{
		// Handle the delete confirmation
		//$id = Input::get('article');
		$article = Article::findOrFail($article->id);
		$article->delete();

		return Redirect::action('ArticlesController@index');
	}
}
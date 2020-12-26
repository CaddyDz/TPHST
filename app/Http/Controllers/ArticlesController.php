<?php

declare(strict_types=1);

namespace TPHST\Http\Controllers;

use TPHST\Article;

class ArticlesController extends Controller
{

	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index()
	{
		return view('blog.index');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function show(Article $article)
	{
		return view('blog.article', compact('article'));
	}
}

<?php

namespace TPHST\Http\Controllers;

use Illuminate\Http\Request;
use TPHST\Article;

class ArticlesController extends Controller
{
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Article $article)
    {
        return view('article', compact('article'));
    }
}

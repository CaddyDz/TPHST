<?php

declare(strict_types=1);

namespace App\Observers;

use App\Article;

class ArticleObserver
{
	public function creating(Article $article)
	{
		$article->author_id = auth()->user()->id;
	}
}

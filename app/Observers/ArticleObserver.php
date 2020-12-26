<?php

declare(strict_types=1);

namespace TPHST\Observers;

use TPHST\Article;

class ArticleObserver
{
	public function creating(Article $article)
	{
		$article->author_id = auth()->user()->id;
	}
}

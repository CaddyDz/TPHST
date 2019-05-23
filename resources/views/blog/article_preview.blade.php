<div class="col-md-4 col-sm-6 col-xs-12">
    <div class="single-blog">
        <div class="blog-image">
            <a class="image-scale" href="{{ route('article', ['article' => $article]) }}">
                <img src="{{ $article->thumb }}" alt="{{ $article->title }}">
            </a>
        </div>
        <div class="blog-content">
            <div class="blog-title">
                <div class="blog-meta">
                    <span class="date-type">
                        {{ $article->created_at->toDateString() }}
                    </span>
                    <span class="comments-type">
                        <i class="fa fa-comment-o"></i>
                        {{ $article->commentsCount }}
                    </span>
                </div>
                <a href="{{ route('article', ['article' => $article]) }}">
                    <h4>{{ $article->title }}</h4>
                </a>
            </div>
            <div class="blog-text">
                <p>{{ $article->excerpt }}</p>
                <a class="blog-btn" href="{{ route('article', ['article' => $article]) }}">@lang('read more')</a>
            </div>
        </div>
    </div>
</div>

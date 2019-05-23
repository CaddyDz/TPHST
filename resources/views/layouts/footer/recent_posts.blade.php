<div class="col-md-3 col-sm-4 col-xs-12">
<div class="footer-content">
    <div class="footer-head">
        <h4>Post récent</h4>
        <hr>
        @foreach ($recent_articles as $article)
            <div class="single-blog">
            <div class="blog-content">
                <div class="blog-title">
                    <a href="{{ route('article', ['article' => $article]) }}">
                        <h4>{{ $article->title }}</h4>
                    </a>
                </div>
                <div class="blog-text">
                    <p>{{ $article->excerpt }}</p>
                    <a class="blog-btn" href="{{ route('article', ['article' => $article]) }}">
                        Lire la suite
                    </a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

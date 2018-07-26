<div class="blog-area area-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="section-headline text-center">
                    <h3>Dernières nouvelles</h3>
                    <p>
                        Le TPHST est un groupe d'ingénierie et d'entrepreneur général qui a acquis son expertise au cours des
                        treize dernières années.
                    </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="blog-grid home-blog">
                @for ($i = 0; $i < 3; $i++)
                    @include( 'blog.article_preview')
                @endfor 
            </div>
        </div>
    </div>
</div>

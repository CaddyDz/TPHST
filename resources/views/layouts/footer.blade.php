<footer>
    <div class="footer-area">
        <div class="container">
            <div class="row">
                @include('layouts.footer.info')
                @include('layouts.footer.services')
                @include('layouts.footer.recent_posts')
            </div>
            @include('layouts.footer.subscribe')
        </div>
    </div>
    </div>
    <div class="footer-area-bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="copyright">
                        <p>
                            @lang('Copyrights') © {{ date('Y') }}
                            <a href="/">{{ config('app.name') }}</a> Tous les droits sont réservés
                        </p>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="copyright">
                        <ul>
                            <li><a href="/about">À Propos</a></li>
                            <li><a href="/terms">Termes</a></li>
                            <li><a href="{{ url('/admin') }}">Espace Admin</a></li>
                            <li><a href="/sitemap">Site Map</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

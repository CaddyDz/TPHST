{{-- header-area start--}}
<div id="sticker" class="header-area header-area-2 hidden-xs">
    <div class="container">
        <div class="row">
            {{-- logo start--}}
            <div class="col-md-3 col-sm-3">
                <div class="logo">
                    {{-- Brand--}}
                    <a class="navbar-brand page-scroll sticky-logo" href="/">
                        <img src="/img/logo.png" width="40%" alt="Logo">
                    </a>
                </div>
            </div>
            {{-- logo end--}}
            <div class="col-md-9 col-sm-9">
                <div class="header-right-link">
                    {{-- @include('partials.search_form') --}}
                </div>
                {{-- mainmenu start--}}
                <nav class="navbar navbar-default">
                    <div class="collapse navbar-collapse" id="navbar-example">
                        <div class="main-menu">
                            @include('layouts.header.navbar_items')
                        </div>
                    </div>
                </nav>
                {{-- mainmenu end --}}
            </div>
        </div>
    </div>
</div>

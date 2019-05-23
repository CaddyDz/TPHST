@extends('layouts.app') 
@section('content')
<div class="topbar-area fix hidden-xs">
    <div class="container">
        <div class="row">
            <div class=" col-md-6 col-sm-6">
                <div class="topbar-left">
                    <p>Bienvenu à SARL TPHST</p>
                </div>
            </div>
            <div class="col-md-6 col-sm-6">
                <div class="topbar-right">
                    @include('partials.social')
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End top bar -->
<!-- header-area start -->
<div class="header-middle-area hidden-xs">
    <div class="container">
        <div class="row">
            <!-- logo start -->
            <div class="col-md-4 col-sm-3">
                <div class="logo">
                    <!-- Brand -->
                    <a class="navbar-brand page-scroll sticky-logo" href="/">
                        <img src="/img/logo.png" width="40%" alt="Logo">
                    </a>
                </div>
            </div>
            <!-- logo end -->
            <div class="col-md-8 col-sm-9">
                <div class="header-middle-link">
                    <div class="header-info">
                        <div class="header-icon">
                            <i class="fa fa-phone"></i>
                        </div>
                        <div class="header-info-text">
                            <span class="info-first">{{ setting('phone_number') }}</span>
                            <span class="info-simple">{{ setting('info_email') }}</span>
                        </div>
                    </div>
                    <div class="header-info">
                        <div class="header-icon">
                            <i class="fa fa-map-marker"></i>
                        </div>
                        <div class="header-info-text">
                            <span class="info-first">{{ setting('address') }}</span>
                            <span class="info-simple">Blida, Algérie</span>
                        </div>
                    </div>
                    <div class="header-info hidden-sm">
                        <div class="header-icon">
                            <i class="fa fa-clock-o"></i>
                        </div>
                        <div class="header-info-text">
                            <span class="info-first">Dim-Jeu : 8am - 4pm</span>
                            <span class="info-simple">Vendredi et Samedi fermé</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End middle bar -->
<div id="sticker" class="header-area hidden-xs">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <!-- mainmenu start -->
                <nav class="navbar navbar-default">
                    <div class="collapse navbar-collapse" id="navbar-example">
                        <div class="main-menu">
                             @include('partials.navbar_items')
                        </div>
                    </div>
                </nav>
                <!-- mainmenu end -->
                <div class="header-right-link">
                    <!-- search option start -->
                    {{--
                    <form action="#">
                        <div class="search-option">
                            <input type="text" placeholder="Search...">
                            <button class="button" type="submit"><i class="fa fa-search"></i></button>
                        </div>
                        <a class="main-search" href="#"><i class="fa fa-search"></i></a>
                    </form> --}}
                    <!-- search option end -->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- header-area end -->
<!-- mobile-menu-area start -->
<div class="mobile-menu-area hidden-lg hidden-md hidden-sm">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="mobile-menu">
                    <div class="logo">
                        <a href="/"><img src="/img/logo.png" alt="Logo" /></a>
                    </div>
                    <nav id="dropdown">
                          @include('partials.navbar_items')
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- mobile-menu-area end -->
</header>
<!-- header end -->
<!-- Start Bottom Header -->
<div class="page-area" style="background: url('{{ \Storage::url(setting('about.background')) }}')">
    <div class="breadcumb-overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="breadcrumb text-center">
                    <div class="section-headline white-head text-center">
                        <h3>Toutes Les Services</h3>
                    </div>
                    <ul>
                        <li class="home-bread">Acceuil</li>
                        <li>Services</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@include('services.services_showcase')
@include('partials.services')
@stop 
@section('js') {{-- jquery latest version --}}
<script src="js/vendor/jquery-1.12.4.min.js"></script>
{{-- bootstrap js --}}
<script src="js/bootstrap.min.js"></script>
{{-- owl.carousel js --}}
<script src="js/owl.carousel.min.js"></script>
{{-- Counter js --}}
<script src="js/jquery.counterup.min.js"></script>
{{-- waypoint js --}}
<script src="js/waypoints.js"></script>
{{-- isotope js --}}
<script src="js/isotope.pkgd.min.js"></script>
{{-- stellar js --}}
<script src="js/jquery.stellar.min.js"></script>
{{-- magnific js --}}
<script src="js/magnific.min.js"></script>
{{-- venobox js --}}
<script src="js/venobox.min.js"></script>
{{-- meanmenu js --}}
<script src="js/jquery.meanmenu.js"></script>
{{-- Form validator js --}}
<script src="js/form-validator.min.js"></script>
{{-- plugins js --}}
<script src="js/plugins.js"></script>
{{-- main js --}}
<script src="js/main.js"></script>


@stop

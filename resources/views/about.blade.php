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
                        <img src="{{ setting('site.logo') }}" alt="Logo">
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
                            <span class="info-first">{{ setting('site.phone_number') }}</span>
                            <span class="info-simple">{{ setting('site.info_email') }}</span>
                        </div>
                    </div>
                    <div class="header-info">
                        <div class="header-icon">
                            <i class="fa fa-map-marker"></i>
                        </div>
                        <div class="header-info-text">
                            <span class="info-first">{{ setting('site.address') }}</span>
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
                    {{-- <form action="#">
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
                        <a href="/"><img src="{{ setting('site.logo') }}" alt="Logo" /></a>
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
<div class="page-area" style="background: url('{{ setting('about.background') }}')">
    <div class="breadcumb-overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="breadcrumb text-center">
                    <div class="section-headline white-head text-center">
                        <h3>À Propos Nous</h3>
                    </div>
                    <ul>
                        <li class="home-bread">Acceuil</li>
                        <li>À Propos Nous</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END Header -->
<!-- about-area start -->
@include('partials.about')
<!-- about-area end -->
<!-- Start About Area -->
@include('partials.stats')
<!-- End About Area -->
<!--Team Area Start-->
{{-- @include('partials.team') --}}
<!--End of Team Area-->
<!-- Start FAQ -->
{{-- @include('about.faq') --}}
@stop 

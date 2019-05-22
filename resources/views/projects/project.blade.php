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
                      <img src="/img/logo.png" width="35%" alt="Logo">
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
 <!-- Start Single Project -->
 <div class="page-area">
  <div class="breadcumb-overlay"></div>
  <div class="container" style="background-image: url(/{{ $project->image }})">
      <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="breadcrumb text-center">
                  <div class="section-headline white-head text-center">
                      <h3>Details de Projet</h3>
                  </div>
                  <ul>
                      <li class="home-bread">Acceuil</li>
                      <li>{{ $project->title }}</li>
                  </ul>
              </div>
          </div>
      </div>
  </div>
</div>
<!-- END Header -->
<!-- Start project Area -->
<div class="project-single area-padding">
  <div class="container">
      <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="project-inner project-carousel-2">
                  @foreach($images as $image)
                  <div class="project-image">
                      <img src="/{{ $image->id }}/{{ $image->file_name }}" alt="{{ $image->name }}">
                  </div>
                  @endforeach
              </div>
          </div>
          <!-- End Column -->
          <div class="col-md-4 col-sm-6 col-xs-12">
              <div class="project-history">
                  <div class="project-name">
                      <ul>
                          <li>Projet: {{ $project->title }}</li>
                          {{-- <li><span>Categories</span> : Apperment</li> --}}
                          <li>Date de démarrage: {{ $project->starting_date }}</li>
                          <li>Etat: {{ $project->status }}</li>
                          {{-- <li><span>Architect</span> : Michel jone</li> --}}
                      </ul>
                  </div>
              </div>
          </div>
          <!-- End Column -->
          <div class="col-md-8 col-sm-6 col-xs-12">
              <div class="project-details">
                  <h4>{{ $project->title }}</h4>
                  <p>{{ $project->description }}</p>
                  {{-- <div class="project-share">
                      <h5>Share :</h5>
                      <ul class="project-social">
                          <li>
                              <a href="#">
                                  <i class="fa fa-facebook"></i>
                              </a>
                          </li>
                          <li>
                              <a href="#">
                                  <i class="fa fa-twitter"></i>
                              </a>
                          </li>
                          <li>
                              <a href="#">
                                  <i class="fa fa-google"></i>
                              </a>
                          </li>
                          <li>
                              <a href="#">
                                  <i class="fa fa-pinterest"></i>
                              </a>
                          </li>
                          <li>
                              <a href="#">
                                  <i class="fa fa-instagram"></i>
                              </a>
                          </li>
                      </ul>
                  </div> --}}
              </div>
          </div>
      </div>
  </div>
  <!-- End main content -->
</div>
<!-- End portfolio Area -->
@stop

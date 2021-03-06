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
                          <span class="info-first">
                              <a href="tel:{{ setting('phone_number') }}">
                                {{ setting('phone_number') }}
                              </a>
                          </span>
                          <span class="info-simple">
                            <a href="mailto:{{ setting('info_email') }}">
                                {{ setting('info_email') }}
                            </a>
                          </span>
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
                          @include('layouts.header.navbar_items')
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
                      <a href="/"><img src="/img/logo.png" alt="Logo" /></a>
                  </div>
                  <nav id="dropdown">
                      @include('layouts.header.navbar_items')
                  </nav>
              </div>
          </div>
      </div>
  </div>
</div>
<!-- mobile-menu-area end -->
</header>
<!-- header end -->

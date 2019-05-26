@extends('layouts.app') 
@section('content')
@include('partials.topbar_primary')
<!-- Start Bottom Header -->
<div class="page-area" style="background: url('{{ secure_asset(image('About Background')) }}')">
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

@extends('layouts.app')

@section('content')
@include('layouts.header')
@include('partials.slider')
<div class="banner-area">
    <div class="container">
        @include('partials.banner')
    </div>
</div>
@include('services.services_showcase')
@include('partials.stats')
@include('partials.about')
@include('partials.services')
@include('partials.portfolio')
@include('partials.blog')
@include('partials.testimonies')
@include('partials.clients')
@stop

@section('js')
	{{-- jquery latest version --}}
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

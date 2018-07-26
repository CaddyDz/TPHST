<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>SARL TPHST FRERES KHENICHE</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1"> 
		{{-- favicon --}}
    <link rel="shortcut icon" type="image/x-icon" href="/favicon.ico"> 
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u"
	 crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.0.0-beta.3/assets/owl.carousel.min.css" integrity="sha256-xzhALyOMieP6tCpGNSGBArHOUW8yd5HWuAH9Ck51CJM=" crossorigin="anonymous" />
    {{--  Belongs to owl carousel  --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.2/owl.transitions.min.css" integrity="sha256-3zREEes8dYXGOY4bOEdfzDBAzNxAB+1wdzTUbjpQhD4="
    crossorigin="anonymous" />
    <link rel="stylesheet" href="/css/meanmenu.min.css">
    {{-- font-awesome css --}}
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    {{--  These two belongs to font awesome  --}}
    <link rel="stylesheet" href="/css/flaticon.min.css">
    <link rel="stylesheet" href="/css/icon.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css" integrity="sha256-PZLhE6wwMbg4AB3d35ZdBF9HD/dI/y4RazA3iRDurss="
    crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/venobox/1.7/venobox.min.css" integrity="sha256-vyroExLnuDbSoCXvGdDUjN4y/8NSow303GT8nSpN/ww="
    crossorigin="anonymous" />
    <link rel="stylesheet" href="{{ mix('/css/app.css') }}">
    <link rel="stylesheet" href="/css/responsive.min.css">
		{{-- modernizr css--}}
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
    <!-- [if lt IE 8]>
			<p class="browserupgrade">
			You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
    <div id="preloader"></div>
    @yield('content')
    @include('layouts.footer')
    @yield('js')
</body>

</html>

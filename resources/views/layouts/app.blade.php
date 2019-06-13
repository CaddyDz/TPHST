<!doctype html>
<html class="no-js" lang="{{ config('app.locale') }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>{{ setting('title') }}</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
		{{-- favicon --}}
    <link rel="shortcut icon" type="image/x-icon" href="/favicon.ico"> 
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,500,500i,600,600i,700,800,900|Open+Sans:400,400i,600,700,700i,800">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u"
	 crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.0.0-beta.3/assets/owl.carousel.min.css" integrity="sha256-xzhALyOMieP6tCpGNSGBArHOUW8yd5HWuAH9Ck51CJM=" crossorigin="anonymous" />
    {{--  Belongs to owl carousel  --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.2/owl.transitions.min.css" integrity="sha256-3zREEes8dYXGOY4bOEdfzDBAzNxAB+1wdzTUbjpQhD4="
    crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/CaddyDz/meanMenu@v2/meanmenu.min.css">
    {{-- font-awesome css --}}
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css" integrity="sha256-PZLhE6wwMbg4AB3d35ZdBF9HD/dI/y4RazA3iRDurss="
    crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/venobox/1.7/venobox.min.css" integrity="sha256-vyroExLnuDbSoCXvGdDUjN4y/8NSow303GT8nSpN/ww="
    crossorigin="anonymous" />
    <link rel="stylesheet" href="{{ mix('/css/app.css') }}">
    @env('local')
      <link rel="stylesheet" href="/css/responsive.css">
    @else
      {{-- modernizr js --}}
      <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js" integrity="sha256-0rguYS0qgS6L4qVzANq4kjxPLtvnp5nn2nB5G1lWRv4=" crossorigin="anonymous"></script>
    @endenv
</head>

<body>
    @yield('header')
    <!-- [if lt IE 8]>
			<p class="browserupgrade">
			You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
    @yield('content')
    @include('layouts.footer')
    {{-- jquery latest version --}}
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    {{-- bootstrap js --}}
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    {{-- owl.carousel js --}}
    <script src="https://cdn.jsdelivr.net/gh/CaddyDz/OwlCarousel2@v2.3.5/dist/owl.carousel.min.js"></script>
    {{-- Counter js --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js" integrity="sha256-JtQPj/3xub8oapVMaIijPNoM0DHoAtgh/gwFYuN5rik=" crossorigin="anonymous"></script>
    {{-- waypoint js --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js" integrity="sha256-oP3taRrtdn+FEBHNMYW5KGGSmKIaD72tSAip6ItJCDM=" crossorigin="anonymous"></script>
    {{-- isotope js --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/2.2.2/isotope.pkgd.min.js" integrity="sha256-M4hn22AGHQ12lwC9Kd7yL9Y7zlXpBAAey3pL/i9JErQ=" crossorigin="anonymous"></script>
    {{-- stellar js --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/stellar.js/0.6.2/jquery.stellar.min.js" integrity="sha256-aQ6KGDKk7w8XQNZsQaQnbfeC//XPUIphSp/X/ZEwtV0=" crossorigin="anonymous"></script>
    {{-- magnific js --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js" integrity="sha256-P93G0oq6PBPWTP1IR8Mz/0jHHUpaWL0aBJTKauisG7Q=" crossorigin="anonymous"></script>
    {{-- venobox js --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/venobox/1.7.0/venobox.min.js" integrity="sha256-Q+9tk/RrLpbpICsW8NaZrLZmlXhXcz3WNw2Q6yAgjrw=" crossorigin="anonymous"></script>
    {{-- meanmenu js --}}
    <script src="https://cdn.jsdelivr.net/gh/CaddyDz/meanMenu@v2/meanmenu.min.js"></script>
    {{-- Form validator js --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/1000hz-bootstrap-validator/0.8.1/validator.min.js" integrity="sha256-ZCYp48kB7gXNRWbK0M6gji4MipHd9j4kTF+ItYoIkRk=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/scrollup/2.4.1/jquery.scrollUp.min.js" integrity="sha256-t2YrqZoTLq/Qt8zIw0BMiuRC2X5+a3O7PODU8RwoyYw=" crossorigin="anonymous"></script>
    {{-- main js --}}
    <script src="{{ mix('/js/app.js') }}"></script>
</body>

</html>

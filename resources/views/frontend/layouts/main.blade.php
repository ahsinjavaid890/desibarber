<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    @yield('tittle')
    <link rel="shortcut icon" href="img/favicon.png" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700;800;900&display=swap">
    <link rel="stylesheet" href="{{ asset('public/front/css/plugins.css') }}" />
    <link rel="stylesheet" href="{{ asset('public/front/css/style.css') }}" />
</head>

<body>
		@include('frontend.includes.header')
			@yield('content')
		@include('frontend.includes.footer')
		 <!-- jQuery -->
    <script src="{{ asset('public/front/js/jquery-3.6.3.min.js') }}"></script>
    <script src="{{ asset('public/front/js/jquery-migrate-3.0.0.min.js') }}"></script>
    <script src="{{ asset('public/front/js/modernizr-2.6.2.min.js') }}"></script>
    <script src="{{ asset('public/front/js/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('public/front/js/jquery.isotope.v3.0.2.js') }}"></script>
    <script src="{{ asset('public/front/js/popper.min.js') }}"></script>
    <script src="{{ asset('public/front/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('public/front/js/scrollIt.min.js') }}"></script>
    <script src="{{ asset('public/front/js/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('public/front/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('public/front/js/jquery.stellar.min.js') }}"></script>
    <script src="{{ asset('public/front/js/jquery.magnific-popup.js') }}"></script>
    <script src="{{ asset('public/front/js/YouTubePopUp.js') }}"></script>
    <script src="{{ asset('public/front/js/select2.js') }}"></script>
    <script src="{{ asset('public/front/js/datepicker.js') }}"></script>
    <script src="{{ asset('public/front/js/smooth-scroll.min.js') }}"></script>
    <script src="{{ asset('public/front/js/custom.js') }}"></script>
</body>

</html>

@yield('script')
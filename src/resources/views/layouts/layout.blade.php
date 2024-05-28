<!doctype html>
<html class="no-js" lang="zxx">
    <head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="keywords" content="Site keywords here">
		<meta name="description" content="">
		<meta name='copyright' content=''>
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		
        <title>ООО «НАНОЭЛЕКТРОБИОТЕХНОЛОГИИ» @yield('title')</title>
		
        <link rel="icon" href="{{ asset('img/favicon.png') }}">
		
		<link href="{{ asset('css/gfonts.css') }}" rel="stylesheet">

		<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
		<link rel="stylesheet" href="{{ asset('css/nice-select.css') }}">
        <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/icofont.css') }}">
		<link rel="stylesheet" href="{{ asset('css/slicknav.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/owl-carousel.css') }}">
		<link rel="stylesheet" href="{{ asset('css/datepicker.css') }}">
        <link rel="stylesheet" href="{{ asset('css/animate.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}">
		
        <link rel="stylesheet" href="{{ asset('css/normalize.css') }}">
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">

		<link rel="shortcut icon" href="{{ asset('img/favicon/favicon.ico') }}" type="image/x-icon" />
		<link rel="icon" type="image/png" href="{{ asset('img/favicon/favicon-16x16.png') }}" sizes="16x16">
		<link rel="icon" type="image/png" href="{{ asset('img/favicon/favicon-32x32.png') }}" sizes="32x32">
		<link rel="icon" type="image/png" href="{{ asset('img/favicon/android-chrome-192x192.png') }}" sizes="192x192">
		<link rel="icon" type="image/png" href="{{ asset('img/favicon/android-chrome-512x512.png') }}" sizes="512x512">

        @stack('style')
    </head>
    <body>
        @include('layouts.header')
		
        @yield('content')
		
        @include('layouts.footer')
		
        <script src="{{ asset('js/jquery.min.js') }}"></script>
		<script src="{{ asset('js/jquery-migrate-3.0.0.js') }}"></script>
		<script src="{{ asset('js/jquery-ui.min.js') }}"></script>
        <script src="{{ asset('js/easing.js') }}"></script>
		<script src="{{ asset('js/colors.js') }}"></script>
		<script src="{{ asset('js/popper.min.js') }}"></script>
		<script src="{{ asset('js/bootstrap-datepicker.js') }}"></script>
        <script src="{{ asset('js/jquery.nav.js') }}"></script>
		<script src="{{ asset('js/slicknav.min.js') }}"></script>
        <script src="{{ asset('js/jquery.scrollUp.min.js') }}"></script>
		<script src="{{ asset('js/niceselect.js') }}"></script>
		<script src="{{ asset('js/tilt.jquery.min.js') }}"></script>
        <script src="{{ asset('js/owl-carousel.js') }}"></script>
		<script src="{{ asset('js/jquery.counterup.min.js') }}"></script>
		<script src="{{ asset('js/steller.js') }}"></script>
		<script src="{{ asset('js/wow.min.js') }}"></script>
		<script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
		<script src="{{ asset('js/waypoints.min.js') }}"></script>
		<script src="{{ asset('js/bootstrap.min.js') }}"></script>
		<script src="{{ asset('js/main.js') }}"></script>
        @stack('script')
    </body>
</html>
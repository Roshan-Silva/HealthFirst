<!doctype html>
<html class="no-js" lang="zxx">
    <head>
        <!-- Meta Tags -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="keywords" content="Site keywords here">
		<meta name="description" content="">
		<meta name='copyright' content=''>
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		
		<!-- Title -->
        <title>HealthFirst</title>
		
		<!-- Favicon -->
        <link rel="icon" href="{{asset('frontend/img/favicon.png') }}">
		
		<!-- Google Fonts -->
		<link href="https://fonts.googleapis.com/css?family=Poppins:200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="{{asset('frontend/css/bootstrap.min.css') }}">
		<!-- Nice Select CSS -->
		<link rel="stylesheet" href="{{asset('frontend/css/nice-select.css') }}">
		<!-- Font Awesome CSS -->
        <link rel="stylesheet" href="{{asset('frontend/css/font-awesome.min.css') }}">
		<!-- icofont CSS -->
        <link rel="stylesheet" href="{{asset('frontend/css/icofont.css') }}">
		<!-- Slicknav -->
		<link rel="stylesheet" href="{{asset('frontend/css/slicknav.min.css') }}">
		<!-- Owl Carousel CSS -->
        <link rel="stylesheet" href="{{asset('frontend/css/owl-carousel.css') }}">
		<!-- Datepicker CSS -->
		<link rel="stylesheet" href="{{asset('frontend/css/datepicker.css') }}">
		<!-- Animate CSS -->
        <link rel="stylesheet" href="{{asset('frontend/css/animate.min.css') }}">
		<!-- Magnific Popup CSS -->
        <link rel="stylesheet" href="{{asset('frontend/css/magnific-popup.css') }}">
		
		<!-- Medipro CSS -->
        <link rel="stylesheet" href="{{asset('frontend/css/normalize.css') }}">
        <link rel="stylesheet" href="{{asset('frontend/style.css') }}">
        <link rel="stylesheet" href="{{asset('frontend/css/responsive.css') }}">
		
    </head>
    <body>
	
		<!-- Preloader -->
        @include('frontend.layouts.preloader')
        <!-- End Preloader -->
		
	
	
		<!-- Header Area -->
		@include('frontend.layouts.header')
		<!-- End Header Area -->
		
		@yield('content')
		
		<!-- Footer Area -->
		@include('frontend.layouts.footer')
		<!--/ End Footer Area -->
		
		<!-- jquery Min JS -->
        <script src="{{asset('frontend/js/jquery.min.js') }}"></script>
		<!-- jquery Migrate JS -->
		<script src="{{asset('frontend/js/jquery-migrate-3.0.0.js') }}"></script>
		<!-- jquery Ui JS -->
		<script src="{{asset('frontend/js/jquery-ui.min.js') }}"></script>
		<!-- Easing JS -->
        <script src="{{asset('frontend/js/easing.js') }}"></script>
		<!-- Color JS -->
		<script src="{{asset('frontend/js/colors.js') }}"></script>
		<!-- Popper JS -->
		<script src="{{asset('frontend/js/popper.min.js') }}"></script>
		<!-- Bootstrap Datepicker JS -->
		<script src="{{asset('frontend/js/bootstrap-datepicker.js') }}"></script>
		<!-- Jquery Nav JS -->
        <script src="{{asset('frontend/js/jquery.nav.js') }}"></script>
		<!-- Slicknav JS -->
		<script src="{{asset('frontend/js/slicknav.min.js') }}"></script>
		<!-- ScrollUp JS -->
        <script src="{{asset('frontend/js/jquery.scrollUp.min.js') }}"></script>
		<!-- Niceselect JS -->
		<script src="{{asset('frontend/js/niceselect.js') }}"></script>
		<!-- Tilt Jquery JS -->
		<script src="{{asset('frontend/js/tilt.jquery.min.js') }}"></script>
		<!-- Owl Carousel JS -->
        <script src="{{asset('frontend/js/owl-carousel.js') }}"></script>
		<!-- counterup JS -->
		<script src="{{asset('frontend/js/jquery.counterup.min.js') }}"></script>
		<!-- Steller JS -->
		<script src="{{asset('frontend/js/steller.js') }}"></script>
		<!-- Wow JS -->
		<script src="{{asset('frontend/js/wow.min.js') }}"></script>
		<!-- Magnific Popup JS -->
		<script src="{{asset('frontend/js/jquery.magnific-popup.min.js') }}"></script>
		<!-- Counter Up CDN JS -->
		<script src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
		<!-- Bootstrap JS -->
		<script src="{{asset('frontend/js/bootstrap.min.js') }}"></script>
		<!-- Main JS -->
		<script src="{{asset('frontend/js/main.js') }}"></script>
    </body>
</html>
<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Home || Trinoq Technology</title>
    <meta name="robots" content="noindex, follow">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('front_end\images\favicon.ico') }}">
    <!-- CSS
	============================================ -->
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('front_end\css\vendor\bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{asset('front_end\css\plugins\slick.css') }}">
    <link rel="stylesheet" href="{{asset('front_end\css\plugins\font-awesome.css') }}">
    <link rel="stylesheet" href="{{asset('front_end\css\plugins\plugins.css') }}">
    <link rel="stylesheet" href="{{asset('front_end\css\style.css') }}">
</head>

<body>
    <div class="main-content">
        <!-- Start Header -->
        @include('front_end.layouts.page.header');
        <!-- Start Header -->

        <!-- Start Popup Mobile Menu -->
        @include('front_end.layouts.page.popup');
        <!-- End Popup Mobile Menu -->

        <!-- Start Sidebar Area  -->
       @include('front_end.layouts.page.sidenav');
        <!-- End Sidebar Area  -->
        <!-- Start Page Wrapper -->
        @yield('content');
        <!-- End Page Wrapper -->
        <!-- Start Footer Area -->
        @include('front_end.layouts.page.footer');
        <!-- End Footer Area -->
    </div>

    <!-- JS
============================================ -->

    <!-- Modernizer JS -->
    <script src="{{asset('front_end\js\vendor\modernizr.min.js') }}"></script>
    <!-- jQuery JS -->
    <script src="{{asset('front_end\js\vendor\jquery.js') }}"></script>
    <!-- Bootstrap JS -->
    <script src="{{asset('front_end\js\vendor\bootstrap.min.js') }}"></script>
    <script src="{{asset('front_end\js\waypoints.min.js') }}"></script>
    <script src="{{asset('front_end\js\wow.js') }}"></script>
    <script src="{{asset('front_end\js\counterup.js') }}"></script>
    <script src="{{asset('front_end\js\imagesloaded.js') }}"></script>
    <script src="{{asset('front_end\js\isotope.js') }}"></script>
    <script src="{{asset('front_end\js\tilt.js') }}"></script>
    <script src="{{asset('front_end\js\anime.js') }}"></script>
    <script src="{{asset('front_end\js\tweenmax.js') }}"></script>
    <script src="{{asset('front_end\js\slipting.js') }}"></script>
    <script src="{{asset('front_end\js\scrollmagic.js') }}"></script>
    <script src="{{asset('front_end\js\addindicators.js') }}"></script>
    <script src="{{asset('front_end\js\slick.js') }}"></script>
    <script src="{{asset('front_end\js\youtube.js') }}"></script>
    <script src="{{asset('front_end\js\countdown.js') }}"></script>
    <script src="{{asset('front_end\js\scrollup.js') }}"></script>
    <script src="{{asset('front_end\js\stickysidebar.js') }}"></script>
    <script src="{{asset('front_end\js\contactform.js') }}"></script>
    <!-- Plugins JS -->
    <script src="{{asset('front_end/js/plugins/plugins.min.js') }}"></script>
    <!-- Main JS -->
    <script src="{{asset('front_end\js\main.js') }}"></script>
</body>

</html>
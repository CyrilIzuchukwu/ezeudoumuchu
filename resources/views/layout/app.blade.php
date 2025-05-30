<!DOCTYPE HTML>
<html class="no-js" lang="en-US">

<head>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Obsequy - Funeral Home Responsive HTML5 Template</title>
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="{{ asset('assets/images/logo.png') }}" type="image/x-icon">

    <link href="{{ asset('assets/css/bootstrap.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/css/bootstrap-theme.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/vendor/magnific/magnific-popup.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/vendor/owl-carousel/css/owl.carousel.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/vendor/owl-carousel/css/owl.theme.css') }}" rel="stylesheet" type="text/css">

    <!-- Color Style -->
    <link class="alt" href="{{ asset('assets/colors/color1.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/style-switcher/css/style-switcher.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/css/custom.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/css/responsiveness.css') }}" rel="stylesheet" type="text/css">


    <link href="{{ asset('assets/css/font-awesome.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/css/line-icons.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/css/animation.css') }}" rel="stylesheet" type="text/css">

    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@400;500;600&family=Playfair+Display:wght@500;600&family=Lora:ital,wght@0,400;0,600;1,400&display=swap" rel="stylesheet">
    <!-- Summernote CSS -->
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">

    <script src="{{ asset('assets/js/modernizr.js') }}"></script>


</head>

<body class="home">
    <div class="body">
        <!-- start topbar -->
        @include('snippets.header')
        <!-- end header -->

        <!-- start hero slider -->
        @yield('content')
        <!-- end body content -->
        <!-- start footer -->
        @include('snippets.footer')
        <!-- end footer -->
        <a id="back-to-top"><i class="fa fa-arrow-up"></i></a>
    </div>
    <script src="{{ asset('assets/js/jquery-2.2.3.min.js') }}"></script> <!-- Jquery Library Call -->
    <script src="{{ asset('assets/vendor/magnific/jquery.magnific-popup.min.js') }}"></script> <!-- Maginific Popup Plugin -->
    <script src="{{ asset('assets/js/ui-plugins.js') }}"></script> <!-- UI Plugins -->
    <script src="{{ asset('assets/js/helper-plugins.js') }}"></script> <!-- Helper Plugins -->
    <script src="{{ asset('assets/vendor/owl-carousel/js/owl.carousel.min.js') }}"></script> <!-- Owl Carousel -->
    <script src="{{ asset('assets/js/bootstrap.js') }}"></script> <!-- UI -->
    <script src="{{ asset('assets/js/init.js') }}"></script> <!-- All Scripts -->
    <script src="{{ asset('assets/vendor/flexslider/js/jquery.flexslider.js') }}"></script> <!-- FlexSlider -->
    <script src="{{ asset('assets/js/jquery.mb.YTPlayer.js') }}"></script>
    <script src="{{ asset('assets/style-switcher/js/jquery_cookie.js') }}"></script>
    <script src="{{ asset('assets/style-switcher/js/script.js') }}"></script>
    <!-- Summernote JS -->
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>


</body>

</html>
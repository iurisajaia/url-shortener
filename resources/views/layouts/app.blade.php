<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <!--====== Default css ======-->
    <link rel="stylesheet" href="{{asset('css/default.css')}}">
    <!--====== Style css ======-->
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <!--====== Responsive css ======-->
    <link rel="stylesheet" href="{{asset('css/responsive.css')}}">
</head>
<body>
<div class="home-v3-wrapper">
    <!--====== Start Preloader ======-->
    <div class="preloader">
        <div class="loader">
            <div class="pre-shadow"></div>
            <div class="pre-box"></div>
        </div>
    </div>
    <!--====== End Preloader ======-->


    @include('partials.global.header')

    @yield('content')

    @include('partials.global.footer')

</div>

    <a href="#" class="back-to-top" ><i class="far fa-angle-up"></i></a>
    <!--====== Jquery js ======-->
    <script src="{{asset('/vendor/jquery-3.6.0.min.js')}}"></script>
    <!--====== Bootstrap js ======-->
    <script src="{{asset('/vendor/popper/popper.min.js')}}"></script>
    <!--====== Bootstrap js ======-->
    <script src="{{asset('/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
    <!--====== Slick js ======-->
    <script src="{{asset('/vendor/slick/slick.min.js')}}"></script>
    <!--====== Magnific js ======-->
    <script src="{{asset('/vendor/magnific-popup/dist/jquery.magnific-popup.min.js')}}"></script>
    <!--====== Isotope js ======-->
    <script src="{{asset('/vendor/isotope.min.js')}}"></script>
    <!--====== Imagesloaded js ======-->
    <script src="{{asset('/vendor/imagesloaded.min.js')}}"></script>
    <!--====== Counterup js ======-->
    <script src="{{asset('/vendor/jquery.counterup.min.js')}}"></script>
    <!--====== Waypoints js ======-->
    <script src="{{asset('/vendor/jquery.waypoints.js')}}"></script>
    <!--====== Nice-select js ======-->
    <script src="{{asset('/vendor/nice-select/js/jquery.nice-select.min.js')}}"></script>
    <!--====== WOW js ======-->
    <script src="{{asset('/vendor/wow.min.js')}}"></script>
    <!--====== Parallax js ======-->
    <script src="{{asset('/vendor/parallax.min.js')}}"></script>
    <!--====== Main js ======-->
    <script src="{{asset('/js/theme.js')}}"></script>

</body>
</html>

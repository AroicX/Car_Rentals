<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <!-- Required meta tags -->

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'CUSTOMERS WAY') }}</title>

    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('images/backend_images/favicon.png') }}">

    <!-- Main CSS -->
    <link href="{{ asset('css/frontend_css/style.css') }}" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link href="{{ asset('css/frontend_css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('css/frontend_css/flaticon.css') }}" rel="stylesheet">
    <link href="{{ asset('css/frontend_css/themify-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('vendors/owl-carousel/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendors/nice-select/css/nice-select.css') }}" rel="stylesheet">

</head>

  <body>
    <!--================ Start Header Menu Area =================-->
    @include('layouts.frontLayout.front_header')
    <!--================ End Header Menu Area =================-->

    <!--================ Start Content =================-->
    @yield('content')
    <!--================ End Content =================-->

    <!--================ Start footer Area  =================-->
    @include('layouts.frontLayout.front_footer')
    <!--================ End footer Area  =================-->

    <!-- Optional JavaScript -->

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="{{ asset('js/frontend_js/jquery-3.2.1.min.js') }}"></script>
    <script src="{{ asset('js/frontend_js/popper.js') }}"></script>
    <script src="{{ asset('js/frontend_js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('vendors/nice-select/js/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('vendors/owl-carousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('js/frontend_js/owl-carousel-thumb.min.js') }}"></script>
    <script src="{{ asset('js/frontend_js/jquery.ajaxchimp.min.js') }}"></script>
    <script src="{{ asset('js/frontend_js/mail-script.js') }}"></script>

    <!--gmaps Js-->
    <script src="{{ url('https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE') }}"></script>
    <script src="{{ asset('js/frontend_js/gmaps.min.js') }}"></script>
    <script src="{{ asset('js/frontend_js/theme.js') }}"></script>
  </body>
</html>

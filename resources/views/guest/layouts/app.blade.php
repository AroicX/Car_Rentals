<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta name="description" content="Xpedia" />
    <meta name="keywords" content="Xpedia" />
    <meta name="author" content="" />
    <meta name="MobileOptimized" content="320" />
    <!--Template style -->
    @yield('css')
    <!--favicon-->
    <link rel="shortcut icon" type="image/png" href="images/fevicon.png" />
</head>

<body>

    <!-- preloader Start -->
    <div id="preloader">
        <div id="status">
            <img src="{{asset('images/loader.gif')}}" id="preloader_image" alt="loader">
        </div>
    </div>

   @include('guest.layouts.navigation')
   @yield('content')
   @include('guest.layouts.footer')





	<script src="{{asset('js/jquery-3.3.1.min.js')}}"></script>
	<script src="{{asset('js/bootstrap.min.js')}}"></script>
	<script src="{{asset('js/modernizr.js')}}"></script>
	<script src="{{asset('js/select2.min.js')}}"></script>
	<script src="{{asset('js/jquery.menu-aim.js')}}"></script>
	<script src="{{asset('js/jquery-ui.js')}}"></script>
	<script src="{{asset('js/jquery.nice-select.min.js')}}"></script>
	<script src="{{asset('js/owl.carousel.js')}}"></script>
	<script src="{{asset('js/jquery.magnific-popup.js')}}"></script>
	<script src="{{asset('js/own-menu.js')}}"></script>
	<script src="{{asset('js/jquery.bxslider.min.js')}}"></script>
	<script src="{{asset('js/xpedia.js')}}"></script>

</body>

</html>

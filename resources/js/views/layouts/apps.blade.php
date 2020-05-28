<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'VetoMart') }}</title>


        <!-- Styles -->


        <!-- Custom CSS -->
        <link href="{{ asset('css/backend_css/style.min.css') }}" rel="stylesheet">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->

        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!-- Scripts -->

        <!-- ============================================================== -->
        <!-- All Required js -->
        <!-- ============================================================== -->
        <script src="{{ asset('assets/backend_assets/libs/jquery/dist/jquery.min.js') }}"></script>

        <!-- Bootstrap tether Core JavaScript -->
        <script src="{{ asset('assets/backend_assets/libs/popper.js/dist/umd/popper.min.js') }}"></script>
        <script src="{{ asset('assets/backend_assets/libs/bootstrap/dist/js/bootstrap.min.js') }}"></script>
        <script>

                $('[data-toggle="tooltip"]').tooltip();
                $(".preloader").fadeOut();
                // ==============================================================
                // Login and Recover Password
                // ==============================================================
                $('#to-recover').on("click", function() {
                    $("#loginform").slideUp();
                    $("#recoverform").fadeIn();
                });
                $('#to-login').click(function(){

                    $("#recoverform").hide();
                    $("#loginform").fadeIn();
                });
            </script>

</head>
<body>



    <script>
        toastr.options = {
        "closeButton": true,
        "debug": false,
        "newestOnTop": true,
        "progressBar": true,
        "positionClass": "toast-bottom-left",
        "preventDuplicates": false,
        "onclick": null,
        "showDuration": "300",
        "hideDuration": "1000",
        "timeOut": "5000",
        "extendedTimeOut": "1000",
        "showEasing": "swing",
        "hideEasing": "linear",
        "showMethod": "fadeIn",
        "hideMethod": "fadeOut"
        }

        @if(Session::has('message'))
        var type = "{{ Session::get('alert', 'info') }}";
        switch(type){
            case 'info':
                toastr.info("{{ Session::get('message') }}");
                break;

            case 'warning':
                toastr.warning("{{ Session::get('message') }}");
                break;

            case 'success':
                toastr.success("{{ Session::get('message') }}");
                break;

            case 'error':
                toastr.error("{{ Session::get('message') }}");
                break;
        }
        @endif
    </script>


  <main class="">
      <div class="container">

          @yield('content')
      </div>
  </main>


  @yield('footer')

>

</body>
</html>

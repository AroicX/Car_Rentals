<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'CUSTOMERS WAY') }}</title>

    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('images/backend_images/favicon.png') }}">

    <!-- Custom CSS -->
    <link href="{{ asset('assets/backend_assets/libs/flot/css/float-chart.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/backend_asstes/libs/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/backend_asstes/libs/bootstrap/dist/css/bootstrap-grid.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/backend_asstes/libs/bootstrap/dist/css/bootstrap-reboot.min.css') }}" rel="stylesheet">

    <link href="{{ asset('assets/backend_assets/libs/select2/dist/css/select2.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/backend_assets/libs/jquery-minicolors/jquery.minicolors.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/backend_assets/libs/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/backend_assets/libs/quill/dist/quill.snow.css') }}" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{ asset('assets/backend_assets/libs/jquery-steps/jquery.steps.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/backend_assets/libs/jquery-steps/steps.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/backend_assets/extra-libs/multicheck/multicheck.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/backend_assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.css') }}" rel="stylesheet">
    <link href="{{ asset('css/backend_css/style.min.css') }}" rel="stylesheet">


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->

<style type="text/css">.jqstooltip { position: absolute;left: 0px;top: 0px;visibility: hidden;background: rgb(0, 0, 0) transparent;background-color: rgba(0,0,0,0.6);filter:progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000);-ms-filter: "progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000)";color: white;font: 10px arial, san serif;text-align: left;white-space: nowrap;padding: 5px;border: 1px solid white;z-index: 10000;}.jqsfield { color: white;font: 10px arial, san serif;text-align: left;}</style>
</head>

<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">

        <!-- ============================================================== -->
        <!-- Topbar header -->
        <!-- ============================================================== -->
        @include('layouts.adminLayout.admin_header')
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->


        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        @include('layouts.adminLayout.admin_sidebar')
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->


        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">

            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            @yield('content')
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->


            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            @include('layouts.adminLayout.admin_footer')
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->


        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="{{ asset('assets/backend_assets/libs/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/backend_assets/extra-libs/multicheck/datatable-checkbox-init.js') }}"></script>
    <script src="{{ asset('assets/backend_assets/extra-libs/multicheck/jquery.multicheck.js') }}"></script>
    <script src="{{ asset('assets/backend_assets/extra-libs/DataTables/datatables.min.js') }}"></script>

    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="{{ asset('assets/backend_assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js') }}"></script>
    <script src="{{ asset('assets/backend_assets/extra-libs/sparkline/sparkline.js') }}"></script>

    <!-- Bootstrap tether Core JavaScript -->
    <script src="{{ asset('assets/backend_assets/libs/popper.js/dist/umd/popper.min.js') }}"></script>
    <script src="{{ asset('assets/backend_assets/libs/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/backend_assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js') }}"></script>
    <script src="{{ asset('assets/backend_assets/extra-libs/sparkline/sparkline.js') }}"></script>

    <!--Wave Effects -->
    <script src="{{ asset('js/backend_js/waves.js') }}"></script>

    <!--Menu sidebar -->
    <script src="{{ asset('js/backend_js/sidebarmenu.js') }}"></script>

    <!--Custom JavaScript -->
    <script src="{{ asset('js/backend_js/custom.min.js') }}"></script>

    <!--This page JavaScript -->
    <!-- <script src="{{ asset('js/backend_js/pages/dashboards/dashboard1.js') }}"></script> -->

    <!-- Charts js Files -->
    <script src="{{ asset('assets/backend_assets/libs/flot/excanvas.js') }}"></script>
    <script src="{{ asset('assets/backend_assets/libs/flot/jquery.flot.js') }}"></script>
    <script src="{{ asset('assets/backend_assets/libs/flot/jquery.flot.pie.js') }}"></script>
    <script src="{{ asset('assets/backend_assets/libs/flot/jquery.flot.time.js') }}"></script>
    <script src="{{ asset('assets/backend_assets/libs/flot/jquery.flot.stack.js') }}"></script>
    <script src="{{ asset('assets/backend_assets/libs/flot/jquery.flot.crosshair.js') }}"></script>
    <script src="{{ asset('assets/backend_assets/libs/flot.tooltip/js/jquery.flot.tooltip.min.js') }}"></script>
    <script src="{{ asset('js/backend_js/pages/chart/chart-page-init.js') }}"></script>

    <div class="flotTip" style="position: absolute; left: 961px; top: 549px; display: none;"></div>

    <!-- Settings Page JS - Form Settings -->

    <!-- this page js -->
    <script src="{{ asset('assets/backend_assets/libs/jquery-steps/build/jquery.steps.min.js') }}"></script>
    <script src="{{ asset('assets/backend_assets/libs/jquery-validation/dist/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('assets/backend_assets/extra-libs/multicheck/datatable-checkbox-init.js') }}"></script>
    <script src="{{ asset('assets/backend_assets/extra-libs/multicheck/jquery.multicheck.js') }}"></script>
    <script src="{{ asset('assets/backend_assets/extra-libs/DataTables/datatables.min.js') }}"></script>

    <script src="{{ asset('assets/backend_assets/libs/inputmask/dist/min/jquery.inputmask.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/backend_assets/libs/select2/dist/js/select2.full.min.js') }}"></script>
    <script src="{{ asset('assets/backend_assets/libs/select2/dist/js/select2.min.js') }}"></script>
    <script src="{{ asset('assets/backend_assets/libs/jquery-asColor/dist/jquery-asColor.min.js') }}"></script>
    <script src="{{ asset('assets/backend_assets/libs/jquery-asGradient/dist/jquery-asGradient.js') }}"></script>
    <script src="{{ asset('assets/backend_assets/libs/jquery-asColorPicker/dist/jquery-asColorPicker.min.js') }}"></script>
    <script src="{{ asset('assets/backend_assets/libs/jquery-minicolors/jquery.minicolors.min.js') }}"></script>
    <script src="{{ asset('assets/backend_assets/libs/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js') }}"></script>
    <script src="{{ asset('assets/backend_assets/libs/quill/dist/quill.min.js') }}"></script>
    <script src="{{ asset('js/backend_js/pages/mask/mask.init.js') }}"></script>


    <script>
        //***********************************//
        // For select 2
        //***********************************//
        $(".select2").select2();

        /*colorpicker*/
        $('.demo').each(function() {
        //
        // Dear reader, it's actually very easy to initialize MiniColors. For example:
        //
        //  $(selector).minicolors();
        //
        // The way I've done it below is just for the demo, so don't get confused
        // by it. Also, data- attributes aren't supported at this time...they're
        // only used for this demo.
        //
        $(this).minicolors({
                control: $(this).attr('data-control') || 'hue',
                position: $(this).attr('data-position') || 'bottom left',

                change: function(value, opacity) {
                    if (!value) return;
                    if (opacity) value += ', ' + opacity;
                    if (typeof console === 'object') {
                        console.log(value);
                    }
                },
                theme: 'bootstrap'
            });

        });
        /*datwpicker*/
        jQuery('.mydatepicker').datepicker();
        jQuery('#datepicker-autoclose').datepicker({
            autoclose: true,
            todayHighlight: true
        });
        var quill = new Quill('#editor', {
            theme: 'snow'
        });

    </script>

    <script>
        /****************************************
            *       Basic Table                   *
            ****************************************/
        $('#zero_config').DataTable();
    </script>

    <script>
        // Basic Example with form
    var form = $("#example-form");
    form.validate({
        errorPlacement: function errorPlacement(error, element) { element.before(error); },
        rules: {
            confirm: {
                equalTo: "#password"
            }
        }
    });
     form.children("div").steps({
        headerTag: "h3",
        bodyTag: "section",
        transitionEffect: "slideLeft",
        onStepChanging: function(event, currentIndex, newIndex) {
            form.validate().settings.ignore = ":disabled,:hidden";
            return form.valid();
        },
        onFinishing: function(event, currentIndex) {
            form.validate().settings.ignore = ":disabled";
            return form.valid();
        },
        onFinished: function(event, currentIndex) {
            alert("Submitted!");
        }
    });


    </script>

    <script>
        $("#password_validate").validate({
		rules:{
			current_pwd:{
				required: true,
				minlength:6,
				maxlength:20
			},
			new_pwd:{
				required: true,
				minlength:6,
				maxlength:20
			},
			confirm_pwd:{
				required:true,
				minlength:6,
				maxlength:20,
				equalTo:"#new_pwd"
			}
		},
		errorClass: "help-inline",
		errorElement: "span",
		highlight:function(element, errorClass, validClass) {
			$(element).parents('.control-group').addClass('error');
		},
		unhighlight: function(element, errorClass, validClass) {
			$(element).parents('.control-group').removeClass('error');
			$(element).parents('.control-group').addClass('success');
		}
	});
    </script>

    <script>
        $("#add_category").validate({
        rules:{
            category_name:{
                required: true,
            },
            description:{
                required: true,
            },
            url:{
                required:true,
            }
        },
        errorClass: "help-inline",
        errorElement: "span",
        highlight:function(element, errorClass, validClass) {
            $(element).parents('.control-group').addClass('error');
        },
        unhighlight: function(element, errorClass, validClass) {
            $(element).parents('.control-group').removeClass('error');
            $(element).parents('.control-group').addClass('success');
        }
    });
    </script>

    <script>
        $("#new_pwd").click(function(){
            var current_pwd = $("#current_pwd").val();
            $.ajax({
                type: 'get',
                url: '/admin/check-pwd',
                data: {current_pwd: current_pwd},
                success: function(resp){
                    //alert(resp);
                    if(resp == "false"){
                        $("#chkPwd").html("<font color='red'>Current Password is Incorrect</font>");
                    }else if(resp == "true"){
                        $("#chkPwd").html("<font color='green'>Current Password is Correct</font>");
                    }
                },error: function(){
                    alert:("Error");
                }
            });
        });
    </script>
    <script>
        $("#delCat").click(function(){
            if(confirm('Are you sure you want to delete this Category?')){
                return true;
            }
            return false;
        });
    </script>



</body>

</html>

@extends('layouts.app')

@section('title')
Dashboard - {{ Auth::user()->name }}
@endsection


@section('content')


<!-- page title area end -->
<div class="main-content-inner">
    <div class="row">
        <!-- seo fact area start -->
        <div class="col-lg-12">
            <div class="row">
                <div class="col-md-12 mt-5 mb-3">
                    <div class="card">
                        <div class="seo-fact sbg1">
                            <div class="p-4 d-flex justify-content-between align-items-center">
                                <div class="seofct-icon"><i class="ti-thumb-up"></i> Reservation</div>
                            <h2>{{count(\App\Reservation::where('client_id',Auth::id())->get() )}}</h2>
                            </div>
                            <canvas id="seolinechart1" height="50"></canvas>
                        </div>
                    </div>
                </div>
              
                <div class="col-md-6 mb-3 mb-lg-0">
                    <div class="card">
                        <div class="seo-fact sbg2">
                            <div class="p-4 d-flex justify-content-between align-items-center">
                                <div class="seofct-icon">Success</div>
                                <h2>{{count(\App\Reservation::where('status','completed')->get() )}}</h2>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <div class="seo-fact sbg4">
                            <div class="p-4 d-flex justify-content-between align-items-center">
                                <div class="seofct-icon">Pending</div>
                                <h2>{{count(\App\Reservation::where('status','pending')->get() )}}</h2>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- seo fact area end -->
       
    </div>
</div>


@endsection



@section('js')

  <!-- start chart js -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.min.js"></script>
  <!-- start highcharts js -->
  <script src="https://code.highcharts.com/highcharts.js"></script>
  <script src="https://code.highcharts.com/modules/exporting.js"></script>
  <script src="https://code.highcharts.com/modules/export-data.js"></script>
  <!-- start amcharts -->
  <script src="https://www.amcharts.com/lib/3/amcharts.js"></script>
  <script src="https://www.amcharts.com/lib/3/ammap.js"></script>
  <script src="https://www.amcharts.com/lib/3/maps/js/worldLow.js"></script>
  <script src="https://www.amcharts.com/lib/3/serial.js"></script>
  <script src="https://www.amcharts.com/lib/3/plugins/export/export.min.js"></script>
  <script src="https://www.amcharts.com/lib/3/themes/light.js"></script>
 
  <!-- all line chart activation -->
  <script src="{{ asset('assets/js/line-chart.js')}}"></script>
  <!-- all pie chart -->
  <script src="{{ asset('assets/js/pie-chart.js')}}"></script>
  <!-- all bar chart -->
  <script src="{{ asset('assets/js/bar-chart.js')}}"></script>
  <!-- all map chart -->
  <script src="{{ asset('assets/js/maps.js')}}"></script>


  @endsection
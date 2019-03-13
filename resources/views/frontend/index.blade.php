@extends('frontend.layouts.app')

@section('content')

<!-- BEGIN PAGE HEAD-->
<div class="page-head">
    <div class="container">
        <!-- BEGIN PAGE TITLE -->
        <div class="page-title">
            <h1>Beranda
                <small>Tampilan data terbaru</small>
            </h1>
        </div>
        <!-- END PAGE TITLE -->

    </div>
</div>
<!-- END PAGE HEAD-->



<!-- BEGIN PAGE CONTENT BODY -->
<div class="page-content">
    <div class="container">

        <!-- BEGIN PAGE CONTENT INNER -->
        <div class="page-content-inner">    
            
        <!-- BEGIN DASHBOARD STATS 1-->
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <a class="dashboard-stat dashboard-stat-v2 blue" href="{{ url('dampingan')}}">
                    <div class="visual">
                        <i class="fa fa-comments"></i>
                    </div>
                    <div class="details">
                        <div class="number">
                            <span data-counter="counterup" data-value="{{ $dampingan->count() }}">0</span>
                        </div>
                        <div class="desc"> Desa Dampingan </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <a class="dashboard-stat dashboard-stat-v2 red" href="{{ url('poktan')}}">
                    <div class="visual">
                        <i class="fa fa-bar-chart-o"></i>
                    </div>
                    <div class="details">
                        <div class="number">
                            <span data-counter="counterup" data-value="{{ $poktan->count() }}">0</span> </div>
                        <div class="desc"> Kelompok Tani </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <a class="dashboard-stat dashboard-stat-v2 green" href="#">
                    <div class="visual">
                        <i class="fa fa-shopping-cart"></i>
                    </div>
                    <div class="details">
                        <div class="number">
                            <span data-counter="counterup" data-value="0">0</span>
                        </div>
                        <div class="desc"> Coming Soon </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <a class="dashboard-stat dashboard-stat-v2 purple" href="#">
                    <div class="visual">
                        <i class="fa fa-globe"></i>
                    </div>
                    <div class="details">
                        <div class="number"> 
                            <span data-counter="counterup" data-value="0">0</span></div>
                        <div class="desc"> Coming Soon </div>
                    </div>
                </a>
            </div>
        </div>
        <div class="clearfix"></div>
        <!-- END DASHBOARD STATS 1-->
            </div>
            <div class="row">
              <div class="col-md-6">
                    <!-- BEGIN CHART PORTLET-->
                    <div class="portlet light ">
                        <div class="portlet-title">
                            <div class="caption">
                                <i class="icon-bar-chart font-green-haze"></i>
                                <span class="caption-subject bold uppercase font-green-haze">Grafik</span>
                                <span class="caption-helper">Evaluasi Kelompok Tani</span>
                            </div>
                            <div class="tools">
                                <a href="javascript:;" class="collapse" data-original-title="" title=""> </a>
                                <a href="#portlet-config" data-toggle="modal" class="config" data-original-title="" title=""> </a>
                                <a href="javascript:;" class="reload" data-original-title="" title=""> </a>
                                <a href="javascript:;" class="fullscreen" data-original-title="" title=""> </a>
                                <a href="javascript:;" class="remove" data-original-title="" title=""> </a>
                            </div>
                        </div>
                        <div class="portlet-body">
                          <div class="chart" style="overflow: hidden; text-align: left;">
                              <div style="position: relative;" class="amcharts-main-div">
                                <canvas id="coba"></canvas>
                              </div>
                          </div>
                        </div>
                    </div>
                    <!-- END CHART PORTLET-->
                </div>
                <div class="col-md-6">
                      <!-- BEGIN CHART PORTLET-->
                      <div class="portlet light ">
                          <div class="portlet-title">
                              <div class="caption">
                                  <i class="icon-bar-chart font-green-haze"></i>
                                  <span class="caption-subject bold uppercase font-green-haze">Tampilan</span>
                                  <span class="caption-helper">Kegiatan terbaru</span>
                              </div>
                              <div class="tools">
                                  <a href="javascript:;" class="collapse" data-original-title="" title=""> </a>
                                  <a href="#portlet-config" data-toggle="modal" class="config" data-original-title="" title=""> </a>
                                  <a href="javascript:;" class="reload" data-original-title="" title=""> </a>
                                  <a href="javascript:;" class="fullscreen" data-original-title="" title=""> </a>
                                  <a href="javascript:;" class="remove" data-original-title="" title=""> </a>
                              </div>
                          </div>
                          <div class="portlet-body">
                              
                          </div>
                      </div>
                      <!-- END CHART PORTLET-->
                </div>
            </div>
            
        <!-- END PAGE CONTENT INNER -->
        </div>
    </div>
</div>
<!-- END PAGE CONTENT BODY -->
<!-- END CONTENT BODY -->

@endsection


@push('scripts')
<script>
        new Chart('coba', {
          type: 'radar',
          data: {
            labels: ['Kelembagaan Kelompok', 'Dinamika Kelompok Tani', 'Kegiatan Usaha Tani', 'Partisipasi Masyarakat', 'Kemitraan', 'Sustainability'],
            datasets: [{
              "data": [0,0,0,0,0,0],
              "label": 'Gelombang 1',
              "scaleStartValue": 0,
              "fill": true,
                "backgroundColor": "rgba(54, 162, 235, 0.2)",
                "borderColor": "rgb(54, 162, 235)",
                "pointBackgroundColor": "rgb(54, 162, 235)",
                "pointBorderColor": "#fff",
                "pointHoverBackgroundColor": "#fff",
                "pointHoverBorderColor": "rgb(54, 162, 235)"
            } ]
          },

          options: {
            maintainAspectRatio: true,
            spanGaps: false,
            tooltips: {
              mode: 'label'
            },
            scale: {
                ticks: {
                    beginAtZero: true,
                    min: 0
                }

            },
            elements: {
              line: {
                tension: 0.000001
              }
            },
            plugins: {
              filler: {
                propagate: false
              },
              samples_filler_analyser: {
                target: 'chart-analyser'
              }
            }
          }
        });
        
        </script>
@endpush

@extends('frontend.layouts.app')

@section('title', 'Detail Kelompok Tani -')

@section('content')

<!-- BEGIN PAGE HEAD-->
<div class="page-head">
    <div class="container">
        <!-- BEGIN PAGE TITLE -->
        <div class="page-title">
            <h1>Data Kelompok Tani
                <small>List kelompok Tani</small>
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
            <div class="row">
                <div class="col-md-6">
                    <div class="portlet box green">
                        <div class="portlet-title">
                            <div class="caption">
                                <i class="fa fa-cogs"></i>Diagram Radar Evkin Kelompok </div>                                                       
                        </div>
                        <div class="portlet-body">                            
                            <canvas id="detailChart"></canvas>                                                        
                        </div>
                    </div>                   
                </div>
                <div class="col-md-6">                    
                    <!-- BEGIN SAMPLE TABLE PORTLET-->
                    <div class="portlet box green">
                        <div class="portlet-title">
                            <div class="caption">
                                <i class="fa fa-users"></i>Detail Kelompok Tani </div>
                            
                        </div>
                        <div class="portlet-body flip-scroll">                                               
                            <div class="text-center">
                        
                        </div>
                        </div>
                    </div>
                    <!-- END SAMPLE TABLE PORTLET-->
                    
                </div>
            </div>
        </div>
        <!-- END PAGE CONTENT INNER -->
    </div>
</div>
<!-- END PAGE CONTENT BODY -->
<!-- END CONTENT BODY -->

@endsection


@push('scripts')
<script>
new Chart('detailChart', {
          type: 'radar',
          data: {
            labels: ['Kelembagaan Kelompok', 'Dinamika Kelompok Tani', 'Kegiatan Usaha Tani', 'Partisipasi Masyarakat', 'Kemitraan', 'Sustainability'],
            datasets: [{
              "data": [{{$evkin->first()->kelembagaan}},
                        {{$evkin->first()->dinamika}},
                        {{$evkin->first()->kegiatan}},
                        {{$evkin->first()->partisipasi}},
                        {{$evkin->first()->kemitraan}},
                        {{$evkin->first()->keberlanjutan}}],
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

@extends('layouts.app')

@section('title', 'Detail Kelompok Tani')

@section('content')
<div class="row">
    <div class="col-md-6 ">
        <!-- BEGIN CHART PORTLET-->
        <div class="portlet light bordered">
            <div class="portlet-title">
                <div class="caption font-red-sunglo">
                    <i class="icon-bar-chart font-green-haze"></i>
                    <span class="caption-subject bold uppercase font-green-haze"> Radar Chart</span>
                    <span class="caption-helper">{{$poktan->first()->nama_kelompok}}</span>
                </div>
                <div class="tools">
                    <a href="javascript:;" class="collapse"> </a>                    
                    <a href="javascript:;" class="fullscreen"> </a>
                    <a href="javascript:;" class="remove"> </a>
                </div>
            </div>
            <div class="portlet-body">
                <div id="asd"></div>
            </div>
        </div>
        <!-- END CHART PORTLET-->
        </div>
        <div class="col-md-6 ">
            <!-- BEGIN SAMPLE FORM PORTLET-->
            <div class="portlet light bordered">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="icon-settings font-dark"></i>
                        <span class="caption-subject font-dark sbold uppercase">Detail Kelompok Tani</span>
                    </div>                    
                </div>
                <div class="portlet-body form">
                    <form class="form-horizontal" role="form">
                        <div class="form-body">
                            <div class="form-group">
                                <label class="col-md-3 control-label">PROVINSI</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" placeholder="{{ $poktan->first()->provinsi}}" disabled>                                    
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label">KABUPATEN</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" placeholder="{{ $poktan->first()->kabupaten}}" disabled>                                    
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label">DISTRIK</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" placeholder="{{ $poktan->first()->kecamatan}}" disabled>                                    
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label">KAMPUNG</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" placeholder="{{ $poktan->first()->desa}}" disabled>                                    
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label">NAMA KELOMPOK TANI</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" placeholder="{{ $poktan->first()->nama_kelompok}}" disabled>                                    
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label">ALAMAT</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" placeholder="{{ $poktan->first()->alamat}}" disabled>                                    
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label">TAHUN PENDIRIAN</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" placeholder="{{ $poktan->first()->tahun_pendirian}}" disabled>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label">TAHUN PENGUKUHAN</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" placeholder="{{ $poktan->first()->tahun_pengukuhan}}" disabled>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label">NAMA KETUA</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" placeholder="{{ $poktan->first()->nama_ketua}}" disabled>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label">NAMA SEKRETARIS</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" placeholder="{{ $poktan->first()->nama_sekretaris}}" disabled>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label">NAMA BENDAHARA</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" placeholder="{{ $poktan->first()->nama_bendahara}}" disabled>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label">JUMLAH ANGGOTA LAKI-LAKI</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" placeholder="{{ $poktan->first()->anggota_lk}}" disabled>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label">JUMLAH ANGGOTA PEREMPUAN</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" placeholder="{{ $poktan->first()->anggota_pr}}" disabled>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label">STATUS KELOMPOK (2017)</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" placeholder="{{ $poktan->first()->status_2017}}" disabled>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label">STATUS KELOMPOK (2018)</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" placeholder="{{ $poktan->first()->status_2018}}" disabled>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label">KOMODITAS</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" placeholder="{{ $poktan->first()->komoditas}}" disabled>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label">KAPASITAS PRODUKSI</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" placeholder="{{ $poktan->first()->kapasitas_produksi}} {{ $poktan->first()->satuan_komoditas}}" disabled>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label">HARGA JUAL</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" placeholder="{{ $poktan->first()->harga_jual}}" disabled>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label">PENDAPATAN BRUTO</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" placeholder="{{ $poktan->first()->pendapatan_bruto}}" disabled>
                                </div>
                            </div>
                            
                        </div>
                        
                    </form>
                </div>
            </div>
            <!-- END SAMPLE FORM PORTLET-->
        </div>
    </div>

@endsection

@push('script')
<script>
new Chart('asd', {
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
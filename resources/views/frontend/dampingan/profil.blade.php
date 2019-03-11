@extends('frontend.layouts.app')

@section('title', 'Profil Desa -')

@section('content')

<!-- BEGIN PAGE HEAD-->
<div class="page-head">
    <div class="container">
        <!-- BEGIN PAGE TITLE -->
        <div class="page-title">
            <h1>PROFIL KAMPUNG {{$dampingan->first()->desa}}
                <small></small>
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
                <div class="col-md-4 column sortable">
                    <div class="portlet portlet-sortable light bg-inverse">  
                            <div class="portlet-title">
                                <div class="caption font-red-sunglo">
                                    <i class="icon-share font-red-sunglo"></i>
                                    <span class="caption-subject bold uppercase"> PROFIL</span>
                                    <span class="caption-helper"></span>
                                </div>
                                <div class="tools">
                                    <a href="" class="collapse"> </a>                                                                        
                                    <a href="" class="fullscreen"> </a>
                                    <a href="" class="remove"> </a>
                                </div>
                            </div>                       
                            <div class="portlet-body">
                                <table class="table table-bordered table-striped">                                    
                                    <tbody>
                                        <tr>                                                        
                                            <td>
                                                <span class="label label-default"> ID </span>
                                            </td>                                                            
                                            <td>{{ $dampingan->first()->id}}</td>
                                        </tr>
                                        <tr>                                                        
                                            <td>
                                                <span class="label label-default"> TAHUN </span>
                                            </td>                                                            
                                            <td>{{ $dampingan->first()->tahun}}</td>
                                        </tr>
                                        <tr>                                                        
                                            <td>
                                                <span class="label label-default"> BULAN </span>
                                            </td>                                                            
                                            <td>{{ $dampingan->first()->bulan}}</td>
                                        </tr>
                                        <tr>                                                        
                                            <td>
                                                <span class="label label-default"> PROVINSI </span>
                                            </td>                                                            
                                            <td>{{ $dampingan->first()->provinsi}}</td>
                                        </tr>
                                        <tr>                                                        
                                            <td>
                                                <span class="label label-default"> KABUPATEN </span>
                                            </td>                                                            
                                            <td>{{ $dampingan->first()->kabupaten}}</td>
                                        </tr> 
                                        <tr>                                                        
                                            <td>
                                                <span class="label label-default"> KECAMATAN </span>
                                            </td>                                                            
                                            <td>{{ $dampingan->first()->kecamatan}}</td>
                                        </tr> 
                                        <tr>                                                        
                                            <td>
                                                <span class="label label-default"> MATA PENCAHARIAN </span>
                                            </td>                                                            
                                            <td>{{ $dampingan->first()->mata_pencaharian}}</td>
                                        </tr> 
                                        <tr>                                                        
                                            <td>
                                                <span class="label label-default"> JUMLAH KELUARGA </span>
                                            </td>                                                            
                                            <td>{{ $dampingan->first()->jumlah_kk}}</td>
                                        </tr> 
                                        <tr>                                                        
                                            <td>
                                                <span class="label label-default"> KEPALA KAMPUNG </span>
                                            </td>                                                            
                                            <td>{{ $dampingan->first()->kepala_kampung}}</td>
                                        </tr>                                             
                                    </tbody>
                                </table>
                                
                            </div>
                        </div>
                </div>
                <div class="col-md-4 column sortable">
                    <div class="portlet portlet-sortable box blue-hoki"> 
                        <div class="portlet-title">
                            <div class="caption">
                                A. TIPOLOGI KAMPUNG </div>
                                <div class="tools">
                                    <a href="" class="collapse"> </a>                                                                        
                                    <a href="" class="fullscreen"> </a>
                                    <a href="" class="remove"> </a>
                                </div>
                        </div>                    
                            <div class="portlet-body">                                
                            <div class="form-horizontal">
                                    <div class="form-body">
                                        <div class="form-group form-md-line-input">
                                            <label class="col-md-4 control-label" for="form_control_1">TIPE KAMPUNG</label>
                                            <div class="col-md-8">
                                                <input type="text" class="form-control" id="form_control_1" placeholder="{{ $dampingan->first()->tipe_kampung}}" disabled>
                                                <div class="form-control-focus"> </div>
                                            </div>
                                        </div>
                                        <div class="form-group form-md-line-input">
                                            <label class="col-md-4 control-label" for="form_control_1">TOPOGRAFI KAMPUNG</label>
                                            <div class="col-md-8">
                                                <input type="text" class="form-control" id="form_control_1" placeholder="{{ $dampingan->first()->topografi_kampung}}" disabled>
                                                <div class="form-control-focus"> </div>
                                            </div>
                                        </div>
                                        <div class="form-group form-md-line-input">
                                            <label class="col-md-4 control-label" for="form_control_1">LUAS KAMPUNG</label>
                                            <div class="col-md-8">
                                                <input type="text" class="form-control" id="form_control_1" placeholder="{{ $dampingan->first()->luas_kampung}}" disabled>
                                                <div class="form-control-focus"> </div>
                                            </div>
                                        </div>
                                        <div class="form-group form-md-line-input">
                                            <label class="col-md-4 control-label" for="form_control_1">POLA PEMUKIMAN</label>
                                            <div class="col-md-8">
                                                <input type="text" class="form-control" id="form_control_1" placeholder="{{ $dampingan->first()->pola_pemukiman}}" disabled>
                                                <div class="form-control-focus"> </div>
                                            </div>
                                        </div>
                                        <div class="form-group form-md-line-input">
                                            <label class="col-md-4 control-label" for="form_control_1">KATEGORI KAMPUNG</label>
                                            <div class="col-md-8">
                                                <input type="text" class="form-control" id="form_control_1" placeholder="{{ $dampingan->first()->kategori_kampung}}" disabled>
                                                <div class="form-control-focus"> </div>
                                            </div>
                                        </div>
                                        <div class="form-group form-md-line-input">
                                            <label class="col-md-4 control-label" for="form_control_1">KETERANGAN TIPOLOG LAINNYA</label>
                                            <div class="col-md-8">
                                                <input type="text" class="form-control" id="form_control_1" placeholder="{{ $dampingan->first()->kecamatan}}" disabled>
                                                <div class="form-control-focus"> </div>
                                            </div>
                                        </div>                                                                           
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
                <div class="col-md-4 column sortable">
                    <div class="portlet portlet-sortable box blue-hoki"> 
                        <div class="portlet-title">
                            <div class="caption">
                                PETA </div>
                                <div class="tools">
                                    <a href="" class="collapse"> </a>                                                                        
                                    <a href="" class="fullscreen"> </a>
                                    <a href="" class="remove"> </a>
                                </div>
                        </div>                    
                            <div class="portlet-body">                                
                            Peta
                            </div>
                        </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 column sortable">
                    <div class="portlet portlet-sortable box blue-hoki"> 
                        <div class="portlet-title">
                            <div class="caption">
                                B. POTENSI PERTANIAN KAMPUNG </div>
                                <div class="tools">
                                    <a href="" class="collapse"> </a>                                                                        
                                    <a href="" class="fullscreen"> </a>
                                    <a href="" class="remove"> </a>
                                </div>
                        </div>                    
                            <div class="portlet-body">                                
                                <div class="row">
                                    <div class="col-md-6">
                                    <table class="table table-bordered table-striped">                                        
                                        <tbody>
                                        @php
                                            $no = 1;
                                        @endphp
                                            @foreach ($poktan as $r)
                                            <tr>                                                        
                                                <td>
                                                    Kelompok {{ $no++ }}
                                                </td>                                                                                                                                            
                                                <td><span class="label label-default"> {{ $r->nama_kelompok}}</span></td>
                                            </tr>
                                            @endforeach
                                        </tbody>

                                    </table>

                                    <table class="table table-bordered table-striped">                                        
                                        <tbody>                                                                              
                                            <tr>                                                        
                                                <td>NAMA BUMKAM </td>                                                                                                                                            
                                                <td>{{ $dampingan->first()->bumkam}}</td>
                                            </tr>
                                            <tr>                                                        
                                                <td>SKALA PASAR </td>                                                                                                                                            
                                                <td>{{ $dampingan->first()->skala_pasar}}</td>
                                            </tr>                                            
                                            
                                        </tbody>

                                    </table>
                                    </div>
                                    <div class="col-md-6">
                                    b
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
                <div class="col-md-6 column sortable">
                    <div class="portlet portlet-sortable box blue-hoki"> 
                        <div class="portlet-title">
                            <div class="caption">
                                C. PEMBANGUNAN PERTANIAN KAMPUNG </div>
                                <div class="tools">
                                    <a href="" class="collapse"> </a>                                                                        
                                    <a href="" class="fullscreen"> </a>
                                    <a href="" class="remove"> </a>
                                </div>
                        </div>                    
                            <div class="portlet-body">                                
                            <table class="table table-bordered table-striped">                                        
                                        <tbody>                                                                              
                                            <tr>                                                        
                                                <td>KEGIATAN PERTANIAN </td>                                                                                                                                            
                                                <td>{{ $dampingan->first()->kegiatan_pertanian}}</td>
                                            </tr>
                                            <tr>                                                        
                                                <td>TAHUN ANGGARAN DANA DESA </td>                                                                                                                                            
                                                <td>{{ $dampingan->first()->tahun_anggaran_dd}}</td>
                                            </tr> 
                                            <tr>                                                        
                                                <td>JUMLAH DANA DESA </td>                                                                                                                                            
                                                <td>{{ $dampingan->first()->jumlah_dd}}</td>
                                            </tr>   
                                            <tr>                                                        
                                                <td>JUMLAH ALOKASI DANA DESA </td>                                                                                                                                            
                                                <td>{{ $dampingan->first()->jumlah_alokasi_dd}}</td>
                                            </tr>                                          
                                            
                                        </tbody>

                                    </table>
                            </div>
                        </div>
                </div>
            </div>
                
        </div>
        <!-- END PAGE CONTENT INNER -->
    </div>
</div>
<!-- END PAGE CONTENT BODY -->

@endsection


@push('scripts')


@endpush

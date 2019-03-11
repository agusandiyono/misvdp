@extends('frontend.layouts.app')

@section('title', 'Desa Dampingan -')

@section('content')

<!-- BEGIN PAGE HEAD-->
<div class="page-head">
    <div class="container">
        <!-- BEGIN PAGE TITLE -->
        <div class="page-title">
            <h1>Data Desa/Kampung Dampingan PPDM
                <small>List Desa Dampingan</small>
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
            <div class="col-md-3">
                    <div class="portlet box green">
                        <div class="portlet-title">
                            <div class="caption">
                                <i class="fa fa-cogs"></i>Filter </div>                                                       
                        </div>
                        <div class="portlet-body">
                        {!! Form::open(['method'=>'get']) !!}
                            <Strong>Wilayah</Strong>
                            <div class="row static-info">
                                <div class="col-md-10 pull-right"> {!! Form::select('provinsi',['-1'=>'Provinsi','Papua'=>'Papua','Papua Barat'=>'Papua Barat'],null,['class'=>'form-control','onChange'=>'form.submit()']) !!} </div>
                            </div>
                            <hr>
                            <Strong>Tipe Kampung</Strong>
                            <div class="row static-info">                                
                                <div class="col-md-10 pull-right"> {!! Form::select('tipe',['-1'=>'Tipe Kampung','Campuran'=>'Campuran','Geneologis'=>'Geneologis','Teritorial'=>'Teritorial'],null,['class'=>'form-control','onChange'=>'form.submit()']) !!} </div>
                            </div>
                            <hr>
                            <Strong>Topografi</Strong>
                            <div class="row static-info">                                
                                <div class="col-md-10 pull-right"> 
                                    <a>Pesisir</a>                                    
                                    <a>Pesisir</a>                                    
                                    <a>Pesisir</a>                                    
                                    <a>Pesisir</a>                                    
                                </div>
                            </div>
                            <!-- <div class="row static-info">
                                <div class="col-md-12"> State: </div>
                                
                            </div>
                            <div class="row static-info">
                                <div class="col-md-12"> Phone Number: </div>                                
                            </div> -->
                            
                        {!! Form::close() !!}
                        </div>
                    </div>                   
                </div>
                <div class="col-md-9">
                    
                    <!-- BEGIN SAMPLE TABLE PORTLET-->
                    <div class="portlet box green">
                        <div class="portlet-title">
                            <div class="caption">
                                <i class="fa fa-cogs"></i>{{ $result->total() }} Data Desa Dampingan </div>
                            <div class="tools">
                                <a href="javascript:;" class="collapse"> </a>                                
                                <a href="javascript:;" class="reload"> </a>
                                <a href="javascript:;" class="remove"> </a>
                            </div>
                        </div>
                        <div class="portlet-body flip-scroll">
                            
                            <table class="table">
                                <thead class="flip-content">
                                    <tr>
                                        <th> No. Urut </th>
                                        <th> Provinsi </th>
                                        <th> Kabupaten </th>
                                        <th> Kecamatan </th>
                                        <th> Desa </th>
                                        <th> Tahun </th>
                                        
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($result as $item)
                                    <tr>
                                        <td>{{ $item->id }}</td>                                    
                                        <td>{{ $item->provinsi }}</td>
                                        <td>{{ $item->kabupaten }}</td>
                                        <td>{{ $item->kecamatan }}</td>
                                        <td><a href="{{ route('poktanDesa', $item->desa) }}" class="tooltips" data-original-title="Klik untuk melihat profil desa {{ $item->desa }}">{{ $item->desa }}</a></td>
                                        <td>{{ $item->tahun }}</td>
                                    </tr>
                                    @endforeach 
                                    
                                </tbody>
                            </table>
                            <div class="text-center">
                            {{ $result->links() }}
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


@endpush

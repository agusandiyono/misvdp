@extends('frontend.layouts.app')

@section('title', 'Kelompok Tani -')

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
                                <div class="col-md-12"> {!! Form::select('provinsi',['-1'=>'Pilih Provinsi','Papua'=>'Papua','Papua Barat'=>'Papua Barat'],null,['class'=>'form-control','onChange'=>'form.submit()']) !!} </div>                                
                            </div>
                            <hr>
                            <Strong>Kelembagaan</Strong>
                            <div class="row static-info">                                
                                <div class="col-md-12">{!! Form::checkbox('ketua_kelompok','1') !!} {!! Form::label('ketua_kelompok', 'Ketua Kelompok') !!}  </div>
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
                                <i class="fa fa-users"></i>{{ $result->total() }} Data Kelompok Tani </div>
                            <div class="tools">
                                <a href="javascript:;" class="collapse"> </a>                                
                                <a href="javascript:;" class="reload"> </a>
                                <a href="javascript:;" class="remove"> </a>
                            </div>
                        </div>
                        <div class="portlet-body flip-scroll">
                        {!! Form::open(['method'=>'get']) !!}
                            <div class="row">                            
                           
                            <div class="col-sm-4 form-group">
                                <div class="input-group">
                                    <input class="form-control" id="search"
                                        value="{{ request('search') }}"
                                        placeholder="Cari nama kelompok" name="search"
                                        type="text" id="search"/>
                                    <div class="input-group-btn">
                                        <button type="submit" class="btn btn-success">
                                            Cari
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <input type="hidden" value="{{request('field')}}" name="field"/>
                            <input type="hidden" value="{{request('sort')}}" name="sort"/>
                            </div>
                            {!! Form::close() !!}
                            <table class="table table-bordered table-striped table-condensed flip-content">
                                <thead class="flip-content">
                                    <tr>
                                        <th width="20%"> Kode Poktan </th>
                                        <th> Provinsi </th>
                                        <th> Kabupaten </th>
                                        <th> Kecamatan </th>
                                        <th> Desa </th>
                                        <th> Nama Poktan </th>
                                        <th> Aksi </th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($result as $item)
                                    <tr>
                                        <td>{{ $item->id }}</td>                                    
                                        <td>{{ $item->provinsi }}</td>
                                        <td>{{ $item->kabupaten }}</td>
                                        <td>{{ $item->kecamatan }}</td>
                                        <td>{{ $item->desa }}</td>
                                        <td>{{ $item->nama_kelompok }}</td>
                                        <td><a href="{{ route('poktanDetail', $item->id) }}" class="btn btn-xs btn-success"><i class="fa fa-eye"></i> Detail</a></td>
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

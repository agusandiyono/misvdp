@extends('layouts.app')

@section('title', 'Desa Dampingan')

@section('content')
    <div class="row">
        <div class="col-md-5">
            <h3 class="modal-title">{{ $result->total() }} Jumlah Desa Dampingan</h3>
        </div>
        <div class="col-md-7 page-action text-right">
            @can('add_dampingans')
                <a href="{{ route('dampingan.create') }}" class="btn btn-primary btn-sm"> <i class="glyphicon glyphicon-plus-sign"></i> Tambah Baru</a>
            @endcan
        </div>
    </div>

    <div class="result-set">     
         <!-- BEGIN SAMPLE TABLE PORTLET-->
         <div class="portlet box blue">
            <div class="portlet-title">
                <div class="caption">
                    <i class="fa fa-cogs"></i>Data Desa Dampingan</div>               
            </div>            
            <div class="portlet-body">
            {!! Form::open(['method'=>'get']) !!}
        <div class="row">
            <div class="col-sm-4 form-group">
                {!! Form::select('gender',['-1'=>'Pilih Provinsi','Male'=>'Male','Female'=>'Female'],null,['class'=>'form-control','onChange'=>'form.submit()']) !!}
            </div>
            <div class="col-sm-5 form-group">
                <div class="input-group">
                    <input class="form-control" id="search"
                           value="{{ request('search') }}"
                           placeholder="Search name" name="search"
                           type="text" id="search"/>
                    <div class="input-group-btn">
                        <button type="submit" class="btn btn-warning"
                        >
                            Search
                        </button>
                    </div>
                </div>
            </div>
            <input type="hidden" value="{{request('field')}}" name="field"/>
            <input type="hidden" value="{{request('sort')}}" name="sort"/>
        </div>
        {!! Form::close() !!}
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover">
                        <thead>
                            <tr>                                
                                <th>Provinsi</th>
                                <th>Kabupaten</th>
                                <th>Kecamatan</th>
                                <th>Desa</th>
                                <th>Tahun</th>                                                                
                                
                                
                            </tr>
                        </thead>
                        <tbody>
                        @php
                            $i=1;
                        @endphp
                            @foreach($result as $item)
                                <tr>                                    
                                    <td>{{ $item->provinsi }}</td>
                                    <td>{{ $item->kabupaten }}</td>
                                    <td>{{ $item->kecamatan }}</td>
                                    <td><a href="{{ route('poktan.poktanDesa', $item->desa) }}" class="tooltips" data-original-title="Klik untuk melihat list kelompok tani desa {{ $item->desa }}">{{ $item->desa }}</a></td>
                                    <td>{{ $item->tahun }}</td>                                    
                                                                                                        
                                    <td class="text-center">                                                                                                          
                                    
                                </tr>
                            @endforeach                          
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- END SAMPLE TABLE PORTLET-->
    
        <div class="text-center">
            {{ $result->links() }}
        </div>
    </div>

@endsection
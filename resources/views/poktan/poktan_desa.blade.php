@extends('layouts.app')

@section('title', 'Kelompok Tani')

@section('content')
    <div class="row">
        <div class="col-md-5">
            <h3 class="modal-title">{{ $result->total() }} Jumlah Kelompok Tani </h3>
        </div>
        <div class="col-md-7 page-action text-right">
            @can('add_ikus')
                <a href="{{ route('poktan.create') }}" class="btn btn-primary btn-sm"> <i class="glyphicon glyphicon-plus-sign"></i> Tambah Baru</a>
            @endcan
        </div>
    </div>

    <div class="result-set">     
         <!-- BEGIN SAMPLE TABLE PORTLET-->
         <div class="portlet box blue">
            <div class="portlet-title">
                <div class="caption">
                    <i class="fa fa-cogs"></i>Data Kelompok Tani</div>               
            </div>            
            <div class="portlet-body">
            
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>Kode Poktan</th>
                                <th>Provinsi</th>
                                <th>Kabupaten</th>
                                <th>Kecamatan</th>
                                <th>Desa</th>
                                <th>Nama Kelompok</th>                                
                               
                                
                            </tr>
                        </thead>
                        <tbody>
                        @php
                            $i=1;
                        @endphp
                            @foreach($result as $item)
                                <tr>
                                    <td>{{ $item->id }}</td>                                    
                                    <td>{{ $item->provinsi }}</td>
                                    <td>{{ $item->kabupaten }}</td>
                                    <td>{{ $item->kecamatan }}</td>
                                    <td>{{ $item->desa }}</td>
                                    <td>{{ $item->nama }}</td>                                    
                                                                       
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
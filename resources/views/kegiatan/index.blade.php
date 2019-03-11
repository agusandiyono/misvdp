@extends('layouts.app')

@section('title', 'Kelompok Tani')

@section('content')
    <div class="row">
        <div class="col-md-5">
            <h3 class="modal-title">{{ $result->total() }} Kegiatan</h3>
        </div>
        <div class="col-md-7 page-action text-right">
            @can('add_ikus')
                <a href="{{ route('kegiatan.create') }}" class="btn btn-primary btn-sm"> <i class="glyphicon glyphicon-plus-sign"></i> Tambah Baru</a>
            @endcan
        </div>
    </div>

    <div class="result-set">     
         <!-- BEGIN SAMPLE TABLE PORTLET-->
         <div class="portlet box blue">
            <div class="portlet-title">
                <div class="caption">
                    <i class="fa fa-cogs"></i>Data Kegiatan</div>               
            </div>
            <div class="portlet-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Provinsi</th>
                                <th>Kabupaten</th>
                                <th>Kecamatan</th>
                                <th>Desa</th>
                                <th>Kegiatan</th>                                                                
                                <th class="text-center">Actions</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($result as $item)
                                <tr>
                                    <td>{{ $item->id }}</td>
                                    <td>{{ $item->provinsi['nama'] }}</td>
                                    <td>{{ $item->kabupaten['nama'] }}</td>
                                    <td>{{ $item->kecamatan['nama'] }}</td>
                                    <td>{{ $item->desa['nama'] }}</td>
                                    <td>{{ $item->nama }}</td>                                    
                                                                                                        
                                    <td class="text-center">
                                    
                                    <a href="#myModal2" role="button" class="btn btn-xs btn-warning" data-toggle="modal"> <i class="fa fa-bullhorn"></i> Issues </a>
                                    <div id="myModal2" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel2" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                                                    <h4 class="modal-title">Issue Kelompok {{ $item->nama }}</h4>
                                                </div>
                                                <div class="modal-body">
                                                <table class="table table-bordered table-striped">
                                                    <thead>
                                                        <tr>
                                                            <th> Kondisi </th>
                                                            <th> Issue </th>                                                            
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>                                                        
                                                            <td>
                                                                <span class="label label-default"> Partisipasi </span>
                                                            </td>                                                            
                                                            <td> {{ $item->partisipasi }} </td>
                                                        </tr>
                                                        <tr>                                                        
                                                            <td>
                                                                <span class="label label-primary"> Budidaya </span>
                                                            </td> 
                                                            <td> {{ $item->budidaya }} </td>                                                          
                                                        </tr>
                                                        <tr>                                                            
                                                            <td>
                                                                <span class="label label-info"> Pengolahan </span>
                                                            </td> 
                                                            <td> {{ $item->pengolahan }} </td>                                                      
                                                        </tr>
                                                        <tr>
                                                            
                                                            <td>
                                                                <span class="label label-success"> Pemasaran </span>
                                                            </td>         
                                                            <td> {{ $item->pemasaran }} </td>                                                  
                                                        </tr>
                                                        <tr>
                                                            
                                                            <td>
                                                                <span class="label label-danger"> Pendapatan </span>
                                                            </td>    
                                                            <td> {{ $item->pendapatan }} </td>                                                        
                                                        </tr>                                                       
                                                    </tbody>
                                                </table>
                                                </div>
                                                <div class="modal-footer">
                                                    <button data-dismiss="modal" class="btn green">OK</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <a href="#" class="btn btn-xs btn-success"><i class="fa fa-eye"></i> Detail</a>                                    
                                    @can('edit_poktans', 'delete_poktans')
                                        @include('shared._actions', [
                                            'entity' => 'poktan',
                                            'id' => $item->id
                                        ])
                                        @endcan
                                    </td>
                                    
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
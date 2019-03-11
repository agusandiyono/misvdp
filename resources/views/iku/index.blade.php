@extends('layouts.app')

@section('title', 'IKU')

@section('content')
    <div class="row">
        <div class="col-md-5">
            <h3 class="modal-title">{{ $result->total() }} Jumlah IKU</h3>
        </div>
        <div class="col-md-7 page-action text-right">
            @can('add_ikus')
                <a href="{{ route('iku.create') }}" class="btn btn-primary btn-sm"> <i class="glyphicon glyphicon-plus-sign"></i> Create</a>
            @endcan
        </div>
    </div>

    <div class="result-set">     
         <!-- BEGIN SAMPLE TABLE PORTLET-->
         <div class="portlet box blue">
            <div class="portlet-title">
                <div class="caption">
                    <i class="fa fa-cogs"></i>Data IKU TTG</div>               
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
                                <th>Kecamatan</th>                
                                @can('edit_ikus', 'delete_ikus')
                                    <th class="text-center">Actions</th>
                                @endcan
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($result as $item)
                                <tr>
                                    <td>{{ $item->id }}</td>
                                    <td>{{ $item->provinsi['nama'] }}</td>
                                    <td>{{ $item->kabupaten['nama'] }}</td>
                                    <td>{{ $item->created_at->toFormattedDateString() }}</td>
                                    <td>{{ $item->nama }}</td>
                                    @can('edit_ikus', 'delete_ikus')
                                    <td class="text-center">
                                        @include('shared._actions', [
                                            'entity' => 'iku',
                                            'id' => $item->id
                                        ])
                                    </td>
                                    @endcan
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
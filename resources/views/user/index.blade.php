@extends('layouts.app')

@section('title', 'Users')

@section('content')
    <div class="row">
        <div class="col-md-5">
            <h3 class="modal-title">{{ $result->total() }} User </h3>
        </div>
        <div class="col-md-7 page-action text-right">
            @can('add_users')
                <a href="{{ route('users.create') }}" class="btn btn-primary btn-sm"> <i class="glyphicon glyphicon-plus-sign"></i> Create</a>
            @endcan
            <a href="{{ route('users.export') }}" class="btn btn-primary btn-sm"> <i class="glyphicon glyphicon-plus-sign"></i> Export</a>
        </div>
    </div>

    <div class="result-set">
        <!-- BEGIN SAMPLE TABLE PORTLET-->
        <div class="portlet box blue">
            <div class="portlet-title">
                <div class="caption">
                    <i class="fa fa-cogs"></i>Data User</div>               
            </div>
            <div class="portlet-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Name</th>
                                <th>Username</th>
                                <th>Email</th>
                                <th>Role</th>
                                <th>Created At</th>
                                @can('edit_users', 'delete_users')
                                <th class="text-center">Actions</th>
                                @endcan
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 0;?>
                            @foreach($result as $item)
                            <?php $no++;?>
                                <tr>
                                    <td>{{ $no }}</td>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->username }}</td>
                                    <td>{{ $item->email }}</td>
                                    <td>{{ $item->roles->implode('name', ', ') }}</td>
                                    <td>{{ $item->created_at->toFormattedDateString() }}</td>

                                    @can('edit_users')
                                    <td class="text-center">
                                        @include('shared._actions', [
                                            'entity' => 'users',
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

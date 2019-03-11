@extends('layouts.app')

@section('title', 'Edit User ' . $user->name)

@section('content')

    <div class="row">
        <div class="col-md-5">
            <h3>Edit {{ $user->name }}</h3>
        </div>
        <div class="col-md-7 page-action text-right">
            <a href="{{ route('users.index') }}" class="btn btn-default btn-sm"> <i class="fa fa-arrow-left"></i> Back</a>
        </div>
    </div>

    <div class="portlet-body">            
        {!! Form::model($user, ['method' => 'PUT', 'route' => ['users.update',  $user->id ], 'class' => 'form-horizontal', 'enctype' => 'multipart/form-data' ]) !!}
        @include('user._form')
            <!-- Submit Form Button -->
            {!! Form::submit('Save Changes', ['class' => 'btn btn-primary']) !!}
        {!! Form::close() !!}
    </div>
    
@endsection
@extends('layouts.app')

@section('title', 'Tambah Data Kegiatan')

@section('content')
 

    <div class="row">
        <div class="col-lg-12">  
            <div class="portlet light portlet-fit portlet-form bordered">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="icon-users font-blue"></i>
                        <span class="caption-subject font-blue sbold uppercase">Input Data Kelompok Tani</span>
                    </div>
                    <div class="actions">
                    <a href="{{ route('poktan.index') }}" class="btn btn-default btn-sm"> <i class="fa fa-arrow-left"></i> Back</a>
                    </div>
                </div>
                <div class="portlet-body">       
                {!! Form::open(['route' => ['kegiatan.store'], 'class' => 'form-horizontal', 'enctype' => 'multipart/form-data' ]) !!}   

                    {{ csrf_field() }}
                    @include('kegiatan._form')
                    <!-- Submit Form Button -->
                    <div class="form-actions">
                    {!! Form::submit('Create', ['class' => 'btn btn-primary']) !!}
                    </div>
                    
                {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>


@endsection

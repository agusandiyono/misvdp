@extends('layouts.app')

@section('title', 'Create')

@section('content')
<div class="row">
    <div class="col-md-12">
      <!-- BEGIN VALIDATION STATES-->
      <div class="portlet light portlet-fit portlet-form bordered">
            <div class="portlet-title">
                <div class="caption">
                    <i class="icon-users font-blue"></i>
                    <span class="caption-subject font-blue sbold uppercase">Input Data IKU TTG</span>
                </div>
                <div class="actions">
                <a href="{{ route('iku.index') }}" class="btn btn-default btn-sm"> <i class="fa fa-arrow-left"></i> Back</a>
                </div>
            </div>
            <div class="portlet-body">
              {!! Form::open(['route' => ['iku.store'], 'class' => 'form-horizontal', 'enctype' => 'multipart/form-data' ]) !!}
                  {{ csrf_field() }}
                  @include('iku._form')
                  <!-- Submit Form Button -->
                  <div class="form-actions">
                  {!! Form::submit('Create', ['class' => 'btn green']) !!}
                  </div>
              {!! Form::close() !!}
            </div>
        </div>
      <!-- END VALIDATION STATES-->
    </div>
</div>
@endsection
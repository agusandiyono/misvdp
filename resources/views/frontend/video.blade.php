@extends('frontend.layouts.app')
@section('title', 'Video -')

@section('content')

<!-- BEGIN PAGE HEAD-->
<div class="page-head">
    <div class="container">
        <!-- BEGIN PAGE TITLE -->
        <div class="page-title">
            <h1>Video
                <small>Kumpulan video kegiatan PPDM</small>
            </h1>
        </div>
        <!-- END PAGE TITLE -->

    </div>
</div>
<!-- END PAGE HEAD-->

@foreach ($videos as $video)
    <h4>{{ $video->title }}</h4>
    <div class="media">
        <div class="media-body">
            {!! Embed::make($video->link)->parseUrl()->getIframe() !!}
        </div>
    </div>
@endforeach


@endsection


@push('scripts')


@endpush

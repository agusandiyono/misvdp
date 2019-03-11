@extends('frontend.layouts.app')

@section('title', 'Konsultan -')

@section('content')

<!-- BEGIN PAGE HEAD-->
<div class="page-head">
    <div class="container">
        <!-- BEGIN PAGE TITLE -->
        <div class="page-title">
            <h1>Tim Kami
                <small></small>
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
            <!-- BEGIN : USER CARDS -->
            <div class="row">
                <div class="col-md-12">
                    <div class="portlet light portlet-fit ">
                        <div class="portlet-title">
                            <div class="caption">
                                <i class=" icon-layers font-green"></i>
                                <span class="caption-subject font-green bold uppercase">Konsultan NPMU</span>
                            </div>
                        </div>
                        <div class="portlet-body">
                            <div class="mt-element-card mt-element-overlay">
                                <div class="row">                                    
                                    @foreach($konsultan as $r)
                                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                        <div class="mt-card-item">
                                            <div class="mt-card-avatar mt-overlay-1 mt-scroll-down">
                                                @if($r->foto == "")
                                                <img src="../img/avatar.jpg" />
                                                @else
                                                    <img src="../img/tim/{{ $r->foto }}" />
                                                @endif
                                                <div class="mt-overlay mt-top">
                                                    <ul class="mt-info">
                                                        <li>
                                                            <a class="btn default btn-outline" href="detail-tim/{{ $r->id }}">
                                                                <i class="icon-magnifier"></i>
                                                            </a>
                                                        </li>
                                                        
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="mt-card-content">
                                                <h3 class="mt-card-name">{{ $r->nama }}</h3>
                                                <p class="mt-card-desc font-grey-mint">{{ $r->jabatan }}</p>
                                                <div class="mt-card-social">
                                                    <ul>
                                                        <li>
                                                            <a href="http://www.facebook.com/{{ $r->fb }}">
                                                                <i class="icon-social-facebook"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="http://www.twitter.com/{{ $r->twitter }}">
                                                                <i class="icon-social-twitter"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="http://www.instagram.com/{{ $r->ig }}">
                                                                <i class="fa fa-instagram"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                                                        
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
                      
            <!-- END : USER CARDS -->
        </div>
        <!-- END PAGE CONTENT INNER -->
    </div>
</div>
<!-- END PAGE CONTENT BODY -->

@endsection


@push('scripts')


@endpush

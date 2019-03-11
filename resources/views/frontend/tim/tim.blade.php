@extends('frontend.layouts.app')


@section('title', ' '.$tim->first()->nama.' -')

@section('content')

<!-- BEGIN PAGE HEAD-->
<div class="page-head">
    <div class="container">
        <!-- BEGIN PAGE TITLE -->
        <div class="page-title">
            <h1>Profil Tim
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
            <div class="profile">                                                                     
                <div class="row">
                    <div class="col-md-6">
                        <ul class="list-unstyled profile-nav">
                            <li>
                                @if($tim->first()->foto == "")
                                <img src="../../img/avatar.jpg" class="img-responsive pic-bordered" alt="" />
                                @else
                                    <img src="../../img/tim/{{$tim->first()->foto}}" class="img-responsive pic-bordered" alt="" />
                                @endif                                
                                                              
                            </li>                            
                        </ul>
                    </div>
                    <div class="col-md-6">                                
                        <h1 class="font-green sbold uppercase">{{$tim->first()->nama}}</h1>
                        <h5 class="font-black sbold uppercase">{{$tim->first()->jabatan}}</h5>
                        <p> {{$tim->first()->tentang}} </p>
                        
                        <div class="socicons">
                            <!-- <a href="#" class="socicon-btn socicon-btn-circle socicon-lg socicon-solid bg-red bg-hover-grey-salsa font-white bg-hover-white socicon-twitter tooltips" data-original-title="Twitter"></a>
                            <a href="#" class="socicon-btn socicon-btn-circle socicon-lg socicon-solid bg-blue bg-hover-grey-salsa font-white bg-hover-white socicon-facebook tooltips" data-original-title="Facebook"></a>
                            <a href="#" class="socicon-btn socicon-btn-circle socicon-lg socicon-solid bg-dark bg-hover-grey-salsa font-white bg-hover-white socicon-instagram tooltips" data-original-title="Instagram"></a>                         -->

                            <a href="http://www.twitter.com/{{$tim->first()->twitter}}" class="socicon-btn socicon-btn-circle socicon-sm socicon-solid bg-red bg-hover-grey-salsa font-white bg-hover-white socicon-twitter tooltips" data-original-title="Twitter"></a>
                            <a href="http://www.facebook.com/{{$tim->first()->fb}}" class="socicon-btn socicon-btn-circle socicon-sm socicon-solid bg-blue bg-hover-grey-salsa font-white bg-hover-white socicon-facebook tooltips" data-original-title="Facebook"></a>
                            <a href="http://www.instagram.com/{{$tim->first()->ig}}" class="socicon-btn socicon-btn-circle socicon-sm socicon-solid bg-blue bg-hover-grey-salsa font-white bg-hover-white socicon-instagram tooltips" data-original-title="Instagram"></a>
                        </div>
                            <!--end col-md-8-->
                            
                        
                        <!--end row-->                                    
                    </div>
                </div>                                                                                          
            </div>
        </div>
        <!-- END PAGE CONTENT INNER -->
    </div>
</div>
<!-- END PAGE CONTENT BODY -->

@endsection


@push('scripts')


@endpush

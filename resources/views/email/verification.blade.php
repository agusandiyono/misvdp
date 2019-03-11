<!-- Please verify your email

<a href="{{ route('auth.verify', $token) }}">Verify your email</a> -->
<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>   
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="{{ asset('metronic/global/plugins/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('metronic/global/plugins/simple-line-icons/simple-line-icons.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('metronic/global/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('metronic/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->
    <!-- BEGIN PAGE LEVEL PLUGINS -->
    <link href="{{ asset('metronic/global/plugins/bootstrap-daterangepicker/daterangepicker.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('metronic/global/plugins/morris/morris.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('metronic/global/plugins/fullcalendar/fullcalendar.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('metronic/global/plugins/jqvmap/jqvmap/jqvmap.css')}}" rel="stylesheet" type="text/css" />
    <!-- END PAGE LEVEL PLUGINS -->
    <!-- BEGIN THEME GLOBAL STYLES -->
    <link href="{{ asset('metronic/global/css/components.min.css')}}" rel="stylesheet" id="style_components" type="text/css" />
    <link href="{{ asset('metronic/global/css/plugins.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('metronic/global/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- END THEME GLOBAL STYLES -->
    <!-- BEGIN THEME LAYOUT STYLES -->
    <link href="{{ asset('metronic/layouts/layout/css/layout.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('metronic/layouts/layout/css/themes/darkblue.min.css')}}" rel="stylesheet" type="text/css" id="style_color" />
    <link href="{{ asset('metronic/layouts/layout/css/custom.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- END THEME LAYOUT STYLES -->

     <link rel="stylesheet" href="//cdn.datatables.net/1.10.7/css/jquery.dataTables.min.css">

    <style>
        .result-set { margin-top: 1em }
    </style>
 
</head>
<body>
<div id="app">
    <div class="page-wrapper">    
        <!-- BEGIN CONTENT -->
        <div class="page-content-wrapper">
            <!-- BEGIN CONTENT BODY -->
            <div class="page-content">                    
            <div class="invoice-content-2 bordered">
                            <!-- <div class="row invoice-head">
                                <div class="col-md-7 col-xs-6">
                                    <div class="invoice-logo">
                                        <img src="{{ asset('img/logo-kemendesa.png')}}" height="10px" alt="" class="img-responsive" />                                        
                                    </div>
                                </div>
                                <div class="col-md-5 col-xs-6">
                                    <div class="company-address">
                                        <span class="bold uppercase">PSDA TTG</span>
                                        <br/> Kementerian Desa Tertinggal, PDTT
                                    </div>
                                </div>
                            </div> -->
                            <div class="row invoice-cust-add">
                                <div class="col-xs-12">
                                    <h2 class="invoice-title uppercase">Verifikasikan Alamat Email Anda</h2>
                                    <p class="invoice-desc">Untuk mengaktifkan akun Anda, silahkan gunakan tombol dibawah ini untuk verifikasi email Anda. Pesan konfirmasi akan dikirimkan kemudian.</p>
                                </div>                                
                            </div>                                                   
                            <div class="row">
                                <div class="col-xs-12">
                                    <a href="{{ route('auth.verify', $token) }}" class="btn btn-lg green-haze hidden-print uppercase print-btn">Verifikasikan Alamat Email</a>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12">
                                <img src="{{ asset('img/ttd.jpg')}}" alt="" class="img-responsive" />
                                </div>
                            </div>
                        </div>
            </div>            
            <!-- END CONTENT BODY -->
        </div>        


            <!-- BEGIN FOOTER -->
            <div class="page-footer">
                <div class="page-footer-inner"> 2017 - 2018 &copy;
                    <a target="_blank" href="http://kemendesa.go.id">Kemendesa</a> All rights reserved.
                </div>
            <div class="scroll-to-top">
                <i class="icon-arrow-up"></i>
            </div>        
    </div>
    <!-- END FOOTER -->
</div>    
</body>
</html>

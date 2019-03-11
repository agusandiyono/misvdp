<!doctype html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title') MISVDP</title>
        <style>
        #detailChart {
          /* width: 100%; */
          height: 100%; 
        }				
        </style>

        <!-- Fonts -->
        <!-- <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css"> -->

        <link href="{{ asset('metronic/global/plugins/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('metronic/global/plugins/simple-line-icons/simple-line-icons.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('metronic/global/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('metronic/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css')}}" rel="stylesheet" type="text/css" />
        <!-- END GLOBAL MANDATORY STYLES -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <link href="{{ asset('metronic/global/plugins/bootstrap-daterangepicker/daterangepicker.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('metronic/global/plugins/datatables/datatables.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('metronic/global/plugins/fullcalendar/fullcalendar.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('metronic/global/plugins/jqvmap/jqvmap/jqvmap.css')}}" rel="stylesheet" type="text/css" />
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL STYLES -->
        <link href="{{ asset('metronic/global/css/components.min.css')}}" rel="stylesheet" id="style_components" type="text/css" />
        <link href="{{ asset('metronic/global/css/plugins.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('metronic/pages/css/profile.min.css')}}" rel="stylesheet" type="text/css" />
        <!-- END THEME GLOBAL STYLES -->
        <link href="{{ asset('metronic/pages/css/error.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('metronic/pages/css/profile-2.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('metronic/global/plugins/socicon/socicon.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('metronic/pages/css/blog.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('metronic/pages/css/contact.min.css')}}" rel="stylesheet" type="text/css" />
        <!-- BEGIN THEME LAYOUT STYLES -->
        <link href="{{ asset('metronic/layouts/layout3/css/layout.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('metronic/layouts/layout3/css/themes/default.min.css')}}" rel="stylesheet" type="text/css" id="style_color" />
        <link href="{{ asset('metronic/layouts/layout3/css/custom.min.css')}}" rel="stylesheet" type="text/css" />
        <style type="text/css">
          .kanan{
            position: relative;
            display: inline-block;
            float: right;
            transition: width .4s;
            -webkit-border-radius: 4px;
            -moz-border-radius: 4px;
            -ms-border-radius: 4px;
            -o-border-radius: 4px;
            border-radius: 4px;
          }
        </style>

    </head>
    <body class="page-container-bg-solid page-header-menu-fixed ">
        <div class="page-wrapper">
            @include('frontend.partials.header')
            <div class="page-wrapper-row full-height">
              <div class="page-wrapper-middle" style="background-image:url('../img/bg.png');background-size:100%;">
                  <!-- BEGIN CONTAINER -->
                  <div class="page-container" >
                    <!-- BEGIN CONTENT -->
                    <div class="page-content-wrapper" >
                      @yield('content')
                    </div>
                  </div>
                </div>
              </div>
            @include('frontend.partials.footer')
        </div>

        <!--[if lt IE 9]>
<script src="../assets/global/plugins/respond.min.js"></script>
<script src="../assets/global/plugins/excanvas.min.js"></script>
<script src="../assets/global/plugins/ie8.fix.min.js"></script>
<![endif]-->
        <!-- BEGIN CORE PLUGINS -->
        <script src="{{ asset('metronic/global/plugins/jquery.min.js')}}" type="text/javascript"></script>
        <script src="{{ asset('metronic/global/plugins/bootstrap/js/bootstrap.min.js')}}" type="text/javascript"></script>
        <script src="{{ asset('metronic/global/plugins/js.cookie.min.js')}}" type="text/javascript"></script>
        <script src="{{ asset('metronic/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js')}}" type="text/javascript"></script>
        <script src="{{ asset('metronic/global/plugins/jquery.blockui.min.js')}}" type="text/javascript"></script>
        <script src="{{ asset('metronic/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js')}}" type="text/javascript"></script>
        <!-- END CORE PLUGINS -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <script src="{{ asset('metronic/global/plugins/moment.min.js')}}" type="text/javascript"></script>
        <script src="{{ asset('metronic/global/plugins/bootstrap-daterangepicker/daterangepicker.min.js')}}" type="text/javascript"></script>
        <script src="{{ asset('metronic/global/plugins/fullcalendar/fullcalendar.min.js')}}" type="text/javascript"></script>
        <script src="{{ asset('metronic/global/plugins/flot/jquery.flot.min.js')}}" type="text/javascript"></script>
        <script src="{{ asset('metronic/global/plugins/flot/jquery.flot.resize.min.js')}}" type="text/javascript"></script>
        <script src="{{ asset('metronic/global/plugins/flot/jquery.flot.categories.min.js')}}" type="text/javascript"></script>
        <script src="{{ asset('metronic/global/plugins/jquery-easypiechart/jquery.easypiechart.min.js')}}" type="text/javascript"></script>
        <script src="{{ asset('metronic/global/plugins/jquery.sparkline.min.js')}}" type="text/javascript"></script>
        <script src="{{ asset('metronic/global/plugins/jqvmap/jqvmap/jquery.vmap.js')}}" type="text/javascript"></script>
        <script src="{{ asset('metronic/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.russia.js')}}" type="text/javascript"></script>
        <script src="{{ asset('metronic/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.world.js')}}" type="text/javascript"></script>
        <script src="{{ asset('metronic/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.europe.js')}}" type="text/javascript"></script>
        <script src="{{ asset('metronic/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.germany.js')}}" type="text/javascript"></script>
        <script src="{{ asset('metronic/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.usa.js')}}" type="text/javascript"></script>
        <script src="{{ asset('metronic/global/plugins/jqvmap/jqvmap/data/jquery.vmap.sampledata.js')}}" type="text/javascript"></script>
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <script src="http://maps.google.com/maps/api/js?sensor=false" type="text/javascript"></script>
        <script src="{{ asset('metronic/global/plugins/gmaps/gmaps.min.js')}}" type="text/javascript"></script>
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN AMCHART PLUGINS -->
        <script src="{{ asset('metronic/global/plugins/amcharts/amcharts/amcharts.js')}}" type="text/javascript"></script>
        <script src="{{ asset('metronic/global/plugins/amcharts/amcharts/serial.js')}}" type="text/javascript"></script>
        <script src="{{ asset('metronic/global/plugins/amcharts/amcharts/pie.js')}}" type="text/javascript"></script>
        <script src="{{ asset('metronic/global/plugins/amcharts/amcharts/radar.js')}}" type="text/javascript"></script>
        <script src="{{ asset('metronic/global/plugins/amcharts/amcharts/themes/light.js')}}" type="text/javascript"></script>
        <script src="{{ asset('metronic/global/plugins/amcharts/amcharts/themes/patterns.js')}}" type="text/javascript"></script>
        <script src="{{ asset('metronic/global/plugins/amcharts/amcharts/themes/chalk.js')}}" type="text/javascript"></script>
        <script src="{{ asset('metronic/global/plugins/amcharts/ammap/ammap.js')}}" type="text/javascript"></script>
        <script src="{{ asset('metronic/global/plugins/amcharts/ammap/maps/js/worldLow.js')}}" type="text/javascript"></script>
        <script src="{{ asset('metronic/global/plugins/amcharts/amstockcharts/amstock.js')}}" type="text/javascript"></script>
        <!-- END AMCHART PLUGINS -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <script src="{{ asset('metronic/global/scripts/datatable.js')}}" type="text/javascript"></script>
        <script src="{{ asset('metronic/global/plugins/datatables/datatables.min.js')}}" type="text/javascript"></script>
        <script src="{{ asset('metronic/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js')}}" type="text/javascript"></script>
        <script src="{{ asset('metronic/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js')}}" type="text/javascript"></script>
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL SCRIPTS -->
        <script src="{{ asset('metronic/global/scripts/app.min.js')}}" type="text/javascript"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.bundle.js" type="text/javascript"></script>
        <!-- END THEME GLOBAL SCRIPTS -->
        <!-- BEGIN PAGE LEVEL SCRIPTS -->
        <script src="{{ asset('metronic/pages/scripts/ecommerce-dashboard.min.js')}}" type="text/javascript"></script>
        <script src="{{ asset('metronic/pages/scripts/table-datatables-ajax.min.js')}}" type="text/javascript"></script>
        <!-- END PAGE LEVEL SCRIPTS -->
        <!-- BEGIN PAGE LEVEL SCRIPTS -->
    <script src="{{ asset('metronic/pages/scripts/dashboard.min.js')}}" type="text/javascript"></script>
    <script src="{{ asset('metronic/global/plugins/counterup/jquery.waypoints.min.js')}}" type="text/javascript"></script>
    <script src="{{ asset('metronic/global/plugins/counterup/jquery.counterup.min.js')}}" type="text/javascript"></script>
    <!-- END PAGE LEVEL SCRIPTS -->
        <!-- BEGIN THEME LAYOUT SCRIPTS -->
        <script src="{{ asset('metronic/layouts/layout3/scripts/layout.min.js')}}" type="text/javascript"></script>
        <script src="{{ asset('metronic/layouts/layout3/scripts/demo.min.js')}}" type="text/javascript"></script>
        <script src="{{ asset('metronic/layouts/global/scripts/quick-sidebar.min.js')}}" type="text/javascript"></script>
        <script src="{{ asset('metronic/layouts/global/scripts/quick-nav.min.js')}}" type="text/javascript"></script>
        <!-- END THEME LAYOUT SCRIPTS -->

        @stack('scripts')
        <script type="text/javascript">
          $('#provinsi_id').on('change', function(e){
            console.log(e);
            var provinsi_id = e.target.value;
            $.get('/json-kabupaten?provinsi_id=' + provinsi_id,function(data) {
              console.log(data);
              $('#kabupaten_id').empty();
              $('#kabupaten_id').append('<option value="" disable="true" selected="true">Pilih Kabupaten</option>');

              $('#kecamatan_id').empty();
              $('#kecamatan_id').append('<option value="" disable="true" selected="true">Pilih Kecamatan</option>');

              $('#desa_id').empty();
              $('#desa_id').append('<option value="" disable="true" selected="true">Pilih Desa</option>');

              $.each(data, function(index, kabupatenObj){
                $('#kabupaten_id').append('<option value="'+ kabupatenObj.id +'">'+ kabupatenObj.nama +'</option>');
              })
            });
          });

          $('#kabupaten_id').on('change', function(e){
           console.log(e);
           var kabupaten_id = e.target.value;
           $.get('/json-kecamatan?kabupaten_id=' + kabupaten_id,function(data) {
             console.log(data);
             $('#kecamatan_id').empty();
             $('#kecamatan_id').append('<option value="" disable="true" selected="true">Pilih Kecamatan</option>');

             $('#desa_id').empty();
             $('#desa_id').append('<option value="" disable="true" selected="true">Pilih Desa</option>');

             $.each(data, function(index, kecamatanObj){
               $('#kecamatan_id').append('<option value="'+ kecamatanObj.id +'">'+ kecamatanObj.nama +'</option>');
             })
           });
         });

         $('#kecamatan_id').on('change', function(e){
            console.log(e);
            var kecamatan_id = e.target.value;
            $.get('/json-desa?kecamatan_id=' + kecamatan_id,function(data) {
              console.log(data);
              $('#desa_id').empty();
              $('#desa_id').append('<option value="" disable="true" selected="true">Pilih Desa</option>');

              $.each(data, function(index, desaObj){
                $('#desa_id').append('<option value="'+ desaObj.id +'">'+ desaObj.nama +'</option>');
              })
            });
          });

        </script>

       
      


    </body>
</html>

<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title') {{ config('app.name', 'MISVDP') }}</title>

    <!-- Styles -->
    <!-- {{--    <link href="{{ asset('css/app.css') }}" rel="stylesheet">--}} -->
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.7/cosmo/bootstrap.min.css"> -->
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
    
    <!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
</head>
<body class="page-header-fixed page-sidebar-fixed page-content-white">
<div id="app">
      <div class="page-wrapper">
          @include('layouts.partials.header')

              <!-- BEGIN CONTENT -->
              <div class="page-content-wrapper">
                  <!-- BEGIN CONTENT BODY -->
                  <div class="page-content">
                    
                    @yield('content')
                  </div>
                  <!-- END CONTENT BODY -->
              </div>
              <!-- END CONTENT -->

          </div>
          <!-- END CONTAINER -->
          <!-- BEGIN FOOTER -->
          <div class="page-footer">
              <div class="page-footer-inner"> 2017 - 2018 &copy;
                  <a target="_blank" href="http://ppdm.kemendesa.id">PPDM</a> All rights reserved.

              </div>
              <div class="scroll-to-top">
                  <i class="icon-arrow-up"></i>
              </div>
          </div>
          <!-- END FOOTER -->
      </div>

     <!-- Scripts -->
    <!-- <script src="{{ asset('js/app.js') }}"></script> -->

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
    <script src="{{ asset('metronic/global/plugins/morris/morris.min.js')}}" type="text/javascript"></script>
    <script src="{{ asset('metronic/global/plugins/morris/raphael-min.js')}}" type="text/javascript"></script>
    <script src="{{ asset('metronic/global/plugins/counterup/jquery.waypoints.min.js')}}" type="text/javascript"></script>
    <script src="{{ asset('metronic/global/plugins/counterup/jquery.counterup.min.js')}}" type="text/javascript"></script>
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
    <script src="{{ asset('metronic/global/plugins/fullcalendar/fullcalendar.min.js')}}" type="text/javascript"></script>
    <script src="{{ asset('metronic/global/plugins/horizontal-timeline/horizontal-timeline.js')}}" type="text/javascript"></script>
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


    <script src="{{ asset('metronic/global/plugins/select2/js/select2.full.min.js')}}" type="text/javascript"></script>
    <script src="{{ asset('metronic/global/plugins/jquery-validation/js/jquery.validate.min.js')}}" type="text/javascript"></script>
    <script src="{{ asset('metronic/global/plugins/jquery-validation/js/additional-methods.min.js')}}" type="text/javascript"></script>
    <script src="{{ asset('metronic/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js')}}" type="text/javascript"></script>
    <script src="{{ asset('metronic/global/plugins/bootstrap-wysihtml5/wysihtml5-0.3.0.js')}}" type="text/javascript"></script>
    <script src="{{ asset('metronic/global/plugins/bootstrap-wysihtml5/bootstrap-wysihtml5.js')}}" type="text/javascript"></script>
    <script src="{{ asset('metronic/global/plugins/ckeditor/ckeditor.js')}}" type="text/javascript"></script>
    <script src="{{ asset('metronic/global/plugins/bootstrap-markdown/lib/markdown.js')}}" type="text/javascript"></script>
    

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
    <!-- BEGIN THEME GLOBAL SCRIPTS -->
    <script src="{{ asset('metronic/global/scripts/app.min.js')}}" type="text/javascript"></script>
    <script src="{{ asset('metronic/pages/scripts/form-validation.min.js')}}" type="text/javascript"></script>
    <!-- END THEME GLOBAL SCRIPTS -->
    <!-- BEGIN PAGE LEVEL SCRIPTS -->
    <script src="{{ asset('metronic/pages/scripts/dashboard.min.js')}}" type="text/javascript"></script>
    
    <!-- END PAGE LEVEL SCRIPTS -->
    <!-- BEGIN THEME LAYOUT SCRIPTS -->
    <script src="{{ asset('metronic/layouts/layout/scripts/layout.min.js')}}" type="text/javascript"></script>
    <script src="{{ asset('metronic/layouts/layout/scripts/demo.min.js')}}" type="text/javascript"></script>
    <script src="{{ asset('metronic/layouts/global/scripts/quick-sidebar.min.js')}}" type="text/javascript"></script>
    <script src="{{ asset('metronic/layouts/global/scripts/quick-nav.min.js')}}" type="text/javascript"></script>
    <!-- END THEME LAYOUT SCRIPTS -->

  
          
    @stack('scripts')

    <script>
        $(function () {
            // flash auto hide
            $('#flash-msg .alert').not('.alert-danger, .alert-important').delay(6000).slideUp(500);
        })
    </script>
   

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

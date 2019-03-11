<?php foreach ($centroid_berkembang as $key){
  $distance = array(
   $akhir1= $key->I1-$i1,
   $akhir2= $key->I2-$i2,
   $akhir3= $key->I3-$i3,
   $akhir4= $key->I4-$i4,
   $akhir5= $key->I5-$i5,
   $akhir6= $key->I6-$i6,
   $akhir7= $key->I7-$i7,
   $akhir8= $key->I8-$i8,
   $akhir9= $key->I9-$i9,
   $akhir10= $key->I10-$i10,
   $akhir11= $key->I11-$i11,
   $akhir12= $key->I12-$i12,
   $akhir13= $key->I13-$i13,
   $akhir14= $key->I14-$i14,
   $akhir15= $key->I15-$i15,
   $akhir16= $key->I16-$i16,
   $akhir17= $key->I17-$i17,
   $akhir18= $key->I18-$i18,
   $akhir19= $key->I19-$i19,
   $akhir20= $key->I20-$i20,
   $akhir21= $key->I21-$i21,
   $akhir22= $key->I22-$i22,
   $akhir23= $key->I23-$i23,
   $akhir24= $key->I24-$i24,
   $akhir25= $key->I25-$i25,
   $akhir26= $key->I26-$i26,
   $akhir27= $key->I27-$i27,
   $akhir28= $key->I28-$i28,
   $akhir29= $key->I29-$i29,
   $akhir30= $key->I30-$i30,
   $akhir31= $key->I31-$i31,
   $akhir32= $key->I32-$i32,
   $akhir33= $key->I33-$i33,
   $akhir34= $key->I34-$i34,
   $akhir35= $key->I35-$i35,
   $akhir36= $key->I36-$i36,
   $akhir37= $key->I37-$i37,
   $akhir38= $key->I38-$i38,
   $akhir39= $key->I39-$i39,
   $akhir40= $key->I40-$i40,
   $akhir41= $key->I41-$i41,
   $akhir42= $key->I42-$i42);
}
    ?>
    <div class="content-wrapper">
<!-- Content Header (Page header) -->
<section class="content-header">
  <div id="content-header">
    <ol class="breadcrumb">
          <li><a href="<?php echo base_url() ?>"><i class="fa fa-dashboard"></i> Home</a></li>
          <li><a href="<?php echo base_url() ?>ipd">Data IPD</a></li>
          <li><a href="<?php echo base_url() ?>ipd/read/<?php echo $id?>">Data Desa <?php echo $desa; ?></a></li>
          <li class="active">Status indikator centroid cluster Provinsi <?php echo $provinsi ?></li>
      </ol>
  </div>
<div class="row">
      <div class="col-sm-8">
        <div class="box box-primary">
          <div class="box-header with-border">
            <h3 class="box-title">Grafik Status Indikator Desa <?php echo $desa; ?> serta status indikator centroid cluster Provinsi <?php echo $provinsi; ?></h3>

          </div><!-- /.box-header -->
          <div class="box-body">
            <div id="chartdiv2"></div>
          </div><!-- /.box-body -->
        </div><!-- /.box -->
      </div><!-- /.col -->
      <div class="col-sm-4">
        <div class="box box-primary">
          <div class="box-header with-border">
            <h3 class="box-title">Grafik Status Indikator Desa <?php echo $desa; ?> serta status indikator centroid cluster Provinsi <?php echo $provinsi; ?></h3>

          </div><!-- /.box-header -->
          <div class="box-body">
            <?php
              arsort($distance);
              $no=1;
              foreach($distance as $x => $x_value) {
                  echo "<h5>". $no . ".". getIndikator('i'.($x+1))." [i".($x+1)."] = ". $x_value ."</h5>";
                  $no++;
                  if($no==11)
                    break;
                }
               ?>
          </div><!-- /.box-body -->
        </div><!-- /.box -->
      </div><!-- /.col -->
    </div><!-- /.row -->


    <div class="row">
      <div class="col-sm-12">
        <div class="box box-primary">
          <div class="box-header with-border">
            <h3 class="box-title">Grafik Status Indikator Desa <?php echo $desa; ?> serta status indikator centroid cluster Provinsi <?php echo $provinsi; ?></h3>

          </div><!-- /.box-header -->
          <div class="box-body">
            GAP Analisis merupakan teknik yang digunakan untuk mengetahui kesenjangan antara kondisi aktual di suatu desa dengan kondisi rata-rata status perdesaan yang diinginkan dalam suatu provinsi. Balok Biru menunjukkan kondisi aktual dari desa <b><?php echo $desa; ?></b>. Garis Kuning menunjukkan kondisi rata-rata desa yang berstatus desa berkembang dari Provinsi. 
			Untuk menjadi Desa <b>Mandiri Nasional</b> yang dalam hal ini menggunakan <b>Centroid Cluster 3 Nasional</b>, tabel program prioritas pembangunan desa dibawah ini dapat digunakan sebagai acuan.
          </div><!-- /.box-body -->
        </div><!-- /.box -->
      </div><!-- /.col -->
    </div><!-- /.row -->

    <div class="row">
      <div class="col-sm-12">
        <div class="box box-primary">
          <div class="box-header with-border">
            <h3 class="box-title">PROGRAM PRIORITAS PEMBANGUNAN DESA <?php echo $desa; ?></h3>

          </div><!-- /.box-header -->
          <div class="box-body">
            <table class="table table-bordered data-table">
              <tr><th>NO</th><th>INDIKATOR</th><th>GAP/Kesenjangan</th></tr>
              <?php
              $no=1;
              foreach($distance as $x => $x_value) {
                  echo "<tr><td>". $no . ". </td><td>". getIndikator('i'.($x+1))." [i".($x+1)."] </td><td>". $x_value ."</td></tr>";
                  $no++;
                }
               ?>
               </table>
        <a href="<?php echo site_url('ipd/read/'.$id) ?>" class="btn btn-lg btn-red pull-right"><i class="entypo-back"></i> Kembali</a>
          </div><!-- /.box-body -->
        </div><!-- /.box -->
      </div><!-- /.col -->
    </div><!-- /.row -->
</div>
</section>
</div>

<script src="<?php echo base_url()?>assets/plugins/amcharts/amcharts/amcharts.js" type="text/javascript"></script>
<script src="<?php echo base_url()?>assets/plugins/amcharts/amcharts/serial.js" type="text/javascript"></script>
<script src="<?php echo base_url()?>assets/plugins/amcharts/amcharts/pie.js" type="text/javascript"></script>

<script src="<?php echo base_url()?>assets/plugins/amcharts/amcharts/themes/light.js" type="text/javascript"></script>
<script src="<?php echo base_url()?>assets/plugins/amcharts/amcharts/themes/patterns.js" type="text/javascript"></script>
<script src="<?php echo base_url()?>assets/plugins/amcharts/amcharts/themes/chalk.js" type="text/javascript"></script>
<script src="<?php echo base_url()?>assets/plugins/amcharts/ammap/ammap.js" type="text/javascript"></script>
<script src="<?php echo base_url()?>assets/plugins/amcharts/ammap/maps/js/worldLow.js" type="text/javascript"></script>
<script src="<?php echo base_url()?>assets/plugins/amcharts/amstockcharts/amstock.js" type="text/javascript"></script>

<script type="text/javascript">
  var chart = AmCharts.makeChart("chartdiv2", {
    "type": "serial",
    "theme": "light",
    "addClassNames": true,
    "balloon": {
    "adjustBorderColor": false,
    "horizontalPadding": 10,
    "verticalPadding": 8,
    "color": "#ffffff"
  },
    "legend": {

        "position": "top"
    },
    "dataProvider": [{
        "judul": "i1",
        "indikator": "<?php echo $i1; ?>",
        "berkembang": "<?php echo getberkembang($provinsi,'I1'); ?>"
      },
      {
          "judul": "i2",
          "indikator": "<?php echo $i2; ?>",
          "berkembang": "<?php echo getberkembang($provinsi,'I2'); ?>"
      },
      {
          "judul": "i3",
          "indikator": "<?php echo $i3; ?>",
          "berkembang": "<?php echo getberkembang($provinsi,'I3'); ?>"
      },{
          "judul": "i4",
          "indikator": "<?php echo $i4; ?>",
          "berkembang": "<?php echo getberkembang($provinsi,'I4'); ?>"
      },{
          "judul": "i5",
          "indikator": "<?php echo $i5; ?>",
          "berkembang": "<?php echo getberkembang($provinsi,'I5'); ?>"
      },{
          "judul": "i6",
          "indikator": "<?php echo $i6; ?>",
          "berkembang": "<?php echo getberkembang($provinsi,'I6'); ?>"
      },{
          "judul": "i7",
          "indikator": "<?php echo $i7; ?>",
          "berkembang": "<?php echo getberkembang($provinsi,'I7'); ?>"
      },{
          "judul": "i8",
          "indikator": "<?php echo $i8; ?>",
          "berkembang": "<?php echo getberkembang($provinsi,'I8'); ?>"
      },{
          "judul": "i9",
          "indikator": "<?php echo $i9; ?>",
          "berkembang": "<?php echo getberkembang($provinsi,'I9'); ?>"
      },
      {
          "judul": "i10",
          "indikator": "<?php echo $i10; ?>",
          "berkembang": "<?php echo getberkembang($provinsi,'I10'); ?>"
      },{
          "judul": "i11",
          "indikator": "<?php echo $i11; ?>",
          "berkembang": "<?php echo getberkembang($provinsi,'I11'); ?>"
      },
      {
          "judul": "i12",
          "indikator": "<?php echo $i12; ?>",
         "berkembang": "<?php echo getberkembang($provinsi,'I12'); ?>"
      },
      {
          "judul": "i13",
          "indikator": "<?php echo $i13; ?>",
          "berkembang": "<?php echo getberkembang($provinsi,'I13'); ?>"
      },
      {
          "judul": "i14",
          "indikator": "<?php echo $i14; ?>",
          "berkembang": "<?php echo getberkembang($provinsi,'I14'); ?>"
      },
      {
          "judul": "i15",
          "indikator": "<?php echo $i15; ?>",
          "berkembang": "<?php echo getberkembang($provinsi,'I15'); ?>"
      },
      {
          "judul": "i16",
          "indikator": "<?php echo $i16; ?>",
          "berkembang": "<?php echo getberkembang($provinsi,'I16'); ?>"
      },
      {
          "judul": "i17",
          "indikator": "<?php echo $i17; ?>",
          "berkembang": "<?php echo getberkembang($provinsi,'I17'); ?>"
      },
      {
          "judul": "i18",
          "indikator": "<?php echo $i18; ?>",
          "berkembang": "<?php echo getberkembang($provinsi,'I18'); ?>"
      },
      {
          "judul": "i19",
          "indikator": "<?php echo $i19; ?>",
          "berkembang": "<?php echo getberkembang($provinsi,'I19'); ?>"
      },
      {
          "judul": "i20",
          "indikator": "<?php echo $i20; ?>",
          "berkembang": "<?php echo getberkembang($provinsi,'I20'); ?>"
      },
      {
          "judul": "i21",
          "indikator": "<?php echo $i21; ?>",
          "berkembang": "<?php echo getberkembang($provinsi,'I21'); ?>"
      },
      {
          "judul": "i22",
          "indikator": "<?php echo $i22; ?>",
          "berkembang": "<?php echo getberkembang($provinsi,'I22'); ?>"
      },
      {
          "judul": "i23",
          "indikator": "<?php echo $i23; ?>",
          "berkembang": "<?php echo getberkembang($provinsi,'I23'); ?>"
      },
      {
          "judul": "i24",
          "indikator": "<?php echo $i24; ?>",
          "berkembang": "<?php echo getberkembang($provinsi,'I24'); ?>"
      },
      {
          "judul": "i25",
          "indikator": "<?php echo $i25; ?>",
          "berkembang": "<?php echo getberkembang($provinsi,'I25'); ?>"
      },
      {
          "judul": "i26",
          "indikator": "<?php echo $i26; ?>",
          "berkembang": "<?php echo getberkembang($provinsi,'I26'); ?>"
      },
      {
          "judul": "i27",
          "indikator": "<?php echo $i27; ?>",
          "berkembang": "<?php echo getberkembang($provinsi,'I27'); ?>"
      },
      {
          "judul": "i28",
          "indikator": "<?php echo $i28; ?>",
          "berkembang": "<?php echo getberkembang($provinsi,'I28'); ?>"
      },
      {
          "judul": "i29",
          "indikator": "<?php echo $i29; ?>",
          "berkembang": "<?php echo getberkembang($provinsi,'I29'); ?>"
      },
      {
          "judul": "i30",
          "indikator": "<?php echo $i30; ?>",
          "berkembang": "<?php echo getberkembang($provinsi,'I30'); ?>"
      },
      {
          "judul": "i31",
          "indikator": "<?php echo $i31; ?>",
          "berkembang": "<?php echo getberkembang($provinsi,'I31'); ?>"
      },
      {
          "judul": "i32",
          "indikator": "<?php echo $i32; ?>",
          "berkembang": "<?php echo getberkembang($provinsi,'I32'); ?>"
      },
      {
          "judul": "i33",
          "indikator": "<?php echo $i33; ?>",
          "berkembang": "<?php echo getberkembang($provinsi,'I33'); ?>"
      },
      {
          "judul": "i34",
          "indikator": "<?php echo $i34; ?>",
          "berkembang": "<?php echo getberkembang($provinsi,'I34'); ?>"
      },
      {
          "judul": "i35",
          "indikator": "<?php echo $i35; ?>",
          "berkembang": "<?php echo getberkembang($provinsi,'I35'); ?>"
      },
      {
          "judul": "i36",
          "indikator": "<?php echo $i36; ?>",
          "berkembang": "<?php echo getberkembang($provinsi,'I36'); ?>"
      },
      {
          "judul": "i37",
          "indikator": "<?php echo $i37; ?>",
          "berkembang": "<?php echo getberkembang($provinsi,'I37'); ?>"
      },
      {
          "judul": "i38",
          "indikator": "<?php echo $i38; ?>",
          "berkembang": "<?php echo getberkembang($provinsi,'I38'); ?>"
      },
      {
          "judul": "i39",
          "indikator": "<?php echo $i39; ?>",
          "berkembang": "<?php echo getberkembang($provinsi,'I39'); ?>"
      },
      {
          "judul": "i40",
          "indikator": "<?php echo $i40; ?>",
          "berkembang": "<?php echo getberkembang($provinsi,'I40'); ?>"
      },
      {
          "judul": "i41",
          "indikator": "<?php echo $i41; ?>",
          "berkembang": "<?php echo getberkembang($provinsi,'I41'); ?>"
      },
      {
          "judul": "i42",
          "indikator": "<?php echo $i42; ?>",
          "berkembang": "<?php echo getberkembang($provinsi,'I42'); ?>"
      },
    ],
    "valueAxes": [{
        "integersOnly": true,
        "maximum": 6,
        "minimum": 0,
        "axisAlpha": 0,
        "dashLength": 5,
        "gridCount": 10,
        "position": "left",
        "title": "Nilai indikator"
    }],
    "startDuration": 0.5,
    "graphs": [{
        "alphaField": "alpha",
        "balloonText": "<span style='font-size:12px;'><?php echo $desa ?> [[title]] [[category]]:<br><span style='font-size:20px;'>[[value]]</span> [[additional]]</span>",
        "fillAlphas": 1,
        "title": "Indikator",
        "type": "column",
        "valueField": "indikator",
        "dashLengthField": "dashLengthColumn"
    }, {
        "id": "graph4",
        "balloonText": "<span style='font-size:12px;'>Centroid [[title]]  [[category]]:<br><span style='font-size:20px;'>[[value]]</span> [[additional]]</span>",
        "bullet": "round",
        "lineThickness": 3,
        "bulletSize": 7,
        "bulletBorderAlpha": 1,
        "bulletColor": "#FFFFFF",
        "useLineColorForBulletBorder": true,
        "bulletBorderThickness": 3,
        "fillAlphas": 0,
        "lineAlpha": 1,
        "title": "berkembang",
        "valueField": "berkembang",
        "dashLengthField": "dashLengthLine"
    }],
    "chartCursor": {
        "cursorAlpha": 0,
        "zoomable": true,
        "labelRotation": 90
    },
    //"angle": 30,
    //"rotate": true,
    "categoryField": "judul",
    "categoryAxis": {
        "gridPosition": "start",
        "axisAlpha": 0,
        "fillAlpha": 0.05,
        "fillColor": "#000000",
        "gridAlpha": 0,
        "labelRotation": 90,
        "autoGridCount": false,
        "gridCount": 42
    },
    "export": {
      "enabled": true,
        "position": "bottom-right"
     }
});




</script>

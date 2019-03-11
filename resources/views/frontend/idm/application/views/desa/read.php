<p>
  <button class="btn btn-blue btn-icon icon-left btn-cetak">
    <i class="entypo-print"></i>
    Cetak Data
  </button>
</p>
<div id="detail-kegiatan">
<table class="table">
  <tr>
    <td><strong>Provinsi</strong></td>
    <td>:</td>
    <td><?php echo $provinsi ?></td>
  </tr>
  <tr>
    <td><strong>Kabupaten</strong></td>
    <td>:</td>
    <td><?php echo $kabupaten ?></td>
  </tr>
  <tr>
    <td><strong>Kecamatan</strong></td>
    <td>:</td>
    <td><?php echo $kecamatan ?></td>
  </tr>
  <tr>
    <td><strong>Desa</strong></td>
    <td>:</td>
    <td><?php echo $desa ?></td>
  </tr>
  <tr>
    <td><strong>Status</strong></td>
    <td>:</td>
    <td><?php echo $status ?></td>
  </tr>
</table>
<table class="table table-bordered datatable">
  <tbody>
    <tr>
      <td colspan="2"><h3>Data Perkembangan Desa (IDM)</h3></td>
    </tr>
    <tr>
      <td><div id="chartdiv" style="height:600px;"></div></td>
    </tr>
  </tbody>
</table>
<table class="table table-bordered datatable">
  <tbody>
    <tr>
      <td colspan="2"><h3 class="box-title">Status Desa <?php echo $desa; ?> saat ini adalah <b><?php echo $status; ?></b></h3></td>
    </tr>
  </tbody>

</table>
<table class="table table-bordered datatable">
  <tbody>
    <tr>
      <td colspan="2"><h3>Indeks Desa Membangun (IDM)</h3></td>
    </tr>
    <!-- IKS -->
    <tr>
      <td>Indeks Ketahahan Sosial</td>
      <td><?php echo $iks2017 ?></td>
    </tr>
    <tr>
      <td>Indeks Ketahahan Ekonomi</td>
      <td><?php echo $ike2017 ?></td>
    </tr>
    <tr>
      <td>Indeks Ketahahan Lingkungan</td>
      <td><?php echo $ikl2017 ?></td>
    </tr>
    <tr>
      <td>Nilai IDM 2018</td>
      <td><?php echo $nilaiidm ?></td>
    </tr>
  </tbody>

</table>
<a href="<?php echo base_url('desa') ?>" class="btn btn-lg btn-red pull-right"><i class="entypo-back"></i> Kembali</a>
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
  var chart = AmCharts.makeChart("chartdiv", {
    "type": "serial",
    "theme": "light",
    "addClassNames": true,
    "creditsPosition": "bottom-right",
    "balloon": {
	    "adjustBorderColor": false,
	    "horizontalPadding": 10,
	    "verticalPadding": 8,
	    "color": "#ffffff"
	  },
    "legend": {
        "horizontalGap": 10,
        "maxColumns": 1,
        "position": "right",
        "useGraphSettings": true,
        "markerSize": 10,
        "marginTop": 20
    },
    "dataProvider": [{
        "judul": "IKS",
        "indikator": "<?php echo $iks2017; ?>",
      },
      {
          "judul": "IKE",
          "indikator": "<?php echo $ike2017; ?>",
      },
      {
          "judul": "IKL",
          "indikator": "<?php echo $ikl2017; ?>",
      },


    ],
    "valueAxes": [{
        "integersOnly": true,
        "maximum": 1,
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
        "balloonText": "<span style='font-size:12px;'>[[category]] :<br><span style='font-size:20px;'>[[value]]</span> [[additional]]</span>",
        "fillAlphas": 1,
        "title": "Indikator",
        "type": "column",
        "valueField": "indikator",
        "dashLengthField": "dashLengthColumn"
    },{
    }],
    "chartCursor": {
        "cursorAlpha": 0,
        "zoomable": true,
        "labelRotation": 90
    },
    "categoryField": "judul",
    "categoryAxis": {
        "gridPosition": "start",
        "axisAlpha": 0,
        "fillAlpha": 0.05,
        "fillColor": "#000000",
        "gridAlpha": 0,
        "labelRotation": 90,
        "autoGridCount": false,
        "gridCount": 52,

    },
    "export": {
      "enabled": true,
        "position": "top-right"
     },
      "listeners": [{
    "event": "drawn",
    "method": addLegendLabel
  }]
});

  function addLegendLabel(e) {
  var title = document.createElement("div");
  title.className = "legend-title";
  e.chart.legendDiv.appendChild(title)
}
</script>
<script>
  jQuery(document).ready(function($){
    $(".btn-cetak").click(function(){
      $('#detail-kegiatan').printThis();
    });
  });
</script>

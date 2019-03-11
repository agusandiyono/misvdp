<!-- <p>
  <button class="btn btn-blue btn-icon icon-left btn-cetak">
    <i class="entypo-print"></i>
    Cetak Data
  </button>
</p> -->
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
      <td colspan="2"><h3>Grafik Indeks Pembangunan Desa (IPD)</h3></td>
    </tr>
    <tr>
      <td><div id="chartdiv" style="height:400px;"></div></td>
    </tr>
  </tbody>

</table>
<table class="table table-bordered datatable">
  <tbody>
    <tr>
      <td colspan="2"><h3 class="box-title">Status Desa <?php echo $desa; ?> saat ini adalah <b><?php echo $status; ?></b> Tingkatkan Menjadi :</h3></td>
    </tr>
    <tr>
		<td>	
        <?php echo anchor(site_url('ipd/gap_berkembang/'.$id), 'Berkembang <br> Cluster 3',array('class'=>'btn btn-warning btn-sm'));?>
		<?php echo anchor(site_url('ipd/gap_maju/'.$id), 'Maju <br> Cluster 2',array('class'=>'btn btn-success btn-sm'));?>
        <?php echo anchor(site_url('ipd/gap_mandiri/'.$id), 'Mandiri <br> Cluster 1',array('class'=>'btn btn-danger btn-sm'));?>
		
	</td>
		
    </tr>
  </tbody>

</table>

<table class="table table-bordered datatable table-hover">
  <tr>
    <td colspan="2"><h3>Grafik Indeks Desa Membangun (IDM)</h3></td>
  </tr>
              <tr></tr>
              <tr><td>Ketersediaan dan Akses TK/RA/BA (i1)</td><td><?php echo $i1; ?></td></tr>
              <tr><td>Ketersediaan dan Akses SD Sederajat (i2)</td><td><?php echo $i2; ?></td></tr>
              <tr><td>Ketersediaan dan Akses SMP Sederajat (i3)</td><td><?php echo $i3; ?></td></tr>
              <tr><td>Ketersediaan dan Akses SMA Sederajat (i4)</td><td><?php echo $i4; ?></td></tr>
              <tr><td>Ketersediaan rumah sakit (i5)</td><td><?php echo $i5; ?></td></tr>
              <tr><td>Ketersediaan rumah sakit bersalin (i6)</td><td><?php echo $i6; ?></td></tr>
              <tr><td>Ketersediaan puskesmas (i7)</td><td><?php echo $i7; ?></td></tr>
              <tr><td>Ketersediaan poliklinik/balai pengobatan (i8)</td><td><?php echo $i8; ?></td></tr>
              <tr><td>Ketersediaan tempat praktek dokter (i9)</td><td><?php echo $i9; ?></td></tr>
              <tr><td>Ketersediaan tempat praktek bidan (i10)</td><td><?php echo $i10; ?></td></tr>
              <tr><td>Ketersediaan poskesdes atau polindes (i11)</td><td><?php echo $i11; ?></td></tr>
              <tr><td>Ketersediaan apotek (i12)</td><td><?php echo $i12; ?></td></tr>
              <tr><td>Ketersediaan pertokoan/minimarket (i13)</td><td><?php echo $i13; ?></td></tr>
              <tr><td>Ketersediaan pasar (i14)</td><td><?php echo $i14; ?></td></tr>
              <tr><td>Ketersediaan rumah makan/warung (i15)</td><td><?php echo $i15; ?></td></tr>
              <tr><td>Ketersediaan akomodasi hotel/penginapan (i16)</td><td><?php echo $i16; ?></td></tr>
              <tr><td>Ketersediaan bank (i17)</td><td><?php echo $i17; ?></td></tr>
              <tr><td>Elektrifikasi (i18)</td><td><?php echo $i18; ?></td></tr>
              <tr><td>Kondisi penerangan di jalan utama (i19)</td><td><?php echo $i19; ?></td></tr>
              <tr><td>Bahan bakar untuk memasak (i20)</td><td><?php echo $i20; ?></td></tr>
              <tr><td>Sumber air untuk minum (i21)</td><td><?php echo $i21; ?></td></tr>
              <tr><td>Sumber air untuk mandi/cuci (i22)</td><td><?php echo $i22; ?></td></tr>
              <tr><td>Fasilitas buang air besar (i23)</td><td><?php echo $i23; ?></td></tr>
              <tr><td>Fasilitas buang air besar (i24)</td><td><?php echo $i24; ?></td></tr>
              <tr><td>Ketersediaan internet & pengiriman pos/barang (i25)</td><td><?php echo $i25; ?></td></tr>
              <tr><td>Lalu lintas dan kualitas jalan 9i26)</td><td><?php echo $i26; ?></td></tr>
              <tr><td>Aksesibilitas jalan (i27)</td><td><?php echo $i27; ?></td></tr>
              <tr><td>Ketersediaan angkutan umum (i28)</td><td><?php echo $i28; ?></td></tr>
              <tr><td>Operasional angkutan umum (i29)</td><td><?php echo $i29; ?></td></tr>
              <tr><td>Waktu transportasi kekantor camat (i30)</td><td><?php echo $i30; ?></td></tr>
              <tr><td>Biaya transportasi kekantor camat (i31)</td><td><?php echo $i31; ?></td></tr>
              <tr><td>Waktu transportasi kekantor bupati(i32)</td><td><?php echo $i32; ?></td></tr>
              <tr><td>Biaya transportasi kekantor bupati (i33)</td><td><?php echo $i33; ?></td></tr>
              <tr><td>Penanganan kejadian luar biasa (i34)</td><td><?php echo $i34; ?></td></tr>
              <tr><td>Penanganan gizi buruk (i35)</td><td><?php echo $i35; ?></td></tr>
              <tr><td>Ketersediaan fasilitas olahraga (i36)</td><td><?php echo $i36; ?></td></tr>
              <tr><td>Keberadaan kelompok kegiatan olahraga (i37)</td><td><?php echo $i37; ?></td></tr>
              <tr><td>Kelengkapan pemerintahan desa (i38)</td><td><?php echo $i38; ?></td></tr>
              <tr><td>Otonomi desa (i39)</td><td><?php echo $i39; ?></td></tr>
              <tr><td>Aset/kekayaan desa (i40)</td><td><?php echo $i40; ?></td></tr>
              <tr><td>Kualitas SDM kepala desa (i41)</td><td><?php echo $i41; ?></td></tr>
              <tr><td>Kualitas SDM sekretaris desa (i42)</td><td><?php echo $i42; ?></td></tr>
           </table>
           <a href="<?php echo site_url('ipd') ?>" class="btn btn-lg btn-red pull-right"><i class="entypo-back"></i> Kembali</a>
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
        "judul": "i1",
        "indikator": "<?php echo $i1; ?>",
        "berkembang": "<?php echo getBerkembang($provinsi,'I1'); ?>",
        "maju": "<?php echo getMaju($provinsi,'I1'); ?>",
        "mandiri": "<?php echo getMandiri($provinsi,'I1'); ?>"
      },
      {
          "judul": "i2",
          "indikator": "<?php echo $i2; ?>",
          "berkembang": "<?php echo getBerkembang($provinsi,'I2'); ?>",
          "maju": "<?php echo getMaju($provinsi,'I2'); ?>",
          "mandiri": "<?php echo getMandiri($provinsi,'I3'); ?>"
      },
      {
          "judul": "i3",
          "indikator": "<?php echo $i3; ?>",
          "berkembang": "<?php echo getBerkembang($provinsi,'I3'); ?>",
          "maju": "<?php echo getMaju($provinsi,'I3'); ?>",
          "mandiri": "<?php echo getMandiri($provinsi,'I3'); ?>"
      },{
          "judul": "i4",
          "indikator": "<?php echo $i4; ?>",
          "berkembang": "<?php echo getBerkembang($provinsi,'I4'); ?>",
          "maju": "<?php echo getMaju($provinsi,'I4'); ?>",
          "mandiri": "<?php echo getMandiri($provinsi,'I4'); ?>"
      },{
          "judul": "i5",
          "indikator": "<?php echo $i5; ?>",
          "berkembang": "<?php echo getBerkembang($provinsi,'I5'); ?>",
          "maju": "<?php echo getMaju($provinsi,'I5'); ?>",
          "mandiri": "<?php echo getMandiri($provinsi,'I5'); ?>"
      },{
          "judul": "i6",
          "indikator": "<?php echo $i6; ?>",
          "berkembang": "<?php echo getBerkembang($provinsi,'I6'); ?>",
          "maju": "<?php echo getMaju($provinsi,'I6'); ?>",
          "mandiri": "<?php echo getMandiri($provinsi,'I6'); ?>"
      },{
          "judul": "i7",
          "indikator": "<?php echo $i7; ?>",
          "berkembang": "<?php echo getBerkembang($provinsi,'I7'); ?>",
          "maju": "<?php echo getMaju($provinsi,'I7'); ?>",
          "mandiri": "<?php echo getMandiri($provinsi,'I7'); ?>"
      },{
          "judul": "i8",
          "indikator": "<?php echo $i8; ?>",
          "berkembang": "<?php echo getBerkembang($provinsi,'I8'); ?>",
          "maju": "<?php echo getMaju($provinsi,'I8'); ?>",
          "mandiri": "<?php echo getMandiri($provinsi,'I8'); ?>"
      },{
          "judul": "i9",
          "indikator": "<?php echo $i9; ?>",
          "berkembang": "<?php echo getBerkembang($provinsi,'I9'); ?>",
          "maju": "<?php echo getMaju($provinsi,'I9'); ?>",
          "mandiri": "<?php echo getMandiri($provinsi,'I9'); ?>"
      },
      {
          "judul": "i10",
          "indikator": "<?php echo $i10; ?>",
          "berkembang": "<?php echo getBerkembang($provinsi,'I10'); ?>",
          "maju": "<?php echo getMaju($provinsi,'I10'); ?>",
          "mandiri": "<?php echo getMandiri($provinsi,'I10'); ?>"
      },{
          "judul": "i11",
          "indikator": "<?php echo $i11; ?>",
          "berkembang": "<?php echo getBerkembang($provinsi,'I11'); ?>",
          "maju": "<?php echo getMaju($provinsi,'I11'); ?>",
          "mandiri": "<?php echo getMandiri($provinsi,'I11'); ?>"
      },
      {
          "judul": "i12",
          "indikator": "<?php echo $i12; ?>",
         "berkembang": "<?php echo getBerkembang($provinsi,'I12'); ?>",
          "maju": "<?php echo getMaju($provinsi,'I12'); ?>",
          "mandiri": "<?php echo getMandiri($provinsi,'I12'); ?>"
      },
      {
          "judul": "i13",
          "indikator": "<?php echo $i13; ?>",
          "berkembang": "<?php echo getBerkembang($provinsi,'I13'); ?>",
          "maju": "<?php echo getMaju($provinsi,'I13'); ?>",
          "mandiri": "<?php echo getMandiri($provinsi,'I13'); ?>"
      },
      {
          "judul": "i14",
          "indikator": "<?php echo $i14; ?>",
          "berkembang": "<?php echo getBerkembang($provinsi,'I14'); ?>",
          "maju": "<?php echo getMaju($provinsi,'I14'); ?>",
          "mandiri": "<?php echo getMandiri($provinsi,'I14'); ?>"
      },
      {
          "judul": "i15",
          "indikator": "<?php echo $i15; ?>",
          "berkembang": "<?php echo getBerkembang($provinsi,'I15'); ?>",
          "maju": "<?php echo getMaju($provinsi,'I15'); ?>",
          "mandiri": "<?php echo getMandiri($provinsi,'I15'); ?>"
      },
      {
          "judul": "i16",
          "indikator": "<?php echo $i16; ?>",
          "berkembang": "<?php echo getBerkembang($provinsi,'I16'); ?>",
          "maju": "<?php echo getMaju($provinsi,'I16'); ?>",
          "mandiri": "<?php echo getMandiri($provinsi,'I16'); ?>"
      },
      {
          "judul": "i17",
          "indikator": "<?php echo $i17; ?>",
          "berkembang": "<?php echo getBerkembang($provinsi,'I17'); ?>",
          "maju": "<?php echo getMaju($provinsi,'I17'); ?>",
          "mandiri": "<?php echo getMandiri($provinsi,'I17'); ?>"
      },
      {
          "judul": "i18",
          "indikator": "<?php echo $i18; ?>",
          "berkembang": "<?php echo getBerkembang($provinsi,'I18'); ?>",
          "maju": "<?php echo getMaju($provinsi,'I18'); ?>",
          "mandiri": "<?php echo getMandiri($provinsi,'I18'); ?>"
      },
      {
          "judul": "i19",
          "indikator": "<?php echo $i19; ?>",
          "berkembang": "<?php echo getBerkembang($provinsi,'I19'); ?>",
          "maju": "<?php echo getMaju($provinsi,'I19'); ?>",
          "mandiri": "<?php echo getMandiri($provinsi,'I19'); ?>"
      },
      {
          "judul": "i20",
          "indikator": "<?php echo $i20; ?>",
          "berkembang": "<?php echo getBerkembang($provinsi,'I20'); ?>",
          "maju": "<?php echo getMaju($provinsi,'I20'); ?>",
          "mandiri": "<?php echo getMandiri($provinsi,'I20'); ?>"
      },
      {
          "judul": "i21",
          "indikator": "<?php echo $i21; ?>",
          "berkembang": "<?php echo getBerkembang($provinsi,'I21'); ?>",
          "maju": "<?php echo getMaju($provinsi,'I21'); ?>",
          "mandiri": "<?php echo getMandiri($provinsi,'I21'); ?>"
      },
      {
          "judul": "i22",
          "indikator": "<?php echo $i22; ?>",
          "berkembang": "<?php echo getBerkembang($provinsi,'I22'); ?>",
          "maju": "<?php echo getMaju($provinsi,'I22'); ?>",
          "mandiri": "<?php echo getMandiri($provinsi,'I22'); ?>"
      },
      {
          "judul": "i23",
          "indikator": "<?php echo $i23; ?>",
          "berkembang": "<?php echo getBerkembang($provinsi,'I23'); ?>",
          "maju": "<?php echo getMaju($provinsi,'I23'); ?>",
          "mandiri": "<?php echo getMandiri($provinsi,'I23'); ?>"
      },
      {
          "judul": "i24",
          "indikator": "<?php echo $i24; ?>",
          "berkembang": "<?php echo getBerkembang($provinsi,'I24'); ?>",
          "maju": "<?php echo getMaju($provinsi,'I24'); ?>",
          "mandiri": "<?php echo getMandiri($provinsi,'I24'); ?>"
      },
      {
          "judul": "i25",
          "indikator": "<?php echo $i25; ?>",
          "berkembang": "<?php echo getBerkembang($provinsi,'I25'); ?>",
          "maju": "<?php echo getMaju($provinsi,'I25'); ?>",
          "mandiri": "<?php echo getMandiri($provinsi,'I25'); ?>"
      },
      {
          "judul": "i26",
          "indikator": "<?php echo $i26; ?>",
          "berkembang": "<?php echo getBerkembang($provinsi,'I26'); ?>",
          "maju": "<?php echo getMaju($provinsi,'I26'); ?>",
          "mandiri": "<?php echo getMandiri($provinsi,'I26'); ?>"
      },
      {
          "judul": "i27",
          "indikator": "<?php echo $i27; ?>",
          "berkembang": "<?php echo getBerkembang($provinsi,'I27'); ?>",
          "maju": "<?php echo getMaju($provinsi,'I27'); ?>",
          "mandiri": "<?php echo getMandiri($provinsi,'I27'); ?>"
      },
      {
          "judul": "i28",
          "indikator": "<?php echo $i28; ?>",
          "berkembang": "<?php echo getBerkembang($provinsi,'I28'); ?>",
          "maju": "<?php echo getMaju($provinsi,'I28'); ?>",
          "mandiri": "<?php echo getMandiri($provinsi,'I28'); ?>"
      },
      {
          "judul": "i29",
          "indikator": "<?php echo $i29; ?>",
          "berkembang": "<?php echo getBerkembang($provinsi,'I29'); ?>",
          "maju": "<?php echo getMaju($provinsi,'I29'); ?>",
          "mandiri": "<?php echo getMandiri($provinsi,'I29'); ?>"
      },
      {
          "judul": "i30",
          "indikator": "<?php echo $i30; ?>",
          "berkembang": "<?php echo getBerkembang($provinsi,'I30'); ?>",
          "maju": "<?php echo getMaju($provinsi,'I30'); ?>",
          "mandiri": "<?php echo getMandiri($provinsi,'I30'); ?>"
      },
      {
          "judul": "i31",
          "indikator": "<?php echo $i31; ?>",
          "berkembang": "<?php echo getBerkembang($provinsi,'I31'); ?>",
          "maju": "<?php echo getMaju($provinsi,'I31'); ?>",
          "mandiri": "<?php echo getMandiri($provinsi,'I31'); ?>"
      },
      {
          "judul": "i32",
          "indikator": "<?php echo $i32; ?>",
          "berkembang": "<?php echo getBerkembang($provinsi,'I32'); ?>",
          "maju": "<?php echo getMaju($provinsi,'I32'); ?>",
          "mandiri": "<?php echo getMandiri($provinsi,'I32'); ?>"
      },
      {
          "judul": "i33",
          "indikator": "<?php echo $i33; ?>",
          "berkembang": "<?php echo getBerkembang($provinsi,'I33'); ?>",
          "maju": "<?php echo getMaju($provinsi,'I33'); ?>",
          "mandiri": "<?php echo getMandiri($provinsi,'I33'); ?>"
      },
      {
          "judul": "i34",
          "indikator": "<?php echo $i34; ?>",
          "berkembang": "<?php echo getBerkembang($provinsi,'I34'); ?>",
          "maju": "<?php echo getMaju($provinsi,'I34'); ?>",
          "mandiri": "<?php echo getMandiri($provinsi,'I34'); ?>"
      },
      {
          "judul": "i35",
          "indikator": "<?php echo $i35; ?>",
          "berkembang": "<?php echo getBerkembang($provinsi,'I35'); ?>",
          "maju": "<?php echo getMaju($provinsi,'I35'); ?>",
          "mandiri": "<?php echo getMandiri($provinsi,'I35'); ?>"
      },
      {
          "judul": "i36",
          "indikator": "<?php echo $i36; ?>",
          "berkembang": "<?php echo getBerkembang($provinsi,'I36'); ?>",
          "maju": "<?php echo getMaju($provinsi,'I36'); ?>",
          "mandiri": "<?php echo getMandiri($provinsi,'I36'); ?>"
      },
      {
          "judul": "i37",
          "indikator": "<?php echo $i37; ?>",
          "berkembang": "<?php echo getBerkembang($provinsi,'I37'); ?>",
          "maju": "<?php echo getMaju($provinsi,'I37'); ?>",
          "mandiri": "<?php echo getMandiri($provinsi,'I37'); ?>"
      },
      {
          "judul": "i38",
          "indikator": "<?php echo $i38; ?>",
          "berkembang": "<?php echo getBerkembang($provinsi,'I38'); ?>",
          "maju": "<?php echo getMaju($provinsi,'I38'); ?>",
          "mandiri": "<?php echo getMandiri($provinsi,'I38'); ?>"
      },
      {
          "judul": "i39",
          "indikator": "<?php echo $i39; ?>",
          "berkembang": "<?php echo getBerkembang($provinsi,'I39'); ?>",
          "maju": "<?php echo getMaju($provinsi,'I39'); ?>",
          "mandiri": "<?php echo getMandiri($provinsi,'I39'); ?>"
      },
      {
          "judul": "i40",
          "indikator": "<?php echo $i40; ?>",
          "berkembang": "<?php echo getBerkembang($provinsi,'I40'); ?>",
          "maju": "<?php echo getMaju($provinsi,'I40'); ?>",
          "mandiri": "<?php echo getMandiri($provinsi,'I40'); ?>"
      },
      {
          "judul": "i41",
          "indikator": "<?php echo $i41; ?>",
          "berkembang": "<?php echo getBerkembang($provinsi,'I41'); ?>",
          "maju": "<?php echo getMaju($provinsi,'I41'); ?>",
          "mandiri": "<?php echo getMandiri($provinsi,'I41'); ?>"
      },
      {
          "judul": "i42",
          "indikator": "<?php echo $i42; ?>",
          "berkembang": "<?php echo getBerkembang($provinsi,'I42'); ?>",
          "maju": "<?php echo getMaju($provinsi,'I42'); ?>",
          "mandiri": "<?php echo getMandiri($provinsi,'I42'); ?>"
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
        "id": "graph2",
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
        "title": "Berkembang",
        "valueField": "berkembang",
        "dashLengthField": "dashLengthLine"
    }, {
        "id": "graph3",
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
        "title": "Maju",
        "valueField": "maju",
        "dashLengthField": "dashLengthLine"
    },{
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
        "title": "Mandiri",
        "valueField": "mandiri",
        "dashLengthField": "dashLengthLine"
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
        "gridCount": 42
    },
    "export": {
      "enabled": true,
        "position": "bottom-right"
     },
      "listeners": [{
    "event": "drawn",
    "method": addLegendLabel
  }]
});

  function addLegendLabel(e) {
  var title = document.createElement("div");
  title.innerHTML = "Silahkan klik";
  title.className = "legend-title";
  e.chart.legendDiv.appendChild(title)
}
jQuery(document).ready(function($){
  $(".btn-cetak").click(function(){
    $('#detail-kegiatan').printThis();
  });
});
</script>

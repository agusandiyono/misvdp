<?php


foreach ($berkembang_nasional as $key){
  $distance = array(
   $akhir1= $key->skor_dokter-$skor_dokter,
   $akhir2= $key->skor_bidan-$skor_bidan,
   $akhir3= $key->skor_nakes_lain-$skor_nakes_lain,
   $akhir4= $key->skor_waktu_tempuh-$skor_waktu_tempuh,
   $akhir5= $key->aktifitas_posyandu-$aktifitas_posyandu,
   $akhir6= $key->akses_poskesdes-$akses_poskesdes,
   $akhir7= $key->akses_posyandu-$akses_posyandu,
   $akhir8= $key->kepesertaan_bpjs-$kepesertaan_bpjs,
   $akhir9= ROUND($key->akses_sd-$akses_sd, 2),
   $akhir10= ROUND($key->akses_smp-$akses_smp, 2),
   $akhir11= $key->skor_sma_smk-$skor_sma_smk,
   $akhir12= $key->buta_aksara-$buta_aksara,
   $akhir13= $key->pkbm-$pkbm,
   $akhir14= $key->paud-$paud,
   $akhir15= $key->perpusy-$perpusy,
   $akhir16= $key->ketrampilan-$ketrampilan,
   $akhir17= $key->keragaman_etnis-$keragaman_etnis,
   $akhir18= $key->keragaman_komunikasi-$keragaman_komunikasi,
   $akhir19= $key->keragaman_agama-$keragaman_agama,
   $akhir20= $key->skor_goroyong-$skor_goroyong,
   $akhir21= $key->skor_ruangpub-$skor_ruangpub,
   $akhir22= $key->skor_fasor-$skor_fasor,
   $akhir23= $key->skor_keg_or-$skor_keg_or,
   $akhir24= ROUND($key->pmks-$pmks, 2),
   $akhir25= $key->akses_slb-$akses_slb,
   $akhir26= $key->poskamling-$poskamling,
   $akhir27= $key->siskamling-$siskamling,
   $akhir28= ROUND($key->konflik-$konflik, 2),
   $akhir29= ROUND($key->penyelesaian_konflik-$penyelesaian_konflik, 2),
   $akhir30= $key->akses_minum-$akses_minum,
   $akhir31= $key->akses_jamban-$akses_jamban,
   $akhir32= $key->persampahan-$persampahan,
   $akhir33= $key->akses_mandi_cuci-$akses_mandi_cuci,
   $akhir34= $key->akses_listrik-$akses_listrik,
   $akhir35= $key->akses_tv-$akses_tv,
   $akhir36= $key->akses_sinyal_seluler-$akses_sinyal_seluler,
   $akhir37= $key->akses_internet-$akses_internet,
   $akhir38= $key->skor_keragaman-$skor_keragaman,
   $akhir39= $key->skor_lemb_ek-$skor_lemb_ek,
   $akhir40= $key->skor_minimar-$skor_minimar,
   $akhir41= $key->skor_resto_hotel-$skor_resto_hotel,
   $akhir42= $key->skor_jarak_ptkoan-$skor_jarak_ptkoan,
   $akhir43= $key->skor_akses_pasar_semi-$skor_akses_pasar_semi,
   $akhir44= $key->skor_jalan-$skor_jalan,
   $akhir45= $key->skor_keterbukaan_fisik-$skor_keterbukaan_fisik,
   $akhir46= $key->skor_angk_umum-$skor_angk_umum,
   $akhir47= $key->skor_logistik-$skor_logistik,
   $akhir48= $key->skor_kredit-$skor_kredit,
   $akhir49= $key->skor_bank-$skor_bank,
   $akhir50= $key->skor_kualitas_lingkungan-$skor_kualitas_lingkungan,
   $akhir51= $key->skor_bencana_alam-$skor_bencana_alam,
   $akhir52= $key->skor_tanggap_bencana-$skor_tanggap_bencana,

 );
}
    ?>
    <div class="content-wrapper">
<!-- Content Header (Page header) -->
<section class="content-header">
  <div id="content-header">
    <ol class="breadcrumb">
          <li><a href="<?php echo base_url() ?>"><i class="fa fa-dashboard"></i> Home</a></li>
          <li><a href="<?php echo base_url() ?>idm">Data IDM</a></li>
          <li><a href="<?php echo base_url() ?>idm/read/<?php echo $id?>">Data Desa <?php echo $desa; ?></a></li>
          <li class="active">Status indikator centroid cluster Nasional</li>
      </ol>
  </div>
  <p>
  <button class="btn btn-blue btn-icon icon-left btn-cetak">
    <i class="entypo-print"></i>
    Cetak Data
  </button>
  <button onclick="tableToExcel('testTable', 'GAP Berkembang Nasional')" class="btn btn-green btn-icon icon-left">
    <i class="entypo-book"></i>
    Export Excel
  </button>
</p>
<div id="detail-gap">
<div class="row">
      <div class="col-sm-8">
        <div class="box box-primary">
          <div class="box-header with-border">
            <h3 class="box-title">Grafik Status Indikator Desa <?php echo $desa; ?> serta status indikator centroid cluster Nasional</h3>

          </div><!-- /.box-header -->
          <div class="box-body">
            <div id="chartdiv2"></div>
          </div><!-- /.box-body -->
        </div><!-- /.box -->
      </div><!-- /.col -->
      <div class="col-sm-4">
        <div class="box box-primary">
          <div class="box-header with-border">
            <h3 class="box-title">Grafik Status Indikator Desa <?php echo $desa; ?> serta status indikator centroid cluster Nasional</h3>

          </div><!-- /.box-header -->
          <div class="box-body">
            <?php
              arsort($distance);
              $no=1;
              foreach($distance as $x => $x_value) {
                  echo "<h4>". $no . ".". idmIndikator('i'.($x+1))." = ". $x_value ."</h4>";
                  $no++;
                  if($no==11)
                    break;
                }
               ?>
          </div><!-- /.box-body -->
        </div><!-- /.box -->
      </div><!-- /.col -->
    </div><!-- /.row -->

    <b>

    </b>
    <div class="row">
      <div class="col-sm-12">
        <div class="box box-primary">
          <div class="box-header with-border">
            <h3 class="box-title">Grafik Status Indikator Desa <?php echo $desa; ?> serta status indikator centroid cluster Provinsi <?php echo $provinsi; ?></h3>

          </div><!-- /.box-header -->
          <div class="box-body">
            GAP Analisis merupakan teknik yang digunakan untuk mengetahui kesenjangan antara kondisi aktual di suatu desa dengan kondisi rata-rata status perdesaan yang diinginkan dalam suatu provinsi. Balok Biru menunjukkan kondisi aktual dari desa <b><?php echo $desa; ?></b>. Garis Merah menunjukkan kondisi rata-rata desa yang berstatus desa Berkembang Nasional.
            Untuk menjadi Desa Berkembang Nasional dengan mengikuti urutan Program Prioritas yang ada di tabel <b>PROGRAM PRIORITAS PEMBANGUNAN DESA</b> di bawah.<br >

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
            <table id="testTable" class="table table-bordered data-table">
              <tr><th>NO</th><th>INDIKATOR</th><th>GAP/Kesenjangan</th></tr>
              <?php
              $no=1;
              foreach($distance as $x => $x_value) {
                  if($no<=10){
                      echo "<tr><td style='background-color:yellow;'>". $no . ". </td><td style='background-color:yellow;'>". idmIndikator('i'.($x+1))." </td><td style='background-color:yellow;'>". $x_value ."</td></tr>";
                  }else {
                    echo "<tr ><td>". $no . ". </td><td>". idmIndikator('i'.($x+1))." </td><td>". $x_value ."</td></tr>";
                  }
                  $no++;
                }
               ?>
               </table>
			   </div>
               <a href="<?php echo base_url('sisperdes/read/'.$id) ?>" class="btn btn-lg btn-red pull-right"><i class="entypo-back"></i> Kembali</a>

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
    "creditsPosition": "bottom-right",
    "balloon": {
	    "adjustBorderColor": false,
	    "horizontalPadding": 10,
	    "verticalPadding": 8,
	    "color": "#ffffff"
	  },
    // "legend": {
    //     "horizontalGap": 10,
    //     "maxColumns": 1,
    //     "position": "right",
    //     "useGraphSettings": true,
    //     "markerSize": 10,
    //     "marginTop": 20
    // },
    "dataProvider": [{
        "judul": "Skor Dokter",
        "indikator": "<?php echo $skor_dokter; ?>",
        "berkembang": "<?php echo nasionalBerkembang('skor_dokter'); ?>",
        // "maju": "<?php echo idmMaju($kodeprov,'skor_dokter'); ?>",
        // "mandiri": "<?php echo nasionalMandiri('skor_dokter'); ?>",
      },
      {
          "judul": "Skor Bidan",
          "indikator": "<?php echo $skor_bidan; ?>",
          "berkembang": "<?php echo nasionalBerkembang('skor_bidan'); ?>",
          // "maju": "<?php echo idmMaju($kodeprov,'skor_bidan'); ?>",
          // "mandiri": "<?php echo nasionalMandiri('skor_bidan'); ?>",
      },
      {
          "judul": "Skor Tenaga Kesehatan Lain",
          "indikator": "<?php echo $skor_nakes_lain; ?>",
          "berkembang": "<?php echo nasionalBerkembang('skor_nakes_lain'); ?>",
          // "maju": "<?php echo idmMaju($kodeprov,'skor_nakes_lain'); ?>",
          // "mandiri": "<?php echo nasionalMandiri('skor_nakes_lain'); ?>",
      },
      {
          "judul": "Skor Waktu Tempuh",
          "indikator": "<?php echo $skor_waktu_tempuh; ?>",
          // "berkembang": "<?php echo nasionalBerkembang('skor_waktu_tempuh'); ?>",
          // "maju": "<?php echo idmMaju($kodeprov,'skor_waktu_tempuh'); ?>",
          // "mandiri": "<?php echo nasionalMandiri('skor_waktu_tempuh'); ?>",
      },
      {
          "judul": "Aktifitas Posyandu",
          "indikator": "<?php echo $aktifitas_posyandu; ?>",
          "berkembang": "<?php echo nasionalBerkembang('aktifitas_posyandu'); ?>",
          // "maju": "<?php echo idmMaju($kodeprov,'aktifitas_posyandu'); ?>",
          // "mandiri": "<?php echo nasionalMandiri('aktifitas_posyandu'); ?>",
      },
      {
          "judul": "Akses Poskesdes",
          "indikator": "<?php echo $akses_poskesdes; ?>",
          "berkembang": "<?php echo nasionalBerkembang('akses_poskesdes'); ?>",
          // "maju": "<?php echo idmMaju($kodeprov,'akses_poskesdes'); ?>",
          // "mandiri": "<?php echo nasionalMandiri('akses_poskesdes'); ?>",
      },
      {
          "judul": "Akses Posyandu",
          "indikator": "<?php echo $akses_posyandu; ?>",
          "berkembang": "<?php echo nasionalBerkembang('akses_posyandu'); ?>",
          // "maju": "<?php echo idmMaju($kodeprov,'skor_dokter'); ?>",
          // "mandiri": "<?php echo nasionalMandiri('skor_dokter'); ?>",
      },
      {
          "judul": "Kepesertaan BPJS",
          "indikator": "<?php echo $kepesertaan_bpjs; ?>",
          "berkembang": "<?php echo nasionalBerkembang('kepesertaan_bpjs'); ?>",
          // "maju": "<?php echo idmMaju($kodeprov,'kepesertaan_bpjs'); ?>",
          // "mandiri": "<?php echo nasionalMandiri('kepesertaan_bpjs'); ?>",
      },
      {
          "judul": "Akses SD",
          "indikator": "<?php echo $akses_sd; ?>",
          "berkembang": "<?php echo nasionalBerkembang('akses_sd'); ?>",
          // "maju": "<?php echo idmMaju($kodeprov,'akses_sd'); ?>",
          // "mandiri": "<?php echo nasionalMandiri('akses_sd'); ?>",
      },
      {
          "judul": "Akses SMP",
          "indikator": "<?php echo $akses_smp; ?>",
          "berkembang": "<?php echo nasionalBerkembang('akses_smp'); ?>",
          // "maju": "<?php echo idmMaju($kodeprov,'akses_smp'); ?>",
          // "mandiri": "<?php echo nasionalMandiri('akses_smp'); ?>",
      },
      {
          "judul": "Akses SMA",
          "indikator": "<?php echo $skor_sma_smk; ?>",
          "berkembang": "<?php echo nasionalBerkembang('skor_sma_smk'); ?>",
          // "maju": "<?php echo idmMaju($kodeprov,'skor_sma_smk'); ?>",
          // "mandiri": "<?php echo nasionalMandiri('skor_sma_smk'); ?>",
      },
      // lanjutan
      {
          "judul": "Buta Aksara",
          "indikator": "<?php echo $buta_aksara; ?>",
          "berkembang": "<?php echo nasionalBerkembang('buta_aksara'); ?>",
          // "maju": "<?php echo idmMaju($kodeprov,'buta_aksara'); ?>",
          // "mandiri": "<?php echo nasionalMandiri('buta_aksara'); ?>",
      },
      {
          "judul": "PKBM",
          "indikator": "<?php echo $pkbm; ?>",
          "berkembang": "<?php echo nasionalBerkembang('pkbm'); ?>",
          // "maju": "<?php echo idmMaju($kodeprov,'pkbm'); ?>",
          // "mandiri": "<?php echo nasionalMandiri('pkbm'); ?>",
      },
      {
          "judul": "PAUD",
          "indikator": "<?php echo $paud; ?>",
          "berkembang": "<?php echo nasionalBerkembang('paud'); ?>",
          // "maju": "<?php echo idmMaju($kodeprov,'paud'); ?>",
          // "mandiri": "<?php echo nasionalMandiri('paud'); ?>",
      },
      {
          "judul": "Perpustakaan Desa",
          "indikator": "<?php echo $perpusy; ?>",
          "berkembang": "<?php echo nasionalBerkembang('perpusy'); ?>",
          // "maju": "<?php echo idmMaju($kodeprov,'perpusy'); ?>",
          // "mandiri": "<?php echo nasionalMandiri('perpusy'); ?>",
      },
      {
          "judul": "Ketrampilan",
          "indikator": "<?php echo $ketrampilan; ?>",
          "berkembang": "<?php echo nasionalBerkembang('ketrampilan'); ?>",
          // "maju": "<?php echo idmMaju($kodeprov,'ketrampilan'); ?>",
          // "mandiri": "<?php echo nasionalMandiri('ketrampilan'); ?>",
      },
      {
          "judul": "Keragaman Etnis",
          "indikator": "<?php echo $keragaman_etnis; ?>",
          "berkembang": "<?php echo nasionalBerkembang('keragaman_etnis'); ?>",
          // "maju": "<?php echo idmMaju($kodeprov,'keragaman_etnis'); ?>",
          // "mandiri": "<?php echo nasionalMandiri('keragaman_etnis'); ?>",
      },
      {
          "judul": "Keragaman Komunikasi",
          "indikator": "<?php echo $keragaman_komunikasi; ?>",
          "berkembang": "<?php echo nasionalBerkembang('keragaman_komunikasi'); ?>",
          // "maju": "<?php echo idmMaju($kodeprov,'keragaman_komunikasi'); ?>",
          // "mandiri": "<?php echo nasionalMandiri('keragaman_komunikasi'); ?>",
      },
      {
          "judul": "Keragaman Agama",
          "indikator": "<?php echo $keragaman_agama; ?>",
          "berkembang": "<?php echo nasionalBerkembang('keragaman_agama'); ?>",
          // "maju": "<?php echo idmMaju($kodeprov,'keragaman_agama'); ?>",
          // "mandiri": "<?php echo nasionalMandiri('keragaman_agama'); ?>",
      },
      {
          "judul": "Gotong Royong",
          "indikator": "<?php echo $skor_goroyong; ?>",
          "berkembang": "<?php echo nasionalBerkembang('skor_goroyong'); ?>",
          // "maju": "<?php echo idmMaju($kodeprov,'skor_goroyong'); ?>",
          // "mandiri": "<?php echo nasionalMandiri('skor_goroyong'); ?>",
      },
      {
          "judul": "Ruang Publik",
          "indikator": "<?php echo $skor_ruangpub; ?>",
          "berkembang": "<?php echo nasionalBerkembang('skor_ruangpub'); ?>",
          // "maju": "<?php echo idmMaju($kodeprov,'skor_ruangpub'); ?>",
          // "mandiri": "<?php echo nasionalMandiri('skor_ruangpub'); ?>",
      },
      {
          "judul": "Fasilitas Olahraga",
          "indikator": "<?php echo $skor_fasor; ?>",
          "berkembang": "<?php echo nasionalBerkembang('skor_fasor'); ?>",
          // "maju": "<?php echo idmMaju($kodeprov,'skor_fasor'); ?>",
          // "mandiri": "<?php echo nasionalMandiri('skor_fasor'); ?>",
      },
      {
          "judul": "Akses Kegiatan Olahraga",
          "indikator": "<?php echo $skor_keg_or; ?>",
          "berkembang": "<?php echo nasionalBerkembang('skor_keg_or'); ?>",
          // "maju": "<?php echo idmMaju($kodeprov,'skor_keg_or'); ?>",
          // "mandiri": "<?php echo nasionalMandiri('skor_keg_or'); ?>",
      },
      {
          "judul": "PMKS",
          "indikator": "<?php echo $pmks; ?>",
          "berkembang": "<?php echo nasionalBerkembang('pmks'); ?>",
          // "maju": "<?php echo idmMaju($kodeprov,'pmks'); ?>",
          // "mandiri": "<?php echo nasionalMandiri('pmks'); ?>",
      },
      {
          "judul": "Akses SLB",
          "indikator": "<?php echo $akses_slb; ?>",
          "berkembang": "<?php echo nasionalBerkembang('akses_slb'); ?>",
          // "maju": "<?php echo idmMaju($kodeprov,'akses_slb'); ?>",
          // "mandiri": "<?php echo nasionalMandiri('akses_slb'); ?>",
      },
      {
          "judul": "Poskamling",
          "indikator": "<?php echo $poskamling; ?>",
          "berkembang": "<?php echo nasionalBerkembang('poskamling'); ?>",
          // "maju": "<?php echo idmMaju($kodeprov,'poskamling'); ?>",
          // "mandiri": "<?php echo nasionalMandiri('poskamling'); ?>",
      },
      {
          "judul": "Siskamling",
          "indikator": "<?php echo $siskamling; ?>",
          "berkembang": "<?php echo nasionalBerkembang('siskamling'); ?>",
          // "maju": "<?php echo idmMaju($kodeprov,'siskamling'); ?>",
          // "mandiri": "<?php echo nasionalMandiri('siskamling'); ?>",
      },
      {
          "judul": "Konflik",
          "indikator": "<?php echo $konflik; ?>",
          "berkembang": "<?php echo nasionalBerkembang('konflik'); ?>",
          // "maju": "<?php echo idmMaju($kodeprov,'konflik'); ?>",
          // "mandiri": "<?php echo nasionalMandiri('konflik'); ?>",
      },
      {
          "judul": "Penyelesaian Konflik",
          "indikator": "<?php echo $penyelesaian_konflik; ?>",
          "berkembang": "<?php echo nasionalBerkembang('penyelesaian_konflik'); ?>",
          // "maju": "<?php echo idmMaju($kodeprov,'penyelesaian_konflik'); ?>",
          // "mandiri": "<?php echo nasionalMandiri('penyelesaian_konflik'); ?>",
      },
      {
          "judul": "Akses Minum",
          "indikator": "<?php echo $akses_minum; ?>",
          "berkembang": "<?php echo nasionalBerkembang('akses_minum'); ?>",
          // "maju": "<?php echo idmMaju($kodeprov,'akses_minum'); ?>",
          // "mandiri": "<?php echo nasionalMandiri('akses_minum'); ?>",
      },
      {
          "judul": "Akses Jamban",
          "indikator": "<?php echo $akses_jamban; ?>",
          "berkembang": "<?php echo nasionalBerkembang('akses_jamban'); ?>",
          // "maju": "<?php echo idmMaju($kodeprov,'akses_jamban'); ?>",
          // "mandiri": "<?php echo nasionalMandiri('akses_jamban'); ?>",
      },
      {
          "judul": "Persampahan",
          "indikator": "<?php echo $persampahan; ?>",
          "berkembang": "<?php echo nasionalBerkembang('persampahan'); ?>",
          // "maju": "<?php echo idmMaju($kodeprov,'persampahan'); ?>",
          // "mandiri": "<?php echo nasionalMandiri('persampahan'); ?>",
      },
      {
          "judul": "Akses Mandi Cuci",
          "indikator": "<?php echo $akses_mandi_cuci; ?>",
          "berkembang": "<?php echo nasionalBerkembang('akses_mandi_cuci'); ?>",
          // "maju": "<?php echo idmMaju($kodeprov,'akses_mandi_cuci'); ?>",
          // "mandiri": "<?php echo nasionalMandiri('akses_mandi_cuci'); ?>",
      },
      {
          "judul": "Akses Listrik",
          "indikator": "<?php echo $akses_listrik; ?>",
          "berkembang": "<?php echo nasionalBerkembang('akses_listrik'); ?>",
          // "maju": "<?php echo idmMaju($kodeprov,'akses_listrik'); ?>",
          // "mandiri": "<?php echo nasionalMandiri('akses_listrik'); ?>",
      },
      {
          "judul": "Akses TV",
          "indikator": "<?php echo $akses_tv; ?>",
          "berkembang": "<?php echo nasionalBerkembang('akses_tv'); ?>",
          // "maju": "<?php echo idmMaju($kodeprov,'akses_tv'); ?>",
          // "mandiri": "<?php echo nasionalMandiri('akses_tv'); ?>",
      },
      {
          "judul": "Akses Sinyal Selular",
          "indikator": "<?php echo $akses_sinyal_seluler; ?>",
          "berkembang": "<?php echo nasionalBerkembang('akses_sinyal_seluler'); ?>",
          // "maju": "<?php echo idmMaju($kodeprov,'akses_sinyal_seluler'); ?>",
          // "mandiri": "<?php echo nasionalMandiri('akses_sinyal_seluler'); ?>",
      },
      {
          "judul": "Akses Internet",
          "indikator": "<?php echo $akses_internet; ?>",
          "berkembang": "<?php echo nasionalBerkembang('akses_internet'); ?>",
          // "maju": "<?php echo idmMaju($kodeprov,'akses_internet'); ?>",
          // "mandiri": "<?php echo nasionalMandiri('akses_internet'); ?>",
      },
      {
          "judul": "Skor Keragaman",
          "indikator": "<?php echo $skor_keragaman; ?>",
          "berkembang": "<?php echo nasionalBerkembang('skor_keragaman'); ?>",
          // "maju": "<?php echo idmMaju($kodeprov,'skor_keragaman'); ?>",
          // "mandiri": "<?php echo nasionalMandiri('skor_keragaman'); ?>",
      },
      {
          "judul": "Skor Lembaga Ekonomi",
          "indikator": "<?php echo $skor_lemb_ek; ?>",
          "berkembang": "<?php echo nasionalBerkembang('skor_lemb_ek'); ?>",
          // "maju": "<?php echo idmMaju($kodeprov,'skor_lemb_ek'); ?>",
          // "mandiri": "<?php echo nasionalMandiri('skor_lemb_ek'); ?>",
      },
      {
          "judul": "Skor Minimarket",
          "indikator": "<?php echo $skor_minimar; ?>",
          "berkembang": "<?php echo nasionalBerkembang('skor_minimar'); ?>",
          // "maju": "<?php echo idmMaju($kodeprov,'skor_minimar'); ?>",
          // "mandiri": "<?php echo nasionalMandiri('skor_minimar'); ?>",
      },
      {
          "judul": "Skor Restoran dan Hotel",
          "indikator": "<?php echo $skor_resto_hotel; ?>",
          "berkembang": "<?php echo nasionalBerkembang('skor_resto_hotel'); ?>",
          // "maju": "<?php echo idmMaju($kodeprov,'skor_resto_hotel'); ?>",
          // "mandiri": "<?php echo nasionalMandiri('skor_resto_hotel'); ?>",
      },

      {
          "judul": "Skor Jarak Pertokoan",
          "indikator": "<?php echo $skor_jarak_ptkoan; ?>",
          "berkembang": "<?php echo nasionalBerkembang('skor_jarak_ptkoan'); ?>",
          // "maju": "<?php echo idmMaju($kodeprov,'skor_jarak_ptkoan'); ?>",
          // "mandiri": "<?php echo nasionalMandiri('skor_jarak_ptkoan'); ?>",
      },
      {
          "judul": "Skor Akses Pasar Semi",
          "indikator": "<?php echo $skor_akses_pasar_semi; ?>",
          "berkembang": "<?php echo nasionalBerkembang('skor_akses_pasar_semi'); ?>",
          // "maju": "<?php echo idmMaju($kodeprov,'skor_akses_pasar_semi'); ?>",
          // "mandiri": "<?php echo nasionalMandiri('skor_akses_pasar_semi'); ?>",
      },
      {
          "judul": "Skor Jalan",
          "indikator": "<?php echo $skor_jalan; ?>",
          "berkembang": "<?php echo nasionalBerkembang('skor_jalan'); ?>",
          // "maju": "<?php echo idmMaju($kodeprov,'skor_jalan'); ?>",
          // "mandiri": "<?php echo nasionalMandiri('skor_jalan'); ?>",
      },
      {
          "judul": "Skor Keterbukaan Fisik",
          "indikator": "<?php echo $skor_keterbukaan_fisik; ?>",
          "berkembang": "<?php echo nasionalBerkembang('skor_keterbukaan_fisik'); ?>",
          // "maju": "<?php echo idmMaju($kodeprov,'skor_keterbukaan_fisik'); ?>",
          // "mandiri": "<?php echo nasionalMandiri('skor_keterbukaan_fisik'); ?>",
      },
      {
          "judul": "Skor Angkutan Umum",
          "indikator": "<?php echo $skor_angk_umum; ?>",
          "berkembang": "<?php echo nasionalBerkembang('skor_angk_umum'); ?>",
          // "maju": "<?php echo idmMaju($kodeprov,'skor_angk_umum'); ?>",
          // "mandiri": "<?php echo nasionalMandiri('skor_angk_umum'); ?>",
      },
      {
          "judul": "Skor Logistik",
          "indikator": "<?php echo $skor_logistik; ?>",
          "berkembang": "<?php echo nasionalBerkembang('skor_logistik'); ?>",
          // "maju": "<?php echo idmMaju($kodeprov,'skor_logistik'); ?>",
          // "mandiri": "<?php echo nasionalMandiri('skor_logistik'); ?>",
      },

      {
          "judul": "Skor Kredit",
          "indikator": "<?php echo $skor_kredit; ?>",
          "berkembang": "<?php echo nasionalBerkembang('skor_kredit'); ?>",
          // "maju": "<?php echo idmMaju($kodeprov,'skor_kredit'); ?>",
          // "mandiri": "<?php echo nasionalMandiri('skor_kredit'); ?>",
      },
      {
          "judul": "Skor Bank",
          "indikator": "<?php echo $skor_bank; ?>",
          "berkembang": "<?php echo nasionalBerkembang('skor_bank'); ?>",
          // "maju": "<?php echo idmMaju($kodeprov,'skor_bank'); ?>",
          // "mandiri": "<?php echo nasionalMandiri('skor_bank'); ?>",
      },
      {
          "judul": "Skor Kualitas Lingkungan",
          "indikator": "<?php echo $skor_kualitas_lingkungan; ?>",
          "berkembang": "<?php echo nasionalBerkembang('skor_kualitas_lingkungan'); ?>",
          // "maju": "<?php echo idmMaju($kodeprov,'skor_kualitas_lingkungan'); ?>",
          // "mandiri": "<?php echo nasionalMandiri('skor_kualitas_lingkungan'); ?>",
      },
      {
          "judul": "Skor Bencana Alam",
          "indikator": "<?php echo $skor_bencana_alam; ?>",
          "berkembang": "<?php echo nasionalBerkembang('skor_bencana_alam'); ?>",
          // "maju": "<?php echo idmMaju($kodeprov,'skor_bencana_alam'); ?>",
          // "mandiri": "<?php echo nasionalMandiri('skor_bencana_alam'); ?>",
      },
      {
          "judul": "Skor Tanggap Bencana",
          "indikator": "<?php echo $skor_tanggap_bencana; ?>",
          "berkembang": "<?php echo nasionalBerkembang('skor_tanggap_bencana'); ?>",
          // "maju": "<?php echo idmMaju($kodeprov,'skor_tanggap_bencana'); ?>",
          // "mandiri": "<?php echo nasionalMandiri('skor_tanggap_bencana'); ?>",
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
        "balloonText": "<span style='font-size:12px;'>[[category]] :<br><span style='font-size:20px;'>[[value]]</span> [[additional]]</span>",
        "fillAlphas": 1,
        "title": "Indikator",
        "type": "column",
        "valueField": "indikator",
        "dashLengthField": "dashLengthColumn"
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
        "title": "Berkembang",
        "valueField": "berkembang",
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
      $('#detail-gap').printThis();
    });
  });
</script>

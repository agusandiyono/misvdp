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
      <td colspan="2"><h3>Grafik Indeks Desa Membangun (IDM)</h3></td>
    </tr>
    <tr>
      <td><div id="chartdiv" style="height:600px;"></div></td>
    </tr>
  </tbody>

</table>
<table class="table table-bordered datatable">
  <tbody>
    <tr>
      <td colspan="2"><h3 class="box-title">Status Desa <?php echo $desa; ?> saat ini adalah <b><?php echo $status; ?></b> Tingkatkan Menjadi :</h3></td>
    </tr>
    <tr>
      <td><?php echo anchor(site_url('idm/gap_maju/'.$id), 'Maju',array('class'=>'btn btn-success btn-sm'));?>
        <?php echo anchor(site_url('idm/gap_berkembang/'.$id), 'Berkembang',array('class'=>'btn btn-primary btn-sm'));?>
        <?php echo anchor(site_url('idm/gap_mandiri/'.$id), 'Mandiri',array('class'=>'btn btn-danger btn-sm'));?></td>
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
      <td>Skor Waktu Tempuh</td>
      <td><?php echo $skor_waktu_tempuh ?></td>
    </tr>
    <tr>
      <td>Skor Bidan</td>
      <td><?php echo $skor_bidan ?></td>
    </tr>
    <tr>
      <td>Skor Dokter</td>
      <td><?php echo $skor_dokter ?></td>
    </tr>
    <tr>
      <td>Skor Tenaga Kesehatan Lain</td>
      <td><?php echo $skor_nakes_lain ?></td>
    </tr>
    <tr>
      <td>Aktifitas Posyandu</td>
      <td><?php echo $aktifitas_posyandu ?></td>
    </tr>
    <tr>
      <td>Skor akses terhadap Poskesdes</td>
      <td><?php echo $akses_poskesdes ?></td>
    </tr>
    <tr>
      <td>Skor Aktivitas Posyandu</td>
      <td><?php echo $akses_posyandu ?></td>
    </tr>
    <tr>
      <td>Skor tingkat kepesertaan BPJS</td>
      <td><?php echo $kepesertaan_bpjs ?></td>
    </tr>
    <tr>
      <td>Skor akses terhadap SD/MI</td>
      <td><?php echo $akses_sd ?></td>
    </tr>
    <tr>
      <td>Skor akses terhadap SMP/MTs</td>
      <td><?php echo $akses_smp ?></td>
    </tr>
    <tr>
      <td>Skor akses terhadap SMA/SMK</td>
      <td><?php echo $skor_sma_smk ?></td>
    </tr>
    <tr>
      <td>Buta Aksara</td>
      <td><?php echo $buta_aksara ?></td>
    </tr>
    <tr>
      <td>Skor ketersediaan PKBM/Paket ABC</td>
      <td><?php echo $pkbm ?></td>
    </tr>
    <tr>
      <td>Skor ketersediaan PAUD</td>
      <td><?php echo $paud ?></td>
    </tr>
    <tr>
      <td>Skor ketersediaan taman bacaan masyarakat/perpustakaan Desa</td>
      <td><?php echo $perpusy ?></td>
    </tr>
    <tr>
      <td>Skor akses terhadap pusat ketrampilan/kursus</td>
      <td><?php echo $ketrampilan ?></td>
    </tr>
    <tr>
      <td>Skor keberagaman suku atau etnis</td>
      <td><?php echo $keragaman_etnis ?></td>
    </tr>
    <tr>
      <td>Skor keberagaman bahasa/komunikasi sehari-hari</td>
      <td><?php echo $keragaman_komunikasi ?></td>
    </tr>
    <tr>
      <td>Skor keberagaman agama</td>
      <td><?php echo $keragaman_agama ?></td>
    </tr>
    <tr>
      <td>Skor gotong royong</td>
      <td><?php echo $skor_goroyong ?></td>
    </tr>
    <tr>
      <td>Skor keberadaan ruang terbuka publik</td>
      <td><?php echo $skor_ruangpub ?></td>
    </tr>
    <tr>
      <td>Skor ketersediaan Fasilitas olahraga</td>
      <td><?php echo $skor_fasor ?></td>
    </tr>
    <tr>
      <td>Skor keberadaan kegiatan olahraga</td>
      <td><?php echo $skor_keg_or ?></td>
    </tr>
    <tr>
      <td>Skor PMKS</td>
      <td><?php echo $pmks ?></td>
    </tr>
    <tr>
      <td>Skor akses SLB</td>
      <td><?php echo $akses_slb ?></td>
    </tr>
    <tr>
      <td>Skor pos keamanan</td>
      <td><?php echo $poskamling ?></td>
    </tr>
    <tr>
      <td>Skor Partisipasi warga mengadakan siskamling</td>
      <td><?php echo $siskamling ?></td>
    </tr>
    <tr>
      <td>Skor Tingkat konflik yang terjadi di Desa</td>
      <td><?php echo $konflik ?></td>
    </tr>
    <tr>
      <td>Skor Upaya penyelesaian konflik yang terjadi di Desa</td>
      <td><?php echo $penyelesaian_konflik ?></td>
    </tr>
    <tr>
      <td><font color="red">Skor akses air minum</font></td>
      <td><?php echo $akses_minum ?></td>
    </tr>
    <tr>
      <td><font color="red">Skor akses jamban</font></td>
      <td><?php echo $akses_jamban ?></td>
    </tr>
    <tr>
      <td>Skor ketersediaan pembuangan sampah</td>
      <td><?php echo $persampahan ?></td>
    </tr>
    <tr>
      <td><font color="red">Skor ketersediaan air untuk mandi dan mencuci</font></td>
      <td><?php echo $akses_mandi_cuci ?></td>
    </tr>
    <tr>
      <td>Skor akses listrik</td>
      <td><?php echo $akses_listrik ?></td>
    </tr>
    <tr>
      <td>Skor akses TV</td>
      <td><?php echo $akses_tv ?></td>
    </tr>
    <tr>
      <td>Sko akses telepon selular</td>
      <td><?php echo $akses_sinyal_seluler ?></td>
    </tr>
    <tr>
      <td>Skor akses internet</td>
      <td><?php echo $akses_internet ?></td>
    </tr>
    <!-- IKE -->
    <tr>
      <td>Skor keragaman produksi</td>
      <td><?php echo $skor_keragaman ?></td>
    </tr>
    <tr>
      <td>Skor lembaga Ekonomi</td>
      <td><?php echo $skor_lemb_ek ?></td>
    </tr>
    <tr>
      <td>Skor ketersediaan minimarket</td>
      <td><?php echo $skor_minimar ?></td>
    </tr>
    <tr>
      <td>Skor ketersediaan Restoran & Hotel</td>
      <td><?php echo $skor_resto_hotel ?></td>
    </tr>
    <!-- <tr>
      <td>Skor ketersediaan Kedai makan</td>
      <td><?php echo $skor_kedai_makan ?></td>
    </tr>
    <tr>
      <td>Skor ketersediaan restoran</td>
      <td><?php echo $skor_restoran ?></td>
    </tr>
    <tr>
      <td>Skor ketersediaan hotel</td>
      <td><?php echo $skor_hotel ?></td>
    </tr>
    <tr>
      <td>Skor ketersediaan penginapan</td>
      <td><?php echo $skor_penginapan ?></td>
    </tr> -->
    <tr>
      <td>Skor jarak Pertokoan</td>
      <td><?php echo $skor_jarak_ptkoan ?></td>
    </tr>
    <tr>
      <td>Skor akses pasar semi</td>
      <td><?php echo $skor_akses_pasar_semi ?></td>
    </tr>
    <tr>
      <td>Skor kualitas jalan</td>
      <td><?php echo $skor_jalan ?></td>
    </tr>
    <tr>
      <td>Skor keterbukaan wilayah</td>
      <td><?php echo $skor_keterbukaan_fisik ?></td>
    </tr>
    <tr>
      <td>Skor angkutan umum</td>
      <td><?php echo ROUND($skor_angk_umum, 2) ?></td>
    </tr>
    <!-- <tr>
      <td>Skor moda transportasi umum(Transportasi Angkutan Umum, trayek reguler dan jam operasi Angkutan Umum)</td>
      <td><?php echo $skor_operasi_au ?></td>
    </tr>
    <tr>
      <td>Jalan yang dapat dilalui oleh kendaraan bermotor roda empat atau lebih (sepanjang tahun kecuali musim hujan, kecuali saat tertentu)</td>
      <td><?php echo $skor_jamoper ?></td>
    </tr> -->
    <tr>
      <td>Skor Jasa logistik</td>
      <td><?php echo $skor_logistik ?></td>
    </tr>
    <!-- <tr>
      <td>Skor Pos</td>
      <td><?php echo $skor_pos_keliling ?></td>
    </tr> -->
    <tr>
      <td>Skor Fasilitas kredit</td>
      <td><?php echo $skor_kredit ?></td>
    </tr>
    <!-- <tr>
      <td>Skor Bank & BPR</td>
      <td><?php echo $skor_bank ?></td>
    </tr> -->
    <!-- IKL -->
    <!-- <tr>
      <td>Skor pembuangan limbah ke sungai</td>
      <td><?php echo $pembuangan_limbah_ke_sungai ?></td>
    </tr>
    <tr>
      <td>Air</td>
      <td><?php echo $air ?></td>
    </tr>
    <tr>
      <td>Tanah</td>
      <td><?php echo $tanah ?></td>
    </tr>
    <tr>
      <td>Udara</td>
      <td><?php echo $udara ?></td>
    </tr>
    <tr>
      <td>Jumlah</td>
      <td><?php echo $jumlah ?></td>
    </tr>
    <tr>
      <td>Rasio Pencemaran</td>
      <td><?php echo $rasio_pencemaran ?></td>
    </tr>
    <tr>
      <td>Skor kualitas lingkungan</td>
      <td><?php echo $skor_kualitas_lingkungan ?></td>
    </tr>
    <tr>
      <td>Tanah Longsor</td>
      <td><?php echo $tanah_longsor ?></td>
    </tr>
    <tr>
      <td>Banjir</td>
      <td><?php echo $banjir ?></td>
    </tr>
    <tr>
      <td>Banjir Bandang</td>
      <td><?php echo $banjir_bandang ?></td>
    </tr>
    <tr>
      <td>Kebakaran hutan</td>
      <td><?php echo $kebakaran_hutan ?></td>
    </tr>
    <tr>
      <td>Rawan bencana</td>
      <td><?php echo $rawan_bencana ?></td>
    </tr>
    <tr>
      <td>Skor bencana alam</td>
      <td><?php echo $skor_bencana_alam ?></td>
    </tr>
    <tr>
      <td>Peringatan dini</td>
      <td><?php echo $peringatan_dini ?></td>
    </tr>
    <tr>
      <td>Peralatan keselamatan</td>
      <td><?php echo $peralatan_selamat ?></td>
    </tr>
    <tr>
      <td>Jalur evakuasi</td>
      <td><?php echo $jalur_evakuasi ?></td>
    </tr> -->
    <!-- <tr>
      <td>Jumlah kesiapan terhadap bencana</td>
      <td><?php echo $jml_kesiapan_tb ?></td>
    </tr> -->
    <tr>
      <td>Skor bencana alam</td>
      <td><?php echo $skor_bencana_alam ?></td>
    </tr>
    <tr>
      <td>Skor tanggap bencana</td>
      <td><?php echo $skor_tanggap_bencana ?></td>
    </tr>
  </tbody>

</table>
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
        "judul": "Skor Dokter",
        "indikator": "<?php echo $skor_dokter; ?>",
        "berkembang": "<?php echo idmBerkembang($kodeprov,'skor_dokter'); ?>",
        "maju": "<?php echo idmMaju($kodeprov,'skor_dokter'); ?>",
        "mandiri": "<?php echo idmMandiri($kodeprov,'skor_dokter'); ?>",
      },
      {
          "judul": "Skor Bidan",
          "indikator": "<?php echo $skor_bidan; ?>",
          "berkembang": "<?php echo idmBerkembang($kodeprov,'skor_bidan'); ?>",
          "maju": "<?php echo idmMaju($kodeprov,'skor_bidan'); ?>",
          "mandiri": "<?php echo idmMandiri($kodeprov,'skor_bidan'); ?>",
      },
      {
          "judul": "Skor Tenaga Kesehatan Lain",
          "indikator": "<?php echo $skor_nakes_lain; ?>",
          "berkembang": "<?php echo idmBerkembang($kodeprov,'skor_nakes_lain'); ?>",
          "maju": "<?php echo idmMaju($kodeprov,'skor_nakes_lain'); ?>",
          "mandiri": "<?php echo idmMandiri($kodeprov,'skor_nakes_lain'); ?>",
      },
      {
          "judul": "Skor Waktu Tempuh",
          "indikator": "<?php echo $skor_waktu_tempuh; ?>",
          "berkembang": "<?php echo idmBerkembang($kodeprov,'skor_waktu_tempuh'); ?>",
          "maju": "<?php echo idmMaju($kodeprov,'skor_waktu_tempuh'); ?>",
          "mandiri": "<?php echo idmMandiri($kodeprov,'skor_waktu_tempuh'); ?>",
      },
      {
          "judul": "Aktifitas Posyandu",
          "indikator": "<?php echo $aktifitas_posyandu; ?>",
          "berkembang": "<?php echo idmBerkembang($kodeprov,'aktifitas_posyandu'); ?>",
          "maju": "<?php echo idmMaju($kodeprov,'aktifitas_posyandu'); ?>",
          "mandiri": "<?php echo idmMandiri($kodeprov,'aktifitas_posyandu'); ?>",
      },
      {
          "judul": "Akses Poskesdes",
          "indikator": "<?php echo $akses_poskesdes; ?>",
          "berkembang": "<?php echo idmBerkembang($kodeprov,'akses_poskesdes'); ?>",
          "maju": "<?php echo idmMaju($kodeprov,'akses_poskesdes'); ?>",
          "mandiri": "<?php echo idmMandiri($kodeprov,'akses_poskesdes'); ?>",
      },
      {
          "judul": "Akses Posyandu",
          "indikator": "<?php echo $akses_posyandu; ?>",
          "berkembang": "<?php echo idmBerkembang($kodeprov,'akses_posyandu'); ?>",
          "maju": "<?php echo idmMaju($kodeprov,'skor_dokter'); ?>",
          "mandiri": "<?php echo idmMandiri($kodeprov,'skor_dokter'); ?>",
      },
      {
          "judul": "Kepesertaan BPJS",
          "indikator": "<?php echo $kepesertaan_bpjs; ?>",
          "berkembang": "<?php echo idmBerkembang($kodeprov,'kepesertaan_bpjs'); ?>",
          "maju": "<?php echo idmMaju($kodeprov,'kepesertaan_bpjs'); ?>",
          "mandiri": "<?php echo idmMandiri($kodeprov,'kepesertaan_bpjs'); ?>",
      },
      {
          "judul": "Akses SD",
          "indikator": "<?php echo $akses_sd; ?>",
          "berkembang": "<?php echo idmBerkembang($kodeprov,'akses_sd'); ?>",
          "maju": "<?php echo idmMaju($kodeprov,'akses_sd'); ?>",
          "mandiri": "<?php echo idmMandiri($kodeprov,'akses_sd'); ?>",
      },
      {
          "judul": "Akses SMP",
          "indikator": "<?php echo $akses_smp; ?>",
          "berkembang": "<?php echo idmBerkembang($kodeprov,'akses_smp'); ?>",
          "maju": "<?php echo idmMaju($kodeprov,'akses_smp'); ?>",
          "mandiri": "<?php echo idmMandiri($kodeprov,'akses_smp'); ?>",
      },
      {
          "judul": "Akses SMA",
          "indikator": "<?php echo $skor_sma_smk; ?>",
          "berkembang": "<?php echo idmBerkembang($kodeprov,'skor_sma_smk'); ?>",
          "maju": "<?php echo idmMaju($kodeprov,'skor_sma_smk'); ?>",
          "mandiri": "<?php echo idmMandiri($kodeprov,'skor_sma_smk'); ?>",
      },
      // lanjutan
      {
          "judul": "Buta Aksara",
          "indikator": "<?php echo $buta_aksara; ?>",
          "berkembang": "<?php echo idmBerkembang($kodeprov,'buta_aksara'); ?>",
          "maju": "<?php echo idmMaju($kodeprov,'buta_aksara'); ?>",
          "mandiri": "<?php echo idmMandiri($kodeprov,'buta_aksara'); ?>",
      },
      {
          "judul": "PKBM",
          "indikator": "<?php echo $pkbm; ?>",
          "berkembang": "<?php echo idmBerkembang($kodeprov,'pkbm'); ?>",
          "maju": "<?php echo idmMaju($kodeprov,'pkbm'); ?>",
          "mandiri": "<?php echo idmMandiri($kodeprov,'pkbm'); ?>",
      },
      {
          "judul": "PAUD",
          "indikator": "<?php echo $paud; ?>",
          "berkembang": "<?php echo idmBerkembang($kodeprov,'paud'); ?>",
          "maju": "<?php echo idmMaju($kodeprov,'paud'); ?>",
          "mandiri": "<?php echo idmMandiri($kodeprov,'paud'); ?>",
      },
      {
          "judul": "Perpustakaan Desa",
          "indikator": "<?php echo $perpusy; ?>",
          "berkembang": "<?php echo idmBerkembang($kodeprov,'perpusy'); ?>",
          "maju": "<?php echo idmMaju($kodeprov,'perpusy'); ?>",
          "mandiri": "<?php echo idmMandiri($kodeprov,'perpusy'); ?>",
      },
      {
          "judul": "Ketrampilan",
          "indikator": "<?php echo $ketrampilan; ?>",
          "berkembang": "<?php echo idmBerkembang($kodeprov,'ketrampilan'); ?>",
          "maju": "<?php echo idmMaju($kodeprov,'ketrampilan'); ?>",
          "mandiri": "<?php echo idmMandiri($kodeprov,'ketrampilan'); ?>",
      },
      {
          "judul": "Keragaman Etnis",
          "indikator": "<?php echo $keragaman_etnis; ?>",
          "berkembang": "<?php echo idmBerkembang($kodeprov,'keragaman_etnis'); ?>",
          "maju": "<?php echo idmMaju($kodeprov,'keragaman_etnis'); ?>",
          "mandiri": "<?php echo idmMandiri($kodeprov,'keragaman_etnis'); ?>",
      },
      {
          "judul": "Keragaman Komunikasi",
          "indikator": "<?php echo $keragaman_komunikasi; ?>",
          "berkembang": "<?php echo idmBerkembang($kodeprov,'keragaman_komunikasi'); ?>",
          "maju": "<?php echo idmMaju($kodeprov,'keragaman_komunikasi'); ?>",
          "mandiri": "<?php echo idmMandiri($kodeprov,'keragaman_komunikasi'); ?>",
      },
      {
          "judul": "Keragaman Agama",
          "indikator": "<?php echo $keragaman_agama; ?>",
          "berkembang": "<?php echo idmBerkembang($kodeprov,'keragaman_agama'); ?>",
          "maju": "<?php echo idmMaju($kodeprov,'keragaman_agama'); ?>",
          "mandiri": "<?php echo idmMandiri($kodeprov,'keragaman_agama'); ?>",
      },
      {
          "judul": "Gotong Royong",
          "indikator": "<?php echo $skor_goroyong; ?>",
          "berkembang": "<?php echo idmBerkembang($kodeprov,'skor_goroyong'); ?>",
          "maju": "<?php echo idmMaju($kodeprov,'skor_goroyong'); ?>",
          "mandiri": "<?php echo idmMandiri($kodeprov,'skor_goroyong'); ?>",
      },
      {
          "judul": "Ruang Publik",
          "indikator": "<?php echo $skor_ruangpub; ?>",
          "berkembang": "<?php echo idmBerkembang($kodeprov,'skor_ruangpub'); ?>",
          "maju": "<?php echo idmMaju($kodeprov,'skor_ruangpub'); ?>",
          "mandiri": "<?php echo idmMandiri($kodeprov,'skor_ruangpub'); ?>",
      },
      {
          "judul": "Fasilitas Olahraga",
          "indikator": "<?php echo $skor_fasor; ?>",
          "berkembang": "<?php echo idmBerkembang($kodeprov,'skor_fasor'); ?>",
          "maju": "<?php echo idmMaju($kodeprov,'skor_fasor'); ?>",
          "mandiri": "<?php echo idmMandiri($kodeprov,'skor_fasor'); ?>",
      },
      {
          "judul": "Akses Kegiatan Olahraga",
          "indikator": "<?php echo $skor_keg_or; ?>",
          "berkembang": "<?php echo idmBerkembang($kodeprov,'skor_keg_or'); ?>",
          "maju": "<?php echo idmMaju($kodeprov,'skor_keg_or'); ?>",
          "mandiri": "<?php echo idmMandiri($kodeprov,'skor_keg_or'); ?>",
      },
      {
          "judul": "PMKS",
          "indikator": "<?php echo $pmks; ?>",
          "berkembang": "<?php echo idmBerkembang($kodeprov,'pmks'); ?>",
          "maju": "<?php echo idmMaju($kodeprov,'pmks'); ?>",
          "mandiri": "<?php echo idmMandiri($kodeprov,'pmks'); ?>",
      },
      {
          "judul": "Akses SLB",
          "indikator": "<?php echo $akses_slb; ?>",
          "berkembang": "<?php echo idmBerkembang($kodeprov,'akses_slb'); ?>",
          "maju": "<?php echo idmMaju($kodeprov,'akses_slb'); ?>",
          "mandiri": "<?php echo idmMandiri($kodeprov,'akses_slb'); ?>",
      },
      {
          "judul": "Poskamling",
          "indikator": "<?php echo $poskamling; ?>",
          "berkembang": "<?php echo idmBerkembang($kodeprov,'poskamling'); ?>",
          "maju": "<?php echo idmMaju($kodeprov,'poskamling'); ?>",
          "mandiri": "<?php echo idmMandiri($kodeprov,'poskamling'); ?>",
      },
      {
          "judul": "Siskamling",
          "indikator": "<?php echo $siskamling; ?>",
          "berkembang": "<?php echo idmBerkembang($kodeprov,'siskamling'); ?>",
          "maju": "<?php echo idmMaju($kodeprov,'siskamling'); ?>",
          "mandiri": "<?php echo idmMandiri($kodeprov,'siskamling'); ?>",
      },
      {
          "judul": "Konflik",
          "indikator": "<?php echo $konflik; ?>",
          "berkembang": "<?php echo idmBerkembang($kodeprov,'konflik'); ?>",
          "maju": "<?php echo idmMaju($kodeprov,'konflik'); ?>",
          "mandiri": "<?php echo idmMandiri($kodeprov,'konflik'); ?>",
      },
      {
          "judul": "Penyelesaian Konflik",
          "indikator": "<?php echo $penyelesaian_konflik; ?>",
          "berkembang": "<?php echo idmBerkembang($kodeprov,'penyelesaian_konflik'); ?>",
          "maju": "<?php echo idmMaju($kodeprov,'penyelesaian_konflik'); ?>",
          "mandiri": "<?php echo idmMandiri($kodeprov,'penyelesaian_konflik'); ?>",
      },
      {
          "judul": "Akses Minum",
          "indikator": "<?php echo $akses_minum; ?>",
          "berkembang": "<?php echo idmBerkembang($kodeprov,'akses_minum'); ?>",
          "maju": "<?php echo idmMaju($kodeprov,'akses_minum'); ?>",
          "mandiri": "<?php echo idmMandiri($kodeprov,'akses_minum'); ?>",
      },
      {
          "judul": "Akses Jamban",
          "indikator": "<?php echo $akses_jamban; ?>",
          "berkembang": "<?php echo idmBerkembang($kodeprov,'akses_jamban'); ?>",
          "maju": "<?php echo idmMaju($kodeprov,'akses_jamban'); ?>",
          "mandiri": "<?php echo idmMandiri($kodeprov,'akses_jamban'); ?>",
      },
      {
          "judul": "Persampahan",
          "indikator": "<?php echo $persampahan; ?>",
          "berkembang": "<?php echo idmBerkembang($kodeprov,'persampahan'); ?>",
          "maju": "<?php echo idmMaju($kodeprov,'persampahan'); ?>",
          "mandiri": "<?php echo idmMandiri($kodeprov,'persampahan'); ?>",
      },
      {
          "judul": "Akses Mandi Cuci",
          "indikator": "<?php echo $akses_mandi_cuci; ?>",
          "berkembang": "<?php echo idmBerkembang($kodeprov,'akses_mandi_cuci'); ?>",
          "maju": "<?php echo idmMaju($kodeprov,'akses_mandi_cuci'); ?>",
          "mandiri": "<?php echo idmMandiri($kodeprov,'akses_mandi_cuci'); ?>",
      },
      {
          "judul": "Akses Listrik",
          "indikator": "<?php echo $akses_listrik; ?>",
          "berkembang": "<?php echo idmBerkembang($kodeprov,'akses_listrik'); ?>",
          "maju": "<?php echo idmMaju($kodeprov,'akses_listrik'); ?>",
          "mandiri": "<?php echo idmMandiri($kodeprov,'akses_listrik'); ?>",
      },
      {
          "judul": "Akses TV",
          "indikator": "<?php echo $akses_tv; ?>",
          "berkembang": "<?php echo idmBerkembang($kodeprov,'akses_tv'); ?>",
          "maju": "<?php echo idmMaju($kodeprov,'akses_tv'); ?>",
          "mandiri": "<?php echo idmMandiri($kodeprov,'akses_tv'); ?>",
      },
      {
          "judul": "Akses Sinyal Selular",
          "indikator": "<?php echo $akses_sinyal_seluler; ?>",
          "berkembang": "<?php echo idmBerkembang($kodeprov,'akses_sinyal_seluler'); ?>",
          "maju": "<?php echo idmMaju($kodeprov,'akses_sinyal_seluler'); ?>",
          "mandiri": "<?php echo idmMandiri($kodeprov,'akses_sinyal_seluler'); ?>",
      },
      {
          "judul": "Akses Internet",
          "indikator": "<?php echo $akses_internet; ?>",
          "berkembang": "<?php echo idmBerkembang($kodeprov,'akses_internet'); ?>",
          "maju": "<?php echo idmMaju($kodeprov,'akses_internet'); ?>",
          "mandiri": "<?php echo idmMandiri($kodeprov,'akses_internet'); ?>",
      },
      {
          "judul": "Skor Keragaman",
          "indikator": "<?php echo $skor_keragaman; ?>",
          "berkembang": "<?php echo idmBerkembang($kodeprov,'skor_keragaman'); ?>",
          "maju": "<?php echo idmMaju($kodeprov,'skor_keragaman'); ?>",
          "mandiri": "<?php echo idmMandiri($kodeprov,'skor_keragaman'); ?>",
      },
      {
          "judul": "Skor Lembaga Ekonomi",
          "indikator": "<?php echo $skor_lemb_ek; ?>",
          "berkembang": "<?php echo idmBerkembang($kodeprov,'skor_lemb_ek'); ?>",
          "maju": "<?php echo idmMaju($kodeprov,'skor_lemb_ek'); ?>",
          "mandiri": "<?php echo idmMandiri($kodeprov,'skor_lemb_ek'); ?>",
      },
      {
          "judul": "Skor Minimarket",
          "indikator": "<?php echo $skor_minimar; ?>",
          "berkembang": "<?php echo idmBerkembang($kodeprov,'skor_minimar'); ?>",
          "maju": "<?php echo idmMaju($kodeprov,'skor_minimar'); ?>",
          "mandiri": "<?php echo idmMandiri($kodeprov,'skor_minimar'); ?>",
      },
      {
          "judul": "Skor Restoran dan Hotel",
          "indikator": "<?php echo $skor_resto_hotel; ?>",
          "berkembang": "<?php echo idmBerkembang($kodeprov,'skor_resto_hotel'); ?>",
          "maju": "<?php echo idmMaju($kodeprov,'skor_resto_hotel'); ?>",
          "mandiri": "<?php echo idmMandiri($kodeprov,'skor_resto_hotel'); ?>",
      },

      {
          "judul": "Skor Jarak Pertokoan",
          "indikator": "<?php echo $skor_jarak_ptkoan; ?>",
          "berkembang": "<?php echo idmBerkembang($kodeprov,'skor_jarak_ptkoan'); ?>",
          "maju": "<?php echo idmMaju($kodeprov,'skor_jarak_ptkoan'); ?>",
          "mandiri": "<?php echo idmMandiri($kodeprov,'skor_jarak_ptkoan'); ?>",
      },
      {
          "judul": "Skor Akses Pasar Semi",
          "indikator": "<?php echo $skor_akses_pasar_semi; ?>",
          "berkembang": "<?php echo idmBerkembang($kodeprov,'skor_akses_pasar_semi'); ?>",
          "maju": "<?php echo idmMaju($kodeprov,'skor_akses_pasar_semi'); ?>",
          "mandiri": "<?php echo idmMandiri($kodeprov,'skor_akses_pasar_semi'); ?>",
      },
      {
          "judul": "Skor Jalan",
          "indikator": "<?php echo $skor_jalan; ?>",
          "berkembang": "<?php echo idmBerkembang($kodeprov,'skor_jalan'); ?>",
          "maju": "<?php echo idmMaju($kodeprov,'skor_jalan'); ?>",
          "mandiri": "<?php echo idmMandiri($kodeprov,'skor_jalan'); ?>",
      },
      {
          "judul": "Skor Keterbukaan Fisik",
          "indikator": "<?php echo $skor_keterbukaan_fisik; ?>",
          "berkembang": "<?php echo idmBerkembang($kodeprov,'skor_keterbukaan_fisik'); ?>",
          "maju": "<?php echo idmMaju($kodeprov,'skor_keterbukaan_fisik'); ?>",
          "mandiri": "<?php echo idmMandiri($kodeprov,'skor_keterbukaan_fisik'); ?>",
      },
      {
          "judul": "Skor Angkutan Umum",
          "indikator": "<?php echo $skor_angk_umum; ?>",
          "berkembang": "<?php echo idmBerkembang($kodeprov,'skor_angk_umum'); ?>",
          "maju": "<?php echo idmMaju($kodeprov,'skor_angk_umum'); ?>",
          "mandiri": "<?php echo idmMandiri($kodeprov,'skor_angk_umum'); ?>",
      },
      {
          "judul": "Skor Logistik",
          "indikator": "<?php echo $skor_logistik; ?>",
          "berkembang": "<?php echo idmBerkembang($kodeprov,'skor_logistik'); ?>",
          "maju": "<?php echo idmMaju($kodeprov,'skor_logistik'); ?>",
          "mandiri": "<?php echo idmMandiri($kodeprov,'skor_logistik'); ?>",
      },

      {
          "judul": "Skor Kredit",
          "indikator": "<?php echo $skor_kredit; ?>",
          "berkembang": "<?php echo idmBerkembang($kodeprov,'skor_kredit'); ?>",
          "maju": "<?php echo idmMaju($kodeprov,'skor_kredit'); ?>",
          "mandiri": "<?php echo idmMandiri($kodeprov,'skor_kredit'); ?>",
      },
      {
          "judul": "Skor Bank",
          "indikator": "<?php echo $skor_bank; ?>",
          "berkembang": "<?php echo idmBerkembang($kodeprov,'skor_bank'); ?>",
          "maju": "<?php echo idmMaju($kodeprov,'skor_bank'); ?>",
          "mandiri": "<?php echo idmMandiri($kodeprov,'skor_bank'); ?>",
      },
      {
          "judul": "Skor Kualitas Lingkungan",
          "indikator": "<?php echo $skor_kualitas_lingkungan; ?>",
          "berkembang": "<?php echo idmBerkembang($kodeprov,'skor_kualitas_lingkungan'); ?>",
          "maju": "<?php echo idmMaju($kodeprov,'skor_kualitas_lingkungan'); ?>",
          "mandiri": "<?php echo idmMandiri($kodeprov,'skor_kualitas_lingkungan'); ?>",
      },
      {
          "judul": "Skor Kualitas Lingkungan",
          "indikator": "<?php echo $skor_bencana_alam; ?>",
          "berkembang": "<?php echo idmBerkembang($kodeprov,'skor_bencana_alam'); ?>",
          "maju": "<?php echo idmMaju($kodeprov,'skor_bencana_alam'); ?>",
          "mandiri": "<?php echo idmMandiri($kodeprov,'skor_bencana_alam'); ?>",
      },
      {
          "judul": "Skor Tanggap Bencana",
          "indikator": "<?php echo $skor_tanggap_bencana; ?>",
          "berkembang": "<?php echo idmBerkembang($kodeprov,'skor_tanggap_bencana'); ?>",
          "maju": "<?php echo idmMaju($kodeprov,'skor_tanggap_bencana'); ?>",
          "mandiri": "<?php echo idmMandiri($kodeprov,'skor_tanggap_bencana'); ?>",
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
        "gridCount": 53,

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

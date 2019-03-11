<?php if ($this->session->flashdata('success_message')) : ?>
    <div class="alert alert-success"><?php echo $this->session->flashdata('success_message'); ?></div>
<?php endif;?>
<?php if ($this->session->flashdata('error_message')) : ?>
    <div class="alert alert-danger"><?php echo $this->session->flashdata('error_message'); ?></div>
<?php endif;?>
	<p>
<?php if($this->permission->check_permission($modules, 'add')): ?>
		<!-- <a class="btn btn-blue btn-icon icon-left" href="<?php echo base_url('kegiatan/tambah'); ?>">
			<i class="entypo-plus"></i>
			Tambah kegiatan
		</a> &nbsp;
		<button class="btn btn-blue btn-icon icon-left" data-load-remote="<?php echo base_url('kegiatan/modal/impor'); ?>" data-toggle="modal" data-target="#modal_global">
			<i class="entypo-upload"></i>
			Impor kegiatan
		</button> &nbsp;
		<button class="btn btn-blue btn-icon icon-left" data-load-remote="<?php echo base_url('kegiatan/modal/ekspor'); ?>" data-toggle="modal" data-target="#modal_global">
			<i class="entypo-download"></i>
			Ekspor kegiatan
		</button> &nbsp; -->
<?php endif ?>
<!-- <p class="text-right">
  <a href="<?php echo base_url('chart'); ?>" class="btn btn-blue btn-icon icon-left btn-filter">
    <i class="entypo-database"></i>
    Lihat Grafik Kegiatan
  </a>
</p>-->
<form id="form-filter" class="form-horizontal" >
  <div class="form-group">
		<label for="country" class="col-sm-2 control-label">Provinsi</label>
		<div class="col-sm-5">
			<select name="prov" class="form-control" id="prov" placeholder="Provinsi" autocomplete="off">
				<option value="">Pilih Provinsi</option>
			<?php foreach ($list_provinsi as $provinsi): ?>
				<option value="<?php echo $provinsi->kodeprov ?>"><?php echo $provinsi->kodeprov ?> - <?php echo $provinsi->provinsi ?></option>
			<?php endforeach ?>
			</select>
		</div>
	</div>
	<div class="form-group">
		<label for="country" class="col-sm-2 control-label">Kabupaten</label>
		<div class="col-sm-5">
		<select name="kab" class="form-control" id="kab" placeholder="Kabupaten" autocomplete="off">
			<option value=""></option>
		</select>
		</div>
	</div>
	<div class="form-group">
		<label for="country" class="col-sm-2 control-label">Kecamatan/Distrik</label>
		<div class="col-sm-5">
		<select name="kec" class="form-control" id="kec" placeholder="Kecamatan/Distrik" autocomplete="off">
			<option value=""></option>
		</select>
		</div>
	</div>
	<div class="form-group">
		<label for="country" class="col-sm-2 control-label">Desa/Kampung</label>
		<div class="col-sm-5">
		<select name="des" class="form-control" id="des" placeholder="Desa/Kampung" autocomplete="off">
			<option value=""></option>
		</select>
		</div>
	</div>
  <div class="form-group">
		<label for="country" class="col-sm-2 control-label">Status Desa</label>
		<div class="col-sm-5">
      <select name="status" class="form-control" id="status" placeholder="Status" autocomplete="off">
        <option value="">Pilih Status</option>
      <?php foreach ($list_status as $status): ?>
        <option value="<?php echo $status->status ?>"><?php echo $status->status ?></option>
      <?php endforeach ?>
      </select>
		</div>
	</div>
  <div id="form-tambahan" style="display: none;">
        <div class="col-xs-6">
            <h2>SOSIAL</h2>
             <div class="form-group">
                <label for="i1" class="col-sm-6 control-label">Skor Dokter</label>
                <div class="col-sm-3">
                    <input type="number" min="0" max="5" class="form-control" autocomplete="off" id="skor_dokter">
                </div>

                <div class="col-sm-3">
                    <input type="number" min="0" max="5" class="form-control" autocomplete="off" id="keskor_dokter">
                </div>
                </div>
                <div class="form-group">
                <label for="i1" class="col-sm-6 control-label">Skor Bidan</label>
                <div class="col-sm-3">
                    <input type="number" min="0" max="5" class="form-control" autocomplete="off" id="skor_bidan">
                </div>

                <div class="col-sm-3">
                    <input type="number" min="0" max="5" class="form-control" autocomplete="off" id="keskor_bidan">
                </div>
                </div>
                <div class="form-group">
                    <label for="i1" class="col-sm-6 control-label">Skor Tenaga Kesehatan Lain</label>
                    <div class="col-sm-3">
                        <input type="number" min="0" max="5" class="form-control" autocomplete="off" id="skor_nakes_lain">
                    </div>

                    <div class="col-sm-3">
                        <input type="number" min="0" max="5" class="form-control" autocomplete="off" id="keskor_nakes_lain">
                    </div>
                </div>
                <div class="form-group">
                    <label for="i1" class="col-sm-6 control-label">Skor Waktu Tempuh</label>
                    <div class="col-sm-3">
                        <input type="number" min="0" max="5" class="form-control" autocomplete="off" id="skor_waktu_tempuh">
                    </div>

                    <div class="col-sm-3">
                        <input type="number" min="0" max="5" class="form-control" autocomplete="off" id="keskor_waktu_tempuh">
                    </div>
                </div>
                <!-- new -->
                <div class="form-group">
                    <label for="i1" class="col-sm-6 control-label">Aktifitas Posyandu</label>
                    <div class="col-sm-3">
                        <input type="number" min="0" max="5" class="form-control" autocomplete="off" id="aktifitas_posyandu">
                    </div>

                    <div class="col-sm-3">
                        <input type="number" min="0" max="5" class="form-control" autocomplete="off" id="keaktifitas_posyandu">
                    </div>
                </div>
                <div class="form-group">
                    <label for="i1" class="col-sm-6 control-label">Akses Poskesdes</label>
                    <div class="col-sm-3">
                        <input type="number" min="0" max="5" class="form-control" autocomplete="off" id="akses_poskesdes">
                    </div>

                    <div class="col-sm-3">
                        <input type="number" min="0" max="5" class="form-control" autocomplete="off" id="keakses_poskesdes">
                    </div>
                </div>
                <div class="form-group">
                    <label for="i1" class="col-sm-6 control-label">Akses Posyandu</label>
                    <div class="col-sm-3">
                        <input type="number" min="0" max="5" class="form-control" autocomplete="off" id="akses_posyandu">
                    </div>

                    <div class="col-sm-3">
                        <input type="number" min="0" max="5" class="form-control" autocomplete="off" id="keakses_posyandu">
                    </div>
                </div>
                <div class="form-group">
                    <label for="i1" class="col-sm-6 control-label">Kepesertaan BPJS</label>
                    <div class="col-sm-3">
                        <input type="number" min="0" max="5" class="form-control" autocomplete="off" id="kepesertaan_bpjs">
                    </div>

                    <div class="col-sm-3">
                        <input type="number" min="0" max="5" class="form-control" autocomplete="off" id="kekepesertaan_bpjs">
                    </div>
                </div>
                <div class="form-group">
                    <label for="i1" class="col-sm-6 control-label">Akses SD</label>
                    <div class="col-sm-3">
                        <input type="number" min="0" max="5" class="form-control" autocomplete="off" id="akses_sd">
                    </div>

                    <div class="col-sm-3">
                        <input type="number" min="0" max="5" class="form-control" autocomplete="off" id="keakses_sd">
                    </div>
                </div>
                <div class="form-group">
                    <label for="i1" class="col-sm-6 control-label">Akses SMP</label>
                    <div class="col-sm-3">
                        <input type="number" min="0" max="5" class="form-control" autocomplete="off" id="akses_smp">
                    </div>

                    <div class="col-sm-3">
                        <input type="number" min="0" max="5" class="form-control" autocomplete="off" id="keakses_smp">
                    </div>
                </div>
                <div class="form-group">
                    <label for="i1" class="col-sm-6 control-label">Skor SMA/SMK</label>
                    <div class="col-sm-3">
                        <input type="number" min="0" max="5" class="form-control" autocomplete="off" id="skor_sma_smk">
                    </div>

                    <div class="col-sm-3">
                        <input type="number" min="0" max="5" class="form-control" autocomplete="off" id="keskor_sma_smk">
                    </div>
                </div>
                <div class="form-group">
                    <label for="i1" class="col-sm-6 control-label">Buta Aksara</label>
                    <div class="col-sm-3">
                        <input type="number" min="0" max="5" class="form-control" autocomplete="off" id="buta_aksara">
                    </div>

                    <div class="col-sm-3">
                        <input type="number" min="0" max="5" class="form-control" autocomplete="off" id="kebuta_aksara">
                    </div>
                </div>
                <div class="form-group">
                    <label for="i1" class="col-sm-6 control-label">PKBM</label>
                    <div class="col-sm-3">
                        <input type="number" min="0" max="5" class="form-control" autocomplete="off" id="pkbm">
                    </div>

                    <div class="col-sm-3">
                        <input type="number" min="0" max="5" class="form-control" autocomplete="off" id="kepkbm">
                    </div>
                </div>
                <div class="form-group">
                    <label for="i1" class="col-sm-6 control-label">PAUD</label>
                    <div class="col-sm-3">
                        <input type="number" min="0" max="5" class="form-control" autocomplete="off" id="paud">
                    </div>

                    <div class="col-sm-3">
                        <input type="number" min="0" max="5" class="form-control" autocomplete="off" id="kepaud">
                    </div>
                </div>
                <div class="form-group">
                    <label for="i1" class="col-sm-6 control-label">Perpustakaan Masyarakat</label>
                    <div class="col-sm-3">
                        <input type="number" min="0" max="5" class="form-control" autocomplete="off" id="perpusy">
                    </div>

                    <div class="col-sm-3">
                        <input type="number" min="0" max="5" class="form-control" autocomplete="off" id="keperpusy">
                    </div>
                </div>
                <div class="form-group">
                    <label for="i1" class="col-sm-6 control-label">Ketrampilan</label>
                    <div class="col-sm-3">
                        <input type="number" min="0" max="5" class="form-control" autocomplete="off" id="Ketrampilan">
                    </div>

                    <div class="col-sm-3">
                        <input type="number" min="0" max="5" class="form-control" autocomplete="off" id="keketrampilan">
                    </div>
                </div>
                <div class="form-group">
                    <label for="i1" class="col-sm-6 control-label">Keragaman Etnis</label>
                    <div class="col-sm-3">
                        <input type="number" min="0" max="5" class="form-control" autocomplete="off" id="keragaman_etnis">
                    </div>

                    <div class="col-sm-3">
                        <input type="number" min="0" max="5" class="form-control" autocomplete="off" id="kekeragaman_etnis">
                    </div>
                </div>
                <div class="form-group">
                    <label for="i1" class="col-sm-6 control-label">Keragaman Etnis</label>
                    <div class="col-sm-3">
                        <input type="number" min="0" max="5" class="form-control" autocomplete="off" id="keragaman_etnis">
                    </div>

                    <div class="col-sm-3">
                        <input type="number" min="0" max="5" class="form-control" autocomplete="off" id="kekeragaman_etnis">
                    </div>
                </div>
                <div class="form-group">
                    <label for="i1" class="col-sm-6 control-label">Keragaman Komunikasi</label>
                    <div class="col-sm-3">
                        <input type="number" min="0" max="5" class="form-control" autocomplete="off" id="keragaman_komunikasi">
                    </div>

                    <div class="col-sm-3">
                        <input type="number" min="0" max="5" class="form-control" autocomplete="off" id="kekeragaman_komunikasi">
                    </div>
                </div>
                <div class="form-group">
                    <label for="i1" class="col-sm-6 control-label">Keragaman Agama</label>
                    <div class="col-sm-3">
                        <input type="number" min="0" max="5" class="form-control" autocomplete="off" id="keragaman_agama">
                    </div>

                    <div class="col-sm-3">
                        <input type="number" min="0" max="5" class="form-control" autocomplete="off" id="kekeragaman_agama">
                    </div>
                </div>
                <div class="form-group">
                    <label for="i1" class="col-sm-6 control-label">Skor Gotong Royong</label>
                    <div class="col-sm-3">
                        <input type="number" min="0" max="5" class="form-control" autocomplete="off" id="skor_goroyong">
                    </div>

                    <div class="col-sm-3">
                        <input type="number" min="0" max="5" class="form-control" autocomplete="off" id="keskor_goroyong">
                    </div>
                </div>
                <div class="form-group">
                    <label for="i1" class="col-sm-6 control-label">Skor Ruang Publik</label>
                    <div class="col-sm-3">
                        <input type="number" min="0" max="5" class="form-control" autocomplete="off" id="skor_ruangpub">
                    </div>

                    <div class="col-sm-3">
                        <input type="number" min="0" max="5" class="form-control" autocomplete="off" id="keskor_ruangpub">
                    </div>
                </div>
                <div class="form-group">
                    <label for="i1" class="col-sm-6 control-label">Skor Fasilitas Olah Raga</label>
                    <div class="col-sm-3">
                        <input type="number" min="0" max="5" class="form-control" autocomplete="off" id="skor_fasor">
                    </div>

                    <div class="col-sm-3">
                        <input type="number" min="0" max="5" class="form-control" autocomplete="off" id="keskor_fasor">
                    </div>
                </div>
                <div class="form-group">
                    <label for="i1" class="col-sm-6 control-label">skor Kegiatan Olah Raga</label>
                    <div class="col-sm-3">
                        <input type="number" min="0" max="5" class="form-control" autocomplete="off" id="skor_keg_or">
                    </div>

                    <div class="col-sm-3">
                        <input type="number" min="0" max="5" class="form-control" autocomplete="off" id="keskor_keg_or">
                    </div>
                </div>
                <div class="form-group">
                    <label for="i1" class="col-sm-6 control-label">PMKS</label>
                    <div class="col-sm-3">
                        <input type="number" min="0" max="5" class="form-control" autocomplete="off" id="pmks">
                    </div>

                    <div class="col-sm-3">
                        <input type="number" min="0" max="5" class="form-control" autocomplete="off" id="kepmks">
                    </div>
                </div>
                <div class="form-group">
                    <label for="i1" class="col-sm-6 control-label">Akses Sekolah Luar Biasa</label>
                    <div class="col-sm-3">
                        <input type="number" min="0" max="5" class="form-control" autocomplete="off" id="akses_slb">
                    </div>

                    <div class="col-sm-3">
                        <input type="number" min="0" max="5" class="form-control" autocomplete="off" id="keakses_slb">
                    </div>
                </div>
                <div class="form-group">
                    <label for="i1" class="col-sm-6 control-label">Poskamling</label>
                    <div class="col-sm-3">
                        <input type="number" min="0" max="5" class="form-control" autocomplete="off" id="poskamling">
                    </div>

                    <div class="col-sm-3">
                        <input type="number" min="0" max="5" class="form-control" autocomplete="off" id="keposkamling">
                    </div>
                </div>
                <div class="form-group">
                    <label for="i1" class="col-sm-6 control-label">Siskamling</label>
                    <div class="col-sm-3">
                        <input type="number" min="0" max="5" class="form-control" autocomplete="off" id="siskamling">
                    </div>

                    <div class="col-sm-3">
                        <input type="number" min="0" max="5" class="form-control" autocomplete="off" id="kesiskamling">
                    </div>
                </div>
                <div class="form-group">
                    <label for="i1" class="col-sm-6 control-label">Konflik</label>
                    <div class="col-sm-3">
                        <input type="number" min="0" max="5" class="form-control" autocomplete="off" id="konflik">
                    </div>

                    <div class="col-sm-3">
                        <input type="number" min="0" max="5" class="form-control" autocomplete="off" id="kekonflik">
                    </div>
                </div>
                <div class="form-group">
                    <label for="i1" class="col-sm-6 control-label">Penyelesaian Konflik</label>
                    <div class="col-sm-3">
                        <input type="number" min="0" max="5" class="form-control" autocomplete="off" id="penyelesaian_konflik">
                    </div>

                    <div class="col-sm-3">
                        <input type="number" min="0" max="5" class="form-control" autocomplete="off" id="kepenyelesaian_konflik">
                    </div>
                </div>
                <div class="form-group">
                    <label for="i1" class="col-sm-6 control-label"><font color="green">Akses Minum</font></label>
                    <div class="col-sm-3">
                        <input type="number" min="0" max="5" class="form-control" autocomplete="off" id="akses_minum">
                    </div>

                    <div class="col-sm-3">
                        <input type="number" min="0" max="5" class="form-control" autocomplete="off" id="keakses_minum">
                    </div>
                </div>
                <div class="form-group">
                    <label for="i1" class="col-sm-6 control-label">Akses Jamban</label>
                    <div class="col-sm-3">
                        <input type="number" min="0" max="5" class="form-control" autocomplete="off" id="akses_jamban">
                    </div>

                    <div class="col-sm-3">
                        <input type="number" min="0" max="5" class="form-control" autocomplete="off" id="keakses_jamban">
                    </div>
                </div>
                <div class="form-group">
                    <label for="i1" class="col-sm-6 control-label">Persampahan</label>
                    <div class="col-sm-3">
                        <input type="number" min="0" max="5" class="form-control" autocomplete="off" id="persampahan">
                    </div>

                    <div class="col-sm-3">
                        <input type="number" min="0" max="5" class="form-control" autocomplete="off" id="kepersampahan">
                    </div>
                </div>
                <div class="form-group">
                    <label for="i1" class="col-sm-6 control-label"><font color="green">Akses Mandi Cuci</font></label>
                    <div class="col-sm-3">
                        <input type="number" min="0" max="5" class="form-control" autocomplete="off" id="akses_mandi_cuci">
                    </div>

                    <div class="col-sm-3">
                        <input type="number" min="0" max="5" class="form-control" autocomplete="off" id="keakses_mandi_cuci">
                    </div>
                </div>
                <div class="form-group">
                    <label for="i1" class="col-sm-6 control-label">Akses Listrik</label>
                    <div class="col-sm-3">
                        <input type="number" min="0" max="5" class="form-control" autocomplete="off" id="akses_listrik">
                    </div>

                    <div class="col-sm-3">
                        <input type="number" min="0" max="5" class="form-control" autocomplete="off" id="keakses_listrik">
                    </div>
                </div>
                <div class="form-group">
                    <label for="i1" class="col-sm-6 control-label">Akses TV</label>
                    <div class="col-sm-3">
                        <input type="number" min="0" max="5" class="form-control" autocomplete="off" id="akses_tv">
                    </div>

                    <div class="col-sm-3">
                        <input type="number" min="0" max="5" class="form-control" autocomplete="off" id="keakses_tv">
                    </div>
                </div>
                <div class="form-group">
                    <label for="i1" class="col-sm-6 control-label">Akses Sinyal Selular</label>
                    <div class="col-sm-3">
                        <input type="number" min="0" max="5" class="form-control" autocomplete="off" id="akses_sinyal_selular">
                    </div>

                    <div class="col-sm-3">
                        <input type="number" min="0" max="5" class="form-control" autocomplete="off" id="keakses_sinyal_selular">
                    </div>
                </div>
                <div class="form-group">
                    <label for="i1" class="col-sm-6 control-label">Akses Internet</label>
                    <div class="col-sm-3">
                        <input type="number" min="0" max="5" class="form-control" autocomplete="off" id="akses_internet">
                    </div>

                    <div class="col-sm-3">
                        <input type="number" min="0" max="5" class="form-control" autocomplete="off" id="keakses_internet">
                    </div>
                </div>

        </div>
        <!-- pendidikan -->
         <div class="col-xs-6">
            <h2>EKONOMI</h2>
                <div class="form-group">
                    <label for="" class="col-sm-6 control-label">Skor Keragaman</label>
                    <div class="col-sm-3">
                        <input type="number" min="0" max="5" class="form-control" autocomplete="off" id="skor_keragaman">
                    </div>

                    <div class="col-sm-3">
                        <input type="number" min="0" max="5" class="form-control" autocomplete="off" id="keskor_keragaman">
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="col-sm-6 control-label">Skor Lembaga Ekonomi</label>
                    <div class="col-sm-3">
                        <input type="number" min="0" max="5" class="form-control" autocomplete="off" id="skor_lemb_ek">
                    </div>

                    <div class="col-sm-3">
                        <input type="number" min="0" max="5" class="form-control" autocomplete="off" id="keskor_lemb_ek">
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="col-sm-6 control-label">Skor Toko/Warung Kelontong</label>
                    <div class="col-sm-3">
                        <input type="number" min="0" max="5" class="form-control" autocomplete="off" id="skor_minimar">
                    </div>

                    <div class="col-sm-3">
                        <input type="number" min="0" max="5" class="form-control" autocomplete="off" id="keskor_minimar">
                    </div>
                </div>
                <!-- <div class="form-group">
                    <label for="" class="col-sm-6 control-label">Skor Warung</label>
                    <div class="col-sm-3">
                        <input type="number" min="0" max="5" class="form-control" autocomplete="off" id="skor_warung">
                    </div>

                    <div class="col-sm-3">
                        <input type="number" min="0" max="5" class="form-control" autocomplete="off" id="keskor_warung">
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="col-sm-6 control-label">Skor Kedai Makan</label>
                    <div class="col-sm-3">
                        <input type="number" min="0" max="5" class="form-control" autocomplete="off" id="skor_kedai_makan">
                    </div>

                    <div class="col-sm-3">
                        <input type="number" min="0" max="5" class="form-control" autocomplete="off" id="keskor_kedai_makan">
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="col-sm-6 control-label">Skor Restoran</label>
                    <div class="col-sm-3">
                        <input type="number" min="0" max="5" class="form-control" autocomplete="off" id="skor_restoran">
                    </div>

                    <div class="col-sm-3">
                        <input type="number" min="0" max="5" class="form-control" autocomplete="off" id="keskor_restoran">
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="col-sm-6 control-label">skor Hotel</label>
                    <div class="col-sm-3">
                        <input type="number" min="0" max="5" class="form-control" autocomplete="off" id="skor_hotel">
                    </div>

                    <div class="col-sm-3">
                        <input type="number" min="0" max="5" class="form-control" autocomplete="off" id="keskor_hotel">
                    </div>
                </div> -->
                <div class="form-group">
                    <label for="" class="col-sm-6 control-label">Skor Restoran & Hotel</label>
                    <div class="col-sm-3">
                        <input type="number" min="0" max="5" class="form-control" autocomplete="off" id="skor_resto_hotel">
                    </div>

                    <div class="col-sm-3">
                        <input type="number" min="0" max="5" class="form-control" autocomplete="off" id="keskor_resto_hotel">
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="col-sm-6 control-label">Skor Jarak Pertokoan</label>
                    <div class="col-sm-3">
                        <input type="number" min="0" max="5" class="form-control" autocomplete="off" id="skor_jarak_ptkoan">
                    </div>

                    <div class="col-sm-3">
                        <input type="number" min="0" max="5" class="form-control" autocomplete="off" id="keskor_jarak_ptkoan">
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="col-sm-6 control-label">Skor Akses Pasar Semi</label>
                    <div class="col-sm-3">
                        <input type="number" min="0" max="5" class="form-control" autocomplete="off" id="skor_akses_pasar_semi">
                    </div>

                    <div class="col-sm-3">
                        <input type="number" min="0" max="5" class="form-control" autocomplete="off" id="keskor_akses_pasar_semi">
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="col-sm-6 control-label">Skor Jalan</label>
                    <div class="col-sm-3">
                        <input type="number" min="0" max="5" class="form-control" autocomplete="off" id="skor_jalan">
                    </div>

                    <div class="col-sm-3">
                        <input type="number" min="0" max="5" class="form-control" autocomplete="off" id="keskor_jalan">
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="col-sm-6 control-label">Skor Keterbukaan Fisik</label>
                    <div class="col-sm-3">
                        <input type="number" min="0" max="5" class="form-control" autocomplete="off" id="skor_keterbukaan_fisik">
                    </div>

                    <div class="col-sm-3">
                        <input type="number" min="0" max="5" class="form-control" autocomplete="off" id="keskor_keterbukaan_fisik">
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="col-sm-6 control-label">Skor Angkutan Umum</label>
                    <div class="col-sm-3">
                        <input type="number" min="0" max="5" class="form-control" autocomplete="off" id="skor_angk_umum">
                    </div>

                    <div class="col-sm-3">
                        <input type="number" min="0" max="5" class="form-control" autocomplete="off" id="keskor_angk_umum">
                    </div>
                </div>
                <!-- <div class="form-group">
                    <label for="" class="col-sm-6 control-label">Skor Operasi Angkutan Umum</label>
                    <div class="col-sm-3">
                        <input type="number" min="0" max="5" class="form-control" autocomplete="off" id="skor_operasi_au">
                    </div>

                    <div class="col-sm-3">
                        <input type="number" min="0" max="5" class="form-control" autocomplete="off" id="keskor_operasi_au">
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="col-sm-6 control-label">Skor Jamoper</label>
                    <div class="col-sm-3">
                        <input type="number" min="0" max="5" class="form-control" autocomplete="off" id="skor_jamoper">
                    </div>

                    <div class="col-sm-3">
                        <input type="number" min="0" max="5" class="form-control" autocomplete="off" id="keskor_jamoper">
                    </div>
                </div> -->
                <div class="form-group">
                    <label for="" class="col-sm-6 control-label">Skor Logistik</label>
                    <div class="col-sm-3">
                        <input type="number" min="0" max="5" class="form-control" autocomplete="off" id="skor_logistik">
                    </div>

                    <div class="col-sm-3">
                        <input type="number" min="0" max="5" class="form-control" autocomplete="off" id="keskor_logistik">
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="col-sm-6 control-label">Skor Pos Keliling</label>
                    <div class="col-sm-3">
                        <input type="number" min="0" max="5" class="form-control" autocomplete="off" id="skor_pos_keliling">
                    </div>

                    <div class="col-sm-3">
                        <input type="number" min="0" max="5" class="form-control" autocomplete="off" id="keskor_pos_keliling">
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="col-sm-6 control-label">Skor Kredit</label>
                    <div class="col-sm-3">
                        <input type="number" min="0" max="5" class="form-control" autocomplete="off" id="skor_kredit">
                    </div>

                    <div class="col-sm-3">
                        <input type="number" min="0" max="5" class="form-control" autocomplete="off" id="keskor_kredit">
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="col-sm-6 control-label">Skor Bank</label>
                    <div class="col-sm-3">
                        <input type="number" min="0" max="5" class="form-control" autocomplete="off" id="skor_bank">
                    </div>

                    <div class="col-sm-3">
                        <input type="number" min="0" max="5" class="form-control" autocomplete="off" id="keskor_bank">
                    </div>
                </div>
        </div>

         <!-- Ekonomi -->
         <div class="col-xs-6">
            <h2>EKOLOGI</h2>
            <!-- <div class="form-group">
                <label for="" class="col-sm-6 control-label">Pembuangan Limbah ke Sungai</label>
                <div class="col-sm-3">
                    <input type="number" min="0" max="5" class="form-control" autocomplete="off" id="pembuangan_limbah_ke_sungai">
                </div>

                <div class="col-sm-3">
                    <input type="number" min="0" max="5" class="form-control" autocomplete="off" id="kepembuangan_limbah_ke_sungai">
                </div>
            </div>
            <div class="form-group">
                <label for="" class="col-sm-6 control-label">Air</label>
                <div class="col-sm-3">
                    <input type="number" min="0" max="5" class="form-control" autocomplete="off" id="air">
                </div>

                <div class="col-sm-3">
                    <input type="number" min="0" max="5" class="form-control" autocomplete="off" id="keair">
                </div>
            </div>
            <div class="form-group">
                <label for="" class="col-sm-6 control-label">Tanah</label>
                <div class="col-sm-3">
                    <input type="number" min="0" max="5" class="form-control" autocomplete="off" id="tanah">
                </div>

                <div class="col-sm-3">
                    <input type="number" min="0" max="5" class="form-control" autocomplete="off" id="ketanah">
                </div>
            </div>
            <div class="form-group">
                <label for="" class="col-sm-6 control-label">Udara</label>
                <div class="col-sm-3">
                    <input type="number" min="0" max="5" class="form-control" autocomplete="off" id="udara">
                </div>

                <div class="col-sm-3">
                    <input type="number" min="0" max="5" class="form-control" autocomplete="off" id="keudara">
                </div>
            </div>
            <div class="form-group">
                <label for="" class="col-sm-6 control-label">Jumlah</label>
                <div class="col-sm-3">
                    <input type="number" min="0" max="5" class="form-control" autocomplete="off" id="jumlah">
                </div>

                <div class="col-sm-3">
                    <input type="number" min="0" max="5" class="form-control" autocomplete="off" id="kejumlah">
                </div>
            </div> -->
            <div class="form-group">
                <label for="" class="col-sm-6 control-label">Skor Kualitas Lingkungan</label>
                <div class="col-sm-3">
                    <input type="number" min="0" max="5" class="form-control" autocomplete="off" id="skor_kualitas_lingkungan">
                </div>

                <div class="col-sm-3">
                    <input type="number" min="0" max="5" class="form-control" autocomplete="off" id="keskor_kualitas_lingkungan">
                </div>
            </div>
            <!-- <div class="form-group">
                <label for="" class="col-sm-6 control-label">Tanah Longsor</label>
                <div class="col-sm-3">
                    <input type="number" min="0" max="5" class="form-control" autocomplete="off" id="tanah_longsor">
                </div>

                <div class="col-sm-3">
                    <input type="number" min="0" max="5" class="form-control" autocomplete="off" id="ketanah_longsor">
                </div>
            </div>
            <div class="form-group">
                <label for="" class="col-sm-6 control-label">Banjir</label>
                <div class="col-sm-3">
                    <input type="number" min="0" max="5" class="form-control" autocomplete="off" id="banjir">
                </div>

                <div class="col-sm-3">
                    <input type="number" min="0" max="5" class="form-control" autocomplete="off" id="kebanjir">
                </div>
            </div>
            <div class="form-group">
                <label for="" class="col-sm-6 control-label">Banjir Bandang</label>
                <div class="col-sm-3">
                    <input type="number" min="0" max="5" class="form-control" autocomplete="off" id="banjir_bandang">
                </div>

                <div class="col-sm-3">
                    <input type="number" min="0" max="5" class="form-control" autocomplete="off" id="kebanjir_bandang">
                </div>
            </div>
            <div class="form-group">
                <label for="" class="col-sm-6 control-label">Kebakaran Hutan</label>
                <div class="col-sm-3">
                    <input type="number" min="0" max="5" class="form-control" autocomplete="off" id="kebakaran_hutan">
                </div>

                <div class="col-sm-3">
                    <input type="number" min="0" max="5" class="form-control" autocomplete="off" id="kekebakaran_hutan">
                </div>
            </div>
            <div class="form-group">
                <label for="" class="col-sm-6 control-label">Rawan Bencana</label>
                <div class="col-sm-3">
                    <input type="number" min="0" max="5" class="form-control" autocomplete="off" id="rawan_bencana">
                </div>

                <div class="col-sm-3">
                    <input type="number" min="0" max="5" class="form-control" autocomplete="off" id="kerawan_bencana">
                </div>
            </div> -->
            <div class="form-group">
                <label for="" class="col-sm-6 control-label">Skor Bencana Alam</label>
                <div class="col-sm-3">
                    <input type="number" min="0" max="5" class="form-control" autocomplete="off" id="skor_bencana_alam">
                </div>

                <div class="col-sm-3">
                    <input type="number" min="0" max="5" class="form-control" autocomplete="off" id="keskor_bencana_alam">
                </div>
            </div>
            <!-- <div class="form-group">
                <label for="" class="col-sm-6 control-label">Peringatan Dini</label>
                <div class="col-sm-3">
                    <input type="number" min="0" max="5" class="form-control" autocomplete="off" id="peringatan_dini">
                </div>

                <div class="col-sm-3">
                    <input type="number" min="0" max="5" class="form-control" autocomplete="off" id="keperingatan_dini">
                </div>
            </div>
            <div class="form-group">
                <label for="" class="col-sm-6 control-label">Peralatan Keselamatan</label>
                <div class="col-sm-3">
                    <input type="number" min="0" max="5" class="form-control" autocomplete="off" id="peralatan_selamat">
                </div>

                <div class="col-sm-3">
                    <input type="number" min="0" max="5" class="form-control" autocomplete="off" id="keperalatan_selamat">
                </div>
            </div>
            <div class="form-group">
                <label for="" class="col-sm-6 control-label">Jalur Evakuasi</label>
                <div class="col-sm-3">
                    <input type="number" min="0" max="5" class="form-control" autocomplete="off" id="jalur_evakuasi">
                </div>

                <div class="col-sm-3">
                    <input type="number" min="0" max="5" class="form-control" autocomplete="off" id="kejalur_evakuasi">
                </div>
            </div>
            <div class="form-group">
                <label for="" class="col-sm-6 control-label">Jumlah Kesiapan Tangap Bencana</label>
                <div class="col-sm-3">
                    <input type="number" min="0" max="5" class="form-control" autocomplete="off" id="jml_kesiapan_tb">
                </div>

                <div class="col-sm-3">
                    <input type="number" min="0" max="5" class="form-control" autocomplete="off" id="kejml_kesiapan_tb">
                </div>
            </div> -->
            <div class="form-group">
                <label for="" class="col-sm-6 control-label">Skor Tanggap Bencana</label>
                <div class="col-sm-3">
                    <input type="number" min="0" max="5" class="form-control" autocomplete="off" id="skor_tanggap_bencana">
                </div>

                <div class="col-sm-3">
                    <input type="number" min="0" max="5" class="form-control" autocomplete="off" id="keskor_tanggap_bencana">
                </div>
            </div>
        </div>


    </div>
	<div class="form-group">
		<label for="LastName" class="col-sm-2 control-label"></label>

		<div class="col-sm-4">
			<button type="button" id="btn-filter" class="btn btn-primary">Filter</button>
			<button type="reset" id="btn-reset" class="btn btn-default">Reset</button>
		</div>
	</div>
</form>
<table id="mytable" class="table table-bordered datatable">
	<thead>
		<tr>
			<th>NO</th>
      <th>PROVINSI</th>
			<th>KABUPATEN</th>
			<th>KECAMATAN</th>
			<th>DESA</th>
			<th>STATUS</th>
			<th>AKSI</th>
		</tr>

	</thead>
	<tbody>
	</tbody>
	<!--
	<tfoot>
		<tr>
			<th>No</th>
			<th>PROVINSI</th>
			<th>LUAS(Ha)</th>
		</tr>
	</tfoot>
	-->
</table>

<script src="<?php echo base_url('assets/js/datatables/jquery.dataTables.min.js')?>"></script>
<script src="<?php echo base_url('assets/js/datatables/dataTables.bootstrap.min.js')?>"></script>
<script src="<?php echo base_url('assets/js/datatables/fixedHeader/dataTables.fixedHeader.min.js')?>"></script>
<script type="text/javascript">
var table;
jQuery(document).ready(function($){
    //datatables
    table = $('#mytable').DataTable({

        "processing": true, //Feature control the processing indicator.
        "serverSide": true, //Feature control DataTables' server-side processing mode.
        "order": [], //Initial no order.
        "bFilter": false,
        "pagingType": "full_numbers",
        "iDisplayLength": 10,
        "deferRender": true,
        "aLengthMenu": [[10, 25, 50, 100,500], [10, 25, 50,100,500]],
        "dom": 'lfBrtip',
        "buttons": ['excel','print'],
        "ajax": {
            "url": "<?php echo base_url('desa/ajax_list')?>",
            "type": "POST",
            "data": function ( data ) {
                data.provinsi = $('#prov').val();
                data.kabupaten = $('#kab').val();
                data.kecamatan = $('#kec').val();
                data.desa = $('#des').val();
                data.status = $('#status').val();

                data.skor_dokter = $('#skor_dokter').val();
                data.keskor_dokter = $('#keskor_dokter').val();
                data.skor_bidan = $('#skor_bidan').val();
                data.keskor_bidan = $('#keskor_bidan').val();
                data.skor_nakes_lain = $('#skor_nakes_lain').val();
                data.keskor_nakes_lain = $('#keskor_nakes_lain').val();
                data.skor_waktu_tempuh = $('#skor_waktu_tempuh').val();
                data.keskor_waktu_tempuh = $('#keskor_waktu_tempuh').val();
                data.aktifitas_posyandu = $('#aktifitas_posyandu').val();
                data.keaktifitas_posyandu = $('#keaktifitas_posyandu').val();
                data.akses_poskesdes = $('#akses_poskesdes').val();
                data.keakses_poskesdes = $('#keakses_poskesdes').val();
                data.akses_posyandu = $('#akses_posyandu').val();
                data.keakses_posyandu = $('#keakses_posyandu').val();
                data.kepesertaan_bpjs = $('#kepesertaan_bpjs').val();
                data.kekepesertaan_bpjs = $('#kekepesertaan_bpjs').val();
                data.akses_sd = $('#akses_sd').val();
                data.keakses_sd = $('#keakses_sd').val();
                data.akses_smp = $('#akses_smp').val();
                data.keakses_smp = $('#keakses_smp').val();
                data.skor_sma_smk = $('#skor_sma_smk').val();
                data.keskor_sma_smk = $('#keskor_sma_smk').val();

                data.buta_aksara = $('#buta_aksara').val();
                data.kebuta_aksara = $('#kebuta_aksara').val();
                data.pkbm = $('#pkbm').val();
                data.kepkbm = $('#kepkbm').val();
                data.paud = $('#paud').val();
                data.kepaud = $('#kepaud').val();
                data.perpusy = $('#perpusy').val();
                data.keperpusy = $('#keperpusy').val();
                data.ketrampilan = $('#ketrampilan').val();
                data.keketrampilan = $('#keketrampilan').val();
                data.keragaman_etnis = $('#keragaman_etnis').val();
                data.kekeragaman_etnis = $('#keragaman_etnis').val();
                data.keragaman_komunikasi = $('#keragaman_komunikasi').val();
                data.kekeragaman_komunikasi = $('#kekeragaman_komunikasi').val();
                data.keragaman_agama = $('#keragaman_agama').val();
                data.kekeragaman_agama = $('#kekeragaman_agama').val();
                data.skor_goroyong = $('#skor_goroyong').val();
                data.keskor_goroyong = $('#keskor_goroyong').val();
                data.skor_ruangpub = $('#skor_ruangpub').val();
                data.keskor_ruangpub = $('#keskor_ruangpub').val();
                data.skor_fasor = $('#skor_fasor').val();
                data.keskor_fasor = $('#keskor_fasor').val();
                data.skor_keg_or = $('#skor_keg_or').val();
                data.keskor_keg_or = $('#keskor_keg_or').val();
                data.pmks = $('#pmks').val();
                data.kepmks = $('#kepmks').val();
                data.akses_slb = $('#akses_slb').val();
                data.keakses_slb = $('#keakses_slb').val();
                data.poskamling = $('#poskamling').val();
                data.keposkamling = $('#keposkamling').val();
                data.siskamling = $('#siskamling').val();
                data.kesiskamling = $('#kesiskamling').val();
                data.konflik = $('#konflik').val();
                data.kekonflik = $('#kekonflik').val();
                data.penyelesaian_konflik = $('#penyelesaian_konflik').val();
                data.kepenyelesaian_konflik = $('#kepenyelesaian_konflik').val();
                data.akses_minum = $('#akses_minum').val();
                data.keakses_minum = $('#keakses_minum').val();
                data.akses_jamban = $('#keakses_jamban').val();
                data.keakses_jamban = $('#keakses_jamban').val();
                data.persampahan = $('#persampahan').val();
                data.kepersampahan = $('#kepersampahan').val();
                data.akses_mandi_cuci = $('#akses_mandi_cuci').val();
                data.keakses_mandi_cuci = $('#akses_mandi_cuci').val();
                data.akses_listrik = $('#akses_listrik').val();
                data.keakses_listrik = $('#keakses_listrik').val();
                data.akses_sinyal_selular = $('#akses_sinyal_selular').val();
                data.keakses_sinyal_selular = $('#keakses_sinyal_selular').val();
                data.akses_internet = $('#akses_internet').val();
                data.keakses_internet = $('#keakses_internet').val();
                data.skor_keragaman = $('#skor_keragaman').val();
                data.keskor_keragaman = $('#keskor_keragaman').val();
                // ekonomi
                data.skor_lemb_ek = $('#skor_lemb_ek').val();
                data.keskor_lemb_ek = $('#keskor_lemb_ek').val();
                data.skor_minimar = $('#skor_minimar').val();
                data.keskor_minimar = $('#keskor_minimar').val();
                data.skor_warung = $('#skor_warung').val();
                data.keskor_warung = $('#keskor_warung').val();
                data.skor_kedai_makan = $('#skor_kedai_makan').val();
                data.keskor_kedai_makan = $('#keskor_kedai_makan').val();
                data.skor_restoran = $('#skor_restoran').val();
                data.keskor_restoran = $('#keskor_restoran').val();
                data.skor_hotel = $('#skor_hotel').val();
                data.keskor_hotel = $('#keskor_hotel').val();
                data.skor_resto_hotel = $('#skor_resto_hotel').val();
                data.keskor_resto_hotel = $('#keskor_resto_hotel').val();
                data.skor_jarak_ptkoan = $('#skor_jarak_ptkoan').val();
                data.keskor_jarak_ptkoan = $('#keskor_jarak_ptkoan').val();
                data.skor_akses_pasar_semi = $('#skor_akses_pasar_semi').val();
                data.keskor_akses_pasar_semi = $('#keskor_akses_pasar_semi').val();
                data.skor_jalan = $('#skor_jalan').val();
                data.keskor_jalan = $('#keskor_jalan').val();
                data.skor_keterbukaan_fisik = $('#skor_keterbukaan_fisik').val();
                data.keskor_keterbukaan_fisik = $('#keskor_keterbukaan_fisik').val();
                data.skor_angk_umum = $('#skor_angk_umum').val();
                data.keskor_angk_umum = $('#keskor_angk_umum').val();
                data.skor_operasi_au = $('#skor_operasi_au').val();
                data.keskor_operasi_au = $('#keskor_operasi_au').val();
                data.skor_jamoper = $('#skor_jamoper').val();
                data.keskor_jamoper = $('#keskor_jamoper').val();
                data.skor_logistik = $('#skor_logistik').val();
                data.keskor_logistik = $('#keskor_logistik').val();
                data.skor_pos_keliling = $('#skor_pos_keliling').val();
                data.keskor_pos_keliling = $('#keskor_pos_keliling').val();
                data.skor_kredit = $('#skor_kredit').val();
                data.keskor_kredit = $('#keskor_kredit').val();
                data.skor_bank = $('#skor_bank').val();
                data.keskor_bank = $('#keskor_bank').val();
                data.pembuangan_limbah_ke_sungai = $('#pembuangan_limbah_ke_sungai').val();
                data.kepembuangan_limbah_ke_sungai = $('#kepembuangan_limbah_ke_sungai').val();
                data.air = $('#air').val();
                data.keair = $('#keair').val();
                data.tanah = $('#tanah').val();
                data.ketanah = $('#ketanah').val();
                data.udara = $('#udara').val();
                data.keudara = $('#keudara').val();
                data.jumlah = $('#jumlah').val();
                data.kejumlah = $('#kejumlah').val();
                data.skor_kualitas_lingkungan = $('#skor_kualitas_lingkungan').val();
                data.keskor_kualitas_lingkungan = $('#keskor_kualitas_lingkungan').val();
                data.tanah_longsor = $('#tanah_longsor').val();
                data.ketanah_longsor = $('#ketanah_longsor').val();
                data.banjir = $('#banjir').val();
                data.kebanjir = $('#kebanjir').val();
                data.banjir_bandang = $('#banjir_bandang').val();
                data.kebanjir_bandang = $('#kebanjir_bandang').val();
                data.kebakaran_hutan = $('#kebakaran_hutan').val();
                data.kekebakaran_hutan = $('#kekebakaran_hutan').val();
                data.rawan_bencana = $('#rawan_bencana').val();
                data.kerawan_bencana = $('#kerawan_bencana').val();
                data.skor_bencana_alam = $('#skor_bencana_alam').val();
                data.keskor_bencana_alam = $('#keskor_bencana_alam').val();
                data.peringatan_dini = $('#peringatan_dini').val();
                data.keperingatan_dini = $('#keperingatan_dini').val();
                data.peralatan_selamat = $('#peralatan_selamat').val();
                data.keperalatan_selamat = $('#keperalatan_selamat').val();
                data.jalur_evakuasi = $('#jalur_evakuasi').val();
                data.kejalur_evakuasi = $('#kejalur_evakuasi').val();
                data.jml_kesiapan_tb = $('#jml_kesiapan_tb').val();
                data.kejml_kesiapan_tb = $('#kejml_kesiapan_tb').val();
                data.skor_tanggap_bencana = $('#skor_tanggap_bencana').val();
                data.keskor_tanggap_bencana = $('#keskor_tanggap_bencana').val();
                // data. = $('#').val();





            }
        },
		 "fixedHeader": {
            "header": true,
            "footer": true
          },

        //Set column definition initialisation properties.
        "columnDefs": [
        {
            "targets": [ 0 ], //first column / numbering column
            "orderable": false, //set not orderable
        },
        ],

    });



    $('#btn-filter').click(function(){ //button filter event click
        table.ajax.reload();  //just reload table
    });
    $('#btn-cari').click(function(){
        $('#form-tambahan').slideToggle();
    });
    $('#btn-reset').click(function(){ //button reset event click
        $('#form-filter')[0].reset();
        table.ajax.reload();  //just reload table
    });
    $('#confirm-delete').on('show.bs.modal', function(e) {
        $(this).find('.btn-delete').attr('href', $(e.relatedTarget).data('href'));
    });



    $(function(){
  	$.ajaxSetup({
  	type:"POST",
  	url: "<?php echo base_url('desa/ambil_data') ?>",
  	cache: false,
  	});

  	$("#prov").change(function(){
  			var value=$(this).val();
  			if(value>0){
  			$.ajax({
  			data:{modul:'kab',id:value},
  			success: function(respond){
  			$("#kab").html(respond);
  			}
  			})
  			}
  		});

  	$("#kab").change(function(){

  		var value=$(this).val();
  		if(value>0){
  		$.ajax({
  		data:{modul:'kec',id:value},
  		success: function(respond){
  		$("#kec").html(respond);
  		}
  		})
  		}
  	});


  	$("#kec").change(function(){
  		var value=$(this).val();
  		if(value>0){
  		$.ajax({
  		data:{modul:'des',id:value},
  		success: function(respond){
  		$("#des").html(respond);
  		}
  		})
  		}
  	});
})

});

</script>

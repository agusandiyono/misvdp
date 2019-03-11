	<?php if ($this->session->flashdata('error_message')) : ?>
		<div class="alert alert-danger"><?php echo $this->session->flashdata('error_message'); ?></div>
	<?php endif;?>
	<form role="form" method="post" class="form-horizontal form-groups-bordered validate" enctype="multipart/form-data">
		<input type="hidden" name="<?php echo $this->security->get_csrf_token_name() ?>" id="csrf" value="<?php echo $this->security->get_csrf_hash() ?>" />
		<div class="form-group">
			<div class="col-sm-12">
				<span class="text-danger">* Wajib Diisi</span>
			</div>
		</div>
		<div class="form-group">
			<label for="provinsi_id" class="col-sm-3 control-label">Provinsi<span class="text-danger">*</span></label>
			<div class="col-sm-5">
				<?php if(!empty($this->session->userdata('provinsi_id'))): ?>
					<input type="hidden" name="data[provinsi_id]" value="<?php echo $this->session->userdata('provinsi_id') ?>" />
				<?php endif ?>
				<select name="data[provinsi_id]" class="form-control select2" id="provinsi_id" placeholder="provinsi" data-validate="required" data-message-required="kolom provinsi tidak boleh kosong." <?php echo !empty($this->session->userdata('provinsi_id')) ? 'disabled' : "" ?>>
					<option></option>
				<?php foreach ($list_provinsi as $provinsi): ?>
					<option value="<?php echo $provinsi->provinsi_code ?>" <?php echo $provinsi->provinsi_code == $this->session->userdata('provinsi_id') ? "selected" : "" ?>><?php echo $provinsi->provinsi_code ?> - <?php echo $provinsi->provinsi_name ?></option>
				<?php endforeach ?>
				</select>
			</div>
		</div>
		<div class="form-group">
			<label for="kabupaten_id" class="col-sm-3 control-label">Kabupaten<span class="text-danger">*</span></label>
			<div class="col-sm-5">
				<input type="text" name="data[kabupaten_id]" class="form-control" id="kabupaten_id" placeholder="kabupaten" <?php echo !empty($this->session->userdata('kabupaten_id')) ? 'readonly' : "" ?>>
			</div>
		</div>
		<div class="form-group">
			<label for="kecamatan_id" class="col-sm-3 control-label">Kecamatan<span class="text-danger">*</span></label>
			<div class="col-sm-5">
				<input type="text" name="data[kecamatan_id]" class="form-control" id="kecamatan_id" placeholder="kecamatan" <?php echo !empty($this->session->userdata('kecamatan_id')) ? 'readonly' : "" ?>>
			</div>
		</div>
		<div class="form-group">
			<label for="desa_id" class="col-sm-3 control-label">Desa<span class="text-danger">*</span></label>
			<div class="col-sm-5">
				<input type="text" name="data[desa_id]" class="form-control" id="desa_id" placeholder="desa" <?php echo !empty($this->session->userdata('desa_id')) ? 'readonly' : "" ?>>
			</div>
		</div>
		<div class="form-group">
			<label for="tanggal" class="col-sm-3 control-label">Tanggal<span class="text-danger">*</span></label>
			<div class="col-sm-6">
				<input type="text" class="form-control datepicker" data-format="dd-mm-yyyy" id="tanggal" name="data[tanggal]" placeholder="tanggal">
			</div>
		</div>
		<div class="form-group">
			<label for="pengisi" class="col-sm-3 control-label">Nama Pengisi</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="pengisi" name="data[pengisi]" placeholder="Nama Pengisi">
			</div>
		</div>
		<div class="form-group">
			<label for="pekerjaan" class="col-sm-3 control-label">Pekerjaan</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="pekerjaan" name="data[pekerjaan]" placeholder="Pekerjaan">
			</div>
		</div>
		<div class="form-group">
			<label for="jabatan" class="col-sm-3 control-label">Jabatan</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="jabatan" name="data[jabatan]" placeholder="Jabatan">
			</div>
		</div>
		<div class="form-group">
			<label for="sumber_data" class="col-sm-3 control-label">Sumber Data Untuk Mengisi Profil Desa/Kelurahan</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="sumber_data" name="data[detail][sumber_data][1]" placeholder="sumber data 1"><br>
				<input type="text" class="form-control" id="sumber_data" name="data[detail][sumber_data][2]" placeholder="sumber data 2"><br>
				<input type="text" class="form-control" id="sumber_data" name="data[detail][sumber_data][3]" placeholder="sumber data 3"><br>
				<input type="text" class="form-control" id="sumber_data" name="data[detail][sumber_data][4]" placeholder="sumber data 4">
			</div>
		</div>
		<div class="form-group">
			<label for="kepala_desa" class="col-sm-3 control-label">Kepala Desa/Lurah</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="kepala_desa" name="data[detail][kepala_desa]" placeholder="Kepala Desa/Lurah">
			</div>
		</div>

		<div class="form-group">
			<div class="col-md-12">
				<h3>1. Perkembangan Penduduk</h3>
				<h4>A. Jumlah Penduduk</h4>
			</div>
		</div>
		<div class="form-group">
			<label for="jumlah_penduduk_tahun_ini" class="col-sm-3 control-label">Jumlah penduduk tahun ini</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="jumlah_penduduk_tahun_ini_laki" name="data[detail][jumlah_penduduk][tahun_ini][laki]" placeholder="Laki-laki"><br>
				<input type="text" class="form-control" id="jumlah_penduduk_tahun_ini_perempuan" name="data[detail][jumlah_penduduk][tahun_ini][perempuan]" placeholder="Perempuan">
			</div>
		</div>
		<div class="form-group">
			<label for="jumlah_penduduk_tahun_lalu" class="col-sm-3 control-label">Jumlah penduduk tahun lalu</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="jumlah_penduduk_tahun_lalu_laki" name="data[detail][jumlah_penduduk][tahun_lalu][laki]" placeholder="Laki-laki"><br>
				<input type="text" class="form-control" id="jumlah_penduduk_tahun_lalu_perempuan" name="data[detail][jumlah_penduduk][tahun_lalu][perempuan]" placeholder="Perempuan">
			</div>
		</div>
		<div class="form-group">
			<label for="persentase_perkembangan" class="col-sm-3 control-label">Persentase perkembangan</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="persentase_perkembangan_laki" name="data[detail][jumlah_penduduk][persentase][laki]" placeholder="Laki-laki"><br>
				<input type="text" class="form-control" id="persentase_perkembangan_perempuan" name="data[detail][jumlah_penduduk][persentase][perempuan]" placeholder="Perempuan">
			</div>
		</div>

		<div class="form-group">
			<div class="col-md-12">
				<h4>B. Jumlah Keluarga</h4>
			</div>
		</div>
		<div class="form-group">
			<label for="jumlah_kepala_keluarga_tahun_ini" class="col-sm-3 control-label">Jumlah Kepala Keluarga tahun ini</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="jumlah_kepala_keluarga_tahun_ini_laki" name="data[detail][jumlah_keluarga][tahun_ini][laki]" placeholder="Laki-laki"><br>
				<input type="text" class="form-control" id="jumlah_kepala_keluarga_tahun_ini_perempuan" name="data[detail][jumlah_keluarga][tahun_ini][perempuan]" placeholder="Perempuan"><br>
				<input type="text" class="form-control" id="jumlah_kepala_keluarga_tahun_ini_total" name="data[detail][jumlah_keluarga][tahun_ini][total]" placeholder="Jumlah Total">
			</div>
		</div>
		<div class="form-group">
			<label for="jumlah_kepala_keluarga_tahun_lalu" class="col-sm-3 control-label">Jumlah Kepala Keluarga tahun lalu</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="jumlah_kepala_keluarga_tahun_lalu_laki" name="data[detail][jumlah_keluarga][tahun_lalu][laki]" placeholder="Laki-laki"><br>
				<input type="text" class="form-control" id="jumlah_kepala_keluarga_tahun_lalu_perempuan" name="data[detail][jumlah_keluarga][tahun_lalu][perempuan]" placeholder="Perempuan"><br>
				<input type="text" class="form-control" id="jumlah_kepala_keluarga_tahun_lalu_total" name="data[detail][jumlah_keluarga][tahun_lalu][total]" placeholder="Jumlah Total">
			</div>
		</div>
		<div class="form-group">
			<label for="persentase_perkembangan" class="col-sm-3 control-label">Persentase Perkembangan</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="persentase_perkembangan_laki" name="data[detail][jumlah_keluarga][persentase][laki]" placeholder="Laki-laki"><br>
				<input type="text" class="form-control" id="persentase_perkembangan_perempuan" name="data[detail][jumlah_keluarga][persentase][perempuan]" placeholder="Perempuan"><br>
				<input type="text" class="form-control" id="persentase_perkembangan_total" name="data[detail][jumlah_keluarga][persentase][total]" placeholder="Jumlah Total">
			</div>
		</div>

		<div class="form-group">
			<div class="col-md-12">
				<h3>2. Ekonomi Masyarakat</h3>
				<h4>A. Pengangguran</h4>
			</div>
		</div>
		<div class="form-group">
			<label for="ekonomi_pengangguran_angkatan_kerja" class="col-sm-3 control-label">Jumlah angkatan kerja (penduduk usia 18-56 tahun)</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="ekonomi_pengangguran_angkatan_kerja" name="data[detail][ekonomi][pengangguran][angkatan_kerja]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="ekonomi_pengangguran_sekolah" class="col-sm-3 control-label">Jumlah penduduk usia 18-56 tahun yang masih sekolah dan tidak bekerja</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="ekonomi_pengangguran_sekolah" name="data[detail][ekonomi][pengangguran][sekolah]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="ekonomi_pengangguran_menjadi_ibu_rumah_tangga" class="col-sm-3 control-label">Jumlah penduduk usia 18-56 tahun yang menjadi ibu rumah tangga</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="ekonomi_pengangguran_menjadi_ibu_rumah_tangga" name="data[detail][ekonomi][pengangguran][menjadi_ibu_rumah_tangga]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="ekonomi_pengangguran_bekerja_penuh" class="col-sm-3 control-label">Jumlah penduduk usia 18-56 tahun yang bekerja penuh</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="ekonomi_pengangguran_bekerja_penuh" name="data[detail][ekonomi][pengangguran][bekerja_penuh]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="ekonomi_pengangguran_bekerja_tidak_tentu" class="col-sm-3 control-label">Jumlah penduduk usia 18-56 tahun yang bekerja tidak tentu</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="ekonomi_pengangguran_bekerja_tidak_tentu" name="data[detail][ekonomi][pengangguran][bekerja_tidak_tentu]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="ekonomi_pengangguran_cacat_tidak_bekerja" class="col-sm-3 control-label">Jumlah penduduk usia 18-56 tahun yang cacat dan tidak bekerja</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="ekonomi_pengangguran_cacat_tidak_bekerja" name="data[detail][ekonomi][pengangguran][cacat_tidak_bekerja]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="ekonomi_pengangguran_cacat_bekerja" class="col-sm-3 control-label">Jumlah penduduk usia 18-56 tahun yang cacat dan bekerja</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="ekonomi_pengangguran_cacat_bekerja" name="data[detail][ekonomi][pengangguran][cacat_bekerja]" placeholder="Jumlah">
			</div>
		</div>

		<div class="form-group">
			<div class="col-md-12">
				<h4>B. Kesejahteraan Keluarga</h4>
			</div>
		</div>
		<div class="form-group">
			<label for="ekonomi_kesejahteraan_prasejahtera" class="col-sm-3 control-label">Jumlah keluarga prasejahtera</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="ekonomi_kesejahteraan_prasejahtera" name="data[detail][ekonomi][kesejahteraan][prasejahtera]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="ekonomi_kesejahteraan_sejahtera_1" class="col-sm-3 control-label">Jumlah keluarga sejahtera 1</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="ekonomi_kesejahteraan_sejahtera_1" name="data[detail][ekonomi][kesejahteraan][sejahtera_1]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="ekonomi_kesejahteraan_sejahtera_2" class="col-sm-3 control-label">Jumlah keluarga sejahtera 2</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="ekonomi_kesejahteraan_sejahtera_2" name="data[detail][ekonomi][kesejahteraan][sejahtera_2]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="ekonomi_kesejahteraan_sejahtera_3" class="col-sm-3 control-label">Jumlah keluarga sejahtera 3</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="ekonomi_kesejahteraan_sejahtera_3" name="data[detail][ekonomi][kesejahteraan][sejahtera_3]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="ekonomi_kesejahteraan_sejahtera_3_plus" class="col-sm-3 control-label">Jumlah keluarga sejahtera 3 plus</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="ekonomi_kesejahteraan_sejahtera_3_plus" name="data[detail][ekonomi][kesejahteraan][sejahtera_3_plus]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="ekonomi_kesejahteraan_jumlah_kk" class="col-sm-3 control-label">Total jumlah kepala keluarga</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="ekonomi_kesejahteraan_jumlah_kk" name="data[detail][ekonomi][kesejahteraan][jumlah_kk]" placeholder="Jumlah">
			</div>
		</div>

		<div class="form-group">
			<div class="col-md-12">
				<h3>3. Produk Domestik Desa/kelurahan Bruto</h3>
			</div>
		</div>
		<div class="form-group">
			<label for="produksi_industri_galian" class="col-sm-3 control-label">Sektor Pertambangan dan Galian</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="produksi_industri_galian" name="data[detail][industri][galian][jumlah]" placeholder="Jumlah Jenis Sektor Usaha"><br>
				<input type="text" class="form-control" id="produksi_industri_galian" name="data[detail][industri][galian][nilai]" placeholder="Nilai Produksi Tahun Ini"><br>
				<input type="text" class="form-control" id="produksi_industri_galian" name="data[detail][industri][galian][bahan_baku]" placeholder="Nilai Bahan Baku"><br>
				<input type="text" class="form-control" id="produksi_industri_galian" name="data[detail][industri][galian][bahan_penolong]" placeholder="Nilai Bahan Penolong"><br>
				<input type="text" class="form-control" id="produksi_industri_galian" name="data[detail][industri][galian][biaya_antara]" placeholder="Biaya Antara">
			</div>
		</div>
		<div class="form-group">
			<label for="produksi_industri_kerajinan" class="col-sm-3 control-label">Subsektor Kerajinan</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="produksi_industri_kerajinan" name="data[detail][industri][kerajinan][jumlah]" placeholder="Jumlah Jenis Sektor Usaha"><br>
				<input type="text" class="form-control" id="produksi_industri_kerajinan" name="data[detail][industri][kerajinan][nilai]" placeholder="Nilai Produksi Tahun Ini"><br>
				<input type="text" class="form-control" id="produksi_industri_kerajinan" name="data[detail][industri][kerajinan][bahan_baku]" placeholder="Nilai Bahan Baku"><br>
				<input type="text" class="form-control" id="produksi_industri_kerajinan" name="data[detail][industri][kerajinan][bahan_penolong]" placeholder="Nilai Bahan Penolong"><br>
				<input type="text" class="form-control" id="produksi_industri_kerajinan" name="data[detail][industri][kerajinan][biaya_antara]" placeholder="Biaya Antara">
			</div>
		</div>
		<div class="form-group">
			<label for="produksi_industri_pengolahan" class="col-sm-3 control-label">Sektor Industri Pengolahan</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="produksi_industri_pengolahan" name="data[detail][industri][pengolahan][jumlah]" placeholder="Jumlah Jenis Sektor Usaha"><br>
				<input type="text" class="form-control" id="produksi_industri_pengolahan" name="data[detail][industri][pengolahan][nilai]" placeholder="Nilai Produksi Tahun Ini"><br>
				<input type="text" class="form-control" id="produksi_industri_pengolahan" name="data[detail][industri][pengolahan][bahan_baku]" placeholder="Nilai Bahan Baku"><br>
				<input type="text" class="form-control" id="produksi_industri_pengolahan" name="data[detail][industri][pengolahan][bahan_penolong]" placeholder="Nilai Bahan Penolong"><br>
				<input type="text" class="form-control" id="produksi_industri_pengolahan" name="data[detail][industri][pengolahan][biaya_antara]" placeholder="Biaya Antara">
			</div>
		</div>
		<div class="form-group">
			<label for="produksi_industri_pakaian" class="col-sm-3 control-label">Subsektor Industri Pakaian</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="produksi_industri_pakaian" name="data[detail][industri][pakaian][jumlah]" placeholder="Jumlah Jenis Sektor Usaha"><br>
				<input type="text" class="form-control" id="produksi_industri_pakaian" name="data[detail][industri][pakaian][nilai]" placeholder="Nilai Produksi Tahun Ini"><br>
				<input type="text" class="form-control" id="produksi_industri_pakaian" name="data[detail][industri][pakaian][bahan_baku]" placeholder="Nilai Bahan Baku"><br>
				<input type="text" class="form-control" id="produksi_industri_pakaian" name="data[detail][industri][pakaian][bahan_penolong]" placeholder="Nilai Bahan Penolong"><br>
				<input type="text" class="form-control" id="produksi_industri_pakaian" name="data[detail][industri][pakaian][biaya_antara]" placeholder="Biaya Antara">
			</div>
		</div>
		<div class="form-group">
			<label for="produksi_industri_pangan" class="col-sm-3 control-label">Subsektor Industri Pangan</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="produksi_industri_pangan" name="data[detail][industri][pangan][jumlah]" placeholder="Jumlah Jenis Sektor Usaha"><br>
				<input type="text" class="form-control" id="produksi_industri_pangan" name="data[detail][industri][pangan][nilai]" placeholder="Nilai Produksi Tahun Ini"><br>
				<input type="text" class="form-control" id="produksi_industri_pangan" name="data[detail][industri][pangan][bahan_baku]" placeholder="Nilai Bahan Baku"><br>
				<input type="text" class="form-control" id="produksi_industri_pangan" name="data[detail][industri][pangan][bahan_penolong]" placeholder="Nilai Bahan Penolong"><br>
				<input type="text" class="form-control" id="produksi_industri_pangan" name="data[detail][industri][pangan][biaya_antara]" placeholder="Biaya Antara">
			</div>
		</div>
		<div class="form-group">
			<label for="produksi_industri_migas" class="col-sm-3 control-label">Industri Pengolahan Migas</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="produksi_industri_migas" name="data[detail][industri][migas][jumlah]" placeholder="Jumlah Jenis Sektor Usaha"><br>
				<input type="text" class="form-control" id="produksi_industri_migas" name="data[detail][industri][migas][nilai]" placeholder="Nilai Produksi Tahun Ini"><br>
				<input type="text" class="form-control" id="produksi_industri_migas" name="data[detail][industri][migas][bahan_baku]" placeholder="Nilai Bahan Baku"><br>
				<input type="text" class="form-control" id="produksi_industri_migas" name="data[detail][industri][migas][bahan_penolong]" placeholder="Nilai Bahan Penolong"><br>
				<input type="text" class="form-control" id="produksi_industri_migas" name="data[detail][industri][migas][biaya_antara]" placeholder="Biaya Antara">
			</div>
		</div>
		<div class="form-group">
			<label for="produksi_industri_non_migas" class="col-sm-3 control-label">Industri Pengolahan Non Migas</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="produksi_industri_non_migas" name="data[detail][industri][non_migas][jumlah]" placeholder="Jumlah Jenis Sektor Usaha"><br>
				<input type="text" class="form-control" id="produksi_industri_non_migas" name="data[detail][industri][non_migas][nilai]" placeholder="Nilai Produksi Tahun Ini"><br>
				<input type="text" class="form-control" id="produksi_industri_non_migas" name="data[detail][industri][non_migas][bahan_baku]" placeholder="Nilai Bahan Baku"><br>
				<input type="text" class="form-control" id="produksi_industri_non_migas" name="data[detail][industri][non_migas][bahan_penolong]" placeholder="Nilai Bahan Penolong"><br>
				<input type="text" class="form-control" id="produksi_industri_non_migas" name="data[detail][industri][non_migas][biaya_antara]" placeholder="Biaya Antara">
			</div>
		</div>
		<div class="form-group">
			<label for="produksi_industri_lainnya" class="col-sm-3 control-label">Industri Lainnya</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="produksi_industri_lainnya" name="data[detail][industri][lainnya][keterangan]" placeholder="Keterangan"><br>
				<input type="text" class="form-control" id="produksi_industri_lainnya" name="data[detail][industri][lainnya][jumlah]" placeholder="Jumlah Jenis Sektor Usaha"><br>
				<input type="text" class="form-control" id="produksi_industri_lainnya" name="data[detail][industri][lainnya][nilai]" placeholder="Nilai Produksi Tahun Ini"><br>
				<input type="text" class="form-control" id="produksi_industri_lainnya" name="data[detail][industri][lainnya][bahan_baku]" placeholder="Nilai Bahan Baku"><br>
				<input type="text" class="form-control" id="produksi_industri_lainnya" name="data[detail][industri][lainnya][bahan_penolong]" placeholder="Nilai Bahan Penolong"><br>
				<input type="text" class="form-control" id="produksi_industri_lainnya" name="data[detail][industri][lainnya][biaya_antara]" placeholder="Biaya Antara">
			</div>
		</div>
		<div class="form-group">
			<label for="produksi_industri_kehutanan" class="col-sm-3 control-label">Subsektor Kehutanan</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="produksi_industri_kehutanan" name="data[detail][industri][kehutanan][jumlah]" placeholder="Jumlah Jenis Sektor Usaha"><br>
				<input type="text" class="form-control" id="produksi_industri_kehutanan" name="data[detail][industri][kehutanan][nilai]" placeholder="Nilai Produksi Tahun Ini"><br>
				<input type="text" class="form-control" id="produksi_industri_kehutanan" name="data[detail][industri][kehutanan][bahan_baku]" placeholder="Nilai Bahan Baku"><br>
				<input type="text" class="form-control" id="produksi_industri_kehutanan" name="data[detail][industri][kehutanan][bahan_penolong]" placeholder="Nilai Bahan Penolong"><br>
				<input type="text" class="form-control" id="produksi_industri_kehutanan" name="data[detail][industri][kehutanan][biaya_antara]" placeholder="Biaya Antara">
			</div>
		</div>

		<div class="form-group">
			<div class="col-md-12">
				<h4>A. Sektor Perdagangan, Hotel Dan Restoran</h4>
			</div>
		</div>
		<div class="form-group">
			<label for="produksi_perdagangan_perdagangan_besar" class="col-sm-3 control-label">Subsektor Perdagangan Besar</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="produksi_perdagangan_perdagangan_besar" name="data[detail][perdagangan][perdagangan_besar][jenis]" placeholder="Jumlah Jenis Usaha"><br>
				<input type="text" class="form-control" id="produksi_perdagangan_perdagangan_besar" name="data[detail][perdagangan][perdagangan_besar][jumlah_transaksi]" placeholder="Jumlah Transaksi"><br>
				<input type="text" class="form-control" id="produksi_perdagangan_perdagangan_besar" name="data[detail][perdagangan][perdagangan_besar][nilai_aset]" placeholder="Nilai Aset"><br>
				<input type="text" class="form-control" id="produksi_perdagangan_perdagangan_besar" name="data[detail][perdagangan][perdagangan_besar][nilai_produksi]" placeholder="Nilai Produksi"><br>
				<input type="text" class="form-control" id="produksi_perdagangan_perdagangan_besar" name="data[detail][perdagangan][perdagangan_besar][nilai_transaksi]" placeholder="Nilai Transaksi"><br>
				<input type="text" class="form-control" id="produksi_perdagangan_perdagangan_besar" name="data[detail][perdagangan][perdagangan_besar][nilai_biaya]" placeholder="Nilai Biaya"><br>
				<input type="text" class="form-control" id="produksi_perdagangan_perdagangan_besar" name="data[detail][perdagangan][perdagangan_besar][nilai_biaya_lainnya]" placeholder="Nilai Biaya Lainnya"><br>
				<input type="text" class="form-control" id="produksi_perdagangan_perdagangan_besar" name="data[detail][perdagangan][perdagangan_besar][jumlah_pendapatan]" placeholder="Jumlah Pendapatan">
			</div>
		</div>
		<div class="form-group">
			<label for="produksi_perdagangan_perdagangan_eceran" class="col-sm-3 control-label">Subsektor Perdagangan Eceran</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="produksi_perdagangan_perdagangan_eceran" name="data[detail][perdagangan][perdagangan_eceran][jenis]" placeholder="Jumlah Jenis Usaha"><br>
				<input type="text" class="form-control" id="produksi_perdagangan_perdagangan_eceran" name="data[detail][perdagangan][perdagangan_eceran][jumlah_transaksi]" placeholder="Jumlah Transaksi"><br>
				<input type="text" class="form-control" id="produksi_perdagangan_perdagangan_eceran" name="data[detail][perdagangan][perdagangan_eceran][nilai_aset]" placeholder="Nilai Aset"><br>
				<input type="text" class="form-control" id="produksi_perdagangan_perdagangan_eceran" name="data[detail][perdagangan][perdagangan_eceran][nilai_produksi]" placeholder="Nilai Produksi"><br>
				<input type="text" class="form-control" id="produksi_perdagangan_perdagangan_eceran" name="data[detail][perdagangan][perdagangan_eceran][nilai_transaksi]" placeholder="Nilai Transaksi"><br>
				<input type="text" class="form-control" id="produksi_perdagangan_perdagangan_eceran" name="data[detail][perdagangan][perdagangan_eceran][nilai_biaya]" placeholder="Nilai Biaya"><br>
				<input type="text" class="form-control" id="produksi_perdagangan_perdagangan_eceran" name="data[detail][perdagangan][perdagangan_eceran][nilai_biaya_lainnya]" placeholder="Nilai Biaya Lainnya"><br>
				<input type="text" class="form-control" id="produksi_perdagangan_perdagangan_eceran" name="data[detail][perdagangan][perdagangan_eceran][jumlah_pendapatan]" placeholder="Jumlah Pendapatan">
			</div>
		</div>
		<div class="form-group">
			<label for="produksi_perdagangan_hotel" class="col-sm-3 control-label">Subsektor Hotel</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="produksi_perdagangan_hotel" name="data[detail][perdagangan][hotel][jenis]" placeholder="Jumlah Jenis Usaha"><br>
				<input type="text" class="form-control" id="produksi_perdagangan_hotel" name="data[detail][perdagangan][hotel][jumlah_transaksi]" placeholder="Jumlah Transaksi"><br>
				<input type="text" class="form-control" id="produksi_perdagangan_hotel" name="data[detail][perdagangan][hotel][nilai_aset]" placeholder="Nilai Aset"><br>
				<input type="text" class="form-control" id="produksi_perdagangan_hotel" name="data[detail][perdagangan][hotel][nilai_produksi]" placeholder="Nilai Produksi"><br>
				<input type="text" class="form-control" id="produksi_perdagangan_hotel" name="data[detail][perdagangan][hotel][nilai_transaksi]" placeholder="Nilai Transaksi"><br>
				<input type="text" class="form-control" id="produksi_perdagangan_hotel" name="data[detail][perdagangan][hotel][nilai_biaya]" placeholder="Nilai Biaya"><br>
				<input type="text" class="form-control" id="produksi_perdagangan_hotel" name="data[detail][perdagangan][hotel][nilai_biaya_lainnya]" placeholder="Nilai Biaya Lainnya"><br>
				<input type="text" class="form-control" id="produksi_perdagangan_hotel" name="data[detail][perdagangan][hotel][jumlah_pendapatan]" placeholder="Jumlah Pendapatan">
			</div>
		</div>
		<div class="form-group">
			<label for="produksi_perdagangan_restoran" class="col-sm-3 control-label">Subsektor Restoran</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="produksi_perdagangan_restoran" name="data[detail][perdagangan][restoran][jenis]" placeholder="Jumlah Jenis Usaha"><br>
				<input type="text" class="form-control" id="produksi_perdagangan_restoran" name="data[detail][perdagangan][restoran][jumlah_transaksi]" placeholder="Jumlah Transaksi"><br>
				<input type="text" class="form-control" id="produksi_perdagangan_restoran" name="data[detail][perdagangan][restoran][nilai_aset]" placeholder="Nilai Aset"><br>
				<input type="text" class="form-control" id="produksi_perdagangan_restoran" name="data[detail][perdagangan][restoran][nilai_produksi]" placeholder="Nilai Produksi"><br>
				<input type="text" class="form-control" id="produksi_perdagangan_restoran" name="data[detail][perdagangan][restoran][nilai_transaksi]" placeholder="Nilai Transaksi"><br>
				<input type="text" class="form-control" id="produksi_perdagangan_restoran" name="data[detail][perdagangan][restoran][nilai_biaya]" placeholder="Nilai Biaya"><br>
				<input type="text" class="form-control" id="produksi_perdagangan_restoran" name="data[detail][perdagangan][restoran][nilai_biaya_lainnya]" placeholder="Nilai Biaya Lainnya"><br>
				<input type="text" class="form-control" id="produksi_perdagangan_restoran" name="data[detail][perdagangan][restoran][jumlah_pendapatan]" placeholder="Jumlah Pendapatan">
			</div>
		</div>
		<div class="form-group">
			<label for="produksi_perdagangan_konstruksi" class="col-sm-3 control-label">Sektor Bangunan/Konstruksi</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="produksi_perdagangan_konstruksi" name="data[detail][perdagangan][konstruksi][jenis]" placeholder="Jumlah Jenis Usaha"><br>
				<input type="text" class="form-control" id="produksi_perdagangan_konstruksi" name="data[detail][perdagangan][konstruksi][jumlah_transaksi]" placeholder="Jumlah Transaksi"><br>
				<input type="text" class="form-control" id="produksi_perdagangan_konstruksi" name="data[detail][perdagangan][konstruksi][nilai_aset]" placeholder="Nilai Aset"><br>
				<input type="text" class="form-control" id="produksi_perdagangan_konstruksi" name="data[detail][perdagangan][konstruksi][nilai_transaksi]" placeholder="Nilai Transaksi"><br>
				<input type="text" class="form-control" id="produksi_perdagangan_konstruksi" name="data[detail][perdagangan][konstruksi][nilai_biaya]" placeholder="Nilai Biaya"><br>
				<input type="text" class="form-control" id="produksi_perdagangan_konstruksi" name="data[detail][perdagangan][konstruksi][nilai_biaya_lainnya]" placeholder="Nilai Biaya Lainnya"><br>
			</div>
		</div>

		<div class="form-group">
			<div class="col-md-12">
				<h4>B. Sektor Keuangan, Persewaan dan Jasa Perusahaan</h4>
			</div>
		</div>
		<div class="form-group">
			<label for="produksi_keuangan_bank" class="col-sm-3 control-label">Subsektor Bank</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="produksi_keuangan_bank" name="data[detail][keuangan][bank][jenis]" placeholder="Jumlah Jenis Usaha"><br>
				<input type="text" class="form-control" id="produksi_keuangan_bank" name="data[detail][keuangan][bank][jumlah_transaksi]" placeholder="Jumlah Transaksi"><br>
				<input type="text" class="form-control" id="produksi_keuangan_bank" name="data[detail][keuangan][bank][nilai_produksi]" placeholder="Nilai Produksi"><br>
				<input type="text" class="form-control" id="produksi_keuangan_bank" name="data[detail][keuangan][bank][nilai_transaksi]" placeholder="Nilai Transaksi"><br>
				<input type="text" class="form-control" id="produksi_keuangan_bank" name="data[detail][keuangan][bank][nilai_biaya]" placeholder="Nilai Biaya"><br>
				<input type="text" class="form-control" id="produksi_keuangan_bank" name="data[detail][keuangan][bank][nilai_biaya_lainnya]" placeholder="Nilai Biaya Lainnya">
			</div>
		</div>
		<div class="form-group">
			<label for="produksi_keuangan_bukan_bank" class="col-sm-3 control-label">Subsektor lembaga keuangan bukan bank</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="produksi_keuangan_bukan_bank" name="data[detail][keuangan][bukan_bank][jenis]" placeholder="Jumlah Jenis Usaha"><br>
				<input type="text" class="form-control" id="produksi_keuangan_bukan_bank" name="data[detail][keuangan][bukan_bank][jumlah_transaksi]" placeholder="Jumlah Transaksi">
				<input type="text" class="form-control" id="produksi_keuangan_bukan_bank" name="data[detail][keuangan][bukan_bank][nilai_produksi]" placeholder="Nilai Produksi"><br>
				<input type="text" class="form-control" id="produksi_keuangan_bukan_bank" name="data[detail][keuangan][bukan_bank][nilai_transaksi]" placeholder="Nilai Transaksi"><br>
				<input type="text" class="form-control" id="produksi_keuangan_bukan_bank" name="data[detail][keuangan][bukan_bank][nilai_biaya]" placeholder="Nilai Biaya">
			</div>
		</div>
		<div class="form-group">
			<label for="produksi_keuangan_sewa_bangunan" class="col-sm-3 control-label">Subsektor Sewa Bangunan</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="produksi_keuangan_sewa_bangunan" name="data[detail][keuangan][sewa_bangunan][jenis]" placeholder="Jumlah Jenis Usaha"><br>
				<input type="text" class="form-control" id="produksi_keuangan_sewa_bangunan" name="data[detail][keuangan][sewa_bangunan][nilai_produksi]" placeholder="Nilai Produksi"><br>
				<input type="text" class="form-control" id="produksi_keuangan_sewa_bangunan" name="data[detail][keuangan][sewa_bangunan][nilai_transaksi]" placeholder="Nilai Transaksi"><br>
				<input type="text" class="form-control" id="produksi_keuangan_sewa_bangunan" name="data[detail][keuangan][sewa_bangunan][nilai_biaya]" placeholder="Nilai Biaya"><br>
				<input type="text" class="form-control" id="produksi_keuangan_sewa_bangunan" name="data[detail][keuangan][sewa_bangunan][nilai_biaya_lainnya]" placeholder="Nilai Biaya Lainnya">
			</div>
		</div>
		<div class="form-group">
			<label for="produksi_keuangan_jasa_perusahaan" class="col-sm-3 control-label">Subsektor Jasa Perusahaan</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="produksi_keuangan_jasa_perusahaan" name="data[detail][keuangan][jasa_perusahaan][jenis]" placeholder="Jumlah Jenis Usaha"><br>
				<input type="text" class="form-control" id="produksi_keuangan_jasa_perusahaan" name="data[detail][keuangan][jasa_perusahaan][nilai_produksi]" placeholder="Nilai Produksi"><br>
				<input type="text" class="form-control" id="produksi_keuangan_jasa_perusahaan" name="data[detail][keuangan][jasa_perusahaan][nilai_transaksi]" placeholder="Nilai Transaksi"><br>
				<input type="text" class="form-control" id="produksi_keuangan_jasa_perusahaan" name="data[detail][keuangan][jasa_perusahaan][nilai_biaya]" placeholder="Nilai Biaya"><br>
				<input type="text" class="form-control" id="produksi_keuangan_jasa_perusahaan" name="data[detail][keuangan][jasa_perusahaan][nilai_biaya_lainnya]" placeholder="Nilai Biaya Lainnya">
			</div>
		</div>

		<div class="form-group">
			<div class="col-md-12">
				<h4>C. Sektor Jasa-Jasa</h4>
			</div>
		</div>
		<div class="form-group">
			<label for="produksi_jasa_pemerintahan" class="col-sm-3 control-label">Subsektor Jasa Pemerintahan Umum</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="produksi_jasa_pemerintahan" name="data[detail][jasa][pemerintahan][jenis]" placeholder="Jumlah Jenis Usaha"><br>
				<input type="text" class="form-control" id="produksi_jasa_pemerintahan" name="data[detail][jasa][pemerintahan][nilai_produksi]" placeholder="Nilai Produksi"><br>
				<input type="text" class="form-control" id="produksi_jasa_pemerintahan" name="data[detail][jasa][pemerintahan][nilai_transaksi]" placeholder="Nilai Transaksi"><br>
				<input type="text" class="form-control" id="produksi_jasa_pemerintahan" name="data[detail][jasa][pemerintahan][nilai_biaya]" placeholder="Nilai Biaya">
			</div>
		</div>
		<div class="form-group">
			<label for="produksi_jasa_swasta" class="col-sm-3 control-label">Subsektor Jasa Swasta</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="produksi_jasa_swasta" name="data[detail][jasa][swasta][jenis]" placeholder="Jumlah Jenis Usaha"><br>
				<input type="text" class="form-control" id="produksi_jasa_swasta" name="data[detail][jasa][swasta][nilai_aset]" placeholder="Nilai Aset"><br>
				<input type="text" class="form-control" id="produksi_jasa_swasta" name="data[detail][jasa][swasta][nilai_biaya]" placeholder="Nilai Biaya">
			</div>
		</div>
		<div class="form-group">
			<label for="produksi_jasa_hiburan" class="col-sm-3 control-label">Subsektor Jasa Hiburan Dan Rekreasi</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="produksi_jasa_hiburan" name="data[detail][jasa][hiburan][jenis]" placeholder="Jumlah Jenis Usaha"><br>
				<input type="text" class="form-control" id="produksi_jasa_hiburan" name="data[detail][jasa][hiburan][nilai_produksi]" placeholder="Nilai Produksi"><br>
				<input type="text" class="form-control" id="produksi_jasa_hiburan" name="data[detail][jasa][hiburan][nilai_transaksi]" placeholder="Nilai Transaksi"><br>
				<input type="text" class="form-control" id="produksi_jasa_hiburan" name="data[detail][jasa][hiburan][nilai_biaya]" placeholder="Nilai Biaya">
			</div>
		</div>
		<div class="form-group">
			<label for="produksi_jasa_perorangan" class="col-sm-3 control-label">Subsektor Jasa Perorangan Dan Rumah Tangga</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="produksi_jasa_perorangan" name="data[detail][jasa][perorangan][jenis]" placeholder="Jumlah Jenis Usaha"><br>
				<input type="text" class="form-control" id="produksi_jasa_perorangan" name="data[detail][jasa][perorangan][nilai_aset]" placeholder="Nilai Aset"><br>
				<input type="text" class="form-control" id="produksi_jasa_perorangan" name="data[detail][jasa][perorangan][nilai_produksi]" placeholder="Nilai Produksi"><br>
				<input type="text" class="form-control" id="produksi_jasa_perorangan" name="data[detail][jasa][perorangan][nilai_transaksi]" placeholder="Nilai Transaksi"><br>
				<input type="text" class="form-control" id="produksi_jasa_perorangan" name="data[detail][jasa][perorangan][nilai_biaya]" placeholder="Nilai Biaya">
			</div>
		</div>

		<div class="form-group">
			<div class="col-md-12">
				<h4>D. Sektor Angkutan Dan Komunikasi</h4>
			</div>
		</div>
		<div class="form-group">
			<label for="produksi_transportasi_angkutan" class="col-sm-3 control-label">Subsektor Angkutan</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="produksi_transportasi_angkutan" name="data[detail][transportasi][angkutan][jenis]" placeholder="Jumlah Jenis Usaha"><br>
				<input type="text" class="form-control" id="produksi_transportasi_angkutan" name="data[detail][transportasi][angkutan][jumlah_transaksi]" placeholder="Jumlah Transaksi"><br>
				<input type="text" class="form-control" id="produksi_transportasi_angkutan" name="data[detail][transportasi][angkutan][nilai_produksi]" placeholder="Nilai Produksi"><br>
				<input type="text" class="form-control" id="produksi_transportasi_angkutan" name="data[detail][transportasi][angkutan][nilai_transaksi]" placeholder="Nilai Transaksi"><br>
				<input type="text" class="form-control" id="produksi_transportasi_angkutan" name="data[detail][transportasi][angkutan][nilai_biaya]" placeholder="Nilai Biaya">
			</div>
		</div>
		<div class="form-group">
			<label for="produksi_transportasi_penunjang_angkutan" class="col-sm-3 control-label">Subsektor jasa Penunjang angkutan</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="produksi_transportasi_penunjang_angkutan" name="data[detail][transportasi][penunjang_angkutan][jenis]" placeholder="Jumlah Jenis Usaha"><br>
				<input type="text" class="form-control" id="produksi_transportasi_penunjang_angkutan" name="data[detail][transportasi][penunjang_angkutan][nilai_produksi]" placeholder="Nilai Produksi"><br>
				<input type="text" class="form-control" id="produksi_transportasi_penunjang_angkutan" name="data[detail][transportasi][penunjang_angkutan][nilai_transaksi]" placeholder="Nilai Transaksi"><br>
				<input type="text" class="form-control" id="produksi_transportasi_penunjang_angkutan" name="data[detail][transportasi][penunjang_angkutan][nilai_biaya]" placeholder="Nilai Biaya">
			</div>
		</div>
		<div class="form-group">
			<label for="produksi_transportasi_komunikasi" class="col-sm-3 control-label">Subsektor Komunikasi</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="produksi_transportasi_komunikasi" name="data[detail][transportasi][komunikasi][jenis]" placeholder="Jumlah Jenis Usaha"><br>
				<input type="text" class="form-control" id="produksi_transportasi_komunikasi" name="data[detail][transportasi][komunikasi][nilai_aset]" placeholder="Nilai Aset"><br>
				<input type="text" class="form-control" id="produksi_transportasi_komunikasi" name="data[detail][transportasi][komunikasi][nilai_produksi]" placeholder="Nilai Produksi"><br>
				<input type="text" class="form-control" id="produksi_transportasi_komunikasi" name="data[detail][transportasi][komunikasi][nilai_transaksi]" placeholder="Nilai Transaksi"><br>
				<input type="text" class="form-control" id="produksi_transportasi_komunikasi" name="data[detail][transportasi][komunikasi][nilai_biaya]" placeholder="Nilai Biaya">
			</div>
		</div>

		<div class="form-group">
			<div class="col-md-12">
				<h4>E. Sektor Listrik, Gas & Air Minum</h4>
			</div>
		</div>
		<div class="form-group">
			<label for="produksi_lgam_listrik" class="col-sm-3 control-label">Subsektor Listrik</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="produksi_lgam_listrik" name="data[detail][lgam][listrik][jenis]" placeholder="Jumlah Jenis Usaha"><br>
				<input type="text" class="form-control" id="produksi_lgam_listrik" name="data[detail][lgam][listrik][nilai_aset]" placeholder="Nilai Aset"><br>
				<input type="text" class="form-control" id="produksi_lgam_listrik" name="data[detail][lgam][listrik][nilai_produksi]" placeholder="Nilai Produksi"><br>
				<input type="text" class="form-control" id="produksi_lgam_listrik" name="data[detail][lgam][listrik][nilai_transaksi]" placeholder="Nilai Transaksi"><br>
				<input type="text" class="form-control" id="produksi_lgam_listrik" name="data[detail][lgam][listrik][nilai_biaya]" placeholder="Nilai Biaya">
			</div>
		</div>
		<div class="form-group">
			<label for="produksi_lgam_gas" class="col-sm-3 control-label">Subsektor Gas</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="produksi_lgam_gas" name="data[detail][lgam][gas][jenis]" placeholder="Jumlah Jenis Usaha"><br>
				<input type="text" class="form-control" id="produksi_lgam_gas" name="data[detail][lgam][gas][nilai_aset]" placeholder="Nilai Aset"><br>
				<input type="text" class="form-control" id="produksi_lgam_gas" name="data[detail][lgam][gas][nilai_produksi]" placeholder="Nilai Produksi"><br>
				<input type="text" class="form-control" id="produksi_lgam_gas" name="data[detail][lgam][gas][nilai_transaksi]" placeholder="Nilai Transaksi"><br>
				<input type="text" class="form-control" id="produksi_lgam_gas" name="data[detail][lgam][gas][nilai_biaya]" placeholder="Nilai Biaya">
			</div>
		</div>
		<div class="form-group">
			<label for="produksi_lgam_air_minum" class="col-sm-3 control-label">Subsektor Air Minum</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="produksi_lgam_air_minum" name="data[detail][lgam][air_minum][jenis]" placeholder="Jumlah Jenis Usaha"><br>
				<input type="text" class="form-control" id="produksi_lgam_air_minum" name="data[detail][lgam][air_minum][nilai_aset]" placeholder="Nilai Aset"><br>
				<input type="text" class="form-control" id="produksi_lgam_air_minum" name="data[detail][lgam][air_minum][nilai_produksi]" placeholder="Nilai Produksi"><br>
				<input type="text" class="form-control" id="produksi_lgam_air_minum" name="data[detail][lgam][air_minum][nilai_transaksi]" placeholder="Nilai Transaksi"><br>
				<input type="text" class="form-control" id="produksi_lgam_air_minum" name="data[detail][lgam][air_minum][nilai_biaya]" placeholder="Nilai Biaya">
			</div>
		</div>
		<div class="form-group">
			<label for="produksi_total_pdd" class="col-sm-3 control-label">NILAI TOTAL PENDAPATAN DOMESTIK DESA / KELURAHAN BRUTO DARI SEMUA SEKTOR (% total nilai produksi dan transaksi terhadap total biaya yang dikeluarkan dari semua</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="produksi_total_pdd" name="data[detail][total_pdd][nilai_produksi]" placeholder="Nilai Produksi"><br>
				<input type="text" class="form-control" id="produksi_total_pdd" name="data[detail][total_pdd][nilai_transaksi]" placeholder="Nilai Transaksi"><br>
				<input type="text" class="form-control" id="produksi_total_pdd" name="data[detail][total_pdd][nilai_biaya]" placeholder="Nilai Biaya"><br>
				<input type="text" class="form-control" id="produksi_total_pdd" name="data[detail][total_pdd][nilai_biaya_lainnya]" placeholder="Nilai Biaya Lainnya"><br>
				<input type="text" class="form-control" id="produksi_total_pdd" name="data[detail][total_pdd][jumlah_pendapatan]" placeholder="Jumlah Pendapatan">
			</div>
		</div>

		<div class="form-group">
			<div class="col-md-12">
				<h3>4. Pendapatan Perkapita</h3>
				<h4>A. Pendapatan perkapita menurut sektor usaha</h4>
			</div>
		</div>
		<div class="form-group">
			<label for="pendapatan_kapita_pertanian" class="col-sm-3 control-label">Pertanian</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="pendapatan_kapita_pertanian" name="data[detail][pendapatan_kapita][pertanian][jumlah_rt]" placeholder="Jumlah Rumah Tangga"><br>
				<input type="text" class="form-control" id="pendapatan_kapita_pertanian" name="data[detail][pendapatan_kapita][pertanian][jumlah_art]" placeholder="Jumlah Anggota Rumah Tangga"><br>
				<input type="text" class="form-control" id="pendapatan_kapita_pertanian" name="data[detail][pendapatan_kapita][pertanian][jumlah_rtb]" placeholder="Jumlah Rumah Tangga Buruh"><br>
				<input type="text" class="form-control" id="pendapatan_kapita_pertanian" name="data[detail][pendapatan_kapita][pertanian][jumlah_artb]" placeholder="Jumlah Anggota Rumah Tangga Buruh"><br>
				<input type="text" class="form-control" id="pendapatan_kapita_pertanian" name="data[detail][pendapatan_kapita][pertanian][jumlah_pendapatan]" placeholder="Jumlah Pendapatan Perkapita">
			</div>
		</div>
		<div class="form-group">
			<label for="pendapatan_kapita_perkebunan" class="col-sm-3 control-label">Perkebunan</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="pendapatan_kapita_perkebunan" name="data[detail][pendapatan_kapita][perkebunan][jumlah_rt]" placeholder="Jumlah Rumah Tangga"><br>
				<input type="text" class="form-control" id="pendapatan_kapita_perkebunan" name="data[detail][pendapatan_kapita][perkebunan][jumlah_art]" placeholder="Jumlah Anggota Rumah Tangga"><br>
				<input type="text" class="form-control" id="pendapatan_kapita_perkebunan" name="data[detail][pendapatan_kapita][perkebunan][jumlah_rtb]" placeholder="Jumlah Rumah Tangga Buruh"><br>
				<input type="text" class="form-control" id="pendapatan_kapita_perkebunan" name="data[detail][pendapatan_kapita][perkebunan][jumlah_artb]" placeholder="Jumlah Anggota Rumah Tangga Buruh"><br>
				<input type="text" class="form-control" id="pendapatan_kapita_perkebunan" name="data[detail][pendapatan_kapita][perkebunan][jumlah_pendapatan]" placeholder="Jumlah Pendapatan Perkapita">
			</div>
		</div>
		<div class="form-group">
			<label for="pendapatan_kapita_peternakan" class="col-sm-3 control-label">Peternakan</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="pendapatan_kapita_peternakan" name="data[detail][pendapatan_kapita][peternakan][jumlah_rt]" placeholder="Jumlah Rumah Tangga"><br>
				<input type="text" class="form-control" id="pendapatan_kapita_peternakan" name="data[detail][pendapatan_kapita][peternakan][jumlah_art]" placeholder="Jumlah Anggota Rumah Tangga"><br>
				<input type="text" class="form-control" id="pendapatan_kapita_peternakan" name="data[detail][pendapatan_kapita][peternakan][jumlah_rtb]" placeholder="Jumlah Rumah Tangga Buruh"><br>
				<input type="text" class="form-control" id="pendapatan_kapita_peternakan" name="data[detail][pendapatan_kapita][peternakan][jumlah_artb]" placeholder="Jumlah Anggota Rumah Tangga Buruh"><br>
				<input type="text" class="form-control" id="pendapatan_kapita_peternakan" name="data[detail][pendapatan_kapita][peternakan][jumlah_pendapatan]" placeholder="Jumlah Pendapatan Perkapita">
			</div>
		</div>
		<div class="form-group">
			<label for="pendapatan_kapita_perikanan" class="col-sm-3 control-label">Perikanan</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="pendapatan_kapita_perikanan" name="data[detail][pendapatan_kapita][perikanan][jumlah_rt]" placeholder="Jumlah Rumah Tangga"><br>
				<input type="text" class="form-control" id="pendapatan_kapita_perikanan" name="data[detail][pendapatan_kapita][perikanan][jumlah_art]" placeholder="Jumlah Anggota Rumah Tangga"><br>
				<input type="text" class="form-control" id="pendapatan_kapita_perikanan" name="data[detail][pendapatan_kapita][perikanan][jumlah_rtb]" placeholder="Jumlah Rumah Tangga Buruh"><br>
				<input type="text" class="form-control" id="pendapatan_kapita_perikanan" name="data[detail][pendapatan_kapita][perikanan][jumlah_artb]" placeholder="Jumlah Anggota Rumah Tangga Buruh"><br>
				<input type="text" class="form-control" id="pendapatan_kapita_perikanan" name="data[detail][pendapatan_kapita][perikanan][jumlah_pendapatan]" placeholder="Jumlah Pendapatan Perkapita">
			</div>
		</div>
		<div class="form-group">
			<label for="pendapatan_kapita_kerajinan" class="col-sm-3 control-label">Kerajinan</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="pendapatan_kapita_kerajinan" name="data[detail][pendapatan_kapita][kerajinan][jumlah_rt]" placeholder="Jumlah Rumah Tangga"><br>
				<input type="text" class="form-control" id="pendapatan_kapita_kerajinan" name="data[detail][pendapatan_kapita][kerajinan][jumlah_art]" placeholder="Jumlah Anggota Rumah Tangga"><br>
				<input type="text" class="form-control" id="pendapatan_kapita_kerajinan" name="data[detail][pendapatan_kapita][kerajinan][jumlah_rtb]" placeholder="Jumlah Rumah Tangga Buruh"><br>
				<input type="text" class="form-control" id="pendapatan_kapita_kerajinan" name="data[detail][pendapatan_kapita][kerajinan][jumlah_artb]" placeholder="Jumlah Anggota Rumah Tangga Buruh"><br>
				<input type="text" class="form-control" id="pendapatan_kapita_kerajinan" name="data[detail][pendapatan_kapita][kerajinan][jumlah_pendapatan]" placeholder="Jumlah Pendapatan Perkapita">
			</div>
		</div>
		<div class="form-group">
			<label for="pendapatan_kapita_pertambangan" class="col-sm-3 control-label">Pertambangan</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="pendapatan_kapita_pertambangan" name="data[detail][pendapatan_kapita][pertambangan][jumlah_rt]" placeholder="Jumlah Rumah Tangga"><br>
				<input type="text" class="form-control" id="pendapatan_kapita_pertambangan" name="data[detail][pendapatan_kapita][pertambangan][jumlah_art]" placeholder="Jumlah Anggota Rumah Tangga"><br>
				<input type="text" class="form-control" id="pendapatan_kapita_pertambangan" name="data[detail][pendapatan_kapita][pertambangan][jumlah_rtb]" placeholder="Jumlah Rumah Tangga Buruh"><br>
				<input type="text" class="form-control" id="pendapatan_kapita_pertambangan" name="data[detail][pendapatan_kapita][pertambangan][jumlah_artb]" placeholder="Jumlah Anggota Rumah Tangga Buruh"><br>
				<input type="text" class="form-control" id="pendapatan_kapita_pertambangan" name="data[detail][pendapatan_kapita][pertambangan][jumlah_pendapatan]" placeholder="Jumlah Pendapatan Perkapita">
			</div>
		</div>
		<div class="form-group">
			<label for="pendapatan_kapita_kehutanan" class="col-sm-3 control-label">Kehutanan</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="pendapatan_kapita_kehutanan" name="data[detail][pendapatan_kapita][kehutanan][jumlah_rt]" placeholder="Jumlah Rumah Tangga"><br>
				<input type="text" class="form-control" id="pendapatan_kapita_kehutanan" name="data[detail][pendapatan_kapita][kehutanan][jumlah_art]" placeholder="Jumlah Anggota Rumah Tangga"><br>
				<input type="text" class="form-control" id="pendapatan_kapita_kehutanan" name="data[detail][pendapatan_kapita][kehutanan][jumlah_rtb]" placeholder="Jumlah Rumah Tangga Buruh"><br>
				<input type="text" class="form-control" id="pendapatan_kapita_kehutanan" name="data[detail][pendapatan_kapita][kehutanan][jumlah_artb]" placeholder="Jumlah Anggota Rumah Tangga Buruh"><br>
				<input type="text" class="form-control" id="pendapatan_kapita_kehutanan" name="data[detail][pendapatan_kapita][kehutanan][jumlah_pendapatan]" placeholder="Jumlah Pendapatan Perkapita">
			</div>
		</div>
		<div class="form-group">
			<label for="pendapatan_kapita_industri" class="col-sm-3 control-label">Industri Kecil, Menengah Dan Besar</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="pendapatan_kapita_industri" name="data[detail][pendapatan_kapita][industri][jumlah_rt]" placeholder="Jumlah Rumah Tangga"><br>
				<input type="text" class="form-control" id="pendapatan_kapita_industri" name="data[detail][pendapatan_kapita][industri][jumlah_art]" placeholder="Jumlah Anggota Rumah Tangga"><br>
				<input type="text" class="form-control" id="pendapatan_kapita_industri" name="data[detail][pendapatan_kapita][industri][jumlah_rtb]" placeholder="Jumlah Rumah Tangga Buruh"><br>
				<input type="text" class="form-control" id="pendapatan_kapita_industri" name="data[detail][pendapatan_kapita][industri][jumlah_artb]" placeholder="Jumlah Anggota Rumah Tangga Buruh"><br>
				<input type="text" class="form-control" id="pendapatan_kapita_industri" name="data[detail][pendapatan_kapita][industri][jumlah_pendapatan]" placeholder="Jumlah Pendapatan Perkapita">
			</div>
		</div>
		<div class="form-group">
			<label for="pendapatan_kapita_jasa_perdagangan" class="col-sm-3 control-label">Jasa Dan Perdagangan</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="pendapatan_kapita_jasa_perdagangan" name="data[detail][pendapatan_kapita][jasa_perdagangan][jumlah_rt]" placeholder="Jumlah Rumah Tangga"><br>
				<input type="text" class="form-control" id="pendapatan_kapita_jasa_perdagangan" name="data[detail][pendapatan_kapita][jasa_perdagangan][jumlah_art]" placeholder="Jumlah Anggota Rumah Tangga"><br>
				<input type="text" class="form-control" id="pendapatan_kapita_jasa_perdagangan" name="data[detail][pendapatan_kapita][jasa_perdagangan][jumlah_rtb]" placeholder="Jumlah Rumah Tangga Buruh"><br>
				<input type="text" class="form-control" id="pendapatan_kapita_jasa_perdagangan" name="data[detail][pendapatan_kapita][jasa_perdagangan][jumlah_artb]" placeholder="Jumlah Anggota Rumah Tangga Buruh"><br>
				<input type="text" class="form-control" id="pendapatan_kapita_jasa_perdagangan" name="data[detail][pendapatan_kapita][jasa_perdagangan][jumlah_pendapatan]" placeholder="Jumlah Pendapatan Perkapita">
			</div>
		</div>

		<div class="form-group">
			<div class="col-md-12">
				<h4>A. Pendapatan Rill Keluarga</h4>
			</div>
		</div>
		<div class="form-group">
			<label for="pendapatan_riil_kk" class="col-sm-3 control-label">Jumlah Kepala Keluarga (KK)</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="pendapatan_riil_kk" name="data[detail][pendapatan_riil][kk]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="pendapatan_riil_ak" class="col-sm-3 control-label">Jumlah Anggota Keluarga (Orang)</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="pendapatan_riil_ak" name="data[detail][pendapatan_riil][ak]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="pendapatan_riil_pkk" class="col-sm-3 control-label">Jumlah Pendapatan Kepala Keluarga (Rp)</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="pendapatan_riil_pkk" name="data[detail][pendapatan_riil][pkk]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="pendapatan_riil_pakb" class="col-sm-3 control-label">Jumlah pendapatan dari anggota keluarga yang Bekerja (Rp)</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="pendapatan_riil_pakb" name="data[detail][pendapatan_riil][pakb]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="pendapatan_riil_tpk" class="col-sm-3 control-label">Jumlah Total Pendapatan Keluarga (Rp) (3+4)</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="pendapatan_riil_tpk" name="data[detail][pendapatan_riil][tpk]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="pendapatan_riil_rpk" class="col-sm-3 control-label">Rata-rata Pendapatan Peranggota keluarga (Rp) (5/(1+2))</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="pendapatan_riil_rpk" name="data[detail][pendapatan_riil][rpk]" placeholder="Jumlah">
			</div>
		</div>

		<div class="form-group">
			<div class="col-md-12">
				<h3>5. Struktur Mata Pencaharian Menurut Sektor</h3>
			</div>
		</div>
		<div class="form-group">
			<label for="pencaharian_sektor_pertanian" class="col-sm-3 control-label">Pertanian</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="pencaharian_sektor_pertanian" name="data[detail][pencaharian_sektor][pertanian][pemilik]" placeholder="Jumlah Pemilik Usaha (Orang)"><br>
				<input type="text" class="form-control" id="pencaharian_sektor_pertanian" name="data[detail][pencaharian_sektor][pertanian][perorangan]" placeholder="Jumlah Pemilik Usaha Perorangan"><br>
				<input type="text" class="form-control" id="pencaharian_sektor_pertanian" name="data[detail][pencaharian_sektor][pertanian][karyawan]" placeholder="Jumlah Buruh/Karyawan/Pengumpul">
			</div>
		</div>
		<div class="form-group">
			<label for="pencaharian_sektor_perkebunan" class="col-sm-3 control-label">Perkebunan</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="pencaharian_sektor_perkebunan" name="data[detail][pencaharian_sektor][perkebunan][pemilik]" placeholder="Jumlah Pemilik Usaha (Orang)"><br>
				<input type="text" class="form-control" id="pencaharian_sektor_perkebunan" name="data[detail][pencaharian_sektor][perkebunan][perorangan]" placeholder="Jumlah Pemilik Usaha Perorangan"><br>
				<input type="text" class="form-control" id="pencaharian_sektor_perkebunan" name="data[detail][pencaharian_sektor][perkebunan][karyawan]" placeholder="Jumlah Buruh/Karyawan/Pengumpul">
			</div>
		</div>
		<div class="form-group">
			<label for="pencaharian_sektor_peternakan" class="col-sm-3 control-label">Peternakan</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="pencaharian_sektor_peternakan" name="data[detail][pencaharian_sektor][peternakan][pemilik]" placeholder="Jumlah Pemilik Usaha (Orang)"><br>
				<input type="text" class="form-control" id="pencaharian_sektor_peternakan" name="data[detail][pencaharian_sektor][peternakan][perorangan]" placeholder="Jumlah Pemilik Usaha Perorangan"><br>
				<input type="text" class="form-control" id="pencaharian_sektor_peternakan" name="data[detail][pencaharian_sektor][peternakan][karyawan]" placeholder="Jumlah Buruh/Karyawan/Pengumpul">
			</div>
		</div>
		<div class="form-group">
			<label for="pencaharian_sektor_perikanan" class="col-sm-3 control-label">Perikanan</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="pencaharian_sektor_perikanan" name="data[detail][pencaharian_sektor][perikanan][pemilik]" placeholder="Jumlah Pemilik Usaha (Orang)"><br>
				<input type="text" class="form-control" id="pencaharian_sektor_perikanan" name="data[detail][pencaharian_sektor][perikanan][perorangan]" placeholder="Jumlah Pemilik Usaha Perorangan"><br>
				<input type="text" class="form-control" id="pencaharian_sektor_perikanan" name="data[detail][pencaharian_sektor][perikanan][karyawan]" placeholder="Jumlah Buruh/Karyawan/Pengumpul">
			</div>
		</div>
		<div class="form-group">
			<label for="pencaharian_sektor_kehutanan" class="col-sm-3 control-label">Kehutanan</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="pencaharian_sektor_kehutanan" name="data[detail][pencaharian_sektor][kehutanan][pemilik]" placeholder="Jumlah Pemilik Usaha (Orang)"><br>
				<input type="text" class="form-control" id="pencaharian_sektor_kehutanan" name="data[detail][pencaharian_sektor][kehutanan][perorangan]" placeholder="Jumlah Pemilik Usaha Perorangan"><br>
				<input type="text" class="form-control" id="pencaharian_sektor_kehutanan" name="data[detail][pencaharian_sektor][kehutanan][karyawan]" placeholder="Jumlah Buruh/Karyawan/Pengumpul">
			</div>
		</div>
		<div class="form-group">
			<label for="pencaharian_sektor_pertambangan" class="col-sm-3 control-label">Pertambangan dan Bahan Galian C</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="pencaharian_sektor_pertambangan" name="data[detail][pencaharian_sektor][pertambangan][pemilik]" placeholder="Jumlah Pemilik Usaha (Orang)"><br>
				<input type="text" class="form-control" id="pencaharian_sektor_pertambangan" name="data[detail][pencaharian_sektor][pertambangan][perorangan]" placeholder="Jumlah Pemilik Usaha Perorangan"><br>
				<input type="text" class="form-control" id="pencaharian_sektor_pertambangan" name="data[detail][pencaharian_sektor][pertambangan][karyawan]" placeholder="Jumlah Buruh/Karyawan/Pengumpul">
			</div>
		</div>
		<div class="form-group">
			<label for="pencaharian_sektor_perdagangan" class="col-sm-3 control-label">Perdagangan</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="pencaharian_sektor_perdagangan" name="data[detail][pencaharian_sektor][perdagangan][pemilik]" placeholder="Jumlah Pemilik Usaha (Orang)"><br>
				<input type="text" class="form-control" id="pencaharian_sektor_perdagangan" name="data[detail][pencaharian_sektor][perdagangan][perorangan]" placeholder="Jumlah Pemilik Usaha Perorangan"><br>
				<input type="text" class="form-control" id="pencaharian_sektor_perdagangan" name="data[detail][pencaharian_sektor][perdagangan][karyawan]" placeholder="Jumlah Buruh/Karyawan/Pengumpul">
			</div>
		</div>

		<div class="form-group">
			<div class="col-md-12">
				<h4>A. Sektor Industri Kecil & Kerajinan Rumah Tangga</h4>
			</div>
		</div>
		<div class="form-group">
			<label for="pencaharian_kecil_montir" class="col-sm-3 control-label">Montir</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="pencaharian_kecil_montir" name="data[detail][pencaharian_kecil][montir]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="pencaharian_kecil_tukang_batu" class="col-sm-3 control-label">Tukang batu</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="pencaharian_kecil_tukang_batu" name="data[detail][pencaharian_kecil][tukang_batu]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="pencaharian_kecil_tukang_kayu" class="col-sm-3 control-label">Tukang kayu</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="pencaharian_kecil_tukang_kayu" name="data[detail][pencaharian_kecil][tukang_kayu]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="pencaharian_kecil_tukang_sumur" class="col-sm-3 control-label">Tukang sumur</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="pencaharian_kecil_tukang_sumur" name="data[detail][pencaharian_kecil][tukang_sumur]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="pencaharian_kecil_pemulung" class="col-sm-3 control-label">Pemulung</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="pencaharian_kecil_pemulung" name="data[detail][pencaharian_kecil][pemulung]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="pencaharian_kecil_tukang_jahit" class="col-sm-3 control-label">Tukang jahit</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="pencaharian_kecil_tukang_jahit" name="data[detail][pencaharian_kecil][tukang_jahit]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="pencaharian_kecil_tukang_kue" class="col-sm-3 control-label">Tukang kue</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="pencaharian_kecil_tukang_kue" name="data[detail][pencaharian_kecil][tukang_kue]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="pencaharian_kecil_tukang_anyaman" class="col-sm-3 control-label">Tukang anyaman</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="pencaharian_kecil_tukang_anyaman" name="data[detail][pencaharian_kecil][tukang_anyaman]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="pencaharian_kecil_tukang_rias" class="col-sm-3 control-label">Tukang rias</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="pencaharian_kecil_tukang_rias" name="data[detail][pencaharian_kecil][tukang_rias]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="pencaharian_kecil_pengrajin_lainnya" class="col-sm-3 control-label">Pengrajin industri rumah tangga lainnya</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="pencaharian_kecil_pengrajin_lainnya" name="data[detail][pencaharian_kecil][pengrajin_lainnya]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="pencaharian_kecil_lainnya" class="col-sm-3 control-label">Lainnya</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="pencaharian_kecil_lainnya" name="data[detail][pencaharian_kecil][lainnya][keterangan]" placeholder="Keterangan"><br>
				<input type="text" class="form-control" id="pencaharian_kecil_lainnya" name="data[detail][pencaharian_kecil][lainnya][jumlah]" placeholder="Jumlah">
			</div>
		</div>
		
		<div class="form-group">
			<div class="col-md-12">
				<h4>B. Sektor Industri Menengah dan Besar</h4>
			</div>
		</div>
		<div class="form-group">
			<label for="pencaharian_menengah_karyawan_swasta" class="col-sm-3 control-label">Karyawan perusahaan swasta</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="pencaharian_menengah_karyawan_swasta" name="data[detail][pencaharian_menengah][karyawan_swasta]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="pencaharian_menengah_karyawan_pemerintah" class="col-sm-3 control-label">Karyawan perusahaan pemerintah</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="pencaharian_menengah_karyawan_pemerintah" name="data[detail][pencaharian_menengah][karyawan_pemerintah]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="pencaharian_menengah_pemilik_perusahaan" class="col-sm-3 control-label">Pemilik perusahaan</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="pencaharian_menengah_pemilik_perusahaan" name="data[detail][pencaharian_menengah][pemilik_perusahaan]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="pencaharian_menengah_lainnya1" class="col-sm-3 control-label">Lainnya 1</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="pencaharian_menengah_lainnya1" name="data[detail][pencaharian_menengah][lainnya1][keterangan]" placeholder="Keterangan"><br>
				<input type="text" class="form-control" id="pencaharian_menengah_lainnya1" name="data[detail][pencaharian_menengah][lainnya1][jumlah]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="pencaharian_menengah_lainnya2" class="col-sm-3 control-label">Lainnya 2</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="pencaharian_menengah_lainnya2" name="data[detail][pencaharian_menengah][lainnya2][keterangan]" placeholder="Keterangan"><br>
				<input type="text" class="form-control" id="pencaharian_menengah_lainnya2" name="data[detail][pencaharian_menengah][lainnya2][jumlah]" placeholder="Jumlah">
			</div>
		</div>
		
		<div class="form-group">
			<div class="col-md-12">
				<h4>C. Sektor Jasa</h4>
			</div>
		</div>
		<div class="form-group">
			<label for="pencaharian_jasa_pemilik_transportasi" class="col-sm-3 control-label">Pemilik usaha jasa transportasi dan perhubungan</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="pencaharian_jasa_pemilik_transportasi" name="data[detail][pencaharian_jasa][pemilik_transportasi]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="pencaharian_jasa_buruh_transportasi" class="col-sm-3 control-label">Buruh usaha jasa transportasi dan perhubungan</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="pencaharian_jasa_buruh_transportasi" name="data[detail][pencaharian_jasa][buruh_transportasi]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="pencaharian_jasa_pemilik_komunikasi" class="col-sm-3 control-label">Pemilik usaha informasi dan komunikasi</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="pencaharian_jasa_pemilik_komunikasi" name="data[detail][pencaharian_jasa][pemilik_komunikasi]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="pencaharian_jasa_buruh_komunikasi" class="col-sm-3 control-label">Buruh usaha jasa informasi dan komunikasi</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="pencaharian_jasa_buruh_komunikasi" name="data[detail][pencaharian_jasa][buruh_komunikasi]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="pencaharian_jasa_kontraktor" class="col-sm-3 control-label">Kontraktor</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="pencaharian_jasa_kontraktor" name="data[detail][pencaharian_jasa][kontraktor]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="pencaharian_jasa_pemilik_pariwisata" class="col-sm-3 control-label">Pemilik usaha jasa hiburan dan pariwisata</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="pencaharian_jasa_pemilik_pariwisata" name="data[detail][pencaharian_jasa][pemilik_pariwisata]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="pencaharian_jasa_buruh_pariwisata" class="col-sm-3 control-label">Buruh usaha jasa hiburan dan pariwisata</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="pencaharian_jasa_buruh_pariwisata" name="data[detail][pencaharian_jasa][buruh_pariwisata]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="pencaharian_jasa_pemilik_penginapan" class="col-sm-3 control-label">Pemilik usaha hotel dan penginapan lainnya</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="pencaharian_jasa_pemilik_penginapan" name="data[detail][pencaharian_jasa][pemilik_penginapan]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="pencaharian_jasa_buruh_penginapan" class="col-sm-3 control-label">Buruh usaha hotel dan penginapan lainnya</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="pencaharian_jasa_buruh_penginapan" name="data[detail][pencaharian_jasa][buruh_penginapan]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="pencaharian_jasa_rumah_makan" class="col-sm-3 control-label">Pemilik usaha warung, rumah makan dan restoran</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="pencaharian_jasa_rumah_makan" name="data[detail][pencaharian_jasa][rumah_makan]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="pencaharian_jasa_pns" class="col-sm-3 control-label">Pegawai Negeri Sipil</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="pencaharian_jasa_pns" name="data[detail][pencaharian_jasa][pns]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="pencaharian_jasa_tni" class="col-sm-3 control-label">TNI</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="pencaharian_jasa_tni" name="data[detail][pencaharian_jasa][tni]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="pencaharian_jasa_polri" class="col-sm-3 control-label">POLRI</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="pencaharian_jasa_polri" name="data[detail][pencaharian_jasa][polri]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="pencaharian_jasa_dokter_swasta" class="col-sm-3 control-label">Dokter swasta</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="pencaharian_jasa_dokter_swasta" name="data[detail][pencaharian_jasa][dokter_swasta]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="pencaharian_jasa_bidan_swasta" class="col-sm-3 control-label">Bidan swasta</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="pencaharian_jasa_bidan_swasta" name="data[detail][pencaharian_jasa][bidan_swasta]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="pencaharian_jasa_perawat_swasta" class="col-sm-3 control-label">Perawat swasta</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="pencaharian_jasa_perawat_swasta" name="data[detail][pencaharian_jasa][perawat_swasta]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="pencaharian_jasa_dukun" class="col-sm-3 control-label">Dukun/paranormal/supranatural</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="pencaharian_jasa_dukun" name="data[detail][pencaharian_jasa][dukun]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="pencaharian_jasa_pengobatan_alternatif" class="col-sm-3 control-label">Jasa pengobatan alternatif</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="pencaharian_jasa_pengobatan_alternatif" name="data[detail][pencaharian_jasa][pengobatan_alternatif]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="pencaharian_jasa_dosen_swasta" class="col-sm-3 control-label">Dosen swasta</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="pencaharian_jasa_dosen_swasta" name="data[detail][pencaharian_jasa][dosen_swasta]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="pencaharian_jasa_guru_swasta" class="col-sm-3 control-label">Guru swasta</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="pencaharian_jasa_guru_swasta" name="data[detail][pencaharian_jasa][guru_swasta]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="pencaharian_jasa_pensiunan_tni_polri" class="col-sm-3 control-label">Pensiunan TNI/POLRI</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="pencaharian_jasa_pensiunan_tni_polri" name="data[detail][pencaharian_jasa][pensiunan_tni_polri]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="pencaharian_jasa_pensiunan_pns" class="col-sm-3 control-label">Pensiunan PNS</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="pencaharian_jasa_pensiunan_pns" name="data[detail][pencaharian_jasa][pensiunan_pns]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="pencaharian_jasa_pensiunan_swasta" class="col-sm-3 control-label">Pensiunan swasta</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="pencaharian_jasa_pensiunan_swasta" name="data[detail][pencaharian_jasa][pensiunan_swasta]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="pencaharian_jasa_pengacara" class="col-sm-3 control-label">Pengacara</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="pencaharian_jasa_pengacara" name="data[detail][pencaharian_jasa][pengacara]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="pencaharian_jasa_notaris" class="col-sm-3 control-label">Notaris</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="pencaharian_jasa_notaris" name="data[detail][pencaharian_jasa][notaris]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="pencaharian_jasa_konsultansi_manajemen" class="col-sm-3 control-label">Jasa Konsultansi Manajemen dan Teknis</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="pencaharian_jasa_konsultansi_manajemen" name="data[detail][pencaharian_jasa][konsultansi_manajemen]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="pencaharian_jasa_seniman" class="col-sm-3 control-label">Seniman/artis</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="pencaharian_jasa_seniman" name="data[detail][pencaharian_jasa][seniman]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="pencaharian_jasa_prt" class="col-sm-3 control-label">Pembantu rumah tangga</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="pencaharian_jasa_prt" name="data[detail][pencaharian_jasa][prt]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="pencaharian_jasa_sopir" class="col-sm-3 control-label">Sopir</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="pencaharian_jasa_sopir" name="data[detail][pencaharian_jasa][sopir]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="pencaharian_jasa_buruh_migran_perempuan" class="col-sm-3 control-label">Buruh migran perempuan</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="pencaharian_jasa_buruh_migran_perempuan" name="data[detail][pencaharian_jasa][buruh_migran_perempuan]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="pencaharian_jasa_buruh_migran_laki" class="col-sm-3 control-label">Buruh migran laki-laki</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="pencaharian_jasa_buruh_migran_laki" name="data[detail][pencaharian_jasa][buruh_migran_laki]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="pencaharian_jasa_pengerah_tenaga_kerja" class="col-sm-3 control-label">Usaha jasa pengerah tenaga kerja</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="pencaharian_jasa_pengerah_tenaga_kerja" name="data[detail][pencaharian_jasa][pengerah_tenaga_kerja]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="pencaharian_jasa_wiraswasta_lainnya" class="col-sm-3 control-label">Wiraswasta lainnya</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="pencaharian_jasa_wiraswasta_lainnya" name="data[detail][pencaharian_jasa][wiraswasta_lainnya]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="pencaharian_jasa_tidak_tetap" class="col-sm-3 control-label">Tidak mempunyai matapencaharian tetap</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="pencaharian_jasa_tidak_tetap" name="data[detail][pencaharian_jasa][tidak_tetap]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="pencaharian_jasa_penyewaan_alat_pesta" class="col-sm-3 control-label">Jasa penyewaan peralatan pesta</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="pencaharian_jasa_penyewaan_alat_pesta" name="data[detail][pencaharian_jasa][penyewaan_alat_pesta]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="pencaharian_jasa_lainnya" class="col-sm-3 control-label">Lainnya</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="pencaharian_jasa_lainnya" name="data[detail][pencaharian_jasa][lainnya][keterangan]" placeholder="Keterangan"><br>
				<input type="text" class="form-control" id="pencaharian_jasa_lainnya" name="data[detail][pencaharian_jasa][lainnya][jumlah]" placeholder="Jumlah">
			</div>
		</div>

		<div class="form-group">
			<div class="col-md-12">
				<h3>6. Penguasaan Aset Ekonomi Masyarakat</h3>
				<h4>A. Aset Tanah</h4>
			</div>
		</div>
		<div class="form-group">
			<label for="aset_tanah_1" class="col-sm-3 control-label">Tidak memiliki tanah</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="aset_tanah_1" name="data[detail][aset_tanah][0]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="aset_tanah_2" class="col-sm-3 control-label">Memiliki tanah antara 0,10-0,2 ha</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="aset_tanah_2" name="data[detail][aset_tanah][1]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="aset_tanah_3" class="col-sm-3 control-label">Memiliki tanah antara 0,21-0,3 ha</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="aset_tanah_3" name="data[detail][aset_tanah][2]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="aset_tanah_4" class="col-sm-3 control-label">Memiliki tanah antara 0,31-0,4 ha</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="aset_tanah_4" name="data[detail][aset_tanah][3]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="aset_tanah_5" class="col-sm-3 control-label">Memiliki tanah antara 0,41-0,5 ha</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="aset_tanah_5" name="data[detail][aset_tanah][4]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="aset_tanah_6" class="col-sm-3 control-label">Memiliki tanah antara 0,51-0,6 ha</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="aset_tanah_6" name="data[detail][aset_tanah][5]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="aset_tanah_7" class="col-sm-3 control-label">Memiliki tanah antara 0,61-0,7 ha</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="aset_tanah_7" name="data[detail][aset_tanah][6]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="aset_tanah_8" class="col-sm-3 control-label">Memiliki tanah antara 0,71-0,8 ha</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="aset_tanah_8" name="data[detail][aset_tanah][7]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="aset_tanah_9" class="col-sm-3 control-label">Memiliki tanah antara 0,81-0,9 ha</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="aset_tanah_9" name="data[detail][aset_tanah][8]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="aset_tanah_10" class="col-sm-3 control-label">Memiliki tanah antara 0,91-1,0 ha</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="aset_tanah_10" name="data[detail][aset_tanah][9]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="aset_tanah_11" class="col-sm-3 control-label">Memiliki tanah antara 1,00- 5,0 ha</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="aset_tanah_11" name="data[detail][aset_tanah][10]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="aset_tanah_12" class="col-sm-3 control-label">Memiliki tanah antara 5,00- 10 ha</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="aset_tanah_12" name="data[detail][aset_tanah][11]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="aset_tanah_13" class="col-sm-3 control-label">Memiliki tanah lebih dari 10 ha</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="aset_tanah_13" name="data[detail][aset_tanah][12]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="aset_tanah_14" class="col-sm-3 control-label">Jumlah total penduduk</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="aset_tanah_14" name="data[detail][aset_tanah][13]" placeholder="Jumlah">
			</div>
		</div>

		<div class="form-group">
			<div class="col-md-12">
				<h4>B. Aset Sarana Transportasi Umum</h4>
			</div>
		</div>
		<div class="form-group">
			<label for="aset_transportasi_ojek" class="col-sm-3 control-label">Memiliki ojek</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="aset_transportasi_ojek" name="data[detail][aset_transportasi][ojek][orang]" placeholder="Orang"><br>
				<input type="text" class="form-control" id="aset_transportasi_ojek" name="data[detail][aset_transportasi][ojek][unit]" placeholder="Unit">
			</div>
		</div>
		<div class="form-group">
			<label for="aset_transportasi_becak" class="col-sm-3 control-label">Memiliki becak</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="aset_transportasi_becak" name="data[detail][aset_transportasi][becak][orang]" placeholder="Orang"><br>
				<input type="text" class="form-control" id="aset_transportasi_becak" name="data[detail][aset_transportasi][becak][unit]" placeholder="Unit">
			</div>
		</div>
		<div class="form-group">
			<label for="aset_transportasi_dokar" class="col-sm-3 control-label">Memiliki cidemo/andong/dokar</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="aset_transportasi_dokar" name="data[detail][aset_transportasi][dokar][orang]" placeholder="Orang"><br>
				<input type="text" class="form-control" id="aset_transportasi_dokar" name="data[detail][aset_transportasi][dokar][unit]" placeholder="Unit">
			</div>
		</div>
		<div class="form-group">
			<label for="aset_transportasi_kapal_motor" class="col-sm-3 control-label">Memiliki kapal motor</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="aset_transportasi_kapal_motor" name="data[detail][aset_transportasi][kapal_motor][orang]" placeholder="Orang"><br>
				<input type="text" class="form-control" id="aset_transportasi_kapal_motor" name="data[detail][aset_transportasi][kapal_motor][unit]" placeholder="Unit">
			</div>
		</div>
		<div class="form-group">
			<label for="aset_transportasi_bus" class="col-sm-3 control-label">Memiliki bus</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="aset_transportasi_bus" name="data[detail][aset_transportasi][bus][orang]" placeholder="Orang"><br>
				<input type="text" class="form-control" id="aset_transportasi_bus" name="data[detail][aset_transportasi][bus][unit]" placeholder="Unit">
			</div>
		</div>
		<div class="form-group">
			<label for="aset_transportasi_mini_bus" class="col-sm-3 control-label">Memiliki mini bus</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="aset_transportasi_mini_bus" name="data[detail][aset_transportasi][mini_bus][orang]" placeholder="Orang"><br>
				<input type="text" class="form-control" id="aset_transportasi_mini_bus" name="data[detail][aset_transportasi][mini_bus][unit]" placeholder="Unit">
			</div>
		</div>
		<div class="form-group">
			<label for="aset_transportasi_helikopter_pesawat" class="col-sm-3 control-label">Memiliki helikopter dan atau pesawat</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="aset_transportasi_helikopter_pesawat" name="data[detail][aset_transportasi][helikopter_pesawat][orang]" placeholder="Orang"><br>
				<input type="text" class="form-control" id="aset_transportasi_helikopter_pesawat" name="data[detail][aset_transportasi][helikopter_pesawat][unit]" placeholder="Unit">
			</div>
		</div>
		<div class="form-group">
			<label for="aset_transportasi_lainnya" class="col-sm-3 control-label">Lainnya</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="aset_transportasi_lainnya" name="data[detail][aset_transportasi][lainnya][keterangan]" placeholder="Keterangan"><br>
				<input type="text" class="form-control" id="aset_transportasi_lainnya" name="data[detail][aset_transportasi][lainnya][orang]" placeholder="Orang"><br>
				<input type="text" class="form-control" id="aset_transportasi_lainnya" name="data[detail][aset_transportasi][lainnya][unit]" placeholder="Unit">
			</div>
		</div>

		<div class="form-group">
			<div class="col-md-12">
				<h4>C. Aset Sarana Produksi</h4>
			</div>
		</div>
		<div class="form-group">
			<label for="aset_produksi_padi" class="col-sm-3 control-label">Memiliki penggilingan padi</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="aset_produksi_padi" name="data[detail][aset_produksi][padi]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="aset_produksi_traktor" class="col-sm-3 control-label">Memiliki traktor</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="aset_produksi_traktor" name="data[detail][aset_produksi][traktor]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="aset_produksi_pertanian" class="col-sm-3 control-label">Memiliki pabrik pengolahan hasil pertanian</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="aset_produksi_pertanian" name="data[detail][aset_produksi][pertanian]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="aset_produksi_ikan" class="col-sm-3 control-label">Memiliki kapal penangkap ikan</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="aset_produksi_ikan" name="data[detail][aset_produksi][ikan]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="aset_produksi_perikanan" class="col-sm-3 control-label">Memiliki alat pengolahan hasil perikanan</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="aset_produksi_perikanan" name="data[detail][aset_produksi][perikanan]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="aset_produksi_peternakan" class="col-sm-3 control-label">Memiliki alat pengolahan hasil peternakan</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="aset_produksi_peternakan" name="data[detail][aset_produksi][peternakan]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="aset_produksi_perkebunan" class="col-sm-3 control-label">Memiliki alat pengolahan hasil perkebunan</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="aset_produksi_perkebunan" name="data[detail][aset_produksi][perkebunan]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="aset_produksi_hutan" class="col-sm-3 control-label">Memiliki alat pengolahan hasil hutan</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="aset_produksi_hutan" name="data[detail][aset_produksi][hutan]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="aset_produksi_pertambangan" class="col-sm-3 control-label">Memiliki alat produksi dan pengolah hasil pertambangan</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="aset_produksi_pertambangan" name="data[detail][aset_produksi][pertambangan]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="aset_produksi_pariwisata" class="col-sm-3 control-label">Memiliki alat produksi dan pengolah hasil pariwisata</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="aset_produksi_pariwisata" name="data[detail][aset_produksi][pariwisata]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="aset_produksi_perdagangan" class="col-sm-3 control-label">Memiliki alat produksi dan pengolah hasil industri jasa Perdagangan</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="aset_produksi_perdagangan" name="data[detail][aset_produksi][perdagangan]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="aset_produksi_kecil_menengah" class="col-sm-3 control-label">Memiliki alat produksi dan pengolah hasil Industri kerajinan keluarga skala kecil dan menengah</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="aset_produksi_kecil_menengah" name="data[detail][aset_produksi][kecil_menengah]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="aset_produksi_migas" class="col-sm-3 control-label">Memiliki alat produksi dan pengolahan hasil industri Migas</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="aset_produksi_migas" name="data[detail][aset_produksi][migas]" placeholder="Jumlah">
			</div>
		</div>

		<div class="form-group">
			<div class="col-md-12">
				<h4>D. Aset Perumahan</h4>
				<h4>Rumah Menurut Dinding</h4>
			</div>
		</div>
		<div class="form-group">
			<label for="aset_perumahan_dinding_tembok" class="col-sm-3 control-label">Tembok</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="aset_perumahan_dinding_tembok" name="data[detail][aset_perumahan][dinding][tembok]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="aset_perumahan_dinding_kayu" class="col-sm-3 control-label">Kayu</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="aset_perumahan_dinding_kayu" name="data[detail][aset_perumahan][dinding][kayu]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="aset_perumahan_dinding_bambu" class="col-sm-3 control-label">Bambu</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="aset_perumahan_dinding_bambu" name="data[detail][aset_perumahan][dinding][bambu]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="aset_perumahan_dinding_tanah_liat" class="col-sm-3 control-label">Tanah liat</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="aset_perumahan_dinding_tanah_liat" name="data[detail][aset_perumahan][dinding][tanah_liat]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="aset_perumahan_dinding_pelepah" class="col-sm-3 control-label">Pelepah kelapa/lontar/gebang</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="aset_perumahan_dinding_pelepah" name="data[detail][aset_perumahan][dinding][pelepah]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="aset_perumahan_dinding_dedaunan" class="col-sm-3 control-label">Dedaunan</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="aset_perumahan_dinding_dedaunan" name="data[detail][aset_perumahan][dinding][dedaunan]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="aset_perumahan_dinding_lainnya" class="col-sm-3 control-label">Lainnya</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="aset_perumahan_dinding_lainnya" name="data[detail][aset_perumahan][dinding][lainnya][keterangan]" placeholder="Keterangan"><br>
				<input type="text" class="form-control" id="aset_perumahan_dinding_lainnya" name="data[detail][aset_perumahan][dinding][lainnya][jumlah]" placeholder="Jumlah">
			</div>
		</div>

		<div class="form-group">
			<div class="col-md-12">
				<h4>Rumah Menurut Lantai</h4>
			</div>
		</div>
		<div class="form-group">
			<label for="aset_perumahan_lantai_keramik" class="col-sm-3 control-label">Keramik</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="aset_perumahan_lantai_keramik" name="data[detail][aset_perumahan][lantai][keramik]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="aset_perumahan_lantai_semen" class="col-sm-3 control-label">Semen</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="aset_perumahan_lantai_semen" name="data[detail][aset_perumahan][lantai][semen]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="aset_perumahan_lantai_kayu" class="col-sm-3 control-label">Kayu</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="aset_perumahan_lantai_kayu" name="data[detail][aset_perumahan][lantai][kayu]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="aset_perumahan_lantai_tanah" class="col-sm-3 control-label">Tanah</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="aset_perumahan_lantai_tanah" name="data[detail][aset_perumahan][lantai][tanah]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="aset_perumahan_lantai_lainnya" class="col-sm-3 control-label">Lainnya</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="aset_perumahan_lantai_lainnya" name="data[detail][aset_perumahan][lantai][lainnya][keterangan]" placeholder="Keterangan"><br>
				<input type="text" class="form-control" id="aset_perumahan_lantai_lainnya" name="data[detail][aset_perumahan][lantai][lainnya][jumlah]" placeholder="Jumlah">
			</div>
		</div>

		<div class="form-group">
			<div class="col-md-12">
				<h4>Rumah Menurut Atap</h4>
			</div>
		</div>
		<div class="form-group">
			<label for="aset_perumahan_atap_genteng" class="col-sm-3 control-label">Genteng</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="aset_perumahan_atap_genteng" name="data[detail][aset_perumahan][atap][genteng]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="aset_perumahan_atap_seng" class="col-sm-3 control-label">Seng</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="aset_perumahan_atap_seng" name="data[detail][aset_perumahan][atap][seng]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="aset_perumahan_atap_asbes" class="col-sm-3 control-label">Asbes</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="aset_perumahan_atap_asbes" name="data[detail][aset_perumahan][atap][asbes]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="aset_perumahan_atap_beton" class="col-sm-3 control-label">Beton</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="aset_perumahan_atap_beton" name="data[detail][aset_perumahan][atap][beton]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="aset_perumahan_atap_bambu" class="col-sm-3 control-label">Bambu</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="aset_perumahan_atap_bambu" name="data[detail][aset_perumahan][atap][bambu]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="aset_perumahan_atap_kayu" class="col-sm-3 control-label">Kayu</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="aset_perumahan_atap_kayu" name="data[detail][aset_perumahan][atap][kayu]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="aset_perumahan_atap_lontar" class="col-sm-3 control-label">Daun lontar/gebang/enau</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="aset_perumahan_atap_lontar" name="data[detail][aset_perumahan][atap][lontar]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="aset_perumahan_atap_ilalang" class="col-sm-3 control-label">Daun ilalang</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="aset_perumahan_atap_ilalang" name="data[detail][aset_perumahan][atap][ilalang]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="aset_perumahan_atap_lainnya" class="col-sm-3 control-label">Lainnya</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="aset_perumahan_atap_lainnya" name="data[detail][aset_perumahan][atap][lainnya][keterangan]" placeholder="Keterangan"><br>
				<input type="text" class="form-control" id="aset_perumahan_atap_lainnya" name="data[detail][aset_perumahan][atap][lainnya][jumlah]" placeholder="Jumlah">
			</div>
		</div>

		<div class="form-group">
			<div class="col-md-12">
				<h3>7. Pemilikan Aset Ekonomi Lainnya</h3>
			</div>
		</div>
		<div class="form-group">
			<label for="aset_lain_elektronik" class="col-sm-3 control-label">Jumlah keluarga memiliki TV dan elektronik lainnya</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="aset_lain_elektronik" name="data[detail][aset_lain][elektronik]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="aset_lain_sepeda_motor" class="col-sm-3 control-label">Jumlah keluarga memiliki sepeda motor/sejenisnya</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="aset_lain_sepeda_motor" name="data[detail][aset_lain][sepeda_motor]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="aset_lain_mobil" class="col-sm-3 control-label">Jumlah keluarga memiliki mobil dansejenisnya</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="aset_lain_mobil" name="data[detail][aset_lain][mobil]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="aset_lain_perahu_bermotor" class="col-sm-3 control-label">Jumlah keluarga memiliki perahu bermotor</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="aset_lain_perahu_bermotor" name="data[detail][aset_lain][perahu_bermotor]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="aset_lain_kapal_barang" class="col-sm-3 control-label">Jumlah keluarga memiliki kapal barang</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="aset_lain_kapal_barang" name="data[detail][aset_lain][kapal_barang]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="aset_lain_kapal_penumpang" class="col-sm-3 control-label">Jumlah keluarga memiliki kapal penumpang</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="aset_lain_kapal_penumpang" name="data[detail][aset_lain][kapal_penumpang]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="aset_lain_kapal_pesiar" class="col-sm-3 control-label">Jumlah keluarga memiliki kapal pesiar</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="aset_lain_kapal_pesiar" name="data[detail][aset_lain][kapal_pesiar]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="aset_lain_helikopter" class="col-sm-3 control-label">Jumlah keluarga memiliki helikopter</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="aset_lain_helikopter" name="data[detail][aset_lain][helikopter]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="aset_lain_pesawat_terbang" class="col-sm-3 control-label">Jumlah keluarga memiliki pesawat terbang</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="aset_lain_pesawat_terbang" name="data[detail][aset_lain][pesawat_terbang]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="aset_lain_ternak_besar" class="col-sm-3 control-label">Jumlah keluarga memiliki ternak besar</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="aset_lain_ternak_besar" name="data[detail][aset_lain][ternak_besar]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="aset_lain_ternak_kecil" class="col-sm-3 control-label">Jumlah keluarga memiliki ternak kecil</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="aset_lain_ternak_kecil" name="data[detail][aset_lain][ternak_kecil]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="aset_lain_emas_berlian" class="col-sm-3 control-label">Jumlah keluarga yang memiliki hiasan emas/berlian</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="aset_lain_emas_berlian" name="data[detail][aset_lain][emas_berlian]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="aset_lain_buku_tabungan_bank" class="col-sm-3 control-label">Jumlah keluarga yang memiliki buku tabungan bank</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="aset_lain_buku_tabungan_bank" name="data[detail][aset_lain][buku_tabungan_bank]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="aset_lain_buku_surat_berharga" class="col-sm-3 control-label">Jumlah keluarga yang memiliki buku surat berharga</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="aset_lain_buku_surat_berharga" name="data[detail][aset_lain][buku_surat_berharga]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="aset_lain_sertifikat_deposito" class="col-sm-3 control-label">Jumlah keluarga yang memiliki sertifikat deposito</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="aset_lain_sertifikat_deposito" name="data[detail][aset_lain][sertifikat_deposito]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="aset_lain_sertifikat_tanah" class="col-sm-3 control-label">Jumlah keluarga yang memiliki sertifikat tanah</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="aset_lain_sertifikat_tanah" name="data[detail][aset_lain][sertifikat_tanah]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="aset_lain_sertifikat_bangunan" class="col-sm-3 control-label">Jumlah keluarga yang memiliki sertifikat bangunan</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="aset_lain_sertifikat_bangunan" name="data[detail][aset_lain][sertifikat_bangunan]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="aset_lain_industri_besar" class="col-sm-3 control-label">Jumlah keluarga memiliki perusahaan industri besar</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="aset_lain_industri_besar" name="data[detail][aset_lain][industri_besar]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="aset_lain_industri_menengah" class="col-sm-3 control-label">Jumlah keluarga memiliki peruahaan industri menengah</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="aset_lain_industri_menengah" name="data[detail][aset_lain][industri_menengah]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="aset_lain_industri_kecil" class="col-sm-3 control-label">Jumlah keluarga memiliki perusahaan industri kecil</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="aset_lain_industri_kecil" name="data[detail][aset_lain][industri_kecil]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="aset_lain_perikanan" class="col-sm-3 control-label">Jumlah keluarga memiliki usaha perikanan</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="aset_lain_perikanan" name="data[detail][aset_lain][perikanan]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="aset_lain_peternakan" class="col-sm-3 control-label">Jumlah keluarga memiliki usaha peternakan</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="aset_lain_peternakan" name="data[detail][aset_lain][peternakan]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="aset_lain_perkebunan" class="col-sm-3 control-label">Jumlah keluarga memiliki usaha perkebunan</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="aset_lain_perkebunan" name="data[detail][aset_lain][perkebunan]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="aset_lain_pasar_swalayan" class="col-sm-3 control-label">Jumlah keluarga memiliki usaha pasar swalayan</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="aset_lain_pasar_swalayan" name="data[detail][aset_lain][pasar_swalayan]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="aset_lain_di_pasar_swalayan" class="col-sm-3 control-label">Jumlah keluarga memiliki usaha di pasar swalayan</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="aset_lain_di_pasar_swalayan" name="data[detail][aset_lain][di_pasar_swalayan]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="aset_lain_di_pasar_tradisional" class="col-sm-3 control-label">Jumlah keluarga memiliki usaha di pasar tradisional</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="aset_lain_di_pasar_tradisional" name="data[detail][aset_lain][di_pasar_tradisional]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="aset_lain_di_pasar_desa" class="col-sm-3 control-label">Jumlah keluarga memiliki usaha di pasar desa</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="aset_lain_di_pasar_desa" name="data[detail][aset_lain][di_pasar_desa]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="aset_lain_transportasi_pengangkutan" class="col-sm-3 control-label">Jumlah keluarga memiliki usaha transportasi/pengangkutan</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="aset_lain_transportasi_pengangkutan" name="data[detail][aset_lain][transportasi_pengangkutan]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="aset_lain_aset_telekomunikasi" class="col-sm-3 control-label">Jumlah keluarga yang memiliki aset telekomunikasi</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="aset_lain_aset_telekomunikasi" name="data[detail][aset_lain][aset_telekomunikasi]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="aset_lain_saham_di_perusahaan" class="col-sm-3 control-label">Jumlah keluarga yang memiliki saham di perusahaan</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="aset_lain_saham_di_perusahaan" name="data[detail][aset_lain][saham_di_perusahaan]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="aset_lain_lainnya" class="col-sm-3 control-label">Lainnya</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="aset_lain_lainnya" name="data[detail][aset_lain][lainnya][keterangan]" placeholder="Keterangan"><br>
				<input type="text" class="form-control" id="aset_lain_lainnya" name="data[detail][aset_lain][lainnya][jumlah]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="aset_lain_jumlah_keluarga" class="col-sm-3 control-label">Jumlah keluarga seluruhnya</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="aset_lain_jumlah_keluarga" name="data[detail][aset_lain][jumlah_keluarga]" placeholder="Jumlah">
			</div>
		</div>

		<div class="form-group">
			<div class="col-md-12">
				<h3>8. Pendidikan Masyarakat</h3>
				<h4>A. Tingkat Pendidikan Penduduk</h4>
			</div>
		</div>
		<div class="form-group">
			<label for="pendidikan_tingkat_buta_huruf" class="col-sm-3 control-label">Jumlah penduduk buta aksara dan huruf latin</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="pendidikan_tingkat_buta_huruf" name="data[detail][pendidikan][tingkat][buta_huruf]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="pendidikan_tingkat_masuk_tk" class="col-sm-3 control-label">Jumlah penduduk usia 3-6 tahun yang masuk TK dan Kelompok Bermain Anak</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="pendidikan_tingkat_masuk_tk" name="data[detail][pendidikan][tingkat][masuk_tk]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="pendidikan_tingkat_cacat_fisik_mental" class="col-sm-3 control-label">Jumlah anak dan penduduk cacat fisik dan mental</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="pendidikan_tingkat_cacat_fisik_mental" name="data[detail][pendidikan][tingkat][cacat_fisik_mental]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="pendidikan_tingkat_sedang_sd" class="col-sm-3 control-label">Jumlah penduduk sedang SD/sederajat</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="pendidikan_tingkat_sedang_sd" name="data[detail][pendidikan][tingkat][sedang_sd]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="pendidikan_tingkat_tamat_sd" class="col-sm-3 control-label">Jumlah penduduk tamat SD/sederajat</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="pendidikan_tingkat_tamat_sd" name="data[detail][pendidikan][tingkat][tamat_sd]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="pendidikan_tingkat_tidak_sd" class="col-sm-3 control-label">Jumlah penduduk tidak tamat SD/sederajat</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="pendidikan_tingkat_tidak_sd" name="data[detail][pendidikan][tingkat][tidak_sd]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="pendidikan_tingkat_sedang_sltp" class="col-sm-3 control-label">Jumlah penduduk sedang SLTP/sederajat</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="pendidikan_tingkat_sedang_sltp" name="data[detail][pendidikan][tingkat][sedang_sltp]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="pendidikan_tingkat_tamat_sltp" class="col-sm-3 control-label">Jumlah penduduk tamat SLTP/sederajat</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="pendidikan_tingkat_tamat_sltp" name="data[detail][pendidikan][tingkat][tamat_sltp]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="pendidikan_tingkat_sedang_slta" class="col-sm-3 control-label">Jumlah penduduk sedang SLTA/sederajat</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="pendidikan_tingkat_sedang_slta" name="data[detail][pendidikan][tingkat][sedang_slta]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="pendidikan_tingkat_tidak_sltp" class="col-sm-3 control-label">Jumlah penduduk tidak tamat SLTP/Sederajat</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="pendidikan_tingkat_tidak_sltp" name="data[detail][pendidikan][tingkat][tidak_sltp]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="pendidikan_tingkat_tamat_slta" class="col-sm-3 control-label">Jumlah penduduk tamat SLTA/Sederajat</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="pendidikan_tingkat_tamat_slta" name="data[detail][pendidikan][tingkat][tamat_slta]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="pendidikan_tingkat_sedang_d1" class="col-sm-3 control-label">Jumlah penduduk sedang D-1</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="pendidikan_tingkat_sedang_d1" name="data[detail][pendidikan][tingkat][sedang_d1]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="pendidikan_tingkat_tamat_d1" class="col-sm-3 control-label">Jumlah penduduk tamat D-1</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="pendidikan_tingkat_tamat_d1" name="data[detail][pendidikan][tingkat][tamat_d1]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="pendidikan_tingkat_sedang_d2" class="col-sm-3 control-label">Jumlah penduduk sedang D-2</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="pendidikan_tingkat_sedang_d2" name="data[detail][pendidikan][tingkat][sedang_d2]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="pendidikan_tingkat_tamat_d2" class="col-sm-3 control-label">Jumlah penduduk tamat D-2</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="pendidikan_tingkat_tamat_d2" name="data[detail][pendidikan][tingkat][tamat_d2]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="pendidikan_tingkat_sedang_d3" class="col-sm-3 control-label">Jumlah penduduk sedang D-3</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="pendidikan_tingkat_sedang_d3" name="data[detail][pendidikan][tingkat][sedang_d3]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="pendidikan_tingkat_tamat_d3" class="col-sm-3 control-label">Jumlah penduduk tamat D-3</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="pendidikan_tingkat_tamat_d3" name="data[detail][pendidikan][tingkat][tamat_d3]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="pendidikan_tingkat_sedang_s1" class="col-sm-3 control-label">Jumlah penduduk sedang S-1</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="pendidikan_tingkat_sedang_s1" name="data[detail][pendidikan][tingkat][sedang_s1]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="pendidikan_tingkat_tamat_s1" class="col-sm-3 control-label">Jumlah penduduk tamat S-1</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="pendidikan_tingkat_tamat_s1" name="data[detail][pendidikan][tingkat][tamat_s1]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="pendidikan_tingkat_sedang_s2" class="col-sm-3 control-label">Jumlah penduduk sedang S-2</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="pendidikan_tingkat_sedang_s2" name="data[detail][pendidikan][tingkat][sedang_s2]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="pendidikan_tingkat_tamat_s2" class="col-sm-3 control-label">Jumlah penduduk tamat S-2</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="pendidikan_tingkat_tamat_s2" name="data[detail][pendidikan][tingkat][tamat_s2]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="pendidikan_tingkat_tamat_s3" class="col-sm-3 control-label">Jumlah penduduk tamat S-3</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="pendidikan_tingkat_tamat_s3" name="data[detail][pendidikan][tingkat][tamat_s3]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="pendidikan_tingkat_sedang_slba" class="col-sm-3 control-label">Jumlah penduduk sedang SLB A</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="pendidikan_tingkat_sedang_slba" name="data[detail][pendidikan][tingkat][sedang_slba]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="pendidikan_tingkat_tamat_slba" class="col-sm-3 control-label">Jumlah penduduk tamat SLB A</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="pendidikan_tingkat_tamat_slba" name="data[detail][pendidikan][tingkat][tamat_slba]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="pendidikan_tingkat_sedang_slbb" class="col-sm-3 control-label">Jumlah penduduk sedang SLB B</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="pendidikan_tingkat_sedang_slbb" name="data[detail][pendidikan][tingkat][sedang_slbb]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="pendidikan_tingkat_tamat_slbb" class="col-sm-3 control-label">Jumlah penduduk tamat SLB B</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="pendidikan_tingkat_tamat_slbb" name="data[detail][pendidikan][tingkat][tamat_slbb]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="pendidikan_tingkat_sedang_slbc" class="col-sm-3 control-label">Jumlah penduduk sedang SLB C</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="pendidikan_tingkat_sedang_slbc" name="data[detail][pendidikan][tingkat][sedang_slbc]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="pendidikan_tingkat_tamat_slbc" class="col-sm-3 control-label">Jumlah penduduk tamat SLB C</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="pendidikan_tingkat_tamat_slbc" name="data[detail][pendidikan][tingkat][tamat_slbc]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="pendidikan_tingkat_persentase_buta_huruf" class="col-sm-3 control-label">% Penduduk buta huruf [(1): jumlah penduduk] x 100%</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="pendidikan_tingkat_persentase_buta_huruf" name="data[detail][pendidikan][tingkat][persentase_buta_huruf]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="pendidikan_tingkat_persentase_tamat_sltp" class="col-sm-3 control-label">% Penduduk tamat SLTP/sederajat [(3):jumlah penduduk] x 100%</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="pendidikan_tingkat_persentase_tamat_sltp" name="data[detail][pendidikan][tingkat][persentase_tamat_sltp]" placeholder="Jumlah">
			</div>
		</div>

		<div class="form-group">
			<div class="col-md-12">
				<h4>B. Wajib belajar 9 tahun</h4>
			</div>
		</div>
		<div class="form-group">
			<label for="pendidikan_wajib_1" class="col-sm-3 control-label">Jumlah penduduk usia 7-15 tahun</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="pendidikan_wajib_1" name="data[detail][pendidikan][wajib][1]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="pendidikan_wajib_2" class="col-sm-3 control-label">Jumlah penduduk usia 7-15 tahun yang masih sekolah</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="pendidikan_wajib_2" name="data[detail][pendidikan][wajib][2]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="pendidikan_wajib_3" class="col-sm-3 control-label">Jumlah penduduk usia 7-15 tahun yang tidak sekolah</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="pendidikan_wajib_3" name="data[detail][pendidikan][wajib][3]" placeholder="Jumlah">
			</div>
		</div>

		<div class="form-group">
			<div class="col-md-12">
				<h4>C. Rasio Guru dan Murid</h4>
			</div>
		</div>
		<div class="form-group">
			<label for="pendidikan_rasio_guru_tk" class="col-sm-3 control-label">Jumlah guru TK dan kelompok bermain anak</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="pendidikan_rasio_guru_tk" name="data[detail][pendidikan][rasio][guru_tk]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="pendidikan_rasio_siswa_tk" class="col-sm-3 control-label">Jumlah siswa TK dan kelompok bermain anak</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="pendidikan_rasio_siswa_tk" name="data[detail][pendidikan][rasio][siswa_tk]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="pendidikan_rasio_guru_sd" class="col-sm-3 control-label">Jumlah guru SD dan sederajat</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="pendidikan_rasio_guru_sd" name="data[detail][pendidikan][rasio][guru_sd]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="pendidikan_rasio_siswa_sd" class="col-sm-3 control-label">Jumlah siswa SD dan sederajat</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="pendidikan_rasio_siswa_sd" name="data[detail][pendidikan][rasio][siswa_sd]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="pendidikan_rasio_guru_sltp" class="col-sm-3 control-label">Jumlah guru SLTP dan sederajat</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="pendidikan_rasio_guru_sltp" name="data[detail][pendidikan][rasio][guru_sltp]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="pendidikan_rasio_siswa_sltp" class="col-sm-3 control-label">Jumlah siswa SLTP dan sederajat</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="pendidikan_rasio_siswa_sltp" name="data[detail][pendidikan][rasio][siswa_sltp]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="pendidikan_rasio_guru_slta" class="col-sm-3 control-label">Jumlah guru SLTA/sederajat</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="pendidikan_rasio_guru_slta" name="data[detail][pendidikan][rasio][guru_slta]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="pendidikan_rasio_siswa_slta" class="col-sm-3 control-label">Jumlah siswa SLTA/sederajat</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="pendidikan_rasio_siswa_slta" name="data[detail][pendidikan][rasio][siswa_slta]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="pendidikan_rasio_siswa_slb" class="col-sm-3 control-label">Jumlah siswa SLB</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="pendidikan_rasio_siswa_slb" name="data[detail][pendidikan][rasio][siswa_slb]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="pendidikan_rasio_guru_slb" class="col-sm-3 control-label">Jumlah guru SLB</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="pendidikan_rasio_guru_slb" name="data[detail][pendidikan][rasio][guru_slb]" placeholder="Jumlah">
			</div>
		</div>

		<div class="form-group">
			<div class="col-md-12">
				<h4>D. Kelembagaan Pendidikan Masyarakat</h4>
			</div>
		</div>
		<div class="form-group">
			<label for="pendidikan_lembaga_perpustakaan_desa" class="col-sm-3 control-label">Jumlah perpustakaan desa/kelurahan (Unit)</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="pendidikan_lembaga_perpustakaan_desa" name="data[detail][pendidikan][lembaga][perpustakaan_desa]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="pendidikan_lembaga_taman_bacaan_desa" class="col-sm-3 control-label">Jumlah taman bacaan desa/kelurahan (Unit)</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="pendidikan_lembaga_taman_bacaan_desa" name="data[detail][pendidikan][lembaga][taman_bacaan_desa]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="pendidikan_lembaga_perpustakaan_keliling" class="col-sm-3 control-label">Jumlah perpustakaan keliling (Unit)</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="pendidikan_lembaga_perpustakaan_keliling" name="data[detail][pendidikan][lembaga][perpustakaan_keliling]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="pendidikan_lembaga_sanggar_belajar" class="col-sm-3 control-label">Jumlah sanggar belajar (Unit)</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="pendidikan_lembaga_sanggar_belajar" name="data[detail][pendidikan][lembaga][sanggar_belajar]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="pendidikan_lembaga_lembaga_pls" class="col-sm-3 control-label">Jumlah kegiatan lembaga pendidikan luar sekolah (Kegiatan)</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="pendidikan_lembaga_lembaga_pls" name="data[detail][pendidikan][lembaga][lembaga_pls]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="pendidikan_lembaga_kelompok_paket_a" class="col-sm-3 control-label">Jumlah kelompok belajar Paket A (Kelompok)</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="pendidikan_lembaga_kelompok_paket_a" name="data[detail][pendidikan][lembaga][kelompok_paket_a]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="pendidikan_lembaga_pesert_paket_a" class="col-sm-3 control-label">Jumlah peserta ujian Paket A (Orang)</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="pendidikan_lembaga_pesert_paket_a" name="data[detail][pendidikan][lembaga][pesert_paket_a]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="pendidikan_lembaga_kelompok_paket_b" class="col-sm-3 control-label">Jumlah kelompok belajar Paket B (Kelompok)</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="pendidikan_lembaga_kelompok_paket_b" name="data[detail][pendidikan][lembaga][kelompok_paket_b]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="pendidikan_lembaga_pesert_paket_b" class="col-sm-3 control-label">Jumlah Peserta ujian Paket B (Orang)</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="pendidikan_lembaga_pesert_paket_b" name="data[detail][pendidikan][lembaga][pesert_paket_b]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="pendidikan_lembaga_kelompok_paket_c" class="col-sm-3 control-label">Jumlah kelompok belajar Paket C (Kelompok)</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="pendidikan_lembaga_kelompok_paket_c" name="data[detail][pendidikan][lembaga][kelompok_paket_c]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="pendidikan_lembaga_pesert_paket_c" class="col-sm-3 control-label">Jumlah peserta ujian Paket C (Orang)</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="pendidikan_lembaga_pesert_paket_c" name="data[detail][pendidikan][lembaga][pesert_paket_c]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="pendidikan_lembaga_lembaga_kk" class="col-sm-3 control-label">Jumlah lembaga kursus keterampilan (Unit)</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="pendidikan_lembaga_lembaga_kk" name="data[detail][pendidikan][lembaga][lembaga_kk]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="pendidikan_lembaga_peserta_kk" class="col-sm-3 control-label">Jumlah peserta kursus keterampilan (Orang)</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="pendidikan_lembaga_peserta_kk" name="data[detail][pendidikan][lembaga][peserta_kk]" placeholder="Jumlah">
			</div>
		</div>

		<div class="form-group">
			<div class="col-md-12">
				<h3>9. Kesehatan Masyarakat</h3>
				<h4>A. Kualitas Ibu Hamil</h4>
			</div>
		</div>
		<div class="form-group">
			<label for="kesehatan_bumil_bumil" class="col-sm-3 control-label">Jumlah ibu hamil</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="kesehatan_bumil_bumil" name="data[detail][kesehatan][bumil][bumil]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="kesehatan_bumil_bumil_di_posyandu" class="col-sm-3 control-label">Jumlah ibu hamil periksa di Posyandu</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="kesehatan_bumil_bumil_di_posyandu" name="data[detail][kesehatan][bumil][bumil_di_posyandu]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="kesehatan_bumil_bumil_di_puskesmas" class="col-sm-3 control-label">Jumlah ibu hamil periksa di Puskesmas</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="kesehatan_bumil_bumil_di_puskesmas" name="data[detail][kesehatan][bumil][bumil_di_puskesmas]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="kesehatan_bumil_bumil_di_rs" class="col-sm-3 control-label">Jumlah ibu hamil periksa di Rumah Sakit</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="kesehatan_bumil_bumil_di_rs" name="data[detail][kesehatan][bumil][bumil_di_rs]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="kesehatan_bumil_bumil_di_dokter" class="col-sm-3 control-label">Jumlah ibu hamil periksa di Dokter Praktek</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="kesehatan_bumil_bumil_di_dokter" name="data[detail][kesehatan][bumil][bumil_di_dokter]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="kesehatan_bumil_bumil_di_bidan" class="col-sm-3 control-label">Jumlah ibu hamil periksa di Bidan Praktek</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="kesehatan_bumil_bumil_di_bidan" name="data[detail][kesehatan][bumil][bumil_di_bidan]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="kesehatan_bumil_bumil_di_dukun" class="col-sm-3 control-label">Jumlah ibu hamil periksa di Dukun Terlatih</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="kesehatan_bumil_bumil_di_dukun" name="data[detail][kesehatan][bumil][bumil_di_dukun]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="kesehatan_bumil_kematian_bumil" class="col-sm-3 control-label">Jumlah kematian ibu hamil</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="kesehatan_bumil_kematian_bumil" name="data[detail][kesehatan][bumil][kematian_bumil]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="kesehatan_bumil_bumil_melahirkan" class="col-sm-3 control-label">Jumlah ibu hamil melahirkan</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="kesehatan_bumil_bumil_melahirkan" name="data[detail][kesehatan][bumil][bumil_melahirkan]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="kesehatan_bumil_nifas" class="col-sm-3 control-label">Jumlah ibu nifas</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="kesehatan_bumil_nifas" name="data[detail][kesehatan][bumil][nifas]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="kesehatan_bumil_kematian_nifas" class="col-sm-3 control-label">Jumlah kematian ibu nifas</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="kesehatan_bumil_kematian_nifas" name="data[detail][kesehatan][bumil][kematian_nifas]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="kesehatan_bumil_nifas_hidup" class="col-sm-3 control-label">Jumlah ibu nifas hidup</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="kesehatan_bumil_nifas_hidup" name="data[detail][kesehatan][bumil][nifas_hidup]" placeholder="Jumlah">
			</div>
		</div>

		<div class="form-group">
			<div class="col-md-12">
				<h4>B. Kualitas Bayi</h4>
			</div>
		</div>
		<div class="form-group">
			<label for="kesehatan_bayi_keguguran" class="col-sm-3 control-label">Jumlah keguguran kandungan</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="kesehatan_bayi_keguguran" name="data[detail][kesehatan][bayi][keguguran]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="kesehatan_bayi_lahir" class="col-sm-3 control-label">Jumlah bayi lahir</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="kesehatan_bayi_lahir" name="data[detail][kesehatan][bayi][lahir]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="kesehatan_bayi_lahir_mati" class="col-sm-3 control-label">Jumlah bayi lahir mati</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="kesehatan_bayi_lahir_mati" name="data[detail][kesehatan][bayi][lahir_mati]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="kesehatan_bayi_lahir_hidup" class="col-sm-3 control-label">Jumlah bayi lahir hidup</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="kesehatan_bayi_lahir_hidup" name="data[detail][kesehatan][bayi][lahir_hidup]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="kesehatan_bayi_mati_01" class="col-sm-3 control-label">Jumlah bayi mati usia 0 – 1 bulan</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="kesehatan_bayi_mati_01" name="data[detail][kesehatan][bayi][mati_01]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="kesehatan_bayi_mati_112" class="col-sm-3 control-label">Jumlah bayi mati usia 1 – 12 bulan</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="kesehatan_bayi_mati_112" name="data[detail][kesehatan][bayi][mati_112]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="kesehatan_bayi_berat_kurang" class="col-sm-3 control-label">Jumlah bayi lahir berat kurang dari 2,5 kg</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="kesehatan_bayi_berat_kurang" name="data[detail][kesehatan][bayi][berat_kurang]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="kesehatan_bayi_kelainan" class="col-sm-3 control-label">Jumlah bayi 0-5 tahun hidup yang menderita kelainan organ tubuh, fisik dan mental</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="kesehatan_bayi_kelainan" name="data[detail][kesehatan][bayi][kelainan]" placeholder="Jumlah">
			</div>
		</div>

		<div class="form-group">
			<div class="col-md-12">
				<h4>C. Kualitas Persalinan</h4>
				<h4>Tempat Persalinan</h4>
			</div>
		</div>
		<div class="form-group">
			<label for="kesehatan_persalinan_tempat_rsu" class="col-sm-3 control-label">Tempat persalinan Rumah Sakit Umum</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="kesehatan_persalinan_tempat_rsu" name="data[detail][kesehatan][persalinan][tempat][rsu]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="kesehatan_persalinan_tempat_rb" class="col-sm-3 control-label">Tempat persalinan Rumah Bersalin</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="kesehatan_persalinan_tempat_rb" name="data[detail][kesehatan][persalinan][tempat][rb]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="kesehatan_persalinan_tempat_puskesmas" class="col-sm-3 control-label">Tempat persalinan Puskesmas</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="kesehatan_persalinan_tempat_puskesmas" name="data[detail][kesehatan][persalinan][tempat][puskesmas]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="kesehatan_persalinan_tempat_polindes" class="col-sm-3 control-label">Tempat persalinan Polindes</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="kesehatan_persalinan_tempat_polindes" name="data[detail][kesehatan][persalinan][tempat][polindes]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="kesehatan_persalinan_tempat_bbkia" class="col-sm-3 control-label">Tempat persalinan Balai Kesehatan Ibu Anak</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="kesehatan_persalinan_tempat_bbkia" name="data[detail][kesehatan][persalinan][tempat][bbkia]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="kesehatan_persalinan_tempat_rpb" class="col-sm-3 control-label">Tempat persalinan rumah praktek bidan</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="kesehatan_persalinan_tempat_rpb" name="data[detail][kesehatan][persalinan][tempat][rpb]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="kesehatan_persalinan_tempat_tpd" class="col-sm-3 control-label">Tempat praktek dokter</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="kesehatan_persalinan_tempat_tpd" name="data[detail][kesehatan][persalinan][tempat][tpd]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="kesehatan_persalinan_tempat_rd" class="col-sm-3 control-label">Rumah dukun</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="kesehatan_persalinan_tempat_rd" name="data[detail][kesehatan][persalinan][tempat][rd]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="kesehatan_persalinan_tempat_rumah" class="col-sm-3 control-label">Rumah sendiri</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="kesehatan_persalinan_tempat_rumah" name="data[detail][kesehatan][persalinan][tempat][rumah]" placeholder="Jumlah">
			</div>
		</div>

		<div class="form-group">
			<div class="col-md-12">
				<h4>Pertolongan Persalinan</h4>
			</div>
		</div>
		<div class="form-group">
			<label for="kesehatan_persalinan_pertolongan_dokter" class="col-sm-3 control-label">Jumlah Persalinan ditolong Dokter</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="kesehatan_persalinan_pertolongan_dokter" name="data[detail][kesehatan][persalinan][pertolongan][dokter]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="kesehatan_persalinan_pertolongan_bidan" class="col-sm-3 control-label">Jumlah persalinan ditolong bidan</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="kesehatan_persalinan_pertolongan_bidan" name="data[detail][kesehatan][persalinan][pertolongan][bidan]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="kesehatan_persalinan_pertolongan_perawat" class="col-sm-3 control-label">Jumlah persalinan ditolong perawat</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="kesehatan_persalinan_pertolongan_perawat" name="data[detail][kesehatan][persalinan][pertolongan][perawat]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="kesehatan_persalinan_pertolongan_dukun" class="col-sm-3 control-label">Jumlah persalinan ditolong dukun bersalin</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="kesehatan_persalinan_pertolongan_dukun" name="data[detail][kesehatan][persalinan][pertolongan][dukun]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="kesehatan_persalinan_pertolongan_keluarga" class="col-sm-3 control-label">Jumlah persalinan ditolong keluarga</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="kesehatan_persalinan_pertolongan_keluarga" name="data[detail][kesehatan][persalinan][pertolongan][keluarga]" placeholder="Jumlah">
			</div>
		</div>

		<div class="form-group">
			<div class="col-md-12">
				<h4>D. Cakupan Imunisasi</h4>
			</div>
		</div>
		<div class="form-group">
			<label for="kesehatan_imunisasi_1" class="col-sm-3 control-label">Jumlah Bayi usia 2 bulan</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="kesehatan_imunisasi_1" name="data[detail][kesehatan][imunisasi][1]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="kesehatan_imunisasi_2" class="col-sm-3 control-label">Jumlah bayi 2 bulan Imunisasi DPT-1, BCG dan Polio -1</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="kesehatan_imunisasi_2" name="data[detail][kesehatan][imunisasi][2]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="kesehatan_imunisasi_3" class="col-sm-3 control-label">Jumlah bayi usia 3 bulan</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="kesehatan_imunisasi_3" name="data[detail][kesehatan][imunisasi][3]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="kesehatan_imunisasi_4" class="col-sm-3 control-label">Jumlah bayi 3 bulan yang imunisasi DPT-2 dan Polio-2</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="kesehatan_imunisasi_4" name="data[detail][kesehatan][imunisasi][4]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="kesehatan_imunisasi_5" class="col-sm-3 control-label">Jumlah bayi usia 4 bulan</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="kesehatan_imunisasi_5" name="data[detail][kesehatan][imunisasi][5]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="kesehatan_imunisasi_6" class="col-sm-3 control-label">Jumlah bayi 4 bulan yang imunisasi DPT-3 dan Polio-3</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="kesehatan_imunisasi_6" name="data[detail][kesehatan][imunisasi][6]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="kesehatan_imunisasi_7" class="col-sm-3 control-label">Jumlah bayi 9 bulan</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="kesehatan_imunisasi_7" name="data[detail][kesehatan][imunisasi][7]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="kesehatan_imunisasi_8" class="col-sm-3 control-label">Jumlah bayi 9 bulan yang imunisasi campak</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="kesehatan_imunisasi_8" name="data[detail][kesehatan][imunisasi][8]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="kesehatan_imunisasi_9" class="col-sm-3 control-label">Jumlah bayi yang sudah imunisasi cacar</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="kesehatan_imunisasi_9" name="data[detail][kesehatan][imunisasi][9]" placeholder="Jumlah">
			</div>
		</div>

		<div class="form-group">
			<div class="col-md-12">
				<h4>E. Perkembangan Pasangan Usia Subur dan KB</h4>
				<h4>Pasangan Usia Subur</h4>
			</div>
		</div>
		<div class="form-group">
			<label for="kesehatan_subur_1" class="col-sm-3 control-label">Jumlah remaja putri usia 12 – 17 tahun</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="kesehatan_subur_1" name="data[detail][kesehatan][subur][1]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="kesehatan_subur_1" class="col-sm-3 control-label">Jumlah perempuan usia subur 15 – 49 tahun</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="kesehatan_subur_1" name="data[detail][kesehatan][subur][2]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="kesehatan_subur_1" class="col-sm-3 control-label">Jumlah wanita kawin muda usia kurang dari 16 tahun</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="kesehatan_subur_1" name="data[detail][kesehatan][subur][3]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="kesehatan_subur_1" class="col-sm-3 control-label">Jumlah pasangan usia subur (Pasangan)</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="kesehatan_subur_1" name="data[detail][kesehatan][subur][4]" placeholder="Jumlah">
			</div>
		</div>

		<div class="form-group">
			<div class="col-md-12">
				<h4>Keluarga Berencana</h4>
			</div>
		</div>
		<div class="form-group">
			<label for="kesehatan_kb_1" class="col-sm-3 control-label">Jumlah akseptor KB</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="kesehatan_kb_1" name="data[detail][kesehatan][kb][1]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="kesehatan_kb_2" class="col-sm-3 control-label">Jumlah pengguna alat kontrasepsi suntik</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="kesehatan_kb_2" name="data[detail][kesehatan][kb][2]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="kesehatan_kb_3" class="col-sm-3 control-label">Jumlah pengguna metode kontrasepsi spiral</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="kesehatan_kb_3" name="data[detail][kesehatan][kb][3]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="kesehatan_kb_4" class="col-sm-3 control-label">Jumlah pengguna alat kontrasepsi kondom</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="kesehatan_kb_4" name="data[detail][kesehatan][kb][4]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="kesehatan_kb_5" class="col-sm-3 control-label">Jumlah pengguna metode kontrasepsi pil</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="kesehatan_kb_5" name="data[detail][kesehatan][kb][5]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="kesehatan_kb_6" class="col-sm-3 control-label">Jumlah pengguna metode vasektomi</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="kesehatan_kb_6" name="data[detail][kesehatan][kb][6]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="kesehatan_kb_7" class="col-sm-3 control-label">Jumlah pengguna metode kontrasepsi tubektomi</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="kesehatan_kb_7" name="data[detail][kesehatan][kb][7]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="kesehatan_kb_8" class="col-sm-3 control-label">Jumlah pengguna metode KB Kelender/KB Alamiah</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="kesehatan_kb_8" name="data[detail][kesehatan][kb][8]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="kesehatan_kb_9" class="col-sm-3 control-label">Jumlah pengguna metode KB obat tradisional</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="kesehatan_kb_9" name="data[detail][kesehatan][kb][9]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="kesehatan_kb_lainnya" class="col-sm-3 control-label">Lainnya</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="kesehatan_kb_lainnya" name="data[detail][kesehatan][kb][lainnya][keterangan]" placeholder="Keterangan"><br>
				<input type="text" class="form-control" id="kesehatan_kb_lainnya" name="data[detail][kesehatan][kb][lainnya][jumlah]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="kesehatan_kb_tidak" class="col-sm-3 control-label">Jumlah PUS yang tidak menggunakan metode KB</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="kesehatan_kb_tidak" name="data[detail][kesehatan][kb][tidak]" placeholder="Jumlah">
			</div>
		</div>

		<div class="form-group">
			<div class="col-md-12">
				<h4>F. Wabah Penyakit</h4>
			</div>
		</div>
		<div class="form-group">
			<label for="kesehatan_wabah_1" class="col-sm-3 control-label">Muntaber</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="kesehatan_wabah_1" name="data[detail][kesehatan][wabah][1][kejadian]" placeholder="Jumlah Kejadian Tahun Ini"><br>
				<input type="text" class="form-control" id="kesehatan_wabah_1" name="data[detail][kesehatan][wabah][1][meninggal]" placeholder="Jumlah Meninggal (Orang)">
			</div>
		</div>
		<div class="form-group">
			<label for="kesehatan_wabah_2" class="col-sm-3 control-label">Demam Berdarah</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="kesehatan_wabah_2" name="data[detail][kesehatan][wabah][2][kejadian]" placeholder="Jumlah Kejadian Tahun Ini"><br>
				<input type="text" class="form-control" id="kesehatan_wabah_2" name="data[detail][kesehatan][wabah][2][meninggal]" placeholder="Jumlah Meninggal (Orang)">
			</div>
		</div>
		<div class="form-group">
			<label for="kesehatan_wabah_3" class="col-sm-3 control-label">Kolera</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="kesehatan_wabah_3" name="data[detail][kesehatan][wabah][3][kejadian]" placeholder="Jumlah Kejadian Tahun Ini"><br>
				<input type="text" class="form-control" id="kesehatan_wabah_3" name="data[detail][kesehatan][wabah][3][meninggal]" placeholder="Jumlah Meninggal (Orang)">
			</div>
		</div>
		<div class="form-group">
			<label for="kesehatan_wabah_4" class="col-sm-3 control-label">Polio</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="kesehatan_wabah_4" name="data[detail][kesehatan][wabah][4][kejadian]" placeholder="Jumlah Kejadian Tahun Ini"><br>
				<input type="text" class="form-control" id="kesehatan_wabah_4" name="data[detail][kesehatan][wabah][4][meninggal]" placeholder="Jumlah Meninggal (Orang)">
			</div>
		</div>
		<div class="form-group">
			<label for="kesehatan_wabah_5" class="col-sm-3 control-label">Cikungunya</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="kesehatan_wabah_5" name="data[detail][kesehatan][wabah][5][kejadian]" placeholder="Jumlah Kejadian Tahun Ini"><br>
				<input type="text" class="form-control" id="kesehatan_wabah_5" name="data[detail][kesehatan][wabah][5][meninggal]" placeholder="Jumlah Meninggal (Orang)">
			</div>
		</div>
		<div class="form-group">
			<label for="kesehatan_wabah_6" class="col-sm-3 control-label">Flu Burung</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="kesehatan_wabah_6" name="data[detail][kesehatan][wabah][6][kejadian]" placeholder="Jumlah Kejadian Tahun Ini"><br>
				<input type="text" class="form-control" id="kesehatan_wabah_6" name="data[detail][kesehatan][wabah][6][meninggal]" placeholder="Jumlah Meninggal (Orang)">
			</div>
		</div>
		<div class="form-group">
			<label for="kesehatan_wabah_7" class="col-sm-3 control-label">Busung Lapar</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="kesehatan_wabah_7" name="data[detail][kesehatan][wabah][7][kejadian]" placeholder="Jumlah Kejadian Tahun Ini"><br>
				<input type="text" class="form-control" id="kesehatan_wabah_7" name="data[detail][kesehatan][wabah][7][meninggal]" placeholder="Jumlah Meninggal (Orang)">
			</div>
		</div>
		<div class="form-group">
			<label for="kesehatan_wabah_8" class="col-sm-3 control-label">Kelaparan</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="kesehatan_wabah_8" name="data[detail][kesehatan][wabah][8][kejadian]" placeholder="Jumlah Kejadian Tahun Ini"><br>
				<input type="text" class="form-control" id="kesehatan_wabah_8" name="data[detail][kesehatan][wabah][8][meninggal]" placeholder="Jumlah Meninggal (Orang)">
			</div>
		</div>

		<div class="form-group">
			<div class="col-md-12">
				<h4>G. Angka Harapan Hidup</h4>
			</div>
		</div>
		<div class="form-group">
			<label for="kesehatan_harapan_1" class="col-sm-3 control-label">Angka harapan hidup penduduk Desa/Kelurahan</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="kesehatan_harapan_1" name="data[detail][kesehatan][harapan][1]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="kesehatan_harapan_2" class="col-sm-3 control-label">Angka harapan hidup penduduk Kabupaten/Kota</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="kesehatan_harapan_2" name="data[detail][kesehatan][harapan][2]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="kesehatan_harapan_3" class="col-sm-3 control-label">Angka Harapan Hidup Provinsi</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="kesehatan_harapan_3" name="data[detail][kesehatan][harapan][3]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="kesehatan_harapan_4" class="col-sm-3 control-label">Angka harapan Hidup Nasional</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="kesehatan_harapan_4" name="data[detail][kesehatan][harapan][4]" placeholder="Jumlah">
			</div>
		</div>

		<div class="form-group">
			<div class="col-md-12">
				<h4>H. Cakupan pemenuhan kebutuhan air bersih</h4>
			</div>
		</div>
		<div class="form-group">
			<label for="kesehatan_air_1" class="col-sm-3 control-label">Jumlah keluarga menggunakan sumur gali</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="kesehatan_air_1" name="data[detail][kesehatan][air][1]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="kesehatan_air_2" class="col-sm-3 control-label">Jumlah keluarga pelanggan PAM</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="kesehatan_air_2" name="data[detail][kesehatan][air][2]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="kesehatan_air_3" class="col-sm-3 control-label">Jumlah keluarga menggunakan Penampung Air Hujan</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="kesehatan_air_3" name="data[detail][kesehatan][air][3]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="kesehatan_air_4" class="col-sm-3 control-label">Jumlah keluarga menggunakan sumur pompa</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="kesehatan_air_4" name="data[detail][kesehatan][air][4]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="kesehatan_air_5" class="col-sm-3 control-label">Jumlah keluarga menggunakan perpipaan air kran</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="kesehatan_air_5" name="data[detail][kesehatan][air][5]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="kesehatan_air_6" class="col-sm-3 control-label">Jumlah keluarga menggunakan hidran umum</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="kesehatan_air_6" name="data[detail][kesehatan][air][6]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="kesehatan_air_7" class="col-sm-3 control-label">Jumlah keluarga menggunakan air sungai</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="kesehatan_air_7" name="data[detail][kesehatan][air][7]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="kesehatan_air_8" class="col-sm-3 control-label">Jumlah keluarga menggunakan embung</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="kesehatan_air_8" name="data[detail][kesehatan][air][8]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="kesehatan_air_9" class="col-sm-3 control-label">Jumlah keluarga yang menggunakan mata air</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="kesehatan_air_9" name="data[detail][kesehatan][air][9]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="kesehatan_air_10" class="col-sm-3 control-label">Jumlah keluarga yang tidak mendapatkan akses air minum dari air laut</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="kesehatan_air_10" name="data[detail][kesehatan][air][10]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="kesehatan_air_11" class="col-sm-3 control-label">Jumlah keluarga yang tidak mendapatkan akses air minum dari sumber di atas</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="kesehatan_air_11" name="data[detail][kesehatan][air][11]" placeholder="Jumlah">
			</div>
		</div>

		<div class="form-group">
			<div class="col-md-12">
				<h4>I. Perilaku hidup bersih dan sehat</h4>
				<h4>Kebiasaan buang air besar</h4>
			</div>
		</div>
		<div class="form-group">
			<label for="kesehatan_bab_1" class="col-sm-3 control-label">Jumlah keluarga memiliki WC yang sehat</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="kesehatan_bab_1" name="data[detail][kesehatan][bab][1]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="kesehatan_bab_2" class="col-sm-3 control-label">Jumlah keluarga memiliki WC yang kurang memenuhi standar kesehatan</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="kesehatan_bab_2" name="data[detail][kesehatan][bab][2]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="kesehatan_bab_3" class="col-sm-3 control-label">Jumlah keluarga biasa buang air besar di sungai/parit/kebun/hutan</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="kesehatan_bab_3" name="data[detail][kesehatan][bab][3]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="kesehatan_bab_4" class="col-sm-3 control-label">Jumlah keluarga yang menggunakan fasilitas MCK umum</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="kesehatan_bab_4" name="data[detail][kesehatan][bab][4]" placeholder="Jumlah">
			</div>
		</div>

		<div class="form-group">
			<div class="col-md-12">
				<h4>Pola makan</h4>
			</div>
		</div>
		<div class="form-group">
			<label for="kesehatan_makan_1" class="col-sm-3 control-label">Kebiasaan penduduk makan dlm sehari 1 kali</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="kesehatan_makan_1" name="data[detail][kesehatan][makan][1]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="kesehatan_makan_2" class="col-sm-3 control-label">Kebiasaan penduduk makan sehari 2 kali</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="kesehatan_makan_2" name="data[detail][kesehatan][makan][2]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="kesehatan_makan_3" class="col-sm-3 control-label">Kebiasaan penduduk makan sehari 3 kali</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="kesehatan_makan_3" name="data[detail][kesehatan][makan][3]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="kesehatan_makan_4" class="col-sm-3 control-label">Kebiasaan penduduk makan sehari lebih dari 3 kali</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="kesehatan_makan_4" name="data[detail][kesehatan][makan][4]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="kesehatan_makan_5" class="col-sm-3 control-label">Penduduk yang belum tentu sehari makan 1 kali</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="kesehatan_makan_5" name="data[detail][kesehatan][makan][5]" placeholder="Jumlah">
			</div>
		</div>

		<div class="form-group">
			<div class="col-md-12">
				<h4>Kebiasaan berobat bila sakit</h4>
			</div>
		</div>
		<div class="form-group">
			<label for="kesehatan_berobat_1" class="col-sm-3 control-label">Dukun Terlatih</label>
			<div class="col-sm-5">
				<select class="form-control" id="kesehatan_berobat_1" name="data[detail][kesehatan][berobat][1]">
					<option value="Tidak ada">Tidak ada</option>
					<option value="Sedikit">Sedikit</option>
					<option value="Banyak">Banyak</option>
				</select>
			</div>
		</div>
		<div class="form-group">
			<label for="kesehatan_berobat_2" class="col-sm-3 control-label">Dokter/puskesmas/mantri kesehatan/perawat/bidan/posyandu</label>
			<div class="col-sm-5">
				<select class="form-control" id="kesehatan_berobat_2" name="data[detail][kesehatan][berobat][2]">
					<option value="Tidak ada">Tidak ada</option>
					<option value="Sedikit">Sedikit</option>
					<option value="Banyak">Banyak</option>
				</select>
			</div>
		</div>
		<div class="form-group">
			<label for="kesehatan_berobat_3" class="col-sm-3 control-label">Obat tradisional dari dukun pengobatan alternatif</label>
			<div class="col-sm-5">
				<select class="form-control" id="kesehatan_berobat_3" name="data[detail][kesehatan][berobat][3]">
					<option value="Tidak ada">Tidak ada</option>
					<option value="Sedikit">Sedikit</option>
					<option value="Banyak">Banyak</option>
				</select>
			</div>
		</div>
		<div class="form-group">
			<label for="kesehatan_berobat_4" class="col-sm-3 control-label">Paranormal</label>
			<div class="col-sm-5">
				<select class="form-control" id="kesehatan_berobat_4" name="data[detail][kesehatan][berobat][4]">
					<option value="Tidak ada">Tidak ada</option>
					<option value="Sedikit">Sedikit</option>
					<option value="Banyak">Banyak</option>
				</select>
			</div>
		</div>
		<div class="form-group">
			<label for="kesehatan_berobat_5" class="col-sm-3 control-label">Obat tradisional dari keluarga sendiri</label>
			<div class="col-sm-5">
				<select class="form-control" id="kesehatan_berobat_5" name="data[detail][kesehatan][berobat][5]">
					<option value="Tidak ada">Tidak ada</option>
					<option value="Sedikit">Sedikit</option>
					<option value="Banyak">Banyak</option>
				</select>
			</div>
		</div>
		<div class="form-group">
			<label for="kesehatan_berobat_6" class="col-sm-3 control-label">Tidak diobati</label>
			<div class="col-sm-5">
				<select class="form-control" id="kesehatan_berobat_6" name="data[detail][kesehatan][berobat][6]">
					<option value="Tidak ada">Tidak ada</option>
					<option value="Sedikit">Sedikit</option>
					<option value="Banyak">Banyak</option>
				</select>
			</div>
		</div>

		<div class="form-group">
			<div class="col-md-12">
				<h4>J. Status Gizi Balita</h4>
			</div>
		</div>
		<div class="form-group">
			<label for="kesehatan_balita_1" class="col-sm-3 control-label">Jumlah Balita</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="kesehatan_balita_1" name="data[detail][kesehatan][balita][1]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="kesehatan_balita_2" class="col-sm-3 control-label">Jumlah Balita bergizi buruk</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="kesehatan_balita_2" name="data[detail][kesehatan][balita][2]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="kesehatan_balita_3" class="col-sm-3 control-label">Jumlah Balita bergizi baik</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="kesehatan_balita_3" name="data[detail][kesehatan][balita][3]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="kesehatan_balita_4" class="col-sm-3 control-label">Jumlah Balita bergizi kurang</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="kesehatan_balita_4" name="data[detail][kesehatan][balita][4]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="kesehatan_balita_5" class="col-sm-3 control-label">Jumlah Balita bergizi lebih</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="kesehatan_balita_5" name="data[detail][kesehatan][balita][5]" placeholder="Jumlah">
			</div>
		</div>

		<div class="form-group">
			<div class="col-md-12">
				<h4>K. Jumlah Penderita Sakit tahun ini</h4>
			</div>
		</div>
		<div class="form-group">
			<label for="kesehatan_penderita_1" class="col-sm-3 control-label">Jantung</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="kesehatan_penderita_1" name="data[detail][kesehatan][penderita][1][jumlah]" placeholder="Jumlah penderita"><br>
				<input type="text" class="form-control" id="kesehatan_penderita_1" name="data[detail][kesehatan][penderita][1][rumah]" placeholder="Di rawat di Rumah"><br>
				<input type="text" class="form-control" id="kesehatan_penderita_1" name="data[detail][kesehatan][penderita][1][rs]" placeholder="Di rawat di Rumah Sakit"><br>
				<input type="text" class="form-control" id="kesehatan_penderita_1" name="data[detail][kesehatan][penderita][1][puskesmas]" placeholder="Di rawat di Puskesmas">
			</div>
		</div>
		<div class="form-group">
			<label for="kesehatan_penderita_2" class="col-sm-3 control-label">Lever</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="kesehatan_penderita_2" name="data[detail][kesehatan][penderita][2][jumlah]" placeholder="Jumlah penderita"><br>
				<input type="text" class="form-control" id="kesehatan_penderita_2" name="data[detail][kesehatan][penderita][2][rumah]" placeholder="Di rawat di Rumah"><br>
				<input type="text" class="form-control" id="kesehatan_penderita_2" name="data[detail][kesehatan][penderita][2][rs]" placeholder="Di rawat di Rumah Sakit"><br>
				<input type="text" class="form-control" id="kesehatan_penderita_2" name="data[detail][kesehatan][penderita][2][puskesmas]" placeholder="Di rawat di Puskesmas">
			</div>
		</div>
		<div class="form-group">
			<label for="kesehatan_penderita_3" class="col-sm-3 control-label">Paru-paru</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="kesehatan_penderita_3" name="data[detail][kesehatan][penderita][3][jumlah]" placeholder="Jumlah penderita"><br>
				<input type="text" class="form-control" id="kesehatan_penderita_3" name="data[detail][kesehatan][penderita][3][rumah]" placeholder="Di rawat di Rumah"><br>
				<input type="text" class="form-control" id="kesehatan_penderita_3" name="data[detail][kesehatan][penderita][3][rs]" placeholder="Di rawat di Rumah Sakit"><br>
				<input type="text" class="form-control" id="kesehatan_penderita_3" name="data[detail][kesehatan][penderita][3][puskesmas]" placeholder="Di rawat di Puskesmas">
			</div>
		</div>
		<div class="form-group">
			<label for="kesehatan_penderita_4" class="col-sm-3 control-label">Kanker</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="kesehatan_penderita_4" name="data[detail][kesehatan][penderita][4][jumlah]" placeholder="Jumlah penderita"><br>
				<input type="text" class="form-control" id="kesehatan_penderita_4" name="data[detail][kesehatan][penderita][4][rumah]" placeholder="Di rawat di Rumah"><br>
				<input type="text" class="form-control" id="kesehatan_penderita_4" name="data[detail][kesehatan][penderita][4][rs]" placeholder="Di rawat di Rumah Sakit"><br>
				<input type="text" class="form-control" id="kesehatan_penderita_4" name="data[detail][kesehatan][penderita][4][puskesmas]" placeholder="Di rawat di Puskesmas">
			</div>
		</div>
		<div class="form-group">
			<label for="kesehatan_penderita_5" class="col-sm-3 control-label">Stroke</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="kesehatan_penderita_5" name="data[detail][kesehatan][penderita][5][jumlah]" placeholder="Jumlah penderita"><br>
				<input type="text" class="form-control" id="kesehatan_penderita_5" name="data[detail][kesehatan][penderita][5][rumah]" placeholder="Di rawat di Rumah"><br>
				<input type="text" class="form-control" id="kesehatan_penderita_5" name="data[detail][kesehatan][penderita][5][rs]" placeholder="Di rawat di Rumah Sakit"><br>
				<input type="text" class="form-control" id="kesehatan_penderita_5" name="data[detail][kesehatan][penderita][5][puskesmas]" placeholder="Di rawat di Puskesmas">
			</div>
		</div>
		<div class="form-group">
			<label for="kesehatan_penderita_6" class="col-sm-3 control-label">Diabetes Melitus</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="kesehatan_penderita_6" name="data[detail][kesehatan][penderita][6][jumlah]" placeholder="Jumlah penderita"><br>
				<input type="text" class="form-control" id="kesehatan_penderita_6" name="data[detail][kesehatan][penderita][6][rumah]" placeholder="Di rawat di Rumah"><br>
				<input type="text" class="form-control" id="kesehatan_penderita_6" name="data[detail][kesehatan][penderita][6][rs]" placeholder="Di rawat di Rumah Sakit"><br>
				<input type="text" class="form-control" id="kesehatan_penderita_6" name="data[detail][kesehatan][penderita][6][puskesmas]" placeholder="Di rawat di Puskesmas">
			</div>
		</div>
		<div class="form-group">
			<label for="kesehatan_penderita_7" class="col-sm-3 control-label">Ginjal</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="kesehatan_penderita_7" name="data[detail][kesehatan][penderita][7][jumlah]" placeholder="Jumlah penderita"><br>
				<input type="text" class="form-control" id="kesehatan_penderita_7" name="data[detail][kesehatan][penderita][7][rumah]" placeholder="Di rawat di Rumah"><br>
				<input type="text" class="form-control" id="kesehatan_penderita_7" name="data[detail][kesehatan][penderita][7][rs]" placeholder="Di rawat di Rumah Sakit"><br>
				<input type="text" class="form-control" id="kesehatan_penderita_7" name="data[detail][kesehatan][penderita][7][puskesmas]" placeholder="Di rawat di Puskesmas">
			</div>
		</div>
		<div class="form-group">
			<label for="kesehatan_penderita_8" class="col-sm-3 control-label">Malaria</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="kesehatan_penderita_8" name="data[detail][kesehatan][penderita][8][jumlah]" placeholder="Jumlah penderita"><br>
				<input type="text" class="form-control" id="kesehatan_penderita_8" name="data[detail][kesehatan][penderita][8][rumah]" placeholder="Di rawat di Rumah"><br>
				<input type="text" class="form-control" id="kesehatan_penderita_8" name="data[detail][kesehatan][penderita][8][rs]" placeholder="Di rawat di Rumah Sakit"><br>
				<input type="text" class="form-control" id="kesehatan_penderita_8" name="data[detail][kesehatan][penderita][8][puskesmas]" placeholder="Di rawat di Puskesmas">
			</div>
		</div>
		<div class="form-group">
			<label for="kesehatan_penderita_9" class="col-sm-3 control-label">Lepra/Kusta</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="kesehatan_penderita_9" name="data[detail][kesehatan][penderita][9][jumlah]" placeholder="Jumlah penderita"><br>
				<input type="text" class="form-control" id="kesehatan_penderita_9" name="data[detail][kesehatan][penderita][9][rumah]" placeholder="Di rawat di Rumah"><br>
				<input type="text" class="form-control" id="kesehatan_penderita_9" name="data[detail][kesehatan][penderita][9][rs]" placeholder="Di rawat di Rumah Sakit"><br>
				<input type="text" class="form-control" id="kesehatan_penderita_9" name="data[detail][kesehatan][penderita][9][puskesmas]" placeholder="Di rawat di Puskesmas">
			</div>
		</div>
		<div class="form-group">
			<label for="kesehatan_penderita_10" class="col-sm-3 control-label">HIV/AIDS</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="kesehatan_penderita_10" name="data[detail][kesehatan][penderita][10][jumlah]" placeholder="Jumlah penderita"><br>
				<input type="text" class="form-control" id="kesehatan_penderita_10" name="data[detail][kesehatan][penderita][10][rumah]" placeholder="Di rawat di Rumah"><br>
				<input type="text" class="form-control" id="kesehatan_penderita_10" name="data[detail][kesehatan][penderita][10][rs]" placeholder="Di rawat di Rumah Sakit"><br>
				<input type="text" class="form-control" id="kesehatan_penderita_10" name="data[detail][kesehatan][penderita][10][puskesmas]" placeholder="Di rawat di Puskesmas">
			</div>
		</div>
		<div class="form-group">
			<label for="kesehatan_penderita_11" class="col-sm-3 control-label">Gila/stress</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="kesehatan_penderita_11" name="data[detail][kesehatan][penderita][11][jumlah]" placeholder="Jumlah penderita"><br>
				<input type="text" class="form-control" id="kesehatan_penderita_11" name="data[detail][kesehatan][penderita][11][rumah]" placeholder="Di rawat di Rumah"><br>
				<input type="text" class="form-control" id="kesehatan_penderita_11" name="data[detail][kesehatan][penderita][11][rs]" placeholder="Di rawat di Rumah Sakit"><br>
				<input type="text" class="form-control" id="kesehatan_penderita_11" name="data[detail][kesehatan][penderita][11][puskesmas]" placeholder="Di rawat di Puskesmas">
			</div>
		</div>
		<div class="form-group">
			<label for="kesehatan_penderita_12" class="col-sm-3 control-label">TBC</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="kesehatan_penderita_12" name="data[detail][kesehatan][penderita][12][jumlah]" placeholder="Jumlah penderita"><br>
				<input type="text" class="form-control" id="kesehatan_penderita_12" name="data[detail][kesehatan][penderita][12][rumah]" placeholder="Di rawat di Rumah"><br>
				<input type="text" class="form-control" id="kesehatan_penderita_12" name="data[detail][kesehatan][penderita][12][rs]" placeholder="Di rawat di Rumah Sakit"><br>
				<input type="text" class="form-control" id="kesehatan_penderita_12" name="data[detail][kesehatan][penderita][12][puskesmas]" placeholder="Di rawat di Puskesmas">
			</div>
		</div>
		<div class="form-group">
			<label for="kesehatan_penderita_13" class="col-sm-3 control-label">ISPA</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="kesehatan_penderita_13" name="data[detail][kesehatan][penderita][13][jumlah]" placeholder="Jumlah penderita"><br>
				<input type="text" class="form-control" id="kesehatan_penderita_13" name="data[detail][kesehatan][penderita][13][rumah]" placeholder="Di rawat di Rumah"><br>
				<input type="text" class="form-control" id="kesehatan_penderita_13" name="data[detail][kesehatan][penderita][13][rs]" placeholder="Di rawat di Rumah Sakit"><br>
				<input type="text" class="form-control" id="kesehatan_penderita_13" name="data[detail][kesehatan][penderita][13][puskesmas]" placeholder="Di rawat di Puskesmas">
			</div>
		</div>
		<div class="form-group">
			<label for="kesehatan_penderita_14" class="col-sm-3 control-label">Asma</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="kesehatan_penderita_14" name="data[detail][kesehatan][penderita][14][jumlah]" placeholder="Jumlah penderita"><br>
				<input type="text" class="form-control" id="kesehatan_penderita_14" name="data[detail][kesehatan][penderita][14][rumah]" placeholder="Di rawat di Rumah"><br>
				<input type="text" class="form-control" id="kesehatan_penderita_14" name="data[detail][kesehatan][penderita][14][rs]" placeholder="Di rawat di Rumah Sakit"><br>
				<input type="text" class="form-control" id="kesehatan_penderita_14" name="data[detail][kesehatan][penderita][14][puskesmas]" placeholder="Di rawat di Puskesmas">
			</div>
		</div>
		<div class="form-group">
			<label for="kesehatan_kb_lainnya" class="col-sm-3 control-label">Lainnya</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="kesehatan_penderita_lainnya" name="data[detail][kesehatan][penderita][lainnya][keterangan]" placeholder="Keterangan"><br>
				<input type="text" class="form-control" id="kesehatan_penderita_lainnya" name="data[detail][kesehatan][penderita][lainnya][jumlah]" placeholder="Jumlah penderita"><br>
				<input type="text" class="form-control" id="kesehatan_penderita_lainnya" name="data[detail][kesehatan][penderita][lainnya][rumah]" placeholder="Di rawat di Rumah"><br>
				<input type="text" class="form-control" id="kesehatan_penderita_lainnya" name="data[detail][kesehatan][penderita][lainnya][rs]" placeholder="Di rawat di Rumah Sakit"><br>
				<input type="text" class="form-control" id="kesehatan_penderita_lainnya" name="data[detail][kesehatan][penderita][lainnya][puskesmas]" placeholder="Di rawat di Puskesmas">
			</div>
		</div>

		<div class="form-group">
			<div class="col-md-12">
				<h4>L. Perkembangan Sarana dan Prasarana Kesehatan Masyarakat</h4>
			</div>
		</div>
		<div class="form-group">
			<label for="kesehatan_sarana_1" class="col-sm-3 control-label">Jumlah MCK Umum (Unit)</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="kesehatan_sarana_1" name="data[detail][kesehatan][sarana][1]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="kesehatan_sarana_2" class="col-sm-3 control-label">Jumlah Posyandu (Unit)</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="kesehatan_sarana_2" name="data[detail][kesehatan][sarana][2]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="kesehatan_sarana_3" class="col-sm-3 control-label">Jumlah kader Posyandu aktif (Orang)</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="kesehatan_sarana_3" name="data[detail][kesehatan][sarana][3]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="kesehatan_sarana_4" class="col-sm-3 control-label">Jumlah pembina Posyandu (Orang)</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="kesehatan_sarana_4" name="data[detail][kesehatan][sarana][4]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="kesehatan_sarana_5" class="col-sm-3 control-label">Jumlah Dasawisma</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="kesehatan_sarana_5" name="data[detail][kesehatan][sarana][5]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="kesehatan_sarana_6" class="col-sm-3 control-label">Jumlah pengurus Dasa Wisma aktif (Orang)</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="kesehatan_sarana_6" name="data[detail][kesehatan][sarana][6]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="kesehatan_sarana_7" class="col-sm-3 control-label">Jumlah kader bina keluarga balita aktif (Orang)</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="kesehatan_sarana_7" name="data[detail][kesehatan][sarana][7]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="kesehatan_sarana_8" class="col-sm-3 control-label">Jumlah petugas lapangan keluarga berencana aktif (Orang)</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="kesehatan_sarana_8" name="data[detail][kesehatan][sarana][8]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="kesehatan_sarana_9" class="col-sm-3 control-label">Buku rencana kegiatan Posyandu</label>
			<div class="col-sm-5">
				<select class="form-control" id="kesehatan_sarana_9" name="data[detail][kesehatan][sarana][9]">
					<option value="Diisi">Diisi</option>
					<option value="Tidak">Tidak</option>
				</select>
			</div>
		</div>
		<div class="form-group">
			<label for="kesehatan_sarana_10" class="col-sm-3 control-label">Buku data pengunjung Posyandu</label>
			<div class="col-sm-5">
				<select class="form-control" id="kesehatan_sarana_10" name="data[detail][kesehatan][sarana][10]">
					<option value="Diisi">Diisi</option>
					<option value="Tidak">Tidak</option>
				</select>
			</div>
		</div>
		<div class="form-group">
			<label for="kesehatan_sarana_11" class="col-sm-3 control-label">Buku kegiatan pelayanan Posyandu</label>
			<div class="col-sm-5">
				<select class="form-control" id="kesehatan_sarana_11" name="data[detail][kesehatan][sarana][11]">
					<option value="Diisi">Diisi</option>
					<option value="Tidak">Tidak</option>
				</select>
			</div>
		</div>
		<div class="form-group">
			<label for="kesehatan_sarana_12" class="col-sm-3 control-label">Buku administrasi Posyandu lainnya (Jenis)</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="kesehatan_sarana_12" name="data[detail][kesehatan][sarana][12]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="kesehatan_sarana_13" class="col-sm-3 control-label">Jumlah kegiatan Posyandu (Jenis)</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="kesehatan_sarana_13" name="data[detail][kesehatan][sarana][13]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="kesehatan_sarana_14" class="col-sm-3 control-label">Jumlah kader kesehatan lainnya (Orang)</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="kesehatan_sarana_14" name="data[detail][kesehatan][sarana][14]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="kesehatan_sarana_15" class="col-sm-3 control-label">Jumlah kegiatan pengobatan gratis (Jenis)</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="kesehatan_sarana_15" name="data[detail][kesehatan][sarana][15]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="kesehatan_sarana_16" class="col-sm-3 control-label">Jumlah kegiatan pemberantasan sarang nyamuk/PSN (Jenis)</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="kesehatan_sarana_16" name="data[detail][kesehatan][sarana][16]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="kesehatan_sarana_17" class="col-sm-3 control-label">Jumlah kegiatan pembersihan lingkungan (Jenis)</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="kesehatan_sarana_17" name="data[detail][kesehatan][sarana][17]" placeholder="Jumlah">
			</div>
		</div>

		<div class="form-group">
			<div class="col-md-12">
				<h3>10. Keamanan Dan Ketertiban</h3>
				<h4>A. Konflik SARA</h4>
			</div>
		</div>
		<div class="form-group">
			<label for="keamanan_konflik_1" class="col-sm-3 control-label">Kasus konflik pada tahun ini</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="keamanan_konflik_1" name="data[detail][keamanan][konflik][1][jumlah]" placeholder="Jumlah (Kasus)"><br>
				<input type="text" class="form-control" id="keamanan_konflik_1" name="data[detail][keamanan][konflik][1][luka]" placeholder="Korban Luka (Orang)"><br>
				<input type="text" class="form-control" id="keamanan_konflik_1" name="data[detail][keamanan][konflik][1][meninggal]" placeholder="Korban Meninggal (Orang)"><br>
				<input type="text" class="form-control" id="keamanan_konflik_1" name="data[detail][keamanan][konflik][1][kerugian]" placeholder="Kerugian Material (Rp)"><br>
				<input type="text" class="form-control" id="keamanan_konflik_1" name="data[detail][keamanan][konflik][1][rumah]" placeholder="Jumlah Rumah Rusak"><br>
				<input type="text" class="form-control" id="keamanan_konflik_1" name="data[detail][keamanan][konflik][1][sarana]" placeholder="Jumlah Sarana/Prasarana Rusak"><br>
				<input type="text" class="form-control" id="keamanan_konflik_1" name="data[detail][keamanan][konflik][1][pelaku]" placeholder="Jumlah Pelaku Yang Diadili">
			</div>
		</div>
		<div class="form-group">
			<label for="keamanan_konflik_2" class="col-sm-3 control-label">Kasus konflik SARA pada tahun ini</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="keamanan_konflik_2" name="data[detail][keamanan][konflik][2][jumlah]" placeholder="Jumlah (Kasus)"><br>
				<input type="text" class="form-control" id="keamanan_konflik_2" name="data[detail][keamanan][konflik][2][luka]" placeholder="Korban Luka (Orang)"><br>
				<input type="text" class="form-control" id="keamanan_konflik_2" name="data[detail][keamanan][konflik][2][meninggal]" placeholder="Korban Meninggal (Orang)"><br>
				<input type="text" class="form-control" id="keamanan_konflik_2" name="data[detail][keamanan][konflik][2][kerugian]" placeholder="Kerugian Material (Rp)"><br>
				<input type="text" class="form-control" id="keamanan_konflik_2" name="data[detail][keamanan][konflik][2][rumah]" placeholder="Jumlah Rumah Rusak"><br>
				<input type="text" class="form-control" id="keamanan_konflik_2" name="data[detail][keamanan][konflik][2][sarana]" placeholder="Jumlah Sarana/Prasarana Rusak"><br>
				<input type="text" class="form-control" id="keamanan_konflik_2" name="data[detail][keamanan][konflik][2][pelaku]" placeholder="Jumlah Pelaku Yang Diadili">
			</div>
		</div>
		<div class="form-group">
			<label for="keamanan_konflik_3" class="col-sm-3 control-label">Jumlah kasus pertengkaran dan atau perkelahian antar tetangga</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="keamanan_konflik_3" name="data[detail][keamanan][konflik][3][jumlah]" placeholder="Jumlah (Kasus)"><br>
				<input type="text" class="form-control" id="keamanan_konflik_3" name="data[detail][keamanan][konflik][3][luka]" placeholder="Korban Luka (Orang)"><br>
				<input type="text" class="form-control" id="keamanan_konflik_3" name="data[detail][keamanan][konflik][3][meninggal]" placeholder="Korban Meninggal (Orang)"><br>
				<input type="text" class="form-control" id="keamanan_konflik_3" name="data[detail][keamanan][konflik][3][kerugian]" placeholder="Kerugian Material (Rp)"><br>
				<input type="text" class="form-control" id="keamanan_konflik_3" name="data[detail][keamanan][konflik][3][rumah]" placeholder="Jumlah Rumah Rusak"><br>
				<input type="text" class="form-control" id="keamanan_konflik_3" name="data[detail][keamanan][konflik][3][sarana]" placeholder="Jumlah Sarana/Prasarana Rusak"><br>
				<input type="text" class="form-control" id="keamanan_konflik_3" name="data[detail][keamanan][konflik][3][pelaku]" placeholder="Jumlah Pelaku Yang Diadili">
			</div>
		</div>
		<div class="form-group">
			<label for="keamanan_konflik_4" class="col-sm-3 control-label">Jumlah kasus pertengkaran dan atau perkelahian antar RT/RW</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="keamanan_konflik_4" name="data[detail][keamanan][konflik][4][jumlah]" placeholder="Jumlah (Kasus)"><br>
				<input type="text" class="form-control" id="keamanan_konflik_4" name="data[detail][keamanan][konflik][4][luka]" placeholder="Korban Luka (Orang)"><br>
				<input type="text" class="form-control" id="keamanan_konflik_4" name="data[detail][keamanan][konflik][4][meninggal]" placeholder="Korban Meninggal (Orang)"><br>
				<input type="text" class="form-control" id="keamanan_konflik_4" name="data[detail][keamanan][konflik][4][kerugian]" placeholder="Kerugian Material (Rp)"><br>
				<input type="text" class="form-control" id="keamanan_konflik_4" name="data[detail][keamanan][konflik][4][rumah]" placeholder="Jumlah Rumah Rusak"><br>
				<input type="text" class="form-control" id="keamanan_konflik_4" name="data[detail][keamanan][konflik][4][sarana]" placeholder="Jumlah Sarana/Prasarana Rusak"><br>
				<input type="text" class="form-control" id="keamanan_konflik_4" name="data[detail][keamanan][konflik][4][pelaku]" placeholder="Jumlah Pelaku Yang Diadili">
			</div>
		</div>
		<div class="form-group">
			<label for="keamanan_konflik_5" class="col-sm-3 control-label">Jumlah konflik antar masyarakat pendatang dengan penduduk asli</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="keamanan_konflik_5" name="data[detail][keamanan][konflik][5][jumlah]" placeholder="Jumlah (Kasus)"><br>
				<input type="text" class="form-control" id="keamanan_konflik_5" name="data[detail][keamanan][konflik][5][luka]" placeholder="Korban Luka (Orang)"><br>
				<input type="text" class="form-control" id="keamanan_konflik_5" name="data[detail][keamanan][konflik][5][meninggal]" placeholder="Korban Meninggal (Orang)"><br>
				<input type="text" class="form-control" id="keamanan_konflik_5" name="data[detail][keamanan][konflik][5][kerugian]" placeholder="Kerugian Material (Rp)"><br>
				<input type="text" class="form-control" id="keamanan_konflik_5" name="data[detail][keamanan][konflik][5][rumah]" placeholder="Jumlah Rumah Rusak"><br>
				<input type="text" class="form-control" id="keamanan_konflik_5" name="data[detail][keamanan][konflik][5][sarana]" placeholder="Jumlah Sarana/Prasarana Rusak"><br>
				<input type="text" class="form-control" id="keamanan_konflik_5" name="data[detail][keamanan][konflik][5][pelaku]" placeholder="Jumlah Pelaku Yang Diadili">
			</div>
		</div>
		<div class="form-group">
			<label for="keamanan_konflik_6" class="col-sm-3 control-label">Jumlah kasus antar kelompok masyarakat dalam desa/kelurahan dengan kelompok masyarakat dari desa/kelurahan lain</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="keamanan_konflik_6" name="data[detail][keamanan][konflik][6][jumlah]" placeholder="Jumlah (Kasus)"><br>
				<input type="text" class="form-control" id="keamanan_konflik_6" name="data[detail][keamanan][konflik][6][luka]" placeholder="Korban Luka (Orang)"><br>
				<input type="text" class="form-control" id="keamanan_konflik_6" name="data[detail][keamanan][konflik][6][meninggal]" placeholder="Korban Meninggal (Orang)"><br>
				<input type="text" class="form-control" id="keamanan_konflik_6" name="data[detail][keamanan][konflik][6][kerugian]" placeholder="Kerugian Material (Rp)"><br>
				<input type="text" class="form-control" id="keamanan_konflik_6" name="data[detail][keamanan][konflik][6][rumah]" placeholder="Jumlah Rumah Rusak"><br>
				<input type="text" class="form-control" id="keamanan_konflik_6" name="data[detail][keamanan][konflik][6][sarana]" placeholder="Jumlah Sarana/Prasarana Rusak"><br>
				<input type="text" class="form-control" id="keamanan_konflik_6" name="data[detail][keamanan][konflik][6][pelaku]" placeholder="Jumlah Pelaku Yang Diadili">
			</div>
		</div>
		<div class="form-group">
			<label for="keamanan_konflik_7" class="col-sm-3 control-label">Jumlah konflik antara masyarakat dengan pemerintah</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="keamanan_konflik_7" name="data[detail][keamanan][konflik][7][jumlah]" placeholder="Jumlah (Kasus)"><br>
				<input type="text" class="form-control" id="keamanan_konflik_7" name="data[detail][keamanan][konflik][7][luka]" placeholder="Korban Luka (Orang)"><br>
				<input type="text" class="form-control" id="keamanan_konflik_7" name="data[detail][keamanan][konflik][7][meninggal]" placeholder="Korban Meninggal (Orang)"><br>
				<input type="text" class="form-control" id="keamanan_konflik_7" name="data[detail][keamanan][konflik][7][kerugian]" placeholder="Kerugian Material (Rp)"><br>
				<input type="text" class="form-control" id="keamanan_konflik_7" name="data[detail][keamanan][konflik][7][rumah]" placeholder="Jumlah Rumah Rusak"><br>
				<input type="text" class="form-control" id="keamanan_konflik_7" name="data[detail][keamanan][konflik][7][sarana]" placeholder="Jumlah Sarana/Prasarana Rusak"><br>
				<input type="text" class="form-control" id="keamanan_konflik_7" name="data[detail][keamanan][konflik][7][pelaku]" placeholder="Jumlah Pelaku Yang Diadili">
			</div>
		</div>
		<div class="form-group">
			<label for="keamanan_konflik_8" class="col-sm-3 control-label">Jumlah kerugian material akibat konflik antara masyarakat dan pemerintah (Rp)</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="keamanan_konflik_8" name="data[detail][keamanan][konflik][8][jumlah]" placeholder="Jumlah (Kasus)"><br>
				<input type="text" class="form-control" id="keamanan_konflik_8" name="data[detail][keamanan][konflik][8][luka]" placeholder="Korban Luka (Orang)"><br>
				<input type="text" class="form-control" id="keamanan_konflik_8" name="data[detail][keamanan][konflik][8][meninggal]" placeholder="Korban Meninggal (Orang)"><br>
				<input type="text" class="form-control" id="keamanan_konflik_8" name="data[detail][keamanan][konflik][8][kerugian]" placeholder="Kerugian Material (Rp)"><br>
				<input type="text" class="form-control" id="keamanan_konflik_8" name="data[detail][keamanan][konflik][8][rumah]" placeholder="Jumlah Rumah Rusak"><br>
				<input type="text" class="form-control" id="keamanan_konflik_8" name="data[detail][keamanan][konflik][8][sarana]" placeholder="Jumlah Sarana/Prasarana Rusak"><br>
				<input type="text" class="form-control" id="keamanan_konflik_8" name="data[detail][keamanan][konflik][8][pelaku]" placeholder="Jumlah Pelaku Yang Diadili">
			</div>
		</div>
		
		<div class="form-group">
			<div class="col-md-12">
				<h4>B. Perkelahian</h4>
			</div>
		</div>
		<div class="form-group">
			<label for="keamanan_perkelahian_1" class="col-sm-3 control-label">Kasus perkelahian yang terjadi pada tahun ini</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="keamanan_perkelahian_1" name="data[detail][keamanan][perkelahian][1]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="keamanan_perkelahian_2" class="col-sm-3 control-label">Kasus perkelahian yang menimbulkan korban jiwa</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="keamanan_perkelahian_2" name="data[detail][keamanan][perkelahian][2]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="keamanan_perkelahian_3" class="col-sm-3 control-label">Kasus perkelahian yang menimbulkan luka parah</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="keamanan_perkelahian_3" name="data[detail][keamanan][perkelahian][3]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="keamanan_perkelahian_4" class="col-sm-3 control-label">Kasus perkelahian yang menimbulkan kerugian material</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="keamanan_perkelahian_4" name="data[detail][keamanan][perkelahian][4]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="keamanan_perkelahian_5" class="col-sm-3 control-label">Jumlah pelaku konflik yang diadili atau diproses secara hukum (Orang)</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="keamanan_perkelahian_5" name="data[detail][keamanan][perkelahian][5]" placeholder="Jumlah">
			</div>
		</div>
		
		<div class="form-group">
			<div class="col-md-12">
				<h4>C. Pencurian</h4>
			</div>
		</div>
		<div class="form-group">
			<label for="keamanan_pencurian_1" class="col-sm-3 control-label">Kasus pencurian dan perampokan yang terjadi tahun ini</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="keamanan_pencurian_1" name="data[detail][keamanan][pencurian][1]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="keamanan_pencurian_2" class="col-sm-3 control-label">Kasus pencurian/perampokan yang korbannya penduduk Desa/Kelurahan setempat</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="keamanan_pencurian_2" name="data[detail][keamanan][pencurian][2]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="keamanan_pencurian_3" class="col-sm-3 control-label">Kasus pencurian/perampokan yang pelakunya penduduk Desa/Kelurahan setempat</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="keamanan_pencurian_3" name="data[detail][keamanan][pencurian][3]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="keamanan_pencurian_4" class="col-sm-3 control-label">Jumlah pencurian dengan kekerasan senjata api</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="keamanan_pencurian_4" name="data[detail][keamanan][pencurian][4]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="keamanan_pencurian_5" class="col-sm-3 control-label">Jumlah pelaku yang diadili atau diproses secara hukum (Orang)</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="keamanan_pencurian_5" name="data[detail][keamanan][pencurian][5]" placeholder="Jumlah">
			</div>
		</div>
		
		<div class="form-group">
			<div class="col-md-12">
				<h4>D. Penjarahan dan Penyerobotan Tanah</h4>
			</div>
		</div>
		<div class="form-group">
			<label for="keamanan_penjarahan_1" class="col-sm-3 control-label">Jumlah kasus penjarahan dan penyerobotan tanah yang korban dan pelakunya penduduk setempat</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="keamanan_penjarahan_1" name="data[detail][keamanan][penjarahan][1]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="keamanan_penjarahan_2" class="col-sm-3 control-label">Jumlah kasus penjarahan dan penyerobotan tanah yang korban penduduk setempat tetapi pelakunya bukan penduduk setempat</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="keamanan_penjarahan_2" name="data[detail][keamanan][penjarahan][2]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="keamanan_penjarahan_3" class="col-sm-3 control-label">Jumlah kasus penjarahan dan penyerobotan tanah yang korban bukan penduduk setempat tetapi pelakunya penduduk setempat</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="keamanan_penjarahan_3" name="data[detail][keamanan][penjarahan][3]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="keamanan_penjarahan_4" class="col-sm-3 control-label">Jumlah pelaku yang diadili atau diproses secara hukum (Orang)</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="keamanan_penjarahan_4" name="data[detail][keamanan][penjarahan][4]" placeholder="Jumlah">
			</div>
		</div>
		
		<div class="form-group">
			<div class="col-md-12">
				<h4>E. Perjudian, Penipuan dan Penggelapan</h4>
			</div>
		</div>
		<div class="form-group">
			<label for="keamanan_perjudian_1" class="col-sm-3 control-label">Jumlah penduduk yang memiliki kebiasaan berjudi</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="keamanan_perjudian_1" name="data[detail][keamanan][perjudian][1]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="keamanan_perjudian_2" class="col-sm-3 control-label">Jenis perjudian yang ada di Desa/Kelurahan ini</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="keamanan_perjudian_2" name="data[detail][keamanan][perjudian][2]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="keamanan_perjudian_3" class="col-sm-3 control-label">Jumlah kasus penipuan dan atau penggelapan</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="keamanan_perjudian_3" name="data[detail][keamanan][perjudian][3]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="keamanan_perjudian_4" class="col-sm-3 control-label">Jumlah kasus sengketa warisan, jual beli dan utang piutang</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="keamanan_perjudian_4" name="data[detail][keamanan][perjudian][4]" placeholder="Jumlah">
			</div>
		</div>
		
		<div class="form-group">
			<div class="col-md-12">
				<h4>F. Pemakaian Miras dan Narkoba</h4>
			</div>
		</div>
		<div class="form-group">
			<label for="keamanan_miras_1" class="col-sm-3 control-label">Jumlah warung/toko yang menyediakan Miras</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="keamanan_miras_1" name="data[detail][keamanan][miras][1]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="keamanan_miras_2" class="col-sm-3 control-label">Jumlah penduduk yang mengkonsumsi Miras</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="keamanan_miras_2" name="data[detail][keamanan][miras][2]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="keamanan_miras_3" class="col-sm-3 control-label">Jumlah kasus mabuk akibat Miras</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="keamanan_miras_3" name="data[detail][keamanan][miras][3]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="keamanan_miras_4" class="col-sm-3 control-label">Jumlah pengedar Narkoba</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="keamanan_miras_4" name="data[detail][keamanan][miras][4]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="keamanan_miras_5" class="col-sm-3 control-label">Jumlah penduduk yang mengkonsumsi Narkoba</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="keamanan_miras_5" name="data[detail][keamanan][miras][5]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="keamanan_miras_6" class="col-sm-3 control-label">Jumlah kasus mabuk/teler akibat Narkoba</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="keamanan_miras_6" name="data[detail][keamanan][miras][6]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="keamanan_miras_7" class="col-sm-3 control-label">Jumlah kasus kematian akibat Narkoba</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="keamanan_miras_7" name="data[detail][keamanan][miras][7]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="keamanan_miras_8" class="col-sm-3 control-label">Jumlah pelaku Miras yang diadili atau diproses secara hukum</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="keamanan_miras_8" name="data[detail][keamanan][miras][8]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="keamanan_miras_9" class="col-sm-3 control-label">Jumlah pelaku Narkoba yang diadili atau diproses secara hukum</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="keamanan_miras_9" name="data[detail][keamanan][miras][9]" placeholder="Jumlah">
			</div>
		</div>
		
		<div class="form-group">
			<div class="col-md-12">
				<h4>G. Prostitusi</h4>
			</div>
		</div>
		<div class="form-group">
			<label for="keamanan_prostitusi_1" class="col-sm-3 control-label">Jumlah penduduk pekerja pramu nikmat</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="keamanan_prostitusi_1" name="data[detail][keamanan][prostitusi][1]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="keamanan_prostitusi_2" class="col-sm-3 control-label">Lokalisasi prostitusi</label>
			<div class="col-sm-5">
				<select class="form-control" id="keamanan_prostitusi_2" name="data[detail][keamanan][prostitusi][2]" placeholder="Jumlah">
					<option value="Tidak">Tidak</option>
					<option value="Ada">Ada</option>
				</select>
			</div>
		</div>
		<div class="form-group">
			<label for="keamanan_prostitusi_3" class="col-sm-3 control-label">Jumlah tempat yang menyediakan wanita pramunikmat secara terselubung (warung remang-remang, panti pijat, hotel, dll)</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="keamanan_prostitusi_3" name="data[detail][keamanan][prostitusi][3]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="keamanan_prostitusi_4" class="col-sm-3 control-label">Jumlah kasus/konflik akibat maraknya praktek prostitusi</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="keamanan_prostitusi_4" name="data[detail][keamanan][prostitusi][4]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="keamanan_prostitusi_5" class="col-sm-3 control-label">Jumlah pembinaan pelaku prostitusi</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="keamanan_prostitusi_5" name="data[detail][keamanan][prostitusi][5]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="keamanan_prostitusi_6" class="col-sm-3 control-label">Jumlah penertiban penyediaan tempat prostitusi</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="keamanan_prostitusi_6" name="data[detail][keamanan][prostitusi][6]" placeholder="Jumlah">
			</div>
		</div>
		
		<div class="form-group">
			<div class="col-md-12">
				<h4>H. Pembunuhan</h4>
			</div>
		</div>
		<div class="form-group">
			<label for="keamanan_pembunuhan_1" class="col-sm-3 control-label">Jumlah kasus pembunuhan pada tahun ini</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="keamanan_pembunuhan_1" name="data[detail][keamanan][pembunuhan][1]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="keamanan_pembunuhan_2" class="col-sm-3 control-label">Jumlah kasus pembunuhan dengan korban penduduk Desa/Kelurahan setempat</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="keamanan_pembunuhan_2" name="data[detail][keamanan][pembunuhan][2]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="keamanan_pembunuhan_3" class="col-sm-3 control-label">Jumlah kasus pembunuhan dengan pelaku penduduk setempat</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="keamanan_pembunuhan_3" name="data[detail][keamanan][pembunuhan][3]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="keamanan_pembunuhan_4" class="col-sm-3 control-label">Jumlah kasus bunuh diri</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="keamanan_pembunuhan_4" name="data[detail][keamanan][pembunuhan][4]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="keamanan_pembunuhan_5" class="col-sm-3 control-label">Jumlah Kasus Yang Diproses secara hukum</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="keamanan_pembunuhan_5" name="data[detail][keamanan][pembunuhan][5]" placeholder="Jumlah">
			</div>
		</div>
		
		<div class="form-group">
			<div class="col-md-12">
				<h4>I. Penculikan</h4>
			</div>
		</div>
		<div class="form-group">
			<label for="keamanan_penculikan_1" class="col-sm-3 control-label">Jumlah kasus penculikan</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="keamanan_penculikan_1" name="data[detail][keamanan][penculikan][1]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="keamanan_penculikan_2" class="col-sm-3 control-label">Jumlah kasus penculikan dengan korban penduduk Desa/Kelurahan setempat</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="keamanan_penculikan_2" name="data[detail][keamanan][penculikan][2]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="keamanan_penculikan_3" class="col-sm-3 control-label">Jumlah kasus penculikan dengan pelaku penduduk setempat</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="keamanan_penculikan_3" name="data[detail][keamanan][penculikan][3]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="keamanan_penculikan_4" class="col-sm-3 control-label">Jumlah kasus penculikan yang diselesaikan secara hukum</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="keamanan_penculikan_4" name="data[detail][keamanan][penculikan][4]" placeholder="Jumlah">
			</div>
		</div>
		
		<div class="form-group">
			<div class="col-md-12">
				<h4>J. Kejahatan seksual</h4>
			</div>
		</div>
		<div class="form-group">
			<label for="keamanan_seksual_1" class="col-sm-3 control-label">Jumlah kasus perkosaan pada tahun ini</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="keamanan_seksual_1" name="data[detail][keamanan][seksual][1]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="keamanan_seksual_2" class="col-sm-3 control-label">Jumlah kasus perkosaan anak pada tahun ini</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="keamanan_seksual_2" name="data[detail][keamanan][seksual][2]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="keamanan_seksual_3" class="col-sm-3 control-label">Jumlah kasus kehamilan di luar nikah menurut hukum negara</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="keamanan_seksual_3" name="data[detail][keamanan][seksual][3]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="keamanan_seksual_4" class="col-sm-3 control-label">Jumlah kasus kehamilan di luar nikah menurut hukum adat</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="keamanan_seksual_4" name="data[detail][keamanan][seksual][4]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="keamanan_seksual_5" class="col-sm-3 control-label">Jumlah tempat penampungan/persewaan kamar bagi pekerja seks</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="keamanan_seksual_5" name="data[detail][keamanan][seksual][5]" placeholder="Jumlah">
			</div>
		</div>
		
		<div class="form-group">
			<div class="col-md-12">
				<h4>K. Masalah Kesejahteraan Sosial</h4>
			</div>
		</div>
		<div class="form-group">
			<label for="keamanan_kesejahteraan_1" class="col-sm-3 control-label">Jumlah gelandangan</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="keamanan_kesejahteraan_1" name="data[detail][keamanan][kesejahteraan][1]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="keamanan_kesejahteraan_2" class="col-sm-3 control-label">Jumlah pengemis jalanan</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="keamanan_kesejahteraan_2" name="data[detail][keamanan][kesejahteraan][2]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="keamanan_kesejahteraan_3" class="col-sm-3 control-label">Jumlah anak jalanan dan terlantar</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="keamanan_kesejahteraan_3" name="data[detail][keamanan][kesejahteraan][3]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="keamanan_kesejahteraan_4" class="col-sm-3 control-label">Jumlah manusia lanjut usia terlantar</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="keamanan_kesejahteraan_4" name="data[detail][keamanan][kesejahteraan][4]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="keamanan_kesejahteraan_5" class="col-sm-3 control-label">Jumlah orang gila/stress/cacat mental</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="keamanan_kesejahteraan_5" name="data[detail][keamanan][kesejahteraan][5]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="keamanan_kesejahteraan_6" class="col-sm-3 control-label">Jumlah orang cacat fisik</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="keamanan_kesejahteraan_6" name="data[detail][keamanan][kesejahteraan][6]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="keamanan_kesejahteraan_7" class="col-sm-3 control-label">Jumlah orang kelainan kulit</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="keamanan_kesejahteraan_7" name="data[detail][keamanan][kesejahteraan][7]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="keamanan_kesejahteraan_8" class="col-sm-3 control-label">Jumlah orang yang tidur di kolong jembatan/emperan</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="keamanan_kesejahteraan_8" name="data[detail][keamanan][kesejahteraan][8]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="keamanan_kesejahteraan_9" class="col-sm-3 control-label">Jumlah rumah dan kawasan kumuh (Unit)</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="keamanan_kesejahteraan_9" name="data[detail][keamanan][kesejahteraan][9]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="keamanan_kesejahteraan_10" class="col-sm-3 control-label">Jumlah panti jompo (Unit)</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="keamanan_kesejahteraan_10" name="data[detail][keamanan][kesejahteraan][10]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="keamanan_kesejahteraan_11" class="col-sm-3 control-label">Jumlah panti asuhan anak (Unit)</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="keamanan_kesejahteraan_11" name="data[detail][keamanan][kesejahteraan][11]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="keamanan_kesejahteraan_12" class="col-sm-3 control-label">Jumlah rumah singgah anak jalanan (Unit)</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="keamanan_kesejahteraan_12" name="data[detail][keamanan][kesejahteraan][12]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="keamanan_kesejahteraan_13" class="col-sm-3 control-label">Jumlah penghuni jalur hijau dan taman kota</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="keamanan_kesejahteraan_13" name="data[detail][keamanan][kesejahteraan][13]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="keamanan_kesejahteraan_14" class="col-sm-3 control-label">Jumlah penghuni bantaran sungai</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="keamanan_kesejahteraan_14" name="data[detail][keamanan][kesejahteraan][14]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="keamanan_kesejahteraan_15" class="col-sm-3 control-label">Jumlah penghuni pinggiran rel kereta api</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="keamanan_kesejahteraan_15" name="data[detail][keamanan][kesejahteraan][15]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="keamanan_kesejahteraan_16" class="col-sm-3 control-label">Jumlah penghuni liar di lahan dan fasilitas umum lainnya</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="keamanan_kesejahteraan_16" name="data[detail][keamanan][kesejahteraan][16]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="keamanan_kesejahteraan_17" class="col-sm-3 control-label">Jumlah anggota kelompok masyarakat/suku/keluarga terasing, terisolir, terlantar dan primitif</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="keamanan_kesejahteraan_17" name="data[detail][keamanan][kesejahteraan][17]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="keamanan_kesejahteraan_18" class="col-sm-3 control-label">Jumlah anak yatim usia 0–18 tahun</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="keamanan_kesejahteraan_18" name="data[detail][keamanan][kesejahteraan][18]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="keamanan_kesejahteraan_19" class="col-sm-3 control-label">Jumlah anak piatu 0–18 tahun</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="keamanan_kesejahteraan_19" name="data[detail][keamanan][kesejahteraan][19]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="keamanan_kesejahteraan_20" class="col-sm-3 control-label">Jumlah anak yatim piatu 0–18 tahun</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="keamanan_kesejahteraan_20" name="data[detail][keamanan][kesejahteraan][20]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="keamanan_kesejahteraan_21" class="col-sm-3 control-label">Jumlah janda</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="keamanan_kesejahteraan_21" name="data[detail][keamanan][kesejahteraan][21]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="keamanan_kesejahteraan_22" class="col-sm-3 control-label">Jumlah duda</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="keamanan_kesejahteraan_22" name="data[detail][keamanan][kesejahteraan][22]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="keamanan_kesejahteraan_23" class="col-sm-3 control-label">Jumlah anak, remaja, preman dan pengangguran</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="keamanan_kesejahteraan_23" name="data[detail][keamanan][kesejahteraan][23]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="keamanan_kesejahteraan_24" class="col-sm-3 control-label">Jumlah anak usia 7-12 tahun yang tidak sekolah di SD/sederajat</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="keamanan_kesejahteraan_24" name="data[detail][keamanan][kesejahteraan][24]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="keamanan_kesejahteraan_25" class="col-sm-3 control-label">Jumlah anak usia 13-15 tahun yang tidak sekolah di SLTP/sederajat</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="keamanan_kesejahteraan_25" name="data[detail][keamanan][kesejahteraan][25]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="keamanan_kesejahteraan_26" class="col-sm-3 control-label">Jumlah anak usia 15-18 tahun yang tidak sekolah di SLTA/sederajat</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="keamanan_kesejahteraan_26" name="data[detail][keamanan][kesejahteraan][26]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="keamanan_kesejahteraan_27" class="col-sm-3 control-label">Jumlah anak yang bekerja membantu keluarga menghasilkan uang</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="keamanan_kesejahteraan_27" name="data[detail][keamanan][kesejahteraan][27]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="keamanan_kesejahteraan_28" class="col-sm-3 control-label">Jumlah perempuan yang menjadi kepala keluarga</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="keamanan_kesejahteraan_28" name="data[detail][keamanan][kesejahteraan][28]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="keamanan_kesejahteraan_29" class="col-sm-3 control-label">Jumlah penduduk eks NAPI</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="keamanan_kesejahteraan_29" name="data[detail][keamanan][kesejahteraan][29]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="keamanan_kesejahteraan_30" class="col-sm-3 control-label">Jumlah penduduk tinggal di daerah rawan bencana banjir</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="keamanan_kesejahteraan_30" name="data[detail][keamanan][kesejahteraan][30]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="keamanan_kesejahteraan_31" class="col-sm-3 control-label">Jumlah penduduk tinggal di daerah rawan bencana . gunung berapi</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="keamanan_kesejahteraan_31" name="data[detail][keamanan][kesejahteraan][31]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="keamanan_kesejahteraan_32" class="col-sm-3 control-label">Jumlah penduduk tinggal di daerah rawan bencana Tsunami</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="keamanan_kesejahteraan_32" name="data[detail][keamanan][kesejahteraan][32]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="keamanan_kesejahteraan_33" class="col-sm-3 control-label">Jumlah penduduk tinggal di daerah rawan bencana gempa bumi</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="keamanan_kesejahteraan_33" name="data[detail][keamanan][kesejahteraan][33]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="keamanan_kesejahteraan_34" class="col-sm-3 control-label">Jumlah penduduk tinggal di daerah rawan bencana kebakaran rumah</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="keamanan_kesejahteraan_34" name="data[detail][keamanan][kesejahteraan][34]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="keamanan_kesejahteraan_35" class="col-sm-3 control-label">Jumlah penduduk tinggal di daerah rawan bencana kekekeringan</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="keamanan_kesejahteraan_35" name="data[detail][keamanan][kesejahteraan][35]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="keamanan_kesejahteraan_36" class="col-sm-3 control-label">Jumlah penduduk tinggal di daerah rawan bencana tanah longsor</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="keamanan_kesejahteraan_36" name="data[detail][keamanan][kesejahteraan][36]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="keamanan_kesejahteraan_37" class="col-sm-3 control-label">Jumlah penduduk tinggal di daerah rawan bencana kebakaran hutan</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="keamanan_kesejahteraan_37" name="data[detail][keamanan][kesejahteraan][37]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="keamanan_kesejahteraan_38" class="col-sm-3 control-label">Jumlah penduduk rawan bencana kelaparan</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="keamanan_kesejahteraan_38" name="data[detail][keamanan][kesejahteraan][38]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="keamanan_kesejahteraan_39" class="col-sm-3 control-label">Jumlah penduduk tinggal di daerah rawan air bersih</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="keamanan_kesejahteraan_39" name="data[detail][keamanan][kesejahteraan][39]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="keamanan_kesejahteraan_40" class="col-sm-3 control-label">Jumlah penduduk tinggal di daerah lahan kritis dan tandus</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="keamanan_kesejahteraan_40" name="data[detail][keamanan][kesejahteraan][40]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="keamanan_kesejahteraan_41" class="col-sm-3 control-label">Jumlah penduduk tinggal di kawasan padat penduduk dan kumuh</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="keamanan_kesejahteraan_41" name="data[detail][keamanan][kesejahteraan][41]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="keamanan_kesejahteraan_42" class="col-sm-3 control-label">Jumlah warga pendatang yang tidak memiliki keterangan penduduk</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="keamanan_kesejahteraan_42" name="data[detail][keamanan][kesejahteraan][42]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="keamanan_kesejahteraan_43" class="col-sm-3 control-label">Jumlah warga pendatang dan atau pekerja musiman</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="keamanan_kesejahteraan_43" name="data[detail][keamanan][kesejahteraan][43]" placeholder="Jumlah">
			</div>
		</div>
		
		<div class="form-group">
			<div class="col-md-12">
				<h4>L. Kekerasan Dalam Rumah Tangga</h4>
			</div>
		</div>
		<div class="form-group">
			<label for="keamanan_kdrt_1" class="col-sm-3 control-label">Jumlah kasus kekerasan suami terhadap istri</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="keamanan_kdrt_1" name="data[detail][keamanan][kdrt][1]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="keamanan_kdrt_2" class="col-sm-3 control-label">Jumlah kasus kekerasan istri terhadap suami</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="keamanan_kdrt_2" name="data[detail][keamanan][kdrt][2]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="keamanan_kdrt_3" class="col-sm-3 control-label">Jumlah kasus kekerasan orang tua terhadap anak</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="keamanan_kdrt_3" name="data[detail][keamanan][kdrt][3]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="keamanan_kdrt_4" class="col-sm-3 control-label">Jumlah kasus kekerasan anak terhadap orang tua</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="keamanan_kdrt_4" name="data[detail][keamanan][kdrt][4]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="keamanan_kdrt_5" class="col-sm-3 control-label">Jumlah kasus kekerasan kepala keluarga terhadap anggota keluarga lainnya</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="keamanan_kdrt_5" name="data[detail][keamanan][kdrt][5]" placeholder="Jumlah">
			</div>
		</div>
		
		<div class="form-group">
			<div class="col-md-12">
				<h4>M. Teror dan Intimidasi</h4>
			</div>
		</div>
		<div class="form-group">
			<label for="keamanan_teror_1" class="col-sm-3 control-label">Jumlah kasus intimidasi dan atau teror anggota masyarakat dari pihak dalam desa dan kelurahan</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="keamanan_teror_1" name="data[detail][keamanan][teror][1]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="keamanan_teror_2" class="col-sm-3 control-label">Jumlah kasus intimidasi dan atau teror anggota masyarakat dari pihak luar desa atau kelurahan</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="keamanan_teror_2" name="data[detail][keamanan][teror][2]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="keamanan_teror_3" class="col-sm-3 control-label">Jumlah kasus selebaran gelap dan atau isu yang bersifat teror dan ancaman untuk menimbulkan ketakutan penduduk</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="keamanan_teror_3" name="data[detail][keamanan][teror][3]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="keamanan_teror_4" class="col-sm-3 control-label">Jumlah kasus terorisme yang terjadi di desa dan kelurahan tahun ini</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="keamanan_teror_4" name="data[detail][keamanan][teror][4]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="keamanan_teror_5" class="col-sm-3 control-label">Jumlah kasus hasutan dan pemaksaan kehendak kelompok tertentu kepada masyarakat</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="keamanan_teror_5" name="data[detail][keamanan][teror][5]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="keamanan_teror_6" class="col-sm-3 control-label">Jumlah penyelesaian kasus teror dan intimidasi serta hasutan di masyarakat baik secara adat maupun hukum formal</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="keamanan_teror_6" name="data[detail][keamanan][teror][6]" placeholder="Jumlah">
			</div>
		</div>

		<div class="form-group">
			<div class="col-md-12">
				<h4>N. Pelembagaan Sistem Keamanan Lingkungan Semesta</h4>
			</div>
		</div>
		<div class="form-group">
			<label for="keamanan_skls_1" class="col-sm-3 control-label">Organisasi Siskamling</label>
			<div class="col-sm-5">
				<select class="form-control" id="keamanan_skls_1" name="data[detail][keamanan][skls][1]">
					<option value="Ada">Ada</option>
					<option value="Tidak">Tidak</option>
				</select>
			</div>
		</div>
		<div class="form-group">
			<label for="keamanan_skls_2" class="col-sm-3 control-label">Organisasi Pertahanan Sipil dan Perlindungan Masyarakat</label>
			<div class="col-sm-5">
				<select class="form-control" id="keamanan_skls_2" name="data[detail][keamanan][skls][2]">
					<option value="Ada">Ada</option>
					<option value="Tidak">Tidak</option>
				</select>
			</div>
		</div>
		<div class="form-group">
			<label for="keamanan_skls_3" class="col-sm-3 control-label">Jumlah RT atau sebutan lainnya yang ada Siskamlimg/Pos Ronda</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="keamanan_skls_3" name="data[detail][keamanan][skls][3]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="keamanan_skls_4" class="col-sm-3 control-label">Jumlah anggota Hansip dan  Linmas</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="keamanan_skls_4" name="data[detail][keamanan][skls][4]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="keamanan_skls_5" class="col-sm-3 control-label">Jadwal kegiatan Siskamling dan Pos Ronda</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="keamanan_skls_5" name="data[detail][keamanan][skls][5]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="keamanan_skls_6" class="col-sm-3 control-label">Buku anggota Hansip dan Linmas</label>
			<div class="col-sm-5">
				<select class="form-control" id="keamanan_skls_6" name="data[detail][keamanan][skls][6]">
					<option value="Ada">Ada</option>
					<option value="Tidak">Tidak</option>
				</select>
			</div>
		</div>
		<div class="form-group">
			<label for="keamanan_skls_7" class="col-sm-3 control-label">Jumlah kelompok Satuan Pengamanan (SATPAM) swasta</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="keamanan_skls_7" name="data[detail][keamanan][skls][7]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="keamanan_skls_8" class="col-sm-3 control-label">Jumlah pembinaan Siskamling oleh Pengurus dan Kades/Lurah</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="keamanan_skls_8" name="data[detail][keamanan][skls][8]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="keamanan_skls_9" class="col-sm-3 control-label">Jumlah Pos Jaga Induk Desa/Kelurahan</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="keamanan_skls_9" name="data[detail][keamanan][skls][9]" placeholder="Jumlah">
			</div>
		</div>

		<div class="form-group">
			<div class="col-md-12">
				<h3>11. Kedaulatan Politik Masyarakat</h3>
				<h4>A. Kesadaran berpemerintahan, berbangsa dan bernegara</h4>
			</div>
		</div>
		<div class="form-group">
			<label for="kedaulatan_bernegara_1" class="col-sm-3 control-label">Jenis kegiatan pemantapan nilai Ideologi Pancasila sebagai Dasar Negara</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="kedaulatan_bernegara_1" name="data[detail][kedaulatan][bernegara][1]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="kedaulatan_bernegara_2" class="col-sm-3 control-label">Jumlah kegiatan pemantapan nilai Ideologi Pancasila sebagai Dasar Negara</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="kedaulatan_bernegara_2" name="data[detail][kedaulatan][bernegara][2]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="kedaulatan_bernegara_3" class="col-sm-3 control-label">Jenis-jenis kegiatan pemantapan nilai Bhinneka Tunggal Ika</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="kedaulatan_bernegara_3" name="data[detail][kedaulatan][bernegara][3]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="kedaulatan_bernegara_4" class="col-sm-3 control-label">Jumlah kegiatan pemantapan nilai Bhinneka Tunggal Ika</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="kedaulatan_bernegara_4" name="data[detail][kedaulatan][bernegara][4]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="kedaulatan_bernegara_5" class="col-sm-3 control-label">Jenis kegiatan pemantapan kesatuan bangsa lainnya</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="kedaulatan_bernegara_5" name="data[detail][kedaulatan][bernegara][5]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="kedaulatan_bernegara_6" class="col-sm-3 control-label">Jumlah kegiatan pemantapan kesatuan bangsa lainnya</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="kedaulatan_bernegara_6" name="data[detail][kedaulatan][bernegara][6]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="kedaulatan_bernegara_7" class="col-sm-3 control-label">Jumlah kasus warga desa/kelurahan yang minta suaka/lari ke luar negeri</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="kedaulatan_bernegara_7" name="data[detail][kedaulatan][bernegara][7]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="kedaulatan_bernegara_8" class="col-sm-3 control-label">Jumlah warga yang melintasi perbatasan ke negara tetangga secara resmi</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="kedaulatan_bernegara_8" name="data[detail][kedaulatan][bernegara][8]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="kedaulatan_bernegara_9" class="col-sm-3 control-label">Jumlah  warga  yang  melintasi  perbatasan  negara  tetangga secara tidak resmi</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="kedaulatan_bernegara_9" name="data[detail][kedaulatan][bernegara][9]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="kedaulatan_bernegara_10" class="col-sm-3 control-label">Jumlah kasus pertempuran atau perlawanan antar kelompok pengacau keamanan di perbatasan negara dengan warga/aparat dari desa/kelurahan</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="kedaulatan_bernegara_10" name="data[detail][kedaulatan][bernegara][10]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="kedaulatan_bernegara_11" class="col-sm-3 control-label">Jumlah serangan terhadap fasilitas umum dan milik masyarakat oleh kelompok pengacau di desa/kelurahan perbatasan negara tetangga</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="kedaulatan_bernegara_11" name="data[detail][kedaulatan][bernegara][11]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="kedaulatan_bernegara_12" class="col-sm-3 control-label">Jumlah kasus  yang  diklasifikasikan merongrong keutuhan NKRI  dan  Kesatuan  Bangsa  Indonesia  di  desa/kelurahan tahun ini</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="kedaulatan_bernegara_12" name="data[detail][kedaulatan][bernegara][12]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="kedaulatan_bernegara_13" class="col-sm-3 control-label">Jumlah  korban  manusia  baik  luka  maupun  tewas  serta korban materi lainnya akibat serangan kelompok pengacau keamanan</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="kedaulatan_bernegara_13" name="data[detail][kedaulatan][bernegara][13]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="kedaulatan_bernegara_14" class="col-sm-3 control-label">Jumlah masalah ketenagakerjaan di perbatasan antar negara yang terjadi tahun ini</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="kedaulatan_bernegara_14" name="data[detail][kedaulatan][bernegara][14]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="kedaulatan_bernegara_15" class="col-sm-3 control-label">Jumlah kasus kejahatan pencurian, penjarahan, perampokan dan  intimidasi  serta  teror  yang  terjadi  di  desa/kelurahan perbatasan antar negara</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="kedaulatan_bernegara_15" name="data[detail][kedaulatan][bernegara][15]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="kedaulatan_bernegara_16" class="col-sm-3 control-label">Jumlah sengketa perbatasan antar negara yang  terjadi desa/kelurahan ini</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="kedaulatan_bernegara_16" name="data[detail][kedaulatan][bernegara][16]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="kedaulatan_bernegara_17" class="col-sm-3 control-label">Jumlah kasus sengketa perbatasan yang terjadi baik antar desa/kelurahan dalam kecamatan maupun antar kecamatan, antar kabupaten/kota dan desa/kelurahan antar provinsi.</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="kedaulatan_bernegara_17" name="data[detail][kedaulatan][bernegara][17]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="kedaulatan_bernegara_18" class="col-sm-3 control-label">Jumlah kasus yang terkait dengan perbatasan antar negara yang dilaporkan Kepala Desa/Lurah ke pemerintah tingkat atasnya</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="kedaulatan_bernegara_18" name="data[detail][kedaulatan][bernegara][18]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="kedaulatan_bernegara_19" class="col-sm-3 control-label">Jumlah kasus yang mengarah kepada tindakan disintegrasi bangsa dan pengingkaran NKRI, Pancasila, UUD 1945 dan Bhinneka Tunggal Ika yang difasilitasi penyelesaiannya oleh Kepala Desa/Lurah</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="kedaulatan_bernegara_19" name="data[detail][kedaulatan][bernegara][19]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="kedaulatan_bernegara_20" class="col-sm-3 control-label">Jumlah kasus penangkapan nelayan asing di wilayah perairan desa/kelurahan</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="kedaulatan_bernegara_20" name="data[detail][kedaulatan][bernegara][20]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="kedaulatan_bernegara_21" class="col-sm-3 control-label">Jumlah kasus penangkapan nelayan/petani/peternak/ pekebun/perambah hutan asal desa/kelurahan di perairan dan daratan wilayah negara lain</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="kedaulatan_bernegara_21" name="data[detail][kedaulatan][bernegara][21]" placeholder="Jumlah">
			</div>
		</div>

		<div class="form-group">
			<div class="col-md-12">
				<h4>B. Kesadaran membayar Pajak dan Retribusi</h4>
			</div>
		</div>
		<div class="form-group">
			<label for="kedaulatan_pajak_1" class="col-sm-3 control-label">Jenis pajak yang dipungut sebagai kewenangan dan atau tugas desa/kelurahan</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="kedaulatan_pajak_1" name="data[detail][kedaulatan][pajak][1]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="kedaulatan_pajak_2" class="col-sm-3 control-label">Jumlah Wajib Pajak</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="kedaulatan_pajak_2" name="data[detail][kedaulatan][pajak][2]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="kedaulatan_pajak_3" class="col-sm-3 control-label">Target PBB</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="kedaulatan_pajak_3" name="data[detail][kedaulatan][pajak][3]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="kedaulatan_pajak_4" class="col-sm-3 control-label">Realisasi PBB</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="kedaulatan_pajak_4" name="data[detail][kedaulatan][pajak][4]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="kedaulatan_pajak_5" class="col-sm-3 control-label">Jumlah Tindakan terhadap penunggak PBB</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="kedaulatan_pajak_5" name="data[detail][kedaulatan][pajak][5]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="kedaulatan_pajak_6" class="col-sm-3 control-label">Jenis Retribusi yang dipungut sebagai tugas dan kewenangan desa/kelurahan</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="kedaulatan_pajak_6" name="data[detail][kedaulatan][pajak][6]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="kedaulatan_pajak_7" class="col-sm-3 control-label">Jumlah wajib retribusi yang menjadi tugas/kewenangan desa/kelurahan</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="kedaulatan_pajak_7" name="data[detail][kedaulatan][pajak][7]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="kedaulatan_pajak_8" class="col-sm-3 control-label">Target retribusi yang menjadi tugas/kewenangan desa/kelurahan</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="kedaulatan_pajak_8" name="data[detail][kedaulatan][pajak][8]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="kedaulatan_pajak_9" class="col-sm-3 control-label">Realisasi retribusi yang menjadi tugas/kewenangan desa/kelurahan</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="kedaulatan_pajak_9" name="data[detail][kedaulatan][pajak][9]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="kedaulatan_pajak_10" class="col-sm-3 control-label">Jenis pungutan resmi lainnya di Desa/Kelurahan</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="kedaulatan_pajak_10" name="data[detail][kedaulatan][pajak][10]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="kedaulatan_pajak_11" class="col-sm-3 control-label">Target pungutan resmi tingkat desa/kelurahan</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="kedaulatan_pajak_11" name="data[detail][kedaulatan][pajak][11]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="kedaulatan_pajak_12" class="col-sm-3 control-label">Realisasi pungutan resmi di desa/kelurahan</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="kedaulatan_pajak_12" name="data[detail][kedaulatan][pajak][12]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="kedaulatan_pajak_13" class="col-sm-3 control-label">Jumlah kasus pungutan liar</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="kedaulatan_pajak_13" name="data[detail][kedaulatan][pajak][13]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="kedaulatan_pajak_14" class="col-sm-3 control-label">Jumlah penyelesaian kasus pungutan liar</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="kedaulatan_pajak_14" name="data[detail][kedaulatan][pajak][14]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="kedaulatan_pajak_lainnya" class="col-sm-3 control-label">Lainnya</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="kedaulatan_pajak_lainnya" name="data[detail][kedaulatan][pajak][lainnya][keterangan]" placeholder="Keterangan"><br>
				<input type="text" class="form-control" id="kedaulatan_pajak_lainnya" name="data[detail][kedaulatan][pajak][lainnya][jumlah]" placeholder="Jumlah">
			</div>
		</div>

		<div class="form-group">
			<div class="col-md-12">
				<h4>C. Partisipasi Politik</h4>
				<h4>1. Jumlah Partai Politik dan Pemilihan Umum</h4>
			</div>
		</div>
		<div class="form-group">
			<label for="kedaulatan_pppu_1" class="col-sm-3 control-label">Jumlah penduduk yang memiliki hak pilih</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="kedaulatan_pppu_1" name="data[detail][kedaulatan][pppu][1]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="kedaulatan_pppu_2" class="col-sm-3 control-label">Jumlah penduduk yang menggunakan hak pilih pada pemilu legislatif yang lalu</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="kedaulatan_pppu_2" name="data[detail][kedaulatan][pppu][2]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="kedaulatan_pppu_3" class="col-sm-3 control-label">Jumlah perempuan dari penduduk desa/kelurahan ini yang aktif di partai politik</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="kedaulatan_pppu_3" name="data[detail][kedaulatan][pppu][3]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="kedaulatan_pppu_4" class="col-sm-3 control-label">Jumlah partai politik yang memiliki pengurus sampai di Desa/Kelurahan ini</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="kedaulatan_pppu_4" name="data[detail][kedaulatan][pppu][4]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="kedaulatan_pppu_5" class="col-sm-3 control-label">Jumlah partai politik yang mempunyai kantor di wilayah desa/kelurahan ini</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="kedaulatan_pppu_5" name="data[detail][kedaulatan][pppu][5]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="kedaulatan_pppu_6" class="col-sm-3 control-label">Jumlah penduduk yang menjadi pengurus partai politik dari desa/kelurahan</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="kedaulatan_pppu_6" name="data[detail][kedaulatan][pppu][6]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="kedaulatan_pppu_7" class="col-sm-3 control-label">Jumlah penduduk yang dipilih dalam Pemilu Legislatif yang lalu</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="kedaulatan_pppu_7" name="data[detail][kedaulatan][pppu][7]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="kedaulatan_pppu_8" class="col-sm-3 control-label">Jumlah pemilih yang menggunakan hak pilih dalam pemilihan presiden/wakil</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="kedaulatan_pppu_8" name="data[detail][kedaulatan][pppu][8]" placeholder="Jumlah">
			</div>
		</div>

		<div class="form-group">
			<div class="col-md-12">
				<h4>2. Pemilihan Kepala Daerah</h4>
			</div>
		</div>
		<div class="form-group">
			<label for="kedaulatan_pkd_1" class="col-sm-3 control-label">Jumlah penduduk yang mempunyai hak pilih</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="kedaulatan_pkd_1" name="data[detail][kedaulatan][pkd][1]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="kedaulatan_pkd_2" class="col-sm-3 control-label">Jumlah pemilih yang menggunakan hak pilih dalam pemilu Bupati/Walikota lalu</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="kedaulatan_pkd_2" name="data[detail][kedaulatan][pkd][2]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="kedaulatan_pkd_3" class="col-sm-3 control-label">Jumlah pemilih yang menggunakan hak pilih dalam pemilu Gubenur yang lalu</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="kedaulatan_pkd_3" name="data[detail][kedaulatan][pkd][3]" placeholder="Jumlah">
			</div>
		</div>

		<div class="form-group">
			<div class="col-md-12">
				<h4>3. Penentuan Kepala Desa/Lurah dan Perangkat Desa/Kelurahan</h4>
			</div>
		</div>
		<div class="form-group">
			<label for="kedaulatan_pkdpd_1" class="col-sm-3 control-label">Penentuan Jabatan Kepala Desa</label>
			<div class="col-sm-5">
				<select class="form-control" id="kedaulatan_pkdpd_1" name="data[detail][kedaulatan][pkdpd][1]">
					<option value="Dipilih masyarakat secara langsung">Dipilih masyarakat secara langsung</option>
					<option value="Dipilih oleh perwakilan masyarakat">Dipilih oleh perwakilan masyarakat</option>
					<option value="Ditunjuk Pemerintah Tingkat Atas">Ditunjuk Pemerintah Tingkat Atas</option>
					<option value="Diangkat turun temurun oleh masyarakat setempat">Diangkat turun temurun oleh masyarakat setempat</option>
				</select>
			</div>
		</div>
		<div class="form-group">
			<label for="kedaulatan_pkdpd_2" class="col-sm-3 control-label">Penentuan Sekretaris Desa</label>
			<div class="col-sm-5">
				<select class="form-control" id="kedaulatan_pkdpd_2" name="data[detail][kedaulatan][pkdpd][2]">
					<option value="Ditunjuk, diangkat dan ditetapkan oleh Bupati/Walikota">Ditunjuk, diangkat dan ditetapkan oleh Bupati/Walikota</option>
					<option value="Ditunjuk, diangkat dan ditetapkan oleh Camat atas nama Bupati/Walikota">Ditunjuk, diangkat dan ditetapkan oleh Camat atas nama Bupati/Walikota</option>
					<option value="Diusulkan oleh Kepala Desa, Dipilih, Diangkat dan Ditetapkan oleh Bupati/Walikota">Diusulkan oleh Kepala Desa, Dipilih, Diangkat dan Ditetapkan oleh Bupati/Walikota</option>
				</select>
			</div>
		</div>
		<div class="form-group">
			<label for="kedaulatan_pkdpd_3" class="col-sm-3 control-label">Penentuan Perangkat Desa termasuk Kepala Dusun</label>
			<div class="col-sm-5">
				<select class="form-control" id="kedaulatan_pkdpd_3" name="data[detail][kedaulatan][pkdpd][3]">
					<option value="Ditunjuk, diangkat dan ditetapkan oleh Kepala Desa serta disahkan Camat">Ditunjuk, diangkat dan ditetapkan oleh Kepala Desa serta disahkan Camat</option>
					<option value="Ditunjuk, diangkat dan ditetapkan oleh Kepala Desa serta dilaporkan ke Camat">Ditunjuk, diangkat dan ditetapkan oleh Kepala Desa serta dilaporkan ke Camat</option>
					<option value="Ditunjuk, diangkat dan ditetapkan oleh Camat/Kepala Distrik/Sebutan lain">Ditunjuk, diangkat dan ditetapkan oleh Camat/Kepala Distrik/Sebutan lain</option>
				</select>
			</div>
		</div>
		<div class="form-group">
			<label for="kedaulatan_pkdpd_4" class="col-sm-3 control-label">Masa jabatan Kepala Desa</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="kedaulatan_pkdpd_4" name="data[detail][kedaulatan][pkdpd][4]" placeholder="Tahun">
			</div>
		</div>
		<div class="form-group">
			<label for="kedaulatan_pkdpd_5" class="col-sm-3 control-label">Penentuan Jabatan Lurah dan Perangkat Kelurahan termasuk Kepala Lingkungan</label>
			<div class="col-sm-5">
				<select class="form-control" id="kedaulatan_pkdpd_5" name="data[detail][kedaulatan][pkdpd][5]">
					<option value="Ditunjuk dan diangkat oleh Camat sesuai Delegasi Kewenangan dari Bupati/Walikota">Ditunjuk dan diangkat oleh Camat sesuai Delegasi Kewenangan dari Bupati/Walikota</option>
					<option value="Ditunjuk dan diangkat oleh Bupati/Walikota secara langsung">Ditunjuk dan diangkat oleh Bupati/Walikota secara langsung</option>
				</select>
			</div>
		</div>

		<div class="form-group">
			<div class="col-md-12">
				<h4>4. Pemilihan BPD</h4>
			</div>
		</div>
		<div class="form-group">
			<label for="kedaulatan_bpd_1" class="col-sm-3 control-label">Jumlah anggota BPD</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="kedaulatan_bpd_1" name="data[detail][kedaulatan][bpd][1]" placeholder="Orang">
			</div>
		</div>
		<div class="form-group">
			<label for="kedaulatan_bpd_2" class="col-sm-3 control-label">Penentuan anggota BPD</label>
			<div class="col-sm-5">
				<select class="form-control" id="kedaulatan_bpd_2" name="data[detail][kedaulatan][bpd][2]">
					<option value="Dipilih masyarakat secara langsung">Dipilih masyarakat secara langsung</option>
					<option value="Dipilih oleh perwakilan masyarakat desa secara musyawarah dan mufakat">Dipilih oleh perwakilan masyarakat desa secara musyawarah dan mufakat</option>
					<option value="Ditunjuk oleh Kepala Desa/Camat dan unsur lanilla">Ditunjuk oleh Kepala Desa/Camat dan unsur lanilla</option>
					<option value="Disahkan melalui keputusan Bupati/Walikota">Disahkan melalui keputusan Bupati/Walikota</option>
				</select>
			</div>
		</div>
		<div class="form-group">
			<label for="kedaulatan_bpd_3" class="col-sm-3 control-label">Pimpinan BPD</label>
			<div class="col-sm-5">
				<select class="form-control" id="kedaulatan_bpd_3" name="data[detail][kedaulatan][bpd][3]">
					<option value="Dipilih dari dan oleh anggota BPD secara langsung">Dipilih dari dan oleh anggota BPD secara langsung</option>
					<option value="Dipilih oleh Kepala Desa dan setujui Camat">Dipilih oleh Kepala Desa dan setujui Camat</option>
					<option value="Ditunjuk Camat">Ditunjuk Camat</option>
					<option value="Dipilih oleh rakyat secara langsung dari para anggota BPD ">Dipilih oleh rakyat secara langsung dari para anggota BPD </option>
				</select>
			</div>
		</div>
		<div class="form-group">
			<label for="kedaulatan_bpd_4" class="col-sm-3 control-label">Pemilikan kantor/ruang kerja BPD</label>
			<div class="col-sm-5">
				<select class="form-control" id="kedaulatan_bpd_4" name="data[detail][kedaulatan][bpd][4]">
					<option value="Ada">Ada</option>
					<option value="Tidak">Tidak</option>
				</select>
			</div>
		</div>
		<div class="form-group">
			<label for="kedaulatan_bpd_5" class="col-sm-3 control-label">Anggaran untuk BPD</label>
			<div class="col-sm-5">
				<select class="form-control" id="kedaulatan_bpd_5" name="data[detail][kedaulatan][bpd][5]">
					<option value="Ada">Ada</option>
					<option value="Tidak">Tidak</option>
				</select>
			</div>
		</div>
		<div class="form-group">
			<label for="kedaulatan_bpd_6" class="col-sm-3 control-label">Produk keputusan BPD tahun ini</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="kedaulatan_bpd_6" name="data[detail][kedaulatan][bpd][6][pd]" placeholder="Peraturan Desa"><br>
				<input type="text" class="form-control" id="kedaulatan_bpd_6" name="data[detail][kedaulatan][bpd][6][pkkd]" placeholder="Permintaan keterangan dari Kepala Desa ... kali"><br>
				<input type="text" class="form-control" id="kedaulatan_bpd_6" name="data[detail][kedaulatan][bpd][6][rpd]" placeholder="Rancangan Peraturan Desa. ... buah"><br>
				<input type="text" class="form-control" id="kedaulatan_bpd_6" name="data[detail][kedaulatan][bpd][6][mam]" placeholder="Menyalurkan aspirasi masyarakat .....kali"><br>
				<input type="text" class="form-control" id="kedaulatan_bpd_6" name="data[detail][kedaulatan][bpd][6][mpkkd]" placeholder="Menyatakan pendapat kepada Kepala Desa.... kali"><br>
				<input type="text" class="form-control" id="kedaulatan_bpd_6" name="data[detail][kedaulatan][bpd][6][mupkd]" placeholder="Menyampaikan usul dan pendapat kepada Kepala Desa ... kali"><br>
				<input type="text" class="form-control" id="kedaulatan_bpd_6" name="data[detail][kedaulatan][bpd][6][mepad]" placeholder="Mengevaluasi efektivitas pelaksanaan APB Desa.... kali">
			</div>
		</div>

		<div class="form-group">
			<div class="col-md-12">
				<h4>5. Pemilihan dan Fungsi Lembaga Kemasyarakatan</h4>
			</div>
		</div>
		<div class="form-group">
			<label for="kedaulatan_pflk_1" class="col-sm-3 control-label">Keberadaan organisasi lembaga kemasyarakatan desa/kelurahan</label>
			<div class="col-sm-5">
				<select class="form-control" id="kedaulatan_pflk_1" name="data[detail][kedaulatan][pflk][1]">
					<option value="Ada">Ada</option>
					<option value="Tidak">Tidak</option>
				</select>
			</div>
		</div>
		<div class="form-group">
			<label for="kedaulatan_pflk_2" class="col-sm-3 control-label">Dasar hukum keberadaan Lembaga Kemasyarakatan Desa/LKD</label>
			<div class="col-sm-5">
				<select class="form-control" id="kedaulatan_pflk_2" name="data[detail][kedaulatan][pflk][2]">
					<option value="Perdes">Perdes</option>
					<option value="Keputusan Kepala Desa">Keputusan Kepala Desa</option>
					<option value="Keputusan Camat">Keputusan Camat</option>
					<option value="Belum diatur">Belum diatur</option>
				</select>
			</div>
		</div>
		<div class="form-group">
			<label for="kedaulatan_pflk_3" class="col-sm-3 control-label">Jumlah organisasi anggota lembaga kemasyarakatan desa termasuk RT, RW, PKK, LKMD/K,  LPM, Karang Taruna, Bumdes,Lembaga  Adat,  Kelompok  Tani  dan  lembaga lainnya sesuai ketentuan</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="kedaulatan_pflk_3" name="data[detail][kedaulatan][pflk][3]" placeholder="Unit organisasi">
			</div>
		</div>
		<div class="form-group">
			<label for="kedaulatan_pflk_4" class="col-sm-3 control-label">Dasarhukumpembentukan Lembaga Kemasyarakatan Kelurahan/LKK</label>
			<div class="col-sm-5">
				<select class="form-control" id="kedaulatan_pflk_4" name="data[detail][kedaulatan][pflk][4]">
					<option value="Keputusan Lurah">Keputusan Lurah</option>
					<option value="Keputusan Camat">Keputusan Camat</option>
					<option value="Belum diatur">Belum diatur</option>
				</select>
			</div>
		</div>
		<div class="form-group">
			<label for="kedaulatan_pflk_5" class="col-sm-3 control-label">Jumlah organisasi anggota lembaga kemasyarakatan kelurahan</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="kedaulatan_pflk_5" name="data[detail][kedaulatan][pflk][5]" placeholder="Unit organisasi">
			</div>
		</div>
		<div class="form-group">
			<label for="kedaulatan_pflk_6" class="col-sm-3 control-label">Pemilihan pengurus LKD/LKK</label>
			<div class="col-sm-5">
				<select class="form-control" id="kedaulatan_pflk_6" name="data[detail][kedaulatan][pflk][6]">
					<option value="Dipilih oleh rakyat secara langsung">Dipilih oleh rakyat secara langsung</option>
					<option value="Ditunjuk dan diangkat oleh Kepala Desa/Lurah">Ditunjuk dan diangkat oleh Kepala Desa/Lurah</option>
					<option value="Ditunjuk dan Diangkat oleh Camat">Ditunjuk dan Diangkat oleh Camat</option>
				</select>
			</div>
		</div>
		<div class="form-group">
			<label for="kedaulatan_pflk_7" class="col-sm-3 control-label">Pemilihan pengurus organisasi anggota LKD/LKK termasuk PKK, LPM/LKMD/K, Karang Taruna, RT, RW, Bumdes, lembaga adat, kelompok tani dan organisasi anggota LKD/LKK lainnya</label>
			<div class="col-sm-5">
				<select class="form-control" id="kedaulatan_pflk_7" name="data[detail][kedaulatan][pflk][7]">
					<option value="Dipilih oleh rakyat secara langsung">Dipilih oleh rakyat secara langsung</option>
					<option value="Ditunjuk dan diangkat oleh Ketua LKD/LKK">Ditunjuk dan diangkat oleh Ketua LKD/LKK</option>
					<option value="Ditunjuk dan diangkat oleh Kepala Desa/ Lurah">Ditunjuk dan diangkat oleh Kepala Desa/ Lurah</option>
					<option value="Ditunjuk dan Diangkat oleh Camat">Ditunjuk dan Diangkat oleh Camat</option>
				</select>
			</div>
		</div>
		<div class="form-group">
			<label for="kedaulatan_pflk_8" class="col-sm-3 control-label">Implementasi tugas, fungsi dankewajiban LKD/LKK</label>
			<div class="col-sm-5">
				<select class="form-control" id="kedaulatan_pflk_8" name="data[detail][kedaulatan][pflk][8]">
					<option value="Aktif">Aktif</option>
					<option value="Tidak">Tidak</option>
				</select>
			</div>
		</div>
		<div class="form-group">
			<label for="kedaulatan_pflk_9" class="col-sm-3 control-label">Jumlah kegiatan yang dilaksanakan LKD/LKK</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="kedaulatan_pflk_9" name="data[detail][kedaulatan][pflk][9]" placeholder="Kegiatan">
			</div>
		</div>
		<div class="form-group">
			<label for="kedaulatan_pflk_10" class="col-sm-3 control-label">Fungsi, tugas dan kewajiban lembaga kemasyarakatan yang dijalankan organisasi anggota LKD/LKK</label>
			<div class="col-sm-5">
				<select class="form-control" id="kedaulatan_pflk_10" name="data[detail][kedaulatan][pflk][10]">
					<option value="Aktif">Aktif</option>
					<option value="Tidak">Tidak</option>
				</select>
			</div>
		</div>
		<div class="form-group">
			<label for="kedaulatan_pflk_11" class="col-sm-3 control-label">Jumlah kegiatan lembaga kemasyarakatan yang dijalankan organisasi anggota LKD/LKK</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="kedaulatan_pflk_11" name="data[detail][kedaulatan][pflk][11]" placeholder="Kegiatan">
			</div>
		</div>
		<div class="form-group">
			<label for="kedaulatan_pflk_12" class="col-sm-3 control-label">Alokasi anggaran untuk LKD/LKK</label>
			<div class="col-sm-5">
				<select class="form-control" id="kedaulatan_pflk_12" name="data[detail][kedaulatan][pflk][12]">
					<option value="Ada">Ada</option>
					<option value="Tidak">Tidak</option>
				</select>
			</div>
		</div>
		<div class="form-group">
			<label for="kedaulatan_pflk_13" class="col-sm-3 control-label">Alokasi anggaran untuk organisasi anggota LKD/LKK  termasuk  PKK, LPM/LKMD/K, Karang Taruna, RT, RW, kelompok tani dan organisasi lainnya</label>
			<div class="col-sm-5">
				<select class="form-control" id="kedaulatan_pflk_13" name="data[detail][kedaulatan][pflk][13]">
					<option value="Ada">Ada</option>
					<option value="Tidak">Tidak</option>
				</select>
			</div>
		</div>
		<div class="form-group">
			<label for="kedaulatan_pflk_14" class="col-sm-3 control-label">Kantor dan ruangan kerja untuk LKD/LKK</label>
			<div class="col-sm-5">
				<select class="form-control" id="kedaulatan_pflk_14" name="data[detail][kedaulatan][pflk][14]">
					<option value="Ada">Ada</option>
					<option value="Tidak">Tidak</option>
				</select>
			</div>
		</div>
		<div class="form-group">
			<label for="kedaulatan_pflk_15" class="col-sm-3 control-label">Dukungan pembiayaan, personil dan ATK untuk Sekretariat LKD/LKK  dari APB-Desa dan Anggaran Kelurahan/APBD</label>
			<div class="col-sm-5">
				<select class="form-control" id="kedaulatan_pflk_15" name="data[detail][kedaulatan][pflk][15]">
					<option value="Memadai">Memadai</option>
					<option value="Kurang Memadai">Kurang Memadai</option>
				</select>
			</div>
		</div>
		<div class="form-group">
			<label for="kedaulatan_pflk_16" class="col-sm-3 control-label">Realisasi program kerja organisasi anggota LKD/LKK</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="kedaulatan_pflk_16" name="data[detail][kedaulatan][pflk][16]" placeholder="Persentase">
			</div>
		</div>
		<div class="form-group">
			<label for="kedaulatan_pflk_17" class="col-sm-3 control-label">Keberadaan Alat kelengkapan organisasi anggota  LKD/LKK  termasuk  Dasawisma  dan Pokja, Bidang, Seksi, Urusan, danterisi tidaknya struktur organisasi anggota LKD/LKK</label>
			<div class="col-sm-5">
				<select class="form-control" id="kedaulatan_pflk_17" name="data[detail][kedaulatan][pflk][17]">
					<option value="Ada dan terisi">Ada dan terisi</option>
					<option value="Tidak ada atau belum terisi semuanya">Tidak ada atau belum terisi semuanya</option>
				</select>
			</div>
		</div>
		<div class="form-group">
			<label for="kedaulatan_pflk_18" class="col-sm-3 control-label">Kegiatan administrasi dan Ketatausahaan LKD/LKK</label>
			<div class="col-sm-5">
				<select class="form-control" id="kedaulatan_pflk_18" name="data[detail][kedaulatan][pflk][18]">
					<option value="Berfungsi">Berfungsi</option>
					<option value="Tidak Berfungsi">Tidak Berfungsi</option>
				</select>
			</div>
		</div>

		<div class="form-group">
			<div class="col-md-12">
				<h4>D. Peranserta Masyarakat Dalam Pembangunan</h4>
				<h4>1. Musyawarah Perencanaan Pembangunan Desa/Kelurahan/ Musrenbangdes/ kelurahan</h4>
			</div>
		</div>
		<div class="form-group">
			<label for="kedaulatan_mppd_1" class="col-sm-3 control-label">Jumlah musyawarah perencanaan pembangunan tingkat Desa/Kelurahan yang dilakukan pada tahun ini, termasuk di tingkat dusun dan lingkungan</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="kedaulatan_mppd_1" name="data[detail][kedaulatan][mppd][1]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="kedaulatan_mppd_2" class="col-sm-3 control-label">Jumlah kehadiran masyarakat dalam setiap kali musyawarah tingkat dusun/lingkungan dan desa/kelurahan</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="kedaulatan_mppd_2" name="data[detail][kedaulatan][mppd][2]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="kedaulatan_mppd_3" class="col-sm-3 control-label">Jumlah peserta laki-laki dalam Musrenbang di desa/kelurahan</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="kedaulatan_mppd_3" name="data[detail][kedaulatan][mppd][3]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="kedaulatan_mppd_4" class="col-sm-3 control-label">Jumlah peserta perempuan dalam Musrenbang di desa dan kelurahan</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="kedaulatan_mppd_4" name="data[detail][kedaulatan][mppd][4]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="kedaulatan_mppd_5" class="col-sm-3 control-label">Jumlah Musyawarah Antar Desa dalam perencanaan pembangunan yang dikoordinasikan Kecamatan</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="kedaulatan_mppd_5" name="data[detail][kedaulatan][mppd][5]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="kedaulatan_mppd_6" class="col-sm-3 control-label">Penggunaan Profil Desa/Kelurahan sebagai sumber data dasar yang digunakan dalam perencanaan pembangunan desa dan forum Musrenbang Partisipatif</label>
			<div class="col-sm-5">
				<select class="form-control" id="kedaulatan_mppd_6" name="data[detail][kedaulatan][mppd][6]">
					<option value="Ya">Ya</option>
					<option value="Tidak">Tidak</option>
				</select>
			</div>
		</div>
		<div class="form-group">
			<label for="kedaulatan_mppd_7" class="col-sm-3 control-label">Penggunaan data BPS dan data sektoral dalam perencanaan pembangunan partisipatif dan Musrenbang di desa dan Kelurahan</label>
			<div class="col-sm-5">
				<select class="form-control" id="kedaulatan_mppd_7" name="data[detail][kedaulatan][mppd][7]">
					<option value="Ya">Ya</option>
					<option value="Tidak">Tidak</option>
				</select>
			</div>
		</div>
		<div class="form-group">
			<label for="kedaulatan_mppd_8" class="col-sm-3 control-label">Pelibatan masyarakat dalam pemutakhiran data profil desa dan kelurahan sebagai bahan dalam Musrenbang partisipatif</label>
			<div class="col-sm-5">
				<select class="form-control" id="kedaulatan_mppd_8" name="data[detail][kedaulatan][mppd][8]">
					<option value="Ya">Ya</option>
					<option value="Tidak">Tidak</option>
				</select>
			</div>
		</div>
		<div class="form-group">
			<label for="kedaulatan_mppd_9" class="col-sm-3 control-label">Usulan masyarakat yang disetujui menjadi Rencana Kerja Desa dan Kelurahan</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="kedaulatan_mppd_9" name="data[detail][kedaulatan][mppd][9]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="kedaulatan_mppd_10" class="col-sm-3 control-label">Usulan Pemerintah Desa dan Kelurahan yang disetujui menjadi Rencana Kerja Desa/Kelurahan dan dimuat dalam RAPB-Desa</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="kedaulatan_mppd_10" name="data[detail][kedaulatan][mppd][10]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="kedaulatan_mppd_11" class="col-sm-3 control-label">Usulan rencana kerja program dan kegiatan dari pemerintah kabupaten/kota/provinsi dan pusat yang dibahas saat Musrenbang dan disetujui untuk dilaksanakan di desa dan kelurahan oleh masyarakat dan lembaga kemasyarakatan desa/kelurahan</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="kedaulatan_mppd_11" name="data[detail][kedaulatan][mppd][11]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="kedaulatan_mppd_12" class="col-sm-3 control-label">Usulan rencana kerja pemerintah tingkat atas yang ditolak dalam Musrenbangdes/kel</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="kedaulatan_mppd_12" name="data[detail][kedaulatan][mppd][12]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="kedaulatan_mppd_13" class="col-sm-3 control-label">Pemilikan dokumen Rencana Kerja Pembangunan Desa/Kelurahan (RKPD/K)</label>
			<div class="col-sm-5">
				<select class="form-control" id="kedaulatan_mppd_13" name="data[detail][kedaulatan][mppd][13]">
					<option value="Ada">Ada</option>
					<option value="Tidak">Tidak</option>
				</select>
			</div>
		</div>
		<div class="form-group">
			<label for="kedaulatan_mppd_14" class="col-sm-3 control-label">Pemilikan Rencana Pembangunan Jangka Menengah Desa/Kelurahan (RPJMD/K)</label>
			<div class="col-sm-5">
				<select class="form-control" id="kedaulatan_mppd_14" name="data[detail][kedaulatan][mppd][14]">
					<option value="Ada">Ada</option>
					<option value="Tidak">Tidak</option>
				</select>
			</div>
		</div>
		<div class="form-group">
			<label for="kedaulatan_mppd_15" class="col-sm-3 control-label">Pemilikan dokumen hasil Musrenbang tingkat Desa dan Kelurahan yang diusulkan ke pemerintah tingkat atas untuk dibiayai dari APBD Kab/Kota, APBD Provinsi dan APBN maupun sumber biaya dari perusahaan swasta yang investasi di desa/kelurahan</label>
			<div class="col-sm-5">
				<select class="form-control" id="kedaulatan_mppd_15" name="data[detail][kedaulatan][mppd][15]">
					<option value="Ada">Ada</option>
					<option value="Tidak">Tidak</option>
				</select>
			</div>
		</div>
		<div class="form-group">
			<label for="kedaulatan_mppd_16" class="col-sm-3 control-label">Jumlah kegiatan yang diusulkan masyarakat melalui forum Musrenbangdes/kel yang tidak direalisasikan dalam APB-Desa, APB-Daerah Kabupaten/Kota dan Provinsi</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="kedaulatan_mppd_16" name="data[detail][kedaulatan][mppd][16]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="kedaulatan_mppd_17" class="col-sm-3 control-label">Jumlah kegiatan yang diusulkan masyarakat melalui forum Musrenbangdes/kel yang pelaksanaannya tidak sesuai dengan hasil Musrenbang</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="kedaulatan_mppd_17" name="data[detail][kedaulatan][mppd][17]" placeholder="Jumlah">
			</div>
		</div>

		<div class="form-group">
			<div class="col-md-12">
				<h4>2. Peranserta masyarakat dalam Pelaksanaan dan Pelestarian Hasil</h4>
				<h4>Pembangunan</h4>
			</div>
		</div>
		<div class="form-group">
			<label for="kedaulatan_pmpph_1" class="col-sm-3 control-label">Jumlah masyarakat yang terlibat dalam pelaksanaan pembangunan fisik di desa dan kelurahan sesuai hasil Musrenbang</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="kedaulatan_pmpph_1" name="data[detail][kedaulatan][pmpph][1]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="kedaulatan_pmpph_2" class="col-sm-3 control-label">Jumlah penduduk yang dilibatkan dalam pelaksanaan proyek padat karya oleh pengelola proyek yang ditunjuk pemerintah desa/kelurahan atau kabupaten/kota</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="kedaulatan_pmpph_2" name="data[detail][kedaulatan][pmpph][2]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="kedaulatan_pmpph_3" class="col-sm-3 control-label">Jumlah kegiatan yang dilaksanakan oleh masyarakat dan lembaga kemasyarakatan desa/kelurahan yang sudah ada sesuai ketetapan dalam APB-Desa</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="kedaulatan_pmpph_3" name="data[detail][kedaulatan][pmpph][3]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="kedaulatan_pmpph_4" class="col-sm-3 control-label">Jumlah kegiatan yang dilaksanakan oleh pihak ketiga tanpa melibatkan masyarakat sesuai ketentuan dalam APB-Daerah</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="kedaulatan_pmpph_4" name="data[detail][kedaulatan][pmpph][4]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="kedaulatan_pmpph_5" class="col-sm-3 control-label">Jumlah kegiatan yang masuk desa/kelurahan di luar yang telah direncanakan dan disepakati masyarakat saat Musrenbang</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="kedaulatan_pmpph_5" name="data[detail][kedaulatan][pmpph][5]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="kedaulatan_pmpph_6" class="col-sm-3 control-label">Usulan masyarakat yang disetujui menjadi Rencana Kerja Desa dan Kelurahan</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="kedaulatan_pmpph_6" name="data[detail][kedaulatan][pmpph][6]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="kedaulatan_pmpph_7" class="col-sm-3 control-label">Usulan Pemerintah Desa dan Kelurahan yang disetujui menjadi Rencana Kerja Desa/Kelurahan</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="kedaulatan_pmpph_7" name="data[detail][kedaulatan][pmpph][7]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="kedaulatan_pmpph_8" class="col-sm-3 control-label">Usulan rencana kerja program dan kegiatan dari pemerintah kabupaten/kota/provinsi dan pusat yang dibahas saat Musrenbang  dan disetujui untuk dilaksanakan di desa dan kelurahan oleh masyarakat</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="kedaulatan_pmpph_8" name="data[detail][kedaulatan][pmpph][8]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="kedaulatan_pmpph_9" class="col-sm-3 control-label">Penyelenggaraan musyawarah desa/kelurahan untuk menerima, memelihara dan melestarikan hasil pembangunan yang sudah ada</label>
			<div class="col-sm-5">
				<select class="form-control" id="kedaulatan_pmpph_9" name="data[detail][kedaulatan][pmpph][9]">
					<option value="Ada">Ada</option>
					<option value="Tidak">Tidak</option>
				</select>
			</div>
		</div>
		<div class="form-group">
			<label for="kedaulatan_pmpph_10" class="col-sm-3 control-label">Pelaksanaan kegiatan dari masyarakat untuk menyelesaikan atau menindaklanjuti kegiatan yang belum diselesaikan oleh pelaksana sebelumnya.</label>
			<div class="col-sm-5">
				<select class="form-control" id="kedaulatan_pmpph_10" name="data[detail][kedaulatan][pmpph][10]">
					<option value="Ada">Ada</option>
					<option value="Tidak">Tidak</option>
				</select>
			</div>
		</div>
		<div class="form-group">
			<label for="kedaulatan_pmpph_11" class="col-sm-3 control-label">Jumlah kasus penyimpangan pelaksanaan kegiatan pembangunan yang dilaporkan masyarakat atau lembaga kemasyarakatan desa/kelurahan kepada Kepala Desa/Lurah</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="kedaulatan_pmpph_11" name="data[detail][kedaulatan][pmpph][11]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="kedaulatan_pmpph_12" class="col-sm-3 control-label">Jumlah kasus penyimpangan pelaksanaan pembangunan yang diselesaikan di tingkat desa/kelurahan</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="kedaulatan_pmpph_12" name="data[detail][kedaulatan][pmpph][12]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="kedaulatan_pmpph_13" class="col-sm-3 control-label">Jumlah kasus penyimpangan pelaksanaan kegiatan pembangunan desa/kelurahan yang diselesaikan secara hukum</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="kedaulatan_pmpph_13" name="data[detail][kedaulatan][pmpph][13]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="kedaulatan_pmpph_14" class="col-sm-3 control-label">Jenis kegiatan masyarakat untuk melestarikan hasil pembangunan yang dikoordinasikan pemerintah desa/kelurahan</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="kedaulatan_pmpph_14" name="data[detail][kedaulatan][pmpph][14]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="kedaulatan_pmpph_15" class="col-sm-3 control-label">Jumlah kegiatan yang didanai dari APB-Desa dan swadaya masyarakat di kelurahan</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="kedaulatan_pmpph_15" name="data[detail][kedaulatan][pmpph][15]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="kedaulatan_pmpph_16" class="col-sm-3 control-label">Jumlah kegiatan di desa dan kelurahan yang didanai dari APB Daerah Kabupaten/Kota</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="kedaulatan_pmpph_16" name="data[detail][kedaulatan][pmpph][16]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="kedaulatan_pmpph_17" class="col-sm-3 control-label">Jumlah kegiatan di desa dan kelurahan yang didanai dari APBD Provinsi</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="kedaulatan_pmpph_17" name="data[detail][kedaulatan][pmpph][17]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="kedaulatan_pmpph_18" class="col-sm-3 control-label">Jumlah kegiatan di desa dan kelurahan yang didanai APBN</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="kedaulatan_pmpph_18" name="data[detail][kedaulatan][pmpph][18]" placeholder="Jumlah">
			</div>
		</div>

		<div class="form-group">
			<div class="col-md-12">
				<h4>3. Semangat Kegotongroyongan Penduduk</h4>
			</div>
		</div>
		<div class="form-group">
			<label for="kedaulatan_skgrp_1" class="col-sm-3 control-label">Jumlah kelompok arisan</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="kedaulatan_skgrp_1" name="data[detail][kedaulatan][skgrp][1]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="kedaulatan_skgrp_2" class="col-sm-3 control-label">Jumlah penduduk menjadi orang tua asuh</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="kedaulatan_skgrp_2" name="data[detail][kedaulatan][skgrp][2]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="kedaulatan_skgrp_3" class="col-sm-3 control-label">Ada tidaknya dana sehat</label>
			<div class="col-sm-5">
				<select class="form-control" id="kedaulatan_skgrp_3" name="data[detail][kedaulatan][skgrp][3]">
					<option value="Ada">Ada</option>
					<option value="Tidak">Tidak</option>
				</select>
			</div>
		</div>
		<div class="form-group">
			<label for="kedaulatan_skgrp_4" class="col-sm-3 control-label">Ada tidaknya kegiatan gotong royong atau sambatan/sejenisnya dalam pembangunan rumah</label>
			<div class="col-sm-5">
				<select class="form-control" id="kedaulatan_skgrp_4" name="data[detail][kedaulatan][skgrp][4]">
					<option value="Ada">Ada</option>
					<option value="Tidak">Tidak</option>
				</select>
			</div>
		</div>
		<div class="form-group">
			<label for="kedaulatan_skgrp_5" class="col-sm-3 control-label">Ada tidaknya kegiatan gotong royong atau sambatan/sejenisnya dalam pengolahan tanah</label>
			<div class="col-sm-5">
				<select class="form-control" id="kedaulatan_skgrp_5" name="data[detail][kedaulatan][skgrp][5]">
					<option value="Ada">Ada</option>
					<option value="Tidak">Tidak</option>
				</select>
			</div>
		</div>
		<div class="form-group">
			<label for="kedaulatan_skgrp_6" class="col-sm-3 control-label">Ada tidaknya kegiatan gotong royong atau sambatan/sejenisnya dalam pembiayaan pendidikan anak sekolah/kuliah/kursus</label>
			<div class="col-sm-5">
				<select class="form-control" id="kedaulatan_skgrp_6" name="data[detail][kedaulatan][skgrp][6]">
					<option value="Ada">Ada</option>
					<option value="Tidak">Tidak</option>
				</select>
			</div>
		</div>
		<div class="form-group">
			<label for="kedaulatan_skgrp_7" class="col-sm-3 control-label">Ada tidaknya kegiatan gotong royong atau sambatan/sejenisnya dalam pemeliharaan fasilitas umum dan fasilitas sosial/prasarana dan sarana</label>
			<div class="col-sm-5">
				<select class="form-control" id="kedaulatan_skgrp_7" name="data[detail][kedaulatan][skgrp][7]">
					<option value="Ada">Ada</option>
					<option value="Tidak">Tidak</option>
				</select>
			</div>
		</div>
		<div class="form-group">
			<label for="kedaulatan_skgrp_8" class="col-sm-3 control-label">Ada tidaknya kegiatan gotong royong atau sambatan/sejenisnya dalam pemberian modal usaha</label>
			<div class="col-sm-5">
				<select class="form-control" id="kedaulatan_skgrp_8" name="data[detail][kedaulatan][skgrp][8]">
					<option value="Ada">Ada</option>
					<option value="Tidak">Tidak</option>
				</select>
			</div>
		</div>
		<div class="form-group">
			<label for="kedaulatan_skgrp_9" class="col-sm-3 control-label">Ada tidaknya kegiatan gotong royong atau sambatan/sejenisnya dalam pengerjaan sawah dan kebun</label>
			<div class="col-sm-5">
				<select class="form-control" id="kedaulatan_skgrp_9" name="data[detail][kedaulatan][skgrp][9]">
					<option value="Ada">Ada</option>
					<option value="Tidak">Tidak</option>
				</select>
			</div>
		</div>
		<div class="form-group">
			<label for="kedaulatan_skgrp_10" class="col-sm-3 control-label">Ada tidaknya kegiatan gotong royong atau sambatan/sejenisnya dalam penangkapan ikan dan usaha peternakan lainnya</label>
			<div class="col-sm-5">
				<select class="form-control" id="kedaulatan_skgrp_10" name="data[detail][kedaulatan][skgrp][10]">
					<option value="Ada">Ada</option>
					<option value="Tidak">Tidak</option>
				</select>
			</div>
		</div>
		<div class="form-group">
			<label for="kedaulatan_skgrp_11" class="col-sm-3 control-label">Ada tidaknya kegiatan gotong royong atau sambatan/sejenisnya dalam menjaga ketertiban, ketentraman dan keamanan</label>
			<div class="col-sm-5">
				<select class="form-control" id="kedaulatan_skgrp_11" name="data[detail][kedaulatan][skgrp][11]">
					<option value="Ada">Ada</option>
					<option value="Tidak">Tidak</option>
				</select>
			</div>
		</div>
		<div class="form-group">
			<label for="kedaulatan_skgrp_12" class="col-sm-3 control-label">Ada tidaknya kegiatan gotong royong atau sambatan/sejenisnya dalam peristiwa kematian</label>
			<div class="col-sm-5">
				<select class="form-control" id="kedaulatan_skgrp_12" name="data[detail][kedaulatan][skgrp][12]">
					<option value="Ada">Ada</option>
					<option value="Tidak">Tidak</option>
				</select>
			</div>
		</div>
		<div class="form-group">
			<label for="kedaulatan_skgrp_13" class="col-sm-3 control-label">Ada tidaknya kegiatan gotong royong menjaga kebersihan Desa/Kelurahan</label>
			<div class="col-sm-5">
				<select class="form-control" id="kedaulatan_skgrp_13" name="data[detail][kedaulatan][skgrp][13]">
					<option value="Ada">Ada</option>
					<option value="Tidak">Tidak</option>
				</select>
			</div>
		</div>
		<div class="form-group">
			<label for="kedaulatan_skgrp_14" class="col-sm-3 control-label">Ada tidaknya kegiatan gotong royong membangun jalan/jembatan/saluran air/irigasi</label>
			<div class="col-sm-5">
				<select class="form-control" id="kedaulatan_skgrp_14" name="data[detail][kedaulatan][skgrp][14]">
					<option value="Ada">Ada</option>
					<option value="Tidak">Tidak</option>
				</select>
			</div>
		</div>
		<div class="form-group">
			<label for="kedaulatan_skgrp_15" class="col-sm-3 control-label">Ada tidaknya kegiatan gotong royong atau sambatan/sejenisnya dalam pemberantasan sarang nyamuk dan kesehatan lingkungan lainnya</label>
			<div class="col-sm-5">
				<select class="form-control" id="kedaulatan_skgrp_15" name="data[detail][kedaulatan][skgrp][15]">
					<option value="Ada">Ada</option>
					<option value="Tidak">Tidak</option>
				</select>
			</div>
		</div>
		<div class="form-group">
			<label for="kedaulatan_skgrp_16" class="col-sm-3 control-label">Ada tidaknya kerjasama antar Desa/Kelurahan</label>
			<div class="col-sm-5">
				<select class="form-control" id="kedaulatan_skgrp_16" name="data[detail][kedaulatan][skgrp][16]">
					<option value="Ada">Ada</option>
					<option value="Tidak">Tidak</option>
				</select>
			</div>
		</div>
		<div class="form-group">
			<label for="kedaulatan_skgrp_17" class="col-sm-3 control-label">Ada tidaknya penyelesaian perselisihan antar desa/kelurahan</label>
			<div class="col-sm-5">
				<select class="form-control" id="kedaulatan_skgrp_17" name="data[detail][kedaulatan][skgrp][17]">
					<option value="Ada">Ada</option>
					<option value="Tidak">Tidak</option>
				</select>
			</div>
		</div>
		<div class="form-group">
			<label for="kedaulatan_skgrp_18" class="col-sm-3 control-label">Ada tidaknya kegiatan gotong royong dalam penyelesaian konflik di setiap desa/kelurahan oleh masyarakat sendiri</label>
			<div class="col-sm-5">
				<select class="form-control" id="kedaulatan_skgrp_18" name="data[detail][kedaulatan][skgrp][18]">
					<option value="Ada">Ada</option>
					<option value="Tidak">Tidak</option>
				</select>
			</div>
		</div>
		<div class="form-group">
			<label for="kedaulatan_skgrp_19" class="col-sm-3 control-label">Ada tidaknya gotong royong dalam menolong keluarga tidak mampu dan fakir miskin di desa dan kelurahan</label>
			<div class="col-sm-5">
				<select class="form-control" id="kedaulatan_skgrp_19" name="data[detail][kedaulatan][skgrp][19]">
					<option value="Ada">Ada</option>
					<option value="Tidak">Tidak</option>
				</select>
			</div>
		</div>
		<div class="form-group">
			<label for="kedaulatan_skgrp_20" class="col-sm-3 control-label">Ada tidaknya kegiatan Kepala Desa sebagai Hakim Perdamaian Desa </label>
			<div class="col-sm-5">
				<select class="form-control" id="kedaulatan_skgrp_20" name="data[detail][kedaulatan][skgrp][20]">
					<option value="Ada">Ada</option>
					<option value="Tidak">Tidak</option>
				</select>
			</div>
		</div>
		<div class="form-group">
			<label for="kedaulatan_skgrp_21" class="col-sm-3 control-label">Kegiatan gotong royong dalam penanggulangan bencana</label>
			<div class="col-sm-5">
				<select class="form-control" id="kedaulatan_skgrp_21" name="data[detail][kedaulatan][skgrp][21]">
					<option value="Ada">Ada</option>
					<option value="Tidak">Tidak</option>
				</select>
			</div>
		</div>
		<div class="form-group">
			<label for="kedaulatan_skgrp_22" class="col-sm-3 control-label">Kegiatan gotong royong dalam pelaksanaan kegiatan bulan bhakti gotong royong</label>
			<div class="col-sm-5">
				<select class="form-control" id="kedaulatan_skgrp_22" name="data[detail][kedaulatan][skgrp][22]">
					<option value="Ada">Ada</option>
					<option value="Tidak">Tidak</option>
				</select>
			</div>
		</div>

		<div class="form-group">
			<div class="col-md-12">
				<h4>4. Adat Istiadat</h4>
			</div>
		</div>
		<div class="form-group">
			<label for="kedaulatan_adat_1" class="col-sm-3 control-label">Adat istiadat dalam perkawinan</label>
			<div class="col-sm-5">
				<select class="form-control" id="kedaulatan_adat_1" name="data[detail][kedaulatan][adat][1]">
					<option value="Aktif">Aktif</option>
					<option value="Tidak Aktif">Tidak Aktif</option>
					<option value="Pernah Ada">Pernah Ada</option>
				</select>
			</div>
		</div>
		<div class="form-group">
			<label for="kedaulatan_adat_2" class="col-sm-3 control-label">Adat istiadat dalam kelahiran anak</label>
			<div class="col-sm-5">
				<select class="form-control" id="kedaulatan_adat_2" name="data[detail][kedaulatan][adat][2]">
					<option value="Aktif">Aktif</option>
					<option value="Tidak Aktif">Tidak Aktif</option>
					<option value="Pernah Ada">Pernah Ada</option>
				</select>
			</div>
		</div>
		<div class="form-group">
			<label for="kedaulatan_adat_3" class="col-sm-3 control-label">Adat istiadat dalam upacara kematian</label>
			<div class="col-sm-5">
				<select class="form-control" id="kedaulatan_adat_3" name="data[detail][kedaulatan][adat][3]">
					<option value="Aktif">Aktif</option>
					<option value="Tidak Aktif">Tidak Aktif</option>
					<option value="Pernah Ada">Pernah Ada</option>
				</select>
			</div>
		</div>
		<div class="form-group">
			<label for="kedaulatan_adat_4" class="col-sm-3 control-label">Adat istiadat dalam pengelolaan hutan</label>
			<div class="col-sm-5">
				<select class="form-control" id="kedaulatan_adat_4" name="data[detail][kedaulatan][adat][4]">
					<option value="Aktif">Aktif</option>
					<option value="Tidak Aktif">Tidak Aktif</option>
					<option value="Pernah Ada">Pernah Ada</option>
				</select>
			</div>
		</div>
		<div class="form-group">
			<label for="kedaulatan_adat_5" class="col-sm-3 control-label">Adat istiadat dalam tanah pertanian</label>
			<div class="col-sm-5">
				<select class="form-control" id="kedaulatan_adat_5" name="data[detail][kedaulatan][adat][5]">
					<option value="Aktif">Aktif</option>
					<option value="Tidak Aktif">Tidak Aktif</option>
					<option value="Pernah Ada">Pernah Ada</option>
				</select>
			</div>
		</div>
		<div class="form-group">
			<label for="kedaulatan_adat_6" class="col-sm-3 control-label">Adat istiadat dalam pengelolaan laut/pantai</label>
			<div class="col-sm-5">
				<select class="form-control" id="kedaulatan_adat_6" name="data[detail][kedaulatan][adat][6]">
					<option value="Aktif">Aktif</option>
					<option value="Tidak Aktif">Tidak Aktif</option>
					<option value="Pernah Ada">Pernah Ada</option>
				</select>
			</div>
		</div>
		<div class="form-group">
			<label for="kedaulatan_adat_7" class="col-sm-3 control-label">Adat istiadat dalam memecahkan konflik warga</label>
			<div class="col-sm-5">
				<select class="form-control" id="kedaulatan_adat_7" name="data[detail][kedaulatan][adat][7]">
					<option value="Aktif">Aktif</option>
					<option value="Tidak Aktif">Tidak Aktif</option>
					<option value="Pernah Ada">Pernah Ada</option>
				</select>
			</div>
		</div>
		<div class="form-group">
			<label for="kedaulatan_adat_8" class="col-sm-3 control-label">Adat istiadat dalam menjauhkan bala penyakit dan bencana alam</label>
			<div class="col-sm-5">
				<select class="form-control" id="kedaulatan_adat_8" name="data[detail][kedaulatan][adat][8]">
					<option value="Aktif">Aktif</option>
					<option value="Tidak Aktif">Tidak Aktif</option>
					<option value="Pernah Ada">Pernah Ada</option>
				</select>
			</div>
		</div>
		<div class="form-group">
			<label for="kedaulatan_adat_9" class="col-sm-3 control-label">Adat istiadat dalam memulihkan hubungan antara alam semesta dengan manusia dan lingkungannya</label>
			<div class="col-sm-5">
				<select class="form-control" id="kedaulatan_adat_9" name="data[detail][kedaulatan][adat][9]">
					<option value="Aktif">Aktif</option>
					<option value="Tidak Aktif">Tidak Aktif</option>
					<option value="Pernah Ada">Pernah Ada</option>
				</select>
			</div>
		</div>
		<div class="form-group">
			<label for="kedaulatan_adat_10" class="col-sm-3 control-label">Adat istiadat dalam penanggulangan kemiskinanbagi keluarga tidak mampu/fakir miskin/terlantar</label>
			<div class="col-sm-5">
				<select class="form-control" id="kedaulatan_adat_10" name="data[detail][kedaulatan][adat][10]">
					<option value="Aktif">Aktif</option>
					<option value="Tidak Aktif">Tidak Aktif</option>
					<option value="Pernah Ada">Pernah Ada</option>
				</select>
			</div>
		</div>

		<div class="form-group">
			<div class="col-md-12">
				<h4>5. Sikap Dan Mental Masyarakat</h4>
			</div>
		</div>
		<div class="form-group">
			<label for="kedaulatan_sdmm_1" class="col-sm-3 control-label">Jumlah jenis pungutan liar dari anak gelandangan di sudut jalanan</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="kedaulatan_sdmm_1" name="data[detail][kedaulatan][sdmm][1]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="kedaulatan_sdmm_2" class="col-sm-3 control-label">Jumlah jenis pungutan liar di terminal, pelabuhan dan pasar</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="kedaulatan_sdmm_2" name="data[detail][kedaulatan][sdmm][2]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="kedaulatan_sdmm_3" class="col-sm-3 control-label">Peminta-minta sumbangan perorangan dari rumah ke rumah</label>
			<div class="col-sm-5">
				<select class="form-control" id="kedaulatan_sdmm_3" name="data[detail][kedaulatan][sdmm][3]">
					<option value="Ada">Ada</option>
					<option value="Tidak">Tidak</option>
				</select>
			</div>
		</div>
		<div class="form-group">
			<label for="kedaulatan_sdmm_4" class="col-sm-3 control-label">Peminta-minta sumbangan terorganisasi dari rumah ke rumah</label>
			<div class="col-sm-5">
				<select class="form-control" id="kedaulatan_sdmm_4" name="data[detail][kedaulatan][sdmm][4]">
					<option value="Ada">Ada</option>
					<option value="Tidak">Tidak</option>
				</select>
			</div>
		</div>
		<div class="form-group">
			<label for="kedaulatan_sdmm_5" class="col-sm-3 control-label">Semakin berkembang praktek jalan pintas dalam mencari uang secara gampang walau tidak halal</label>
			<div class="col-sm-5">
				<select class="form-control" id="kedaulatan_sdmm_5" name="data[detail][kedaulatan][sdmm][5]">
					<option value="Ya">Ya</option>
					<option value="Tidak">Tidak</option>
				</select>
			</div>
		</div>
		<div class="form-group">
			<label for="kedaulatan_sdmm_6" class="col-sm-3 control-label">Jenis pungutan dari RT atau sebutan lain kepada warga</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="kedaulatan_sdmm_6" name="data[detail][kedaulatan][sdmm][6]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="kedaulatan_sdmm_7" class="col-sm-3 control-label">Jenis pungutan dari RW atau sebutan lain kepada warga</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="kedaulatan_sdmm_7" name="data[detail][kedaulatan][sdmm][7]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="kedaulatan_sdmm_8" class="col-sm-3 control-label">Jenis pungutan dari desa/kelurahan kepada warga</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="kedaulatan_sdmm_8" name="data[detail][kedaulatan][sdmm][8]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="kedaulatan_sdmm_9" class="col-sm-3 control-label">Kasus aparat RT/RW atau sebutan lainnya di desa dan kelurahan yang dipecat kena kasus pungutan liar, pemerasan dan sejenisnya.</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="kedaulatan_sdmm_9" name="data[detail][kedaulatan][sdmm][9]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="kedaulatan_sdmm_10" class="col-sm-3 control-label">Dipindah karena kena kasus pungutan liar, pemerasan dan sejenisnya</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="kedaulatan_sdmm_10" name="data[detail][kedaulatan][sdmm][10]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="kedaulatan_sdmm_11" class="col-sm-3 control-label">Diberhentikan dengan hormat karena kena kasus pungutan liar, pemerasan dan sejenisnya</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="kedaulatan_sdmm_11" name="data[detail][kedaulatan][sdmm][11]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="kedaulatan_sdmm_12" class="col-sm-3 control-label">Dimutasi karena kasus pungutan liar, pemerasan dan sejenisnya</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="kedaulatan_sdmm_12" name="data[detail][kedaulatan][sdmm][12]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="kedaulatan_sdmm_13" class="col-sm-3 control-label">Banyak masyarakat yang memberikan biaya lebih dari yang ditentukan sebagai uang rokok atau ucapan terima kasih dalam proses pelayanan administrasi di kantor desa/kelurahan</label>
			<div class="col-sm-5">
				<select class="form-control" id="kedaulatan_sdmm_13" name="data[detail][kedaulatan][sdmm][13]">
					<option value="Ya">Ya</option>
					<option value="Tidak">Tidak</option>
				</select>
			</div>
		</div>
		<div class="form-group">
			<label for="kedaulatan_sdmm_14" class="col-sm-3 control-label">Banyak warga yang ingin mendapatkan pelayanan gratis dari aparat desa/kelurahan</label>
			<div class="col-sm-5">
				<select class="form-control" id="kedaulatan_sdmm_14" name="data[detail][kedaulatan][sdmm][14]">
					<option value="Ya">Ya</option>
					<option value="Tidak">Tidak</option>
				</select>
			</div>
		</div>
		<div class="form-group">
			<label for="kedaulatan_sdmm_15" class="col-sm-3 control-label">Banyak penduduk yang mengeluhkan memburuknya kualitas pelayanan kepada masyarakat</label>
			<div class="col-sm-5">
				<select class="form-control" id="kedaulatan_sdmm_15" name="data[detail][kedaulatan][sdmm][15]">
					<option value="Ya">Ya</option>
					<option value="Tidak">Tidak</option>
				</select>
			</div>
		</div>
		<div class="form-group">
			<label for="kedaulatan_sdmm_16" class="col-sm-3 control-label">Banyak kegiatan yang bersifat hiburan dan rekreasi yang diinisiatifi masyarakat sendiri</label>
			<div class="col-sm-5">
				<select class="form-control" id="kedaulatan_sdmm_16" name="data[detail][kedaulatan][sdmm][16]">
					<option value="Ya">Ya</option>
					<option value="Tidak">Tidak</option>
				</select>
			</div>
		</div>
		<div class="form-group">
			<label for="kedaulatan_sdmm_17" class="col-sm-3 control-label">Masyarakat agak kurang toleran dengan keberadaan kelompok masyarakat dari unsur etnis, agama dan kelompok kepentingan lain</label>
			<div class="col-sm-5">
				<select class="form-control" id="kedaulatan_sdmm_17" name="data[detail][kedaulatan][sdmm][17]">
					<option value="Ya">Ya</option>
					<option value="Tidak">Tidak</option>
				</select>
			</div>
		</div>

		<div class="form-group">
			<div class="col-md-12">
				<h4>6. Etos Kerja Penduduk</h4>
			</div>
		</div>
		<div class="form-group">
			<label for="kedaulatan_etos_1" class="col-sm-3 control-label">Luas Wilayah Desa/Kelurahan sangat luas</label>
			<div class="col-sm-5">
				<select class="form-control" id="kedaulatan_etos_1" name="data[detail][kedaulatan][etos][1]">
					<option value="Ya">Ya</option>
					<option value="Tidak">Tidak</option>
				</select>
			</div>
		</div>
		<div class="form-group">
			<label for="kedaulatan_etos_2" class="col-sm-3 control-label">Banyak lahan terlantar yang tidak dikelola pemiliknya/petani berdasi</label>
			<div class="col-sm-5">
				<select class="form-control" id="kedaulatan_etos_2" name="data[detail][kedaulatan][etos][2]">
					<option value="Ya">Ya</option>
					<option value="Tidak">Tidak</option>
				</select>
			</div>
		</div>
		<div class="form-group">
			<label for="kedaulatan_etos_3" class="col-sm-3 control-label">Banyak lahan pekarangan di sekitar perumahan yang tidak dimanfaatkan</label>
			<div class="col-sm-5">
				<select class="form-control" id="kedaulatan_etos_3" name="data[detail][kedaulatan][etos][3]">
					<option value="Ya">Ya</option>
					<option value="Tidak">Tidak</option>
				</select>
			</div>
		</div>
		<div class="form-group">
			<label for="kedaulatan_etos_4" class="col-sm-3 control-label">Banyak lahan tidur milik masyarakat yang tidak dimanfaatkan</label>
			<div class="col-sm-5">
				<select class="form-control" id="kedaulatan_etos_4" name="data[detail][kedaulatan][etos][4]">
					<option value="Tinggi">Tinggi</option>
					<option value="Rendah">Rendah</option>
				</select>
			</div>
		</div>
		<div class="form-group">
			<label for="kedaulatan_etos_5" class="col-sm-3 control-label">Jumlah petani pada musim gagal tanam/panen yang pasrah dan tidak mencari pekerjaan lain</label>
			<div class="col-sm-5">
				<select class="form-control" id="kedaulatan_etos_5" name="data[detail][kedaulatan][etos][5]">
					<option value="Tinggi">Tinggi</option>
					<option value="Rendah">Rendah</option>
				</select>
			</div>
		</div>
		<div class="form-group">
			<label for="kedaulatan_etos_6" class="col-sm-3 control-label">Jumlah nelayan pada musim tidak melaut yang memanfaatkan keterampilan/keahlian lainnya untuk mencari pekerjaan lain</label>
			<div class="col-sm-5">
				<select class="form-control" id="kedaulatan_etos_6" name="data[detail][kedaulatan][etos][6]">
					<option value="Ya">Ya</option>
					<option value="Tidak">Tidak</option>
				</select>
			</div>
		</div>
		<div class="form-group">
			<label for="kedaulatan_etos_7" class="col-sm-3 control-label">Banyak penduduk yang mencari pekerjaan di luar desa/kelurahan tetapi masih dalam wilayah kabupaten/kota</label>
			<div class="col-sm-5">
				<select class="form-control" id="kedaulatan_etos_7" name="data[detail][kedaulatan][etos][7]">
					<option value="Ya">Ya</option>
					<option value="Tidak">Tidak</option>
				</select>
			</div>
		</div>
		<div class="form-group">
			<label for="kedaulatan_etos_8" class="col-sm-3 control-label">Banyak penduduk yang mencari pekerjaan di kota besar lainnya</label>
			<div class="col-sm-5">
				<select class="form-control" id="kedaulatan_etos_8" name="data[detail][kedaulatan][etos][8]">
					<option value="Ya">Ya</option>
					<option value="Tidak">Tidak</option>
				</select>
			</div>
		</div>
		<div class="form-group">
			<label for="kedaulatan_etos_9" class="col-sm-3 control-label">Kebiasaan masyarakat merayakan pesta dengan menghadirkan undangan yang banyak</label>
			<div class="col-sm-5">
				<select class="form-control" id="kedaulatan_etos_9" name="data[detail][kedaulatan][etos][9]">
					<option value="Tinggi">Tinggi</option>
					<option value="Sedang">Sedang</option>
				</select>
			</div>
		</div>
		<div class="form-group">
			<label for="kedaulatan_etos_10" class="col-sm-3 control-label">Masyarakat sering mendatangi kantor desa dan lurah menuntut penyediaan kebutuhan dasar sembilan bahan pokok pada saat kelaparan dan kekeringan</label>
			<div class="col-sm-5">
				<select class="form-control" id="kedaulatan_etos_10" name="data[detail][kedaulatan][etos][10]">
					<option value="Tinggi">Tinggi</option>
					<option value="Sedang">Sedang</option>
					<option value="Rendah">Rendah</option>
				</select>
			</div>
		</div>
		<div class="form-group">
			<label for="kedaulatan_etos_11" class="col-sm-3 control-label">Kebiasaan masyarakat untuk mencari/mengumpulkan bahan makanan pengganti beras/jagung pada saat rawan pangan/kelaparan/gagal panen</label>
			<div class="col-sm-5">
				<select class="form-control" id="kedaulatan_etos_11" name="data[detail][kedaulatan][etos][11]">
					<option value="Tinggi">Tinggi</option>
					<option value="Sedang">Sedang</option>
					<option value="Rendah">Rendah</option>
				</select>
			</div>
		</div>
		<div class="form-group">
			<label for="kedaulatan_etos_12" class="col-sm-3 control-label">Kebiasaan pemotongan hewan dalam jumlah besar untuk pesta adat dan perayaan upacara tertentu</label>
			<div class="col-sm-5">
				<select class="form-control" id="kedaulatan_etos_12" name="data[detail][kedaulatan][etos][12]">
					<option value="Tinggi">Tinggi</option>
					<option value="Sedang">Sedang</option>
					<option value="Rendah">Rendah</option>
				</select>
			</div>
		</div>
		<div class="form-group">
			<label for="kedaulatan_etos_13" class="col-sm-3 control-label">Kebiasaan masyarakat berdemonstrasi/protes terhadap kebijakan pemerintah</label>
			<div class="col-sm-5">
				<select class="form-control" id="kedaulatan_etos_13" name="data[detail][kedaulatan][etos][13]">
					<option value="Tinggi">Tinggi</option>
					<option value="Sedang">Sedang</option>
					<option value="Rendah">Rendah</option>
				</select>
			</div>
		</div>
		<div class="form-group">
			<label for="kedaulatan_etos_14" class="col-sm-3 control-label">Kebiasaan masyarakat terprovokasi karena isu-isu yang menyesatkan</label>
			<div class="col-sm-5">
				<select class="form-control" id="kedaulatan_etos_14" name="data[detail][kedaulatan][etos][14]">
					<option value="Sering">Sering</option>
					<option value="Jarang">Jarang</option>
				</select>
			</div>
		</div>
		<div class="form-group">
			<label for="kedaulatan_etos_15" class="col-sm-3 control-label">Kebiasaan masyarakat bermusyawarah untuk menyelesaikan berbagai persoalan sosial kemasyarakatan</label>
			<div class="col-sm-5">
				<select class="form-control" id="kedaulatan_etos_15" name="data[detail][kedaulatan][etos][15]">
					<option value="Tinggi">Tinggi</option>
					<option value="Sedang">Sedang</option>
					<option value="Rendah">Rendah</option>
				</select>
			</div>
		</div>
		<div class="form-group">
			<label for="kedaulatan_etos_16" class="col-sm-3 control-label">Lebih banyak masyarakat yang diam/masabodoh/apatis ketika ada persoalan yang terjadi di lingkungan sekitarnya</label>
			<div class="col-sm-5">
				<select class="form-control" id="kedaulatan_etos_16" name="data[detail][kedaulatan][etos][16]">
					<option value="Ya">Ya</option>
					<option value="Tidak">Tidak</option>
				</select>
			</div>
		</div>
		<div class="form-group">
			<label for="kedaulatan_etos_17" class="col-sm-3 control-label">Kebiasaan aparat pemerintah desa/kelurahan terlebih di tingkat RT, RW, Dusun dan Lingkungan yang kurang menanggapi kesulitan yang dihadapi masyarakat</label>
			<div class="col-sm-5">
				<select class="form-control" id="kedaulatan_etos_17" name="data[detail][kedaulatan][etos][17]">
					<option value="Tinggi">Tinggi</option>
					<option value="Sedang">Sedang</option>
					<option value="Rendah">Rendah</option>
				</select>
			</div>
		</div>

		<div class="form-group">
			<div class="col-md-12">
				<h3>12. Lembaga Kemasyarakatan</h3>
				<h4>A. Lembaga Kemasyarakatan Desa/kelurahan</h4>
			</div>
		</div>
		<div class="form-group">
			<label for="lembaga_lkdk_1" class="col-sm-3 control-label">Keberadaan organisasi Lembaga Kemasyarakatan Desa dan Kelurahan/LKD/LK</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="lembaga_lkdk_1" name="data[detail][lembaga][lkdk][1]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="lembaga_lkdk_2" class="col-sm-3 control-label">Kepengurusan</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="lembaga_lkdk_2" name="data[detail][lembaga][lkdk][2]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="lembaga_lkdk_3" class="col-sm-3 control-label">Jumlah kegiatan</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="lembaga_lkdk_3" name="data[detail][lembaga][lkdk][3]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="lembaga_lkdk_4" class="col-sm-3 control-label">Buku administrasi lembaga kemasyarakatan</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="lembaga_lkdk_4" name="data[detail][lembaga][lkdk][4]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="lembaga_lkdk_5" class="col-sm-3 control-label">Jumlah organisasi anggota lembaga kemasyarakatandesa/kelurahan</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="lembaga_lkdk_5" name="data[detail][lembaga][lkdk][5]" placeholder="Jumlah">
			</div>
		</div>

		<div class="form-group">
			<div class="col-md-12">
				<h4>B. Organisasi Anggota Lembaga</h4>
				<h4>1. LKMD/LPM atau sebutan lain</h4>
			</div>
		</div>
		<div class="form-group">
			<label for="lembaga_lkmdlpm_1" class="col-sm-3 control-label">Keberadaan</label>
			<div class="col-sm-5">
				<select class="form-control" id="lembaga_lkmdlpm_1" name="data[detail][lembaga][lkmdlpm][1]">
					<option value="Ada">Ada</option>
					<option value="Tidak">Tidak</option>
				</select>
			</div>
		</div>
		<div class="form-group">
			<label for="lembaga_lkmdlpm_2" class="col-sm-3 control-label">Kepengurusan</label>
			<div class="col-sm-5">
				<select class="form-control" id="lembaga_lkmdlpm_2" name="data[detail][lembaga][lkmdlpm][2]">
					<option value="Aktif">Aktif</option>
					<option value="Tidak">Tidak</option>
				</select>
			</div>
		</div>
		<div class="form-group">
			<label for="lembaga_lkmdlpm_3" class="col-sm-3 control-label">Buku administrasi</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="lembaga_lkmdlpm_3" name="data[detail][lembaga][lkmdlpm][3]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="lembaga_lkmdlpm_4" class="col-sm-3 control-label">Jumlah kegiatan</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="lembaga_lkmdlpm_4" name="data[detail][lembaga][lkmdlpm][4]" placeholder="Jumlah">
			</div>
		</div>

		<div class="form-group">
			<div class="col-md-12">
				<h4>2. PKK</h4>
			</div>
		</div>
		<div class="form-group">
			<label for="lembaga_pkk_1" class="col-sm-3 control-label">Keberadaan</label>
			<div class="col-sm-5">
				<select class="form-control" id="lembaga_pkk_1" name="data[detail][lembaga][pkk][1]">
					<option value="Ada">Ada</option>
					<option value="Tidak">Tidak</option>
				</select>
			</div>
		</div>
		<div class="form-group">
			<label for="lembaga_pkk_2" class="col-sm-3 control-label">Kepengurusan</label>
			<div class="col-sm-5">
				<select class="form-control" id="lembaga_pkk_2" name="data[detail][lembaga][pkk][2]">
					<option value="Aktif">Aktif</option>
					<option value="Tidak">Tidak</option>
				</select>
			</div>
		</div>
		<div class="form-group">
			<label for="lembaga_pkk_3" class="col-sm-3 control-label">Buku administrasi</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="lembaga_pkk_3" name="data[detail][lembaga][pkk][3]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="lembaga_pkk_4" class="col-sm-3 control-label">Jumlah kegiatan</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="lembaga_pkk_4" name="data[detail][lembaga][pkk][4]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="lembaga_pkk_5" class="col-sm-3 control-label">Kelengkapan organisasi Dasawisma</label>
			<div class="col-sm-5">
				<select class="form-control" id="lembaga_pkk_5" name="data[detail][lembaga][pkk][5]">
					<option value="Lengkap">Lengkap</option>
					<option value="Tidak">Tidak</option>
				</select>
			</div>
		</div>
		<div class="form-group">
			<label for="lembaga_pkk_6" class="col-sm-3 control-label">Kelengkapan organisasi Pokja</label>
			<div class="col-sm-5">
				<select class="form-control" id="lembaga_pkk_6" name="data[detail][lembaga][pkk][6]">
					<option value="Lengkap">Lengkap</option>
					<option value="Tidak">Tidak</option>
				</select>
			</div>
		</div>

		<div class="form-group">
			<div class="col-md-12">
				<h4>3. Karang Taruna</h4>
			</div>
		</div>
		<div class="form-group">
			<label for="lembaga_karangtaruna_1" class="col-sm-3 control-label">Keberadaan</label>
			<div class="col-sm-5">
				<select class="form-control" id="lembaga_karangtaruna_1" name="data[detail][lembaga][karangtaruna][1]">
					<option value="Ada">Ada</option>
					<option value="Tidak">Tidak</option>
				</select>
			</div>
		</div>
		<div class="form-group">
			<label for="lembaga_karangtaruna_2" class="col-sm-3 control-label">Kepengurusan</label>
			<div class="col-sm-5">
				<select class="form-control" id="lembaga_karangtaruna_2" name="data[detail][lembaga][karangtaruna][2]">
					<option value="Aktif">Aktif</option>
					<option value="Tidak">Tidak</option>
				</select>
			</div>
		</div>
		<div class="form-group">
			<label for="lembaga_karangtaruna_3" class="col-sm-3 control-label">Buku administrasi</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="lembaga_karangtaruna_3" name="data[detail][lembaga][karangtaruna][3]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="lembaga_karangtaruna_4" class="col-sm-3 control-label">Jumlah kegiatan</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="lembaga_karangtaruna_4" name="data[detail][lembaga][karangtaruna][4]" placeholder="Jumlah">
			</div>
		</div>

		<div class="form-group">
			<div class="col-md-12">
				<h4>4. RT</h4>
			</div>
		</div>
		<div class="form-group">
			<label for="lembaga_rt_1" class="col-sm-3 control-label">Keberadaan</label>
			<div class="col-sm-5">
				<select class="form-control" id="lembaga_rt_1" name="data[detail][lembaga][rt][1]">
					<option value="Ada">Ada</option>
					<option value="Tidak">Tidak</option>
				</select>
			</div>
		</div>
		<div class="form-group">
			<label for="lembaga_rt_2" class="col-sm-3 control-label">Kepengurusan</label>
			<div class="col-sm-5">
				<select class="form-control" id="lembaga_rt_2" name="data[detail][lembaga][rt][2]">
					<option value="Aktif">Aktif</option>
					<option value="Tidak">Tidak</option>
				</select>
			</div>
		</div>
		<div class="form-group">
			<label for="lembaga_rt_3" class="col-sm-3 control-label">Buku administrasi</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="lembaga_rt_3" name="data[detail][lembaga][rt][3]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="lembaga_rt_4" class="col-sm-3 control-label">Jumlah kegiatan</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="lembaga_rt_4" name="data[detail][lembaga][rt][4]" placeholder="Jumlah">
			</div>
		</div>

		<div class="form-group">
			<div class="col-md-12">
				<h4>5. RW</h4>
			</div>
		</div>
		<div class="form-group">
			<label for="lembaga_rw_1" class="col-sm-3 control-label">Keberadaan</label>
			<div class="col-sm-5">
				<select class="form-control" id="lembaga_rw_1" name="data[detail][lembaga][rw][1]">
					<option value="Ada">Ada</option>
					<option value="Tidak">Tidak</option>
				</select>
			</div>
		</div>
		<div class="form-group">
			<label for="lembaga_rw_2" class="col-sm-3 control-label">Kepengurusan</label>
			<div class="col-sm-5">
				<select class="form-control" id="lembaga_rw_2" name="data[detail][lembaga][rw][2]">
					<option value="Aktif">Aktif</option>
					<option value="Tidak">Tidak</option>
				</select>
			</div>
		</div>
		<div class="form-group">
			<label for="lembaga_rw_3" class="col-sm-3 control-label">Buku administrasi</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="lembaga_rw_3" name="data[detail][lembaga][rw][3]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="lembaga_rw_4" class="col-sm-3 control-label">Jumlah kegiatan</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="lembaga_rw_4" name="data[detail][lembaga][rw][4]" placeholder="Jumlah">
			</div>
		</div>

		<div class="form-group">
			<div class="col-md-12">
				<h4>6. Lembaga adat</h4>
			</div>
		</div>
		<div class="form-group">
			<label for="lembaga_adat_1" class="col-sm-3 control-label">Keberadaan</label>
			<div class="col-sm-5">
				<select class="form-control" id="lembaga_adat_1" name="data[detail][lembaga][adat][1]">
					<option value="Ada">Ada</option>
					<option value="Tidak">Tidak</option>
				</select>
			</div>
		</div>
		<div class="form-group">
			<label for="lembaga_adat_2" class="col-sm-3 control-label">Kepengurusan</label>
			<div class="col-sm-5">
				<select class="form-control" id="lembaga_adat_2" name="data[detail][lembaga][adat][2]">
					<option value="Aktif">Aktif</option>
					<option value="Tidak">Tidak</option>
				</select>
			</div>
		</div>
		<div class="form-group">
			<label for="lembaga_adat_3" class="col-sm-3 control-label">Buku administrasi</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="lembaga_adat_3" name="data[detail][lembaga][adat][3]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="lembaga_adat_4" class="col-sm-3 control-label">Jumlah kegiatan</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="lembaga_adat_4" name="data[detail][lembaga][adat][4]" placeholder="Jumlah">
			</div>
		</div>

		<div class="form-group">
			<div class="col-md-12">
				<h4>7. BUMDES</h4>
			</div>
		</div>
		<div class="form-group">
			<label for="lembaga_bumdes_1" class="col-sm-3 control-label">Keberadaan</label>
			<div class="col-sm-5">
				<select class="form-control" id="lembaga_bumdes_1" name="data[detail][lembaga][bumdes][1]">
					<option value="Ada">Ada</option>
					<option value="Tidak">Tidak</option>
				</select>
			</div>
		</div>
		<div class="form-group">
			<label for="lembaga_bumdes_2" class="col-sm-3 control-label">Kepengurusan</label>
			<div class="col-sm-5">
				<select class="form-control" id="lembaga_bumdes_2" name="data[detail][lembaga][bumdes][2]">
					<option value="Aktif">Aktif</option>
					<option value="Tidak">Tidak</option>
				</select>
			</div>
		</div>
		<div class="form-group">
			<label for="lembaga_bumdes_3" class="col-sm-3 control-label">Buku administrasi</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="lembaga_bumdes_3" name="data[detail][lembaga][bumdes][3]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="lembaga_bumdes_4" class="col-sm-3 control-label">Jumlah kegiatan</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="lembaga_bumdes_4" name="data[detail][lembaga][bumdes][4]" placeholder="Jumlah">
			</div>
		</div>

		<div class="form-group">
			<div class="col-md-12">
				<h4>8. Forum Komunikasi Kader Pemberdayaan Masyarakat</h4>
			</div>
		</div>
		<div class="form-group">
			<label for="lembaga_fkkp_1" class="col-sm-3 control-label">Keberadaan</label>
			<div class="col-sm-5">
				<select class="form-control" id="lembaga_fkkp_1" name="data[detail][lembaga][fkkp][1]">
					<option value="Ada">Ada</option>
					<option value="Tidak">Tidak</option>
				</select>
			</div>
		</div>
		<div class="form-group">
			<label for="lembaga_fkkp_2" class="col-sm-3 control-label">Kepengurusan</label>
			<div class="col-sm-5">
				<select class="form-control" id="lembaga_fkkp_2" name="data[detail][lembaga][fkkp][2]">
					<option value="Aktif">Aktif</option>
					<option value="Tidak">Tidak</option>
				</select>
			</div>
		</div>
		<div class="form-group">
			<label for="lembaga_fkkp_3" class="col-sm-3 control-label">Buku administrasi</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="lembaga_fkkp_3" name="data[detail][lembaga][fkkp][3]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="lembaga_fkkp_4" class="col-sm-3 control-label">Jumlah kegiatan</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="lembaga_fkkp_4" name="data[detail][lembaga][fkkp][4]" placeholder="Jumlah">
			</div>
		</div>

		<div class="form-group">
			<div class="col-md-12">
				<h4>9. Posyandu</h4>
			</div>
		</div>
		<div class="form-group">
			<label for="lembaga_posyandu_1" class="col-sm-3 control-label">Keberadaan</label>
			<div class="col-sm-5">
				<select class="form-control" id="lembaga_posyandu_1" name="data[detail][lembaga][posyandu][1]">
					<option value="Ada">Ada</option>
					<option value="Tidak">Tidak</option>
				</select>
			</div>
		</div>
		<div class="form-group">
			<label for="lembaga_posyandu_2" class="col-sm-3 control-label">Kepengurusan</label>
			<div class="col-sm-5">
				<select class="form-control" id="lembaga_posyandu_2" name="data[detail][lembaga][posyandu][2]">
					<option value="Aktif">Aktif</option>
					<option value="Tidak">Tidak</option>
				</select>
			</div>
		</div>
		<div class="form-group">
			<label for="lembaga_posyandu_3" class="col-sm-3 control-label">Buku administrasi</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="lembaga_posyandu_3" name="data[detail][lembaga][posyandu][3]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="lembaga_posyandu_4" class="col-sm-3 control-label">Jumlah kegiatan</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="lembaga_posyandu_4" name="data[detail][lembaga][posyandu][4]" placeholder="Jumlah">
			</div>
		</div>

		<div class="form-group">
			<div class="col-md-12">
				<h4>10. Kelompok Tani/Nelayan</h4>
			</div>
		</div>
		<div class="form-group">
			<label for="lembaga_ktn_1" class="col-sm-3 control-label">Keberadaan</label>
			<div class="col-sm-5">
				<select class="form-control" id="lembaga_ktn_1" name="data[detail][lembaga][ktn][1]">
					<option value="Ada">Ada</option>
					<option value="Tidak">Tidak</option>
				</select>
			</div>
		</div>
		<div class="form-group">
			<label for="lembaga_ktn_2" class="col-sm-3 control-label">Kepengurusan</label>
			<div class="col-sm-5">
				<select class="form-control" id="lembaga_ktn_2" name="data[detail][lembaga][ktn][2]">
					<option value="Aktif">Aktif</option>
					<option value="Tidak">Tidak</option>
				</select>
			</div>
		</div>
		<div class="form-group">
			<label for="lembaga_ktn_3" class="col-sm-3 control-label">Buku administrasi</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="lembaga_ktn_3" name="data[detail][lembaga][ktn][3]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="lembaga_ktn_4" class="col-sm-3 control-label">Jumlah kegiatan</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="lembaga_ktn_4" name="data[detail][lembaga][ktn][4]" placeholder="Jumlah">
			</div>
		</div>

		<div class="form-group">
			<div class="col-md-12">
				<h4>11. Organisasi Perempuan</h4>
			</div>
		</div>
		<div class="form-group">
			<label for="lembaga_orpuan_1" class="col-sm-3 control-label">Keberadaan</label>
			<div class="col-sm-5">
				<select class="form-control" id="lembaga_orpuan_1" name="data[detail][lembaga][orpuan][1]">
					<option value="Ada">Ada</option>
					<option value="Tidak">Tidak</option>
				</select>
			</div>
		</div>
		<div class="form-group">
			<label for="lembaga_orpuan_2" class="col-sm-3 control-label">Kepengurusan</label>
			<div class="col-sm-5">
				<select class="form-control" id="lembaga_orpuan_2" name="data[detail][lembaga][orpuan][2]">
					<option value="Aktif">Aktif</option>
					<option value="Tidak">Tidak</option>
				</select>
			</div>
		</div>
		<div class="form-group">
			<label for="lembaga_orpuan_3" class="col-sm-3 control-label">Buku administrasi</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="lembaga_orpuan_3" name="data[detail][lembaga][orpuan][3]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="lembaga_orpuan_4" class="col-sm-3 control-label">Jumlah kegiatan</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="lembaga_orpuan_4" name="data[detail][lembaga][orpuan][4]" placeholder="Jumlah">
			</div>
		</div>

		<div class="form-group">
			<div class="col-md-12">
				<h4>12. Organisasi Pemuda</h4>
			</div>
		</div>
		<div class="form-group">
			<label for="lembaga_orpem_1" class="col-sm-3 control-label">Keberadaan</label>
			<div class="col-sm-5">
				<select class="form-control" id="lembaga_orpem_1" name="data[detail][lembaga][orpem][1]">
					<option value="Ada">Ada</option>
					<option value="Tidak">Tidak</option>
				</select>
			</div>
		</div>
		<div class="form-group">
			<label for="lembaga_orpem_2" class="col-sm-3 control-label">Kepengurusan</label>
			<div class="col-sm-5">
				<select class="form-control" id="lembaga_orpem_2" name="data[detail][lembaga][orpem][2]">
					<option value="Aktif">Aktif</option>
					<option value="Tidak">Tidak</option>
				</select>
			</div>
		</div>
		<div class="form-group">
			<label for="lembaga_orpem_3" class="col-sm-3 control-label">Buku administrasi</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="lembaga_orpem_3" name="data[detail][lembaga][orpem][3]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="lembaga_orpem_4" class="col-sm-3 control-label">Jumlah kegiatan</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="lembaga_orpem_4" name="data[detail][lembaga][orpem][4]" placeholder="Jumlah">
			</div>
		</div>

		<div class="form-group">
			<div class="col-md-12">
				<h4>13. Organisasi profesi</h4>
			</div>
		</div>
		<div class="form-group">
			<label for="lembaga_orpro_1" class="col-sm-3 control-label">Keberadaan</label>
			<div class="col-sm-5">
				<select class="form-control" id="lembaga_orpro_1" name="data[detail][lembaga][orpro][1]">
					<option value="Ada">Ada</option>
					<option value="Tidak">Tidak</option>
				</select>
			</div>
		</div>
		<div class="form-group">
			<label for="lembaga_orpro_2" class="col-sm-3 control-label">Kepengurusan</label>
			<div class="col-sm-5">
				<select class="form-control" id="lembaga_orpro_2" name="data[detail][lembaga][orpro][2]">
					<option value="Aktif">Aktif</option>
					<option value="Tidak">Tidak</option>
				</select>
			</div>
		</div>
		<div class="form-group">
			<label for="lembaga_orpro_3" class="col-sm-3 control-label">Buku administrasi</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="lembaga_orpro_3" name="data[detail][lembaga][orpro][3]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="lembaga_orpro_4" class="col-sm-3 control-label">Jumlah kegiatan</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="lembaga_orpro_4" name="data[detail][lembaga][orpro][4]" placeholder="Jumlah">
			</div>
		</div>

		<div class="form-group">
			<div class="col-md-12">
				<h4>14. Organisasi Bapak</h4>
			</div>
		</div>
		<div class="form-group">
			<label for="lembaga_orpak_1" class="col-sm-3 control-label">Keberadaan</label>
			<div class="col-sm-5">
				<select class="form-control" id="lembaga_orpak_1" name="data[detail][lembaga][orpak][1]">
					<option value="Ada">Ada</option>
					<option value="Tidak">Tidak</option>
				</select>
			</div>
		</div>
		<div class="form-group">
			<label for="lembaga_orpak_2" class="col-sm-3 control-label">Kepengurusan</label>
			<div class="col-sm-5">
				<select class="form-control" id="lembaga_orpak_2" name="data[detail][lembaga][orpak][2]">
					<option value="Aktif">Aktif</option>
					<option value="Tidak">Tidak</option>
				</select>
			</div>
		</div>
		<div class="form-group">
			<label for="lembaga_orpak_3" class="col-sm-3 control-label">Buku administrasi</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="lembaga_orpak_3" name="data[detail][lembaga][orpak][3]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="lembaga_orpak_4" class="col-sm-3 control-label">Jumlah kegiatan</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="lembaga_orpak_4" name="data[detail][lembaga][orpak][4]" placeholder="Jumlah">
			</div>
		</div>

		<div class="form-group">
			<div class="col-md-12">
				<h4>15. Kelompok Gotong Royong</h4>
			</div>
		</div>
		<div class="form-group">
			<label for="lembaga_kgr_1" class="col-sm-3 control-label">Keberadaan</label>
			<div class="col-sm-5">
				<select class="form-control" id="lembaga_kgr_1" name="data[detail][lembaga][kgr][1]">
					<option value="Ada">Ada</option>
					<option value="Tidak">Tidak</option>
				</select>
			</div>
		</div>
		<div class="form-group">
			<label for="lembaga_kgr_2" class="col-sm-3 control-label">Kepengurusan</label>
			<div class="col-sm-5">
				<select class="form-control" id="lembaga_kgr_2" name="data[detail][lembaga][kgr][2]">
					<option value="Aktif">Aktif</option>
					<option value="Tidak">Tidak</option>
				</select>
			</div>
		</div>
		<div class="form-group">
			<label for="lembaga_kgr_3" class="col-sm-3 control-label">Buku administrasi</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="lembaga_kgr_3" name="data[detail][lembaga][kgr][3]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="lembaga_kgr_4" class="col-sm-3 control-label">Jumlah kegiatan</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="lembaga_kgr_4" name="data[detail][lembaga][kgr][4]" placeholder="Jumlah">
			</div>
		</div>

		<div class="form-group">
			<div class="col-md-12">
				<h4>16. Posyantekdes</h4>
			</div>
		</div>
		<div class="form-group">
			<label for="lembaga_posyantekdes_1" class="col-sm-3 control-label">Keberadaan</label>
			<div class="col-sm-5">
				<select class="form-control" id="lembaga_posyantekdes_1" name="data[detail][lembaga][posyantekdes][1]">
					<option value="Ada">Ada</option>
					<option value="Tidak">Tidak</option>
				</select>
			</div>
		</div>
		<div class="form-group">
			<label for="lembaga_posyantekdes_2" class="col-sm-3 control-label">Kepengurusan</label>
			<div class="col-sm-5">
				<select class="form-control" id="lembaga_posyantekdes_2" name="data[detail][lembaga][posyantekdes][2]">
					<option value="Aktif">Aktif</option>
					<option value="Tidak">Tidak</option>
				</select>
			</div>
		</div>

		<div class="form-group">
			<div class="col-md-12">
				<h4>17. Organisasi Keagamaan</h4>
			</div>
		</div>
		<div class="form-group">
			<label for="lembaga_keagamaan_1" class="col-sm-3 control-label">Keberadaan</label>
			<div class="col-sm-5">
				<select class="form-control" id="lembaga_keagamaan_1" name="data[detail][lembaga][keagamaan][1]">
					<option value="Ada">Ada</option>
					<option value="Tidak">Tidak</option>
				</select>
			</div>
		</div>
		<div class="form-group">
			<label for="lembaga_keagamaan_2" class="col-sm-3 control-label">Kepengurusan</label>
			<div class="col-sm-5">
				<select class="form-control" id="lembaga_keagamaan_2" name="data[detail][lembaga][keagamaan][2]">
					<option value="Aktif">Aktif</option>
					<option value="Tidak">Tidak</option>
				</select>
			</div>
		</div>
		<div class="form-group">
			<label for="lembaga_keagamaan_3" class="col-sm-3 control-label">Jumlah kegiatan</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="lembaga_keagamaan_3" name="data[detail][lembaga][keagamaan][3]" placeholder="Jumlah">
			</div>
		</div>

		<div class="form-group">
			<div class="col-md-12">
				<h4>18. Lainnya</h4>
			</div>
		</div>
		<div class="form-group">
			<label for="lembaga_lainnya_keterangan" class="col-sm-3 control-label">Keterangan</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="lembaga_lainnya_keterangan" name="data[detail][lembaga][lainnya][keterangan]" placeholder="Keterangan">
			</div>
		</div>
		<div class="form-group">
			<label for="lembaga_lainnya_1" class="col-sm-3 control-label">Keberadaan</label>
			<div class="col-sm-5">
				<select class="form-control" id="lembaga_lainnya_1" name="data[detail][lembaga][lainnya][1]">
					<option value="Ada">Ada</option>
					<option value="Tidak">Tidak</option>
				</select>
			</div>
		</div>
		<div class="form-group">
			<label for="lembaga_lainnya_2" class="col-sm-3 control-label">Kepengurusan</label>
			<div class="col-sm-5">
				<select class="form-control" id="lembaga_lainnya_2" name="data[detail][lembaga][lainnya][2]">
					<option value="Aktif">Aktif</option>
					<option value="Tidak">Tidak</option>
				</select>
			</div>
		</div>
		<div class="form-group">
			<label for="lembaga_lainnya_3" class="col-sm-3 control-label">Buku administrasi</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="lembaga_lainnya_3" name="data[detail][lembaga][lainnya][3]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="lembaga_lainnya_4" class="col-sm-3 control-label">Jumlah kegiatan</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="lembaga_lainnya_4" name="data[detail][lembaga][lainnya][4]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="lembaga_lainnya_5" class="col-sm-3 control-label">Dasar hukum pembentukan Lembaga Kemasyarakatan Desa</label>
			<div class="col-sm-5">
				<select class="form-control" id="lembaga_lainnya_5" name="data[detail][lembaga][lainnya][5]">
					<option value="Peraturan Desa">Peraturan Desa</option>
					<option value="Tidak">Tidak</option>
				</select>
			</div>
		</div>
		<div class="form-group">
			<label for="lembaga_lainnya_6" class="col-sm-3 control-label">Dasar hukum pembentukan lembaga kemasyarakatan kelurahan</label>
			<div class="col-sm-5">
				<select class="form-control" id="lembaga_lainnya_6" name="data[detail][lembaga][lainnya][6]">
					<option value="Peraturan Daerah">Peraturan Daerah</option>
					<option value="Tidak">Tidak</option>
				</select>
			</div>
		</div>
		<div class="form-group">
			<label for="lembaga_lainnya_7" class="col-sm-3 control-label">Dasar hukum pembentukan organisasi anggota lembaga kemasyarakatan desa dan kelurahan</label>
			<div class="col-sm-5">
				<select class="form-control" id="lembaga_lainnya_7" name="data[detail][lembaga][lainnya][7]">
					<option value="Peraturan Desa">Peraturan Desa</option>
					<option value="Peraturan Daerah">Peraturan Daerah</option>
				</select>
			</div>
		</div>

		<div class="form-group">
			<div class="col-md-12">
				<h3>13. Pemerintahan Desa Dan Kelurahan</h3>
				<h4>A. APB-Desa dan Anggaran Kelurahan</h4>
			</div>
		</div>
		<div class="form-group">
			<label for="pemerintahan_apbd_1" class="col-sm-3 control-label">Jumlah anggaran belanja dan penerimaan Desa/Kelurahan tahun ini</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="pemerintahan_apbd_1" name="data[detail][pemerintahan][apbd][1]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="pemerintahan_apbd_2" class="col-sm-3 control-label">APBD Kabupaten/Kota</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="pemerintahan_apbd_2" name="data[detail][pemerintahan][apbd][2]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="pemerintahan_apbd_3" class="col-sm-3 control-label">Bantuan Pemerintah Kabupaten/Kota</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="pemerintahan_apbd_3" name="data[detail][pemerintahan][apbd][3]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="pemerintahan_apbd_4" class="col-sm-3 control-label">Bantuan Pemerintah Provinsi</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="pemerintahan_apbd_4" name="data[detail][pemerintahan][apbd][4]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="pemerintahan_apbd_5" class="col-sm-3 control-label">Bantuan Pemerintah Pusat</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="pemerintahan_apbd_5" name="data[detail][pemerintahan][apbd][5]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="pemerintahan_apbd_6" class="col-sm-3 control-label">Pendapatan Asli Desa</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="pemerintahan_apbd_6" name="data[detail][pemerintahan][apbd][6]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="pemerintahan_apbd_7" class="col-sm-3 control-label">Swadaya Masyarakat Desa dan Kelurahan</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="pemerintahan_apbd_7" name="data[detail][pemerintahan][apbd][7]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="pemerintahan_apbd_8" class="col-sm-3 control-label">Alokasi Dana Desa</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="pemerintahan_apbd_8" name="data[detail][pemerintahan][apbd][8]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="pemerintahan_apbd_9" class="col-sm-3 control-label">Sumber Pendapatan dari Perusahaan yang ada di desa/kelurahan</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="pemerintahan_apbd_9" name="data[detail][pemerintahan][apbd][9]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="pemerintahan_apbd_10" class="col-sm-3 control-label">Sumber pendapatan lain yang sah dan tidakmengikat</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="pemerintahan_apbd_10" name="data[detail][pemerintahan][apbd][10]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="pemerintahan_apbd_11" class="col-sm-3 control-label">Jumlah Belanja Publik/belanja pembangunan</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="pemerintahan_apbd_11" name="data[detail][pemerintahan][apbd][11]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="pemerintahan_apbd_12" class="col-sm-3 control-label">Jumlah Belanja Aparatur/pegawai</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="pemerintahan_apbd_12" name="data[detail][pemerintahan][apbd][12]" placeholder="Jumlah">
			</div>
		</div>

		<div class="form-group">
			<div class="col-md-12">
				<h4>B. Pertanggungjawaban Kepala Desa/Lurah</h4>
			</div>
		</div>
		<div class="form-group">
			<label for="pemerintahan_tanggungjawab_1" class="col-sm-3 control-label">Penyampaian laporan keterangan pertanggunganjawab Kepala Desa kepada BPD</label>
			<div class="col-sm-5">
				<select class="form-control" id="pemerintahan_tanggungjawab_1" name="data[detail][pemerintahan][tanggungjawab][1]">
					<option value="Ada">Ada</option>
					<option value="Tidak">Tidak</option>
				</select>
			</div>
		</div>
		<div class="form-group">
			<label for="pemerintahan_tanggungjawab_2" class="col-sm-3 control-label">Jumlah informasi yang disampaikan kepala desa dan lurah tentang laporan penyelenggaraan tugas, wewenang, hak dan kewajiban kepala desa dan lurah kepada masyarakat</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="pemerintahan_tanggungjawab_2" name="data[detail][pemerintahan][tanggungjawab][2]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="pemerintahan_tanggungjawab_3" class="col-sm-3 control-label">Status laporan keterangan pertanggungjawaban kepala Desa</label>
			<div class="col-sm-5">
				<select class="form-control" id="pemerintahan_tanggungjawab_3" name="data[detail][pemerintahan][tanggungjawab][3]">
					<option value="Diterima">Diterima</option>
					<option value="Ditolak">Ditolak</option>
				</select>
			</div>
		</div>
		<div class="form-group">
			<label for="pemerintahan_tanggungjawab_4" class="col-sm-3 control-label">Laporan  kinerja  penyelenggaraan  tugas,  wewenang, kewajiban  dan  hak  kepala  desa  dan  lurah  kepada Bupati/Walikota</label>
			<div class="col-sm-5">
				<select class="form-control" id="pemerintahan_tanggungjawab_4" name="data[detail][pemerintahan][tanggungjawab][4]">
					<option value="Diterima">Diterima</option>
					<option value="Direvisi">Direvisi</option>
				</select>
			</div>
		</div>
		<div class="form-group">
			<label for="pemerintahan_tanggungjawab_5" class="col-sm-3 control-label">Jumlah jenis media informasi kinerja kepala desa dan lurah kepada masyarakat</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="pemerintahan_tanggungjawab_5" name="data[detail][pemerintahan][tanggungjawab][5]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="pemerintahan_tanggungjawab_6" class="col-sm-3 control-label">Jumlah kasus pengaduan masyarakat terhadap masalah pembangunan,  pelayanan  dan  pembinaan kemasyarakatan yang  disampaikan kepada kepala desa/lurah</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="pemerintahan_tanggungjawab_6" name="data[detail][pemerintahan][tanggungjawab][6]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="pemerintahan_tanggungjawab_7" class="col-sm-3 control-label">Jumlah kasus pengaduan masyarakat terhadap masalah  pembangunan,  pelayanan  dan  pembinaan kemasyarakatan yang diselesaikan kepala desa/lurah</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="pemerintahan_tanggungjawab_7" name="data[detail][pemerintahan][tanggungjawab][7]" placeholder="Jumlah">
			</div>
		</div>

		<div class="form-group">
			<div class="col-md-12">
				<h4>C. Prasarana Dan Administrasi Pemerintahan Desa/Kelurahan</h4>
				<h4>1. Pemerintah Desa/kelurahan</h4>
			</div>
		</div>
		<div class="form-group">
			<label for="pemerintahan_sarpd_1" class="col-sm-3 control-label">Gedung Kantor</label>
			<div class="col-sm-5">
				<select class="form-control" id="pemerintahan_sarpd_1" name="data[detail][pemerintahan][sarpd][1]">
					<option value="Ada">Ada</option>
					<option value="Tidak">Tidak</option>
				</select>
			</div>
		</div>
		<div class="form-group">
			<label for="pemerintahan_sarpd_2" class="col-sm-3 control-label">Kondisi Gedung Kantor</label>
			<div class="col-sm-5">
				<select class="form-control" id="pemerintahan_sarpd_2" name="data[detail][pemerintahan][sarpd][2]">
					<option value="Baik">Baik</option>
					<option value="Rusak">Rusak</option>
				</select>
			</div>
		</div>
		<div class="form-group">
			<label for="pemerintahan_sarpd_3" class="col-sm-3 control-label">Jumlah ruang kerja</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="pemerintahan_sarpd_3" name="data[detail][pemerintahan][sarpd][3]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="pemerintahan_sarpd_4" class="col-sm-3 control-label">Balai Desa/Kelurahan/sejenisnya</label>
			<div class="col-sm-5">
				<select class="form-control" id="pemerintahan_sarpd_4" name="data[detail][pemerintahan][sarpd][4]">
					<option value="Ada">Ada</option>
					<option value="Tidak">Tidak</option>
				</select>
			</div>
		</div>
		<div class="form-group">
			<label for="pemerintahan_sarpd_5" class="col-sm-3 control-label">Kondisi Balai Desa/Kelurahan/sejenisnya</label>
			<div class="col-sm-5">
				<select class="form-control" id="pemerintahan_sarpd_5" name="data[detail][pemerintahan][sarpd][5]">
					<option value="Baik">Baik</option>
					<option value="Rusak">Rusak</option>
				</select>
			</div>
		</div>
		<div class="form-group">
			<label for="pemerintahan_sarpd_6" class="col-sm-3 control-label">Listrik</label>
			<div class="col-sm-5">
				<select class="form-control" id="pemerintahan_sarpd_6" name="data[detail][pemerintahan][sarpd][6]">
					<option value="Ada">Ada</option>
					<option value="Tidak">Tidak</option>
				</select>
			</div>
		</div>
		<div class="form-group">
			<label for="pemerintahan_sarpd_7" class="col-sm-3 control-label">Air bersih</label>
			<div class="col-sm-5">
				<select class="form-control" id="pemerintahan_sarpd_7" name="data[detail][pemerintahan][sarpd][7]">
					<option value="Ada">Ada</option>
					<option value="Tidak">Tidak</option>
				</select>
			</div>
		</div>
		<div class="form-group">
			<label for="pemerintahan_sarpd_8" class="col-sm-3 control-label">Telepon</label>
			<div class="col-sm-5">
				<select class="form-control" id="pemerintahan_sarpd_8" name="data[detail][pemerintahan][sarpd][8]">
					<option value="Ada">Ada</option>
					<option value="Tidak">Tidak</option>
				</select>
			</div>
		</div>

		<div class="form-group">
			<div class="col-md-12">
				<h4>1.A. Inventaris dan Alat tulis kantor</h4>
			</div>
		</div>
		<div class="form-group">
			<label for="pemerintahan_iatk_1" class="col-sm-3 control-label">Jumlah mesin tik</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="pemerintahan_iatk_1" name="data[detail][pemerintahan][iatk][1]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="pemerintahan_iatk_2" class="col-sm-3 control-label">Jumlah meja</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="pemerintahan_iatk_2" name="data[detail][pemerintahan][iatk][2]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="pemerintahan_iatk_3" class="col-sm-3 control-label">Jumlah kursi</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="pemerintahan_iatk_3" name="data[detail][pemerintahan][iatk][3]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="pemerintahan_iatk_4" class="col-sm-3 control-label">Jumlah almari arsip</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="pemerintahan_iatk_4" name="data[detail][pemerintahan][iatk][4]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="pemerintahan_iatk_5" class="col-sm-3 control-label">Komputer</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="pemerintahan_iatk_5" name="data[detail][pemerintahan][iatk][5]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="pemerintahan_iatk_6" class="col-sm-3 control-label">Mesin fax</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="pemerintahan_iatk_6" name="data[detail][pemerintahan][iatk][6]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="pemerintahan_iatk_7" class="col-sm-3 control-label">Kendaraan Dinas Lurah/Kepala Desa</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="pemerintahan_iatk_7" name="data[detail][pemerintahan][iatk][7]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="pemerintahan_iatk_8" class="col-sm-3 control-label">Buku Data Perangkat Desa/Kelurahan</label>
			<div class="col-sm-5">
				<select class="form-control" id="pemerintahan_iatk_8" name="data[detail][pemerintahan][iatk][8]" placeholder="Jumlah">
					<option value="Ada">Ada</option>
					<option value="Tidak">Tidak</option>
				</select>
			</div>
		</div>
		<div class="form-group">
			<label for="pemerintahan_iatk_9" class="col-sm-3 control-label">Pengisian Buku Data Perangkat Desa/Kelurahan</label>
			<div class="col-sm-5">
				<select class="form-control" id="pemerintahan_iatk_9" name="data[detail][pemerintahan][iatk][9]" placeholder="Jumlah">
					<option value="Terisi">Terisi</option>
					<option value="Tidak">Tidak</option>
				</select>
			</div>
		</div>
		<div class="form-group">
			<label for="pemerintahan_iatk_10" class="col-sm-3 control-label">Perangkat Desa/Kelurahan</label>
			<div class="col-sm-5">
				<select class="form-control" id="pemerintahan_iatk_10" name="data[detail][pemerintahan][iatk][10]" placeholder="Jumlah">
					<option value="Lengkap">Lengkap</option>
					<option value="Tidak">Tidak</option>
				</select>
			</div>
		</div>
		<div class="form-group">
			<label for="pemerintahan_iatk_11" class="col-sm-3 control-label">Buku Peta Wilayah Desa/Kelurahan</label>
			<div class="col-sm-5">
				<select class="form-control" id="pemerintahan_iatk_11" name="data[detail][pemerintahan][iatk][11]" placeholder="Jumlah">
					<option value="Ada">Ada</option>
					<option value="Tidak">Tidak</option>
				</select>
			</div>
		</div>
		<div class="form-group">
			<label for="pemerintahan_iatk_12" class="col-sm-3 control-label">Struktur organisasi</label>
			<div class="col-sm-5">
				<select class="form-control" id="pemerintahan_iatk_12" name="data[detail][pemerintahan][iatk][12]" placeholder="Jumlah">
					<option value="Ada">Ada</option>
					<option value="Tidak">Tidak</option>
				</select>
			</div>
		</div>
		<div class="form-group">
			<label for="pemerintahan_iatk_13" class="col-sm-3 control-label">Kartu uraian tugas</label>
			<div class="col-sm-5">
				<select class="form-control" id="pemerintahan_iatk_13" name="data[detail][pemerintahan][iatk][13]" placeholder="Jumlah">
					<option value="Ada">Ada</option>
					<option value="Tidak">Tidak</option>
				</select>
			</div>
		</div>

		<div class="form-group">
			<div class="col-md-12">
				<h4>1. B. Administrasi Pemerintahan</h4>
			</div>
		</div>
		
		<div class="form-group">
			<label for="pemerintahan_apdk_1" class="col-sm-3 control-label">Buku profil desa/kelurahan</label>
			<div class="col-sm-5">
				<select class="form-control" id="pemerintahan_apdk_1" name="data[detail][pemerintahan][apdk][1][status]">
					<option value="Ada">Ada</option>
					<option value="Tidak">Tidak</option>
				</select><br>
				<select class="form-control" id="pemerintahan_apdk_1" name="data[detail][pemerintahan][apdk][1][keterangan]">
					<option value="Diolah">Diolah</option>
					<option value="Tidak">Tidak</option>
				</select>
			</div>
		</div>
		<div class="form-group">
			<label for="pemerintahan_apdk_2" class="col-sm-3 control-label">Buku data Peraturan Desa/Peraturan Daerah</label>
			<div class="col-sm-5">
				<select class="form-control" id="pemerintahan_apdk_2" name="data[detail][pemerintahan][apdk][2][status]">
					<option value="Ada">Ada</option>
					<option value="Tidak">Tidak</option>
				</select><br>
				<select class="form-control" id="pemerintahan_apdk_2" name="data[detail][pemerintahan][apdk][2][keterangan]">
					<option value="Terisi">Terisi</option>
					<option value="Tidak">Tidak</option>
				</select>
			</div>
		</div>
		<div class="form-group">
			<label for="pemerintahan_apdk_3" class="col-sm-3 control-label">Buku Keputusan Kepala Desa/Lurah</label>
			<div class="col-sm-5">
				<select class="form-control" id="pemerintahan_apdk_3" name="data[detail][pemerintahan][apdk][3][status]">
					<option value="Ada">Ada</option>
					<option value="Tidak">Tidak</option>
				</select><br>
				<select class="form-control" id="pemerintahan_apdk_3" name="data[detail][pemerintahan][apdk][3][keterangan]">
					<option value="Terisi">Terisi</option>
					<option value="Tidak">Tidak</option>
				</select>
			</div>
		</div>
		<div class="form-group">
			<label for="pemerintahan_apdk_4" class="col-sm-3 control-label">Buku administrasi kependudukan</label>
			<div class="col-sm-5">
				<select class="form-control" id="pemerintahan_apdk_4" name="data[detail][pemerintahan][apdk][4][status]">
					<option value="Ada">Ada</option>
					<option value="Tidak">Tidak</option>
				</select><br>
				<select class="form-control" id="pemerintahan_apdk_4" name="data[detail][pemerintahan][apdk][4][keterangan]">
					<option value="Terisi">Terisi</option>
					<option value="Tidak">Tidak</option>
				</select>
			</div>
		</div>
		<div class="form-group">
			<label for="pemerintahan_apdk_5" class="col-sm-3 control-label">Buku data inventaris</label>
			<div class="col-sm-5">
				<select class="form-control" id="pemerintahan_apdk_5" name="data[detail][pemerintahan][apdk][5][status]">
					<option value="Ada">Ada</option>
					<option value="Tidak">Tidak</option>
				</select><br>
				<select class="form-control" id="pemerintahan_apdk_5" name="data[detail][pemerintahan][apdk][5][keterangan]">
					<option value="Terisi">Terisi</option>
					<option value="Tidak">Tidak</option>
				</select>
			</div>
		</div>
		<div class="form-group">
			<label for="pemerintahan_apdk_6" class="col-sm-3 control-label">Buku data aparat</label>
			<div class="col-sm-5">
				<select class="form-control" id="pemerintahan_apdk_6" name="data[detail][pemerintahan][apdk][6][status]">
					<option value="Ada">Ada</option>
					<option value="Tidak">Tidak</option>
				</select><br>
				<select class="form-control" id="pemerintahan_apdk_6" name="data[detail][pemerintahan][apdk][6][keterangan]">
					<option value="Terisi">Terisi</option>
					<option value="Tidak">Tidak</option>
				</select>
			</div>
		</div>
		<div class="form-group">
			<label for="pemerintahan_apdk_7" class="col-sm-3 control-label">Buku data tanah milik desa/tanah kas desa/milik kelurahan</label>
			<div class="col-sm-5">
				<select class="form-control" id="pemerintahan_apdk_7" name="data[detail][pemerintahan][apdk][7][status]">
					<option value="Ada">Ada</option>
					<option value="Tidak">Tidak</option>
				</select><br>
				<select class="form-control" id="pemerintahan_apdk_7" name="data[detail][pemerintahan][apdk][7][keterangan]">
					<option value="Terisi">Terisi</option>
					<option value="Tidak">Tidak</option>
				</select>
			</div>
		</div>
		<div class="form-group">
			<label for="pemerintahan_apdk_8" class="col-sm-3 control-label">Buku administrasi pajak dan retribusi</label>
			<div class="col-sm-5">
				<select class="form-control" id="pemerintahan_apdk_8" name="data[detail][pemerintahan][apdk][8][status]">
					<option value="Ada">Ada</option>
					<option value="Tidak">Tidak</option>
				</select><br>
				<select class="form-control" id="pemerintahan_apdk_8" name="data[detail][pemerintahan][apdk][8][keterangan]">
					<option value="Terisi">Terisi</option>
					<option value="Tidak">Tidak</option>
				</select>
			</div>
		</div>
		<div class="form-group">
			<label for="pemerintahan_apdk_9" class="col-sm-3 control-label">Buku data tanah</label>
			<div class="col-sm-5">
				<select class="form-control" id="pemerintahan_apdk_9" name="data[detail][pemerintahan][apdk][9][status]">
					<option value="Ada">Ada</option>
					<option value="Tidak">Tidak</option>
				</select><br>
				<select class="form-control" id="pemerintahan_apdk_9" name="data[detail][pemerintahan][apdk][9][keterangan]">
					<option value="Terisi">Terisi</option>
					<option value="Tidak">Tidak</option>
				</select>
			</div>
		</div>
		<div class="form-group">
			<label for="pemerintahan_apdk_10" class="col-sm-3 control-label">Buku laporan pengaduan masyarakat</label>
			<div class="col-sm-5">
				<select class="form-control" id="pemerintahan_apdk_10" name="data[detail][pemerintahan][apdk][10][status]">
					<option value="Ada">Ada</option>
					<option value="Tidak">Tidak</option>
				</select><br>
				<select class="form-control" id="pemerintahan_apdk_10" name="data[detail][pemerintahan][apdk][10][keterangan]">
					<option value="Terisi">Terisi</option>
					<option value="Tidak">Tidak</option>
				</select>
			</div>
		</div>
		<div class="form-group">
			<label for="pemerintahan_apdk_11" class="col-sm-3 control-label">Buku agenda ekspedisi</label>
			<div class="col-sm-5">
				<select class="form-control" id="pemerintahan_apdk_11" name="data[detail][pemerintahan][apdk][11][status]">
					<option value="Ada">Ada</option>
					<option value="Tidak">Tidak</option>
				</select><br>
				<select class="form-control" id="pemerintahan_apdk_11" name="data[detail][pemerintahan][apdk][11][keterangan]">
					<option value="Terisi">Terisi</option>
					<option value="Tidak">Tidak</option>
				</select>
			</div>
		</div>
		<div class="form-group">
			<label for="pemerintahan_apdk_12" class="col-sm-3 control-label">Buku profil desa/kelurahan</label>
			<div class="col-sm-5">
				<select class="form-control" id="pemerintahan_apdk_12" name="data[detail][pemerintahan][apdk][12][status]">
					<option value="Ada">Ada</option>
					<option value="Tidak">Tidak</option>
				</select><br>
				<select class="form-control" id="pemerintahan_apdk_12" name="data[detail][pemerintahan][apdk][12][keterangan]">
					<option value="Terisi">Terisi</option>
					<option value="Tidak">Tidak</option>
				</select>
			</div>
		</div>
		<div class="form-group">
			<label for="pemerintahan_apdk_13" class="col-sm-3 control-label">Buku data induk penduduk</label>
			<div class="col-sm-5">
				<select class="form-control" id="pemerintahan_apdk_13" name="data[detail][pemerintahan][apdk][13][status]">
					<option value="Ada">Ada</option>
					<option value="Tidak">Tidak</option>
				</select><br>
				<select class="form-control" id="pemerintahan_apdk_13" name="data[detail][pemerintahan][apdk][13][keterangan]">
					<option value="Terisi">Terisi</option>
					<option value="Tidak">Tidak</option>
				</select>
			</div>
		</div>
		<div class="form-group">
			<label for="pemerintahan_apdk_14" class="col-sm-3 control-label">Buku buku data mutasi penduduk</label>
			<div class="col-sm-5">
				<select class="form-control" id="pemerintahan_apdk_14" name="data[detail][pemerintahan][apdk][14][status]">
					<option value="Ada">Ada</option>
					<option value="Tidak">Tidak</option>
				</select><br>
				<select class="form-control" id="pemerintahan_apdk_14" name="data[detail][pemerintahan][apdk][14][keterangan]">
					<option value="Terisi">Terisi</option>
					<option value="Tidak">Tidak</option>
				</select>
			</div>
		</div>
		<div class="form-group">
			<label for="pemerintahan_apdk_15" class="col-sm-3 control-label">Buku rekapitulasi jumlah penduduk akhir bulan</label>
			<div class="col-sm-5">
				<select class="form-control" id="pemerintahan_apdk_15" name="data[detail][pemerintahan][apdk][15][status]">
					<option value="Ada">Ada</option>
					<option value="Tidak">Tidak</option>
				</select><br>
				<select class="form-control" id="pemerintahan_apdk_15" name="data[detail][pemerintahan][apdk][15][keterangan]">
					<option value="Terisi">Terisi</option>
					<option value="Tidak">Tidak</option>
				</select>
			</div>
		</div>
		<div class="form-group">
			<label for="pemerintahan_apdk_16" class="col-sm-3 control-label">Buku registrasi pelayanan penduduk</label>
			<div class="col-sm-5">
				<select class="form-control" id="pemerintahan_apdk_16" name="data[detail][pemerintahan][apdk][16][status]">
					<option value="Ada">Ada</option>
					<option value="Tidak">Tidak</option>
				</select><br>
				<select class="form-control" id="pemerintahan_apdk_16" name="data[detail][pemerintahan][apdk][16][keterangan]">
					<option value="Terisi">Terisi</option>
					<option value="Tidak">Tidak</option>
				</select>
			</div>
		</div>
		<div class="form-group">
			<label for="pemerintahan_apdk_17" class="col-sm-3 control-label">Buku data penduduk sementara</label>
			<div class="col-sm-5">
				<select class="form-control" id="pemerintahan_apdk_17" name="data[detail][pemerintahan][apdk][17][status]">
					<option value="Ada">Ada</option>
					<option value="Tidak">Tidak</option>
				</select><br>
				<select class="form-control" id="pemerintahan_apdk_17" name="data[detail][pemerintahan][apdk][17][keterangan]">
					<option value="Terisi">Terisi</option>
					<option value="Tidak">Tidak</option>
				</select>
			</div>
		</div>
		<div class="form-group">
			<label for="pemerintahan_apdk_18" class="col-sm-3 control-label">Buku anggaran penerimaan</label>
			<div class="col-sm-5">
				<select class="form-control" id="pemerintahan_apdk_18" name="data[detail][pemerintahan][apdk][18][status]">
					<option value="Ada">Ada</option>
					<option value="Tidak">Tidak</option>
				</select><br>
				<select class="form-control" id="pemerintahan_apdk_18" name="data[detail][pemerintahan][apdk][18][keterangan]">
					<option value="Terisi">Terisi</option>
					<option value="Tidak">Tidak</option>
				</select>
			</div>
		</div>
		<div class="form-group">
			<label for="pemerintahan_apdk_19" class="col-sm-3 control-label">Buku anggaran pengeluaran pegawai dan pembangunan</label>
			<div class="col-sm-5">
				<select class="form-control" id="pemerintahan_apdk_19" name="data[detail][pemerintahan][apdk][19][status]">
					<option value="Ada">Ada</option>
					<option value="Tidak">Tidak</option>
				</select><br>
				<select class="form-control" id="pemerintahan_apdk_19" name="data[detail][pemerintahan][apdk][19][keterangan]">
					<option value="Terisi">Terisi</option>
					<option value="Tidak">Tidak</option>
				</select>
			</div>
		</div>
		<div class="form-group">
			<label for="pemerintahan_apdk_20" class="col-sm-3 control-label">Buku kas umum</label>
			<div class="col-sm-5">
				<select class="form-control" id="pemerintahan_apdk_20" name="data[detail][pemerintahan][apdk][20][status]">
					<option value="Ada">Ada</option>
					<option value="Tidak">Tidak</option>
				</select><br>
				<select class="form-control" id="pemerintahan_apdk_20" name="data[detail][pemerintahan][apdk][20][keterangan]">
					<option value="Terisi">Terisi</option>
					<option value="Tidak">Tidak</option>
				</select>
			</div>
		</div>
		<div class="form-group">
			<label for="pemerintahan_apdk_21" class="col-sm-3 control-label">Buku kas pembantu penerimaan</label>
			<div class="col-sm-5">
				<select class="form-control" id="pemerintahan_apdk_21" name="data[detail][pemerintahan][apdk][21][status]">
					<option value="Ada">Ada</option>
					<option value="Tidak">Tidak</option>
				</select><br>
				<select class="form-control" id="pemerintahan_apdk_21" name="data[detail][pemerintahan][apdk][21][keterangan]">
					<option value="Terisi">Terisi</option>
					<option value="Tidak">Tidak</option>
				</select>
			</div>
		</div>
		<div class="form-group">
			<label for="pemerintahan_apdk_22" class="col-sm-3 control-label">Buku kas pembantu pengeluaran rutin dan pembangunan</label>
			<div class="col-sm-5">
				<select class="form-control" id="pemerintahan_apdk_22" name="data[detail][pemerintahan][apdk][22][status]">
					<option value="Ada">Ada</option>
					<option value="Tidak">Tidak</option>
				</select><br>
				<select class="form-control" id="pemerintahan_apdk_22" name="data[detail][pemerintahan][apdk][22][keterangan]">
					<option value="Terisi">Terisi</option>
					<option value="Tidak">Tidak</option>
				</select>
			</div>
		</div>
		<div class="form-group">
			<label for="pemerintahan_apdk_23" class="col-sm-3 control-label">Buku data lembaga kemasyarakatan</label>
			<div class="col-sm-5">
				<select class="form-control" id="pemerintahan_apdk_23" name="data[detail][pemerintahan][apdk][23][status]">
					<option value="Ada">Ada</option>
					<option value="Tidak">Tidak</option>
				</select><br>
				<select class="form-control" id="pemerintahan_apdk_23" name="data[detail][pemerintahan][apdk][23][keterangan]">
					<option value="Terisi">Terisi</option>
					<option value="Tidak">Tidak</option>
				</select>
			</div>
		</div>
		<div class="form-group">
			<label for="pemerintahan_apdk_24" class="col-sm-3 control-label">Buku data pengurus dan anggota lembaga kemasyarakatan</label>
			<div class="col-sm-5">
				<select class="form-control" id="pemerintahan_apdk_24" name="data[detail][pemerintahan][apdk][24][status]">
					<option value="Ada">Ada</option>
					<option value="Tidak">Tidak</option>
				</select><br>
				<select class="form-control" id="pemerintahan_apdk_24" name="data[detail][pemerintahan][apdk][24][keterangan]">
					<option value="Terisi">Terisi</option>
					<option value="Tidak">Tidak</option>
				</select>
			</div>
		</div>
		<div class="form-group">
			<label for="pemerintahan_apdk_25" class="col-sm-3 control-label">Buku data program dan kegiatan masuk desa/kelurahan</label>
			<div class="col-sm-5">
				<select class="form-control" id="pemerintahan_apdk_25" name="data[detail][pemerintahan][apdk][25][status]">
					<option value="Ada">Ada</option>
					<option value="Tidak">Tidak</option>
				</select><br>
				<select class="form-control" id="pemerintahan_apdk_25" name="data[detail][pemerintahan][apdk][25][keterangan]">
					<option value="Terisi">Terisi</option>
					<option value="Tidak">Tidak</option>
				</select>
			</div>
		</div>
		<div class="form-group">
			<label for="pemerintahan_apdk_26" class="col-sm-3 control-label">Buku rencana kerja pembangunan desa/kelurahan</label>
			<div class="col-sm-5">
				<select class="form-control" id="pemerintahan_apdk_26" name="data[detail][pemerintahan][apdk][26][status]">
					<option value="Ada">Ada</option>
					<option value="Tidak">Tidak</option>
				</select><br>
				<select class="form-control" id="pemerintahan_apdk_26" name="data[detail][pemerintahan][apdk][26][keterangan]">
					<option value="Terisi">Terisi</option>
					<option value="Tidak">Tidak</option>
				</select>
			</div>
		</div>
		<div class="form-group">
			<label for="pemerintahan_apdk_27" class="col-sm-3 control-label">Buku rencana pembangunan jangka menengah desa</label>
			<div class="col-sm-5">
				<select class="form-control" id="pemerintahan_apdk_27" name="data[detail][pemerintahan][apdk][27][status]">
					<option value="Ada">Ada</option>
					<option value="Tidak">Tidak</option>
				</select><br>
				<select class="form-control" id="pemerintahan_apdk_27" name="data[detail][pemerintahan][apdk][27][keterangan]">
					<option value="Terisi">Terisi</option>
					<option value="Tidak">Tidak</option>
				</select>
			</div>
		</div>
		<div class="form-group">
			<label for="pemerintahan_apdk_28" class="col-sm-3 control-label">Buku kader pemberdayaan masyarakat</label>
			<div class="col-sm-5">
				<select class="form-control" id="pemerintahan_apdk_28" name="data[detail][pemerintahan][apdk][28][status]">
					<option value="Ada">Ada</option>
					<option value="Tidak">Tidak</option>
				</select><br>
				<select class="form-control" id="pemerintahan_apdk_28" name="data[detail][pemerintahan][apdk][28][keterangan]">
					<option value="Terisi">Terisi</option>
					<option value="Tidak">Tidak</option>
				</select>
			</div>
		</div>
		<div class="form-group">
			<label for="pemerintahan_apdk_29" class="col-sm-3 control-label">Buku kegiatan pembangunan</label>
			<div class="col-sm-5">
				<select class="form-control" id="pemerintahan_apdk_29" name="data[detail][pemerintahan][apdk][29][status]">
					<option value="Ada">Ada</option>
					<option value="Tidak">Tidak</option>
				</select><br>
				<select class="form-control" id="pemerintahan_apdk_29" name="data[detail][pemerintahan][apdk][29][keterangan]">
					<option value="Terisi">Terisi</option>
					<option value="Tidak">Tidak</option>
				</select>
			</div>
		</div>
		<div class="form-group">
			<label for="pemerintahan_apdk_30" class="col-sm-3 control-label">Buku inventaris proyek</label>
			<div class="col-sm-5">
				<select class="form-control" id="pemerintahan_apdk_30" name="data[detail][pemerintahan][apdk][30][status]">
					<option value="Ada">Ada</option>
					<option value="Tidak">Tidak</option>
				</select><br>
				<select class="form-control" id="pemerintahan_apdk_30" name="data[detail][pemerintahan][apdk][30][keterangan]">
					<option value="Terisi">Terisi</option>
					<option value="Tidak">Tidak</option>
				</select>
			</div>
		</div>
		<div class="form-group">
			<label for="pemerintahan_apdk_31" class="col-sm-3 control-label">Buku APB-Desa/Anggaran Kelurahan</label>
			<div class="col-sm-5">
				<select class="form-control" id="pemerintahan_apdk_31" name="data[detail][pemerintahan][apdk][31][status]">
					<option value="Ada">Ada</option>
					<option value="Tidak">Tidak</option>
				</select><br>
				<select class="form-control" id="pemerintahan_apdk_31" name="data[detail][pemerintahan][apdk][31][keterangan]">
					<option value="Terisi">Terisi</option>
					<option value="Tidak">Tidak</option>
				</select>
			</div>
		</div>
		<div class="form-group">
			<label for="pemerintahan_apdk_32" class="col-sm-3 control-label">Loket pelayanan</label>
			<div class="col-sm-5">
				<select class="form-control" id="pemerintahan_apdk_32" name="data[detail][pemerintahan][apdk][32][status]">
					<option value="Ada">Ada</option>
					<option value="Tidak">Tidak</option>
				</select><br>
				<select class="form-control" id="pemerintahan_apdk_32" name="data[detail][pemerintahan][apdk][32][keterangan]">
					<option value="Terisi">Terisi</option>
					<option value="Tidak">Tidak</option>
				</select>
			</div>
		</div>
		<div class="form-group">
			<label for="pemerintahan_apdk_33" class="col-sm-3 control-label">Kotak Pengaduan Masyarakat</label>
			<div class="col-sm-5">
				<select class="form-control" id="pemerintahan_apdk_33" name="data[detail][pemerintahan][apdk][33][status]">
					<option value="Ada">Ada</option>
					<option value="Tidak">Tidak</option>
				</select><br>
				<select class="form-control" id="pemerintahan_apdk_33" name="data[detail][pemerintahan][apdk][33][keterangan]">
					<option value="Terisi">Terisi</option>
					<option value="Tidak">Tidak</option>
				</select>
			</div>
		</div>
		<div class="form-group">
			<label for="pemerintahan_apdk_34" class="col-sm-3 control-label">Papan informasi pelayanan</label>
			<div class="col-sm-5">
				<select class="form-control" id="pemerintahan_apdk_34" name="data[detail][pemerintahan][apdk][34][status]">
					<option value="Ada">Ada</option>
					<option value="Tidak">Tidak</option>
				</select><br>
				<select class="form-control" id="pemerintahan_apdk_34" name="data[detail][pemerintahan][apdk][34][keterangan]">
					<option value="Terisi">Terisi</option>
					<option value="Tidak">Tidak</option>
				</select>
			</div>
		</div>
		<div class="form-group">
			<label for="pemerintahan_apdk_35" class="col-sm-3 control-label">Laporan kinerja tahunan</label>
			<div class="col-sm-5">
				<select class="form-control" id="pemerintahan_apdk_35" name="data[detail][pemerintahan][apdk][35][status]">
					<option value="Ada">Ada</option>
					<option value="Tidak">Tidak</option>
				</select>
			</div>
		</div>
		<div class="form-group">
			<label for="pemerintahan_apdk_36" class="col-sm-3 control-label">Laporan akhir jabatan/memori jabatan lurah/desa</label>
			<div class="col-sm-5">
				<select class="form-control" id="pemerintahan_apdk_36" name="data[detail][pemerintahan][apdk][36][status]">
					<option value="Ada">Ada</option>
					<option value="Tidak">Tidak</option>
				</select>
			</div>
		</div>
		<div class="form-group">
			<label for="pemerintahan_apdk_lainnya" class="col-sm-3 control-label">Lainnya</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="pemerintahan_apdk_lainnya" name="data[detail][pemerintahan][apdk][lainnya][nama]" placeholder="Keterangan"><br>
				<select class="form-control" id="pemerintahan_apdk_lainnya" name="data[detail][pemerintahan][apdk][lainnya][status]">
					<option value="Ada">Ada</option>
					<option value="Tidak">Tidak</option>
				</select><br>
				<select class="form-control" id="pemerintahan_apdk_lainnya" name="data[detail][pemerintahan][apdk][lainnya][keterangan]">
					<option value="Terisi">Terisi</option>
					<option value="Tidak">Tidak</option>
				</select>
			</div>
		</div>

		<div class="form-group">
			<div class="col-md-12">
				<h4>2. Prasarana Dan Sarana Badan Permusyawaratan Desa/BPD</h4>
			</div>
		</div>
		<div class="form-group">
			<label for="pemerintahan_sarprasbpd_1" class="col-sm-3 control-label">Gedung Kantor</label>
			<div class="col-sm-5">
				<select class="form-control" id="pemerintahan_sarprasbpd_1" name="data[detail][pemerintahan][sarprasbpd][1]">
					<option value="Ada">Ada</option>
					<option value="Tidak">Tidak</option>
				</select>
			</div>
		</div>
		<div class="form-group">
			<label for="pemerintahan_sarprasbpd_2" class="col-sm-3 control-label">Ruangan Kerja</label>
			<div class="col-sm-5">
				<select class="form-control" id="pemerintahan_sarprasbpd_2" name="data[detail][pemerintahan][sarprasbpd][2]">
					<option value="Ada">Ada</option>
					<option value="Tidak">Tidak</option>
				</select>
			</div>
		</div>
		<div class="form-group">
			<label for="pemerintahan_sarprasbpd_3" class="col-sm-3 control-label">Kondisi Ruangan Kerja</label>
			<div class="col-sm-5">
				<select class="form-control" id="pemerintahan_sarprasbpd_3" name="data[detail][pemerintahan][sarprasbpd][3]">
					<option value="Baik">Baik</option>
					<option value="Rusak">Rusak</option>
				</select>
			</div>
		</div>
		<div class="form-group">
			<label for="pemerintahan_sarprasbpd_4" class="col-sm-3 control-label">Listrik</label>
			<div class="col-sm-5">
				<select class="form-control" id="pemerintahan_sarprasbpd_4" name="data[detail][pemerintahan][sarprasbpd][4]">
					<option value="Ada">Ada</option>
					<option value="Tidak">Tidak</option>
				</select>
			</div>
		</div>
		<div class="form-group">
			<label for="pemerintahan_sarprasbpd_5" class="col-sm-3 control-label">Air bersih</label>
			<div class="col-sm-5">
				<select class="form-control" id="pemerintahan_sarprasbpd_5" name="data[detail][pemerintahan][sarprasbpd][5]">
					<option value="Ada">Ada</option>
					<option value="Tidak">Tidak</option>
				</select>
			</div>
		</div>
		<div class="form-group">
			<label for="pemerintahan_sarprasbpd_6" class="col-sm-3 control-label">Telepon</label>
			<div class="col-sm-5">
				<select class="form-control" id="pemerintahan_sarprasbpd_6" name="data[detail][pemerintahan][sarprasbpd][6]">
					<option value="Ada">Ada</option>
					<option value="Tidak">Tidak</option>
				</select>
			</div>
		</div>

		<div class="form-group">
			<div class="col-md-12">
				<h4>2.A. Inventaris dan Alat tulis kantor</h4>
			</div>
		</div>
		<div class="form-group">
			<label for="pemerintahan_iatkbpd_1" class="col-sm-3 control-label">Jumlah mesin tik</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="pemerintahan_iatkbpd_1" name="data[detail][pemerintahan][iatkbpd][1]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="pemerintahan_iatkbpd_2" class="col-sm-3 control-label">Jumlah meja</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="pemerintahan_iatkbpd_2" name="data[detail][pemerintahan][iatkbpd][2]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="pemerintahan_iatkbpd_3" class="col-sm-3 control-label">Jumlah kursi</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="pemerintahan_iatkbpd_3" name="data[detail][pemerintahan][iatkbpd][3]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="pemerintahan_iatkbpd_4" class="col-sm-3 control-label">Jumlah almari arsip</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="pemerintahan_iatkbpd_4" name="data[detail][pemerintahan][iatkbpd][4]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="pemerintahan_iatkbpd_5" class="col-sm-3 control-label">Komputer</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="pemerintahan_iatkbpd_5" name="data[detail][pemerintahan][iatkbpd][5]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="pemerintahan_iatkbpd_6" class="col-sm-3 control-label">Mesin fax</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="pemerintahan_iatkbpd_6" name="data[detail][pemerintahan][iatkbpd][6]" placeholder="Jumlah">
			</div>
		</div>

		<div class="form-group">
			<div class="col-md-12">
				<h4>2.B. Administrasi BPD</h4>
			</div>
		</div>
		<div class="form-group">
			<label for="pemerintahan_abpd_1" class="col-sm-3 control-label">Buku-buku administrasi keanggotaan BPD</label>
			<div class="col-sm-5">
				<select class="form-control" id="pemerintahan_abpd_1" name="data[detail][pemerintahan][abpd][1][keterangan]">
					<option value="Ada">Ada</option>
					<option value="Tidak">Tidak</option>
				</select><br>
				<select class="form-control" id="pemerintahan_abpd_1" name="data[detail][pemerintahan][abpd][1][status]">
					<option value="Terisi">Terisi</option>
					<option value="Tidak">Tidak</option>
				</select>
			</div>
		</div>
		<div class="form-group">
			<label for="pemerintahan_abpd_2" class="col-sm-3 control-label">Buku agenda BPD</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="pemerintahan_abpd_2" name="data[detail][pemerintahan][abpd][2][keterangan]" placeholder="Jumlah"><br>
				<select class="form-control" id="pemerintahan_abpd_2" name="data[detail][pemerintahan][abpd][2][status]">
					<option value="Terisi">Terisi</option>
					<option value="Tidak">Tidak</option>
				</select>
			</div>
		</div>
		<div class="form-group">
			<label for="pemerintahan_abpd_3" class="col-sm-3 control-label">Buku data kegiatan BPD</label>
			<div class="col-sm-5">
				<select class="form-control" id="pemerintahan_abpd_3" name="data[detail][pemerintahan][abpd][3][keterangan]">
					<option value="Ada">Ada</option>
					<option value="Tidak">Tidak</option>
				</select><br>
				<select class="form-control" id="pemerintahan_abpd_3" name="data[detail][pemerintahan][abpd][3][status]">
					<option value="Terisi">Terisi</option>
					<option value="Tidak">Tidak</option>
				</select>
			</div>
		</div>
		<div class="form-group">
			<label for="pemerintahan_abpd_4" class="col-sm-3 control-label">Buku Sekretariat BPD</label>
			<div class="col-sm-5">
				<select class="form-control" id="pemerintahan_abpd_4" name="data[detail][pemerintahan][abpd][4][keterangan]">
					<option value="Ada">Ada</option>
					<option value="Tidak">Tidak</option>
				</select><br>
				<select class="form-control" id="pemerintahan_abpd_4" name="data[detail][pemerintahan][abpd][4][status]">
					<option value="Terisi">Terisi</option>
					<option value="Tidak">Tidak</option>
				</select>
			</div>
		</div>
		<div class="form-group">
			<label for="pemerintahan_abpd_5" class="col-sm-3 control-label">Buku Data Keputusan BPD</label>
			<div class="col-sm-5">
				<select class="form-control" id="pemerintahan_abpd_5" name="data[detail][pemerintahan][abpd][5][keterangan]">
					<option value="Ada">Ada</option>
					<option value="Tidak">Tidak</option>
				</select><br>
				<select class="form-control" id="pemerintahan_abpd_5" name="data[detail][pemerintahan][abpd][5][status]">
					<option value="Terisi">Terisi</option>
					<option value="Tidak">Tidak</option>
				</select>
			</div>
		</div>
		<div class="form-group">
			<label for="pemerintahan_abpd_lainnya" class="col-sm-3 control-label">Lainnya</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="pemerintahan_abpd_lainnya" name="data[detail][pemerintahan][abpd][lainnya][Keterangan]" placeholder="Keterangan"><br>
				<select class="form-control" id="pemerintahan_abpd_6" name="data[detail][pemerintahan][abpd][6][status]">
					<option value="Terisi">Terisi</option>
					<option value="Tidak">Tidak</option>
				</select>
			</div>
		</div>

		<div class="form-group">
			<div class="col-md-12">
				<h4>3. Prasarana Dan Sarana Dusun/lingkungan/sebutan Lain</h4>
			</div>
		</div>
		<div class="form-group">
			<label for="pemerintahan_sarprasdl_1" class="col-sm-3 control-label">Gedung Kantor atau Balai Pertemuan</label>
			<div class="col-sm-5">
				<select class="form-control" id="pemerintahan_sarprasdl_1" name="data[detail][pemerintahan][sarprasdl][1]">
					<option value="Ada">Ada</option>
					<option value="Tidak">Tidak</option>
				</select>
			</div>
		</div>
		<div class="form-group">
			<label for="pemerintahan_sarprasdl_2" class="col-sm-3 control-label">Kondisi Gedung Kantor atau Balai Pertemuan</label>
			<div class="col-sm-5">
				<select class="form-control" id="pemerintahan_sarprasdl_2" name="data[detail][pemerintahan][sarprasdl][2]">
					<option value="Baik">Baik</option>
					<option value="Rusak">Rusak</option>
				</select>
			</div>
		</div>
		<div class="form-group">
			<label for="pemerintahan_sarprasdl_3" class="col-sm-3 control-label">Alat Tulis Kantor</label>
			<div class="col-sm-5">
				<select class="form-control" id="pemerintahan_sarprasdl_3" name="data[detail][pemerintahan][sarprasdl][3]">
					<option value="Aktif">Aktif</option>
					<option value="Tidak">Tidak</option>
				</select>
			</div>
		</div>
		<div class="form-group">
			<label for="pemerintahan_sarprasdl_4" class="col-sm-3 control-label">Barang inventaris</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="pemerintahan_sarprasdl_4" name="data[detail][pemerintahan][sarprasdl][4]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="pemerintahan_sarprasdl_5" class="col-sm-3 control-label">Buku administrasi</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="pemerintahan_sarprasdl_5" name="data[detail][pemerintahan][sarprasdl][5]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="pemerintahan_sarprasdl_6" class="col-sm-3 control-label">Jenis kegiatan</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="pemerintahan_sarprasdl_6" name="data[detail][pemerintahan][sarprasdl][6]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="pemerintahan_sarprasdl_7" class="col-sm-3 control-label">Jumlah pengurus</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="pemerintahan_sarprasdl_7" name="data[detail][pemerintahan][sarprasdl][7]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="pemerintahan_sarprasdl_8" class="col-sm-3 control-label">Jumlah ruang kerja</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="pemerintahan_sarprasdl_8" name="data[detail][pemerintahan][sarprasdl][8]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="pemerintahan_sarprasdl_9" class="col-sm-3 control-label">Balai Dusun/Lingkungan/sejenisnya</label>
			<div class="col-sm-5">
				<select class="form-control" id="pemerintahan_sarprasdl_9" name="data[detail][pemerintahan][sarprasdl][9]">
					<option value="Ada">Ada</option>
					<option value="Tidak">Tidak</option>
				</select>
			</div>
		</div>
		<div class="form-group">
			<label for="pemerintahan_sarprasdl_10" class="col-sm-3 control-label">Kondisi Balai Dusun/Lingkungan/sejenisnya</label>
			<div class="col-sm-5">
				<select class="form-control" id="pemerintahan_sarprasdl_10" name="data[detail][pemerintahan][sarprasdl][10]">
					<option value="Baik">Baik</option>
					<option value="Rusak">Rusak</option>
				</select>
			</div>
		</div>
		<div class="form-group">
			<label for="pemerintahan_sarprasdl_11" class="col-sm-3 control-label">Listrik</label>
			<div class="col-sm-5">
				<select class="form-control" id="pemerintahan_sarprasdl_11" name="data[detail][pemerintahan][sarprasdl][11]">
					<option value="Ada">Ada</option>
					<option value="Tidak">Tidak</option>
				</select>
			</div>
		</div>
		<div class="form-group">
			<label for="pemerintahan_sarprasdl_12" class="col-sm-3 control-label">Air bersih</label>
			<div class="col-sm-5">
				<select class="form-control" id="pemerintahan_sarprasdl_12" name="data[detail][pemerintahan][sarprasdl][12]">
					<option value="Ada">Ada</option>
					<option value="Tidak">Tidak</option>
				</select>
			</div>
		</div>
		<div class="form-group">
			<label for="pemerintahan_sarprasdl_13" class="col-sm-3 control-label">Telepon</label>
			<div class="col-sm-5">
				<select class="form-control" id="pemerintahan_sarprasdl_13" name="data[detail][pemerintahan][sarprasdl][13]">
					<option value="Ada">Ada</option>
					<option value="Tidak">Tidak</option>
				</select>
			</div>
		</div>

		<div class="form-group">
			<div class="col-md-12">
				<h4>3.A. Inventaris dan Alat Tulis Kantor</h4>
			</div>
		</div>
		<div class="form-group">
			<label for="pemerintahan_iatkdl_1" class="col-sm-3 control-label">Jumlah mesin tik</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="pemerintahan_iatkdl_1" name="data[detail][pemerintahan][iatkdl][1]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="pemerintahan_iatkdl_2" class="col-sm-3 control-label">Jumlah meja</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="pemerintahan_iatkdl_2" name="data[detail][pemerintahan][iatkdl][2]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="pemerintahan_iatkdl_3" class="col-sm-3 control-label">Jumlah kursi</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="pemerintahan_iatkdl_3" name="data[detail][pemerintahan][iatkdl][3]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="pemerintahan_iatkdl_4" class="col-sm-3 control-label">Jumlah almari arsip</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="pemerintahan_iatkdl_4" name="data[detail][pemerintahan][iatkdl][4]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="pemerintahan_iatkdl_5" class="col-sm-3 control-label">Komputer</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="pemerintahan_iatkdl_5" name="data[detail][pemerintahan][iatkdl][5]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="pemerintahan_iatkdl_6" class="col-sm-3 control-label">Mesin fax</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="pemerintahan_iatkdl_6" name="data[detail][pemerintahan][iatkdl][6]" placeholder="Jumlah">
			</div>
		</div>

		<div class="form-group">
			<div class="col-md-12">
				<h4>D. Pembinaan Dan Pengawasan</h4>
				<h4>1. Jenis Pembinaan Pemerintah Pusat kepada Pemerintahan Desa dan Kelurahan</h4>
			</div>
		</div>
		<div class="form-group">
			<label for="pemerintahan_pembinaan_1" class="col-sm-3 control-label">Pedoman dan standar pelaksanaan urusan pemerintahan desa, kelurahan, lembaga kemasyarakatan</label>
			<div class="col-sm-5">
				<select class="form-control" id="pemerintahan_pembinaan_1" name="data[detail][pemerintahan][pembinaan][1]">
					<option value="Ada">Ada</option>
					<option value="Tidak">Tidak</option>
				</select>
			</div>
		</div>
		<div class="form-group">
			<label for="pemerintahan_pembinaan_2" class="col-sm-3 control-label">Pedoman dan standar bantuan pembiayaan dari pemerintah, pemerintah provinsi dan kabupaten/kota kepada desa dan kelurahan</label>
			<div class="col-sm-5">
				<select class="form-control" id="pemerintahan_pembinaan_2" name="data[detail][pemerintahan][pembinaan][2]">
					<option value="Ada">Ada</option>
					<option value="Tidak">Tidak</option>
				</select>
			</div>
		</div>
		<div class="form-group">
			<label for="pemerintahan_pembinaan_3" class="col-sm-3 control-label">Pedoman umum administrasi, tata naskah dan pelaporan bagi kepala desa dan lurah</label>
			<div class="col-sm-5">
				<select class="form-control" id="pemerintahan_pembinaan_3" name="data[detail][pemerintahan][pembinaan][3]">
					<option value="Ada">Ada</option>
					<option value="Tidak">Tidak</option>
				</select>
			</div>
		</div>
		<div class="form-group">
			<label for="pemerintahan_pembinaan_4" class="col-sm-3 control-label">Pedoman dan standar tanda jabatan, pakaian dinas dan atribut bagi Kepala Desa, Lurah dan Perangkat Desa/Kelurahan serta BPD</label>
			<div class="col-sm-5">
				<select class="form-control" id="pemerintahan_pembinaan_4" name="data[detail][pemerintahan][pembinaan][4]">
					<option value="Ada">Ada</option>
					<option value="Tidak">Tidak</option>
				</select>
			</div>
		</div>
		<div class="form-group">
			<label for="pemerintahan_pembinaan_5" class="col-sm-3 control-label">Pedoman pendidikan dan pelatihan bagi pemerintahan desa, kelurahan, lembaga kemasyarakatan dan perangkat masing-masing</label>
			<div class="col-sm-5">
				<select class="form-control" id="pemerintahan_pembinaan_5" name="data[detail][pemerintahan][pembinaan][5]">
					<option value="Ada">Ada</option>
					<option value="Tidak">Tidak</option>
				</select>
			</div>
		</div>
		<div class="form-group">
			<label for="pemerintahan_pembinaan_6" class="col-sm-3 control-label">Jumlah bimbingan, supervisi dan konsultasi pelaksanaan pemerintahan desa dan kelurahan serta pemberdayaan lembaga kemasyarakatan</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="pemerintahan_pembinaan_6" name="data[detail][pemerintahan][pembinaan][6]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="pemerintahan_pembinaan_7" class="col-sm-3 control-label">Jumlah kegiatan pendidikan dan pelatihan tentang penyelenggaraan pemerintahan desa dan kelurahan</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="pemerintahan_pembinaan_7" name="data[detail][pemerintahan][pembinaan][7]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="pemerintahan_pembinaan_8" class="col-sm-3 control-label">Penelitian dan pengkajian penyelenggaraan pemerintahan desa dan kelurahan</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="pemerintahan_pembinaan_8" name="data[detail][pemerintahan][pembinaan][8]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="pemerintahan_pembinaan_9" class="col-sm-3 control-label">Jumlah kegiatan yang terkait dengan upaya percepatan atau akselerasi pembangunan desa dan kelurahan dalam bidang ekonomi keluarga, penanganan bencana, penanggulangan kemiskinan, percepatan keberdayaan masyarakat, peningkatan prasarana dan sarana pedesaan/kelurahan, pemanfaatan sumber daya alam dan teknologi tepat guna, pengembangan sosial budaya masyarakat di desa dan kelurahan yang dibiayai APBN</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="pemerintahan_pembinaan_9" name="data[detail][pemerintahan][pembinaan][9]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="pemerintahan_pembinaan_10" class="col-sm-3 control-label">Pemberian penghargaan atas prestasi yang dilaksanakan pemerintahan desa dan kelurahan dalam penyelenggaraan pemerintahan dan lembaga kemasyarakatan</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="pemerintahan_pembinaan_10" name="data[detail][pemerintahan][pembinaan][10]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="pemerintahan_pembinaan_11" class="col-sm-3 control-label">Pemberian sanksi atas penyimpangan yang dilakukan kepala desa, lurah dan perangkat masing-masing</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="pemerintahan_pembinaan_11" name="data[detail][pemerintahan][pembinaan][11]" placeholder="Jumlah">
			</div>
		</div>

		<div class="form-group">
			<div class="col-md-12">
				<h4>2. Pembinaan Pemerintah Provinsi kepada Pemerintahan Desa dan Kelurahan</h4>
			</div>
		</div>
		<div class="form-group">
			<label for="pemerintahan_pppkpd_1" class="col-sm-3 control-label">Pedoman pelaksanaan tugas pembantuan dari provinsi ke desa/kelurahan</label>
			<div class="col-sm-5">
				<select class="form-control" id="pemerintahan_pppkpd_1" name="data[detail][pemerintahan][pppkpd][1]">
					<option value="Ada">Ada</option>
					<option value="Tidak">Tidak</option>
				</select>
			</div>
		</div>
		<div class="form-group">
			<label for="pemerintahan_pppkpd_2" class="col-sm-3 control-label">Pedoman bantuan keuangan dari provinsi</label>
			<div class="col-sm-5">
				<select class="form-control" id="pemerintahan_pppkpd_2" name="data[detail][pemerintahan][pppkpd][2]">
					<option value="Ada">Ada</option>
					<option value="Tidak">Tidak</option>
				</select>
			</div>
		</div>
		<div class="form-group">
			<label for="pemerintahan_pppkpd_3" class="col-sm-3 control-label">Kegiatan fasilitasi keberadaan kesatuan masyarakat hukum adat, nilai adat istiadat dan lembaga adat beserta hak dan kewajibannya dalam pelaksanaan pemerintahan desa/kelurahan</label>
			<div class="col-sm-5">
				<select class="form-control" id="pemerintahan_pppkpd_3" name="data[detail][pemerintahan][pppkpd][3]">
					<option value="Ada">Ada</option>
					<option value="Tidak">Tidak</option>
				</select>
			</div>
		</div>
		<div class="form-group">
			<label for="pemerintahan_pppkpd_4" class="col-sm-3 control-label">Fasilitasi Pelaksanaan pedoman administrasi, tata naskah dan pelaporan bagi kepala desa dan lurah</label>
			<div class="col-sm-5">
				<select class="form-control" id="pemerintahan_pppkpd_4" name="data[detail][pemerintahan][pppkpd][4]">
					<option value="Ada">Ada</option>
					<option value="Tidak">Tidak</option>
				</select>
			</div>
		</div>
		<div class="form-group">
			<label for="pemerintahan_pppkpd_5" class="col-sm-3 control-label">Jumlah kegiatan pendidikan dan pelatihan tentang penyelenggaraan pemerintahan desa dan kelurahan berskala provinsi</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="pemerintahan_pppkpd_5" name="data[detail][pemerintahan][pppkpd][5]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="pemerintahan_pppkpd_6" class="col-sm-3 control-label">Kegiatan penanggulangan kemiskinan yang dibiayai APBD Provinsi yang masuk desa dan kelurahan</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="pemerintahan_pppkpd_6" name="data[detail][pemerintahan][pppkpd][6]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="pemerintahan_pppkpd_7" class="col-sm-3 control-label">Kegiatan penanganan bencana yang dibiayai APBD Provinsi untuk desa dan kelurahan</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="pemerintahan_pppkpd_7" name="data[detail][pemerintahan][pppkpd][7]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="pemerintahan_pppkpd_8" class="col-sm-3 control-label">Kegiatan peningkatan pendapatan keluarga yang dibiayai APBD Provinsi di desa dan kelurahan</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="pemerintahan_pppkpd_8" name="data[detail][pemerintahan][pppkpd][8]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="pemerintahan_pppkpd_9" class="col-sm-3 control-label">Kegiatan penyediaan sarana dan prasarana desa dan kelurahan yang dibiayai APBD Provinsi yang masuk desa dan kelurahan</label>
			<div class="col-sm-5">
				<select class="form-control" id="pemerintahan_pppkpd_9" name="data[detail][pemerintahan][pppkpd][9][keterangan]">
					<option value="Ada">Ada</option>
					<option value="Tidak">Tidak</option>
				</select><br>
				<input type="text" class="form-control" id="pemerintahan_pppkpd_9" name="data[detail][pemerintahan][pppkpd][9][jumlah]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="pemerintahan_pppkpd_10" class="col-sm-3 control-label">Kegiatan pemanfaatan sumber daya alam dan pengembangan teknologi tepat guna yang dibiayai APBD Provinsi di desa dan kelurahan</label>
			<div class="col-sm-5">
				<select class="form-control" id="pemerintahan_pppkpd_10" name="data[detail][pemerintahan][pppkpd][10][keterangan]">
					<option value="Ada">Ada</option>
					<option value="Tidak">Tidak</option>
				</select><br>
				<input type="text" class="form-control" id="pemerintahan_pppkpd_10" name="data[detail][pemerintahan][pppkpd][10][jumlah]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="pemerintahan_pppkpd_11" class="col-sm-3 control-label">Kegiatan pengembangan sosial budaya masyarakat</label>
			<div class="col-sm-5">
				<select class="form-control" id="pemerintahan_pppkpd_11" name="data[detail][pemerintahan][pppkpd][11][keterangan]">
					<option value="Ada">Ada</option>
					<option value="Tidak">Tidak</option>
				</select><br>
				<input type="text" class="form-control" id="pemerintahan_pppkpd_11" name="data[detail][pemerintahan][pppkpd][11][jumlah]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="pemerintahan_pppkpd_12" class="col-sm-3 control-label">Pedoman pendataan dan pendayagunaan data profil desa dan kelurahan</label>
			<div class="col-sm-5">
				<select class="form-control" id="pemerintahan_pppkpd_12" name="data[detail][pemerintahan][pppkpd][12][keterangan]">
					<option value="Ada">Ada</option>
					<option value="Tidak">Tidak</option>
				</select><br>
				<input type="text" class="form-control" id="pemerintahan_pppkpd_12" name="data[detail][pemerintahan][pppkpd][12][jumlah]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="pemerintahan_pppkpd_13" class="col-sm-3 control-label">Pemberian sanksi atas penyimpangan yang dilakukan kepala desa, lurah dan perangkat masing-masing</label>
			<div class="col-sm-5">
				<select class="form-control" id="pemerintahan_pppkpd_13" name="data[detail][pemerintahan][pppkpd][13][keterangan]">
					<option value="Ada">Ada</option>
					<option value="Tidak">Tidak</option>
				</select><br>
				<input type="text" class="form-control" id="pemerintahan_pppkpd_13" name="data[detail][pemerintahan][pppkpd][13][jumlah]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="pemerintahan_pppkpd_14" class="col-sm-3 control-label">Pemberian penghargaan atas prestasi yang dilaksana</label>
			<div class="col-sm-5">
				<select class="form-control" id="pemerintahan_pppkpd_14" name="data[detail][pemerintahan][pppkpd][14][keterangan]">
					<option value="Ada">Ada</option>
					<option value="Tidak">Tidak</option>
				</select><br>
				<input type="text" class="form-control" id="pemerintahan_pppkpd_14" name="data[detail][pemerintahan][pppkpd][14][jumlah]" placeholder="Jumlah">
			</div>
		</div>

		<div class="form-group">
			<div class="col-md-12">
				<h4>3. Pembinaan Pemerintah Kabupaten/Kota kepada Pemerintahan Desa dan Kelurahan</h4>
			</div>
		</div>
		<div class="form-group">
			<label for="pemerintahan_ppkkpd_1" class="col-sm-3 control-label">Pelimpahan tugas Bupati/Walikota kepada Lurah dan Kepala Desa</label>
			<div class="col-sm-5">
				<select class="form-control" id="pemerintahan_ppkkpd_1" name="data[detail][pemerintahan][ppkkpd][1][keterangan]">
					<option value="Ada">Ada</option>
					<option value="Tidak">Tidak</option>
				</select><br>
				<input type="text" class="form-control" id="pemerintahan_ppkkpd_1" name="data[detail][pemerintahan][ppkkpd][1][jumlah]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="pemerintahan_ppkkpd_2" class="col-sm-3 control-label">Penetapan pengaturan kewenangan kabupaten/kota yang diserahkan pengaturannya kepada desa</label>
			<div class="col-sm-5">
				<select class="form-control" id="pemerintahan_ppkkpd_2" name="data[detail][pemerintahan][ppkkpd][2][keterangan]">
					<option value="Ada">Ada</option>
					<option value="Tidak">Tidak</option>
				</select><br>
				<input type="text" class="form-control" id="pemerintahan_ppkkpd_2" name="data[detail][pemerintahan][ppkkpd][2][jumlah]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="pemerintahan_ppkkpd_3" class="col-sm-3 control-label">Pedoman pelaksanaan tugas pembantuan dari kabupaten/kota kepada desa</label>
			<div class="col-sm-5">
				<select class="form-control" id="pemerintahan_ppkkpd_3" name="data[detail][pemerintahan][ppkkpd][3][keterangan]">
					<option value="Ada">Ada</option>
					<option value="Tidak">Tidak</option>
				</select><br>
				<input type="text" class="form-control" id="pemerintahan_ppkkpd_3" name="data[detail][pemerintahan][ppkkpd][3][jumlah]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="pemerintahan_ppkkpd_4" class="col-sm-3 control-label">Pedoman teknis penyusunan peraturan desa, peraturan kepala desa, keputusan Lurah dan peraturan daerah kepada kepala desa dan lurah.</label>
			<div class="col-sm-5">
				<select class="form-control" id="pemerintahan_ppkkpd_4" name="data[detail][pemerintahan][ppkkpd][4][keterangan]">
					<option value="Ada">Ada</option>
					<option value="Tidak">Tidak</option>
				</select><br>
				<input type="text" class="form-control" id="pemerintahan_ppkkpd_4" name="data[detail][pemerintahan][ppkkpd][4][jumlah]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="pemerintahan_ppkkpd_5" class="col-sm-3 control-label">Pedoman teknis penyusunan perencanaan pembangunan partisipatif serta pengembangan lembaga kemasyarakatan desa dan kelurahan</label>
			<div class="col-sm-5">
				<select class="form-control" id="pemerintahan_ppkkpd_5" name="data[detail][pemerintahan][ppkkpd][5][keterangan]">
					<option value="Ada">Ada</option>
					<option value="Tidak">Tidak</option>
				</select><br>
				<input type="text" class="form-control" id="pemerintahan_ppkkpd_5" name="data[detail][pemerintahan][ppkkpd][5][jumlah]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="pemerintahan_ppkkpd_6" class="col-sm-3 control-label">Kegiatan fasilitasi keberadaan kesatuan masyarakat hukum adat, nilai adat istiadat dan lembaga adat beserta hak dan kewajibannya dalam pelaksanaan pemerintahan desa/kelurahan</label>
			<div class="col-sm-5">
				<select class="form-control" id="pemerintahan_ppkkpd_6" name="data[detail][pemerintahan][ppkkpd][6][keterangan]">
					<option value="Ada">Ada</option>
					<option value="Tidak">Tidak</option>
				</select><br>
				<input type="text" class="form-control" id="pemerintahan_ppkkpd_6" name="data[detail][pemerintahan][ppkkpd][6][jumlah]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="pemerintahan_ppkkpd_7" class="col-sm-3 control-label">Penetapan pembiayaan alokasi dana perimbangan untuk desa</label>
			<div class="col-sm-5">
				<select class="form-control" id="pemerintahan_ppkkpd_7" name="data[detail][pemerintahan][ppkkpd][7][keterangan]">
					<option value="Ada">Ada</option>
					<option value="Tidak">Tidak</option>
				</select><br>
				<input type="text" class="form-control" id="pemerintahan_ppkkpd_7" name="data[detail][pemerintahan][ppkkpd][7][jumlah]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="pemerintahan_ppkkpd_8" class="col-sm-3 control-label">Fasilitasi Pelaksanaan pedoman administrasi, tata naskah dan pelaporan bagi kepala desa dan lurah</label>
			<div class="col-sm-5">
				<select class="form-control" id="pemerintahan_ppkkpd_8" name="data[detail][pemerintahan][ppkkpd][8][keterangan]">
					<option value="Ada">Ada</option>
					<option value="Tidak">Tidak</option>
				</select><br>
				<input type="text" class="form-control" id="pemerintahan_ppkkpd_8" name="data[detail][pemerintahan][ppkkpd][8][jumlah]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="pemerintahan_ppkkpd_9" class="col-sm-3 control-label">Jumlah kegiatan pendidikan dan pelatihan tentang penyelenggaraan pemerintahan desa dan kelurahan berskala kabupaten/kota</label>
			<div class="col-sm-5">
				<select class="form-control" id="pemerintahan_ppkkpd_9" name="data[detail][pemerintahan][ppkkpd][9][keterangan]">
					<option value="Ada">Ada</option>
					<option value="Tidak">Tidak</option>
				</select><br>
				<input type="text" class="form-control" id="pemerintahan_ppkkpd_9" name="data[detail][pemerintahan][ppkkpd][9][jumlah]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="pemerintahan_ppkkpd_10" class="col-sm-3 control-label">Kegiatan penanggulangan kemiskinan yang dibiayai APBD kabupaten/kota yang masuk desa dan kelurahan</label>
			<div class="col-sm-5">
				<select class="form-control" id="pemerintahan_ppkkpd_10" name="data[detail][pemerintahan][ppkkpd][10][keterangan]">
					<option value="Ada">Ada</option>
					<option value="Tidak">Tidak</option>
				</select><br>
				<input type="text" class="form-control" id="pemerintahan_ppkkpd_10" name="data[detail][pemerintahan][ppkkpd][10][jumlah]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="pemerintahan_ppkkpd_11" class="col-sm-3 control-label">Kegiatan penanganan bencana yang dibiayai APBD kabupaten/kota untuk desa dan kelurahan</label>
			<div class="col-sm-5">
				<select class="form-control" id="pemerintahan_ppkkpd_11" name="data[detail][pemerintahan][ppkkpd][11][keterangan]">
					<option value="Ada">Ada</option>
					<option value="Tidak">Tidak</option>
				</select><br>
				<input type="text" class="form-control" id="pemerintahan_ppkkpd_11" name="data[detail][pemerintahan][ppkkpd][11][jumlah]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="pemerintahan_ppkkpd_12" class="col-sm-3 control-label">Kegiatan peningkatan pendapatan keluarga yang dibiayai APBD kabupaten/kota di desa dan kelurahan</label>
			<div class="col-sm-5">
				<select class="form-control" id="pemerintahan_ppkkpd_12" name="data[detail][pemerintahan][ppkkpd][12][keterangan]">
					<option value="Ada">Ada</option>
					<option value="Tidak">Tidak</option>
				</select><br>
				<input type="text" class="form-control" id="pemerintahan_ppkkpd_12" name="data[detail][pemerintahan][ppkkpd][12][jumlah]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="pemerintahan_ppkkpd_13" class="col-sm-3 control-label">Fasilitasi penetapan pedoman dan standar tanda jabatan, pakaian dinas dan atribut bagi Kepala Desa, Lurah, Perangkat Desa/Kelurahan dan BPD</label>
			<div class="col-sm-5">
				<select class="form-control" id="pemerintahan_ppkkpd_13" name="data[detail][pemerintahan][ppkkpd][13][keterangan]">
					<option value="Ada">Ada</option>
					<option value="Tidak">Tidak</option>
				</select><br>
				<input type="text" class="form-control" id="pemerintahan_ppkkpd_13" name="data[detail][pemerintahan][ppkkpd][13][jumlah]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="pemerintahan_ppkkpd_14" class="col-sm-3 control-label">Kegiatan fasilitasi keberadaan kesatuan masyarakat hukum adat, nilai adat istiadat dan lembaga adat beserta hak dan kewajibannya dalam pelaksanaan pemerintahan desa/kelurahan</label>
			<div class="col-sm-5">
				<select class="form-control" id="pemerintahan_ppkkpd_14" name="data[detail][pemerintahan][ppkkpd][14][keterangan]">
					<option value="Ada">Ada</option>
					<option value="Tidak">Tidak</option>
				</select><br>
				<input type="text" class="form-control" id="pemerintahan_ppkkpd_14" name="data[detail][pemerintahan][ppkkpd][14][jumlah]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="pemerintahan_ppkkpd_15" class="col-sm-3 control-label">Pedoman pendataan dan pendayagunaan profil desa dan kelurahan</label>
			<div class="col-sm-5">
				<select class="form-control" id="pemerintahan_ppkkpd_15" name="data[detail][pemerintahan][ppkkpd][15][keterangan]">
					<option value="Ada">Ada</option>
					<option value="Tidak">Tidak</option>
				</select><br>
				<input type="text" class="form-control" id="pemerintahan_ppkkpd_15" name="data[detail][pemerintahan][ppkkpd][15][jumlah]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="pemerintahan_ppkkpd_16" class="col-sm-3 control-label">Program dan kegiatan pemeliharaan motivasi desa/kelurahan berprestasi pascaperlombaan desa dan kelurahan</label>
			<div class="col-sm-5">
				<select class="form-control" id="pemerintahan_ppkkpd_16" name="data[detail][pemerintahan][ppkkpd][16][keterangan]">
					<option value="Ada">Ada</option>
					<option value="Tidak">Tidak</option>
				</select><br>
				<input type="text" class="form-control" id="pemerintahan_ppkkpd_16" name="data[detail][pemerintahan][ppkkpd][16][jumlah]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="pemerintahan_ppkkpd_17" class="col-sm-3 control-label">Pemberian penghargaan atas prestasi yang dicapai pemerintahan desa dan kelurahan dalam penyelenggaraan pemerintahan dan pemberdayaan lembaga kemasyarakatan</label>
			<div class="col-sm-5">
				<select class="form-control" id="pemerintahan_ppkkpd_17" name="data[detail][pemerintahan][ppkkpd][17][keterangan]">
					<option value="Ada">Ada</option>
					<option value="Tidak">Tidak</option>
				</select><br>
				<input type="text" class="form-control" id="pemerintahan_ppkkpd_17" name="data[detail][pemerintahan][ppkkpd][17][jumlah]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="pemerintahan_ppkkpd_18" class="col-sm-3 control-label">Pemberian sanksi atas penyimpangan yang dilakukan kepala desa, lurah dan perangkat masing-masing</label>
			<div class="col-sm-5">
				<select class="form-control" id="pemerintahan_ppkkpd_18" name="data[detail][pemerintahan][ppkkpd][18][keterangan]">
					<option value="Ada">Ada</option>
					<option value="Tidak">Tidak</option>
				</select><br>
				<input type="text" class="form-control" id="pemerintahan_ppkkpd_18" name="data[detail][pemerintahan][ppkkpd][18][jumlah]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="pemerintahan_ppkkpd_19" class="col-sm-3 control-label">Mengawasi pengelolaan keuangan desa serta anggaran kelurahan dan pendayagunaan aset pemerintahan desa, badan usaha milik desa dan sumber pendapatan daerah yang dikelola lurah</label>
			<div class="col-sm-5">
				<select class="form-control" id="pemerintahan_ppkkpd_19" name="data[detail][pemerintahan][ppkkpd][19][keterangan]">
					<option value="Ada">Ada</option>
					<option value="Tidak">Tidak</option>
				</select><br>
				<input type="text" class="form-control" id="pemerintahan_ppkkpd_19" name="data[detail][pemerintahan][ppkkpd][19][jumlah]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="pemerintahan_ppkkpd_lainnya" class="col-sm-3 control-label">Lainnya</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="pemerintahan_ppkkpd_lainnya" name="data[detail][pemerintahan][ppkkpd][lainnya][keterangan]" placeholder="Keterangan"><br>
				<select class="form-control" id="pemerintahan_ppkkpd_lainnya" name="data[detail][pemerintahan][ppkkpd][lainnya][status]">
					<option value="Ada">Ada</option>
					<option value="Tidak">Tidak</option>
				</select><br>
				<input type="text" class="form-control" id="pemerintahan_ppkkpd_lainnya" name="data[detail][pemerintahan][ppkkpd][lainnya][jumlah]" placeholder="Jumlah">
			</div>
		</div>

		<div class="form-group">
			<div class="col-md-12">
				<h4>4. Pembinaan dan Pengawasan Camat kepada Desa/Kelurahan</h4>
			</div>
		</div>
		<div class="form-group">
			<label for="pemerintahan_ppckd_1" class="col-sm-3 control-label">Jumlah Kegiatan fasilitasi penyusunan peraturan desa dan peraturan kepala desa</label>
			<div class="col-sm-5">
				<select class="form-control" id="pemerintahan_ppckd_1" name="data[detail][pemerintahan][ppckd][1][keterangan]">
					<option value="Ada">Ada</option>
					<option value="Tidak">Tidak</option>
				</select><br>
				<input type="text" class="form-control" id="pemerintahan_ppckd_1" name="data[detail][pemerintahan][ppckd][1][jumlah]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="pemerintahan_ppckd_2" class="col-sm-3 control-label">Jumlah Kegiatan fasilitasi administrasi tata pemerintahan desa dan kelurahan</label>
			<div class="col-sm-5">
				<select class="form-control" id="pemerintahan_ppckd_2" name="data[detail][pemerintahan][ppckd][2][keterangan]">
					<option value="Ada">Ada</option>
					<option value="Tidak">Tidak</option>
				</select><br>
				<input type="text" class="form-control" id="pemerintahan_ppckd_2" name="data[detail][pemerintahan][ppckd][2][jumlah]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="pemerintahan_ppckd_3" class="col-sm-3 control-label">Fasilitasi pengelolaan keuangan desa dan pendayagunaan aset desa serta anggaran kelurahan</label>
			<div class="col-sm-5">
				<select class="form-control" id="pemerintahan_ppckd_3" name="data[detail][pemerintahan][ppckd][3][keterangan]">
					<option value="Ada">Ada</option>
					<option value="Tidak">Tidak</option>
				</select><br>
				<input type="text" class="form-control" id="pemerintahan_ppckd_3" name="data[detail][pemerintahan][ppckd][3][jumlah]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="pemerintahan_ppckd_4" class="col-sm-3 control-label">Jumlah kegiatan fasilitasi pelaksanaan urusan otonomi daerah kabupaten/kota yang diserahkan kepada desa</label>
			<div class="col-sm-5">
				<select class="form-control" id="pemerintahan_ppckd_4" name="data[detail][pemerintahan][ppckd][4][keterangan]">
					<option value="Ada">Ada</option>
					<option value="Tidak">Tidak</option>
				</select><br>
				<input type="text" class="form-control" id="pemerintahan_ppckd_4" name="data[detail][pemerintahan][ppckd][4][jumlah]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="pemerintahan_ppckd_5" class="col-sm-3 control-label">Fasilitasi penerapan dan penegakan peraturan perundang- undangan</label>
			<div class="col-sm-5">
				<select class="form-control" id="pemerintahan_ppckd_5" name="data[detail][pemerintahan][ppckd][5][keterangan]">
					<option value="Ada">Ada</option>
					<option value="Tidak">Tidak</option>
				</select><br>
				<input type="text" class="form-control" id="pemerintahan_ppckd_5" name="data[detail][pemerintahan][ppckd][5][jumlah]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="pemerintahan_ppckd_6" class="col-sm-3 control-label">Fasilitasi penyediaan data dan pendayagunaan data profil desa dan kelurahan </label>
			<div class="col-sm-5">
				<select class="form-control" id="pemerintahan_ppckd_6" name="data[detail][pemerintahan][ppckd][6][keterangan]">
					<option value="Ada">Ada</option>
					<option value="Tidak">Tidak</option>
				</select><br>
				<input type="text" class="form-control" id="pemerintahan_ppckd_6" name="data[detail][pemerintahan][ppckd][6][jumlah]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="pemerintahan_ppckd_7" class="col-sm-3 control-label">Jumlah kegiatan fasilitasi pelaksanaan tugas, wewenang, fungsi, hak dan kewajiban kepala desa, BPD, Lurah dan lembaga kemasyarakatan</label>
			<div class="col-sm-5">
				<select class="form-control" id="pemerintahan_ppckd_7" name="data[detail][pemerintahan][ppckd][7][keterangan]">
					<option value="Ada">Ada</option>
					<option value="Tidak">Tidak</option>
				</select><br>
				<input type="text" class="form-control" id="pemerintahan_ppckd_7" name="data[detail][pemerintahan][ppckd][7][jumlah]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="pemerintahan_ppckd_8" class="col-sm-3 control-label">Jumlah kegiatan fasilitasi upaya penyelenggaraan ketenteraman dan ketertiban umum</label>
			<div class="col-sm-5">
				<select class="form-control" id="pemerintahan_ppckd_8" name="data[detail][pemerintahan][ppckd][8][keterangan]">
					<option value="Ada">Ada</option>
					<option value="Tidak">Tidak</option>
				</select><br>
				<input type="text" class="form-control" id="pemerintahan_ppckd_8" name="data[detail][pemerintahan][ppckd][8][jumlah]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="pemerintahan_ppckd_9" class="col-sm-3 control-label">Fasilitasi penataan, penguatan dan efektivitas pelaksanaan</label>
			<div class="col-sm-5">
				<select class="form-control" id="pemerintahan_ppckd_9" name="data[detail][pemerintahan][ppckd][9][keterangan]">
					<option value="Ada">Ada</option>
					<option value="Tidak">Tidak</option>
				</select><br>
				<input type="text" class="form-control" id="pemerintahan_ppckd_9" name="data[detail][pemerintahan][ppckd][9][jumlah]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="pemerintahan_ppckd_10" class="col-sm-3 control-label">tugas, fungsi dan kewajiban lembaga kemasyarakatan desa dan kelurahan</label>
			<div class="col-sm-5">
				<select class="form-control" id="pemerintahan_ppckd_10" name="data[detail][pemerintahan][ppckd][10][keterangan]">
					<option value="Ada">Ada</option>
					<option value="Tidak">Tidak</option>
				</select><br>
				<input type="text" class="form-control" id="pemerintahan_ppckd_10" name="data[detail][pemerintahan][ppckd][10][jumlah]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="pemerintahan_ppckd_11" class="col-sm-3 control-label">Jumlah kegiatan fasilitasi partisipasi masyarakat dalam perencanaan, pelaksanaan, pemanfaatan dan pemeliharaan serta pengembangan dan pelestarian hasil pembangunan.</label>
			<div class="col-sm-5">
				<select class="form-control" id="pemerintahan_ppckd_11" name="data[detail][pemerintahan][ppckd][11][keterangan]">
					<option value="Ada">Ada</option>
					<option value="Tidak">Tidak</option>
				</select><br>
				<input type="text" class="form-control" id="pemerintahan_ppckd_11" name="data[detail][pemerintahan][ppckd][11][jumlah]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="pemerintahan_ppckd_12" class="col-sm-3 control-label">Fasilitasi kerjasama antar desa/kelurahan dan kerjasama desa/kelurahan dengan pihak ketiga</label>
			<div class="col-sm-5">
				<select class="form-control" id="pemerintahan_ppckd_12" name="data[detail][pemerintahan][ppckd][12][keterangan]">
					<option value="Ada">Ada</option>
					<option value="Tidak">Tidak</option>
				</select><br>
				<input type="text" class="form-control" id="pemerintahan_ppckd_12" name="data[detail][pemerintahan][ppckd][12][jumlah]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="pemerintahan_ppckd_13" class="col-sm-3 control-label">Jumlah kegiatan fasilitasi pelaksanaan program dankegiatan pemberdayaan masyarakat</label>
			<div class="col-sm-5">
				<select class="form-control" id="pemerintahan_ppckd_13" name="data[detail][pemerintahan][ppckd][13][keterangan]">
					<option value="Ada">Ada</option>
					<option value="Tidak">Tidak</option>
				</select><br>
				<input type="text" class="form-control" id="pemerintahan_ppckd_13" name="data[detail][pemerintahan][ppckd][13][jumlah]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="pemerintahan_ppckd_14" class="col-sm-3 control-label">Jumlah kegiatan pemeliharaan motivasi bagi desa dan kelurahan juara perlombaan dan pasca perlombaan</label>
			<div class="col-sm-5">
				<select class="form-control" id="pemerintahan_ppckd_14" name="data[detail][pemerintahan][ppckd][14][keterangan]">
					<option value="Ada">Ada</option>
					<option value="Tidak">Tidak</option>
				</select><br>
				<input type="text" class="form-control" id="pemerintahan_ppckd_14" name="data[detail][pemerintahan][ppckd][14][jumlah]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="pemerintahan_ppckd_15" class="col-sm-3 control-label">Jumlah kegiatan fasilitasi kerjasama antar lembaga kemasyarakatan dan lembaga kemasyarakatan dengan organisasi anggota lembaga kemasyarakatan serta dengan pihak ketiga sebagai mitra percepatan keberdayaan masyarakat</label>
			<div class="col-sm-5">
				<select class="form-control" id="pemerintahan_ppckd_15" name="data[detail][pemerintahan][ppckd][15][keterangan]">
					<option value="Ada">Ada</option>
					<option value="Tidak">Tidak</option>
				</select><br>
				<input type="text" class="form-control" id="pemerintahan_ppckd_15" name="data[detail][pemerintahan][ppckd][15][jumlah]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="pemerintahan_ppckd_16" class="col-sm-3 control-label">Jumlah kegiatan fasilitasi bantuan teknis dan pendampingan kepada lembaga kemasyarakatan dan organisasi anggotanya</label>
			<div class="col-sm-5">
				<select class="form-control" id="pemerintahan_ppckd_16" name="data[detail][pemerintahan][ppckd][16][keterangan]">
					<option value="Ada">Ada</option>
					<option value="Tidak">Tidak</option>
				</select><br>
				<input type="text" class="form-control" id="pemerintahan_ppckd_16" name="data[detail][pemerintahan][ppckd][16][jumlah]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="pemerintahan_ppckd_17" class="col-sm-3 control-label">Jumlah kegiatan koordinasi unit kerja pemerintahan dalam pengembangan lembaga kemasyarakatan desa/kelurahan.</label>
			<div class="col-sm-5">
				<select class="form-control" id="pemerintahan_ppckd_17" name="data[detail][pemerintahan][ppckd][17][keterangan]">
					<option value="Ada">Ada</option>
					<option value="Tidak">Tidak</option>
				</select><br>
				<input type="text" class="form-control" id="pemerintahan_ppckd_17" name="data[detail][pemerintahan][ppckd][17][jumlah]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="pemerintahan_ppckd_lainnya1" class="col-sm-3 control-label">Lainnya 1</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="pemerintahan_ppckd_lainnya1" name="data[detail][pemerintahan][ppckd][lainnya1][keterangan]" placeholder="Keterangan"><br>
				<select class="form-control" id="pemerintahan_ppckd_lainnya1" name="data[detail][pemerintahan][ppckd][lainnya1][status]">
					<option value="Ada">Ada</option>
					<option value="Tidak">Tidak</option>
				</select><br>
				<input type="text" class="form-control" id="pemerintahan_ppckd_lainnya1" name="data[detail][pemerintahan][ppckd][lainnya1][jumlah]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="pemerintahan_ppckd_lainnya2" class="col-sm-3 control-label">Lainnya 2</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="pemerintahan_ppckd_lainnya2" name="data[detail][pemerintahan][ppckd][lainnya2][keterangan]" placeholder="Keterangan"><br>
				<select class="form-control" id="pemerintahan_ppckd_lainnya2" name="data[detail][pemerintahan][ppckd][lainnya2][status]">
					<option value="Ada">Ada</option>
					<option value="Tidak">Tidak</option>
				</select><br>
				<input type="text" class="form-control" id="pemerintahan_ppckd_lainnya2" name="data[detail][pemerintahan][ppckd][lainnya2][jumlah]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<label for="pemerintahan_ppckd_lainnya3" class="col-sm-3 control-label">Lainnya 3</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="pemerintahan_ppckd_lainnya3" name="data[detail][pemerintahan][ppckd][lainnya3][keterangan]" placeholder="Keterangan"><br>
				<select class="form-control" id="pemerintahan_ppckd_lainnya3" name="data[detail][pemerintahan][ppckd][lainnya3][status]">
					<option value="Ada">Ada</option>
					<option value="Tidak">Tidak</option>
				</select><br>
				<input type="text" class="form-control" id="pemerintahan_ppckd_lainnya3" name="data[detail][pemerintahan][ppckd][lainnya3][jumlah]" placeholder="Jumlah">
			</div>
		</div>

		<div class="form-group">
			<div class="col-sm-5 col-sm-offset-2">
				<button type="submit" class="btn btn-lg btn-success"><i class="entypo-check"></i> Simpan</button>
				<a href="<?php echo base_url('perkembangan_desa') ?>" class="btn btn-lg btn-red pull-right"><i class="entypo-back"></i> Kembali</a>
			</div>
		</div>
	</form>

	<script type="text/javascript">
		jQuery(document).ready(function($){
			$('#kabupaten_id').select2({
				minimumInputLength: 3,
				allowClear: false,
				minimumResultsForSearch: 10,
				ajax: {
					url: "<?php echo base_url('perkembangan_desa/get_lokasi') ?>",
					dataType: 'json',
					data: function (term, page) {
						return{
							where: 'kabupaten',
							provinsi_id: $('#provinsi_id').val(),
							term: term,
						}
					},
					results: function (data, page) {
						return {
							results: data
						};
					}
				}
			});
			$('#kecamatan_id').select2({
				minimumInputLength: 3,
				allowClear: false,
				minimumResultsForSearch: 10,
				ajax: {
					url: "<?php echo base_url('perkembangan_desa/get_lokasi') ?>",
					dataType: 'json',
					data: function (term, page) {
						return{
							where: 'kecamatan',
							kabupaten_id: $('#kabupaten_id').val(),
							term: term,
						}
					},
					results: function (data, page) {
						return {
							results: data
						};
					}
				}
			});
			$('#desa_id').select2({
				minimumInputLength: 3,
				allowClear: false,
				minimumResultsForSearch: 10,
				ajax: {
					url: "<?php echo base_url('perkembangan_desa/get_lokasi') ?>",
					dataType: 'json',
					data: function (term, page) {
						return{
							where: 'desa',
							kecamatan_id: $('#kecamatan_id').val(),
							term: term,
						}
					},
					results: function (data, page) {
						return {
							results: data
						};
					}
				}
			});

			<?php if(!empty($this->session->userdata('kabupaten_id'))): ?> $('#kabupaten_id').select2('data', <?php echo json_encode(array('id'=>$this->session->userdata('kabupaten_id'), 'text'=>$this->session->userdata('kabupaten'))) ?>); <?php endif ?>
			<?php if(!empty($this->session->userdata('kecamatan_id'))): ?> $('#kecamatan_id').select2('data', <?php echo json_encode(array('id'=>$this->session->userdata('kecamatan_id'), 'text'=>$this->session->userdata('kecamatan'))) ?>); <?php endif ?>
			<?php if(!empty($this->session->userdata('desa_id'))): ?> $('#desa_id').select2('data', <?php echo json_encode(array('id'=>$this->session->userdata('desa_id'), 'text'=>$this->session->userdata('desa'))) ?>); <?php endif ?>
		});
	</script>
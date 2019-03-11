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
			<div class="col-md-12">
				<h3 style="color:#4CAF50;">1. IDENTITAS DESA</h3>
			</div>
		</div>
		<div class="form-group">
			<label for="nomor_kartu_keluarga" class="col-sm-3 control-label">101. Nama Informan<span class="text-danger">*</span></label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="nomor_kartu_keluarga" name="data[nomor_kartu_keluarga]" placeholder="Nama Informan" required>
			</div>
		</div>
		<div class="form-group">
			<label for="nama_kepala_keluarga" class="col-sm-3 control-label">102. Jabatan</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="nama_kepala_keluarga" name="data[nama_kepala_keluarga]" placeholder="Jabatan">
			</div>
		</div>
			<div class="form-group">
			<label for="dusun" class="col-sm-3 control-label">103. No. Telepon Rumah / Hp</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="dusun" name="data[dusun]" placeholder="No. Telepon Rumah / Hp">
			</div>
		</div>
		<div class="form-group">
			<label for="tanggal" class="col-sm-3 control-label">104. Tanggal Lahir</label>
			<div class="col-sm-6">
				<input type="text" class="form-control datepicker" data-format="dd-mm-yyyy" id="tanggal" name="data[tanggal]" placeholder="Tanggal Lahir" >
			</div>
		</div>
		<div class="form-group">
			<label for="anggota1_jenis_kelamin" class="col-sm-3 control-label">105. Jenis Kelamin<span class="text-danger">*</span></label>
			<div class="col-sm-5">
				<select class="form-control" name="data[anggota][0][jenis_kelamin]" id="anggota1_jenis_kelamin" required>
					<option value="">Pilih Jenis Kelamin</option>
					<option value="laki">Laki-laki</option>
					<option value="perempuan">Perempuan</option>
				</select>
			</div>
		</div>
		<div class="form-group">
			<label for="provinsi_id" class="col-sm-3 control-label">106. Provinsi<span class="text-danger">*</span></label>
			<div class="col-sm-5">
				<?php if(!empty($this->session->userdata('provinsi_id'))): ?>
					<input type="hidden" name="data[provinsi_id]" value="<?php echo $this->session->userdata('provinsi_id') ?>" />
				<?php endif ?>
				<select required name="data[provinsi_id]" class="form-control select2" id="provinsi_id" placeholder="provinsi" data-validate="required" data-message-required="kolom provinsi tidak boleh kosong." <?php echo !empty($this->session->userdata('provinsi_id')) ? 'disabled' : "" ?>>
					<option></option>
				<?php foreach ($list_provinsi as $provinsi): ?>
					<option value="<?php echo $provinsi->provinsi_code ?>" <?php echo $provinsi->provinsi_code == $this->session->userdata('provinsi_id') ? "selected" : "" ?>><?php echo $provinsi->provinsi_code ?> - <?php echo $provinsi->provinsi_name ?></option>
				<?php endforeach ?>
				</select>
			</div>
		</div>
		<div class="form-group">
			<label for="kabupaten_id" class="col-sm-3 control-label">107. Kabupaten<span class="text-danger">*</span></label>
			<div class="col-sm-5">
				<input type="text" required name="data[kabupaten_id]" class="form-control" id="kabupaten_id" placeholder="kabupaten" <?php echo !empty($this->session->userdata('kabupaten_id')) ? 'readonly' : "" ?>>
			</div>
		</div>
		<div class="form-group">
			<label for="kecamatan_id" class="col-sm-3 control-label">108. Kecamatan<span class="text-danger">*</span></label>
			<div class="col-sm-5">
				<input type="text" required name="data[kecamatan_id]" class="form-control" id="kecamatan_id" placeholder="kecamatan" <?php echo !empty($this->session->userdata('kecamatan_id')) ? 'readonly' : "" ?>>
			</div>
		</div>
		<div class="form-group">
			<label for="desa_id" class="col-sm-3 control-label">109. Desa<span class="text-danger">*</span></label>
			<div class="col-sm-5">
				<input type="text" required name="data[desa_id]" class="form-control" id="desa_id" placeholder="desa" <?php echo !empty($this->session->userdata('desa_id')) ? 'readonly' : "" ?>>
			</div>
		</div>
		<div class="form-group">
			<label for="rtrw" class="col-sm-3 control-label">110. Titik Koordinat Desa</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="rtrw" name="data[rtrw]" placeholder="Garis Lintang"> <br>
				<input type="text" class="form-control" id="anggota1_galian_aluminium" name="data[anggota][0][galian][aluminium][pemasaran]" placeholder="Garis Bujur">
			</div>
		</div>
		<div class="form-group">
			<label for="alamat" class="col-sm-3 control-label">111. Alamat Lengkap</label>
			<div class="col-sm-5">
				<textarea name="data[alamat]" id="alamat" rows="5" class="form-control" placeholder="Alamat Lengkap"></textarea>
			</div>
		</div>
		<div class="form-group">
			<label for="pengisi" class="col-sm-3 control-label">112.a. Nama Kepala Desa<span class="text-danger">*</span></label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="pengisi" name="data[detail][pengisi]" placeholder="Nama Kepala Desa" required>
			</div>
		</div>
		<div class="form-group">
			<label for="keluarga_lahan_pangan" class="col-sm-3 control-label">112. b. Jenis Kelamin Kepala Desa<span class="text-danger">*</span></label>
			<div class="col-sm-5">
				<select class="form-control" name="data[detail][keluarga][lahan][pangan]" id="keluarga_lahan_pangan" required>
					<option value="Jenis Kelamin">Jenis Kelamin</option>
					<option value="laki">Laki-laki</option>
					<option value="perempuan">Perempuan</option>
				</select>
			</div>
		</div>
		<div class="form-group">
			<label for="pekerjaan" class="col-sm-3 control-label">113. No. Telepon Rumah / Hp Kepala Desa
</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="pekerjaan" name="data[detail][pekerjaan]" placeholder="No. Telepon Rumah / Hp Kepala Desa">
			</div>
		</div>
		<div class="form-group">
			<label for="jabatan" class="col-sm-3 control-label">114. No. Telepon Kantor Desa</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="jabatan" name="data[detail][jabatan]" placeholder="No. Telepon Kantor Desa">
			</div>
		</div>
		<div class="form-group">
			<label for="sumber_data" class="col-sm-3 control-label">115. Email Desa</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="sumber_data" name="data[detail][sumber_data][4]" placeholder="Email Desa">
			</div>
		</div>
		<div class="form-group">
			<label for="keluarga_lahan_kebun" class="col-sm-3 control-label">116. Pendidikan Terakhir Kepala Desa</label>
			<div class="col-sm-5">
				<select class="form-control" name="data[detail][keluarga][lahan][kebun]" id="keluarga_lahan_kebun">
					<option value="Tidak memiliki">Pendidikan Terakhir</option>
					<option value="Tamat S1 / D4 / D3 / sederajat">Tamat S1 / D4 / D3 / sederajat</option>
					<option value="Tamat SMA /sederajat">Tamat SMA /sederajat</option>
					<option value="Tamat SMP /sederajat">Tamat SMP /sederajat</option>
					<option value="Tamat SD /sederajat">Tamat SD /sederajat</option>
					<option value="TTidak sekolah">Tidak sekolah</option>
				</select>
			</div>
		</div>
		<div class="form-group">
			<label for="keluarga_penghasilan" class="col-sm-3 control-label">117. Lama menjabat sebagai kepala desa</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="keluarga_penghasilan" name="data[detail][keluarga][penghasilan]" placeholder="Lama menjabat sebagai kepala desa">
			</div>
		</div>
		<div class="form-group">
			<div class="col-md-12">118. Apakah terdapat aparatur pemerintahan Desa sebagai berikut:
			</div>
		</div>
				<div class="form-group">
			<label for="keluarga_penyakit_keluarga_lainnya1" class="col-sm-3 control-label">a.Sekretaris Desa</label>
			<div class="col-sm-5">
				<input type="number" class="form-control" id="keluarga_penyakit_keluarga_lainnya1" name="data[detail][keluarga][penyakit_keluarga][lainnya1][keterangan]" placeholder="Jumlah Laki-Laki"><br>
				<input type="number" class="form-control" id="keluarga_penyakit_keluarga_lainnya1" name="data[detail][keluarga][penyakit_keluarga][lainnya1][jumlah]" placeholder="Jumlah Perempuan">
			</div>
		</div>
		<div class="form-group">
			<label for="keluarga_penyakit_keluarga_lainnya2" class="col-sm-3 control-label">b. Kepala Urusan tata usaha dan umum</label>
			<div class="col-sm-5">
				<input type="number" class="form-control" id="keluarga_penyakit_keluarga_lainnya2" name="data[detail][keluarga][penyakit_keluarga][lainnya2][keterangan]" placeholder="Jumlah Laki-Laki"><br>
				<input type="number" class="form-control" id="keluarga_penyakit_keluarga_lainnya2" name="data[detail][keluarga][penyakit_keluarga][lainnya2][jumlah]" placeholder="Jumlah Perempuan">
			</div>
		</div>
		<div class="form-group">
			<label for="keluarga_penyakit_keluarga_lainnya3" class="col-sm-3 control-label">c. Kepala urusan keuangan</label>
			<div class="col-sm-5">
				<input type="number" class="form-control" id="keluarga_penyakit_keluarga_lainnya3" name="data[detail][keluarga][penyakit_keluarga][lainnya3][keterangan]" placeholder="Jumlah Laki-Laki"><br>
				<input type="number" class="form-control" id="keluarga_penyakit_keluarga_lainnya3" name="data[detail][keluarga][penyakit_keluarga][lainnya3][jumlah]" placeholder="Jumlah Perempuan">
			</div>
		</div>
		<div class="form-group">
			<label for="keluarga_kerukunan_lainnya" class="col-sm-3 control-label">d. Kepala urusan perencanaan</label>
			<div class="col-sm-5">
				<input type="number" class="form-control" id="keluarga_kerukunan_lainnya" name="data[detail][keluarga][kerukunan][lainnya][keterangan]" placeholder="Jumlah Laki-Laki"><br>
				<input type="number" class="form-control" id="keluarga_kerukunan_lainnya" name="data[detail][keluarga][kerukunan][lainnya][jumlah]" placeholder="Jumlah Perempuan">
			</div>
		</div>

		<div class="form-group">
			<label for="keluarga_perkelahian_lainnya1" class="col-sm-3 control-label">e. Kepala seksi pemerintahan</label>
			<div class="col-sm-5">
				<input type="number" class="form-control" id="keluarga_perkelahian_lainnya1" name="data[detail][keluarga][perkelahian][lainnya1][keterangan]" placeholder="Jumlah Laki-Laki"><br>
				<input type="number" class="form-control" id="keluarga_perkelahian_lainnya1" name="data[detail][keluarga][perkelahian][lainnya1][jumlah]" placeholder="Jumlah Perempuan">
			</div>
		</div>
		<div class="form-group">
			<label for="keluarga_perkelahian_lainnya2" class="col-sm-3 control-label">f. Kepala seksi kesejahteraan</label>
			<div class="col-sm-5">
				<input type="number" class="form-control" id="keluarga_perkelahian_lainnya2" name="data[detail][keluarga][perkelahian][lainnya2][keterangan]" placeholder="Jumlah Laki-Laki"><br>
				<input type="number" class="form-control" id="keluarga_perkelahian_lainnya2" name="data[detail][keluarga][perkelahian][lainnya2][jumlah]" placeholder="Jumlah Perempuan">
			</div>
		</div>
		<div class="form-group">
			<label for="keluarga_miras_narkoba_lainnya" class="col-sm-3 control-label">g. Kepala seksi pelayanan</label>
			<div class="col-sm-5">
				<input type="number" class="form-control" id="keluarga_miras_narkoba_lainnya" name="data[detail][keluarga][miras_narkoba][lainnya][keterangan]" placeholder="Jumlah Laki-Laki"><br>
				<input type="number" class="form-control" id="keluarga_miras_narkoba_lainnya" name="data[detail][keluarga][miras_narkoba][lainnya][jumlah]" placeholder="Jumlah Perempuan">
			</div>
		</div>

		<div class="form-group">
			<label for="keluarga_pembunuhan_lainnya" class="col-sm-3 control-label">h. Staf petugas desa</label>
			<div class="col-sm-5">
				<input type="number" class="form-control" id="keluarga_pembunuhan_lainnya" name="data[detail][keluarga][pembunuhan][lainnya][keterangan]" placeholder="Jumlah Laki-Laki"><br>
				<input type="number" class="form-control" id="keluarga_pembunuhan_lainnya" name="data[detail][keluarga][pembunuhan][lainnya][jumlah]" placeholder="Jumlah Perempuan">
			</div>
		</div>

		<div class="form-group">
			<label for="keluarga_penculikan_lainnya1" class="col-sm-3 control-label">i. BPD dan Anggota</label>
			<div class="col-sm-5">
				<input type="number" class="form-control" id="keluarga_penculikan_lainnya1" name="data[detail][keluarga][penculikan][lainnya1][keterangan]" placeholder="Jumlah Laki-Laki"><br>
				<input type="number" class="form-control" id="keluarga_penculikan_lainnya1" name="data[detail][keluarga][penculikan][lainnya1][jumlah]" placeholder="Jumlah Perempuan">
			</div>
		</div>
		<div class="form-group">
			<label for="keluarga_penculikan_lainnya2" class="col-sm-3 control-label">j. LPM dan Anggota</label>
			<div class="col-sm-5">
				<input type="number" class="form-control" id="keluarga_penculikan_lainnya2" name="data[detail][keluarga][penculikan][lainnya2][keterangan]" placeholder="Jumlah Laki-Laki"><br>
				<input type="number" class="form-control" id="keluarga_penculikan_lainnya2" name="data[detail][keluarga][penculikan][lainnya2][jumlah]" placeholder="Jumlah Perempuan">
			</div>
		</div>
		<div class="form-group">
			<label for="keluarga_seksual_lainnya1" class="col-sm-3 control-label">k. TP. PKK Desa</label>
			<div class="col-sm-5">
				<input type="number" class="form-control" id="keluarga_seksual_lainnya1" name="data[detail][keluarga][seksual][lainnya1][keterangan]" placeholder="Jumlah Laki-Laki"><br>
				<input type="number" class="form-control" id="keluarga_seksual_lainnya1" name="data[detail][keluarga][seksual][lainnya1][jumlah]" placeholder="Jumlah Perempuan">
			</div>
		</div>
		<div class="form-group">
			<label for="keluarga_seksual_lainnya2" class="col-sm-3 control-label">l. Kepala Dusun</label>
			<div class="col-sm-5">
				<input type="number" class="form-control" id="keluarga_seksual_lainnya2" name="data[detail][keluarga][seksual][lainnya2][keterangan]" placeholder="Jumlah Laki-Laki"><br>
				<input type="number" class="form-control" id="keluarga_seksual_lainnya2" name="data[detail][keluarga][seksual][lainnya2][jumlah]" placeholder="Jumlah Perempuan">
			</div>
		</div>

		<div class="form-group">
			<label for="keluarga_kekerasan_lainnya" class="col-sm-3 control-label">m. Ketua RW</label>
			<div class="col-sm-5">
				<input type="number" class="form-control" id="keluarga_kekerasan_lainnya" name="data[detail][keluarga][kekerasan][lainnya][keterangan]" placeholder="Jumlah Laki-Laki"><br>
				<input type="number" class="form-control" id="keluarga_kekerasan_lainnya" name="data[detail][keluarga][kekerasan][lainnya][jumlah]" placeholder="Jumlah Perempuan">
			</div>
		</div>
		<div class="form-group">
			<label for="keluarga_penderita_sakit_lainnya1" class="col-sm-3 control-label">n. Ketua RT</label>
			<div class="col-sm-5">
				<input type="number" class="form-control" id="keluarga_penderita_sakit_lainnya1" name="data[detail][keluarga][penderita_sakit][lainnya1][keterangan]" placeholder="Jumlah Laki-Laki"><br>
				<input type="number" class="form-control" id="keluarga_penderita_sakit_lainnya1" name="data[detail][keluarga][penderita_sakit][lainnya1][jumlah]" placeholder="Jumlah Perempuan">
			</div>
		</div>
		<div class="form-group">
			<div class="col-md-12">
				<h4><strong>II. DATA GEOGRAFI, TOPOGRAFI, DAN DEMOGRAFI</strong></h4>
			</div>
		</div>
		<div class="form-group">
			<div class="col-md-12">
				<h4><strong>DATA GEOGRAFI</strong></h4>
			</div>
		</div>
		<div class="form-group">
			<div class="col-md-12">
				<h4><strong>Luas Wilayah</strong></h4>
			</div>
		</div>
		<div class="form-group">
			<label for="keluarga_jenis_ternak_kambing" class="col-sm-3 control-label">201. Total Luas Wilayah Desa<span class="text-danger">*</span></label>
			<div class="col-sm-5">
				<input type="text" required class="form-control" id="keluarga_jenis_ternak_kambing" name="data[detail][keluarga][jenis_ternak][kambing]" placeholder="Total Luas Wilayah Desa">
			</div>
		</div>
		<div class="form-group">
			<label for="keluarga_jenis_ternak_domba" class="col-sm-3 control-label">202. Hutan Desa</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="keluarga_jenis_ternak_domba" name="data[detail][keluarga][jenis_ternak][domba]" placeholder="Hutan Desa">
			</div>
		</div>
		<div class="form-group">
			<div class="col-md-12">
				<h4><strong>DATA TOPOGRAFI</strong></h4>
			</div>
		</div>
		<div class="form-group">
			<label for="keluarga_lahan_hutan" class="col-sm-3 control-label">203. Jenis Wilayah Desa</label>
			<div class="col-sm-5">
				<select class="form-control" name="data[detail][keluarga][lahan][hutan]" id="keluarga_lahan_hutan">
					<option value="Tidak memiliki">Jenis Wilayah Desa</option>
					<option value="Dataran rendah">Dataran rendah</option>
					<option value="Dataran tinggi /pegunungan">Dataran tinggi /pegunungan </option>
					<option value="Kepulauan">Kepulauan</option>
				</select>
			</div>
		</div>
		<div class="form-group">
			<div class="col-md-12">
				<h4><strong>DATA DEMOGRAFI</strong></h4>
			</div>
		</div>
		<div class="form-group">
			<div class="col-md-12">
				<h4><strong>Penduduk</strong></h4>
			</div>
		</div>
		<div class="form-group">
			<label for="keluarga_jenis_ternak_angsa" class="col-sm-3 control-label">204. Jumlah Total Penduduk<span class="text-danger">*</span></label>
			<div class="col-sm-5">
				<input type="number" required class="form-control" id="keluarga_jenis_ternak_angsa" name="data[detail][keluarga][jenis_ternak][angsa]" placeholder="Jumlah Total Penduduk">
			</div>
		</div>
		<div class="form-group">
			<label for="keluarga_jenis_ternak_burung_puyuh" class="col-sm-3 control-label">205. Jumlah Penduduk Laki-laki<span class="text-danger">*</span></label>
			<div class="col-sm-5">
				<input type="number" required class="form-control" id="keluarga_jenis_ternak_burung_puyuh" name="data[detail][keluarga][jenis_ternak][burung_puyuh]" placeholder="Jumlah Penduduk Laki-laki">
			</div>
		</div>
		<div class="form-group">
			<label for="keluarga_jenis_ternak_kelinci" class="col-sm-3 control-label">206. Jumlah Penduduk Perempuan<span class="text-danger">*</span></label>
			<div class="col-sm-5">
				<input type="number" required class="form-control" id="keluarga_jenis_ternak_kelinci" name="data[detail][keluarga][jenis_ternak][kelinci]" placeholder="Jumlah Penduduk Perempuan">
			</div>
		</div>
		<div class="form-group">
			<label for="keluarga_jenis_ternak_burung_walet" class="col-sm-3 control-label">207. Jumlah penduduk pendatang<span class="text-danger">*</span></label>
			<div class="col-sm-5">
				<input type="number" required class="form-control" id="keluarga_jenis_ternak_burung_walet" name="data[detail][keluarga][jenis_ternak][burung_walet]" placeholder="Jumlah penduduk pendatang">
			</div>
		</div>
		<div class="form-group">
			<label for="keluarga_jenis_ternak_anjing" class="col-sm-3 control-label">208. Jumlah penduduk pergi<span class="text-danger">*</span></label>
			<div class="col-sm-5">
				<input type="number" required class="form-control" id="keluarga_jenis_ternak_anjing" name="data[detail][keluarga][jenis_ternak][anjing]" placeholder="Jumlah penduduk pergi">
			</div>
		</div>
		<div class="form-group">
			<div class="col-md-12">
				<h4><strong>Kepala Keluarga</strong></h4>
			</div>
		</div>
		<div class="form-group">
			<label for="keluarga_jenis_ternak_kucing" class="col-sm-3 control-label">209. Jumlah Total Kepala Keluarga<span class="text-danger">*</span> </label>
			<div class="col-sm-5">
				<input type="number" required class="form-control" id="keluarga_jenis_ternak_kucing" name="data[detail][keluarga][jenis_ternak][kucing]" placeholder="Jumlah Total Kepala Keluarga">
			</div>
		</div>
		<div class="form-group">
			<label for="keluarga_jenis_ternak_ular_cobra" class="col-sm-3 control-label">210. Jumlah Total Kepala Keluarga Perempuan</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="keluarga_jenis_ternak_ular_cobra" name="data[detail][keluarga][jenis_ternak][ular_cobra]" placeholder="Jumlah Total Kepala Keluarga Perempuan">
			</div>
		</div>
		<div class="form-group">
			<label for="keluarga_jenis_ternak_burung_onta" class="col-sm-3 control-label">211. Jumlah Keluarga Miskin</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="keluarga_jenis_ternak_burung_onta" name="data[detail][keluarga][jenis_ternak][burung_onta]" placeholder="Jumlah Keluarga Miskin">
			</div>
		</div>
		<div class="form-group">
			<div class="col-md-12">212. Jumlah Penduduk Berdasarkan Struktur Usia
			</div>
		</div>
		<div class="form-group">
			<label for="keluarga_jenis_ternak_ular_pithon" class="col-sm-3 control-label">a. <1 tahun</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="keluarga_jenis_ternak_ular_pithon" name="data[detail][keluarga][jenis_ternak][ular_pithon]" placeholder="Jiwa">
			</div>
		</div>
		<div class="form-group">
			<label for="keluarga_jenis_ternak_burung_cendrawasih" class="col-sm-3 control-label">b. 1-4 tahun</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="keluarga_jenis_ternak_burung_cendrawasih" name="data[detail][keluarga][jenis_ternak][burung_cendrawasih]" placeholder="Jiwa">
			</div>
		</div>
		<div class="form-group">
			<label for="keluarga_jenis_ternak_burung_kakatua" class="col-sm-3 control-label">c. 5-14 tahun</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="keluarga_jenis_ternak_burung_kakatua" name="data[detail][keluarga][jenis_ternak][burung_kakatua]" placeholder="Jiwa">
			</div>
		</div>
		<div class="form-group">
			<label for="keluarga_jenis_ternak_burung_beo" class="col-sm-3 control-label">d. 15-39 tahun</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="keluarga_jenis_ternak_burung_beo" name="data[detail][keluarga][jenis_ternak][burung_beo]" placeholder="Jiwa">
			</div>
		</div>
		<div class="form-group">
			<label for="keluarga_jenis_ternak_burung_merak" class="col-sm-3 control-label">e. 40-64 tahun</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="keluarga_jenis_ternak_burung_merak" name="data[detail][keluarga][jenis_ternak][burung_merak]" placeholder="Jiwa">
			</div>
		</div>
		<div class="form-group">
			<label for="keluarga_jenis_ternak_burung_langka_lainnya" class="col-sm-3 control-label">f. 65 tahun ke atas</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="keluarga_jenis_ternak_burung_langka_lainnya" name="data[detail][keluarga][jenis_ternak][burung_langka_lainnya]" placeholder="Jiwa">
			</div>
		</div>
		<div class="form-group">
			<div class="col-md-12">213. Jumlah penduduk berdasarkan pekerjaan
			</div>
		</div>
		<div class="form-group">
			<label for="keluarga_lembaga_dimiliki_tk_preschool_play_group" class="col-sm-3 control-label">a. Petani</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="keluarga_lembaga_dimiliki_tk_preschool_play_group" name="data[detail][keluarga][lembaga_dimiliki][tk_preschool_play_group]" placeholder="Laki-Laki">
				<input type="text" class="form-control" id="anggota1_galian_perunggu" name="data[anggota][0][galian][perunggu][produksi]" placeholder="Laki-Laki">
			</div>
		</div>
		<div class="form-group">
			<label for="keluarga_lembaga_dimiliki_sd_sederajat" class="col-sm-3 control-label">b. Nelayan</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="keluarga_lembaga_dimiliki_sd_sederajat" name="data[detail][keluarga][lembaga_dimiliki][sd_sederajat]" placeholder="Laki-Laki">
				<input type="text" class="form-control" id="anggota1_galian_perunggu" name="data[anggota][0][galian][perunggu][adat]" placeholder="Perempuan">
			</div>
		</div>
		<div class="form-group">
			<label for="keluarga_lembaga_dimiliki_smp_sederajat" class="col-sm-3 control-label">c. Buruh tani/buruh nelayan</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="keluarga_lembaga_dimiliki_smp_sederajat" name="data[detail][keluarga][lembaga_dimiliki][smp_sederajat]" placeholder="Laki-Laki">
				<input type="text" class="form-control" id="anggota1_galian_perunggu" name="data[anggota][0][galian][perunggu][perorangan]" placeholder="Perempuan">
				
			</div>
		</div>
		<div class="form-group">
			<label for="keluarga_lembaga_dimiliki_sma_sederajat" class="col-sm-3 control-label">d. Buruh pabrik</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="keluarga_lembaga_dimiliki_sma_sederajat" name="data[detail][keluarga][lembaga_dimiliki][sma_sederajat]" placeholder="Laki-Laki">
				<input type="text" class="form-control" id="anggota1_galian_perunggu" name="data[anggota][0][galian][perunggu][pemasaran]" placeholder="Perempuan">
			</div>
		</div>
		<div class="form-group">
			<label for="keluarga_lembaga_dimiliki_perguruan_tinggi" class="col-sm-3 control-label">e. PNS</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="keluarga_lembaga_dimiliki_perguruan_tinggi" name="data[detail][keluarga][lembaga_dimiliki][perguruan_tinggi]" placeholder="Laki-Laki">
				<input type="text" class="form-control" id="anggota1_galian_belerang" name="data[anggota][0][galian][belerang][produksi]" placeholder="Perempuan"><br>
				
			</div>
		</div>
		<div class="form-group">
			<label for="keluarga_lembaga_dimiliki_pondok_pesantren" class="col-sm-3 control-label">f. Pegawai swasta</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="keluarga_lembaga_dimiliki_pondok_pesantren" name="data[detail][keluarga][lembaga_dimiliki][pondok_pesantren]" placeholder="Laki-Laki">
				<input type="text" class="form-control" id="anggota1_galian_belerang" name="data[anggota][0][galian][belerang][adat]" placeholder="Perempuan"><br>
				
			</div>
		</div>
		<div class="form-group">
			<label for="keluarga_lembaga_dimiliki_taman_pendidikan_alquran" class="col-sm-3 control-label">g. Wiraswasta / pedagang</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="keluarga_lembaga_dimiliki_taman_pendidikan_alquran" name="data[detail][keluarga][lembaga_dimiliki][taman_pendidikan_alquran]" placeholder="laki-Laki">
				<input type="text" class="form-control" id="anggota1_galian_belerang" name="data[anggota][0][galian][belerang][perorangan]" placeholder="Perempuan"><br>
				
			</div>
		</div>
		<div class="form-group">
			<label for="keluarga_lembaga_dimiliki_rhaudatul_athfal" class="col-sm-3 control-label">h. Lainnya/Sebutkan : </label>
			<div class="col-sm-5">
			<input type="text" class="form-control" id="anggota1_galian_batu_marmer" name="data[anggota][0][galian][batu_marmer][produksi]" placeholder="Sebutkan">
				<input type="text" class="form-control" id="keluarga_lembaga_dimiliki_rhaudatul_athfal" name="data[detail][keluarga][lembaga_dimiliki][rhaudatul_athfal]" placeholder="Laki-Laki">
				<input type="text" class="form-control" id="anggota1_galian_belerang" name="data[anggota][0][galian][belerang][pemasaran]" placeholder="Perempuan">
			</div>*tidak termasuk penduduk yang bekerja dan menetap di luar desa seperti TKI
		</div>
		<div class="form-group">
			<label for="keluarga_lembaga_dimiliki_madrasah_ibtidaiyah" class="col-sm-3 control-label">214. Jumlah Penyandang Kebutuhan Khusus (contoh: tunanetra, tunarungu, tunawicara, dll)</label>
			<div class="col-sm-5">
			<input type="text" class="form-control" id="anggota1_galian_batu_marmer" name="data[anggota][0][galian][batu_marmer][adat]" placeholder="Laki-Laki">
				<input type="text" class="form-control" id="keluarga_lembaga_dimiliki_madrasah_ibtidaiyah" name="data[detail][keluarga][lembaga_dimiliki][madrasah_ibtidaiyah]" placeholder="Perempuan">
			</div>
		</div>
		<div class="form-group">
			<div class="col-md-12">
				<h4><strong>III. DIMENSI SOSIAL</strong></h4>
			</div>
		</div>
		<div class="form-group">
			<div class="col-md-12">
				<h4><strong>KESEHATAN</strong></h4>
			</div>
		</div>
		<div class="form-group">
			<div class="col-md-12">
				<h4><strong>Ketersediaan sarana kesehatan</strong></h4>
			</div>
		</div>
		<div class="form-group">
			<label for="anggota1_pendidikan" class="col-sm-3 control-label">301. a. Apa sarana kesehatan yang terdekat di Desa?t</label>
			<div class="col-sm-5">
				<select class="form-control" name="data[anggota][0][pendidikan]" id="anggota1_pendidikan">
					<option value="Tidak memiliki">Sarana kesehatan</option>
					<option value="Rumah Sakit Umum">1. Rumah Sakit Umum</option>
					<option value="Rumah Sakit Ibu dan Anak">2. Rumah Sakit Ibu dan Anak</option>
					<option value="Rumah Bersalin">3. Rumah Bersalin</option>
					<option value="Puskesmas">4. Puskesmas</option>
					<option value="Puskesmas pembantu">5. Puskesmas pembantu</option>
					<option value="Poskesdes">6. Poskesdes</option>
					<option value="Polindes">7. Polindes</option>
					<option value="Praktik Dokter">8. Praktik Dokter</option>
					<option value="Klinik">9. Klinik</option>
				</select>
			</div> *jawaban hanya satu pilihan
		</div>
		<div class="form-group">
			<label for="keluarga_lembaga_dimiliki_madrasah_tsanawiyah" class="col-sm-3 control-label">301. b. Berapa meter jarak ke sarana kesehatan terdekat? </label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="keluarga_lembaga_dimiliki_madrasah_tsanawiyah" name="data[detail][keluarga][lembaga_dimiliki][madrasah_tsanawiyah]" placeholder="meter">
			</div> *Berdasarkan Jawaban 301
		</div>
		<div class="form-group">
			<label for="keluarga_lembaga_dimiliki_madrasah_aliyah" class="col-sm-3 control-label">301. c. Berapa Lama Waktu tempuh untuk menuju ke sarana kesehatan terdekat</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="keluarga_lembaga_dimiliki_madrasah_aliyah" name="data[detail][keluarga][lembaga_dimiliki][madrasah_aliyah]" placeholder="menit">
			</div> *Berdasarkan Jawaban 301
		</div>
		<div class="form-group">
			<div class="col-md-12">
				<h4><strong>Ketersediaan tenaga kesehatan bidan</strong></h4>
			</div>
		</div>
		<div class="form-group">
			<label for="anggota1_status_kawin" class="col-sm-3 control-label">302. a.  Apakah terdapat bidan Desa (BDD)? </label>
			<div class="col-sm-5">
				<select class="form-control" name="data[anggota][0][status_kawin]" id="anggota1_status_kawin">
					<option value="Silahkan Pilih">Silahkan Pilih</option>
					<option value="Ya">1. Ya</option>
					<option value="Tidak">0. Tidak</option>
				</select>
			</div>
		</div>
		<div class="form-group">
			<label for="keluarga_lembaga_dimiliki_sekolah_tinggi_agama_islam" class="col-sm-3 control-label">302. b. Jika ya, berapa jumlah bidan Desa? </label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="keluarga_lembaga_dimiliki_sekolah_tinggi_agama_islam" name="data[detail][keluarga][lembaga_dimiliki][sekolah_tinggi_agama_islam]" placeholder="Orang">
			</div>
		</div>
		<div class="form-group">
			<div class="col-md-12">
				<h4><strong>Ketersediaan tenaga kesehatan dokter</strong></h4>
			</div>
		</div>
		<div class="form-group">
			<label for="anggota1_kb" class="col-sm-3 control-label">303. a. Apakah terdapat dokter yang praktik di Desa? </label>
			<div class="col-sm-5">
				<select class="form-control" name="data[anggota][0][kb]" id="anggota1_kb">
				<option value="Silahkan Pilih">Silahkan Pilih</option>
					<option value="Pil">1. Ya</option>
					<option value="Spiral">0. Tidak </option>
				</select>
			</div>
		</div>
		<div class="form-group">
			<label for="keluarga_lembaga_dimiliki_universitas_swasta_islam" class="col-sm-3 control-label">303. b. Jika ya, berapa orang dokter yang praktik di Desa? </label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="keluarga_lembaga_dimiliki_universitas_swasta_islam" name="data[detail][keluarga][lembaga_dimiliki][universitas_swasta_islam]" placeholder="Orang">
			</div>
		</div>
		<div class="form-group">
			<div class="col-md-12">
				<h4><strong>Ketersediaan tenaga kesehatan lainnya</strong></h4>
			</div>
		</div>
		<div class="form-group">
			<label for="anggota1_agama" class="col-sm-3 control-label">304. a. Apakah terdapat tenaga kesehatan lainnya selain dokter dan bidan yang praktik di desa</label>
			<div class="col-sm-5">
				<select class="form-control" name="data[anggota][0][agama]" id="anggota1_agama">
				<option value="Silahkan Pilih">Silahkan Pilih</option>
					<option value="islam">1. Ya</option>
					<option value="protestan">0. Tidak</option>
				</select>
			</div>
		</div>
		<div class="form-group">
			<label for="keluarga_lembaga_dimiliki_seminari_menengah" class="col-sm-3 control-label">304. b. Berapa orang tenaga kesehatan lainnya, selain dokter dan bidan di Desa? </label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="keluarga_lembaga_dimiliki_seminari_menengah" name="data[detail][keluarga][lembaga_dimiliki][seminari_menengah]" placeholder="orang">
			</div>
		</div>
		<div class="col-md-12">
				<h4><strong>Akses ke Poskesdes/ Polindes dan Posyandu</strong></h4>
			</div>
		<div class="form-group">
			<label for="anggota1_darah" class="col-sm-3 control-label">305. a. Apakah tersedia sarana Poskesdes/ Polindes di Desa? </label>
			<div class="col-sm-5">
				<select class="form-control" name="data[anggota][0][darah]" id="anggota1_darah">
				<option value="Silahkan Pilih">Silahkan Pilih</option>
					<option value="O">1.Ya</option>
					<option value="A">0. Tidak</option>>
				</select>
			</div>
		</div>
		<div class="form-group">
			<label for="keluarga_lembaga_dimiliki_seminari_tinggi" class="col-sm-3 control-label">305. b. Berapa meter jarak ke Poskesdes/ Polindes terdekat?</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="keluarga_lembaga_dimiliki_seminari_tinggi" name="data[detail][keluarga][lembaga_dimiliki][seminari_tinggi]" placeholder="meter">
			</div>
		</div>
		<div class="form-group">
			<label for="keluarga_lembaga_dimiliki_biara" class="col-sm-3 control-label">305. c. Berapa lama waktu tempuh untuk menuju ke Poskesdes/ Polindes terdekat? </label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="keluarga_lembaga_dimiliki_biara" name="data[detail][keluarga][lembaga_dimiliki][biara]" placeholder="menit">
			</div>
		</div>
			<div class="form-group">
			<label for="anggota2_status_kawin" class="col-sm-3 control-label">305. d. Apakah Poskesdes/ Polindes di Desa masih berfungsi/ aktif?</label>
			<div class="col-sm-5">
				<select class="form-control" name="data[anggota][1][status_kawin]" id="anggota2_status_kawin">
				<option value="Silahkan Pilih">Silahkan Pilih</option>
					<option value="kawin">1. Ya</option>
					<option value="belum">0. Tidak</option>
				</select>
			</div>
		</div>
		<div class="form-group">
			<label for="anggota2_agama" class="col-sm-3 control-label">305. e. Apakah terdapat rumah singgah / rumah tunggu untuk ibu hamil yang akan melahirkan</label>
			<div class="col-sm-5">
				<select class="form-control" name="data[anggota][1][agama]" id="anggota2_agama">
				<option value="Silahkan Pilih">Silahkan Pilih</option>
					<option value="islam">1. Ya</option>
					<option value="protestan">0. Tidak</option>
				</select>
			</div>
		</div>
			<div class="form-group">
			<label for="keluarga_lembaga_dimiliki_perguruan_tinggi_swasta_katolik" class="col-sm-3 control-label">306. a. Berapa jumlah posyandu yang terdapat di desa? </label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="keluarga_lembaga_dimiliki_perguruan_tinggi_swasta_katolik" name="data[detail][keluarga][lembaga_dimiliki][perguruan_tinggi_swasta_katolik]" placeholder="unit">
			</div>
		</div>
		<div class="form-group">
			<label for="keluarga_lembaga_dimiliki_sekolah_dasar_swasta_katolik" class="col-sm-3 control-label">306. b. Berapa jumlah posyandu yang melaksanakan kegiatan / pelayanan sebulan sekali dalam setahun terakhir?</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="keluarga_lembaga_dimiliki_sekolah_dasar_swasta_katolik" name="data[detail][keluarga][lembaga_dimiliki][sekolah_dasar_swasta_katolik]" placeholder="unit">
			</div>
		</div>
		<div class="form-group">
			<label for="keluarga_lembaga_dimiliki_sltp_swasta_katolik" class="col-sm-3 control-label">306. c. Berapa jumlah Posyandu yang melaksanakan kegiatan / pelayanan 2 bulan sekali atau lebih  setahun terakhir?</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="keluarga_lembaga_dimiliki_sltp_swasta_katolik" name="data[detail][keluarga][lembaga_dimiliki][sltp_swasta_katolik]" placeholder="unit">
			</div>
		</div>
		<div class="form-group">
			<label for="anggota2_darah" class="col-sm-3 control-label">306. d. Apakah mayoritas warga Desa berpartisipasi aktif dalam kegiatan posyandu?</label>
			<div class="col-sm-5">
				<select class="form-control" name="data[anggota][1][darah]" id="anggota2_darah">
				<option value="Silahkan Pilih">Silahkan Pilih</option>
					<option value="O">1. Ya</option>
					<option value="A">0. Tidak</option>
				</select>
			</div>
		</div>
		<div class="form-group">
			<label for="anggota2_pendidikan" class="col-sm-3 control-label">306. e. Sumber pembiayaan kegiatan Posyandu</label>
			<div class="col-sm-5">
				<select class="form-control" name="data[anggota][1][pendidikan]" id="anggota2_pendidikan">
				<option value="Silahkan Pilih">Silahkan Pilih</option>
					<option value="SD">1. Iuran bulanan masyarakat</option>
					<option value="SMP">2. APBDes</option>
					<option value="SMA">3. Iuran bulanan masyarakat dan APBDes</option>
					<option value="Diploma">4. Lainnya</option>
				</select>
			</div>
		</div>
		<div class="form-group">
			<div class="col-md-12">
				<h4><strong>Tingkat Kepesertaan BPJS</strong></h4>
			</div>
		</div>
		<div class="form-group">
			<label for="keluarga_lembaga_dimiliki_slta_swasta_katolik" class="col-sm-3 control-label">307. a. Berapa jumlah warga yang terdaftar menjadi peserta BPJS Kesehatan / JKN (Jaminan Kesehatan Nasional)? </label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="keluarga_lembaga_dimiliki_slta_swasta_katolik" name="data[detail][keluarga][lembaga_dimiliki][slta_swasta_katolik]" placeholder="orang">
			</div>
		</div>

		
	<div class="form-group">
			<label for="anggota2_jenis_kelamin" class="col-sm-3 control-label">307. b. Apakah warga desa memanfaatkan pelayanan BPJS?</label>
			<div class="col-sm-5">
				<select class="form-control" name="data[anggota][1][jenis_kelamin]" id="anggota2_jenis_kelamin">
				<option value="Silahkan Pilih">Silahkan Pilih</option>
					<option value="laki">1. Ya</option>
					<option value="perempuan">0. Tidak</option>
				</select>
			</div>
		</div>
			<div class="form-group">
			<label for="anggota2_kewarganegaraan" class="col-sm-3 control-label">307. c. Berapa jumlah warga yang terdaftar menjadi peserta Jaminan Kesehatan Daerah?</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="anggota2_kewarganegaraan" name="data[anggota][1][kewarganegaraan]" placeholder="orang">
			</div>
		</div>
		<div class="form-group">
			<div class="col-md-12">
				<h4><strong>Derajat Kesehatan dan Gizi Buruk</strong></h4>
			</div>
		</div>
		<div class="form-group">
			<label for="anggota2_hubungan" class="col-sm-3 control-label">308. a. Apakah terdapat kejadian kematian ibu melahirkan di Desa selama tahun 2017?
</label>
			<div class="col-sm-5">
				<select class="form-control" name="data[anggota][1][hubungan]" id="anggota2_hubungan">
				<option value="Silahkan Pilih">Silahkan Pilih</option>
					<option value="istri">1. Ya</option>
					<option value="suami">0. Tidak</option>
				</select>
			</div>
		</div>
		<div class="form-group">
			<label for="keluarga_lembaga_dimiliki_lembaga_kursus_keterampilan_swasta_katolik" class="col-sm-3 control-label">308. b. Jika Ya, berapa jumlah kejadian kematian ibu melahirkan di Desa selama tahun 2017
</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="keluarga_lembaga_dimiliki_lembaga_kursus_keterampilan_swasta_katolik" name="data[detail][keluarga][lembaga_dimiliki][lembaga_kursus_keterampilan_swasta_katolik]" placeholder="kasus">
			</div>
		</div>
		<div class="form-group">
			<label for="anggota3_status_kawin" class="col-sm-3 control-label">309. a. Apakah terdapat kejadian kematian balita di Desa selama tahun 2017?
</label>
			<div class="col-sm-5">
				<select class="form-control" name="data[anggota][2][status_kawin]" id="anggota3_status_kawin">
				<option value="Silahkan Pilih">Silahkan Pilih</option>
					<option value="kawin">1. Ya</option>
					<option value="belum">0. Tidak</option>
				</select>
			</div>
		</div>
		<div class="form-group">
			<label for="keluarga_lembaga_dimiliki_lembaga_pendidikan_swasta_kristen_protestan" class="col-sm-3 control-label">309. b. Jika Ya, berapa jumlah kejadian kematian balita di Desa selama tahun 2017?</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="keluarga_lembaga_dimiliki_lembaga_pendidikan_swasta_kristen_protestan" name="data[detail][keluarga][lembaga_dimiliki][lembaga_pendidikan_swasta_kristen_protestan]" placeholder="kasus">
			</div>
		</div>
		<div class="form-group">
			<label for="anggota3_agama" class="col-sm-3 control-label">310. a. Apakah terdapat kejadian kematian bayi di Desa selama tahun 2017? </label>
			<div class="col-sm-5">
				<select class="form-control" name="data[anggota][2][agama]" id="anggota3_agama">
				<option value="Silahkan Pilih">Silahkan Pilih</option>
					<option value="islam">1. Ya</option>
					<option value="protestan">0. Tidak </option>
					</select>
			</div>
		</div>
		<div class="form-group">
			<label for="anggota3_kewarganegaraan" class="col-sm-3 control-label">310. b. Jika Ya, berapa jumlah kejadian kematian bayi di Desa selama tahun 2017?</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="anggota3_kewarganegaraan" name="data[anggota][2][kewarganegaraan]" placeholder="kasus">
			</div>
		</div>
		<div class="form-group">
			<label for="anggota3_darah" class="col-sm-3 control-label">311. a. Apakah terdapat kejadian balita gizi buruk di Desa selama tahun 2017?</label>
			<div class="col-sm-5">
				<select class="form-control" name="data[anggota][2][darah]" id="anggota3_darah">
				<option value="Silahkan Pilih">Silahkan Pilih</option>
					<option value="O">1. Ya</option>
					<option value="A">0. Tidak</option>
				</select>
			</div>
		</div>
		<div class="form-group">
			<label for="anggota3_pekerjaan" class="col-sm-3 control-label">311. b. Jika Ya, berapa jumlah kejadian balita gizi buruk di Desa selama tahun 2017?</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="anggota3_pekerjaan" name="data[anggota][2][pekerjaan]" placeholder="kasus">
			</div>
		</div>
		<div class="form-group">
			<label for="anggota3_pendidikan" class="col-sm-3 control-label">312. a. Apakah terdapat kejadian luar biasa penyakit di Desa selama tahun 2017?</label>
			<div class="col-sm-5">
				<select class="form-control" name="data[anggota][2][pendidikan]" id="anggota3_pendidikan">
				<option value="Silahkan Pilih">Silahkan Pilih</option>
					<option value="SD">1. Ya</option>
					<option value="SMP">0. Tidak</option>
				</select>
			</div>
		</div>

		<div class="form-group">
			<label for="anggota3_nama_ortu" class="col-sm-3 control-label">312. b. Kejadian luar biasa penyakit apa yang terjadi di Desa selama tahun 2017?</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="anggota3_nama_ortu" name="data[anggota][2][nama_ortu]" placeholder="Jumlah">
			</div>
		</div>
		<div class="form-group">
			<div class="col-md-12">
				<h4><strong>PENDIDIKAN</strong></h4>
			</div>
		</div>
		<div class="form-group">
			<div class="col-md-12">
				<h4><strong>Akses ke Pendidikan Dasar dan Menengah</strong></h4>
			</div>
		</div>
		<div class="form-group">
			<label for="keluarga_lembaga_dimiliki_lembaga_pendidikan_swasta_hindu" class="col-sm-3 control-label">313. a. Berapa jumlah SD /MI di desa ?</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="keluarga_lembaga_dimiliki_lembaga_pendidikan_swasta_hindu" name="data[detail][keluarga][lembaga_dimiliki][lembaga_pendidikan_swasta_hindu]" placeholder="unit">
			</div>
		</div>
		<div class="form-group">
			<label for="keluarga_lembaga_dimiliki_lembaga_pendidikan_swasta_budha" class="col-sm-3 control-label">313. b. Berapa jumlah tenaga pengajar di SD / MI di desa ?</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="keluarga_lembaga_dimiliki_lembaga_pendidikan_swasta_budha" name="data[detail][keluarga][lembaga_dimiliki][lembaga_pendidikan_swasta_budha]" placeholder="orang">
			</div>
		</div>
		<div class="form-group">
			<label for="keluarga_lembaga_dimiliki_lembaga_pendidikan_swasta_konghucu" class="col-sm-3 control-label">313. c. Berapa jarak ke SD / MI terdekat ? </label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="keluarga_lembaga_dimiliki_lembaga_pendidikan_swasta_konghucu" name="data[detail][keluarga][lembaga_dimiliki][lembaga_pendidikan_swasta_konghucu]" placeholder="meter">
			</div>
		</div>
				<div class="form-group">
			<label for="keluarga_lembaga_dimiliki_kursus_bahasa" class="col-sm-3 control-label">313. d. Berapa lama waktu tempuh untuk menuju ke SD / MI terdekat ?</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="keluarga_lembaga_dimiliki_kursus_bahasa" name="data[detail][keluarga][lembaga_dimiliki][kursus_bahasa]" placeholder="menit">
			</div>
		</div>
		<div class="form-group">
			<label for="keluarga_lembaga_dimiliki_kursus_menjahit" class="col-sm-3 control-label">314. a. Berapa jumlah SMP / MTs di desa ?</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="keluarga_lembaga_dimiliki_kursus_menjahit" name="data[detail][keluarga][lembaga_dimiliki][kursus_menjahit]" placeholder="unit">
			</div>
		</div>
		<div class="form-group">
			<label for="keluarga_lembaga_dimiliki_kursus_montir" class="col-sm-3 control-label">314. b. Berapa jumlah tenaga pengajar di SMP/MTs di desa ?</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="keluarga_lembaga_dimiliki_kursus_montir" name="data[detail][keluarga][lembaga_dimiliki][kursus_montir]" placeholder="orang">
			</div>
		</div>
		<div class="form-group">
			<label for="keluarga_lembaga_dimiliki_kursus_komputer" class="col-sm-3 control-label">314. c. Berapa meter jarak ke SMP / MTs terdekat ?</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="keluarga_lembaga_dimiliki_kursus_komputer" name="data[detail][keluarga][lembaga_dimiliki][kursus_komputer]" placeholder="meter">
			</div>
		</div>
		<div class="form-group">
			<label for="keluarga_lembaga_dimiliki_kursus_mengemudi" class="col-sm-3 control-label">314. d. Berapa lama waktu tempuh untuk
menuju ke SMP / MTs terdekat ?</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="keluarga_lembaga_dimiliki_kursus_mengemudi" name="data[detail][keluarga][lembaga_dimiliki][kursus_mengemudi]" placeholder="menit">
			</div>
		</div>
		<div class="form-group">
			<label for="anggota4_tempat_lahir" class="col-sm-3 control-label">315. a. Berapa jumlah SMU / MA/ SMK di desa </label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="anggota4_tempat_lahir" name="data[anggota][3][tempat_lahir]" placeholder="Unit">
			</div>
		</div>
		<div class="form-group">
			<label for="anggota4_tanggal_lahir" class="col-sm-3 control-label">315. b. Berapa jumlah tenaga pengajar di SMP/MTs</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="anggota4_tanggal_lahir" name="data[anggota][3][tanggal_lahir]" placeholder="orang">
			</div>
		</div>
		<div class="form-group">
			<label for="anggota4_tanggal_pencatatan" class="col-sm-3 control-label">315. c. Berapa meter jarak ke SMU / MA / SMK  terdekat</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="anggota4_tanggal_pencatatan" name="data[anggota][3][tanggal_pencatatan]" placeholder="meter">
			</div>
		</div>
		<div class="form-group">
			<label for="anggota4_kewarganegaraan" class="col-sm-3 control-label">315. d. Berpa lama waktu tempuh untuk menuju ke SMU / MA / SMK terdekat </label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="anggota4_kewarganegaraan" name="data[anggota][3][kewarganegaraan]" placeholder="Menit">
			</div>
		</div>
		<div class="form-group">
			<div class="col-md-12">
				<h4><strong>Data Tingkat Pendidikan</strong></h4>
			</div>
		</div>
		<div class="form-group">
			<label for="anggota3_kb" class="col-sm-3 control-label">316. Tingkat pendidikan sebagian besar penduduk Desa</label>
			<div class="col-sm-5">
				<select class="form-control" name="data[anggota][2][kb]" id="anggota3_kb">
				<option value="Silahkan Pilih">Silahkan Pilih</option>
					<option value="Pil">1. Tamat Sarjana/ D1/ D3/Sederajat</option>
					<option value="Spiral">2. Tamat SMA/Sederajat</option>
					<option value="Suntik">3. Tamat SMP/Sederajat</option>
					<option value="Susuk">4. Tamat SD/Sederajat</option>
				</select>
			</div>*jawaban hanya satu pilihan
		</div> 
		<div class="form-group">
			<label for="anggota3_jenis_kelamin" class="col-sm-3 control-label">317. a. Apakah di Desa terdapat anak usia SD yang putus atau tidak sekolah selama tahun 2017 ?</label>
			<div class="col-sm-5">
				<select class="form-control" name="data[anggota][2][jenis_kelamin]" id="anggota3_jenis_kelamin">
				<option value="Silahkan Pilih">Silahkan Pilih</option>
					<option value="laki">1. Ya</option>
					<option value="perempuan">0. Tidak</option>
				</select>
			</div>
		</div>
		<div class="form-group">
			<label for="anggota4_pekerjaan" class="col-sm-3 control-label">317. b. Berapa jumlah anak usia SD yang putus atau tidak sekolah selama tahun 2017 ?</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="anggota4_pekerjaan" name="data[anggota][3][pekerjaan]" placeholder="anak">
			</div>
		</div>
		<div class="form-group">
			<label for="anggota3_hubungan" class="col-sm-3 control-label">318. a. Apakah di Desa terdapat anak usia SMP yang putus atau tidak sekolah selama tahun 2017 ?</label>
			<div class="col-sm-5">
				<select class="form-control" name="data[anggota][2][hubungan]" id="anggota3_hubungan">
				<option value="Silahkan Pilih">Silahkan Pilih</option>
					<option value="istri">1. Ya</option>
					<option value="suami">0. Tidak</option>
			</div>
		</div>
		<div class="form-group">
			<label for="anggota4_nama_ortu" class="col-sm-3 control-label">318. b. Berapa jumlah anak usia SMP yang putus atau tidak sekolah selama tahun 2017? </label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="anggota4_nama_ortu" name="data[anggota][3][nama_ortu]" placeholder="anak">
			</div>
		</div>
		<div class="form-group">
			<div class="col-md-12">
				<h4><strong>Akses ke Pendidikan Non-Formal</strong></h4>
			</div>
		</div>
		<div class="form-group">
			<label for="anggota4_jenis_kelamin" class="col-sm-3 control-label">319. a. Apakah terdapat Pos PAUD (Pendidikan Anak Usia Dini) di Desa? </label>
			<div class="col-sm-5">
				<select class="form-control" name="data[anggota][3][jenis_kelamin]" id="anggota4_jenis_kelamin">
				<option value="Silahkan Pilih">Silahkan Pilih</option>
					<option value="laki">1. Ya</option>
					<option value="perempuan">0. Tidak</option>
				</select>
			</div>
		</div>
		<div class="form-group">
			<label for="keluarga_lembaga_dimiliki_kursus_satpam" class="col-sm-3 control-label">319. b. Berapa jumlah Pos PAUD yang beroperasi di Desa? </label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="keluarga_lembaga_dimiliki_kursus_satpam" name="data[detail][keluarga][lembaga_dimiliki][kursus_satpam]" placeholder="unit">
			</div>
		</div>
		<div class="form-group">
			<label for="keluarga_lembaga_dimiliki_kursus_bela_diri" class="col-sm-3 control-label">319. c. Berapa meter jarak Pos PAUD terdekat? </label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="keluarga_lembaga_dimiliki_kursus_bela_diri" name="data[detail][keluarga][lembaga_dimiliki][kursus_bela_diri]" placeholder="meter">
			</div>
		</div>
		<div class="form-group">
			<label for="keluarga_jenis_ternak_buaya" class="col-sm-3 control-label">319. d. Berapa jumlah guru PAUD di Desa? </label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="keluarga_jenis_ternak_buaya" name="data[detail][keluarga][jenis_ternak][buaya]" placeholder="orang">
			</div>
		</div>
		<div class="form-group">
			<label for="anggota4_hubungan" class="col-sm-3 control-label">320.  Apakah terdapat Pusat Kegiatan Belajar Masyarakat Kejar Paket A, B, dan C selama satu tahun terakhir di desa</label>
			<div class="col-sm-5">
				<select class="form-control" name="data[anggota][3][hubungan]" id="anggota4_hubungan">
				<option value="Silahkan Pilih">Silahkan Pilih</option>
					<option value="istri">1. Ya</option>
					<option value="suami">0. Tidak</option>
				</select>
			</div>
		</div>
		<div class="form-group">
			<label for="anggota5_tempat_lahir" class="col-sm-3 control-label">321. a. Berapa jumlah pusat kursus atau pusat pelatihan keterampilan khusus di desa?
</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="anggota5_tempat_lahir" name="data[anggota][4][tempat_lahir]" placeholder="unit">
			</div>
		</div>
		<div class="form-group">
			<label for="anggota5_pekerjaan" class="col-sm-3 control-label">321. b. Berapa jarak tempuh menuju pusat kursus atau pusat pelatihan keterampilan khusus terdekat di Desa atau di luar Desa?
</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="anggota5_pekerjaan" name="data[anggota][4][pekerjaan]" placeholder="meter">
			</div>
		</div>
		<div class="form-group">
			<div class="col-md-12">
				<h4><strong>Akses Pengetahuan</strong></h4>
			</div>
		</div>
		<div class="form-group">
			<label for="anggota4_status_kawin" class="col-sm-3 control-label">322. a. Apakah terdapat fasilitas perpustakaan Desa atau taman bacaan masyarakat yang beroperasi ?</label>
			<div class="col-sm-5">
				<select class="form-control" data-child="disabled1" name="data[anggota][3][status_kawin]" id="anggota4_status_kawin">
				<option value="Silahkan Pilih">Silahkan Pilih</option>
					<option value="Ya">1. Ya</option>
					<option value="Tidak">0. Tidak</option>
				</select>
			</div>*(jika jawabannya “Tidak”, lanjut ke pertanyaan “323”
		</div>
		<div class="form-group">
			<label for="anggota4_agama" class="col-sm-3 control-label">322. b. Apakah penduduk Desa memanfaatkan fasilitas perpustakaan Desa atau taman bacaan masyarakat?
</label>
			<div class="col-sm-5">
				<select class="form-control" data-parent="disabled1" name="data[anggota][3][agama]" id="anggota4_agama">
				<option value="Silahkan Pilih">Silahkan Pilih</option>
					<option value="Ya">1. Ya</option>
					<option value="Tidak">0. Tidak</option>
				</select>
			</div>
		</div>
		<div class="form-group">
			<div class="col-md-12">
				<h4><strong>MODAL SOSIAL</strong></h4>
			</div>
		</div>
		<div class="form-group">
			<label for="anggota4_darah" class="col-sm-3 control-label">323. a. Apakah terdapat kebiasaan gotong royong warga di Desa? </label>
			<div class="col-sm-5">
				<select class="form-control" data-child="disabled1" name="data[anggota][3][darah]" id="anggota4_darah">
				<option value="Silahkan Pilih">Silahkan Pilih</option>
					<option value="Ya">1. Ya</option>
					<option value="Tidak">0. Tidak</option>
				</select>
			</div> *jika jawabannya “Tidak”, lanjut ke pertanyaan “324”
		</div>
		
		<div class="form-group">
			<label for="anggota5_kewarganegaraan" class="col-sm-3 control-label">323. b. Berapa kali kegiatan gotong royong warga di Desa dilaksanakan dalam setahun? </label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="anggota5_kewarganegaraan" data-parent="disabled1" name="data[anggota][4][kewarganegaraan]" placeholder="Kali/Tahun">
			</div>
		</div>
		<div class="form-group">
			<label for="anggota4_pendidikan" class="col-sm-3 control-label">324. Apakah terdapat ruang publik terbuka yang dimanfaatkan warga untuk bersantai /bermain tanpa perlu membayar (misalnya: lapangan terbuka, taman, alun-alun, dll)?</label>
			<div class="col-sm-5">
				<select class="form-control" name="data[anggota][3][pendidikan]" id="anggota4_pendidikan">
				<option value="Pilih">Silahkan Pilih</option>
					<option value="SD">1. Ya</option>
					<option value="SMP">0. Tidak</option>
				</select>
			</div>
		</div>
		<div class="form-group">
			<div class="col-md-12">325. Apakah terdapat perkumpulan / organisasi sosial di desa, seperti:
			</div>
		</div>
		
		<div class="form-group">
			<label for="anggota4_kb" class="col-sm-3 control-label">a. Karang Taruna</label>
			<div class="col-sm-5">
				<select class="form-control" name="data[anggota][3][kb]" id="anggota4_kb">
				<option value="Pilih">Silahkan Pilih</option>
					<option value="Pil">1. Ya</option>
					<option value="Spiral">0. Tidak </option>
				</select>
				<input type="text" class="form-control" id="anggota1_galian_batu_kapur" name="data[anggota][0][galian][batu_kapur][produksi]" placeholder="Kali/Tahun"><br>
				</div>
			</div>
		<div class="form-group">
			<label for="anggota5_jenis_kelamin" class="col-sm-3 control-label">b. PKK</label>
			<div class="col-sm-5">
				<select class="form-control" name="data[anggota][4][jenis_kelamin]" id="anggota5_jenis_kelamin">
				<option value="Pilih">Silahkan Pilih</option>
					<option value="laki">1. Ya</option>
					<option value="perempuan">0. Tidak</option>
				</select>
				<input type="text" class="form-control" id="anggota1_galian_batu_kapur" name="data[anggota][0][galian][batu_kapur][adat]" placeholder="Kali/Tahun">
			</div>
		</div>
		<div class="form-group">
			<label for="anggota5_hubungan" class="col-sm-3 control-label">c. Perkumpulan agama</label>
			<div class="col-sm-5">
				<select class="form-control" name="data[anggota][4][hubungan]" id="anggota5_hubungan">
				<option value="Pilih">Silahkan Pilih</option>
					<option value="istri">1. Ya</option>
					<option value="suami">0. Tidak</option>
				</select>
				<input type="text" class="form-control" id="anggota1_galian_batu_kapur" name="data[anggota][0][galian][batu_kapur][perorangan]" placeholder="Kali/Tahun"><br>
			</div>
		</div>
				<div class="form-group">
			<label for="anggota5_status_kawin" class="col-sm-3 control-label">d. Panti asuhan</label>
			<div class="col-sm-5">
				<select class="form-control" name="data[anggota][4][status_kawin]" id="anggota5_status_kawin">
				<option value="Pilih">Silahkan Pilih</option>
					<option value="kawin">1. Ya</option>
					<option value="belum">0. Tidak</option>
				</select>
				<input type="text" class="form-control" id="anggota1_galian_batu_kapur" name="data[anggota][0][galian][batu_kapur][pemasaran]" placeholder="Kali/Tahun">
			</div>
		</div>
		<div class="form-group">
			<label for="anggota5_agama" class="col-sm-3 control-label">e. Kelompok arisan</label>
			<div class="col-sm-5">
				<select class="form-control" name="data[anggota][4][agama]" id="anggota5_agama">
				<option value="Pilih">Silahkan Pilih</option>
					<option value="islam">1. Ya</option>
					<option value="protestan">0. Tidak</option>
				</select>
				<input type="text" class="form-control" id="anggota1_galian_pasir" name="data[anggota][0][galian][pasir][produksi]" placeholder="Kali/Tahun">
			</div>
		</div>
		<div class="form-group">
			<label for="anggota5_darah" class="col-sm-3 control-label">f. Kelompok/organisasi/lembaga tani
</label>
			<div class="col-sm-5">
				<select class="form-control" name="data[anggota][4][darah]" id="anggota5_darah">
				<option value="Pilih">Silahkan Pilih</option>
					<option value="O">1. Ya</option>
					<option value="A">0. Tidak</option>
				</select>
				<input type="text" class="form-control" id="anggota1_galian_pasir" name="data[anggota][0][galian][pasir][adat]" placeholder="Kali/Tahun"><br>
			</div>
		</div>
		
		<div class="form-group">
			<label for="anggota5_pendidikan" class="col-sm-3 control-label">g. Kelompok/organisasi/lembaga nelayan
</label>
			<div class="col-sm-5">
				<select class="form-control" name="data[anggota][4][pendidikan]" id="anggota5_pendidikan">
				<option value="Pilih">Silahkan Pilih</option>
					<option value="SD">1. Ya</option>
					<option value="SMP">0. Tidak</option>
				</select>
				<input type="text" class="form-control" id="anggota1_galian_pasir" name="data[anggota][0][galian][pasir][perorangan]" placeholder="Kali/Tahun"><br>
			</div>
		</div>
		<div class="form-group">
			<label for="anggota5_kb" class="col-sm-3 control-label">h. Kelompok/ organisasi/lembaga usaha ternak</label>
			<div class="col-sm-5">
				<select class="form-control" name="data[anggota][4][kb]" id="anggota5_kb">
				<option value="Pilih">Silahkan Pilih</option>
					<option value="Pil">1. Ya</option>
					<option value="Spiral">0. Tidak</option>
				</select>
				<input type="text" class="form-control" id="anggota1_galian_pasir" name="data[anggota][0][galian][pasir][pemasaran]" placeholder="Kali/Tahun">
			</div>
		</div>
		<div class="form-group">
			<label for="keluarga_produksi_perikanan_balanak" class="col-sm-3 control-label">i. Kelompok/organisasi/lembaga pengrajin</label>
			<div class="col-sm-5">
			<select class="form-control" name="data[detail][keluarga][produksi_perikanan][balanak][produksi]" id="keluarga_produksi_perikanan_balanak">
				<option value="Pilih">Silahkan Pilih</option>
					<option value="Ya">1. Ya</option>
					<option value="Tidak">0. Tidak</option>
				</select>
				<input type="text" class="form-control" id="anggota1_galian_emas" name="data[anggota][0][galian][emas][produksi]" placeholder="Kali/Tahun"><br>
				
			</div>
		</div>

		<div class="form-group">
			<label for="keluarga_pemanfaatan_air_usaha_perikanan" class="col-sm-3 control-label">j. Kelompok/ organisasi/lembaga khusus wanita</label>
			<div class="col-sm-5">
			<select class="form-control" name="data[detail][keluarga][pemanfaatan_air][usaha_perikanan]" id="keluarga_pemanfaatan_air_usaha_perikanan">
			<option value="Pilih">Silahkan Pilih</option>
					<option value="Ya">1. Ya</option>
					<option value="Tidak">0. Tidak</option>
				</select>
				<input type="text" class="form-control" id="anggota1_galian_emas" name="data[anggota][0][galian][emas][adat]" placeholder="Kali/Tahun"><br>
				
			</div>
		</div>
		<div class="form-group">
			<label for="keluarga_pemanfaatan_air_air_minum_air_baku" class="col-sm-3 control-label">k. Kelompok/ organisasi/lembaga lainnya</label>
			<div class="col-sm-5">
			<select class="form-control" name="data[detail][keluarga][pemanfaatan_air][air_minum_air_baku]" id="keluarga_pemanfaatan_air_air_minum_air_baku">
			<option value="Pilih">Silahkan Pilih</option>
					<option value="Ya">1. Ya</option>
					<option value="Tidak">0. Tidak</option>
				</select>
				<input type="text" class="form-control" id="anggota1_galian_emas" name="data[anggota][0][galian][emas][perorangan]" placeholder="Kali/Tahun"><br>
			</div>
		</div>
		<div class="form-group">
			<label for="keluarga_pemanfaatan_air_cuci_dan_mandi" class="col-sm-3 control-label">326. a. a.Apakah sebagian besar warga Desa mengikuti musyawarah Desa?</label>
			<div class="col-sm-5">
			<select class="form-control" name="data[detail][keluarga][pemanfaatan_air][cuci_dan_mandi]" id="keluarga_pemanfaatan_air_cuci_dan_mandi" data-child="disabled1" >
			<option value="Pilih">Silahkan Pilih</option>
					<option value="Ya">1. Ya</option>
					<option value="Tidak">0. Tidak</option>
				</select>
			</div>(jika jawabannya “Tidak”, lanjut ke pertanyaan “327”)
		</div>
		<div class="form-group">
			<label for="keluarga_aset_lain_perahu" class="col-sm-3 control-label">326. b.Berapa kali musyawarah Desa diselenggarakan dalam satu tahun terakhir?
</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="keluarga_aset_lain_perahu" data-parent="disabled1" name="data[detail][keluarga][aset_lain][perahu]" placeholder="Kali">
			</div>
		</div>
		<div class="form-group">
			<label for="keluarga_pemanfaatan_air_irigasi" class="col-sm-3 control-label">326. c. Apakah terdapat kelompok perempuan yang mengikuti musyawarah Desa? </label>
			<div class="col-sm-5">
			<select class="form-control" name="data[detail][keluarga][pemanfaatan_air][irigasi]" data-parent="disabled1" id="keluarga_pemanfaatan_air_irigasi">
			<option value="Pilih">Silahkan Pilih</option>
					<option value="Ya">1. Ya</option>
					<option value="Tidak">0. Tidak</option>
				</select>
			</div>
		</div>
		<div class="form-group">
			<label for="keluarga_aset_lain_kapal_barang" class="col-sm-3 control-label">327. a. Berapa jumlah fasilitas / lapangan olah raga di Desa? </label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="keluarga_aset_lain_kapal_barang" name="data[detail][keluarga][aset_lain][kapal_barang]" placeholder="unit">
			</div>
		</div>
		<div class="form-group">
			<label for="keluarga_pemanfaatan_air_buang_air_besar" class="col-sm-3 control-label">327. b. Apakah terdapat kegiatan kelompok olahraga di Desa yang rutin dilakukan, seperti latihan rutin dan pertandingan olahraga?</label>
			<div class="col-sm-5">
			<select class="form-control" name="data[detail][keluarga][pemanfaatan_air][buang_air_besar]" id="keluarga_pemanfaatan_air_buang_air_besar">
			<option value="Pilih">Silahkan Pilih</option>
					<option value="Ya">1. Ya</option>
					<option value="Tidak">0. Tidak</option>
				</select>
				</div>
		</div>
		<div class="form-group">
			<label for="keluarga_aset_lain_kapal_penumpang" class="col-sm-3 control-label">327. c. Berapa jumlah kelompok kegiatan olah raga di Desa? </label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="keluarga_aset_lain_kapal_penumpang" name="data[detail][keluarga][aset_lain][kapal_penumpang]" placeholder="kelompok">
			</div>
		</div>
		<div class="form-group">
			<label for="keluarga_pemanfaatan_air_pembangkit_listrik" class="col-sm-3 control-label">328. Apakah warga Desa terdiri dari lebih dari satu suku atau etnis? </label>
			<div class="col-sm-5">
			<select class="form-control" name="data[detail][keluarga][pemanfaatan_air][pembangkit_listrik]" id="keluarga_pemanfaatan_air_pembangkit_listrik">
			<option value="Pilih">Silahkan Pilih</option>
					<option value="Ya">1. Ya</option>
					<option value="Tidak">0. Tidak</option>
				</select>
			</div>
		</div>
		<div class="form-group">
			<label for="keluarga_pemanfaatan_air_prasarana_transportasi" class="col-sm-3 control-label">329. Apakah warga Desa sehari-hari berkomunikasi menggunakan lebih dari satu bahasa?
</label>
			<div class="col-sm-5">
			<select class="form-control" name="data[detail][keluarga][pemanfaatan_air][prasarana_transportasi]" id="keluarga_pemanfaatan_air_prasarana_transportasi">
			<option value="Pilih">Silahkan Pilih</option>
					<option value="Ya">1. Ya</option>
					<option value="Tidak">0. Tidak</option>
				</select>
			</div>
		</div>
		<div class="form-group">
			<div class="col-md-12">330. Apakah terdapat warga di Desa yang menganut agama di bawah ini :
			</div>
		</div>
		<div class="form-group">
			<label for="keluarga_pemanfaatan_air_sumber_air_panas" class="col-sm-3 control-label">a. Islam
</label>
			<div class="col-sm-5">
			<select class="form-control" name="data[detail][keluarga][pemanfaatan_air][sumber_air_panas]" id="keluarga_pemanfaatan_air_sumber_air_panas">
			<option value="Pilih">Silahkan Pilih</option>
					<option value="Ya">1. Ya</option>
					<option value="Tidak">0. Tidak</option>
				</select>
			</div>
		</div>
		<div class="form-group">
			<label for="keluarga_aset_tanah_tidak" class="col-sm-3 control-label">b. Kristen</label>
			<div class="col-sm-5">
			<select class="form-control" name="data[detail][keluarga][aset_tanah][tidak]" id="keluarga_aset_tanah_tidak">
			<option value="Pilih">Silahkan Pilih</option>
					<option value="Ya">1. Ya</option>
					<option value="Tidak">0. Tidak</option>
				</select>
			</div>
		</div>
		<div class="form-group">
			<label for="keluarga_aset_tanah_1" class="col-sm-3 control-label">c. Katolik </label>
			<div class="col-sm-5">
			<select class="form-control" name="data[detail][keluarga][aset_tanah][1]" id="keluarga_aset_tanah_1">
			<option value="Pilih">Silahkan Pilih</option>
					<option value="Ya">1. Ya</option>
					<option value="Tidak">0. Tidak</option>
				</select>
			</div>
		</div>
		<div class="form-group">
			<label for="keluarga_aset_tanah_2" class="col-sm-3 control-label">d. Buddha</label>
			<div class="col-sm-5">
			<select class="form-control" name="data[detail][keluarga][aset_tanah][2]" id="keluarga_aset_tanah_2">
			<option value="Pilih">Silahkan Pilih</option>
					<option value="Ya">1. Ya</option>
					<option value="Tidak">0. Tidak</option>
				</select>
			</div>
		</div>
		<div class="form-group">
			<label for="keluarga_aset_tanah_3" class="col-sm-3 control-label">e. Hindu
</label>
			<div class="col-sm-5">
			<select class="form-control" name="data[detail][keluarga][aset_tanah][3]" id="keluarga_aset_tanah_3">
			<option value="Pilih">Silahkan Pilih</option>
					<option value="Ya">1. Ya</option>
					<option value="Tidak">0. Tidak</option>
				</select>
				</div>
		</div>
		<div class="form-group">
			<label for="keluarga_aset_tanah_4" class="col-sm-3 control-label">f. Konghucu</label>
			<div class="col-sm-5">
			<select class="form-control" name="data[detail][keluarga][aset_tanah][4]" id="keluarga_aset_tanah_4">
			<option value="Pilih">Silahkan Pilih</option>
					<option value="Ya">1. Ya</option>
					<option value="Tidak">0. Tidak</option>
				</select>
				</div>
		</div>
		<div class="form-group">
			<label for="keluarga_aset_tanah_5" class="col-sm-3 control-label">g. Agama lain </label>
			<div class="col-sm-5">
			<select class="form-control" name="data[detail][keluarga][aset_tanah][5]" id="keluarga_aset_tanah_5">
			<option value="Pilih">Silahkan Pilih</option>
					<option value="Ya">1. Ya</option>
					<option value="Tidak">0. Tidak</option>
				</select>
				<input type="text" class="form-control" id="anggota1_galian_emas" name="data[anggota][0][galian][emas][pemasaran]" placeholder="Lainnya">
			</div>
		</div>
		<div class="form-group">
			<div class="col-md-12">331. Apakah terdapat tempat ibadah:
			</div>
		</div>
		<div class="form-group">
			<label for="keluarga_aset_tanah_6" class="col-sm-3 control-label">a. Masjid/ Musholla/ Langgar</label>
			<div class="col-sm-5">
			<select class="form-control" name="data[detail][keluarga][aset_tanah][6]" id="keluarga_aset_tanah_6">
			<option value="Pilih">Silahkan Pilih</option>
					<option value="Ya">1. Ya</option>
					<option value="Tidak">0. Tidak</option>
				</select>
			</div>
		</div>
		<div class="form-group">
			<label for="keluarga_aset_tanah_7" class="col-sm-3 control-label">b. Gereja Kristen</label>
			<div class="col-sm-5">
			<select class="form-control" name="data[detail][keluarga][aset_tanah][7]" id="keluarga_aset_tanah_7">
			<option value="Pilih">Silahkan Pilih</option>
					<option value="Ya">1. Ya</option>
					<option value="Tidak">0. Tidak</option>
				</select>
				</div>
		</div>
		<div class="form-group">
			<label for="keluarga_aset_tanah_8" class="col-sm-3 control-label">c. Gereja Katolik
</label>
			<div class="col-sm-5">
			<select class="form-control" name="data[detail][keluarga][aset_tanah][8]" id="keluarga_aset_tanah_8">
			<option value="Pilih">Silahkan Pilih</option>
					<option value="Ya">1. Ya</option>
					<option value="Tidak">0. Tidak</option>
				</select>
				</div>
		</div>
		<div class="form-group">
			<label for="keluarga_aset_tanah_9" class="col-sm-3 control-label">d. Wihara
</label>
			<div class="col-sm-5">
			<select class="form-control" name="data[detail][keluarga][aset_tanah][9]" id="keluarga_aset_tanah_9">
			<option value="Pilih">Silahkan Pilih</option>
					<option value="Ya">1. Ya</option>
					<option value="Tidak">0. Tidak</option>
				</select>
				</div>
		</div>
		<div class="form-group">
			<label for="keluarga_aset_tanah_10" class="col-sm-3 control-label">e. Pura</label>
			<div class="col-sm-5">
			<select class="form-control" name="data[detail][keluarga][aset_tanah][10]" id="keluarga_aset_tanah_10">
			<option value="Pilih">Silahkan Pilih</option>
					<option value="Ya">1. Ya</option>
					<option value="Tidak">0. Tidak</option>
				</select>
				</div>
		</div>
		<div class="form-group">
			<label for="keluarga_aset_tanah_11" class="col-sm-3 control-label">f. Litang / kelenteng
</label>
			<div class="col-sm-5">
			<select class="form-control" name="data[detail][keluarga][aset_tanah][11]" id="keluarga_aset_tanah_11">
			<option value="Pilih">Silahkan Pilih</option>
					<option value="Ya">1. Ya</option>
					<option value="Tidak">0. Tidak</option>
				</select>
				</div>
		</div>
		<div class="form-group">
			<label for="keluarga_aset_transportasi_motor" class="col-sm-3 control-label">332. Apa Agama  / kepercayaan mayoritas yang dianut warga desa</label>
			<div class="col-sm-5">
			<select class="form-control" name="data[detail][keluarga][aset_transportasi][motor]" id="keluarga_aset_transportasi_motor">
			<option value="Pilih">Silahkan Pilih</option>
					<option value="Islam">1. Islam</option>
					<option value="Kristen">2. Kristen</option>
					<option value="Katolik">3. Katolik</option>
					<option value="Buddha">4. Buddha</option>
					<option value="Hindu">5. Hindu</option>
					<option value="Konghucu">6. Konghucu</option>
					<option value="Lainnya">7. Lainnya</option>
				</select>
				</div>
		</div>
		<div class="form-group">
			<label for="keluarga_aset_transportasi_becak" class="col-sm-3 control-label">333. a. Adakah kelompok seni adat dan budaya di Desa?</label>
			<div class="col-sm-5">
			<select class="form-control" name="data[detail][keluarga][aset_transportasi][becak]" id="keluarga_aset_transportasi_becak" data-child="disabled1">
			<option value="Pilih">Silahkan Pilih</option>
					<option value="Ya">1. Ya</option>
					<option value="Tidak">0. Tidak</option>
				</select>
				</div>
		</div>
		<div class="form-group">
			<label for="keluarga_aset_lain_kapal_pesiar" class="col-sm-3 control-label">333. b. Bila ada, berapa kali kegiatan seni adat dan budaya diselenggarakan dalam setahun terakhir?
</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="keluarga_aset_lain_kapal_pesiar" data-parent="disabled1" name="data[detail][keluarga][aset_lain][kapal_pesiar]" placeholder="kali">
			</div>
		</div>
		<div class="form-group">
			<label for="keluarga_aset_lain_helikopter" class="col-sm-3 control-label">333. c. Berapa jumlah kelompok kegiatan seni adat dan budaya di Desa?</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="keluarga_aset_lain_helikopter" data-parent="disabled1" name="data[detail][keluarga][aset_lain][helikopter]" placeholder="kelompok">
			</div>
		</div>
		<div class="form-group">
			<div class="col-md-12">334. Apakah mayoritas warga di Desa menghadiri perayaan adat budaya tertentu, seperti :
			</div>
		</div>
		<div class="form-group">
			<label for="keluarga_aset_transportasi_cidemo" class="col-sm-3 control-label">a. Kelahiran
</label>
			<div class="col-sm-5">
			<select class="form-control" name="data[detail][keluarga][aset_transportasi][cidemo]" id="keluarga_aset_transportasi_cidemo">
			<option value="Pilih">Silahkan Pilih</option>
					<option value="Ya">1. Ya</option>
					<option value="Tidak">0. Tidak</option>
				</select>
				</div>
		</div>
		<div class="form-group">
			<label for="keluarga_aset_transportasi_perahu" class="col-sm-3 control-label">b. Kematian
</label>
			<div class="col-sm-5">
			<select class="form-control" name="data[detail][keluarga][aset_transportasi][perahu]" id="keluarga_aset_transportasi_perahu">
			<option value="Pilih">Silahkan Pilih</option>
					<option value="Ya">1. Ya</option>
					<option value="Tidak">0. Tidak</option>
				</select>
				</div>
		</div>
		<div class="form-group">
			<label for="keluarga_aset_transportasi_tongkang" class="col-sm-3 control-label">c. Perkawinan</label>
			<div class="col-sm-5">
			<select class="form-control" name="data[detail][keluarga][aset_transportasi][tongkang]" id="keluarga_aset_transportasi_tongkang">
			<option value="Pilih">Silahkan Pilih</option>
					<option value="Ya">1. Ya</option>
					<option value="Tidak">0. Tidak</option>
				</select>
			</div>
		</div>
		<div class="form-group">
			<label for="keluarga_aset_transportasi_bus" class="col-sm-3 control-label">d. Lainnya</label>
			<div class="col-sm-5">
			<select class="form-control" name="data[detail][keluarga][aset_transportasi][bus]" id="keluarga_aset_transportasi_bus">
			<option value="Pilih">Silahkan Pilih</option>
					<option value="Ya">1. Ya</option>
					<option value="Tidak">0. Tidak</option>
				</select>
				<input type="text" class="form-control" id="anggota1_galian_kuningan" name="data[anggota][0][galian][kuningan][produksi]" placeholder="Lainnya">
				</div>
		</div>
		<div class="form-group">
			<div class="col-md-12">
				<h4><strong>Keamanan Warga</strong></h4>
			</div>
		</div>
		<div class="form-group">
			<label for="keluarga_aset_transportasi_sepeda" class="col-sm-3 control-label">335. Apakah terdapat warga di Desa yang melakukan kegiatan pembangunan dan pemeliharaan pos keamanan lingkungan? </label>
			<div class="col-sm-5">
			<select class="form-control" name="data[detail][keluarga][aset_transportasi][sepeda]" id="keluarga_aset_transportasi_sepeda">
			<option value="Pilih">Silahkan Pilih</option>
					<option value="Ya">1. Ya</option>
					<option value="Tidak">0. Tidak</option>
				</select>
			</div>
		</div>
		<div class="form-group">
			<label for="keluarga_aset_transportasi_bajaj" class="col-sm-3 control-label">336. Apakah terdapat warga di Desa yang berinisiatif dan berpartisipasi dalam pengaktifan sistem keamanan lingkungan?</label>
			<div class="col-sm-5">
			<select class="form-control" name="data[detail][keluarga][aset_transportasi][bajaj]" id="keluarga_aset_transportasi_bajaj">
			<option value="Pilih">Silahkan Pilih</option>
					<option value="Ya">1. Ya</option>
					<option value="Tidak">0. Tidak</option>
				</select>
				</div>
		</div>
		<div class="form-group">
			<label for="keluarga_aset_produksi_padi" class="col-sm-3 control-label">337. a. Apakah terdapat konflik di Desa selama setahun terakhir?</label>
			<div class="col-sm-5">
			<select class="form-control" name="data[detail][keluarga][aset_produksi][padi]" data-child="disabled1" id="keluarga_aset_produksi_padi">
			<option value="Pilih">Silahkan Pilih</option>
					<option value="Ya">1. Ya</option>
					<option value="Tidak">0. Tidak</option>
				</select>
			</div>
		</div>
		<div class="form-group">
			<div class="col-md-12">337. b. Jika ada, sebutkan jenis konflik dan jumlah kejadian dalam setahun terakhir. 
			</div>
		</div>
		<div class="form-group">
			<label for="keluarga_aset_lain_pesawat_terbang" class="col-sm-3 control-label">b1. Antarkelompok masyarakat</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="keluarga_aset_lain_pesawat_terbang" data-parent="disabled1" name="data[detail][keluarga][aset_lain][pesawat_terbang]" placeholder="jumlah kasus">
			</div>
		</div>
		<div class="form-group">
			<label for="keluarga_aset_lain_ternak_besar" class="col-sm-3 control-label">b2. Kelompok masyarakat antardesa</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="keluarga_aset_lain_ternak_besar" data-parent="disabled1" name="data[detail][keluarga][aset_lain][ternak_besar]" placeholder="jumlah kasus">
			</div>
		</div>
		<div class="form-group">
			<label for="keluarga_aset_lain_ternak_kecil" class="col-sm-3 control-label">b3. Kelompok masyarakat dengan aparat keamanan</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="keluarga_aset_lain_ternak_kecil" data-parent="disabled1" name="data[detail][keluarga][aset_lain][ternak_kecil]" placeholder="jumlah kasus">
			</div>
		</div>
		<div class="form-group">
			<label for="keluarga_aset_lain_emas_berlian" class="col-sm-3 control-label">b4. Kelompok masyarakat dengan aparat pemerintah</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="keluarga_aset_lain_emas_berlian" data-parent="disabled1" name="data[detail][keluarga][aset_lain][emas_berlian]" placeholder="jumlah kasus">
			</div>
		</div>
		<div class="form-group">
			<label for="keluarga_aset_lain_tabungan_bank" class="col-sm-3 control-label">b5. Antarpelajar/mahasiswa/pemuda
</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="keluarga_aset_lain_tabungan_bank" data-parent="disabled1" name="data[detail][keluarga][aset_lain][tabungan_bank]" placeholder="jumlah kasus">
			</div>
		</div>
		<div class="form-group">
			<label for="keluarga_aset_lain_surat_berharga" class="col-sm-3 control-label">b6. Antarsuku
</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="keluarga_aset_lain_surat_berharga" data-parent="disabled1" name="data[detail][keluarga][aset_lain][surat_berharga]" placeholder="jumlah kasus">
			</div>
		</div>
		<div class="form-group">
			<label for="keluarga_aset_lain_deposito" class="col-sm-3 control-label">b7. Antaragama
</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="keluarga_aset_lain_deposito" data-parent="disabled1" name="data[detail][keluarga][aset_lain][deposito]" placeholder="jumlah kasus">
			</div>
		</div>
		<div class="form-group">
			<label for="keluarga_aset_lain_tanah" class="col-sm-3 control-label">b8. Lainnya</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="keluarga_aset_lain_tanah" data-parent="disabled1" name="data[detail][keluarga][aset_lain][tanah]" placeholder="jumlah kasus">
			</div>
		</div>
		<div class="form-group">
			<label for="keluarga_aset_produksi_traktor" class="col-sm-3 control-label">338. a. Apakah sebagian besar konflik yang terjadi di Desa dapat diselesaikan dengan damai? </label>
			<div class="col-sm-5">
			<select class="form-control" data-parent="disabled1" name="data[detail][keluarga][aset_produksi][traktor]" id="keluarga_aset_produksi_traktor">
			<option value="Pilih">Silahkan Pilih</option>
					<option value="Ya">1. Ya</option>
					<option value="Tidak">0. Tidak</option>
				</select>
			</div>
		</div>
		<div class="form-group">
			<div class="col-md-12">338. b. Jika ya, siapa yang berperan menjadi mediator / penengah upaya dalam penyelesaian konflik?

			</div>
		</div>
		<div class="form-group">
			<label for="keluarga_aset_produksi_pertanian" class="col-sm-3 control-label">b1. Aparat Keamanan </label>
			<div class="col-sm-5">
			<select class="form-control" data-parent="disabled1" name="data[detail][keluarga][aset_produksi][pertanian]" id="keluarga_aset_produksi_pertanian">
			<option value="Pilih">Silahkan Pilih</option>
					<option value="Ya">1. Ya</option>
					<option value="Tidak">0. Tidak</option>
				</select>
			</div>
		</div>
		<div class="form-group">
			<label for="keluarga_aset_produksi_kapal" class="col-sm-3 control-label">b2. Aparat pemerintah
</label>
			<div class="col-sm-5">
			<select class="form-control" data-parent="disabled1" name="data[detail][keluarga][aset_produksi][kapal]" id="keluarga_aset_produksi_kapal">
			<option value="Pilih">Silahkan Pilih</option>
					<option value="Ya">1. Ya</option>
					<option value="Tidak">0. Tidak</option>
				</select>
			</div>
		</div>
		<div class="form-group">
			<label for="keluarga_aset_produksi_perikanan" class="col-sm-3 control-label">b3. Tokoh Masyarakat</label>
			<div class="col-sm-5">
			<select class="form-control" data-parent="disabled1" name="data[detail][keluarga][aset_produksi][perikanan]" id="keluarga_aset_produksi_perikanan">
			<option value="Pilih">Silahkan Pilih</option>
					<option value="Ya">1. Ya</option>
					<option value="Tidak">0. Tidak</option>
				</select>
			</div>
		</div>
		<div class="form-group">
			<label for="keluarga_aset_produksi_peternakan" class="col-sm-3 control-label">b4. Tokoh Agama</label>
			<div class="col-sm-5">
			<select class="form-control" data-parent="disabled1" name="data[detail][keluarga][aset_produksi][peternakan]" id="keluarga_aset_produksi_peternakan">
			<option value="Pilih">Silahkan Pilih</option>
					<option value="Ya">1. Ya</option>
					<option value="Tidak">0. Tidak</option>
				</select>
			</div>
		</div>
		<div class="form-group">
			<label for="keluarga_aset_produksi_perkebunan" class="col-sm-3 control-label">b5. Lainnya </label>
			<div class="col-sm-5">
			<select class="form-control" data-parent="disabled1" name="data[detail][keluarga][aset_produksi][perkebunan]" id="keluarga_aset_produksi_perkebunan">
			<option value="Pilih">Silahkan Pilih</option>
					<option value="Ya">1. Ya</option>
					<option value="Tidak">0. Tidak</option>
				</select>
			</div>
		</div>
		<div class="form-group">
			<label for="keluarga_aset_produksi_hutan" class="col-sm-3 control-label">b6. Tidak Ada</label>
			<div class="col-sm-5">
			<select class="form-control" data-parent="disabled1" name="data[detail][keluarga][aset_produksi][hutan]" id="keluarga_aset_produksi_hutan">
			<option value="Pilih">Silahkan Pilih</option>
					<option value="Ya">1. Ya</option>
					<option value="Tidak">0. Tidak</option>
				</select>
			</div>
		</div>
		<div class="form-group">
			<label for="keluarga_aset_produksi_pertambangan" class="col-sm-3 control-label">339. Apakah terdapat penyelesaian konflik di desa oleh lembaga lokal sesuai adat budaya tertentu (misalnya diadakan ritual upacara dll) di Desa? </label>
			<div class="col-sm-5">
			<select class="form-control" name="data[detail][keluarga][aset_produksi][pertambangan]" id="keluarga_aset_produksi_pertambangan">
			<option value="Pilih">Silahkan Pilih</option>
					<option value="Ya">1. Ya</option>
					<option value="Tidak">0. Tidak</option>
				</select>
				</div>
		</div>
			<div class="form-group">
			<div class="col-md-12">340. Apakah terdapat tindak kejahatan sebagai berikut yang terjadi di Desa selama setahun terakhir?
			</div>
		</div>
		<div class="form-group">
			<label for="keluarga_aset_produksi_kerajinan" class="col-sm-3 control-label">a1. Pencurian</label>
			<div class="col-sm-5">
			<select class="form-control" name="data[detail][keluarga][aset_produksi][kerajinan]" id="keluarga_aset_produksi_kerajinan">
			<option value="Pilih">Silahkan Pilih</option>
					<option value="Ya">1. Ya</option>
					<option value="Tidak">0. Tidak</option>
				</select>
			</div>
		</div>
		<div class="form-group">
			<label for="keluarga_aset_produksi_gas" class="col-sm-3 control-label">a2. Penipuan/ penggelapan </label>
			<div class="col-sm-5">
			<select class="form-control" name="data[detail][keluarga][aset_produksi][gas]" id="keluarga_aset_produksi_gas">
			<option value="Pilih">Silahkan Pilih</option>
					<option value="Ya">1. Ya</option>
					<option value="Tidak">0. Tidak</option>
				</select>
			</div>
		</div>
		<div class="form-group">
			<label for="keluarga_aset_perumahan_tembok" class="col-sm-3 control-label">a3. Penganiayaan/ kekerasan</label>
			<div class="col-sm-5">
			<select class="form-control" name="data[detail][keluarga][aset_perumahan][dinding][tembok]" id="keluarga_aset_perumahan_tembok">
			<option value="Pilih">Silahkan Pilih</option>
					<option value="Ya">1. Ya</option>
					<option value="Tidak">0. Tidak</option>
				</select>
				</div>
		</div>
		<div class="form-group">
			<label for="keluarga_aset_perumahan_kayu" class="col-sm-3 control-label">a4. Pembakaran </label>
			<div class="col-sm-5">
			<select class="form-control" name="data[detail][keluarga][aset_perumahan][dinding][kayu]" id="keluarga_aset_perumahan_kayu">
			<option value="Pilih">Silahkan Pilih</option>
					<option value="Ya">1. Ya</option>
					<option value="Tidak">0. Tidak</option>
				</select>
			</div>
		</div>
		<div class="form-group">
			<label for="keluarga_aset_perumahan_bambu" class="col-sm-3 control-label">a5. Perkosaan/ kejahatan terhadap susilaan</label>
			<div class="col-sm-5">
			<select class="form-control" name="data[detail][keluarga][aset_perumahan][dinding][bambu]" id="keluarga_aset_perumahan_bambu">
			<option value="Pilih">Silahkan Pilih</option>
					<option value="Ya">1. Ya</option>
					<option value="Tidak">0. Tidak</option>
				</select>
			</div>
		</div>
		<div class="form-group">
			<label for="keluarga_aset_perumahan_tanah_liat" class="col-sm-3 control-label">a6. Penyalahgunaan/ peredaran narkoba</label>
			<div class="col-sm-5">
			<select class="form-control" name="data[detail][keluarga][aset_perumahan][dinding][tanah_liat]" id="keluarga_aset_perumahan_tanah_liat">
			<option value="Pilih">Silahkan Pilih</option>
					<option value="Ya">1. Ya</option>
					<option value="Tidak">0. Tidak</option>
				</select>
			</div>
		</div>
		<div class="form-group">
			<label for="keluarga_aset_perumahan_pelepah_kelapa" class="col-sm-3 control-label">a7. Perjudian </label>
			<div class="col-sm-5">
			<select class="form-control" name="data[detail][keluarga][aset_perumahan][dinding][pelepah_kelapa]" id="keluarga_aset_perumahan_pelepah_kelapa">
			<option value="Pilih">Silahkan Pilih</option>
					<option value="Ya">1. Ya</option>
					<option value="Tidak">0. Tidak</option>
				</select>
			</div>
		</div>
		<div class="form-group">
			<label for="keluarga_aset_perumahan_dedaunan" class="col-sm-3 control-label">a8. Pembunuhan </label>
			<div class="col-sm-5">
			<select class="form-control" name="data[detail][keluarga][aset_perumahan][dinding][dedaunan]" id="keluarga_aset_perumahan_dedaunan">
			<option value="Pilih">Silahkan Pilih</option>
					<option value="Ya">1. Ya</option>
					<option value="Tidak">0. Tidak</option>
				</select>
			</div>
		</div>
		<div class="form-group">
			<label for="keluarga_aset_perumahan_keramik" class="col-sm-3 control-label">a9. Perdagangan orang (human trafficking) </label>
			<div class="col-sm-5">
			<select class="form-control" name="data[detail][keluarga][aset_perumahan][lantai][keramik]" id="keluarga_aset_perumahan_keramik">
			<option value="Pilih">Silahkan Pilih</option>
					<option value="Ya">1. Ya</option>
					<option value="Tidak">0. Tidak</option>
				</select>
			</div>
		</div>
		<div class="form-group">
			<label for="keluarga_aset_lain_bangunan" class="col-sm-3 control-label">b. Dari berbagai tindak kejahatan yang terjadi di Desa, tindak kejahatan mana yang paling sering terjadi di Desa? </label>
			<div class="col-sm-5"> 
				<input type="text" class="form-control" id="keluarga_aset_lain_bangunan" name="data[detail][keluarga][aset_lain][bangunan]" placeholder="">
			</div>
		</div>
		<div class="form-group">
			<div class="col-md-12">
				<h4><strong>Kesejahteraan Sosial</strong></h4>
			</div>
		</div>
		<div class="form-group">
			<label for="keluarga_aset_perumahan_semen" class="col-sm-3 control-label">341. a. Apakah terdapat SLB (Sekolah Luar Biasa) di Desa?</label>
			<div class="col-sm-5">
			<select class="form-control" name="data[detail][keluarga][aset_perumahan][lantai][semen]" id="keluarga_aset_perumahan_semen">
			<option value="Pilih">Silahkan Pilih</option>
					<option value="Ya">1. Ya</option>
					<option value="Tidak">0. Tidak</option>
				</select>
			</div>
		</div>
		<div class="form-group">
			<label for="keluarga_aset_lain_industri_besar" class="col-sm-3 control-label">341. b. Jika ada, berapa jumlah SLB yang terdapat di Desa?</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="keluarga_aset_lain_industri_besar" name="data[detail][keluarga][aset_lain][industri_besar]" placeholder="unit">
			</div>
		</div>
		<div class="form-group">
			<label for="keluarga_aset_lain_industri_menengah" class="col-sm-3 control-label">341. c. Berapa jarak tempuh menuju SLB terdekat?</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="keluarga_aset_lain_industri_menengah" name="data[detail][keluarga][aset_lain][industri_menengah]" placeholder="km">
			</div>
		</div>
		<div class="form-group">
			<div class="col-md-12">342. Apakah terdapat penyandang masalah kesejahteraan sosial sebagai berikut :
			</div>
		</div>
		<div class="form-group">
			<label for="keluarga_aset_perumahan_kayu" class="col-sm-3 control-label">a. Anak jalanan </label>
			<div class="col-sm-5">
			<select class="form-control" name="data[detail][keluarga][aset_perumahan][lantai][kayu]" id="keluarga_aset_perumahan_kayu">
			<option value="Pilih">Silahkan Pilih</option>
					<option value="Ya">1. Ya</option>
					<option value="Tidak">0. Tidak</option>
				</select>
			</div>
		</div>
		<div class="form-group">
			<label for="keluarga_aset_perumahan_tanah" class="col-sm-3 control-label">b. Anak terlantar</label>
			<div class="col-sm-5">
			<select class="form-control" name="data[detail][keluarga][aset_perumahan][lantai][tanah]" id="keluarga_aset_perumahan_tanah">
			<option value="Pilih">Silahkan Pilih</option>
					<option value="Ya">1. Ya</option>
					<option value="Tidak">0. Tidak</option>
					</select>
			</div>
		</div>
		<div class="form-group">
			<label for="keluarga_aset_perumahan_genteng" class="col-sm-3 control-label">c. Korban kekerasan</label>
			<div class="col-sm-5">
			<select class="form-control" name="data[detail][keluarga][aset_perumahan][atap][genteng]" id="keluarga_aset_perumahan_genteng">
			<option value="Pilih">Silahkan Pilih</option>
					<option value="Ya">1. Ya</option>
					<option value="Tidak">0. Tidak</option>
					</select>
			</div>
		</div>
		<div class="form-group">
			<label for="keluarga_aset_perumahan_seng" class="col-sm-3 control-label">d. Lanjut usia terlantar (panti jompo)</label>
			<div class="col-sm-5">
			<select class="form-control" name="data[detail][keluarga][aset_perumahan][atap][seng]" id="keluarga_aset_perumahan_seng">
			<option value="Pilih">Silahkan Pilih</option>
					<option value="Ya">1. Ya</option>
					<option value="Tidak">0. Tidak</option>
					</select>
			</div>
		</div>
		<div class="form-group">
			<label for="keluarga_aset_perumahan_asbes" class="col-sm-3 control-label">e. Korban penyalahgunaan NAPZA</label>
			<div class="col-sm-5">
			<select class="form-control" name="data[detail][keluarga][aset_perumahan][atap][asbes]" id="keluarga_aset_perumahan_asbes">
			<option value="Pilih">Silahkan Pilih</option>
					<option value="Ya">1. Ya</option>
					<option value="Tidak">0. Tidak</option>
					</select>
			</div>
		</div>
		<div class="form-group">
			<label for="keluarga_aset_perumahan_beton" class="col-sm-3 control-label">f. Pekerja migran terlantar</label>
			<div class="col-sm-5">
			<select class="form-control" name="data[detail][keluarga][aset_perumahan][atap][beton]" id="keluarga_aset_perumahan_beton">
			<option value="Pilih">Silahkan Pilih</option>
					<option value="Ya">1. Ya</option>
					<option value="Tidak">0. Tidak</option>
					</select>
			</div>
		</div>
		<div class="form-group">
			<label for="keluarga_aset_perumahan_bambu" class="col-sm-3 control-label">g. Gelandangan / pengemis</label>
			<div class="col-sm-5">
			<select class="form-control" name="data[detail][keluarga][aset_perumahan][atap][bambu]" id="keluarga_aset_perumahan_bambu">
			<option value="Pilih">Silahkan Pilih</option>
					<option value="Ya">1. Ya</option>
					<option value="Tidak">0. Tidak</option>
					</select>
			</div>
		</div>
		<div class="form-group">
			<label for="keluarga_aset_perumahan_kayu" class="col-sm-3 control-label">h. PSK (Pekerja Seks Komersial)</label>
			<div class="col-sm-5">
			<select class="form-control" name="data[detail][keluarga][aset_perumahan][atap][kayu]" id="keluarga_aset_perumahan_kayu">
			<option value="Pilih">Silahkan Pilih</option>
					<option value="Ya">1. Ya</option>
					<option value="Tidak">0. Tidak</option>
					</select>
			</div>
		</div>
		<div class="form-group">
			<label for="keluarga_aset_lain_industri_kecil" class="col-sm-3 control-label">343. Berapa jumlah kejadian bunuh diri di Desa?
			</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="keluarga_aset_lain_industri_kecil" name="data[detail][keluarga][aset_lain][industri_kecil]" placeholder="orang">
			</div>
		</div>
		<div class="form-group">
			<div class="col-md-12">
				<h4><strong>PERMUKIMAN</strong></h4>
			</div>
		</div>
		<div class="form-group">
			<div class="col-md-12">
				<h4><strong>Akses Air Bersih dan Air Minum</strong></h4>
			</div>
		</div>
		<div class="form-group">
			<div class="col-md-12">344. Sumber air untuk minum yang digunakan oleh warga di Desa
			</div>
		</div>
		<div class="form-group">
			<label for="keluarga_aset_perumahan_daun_lontar" class="col-sm-3 control-label">a. Air kemasan</label>
			<div class="col-sm-5">
			<select class="form-control" name="data[detail][keluarga][aset_perumahan][atap][daun_lontar]" id="keluarga_aset_perumahan_daun_lontar">
			<option value="Pilih">Silahkan Pilih</option>
					<option value="Ya">1. Ya</option>
					<option value="Tidak">0. Tidak</option>
					</select>
			</div>
		</div>
		<div class="form-group">
			<label for="keluarga_aset_perumahan_daun_ilalang" class="col-sm-3 control-label">b. Air ledeng dengan meteran (PAM/PDAM)</label>
			<div class="col-sm-5">
			<select class="form-control" name="data[detail][keluarga][aset_perumahan][atap][daun_ilalang]" id="keluarga_aset_perumahan_daun_ilalang">
			<option value="Pilih">Silahkan Pilih</option>
					<option value="Ya">1. Ya</option>
					<option value="Tidak">0. Tidak</option>
					</select>
			</div>
		</div>

		<div class="form-group">
			<label for="keluarga_aset_lain_elektronik" class="col-sm-3 control-label">c. Air ledeng tanpa meteran</label>
			<div class="col-sm-5">
			<select class="form-control" name="data[detail][keluarga][aset_lain][elektronik]" id="keluarga_aset_lain_elektronik">
			<option value="Pilih">Silahkan Pilih</option>
					<option value="Ya">1. Ya</option>
					<option value="Tidak">0. Tidak</option>
					</select>
			</div>
		</div>
		<div class="form-group">
			<label for="keluarga_aset_lain_motor" class="col-sm-3 control-label">d. Sumur bor / pompa</label>
			<div class="col-sm-5">
			<select class="form-control" name="data[detail][keluarga][aset_lain][motor]" id="keluarga_aset_lain_motor">
			<option value="Pilih">Silahkan Pilih</option>
					<option value="Ya">1. Ya</option>
					<option value="Tidak">0. Tidak</option>
					</select>
			</div>
		</div>
		<div class="form-group">
			<label for="keluarga_aset_lain_mobil" class="col-sm-3 control-label">e. Sumur </label>
			<div class="col-sm-5">
			<select class="form-control" name="data[detail][keluarga][aset_lain][mobil]" id="keluarga_aset_lain_mobil">
			<option value="Pilih">Silahkan Pilih</option>
					<option value="Ya">1. Ya</option>
					<option value="Tidak">0. Tidak</option>
					</select>
			</div>
		</div>
		<div class="form-group">
			<label for="keluarga_aset_lain_perikanan" class="col-sm-3 control-label">f. Mata air </label>
			<div class="col-sm-5">
			<select class="form-control" name="data[detail][keluarga][aset_lain][perikanan]" id="keluarga_aset_lain_perikanan">
			<option value="Pilih">Silahkan Pilih</option>
					<option value="Ya">1. Ya</option>
					<option value="Tidak">0. Tidak</option>
					</select>
				</div>
		</div>
		<div class="form-group">
			<label for="keluarga_aset_lain_peternakan" class="col-sm-3 control-label">g. Sungai / danau / kolam</label>
			<div class="col-sm-5">
			<select class="form-control" name="data[detail][keluarga][aset_lain][peternakan]" id="keluarga_aset_lain_peternakan">
			<option value="Pilih">Silahkan Pilih</option>
					<option value="Ya">1. Ya</option>
					<option value="Tidak">0. Tidak</option>
					</select>
			</div>
		</div>
		<div class="form-group">
			<label for="keluarga_aset_lain_perkebunan" class="col-sm-3 control-label">h. Air hujan</label>
			<div class="col-sm-5">
			<select class="form-control" name="data[detail][keluarga][aset_lain][perkebunan]" id="keluarga_aset_lain_perkebunan">
			<option value="Pilih">Silahkan Pilih</option>
					<option value="Ya">1. Ya</option>
					<option value="Tidak">0. Tidak</option>
					</select>
			</div>
		</div>
		<div class="form-group">
			<label for="keluarga_aset_lain_pasar_swalayan" class="col-sm-3 control-label">i. Lainnya</label>
			<div class="col-sm-5">
			<select class="form-control" name="data[detail][keluarga][aset_lain][pasar_swalayan]" id="keluarga_aset_lain_pasar_swalayan">
			<option value="Pilih">Silahkan Pilih</option>
					<option value="Ya">1. Ya</option>
					<option value="Tidak">0. Tidak</option>
					</select>
			</div>
		</div>
		<div class="form-group">
			<label for="keluarga_produksi_perikanan_ikan_ekor_kuning" class="col-sm-3 control-label">345. Bagaimana cara warga desa memperoleh air minum? </label>
			<div class="col-sm-5">
			<select class="form-control" name="data[detail][keluarga][produksi_perikanan][ikan_ekor_kuning][produksi]" id="keluarga_produksi_perikanan_ikan_ekor_kuning">
			<option value="Pilih">Silahkan Pilih</option>
					<option value="Gratis">1. Gratis</option>
					<option value="Membeli">0. Membeli</option>
					</select>
			</div>
		</div>
		<div class="form-group">
			<div class="col-md-12">346. Sumber air untuk mandi / cuci yang digunakan oleh warga di Desa
			</div>
		</div>

		<div class="form-group">
			<label for="keluarga_aset_lain_di_pasar_tradisional" class="col-sm-3 control-label">346. a.  Air ledeng dengan meteran (PAM/PDAM) </label>
			<div class="col-sm-5">
			<select class="form-control" name="data[detail][keluarga][aset_lain][di_pasar_tradisional]" id="keluarga_aset_lain_di_pasar_tradisional">
			<option value="Pilih">Silahkan Pilih</option>
					<option value="Ya">1. Ya</option>
					<option value="Tidak">0. Tidak</option>
					</select>
			</div>
		</div>
		<div class="form-group">
			<label for="keluarga_aset_lain_di_pasar_desa" class="col-sm-3 control-label">346. b. Air ledeng tanpa meteran</label>
			<div class="col-sm-5">
			<select class="form-control" name="data[detail][keluarga][aset_lain][di_pasar_desa]" id="keluarga_aset_lain_di_pasar_desa">
			<option value="Pilih">Silahkan Pilih</option>
					<option value="Ya">1. Ya</option>
					<option value="Tidak">0. Tidak</option>
					</select>
			</div>
		</div>
		<div class="form-group">
			<label for="keluarga_aset_lain_transportasi" class="col-sm-3 control-label">346. c. Sumur bor / pompa</label>
			<div class="col-sm-5">
			<select class="form-control" name="data[detail][keluarga][aset_lain][transportasi]" id="keluarga_aset_lain_transportasi">
			<option value="Pilih">Silahkan Pilih</option>
					<option value="Ya">1. Ya</option>
					<option value="Tidak">0. Tidak</option>
					</select>
			</div>
		</div>
		<div class="form-group">
			<label for="keluarga_aset_lain_saham_perusahaan" class="col-sm-3 control-label">346. d. Sumur </label>
			<div class="col-sm-5">
			<select class="form-control" name="data[detail][keluarga][aset_lain][saham_perusahaan]" id="keluarga_aset_lain_saham_perusahaan">
			<option value="Pilih">Silahkan Pilih</option>
					<option value="Ya">1. Ya</option>
					<option value="Tidak">0. Tidak</option>
					</select>
			</div>
		</div>
		<div class="form-group">
			<label for="keluarga_aset_lain_pelanggan_telkom" class="col-sm-3 control-label">346. e. Mata air </label>
			<div class="col-sm-5">
			<select class="form-control" name="data[detail][keluarga][aset_lain][pelanggan_telkom]" id="keluarga_aset_lain_pelanggan_telkom">
			<option value="Pilih">Silahkan Pilih</option>
					<option value="Ya">1. Ya</option>
					<option value="Tidak">0. Tidak</option>
					</select>
			</div>
		</div>
		<div class="form-group">
			<label for="keluarga_aset_lain_hp_gsm" class="col-sm-3 control-label">346. f. Sungai / danau / kolam </label>
			<div class="col-sm-5">
			<select class="form-control" name="data[detail][keluarga][aset_lain][hp_gsm]" id="keluarga_aset_lain_hp_gsm">
			<option value="Pilih">Silahkan Pilih</option>
					<option value="Ya">1. Ya</option>
					<option value="Tidak">0. Tidak</option>
					</select>
			</div>
		</div>
		<div class="form-group">
			<label for="keluarga_aset_lain_hp_cdma" class="col-sm-3 control-label">346. g. Air hujan</label>
			<div class="col-sm-5">
			<select class="form-control" name="data[detail][keluarga][aset_lain][hp_cdma]" id="keluarga_aset_lain_hp_cdma">
			<option value="Pilih">Silahkan Pilih</option>
					<option value="Ya">1. Ya</option>
					<option value="Tidak">0. Tidak</option>
					</select>
			</div>
		</div>
		<div class="form-group">
			<label for="keluarga_aset_lain_wartel" class="col-sm-3 control-label">346. h. Lainnya</label>
			<div class="col-sm-5">
			<select class="form-control" name="data[detail][keluarga][aset_lain][wartel]" id="keluarga_aset_lain_wartel">
			<option value="Pilih">Silahkan Pilih</option>
					<option value="Ya">1. Ya</option>
					<option value="Tidak">0. Tidak</option>
					</select>
			</div>
		</div>
		<div class="form-group">
			<div class="col-md-12">
				<h4><strong>Akses Sanitasi</strong></h4>
			</div>
		</div>
		<div class="form-group">
			<label for="keluarga_aset_lain_parabola" class="col-sm-3 control-label">347. WDi manakah sebagian besar warga di Desa BAB (Buang Air Besar)?</label>
			<div class="col-sm-5">
			<select class="form-control" name="data[detail][keluarga][aset_lain][parabola]" id="keluarga_aset_lain_parabola">
			<option value="Pilih">Silahkan Pilih</option>
					<option value="Sendiri">1. Jamban sendiri</option>
					<option value="Bersama">2. Jamban bersama</option>
					<option value="Umum">3. Jamban umum</option>
					<option value="Bukan">4. Bukan Jamban</option>
					</select>
			</div>*jawaban hanya satu pilihan
		</div>
		<div class="form-group">
			<label for="keluarga_aset_lain_koran_majalah" class="col-sm-3 control-label">348. Di manakah sebagian besar warga di Desa membuang sampah? </label>
			<div class="col-sm-5">
			<select class="form-control" name="data[detail][keluarga][aset_lain][koran_majalah]" id="keluarga_aset_lain_koran_majalah">
			<option value="Pilih">Silahkan Pilih</option>
					<option value="Angkut">1. Tempat sampah, kemudian diangkut</option>
					<option value="Bakar">2. Dalam lubang atau dibakar</option>
					<option value="Laut">3. Sungai / saluran irigasi / danau / laut</option>
					<option value="Selokan">4. Drainase (got/selokan)</option>
					<option value="Lainnya">5. Lainnya</option>
					</select>
			</div>
		</div>
		<div class="form-group">
			<label for="keluarga_kualitas_ibu_hamil_puskesmas" class="col-sm-3 control-label">349. Apakah terdapat TPS (Tempat Penampungan Sampah Sementara)?</label>
			<div class="col-sm-5">
			<select class="form-control" name="data[detail][keluarga][kualitas_ibu_hamil][puskesmas]" id="keluarga_kualitas_ibu_hamil_puskesmas">
			<option value="Pilih">Silahkan Pilih</option>
					<option value="Ya">1. Ya</option>
					<option value="Tidak">0. Tidak</option>
					</select>
			</div>
		</div>
		<div class="form-group">
			<label for="keluarga_kualitas_ibu_hamil_rumah_sakit" class="col-sm-3 control-label">350. KDi manakah tempat / saluran warga membuang limbah cair rumah tangga / air kotor di desa</label>
			<div class="col-sm-5">
			<select class="form-control" name="data[detail][keluarga][kualitas_ibu_hamil][rumah_sakit]" id="keluarga_kualitas_ibu_hamil_rumah_sakit">
			<option value="Pilih">Silahkan Pilih</option>
					<option value="Lubang">1. Lubang resapan</option>
					<option value="Got">2. Drainase/got/selokan</option>
					<option value="Laut">3. Sungai / saluran irigasi / danau / laut</option>
					<option value="Lubang">4. Lubang tanah terbuka</option>
					<option value="Lain">5. Lainnya</option>
					</select>
			</div>*jawaban hanya satu pilihan
		</div>
		<div class="form-group">
			<div class="col-md-12">
				<h4><strong>Akses Listrik</strong></h4>
			</div>
		</div>
		<div class="form-group">
			<label for="keluarga_kualitas_persalinan_rumah_sendiri" class="col-sm-3 control-label">351. a. Berapa jumlah keluarga di Desa yang menggunakan sumber listrik dari PLN?
</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="keluarga_kualitas_persalinan_rumah_sendiri" name="data[detail][keluarga][kualitas_persalinan][tempat][rumah_sendiri]" placeholder="Keluarga">
			</div>
		</div>
		
		<div class="form-group">
			<label for="keluarga_kualitas_persalinan_dokter" class="col-sm-3 control-label">351. b. Berapa jumlah keluarga di Desa yang menggunakan sumber listrik dari non-PLN (Diesel/ generator, swasta, swadaya, perseorangan)?
 </label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="keluarga_kualitas_persalinan_dokter" name="data[detail][keluarga][kualitas_persalinan][pertolongan][dokter]" placeholder="Keluarga">
			</div>
		</div>
		<div class="form-group">
			<label for="keluarga_kualitas_persalinan_bidan" class="col-sm-3 control-label">352. Berapa jumlah keluarga di Desa yang belum teraliri listrik sama sekali?</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="keluarga_kualitas_persalinan_bidan" name="data[detail][keluarga][kualitas_persalinan][pertolongan][bidan]" placeholder="Keluarga">
			</div>
		</div>
		<div class="form-group">
			<label for="keluarga_kualitas_ibu_hamil_dokter_praktek" class="col-sm-3 control-label">353. Apakah terdapat sumber energi terbarukan (tenaga angin, air, surya/matahari, dll) di desa yang dimanfaatkan warga desa sebagai sumber listrik di Desa?</label>
			<div class="col-sm-5">
			<select class="form-control" name="data[detail][keluarga][kualitas_ibu_hamil][dokter_praktek]" id="keluarga_kualitas_ibu_hamil_dokter_praktek">
			<option value="Pilih">Silahkan Pilih</option>
					<option value="Ya">1. Ya</option>
					<option value="Tidak">0. Tidak</option>
					</select>
			</div>
		</div>
		<div class="form-group">
			<div class="col-md-12">
				<h4><strong>Akses Informasi & Komunikasi</strong></h4>
			</div>
		</div>
		<div class="form-group">
			<label for="keluarga_kualitas_ibu_hamil_bidan_praktek" class="col-sm-3 control-label">354. Bagaimana sinyal telepon seluler / handphone di Desa?</label>
			<div class="col-sm-5">
			<select class="form-control" name="data[detail][keluarga][kualitas_ibu_hamil][bidan_praktek]" id="keluarga_kualitas_ibu_hamil_bidan_praktek">
			<option value="Pilih">Silahkan Pilih</option>
					<option value="Kuat">1. Sinyal kuat</option>
					<option value="Lemah">2. Sinyal lemah</option>
					<option value="Tidak">0. Tidak ada sinyal</option>
					</select>
			</div>
		</div>

		<div class="form-group">
			<div class="col-md-12">355. Operator / provider telepon seluler apa yang sinyalnya dapat diterima di desa?
			</div>
			</div>
		<div class="form-group">
			<label for="keluarga_kualitas_ibu_hamil_dukun_terlatih" class="col-sm-3 control-label">355. a. Telkomsel (Simpati, Kartu AS, Kartu Halo)l</label>
			<div class="col-sm-5">
			<select class="form-control" name="data[detail][keluarga][kualitas_ibu_hamil][dukun_terlatih]" id="keluarga_kualitas_ibu_hamil_dukun_terlatih">
			<option value="Pilih">Silahkan Pilih</option>
					<option value="Ya">1. Ya</option>
					<option value="Tidak">0. Tidak</option>
					</select>
			</div>
		</div>
		<div class="form-group">
			<label for="keluarga_kualitas_ibu_hamil_tidak_periksa" class="col-sm-3 control-label">355. b. Indosat (IM3, Matrix, Mentari)
</label>
			<div class="col-sm-5">
			<select class="form-control" name="data[detail][keluarga][kualitas_ibu_hamil][tidak_periksa]" id="keluarga_kualitas_ibu_hamil_tidak_periksa">
			<option value="Pilih">Silahkan Pilih</option>
					<option value="Ya">1. Ya</option>
					<option value="Tidak">0. Tidak</option>
					</select>
			</div>
		</div>
		<div class="form-group">
			<label for="keluarga_kualitas_ibu_hamil_yang_meninggal" class="col-sm-3 control-label">355. c. XL </label>
			<div class="col-sm-5">
			<select class="form-control" name="data[detail][keluarga][kualitas_ibu_hamil][yang_meninggal]" id="keluarga_kualitas_ibu_hamil_yang_meninggal">
			<option value="Pilih">Silahkan Pilih</option>
					<option value="Ya">1. Ya</option>
					<option value="Tidak">0. Tidak</option>
					</select>
			</div>
		</div>
		<div class="form-group">
			<label for="keluarga_kualitas_ibu_hamil_melahirkan" class="col-sm-3 control-label">355. d. Operator / provider telepon seluler lainnya </label>
			<div class="col-sm-5">
			<select class="form-control" name="data[detail][keluarga][kualitas_ibu_hamil][melahirkan]" id="keluarga_kualitas_ibu_hamil_melahirkan">
			<option value="Pilih">Silahkan Pilih</option>
					<option value="Ya">1. Ya</option>
					<option value="Tidak">0. Tidak</option>
					</select>
			</div>
		</div>
		<div class="form-group">
			<label for="keluarga_kualitas_ibu_hamil_nifas_sakit" class="col-sm-3 control-label">356. Apakah Desa dapat menerima siaran program televisi saluran TVRI Nasional / TVRI daerah</label>
			<div class="col-sm-5">
			<select class="form-control" name="data[detail][keluarga][kualitas_ibu_hamil][nifas_sakit]" id="keluarga_kualitas_ibu_hamil_nifas_sakit">
			<option value="Pilih">Silahkan Pilih</option>
					<option value="Ya">1. Ya</option>
					<option value="Tidak">0. Tidak</option>
					</select>
			</div>
		</div>
		<div class="form-group">
			<label for="keluarga_kualitas_ibu_hamil_kematian_nifas" class="col-sm-3 control-label">357. Apakah Desa dapat menerima siaran program televisi saluran swasta?</label>
			<div class="col-sm-5">
			<select class="form-control" name="data[detail][keluarga][kualitas_ibu_hamil][kematian_nifas]" id="keluarga_kualitas_ibu_hamil_kematian_nifas">
			<option value="Pilih">Silahkan Pilih</option>
					<option value="Ya">1. Ya</option>
					<option value="Tidak">0. Tidak</option>
					</select>
			</div>
		</div>
		<div class="form-group">
			<label for="keluarga_kualitas_ibu_hamil_nifas_sehat" class="col-sm-3 control-label">358. Apakah Desa dapat menerima siaran program televisi saluran luar negeri?</label>
			<div class="col-sm-5">
			<select class="form-control" name="data[detail][keluarga][kualitas_ibu_hamil][nifas_sehat]" id="keluarga_kualitas_ibu_hamil_nifas_sehat">
			<option value="Pilih">Silahkan Pilih</option>
					<option value="Ya">1. Ya</option>
					<option value="Tidak">0. Tidak</option>
					</select>
			</div>
		</div>
		<div class="form-group">
			<label for="keluarga_kualitas_ibu_hamil_kematian_melahirkan" class="col-sm-3 control-label">359. Apakah terdapat fasilitas internet di kantor kepala Desa?</label>
			<div class="col-sm-5">
			<select class="form-control" name="data[detail][keluarga][kualitas_ibu_hamil][kematian_melahirkan]" id="keluarga_kualitas_ibu_hamil_kematian_melahirkan">
			<option value="Pilih">Silahkan Pilih</option>
					<option value="Ya">1. Ya</option>
					<option value="Tidak">0. Tidak</option>
					</select>
			</div>
		</div>
		<div class="form-group">
			<label for="keluarga_kualitas_bayi_keguguran" class="col-sm-3 control-label">360. Apakah penduduk Desa memiliki akses internet?</label>
			<div class="col-sm-5">
			<select class="form-control" name="data[detail][keluarga][kualitas_bayi][keguguran]" id="keluarga_kualitas_bayi_keguguran">
			<option value="Pilih">Silahkan Pilih</option>
					<option value="Ya">1. Ya</option>
					<option value="Tidak">0. Tidak</option>
					</select>
			</div>
		</div>
		<div class="form-group">
			<div class="col-md-12">361. Apakah Desa memiliki sarana informasi sebagai berikut:
			</div>
		</div>
		<div class="form-group">
			<label for="keluarga_kualitas_bayi_lahir_normal" class="col-sm-3 control-label">a. Papan informasi</label>
			<div class="col-sm-5">
			<select class="form-control" name="data[detail][keluarga][kualitas_bayi][lahir_normal]" id="keluarga_kualitas_bayi_lahir_normal">
			<option value="Pilih">Silahkan Pilih</option>
					<option value="Ya">1. Ya</option>
					<option value="Tidak">0. Tidak</option>
					</select>
			</div>
		</div>
		<div class="form-group">
			<label for="keluarga_kualitas_bayi_lahir_cacat" class="col-sm-3 control-label">b. Website</label>
			<div class="col-sm-5">
			<select class="form-control" name="data[detail][keluarga][kualitas_bayi][lahir_cacat]" id="keluarga_kualitas_bayi_lahir_cacat">
			<option value="Pilih">Silahkan Pilih</option>
					<option value="Ya">1. Ya</option>
					<option value="Tidak">0. Tidak</option>
					</select>
			</div>
		</div>
		<div class="form-group">
			<label for="keluarga_kualitas_bayi_lahir_mati" class="col-sm-3 control-label">c. Sarana informasilainnya</label>
			<div class="col-sm-5">
			<select class="form-control" name="data[detail][keluarga][kualitas_bayi][lahir_mati]" id="keluarga_kualitas_bayi_lahir_mati">
			<option value="Pilih">Silahkan Pilih</option>
					<option value="Ya">1. Ya</option>
					<option value="Tidak">0. Tidak</option>
					</select>
			</div>
		</div>
		<div class="form-group">
			<div class="col-md-12">
				<h4><strong>IV. DIMENSI EKONOMI</strong></h4>
			</div>
		</div>
		<div class="form-group">
			<div class="col-md-12">
				<h4><strong>Keragaman Produksi Masyarakat Desa</strong></h4>
			</div>
		</div>
		<div class="form-group">
			<label for="keluarga_kualitas_bayi_lahir_berat_kurang" class="col-sm-3 control-label">401.  Apa sumber penghasilan utama sebagian besar penduduk di Desa?</label>
			<div class="col-sm-5">
			<select class="form-control" name="data[detail][keluarga][kualitas_bayi][lahir_berat_kurang]" id="keluarga_kualitas_bayi_lahir_berat_kurang">
			<option value="Pilih">Silahkan Pilih</option>
					<option value="Pertanian">1. Pertanian</option>
					<option value="Industri">2. Industri</option>
					<option value="Jasa">3. Perdagangan, transportasi, dan jasa</option>
					<option value="Pariwisata">4. Pariwisata</option>
					<option value="Lain">5. Lainnya</option>
					</select>

			</div>*jawaban hanya satu pilihan
		</div>
		<div class="form-group">
			<label for="keluarga_kualitas_bayi_lahir_berat_lebih" class="col-sm-3 control-label">402. Apakah terdapat produk unggulan di Desa?</label>
			<div class="col-sm-5">
			<select class="form-control" name="data[detail][keluarga][kualitas_bayi][lahir_berat_lebih]" id="keluarga_kualitas_bayi_lahir_berat_lebih">
			<option value="Pilih">Silahkan Pilih</option>
					<option value="Ya">1. Ya</option>
					<option value="Tidak">0. Tidak</option>
					</select>
			</div>
		</div>
		<div class="form-group">
			<label for="keluarga_kualitas_bayi_kelainan" class="col-sm-3 control-label">403. Apakah produk komoditi hasil pertanian di Desa mengalami perubahan dibanding setahun yang lalu?</label>
			<div class="col-sm-5">
			<select class="form-control" name="data[detail][keluarga][kualitas_bayi][kelainan]" id="keluarga_kualitas_bayi_kelainan">
			<option value="Pilih">Silahkan Pilih</option>
					<option value="Ya">1. Ya, terdapat peningkatan</option>
					<option value="Tidak">0. Ya, terdapat penurunan</option>
					</select>
			</div>

		</div>
		<div class="form-group">
			<label for="keluarga_kualitas_persalinan_rumah_sakit_umum" class="col-sm-3 control-label">404. a. Apakah terdapat produksi hasil tangkapan laut di Desa ?</label>
			<div class="col-sm-5">
			<select class="form-control" name="data[detail][keluarga][kualitas_persalinan][tempat][rumah_sakit_umum]" id="keluarga_kualitas_persalinan_rumah_sakit_umum">
			<option value="Pilih">Silahkan Pilih</option>
					<option value="Ya">1. Ya</option>
					<option value="Tidak">0. Tidak</option>
					</select>
			</div>
		</div>
		<div class="form-group">
			<label for="keluarga_kualitas_persalinan_rumah_bersalin" class="col-sm-3 control-label">404. b. Jika ya, Apakah terdapat perubahan produksi hasil tangkapan laut di Desa dibanding setahun yang lalu?</label>
			<div class="col-sm-5">
			<select class="form-control" name="data[detail][keluarga][kualitas_persalinan][tempat][rumah_bersalin]" id="keluarga_kualitas_persalinan_rumah_bersalin">
			<option value="Pilih">Silahkan Pilih</option>
					<option value="Ya">1. Ya, terdapat peningkatan</option>
					<option value="Tidak">0. Ya, terdapat penurunan</option>
					</select>
			</div>
		</div>
		<div class="form-group">
			<label for="keluarga_kualitas_persalinan_perawat" class="col-sm-3 control-label">405. a. Berapa jumlah industri mikro dan kecil di Desa?</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="keluarga_kualitas_persalinan_perawat" name="data[detail][keluarga][kualitas_persalinan][pertolongan][perawat]" placeholder="unit">
			</div>
		</div>
		<div class="form-group">
			<label for="keluarga_kualitas_persalinan_dukun_bersalin" class="col-sm-3 control-label">405. b. Berapa jumlah industri menengah di Desa?</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="keluarga_kualitas_persalinan_dukun_bersalin" name="data[detail][keluarga][kualitas_persalinan][pertolongan][dukun_bersalin]" placeholder="unit">
			</div>
		</div>
		<div class="form-group">
			<div class="col-md-12">
				<h4><strong>Akses ke Pusat Perdagangan</strong></h4>
			</div>
		</div>
		<div class="form-group">
			<label for="keluarga_kualitas_persalinan_puskesmas" class="col-sm-3 control-label">406. a. Apakah terdapat kelompok pertokoan di Desa?</label>
			<div class="col-sm-5">
			<select class="form-control" name="data[detail][keluarga][kualitas_persalinan][tempat][puskesmas]" id="keluarga_kualitas_persalinan_puskesmas">
			<option value="Pilih">Silahkan Pilih</option>
					<option value="Ya">1. Ya</option>
					<option value="Tidak">0. Tidak</option>
					</select>
			</div>
		</div>
		<div class="form-group">
			<label for="keluarga_kualitas_persalinan_keluarga" class="col-sm-3 control-label">406. b. Berapa km jarak ke kelompok pertokoan terdekat? </label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="keluarga_kualitas_persalinan_keluarga" name="data[detail][keluarga][kualitas_persalinan][pertolongan][keluarga]" placeholder="km">
			</div>
		</div>
		<div class="form-group">
			<label for="keluarga_imunisasi_dpt1" class="col-sm-3 control-label">407. Berapa jumlah pasar dengan bangunan permanen?</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="keluarga_imunisasi_dpt1" name="data[detail][keluarga][imunisasi][dpt1]" placeholder="Unit">
			</div>
		</div>
		<div class="form-group">
			<label for="keluarga_imunisasi_bcg" class="col-sm-3 control-label">408. Berapa jumlah pasar dengan bangunan semi permanen? n</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="keluarga_imunisasi_bcg" name="data[detail][keluarga][imunisasi][bcg]" placeholder="Unit">
			</div>
		</div>
		<div class="form-group">
			<label for="keluarga_kualitas_persalinan_polindes" class="col-sm-3 control-label">409. a. Apakah terdapat pasar tanpa bangunan di Desa?</label>
			<div class="col-sm-5">
			<select class="form-control" name="data[detail][keluarga][kualitas_persalinan][tempat][polindes]" id="keluarga_kualitas_persalinan_polindes">
			<option value="Pilih">Silahkan Pilih</option>
					<option value="Ya">1. Ya</option>
					<option value="Tidak">0. Tidak</option>
					</select>
			</div>
		</div>
		<div class="form-group">
			<label for="keluarga_imunisasi_polio1" class="col-sm-3 control-label">409. b. Berapa jumlah pasar tanpa bangunan di Desa? </label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="keluarga_imunisasi_polio1" name="data[detail][keluarga][imunisasi][polio1]" placeholder="unit">
			</div>
		</div>
		<div class="form-group">
			<label for="keluarga_imunisasi_dpt2" class="col-sm-3 control-label">410. Berapa jumlah toko / warung kelontong di Desa?</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="keluarga_imunisasi_dpt2" name="data[detail][keluarga][imunisasi][dpt2]" placeholder="unit">
			</div>
		</div>
		<div class="form-group">
			<label for="keluarga_kualitas_persalinan_balai_kesehatan_ibu_anak" class="col-sm-3 control-label">411. Apakah terdapat warung / kedai makanan dan minuman di Desa?</label>
			<div class="col-sm-5">
			<select class="form-control" name="data[detail][keluarga][kualitas_persalinan][tempat][balai_kesehatan_ibu_anak]" id="keluarga_kualitas_persalinan_balai_kesehatan_ibu_anak">
			<option value="Pilih">Silahkan Pilih</option>
					<option value="Ya">1. Ya</option>
					<option value="Tidak">0. Tidak</option>
					</select>
				</div>
		</div>
		<div class="form-group">
			<label for="keluarga_kualitas_persalinan_rumah_praktek_bidan" class="col-sm-3 control-label">412. a. Apakah terdapat hotel atau penginapan (hostel, motel, losmen, wisma) di Desa?</label>
			<div class="col-sm-5">
			<select class="form-control" name="data[detail][keluarga][kualitas_persalinan][tempat][rumah_praktek_bidan]" id="keluarga_kualitas_persalinan_rumah_praktek_bidan">
			<option value="Pilih">Silahkan Pilih</option>
					<option value="Ya">1. Ya</option>
					<option value="Tidak">0. Tidak</option>
					</select>
			</div>
		</div>
		<div class="form-group">
			<label for="keluarga_imunisasi_polio2" class="col-sm-3 control-label">412. b. Berapa meter jarak ke hotel atau penginapan terdekat? </label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="keluarga_imunisasi_polio2" name="data[detail][keluarga][imunisasi][polio2]" placeholder="meter">
			</div>
		</div>
		<div class="form-group">
			<label for="keluarga_imunisasi_polio3" class="col-sm-3 control-label">412. c. Berapa lama waktu tempuh untuk menuju ke hotel atau penginapan terdekat? </label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="keluarga_imunisasi_polio3" name="data[detail][keluarga][imunisasi][polio3]" placeholder="menit">
			</div>
		</div>
		<div class="form-group">
			<div class="col-md-12">
				<h4><strong>Akses Distribusi / Logistik</strong></h4>
			</div>
		</div>
		<div class="form-group">
			<label for="keluarga_kualitas_persalinan_tempat_praktek_dokter" class="col-sm-3 control-label">413.  Apakah terdapat kantor pos / pos pembantu / rumah pos / pos keliling di Desa? </label>
			<div class="col-sm-5">
			<select class="form-control" name="data[detail][keluarga][kualitas_persalinan][tempat][tempat_praktek_dokter]" id="keluarga_kualitas_persalinan_tempat_praktek_dokter">
			<option value="Pilih">Silahkan Pilih</option>
					<option value="Ya">1. Ya</option>
					<option value="Tidak">0. Tidak</option>
					</select>
					<input type="text" class="form-control" id="anggota1_galian_batu_cadas" name="data[anggota][0][galian][batu_cadas][produksi]" placeholder="meter"><br>
			</div>
		</div>
		<div class="form-group">
			<label for="keluarga_kualitas_persalinan_rumah_dukun" class="col-sm-3 control-label">414. Apakah terdapat pelayanan jasa ekspedisi swasta (pengiriman barang) di Desa? </label>
			<div class="col-sm-5">
			<select class="form-control" name="data[detail][keluarga][kualitas_persalinan][tempat][rumah_dukun]" id="keluarga_kualitas_persalinan_rumah_dukun">
			<option value="Pilih">Silahkan Pilih</option>
					<option value="Ya">1. Ya</option>
					<option value="Tidak">0. Tidak</option>
					</select>
					<input type="text" class="form-control" id="anggota1_galian_batu_cadas" name="data[anggota][0][galian][batu_cadas][adat]" placeholder="meter"><br>
			</div>
		</div>		
		<div class="form-group">
		<div class="col-md-12">
				<h4><strong>Akses Lembaga Keuangan</strong></h4>
			</div>
		</div>
		<div class="form-group">
			<label for="keluarga_imunisasi_dpt3" class="col-sm-3 control-label">415. Apakah terdapat bank umum pemerintah (BRI, BNI, BPD, BTN, dll) di Desa? </label>
			<div class="col-sm-5">
			<select class="form-control" name="data[detail][keluarga][imunisasi][dpt3]" id="keluarga_imunisasi_dpt3">
			<option value="Pilih">Silahkan Pilih</option>
					<option value="Ya">1. Ya</option>
					<option value="Tidak">0. Tidak</option>
					</select>
					<input type="text" class="form-control" id="anggota1_galian_batu_cadas" name="data[anggota][0][galian][batu_cadas][perorangan]" placeholder="meter"><br>
			</div>
		</div>
		<div class="form-group">
			<label for="keluarga_imunisasi_campak" class="col-sm-3 control-label">416. Terdapat bank swasta di desa</label>
			<div class="col-sm-5">
			<select class="form-control" name="data[detail][keluarga][imunisasi][campak]" id="keluarga_imunisasi_campak">
			<option value="Pilih">Silahkan Pilih</option>
					<option value="Ya">1. Ya</option>
					<option value="Tidak">0. Tidak</option>
					</select>
					<input type="text" class="form-control" id="anggota1_galian_batu_cadas" name="data[anggota][0][galian][batu_cadas][pemasaran]" placeholder="meter">
			</div>
		</div>
		<div class="form-group">
			<label for="keluarga_imunisasi_cacar" class="col-sm-3 control-label">417. Apakah tersedia BPR (Bank Perkreditan Rakyat) termasuk BPR Syariah di Desa?</label>
			<div class="col-sm-5">
			<select class="form-control" name="data[detail][keluarga][imunisasi][cacar]" id="keluarga_imunisasi_cacar">
			<option value="Pilih">Silahkan Pilih</option>
					<option value="Ya">1. Ya</option>
					<option value="Tidak">0. Tidak</option>
					</select>
			</div>
		</div>
		<div class="form-group">
			<div class="col-md-12">418. Apakah terdapat fasilitas kredit yang diterima warga Desa selama setahun terakhir berupa:
			</div>
		</div>
		<div class="form-group">
			<label for="keluarga_imunisasi_semua" class="col-sm-3 control-label">a. KUR (Kredit Usaha Rakyat) </label>
			<div class="col-sm-5">
			<select class="form-control" name="data[detail][keluarga][imunisasi][semua]" id="keluarga_imunisasi_semua">
			<option value="Pilih">Silahkan Pilih</option>
					<option value="Ya">1. Ya</option>
					<option value="Tidak">0. Tidak</option>
					</select>
			</div>
		</div>
		<div class="form-group">
			<label for="keluarga_penderita_sakit_muntaber" class="col-sm-3 control-label">b. KKP-E (Kredit Ketahanan Pangan dan Energi) </label>
			<div class="col-sm-5">
			<select class="form-control" name="data[detail][keluarga][penderita_sakit][muntaber]" id="keluarga_penderita_sakit_muntaber">
			<option value="Pilih">Silahkan Pilih</option>
					<option value="Ya">1. Ya</option>
					<option value="Tidak">0. Tidak</option>
					</select>
			</div>
		</div>
		<div class="form-group">
			<label for="keluarga_penderita_sakit_demam_berdarah" class="col-sm-3 control-label">c. KUK (Kredit Usaha Kecil) </label>
			<div class="col-sm-5">
			<select class="form-control" name="data[detail][keluarga][penderita_sakit][demam_berdarah]" id="keluarga_penderita_sakit_demam_berdarah">
			<option value="Pilih">Silahkan Pilih</option>
					<option value="Ya">1. Ya</option>
					<option value="Tidak">0. Tidak</option>
					</select>
			</div>
		</div>
		<div class="form-group">
			<label for="keluarga_penderita_sakit_kolera" class="col-sm-3 control-label">418. d. Terdapat fasilitas kredit lainnya</label>
			<div class="col-sm-5">
			<select class="form-control" name="data[detail][keluarga][penderita_sakit][kolera]" id="keluarga_penderita_sakit_kolera">
			<option value="Pilih">Silahkan Pilih</option>
					<option value="Ya">1. Ya</option>
					<option value="Tidak">0. Tidak</option>
					</select>			
					</div>
		</div>
		<div class="form-group">
			<div class="col-md-12">
				<h4><strong>Ketersediaan Lembaga Ekonomi</strong></h4>
			</div>
		</div>
		<div class="form-group">
			<label for="keluarga_penderita_sakit_polio" class="col-sm-3 control-label">419. Berapa jumlah koperasi di bawah ini yang masih aktif beroperasi?</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="keluarga_penderita_sakit_polio" name="data[detail][keluarga][penderita_sakit][polio]" placeholder="unit">
			</div>
		</div>
		<div class="form-group">
			<label for="keluarga_penderita_sakit_cikungunya" class="col-sm-3 control-label">420. a. Apakah terdapat BUMDesa di desa?</label>
			<div class="col-sm-5">
			<select class="form-control" name="data[detail][keluarga][penderita_sakit][cikungunya]" id="keluarga_penderita_sakit_cikungunya">
			<option value="Pilih">Silahkan Pilih</option>
					<option value="Ya">1. Ya</option>
					<option value="Tidak">0. Tidak</option>
					</select>
			</div>
		</div>
		<div class="form-group">
			<div class="col-md-12">420. b. Jika ya, apa jenis / bidang usaha yang dilakukan oleh BUMDesa tersebut?
			</div>
		</div>
		<div class="form-group">
			<label for="keluarga_penderita_sakit_flu_burung" class="col-sm-3 control-label">b1. Pelayanan Umum</label>
			<div class="col-sm-5">
			<select class="form-control" name="data[detail][keluarga][penderita_sakit][flu_burung]" id="keluarga_penderita_sakit_flu_burung">
			<option value="Pilih">Silahkan Pilih</option>
					<option value="Ya">1. Ya</option>
					<option value="Tidak">0. Tidak</option>
					</select>
			</div>
		</div>
		<div class="form-group">
			<label for="keluarga_penderita_sakit_busung_lapar" class="col-sm-3 control-label">b2. Jasa penyewaan</label>
			<div class="col-sm-5">
			<select class="form-control" name="data[detail][keluarga][penderita_sakit][busung_lapar]" id="keluarga_penderita_sakit_busung_lapar">
			<option value="Pilih">Silahkan Pilih</option>
					<option value="Ya">1. Ya</option>
					<option value="Tidak">0. Tidak</option>
					</select>
			</div>
		</div>
		<div class="form-group">
			<label for="keluarga_penderita_sakit_kelaparan" class="col-sm-3 control-label">b3. Broker / usaha perantara</label>
			<div class="col-sm-5">
			<select class="form-control" name="data[detail][keluarga][penderita_sakit][kelaparan]" id="keluarga_penderita_sakit_kelaparan">
			<option value="Pilih">Silahkan Pilih</option>
					<option value="Ya">1. Ya</option>
					<option value="Tidak">0. Tidak</option>
					</select>
			</div>
		</div>
		<div class="form-group">
			<label for="keluarga_penderita_sakit_kulit_bersisik" class="col-sm-3 control-label">b4. Perdagangan / pabrik / trading</label>
			<div class="col-sm-5">
			<select class="form-control" name="data[detail][keluarga][penderita_sakit][kulit_bersisik]" id="keluarga_penderita_sakit_kulit_bersisik">
			<option value="Pilih">Silahkan Pilih</option>
					<option value="Ya">1. Ya</option>
					<option value="Tidak">0. Tidak</option>
					</select>
			</div>
		</div>
		<div class="form-group">
			<label for="keluarga_penderita_sakit_kelainan_fisik" class="col-sm-3 control-label">b5. Usaha bersama / holding</label>
			<div class="col-sm-5">
			<select class="form-control" name="data[detail][keluarga][penderita_sakit][kelainan_fisik]" id="keluarga_penderita_sakit_kelainan_fisik">
			<option value="Pilih">Silahkan Pilih</option>
					<option value="Ya">1. Ya</option>
					<option value="Tidak">0. Tidak</option>
					</select>
			</div>
		</div>
		<div class="form-group">
			<label for="keluarga_penderita_sakit_kelainan_mental" class="col-sm-3 control-label">b6. Bisnis keuangan/finansial</label>
			<div class="col-sm-5">
			<select class="form-control" name="data[detail][keluarga][penderita_sakit][kelainan_mental]" id="keluarga_penderita_sakit_kelainan_mental">
			<option value="Pilih">Silahkan Pilih</option>
					<option value="Ya">1. Ya</option>
					<option value="Tidak">0. Tidak</option>
					</select>
			</div>
			</div>

		<div class="form-group">
			<div class="col-md-12">
				<h4><strong>Keterbukaan Wilayah</strong></h4>
			</div>
		</div>
		<div class="form-group">
			<label for="keluarga_perilaku_sehat_wc_permanen" class="col-sm-3 control-label">Apakah di Desa terdapat angkutan umum?</label>
			<div class="col-sm-5">
			<select class="form-control" name="data[detail][keluarga][perilaku_sehat][wc_permanen]" id="keluarga_perilaku_sehat_wc_permanen">
			<option value="Pilih">Silahkan Pilih</option>
					<option value="Ada, dengan trayek tetap">1. Ada, dengan trayek tetap</option>
					<option value="Ada, tanpa trayek tetap">2. Ada, tanpa trayek tetap</option>
					<option value="Tidak ada angkutan umum">3. Tidak ada angkutan umum</option>
					</select>

			</div>*jawaban hanya satu pilihan
		</div>
		<div class="form-group">
			<label for="keluarga_perilaku_sehat_wc_darurat" class="col-sm-3 control-label">422. Apakah angkutan umum yang utama di Desa beroperasi setiap hari?</label>
			<div class="col-sm-5">
			<select class="form-control" name="data[detail][keluarga][perilaku_sehat][wc_darurat]" id="keluarga_perilaku_sehat_wc_darurat">
			<option value="Pilih">Silahkan Pilih</option>
					<option value="Ya">1. Ya</option>
					<option value="Tidak">0. Tidak</option>
					</select>
			</div>
		</div>
		<div class="form-group">
			<label for="keluarga_perilaku_sehat_sungai" class="col-sm-3 control-label">423. Kapan jam operasional angkutan umum yang utama? </label>
			<div class="col-sm-5">
			<select class="form-control" name="data[detail][keluarga][perilaku_sehat][sungai]" id="keluarga_perilaku_sehat_sungai">
			<option value="Pilih">Silahkan Pilih</option>
					<option value="Siang & malam hari">Siang & malam hari</option>
					<option value="Hanya siang hari">0. Hanya siang hari</option>
					</select>
			</div>
		</div>
		<div class="form-group">
			<label for="keluarga_perilaku_sehat_mck_umum" class="col-sm-3 control-label">424. Apakah jalan di Desa dapat dilalui oleh kendaraan bermotor roda empat atau lebih?</label>
			<div class="col-sm-5">
			<select class="form-control" name="data[detail][keluarga][perilaku_sehat][mck_umum]" id="keluarga_perilaku_sehat_mck_umum">
			<option value="Pilih">Silahkan Pilih</option>
					<option value="Sepanjang tahun">1. Sepanjang tahun</option>
					<option value="Sepanjang tahun kecuali saat tertentu">2. Sepanjang tahun kecuali saat tertentu</option>
					<option value="Tidak bisa dilalui sepanjang tahun">3. Tidak bisa dilalui sepanjang tahun</option>
					</select>
			</div>
		</div>
		<div class="form-group">
			<label for="keluarga_pola_makan_sehari1" class="col-sm-3 control-label">425. Apa jenis permukaan jalan di Desa yang terluas?</label>
			<div class="col-sm-5">
			<select class="form-control" name="data[detail][keluarga][pola_makan][sehari1]" id="keluarga_pola_makan_sehari1">
			<option value="Pilih">Silahkan Pilih</option>
					<option value="Aspal / beton">1. Aspal / beton</option>
					<option value="Diperkeras (kerikil, batu, dll)">2. Diperkeras (kerikil, batu, dll)</option>
					<option value="Tanah">3. Tanah</option>
					<option value="Lainnya">4. Lainnya</option>
					</select>
			</div>

		</div>
		<div class="form-group">
			<label for="keluarga_pola_makan_sehari2" class="col-sm-3 control-label">426. Bagaimana kualitas permukaan jalan di Desa? </label>
			<div class="col-sm-5">
			<select class="form-control" name="data[detail][keluarga][pola_makan][sehari2]" id="keluarga_pola_makan_sehari2">
			<option value="Pilih">Silahkan Pilih</option>
					<option value="Baik">1. Baik</option>
					<option value="Kurang Baik">0. Kurang Baik</option>
					</select>
			</div>
		</div>
		<div class="form-group">
			<div class="col-md-12">
				<h4><strong>V. DIMENSI EKOLOGI</strong></h4>
			</div>
		</div>
		<div class="form-group">
			<div class="col-md-12">
				<h4><strong>Kondisi Lingkungan</strong></h4>
			</div>
		</div>
		<div class="form-group">
			<label for="keluarga_pola_makan_sehari3" class="col-sm-3 control-label">501. Apakah sumber air tersedia sepanjang tahun? </label>
			<div class="col-sm-5">
			<select class="form-control" name="data[detail][keluarga][pola_makan][sehari3]" id="keluarga_pola_makan_sehari3">
			<option value="Pilih">Silahkan Pilih</option>
					<option value="Ya sepanjang tahun">1. Ya sepanjang tahun</option>
					<option value="Ya, kecuali saat tertentu seperti musim kemarau atau kondisi lainnya">2. Ya, kecuali saat tertentu seperti musim kemarau atau kondisi lainnya</option>
					<option value="Tidak">0. Tidak</option>
					</select>
					</div>
		</div>
		<div class="form-group">
			<div class="col-md-12">502. Apakah terjadi pencemaran lingkungan hidup di Desa selama setahun terakhir?
			</div>
		</div>
		<div class="form-group">
			<label for="keluarga_pola_makan_seharibt1" class="col-sm-3 control-label">502. a. Pencemaran Air</label>
			<div class="col-sm-5">
			<select class="form-control" name="data[detail][keluarga][pola_makan][seharibt1]" id="keluarga_pola_makan_seharibt1">
			<option value="Pilih">Silahkan Pilih</option>
					<option value="Ya">1. Ya</option>
					<option value="Tidak">0. Tidak</option>
					</select>
			</div>
		</div>
		<div class="form-group">
			<label for="keluarga_kebiasaan_berobat_dukun_terlatih" class="col-sm-3 control-label">502. b. Pencemaran Tanah</label>
			<div class="col-sm-5">
			<select class="form-control" name="data[detail][keluarga][kebiasaan_berobat][dukun_terlatih]" id="keluarga_kebiasaan_berobat_dukun_terlatih">
			<option value="Pilih">Silahkan Pilih</option>
					<option value="Ya">1. Ya</option>
					<option value="Tidak">0. Tidak</option>
					</select>
			</div>
		</div>
		<div class="form-group">
			<label for="keluarga_kebiasaan_berobat_dokter" class="col-sm-3 control-label">502. c. Pencemaran Udara</label>
			<div class="col-sm-5">
			<select class="form-control" name="data[detail][keluarga][kebiasaan_berobat][dokter]" id="keluarga_kebiasaan_berobat_dokter">
			<option value="Pilih">Silahkan Pilih</option>
					<option value="Ya">1. Ya</option>
					<option value="Tidak">0. Tidak</option>
					</select>
			</div>
		</div>
		<div class="form-group">
			<label for="keluarga_kebiasaan_berobat_obat_tradisional_dukun" class="col-sm-3 control-label">503. Apakah terdapat dampak yang dirasakan oleh warga Desa akibat pencemaran lingkungan? </label>
			<div class="col-sm-5">
			<select class="form-control" name="data[detail][keluarga][kebiasaan_berobat][obat_tradisional_dukun]" id="keluarga_kebiasaan_berobat_obat_tradisional_dukun">
			<option value="Pilih">Silahkan Pilih</option>
					<option value="Menyebabkan gangguan kesehatan ringan">1. Menyebabkan gangguan kesehatan ringan</option>
					<option value="Menimbulkan penyakit">2. Menimbulkan penyakit</option>
					<option value="Menimbulkan kematian">3. Menimbulkan kematian</option>
					</select>
			</div>
		</div>
		<div class="form-group">
			<label for="keluarga_kebiasaan_berobat_paranormal" class="col-sm-3 control-label">504. Apakah terdapat sungai yang terkena pembuangan limbah pabrik/industri/usaha?</label>
			<div class="col-sm-5">
			<select class="form-control" name="data[detail][keluarga][kebiasaan_berobat][paranormal]" id="keluarga_kebiasaan_berobat_paranormal">
			<option value="Pilih">Silahkan Pilih</option>
					<option value="Ya">1. Ya</option>
					<option value="Tidak">0. Tidak</option>
					</select>
			</div>
		</div>
		<div class="form-group">
			<label for="keluarga_kebiasaan_berobat_obat_tradisional_keluarga" class="col-sm-3 control-label">505. Apakah terdapat perencanaan tata ruang desa?</label>
			<div class="col-sm-5">
			<select class="form-control" name="data[detail][keluarga][kebiasaan_berobat][obat_tradisional_keluarga]" id="keluarga_kebiasaan_berobat_obat_tradisional_keluarga">
			<option value="Pilih">Silahkan Pilih</option>
					<option value="Ya">1. Ya</option>
					<option value="Tidak">0. Tidak</option>
					</select>
			</div>
		</div>
		<div class="form-group">
			<label for="keluarga_kebiasaan_berobat_tidak_diobati" class="col-sm-3 control-label">506. Apakah terdapat perubahan penggunaan lahan dari sektor pertanian menjadi sektor non-pertanian</label>
			<div class="col-sm-5">
			<select class="form-control" name="data[detail][keluarga][kebiasaan_berobat][tidak_diobati]" id="keluarga_kebiasaan_berobat_tidak_diobati">
			<option value="Pilih">Silahkan Pilih</option>
					<option value="Ya">1. Ya</option>
					<option value="Tidak">0. Tidak</option>
					</select>
			</div>
		</div>
		<div class="form-group">
			<div class="col-md-12">
				<h4><strong>Potensi Bencana</strong></h4>
			</div>
		</div>
		<div class="form-group">
			<div class="col-md-12">507. Seberapa sering kejadian/bencana alam yang terjadi selama 3 tahun terakhir?
			</div>
		</div>
		<div class="form-group">
			<label for="keluarga_kerukunan_luka_sara" class="col-sm-3 control-label">a. Tanah Longsor</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="keluarga_kerukunan_luka_sara" name="data[detail][keluarga][kerukunan][luka_sara]" placeholder="Kali/Tahun">
			</div>
		</div>
		<div class="form-group">
			<label for="keluarga_kerukunan_meninggal_sara" class="col-sm-3 control-label">b. Banjir</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="keluarga_kerukunan_meninggal_sara" name="data[detail][keluarga][kerukunan][meninggal_sara]" placeholder="Kali/Tahun">
			</div>
		</div>
		<div class="form-group">
			<label for="keluarga_kerukunan_janda_duda_sara" class="col-sm-3 control-label">c. Gempa bumi</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="keluarga_kerukunan_janda_duda_sara" name="data[detail][keluarga][kerukunan][janda_duda_sara]" placeholder="Kali/Tahun">
			</div>
		</div>
		<div class="form-group">
			<label for="keluarga_kerukunan_yatim_piatu_sara" class="col-sm-3 control-label">d. Tsunami</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="keluarga_kerukunan_yatim_piatu_sara" name="data[detail][keluarga][kerukunan][yatim_piatu_sara]" placeholder="Kali/Tahun">
			</div>
		</div>
				<div class="form-group">
			<label for="keluarga_perkelahian_meninggal" class="col-sm-3 control-label">e.  Gelombang pasang laut</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="keluarga_perkelahian_meninggal" name="data[detail][keluarga][perkelahian][meninggal]" placeholder="Kali/tahun">
			</div>
		</div>
		<div class="form-group">
			<label for="keluarga_perkelahian_luka" class="col-sm-3 control-label">f.  Angin puyuh / puting beliung / topan</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="keluarga_perkelahian_luka" name="data[detail][keluarga][perkelahian][luka]" placeholder="Kali/Tahun">
			</div>
		</div>
		<div class="form-group">
			<label for="keluarga_pencurian_korban_keluarga" class="col-sm-3 control-label">g.  Gunung meletus</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="keluarga_pencurian_korban_keluarga" name="data[detail][keluarga][pencurian][korban_keluarga]" placeholder="Kali/tahun">
			</div>
		</div>
		<div class="form-group">
			<label for="keluarga_penjarahan_penjarahan_keluarga" class="col-sm-3 control-label">h.  Kebakaran hutan</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="keluarga_penjarahan_penjarahan_keluarga" name="data[detail][keluarga][penjarahan][penjarahan_keluarga]" placeholder="Kali/Tahun">
			</div>
		</div>
		<div class="form-group">
			<label for="keluarga_penjarahan_penjarahan_luar" class="col-sm-3 control-label">i. Kekeringan lahan</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="keluarga_penjarahan_penjarahan_luar" name="data[detail][keluarga][penjarahan][penjarahan_luar]" placeholder="Kali/tahun">
			</div>
		</div>
		<div class="form-group">
			<label for="keluarga_perjudian_keluarga" class="col-sm-3 control-label">j. Bencana lainnya</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="keluarga_perjudian_keluarga" name="data[detail][keluarga][perjudian][keluarga]" placeholder="Kali/Tahun">
			</div>
		</div>
		<div class="form-group">
			<div class="col-md-12">508. Apakah terdapat fasilitas / upaya antisipasi / mitigasi bencana alam di Desa?
			</div>
		</div>
		<div class="form-group">
			<label for="keluarga_gizi_balita_bergizi_buruk" class="col-sm-3 control-label">a. Peringatan dini bencana alam
</label>
			<div class="col-sm-5">
			<select class="form-control" name="data[detail][keluarga][gizi_balita][bergizi_buruk]" id="keluarga_gizi_balita_bergizi_buruk">
			<option value="Pilih">Silahkan Pilih</option>
					<option value="Ya">1. Ya</option>
					<option value="Tidak">0. Tidak</option>
					</select>
			</div>
		</div>
		<div class="form-group">
			<label for="keluarga_gizi_balita_bergizi_baik" class="col-sm-3 control-label">b. Peringatan dini khusus tsunami</label>
			<div class="col-sm-5">
			<select class="form-control" name="data[detail][keluarga][gizi_balita][bergizi_baik]" id="keluarga_gizi_balita_bergizi_baik">
			<option value="Pilih">Silahkan Pilih</option>
					<option value="Ya">1. Ya</option>
					<option value="Tidak">0. Tidak</option>
					</select>
			</div>
		</div>
		<div class="form-group">
			<label for="keluarga_gizi_balita_bergizi_kurang" class="col-sm-3 control-label">c. Perlengkapan keselamatan (perahu karet, tenda, masker, dll)</label>
			<div class="col-sm-5">
			<select class="form-control" name="data[detail][keluarga][gizi_balita][bergizi_kurang]" id="keluarga_gizi_balita_bergizi_kurang">
			<option value="Pilih">Silahkan Pilih</option>
					<option value="Ya">1. Ya</option>
					<option value="Tidak">0. Tidak</option>
					</select>
			</div>
		</div>
		<div class="form-group">
			<label for="keluarga_gizi_balita_bergizi_lebih" class="col-sm-3 control-label">d. Jalur evakuasi </label>
			<div class="col-sm-5">
			<select class="form-control" name="data[detail][keluarga][gizi_balita][bergizi_lebih]" id="keluarga_gizi_balita_bergizi_lebih">
			<option value="Pilih">Silahkan Pilih</option>
					<option value="Ya">1. Ya</option>
					<option value="Tidak">0. Tidak</option>
					</select>
			</div>
		</div>
		<div class="form-group">
			<div class="col-md-12">
				<h4><strong>VI. AKTIVITAS DESA</strong></h4>
			</div>
		</div>
		<div class="form-group">
			<label for="keluarga_penyakit_keluarga_jantung" class="col-sm-3 control-label">601. a. Apakah terdapat Pendamping Lokal Desa yang bertugas di Desa? </label>
			<div class="col-sm-5">
			<select class="form-control" name="data[detail][keluarga][penyakit_keluarga][jantung]" id="keluarga_penyakit_keluarga_jantung">
			<option value="Pilih">Silahkan Pilih</option>
					<option value="Ya">1. Ya</option>
					<option value="Tidak">0. Tidak</option>
					</select>
			</div>
		</div>
		
		<div class="form-group">
			<label for="keluarga_penyakit_keluarga_paru" class="col-sm-3 control-label">b. Berapa jumlah pendamping lokal Desa di Kecamatan?</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="keluarga_penyakit_keluarga_paru" name="data[detail][keluarga][penyakit_keluarga][paru]" placeholder="Orang">
			</div>
		</div>
		<div class="form-group">
			<label for="keluarga_penyakit_keluarga_lever" class="col-sm-3 control-label">602. Apakah ada pelaku tingkat desa untuk memfasilitasi kegiatan Generasi Sehat dan Cerdas, (termasuk KPMD, TPMD)?</label>
			<div class="col-sm-5">
			<select class="form-control" name="data[detail][keluarga][penyakit_keluarga][lever]" id="keluarga_penyakit_keluarga_lever">
			<option value="Pilih">Silahkan Pilih</option>
					<option value="Ya">1. Ya</option>
					<option value="Tidak">0. Tidak</option>
					</select>
			</div>
		</div>
		<div class="form-group">
			<label for="keluarga_penyakit_keluarga_kanker" class="col-sm-3 control-label">603.  Berapa jumlah anggota KPMD (Kader Posyandu/Kader kesehatan) yang aktif</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="keluarga_penyakit_keluarga_kanker" name="data[detail][keluarga][penyakit_keluarga][kanker]" placeholder="Orang">
			</div>
		</div>
		<div class="form-group">
			<label for="keluarga_penyakit_keluarga_stroke" class="col-sm-3 control-label">604. Berapa jumlah anggota TPMD yang aktif</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="keluarga_penyakit_keluarga_stroke" name="data[detail][keluarga][penyakit_keluarga][stroke]" placeholder="Orang">
			</div>
		</div>
		<div class="form-group">
			<label for="keluarga_penyakit_keluarga_diabetes" class="col-sm-3 control-label">605. Apakah ada kebun gizi di Desa yang dikelola dan dimanfaatkan secara bersama oleh masyarakat desa</label>
			<div class="col-sm-5">
			<select class="form-control" name="data[detail][keluarga][penyakit_keluarga][diabetes]" id="keluarga_penyakit_keluarga_diabetes">
			<option value="Pilih">Silahkan Pilih</option>
					<option value="Ya">1. Ya</option>
					<option value="Tidak">0. Tidak</option>
					</select>
			</div>
		</div>
		<div class="form-group">
			<label for="keluarga_penyakit_keluarga_ginjal" class="col-sm-3 control-label">606. Sebutkan sumber pangan yang paling sering dikonsumsi masyarakat di desa
</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="keluarga_penyakit_keluarga_ginjal" name="data[detail][keluarga][penyakit_keluarga][ginjal]" placeholder="Sebutkan">
				<input type="text" class="form-control" id="anggota1_galian_batu_apung" name="data[anggota][0][galian][batu_apung][produksi]" placeholder="Sebutkan">
				<input type="text" class="form-control" id="anggota1_galian_batu_apung" name="data[anggota][0][galian][batu_apung][adat]" placeholder="Sebutkan">
			</div>
		</div>
		<div class="form-group">
			<label for="keluarga_penyakit_keluarga_malaria" class="col-sm-3 control-label">607. Apakah terdapat Peraturan Desa / Keputusan Kepala Desa tentang Kesehatan dan Pendidikan?</label>
			<div class="col-sm-5">
			<select class="form-control" name="data[detail][keluarga][penyakit_keluarga][malaria]" id="keluarga_penyakit_keluarga_malaria">
			<option value="Pilih">Silahkan Pilih</option>
					<option value="Ya">1. Ya</option>
					<option value="Tidak">0. Tidak</option>
					</select>
			</div>
		</div>
		<div class="form-group">
			<div class="col-md-12">
				<h4><strong>VII. SUMBER PENDAPATAN DESA</strong></h4>
			</div>
		</div>
		<div class="form-group">
			<label for="keluarga_penyakit_keluarga_asma" class="col-sm-3 control-label">701. a. Berapa total Dana Desa yang didapat tahun 2016 dan tahun 2017? </label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="keluarga_penyakit_keluarga_asma" name="data[detail][keluarga][penyakit_keluarga][asma]" placeholder="Tahun 2016">
				<input type="text" class="form-control" id="anggota1_galian_batu_apung" name="data[anggota][0][galian][batu_apung][perorangan]" placeholder="Tahun 2016n">
			</div>
		</div>
		<div class="form-group">
			<div class="col-md-12"> 701. b. Penggunaan Dana Desa tahun 2016 dan tahun 2017
			</div>
		</div>

		<div class="form-group">
			<label for="keluarga_miras_narkoba_miras" class="col-sm-3 control-label">b1. Sarana prasarana untuk penghidupan termasuk ketahanan pangan dan  pemukiman</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="keluarga_miras_narkoba_miras" name="data[detail][keluarga][miras_narkoba][miras]" placeholder="Tahun 2016">
				<input type="text" class="form-control" id="anggota1_galian_batu_apung" name="data[anggota][0][galian][batu_apung][pemasaran]" placeholder="Tahun 2017">
			</div>
		</div>

		<div class="form-group">
			<label for="keluarga_miras_narkoba_narkoba" class="col-sm-3 control-label">b2. Sarana prasarana kesehatan masyarak</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="keluarga_miras_narkoba_narkoba" name="data[detail][keluarga][miras_narkoba][narkoba]" placeholder="Tahun 2016">
				<input type="text" class="form-control" id="anggota1_galian_pasir_kwarsa" name="data[anggota][0][galian][pasir_kwarsa][produksi]" placeholder="Tahun 2017">

			</div>
		</div>
		<div class="form-group">
			<label for="keluarga_pembunuhan_pelaku_keluarga" class="col-sm-3 control-label">b3. Sarana prasarana pendidikan, sosial, dan kebudayaan
</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="keluarga_pembunuhan_pelaku_keluarga" name="data[detail][keluarga][pembunuhan][pelaku_keluarga]" placeholder="Tahun 2016">
				<input type="text" class="form-control" id="anggota1_galian_pasir_kwarsa" name="data[anggota][0][galian][pasir_kwarsa][adat]" placeholder="Tahun 2017">
			</div>
		</div>
		<div class="form-group">
			<label for="keluarga_pembunuhan_pelaku_luar" class="col-sm-3 control-label">b4. Sarana prasarana produksi dan distribusi</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="keluarga_pembunuhan_pelaku_luar" name="data[detail][keluarga][pembunuhan][pelaku_luar]" placeholder="Tahun 2016">
				<input type="text" class="form-control" id="anggota1_galian_pasir_kwarsa" name="data[anggota][0][galian][pasir_kwarsa][perorangan]" placeholder="Tahun 2017">

			</div>
		</div>
		<div class="form-group">
			<label for="keluarga_penculikan_pelaku_keluarga" class="col-sm-3 control-label">b5. Sarana prasarana energi terbarukan serta kegiatan pelestarian lingkungan hidup</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="keluarga_penculikan_pelaku_keluarga" name="data[detail][keluarga][penculikan][pelaku_keluarga]" placeholder="Tahun 2016">
				<input type="text" class="form-control" id="anggota1_galian_pasir_kwarsa" name="data[anggota][0][galian][pasir_kwarsa][pemasaran]" placeholder="Tahun 2017">
			</div>
		</div>
		<div class="form-group">
			<label for="keluarga_penculikan_pelaku_luar" class="col-sm-3 control-label">b6. Program kegiatan pembangunan Desa lainnya</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="keluarga_penculikan_pelaku_luar" name="data[detail][keluarga][penculikan][pelaku_luar]" placeholder="Tahun 2016">
				<input type="text" class="form-control" id="anggota1_galian_batubara" name="data[anggota][0][galian][batubara][produksi]" placeholder="Tahun 2017"><br>
			</div>
		</div>
		<div class="form-group">
			<label for="keluarga_seksual_perkosaan_keluarga" class="col-sm-3 control-label">701. b7. Peningkatan investasi ekonomi Desa melalui pengadaan, pengembangan atau bantuan alat-alat produksi, permodalan, dan peningkatan kapasitas melalui pelatihan dan pemagangan. </label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="keluarga_seksual_pelaku_perkosaan_keluarga" name="data[detail][keluarga][seksual][perkosaan_keluarga]" placeholder="Tahun 2016">
				<input type="text" class="form-control" id="anggota1_galian_batubara" name="data[anggota][0][galian][batubara][adat]" placeholder="Tahun 2017"><br>
			</div>
		</div>
		<div class="form-group">
			<label for="keluarga_seksual_perkosaan_luar" class="col-sm-3 control-label">701. b8. Dukungan kegiatan ekonomi</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="keluarga_seksual_pelaku_perkosaan_luar" name="data[detail][keluarga][seksual][perkosaan_luar]" placeholder="Tahun 2016">
				<input type="text" class="form-control" id="anggota1_galian_batubara" name="data[anggota][0][galian][batubara][perorangan]" placeholder="Tahun 2017">
			</div>
		</div>
		<div class="form-group">
			<label for="keluarga_seksual_hln_sah" class="col-sm-3 control-label">701. b9. Bantuan peningkatan kapasitas untuk program dan kegiatan ketahanan pangan Desa
</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="keluarga_seksual_pelaku_hln_sah" name="data[detail][keluarga][seksual][hln_sah]" placeholder="Tahun 2016">
				<input type="text" class="form-control" id="anggota1_galian_batubara" name="data[anggota][0][galian][batubara][pemasaran]" placeholder="Tahun 2017">
			</div>
		</div>
		<div class="form-group">
			<label for="keluarga_seksual_htn" class="col-sm-3 control-label">701. b10. Pengorganisasian masyarakat, fasilitasi, bantuan hukum masyarakat dan pelatihan paralegal di Desa.</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="keluarga_seksual_pelaku_htn" name="data[detail][keluarga][seksual][htn]" placeholder="Rupiah">
				<input type="text" class="form-control" id="anggota1_galian_batu_granit" name="data[anggota][0][galian][batu_granit][produksi]" placeholder="Milik Produksi">
			</div>
		</div>
		<div class="form-group">
			<label for="keluarga_seksual_hbs" class="col-sm-3 control-label">701. b11. Promosi dan edukasi kesehatan masyarakat serta gerakan hidup bersih dan sehat</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="keluarga_seksual_pelaku_hbs" name="data[detail][keluarga][seksual][hbs]" placeholder="Tahun 2016">
				<input type="text" class="form-control" id="anggota1_galian_batu_granit" name="data[anggota][0][galian][batu_granit][adat]" placeholder="Tahun 2017">
			</div>
		</div>
		<div class="form-group">
			<label for="keluarga_kekerasan_peradot" class="col-sm-3 control-label">701. b12. Dukungan terhadap kegiatan pengelolaan pantai untuk kepentingan Desa;
</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="keluarga_kekerasan_pelaku_peradot" name="data[detail][keluarga][kekerasan][peradot]" placeholder="Tahun 2016">
				<input type="text" class="form-control" id="anggota1_galian_batu_granit" name="data[anggota][0][galian][batu_granit][perorangan]" placeholder="Tahun 2017"><br>
			</div>
		</div>
		<div class="form-group">
			<label for="keluarga_kekerasan_perada" class="col-sm-3 control-label">701. b13. Peningkatan kapasitas kelompok masyarakat untuk energi terbarukan dan pelestarian lingkungan hidup</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="keluarga_kekerasan_pelaku_perada" name="data[detail][keluarga][kekerasan][perada]" placeholder="Tahun 2016">
				<input type="text" class="form-control" id="anggota1_galian_batu_granit" name="data[anggota][0][galian][batu_granit][pemasaran]" placeholder="Tahun 2017">
			</div>
		</div>
		<div class="form-group">
			<label for="keluarga_kekerasan_peradiot" class="col-sm-3 control-label">701. b14. Program kegiatan pemberdayaan masyarakat Desa lainnya</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="keluarga_kekerasan_pelaku_peradiot" name="data[detail][keluarga][kekerasan][peradiot]" placeholder="Tahun 2016">
				<input type="text" class="form-control" id="anggota1_galian_batu_gamping" name="data[anggota][0][galian][batu_gamping][produksi]" placeholder="Tahun 2017"><br>
			</div>
		</div>
		<div class="form-group">
			<div class="col-md-12">702 . Informasi APBDes disebarluaskan ke masyarakat melalui
			</div>
		</div>
		<div class="form-group">
			<label for="keluarga_penyakit_keluarga_lepra" class="col-sm-3 control-label">702. a. Papan informasi</label>
			<div class="col-sm-5">
			<select class="form-control" name="data[detail][keluarga][penyakit_keluarga][lepra]" id="keluarga_penyakit_keluarga_lepra">
			<option value="Pilih">Silahkan Pilih</option>
					<option value="Ya">1. Ya</option>
					<option value="Tidak">0. Tidak</option>
					</select>
			</div>
		</div>
		<div class="form-group">
			<label for="keluarga_penyakit_keluarga_hiv" class="col-sm-3 control-label">702. b. Musyawarah desa</label>
			<div class="col-sm-5">
			<select class="form-control" name="data[detail][keluarga][penyakit_keluarga][hiv]" id="keluarga_penyakit_keluarga_hiv">
			<option value="Pilih">Silahkan Pilih</option>
					<option value="Ya">1. Ya</option>
					<option value="Tidak">0. Tidak</option>
					</select>
			</div>
		</div>
		<div class="form-group">
			<label for="keluarga_penyakit_keluarga_gila" class="col-sm-3 control-label">702. c. Website</label>
			<div class="col-sm-5">
			<select class="form-control" name="data[detail][keluarga][penyakit_keluarga][gila]" id="keluarga_penyakit_keluarga_gila">
			<option value="Pilih">Silahkan Pilih</option>
					<option value="Ya">1. Ya</option>
					<option value="Tidak">0. Tidak</option>
					</select>
			</div>
		</div>
		<div class="form-group">
			<label for="keluarga_penyakit_keluarga_tbc" class="col-sm-3 control-label">702. d. Lainnya</label>
			<div class="col-sm-5">
			<select class="form-control" name="data[detail][keluarga][penyakit_keluarga][tbc]" id="keluarga_penyakit_keluarga_tbc">
			<option value="Pilih">Silahkan Pilih</option>
					<option value="Ya">1. Ya</option>
					<option value="Tidak">0. Tidak</option>
					</select>
			</div>
		</div>
		<div class="form-group">
			<div class="col-md-12">703. Sumber Pendapatan Desa
			</div>
		</div>
		<div class="form-group">
			<label for="keluarga_kekerasan_peradp" class="col-sm-3 control-label">a.Berapa sumber dana dari Pendapatan Asli Desa?</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="keluarga_kekerasan_pelaku_peradp" name="data[detail][keluarga][kekerasan][peradp]" placeholder="Tahun 2016">
				<input type="text" class="form-control" id="anggota1_galian_batu_gamping" name="data[anggota][0][galian][batu_gamping][adat]" placeholder="Tahun 2017">
			</div>
		</div>
		<div class="form-group">
			<label for="keluarga_kekerasan_peradakl" class="col-sm-3 control-label">703. b. Berapa sumber dana dari Bagian dari hasil pajak daerah dan retribusi daerah Kabupaten/Kota</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="keluarga_kekerasan_pelaku_peradakl" name="data[detail][keluarga][kekerasan][peradakl]" placeholder="Tahun 2016">
				<input type="text" class="form-control" id="anggota1_galian_batu_gamping" name="data[anggota][0][galian][batu_gamping][perorangan]" placeholder="Tahun 2017"><br>
			</div>
		</div>
		<div class="form-group">
			<label for="keluarga_kekerasan_pemadot" class="col-sm-3 control-label">703. c. Berapa sumber dana dari Alokasi dana Desa yang merupakan bagian dari dana perimbangan yang diterima Kabupaten/Kota </label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="keluarga_kekerasan_pelaku_pemadot" name="data[detail][keluarga][kekerasan][pemadot]" placeholder="Tahun 2016">
				<input type="text" class="form-control" id="anggota1_galian_batu_gamping" name="data[anggota][0][galian][batu_gamping][pemasaran]" placeholder="Tahun 2017">
			</div>
		</div>
		<div class="form-group">
			<label for="keluarga_kekerasan_pemotda" class="col-sm-3 control-label">d. Berapa sumber dana dari bantuan dari APBD Kabupaten/Kota termasuk BOK dan DAK / DAU?U</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="keluarga_kekerasan_pelaku_pemotda" name="data[detail][keluarga][kekerasan][pemotda]" placeholder="Tahun 2016">
				<input type="text" class="form-control" id="anggota1_galian_mangan" name="data[anggota][0][galian][mangan][produksi]" placeholder="Tahun 2017"><br>
			</div>
		</div>
		<div class="form-group">
			<label for="keluarga_kekerasan_pemadkl" class="col-sm-3 control-label">703. e. Berapa sumber dana dari hibah dan sumbangan yang tidak mengikat dari pihak ketiga?  </label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="keluarga_kekerasan_pelaku_pemadkl" name="data[detail][keluarga][kekerasan][pemadkl]" placeholder="Tahun 2016">
				<input type="text" class="form-control" id="anggota1_galian_mangan" name="data[anggota][0][galian][mangan][adat]" placeholder="Tahun 2017"><br>
			</div>
		</div>
		<div class="form-group">
			<label for="keluarga_kekerasan_pemotot" class="col-sm-3 control-label">703. f. Sumber dana dari pendapatan desa lain yang sah </label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="keluarga_kekerasan_pelaku_pemotot" name="data[detail][keluarga][kekerasan][pemotot]" placeholder="Tahun 2016">
				<input type="text" class="form-control" id="anggota1_galian_mangan" name="data[anggota][0][galian][mangan][perorangan]" placeholder="Tahun 2017"><br>
			</div>
		</div>
		

				<div class="form-group">
			<div class="col-sm-5 col-sm-offset-2">
				<button type="submit" class="btn btn-lg btn-success"><i class="entypo-check"></i> Simpan</button>
				<a href="<?php echo base_url('data_dasar_keluarga') ?>" class="btn btn-lg btn-red pull-right"><i class="entypo-back"></i> Kembali</a>
			</div>
		</div>
	</form>

	<script type="text/javascript">
		jQuery(document).ready(function($){
			$('#kabupaten_id').select2({
				allowClear: false,
				minimumResultsForSearch: 10,
				ajax: {
					url: "<?php echo base_url('data_dasar_keluarga/get_lokasi') ?>",
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
				allowClear: false,
				minimumResultsForSearch: 10,
				ajax: {
					url: "<?php echo base_url('data_dasar_keluarga/get_lokasi') ?>",
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
				allowClear: false,
				minimumResultsForSearch: 10,
				ajax: {
					url: "<?php echo base_url('data_dasar_keluarga/get_lokasi') ?>",
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
			$("form").each(function(i, el){
				var $fields = $("form").find('[data-child]');

				$fields.each(function(j, el2){
					triggerDisabled(el2);
				});
			});

			$('[data-child]').change(function(){
				triggerDisabled($(this));
			});

			function triggerDisabled(el){
				var $field = $(el)
					$target = $field.data('child'),
					$childs = $("form").find('[data-parent="' + $target + '"]');

				if($field.val() == 'Ya'){
					$childs.attr('readonly', false).find('option:not(:selected)').attr('readonly', false);
				}
				else{
					$childs.attr('readonly', true).find('option:not(:selected)').attr('readonly', true);
				}
			}

			<?php if(!empty($this->session->userdata('kabupaten_id'))): ?> $('#kabupaten_id').select2('data', <?php echo json_encode(array('id'=>$this->session->userdata('kabupaten_id'), 'text'=>$this->session->userdata('kabupaten'))) ?>); <?php endif ?>
			<?php if(!empty($this->session->userdata('kecamatan_id'))): ?> $('#kecamatan_id').select2('data', <?php echo json_encode(array('id'=>$this->session->userdata('kecamatan_id'), 'text'=>$this->session->userdata('kecamatan'))) ?>); <?php endif ?>
			<?php if(!empty($this->session->userdata('desa_id'))): ?> $('#desa_id').select2('data', <?php echo json_encode(array('id'=>$this->session->userdata('desa_id'), 'text'=>$this->session->userdata('desa'))) ?>); <?php endif ?>
		});
	</script>
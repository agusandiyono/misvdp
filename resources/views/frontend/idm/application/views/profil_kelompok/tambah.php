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
			<label for="no_kelompok" class="col-sm-3 control-label">Nomor Kelompok Tani<span class="text-danger">*</span></label>
			<div class="col-sm-6">
				<input type="text" class="form-control" name="data[no_kelompok]" id="no_kelompok" data-validate="required" data-message-required="Kolom nomor kelompok tidak boleh kosong." placeholder="Nomor Kelompok Tani">
			</div>
		</div>
		<div class="form-group">
			<label for="pewawancara" class="col-sm-3 control-label">Pewawancara<span class="text-danger">*</span></label>
			<div class="col-sm-6">
				<input type="text" class="form-control" name="data[pewawancara]" id="pewawancara" data-validate="required" data-message-required="Kolom pewawancara tidak boleh kosong." placeholder="Pewawancara">
			</div>
		</div>
		<div class="form-group">
			<label for="tanggal" class="col-sm-3 control-label">Tanggal Kegiatan<span class="text-danger">*</span></label>
			<div class="col-sm-6">
				<input type="text" class="form-control datepicker" data-format="dd-mm-yyyy" id="tanggal" name="data[tanggal]" data-validate="required" data-message-required="Kolom tanggal kegiatan tidak boleh kosong." placeholder="Tanggal Kegiatan">
			</div>
		</div>

		<h3>I. Profil Kelompok Tani</h3>
		<hr>
		<div class="form-group">
			<label for="no_urut" class="col-sm-3 control-label">Nomor Urut<span class="text-danger">*</span></label>
			<div class="col-sm-6">
				<input type="text" class="form-control" name="data[no_urut]" id="no_urut" data-validate="required" data-message-required="Kolom nomor urut kegiatan tidak boleh kosong." placeholder="Nomor Urut">
			</div>
		</div>
		<div class="form-group">
			<label for="nama" class="col-sm-3 control-label">Nama Kelompok Tani<span class="text-danger">*</span></label>
			<div class="col-sm-6">
				<input type="text" class="form-control" name="data[nama]" id="nama" data-validate="required" data-message-required="Kolom nama kelompok tani kegiatan tidak boleh kosong." placeholder="Nama KelompokTani">
			</div>
		</div>
		<div class="form-group">
			<label for="provinsi_id" class="col-sm-3 control-label">Provinsi<span class="text-danger">*</span></label>
			<div class="col-sm-6">
				<?php if(!empty($this->session->userdata('provinsi_id'))): ?>
					<input type="hidden" name="data[provinsi_id]" value="<?php echo $this->session->userdata('provinsi_id') ?>" />
				<?php endif ?>
				<select name="data[provinsi_id]" class="form-control select2" id="provinsi_id" placeholder="Provinsi" data-validate="required" data-message-required="Kolom provinsi tidak boleh kosong." <?php echo !empty($this->session->userdata('provinsi_id')) ? 'disabled' : "" ?>>
					<option></option>
				<?php foreach ($list_provinsi as $provinsi): ?>
					<option value="<?php echo $provinsi->provinsi_code ?>" <?php echo $provinsi->provinsi_code == $this->session->userdata('provinsi_id') ? "selected" : "" ?>><?php echo $provinsi->provinsi_code ?> - <?php echo $provinsi->provinsi_name ?></option>
				<?php endforeach ?>
				</select>
			</div>
		</div>
		<div class="form-group">
			<label for="kabupaten_id" class="col-sm-3 control-label">Kabupaten<span class="text-danger">*</span></label>
			<div class="col-sm-6">
				<input type="text" name="data[kabupaten_id]" class="form-control" id="kabupaten_id" placeholder="Kabupaten" <?php echo !empty($this->session->userdata('kabupaten_id')) ? 'readonly' : "" ?>>
			</div>
		</div>
		<div class="form-group">
			<label for="kecamatan_id" class="col-sm-3 control-label">Kecamatan<span class="text-danger">*</span></label>
			<div class="col-sm-6">
				<input type="text" name="data[kecamatan_id]" class="form-control" id="kecamatan_id" placeholder="Kecamatan" <?php echo !empty($this->session->userdata('kecamatan_id')) ? 'readonly' : "" ?>>
			</div>
		</div>
		<div class="form-group">
			<label for="desa_id" class="col-sm-3 control-label">Desa<span class="text-danger">*</span></label>
			<div class="col-sm-6">
				<input type="text" name="data[desa_id]" class="form-control" id="desa_id" placeholder="Desa" <?php echo !empty($this->session->userdata('desa_id')) ? 'readonly' : "" ?>>
			</div>
		</div>
		<div class="form-group">
			<label for="no_hp" class="col-sm-3 control-label">Nomor yang bisa dihubungi</label>
			<div class="col-sm-6">
				<input type="text" class="form-control" name="data[no_hp]" id="no_hp" placeholder="Nomor yang bisa dihubungi">
			</div>
		</div>
		<div class="form-group">
			<label for="bidang_kegiatan" class="col-sm-3 control-label">Bidang Kegiatan yang Diusahakan</label>
			<div class="col-sm-6">
				<select class="form-control" name="data[bidang_kegiatan]" id="bidang_kegiatan">
					<option value="pertanian">Pertanian-Tan. Pangan</option>
					<option value="perkebunan">Perkebunan</option>
					<option value="buah">Buah-Buahan</option>
					<option value="peternakan">Peternakan</option>
					<option value="perikanan">Perikanan</option>
					<option value="hasil">Pengolahan Hasil</option>
				</select>
			</div>
		</div>
		<div class="form-group">
			<label for="pendirian" class="col-sm-3 control-label">Sejarah Pendirian</label>
			<div class="col-sm-6">
				<select class="form-control" name="data[pendirian]" id="pendirian">
					<option value="baru">Baru</option>
					<option value="lanjutan">Lanjutan</option>
				</select>
			</div>
		</div>
		<div class="form-group">
			<label for="tgl_berdiri" class="col-sm-3 control-label">Tanggal Berdiri</label>
			<div class="col-sm-6">
				<input type="text" class="form-control datepicker" data-format="dd-mm-yyyy" id="tgl_berdiri" name="data[tgl_berdiri]" placeholder="Tanggal Berdiri">
			</div>
		</div>
		<div class="form-group">
			<label for="tgl_operasional" class="col-sm-3 control-label">Tanggal Operasional</label>
			<div class="col-sm-6">
				<input type="text" class="form-control datepicker" data-format="dd-mm-yyyy" id="tgl_operasional" name="data[tgl_operasional]" placeholder="Tanggal Operasional">
			</div>
		</div>
		<div class="form-group">
			<label for="jumlah_lk" class="col-sm-3 control-label">Jumlah Anggota Laki-laki</label>
			<div class="col-sm-6">
				<input type="text" class="form-control" id="jumlah_lk" name="data[jumlah_lk]" placeholder="Jumlah Anggota Laki-laki">
			</div>
		</div>
		<div class="form-group">
			<label for="jumlah_p" class="col-sm-3 control-label">Jumlah Anggota Perempuan</label>
			<div class="col-sm-6">
				<input type="text" class="form-control" id="jumlah_p" name="data[jumlah_p]" placeholder="Jumlah Anggota Perempuan">
			</div>
		</div>
		<div class="form-group">
			<label for="status" class="col-sm-3 control-label">Kondisi Keaktifan Saat Ini</label>
			<div class="col-sm-6">
				<select class="form-control" name="data[status]" id="status">
					<option value="aktif">Aktif</option>
					<option value="tidak">Tidak Aktif</option>
				</select>
			</div>
		</div>

		<h3>II. Komoditi Kelompok Tani</h3>
		<hr>
		<div class="form-bidang form-groups-bordered pertanian">
			<div class="form-group">
				<label for="pertanian_lahan" class="col-sm-3 control-label">Luas Lahan</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="pertanian_lahan" name="data[detail][pertanian][komoditi][lahan]" placeholder="Luas Lahan">
				</div>
			</div>
			<div class="form-group">
				<label for="pertanian_status_lahan" class="col-sm-3 control-label">Status Kepemilikan Lahan</label>
				<div class="col-sm-6">
					<select class="form-control select-lain" name="data[detail][pertanian][komoditi][status_lahan]" id="pertanian_status_lahan">
						<option value="milik">Milik</option>
						<option value="sewa">Sewa</option>
						<option value="pinjam">Pinjam</option>
						<option value="pemerintah">Pemerintah</option>
						<option value="lainnya">Lainnya</option>
					</select>
					<input type="text" class="form-control field-lain hidden" name="data[detail][pertanian][komoditi][status_lahan_lain]" placeholder="Status Kepemilikan Lahan">
				</div>
			</div>
			<div class="form-group">
				<label for="pertanian_komoditi_unggulan" class="col-sm-3 control-label">Komoditi Unggulan</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="pertanian_komoditi_unggulan" name="data[detail][pertanian][komoditi][komoditi_unggulan]" placeholder="Komoditi Unggulan">
				</div>
			</div>
			<div class="form-group">
				<label for="pertanian_panen_1" class="col-sm-3 control-label">Hasil Panen Terakhir</label>
				<div class="col-sm-3">
					<span>Panen 1</span>
					<input type="text" class="form-control" id="pertanian_panen_1" name="data[detail][pertanian][komoditi][panen][1]" placeholder="Panen 1">
				</div>
				<div class="col-sm-3">
					<span>Panen 2</span>
					<input type="text" class="form-control" id="pertanian_panen_2" name="data[detail][pertanian][komoditi][panen][2]" placeholder="Panen 2">
				</div>
			</div>
			<div class="form-group">
				<label for="pertanian_konsumsi" class="col-sm-3 control-label">Berapa Banyak Digunakan / di Konsumsi Sendiri</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="pertanian_konsumsi" name="data[detail][pertanian][komoditi][konsumsi]" placeholder="Berapa Banyak Digunakan / di Konsumsi Sendiri">
				</div>
			</div>
			<div class="form-group">
				<label for="pertanian_terjual" class="col-sm-3 control-label">Berapa Banyak yang Dijual</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="pertanian_terjual" name="data[detail][pertanian][komoditi][terjual]" placeholder="Berapa Banyak yang Dijual">
				</div>
			</div>
			<div class="form-group">
				<label for="pertanian_pemasaran" class="col-sm-3 control-label">Tempat Menjual Hasil</label>
				<div class="col-sm-6">
					<select class="form-control select-lain" name="data[detail][pertanian][komoditi][pemasaran]" id="pertanian_pemasaran">
						<option value="pasar_kampung">Pasar Kampung</option>
						<option value="pasar_distrik">Pasar Distrik</option>
						<option value="pasar_provinsi">Pasar Provinsi</option>
						<option value="pasar_luar_provinsi">Pasar Luar Provinsi</option>
						<option value="pengumpul_kampung">Pengumpul Kampung</option>
						<option value="lainnya">Lainnya</option>
					</select>
					<input type="text" class="form-control field-lain hidden" name="data[detail][pertanian][komoditi][pemasaran_lain]" placeholder="Tempat Menjual Hasil">
				</div>
			</div>
			<div class="form-group">
				<label for="pertanian_harga" class="col-sm-3 control-label">Harga Jual /kg</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="pertanian_harga" name="data[detail][pertanian][komoditi][harga]" placeholder="Harga Jual /kg">
				</div>
			</div>
		</div>
		<div class="form-bidang form-groups-bordered perkebunan hidden">
			<div class="form-group">
				<label for="perkebunan_lahan" class="col-sm-3 control-label">Luas Lahan</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="perkebunan_lahan" name="data[detail][perkebunan][komoditi][lahan]" placeholder="Luas Lahan">
				</div>
			</div>
			<div class="form-group">
				<label for="perkebunan_status_lahan" class="col-sm-3 control-label">Status Kepemilikan Lahan</label>
				<div class="col-sm-6">
					<select class="form-control select-lain" name="data[detail][perkebunan][komoditi][status_lahan]" id="perkebunan_status_lahan">
						<option value="milik">Milik</option>
						<option value="sewa">Sewa</option>
						<option value="pinjam">Pinjam</option>
						<option value="pemerintah">Pemerintah</option>
						<option value="lainnya">Lainnya</option>
					</select>
					<input type="text" class="form-control field-lain hidden" name="data[detail][perkebunan][komoditi][status_lahan_lain]" placeholder="Status Kepemilikan Lahan">
				</div>
			</div>
			<div class="form-group">
				<label for="perkebunan_komoditi_unggulan_1" class="col-sm-3 control-label">Komoditi Unggulan</label>
				<div class="col-sm-3">
					<span>Musim Tanam 1</span>
					<input type="text" class="form-control" id="perkebunan_komoditi_unggulan_1" name="data[detail][perkebunan][komoditi][komoditi_unggulan][1]" placeholder="Musim Tanam 1">
				</div>
				<div class="col-sm-3">
					<span>Musim Tanam 2</span>
					<input type="text" class="form-control" id="perkebunan_komoditi_unggulan_2" name="data[detail][perkebunan][komoditi][komoditi_unggulan][2]" placeholder="Musim Tanam 2">
				</div>
			</div>
			<div class="form-group">
				<label for="perkebunan_panen_1" class="col-sm-3 control-label">Hasil Panen Terakhir</label>
				<div class="col-sm-3">
					<span>Musim Tanam 1</span>
					<input type="text" class="form-control" id="perkebunan_panen_1" name="data[detail][perkebunan][komoditi][panen][1]" placeholder="Musim Tanam 1">
				</div>
				<div class="col-sm-3">
					<span>Musim Tanam 2</span>
					<input type="text" class="form-control" id="perkebunan_panen_2" name="data[detail][perkebunan][komoditi][panen][2]" placeholder="Musim Tanam 2">
				</div>
			</div>
			<div class="form-group">
				<label for="perkebunan_konsumsi" class="col-sm-3 control-label">Berapa Banyak Digunakan / di Konsumsi Sendiri</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="perkebunan_konsumsi" name="data[detail][perkebunan][komoditi][konsumsi]" placeholder="Berapa Banyak Digunakan / di Konsumsi Sendiri">
				</div>
			</div>
			<div class="form-group">
				<label for="perkebunan_terjual" class="col-sm-3 control-label">Berapa Banyak yang Dijual</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="perkebunan_terjual" name="data[detail][perkebunan][komoditi][terjual]" placeholder="Berapa Banyak yang Dijual">
				</div>
			</div>
			<div class="form-group">
				<label for="perkebunan_pemasaran" class="col-sm-3 control-label">Tempat Menjual Hasil</label>
				<div class="col-sm-6">
					<select class="form-control select-lain" name="data[detail][perkebunan][komoditi][pemasaran]" id="perkebunan_pemasaran">
						<option value="pasar_kampung">Pasar Kampung</option>
						<option value="pasar_distrik">Pasar Distrik</option>
						<option value="pasar_provinsi">Pasar Provinsi</option>
						<option value="pasar_luar_provinsi">Pasar Luar Provinsi</option>
						<option value="pengumpul_kampung">Pengumpul Kampung</option>
						<option value="lainnya">Lainnya</option>
					</select>
					<input type="text" class="form-control field-lain hidden" name="data[detail][perkebunan][komoditi][pemasaran_lain]" placeholder="Tempat Menjual Hasil">
				</div>
			</div>
			<div class="form-group">
				<label for="perkebunan_harga" class="col-sm-3 control-label">Harga Jual /kg</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="perkebunan_harga" name="data[detail][perkebunan][komoditi][harga]" placeholder="Harga Jual /kg">
				</div>
			</div>
		</div>
		<div class="form-bidang form-groups-bordered buah hidden">
			<div class="form-group">
				<label for="buah_lahan" class="col-sm-3 control-label">Luas Lahan</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="buah_lahan" name="data[detail][buah][komoditi][lahan]" placeholder="Luas Lahan">
				</div>
			</div>
			<div class="form-group">
				<label for="buah_status_lahan" class="col-sm-3 control-label">Status Kepemilikan Lahan</label>
				<div class="col-sm-6">
					<select class="form-control select-lain" name="data[detail][buah][komoditi][status_lahan]" id="buah_status_lahan">
						<option value="milik">Milik</option>
						<option value="sewa">Sewa</option>
						<option value="pinjam">Pinjam</option>
						<option value="pemerintah">Pemerintah</option>
						<option value="lainnya">Lainnya</option>
					</select>
					<input type="text" class="form-control field-lain hidden" name="data[detail][buah][komoditi][status_lahan_lain]" placeholder="Status Kepemilikan Lahan">
				</div>
			</div>
			<div class="form-group">
				<label for="buah_komoditi_unggulan_1" class="col-sm-3 control-label">Komoditi Unggulan</label>
				<div class="col-sm-3">
					<span>Musim Tanam 1</span>
					<input type="text" class="form-control" id="buah_komoditi_unggulan_1" name="data[detail][buah][komoditi][komoditi_unggulan][1]" placeholder="Musim Tanam 1">
				</div>
				<div class="col-sm-3">
					<span>Musim Tanam 2</span>
					<input type="text" class="form-control" id="buah_komoditi_unggulan_2" name="data[detail][buah][komoditi][komoditi_unggulan][2]" placeholder="Musim Tanam 2">
				</div>
			</div>
			<div class="form-group">
				<label for="buah_panen_1" class="col-sm-3 control-label">Hasil Panen Terakhir</label>
				<div class="col-sm-3">
					<span>Musim Tanam 1</span>
					<input type="text" class="form-control" id="buah_panen_1" name="data[detail][buah][komoditi][panen][1]" placeholder="Musim Tanam 1">
				</div>
				<div class="col-sm-3">
					<span>Musim Tanam 2</span>
					<input type="text" class="form-control" id="buah_panen_2" name="data[detail][buah][komoditi][panen][2]" placeholder="Musim Tanam 2">
				</div>
			</div>
			<div class="form-group">
				<label for="buah_konsumsi" class="col-sm-3 control-label">Berapa Banyak Digunakan / di Konsumsi Sendiri</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="buah_konsumsi" name="data[detail][buah][komoditi][konsumsi]" placeholder="Berapa Banyak Digunakan / di Konsumsi Sendiri">
				</div>
			</div>
			<div class="form-group">
				<label for="buah_terjual" class="col-sm-3 control-label">Berapa Banyak yang Dijual</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="buah_terjual" name="data[detail][buah][komoditi][terjual]" placeholder="Berapa Banyak yang Dijual">
				</div>
			</div>
			<div class="form-group">
				<label for="buah_pemasaran" class="col-sm-3 control-label">Tempat Menjual Hasil</label>
				<div class="col-sm-6">
					<select class="form-control select-lain" name="data[detail][buah][komoditi][pemasaran]" id="buah_pemasaran">
						<option value="pasar_kampung">Pasar Kampung</option>
						<option value="pasar_distrik">Pasar Distrik</option>
						<option value="pasar_provinsi">Pasar Provinsi</option>
						<option value="pasar_luar_provinsi">Pasar Luar Provinsi</option>
						<option value="pengumpul_kampung">Pengumpul Kampung</option>
						<option value="lainnya">Lainnya</option>
					</select>
					<input type="text" class="form-control field-lain hidden" name="data[detail][buah][komoditi][pemasaran_lain]" placeholder="Tempat Menjual Hasil">
				</div>
			</div>
			<div class="form-group">
				<label for="buah_harga" class="col-sm-3 control-label">Harga Jual /kg</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="buah_harga" name="data[detail][buah][komoditi][harga]" placeholder="Harga Jual /kg">
				</div>
			</div>
		</div>
		<div class="form-bidang form-groups-bordered peternakan hidden">
			<div class="form-group">
				<label for="peternakan_jenis" class="col-sm-3 control-label">Jenis Ternak</label>
				<div class="col-sm-6">
					<select class="form-control" name="data[detail][peternakan][komoditi][jenis]" id="peternakan_jenis">
						<option value="sapi">Sapi</option>
						<option value="babi/kambing">Babi/Kambing</option>
						<option value="kelinci">Kelinci</option>
						<option value="ayam/bebek/itik">Ayam/Bebek/Itik</option>
					</select>
				</div>
			</div>
			<div class="form-group">
				<label for="peternakan_lahan" class="col-sm-3 control-label">Luas Kandang</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="peternakan_lahan" name="data[detail][peternakan][komoditi][lahan]" placeholder="Luas Kandang">
				</div>
			</div>
			<div class="form-group">
				<label for="peternakan_jumlah_awal" class="col-sm-3 control-label">Jumlah Awal pengadaan (bantuan PNPM)</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="peternakan_jumlah_awal" name="data[detail][peternakan][komoditi][jumlah_awal]" placeholder="Jumlah Awal pengadaan (bantuan PNPM)">
				</div>
			</div>
			<div class="form-group">
				<label for="peternakan_jumlah_sekarang" class="col-sm-3 control-label">Jumlah Saat Ini</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="peternakan_jumlah_sekarang" name="data[detail][peternakan][komoditi][jumlah_sekarang]" placeholder="Jumlah Saat Ini">
				</div>
			</div>
			<div class="form-group">
				<label for="peternakan_status_lahan" class="col-sm-3 control-label">Status Kepemilikan Lahan/Kandang</label>
				<div class="col-sm-6">
					<select class="form-control select-lain" name="data[detail][peternakan][komoditi][status_lahan]" id="peternakan_status_lahan">
						<option value="milik">Milik</option>
						<option value="sewa">Sewa</option>
						<option value="pinjam">Pinjam</option>
						<option value="pemerintah">Pemerintah</option>
						<option value="lainnya">Lainnya</option>
					</select>
					<input type="text" class="form-control field-lain hidden" name="data[detail][peternakan][komoditi][status_lahan_lain]" placeholder="Status Kepemilikan Lahan">
				</div>
			</div>
			<div class="form-group">
				<label for="peternakan_konsumsi" class="col-sm-3 control-label">Berapa Banyak Digunakan / di Konsumsi Sendiri</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="peternakan_konsumsi" name="data[detail][peternakan][komoditi][konsumsi]" placeholder="Berapa Banyak Digunakan / di Konsumsi Sendiri">
				</div>
			</div>
			<div class="form-group">
				<label for="peternakan_terjual" class="col-sm-3 control-label">Berapa Banyak yang Dijual</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="peternakan_terjual" name="data[detail][peternakan][komoditi][terjual]" placeholder="Berapa Banyak yang Dijual">
				</div>
			</div>
			<div class="form-group">
				<label for="peternakan_pemasaran" class="col-sm-3 control-label">Tempat Menjual Hasil</label>
				<div class="col-sm-6">
					<select class="form-control select-lain" name="data[detail][peternakan][komoditi][pemasaran]" id="peternakan_pemasaran">
						<option value="pasar_kampung">Pasar Kampung</option>
						<option value="pasar_distrik">Pasar Distrik</option>
						<option value="pasar_provinsi">Pasar Provinsi</option>
						<option value="pasar_luar_provinsi">Pasar Luar Provinsi</option>
						<option value="pengumpul_kampung">Pengumpul Kampung</option>
						<option value="lainnya">Lainnya</option>
					</select>
					<input type="text" class="form-control field-lain hidden" name="data[detail][peternakan][komoditi][pemasaran_lain]" placeholder="Tempat Menjual Hasil">
				</div>
			</div>
			<div class="form-group">
				<label for="peternakan_harga" class="col-sm-3 control-label">Harga Jual /kg</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="peternakan_harga" name="data[detail][peternakan][komoditi][harga]" placeholder="Harga Jual /kg">
				</div>
			</div>
		</div>
		<div class="form-bidang form-groups-bordered perikanan hidden">
			<div class="form-group">
				<label for="perikanan_lahan" class="col-sm-3 control-label">Luas Kolam</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="perikanan_lahan" name="data[detail][perikanan][komoditi][lahan]" placeholder="Luas Kolam">
				</div>
			</div>
			<div class="form-group">
				<label for="perikanan_jenis" class="col-sm-3 control-label">Jenis Usaha</label>
				<div class="col-sm-6">
					<select class="form-control" name="data[detail][perikanan][komoditi][jenis]" id="perikanan_jenis">
						<option value="perikanan">Perikanan</option>
						<option value="rumput_laut">Rumput Laut</option>
					</select>
				</div>
			</div>
			<div class="form-group">
				<label for="perikanan_jumlah_benih" class="col-sm-3 control-label">Jumlah Benih/Ekor</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="perikanan_jumlah_benih" name="data[detail][perikanan][komoditi][jumlah_benih]" placeholder="Jumlah Benih/Ekor">
				</div>
			</div>
			<div class="form-group">
				<label for="perikanan_status_lahan" class="col-sm-3 control-label">Status Kepemilikan Lahan</label>
				<div class="col-sm-6">
					<select class="form-control select-lain" name="data[detail][perikanan][komoditi][status_lahan]" id="perikanan_status_lahan">
						<option value="milik">Milik</option>
						<option value="sewa">Sewa</option>
						<option value="pinjam">Pinjam</option>
						<option value="pemerintah">Pemerintah</option>
						<option value="lainnya">Lainnya</option>
					</select>
					<input type="text" class="form-control field-lain hidden" name="data[detail][perikanan][komoditi][status_lahan_lain]" placeholder="Status Kepemilikan Lahan">
				</div>
			</div>
			<div class="form-group">
				<label for="perikanan_konsumsi" class="col-sm-3 control-label">Berapa Banyak Digunakan / di Konsumsi Sendiri</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="perikanan_konsumsi" name="data[detail][perikanan][komoditi][konsumsi]" placeholder="Berapa Banyak Digunakan / di Konsumsi Sendiri">
				</div>
			</div>
			<div class="form-group">
				<label for="perikanan_terjual" class="col-sm-3 control-label">Berapa Banyak yang Dijual</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="perikanan_terjual" name="data[detail][perikanan][komoditi][terjual]" placeholder="Berapa Banyak yang Dijual">
				</div>
			</div>
			<div class="form-group">
				<label for="perikanan_pemasaran" class="col-sm-3 control-label">Tempat Menjual Hasil</label>
				<div class="col-sm-6">
					<select class="form-control select-lain" name="data[detail][perikanan][komoditi][pemasaran]" id="perikanan_pemasaran">
						<option value="pasar_kampung">Pasar Kampung</option>
						<option value="pasar_distrik">Pasar Distrik</option>
						<option value="pasar_provinsi">Pasar Provinsi</option>
						<option value="pasar_luar_provinsi">Pasar Luar Provinsi</option>
						<option value="pengumpul_kampung">Pengumpul Kampung</option>
						<option value="lainnya">Lainnya</option>
					</select>
					<input type="text" class="form-control field-lain hidden" name="data[detail][perikanan][komoditi][pemasaran_lain]" placeholder="Tempat Menjual Hasil">
				</div>
			</div>
			<div class="form-group">
				<label for="perikanan_harga" class="col-sm-3 control-label">Harga Jual /kg</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="perikanan_harga" name="data[detail][perikanan][komoditi][harga]" placeholder="Harga Jual /kg">
				</div>
			</div>
		</div>
		<div class="form-bidang form-groups-bordered hasil hidden">
			<div class="form-group">
				<label for="hasil_lahan" class="col-sm-3 control-label">Luas Tempat Usaha</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="hasil_lahan" name="data[detail][hasil][komoditi][lahan]" placeholder="Luas Tempat Usaha">
				</div>
			</div>
			<div class="form-group">
				<label for="hasil_status_lahan" class="col-sm-3 control-label">Status Kepemilikan Lahan</label>
				<div class="col-sm-6">
					<select class="form-control select-lain" name="data[detail][hasil][komoditi][status_lahan]" id="hasil_status_lahan">
						<option value="milik">Milik</option>
						<option value="sewa">Sewa</option>
						<option value="pinjam">Pinjam</option>
						<option value="pemerintah">Pemerintah</option>
						<option value="lainnya">Lainnya</option>
					</select>
					<input type="text" class="form-control field-lain hidden" name="data[detail][hasil][komoditi][status_lahan_lain]" placeholder="Status Kepemilikan Lahan">
				</div>
			</div>
			<div class="form-group">
				<label for="hasil_jenis_olahan_1" class="col-sm-3 control-label">Komoditi Pengolahan Hasil</label>
				<div class="col-sm-3">
					<span>Jenis Olahan 1</span>
					<input type="text" class="form-control" id="hasil_jenis_olahan_1" name="data[detail][hasil][komoditi][olahan][1]" placeholder="Jenis Olahan 1">
				</div>
				<div class="col-sm-3">
					<span>Jenis Olahan 2</span>
					<input type="text" class="form-control" id="hasil_jenis_olahan_2" name="data[detail][hasil][komoditi][olahan][2]" placeholder="Jenis Olahan 2">
				</div>
			</div>
			<div class="form-group">
				<label for="hasil_jenis_olahan_3" class="col-sm-3 control-label"></label>
				<div class="col-sm-3">
					<span>Jenis Olahan 3</span>
					<input type="text" class="form-control" id="hasil_jenis_olahan_3" name="data[detail][hasil][komoditi][olahan][3]" placeholder="Jenis Olahan 3">
				</div>
				<div class="col-sm-3">
					<span>Jenis Olahan 4</span>
					<input type="text" class="form-control" id="hasil_jenis_olahan_4" name="data[detail][hasil][komoditi][olahan][4]" placeholder="Jenis Olahan 4">
				</div>
			</div>
			<div class="form-group">
				<label for="hasil_jenis_olahan_sebelum_1" class="col-sm-3 control-label">Hasil Produksi Sebelum ikut serta dalam PNPM MPd Pertanian</label>
				<div class="col-sm-3">
					<span>Jenis Olahan 1</span>
					<input type="text" class="form-control" id="hasil_jenis_olahan_sebelum_1" name="data[detail][hasil][komoditi][olahan_sebelum][1][jenis]" placeholder="Jenis Olahan 1">
				</div>
				<div class="col-sm-3">
					<span>Harga Jenis Olahan 1</span>
					<input type="text" class="form-control" id="hasil_harga_jenis_olahan_sebelum_1" name="data[detail][hasil][komoditi][olahan_sebelum][1][harga]" placeholder="Harga Jenis Olahan 1">
				</div>
			</div>
			<div class="form-group">
				<label for="hasil_jenis_olahan_sebelum_2" class="col-sm-3 control-label"></label>
				<div class="col-sm-3">
					<span>Jenis Olahan 2</span>
					<input type="text" class="form-control" id="hasil_jenis_olahan_sebelum_2" name="data[detail][hasil][komoditi][olahan_sebelum][2][jenis]" placeholder="Jenis Olahan 2">
				</div>
				<div class="col-sm-3">
					<span>Harga Jenis Olahan 2</span>
					<input type="text" class="form-control" id="hasil_harga_jenis_olahan_sebelum_2" name="data[detail][hasil][komoditi][olahan_sebelum][2][harga]" placeholder="Harga Jenis Olahan 2">
				</div>
			</div>
			<div class="form-group">
				<label for="hasil_jenis_olahan_sebelum_3" class="col-sm-3 control-label"></label>
				<div class="col-sm-3">
					<span>Jenis Olahan 3</span>
					<input type="text" class="form-control" id="hasil_jenis_olahan_sebelum_3" name="data[detail][hasil][komoditi][olahan_sebelum][3][jenis]" placeholder="Jenis Olahan 3">
				</div>
				<div class="col-sm-3">
					<span>Harga Jenis Olahan 3</span>
					<input type="text" class="form-control" id="hasil_harga_jenis_olahan_sebelum_3" name="data[detail][hasil][komoditi][olahan_sebelum][3][harga]" placeholder="Harga Jenis Olahan 3">
				</div>
			</div>
			<div class="form-group">
				<label for="hasil_jenis_olahan_sebelum_4" class="col-sm-3 control-label"></label>
				<div class="col-sm-3">
					<span>Jenis Olahan 4</span>
					<input type="text" class="form-control" id="hasil_jenis_olahan_sebelum_4" name="data[detail][hasil][komoditi][olahan_sebelum][4][jenis]" placeholder="Jenis Olahan 4">
				</div>
				<div class="col-sm-3">
					<span>Harga Jenis Olahan 4</span>
					<input type="text" class="form-control" id="hasil_harga_jenis_olahan_sebelum_4" name="data[detail][hasil][komoditi][olahan_sebelum][4][harga]" placeholder="Harga Jenis Olahan 4">
				</div>
			</div><div class="form-group">
				<label for="hasil_jenis_olahan_setelah_1" class="col-sm-3 control-label">Hasil Produksi Setelah ikut serta dalam PNPM MPd Pertanian</label>
				<div class="col-sm-3">
					<span>Jenis Olahan 1</span>
					<input type="text" class="form-control" id="hasil_jenis_olahan_setelah_1" name="data[detail][hasil][komoditi][olahan_setelah][1][jenis]" placeholder="Jenis Olahan 1">
				</div>
				<div class="col-sm-3">
					<span>Harga Jenis Olahan 1</span>
					<input type="text" class="form-control" id="hasil_harga_jenis_olahan_setelah_1" name="data[detail][hasil][komoditi][olahan_setelah][1][harga]" placeholder="Harga Jenis Olahan 1">
				</div>
			</div>
			<div class="form-group">
				<label for="hasil_jenis_olahan_setelah_2" class="col-sm-3 control-label"></label>
				<div class="col-sm-3">
					<span>Jenis Olahan 2</span>
					<input type="text" class="form-control" id="hasil_jenis_olahan_setelah_2" name="data[detail][hasil][komoditi][olahan_setelah][2][jenis]" placeholder="Jenis Olahan 2">
				</div>
				<div class="col-sm-3">
					<span>Harga Jenis Olahan 2</span>
					<input type="text" class="form-control" id="hasil_harga_jenis_olahan_setelah_2" name="data[detail][hasil][komoditi][olahan_setelah][2][harga]" placeholder="Harga Jenis Olahan 2">
				</div>
			</div>
			<div class="form-group">
				<label for="hasil_jenis_olahan_setelah_3" class="col-sm-3 control-label"></label>
				<div class="col-sm-3">
					<span>Jenis Olahan 3</span>
					<input type="text" class="form-control" id="hasil_jenis_olahan_setelah_3" name="data[detail][hasil][komoditi][olahan_setelah][3][jenis]" placeholder="Jenis Olahan 3">
				</div>
				<div class="col-sm-3">
					<span>Harga Jenis Olahan 3</span>
					<input type="text" class="form-control" id="hasil_harga_jenis_olahan_setelah_3" name="data[detail][hasil][komoditi][olahan_setelah][3][harga]" placeholder="Harga Jenis Olahan 3">
				</div>
			</div>
			<div class="form-group">
				<label for="hasil_jenis_olahan_setelah_4" class="col-sm-3 control-label"></label>
				<div class="col-sm-3">
					<span>Jenis Olahan 4</span>
					<input type="text" class="form-control" id="hasil_jenis_olahan_setelah_4" name="data[detail][hasil][komoditi][olahan_setelah][4][jenis]" placeholder="Jenis Olahan 4">
				</div>
				<div class="col-sm-3">
					<span>Harga Jenis Olahan 4</span>
					<input type="text" class="form-control" id="hasil_harga_jenis_olahan_setelah_4" name="data[detail][hasil][komoditi][olahan_setelah][4][harga]" placeholder="Harga Jenis Olahan 4">
				</div>
			</div>
			<div class="form-group">
				<label for="hasil_konsumsi" class="col-sm-3 control-label">Berapa Banyak Digunakan</label>
				<div class="col-sm-5">
					<input type="text" class="form-control" id="hasil_konsumsi" name="data[detail][hasil][komoditi][konsumsi]" placeholder="Berapa Banyak Digunakan">
				</div>
			</div>
			<div class="form-group">
				<label for="hasil_terjual" class="col-sm-3 control-label">Berapa Banyak yang Dijual</label>
				<div class="col-sm-5">
					<input type="text" class="form-control" id="hasil_terjual" name="data[detail][hasil][komoditi][terjual]" placeholder="Berapa Banyak yang Dijual">
				</div>
			</div>
			<div class="form-group">
				<label for="hasil_pemasaran" class="col-sm-3 control-label">Tempat Menjual Hasil</label>
				<div class="col-sm-5">
					<select class="form-control select-lain" name="data[detail][hasil][komoditi][pemasaran]" id="hasil_pemasaran">
						<option value="pasar_kampung">Pasar Kampung</option>
						<option value="pasar_distrik">Pasar Distrik</option>
						<option value="pasar_provinsi">Pasar Provinsi</option>
						<option value="pasar_luar_provinsi">Pasar Luar Provinsi</option>
						<option value="pengumpul_kampung">Pengumpul Kampung</option>
						<option value="lainnya">Lainnya</option>
					</select>
					<input type="text" class="form-control field-lain hidden" name="data[detail][hasil][komoditi][pemasaran_lain]" placeholder="Tempat Menjual Hasil">
				</div>
			</div>
			<div class="form-group">
				<label for="hasil_harga" class="col-sm-3 control-label">Harga Jual /kg</label>
				<div class="col-sm-5">
					<input type="text" class="form-control" id="hasil_harga" name="data[detail][hasil][komoditi][harga]" placeholder="Harga Jual /kg">
				</div>
			</div>
		</div>

		<h3>III. Sarana yang Dimiliki</h3>
		<hr>
		<div class="form-bidang form-groups-bordered pertanian">
			<div class="form-group">
				<label for="pertanian_pertemuan" class="col-sm-3 control-label">Tempat Pertemuan</label>
				<div class="col-sm-6">
					<select class="form-control select-lain" name="data[detail][pertanian][sarana][pertemuan]" id="pertanian_pertemuan">
						<option value="saung">Saung kelompok</option>
						<option value="balai">Balai kampung/desa</option>
						<option value="rumah_pengurus">Rumah pengurus</option>
						<option value="rumah_anggota">Rumah anggota</option>
						<option value="lainnya">Lainnya</option>
					</select>
					<input type="text" class="form-control field-lain hidden" name="data[detail][pertanian][sarana][pertemuan_lainnya]" placeholder="Tempat Pertemuan">
				</div>
			</div>
			<div class="form-group">
				<label for="pertanian_peralatan" class="col-sm-3 control-label">Peralatan Yang Diperoleh Untuk Pelaksanaan Produksi</label>
				<div class="col-sm-6">
					<div class="checkbox">
						<label>
							<input type="checkbox" name="data[detail][pertanian][sarana][peralatan][]" value="Cangkul">Cangkul
						</label>
					</div>
					<div class="checkbox">
						<label>
							<input type="checkbox" name="data[detail][pertanian][sarana][peralatan][]" value="Parang">Parang
						</label>
					</div>
					<div class="checkbox">
						<label>
							<input type="checkbox" name="data[detail][pertanian][sarana][peralatan][]" value="Sekop">Sekop
						</label>
					</div>
					<div class="checkbox">
						<label>
							<input type="checkbox" name="data[detail][pertanian][sarana][peralatan][]" value="Pakuel">Pakuel
						</label>
					</div>
					<div class="checkbox">
						<label>
							<input type="checkbox" name="data[detail][pertanian][sarana][peralatan][]" value="Garpu">Garpu
						</label>
					</div>
					<div class="checkbox">
						<label>
							<input type="checkbox" name="data[detail][pertanian][sarana][peralatan][]" value="Peralatan tukang">Peralatan tukang
						</label>
					</div>
					<div class="checkbox">
						<label>
							<input type="checkbox" name="data[detail][pertanian][sarana][peralatan][]" value="Selang">Selang
						</label>
					</div>
					<div class="checkbox">
						<label>
							<input type="checkbox" name="data[detail][pertanian][sarana][peralatan][]" value="Handsprayer">Handsprayer
						</label>
					</div>
					<div class="checkbox">
						<label>
							<input type="checkbox" name="data[detail][pertanian][sarana][peralatan][]" value="Gembor">Gembor
						</label>
					</div>
					<div class="checkbox">
						<label>
							<input type="checkbox" name="data[detail][pertanian][sarana][peralatan][]" value="Hand tractor">Hand tractor
						</label>
					</div>
					<div class="checkbox">
						<label>
							<input type="checkbox" name="data[detail][pertanian][sarana][peralatan][]" value="Sepatu boat, serok, jerigen, kored, dll">Sepatu boat, serok, jerigen, kored, dll
						</label>
					</div>
					<div class="checkbox">
						<label>
							<input type="checkbox" name="data[detail][pertanian][sarana][peralatan][]" value="Motor roda tiga">Motor roda tiga
						</label>
					</div>
				</div>
			</div>
			<div class="form-group">
				<label for="pertanian_transportasi" class="col-sm-3 control-label">Pengangkutan Hasil Dari Lahan Ke Rumah</label>
				<div class="col-sm-6">
					<select class="form-control select-lain" name="data[detail][pertanian][sarana][transportasi]" id="pertanian_transportasi">
						<option value="gerobak_kelompok">Gerobak kelompok</option>
						<option value="gerobak_pribadi">Gerobak pribadi </option>
						<option value="beko_kelompok">Beko (roda tiga) kelompok</option>
						<option value="beko_pribadi">Beko pribadi</option>
						<option value="motor_kelompok">Motor kelompok</option>
						<option value="motor_pribadi">Motor pribadi </option>
						<option value="lainnya">Lainnya</option>
					</select>
					<input type="text" class="form-control field-lain hidden" name="data[detail][pertanian][sarana][transportasi_lainnya]" placeholder="Pengangkutan Hasil Dari Lahan Ke Rumah">
				</div>
			</div>
			<div class="form-group">
				<label for="pertanian_gudang" class="col-sm-3 control-label">Penyimpanan Alat dan Hasil Produksi</label>
				<div class="col-sm-6">
					<select class="form-control" name="data[detail][pertanian][sarana][gudang]" id="pertanian_gudang">
						<option value="gudang_kelompok">Gudang kelompok</option>
						<option value="gudang_pengurus">Gudang pribadi pengurus kelompok</option>
						<option value="gudang_anggota">Gudang pribadi salah satu anggota</option>
						<option value="gudang_desa">Gudang kampung/desa</option>
						<option value="gudang_mitra">Gudang mitra kerja</option>
					</select>
				</div>
			</div>
		</div>
		<div class="form-bidang form-groups-bordered perkebunan hidden">
			<div class="form-group">
				<label for="perkebunan_pertemuan" class="col-sm-3 control-label">Tempat Pertemuan</label>
				<div class="col-sm-6">
					<select class="form-control select-lain" name="data[detail][perkebunan][sarana][pertemuan]" id="perkebunan_pertemuan">
						<option value="saung">Saung kelompok</option>
						<option value="balai">Balai kampung/desa</option>
						<option value="rumah_pengurus">Rumah pengurus</option>
						<option value="rumah_anggota">Rumah anggota</option>
						<option value="lainnya">Lainnya</option>
					</select>
					<input type="text" class="form-control field-lain hidden" name="data[detail][perkebunan][sarana][pertemuan_lainnya]" placeholder="Tempat Pertemuan">
				</div>
			</div>
			<div class="form-group">
				<label for="perkebunan_peralatan" class="col-sm-3 control-label">Peralatan Yang Diperoleh Untuk Pelaksanaan Produksi</label>
				<div class="col-sm-6">
					<div class="checkbox">
						<label>
							<input type="checkbox" name="data[detail][perkebunan][sarana][peralatan][]" value="Cangkul">Cangkul
						</label>
					</div>
					<div class="checkbox">
						<label>
							<input type="checkbox" name="data[detail][perkebunan][sarana][peralatan][]" value="Parang">Parang
						</label>
					</div>
					<div class="checkbox">
						<label>
							<input type="checkbox" name="data[detail][perkebunan][sarana][peralatan][]" value="Sekop">Sekop
						</label>
					</div>
					<div class="checkbox">
						<label>
							<input type="checkbox" name="data[detail][perkebunan][sarana][peralatan][]" value="Pakuel">Pakuel
						</label>
					</div>
					<div class="checkbox">
						<label>
							<input type="checkbox" name="data[detail][perkebunan][sarana][peralatan][]" value="Garpu">Garpu
						</label>
					</div>
					<div class="checkbox">
						<label>
							<input type="checkbox" name="data[detail][perkebunan][sarana][peralatan][]" value="Peralatan tukang">Peralatan tukang
						</label>
					</div>
					<div class="checkbox">
						<label>
							<input type="checkbox" name="data[detail][perkebunan][sarana][peralatan][]" value="Selang">Selang
						</label>
					</div>
					<div class="checkbox">
						<label>
							<input type="checkbox" name="data[detail][perkebunan][sarana][peralatan][]" value="Handsprayer">Handsprayer
						</label>
					</div>
					<div class="checkbox">
						<label>
							<input type="checkbox" name="data[detail][perkebunan][sarana][peralatan][]" value="Gembor">Gembor
						</label>
					</div>
					<div class="checkbox">
						<label>
							<input type="checkbox" name="data[detail][perkebunan][sarana][peralatan][]" value="Hand tractor">Hand tractor
						</label>
					</div>
					<div class="checkbox">
						<label>
							<input type="checkbox" name="data[detail][perkebunan][sarana][peralatan][]" value="Sepatu boat, serok, jerigen, kored, dll">Sepatu boat, serok, jerigen, kored, dll
						</label>
					</div>
					<div class="checkbox">
						<label>
							<input type="checkbox" name="data[detail][perkebunan][sarana][peralatan][]" value="Motor roda tiga">Motor roda tiga
						</label>
					</div>
				</div>
			</div>
			<div class="form-group">
				<label for="perkebunan_transportasi" class="col-sm-3 control-label">Pengangkutan Hasil Dari Lahan Ke Rumah</label>
				<div class="col-sm-6">
					<select class="form-control select-lain" name="data[detail][perkebunan][sarana][transportasi]" id="perkebunan_transportasi">
						<option value="gerobak_kelompok">Gerobak kelompok</option>
						<option value="gerobak_pribadi">Gerobak pribadi </option>
						<option value="beko_kelompok">Beko (roda tiga) kelompok</option>
						<option value="beko_pribadi">Beko pribadi</option>
						<option value="motor_kelompok">Motor kelompok</option>
						<option value="motor_pribadi">Motor pribadi </option>
						<option value="lainnya">Lainnya</option>
					</select>
					<input type="text" class="form-control field-lain hidden" name="data[detail][perkebunan][sarana][transportasi_lainnya]" placeholder="Pengangkutan Hasil Dari Lahan Ke Rumah">
				</div>
			</div>
			<div class="form-group">
				<label for="perkebunan_gudang" class="col-sm-3 control-label">Penyimpanan Alat dan Hasil Produksi</label>
				<div class="col-sm-6">
					<select class="form-control" name="data[detail][perkebunan][sarana][gudang]" id="perkebunan_gudang">
						<option value="gudang_kelompok">Gudang kelompok</option>
						<option value="gudang_pengurus">Gudang pribadi pengurus kelompok</option>
						<option value="gudang_anggota">Gudang pribadi salah satu anggota</option>
						<option value="gudang_desa">Gudang kampung/desa</option>
						<option value="gudang_mitra">Gudang mitra kerja</option>
					</select>
				</div>
			</div>
		</div>
		<div class="form-bidang form-groups-bordered buah hidden">
			<div class="form-group">
				<label for="buah_pertemuan" class="col-sm-3 control-label">Tempat Pertemuan</label>
				<div class="col-sm-6">
					<select class="form-control select-lain" name="data[detail][buah][sarana][pertemuan]" id="buah_pertemuan">
						<option value="saung">Saung kelompok</option>
						<option value="balai">Balai kampung/desa</option>
						<option value="rumah_pengurus">Rumah pengurus</option>
						<option value="rumah_anggota">Rumah anggota</option>
						<option value="lainnya">Lainnya</option>
					</select>
					<input type="text" class="form-control field-lain hidden" name="data[detail][buah][sarana][pertemuan_lainnya]" placeholder="Tempat Pertemuan">
				</div>
			</div>
			<div class="form-group">
				<label for="buah_peralatan" class="col-sm-3 control-label">Peralatan Yang Diperoleh Untuk Pelaksanaan Produksi</label>
				<div class="col-sm-6">
					<div class="checkbox">
						<label>
							<input type="checkbox" name="data[detail][buah][sarana][peralatan][]" value="Cangkul">Cangkul
						</label>
					</div>
					<div class="checkbox">
						<label>
							<input type="checkbox" name="data[detail][buah][sarana][peralatan][]" value="Parang">Parang
						</label>
					</div>
					<div class="checkbox">
						<label>
							<input type="checkbox" name="data[detail][buah][sarana][peralatan][]" value="Sekop">Sekop
						</label>
					</div>
					<div class="checkbox">
						<label>
							<input type="checkbox" name="data[detail][buah][sarana][peralatan][]" value="Pakuel">Pakuel
						</label>
					</div>
					<div class="checkbox">
						<label>
							<input type="checkbox" name="data[detail][buah][sarana][peralatan][]" value="Garpu">Garpu
						</label>
					</div>
					<div class="checkbox">
						<label>
							<input type="checkbox" name="data[detail][buah][sarana][peralatan][]" value="Peralatan tukang">Peralatan tukang
						</label>
					</div>
					<div class="checkbox">
						<label>
							<input type="checkbox" name="data[detail][buah][sarana][peralatan][]" value="Selang">Selang
						</label>
					</div>
					<div class="checkbox">
						<label>
							<input type="checkbox" name="data[detail][buah][sarana][peralatan][]" value="Handsprayer">Handsprayer
						</label>
					</div>
					<div class="checkbox">
						<label>
							<input type="checkbox" name="data[detail][buah][sarana][peralatan][]" value="Gembor">Gembor
						</label>
					</div>
					<div class="checkbox">
						<label>
							<input type="checkbox" name="data[detail][buah][sarana][peralatan][]" value="Hand tractor">Hand tractor
						</label>
					</div>
					<div class="checkbox">
						<label>
							<input type="checkbox" name="data[detail][buah][sarana][peralatan][]" value="Sepatu boat, serok, jerigen, kored, dll">Sepatu boat, serok, jerigen, kored, dll
						</label>
					</div>
					<div class="checkbox">
						<label>
							<input type="checkbox" name="data[detail][buah][sarana][peralatan][]" value="Motor roda tiga">Motor roda tiga
						</label>
					</div>
				</div>
			</div>
			<div class="form-group">
				<label for="buah_transportasi" class="col-sm-3 control-label">Pengangkutan Hasil Dari Lahan Ke Rumah</label>
				<div class="col-sm-6">
					<select class="form-control select-lain" name="data[detail][buah][sarana][transportasi]" id="buah_transportasi">
						<option value="gerobak_kelompok">Gerobak kelompok</option>
						<option value="gerobak_pribadi">Gerobak pribadi </option>
						<option value="beko_kelompok">Beko (roda tiga) kelompok</option>
						<option value="beko_pribadi">Beko pribadi</option>
						<option value="motor_kelompok">Motor kelompok</option>
						<option value="motor_pribadi">Motor pribadi </option>
						<option value="lainnya">Lainnya</option>
					</select>
					<input type="text" class="form-control field-lain hidden" name="data[detail][buah][sarana][transportasi_lainnya]" placeholder="Pengangkutan Hasil Dari Lahan Ke Rumah">
				</div>
			</div>
			<div class="form-group">
				<label for="buah_gudang" class="col-sm-3 control-label">Penyimpanan Alat dan Hasil Produksi</label>
				<div class="col-sm-6">
					<select class="form-control" name="data[detail][buah][sarana][gudang]" id="buah_gudang">
						<option value="gudang_kelompok">Gudang kelompok</option>
						<option value="gudang_pengurus">Gudang pribadi pengurus kelompok</option>
						<option value="gudang_anggota">Gudang pribadi salah satu anggota</option>
						<option value="gudang_desa">Gudang kampung/desa</option>
						<option value="gudang_mitra">Gudang mitra kerja</option>
					</select>
				</div>
			</div>
		</div>
		<div class="form-bidang form-groups-bordered peternakan hidden">
			<div class="form-group">
				<label for="peternakan_pertemuan" class="col-sm-3 control-label">Tempat Pertemuan</label>
				<div class="col-sm-6">
					<select class="form-control select-lain" name="data[detail][peternakan][sarana][pertemuan]" id="peternakan_pertemuan">
						<option value="saung">Saung kelompok</option>
						<option value="balai">Balai kampung/desa</option>
						<option value="rumah_pengurus">Rumah pengurus</option>
						<option value="rumah_anggota">Rumah anggota</option>
						<option value="lainnya">Lainnya</option>
					</select>
					<input type="text" class="form-control field-lain hidden" name="data[detail][peternakan][sarana][pertemuan_lainnya]" placeholder="Tempat Pertemuan">
				</div>
			</div>
			<div class="form-group">
				<label for="peternakan_peralatan" class="col-sm-3 control-label">Peralatan Yang Diperoleh Untuk Pelaksanaan Produksi</label>
				<div class="col-sm-6">
					<div class="checkbox">
						<label>
							<input type="checkbox" name="data[detail][peternakan][sarana][peralatan][]" value="Kandang ternak">Kandang ternak
						</label>
					</div>
					<div class="checkbox">
						<label>
							<input type="checkbox" name="data[detail][peternakan][sarana][peralatan][]" value="Peralatan masak makanan ternak">Peralatan masak makanan ternak
						</label>
					</div>
					<div class="checkbox">
						<label>
							<input type="checkbox" name="data[detail][peternakan][sarana][peralatan][]" value="Peralatan tempat bertelur ternak">Peralatan tempat bertelur ternak
						</label>
					</div>
					<div class="checkbox">
						<label>
							<input type="checkbox" name="data[detail][peternakan][sarana][peralatan][]" value="Cangkul">Cangkul
						</label>
					</div>
					<div class="checkbox">
						<label>
							<input type="checkbox" name="data[detail][peternakan][sarana][peralatan][]" value="Garpu">Garpu
						</label>
					</div>
					<div class="checkbox">
						<label>
							<input type="checkbox" name="data[detail][peternakan][sarana][peralatan][]" value="Sekop">Sekop
						</label>
					</div>
					<div class="checkbox">
						<label>
							<input type="checkbox" name="data[detail][peternakan][sarana][peralatan][]" value="Peralatan tukang">Peralatan tukang
						</label>
					</div>
					<div class="checkbox">
						<label>
							<input type="checkbox" name="data[detail][peternakan][sarana][peralatan][]" value="Sepatu boat, selang, dll">Sepatu boat, selang, dll
						</label>
					</div>
					<div class="checkbox">
						<label>
							<input type="checkbox" name="data[detail][peternakan][sarana][peralatan][]" value="Perlengkapan membuat kandang">Perlengkapan membuat kandang
						</label>
					</div>
					<div class="checkbox">
						<label>
							<input type="checkbox" name="data[detail][peternakan][sarana][peralatan][]" value="Gerobak untuk angkut makanan ternak">Gerobak untuk angkut makanan ternak
						</label>
					</div>
					<div class="checkbox">
						<label>
							<input type="checkbox" class="checkbox-lain" name="data[detail][peternakan][sarana][peralatan][]" value="Lainnya">Lainnya
						</label>
						<input type="text" class="form-control field-lain hidden" name="data[detail][peternakan][sarana][peralatan_lain]" placeholder="Peralatan Lain">
					</div>
				</div>
			</div>
			<div class="form-group">
				<label for="peternakan_kondisi" class="col-sm-3 control-label">Kondisi Kandang ternak</label>
				<div class="col-sm-6">
					<select class="form-control select-lain" name="data[detail][peternakan][sarana][kondisi]" id="peternakan_kondisi">
						<option value="permanen">Tembok (permanen)</option>
						<option value="semi_permanen">Setengah tembok dan papan (semi permanen)</option>
						<option value="non_permanen">Papan (non permanen)</option>
					</select>
				</div>
			</div>
			<div class="form-group">
				<label for="peternakan_perbaikan" class="col-sm-3 control-label">Biaya perbaikan yang dilakukan</label>
				<div class="col-sm-6">
					<select class="form-control select-lain" name="data[detail][peternakan][sarana][perbaikan]" id="peternakan_perbaikan">
						<option value="blm">Diperbaiki dengan dana BLM</option>
						<option value="pemerintah">Diperbaiki dari dana pemerintah / dinas terkait</option>
						<option value="pihak_lain">Diperbaiki dari dana Perusahaan / LSM / Pihak lainnya</option>
						<option value="swadaya">Diperbaiki secara swadaya</option>
						<option value="lainnya">Lainnya</option>
					</select>
					<input type="text" class="form-control field-lain hidden" name="data[detail][peternakan][sarana][perbaikan_lainnya]" placeholder="Biaya perbaikan yang dilakukan">
				</div>
			</div>
			<div class="form-group">
				<label for="peternakan_transportasi_makanan" class="col-sm-3 control-label">Angkutan untuk membawa makanan ternak</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="peternakan_transportasi_makanan" name="data[detail][peternakan][sarana][transportasi_makanan]" placeholder="Angkutan untuk membawa makanan ternak">
				</div>
			</div>
			<div class="form-group">
				<label for="peternakan_transportasi_kampung" class="col-sm-3 control-label">Angkutan untuk membawa ternak ke kampung</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="peternakan_transportasi_kampung" name="data[detail][peternakan][sarana][transportasi_kampung]" placeholder="Angkutan untuk membawa ternak ke kampung">
				</div>
			</div>
			<div class="form-group">
				<label for="peternakan_transportasi_pasar" class="col-sm-3 control-label">Angkutan untuk membawa ternak ke pasar</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="peternakan_transportasi_pasar" name="data[detail][peternakan][sarana][transportasi_pasar]" placeholder="Angkutan untuk membawa ternak ke pasar">
				</div>
			</div>
		</div>
		<div class="form-bidang form-groups-bordered perikanan hidden">
			<div class="form-group">
				<label for="perikanan_pertemuan" class="col-sm-3 control-label">Tempat Pertemuan</label>
				<div class="col-sm-6">
					<select class="form-control select-lain" name="data[detail][perikanan][sarana][pertemuan]" id="perikanan_pertemuan">
						<option value="saung">Saung kelompok</option>
						<option value="balai">Balai kampung/desa</option>
						<option value="rumah_pengurus">Rumah pengurus</option>
						<option value="rumah_anggota">Rumah anggota</option>
						<option value="lainnya">Lainnya</option>
					</select>
					<input type="text" class="form-control field-lain hidden" name="data[detail][perikanan][sarana][pertemuan_lainnya]" placeholder="Tempat Pertemuan">
				</div>
			</div>
			<div class="form-group">
				<label for="perikanan_peralatan" class="col-sm-3 control-label">Peralatan Yang Diperoleh Untuk Pelaksanaan Produksi</label>
				<div class="col-sm-6">
					<div class="checkbox">
						<label>
							<input type="checkbox" name="data[detail][perikanan][sarana][peralatan][]" value="Perahu">Perahu
						</label>
					</div>
					<div class="checkbox">
						<label>
							<input type="checkbox" name="data[detail][perikanan][sarana][peralatan][]" value="Jaring">Jaring
						</label>
					</div>
					<div class="checkbox">
						<label>
							<input type="checkbox" name="data[detail][perikanan][sarana][peralatan][]" value="Alat memancing">Alat memancing
						</label>
					</div>
					<div class="checkbox">
						<label>
							<input type="checkbox" name="data[detail][perikanan][sarana][peralatan][]" value="Mesin perahu">Mesin perahu
						</label>
					</div>
					<div class="checkbox">
						<label>
							<input type="checkbox" name="data[detail][perikanan][sarana][peralatan][]" value="Cool box">Cool box
						</label>
					</div>
					<div class="checkbox">
						<label>
							<input type="checkbox" name="data[detail][perikanan][sarana][peralatan][]" value="Petromax, sepatu Boat">Petromax, sepatu Boat
						</label>
					</div>
					<div class="checkbox">
						<label>
							<input type="checkbox" name="data[detail][perikanan][sarana][peralatan][]" value="Perlengkapan mancing">Perlengkapan mancing
						</label>
					</div>
					<div class="checkbox">
						<label>
							<input type="checkbox" name="data[detail][perikanan][sarana][peralatan][]" value="Cangkul">Cangkul
						</label>
					</div>
					<div class="checkbox">
						<label>
							<input type="checkbox" name="data[detail][perikanan][sarana][peralatan][]" value="Sekop">Sekop
						</label>
					</div>
					<div class="checkbox">
						<label>
							<input type="checkbox" name="data[detail][perikanan][sarana][peralatan][]" value="Parang">Parang
						</label>
					</div>
				</div>
			</div>
			<div class="form-group">
				<label for="perikanan_kondisi_perahu" class="col-sm-3 control-label">Kondisi Perahu</label>
				<div class="col-sm-6">
					<select class="form-control" name="data[detail][perikanan][sarana][kondisi_perahu]" id="perikanan_kondisi_perahu">
						<option value="baik">Baik</option>
						<option value="tidak">Tidak</option>
					</select>
				</div>
			</div>
			<div class="form-group">
				<label for="perikanan_kondisi_mesin" class="col-sm-3 control-label">Kondisi Mesin</label>
				<div class="col-sm-6">
					<select class="form-control" name="data[detail][perikanan][sarana][kondisi_mesin]" id="perikanan_kondisi_mesin">
						<option value="baik">Baik</option>
						<option value="tidak">Tidak</option>
					</select>
				</div>
			</div>
			<div class="form-group">
				<label for="perikanan_kondisi_menangkap" class="col-sm-3 control-label">Kondisi Perlengkapan menangkap ikan (jaring, lampu, pelampung, dll)</label>
				<div class="col-sm-6">
					<select class="form-control" name="data[detail][perikanan][sarana][kondisi_menangkap]" id="perikanan_kondisi_menangkap">
						<option value="baik">Baik</option>
						<option value="tidak">Tidak</option>
					</select>
				</div>
			</div>
			<div class="form-group">
				<label for="perikanan_kondisi_memancing" class="col-sm-3 control-label">Kondisi Perlengkapan memancing</label>
				<div class="col-sm-6">
					<select class="form-control" name="data[detail][perikanan][sarana][kondisi_memancing]" id="perikanan_kondisi_memancing">
						<option value="baik">Baik</option>
						<option value="tidak">Tidak</option>
					</select>
				</div>
			</div>
			<div class="form-group">
				<label for="perikanan_perbaikan" class="col-sm-3 control-label">Biaya perbaikan yang dilakukan</label>
				<div class="col-sm-6">
					<select class="form-control select-lain" name="data[detail][perikanan][sarana][perbaikan]" id="perikanan_perbaikan">
						<option value="blm">Diperbaiki dengan dana BLM</option>
						<option value="pemerintah">Diperbaiki dari dana pemerintah / dinas terkait</option>
						<option value="pihak_lain">Diperbaiki dari dana Perusahaan / LSM / Pihak lainnya</option>
						<option value="swadaya">Diperbaiki secara swadaya</option>
						<option value="lainnya">Lainnya</option>
					</select>
					<input type="text" class="form-control field-lain hidden" name="data[detail][perikanan][sarana][perbaikan_lainnya]" placeholder="Biaya perbaikan yang dilakukan">
				</div>
			</div>
			<div class="form-group">
				<label for="perikanan_gudang" class="col-sm-3 control-label">Penyimpanan Alat dan Hasil Produksi</label>
				<div class="col-sm-6">
					<select class="form-control select-lain" name="data[detail][perikanan][sarana][gudang]" id="perikanan_gudang">
						<option value="gudang_kelompok">Gudang kelompok</option>
						<option value="gudang_pengurus">Gudang pribadi pengurus kelompok</option>
						<option value="gudang_anggota">Gudang pribadi salah satu anggota</option>
						<option value="gudang_desa">Gudang kampung/desa</option>
						<option value="gudang_mitra">Gudang mitra kerja</option>
						<option value="langsung_jual">Tidak disimpan/ langsung jual</option>
						<option value="lainnya">Lainnya</option>
					</select>
					<input type="text" class="form-control field-lain hidden" name="data[detail][perikanan][sarana][gudang_lainnya]" placeholder="Penyimpanan Alat dan Hasil Produksi">
				</div>
			</div>
		</div>
		<div class="form-bidang form-groups-bordered hasil hidden">
			<div class="form-group">
				<label for="hasil_pertemuan" class="col-sm-3 control-label">Tempat Pertemuan</label>
				<div class="col-sm-6">
					<select class="form-control select-lain" name="data[detail][hasil][sarana][pertemuan]" id="hasil_pertemuan">
						<option value="saung">Saung kelompok</option>
						<option value="balai">Balai kampung/desa</option>
						<option value="rumah_pengurus">Rumah pengurus</option>
						<option value="rumah_anggota">Rumah anggota</option>
						<option value="lainnya">Lainnya</option>
					</select>
					<input type="text" class="form-control field-lain hidden" name="data[detail][hasil][sarana][pertemuan_lainnya]" placeholder="Tempat Pertemuan">
				</div>
			</div>
			<div class="form-group">
				<label for="hasil_peralatan" class="col-sm-3 control-label">Peralatan Yang Diperoleh Untuk Pelaksanaan Produksi</label>
				<div class="col-sm-6">
					<div class="checkbox">
						<label>
							<input type="checkbox" name="data[detail][hasil][sarana][peralatan][]" value="Alat mengiris">Alat mengiris
						</label>
					</div>
					<div class="checkbox">
						<label>
							<input type="checkbox" name="data[detail][hasil][sarana][peralatan][]" value="Alat masak">Alat masak
						</label>
					</div>
					<div class="checkbox">
						<label>
							<input type="checkbox" name="data[detail][hasil][sarana][peralatan][]" value="Kompor masak">Kompor masak
						</label>
					</div>
					<div class="checkbox">
						<label>
							<input type="checkbox" name="data[detail][hasil][sarana][peralatan][]" value="Tempat menjemur">Tempat menjemur
						</label>
					</div>
					<div class="checkbox">
						<label>
							<input type="checkbox" class="checkbox-lain" name="data[detail][hasil][sarana][peralatan][]" value="Lainnya">Lainnya
						</label>
						<input type="text" class="form-control field-lain hidden" name="data[detail][hasil][sarana][peralatan_lain]" placeholder="Peralatan Lain">
					</div>
				</div>
			</div>
			<div class="form-group">
				<label for="hasil_penjualan" class="col-sm-3 control-label">Tempat penjualan usaha</label>
				<div class="col-sm-6">
					<select class="form-control" name="data[detail][hasil][sarana][penjualan]" id="hasil_penjualan">
						<option value="kios">Kios depan rumah</option>
						<option value="meja">Para-para / meja di depan rumah</option>
						<option value="konsinyasi">Konsinyasi di pedagang lain</option>
						<option value="pasar">Jual langsung di pasar</option>
						<option value="pengumpul">Jual di pedagang pengumpul</option>
					</select>
				</div>
			</div>
			<div class="form-group">
				<label for="hasil_transportasi" class="col-sm-3 control-label">Pengangkutan Hasil Dari Lahan Ke Rumah</label>
				<div class="col-sm-6">
					<select class="form-control select-lain" name="data[detail][hasil][sarana][transportasi]" id="hasil_transportasi">
						<option value="gerobak_kelompok">Gerobak kelompok</option>
						<option value="gerobak_pribadi">Gerobak pribadi </option>
						<option value="beko_kelompok">Beko (roda tiga) kelompok</option>
						<option value="beko_pribadi">Beko pribadi</option>
						<option value="motor_kelompok">Motor kelompok</option>
						<option value="motor_pribadi">Motor pribadi </option>
						<option value="lainnya">Lainnya</option>
					</select>
					<input type="text" class="form-control field-lain hidden" name="data[detail][hasil][sarana][transportasi_lainnya]" placeholder="Pengangkutan Hasil Dari Lahan Ke Rumah">
				</div>
			</div>
			<div class="form-group">
				<label for="hasil_gudang" class="col-sm-3 control-label">Penyimpanan Alat dan Hasil Produksi</label>
				<div class="col-sm-6">
					<select class="form-control select-lain" name="data[detail][hasil][sarana][gudang]" id="hasil_gudang">
						<option value="sekretariat_kelompok">Sekretariat kelompok</option>
						<option value="rumah_pengurus">Rumah pribadi pengurus kelompok</option>
						<option value="rumah_anggota">Rumah pribadi salah satu anggota</option>
						<option value="langsung_jual">Tidak disimpan/ langsung jual</option>
						<option value="lainnya">Lainnya</option>
					</select>
					<input type="text" class="form-control field-lain hidden" name="data[detail][hasil][sarana][gudang_lainnya]" placeholder="Penyimpanan Alat dan Hasil Produksi">
				</div>
			</div>
		</div>

		<h3>IV. Aspek Pembinaan</h3>
		<hr>
		<h4>Dalam 6 bulan terakhir, Apakah lembaga saudara pernah mendapatkan pembinaan dari</h4>
		<div class="form-group">
			<label for="pembinaan_bpmd_kabupaten" class="col-sm-3 control-label">BPMD Kabupaten</label>
			<div class="col-sm-6">
				<div class="radio">
					<label>
						<input type="radio" name="data[detail][pembinaan][bpmd_kabupaten]" id="pembinaan_bpmd_kabupaten" value="rutin">Rutin
					</label>
				</div>
				<div class="radio">
					<label>
						<input type="radio" name="data[detail][pembinaan][bpmd_kabupaten]" id="pembinaan_bpmd_kabupaten" value="tidak">Tidak Rutin
					</label>
				</div>
			</div>
		</div>
		<div class="form-group">
			<label for="pembinaan_penyuluh" class="col-sm-3 control-label">Penyuluh Pertanian</label>
			<div class="col-sm-6">
				<div class="radio">
					<label>
						<input type="radio" name="data[detail][pembinaan][penyuluh]" id="pembinaan_penyuluh" value="rutin">Rutin
					</label>
				</div>
				<div class="radio">
					<label>
						<input type="radio" name="data[detail][pembinaan][penyuluh]" id="pembinaan_penyuluh" value="tidak">Tidak Rutin
					</label>
				</div>
			</div>
		</div>
		<div class="form-group">
			<label for="pembinaan_bpmd_provinsi" class="col-sm-3 control-label">BPMD Provinsi</label>
			<div class="col-sm-6">
				<div class="radio">
					<label>
						<input type="radio" name="data[detail][pembinaan][bpmd_provinsi]" id="pembinaan_bpmd_provinsi" value="rutin">Rutin
					</label>
				</div>
				<div class="radio">
					<label>
						<input type="radio" name="data[detail][pembinaan][bpmd_provinsi]" id="pembinaan_bpmd_provinsi" value="tidak">Tidak Rutin
					</label>
				</div>
			</div>
		</div>
		<div class="form-group">
			<label for="pembinaan_dinas_lain" class="col-sm-3 control-label">Dinas Terkait Lainnya</label>
			<div class="col-sm-6">
				<input type="text" class="form-control" name="data[detail][pembinaan][dinas_lain][nama]" placeholder="Dinas Terkait Lainnya">
				<div class="radio">
					<label>
						<input type="radio" name="data[detail][pembinaan][dinas_lain][status]" id="pembinaan_dinas_lain" value="rutin">Rutin
					</label>
				</div>
				<div class="radio">
					<label>
						<input type="radio" name="data[detail][pembinaan][dinas_lain][status]" id="pembinaan_dinas_lain" value="tidak">Tidak Rutin
					</label>
				</div>
			</div>
		</div>

		<h4>Kegiatan penguatan kapasitas poktan</h4>
		<div class="form-group">
			<label for="pembinaan_pertemuan_poktan" class="col-sm-3 control-label">Pertemuan Rutin Poktan</label>
			<div class="col-sm-6">
				<select class="form-control select-lain" name="data[detail][pembinaan][pertemuan_poktan]" id="pembinaan_pertemuan_poktan">
					<option value="belum">Belum pernah</option>
					<option value="1 minggu">1 minggu sekali</option>
					<option value="2 minggu">2 minggu sekali</option>
					<option value="1 bulan">1 bulan sekali</option>
					<option value="lainnya">Lainnya</option>
				</select>
				<input type="text" class="form-control field-lain hidden" name="data[detail][pembinaan][pertemuan_poktan_lainnya]" placeholder="Pertemuan Rutin Poktan">
			</div>
		</div>
		<div class="form-group">
			<label for="pembinaan_kursus" class="col-sm-3 control-label">Kursus tani/sekolah lapang</label>
			<div class="col-sm-6">
				<select class="form-control select-lain" name="data[detail][pembinaan][kursus]" id="pembinaan_kursus">
					<option value="belum">Belum pernah</option>
					<option value="lainnya">Lainnya</option>
				</select>
				<input type="text" class="form-control field-lain hidden" name="data[detail][pembinaan][kursus_lainnya]" placeholder="Kursus tani/sekolah lapang">
			</div>
		</div>
		<div class="form-group">
			<label for="pembinaan_demplot" class="col-sm-3 control-label"> Demplot atau demfarm</label>
			<div class="col-sm-6">
				<select class="form-control select-lain" name="data[detail][pembinaan][demplot]" id="pembinaan_demplot">
					<option value="ada">Ada</option>
					<option value="tidak">Tidak</option>
				</select>
			</div>
		</div>

		<div class="form-group">
			<label for="pembinaan_kepala_kampung" class="col-sm-3 control-label">Kepala Kampung</label>
			<div class="col-sm-6">
				<input type="text" class="form-control" name="data[detail][pembinaan][kepala_kampung]" id="pembinaan_kepala_kampung" placeholder="Kepala Kampung">
			</div>
		</div>
		<div class="form-group">
			<label for="pembinaan_ketua" class="col-sm-3 control-label">Ketua Kelompok Tani</label>
			<div class="col-sm-6">
				<input type="text" class="form-control" name="data[detail][pembinaan][ketua]" id="pembinaan_ketua" placeholder="Ketua Kelompok Tani">
			</div>
		</div>
		<div class="form-group">
			<label for="pembinaan_pendamping" class="col-sm-3 control-label">Pendamping Distrik</label>
			<div class="col-sm-6">
				<input type="text" class="form-control" name="data[detail][pembinaan][pendamping]" id="pembinaan_pendamping" placeholder="Pendamping Distrik">
			</div>
		</div>

		<div class="form-group">
			<div class="col-sm-6 col-sm-offset-2">
				<button type="submit" class="btn btn-lg btn-success"><i class="entypo-check"></i> Simpan</button>
				<a href="<?php echo base_url('kegiatan') ?>" class="btn btn-lg btn-red pull-right"><i class="entypo-back"></i> Kembali</a>
			</div>
		</div>
	</form>
	
	<script type="text/javascript">
		jQuery(document).ready(function($){
			$('#kabupaten_id').select2({
				allowClear: false,
				minimumResultsForSearch: 10,
				ajax: {
					url: "<?php echo base_url('kegiatan/get_lokasi') ?>",
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
					url: "<?php echo base_url('kegiatan/get_lokasi') ?>",
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
					url: "<?php echo base_url('kegiatan/get_lokasi') ?>",
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

			$('#nama_lain').change(function() {
				if(this.checked) {
					$("#field-nama").slideUp();
					$("#field-nama-lain").slideDown();
				}
				else{
					$("#field-nama").slideDown();
					$("#field-nama-lain").slideUp();
				}
			});
			$("#bidang_kegiatan").change(function(){
				$('.form-bidang').addClass('hidden');
				$('.form-bidang.'+$(this).val()).removeClass('hidden');
			});
			$(".select-lain").change(function(){
				if($(this).val() == "lainnya"){
					$(this).siblings('.field-lain').removeClass('hidden');
				}
				else{
					$(this).siblings('.field-lain').addClass('hidden');
				}
			});
			$(".checkbox-lain").click(function(){
				$(this).parent().siblings('.field-lain').toggleClass('hidden');
			});

			<?php if(!empty($this->session->userdata('kabupaten_id'))): ?> $('#kabupaten_id').select2('data', <?php echo json_encode(array('id'=>$this->session->userdata('kabupaten_id'), 'text'=>$this->session->userdata('kabupaten'))) ?>); <?php endif ?>
			<?php if(!empty($this->session->userdata('kecamatan_id'))): ?> $('#kecamatan_id').select2('data', <?php echo json_encode(array('id'=>$this->session->userdata('kecamatan_id'), 'text'=>$this->session->userdata('kecamatan'))) ?>); <?php endif ?>
			<?php if(!empty($this->session->userdata('desa_id'))): ?> $('#desa_id').select2('data', <?php echo json_encode(array('id'=>$this->session->userdata('desa_id'), 'text'=>$this->session->userdata('desa'))) ?>); <?php endif ?>
		});
	</script>
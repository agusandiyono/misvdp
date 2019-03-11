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
				<input type="text" class="form-control" name="data[no_kelompok]" id="no_kelompok" placeholder="Nomor Kelompok Tani" value="<?php echo $profil->no_kelompok ?>">
			</div>
		</div>
		<div class="form-group">
			<label for="pewawancara" class="col-sm-3 control-label">Pewawancara<span class="text-danger">*</span></label>
			<div class="col-sm-6">
				<input type="text" class="form-control" name="data[pewawancara]" id="pewawancara" data-validate="required" data-message-required="Kolom pewawancara tidak boleh kosong." placeholder="Pewawancara" value="<?php echo $profil->pewawancara ?>">
			</div>
		</div>
		<div class="form-group">
			<label for="tanggal" class="col-sm-3 control-label">Tanggal Kegiatan<span class="text-danger">*</span></label>
			<div class="col-sm-6">
				<input type="text" class="form-control datepicker" data-format="dd-mm-yyyy" id="tanggal" name="data[tanggal]" data-validate="required" data-message-required="Kolom tanggal kegiatan tidak boleh kosong." placeholder="Tanggal Kegiatan" value="<?php echo date_reverse($profil->tanggal) ?>">
			</div>
		</div>

		<h3>I. Profil Kelompok Tani</h3>
		<hr>
		<div class="form-group">
			<label for="no_urut" class="col-sm-3 control-label">Nomor Urut<span class="text-danger">*</span></label>
			<div class="col-sm-6">
				<input type="text" class="form-control" name="data[no_urut]" id="no_urut" placeholder="Nomor Urut" value="<?php echo $profil->no_urut ?>">
			</div>
		</div>
		<div class="form-group">
			<label for="nama" class="col-sm-3 control-label">Nama Kelompok Tani<span class="text-danger">*</span></label>
			<div class="col-sm-6">
				<input type="text" class="form-control" name="data[nama]" id="nama" data-validate="required" data-message-required="Kolom nama kelompok tani kegiatan tidak boleh kosong." placeholder="Nama KelompokTani" value="<?php echo $profil->nama ?>">
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
					<option value="<?php echo $provinsi->provinsi_code ?>" <?php echo $provinsi->provinsi_code == $profil->provinsi_id ? "selected" : "" ?>><?php echo $provinsi->provinsi_code ?> - <?php echo $provinsi->provinsi_name ?></option>
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
				<input type="text" class="form-control" name="data[no_hp]" id="no_hp" placeholder="Nomor yang bisa dihubungi" value="<?php echo $profil->no_hp ?>">
			</div>
		</div>
		<div class="form-group">
			<label for="bidang_kegiatan" class="col-sm-3 control-label">Bidang Kegiatan yang Diusahakan</label>
			<div class="col-sm-6">
				<select class="form-control" name="data[bidang_kegiatan]" id="bidang_kegiatan">
					<option value="pertanian" <?php echo $profil->bidang_kegiatan == "pertanian" ? "selected" : "" ?>>Pertanian-Tan. Pangan</option>
					<option value="perkebunan" <?php echo $profil->bidang_kegiatan == "perkebunan" ? "selected" : "" ?>>Perkebunan</option>
					<option value="buah" <?php echo $profil->bidang_kegiatan == "buah" ? "selected" : "" ?>>Buah-Buahan</option>
					<option value="peternakan" <?php echo $profil->bidang_kegiatan == "peternakan" ? "selected" : "" ?>>Peternakan</option>
					<option value="perikanan" <?php echo $profil->bidang_kegiatan == "perikanan" ? "selected" : "" ?>>Perikanan</option>
					<option value="hasil" <?php echo $profil->bidang_kegiatan == "hasil" ? "selected" : "" ?>>Pengolahan Hasil</option>
				</select>
			</div>
		</div>
		<div class="form-group">
			<label for="pendirian" class="col-sm-3 control-label">Sejarah Pendirian</label>
			<div class="col-sm-6">
				<select class="form-control" name="data[pendirian]" id="pendirian">
					<option value="baru" <?php echo $profil->pendirian == "baru" ? "selected" : "" ?>>Baru</option>
					<option value="lanjutan" <?php echo $profil->pendirian == "lanjutan" ? "selected" : "" ?>>Lanjutan</option>
				</select>
			</div>
		</div>
		<div class="form-group">
			<label for="tgl_berdiri" class="col-sm-3 control-label">Tanggal Berdiri</label>
			<div class="col-sm-6">
				<input type="text" class="form-control datepicker" data-format="dd-mm-yyyy" id="tgl_berdiri" name="data[tgl_berdiri]" placeholder="Tanggal Berdiri" value="<?php echo date_reverse($profil->tgl_berdiri) ?>">
			</div>
		</div>
		<div class="form-group">
			<label for="tgl_operasional" class="col-sm-3 control-label">Tanggal Operasional</label>
			<div class="col-sm-6">
				<input type="text" class="form-control datepicker" data-format="dd-mm-yyyy" id="tgl_operasional" name="data[tgl_operasional]" placeholder="Tanggal Operasional" value="<?php echo date_reverse($profil->tgl_operasional) ?>">
			</div>
		</div>
		<div class="form-group">
			<label for="jumlah_lk" class="col-sm-3 control-label">Jumlah Anggota Laki-laki</label>
			<div class="col-sm-6">
				<input type="text" class="form-control" id="jumlah_lk" name="data[jumlah_lk]" placeholder="Jumlah Anggota Laki-laki" value="<?php echo $profil->jumlah_lk ?>">
			</div>
		</div>
		<div class="form-group">
			<label for="jumlah_p" class="col-sm-3 control-label">Jumlah Anggota Perempuan</label>
			<div class="col-sm-6">
				<input type="text" class="form-control" id="jumlah_p" name="data[jumlah_p]" placeholder="Jumlah Anggota Perempuan" value="<?php echo $profil->jumlah_p ?>">
			</div>
		</div>
		<div class="form-group">
			<label for="status" class="col-sm-3 control-label">Kondisi Keaktifan Saat Ini</label>
			<div class="col-sm-6">
				<select class="form-control" name="data[status]" id="status">
					<option value="aktif" <?php echo $profil->status == "aktif" ? "selected" : "" ?>>Aktif</option>
					<option value="tidak" <?php echo $profil->status == "tidak" ? "selected" : "" ?>>Tidak Aktif</option>
				</select>
			</div>
		</div>

		<h3>II. Komoditi Kelompok Tani</h3>
		<hr>
		<div class="form-bidang form-groups-bordered pertanian <?php echo $profil->bidang_kegiatan != "pertanian" ? "hidden" : "" ?>">
			<div class="form-group">
				<label for="pertanian_lahan" class="col-sm-3 control-label">Luas Lahan</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="pertanian_lahan" name="data[detail][pertanian][komoditi][lahan]" placeholder="Luas Lahan" value="<?php echo $profil->detail["pertanian"]["komoditi"]["lahan"]; ?>">
				</div>
			</div>
			<div class="form-group">
				<label for="pertanian_status_lahan" class="col-sm-3 control-label">Status Kepemilikan Lahan</label>
				<div class="col-sm-6">
					<select class="form-control select-lain" name="data[detail][pertanian][komoditi][status_lahan]" id="pertanian_status_lahan">
						<option <?php echo $profil->detail["pertanian"]["komoditi"]["status_lahan"] == "milik" ? "selected" : "" ?> value="milik">Milik</option>
						<option <?php echo $profil->detail["pertanian"]["komoditi"]["status_lahan"] == "sewa" ? "selected" : "" ?> value="sewa">Sewa</option>
						<option <?php echo $profil->detail["pertanian"]["komoditi"]["status_lahan"] == "pinjam" ? "selected" : "" ?> value="pinjam">Pinjam</option>
						<option <?php echo $profil->detail["pertanian"]["komoditi"]["status_lahan"] == "pemerintah" ? "selected" : "" ?> value="pemerintah">Pemerintah</option>
						<option <?php echo $profil->detail["pertanian"]["komoditi"]["status_lahan"] == "lainnya" ? "selected" : "" ?> value="lainnya">Lainnya</option>
					</select>
					<input type="text" class="form-control field-lain <?php echo $profil->detail["pertanian"]["komoditi"]["status_lahan"] != "lainnya" ? "hidden" : "" ?>" name="data[detail][pertanian][komoditi][status_lahan_lain]" placeholder="Status Kepemilikan Lahan" value="<?php echo $profil->detail["pertanian"]["komoditi"]["status_lahan_lain"] ?>">
				</div>
			</div>
			<div class="form-group">
				<label for="pertanian_komoditi_unggulan" class="col-sm-3 control-label">Komoditi Unggulan</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="pertanian_komoditi_unggulan" name="data[detail][pertanian][komoditi][komoditi_unggulan]" placeholder="Komoditi Unggulan" value="<?php echo $profil->detail["pertanian"]["komoditi"]["komoditi_unggulan"] ?>">
				</div>
			</div>
			<div class="form-group">
				<label for="pertanian_panen_1" class="col-sm-3 control-label">Hasil Panen Terakhir</label>
				<div class="col-sm-3">
					<span>Panen 1</span>
					<input type="text" class="form-control" id="pertanian_panen_1" name="data[detail][pertanian][komoditi][panen][1]" placeholder="Panen 1" value="<?php echo $profil->detail["pertanian"]["komoditi"]["panen"][1] ?>">
				</div>
				<div class="col-sm-3">
					<span>Panen 2</span>
					<input type="text" class="form-control" id="pertanian_panen_2" name="data[detail][pertanian][komoditi][panen][2]" placeholder="Panen 2" value="<?php echo $profil->detail["pertanian"]["komoditi"]["panen"][2] ?>">
				</div>
			</div>
			<div class="form-group">
				<label for="pertanian_konsumsi" class="col-sm-3 control-label">Berapa Banyak Digunakan / di Konsumsi Sendiri</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="pertanian_konsumsi" name="data[detail][pertanian][komoditi][konsumsi]" placeholder="Berapa Banyak Digunakan / di Konsumsi Sendiri" value="<?php echo $profil->detail["pertanian"]["komoditi"]["konsumsi"] ?>">
				</div>
			</div>
			<div class="form-group">
				<label for="pertanian_terjual" class="col-sm-3 control-label">Berapa Banyak yang Dijual</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="pertanian_terjual" name="data[detail][pertanian][komoditi][terjual]" placeholder="Berapa Banyak yang Dijual" value="<?php echo $profil->detail["pertanian"]["komoditi"]["terjual"] ?>">
				</div>
			</div>
			<div class="form-group">
				<label for="pertanian_pemasaran" class="col-sm-3 control-label">Tempat Menjual Hasil</label>
				<div class="col-sm-6">
					<select class="form-control select-lain" name="data[detail][pertanian][komoditi][pemasaran]" id="pertanian_pemasaran">
						<option <?php echo $profil->detail["pertanian"]["komoditi"]["pemasaran"] == "pasar_kampung" ? "selected" : "" ?> value="pasar_kampung">Pasar Kampung</option>
						<option <?php echo $profil->detail["pertanian"]["komoditi"]["pemasaran"] == "pasar_distrik" ? "selected" : "" ?> value="pasar_distrik">Pasar Distrik</option>
						<option <?php echo $profil->detail["pertanian"]["komoditi"]["pemasaran"] == "pasar_provinsi" ? "selected" : "" ?> value="pasar_provinsi">Pasar Provinsi</option>
						<option <?php echo $profil->detail["pertanian"]["komoditi"]["pemasaran"] == "pasar_luar_provinsi" ? "selected" : "" ?> value="pasar_luar_provinsi">Pasar Luar Provinsi</option>
						<option <?php echo $profil->detail["pertanian"]["komoditi"]["pemasaran"] == "pengumpul_kampung" ? "selected" : "" ?> value="pengumpul_kampung">Pengumpul Kampung</option>
						<option <?php echo $profil->detail["pertanian"]["komoditi"]["pemasaran"] == "lainnya" ? "selected" : "" ?> value="lainnya">Lainnya</option>
					</select>
					<input type="text" class="form-control field-lain <?php echo $profil->detail["pertanian"]["komoditi"]["pemasaran"] != "lainnya" ? "hidden" : "" ?>" name="data[detail][pertanian][komoditi][pemasaran_lain]" placeholder="Tempat Menjual Hasil" value="<?php echo $profil->detail["pertanian"]["komoditi"]["pemasaran_lain"] ?>">
				</div>
			</div>
			<div class="form-group">
				<label for="pertanian_harga" class="col-sm-3 control-label">Harga Jual /kg</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="pertanian_harga" name="data[detail][pertanian][komoditi][harga]" placeholder="Harga Jual /kg" value="<?php echo $profil->detail["pertanian"]["komoditi"]["harga"] ?>">
				</div>
			</div>
		</div>
		<div class="form-bidang form-groups-bordered perkebunan <?php echo $profil->bidang_kegiatan != "perkebunan" ? "hidden" : "" ?>">
			<div class="form-group">
				<label for="perkebunan_lahan" class="col-sm-3 control-label">Luas Lahan</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="perkebunan_lahan" name="data[detail][perkebunan][komoditi][lahan]" placeholder="Luas Lahan" value="<?php echo $profil->detail["perkebunan"]["komoditi"]["lahan"] ?>">
				</div>
			</div>
			<div class="form-group">
				<label for="perkebunan_status_lahan" class="col-sm-3 control-label">Status Kepemilikan Lahan</label>
				<div class="col-sm-6">
					<select class="form-control select-lain" name="data[detail][perkebunan][komoditi][status_lahan]" id="perkebunan_status_lahan">
						<option <?php echo $profil->detail["perkebunan"]["komoditi"]["status_lahan"] == "milik" ? "selected" : "" ?> value="milik">Milik</option>
						<option <?php echo $profil->detail["perkebunan"]["komoditi"]["status_lahan"] == "sewa" ? "selected" : "" ?> value="sewa">Sewa</option>
						<option <?php echo $profil->detail["perkebunan"]["komoditi"]["status_lahan"] == "pinjam" ? "selected" : "" ?> value="pinjam">Pinjam</option>
						<option <?php echo $profil->detail["perkebunan"]["komoditi"]["status_lahan"] == "pemerintah" ? "selected" : "" ?> value="pemerintah">Pemerintah</option>
						<option <?php echo $profil->detail["perkebunan"]["komoditi"]["status_lahan"] == "lainnya" ? "selected" : "" ?> value="lainnya">Lainnya</option>
					</select>
					<input type="text" class="form-control field-lain <?php echo $profil->detail["perkebunan"]["komoditi"]["status_lahan"] != "lainnya" ? "hidden" : "" ?>" name="data[detail][perkebunan][komoditi][status_lahan_lain]" placeholder="Status Kepemilikan Lahan" value="<?php echo $profil->detail["perkebunan"]["komoditi"]["status_lahan_lain"] ?>">
				</div>
			</div>
			<div class="form-group">
				<label for="perkebunan_komoditi_unggulan_1" class="col-sm-3 control-label">Komoditi Unggulan</label>
				<div class="col-sm-3">
					<span>Musim Tanam 1</span>
					<input type="text" class="form-control" id="perkebunan_komoditi_unggulan_1" name="data[detail][perkebunan][komoditi][komoditi_unggulan][1]" placeholder="Musim Tanam 1" value="<?php echo $profil->detail["perkebunan"]["komoditi"]["komoditi_unggulan"][1] ?>">
				</div>
				<div class="col-sm-3">
					<span>Musim Tanam 2</span>
					<input type="text" class="form-control" id="perkebunan_komoditi_unggulan_2" name="data[detail][perkebunan][komoditi][komoditi_unggulan][2]" placeholder="Musim Tanam 2" value="<?php echo $profil->detail["perkebunan"]["komoditi"]["komoditi_unggulan"][2] ?>">
				</div>
			</div>
			<div class="form-group">
				<label for="perkebunan_panen_1" class="col-sm-3 control-label">Hasil Panen Terakhir</label>
				<div class="col-sm-3">
					<span>Musim Tanam 1</span>
					<input type="text" class="form-control" id="perkebunan_panen_1" name="data[detail][perkebunan][komoditi][panen][1]" placeholder="Musim Tanam 1" value="<?php echo $profil->detail["perkebunan"]["komoditi"]["panen"][1] ?>">
				</div>
				<div class="col-sm-3">
					<span>Musim Tanam 2</span>
					<input type="text" class="form-control" id="perkebunan_panen_2" name="data[detail][perkebunan][komoditi][panen][2]" placeholder="Musim Tanam 2" value="<?php echo $profil->detail["perkebunan"]["komoditi"]["panen"][2] ?>">
				</div>
			</div>
			<div class="form-group">
				<label for="perkebunan_konsumsi" class="col-sm-3 control-label">Berapa Banyak Digunakan / di Konsumsi Sendiri</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="perkebunan_konsumsi" name="data[detail][perkebunan][komoditi][konsumsi]" placeholder="Berapa Banyak Digunakan / di Konsumsi Sendiri" value="<?php echo $profil->detail["perkebunan"]["komoditi"]["konsumsi"] ?>">
				</div>
			</div>
			<div class="form-group">
				<label for="perkebunan_terjual" class="col-sm-3 control-label">Berapa Banyak yang Dijual</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="perkebunan_terjual" name="data[detail][perkebunan][komoditi][terjual]" placeholder="Berapa Banyak yang Dijual" value="<?php echo $profil->detail["perkebunan"]["komoditi"]["terjual"] ?>">
				</div>
			</div>
			<div class="form-group">
				<label for="perkebunan_pemasaran" class="col-sm-3 control-label">Tempat Menjual Hasil</label>
				<div class="col-sm-6">
					<select class="form-control select-lain" name="data[detail][perkebunan][komoditi][pemasaran]" id="perkebunan_pemasaran">
						<option <?php echo $profil->detail["perkebunan"]["komoditi"]["pemasaran"] == "pasar_kampung" ? "selected" : "" ?> value="pasar_kampung">Pasar Kampung</option>
						<option <?php echo $profil->detail["perkebunan"]["komoditi"]["pemasaran"] == "pasar_distrik" ? "selected" : "" ?> value="pasar_distrik">Pasar Distrik</option>
						<option <?php echo $profil->detail["perkebunan"]["komoditi"]["pemasaran"] == "pasar_provinsi" ? "selected" : "" ?> value="pasar_provinsi">Pasar Provinsi</option>
						<option <?php echo $profil->detail["perkebunan"]["komoditi"]["pemasaran"] == "pasar_luar_provinsi" ? "selected" : "" ?> value="pasar_luar_provinsi">Pasar Luar Provinsi</option>
						<option <?php echo $profil->detail["perkebunan"]["komoditi"]["pemasaran"] == "pengumpul_kampung" ? "selected" : "" ?> value="pengumpul_kampung">Pengumpul Kampung</option>
						<option <?php echo $profil->detail["perkebunan"]["komoditi"]["pemasaran"] == "lainnya" ? "selected" : "" ?> value="lainnya">Lainnya</option>
					</select>
					<input type="text" class="form-control field-lain <?php echo $profil->detail["perkebunan"]["komoditi"]["pemasaran"] != "lainnya" ? "hidden" : "" ?>" name="data[detail][perkebunan][komoditi][pemasaran_lain]" placeholder="Tempat Menjual Hasil" value="<?php echo $profil->detail["perkebunan"]["komoditi"]["pemasaran_lain"] ?>">
				</div>
			</div>
			<div class="form-group">
				<label for="perkebunan_harga" class="col-sm-3 control-label">Harga Jual /kg</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="perkebunan_harga" name="data[detail][perkebunan][komoditi][harga]" placeholder="Harga Jual /kg" value="<?php echo $profil->detail["perkebunan"]["komoditi"]["harga"] ?>">
				</div>
			</div>
		</div>
		<div class="form-bidang form-groups-bordered buah <?php echo $profil->bidang_kegiatan != "buah" ? "hidden" : "" ?>">
			<div class="form-group">
				<label for="buah_lahan" class="col-sm-3 control-label">Luas Lahan</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="buah_lahan" name="data[detail][buah][komoditi][lahan]" placeholder="Luas Lahan" value="<?php echo $profil->detail["buah"]["komoditi"]["lahan"] ?>">
				</div>
			</div>
			<div class="form-group">
				<label for="buah_status_lahan" class="col-sm-3 control-label">Status Kepemilikan Lahan</label>
				<div class="col-sm-6">
					<select class="form-control select-lain" name="data[detail][buah][komoditi][status_lahan]" id="buah_status_lahan">
						<option <?php echo $profil->detail["buah"]["komoditi"]["status_lahan"] == "milik" ? "selected" : "" ?> value="milik">Milik</option>
						<option <?php echo $profil->detail["buah"]["komoditi"]["status_lahan"] == "sewa" ? "selected" : "" ?> value="sewa">Sewa</option>
						<option <?php echo $profil->detail["buah"]["komoditi"]["status_lahan"] == "pinjam" ? "selected" : "" ?> value="pinjam">Pinjam</option>
						<option <?php echo $profil->detail["buah"]["komoditi"]["status_lahan"] == "pemerintah" ? "selected" : "" ?> value="pemerintah">Pemerintah</option>
						<option <?php echo $profil->detail["buah"]["komoditi"]["status_lahan"] == "lainnya" ? "selected" : "" ?> value="lainnya">Lainnya</option>
					</select>
					<input type="text" class="form-control field-lain <?php echo $profil->detail["buah"]["komoditi"]["status_lahan"] != "lainnya" ? "hidden" : "" ?>" name="data[detail][buah][komoditi][status_lahan_lain]" placeholder="Status Kepemilikan Lahan" value="<?php echo $profil->detail["buah"]["komoditi"]["status_lahan_lain"] ?>">
				</div>
			</div>
			<div class="form-group">
				<label for="buah_komoditi_unggulan_1" class="col-sm-3 control-label">Komoditi Unggulan</label>
				<div class="col-sm-3">
					<span>Musim Tanam 1</span>
					<input type="text" class="form-control" id="buah_komoditi_unggulan_1" name="data[detail][buah][komoditi][komoditi_unggulan][1]" placeholder="Musim Tanam 1" value="<?php echo $profil->detail["buah"]["komoditi"]["komoditi_unggulan"][1] ?>">
				</div>
				<div class="col-sm-3">
					<span>Musim Tanam 2</span>
					<input type="text" class="form-control" id="buah_komoditi_unggulan_2" name="data[detail][buah][komoditi][komoditi_unggulan][2]" placeholder="Musim Tanam 2" value="<?php echo $profil->detail["buah"]["komoditi"]["komoditi_unggulan"][2] ?>">
				</div>
			</div>
			<div class="form-group">
				<label for="buah_panen_1" class="col-sm-3 control-label">Hasil Panen Terakhir</label>
				<div class="col-sm-3">
					<span>Musim Tanam 1</span>
					<input type="text" class="form-control" id="buah_panen_1" name="data[detail][buah][komoditi][panen][1]" placeholder="Musim Tanam 1" value="<?php echo $profil->detail["buah"]["komoditi"]["panen"][1] ?>">
				</div>
				<div class="col-sm-3">
					<span>Musim Tanam 2</span>
					<input type="text" class="form-control" id="buah_panen_2" name="data[detail][buah][komoditi][panen][2]" placeholder="Musim Tanam 2" value="<?php echo $profil->detail["buah"]["komoditi"]["panen"][2] ?>">
				</div>
			</div>
			<div class="form-group">
				<label for="buah_konsumsi" class="col-sm-3 control-label">Berapa Banyak Digunakan / di Konsumsi Sendiri</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="buah_konsumsi" name="data[detail][buah][komoditi][konsumsi]" placeholder="Berapa Banyak Digunakan / di Konsumsi Sendiri" value="<?php echo $profil->detail["buah"]["komoditi"]["konsumsi"] ?>">
				</div>
			</div>
			<div class="form-group">
				<label for="buah_terjual" class="col-sm-3 control-label">Berapa Banyak yang Dijual</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="buah_terjual" name="data[detail][buah][komoditi][terjual]" placeholder="Berapa Banyak yang Dijual" value="<?php echo $profil->detail["buah"]["komoditi"]["terjual"] ?>">
				</div>
			</div>
			<div class="form-group">
				<label for="buah_pemasaran" class="col-sm-3 control-label">Tempat Menjual Hasil</label>
				<div class="col-sm-6">
					<select class="form-control select-lain" name="data[detail][buah][komoditi][pemasaran]" id="buah_pemasaran">
						<option <?php echo $profil->detail["buah"]["komoditi"]["pemasaran"] == "pasar_kampung" ? "selected" : "" ?> value="pasar_kampung">Pasar Kampung</option>
						<option <?php echo $profil->detail["buah"]["komoditi"]["pemasaran"] == "pasar_distrik" ? "selected" : "" ?> value="pasar_distrik">Pasar Distrik</option>
						<option <?php echo $profil->detail["buah"]["komoditi"]["pemasaran"] == "pasar_provinsi" ? "selected" : "" ?> value="pasar_provinsi">Pasar Provinsi</option>
						<option <?php echo $profil->detail["buah"]["komoditi"]["pemasaran"] == "pasar_luar_provinsi" ? "selected" : "" ?> value="pasar_luar_provinsi">Pasar Luar Provinsi</option>
						<option <?php echo $profil->detail["buah"]["komoditi"]["pemasaran"] == "pengumpul_kampung" ? "selected" : "" ?> value="pengumpul_kampung">Pengumpul Kampung</option>
						<option <?php echo $profil->detail["buah"]["komoditi"]["pemasaran"] == "lainnya" ? "selected" : "" ?> value="lainnya">Lainnya</option>
					</select>
					<input type="text" class="form-control field-lain <?php echo $profil->detail["buah"]["komoditi"]["pemasaran"] != "lainnya" ? "hidden" : "" ?>" name="data[detail][buah][komoditi][pemasaran_lain]" placeholder="Tempat Menjual Hasil" value="<?php echo $profil->detail["buah"]["komoditi"]["pemasaran_lain"] ?>">
				</div>
			</div>
			<div class="form-group">
				<label for="buah_harga" class="col-sm-3 control-label">Harga Jual /kg</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="buah_harga" name="data[detail][buah][komoditi][harga]" placeholder="Harga Jual /kg" value="<?php echo $profil->detail["buah"]["komoditi"]["harga"] ?>">
				</div>
			</div>
		</div>
		<div class="form-bidang form-groups-bordered peternakan <?php echo $profil->bidang_kegiatan != "peternakan" ? "hidden" : "" ?>">
			<div class="form-group">
				<label for="peternakan_jenis" class="col-sm-3 control-label">Jenis Ternak</label>
				<div class="col-sm-6">
					<select class="form-control" name="data[detail][peternakan][komoditi][jenis]" id="peternakan_jenis">
						<option <?php echo $profil->detail["peternakan"]["komoditi"]["jenis"] == "sapi" ? "selected" : "" ?> value="sapi">Sapi</option>
						<option <?php echo $profil->detail["peternakan"]["komoditi"]["jenis"] == "babi/kambing" ? "selected" : "" ?> value="babi/kambing">Babi/Kambing</option>
						<option <?php echo $profil->detail["peternakan"]["komoditi"]["jenis"] == "kelinci" ? "selected" : "" ?> value="kelinci">Kelinci</option>
						<option <?php echo $profil->detail["peternakan"]["komoditi"]["jenis"] == "ayam/bebek/itik" ? "selected" : "" ?> value="ayam/bebek/itik">Ayam/Bebek/Itik</option>
					</select>
				</div>
			</div>
			<div class="form-group">
				<label for="peternakan_lahan" class="col-sm-3 control-label">Luas Kandang</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="peternakan_lahan" name="data[detail][peternakan][komoditi][lahan]" placeholder="Luas Kandang" value="<?php echo $profil->detail["peternakan"]["komoditi"]["lahan"] ?>">
				</div>
			</div>
			<div class="form-group">
				<label for="peternakan_jumlah_awal" class="col-sm-3 control-label">Jumlah Awal pengadaan (bantuan PNPM)</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="peternakan_jumlah_awal" name="data[detail][peternakan][komoditi][jumlah_awal]" placeholder="Jumlah Awal pengadaan (bantuan PNPM)" value="<?php echo $profil->detail["peternakan"]["komoditi"]["jumlah_awal"] ?>">
				</div>
			</div>
			<div class="form-group">
				<label for="peternakan_jumlah_sekarang" class="col-sm-3 control-label">Jumlah Saat Ini</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="peternakan_jumlah_sekarang" name="data[detail][peternakan][komoditi][jumlah_sekarang]" placeholder="Jumlah Saat Ini" value="<?php echo $profil->detail["peternakan"]["komoditi"]["jumlah_sekarang"] ?>">
				</div>
			</div>
			<div class="form-group">
				<label for="peternakan_status_lahan" class="col-sm-3 control-label">Status Kepemilikan Lahan/Kandang</label>
				<div class="col-sm-6">
					<select class="form-control select-lain" name="data[detail][peternakan][komoditi][status_lahan]" id="peternakan_status_lahan">
						<option <?php echo $profil->detail["peternakan"]["komoditi"]["status_lahan"] == "milik" ? "selected" : "" ?> value="milik">Milik</option>
						<option <?php echo $profil->detail["peternakan"]["komoditi"]["status_lahan"] == "sewa" ? "selected" : "" ?> value="sewa">Sewa</option>
						<option <?php echo $profil->detail["peternakan"]["komoditi"]["status_lahan"] == "pinjam" ? "selected" : "" ?> value="pinjam">Pinjam</option>
						<option <?php echo $profil->detail["peternakan"]["komoditi"]["status_lahan"] == "pemerintah" ? "selected" : "" ?> value="pemerintah">Pemerintah</option>
						<option <?php echo $profil->detail["peternakan"]["komoditi"]["status_lahan"] == "lainnya" ? "selected" : "" ?> value="lainnya">Lainnya</option>
					</select>
					<input type="text" class="form-control field-lain <?php echo $profil->detail["peternakan"]["komoditi"]["status_lahan"] != "lainnya" ? "hidden" : "" ?>" name="data[detail][peternakan][komoditi][status_lahan_lain]" placeholder="Status Kepemilikan Lahan" value="<?php echo $profil->detail["peternakan"]["komoditi"]["status_lahan_lain"] ?>">
				</div>
			</div>
			<div class="form-group">
				<label for="peternakan_konsumsi" class="col-sm-3 control-label">Berapa Banyak Digunakan / di Konsumsi Sendiri</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="peternakan_konsumsi" name="data[detail][peternakan][komoditi][konsumsi]" placeholder="Berapa Banyak Digunakan / di Konsumsi Sendiri" value="<?php echo $profil->detail["peternakan"]["komoditi"]["konsumsi"] ?>">
				</div>
			</div>
			<div class="form-group">
				<label for="peternakan_terjual" class="col-sm-3 control-label">Berapa Banyak yang Dijual</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="peternakan_terjual" name="data[detail][peternakan][komoditi][terjual]" placeholder="Berapa Banyak yang Dijual" value="<?php echo $profil->detail["peternakan"]["komoditi"]["terjual"] ?>">
				</div>
			</div>
			<div class="form-group">
				<label for="peternakan_pemasaran" class="col-sm-3 control-label">Tempat Menjual Hasil</label>
				<div class="col-sm-6">
					<select class="form-control select-lain" name="data[detail][peternakan][komoditi][pemasaran]" id="peternakan_pemasaran">
						<option <?php echo $profil->detail["peternakan"]["komoditi"]["pemasaran"] == "pasar_kampung" ? "selected" : "" ?> value="pasar_kampung">Pasar Kampung</option>
						<option <?php echo $profil->detail["peternakan"]["komoditi"]["pemasaran"] == "pasar_distrik" ? "selected" : "" ?> value="pasar_distrik">Pasar Distrik</option>
						<option <?php echo $profil->detail["peternakan"]["komoditi"]["pemasaran"] == "pasar_provinsi" ? "selected" : "" ?> value="pasar_provinsi">Pasar Provinsi</option>
						<option <?php echo $profil->detail["peternakan"]["komoditi"]["pemasaran"] == "pasar_luar_provinsi" ? "selected" : "" ?> value="pasar_luar_provinsi">Pasar Luar Provinsi</option>
						<option <?php echo $profil->detail["peternakan"]["komoditi"]["pemasaran"] == "pengumpul_kampung" ? "selected" : "" ?> value="pengumpul_kampung">Pengumpul Kampung</option>
						<option <?php echo $profil->detail["peternakan"]["komoditi"]["pemasaran"] == "lainnya" ? "selected" : "" ?> value="lainnya">Lainnya</option>
					</select>
					<input type="text" class="form-control field-lain <?php echo $profil->detail["peternakan"]["komoditi"]["pemasaran"] != "lainnya" ? "hidden" : "" ?>" name="data[detail][peternakan][komoditi][pemasaran_lain]" placeholder="Tempat Menjual Hasil" value="<?php echo $profil->detail["peternakan"]["komoditi"]["pemasaran_lain"] ?>">
				</div>
			</div>
			<div class="form-group">
				<label for="peternakan_harga" class="col-sm-3 control-label">Harga Jual /kg</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="peternakan_harga" name="data[detail][peternakan][komoditi][harga]" placeholder="Harga Jual /kg" value="<?php echo $profil->detail["peternakan"]["komoditi"]["harga"] ?>">
				</div>
			</div>
		</div>
		<div class="form-bidang form-groups-bordered perikanan <?php echo $profil->bidang_kegiatan != "perikanan" ? "hidden" : "" ?>">
			<div class="form-group">
				<label for="perikanan_lahan" class="col-sm-3 control-label">Luas Kolam</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="perikanan_lahan" name="data[detail][perikanan][komoditi][lahan]" placeholder="Luas Kolam" value="<?php echo $profil->detail["perikanan"]["komoditi"]["lahan"] ?>">
				</div>
			</div>
			<div class="form-group">
				<label for="perikanan_jenis" class="col-sm-3 control-label">Jenis Usaha</label>
				<div class="col-sm-6">
					<select class="form-control" name="data[detail][perikanan][komoditi][jenis]" id="perikanan_jenis">
						<option <?php echo $profil->detail["perikanan"]["komoditi"]["jenis"] == "perikanan" ? "selected" : "" ?> value="perikanan">Perikanan</option>
						<option <?php echo $profil->detail["perikanan"]["komoditi"]["jenis"] == "rumput_laut" ? "selected" : "" ?> value="rumput_laut">Rumput Laut</option>
					</select>
				</div>
			</div>
			<div class="form-group">
				<label for="perikanan_jumlah_benih" class="col-sm-3 control-label">Jumlah Benih/Ekor</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="perikanan_jumlah_benih" name="data[detail][perikanan][komoditi][jumlah_benih]" placeholder="Jumlah Benih/Ekor" value="<?php echo $profil->detail["perikanan"]["komoditi"]["jumlah_benih"] ?>">
				</div>
			</div>
			<div class="form-group">
				<label for="perikanan_status_lahan" class="col-sm-3 control-label">Status Kepemilikan Lahan</label>
				<div class="col-sm-6">
					<select class="form-control select-lain" name="data[detail][perikanan][komoditi][status_lahan]" id="perikanan_status_lahan">
						<option <?php echo $profil->detail["perikanan"]["komoditi"]["status_lahan"] == "milik" ? "selected" : "" ?> value="milik">Milik</option>
						<option <?php echo $profil->detail["perikanan"]["komoditi"]["status_lahan"] == "sewa" ? "selected" : "" ?> value="sewa">Sewa</option>
						<option <?php echo $profil->detail["perikanan"]["komoditi"]["status_lahan"] == "pinjam" ? "selected" : "" ?> value="pinjam">Pinjam</option>
						<option <?php echo $profil->detail["perikanan"]["komoditi"]["status_lahan"] == "pemerintah" ? "selected" : "" ?> value="pemerintah">Pemerintah</option>
						<option <?php echo $profil->detail["perikanan"]["komoditi"]["status_lahan"] == "lainnya" ? "selected" : "" ?> value="lainnya">Lainnya</option>
					</select>
					<input type="text" class="form-control field-lain <?php echo $profil->detail["perikanan"]["komoditi"]["status_lahan"] != "lainnya" ? "hidden" : "" ?>" name="data[detail][perikanan][komoditi][status_lahan_lain]" placeholder="Status Kepemilikan Lahan" value="<?php echo $profil->detail["perikanan"]["komoditi"]["status_lahan_lain"] ?>">
				</div>
			</div>
			<div class="form-group">
				<label for="perikanan_konsumsi" class="col-sm-3 control-label">Berapa Banyak Digunakan / di Konsumsi Sendiri</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="perikanan_konsumsi" name="data[detail][perikanan][komoditi][konsumsi]" placeholder="Berapa Banyak Digunakan / di Konsumsi Sendiri" value="<?php echo $profil->detail["perikanan"]["komoditi"]["konsumsi"] ?>">
				</div>
			</div>
			<div class="form-group">
				<label for="perikanan_terjual" class="col-sm-3 control-label">Berapa Banyak yang Dijual</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="perikanan_terjual" name="data[detail][perikanan][komoditi][terjual]" placeholder="Berapa Banyak yang Dijual" value="<?php echo $profil->detail["perikanan"]["komoditi"]["terjual"] ?>">
				</div>
			</div>
			<div class="form-group">
				<label for="perikanan_pemasaran" class="col-sm-3 control-label">Tempat Menjual Hasil</label>
				<div class="col-sm-6">
					<select class="form-control select-lain" name="data[detail][perikanan][komoditi][pemasaran]" id="perikanan_pemasaran">
						<option <?php echo $profil->detail["perikanan"]["komoditi"]["pemasaran"] == "pasar_kampung" ? "selected" : "" ?> value="pasar_kampung">Pasar Kampung</option>
						<option <?php echo $profil->detail["perikanan"]["komoditi"]["pemasaran"] == "pasar_distrik" ? "selected" : "" ?> value="pasar_distrik">Pasar Distrik</option>
						<option <?php echo $profil->detail["perikanan"]["komoditi"]["pemasaran"] == "pasar_provinsi" ? "selected" : "" ?> value="pasar_provinsi">Pasar Provinsi</option>
						<option <?php echo $profil->detail["perikanan"]["komoditi"]["pemasaran"] == "pasar_luar_provinsi" ? "selected" : "" ?> value="pasar_luar_provinsi">Pasar Luar Provinsi</option>
						<option <?php echo $profil->detail["perikanan"]["komoditi"]["pemasaran"] == "pengumpul_kampung" ? "selected" : "" ?> value="pengumpul_kampung">Pengumpul Kampung</option>
						<option <?php echo $profil->detail["perikanan"]["komoditi"]["pemasaran"] == "lainnya" ? "selected" : "" ?> value="lainnya">Lainnya</option>
					</select>
					<input type="text" class="form-control field-lain <?php echo $profil->detail["perikanan"]["komoditi"]["pemasaran"] != "lainnya" ? "hidden" : "" ?>" name="data[detail][perikanan][komoditi][pemasaran_lain]" placeholder="Tempat Menjual Hasil" value="<?php echo $profil->detail["perikanan"]["komoditi"]["pemasaran_lain"] ?>">
				</div>
			</div>
			<div class="form-group">
				<label for="perikanan_harga" class="col-sm-3 control-label">Harga Jual /kg</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="perikanan_harga" name="data[detail][perikanan][komoditi][harga]" placeholder="Harga Jual /kg" value="<?php echo $profil->detail["perikanan"]["komoditi"]["harga"] ?>">
				</div>
			</div>
		</div>
		<div class="form-bidang form-groups-bordered hasil <?php echo $profil->bidang_kegiatan != "hasil" ? "hidden" : "" ?>">
			<div class="form-group">
				<label for="hasil_lahan" class="col-sm-3 control-label">Luas Tempat Usaha</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="hasil_lahan" name="data[detail][hasil][komoditi][lahan]" placeholder="Luas Tempat Usaha" value="<?php echo $profil->detail["hasil"]["komoditi"]["lahan"] ?>">
				</div>
			</div>
			<div class="form-group">
				<label for="hasil_status_lahan" class="col-sm-3 control-label">Status Kepemilikan Lahan</label>
				<div class="col-sm-6">
					<select class="form-control select-lain" name="data[detail][hasil][komoditi][status_lahan]" id="hasil_status_lahan">
						<option <?php echo $profil->detail["hasil"]["komoditi"]["status_lahan"] == "milik" ? "selected" : "" ?> value="milik">Milik</option>
						<option <?php echo $profil->detail["hasil"]["komoditi"]["status_lahan"] == "sewa" ? "selected" : "" ?> value="sewa">Sewa</option>
						<option <?php echo $profil->detail["hasil"]["komoditi"]["status_lahan"] == "pinjam" ? "selected" : "" ?> value="pinjam">Pinjam</option>
						<option <?php echo $profil->detail["hasil"]["komoditi"]["status_lahan"] == "pemerintah" ? "selected" : "" ?> value="pemerintah">Pemerintah</option>
						<option <?php echo $profil->detail["hasil"]["komoditi"]["status_lahan"] == "lainnya" ? "selected" : "" ?> value="lainnya">Lainnya</option>
					</select>
					<input type="text" class="form-control field-lain <?php echo $profil->detail["hasil"]["komoditi"]["status_lahan"] != "lainnya" ? "hidden" : "" ?>" name="data[detail][hasil][komoditi][status_lahan_lain]" placeholder="Status Kepemilikan Lahan" value="<?php echo $profil->detail["hasil"]["komoditi"]["status_lahan_lain"] ?>">
				</div>
			</div>
			<div class="form-group">
				<label for="hasil_jenis_olahan_1" class="col-sm-3 control-label">Komoditi Pengolahan Hasil</label>
				<div class="col-sm-3">
					<span>Jenis Olahan 1</span>
					<input type="text" class="form-control" id="hasil_jenis_olahan_1" name="data[detail][hasil][komoditi][olahan][1]" placeholder="Jenis Olahan 1" value="<?php echo $profil->detail["hasil"]["komoditi"]["olahan"][1] ?>">
				</div>
				<div class="col-sm-3">
					<span>Jenis Olahan 2</span>
					<input type="text" class="form-control" id="hasil_jenis_olahan_2" name="data[detail][hasil][komoditi][olahan][2]" placeholder="Jenis Olahan 2" value="<?php echo $profil->detail["hasil"]["komoditi"]["olahan"][2] ?>">
				</div>
			</div>
			<div class="form-group">
				<label for="hasil_jenis_olahan_3" class="col-sm-3 control-label"></label>
				<div class="col-sm-3">
					<span>Jenis Olahan 3</span>
					<input type="text" class="form-control" id="hasil_jenis_olahan_3" name="data[detail][hasil][komoditi][olahan][3]" placeholder="Jenis Olahan 3" value="<?php echo $profil->detail["hasil"]["komoditi"]["olahan"][3] ?>">
				</div>
				<div class="col-sm-3">
					<span>Jenis Olahan 4</span>
					<input type="text" class="form-control" id="hasil_jenis_olahan_4" name="data[detail][hasil][komoditi][olahan][4]" placeholder="Jenis Olahan 4" value="<?php echo $profil->detail["hasil"]["komoditi"]["olahan"][4] ?>">
				</div>
			</div>
			<div class="form-group">
				<label for="hasil_jenis_olahan_sebelum_1" class="col-sm-3 control-label">Hasil Produksi Sebelum ikut serta dalam PNPM MPd Pertanian</label>
				<div class="col-sm-3">
					<span>Jenis Olahan 1</span>
					<input type="text" class="form-control" id="hasil_jenis_olahan_sebelum_1" name="data[detail][hasil][komoditi][olahan_sebelum][1][jenis]" placeholder="Jenis Olahan 1" value="<?php echo $profil->detail["hasil"]["komoditi"]["olahan_sebelum"][1]["jenis"] ?>">
				</div>
				<div class="col-sm-3">
					<span>Harga Jenis Olahan 1</span>
					<input type="text" class="form-control" id="hasil_harga_jenis_olahan_sebelum_1" name="data[detail][hasil][komoditi][olahan_sebelum][1][harga]" placeholder="Harga Jenis Olahan 1" value="<?php echo $profil->detail["hasil"]["komoditi"]["olahan_sebelum"][1]["harga"] ?>">
				</div>
			</div>
			<div class="form-group">
				<label for="hasil_jenis_olahan_sebelum_2" class="col-sm-3 control-label"></label>
				<div class="col-sm-3">
					<span>Jenis Olahan 2</span>
					<input type="text" class="form-control" id="hasil_jenis_olahan_sebelum_2" name="data[detail][hasil][komoditi][olahan_sebelum][2][jenis]" placeholder="Jenis Olahan 2" value="<?php echo $profil->detail["hasil"]["komoditi"]["olahan_sebelum"][2]["jenis"] ?>">
				</div>
				<div class="col-sm-3">
					<span>Harga Jenis Olahan 2</span>
					<input type="text" class="form-control" id="hasil_harga_jenis_olahan_sebelum_2" name="data[detail][hasil][komoditi][olahan_sebelum][2][harga]" placeholder="Harga Jenis Olahan 2" value="<?php echo $profil->detail["hasil"]["komoditi"]["olahan_sebelum"][2]["harga"] ?>">
				</div>
			</div>
			<div class="form-group">
				<label for="hasil_jenis_olahan_sebelum_3" class="col-sm-3 control-label"></label>
				<div class="col-sm-3">
					<span>Jenis Olahan 3</span>
					<input type="text" class="form-control" id="hasil_jenis_olahan_sebelum_3" name="data[detail][hasil][komoditi][olahan_sebelum][3][jenis]" placeholder="Jenis Olahan 3" value="<?php echo $profil->detail["hasil"]["komoditi"]["olahan_sebelum"][3]["jenis"] ?>">
				</div>
				<div class="col-sm-3">
					<span>Harga Jenis Olahan 3</span>
					<input type="text" class="form-control" id="hasil_harga_jenis_olahan_sebelum_3" name="data[detail][hasil][komoditi][olahan_sebelum][3][harga]" placeholder="Harga Jenis Olahan 3" value="<?php echo $profil->detail["hasil"]["komoditi"]["olahan_sebelum"][3]["harga"] ?>">
				</div>
			</div>
			<div class="form-group">
				<label for="hasil_jenis_olahan_sebelum_4" class="col-sm-3 control-label"></label>
				<div class="col-sm-3">
					<span>Jenis Olahan 4</span>
					<input type="text" class="form-control" id="hasil_jenis_olahan_sebelum_4" name="data[detail][hasil][komoditi][olahan_sebelum][4][jenis]" placeholder="Jenis Olahan 4" value="<?php echo $profil->detail["hasil"]["komoditi"]["olahan_sebelum"][4]["jenis"] ?>">
				</div>
				<div class="col-sm-3">
					<span>Harga Jenis Olahan 4</span>
					<input type="text" class="form-control" id="hasil_harga_jenis_olahan_sebelum_4" name="data[detail][hasil][komoditi][olahan_sebelum][4][harga]" placeholder="Harga Jenis Olahan 4" value="<?php echo $profil->detail["hasil"]["komoditi"]["olahan_sebelum"][4]["harga"] ?>">
				</div>
			</div><div class="form-group">
				<label for="hasil_jenis_olahan_setelah_1" class="col-sm-3 control-label">Hasil Produksi Setelah ikut serta dalam PNPM MPd Pertanian</label>
				<div class="col-sm-3">
					<span>Jenis Olahan 1</span>
					<input type="text" class="form-control" id="hasil_jenis_olahan_setelah_1" name="data[detail][hasil][komoditi][olahan_setelah][1][jenis]" placeholder="Jenis Olahan 1" value="<?php echo $profil->detail["hasil"]["komoditi"]["olahan_setelah"][1]["jenis"] ?>">
				</div>
				<div class="col-sm-3">
					<span>Harga Jenis Olahan 1</span>
					<input type="text" class="form-control" id="hasil_harga_jenis_olahan_setelah_1" name="data[detail][hasil][komoditi][olahan_setelah][1][harga]" placeholder="Harga Jenis Olahan 1" value="<?php echo $profil->detail["hasil"]["komoditi"]["olahan_setelah"][1]["harga"] ?>">
				</div>
			</div>
			<div class="form-group">
				<label for="hasil_jenis_olahan_setelah_2" class="col-sm-3 control-label"></label>
				<div class="col-sm-3">
					<span>Jenis Olahan 2</span>
					<input type="text" class="form-control" id="hasil_jenis_olahan_setelah_2" name="data[detail][hasil][komoditi][olahan_setelah][2][jenis]" placeholder="Jenis Olahan 2" value="<?php echo $profil->detail["hasil"]["komoditi"]["olahan_setelah"][2]["jenis"] ?>">
				</div>
				<div class="col-sm-3">
					<span>Harga Jenis Olahan 2</span>
					<input type="text" class="form-control" id="hasil_harga_jenis_olahan_setelah_2" name="data[detail][hasil][komoditi][olahan_setelah][2][harga]" placeholder="Harga Jenis Olahan 2" value="<?php echo $profil->detail["hasil"]["komoditi"]["olahan_setelah"][2]["harga"] ?>">
				</div>
			</div>
			<div class="form-group">
				<label for="hasil_jenis_olahan_setelah_3" class="col-sm-3 control-label"></label>
				<div class="col-sm-3">
					<span>Jenis Olahan 3</span>
					<input type="text" class="form-control" id="hasil_jenis_olahan_setelah_3" name="data[detail][hasil][komoditi][olahan_setelah][3][jenis]" placeholder="Jenis Olahan 3" value="<?php echo $profil->detail["hasil"]["komoditi"]["olahan_setelah"][3]["jenis"] ?>">
				</div>
				<div class="col-sm-3">
					<span>Harga Jenis Olahan 3</span>
					<input type="text" class="form-control" id="hasil_harga_jenis_olahan_setelah_3" name="data[detail][hasil][komoditi][olahan_setelah][3][harga]" placeholder="Harga Jenis Olahan 3" value="<?php echo $profil->detail["hasil"]["komoditi"]["olahan_setelah"][3]["harga"] ?>">
				</div>
			</div>
			<div class="form-group">
				<label for="hasil_jenis_olahan_setelah_4" class="col-sm-3 control-label"></label>
				<div class="col-sm-3">
					<span>Jenis Olahan 4</span>
					<input type="text" class="form-control" id="hasil_jenis_olahan_setelah_4" name="data[detail][hasil][komoditi][olahan_setelah][4][jenis]" placeholder="Jenis Olahan 4" value="<?php echo $profil->detail["hasil"]["komoditi"]["olahan_setelah"][4]["jenis"] ?>">
				</div>
				<div class="col-sm-3">
					<span>Harga Jenis Olahan 4</span>
					<input type="text" class="form-control" id="hasil_harga_jenis_olahan_setelah_4" name="data[detail][hasil][komoditi][olahan_setelah][4][harga]" placeholder="Harga Jenis Olahan 4" value="<?php echo $profil->detail["hasil"]["komoditi"]["olahan_setelah"][4]["harga"] ?>">
				</div>
			</div>
			<div class="form-group">
				<label for="hasil_konsumsi" class="col-sm-3 control-label">Berapa Banyak Digunakan</label>
				<div class="col-sm-5">
					<input type="text" class="form-control" id="hasil_konsumsi" name="data[detail][hasil][komoditi][konsumsi]" placeholder="Berapa Banyak Digunakan" value="<?php echo $profil->detail["hasil"]["komoditi"]["konsumsi"] ?>">
				</div>
			</div>
			<div class="form-group">
				<label for="hasil_terjual" class="col-sm-3 control-label">Berapa Banyak yang Dijual</label>
				<div class="col-sm-5">
					<input type="text" class="form-control" id="hasil_terjual" name="data[detail][hasil][komoditi][terjual]" placeholder="Berapa Banyak yang Dijual" value="<?php echo $profil->detail["hasil"]["komoditi"]["terjual"] ?>">
				</div>
			</div>
			<div class="form-group">
				<label for="hasil_pemasaran" class="col-sm-3 control-label">Tempat Menjual Hasil</label>
				<div class="col-sm-5">
					<select class="form-control select-lain" name="data[detail][hasil][komoditi][pemasaran]" id="hasil_pemasaran">
						<option <?php echo $profil->detail["hasil"]["komoditi"]["pemasaran"] == "pasar_kampung" ? "selected" : "" ?> value="pasar_kampung">Pasar Kampung</option>
						<option <?php echo $profil->detail["hasil"]["komoditi"]["pemasaran"] == "pasar_distrik" ? "selected" : "" ?> value="pasar_distrik">Pasar Distrik</option>
						<option <?php echo $profil->detail["hasil"]["komoditi"]["pemasaran"] == "pasar_provinsi" ? "selected" : "" ?> value="pasar_provinsi">Pasar Provinsi</option>
						<option <?php echo $profil->detail["hasil"]["komoditi"]["pemasaran"] == "pasar_luar_provinsi" ? "selected" : "" ?> value="pasar_luar_provinsi">Pasar Luar Provinsi</option>
						<option <?php echo $profil->detail["hasil"]["komoditi"]["pemasaran"] == "pengumpul_kampung" ? "selected" : "" ?> value="pengumpul_kampung">Pengumpul Kampung</option>
						<option <?php echo $profil->detail["hasil"]["komoditi"]["pemasaran"] == "lainnya" ? "selected" : "" ?> value="lainnya">Lainnya</option>
					</select>
					<input type="text" class="form-control field-lain <?php echo $profil->detail["hasil"]["komoditi"]["pemasaran"] != "lainnya" ? "hidden" : "" ?>" name="data[detail][hasil][komoditi][pemasaran_lain]" placeholder="Tempat Menjual Hasil" value="<?php echo $profil->detail["hasil"]["komoditi"]["pemasaran_lain"] ?>">
				</div>
			</div>
			<div class="form-group">
				<label for="hasil_harga" class="col-sm-3 control-label">Harga Jual /kg</label>
				<div class="col-sm-5">
					<input type="text" class="form-control" id="hasil_harga" name="data[detail][hasil][komoditi][harga]" placeholder="Harga Jual /kg" value="<?php echo $profil->detail["hasil"]["komoditi"]["harga"] ?>">
				</div>
			</div>
		</div>

		<h3>III. Sarana yang Dimiliki</h3>
		<hr>
		<div class="form-bidang form-groups-bordered pertanian <?php echo $profil->bidang_kegiatan != "pertanian" ? "hidden" : "" ?>">
			<?php if(!isset($profil->detail['pertanian']['sarana']['peralatan']) || !is_array($profil->detail['pertanian']['sarana']['peralatan'])) $profil->detail['pertanian']['sarana']['peralatan'] = array() ?>
			<div class="form-group">
				<label for="pertanian_pertemuan" class="col-sm-3 control-label">Tempat Pertemuan</label>
				<div class="col-sm-6">
					<select class="form-control select-lain" name="data[detail][pertanian][sarana][pertemuan]" id="pertanian_pertemuan">
						<option <?php echo $profil->detail["pertanian"]["sarana"]["pertemuan"] == "saung" ? "selected" : "" ?> value="saung">Saung kelompok</option>
						<option <?php echo $profil->detail["pertanian"]["sarana"]["pertemuan"] == "balai" ? "selected" : "" ?> value="balai">Balai kampung/desa</option>
						<option <?php echo $profil->detail["pertanian"]["sarana"]["pertemuan"] == "rumah_pengurus" ? "selected" : "" ?> value="rumah_pengurus">Rumah pengurus</option>
						<option <?php echo $profil->detail["pertanian"]["sarana"]["pertemuan"] == "rumah_anggota" ? "selected" : "" ?> value="rumah_anggota">Rumah anggota</option>
						<option <?php echo $profil->detail["pertanian"]["sarana"]["pertemuan"] == "lainnya" ? "selected" : "" ?> value="lainnya">Lainnya</option>
					</select>
					<input type="text" class="form-control field-lain <?php echo $profil->detail["pertanian"]["sarana"]["pertemuan"] != "lainnya" ? "hidden" : "" ?>" name="data[detail][pertanian][sarana][pertemuan_lainnya]" placeholder="Tempat Pertemuan" value="<?php echo $profil->detail["pertanian"]["sarana"]["pertemuan_lainnya"] ?>">
				</div>
			</div>
			<div class="form-group">
				<label for="pertanian_peralatan" class="col-sm-3 control-label">Peralatan Yang Diperoleh Untuk Pelaksanaan Produksi</label>
				<div class="col-sm-6">
					<div class="checkbox">
						<label>
							<input type="checkbox" name="data[detail][pertanian][sarana][peralatan][]" value="Cangkul" <?php echo in_array("Cangkul", $profil->detail['pertanian']['sarana']['peralatan']) ? "checked" : "" ?>>Cangkul
						</label>
					</div>
					<div class="checkbox">
						<label>
							<input type="checkbox" name="data[detail][pertanian][sarana][peralatan][]" value="Parang" <?php echo in_array("Parang", $profil->detail['pertanian']['sarana']['peralatan']) ? "checked" : "" ?>>Parang
						</label>
					</div>
					<div class="checkbox">
						<label>
							<input type="checkbox" name="data[detail][pertanian][sarana][peralatan][]" value="Sekop" <?php echo in_array("Sekop", $profil->detail['pertanian']['sarana']['peralatan']) ? "checked" : "" ?>>Sekop
						</label>
					</div>
					<div class="checkbox">
						<label>
							<input type="checkbox" name="data[detail][pertanian][sarana][peralatan][]" value="Pakuel" <?php echo in_array("Pakuel", $profil->detail['pertanian']['sarana']['peralatan']) ? "checked" : "" ?>>Pakuel
						</label>
					</div>
					<div class="checkbox">
						<label>
							<input type="checkbox" name="data[detail][pertanian][sarana][peralatan][]" value="Garpu" <?php echo in_array("Garpu", $profil->detail['pertanian']['sarana']['peralatan']) ? "checked" : "" ?>>Garpu
						</label>
					</div>
					<div class="checkbox">
						<label>
							<input type="checkbox" name="data[detail][pertanian][sarana][peralatan][]" value="Peralatan tukang" <?php echo in_array("Peralatan tukang", $profil->detail['pertanian']['sarana']['peralatan']) ? "checked" : "" ?>>Peralatan tukang
						</label>
					</div>
					<div class="checkbox">
						<label>
							<input type="checkbox" name="data[detail][pertanian][sarana][peralatan][]" value="Selang" <?php echo in_array("Selang", $profil->detail['pertanian']['sarana']['peralatan']) ? "checked" : "" ?>>Selang
						</label>
					</div>
					<div class="checkbox">
						<label>
							<input type="checkbox" name="data[detail][pertanian][sarana][peralatan][]" value="Handsprayer" <?php echo in_array("Handsprayer", $profil->detail['pertanian']['sarana']['peralatan']) ? "checked" : "" ?>>Handsprayer
						</label>
					</div>
					<div class="checkbox">
						<label>
							<input type="checkbox" name="data[detail][pertanian][sarana][peralatan][]" value="Gembor" <?php echo in_array("Gembor", $profil->detail['pertanian']['sarana']['peralatan']) ? "checked" : "" ?>>Gembor
						</label>
					</div>
					<div class="checkbox">
						<label>
							<input type="checkbox" name="data[detail][pertanian][sarana][peralatan][]" value="Hand tractor" <?php echo in_array("Hand tractor", $profil->detail['pertanian']['sarana']['peralatan']) ? "checked" : "" ?>>Hand tractor
						</label>
					</div>
					<div class="checkbox">
						<label>
							<input type="checkbox" name="data[detail][pertanian][sarana][peralatan][]" value="Sepatu boat, serok, jerigen, kored, dll" <?php echo in_array("Sepatu boat, serok, jerigen, kored, dll", $profil->detail['pertanian']['sarana']['peralatan']) ? "checked" : "" ?>>Sepatu boat, serok, jerigen, kored, dll
						</label>
					</div>
					<div class="checkbox">
						<label>
							<input type="checkbox" name="data[detail][pertanian][sarana][peralatan][]" value="Motor roda tiga" <?php echo in_array("Motor roda tiga", $profil->detail['pertanian']['sarana']['peralatan']) ? "checked" : "" ?>>Motor roda tiga
						</label>
					</div>
				</div>
			</div>
			<div class="form-group">
				<label for="pertanian_transportasi" class="col-sm-3 control-label">Pengangkutan Hasil Dari Lahan Ke Rumah</label>
				<div class="col-sm-6">
					<select class="form-control select-lain" name="data[detail][pertanian][sarana][transportasi]" id="pertanian_transportasi">
						<option <?php echo $profil->detail["pertanian"]["sarana"]["transportasi"] == "gerobak_kelompok" ? "selected" : "" ?> value="gerobak_kelompok">Gerobak kelompok</option>
						<option <?php echo $profil->detail["pertanian"]["sarana"]["transportasi"] == "gerobak_pribadi" ? "selected" : "" ?> value="gerobak_pribadi">Gerobak pribadi </option>
						<option <?php echo $profil->detail["pertanian"]["sarana"]["transportasi"] == "beko_kelompok" ? "selected" : "" ?> value="beko_kelompok">Beko (roda tiga) kelompok</option>
						<option <?php echo $profil->detail["pertanian"]["sarana"]["transportasi"] == "beko_pribadi" ? "selected" : "" ?> value="beko_pribadi">Beko pribadi</option>
						<option <?php echo $profil->detail["pertanian"]["sarana"]["transportasi"] == "motor_kelompok" ? "selected" : "" ?> value="motor_kelompok">Motor kelompok</option>
						<option <?php echo $profil->detail["pertanian"]["sarana"]["transportasi"] == "motor_pribadi" ? "selected" : "" ?> value="motor_pribadi">Motor pribadi </option>
						<option <?php echo $profil->detail["pertanian"]["sarana"]["transportasi"] == "lainnya" ? "selected" : "" ?> value="lainnya">Lainnya</option>
					</select>
					<input type="text" class="form-control field-lain <?php echo $profil->detail["pertanian"]["sarana"]["transportasi"] != "lainnya" ? "hidden" : "" ?>" name="data[detail][pertanian][sarana][transportasi_lainnya]" placeholder="Pengangkutan Hasil Dari Lahan Ke Rumah" value="<?php echo $profil->detail["pertanian"]["sarana"]["transportasi_lainnya"] ?>">
				</div>
			</div>
			<div class="form-group">
				<label for="pertanian_gudang" class="col-sm-3 control-label">Penyimpanan Alat dan Hasil Produksi</label>
				<div class="col-sm-6">
					<select class="form-control" name="data[detail][pertanian][sarana][gudang]" id="pertanian_gudang">
						<option <?php echo $profil->detail["pertanian"]["sarana"]["gudang"] == "gudang_kelompok" ? "selected" : "" ?> value="gudang_kelompok">Gudang kelompok</option>
						<option <?php echo $profil->detail["pertanian"]["sarana"]["gudang"] == "gudang_pengurus" ? "selected" : "" ?> value="gudang_pengurus">Gudang pribadi pengurus kelompok</option>
						<option <?php echo $profil->detail["pertanian"]["sarana"]["gudang"] == "gudang_anggota" ? "selected" : "" ?> value="gudang_anggota">Gudang pribadi salah satu anggota</option>
						<option <?php echo $profil->detail["pertanian"]["sarana"]["gudang"] == "gudang_desa" ? "selected" : "" ?> value="gudang_desa">Gudang kampung/desa</option>
						<option <?php echo $profil->detail["pertanian"]["sarana"]["gudang"] == "gudang_mitra" ? "selected" : "" ?> value="gudang_mitra">Gudang mitra kerja</option>
					</select>
				</div>
			</div>
		</div>
		<div class="form-bidang form-groups-bordered perkebunan <?php echo $profil->bidang_kegiatan != "perkebunan" ? "hidden" : "" ?>">
			<?php if(!isset($profil->detail['perkebunan']['sarana']['peralatan']) || !is_array($profil->detail['perkebunan']['sarana']['peralatan'])) $profil->detail['perkebunan']['sarana']['peralatan'] = array() ?>
			<div class="form-group">
				<label for="perkebunan_pertemuan" class="col-sm-3 control-label">Tempat Pertemuan</label>
				<div class="col-sm-6">
					<select class="form-control select-lain" name="data[detail][perkebunan][sarana][pertemuan]" id="perkebunan_pertemuan">
						<option <?php echo $profil->detail["perkebunan"]["sarana"]["pertemuan"] == "saung" ? "selected" : "" ?> value="saung">Saung kelompok</option>
						<option <?php echo $profil->detail["perkebunan"]["sarana"]["pertemuan"] == "balai" ? "selected" : "" ?> value="balai">Balai kampung/desa</option>
						<option <?php echo $profil->detail["perkebunan"]["sarana"]["pertemuan"] == "rumah_pengurus" ? "selected" : "" ?> value="rumah_pengurus">Rumah pengurus</option>
						<option <?php echo $profil->detail["perkebunan"]["sarana"]["pertemuan"] == "rumah_anggota" ? "selected" : "" ?> value="rumah_anggota">Rumah anggota</option>
						<option <?php echo $profil->detail["perkebunan"]["sarana"]["pertemuan"] == "lainnya" ? "selected" : "" ?> value="lainnya">Lainnya</option>
					</select>
					<input type="text" class="form-control field-lain <?php echo $profil->detail["perkebunan"]["sarana"]["pertemuan"] != "lainnya" ? "hidden" : "" ?>" name="data[detail][perkebunan][sarana][pertemuan_lainnya]" placeholder="Tempat Pertemuan" value="<?php echo $profil->detail["perkebunan"]["sarana"]["pertemuan_lainnya"] ?>">
				</div>
			</div>
			<div class="form-group">
				<label for="perkebunan_peralatan" class="col-sm-3 control-label">Peralatan Yang Diperoleh Untuk Pelaksanaan Produksi</label>
				<div class="col-sm-6">
					<div class="checkbox">
						<label>
							<input type="checkbox" name="data[detail][perkebunan][sarana][peralatan][]" value="Cangkul" <?php echo in_array("Cangkul", $profil->detail['perkebunan']['sarana']['peralatan']) ? "checked" : "" ?>>Cangkul
						</label>
					</div>
					<div class="checkbox">
						<label>
							<input type="checkbox" name="data[detail][perkebunan][sarana][peralatan][]" value="Parang" <?php echo in_array("Parang", $profil->detail['perkebunan']['sarana']['peralatan']) ? "checked" : "" ?>>Parang
						</label>
					</div>
					<div class="checkbox">
						<label>
							<input type="checkbox" name="data[detail][perkebunan][sarana][peralatan][]" value="Sekop" <?php echo in_array("Sekop", $profil->detail['perkebunan']['sarana']['peralatan']) ? "checked" : "" ?>>Sekop
						</label>
					</div>
					<div class="checkbox">
						<label>
							<input type="checkbox" name="data[detail][perkebunan][sarana][peralatan][]" value="Pakuel" <?php echo in_array("Pakuel", $profil->detail['perkebunan']['sarana']['peralatan']) ? "checked" : "" ?>>Pakuel
						</label>
					</div>
					<div class="checkbox">
						<label>
							<input type="checkbox" name="data[detail][perkebunan][sarana][peralatan][]" value="Garpu" <?php echo in_array("Garpu", $profil->detail['perkebunan']['sarana']['peralatan']) ? "checked" : "" ?>>Garpu
						</label>
					</div>
					<div class="checkbox">
						<label>
							<input type="checkbox" name="data[detail][perkebunan][sarana][peralatan][]" value="Peralatan tukang" <?php echo in_array("Peralatan tukang", $profil->detail['perkebunan']['sarana']['peralatan']) ? "checked" : "" ?>>Peralatan tukang
						</label>
					</div>
					<div class="checkbox">
						<label>
							<input type="checkbox" name="data[detail][perkebunan][sarana][peralatan][]" value="Selang" <?php echo in_array("Selang", $profil->detail['perkebunan']['sarana']['peralatan']) ? "checked" : "" ?>>Selang
						</label>
					</div>
					<div class="checkbox">
						<label>
							<input type="checkbox" name="data[detail][perkebunan][sarana][peralatan][]" value="Handsprayer" <?php echo in_array("Handsprayer", $profil->detail['perkebunan']['sarana']['peralatan']) ? "checked" : "" ?>>Handsprayer
						</label>
					</div>
					<div class="checkbox">
						<label>
							<input type="checkbox" name="data[detail][perkebunan][sarana][peralatan][]" value="Gembor" <?php echo in_array("Gembor", $profil->detail['perkebunan']['sarana']['peralatan']) ? "checked" : "" ?>>Gembor
						</label>
					</div>
					<div class="checkbox">
						<label>
							<input type="checkbox" name="data[detail][perkebunan][sarana][peralatan][]" value="Hand tractor" <?php echo in_array("Hand tractor", $profil->detail['perkebunan']['sarana']['peralatan']) ? "checked" : "" ?>>Hand tractor
						</label>
					</div>
					<div class="checkbox">
						<label>
							<input type="checkbox" name="data[detail][perkebunan][sarana][peralatan][]" value="Sepatu boat, serok, jerigen, kored, dll" <?php echo in_array("Sepatu boat, serok, jerigen, kored, dll", $profil->detail['perkebunan']['sarana']['peralatan']) ? "checked" : "" ?>>Sepatu boat, serok, jerigen, kored, dll
						</label>
					</div>
					<div class="checkbox">
						<label>
							<input type="checkbox" name="data[detail][perkebunan][sarana][peralatan][]" value="Motor roda tiga" <?php echo in_array("Motor roda tiga", $profil->detail['perkebunan']['sarana']['peralatan']) ? "checked" : "" ?>>Motor roda tiga
						</label>
					</div>
				</div>
			</div>
			<div class="form-group">
				<label for="perkebunan_transportasi" class="col-sm-3 control-label">Pengangkutan Hasil Dari Lahan Ke Rumah</label>
				<div class="col-sm-6">
					<select class="form-control select-lain" name="data[detail][perkebunan][sarana][transportasi]" id="perkebunan_transportasi">
						<option <?php echo $profil->detail["perkebunan"]["sarana"]["transportasi"] == "gerobak_kelompok" ? "selected" : "" ?> value="gerobak_kelompok">Gerobak kelompok</option>
						<option <?php echo $profil->detail["perkebunan"]["sarana"]["transportasi"] == "gerobak_pribadi" ? "selected" : "" ?> value="gerobak_pribadi">Gerobak pribadi </option>
						<option <?php echo $profil->detail["perkebunan"]["sarana"]["transportasi"] == "beko_kelompok" ? "selected" : "" ?> value="beko_kelompok">Beko (roda tiga) kelompok</option>
						<option <?php echo $profil->detail["perkebunan"]["sarana"]["transportasi"] == "beko_pribadi" ? "selected" : "" ?> value="beko_pribadi">Beko pribadi</option>
						<option <?php echo $profil->detail["perkebunan"]["sarana"]["transportasi"] == "motor_kelompok" ? "selected" : "" ?> value="motor_kelompok">Motor kelompok</option>
						<option <?php echo $profil->detail["perkebunan"]["sarana"]["transportasi"] == "motor_pribadi" ? "selected" : "" ?> value="motor_pribadi">Motor pribadi </option>
						<option <?php echo $profil->detail["perkebunan"]["sarana"]["transportasi"] == "lainnya" ? "selected" : "" ?> value="lainnya">Lainnya</option>
					</select>
					<input type="text" class="form-control field-lain <?php echo $profil->detail["perkebunan"]["sarana"]["transportasi"] != "lainnya" ? "hidden" : "" ?>" name="data[detail][perkebunan][sarana][transportasi_lainnya]" placeholder="Pengangkutan Hasil Dari Lahan Ke Rumah" value="<?php echo $profil->detail["perkebunan"]["sarana"]["transportasi_lainnya"] ?>">
				</div>
			</div>
			<div class="form-group">
				<label for="perkebunan_gudang" class="col-sm-3 control-label">Penyimpanan Alat dan Hasil Produksi</label>
				<div class="col-sm-6">
					<select class="form-control" name="data[detail][perkebunan][sarana][gudang]" id="perkebunan_gudang">
						<option <?php echo $profil->detail["perkebunan"]["sarana"]["gudang"] == "gudang_kelompok" ? "selected" : "" ?> value="gudang_kelompok">Gudang kelompok</option>
						<option <?php echo $profil->detail["perkebunan"]["sarana"]["gudang"] == "gudang_pengurus" ? "selected" : "" ?> value="gudang_pengurus">Gudang pribadi pengurus kelompok</option>
						<option <?php echo $profil->detail["perkebunan"]["sarana"]["gudang"] == "gudang_anggota" ? "selected" : "" ?> value="gudang_anggota">Gudang pribadi salah satu anggota</option>
						<option <?php echo $profil->detail["perkebunan"]["sarana"]["gudang"] == "gudang_desa" ? "selected" : "" ?> value="gudang_desa">Gudang kampung/desa</option>
						<option <?php echo $profil->detail["perkebunan"]["sarana"]["gudang"] == "gudang_mitra" ? "selected" : "" ?> value="gudang_mitra">Gudang mitra kerja</option>
					</select>
				</div>
			</div>
		</div>
		<div class="form-bidang form-groups-bordered buah <?php echo $profil->bidang_kegiatan != "buah" ? "hidden" : "" ?>">
			<?php if(!isset($profil->detail['buah']['sarana']['peralatan']) || !is_array($profil->detail['buah']['sarana']['peralatan'])) $profil->detail['buah']['sarana']['peralatan'] = array() ?>
			<div class="form-group">
				<label for="buah_pertemuan" class="col-sm-3 control-label">Tempat Pertemuan</label>
				<div class="col-sm-6">
					<select class="form-control select-lain" name="data[detail][buah][sarana][pertemuan]" id="buah_pertemuan">
						<option <?php echo $profil->detail["buah"]["sarana"]["pertemuan"] == "saung" ? "selected" : "" ?> value="saung">Saung kelompok</option>
						<option <?php echo $profil->detail["buah"]["sarana"]["pertemuan"] == "balai" ? "selected" : "" ?> value="balai">Balai kampung/desa</option>
						<option <?php echo $profil->detail["buah"]["sarana"]["pertemuan"] == "rumah_pengurus" ? "selected" : "" ?> value="rumah_pengurus">Rumah pengurus</option>
						<option <?php echo $profil->detail["buah"]["sarana"]["pertemuan"] == "rumah_anggota" ? "selected" : "" ?> value="rumah_anggota">Rumah anggota</option>
						<option <?php echo $profil->detail["buah"]["sarana"]["pertemuan"] == "lainnya" ? "selected" : "" ?> value="lainnya">Lainnya</option>
					</select>
					<input type="text" class="form-control field-lain <?php echo $profil->detail["buah"]["sarana"]["pertemuan"] != "lainnya" ? "hidden" : "" ?>" name="data[detail][buah][sarana][pertemuan_lainnya]" placeholder="Tempat Pertemuan" value="<?php echo $profil->detail["buah"]["sarana"]["pertemuan_lainnya"] ?>">
				</div>
			</div>
			<div class="form-group">
				<label for="buah_peralatan" class="col-sm-3 control-label">Peralatan Yang Diperoleh Untuk Pelaksanaan Produksi</label>
				<div class="col-sm-6">
					<div class="checkbox">
						<label>
							<input type="checkbox" name="data[detail][buah][sarana][peralatan][]" value="Cangkul" <?php echo in_array("Cangkul", $profil->detail['buah']['sarana']['peralatan']) ? "checked" : "" ?>>Cangkul
						</label>
					</div>
					<div class="checkbox">
						<label>
							<input type="checkbox" name="data[detail][buah][sarana][peralatan][]" value="Parang" <?php echo in_array("Parang", $profil->detail['buah']['sarana']['peralatan']) ? "checked" : "" ?>>Parang
						</label>
					</div>
					<div class="checkbox">
						<label>
							<input type="checkbox" name="data[detail][buah][sarana][peralatan][]" value="Sekop" <?php echo in_array("Sekop", $profil->detail['buah']['sarana']['peralatan']) ? "checked" : "" ?>>Sekop
						</label>
					</div>
					<div class="checkbox">
						<label>
							<input type="checkbox" name="data[detail][buah][sarana][peralatan][]" value="Pakuel" <?php echo in_array("Pakuel", $profil->detail['buah']['sarana']['peralatan']) ? "checked" : "" ?>>Pakuel
						</label>
					</div>
					<div class="checkbox">
						<label>
							<input type="checkbox" name="data[detail][buah][sarana][peralatan][]" value="Garpu" <?php echo in_array("Garpu", $profil->detail['buah']['sarana']['peralatan']) ? "checked" : "" ?>>Garpu
						</label>
					</div>
					<div class="checkbox">
						<label>
							<input type="checkbox" name="data[detail][buah][sarana][peralatan][]" value="Peralatan tukang" <?php echo in_array("Peralatan tukang", $profil->detail['buah']['sarana']['peralatan']) ? "checked" : "" ?>>Peralatan tukang
						</label>
					</div>
					<div class="checkbox">
						<label>
							<input type="checkbox" name="data[detail][buah][sarana][peralatan][]" value="Selang" <?php echo in_array("Selang", $profil->detail['buah']['sarana']['peralatan']) ? "checked" : "" ?>>Selang
						</label>
					</div>
					<div class="checkbox">
						<label>
							<input type="checkbox" name="data[detail][buah][sarana][peralatan][]" value="Handsprayer" <?php echo in_array("Handsprayer", $profil->detail['buah']['sarana']['peralatan']) ? "checked" : "" ?>>Handsprayer
						</label>
					</div>
					<div class="checkbox">
						<label>
							<input type="checkbox" name="data[detail][buah][sarana][peralatan][]" value="Gembor" <?php echo in_array("Gembor", $profil->detail['buah']['sarana']['peralatan']) ? "checked" : "" ?>>Gembor
						</label>
					</div>
					<div class="checkbox">
						<label>
							<input type="checkbox" name="data[detail][buah][sarana][peralatan][]" value="Hand tractor" <?php echo in_array("Hand tractor", $profil->detail['buah']['sarana']['peralatan']) ? "checked" : "" ?>>Hand tractor
						</label>
					</div>
					<div class="checkbox">
						<label>
							<input type="checkbox" name="data[detail][buah][sarana][peralatan][]" value="Sepatu boat, serok, jerigen, kored, dll" <?php echo in_array("Sepatu boat, serok, jerigen, kored, dll", $profil->detail['buah']['sarana']['peralatan']) ? "checked" : "" ?>>Sepatu boat, serok, jerigen, kored, dll
						</label>
					</div>
					<div class="checkbox">
						<label>
							<input type="checkbox" name="data[detail][buah][sarana][peralatan][]" value="Motor roda tiga" <?php echo in_array("Motor roda tiga", $profil->detail['buah']['sarana']['peralatan']) ? "checked" : "" ?>>Motor roda tiga
						</label>
					</div>
				</div>
			</div>
			<div class="form-group">
				<label for="buah_transportasi" class="col-sm-3 control-label">Pengangkutan Hasil Dari Lahan Ke Rumah</label>
				<div class="col-sm-6">
					<select class="form-control select-lain" name="data[detail][buah][sarana][transportasi]" id="buah_transportasi">
						<option <?php echo $profil->detail["buah"]["sarana"]["transportasi"] == "gerobak_kelompok" ? "selected" : "" ?> value="gerobak_kelompok">Gerobak kelompok</option>
						<option <?php echo $profil->detail["buah"]["sarana"]["transportasi"] == "gerobak_pribadi" ? "selected" : "" ?> value="gerobak_pribadi">Gerobak pribadi </option>
						<option <?php echo $profil->detail["buah"]["sarana"]["transportasi"] == "beko_kelompok" ? "selected" : "" ?> value="beko_kelompok">Beko (roda tiga) kelompok</option>
						<option <?php echo $profil->detail["buah"]["sarana"]["transportasi"] == "beko_pribadi" ? "selected" : "" ?> value="beko_pribadi">Beko pribadi</option>
						<option <?php echo $profil->detail["buah"]["sarana"]["transportasi"] == "motor_kelompok" ? "selected" : "" ?> value="motor_kelompok">Motor kelompok</option>
						<option <?php echo $profil->detail["buah"]["sarana"]["transportasi"] == "motor_pribadi" ? "selected" : "" ?> value="motor_pribadi">Motor pribadi </option>
						<option <?php echo $profil->detail["buah"]["sarana"]["transportasi"] == "lainnya" ? "selected" : "" ?> value="lainnya">Lainnya</option>
					</select>
					<input type="text" class="form-control field-lain <?php echo $profil->detail["buah"]["sarana"]["transportasi"] != "lainnya" ? "hidden" : "" ?>" name="data[detail][buah][sarana][transportasi_lainnya]" placeholder="Pengangkutan Hasil Dari Lahan Ke Rumah" value="<?php echo $profil->detail["buah"]["sarana"]["transportasi_lainnya"] ?>">
				</div>
			</div>
			<div class="form-group">
				<label for="buah_gudang" class="col-sm-3 control-label">Penyimpanan Alat dan Hasil Produksi</label>
				<div class="col-sm-6">
					<select class="form-control" name="data[detail][buah][sarana][gudang]" id="buah_gudang">
						<option <?php echo $profil->detail["buah"]["sarana"]["gudang"] == "gudang_kelompok" ? "selected" : "" ?> value="gudang_kelompok">Gudang kelompok</option>
						<option <?php echo $profil->detail["buah"]["sarana"]["gudang"] == "gudang_pengurus" ? "selected" : "" ?> value="gudang_pengurus">Gudang pribadi pengurus kelompok</option>
						<option <?php echo $profil->detail["buah"]["sarana"]["gudang"] == "gudang_anggota" ? "selected" : "" ?> value="gudang_anggota">Gudang pribadi salah satu anggota</option>
						<option <?php echo $profil->detail["buah"]["sarana"]["gudang"] == "gudang_desa" ? "selected" : "" ?> value="gudang_desa">Gudang kampung/desa</option>
						<option <?php echo $profil->detail["buah"]["sarana"]["gudang"] == "gudang_mitra" ? "selected" : "" ?> value="gudang_mitra">Gudang mitra kerja</option>
					</select>
				</div>
			</div>
		</div>
		<div class="form-bidang form-groups-bordered peternakan <?php echo $profil->bidang_kegiatan != "peternakan" ? "hidden" : "" ?>">
			<?php if(!isset($profil->detail['peternakan']['sarana']['peralatan']) || !is_array($profil->detail['peternakan']['sarana']['peralatan'])) $profil->detail['peternakan']['sarana']['peralatan'] = array() ?>
			<div class="form-group">
				<label for="peternakan_pertemuan" class="col-sm-3 control-label">Tempat Pertemuan</label>
				<div class="col-sm-6">
					<select class="form-control select-lain" name="data[detail][peternakan][sarana][pertemuan]" id="peternakan_pertemuan">
						<option <?php echo $profil->detail["peternakan"]["sarana"]["pertemuan"] == "saung" ? "selected" : "" ?> value="saung">Saung kelompok</option>
						<option <?php echo $profil->detail["peternakan"]["sarana"]["pertemuan"] == "balai" ? "selected" : "" ?> value="balai">Balai kampung/desa</option>
						<option <?php echo $profil->detail["peternakan"]["sarana"]["pertemuan"] == "rumah_pengurus" ? "selected" : "" ?> value="rumah_pengurus">Rumah pengurus</option>
						<option <?php echo $profil->detail["peternakan"]["sarana"]["pertemuan"] == "rumah_anggota" ? "selected" : "" ?> value="rumah_anggota">Rumah anggota</option>
						<option <?php echo $profil->detail["peternakan"]["sarana"]["pertemuan"] == "lainnya" ? "selected" : "" ?> value="lainnya">Lainnya</option>
					</select>
					<input type="text" class="form-control field-lain <?php echo $profil->detail["peternakan"]["sarana"]["pertemuan"] != "lainnya" ? "hidden" : "" ?>" name="data[detail][peternakan][sarana][pertemuan_lainnya]" placeholder="Tempat Pertemuan" value="<?php echo $profil->detail["peternakan"]["sarana"]["pertemuan_lainnya"] ?>">
				</div>
			</div>
			<div class="form-group">
				<label for="peternakan_peralatan" class="col-sm-3 control-label">Peralatan Yang Diperoleh Untuk Pelaksanaan Produksi</label>
				<div class="col-sm-6">
					<div class="checkbox">
						<label>
							<input type="checkbox" name="data[detail][peternakan][sarana][peralatan][]" value="Kandang ternak" <?php echo in_array("Kandang ternak", $profil->detail['peternakan']['sarana']['peralatan']) ? "checked" : "" ?>>Kandang ternak
						</label>
					</div>
					<div class="checkbox">
						<label>
							<input type="checkbox" name="data[detail][peternakan][sarana][peralatan][]" value="Peralatan masak makanan ternak" <?php echo in_array("Peralatan masak makanan ternak", $profil->detail['peternakan']['sarana']['peralatan']) ? "checked" : "" ?>>Peralatan masak makanan ternak
						</label>
					</div>
					<div class="checkbox">
						<label>
							<input type="checkbox" name="data[detail][peternakan][sarana][peralatan][]" value="Peralatan tempat bertelur ternak" <?php echo in_array("Peralatan tempat bertelur ternak", $profil->detail['peternakan']['sarana']['peralatan']) ? "checked" : "" ?>>Peralatan tempat bertelur ternak
						</label>
					</div>
					<div class="checkbox">
						<label>
							<input type="checkbox" name="data[detail][peternakan][sarana][peralatan][]" value="Cangkul" <?php echo in_array("Cangkul", $profil->detail['peternakan']['sarana']['peralatan']) ? "checked" : "" ?>>Cangkul
						</label>
					</div>
					<div class="checkbox">
						<label>
							<input type="checkbox" name="data[detail][peternakan][sarana][peralatan][]" value="Garpu" <?php echo in_array("Garpu", $profil->detail['peternakan']['sarana']['peralatan']) ? "checked" : "" ?>>Garpu
						</label>
					</div>
					<div class="checkbox">
						<label>
							<input type="checkbox" name="data[detail][peternakan][sarana][peralatan][]" value="Sekop" <?php echo in_array("Sekop", $profil->detail['peternakan']['sarana']['peralatan']) ? "checked" : "" ?>>Sekop
						</label>
					</div>
					<div class="checkbox">
						<label>
							<input type="checkbox" name="data[detail][peternakan][sarana][peralatan][]" value="Peralatan tukang" <?php echo in_array("Peralatan tukang", $profil->detail['peternakan']['sarana']['peralatan']) ? "checked" : "" ?>>Peralatan tukang
						</label>
					</div>
					<div class="checkbox">
						<label>
							<input type="checkbox" name="data[detail][peternakan][sarana][peralatan][]" value="Sepatu boat, selang, dll" <?php echo in_array("Sepatu boat, selang, dll", $profil->detail['peternakan']['sarana']['peralatan']) ? "checked" : "" ?>>Sepatu boat, selang, dll
						</label>
					</div>
					<div class="checkbox">
						<label>
							<input type="checkbox" name="data[detail][peternakan][sarana][peralatan][]" value="Perlengkapan membuat kandang" <?php echo in_array("Perlengkapan membuat kandang", $profil->detail['peternakan']['sarana']['peralatan']) ? "checked" : "" ?>>Perlengkapan membuat kandang
						</label>
					</div>
					<div class="checkbox">
						<label>
							<input type="checkbox" name="data[detail][peternakan][sarana][peralatan][]" value="Gerobak untuk angkut makanan ternak" <?php echo in_array("Gerobak untuk angkut makanan ternak", $profil->detail['peternakan']['sarana']['peralatan']) ? "checked" : "" ?>>Gerobak untuk angkut makanan ternak
						</label>
					</div>
					<div class="checkbox">
						<label>
							<input type="checkbox" class="checkbox-lain" name="data[detail][peternakan][sarana][peralatan][]" value="Lainnya" <?php echo in_array("Lainnya", $profil->detail['peternakan']['sarana']['peralatan']) ? "checked" : "" ?>>Lainnya
						</label>
						<input type="text" class="form-control field-lain <?php echo !in_array("Lainnya", $profil->detail['peternakan']['sarana']['peralatan']) ? "hidden" : "" ?>" name="data[detail][peternakan][sarana][peralatan_lain]" placeholder="Peralatan Lain" value="<?php echo $profil->detail['peternakan']['sarana']['peralatan_lain'] ?>">
					</div>
				</div>
			</div>
			<div class="form-group">
				<label for="peternakan_kondisi" class="col-sm-3 control-label">Kondisi Kandang ternak</label>
				<div class="col-sm-6">
					<select class="form-control select-lain" name="data[detail][peternakan][sarana][kondisi]" id="peternakan_kondisi">
						<option <?php echo $profil->detail["peternakan"]["sarana"]["kondisi"] == "permanen" ? "selected" : "" ?> value="permanen">Tembok (permanen)</option>
						<option <?php echo $profil->detail["peternakan"]["sarana"]["kondisi"] == "semi_permanen" ? "selected" : "" ?> value="semi_permanen">Setengah tembok dan papan (semi permanen)</option>
						<option <?php echo $profil->detail["peternakan"]["sarana"]["kondisi"] == "non_permanen" ? "selected" : "" ?> value="non_permanen">Papan (non permanen)</option>
					</select>
				</div>
			</div>
			<div class="form-group">
				<label for="peternakan_perbaikan" class="col-sm-3 control-label">Biaya perbaikan yang dilakukan</label>
				<div class="col-sm-6">
					<select class="form-control select-lain" name="data[detail][peternakan][sarana][perbaikan]" id="peternakan_perbaikan">
						<option <?php echo $profil->detail["peternakan"]["sarana"]["perbaikan"] == "blm" ? "selected" : "" ?> value="blm">Diperbaiki dengan dana BLM</option>
						<option <?php echo $profil->detail["peternakan"]["sarana"]["perbaikan"] == "pemerintah" ? "selected" : "" ?> value="pemerintah">Diperbaiki dari dana pemerintah / dinas terkait</option>
						<option <?php echo $profil->detail["peternakan"]["sarana"]["perbaikan"] == "pihak_lain" ? "selected" : "" ?> value="pihak_lain">Diperbaiki dari dana Perusahaan / LSM / Pihak lainnya</option>
						<option <?php echo $profil->detail["peternakan"]["sarana"]["perbaikan"] == "swadaya" ? "selected" : "" ?> value="swadaya">Diperbaiki secara swadaya</option>
						<option <?php echo $profil->detail["peternakan"]["sarana"]["perbaikan"] == "lainnya" ? "selected" : "" ?> value="lainnya">Lainnya</option>
					</select>
					<input type="text" class="form-control field-lain <?php echo $profil->detail["peternakan"]["sarana"]["perbaikan"] != "lainnya" ? "hidden" : "" ?>" name="data[detail][peternakan][sarana][perbaikan_lainnya]" placeholder="Biaya perbaikan yang dilakukan" value="<?php echo $profil->detail["peternakan"]["sarana"]["perbaikan_lainnya"] ?>">
				</div>
			</div>
			<div class="form-group">
				<label for="peternakan_transportasi_makanan" class="col-sm-3 control-label">Angkutan untuk membawa makanan ternak</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="peternakan_transportasi_makanan" name="data[detail][peternakan][sarana][transportasi_makanan]" placeholder="Angkutan untuk membawa makanan ternak" value="<?php echo $profil->detail["peternakan"]["sarana"]["transportasi_makanan"] ?>">
				</div>
			</div>
			<div class="form-group">
				<label for="peternakan_transportasi_kampung" class="col-sm-3 control-label">Angkutan untuk membawa ternak ke kampung</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="peternakan_transportasi_kampung" name="data[detail][peternakan][sarana][transportasi_kampung]" placeholder="Angkutan untuk membawa ternak ke kampung" value="<?php echo $profil->detail["peternakan"]["sarana"]["transportasi_kampung"] ?>">
				</div>
			</div>
			<div class="form-group">
				<label for="peternakan_transportasi_pasar" class="col-sm-3 control-label">Angkutan untuk membawa ternak ke pasar</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="peternakan_transportasi_pasar" name="data[detail][peternakan][sarana][transportasi_pasar]" placeholder="Angkutan untuk membawa ternak ke pasar" value="<?php echo $profil->detail["peternakan"]["sarana"]["transportasi_pasar"] ?>">
				</div>
			</div>
		</div>
		<div class="form-bidang form-groups-bordered perikanan <?php echo $profil->bidang_kegiatan != "perikanan" ? "hidden" : "" ?>">
			<?php if(!isset($profil->detail['perikanan']['sarana']['peralatan']) || !is_array($profil->detail['perikanan']['sarana']['peralatan'])) $profil->detail['perikanan']['sarana']['peralatan'] = array() ?>
			<div class="form-group">
				<label for="perikanan_pertemuan" class="col-sm-3 control-label">Tempat Pertemuan</label>
				<div class="col-sm-6">
					<select class="form-control select-lain" name="data[detail][perikanan][sarana][pertemuan]" id="perikanan_pertemuan">
						<option <?php echo $profil->detail["perikanan"]["sarana"]["pertemuan"] == "saung" ? "selected" : "" ?> value="saung">Saung kelompok</option>
						<option <?php echo $profil->detail["perikanan"]["sarana"]["pertemuan"] == "balai" ? "selected" : "" ?> value="balai">Balai kampung/desa</option>
						<option <?php echo $profil->detail["perikanan"]["sarana"]["pertemuan"] == "rumah_pengurus" ? "selected" : "" ?> value="rumah_pengurus">Rumah pengurus</option>
						<option <?php echo $profil->detail["perikanan"]["sarana"]["pertemuan"] == "rumah_anggota" ? "selected" : "" ?> value="rumah_anggota">Rumah anggota</option>
						<option <?php echo $profil->detail["perikanan"]["sarana"]["pertemuan"] == "lainnya" ? "selected" : "" ?> value="lainnya">Lainnya</option>
					</select>
					<input type="text" class="form-control field-lain <?php echo $profil->detail["perikanan"]["sarana"]["pertemuan"] != "lainnya" ? "hidden" : "" ?>" name="data[detail][perikanan][sarana][pertemuan_lainnya]" placeholder="Tempat Pertemuan" value="<?php echo $profil->detail["perikanan"]["sarana"]["pertemuan_lainnya"] ?>">
				</div>
			</div>
			<div class="form-group">
				<label for="perikanan_peralatan" class="col-sm-3 control-label">Peralatan Yang Diperoleh Untuk Pelaksanaan Produksi</label>
				<div class="col-sm-6">
					<div class="checkbox">
						<label>
							<input type="checkbox" name="data[detail][perikanan][sarana][peralatan][]" value="Perahu" <?php echo in_array("Perahu", $profil->detail['perikanan']['sarana']['peralatan']) ? "checked" : "" ?>>Perahu
						</label>
					</div>
					<div class="checkbox">
						<label>
							<input type="checkbox" name="data[detail][perikanan][sarana][peralatan][]" value="Jaring" <?php echo in_array("Jaring", $profil->detail['perikanan']['sarana']['peralatan']) ? "checked" : "" ?>>Jaring
						</label>
					</div>
					<div class="checkbox">
						<label>
							<input type="checkbox" name="data[detail][perikanan][sarana][peralatan][]" value="Alat memancing" <?php echo in_array("Alat memancing", $profil->detail['perikanan']['sarana']['peralatan']) ? "checked" : "" ?>>Alat memancing
						</label>
					</div>
					<div class="checkbox">
						<label>
							<input type="checkbox" name="data[detail][perikanan][sarana][peralatan][]" value="Mesin perahu" <?php echo in_array("Mesin perahu", $profil->detail['perikanan']['sarana']['peralatan']) ? "checked" : "" ?>>Mesin perahu
						</label>
					</div>
					<div class="checkbox">
						<label>
							<input type="checkbox" name="data[detail][perikanan][sarana][peralatan][]" value="Cool box" <?php echo in_array("Cool box", $profil->detail['perikanan']['sarana']['peralatan']) ? "checked" : "" ?>>Cool box
						</label>
					</div>
					<div class="checkbox">
						<label>
							<input type="checkbox" name="data[detail][perikanan][sarana][peralatan][]" value="Petromax, sepatu Boat" <?php echo in_array("Petromax, sepatu Boat", $profil->detail['perikanan']['sarana']['peralatan']) ? "checked" : "" ?>>Petromax, sepatu Boat
						</label>
					</div>
					<div class="checkbox">
						<label>
							<input type="checkbox" name="data[detail][perikanan][sarana][peralatan][]" value="Perlengkapan mancing" <?php echo in_array("Perlengkapan mancing", $profil->detail['perikanan']['sarana']['peralatan']) ? "checked" : "" ?>>Perlengkapan mancing
						</label>
					</div>
					<div class="checkbox">
						<label>
							<input type="checkbox" name="data[detail][perikanan][sarana][peralatan][]" value="Cangkul" <?php echo in_array("Cangkul", $profil->detail['perikanan']['sarana']['peralatan']) ? "checked" : "" ?>>Cangkul
						</label>
					</div>
					<div class="checkbox">
						<label>
							<input type="checkbox" name="data[detail][perikanan][sarana][peralatan][]" value="Sekop" <?php echo in_array("Sekop", $profil->detail['perikanan']['sarana']['peralatan']) ? "checked" : "" ?>>Sekop
						</label>
					</div>
					<div class="checkbox">
						<label>
							<input type="checkbox" name="data[detail][perikanan][sarana][peralatan][]" value="Parang" <?php echo in_array("Parang", $profil->detail['perikanan']['sarana']['peralatan']) ? "checked" : "" ?>>Parang
						</label>
					</div>
				</div>
			</div>
			<div class="form-group">
				<label for="perikanan_kondisi_perahu" class="col-sm-3 control-label">Kondisi Perahu</label>
				<div class="col-sm-6">
					<select class="form-control" name="data[detail][perikanan][sarana][kondisi_perahu]" id="perikanan_kondisi_perahu">
						<option <?php echo $profil->detail["perikanan"]["sarana"]["kondisi_perahu"] == "baik" ? "selected" : "" ?> value="baik">Baik</option>
						<option <?php echo $profil->detail["perikanan"]["sarana"]["kondisi_perahu"] == "tidak" ? "selected" : "" ?> value="tidak">Tidak</option>
					</select>
				</div>
			</div>
			<div class="form-group">
				<label for="perikanan_kondisi_mesin" class="col-sm-3 control-label">Kondisi Mesin</label>
				<div class="col-sm-6">
					<select class="form-control" name="data[detail][perikanan][sarana][kondisi_mesin]" id="perikanan_kondisi_mesin">
						<option <?php echo $profil->detail["perikanan"]["sarana"]["kondisi_mesin"] == "baik" ? "selected" : "" ?> value="baik">Baik</option>
						<option <?php echo $profil->detail["perikanan"]["sarana"]["kondisi_mesin"] == "tidak" ? "selected" : "" ?> value="tidak">Tidak</option>
					</select>
				</div>
			</div>
			<div class="form-group">
				<label for="perikanan_kondisi_menangkap" class="col-sm-3 control-label">Kondisi Perlengkapan menangkap ikan (jaring, lampu, pelampung, dll)</label>
				<div class="col-sm-6">
					<select class="form-control" name="data[detail][perikanan][sarana][kondisi_menangkap]" id="perikanan_kondisi_menangkap">
						<option <?php echo $profil->detail["perikanan"]["sarana"]["kondisi_menangkap"] == "baik" ? "selected" : "" ?> value="baik">Baik</option>
						<option <?php echo $profil->detail["perikanan"]["sarana"]["kondisi_menangkap"] == "tidak" ? "selected" : "" ?> value="tidak">Tidak</option>
					</select>
				</div>
			</div>
			<div class="form-group">
				<label for="perikanan_kondisi_memancing" class="col-sm-3 control-label">Kondisi Perlengkapan memancing</label>
				<div class="col-sm-6">
					<select class="form-control" name="data[detail][perikanan][sarana][kondisi_memancing]" id="perikanan_kondisi_memancing">
						<option <?php echo $profil->detail["perikanan"]["sarana"]["kondisi_memancing"] == "baik" ? "selected" : "" ?> value="baik">Baik</option>
						<option <?php echo $profil->detail["perikanan"]["sarana"]["kondisi_memancing"] == "tidak" ? "selected" : "" ?> value="tidak">Tidak</option>
					</select>
				</div>
			</div>
			<div class="form-group">
				<label for="perikanan_perbaikan" class="col-sm-3 control-label">Biaya perbaikan yang dilakukan</label>
				<div class="col-sm-6">
					<select class="form-control select-lain" name="data[detail][perikanan][sarana][perbaikan]" id="perikanan_perbaikan">
						<option <?php echo $profil->detail["perikanan"]["sarana"]["perbaikan"] == "blm" ? "selected" : "" ?> value="blm">Diperbaiki dengan dana BLM</option>
						<option <?php echo $profil->detail["perikanan"]["sarana"]["perbaikan"] == "pemerintah" ? "selected" : "" ?> value="pemerintah">Diperbaiki dari dana pemerintah / dinas terkait</option>
						<option <?php echo $profil->detail["perikanan"]["sarana"]["perbaikan"] == "pihak_lain" ? "selected" : "" ?> value="pihak_lain">Diperbaiki dari dana Perusahaan / LSM / Pihak lainnya</option>
						<option <?php echo $profil->detail["perikanan"]["sarana"]["perbaikan"] == "swadaya" ? "selected" : "" ?> value="swadaya">Diperbaiki secara swadaya</option>
						<option <?php echo $profil->detail["perikanan"]["sarana"]["perbaikan"] == "lainnya" ? "selected" : "" ?> value="lainnya">Lainnya</option>
					</select>
					<input type="text" class="form-control field-lain <?php echo $profil->detail["perikanan"]["sarana"]["perbaikan"] != "lainnya" ? "hidden" : "" ?>" name="data[detail][perikanan][sarana][perbaikan_lainnya]" placeholder="Biaya perbaikan yang dilakukan" value="<?php echo $profil->detail["perikanan"]["sarana"]["perbaikan_lainnya"] ?>">
				</div>
			</div>
			<div class="form-group">
				<label for="perikanan_gudang" class="col-sm-3 control-label">Penyimpanan Alat dan Hasil Produksi</label>
				<div class="col-sm-6">
					<select class="form-control select-lain" name="data[detail][perikanan][sarana][gudang]" id="perikanan_gudang">
						<option <?php echo $profil->detail["perikanan"]["sarana"]["gudang"] == "gudang_kelompok" ? "selected" : "" ?> value="gudang_kelompok">Gudang kelompok</option>
						<option <?php echo $profil->detail["perikanan"]["sarana"]["gudang"] == "gudang_pengurus" ? "selected" : "" ?> value="gudang_pengurus">Gudang pribadi pengurus kelompok</option>
						<option <?php echo $profil->detail["perikanan"]["sarana"]["gudang"] == "gudang_anggota" ? "selected" : "" ?> value="gudang_anggota">Gudang pribadi salah satu anggota</option>
						<option <?php echo $profil->detail["perikanan"]["sarana"]["gudang"] == "gudang_desa" ? "selected" : "" ?> value="gudang_desa">Gudang kampung/desa</option>
						<option <?php echo $profil->detail["perikanan"]["sarana"]["gudang"] == "gudang_mitra" ? "selected" : "" ?> value="gudang_mitra">Gudang mitra kerja</option>
						<option <?php echo $profil->detail["perikanan"]["sarana"]["gudang"] == "langsung_jual" ? "selected" : "" ?> value="langsung_jual">Tidak disimpan/ langsung jual</option>
						<option <?php echo $profil->detail["perikanan"]["sarana"]["gudang"] == "lainnya" ? "selected" : "" ?> value="lainnya">Lainnya</option>
					</select>
					<input type="text" class="form-control field-lain <?php echo $profil->detail["perikanan"]["sarana"]["gudang"] != "lainnya" ? "hidden" : "" ?>" name="data[detail][perikanan][sarana][gudang_lainnya]" placeholder="Penyimpanan Alat dan Hasil Produksi" value="<?php echo $profil->detail["perikanan"]["sarana"]["gudang_lainnya"] ?>">
				</div>
			</div>
		</div>
		<div class="form-bidang form-groups-bordered hasil <?php echo $profil->bidang_kegiatan != "hasil" ? "hidden" : "" ?>">
			<?php if(!isset($profil->detail['hasil']['sarana']['peralatan']) || !is_array($profil->detail['hasil']['sarana']['peralatan'])) $profil->detail['hasil']['sarana']['peralatan'] = array() ?>
			<div class="form-group">
				<label for="hasil_pertemuan" class="col-sm-3 control-label">Tempat Pertemuan</label>
				<div class="col-sm-6">
					<select class="form-control select-lain" name="data[detail][hasil][sarana][pertemuan]" id="hasil_pertemuan">
						<option <?php echo $profil->detail["hasil"]["sarana"]["pertemuan"] == "saung" ? "selected" : "" ?> value="saung">Saung kelompok</option>
						<option <?php echo $profil->detail["hasil"]["sarana"]["pertemuan"] == "balai" ? "selected" : "" ?> value="balai">Balai kampung/desa</option>
						<option <?php echo $profil->detail["hasil"]["sarana"]["pertemuan"] == "rumah_pengurus" ? "selected" : "" ?> value="rumah_pengurus">Rumah pengurus</option>
						<option <?php echo $profil->detail["hasil"]["sarana"]["pertemuan"] == "rumah_anggota" ? "selected" : "" ?> value="rumah_anggota">Rumah anggota</option>
						<option <?php echo $profil->detail["hasil"]["sarana"]["pertemuan"] == "lainnya" ? "selected" : "" ?> value="lainnya">Lainnya</option>
					</select>
					<input type="text" class="form-control field-lain <?php echo $profil->detail["hasil"]["sarana"]["pertemuan"] != "lainnya" ? "hidden" : "" ?>" name="data[detail][hasil][sarana][pertemuan_lainnya]" placeholder="Tempat Pertemuan" value="<?php echo $profil->detail["hasil"]["sarana"]["pertemuan_lainnya"] ?>">
				</div>
			</div>
			<div class="form-group">
				<label for="hasil_peralatan" class="col-sm-3 control-label">Peralatan Yang Diperoleh Untuk Pelaksanaan Produksi</label>
				<div class="col-sm-6">
					<div class="checkbox">
						<label>
							<input type="checkbox" name="data[detail][hasil][sarana][peralatan][]" value="Alat mengiris" <?php echo in_array("Alat mengiris", $profil->detail['hasil']['sarana']['peralatan']) ? "checked" : "" ?>>Alat mengiris
						</label>
					</div>
					<div class="checkbox">
						<label>
							<input type="checkbox" name="data[detail][hasil][sarana][peralatan][]" value="Alat masak" <?php echo in_array("Alat masak", $profil->detail['hasil']['sarana']['peralatan']) ? "checked" : "" ?>>Alat masak
						</label>
					</div>
					<div class="checkbox">
						<label>
							<input type="checkbox" name="data[detail][hasil][sarana][peralatan][]" value="Kompor masak" <?php echo in_array("Kompor masak", $profil->detail['hasil']['sarana']['peralatan']) ? "checked" : "" ?>>Kompor masak
						</label>
					</div>
					<div class="checkbox">
						<label>
							<input type="checkbox" name="data[detail][hasil][sarana][peralatan][]" value="Tempat menjemur" <?php echo in_array("Tempat menjemur", $profil->detail['hasil']['sarana']['peralatan']) ? "checked" : "" ?>>Tempat menjemur
						</label>
					</div>
					<div class="checkbox">
						<label>
							<input type="checkbox" class="checkbox-lain" name="data[detail][hasil][sarana][peralatan][]" value="Lainnya" <?php echo in_array("Lainnya", $profil->detail['hasil']['sarana']['peralatan']) ? "checked" : "" ?>>Lainnya
						</label>
						<input type="text" class="form-control field-lain <?php echo !in_array("Lainnya", $profil->detail['hasil']['sarana']['peralatan']) ? "hidden" : "" ?>" name="data[detail][hasil][sarana][peralatan_lain]" placeholder="Peralatan Lain" value="<?php echo $profil->detail['hasil']['sarana']['peralatan_lain'] ?>">
					</div>
				</div>
			</div>
			<div class="form-group">
				<label for="hasil_penjualan" class="col-sm-3 control-label">Tempat penjualan usaha</label>
				<div class="col-sm-6">
					<select class="form-control" name="data[detail][hasil][sarana][penjualan]" id="hasil_penjualan">
						<option <?php echo $profil->detail["hasil"]["sarana"]["penjualan"] == "kios" ? "selected" : "" ?> value="kios">Kios depan rumah</option>
						<option <?php echo $profil->detail["hasil"]["sarana"]["penjualan"] == "meja" ? "selected" : "" ?> value="meja">Para-para / meja di depan rumah</option>
						<option <?php echo $profil->detail["hasil"]["sarana"]["penjualan"] == "konsinyasi" ? "selected" : "" ?> value="konsinyasi">Konsinyasi di pedagang lain</option>
						<option <?php echo $profil->detail["hasil"]["sarana"]["penjualan"] == "pasar" ? "selected" : "" ?> value="pasar">Jual langsung di pasar</option>
						<option <?php echo $profil->detail["hasil"]["sarana"]["penjualan"] == "pengumpul" ? "selected" : "" ?> value="pengumpul">Jual di pedagang pengumpul</option>
					</select>
				</div>
			</div>
			<div class="form-group">
				<label for="hasil_transportasi" class="col-sm-3 control-label">Pengangkutan Hasil Dari Lahan Ke Rumah</label>
				<div class="col-sm-6">
					<select class="form-control select-lain" name="data[detail][hasil][sarana][transportasi]" id="hasil_transportasi">
						<option <?php echo $profil->detail["hasil"]["sarana"]["transportasi"] == "gerobak_kelompok" ? "selected" : "" ?> value="gerobak_kelompok">Gerobak kelompok</option>
						<option <?php echo $profil->detail["hasil"]["sarana"]["transportasi"] == "gerobak_pribadi" ? "selected" : "" ?> value="gerobak_pribadi">Gerobak pribadi </option>
						<option <?php echo $profil->detail["hasil"]["sarana"]["transportasi"] == "beko_kelompok" ? "selected" : "" ?> value="beko_kelompok">Beko (roda tiga) kelompok</option>
						<option <?php echo $profil->detail["hasil"]["sarana"]["transportasi"] == "beko_pribadi" ? "selected" : "" ?> value="beko_pribadi">Beko pribadi</option>
						<option <?php echo $profil->detail["hasil"]["sarana"]["transportasi"] == "motor_kelompok" ? "selected" : "" ?> value="motor_kelompok">Motor kelompok</option>
						<option <?php echo $profil->detail["hasil"]["sarana"]["transportasi"] == "motor_pribadi" ? "selected" : "" ?> value="motor_pribadi">Motor pribadi </option>
						<option <?php echo $profil->detail["hasil"]["sarana"]["transportasi"] == "lainnya" ? "selected" : "" ?> value="lainnya">Lainnya</option>
					</select>
					<input type="text" class="form-control field-lain <?php echo $profil->detail["hasil"]["sarana"]["transportasi"] != "lainnya" ? "hidden" : "" ?>" name="data[detail][hasil][sarana][transportasi_lainnya]" placeholder="Pengangkutan Hasil Dari Lahan Ke Rumah" value="<?php echo $profil->detail['hasil']['sarana']['transportasi_lainnya'] ?>">
				</div>
			</div>
			<div class="form-group">
				<label for="hasil_gudang" class="col-sm-3 control-label">Penyimpanan Alat dan Hasil Produksi</label>
				<div class="col-sm-6">
					<select class="form-control select-lain" name="data[detail][hasil][sarana][gudang]" id="hasil_gudang">
						<option <?php echo $profil->detail["hasil"]["sarana"]["gudang"] == "sekretariat_kelompok" ? "selected" : "" ?> value="sekretariat_kelompok">Sekretariat kelompok</option>
						<option <?php echo $profil->detail["hasil"]["sarana"]["gudang"] == "rumah_pengurus" ? "selected" : "" ?> value="rumah_pengurus">Rumah pribadi pengurus kelompok</option>
						<option <?php echo $profil->detail["hasil"]["sarana"]["gudang"] == "rumah_anggota" ? "selected" : "" ?> value="rumah_anggota">Rumah pribadi salah satu anggota</option>
						<option <?php echo $profil->detail["hasil"]["sarana"]["gudang"] == "langsung_jual" ? "selected" : "" ?> value="langsung_jual">Tidak disimpan/ langsung jual</option>
						<option <?php echo $profil->detail["hasil"]["sarana"]["gudang"] == "lainnya" ? "selected" : "" ?> value="lainnya">Lainnya</option>
					</select>
					<input type="text" class="form-control field-lain <?php echo $profil->detail["hasil"]["sarana"]["gudang"] != "lainnya" ? "hidden" : "" ?>" name="data[detail][hasil][sarana][gudang_lainnya]" placeholder="Penyimpanan Alat dan Hasil Produksi" value="<?php echo $profil->detail['hasil']['sarana']['gudang_lainnya'] ?>">
				</div>
			</div>
		</div>

		<h3>IV. Aspek Pembinaan</h3>
		<hr>
		<h4>Dalam 6 bulan terakhir, Apakah lembaga saudara pernah mendapatkan pembinaan dari</h4>
		<div class="form-group">
			<?php if(!isset($profil->detail['pembinaan']['bpmd_kabupaten']) || !is_array($profil->detail['pembinaan']['bpmd_kabupaten'])) $profil->detail['pembinaan']['bpmd_kabupaten'] = "" ?>
			<label for="pembinaan_bpmd_kabupaten" class="col-sm-3 control-label">BPMD Kabupaten</label>
			<div class="col-sm-6">
				<div class="radio">
					<label>
						<input type="radio" name="data[detail][pembinaan][bpmd_kabupaten]" id="pembinaan_bpmd_kabupaten" value="rutin" <?php echo $profil->detail["pembinaan"]["bpmd_kabupaten"] == "rutin" ? "checked" : "" ?>>Rutin
					</label>
				</div>
				<div class="radio">
					<label>
						<input type="radio" name="data[detail][pembinaan][bpmd_kabupaten]" id="pembinaan_bpmd_kabupaten" value="tidak" <?php echo $profil->detail["pembinaan"]["bpmd_kabupaten"] == "tidak" ? "checked" : "" ?>>Tidak Rutin
					</label>
				</div>
			</div>
		</div>
		<div class="form-group">
			<?php if(!isset($profil->detail['pembinaan']['penyuluh']) || !is_array($profil->detail['pembinaan']['penyuluh'])) $profil->detail['pembinaan']['penyuluh'] = "" ?>
			<label for="pembinaan_penyuluh" class="col-sm-3 control-label">Penyuluh Pertanian</label>
			<div class="col-sm-6">
				<div class="radio">
					<label>
						<input type="radio" name="data[detail][pembinaan][penyuluh]" id="pembinaan_penyuluh" value="rutin" <?php echo $profil->detail["pembinaan"]["penyuluh"] == "rutin" ? "checked" : "" ?>>Rutin
					</label>
				</div>
				<div class="radio">
					<label>
						<input type="radio" name="data[detail][pembinaan][penyuluh]" id="pembinaan_penyuluh" value="tidak" <?php echo $profil->detail["pembinaan"]["penyuluh"] == "tidak" ? "checked" : "" ?>>Tidak Rutin
					</label>
				</div>
			</div>
		</div>
		<div class="form-group">
			<?php if(!isset($profil->detail['pembinaan']['bpmd_provinsi']) || !is_array($profil->detail['pembinaan']['bpmd_provinsi'])) $profil->detail['pembinaan']['bpmd_provinsi'] = "" ?>
			<label for="pembinaan_bpmd_provinsi" class="col-sm-3 control-label">BPMD Provinsi</label>
			<div class="col-sm-6">
				<div class="radio">
					<label>
						<input type="radio" name="data[detail][pembinaan][bpmd_provinsi]" id="pembinaan_bpmd_provinsi" value="rutin" <?php echo $profil->detail["pembinaan"]["bpmd_provinsi"] == "rutin" ? "checked" : "" ?>>Rutin
					</label>
				</div>
				<div class="radio">
					<label>
						<input type="radio" name="data[detail][pembinaan][bpmd_provinsi]" id="pembinaan_bpmd_provinsi" value="tidak" <?php echo $profil->detail["pembinaan"]["bpmd_provinsi"] == "tidak" ? "checked" : "" ?>>Tidak Rutin
					</label>
				</div>
			</div>
		</div>
		<div class="form-group">
			<?php if(!isset($profil->detail['pembinaan']['dinas_lain']['status']) || !is_array($profil->detail['pembinaan']['dinas_lain']['status'])) $profil->detail['pembinaan']['dinas_lain']['status'] = "" ?>
			<label for="pembinaan_dinas_lain" class="col-sm-3 control-label">Dinas Terkait Lainnya</label>
			<div class="col-sm-6">
				<input type="text" class="form-control" name="data[detail][pembinaan][dinas_lain][nama]" placeholder="Dinas Terkait Lainnya" value="<?php echo $profil->detail["pembinaan"]["dinas_lain"]["nama"] ?>">
				<div class="radio">
					<label>
						<input type="radio" name="data[detail][pembinaan][dinas_lain][status]" id="pembinaan_dinas_lain" value="rutin" <?php echo $profil->detail["pembinaan"]["dinas_lain"]['status'] == "rutin" ? "checked" : "" ?>>Rutin
					</label>
				</div>
				<div class="radio">
					<label>
						<input type="radio" name="data[detail][pembinaan][dinas_lain][status]" id="pembinaan_dinas_lain" value="tidak" <?php echo $profil->detail["pembinaan"]["dinas_lain"]['status'] == "tidak" ? "checked" : "" ?>>Tidak Rutin
					</label>
				</div>
			</div>
		</div>

		<h4>Kegiatan penguatan kapasitas poktan</h4>
		<div class="form-group">
			<label for="pembinaan_pertemuan_poktan" class="col-sm-3 control-label">Pertemuan Rutin Poktan</label>
			<div class="col-sm-6">
				<select class="form-control select-lain" name="data[detail][pembinaan][pertemuan_poktan]" id="pembinaan_pertemuan_poktan">
					<option <?php echo $profil->detail["pembinaan"]["pertemuan_poktan"] == "belum" ? "selected" : "" ?> value="belum">Belum pernah</option>
					<option <?php echo $profil->detail["pembinaan"]["pertemuan_poktan"] == "1 minggu" ? "selected" : "" ?> value="1 minggu">1 minggu sekali</option>
					<option <?php echo $profil->detail["pembinaan"]["pertemuan_poktan"] == "2 minggu" ? "selected" : "" ?> value="2 minggu">2 minggu sekali</option>
					<option <?php echo $profil->detail["pembinaan"]["pertemuan_poktan"] == "1 bulan" ? "selected" : "" ?> value="1 bulan">1 bulan sekali</option>
					<option <?php echo $profil->detail["pembinaan"]["pertemuan_poktan"] == "lainnya" ? "selected" : "" ?> value="lainnya">Lainnya</option>
				</select>
				<input type="text" class="form-control field-lain <?php echo $profil->detail["pembinaan"]["pertemuan_poktan"] != "lainnya" ? "hidden" : "" ?>" name="data[detail][pembinaan][pertemuan_poktan_lainnya]" placeholder="Pertemuan Rutin Poktan" value="<?php echo $profil->detail["pembinaan"]["pertemuan_poktan_lainnya"] ?>">
			</div>
		</div>
		<div class="form-group">
			<label for="pembinaan_kursus" class="col-sm-3 control-label">Kursus tani/sekolah lapang</label>
			<div class="col-sm-6">
				<select class="form-control select-lain" name="data[detail][pembinaan][kursus]" id="pembinaan_kursus">
					<option <?php echo $profil->detail["pembinaan"]["kursus"] == "belum" ? "selected" : "" ?> value="belum">Belum pernah</option>
					<option <?php echo $profil->detail["pembinaan"]["kursus"] == "lainnya" ? "selected" : "" ?> value="lainnya">Lainnya</option>
				</select>
				<input type="text" class="form-control field-lain <?php echo $profil->detail["pembinaan"]["kursus"] != "lainnya" ? "hidden" : "" ?>" name="data[detail][pembinaan][kursus_lainnya]" placeholder="Kursus tani/sekolah lapang" value="<?php echo $profil->detail["pembinaan"]["kursus_lainnya"] ?>">
			</div>
		</div>
		<div class="form-group">
			<label for="pembinaan_demplot" class="col-sm-3 control-label"> Demplot atau demfarm</label>
			<div class="col-sm-6">
				<select class="form-control select-lain" name="data[detail][pembinaan][demplot]" id="pembinaan_demplot">
					<option <?php echo $profil->detail["pembinaan"]["demplot"] == "ada" ? "selected" : "" ?> value="ada">Ada</option>
					<option <?php echo $profil->detail["pembinaan"]["demplot"] == "tidak" ? "selected" : "" ?> value="tidak">Tidak</option>
				</select>
			</div>
		</div>

		<div class="form-group">
			<label for="pembinaan_kepala_kampung" class="col-sm-3 control-label">Kepala Kampung</label>
			<div class="col-sm-6">
				<input type="text" class="form-control" name="data[detail][pembinaan][kepala_kampung]" id="pembinaan_kepala_kampung" placeholder="Kepala Kampung" value="<?php echo $profil->detail["pembinaan"]["kepala_kampung"] ?>">
			</div>
		</div>
		<div class="form-group">
			<label for="pembinaan_ketua" class="col-sm-3 control-label">Ketua Kelompok Tani</label>
			<div class="col-sm-6">
				<input type="text" class="form-control" name="data[detail][pembinaan][ketua]" id="pembinaan_ketua" placeholder="Ketua Kelompok Tani" value="<?php echo $profil->detail["pembinaan"]["ketua"] ?>">
			</div>
		</div>
		<div class="form-group">
			<label for="pembinaan_pendamping" class="col-sm-3 control-label">Pendamping Distrik</label>
			<div class="col-sm-6">
				<input type="text" class="form-control" name="data[detail][pembinaan][pendamping]" id="pembinaan_pendamping" placeholder="Pendamping Distrik" value="<?php echo $profil->detail["pembinaan"]["pendamping"] ?>">
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

			<?php if(!empty($profil->kabupaten)): ?> $('#kabupaten_id').select2('data', <?php echo json_encode($profil->kabupaten) ?>); <?php endif ?>
			<?php if(!empty($profil->kecamatan)): ?> $('#kecamatan_id').select2('data', <?php echo json_encode($profil->kecamatan) ?>); <?php endif ?>
			<?php if(!empty($profil->desa)): ?> $('#desa_id').select2('data', <?php echo json_encode($profil->desa) ?>); <?php endif ?>
		});
	</script>
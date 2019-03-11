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

		<h3>Lokasi/Wilayah</h3>
		<hr>
		<div class="form-group">
			<label for="provinsi_id" class="col-sm-5 control-label">  Provinsi  <span class="text-danger"></span></label>
			<div class="col-sm-4">
				<?php if(!empty($this->session->userdata('provinsi_id'))): ?>
					<input type="hidden" name="data[provinsi_id]" value="<?php echo $this->session->userdata('provinsi_id') ?>" />
				<?php endif ?>
				<select name="data[provinsi_id]" class="form-control select2" id="provinsi_id" placeholder="Provinsi" <?php echo !empty($this->session->userdata('provinsi_id')) ? 'disabled' : "" ?>>
					<option></option>
				<?php foreach ($list_provinsi as $provinsi): ?>
					<option value="<?php echo $provinsi->provinsi_code ?>" <?php echo $provinsi->provinsi_code == $this->session->userdata('provinsi_id') ? "selected" : "" ?>><?php echo $provinsi->provinsi_code ." - ". $provinsi->provinsi_name ?></option>
				<?php endforeach ?>
				</select>
			</div>
		</div>
		<div class="form-group">
			<label for="kabupaten_id" class="col-sm-5 control-label">Kabupaten  <span class="text-danger"></span></label>
			<div class="col-sm-4">
				<input type="text" name="data[kabupaten_id]" class="form-control" id="kabupaten_id" placeholder="Kabupaten" <?php echo !empty($this->session->userdata('kabupaten_id')) ? 'readonly' : "" ?>>
			</div>
		</div>
		<div class="form-group">
			<label for="kecamatan_id" class="col-sm-5 control-label"> Kecamatan <span class="text-danger"></span></label>
			<div class="col-sm-4">
				<input type="text" name="data[kecamatan_id]" class="form-control" id="kecamatan_id" placeholder="Kecamatan" <?php echo !empty($this->session->userdata('kecamatan_id')) ? 'readonly' : "" ?>>
			</div>
		</div>
		<div class="form-group">
			<label for="desa_id" class="col-sm-5 control-label"> Desa <span class="text-danger"></span></label>
			<div class="col-sm-4">
				<input type="text" name="data[desa_id]" class="form-control" id="desa_id" placeholder="Desa" <?php echo !empty($this->session->userdata('desa_id')) ? 'readonly' : "" ?>>
			</div>
		</div>
		<h3>1. Bidang Kesehatan </h3>
		<hr>
		<div class="form-group">
			<label for="nama" class="col-sm-5 control-label">1. Waktu Tempuh ke prasarana kesehatan < 30 menit <span class="text-danger">*</span></label>
			<div class="col-sm-3"><input type="text" class="form-control" id="nama" name="data[nama]" data-validate="required" data-message-required="Kolom jenis kegiatan tidak boleh kosong." placeholder="Isi dengan nilai IDM">
			</div>
		</div>
		<div class="form-group">
			<label for="masalah" class="col-sm-5 control-label">2. Tersedia tenaga kesehatan bidan <span class="text-danger">*</span></label>
			<div class="col-sm-3">
				<input type="text" class="form-control" id="masalah" name="data[masalah]" data-validate="required" data-message-required="Kolom jenis kegiatan tidak boleh kosong." placeholder="Isi dengan nilai IDM">
			</div>
		</div>
		<div class="form-group">
			<label for="sasaran" class="col-sm-5 control-label">3. Tersedia tenaga kesehatan dokter <span class="text-danger">*</span></label>
			<div class="col-sm-3">
				<input type="text" class="form-control" id="sasaran" name="data[sasaran]" data-validate="required" data-message-required="Kolom komoditas tidak boleh kosong." placeholder="Isi dengan nilai IDM">
			</div>
		</div>
		<div class="form-group">
			<label for="deskripsi" class="col-sm-5 control-label"> 4. Tersedia tenaga kesehatan lain <span class="text-danger">*</span></label>
			<div class="col-sm-3">
				<input type="text" class="form-control" id="deskripsi" name="data[deskripsi]" data-validate="required" data-message-required="Kolom nama TTG tidak boleh kosong." placeholder="Isi dengan nilai IDM">
			</div>
		</div>
		<div class="form-group">
			<label for="jumlah_p" class="col-sm-5 control-label"> 5. Akses ke poskesdes, polindes dan posyandu <span class="text-danger">*</span></label>
			<div class="col-sm-3">
				<input type="text" class="form-control" id="jumlah_p" name="data[jumlah_p]" data-validate="required" data-message-required="Kolom harga tidak boleh kosong." placeholder="Isi dengan nilai IDM">
			</div>
		</div>
		<div class="form-group">
			<label for="aktivitas_posyandu" class="col-sm-5 control-label"> 6. Tingkat aktivitas posyandu<span class="text-danger">*</span></label>
			<div class="col-sm-3">
				<input type="text" class="form-control" id="aktivitas_posyandu" name="data[aktivitas_posyandu]" data-validate="required" data-message-required="Kolom harga tidak boleh kosong." placeholder="Isi dengan nilai IDM">
			</div>
		</div>
		<div class="form-group">
			<label for="kepesertaan_bpjs" class="col-sm-5 control-label"> 7. Tingkat kepesertaan BPJS <span class="text-danger">*</span></label>
			<div class="col-sm-3">
				<input type="text" class="form-control" id="kepesertaan_bpjs" name="data[kepesertaan_bpjs]" data-validate="required" data-message-required="Kolom harga tidak boleh kosong." placeholder="Isi dengan nilai IDM" >
			</div>
		</div>
		<h3>2. Bidang Pendidikan </h3>
		<hr>
		<div class="form-group">
			<label for="pendidikan_dasar" class="col-sm-5 control-label">8. Akses ke Pendidikan Dasar SD/MI < 3 KM <span class="text-danger">*</span></label>
			<div class="col-sm-3"><input type="text" class="form-control" id="pendidikan_dasar" name="data[pendidikan_dasar]" data-validate="required" data-message-required="Kolom Akses ke Pendidikan Dasar SD/MI < 3 KM tidak boleh kosong." placeholder=" Isi dengan Nilai IDM ">
			</div>
		</div>
		<div class="form-group">
			<label for="smp_mts" class="col-sm-5 control-label">9. Akses ke SMP/MTS < 6 km <span class="text-danger">*</span></label>
			<div class="col-sm-3">
				<input type="text" class="form-control" id="smp_mts" name="data[smp_mts]" data-validate="required" data-message-required="Kolom Akses ke SMP/MTS < 6 km tidak boleh kosong." placeholder=" Isi dengan Nilai IDM ">
			</div>
		</div>
		<div class="form-group">
			<label for="smu_smk" class="col-sm-5 control-label">10. Akses ke SMU/SMK < 6 km <span class="text-danger">*</span></label>
			<div class="col-sm-3">
				<input type="text" class="form-control" id="smu_smk" name="data[smu_smk]" data-validate="required" data-message-required="Kolom Akses ke SMU/SMK < 6 km tidak boleh kosong." placeholder="Isi dengan Nilai IDM">
			</div>
		</div>
		<div class="form-group">
			<label for="buta_aksara" class="col-sm-5 control-label"> 11. Kegiatan pemberantasan buta aksara <span class="text-danger">*</span></label>
			<div class="col-sm-3">
				<input type="text" class="form-control" id="buta_aksara" name="data[buta_aksara]" data-validate="required" data-message-required="Kolom Kegiatan pemberantasan buta aksara tidak boleh kosong." placeholder="Isi dengan Nilai IDM">
			</div>
		</div>
		<div class="form-group">
			<label for="kegiatan_paud" class="col-sm-5 control-label"> 12. Kegiatan PAUD <span class="text-danger">*</span></label>
			<div class="col-sm-3">
				<input type="text" class="form-control" id="kegiatan_paud" name="data[kegiatan_paud]" data-validate="required" data-message-required="Kolom Kegiatan PAUD tidak boleh kosong." placeholder="Isi dengan Nilai IDM">
			</div>
		</div>
		<div class="form-group">
			<label for="kegiatan_pkbm" class="col-sm-5 control-label"> 13. Kegiatan PKBM/Paket ABC <span class="text-danger">*</span></label>
			<div class="col-sm-3">
				<input type="text" class="form-control" id="kegiatan_pkbm" name="data[kegiatan_pkbm]" data-validate="required" data-message-required="Kolom Kegiatan PKBM/Paket ABC tidak boleh kosong." placeholder="Isi dengan Nilai IDM">
			</div>
		</div>
		<div class="form-group">
			<label for="pusat_kursus" class="col-sm-5 control-label"> 14. Akses ke pusat keterampilan/ kursus <span class="text-danger">*</span></label>
			<div class="col-sm-3">
				<input type="text" class="form-control" id="pusat_kursus" name="data[pusat_kursus]" data-validate="required" data-message-required="Kolom Akses ke pusat keterampilan/ kursus tidak boleh kosong." placeholder="Isi dengan Nilai IDM">
			</div>
		</div>
		<div class="form-group">
			<label for="perpus_desa" class="col-sm-5 control-label"> 15. Taman Bacaan Masyarakat atau Perpustakaan Desa <span class="text-danger">*</span></label>
			<div class="col-sm-3">
				<input type="text" class="form-control" id="perpus_desa" name="data[perpus_desa]" data-validate="required" data-message-required="Kolom Akses ke pusat keterampilan/ kursus tidak boleh kosong." placeholder="Isi dengan Nilai IDM">
			</div>
		</div>
		<h3>3. Bidang Modal Sosial</h3>
		<hr>
		<div class="form-group">
			<label for="gotong_royong" class="col-sm-5 control-label">16. Kebiasaan gotong royong di desa <span class="text-danger">*</span></label>
			<div class="col-sm-3"><input type="text" class="form-control" id="gotong_royong" name="data[gotong_royong]" data-validate="required" data-message-required="Kolom Kebiasaan gotong royong di desa tidak boleh kosong." placeholder=" Isi dengan Nilai IDM ">
			</div>
		</div>
		<div class="form-group">
			<label for="ruang_publik" class="col-sm-5 control-label">17. Keberadaan ruang publik terbuka bagi warga yang tidak berbayar <span class="text-danger">*</span></label>
			<div class="col-sm-3">
				<input type="text" class="form-control" id="ruang_publik" name="data[ruang_publik]" data-validate="required" data-message-required="Kolom Keberadaan ruang publik terbuka bagi warga yang tidak berbaya tidak boleh kosong." placeholder=" Isi dengan Nilai IDM ">
			</div>
		</div>
		<div class="form-group">
			<label for="lapangan_olahraga" class="col-sm-5 control-label">18. Ketersediaan fasilitas atau lapangan olahraga <span class="text-danger">*</span></label>
			<div class="col-sm-3">
				<input type="text" class="form-control" id="lapangan_olahraga" name="data[lapangan_olahraga]" data-validate="required" data-message-required="Kolom Ketersediaan fasilitas atau lapangan olahraga tidak boleh kosong." placeholder="Isi dengan Nilai IDM">
			</div>
		</div>
		<div class="form-group">
			<label for="kegiatan_olahraga" class="col-sm-5 control-label"> 19. Terdapat kelompok kegiatan olahraga <span class="text-danger">*</span></label>
			<div class="col-sm-3">
				<input type="text" class="form-control" id="kegiatan_olahraga" name="data[kegiatan_olahraga]" data-validate="required" data-message-required="Kolom Terdapat kelompok kegiatan olahraga tidak boleh kosong." placeholder="Isi dengan Nilai IDM">
			</div>
		</div>
		<div class="form-group">
			<label for="suku_etnis" class="col-sm-5 control-label"> 20. Warga desa terdiri dari beberapa suku atau etnis <span class="text-danger">*</span></label>
			<div class="col-sm-3">
				<input type="text" class="form-control" id="suku_etnis" name="data[suku_etnis]" data-validate="required" data-message-required="Kolom Warga desa terdiri dari beberapa suku atau etnis tidak boleh kosong." placeholder="Isi dengan Nilai IDM">
			</div>
		</div>
		<div class="form-group">
			<label for="bahasa" class="col-sm-5 control-label"> 21. Warga desa berkomunikasi sehari-hari menggunakan bahasa yang berbeda <span class="text-danger">*</span></label>
			<div class="col-sm-3">
				<input type="text" class="form-control" id="kbahasa" name="data[bahasa]" data-validate="required" data-message-required="Kolom Warga desa berkomunikasi sehari-hari menggunakan bahasa yang berbeda tidak boleh kosong." placeholder="Isi dengan Nilai IDM">
			</div>
		</div>
		<div class="form-group">
			<label for="keragaman_agama" class="col-sm-5 control-label"> 22. Terdapat keragaman agama di Desa <span class="text-danger">*</span></label>
			<div class="col-sm-3">
				<input type="text" class="form-control" id="keragaman_agama" name="data[keragaman_agama]" data-validate="required" data-message-required="Kolom Terdapat keragaman agama di Desas tidak boleh kosong." placeholder="Isi dengan Nilai IDM">
			</div>
		</div>
		<div class="form-group">
			<label for="poskamling" class="col-sm-5 control-label"> 23. Warga desa membangun pemeliharaan poskamling lingkungan <span class="text-danger">*</span></label>
			<div class="col-sm-3">
				<input type="text" class="form-control" id="poskamling" name="data[poskamling]" data-validate="required" data-message-required="Kolom Warga desa membangun pemeliharaan poskamling lingkungan tidak boleh kosong." placeholder="Isi dengan Nilai IDM">
			</div>
		</div>
		<div class="form-group">
			<label for="siskamling" class="col-sm-5 control-label"> 24. Partisipasi warga mengadakan siskamling <span class="text-danger">*</span></label>
			<div class="col-sm-3">
				<input type="text" class="form-control" id="siskamling" name="data[siskamling]" data-validate="required" data-message-required="Kolom Partisipasi warga mengadakan siskamling tidak boleh kosong." placeholder="Isi dengan Nilai IDM">
			</div>
		</div>
		<div class="form-group">
			<label for="kriminalitas" class="col-sm-5 control-label"> 25. Tingkat kriminalitas yang terjadi di Desa <span class="text-danger">*</span></label>
			<div class="col-sm-3">
				<input type="text" class="form-control" id="kriminalitas" name="data[kriminalitas]" data-validate="required" data-message-required="Kolom Tingkat kriminalitas yang terjadi di Desa tidak boleh kosong." placeholder="Isi dengan Nilai IDM">
			</div>
		</div>
		<div class="form-group">
			<label for="konflik" class="col-sm-5 control-label"> 26. Tingkat konflik yang terjadi di Desa <span class="text-danger">*</span></label>
			<div class="col-sm-3">
				<input type="text" class="form-control" id="konflik" name="data[konflik]" data-validate="required" data-message-required="Kolom Tingkat konflik yang terjadi di Des tidak boleh kosong." placeholder="Isi dengan Nilai IDM">
			</div>
		</div>
		<div class="form-group">
			<label for="penyelesaian_konflik" class="col-sm-5 control-label"> 27. Upaya penyelesaian konflik yang terjadi di Desa
 <span class="text-danger">*</span></label>
			<div class="col-sm-3">
				<input type="text" class="form-control" id="penyelesaian_konflik" name="data[penyelesaian_konflik]" data-validate="required" data-message-required="Kolom Upaya penyelesaian konflik yang terjadi di Desa tidak boleh kosong." placeholder="Isi dengan Nilai IDM">
			</div>
		</div>
		<div class="form-group">
			<label for="sekolah_lb" class="col-sm-5 control-label"> 28. Terdapat akses ke Sekolah Luar Biasa <span class="text-danger">*</span></label>
			<div class="col-sm-3">
				<input type="text" class="form-control" id="sekolah_lb" name="data[sekolah_lb]" data-validate="required" data-message-required="Kolom Terdapat akses ke Sekolah Luar Biasa tidak boleh kosong." placeholder="Isi dengan Nilai IDM">
			</div>
		</div>
		<div class="form-group">
			<label for="kesejahteraan_sosial" class="col-sm-5 control-label"> 29. Terdapat Penyandang Kesejahteraan Sosial (Anak Jalanan, Pekerja Seks Komersial dan Pengemis <span class="text-danger">*</span></label>
			<div class="col-sm-3">
				<input type="text" class="form-control" id="kesejahteraan_sosial" name="data[kesejahteraan_sosial]" data-validate="required" data-message-required="Kolom Terdapat Penyandang Kesejahteraan Sosial (Anak Jalanan, Pekerja Seks Komersial dan Pengemis tidak boleh kosong." placeholder="Isi dengan Nilai IDM">
			</div>
		</div>
		<div class="form-group">
			<label for="bunuh_diri" class="col-sm-5 control-label"> 30. Terdapat Penduduk yang bunuh diri <span class="text-danger">*</span></label>
			<div class="col-sm-3">
				<input type="text" class="form-control" id="bunuh_diri" name="data[bunuh_diri]" data-validate="required" data-message-required="Kolom Terdapat Penduduk yang bunuh diri tidak boleh kosong." placeholder="Isi dengan Nilai IDM">
			</div>
		</div>
		<h3>4.Bidang Permukiman</h3>
		<hr>
		<div class="form-group">
			<label for="sumber_air" class="col-sm-5 control-label"> 31. Mayoritas penduduk desa memiliki sumber air minum yang layak <span class="text-danger">*</span></label>
			<div class="col-sm-3">
				<input type="text" class="form-control" id="sumber_air" name="data[sumber_air]" data-validate="required" data-message-required="Kolom Mayoritas penduduk desa memiliki sumber air minum yang layaks tidak boleh kosong." placeholder="Isi dengan Nilai IDM">
			</div>
		</div>
		<div class="form-group">
			<label for="air_mandi" class="col-sm-5 control-label"> 32. Akses Penduduk desa memiliki air untuk mandi dan mencuci <span class="text-danger">*</span></label>
			<div class="col-sm-3">
				<input type="text" class="form-control" id="air_mandi" name="data[air_mandi]" data-validate="required" data-message-required="Kolom Akses Penduduk desa memiliki air untuk mandi dan mencuci tidak boleh kosong." placeholder="Isi dengan Nilai IDM">
			</div>
		</div>
		<div class="form-group">
			<label for="memiliki_jamban" class="col-sm-5 control-label"> 33. Mayoritas penduduk desa memiliki Jamban <span class="text-danger">*</span></label>
			<div class="col-sm-3">
				<input type="text" class="form-control" id="memiliki_jamban" name="data[memiliki_jamban]" data-validate="required" data-message-required="Kolom Mayoritas penduduk desa memiliki Jamban tidak boleh kosong." placeholder="Isi dengan Nilai IDM">
			</div>
		</div>
		<div class="form-group">
			<label for="tempat_sampah" class="col-sm-5 control-label"> 34. Terdapat tempat pembuangan sampah <span class="text-danger">*</span></label>
			<div class="col-sm-3">
				<input type="text" class="form-control" id="tempat_sampah" name="data[tempat_sampah]" data-validate="required" data-message-required="Kolom Terdapat tempat pembuangan sampah tidak boleh kosong." placeholder="Isi dengan Nilai IDM">
			</div>
		</div>
		<div class="form-group">
			<label for="aliran_listrik" class="col-sm-5 control-label"> 35. Jumlah keluarga yang telah memiliki aliran listrik <span class="text-danger">*</span></label>
			<div class="col-sm-3">
				<input type="text" class="form-control" id="aliran_listrik" name="data[aliran_listrik]" data-validate="required" data-message-required="Kolom Jumlah keluarga yang telah memiliki aliran listrik tidak boleh kosong." placeholder="Isi dengan Nilai IDM">
			</div>
		</div>
		<div class="form-group">
			<label for="sinyal_kuat" class="col-sm-5 control-label"> 36. Penduduk desa memiliki telepon selular dan sinyal yang kuat <span class="text-danger">*</span></label>
			<div class="col-sm-3">
				<input type="text" class="form-control" id="sinyal_kuat" name="data[sinyal_kuat]" data-validate="required" data-message-required="Kolom Jumlah Penduduk desa memiliki telepon selular dan sinyal yang kuat tidak boleh kosong." placeholder="Isi dengan Nilai IDM">
			</div>
		</div>
		<div class="form-group">
			<label for="televisi" class="col-sm-5 control-label"> 37. Terdapat siaran televisi lokal, nasional dan asing?  <span class="text-danger">*</span></label>
			<div class="col-sm-3">
				<input type="text" class="form-control" id="televisi" name="data[televisi]" data-validate="required" data-message-required="Kolom Terdapat siaran televisi lokal, nasional dan asing? tidak boleh kosong." placeholder="Isi dengan Nilai IDM">
			</div>
		</div>
		<div class="form-group">
			<label for="internet" class="col-sm-5 control-label"> 38. Terdapat akses internet <span class="text-danger">*</span></label>
			<div class="col-sm-3">
				<input type="text" class="form-control" id="internet" name="data[internet]" data-validate="required" data-message-required="Kolom Terdapat akses internet tidak boleh kosong." placeholder="Isi dengan Nilai IDM">
			</div>
		</div>
		<h3>5. Bidang Ekonomi</h3>
		<hr>
		<div class="form-group">
			<label for="ekonomi_penduduk" class="col-sm-5 control-label"> 39. Terdapat lebih dari satu jenis kegiatan ekonomi penduduk <span class="text-danger">*</span></label>
			<div class="col-sm-3">
				<input type="text" class="form-control" id="ekonomi_penduduk" name="data[ekonomi_penduduk]" data-validate="required" data-message-required="Kolom Terdapat lebih dari satu jenis kegiatan ekonomi penduduk tidak boleh kosong." placeholder="Isi dengan Nilai IDM">
			</div>
		</div>
		<div class="form-group">
			<label for="pusat_perdagangan" class="col-sm-5 control-label"> 40. Akses penduduk ke pusat perdagangan (pertokoan, pasar permanen dan semi permanen) <span class="text-danger">*</span></label>
			<div class="col-sm-3">
				<input type="text" class="form-control" id="pusat_perdagangan" name="data[pusat_perdagangan]" data-validate="required" data-message-required="Kolom Akses penduduk ke pusat perdagangan (pertokoan, pasar permanen dan semi permanen) tidak boleh kosong." placeholder="Isi dengan Nilai IDM">
			</div>
		</div>
		<div class="form-group">
			<label for="minimarket" class="col-sm-5 control-label"> 41. Terdapat sektor perdagangan di permukiman (warung dan minimarket) <span class="text-danger">*</span></label>
			<div class="col-sm-3">
				<input type="text" class="form-control" id="minimarket" name="data[minimarket]" data-validate="required" data-message-required="Kolom Terdapat sektor perdagangan di permukiman (warung dan minimarket) tidak boleh kosong." placeholder="Isi dengan Nilai IDM">
			</div>
		</div>
		<div class="form-group">
			<label for="penginapan" class="col-sm-5 control-label"> 42. Terdapat usaha kedai makanan, restoran, hotel dan penginapan <span class="text-danger">*</span></label>
			<div class="col-sm-3">
				<input type="text" class="form-control" id="penginapan" name="data[penginapan]" data-validate="required" data-message-required="Kolom Terdapat usaha kedai makanan, restoran, hotel dan penginapa tidak boleh kosong." placeholder="Isi dengan Nilai IDM">
			</div>
		</div>
		<div class="form-group">
			<label for="logistik" class="col-sm-5 control-label"> 43. Terdapat kantor pos dan jasa logistik <span class="text-danger">*</span></label>
			<div class="col-sm-3">
				<input type="text" class="form-control" id="logistik" name="data[logistik]" data-validate="required" data-message-required="Kolom Terdapat kantor pos dan jasa logistik tidak boleh kosong." placeholder="Isi dengan Nilai IDM">
			</div>
		</div>
		<div class="form-group">
			<label for="bank" class="col-sm-5 control-label"> 44. Tersedianya lembaga perbankan umum (Pemerintah dan Swasta <span class="text-danger">*</span></label>
			<div class="col-sm-3">
				<input type="text" class="form-control" id="bank" name="data[bank]" data-validate="required" data-message-required="Kolom Tersedianya lembaga perbankan umum (Pemerintah dan Swasta tidak boleh kosong." placeholder="Isi dengan Nilai IDM">
			</div>
		</div>
		<div class="form-group">
			<label for="bpr" class="col-sm-5 control-label"> 45. Tersedianya BPR <span class="text-danger">*</span></label>
			<div class="col-sm-3">
				<input type="text" class="form-control" id="bpr" name="data[bpr]" data-validate="required" data-message-required="Kolom Tersedianya BPR tidak boleh kosong." placeholder="Isi dengan Nilai IDM">
			</div>
		</div>
		<div class="form-group">
			<label for="kredit" class="col-sm-5 control-label"> 46. Akses penduduk ke kredit <span class="text-danger">*</span></label>
			<div class="col-sm-3">
				<input type="text" class="form-control" id="kredit" name="data[kredit]" data-validate="required" data-message-required="Kolom Akses penduduk ke kredit tidak boleh kosong." placeholder="Isi dengan Nilai IDM">
			</div>
		</div>
		<div class="form-group">
			<label for="koperasi" class="col-sm-5 control-label"> 47. Tersedianya lembaga ekonomi rakyat (koperasi) <span class="text-danger">*</span></label>
			<div class="col-sm-3">
				<input type="text" class="form-control" id="koperasi" name="data[koperasi]" data-validate="required" data-message-required="Kolom Tersedianya lembaga ekonomi rakyat (koperasi) tidak boleh kosong." placeholder="Isi dengan Nilai IDM">
			</div>
		</div>
		<div class="form-group">
			<label for="transportasi" class="col-sm-5 control-label"> 48. Terdapat moda transportasi umum (Transportasi Angkutan Umum, trayek reguler dan jam operasi Angkutan Umum) <span class="text-danger">*</span></label>
			<div class="col-sm-3">
				<input type="text" class="form-control" id="transportasi" name="data[transportasi]" data-validate="required" data-message-required="Kolom Terdapat moda transportasi umum (Transportasi Angkutan Umum, trayek reguler dan jam operasi Angkutan Umum) tidak boleh kosong." placeholder="Isi dengan Nilai IDM">
			</div>
		</div>
		<div class="form-group">
			<label for="jalan_umum" class="col-sm-5 control-label"> 49. Jalan yang dapat dilalui oleh kendaraan bermotor roda empat atau lebih (sepanjang tahun kecuali musim hujan, kecuali saat tertentu) <span class="text-danger">*</span></label>
			<div class="col-sm-3">
				<input type="text" class="form-control" id="jalan_umum" name="data[jalan_umum]" data-validate="required" data-message-required="Kolom Jalan yang dapat dilalui oleh kendaraan bermotor roda empat atau lebih (sepanjang tahun kecuali musim hujan, kecuali saat tertentu)tidak boleh kosong." placeholder="Isi dengan Nilai IDM">
			</div>
		</div>
		<div class="form-group">
			<label for="jalan_desa" class="col-sm-5 control-label"> 50. Kualitas Jalan Desa (Jalan terluas di desa dengan aspal, kerikil, dan tanah) <span class="text-danger">*</span></label>
			<div class="col-sm-3">
				<input type="text" class="form-control" id="jalan_desa" name="data[jalan_desa]" data-validate="required" data-message-required="Kolom Kualitas Jalan Desa (Jalan terluas di desa dengan aspal, kerikil, dan tanah) tidak boleh kosong." placeholder="Isi dengan Nilai IDM">
			</div>
		</div>
		<h3>6. Bidang Ekologi</h3>
		<hr>
		<div class="form-group">
			<label for="pencemaran" class="col-sm-5 control-label"> 51. Ada atau tidak adanya pencemaran air, tanah dan udara <span class="text-danger">*</span></label>
		</div>
		<div class="form-group">
			<label for="air" class="col-sm-5 control-label"> a. Air <span class="text-danger">*</span></label>
			<div class="col-sm-3">
				<input type="text" class="form-control" id="air" name="data[air]" data-validate="required" data-message-required="Kolom Air tidak boleh kosong." placeholder="Isi dengan Nilai IDM">
			</div>
		</div>
		<div class="form-group">
			<label for="tanah" class="col-sm-5 control-label"> b. Tanah <span class="text-danger">*</span></label>
			<div class="col-sm-3">
				<input type="text" class="form-control" id="tanah" name="data[tanah]" data-validate="required" data-message-required="Kolom Tanah tidak boleh kosong." placeholder="Isi dengan Nilai IDM">
			</div>
		</div>
		<div class="form-group">
			<label for="udara" class="col-sm-5 control-label"> c. Udara <span class="text-danger">*</span></label>
			<div class="col-sm-3">
				<input type="text" class="form-control" id="udara" name="data[udara]" data-validate="required" data-message-required="Kolom Udara tidak boleh kosong." placeholder="Isi dengan Nilai IDM">
			</div>
		</div>
		<div class="form-group">
			<label for="limbah" class="col-sm-5 control-label"> d. Limbah <span class="text-danger">*</span></label>
			<div class="col-sm-3">
				<input type="text" class="form-control" id="limbah" name="data[limbah]" data-validate="required" data-message-required="Kolom Terdapat sungai yg terkena limbah tidak boleh kosong." placeholder="Isi dengan Nilai IDM">
			</div>
		</div>
		<div class="form-group">
			<label for="bencana_alam" class="col-sm-5 control-label"> 52. Kejadian Bencana Alam (banjir, tanah longsong, kebakaran hutan) <span class="text-danger">*</span></label>
		</div>
			<div class="form-group">
			<label for="longsor" class="col-sm-5 control-label"> a. Longsor <span class="text-danger">*</span></label>
			<div class="col-sm-3">
				<input type="text" class="form-control" id="longsor" name="data[longsor]" data-validate="required" data-message-required="Kolom Longsor tidak boleh kosong." placeholder="Isi dengan Nilai IDM">
			</div>
		</div>
			<div class="form-group">
			<label for="banjir" class="col-sm-5 control-label"> b. Banjir <span class="text-danger">*</span></label>
			<div class="col-sm-3">
				<input type="text" class="form-control" id="banjir" name="data[banjir]" data-validate="required" data-message-required="Kolom banjir tidak boleh kosong." placeholder="Isi dengan Nilai IDM">
			</div>
		</div>
			<div class="form-group">
			<label for="kebakaran_hutan" class="col-sm-5 control-label"> c. Kebakaran Hutan <span class="text-danger">*</span></label>
			<div class="col-sm-3">
				<input type="text" class="form-control" id="kebakaran_hutan" name="data[kebakaran_hutan]" data-validate="required" data-message-required="Kolom Kebakaran Hutan tidak boleh kosong." placeholder="Isi dengan Nilai IDM">
			</div>
		</div>
		<div class="form-group">
			<label for="potensi_bencana" class="col-sm-5 control-label"> 53. Upaya/Tindakan terhadap potensi bencana alam (Tanggap bencana, jalur evakuasi, peringatan dini dan ketersediaan peralatan penanganan bencana) <span class="text-danger">*</span></label>
			
		</div>
		<div class="form-group">
			<label for="peringatan_dini" class="col-sm-5 control-label"> a. Peringatan Dini <span class="text-danger">*</span></label>
			<div class="col-sm-3">
				<input type="text" class="form-control" id="peringatan_dini" name="data[peringatan_dini]" data-validate="required" data-message-required="Kolom peringatan dini tidak boleh kosong." placeholder="Isi dengan Nilai IDM">
			</div>
		</div>
		<div class="form-group">
			<label for="dini_tsunami" class="col-sm-5 control-label"> b. Peringatan Dini Tsunami <span class="text-danger">*</span></label>
			<div class="col-sm-3">
				<input type="text" class="form-control" id="dini_tsunami" name="data[dini_tsunami]" data-validate="required" data-message-required="Kolom Peringatan Dini Tsunami tidak boleh kosong." placeholder="Isi dengan Nilai IDM">
			</div>
		</div>
		<div class="form-group">
			<label for="per_keselamatan" class="col-sm-5 control-label"> c. Perlengkapan Keselamatan <span class="text-danger">*</span></label>
			<div class="col-sm-3">
				<input type="text" class="form-control" id="per_keselamatan" name="data[per_keselamatan]" data-validate="required" data-message-required="Kolom Perlengkapan Keselamatan tidak boleh kosong." placeholder="Isi dengan Nilai IDM">
			</div>
		</div>
		<div class="form-group">
			<label for="jalur_evakuasi" class="col-sm-5 control-label"> d. Jalur Evakuasi <span class="text-danger">*</span></label>
			<div class="col-sm-3">
				<input type="text" class="form-control" id="jalur_evakuasi" name="data[jalur_evakuasi]" data-validate="required" data-message-required="Kolom jalur evakuasi tidak boleh kosong." placeholder="Isi dengan Nilai IDM">
			</div>
		</div>

		<h3>Koordinat</h3>
		<hr>
		<div class="form-group">
			<label for="tanggal" class="col-sm-5 control-label">Tanggal Entry<span class="text-danger">*</span></label>
			<div class="col-sm-3">
				<input type="text" class="form-control datepicker" data-format="dd-mm-yyyy" id="tanggal" name="data[tanggal]" data-validate="required" data-message-required="Kolom tanggal kegiatan tidak boleh kosong." placeholder="Tanggal Entry">
			</div>
		</div>
		<div class="form-group">
			<label for="rencana_tindak_lanjut" class="col-sm-5 control-label">Garis Lintang<span class="text-danger">*</span></label>
			<div class="col-sm-3">
				<input type="text" class="form-control" id="rencana_tindak_lanjut" name="data[rencana_tindak_lanjut]" data-validate="required" data-message-required="Kolom Garis Lintang tidak boleh kosong." placeholder="Garis Lintang">
			</div>
		</div>
		<div class="form-group">
			<label for="tindak_lanjut_lalu" class="col-sm-5 control-label">Garis Bujur<span class="text-danger">*</span></label>
			<div class="col-sm-3">
				<input type="text" class="form-control" id="tindak_lanjut_lalu" name="data[tindak_lanjut_lalu]" data-validate="required" data-message-required="Kolom Garis Bujur tidak boleh kosong." placeholder="Garis Bujur">
			</div>
		</div>

		

		<div class="form-group">
			<div class="col-sm-5 col-sm-offset-2">
				<button type="submit" class="btn btn-lg btn-success"><i class="entypo-check"></i> Simpan</button>
				<a href="<?php echo base_url('kegiatan') ?>" class="btn btn-lg btn-red pull-right"><i class="entypo-back"></i> Kembali</a>
			</div>
		</div>
	</form>

	<script type="text/javascript">
		jQuery(document).ready(function($){
			$('#kabupaten_id').select2({
			//	minimumInputLength: 3,
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
				//minimumInputLength: 3,
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
				//minimumInputLength: 3,
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

			<?php if(!empty($this->session->userdata('kabupaten_id'))): ?> $('#kabupaten_id').select2('data', <?php echo json_encode(array('id'=>$this->session->userdata('kabupaten_id'), 'text'=>$this->session->userdata('kabupaten'))) ?>); <?php endif ?>
			<?php if(!empty($this->session->userdata('kecamatan_id'))): ?> $('#kecamatan_id').select2('data', <?php echo json_encode(array('id'=>$this->session->userdata('kecamatan_id'), 'text'=>$this->session->userdata('kecamatan'))) ?>); <?php endif ?>
			<?php if(!empty($this->session->userdata('desa_id'))): ?> $('#desa_id').select2('data', <?php echo json_encode(array('id'=>$this->session->userdata('desa_id'), 'text'=>$this->session->userdata('desa'))) ?>); <?php endif ?>
		});
	</script>
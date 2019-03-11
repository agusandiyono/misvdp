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
			<label for="no_kuisioner" class="col-sm-3 control-label">No. Kuisioner</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="no_kuisioner" name="data[no_kuisioner]" data-validate="required" data-message-required="Kolom nomor kuisioner tidak boleh kosong." placeholder="No. Kuisioner" value="<?php echo $evkin->no_kuisioner ?>">
			</div>
		</div>
		<div class="form-group">
			<label for="pewawancara" class="col-sm-3 control-label">Pewawancara</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="pewawancara" name="data[pewawancara]" data-validate="required" data-message-required="Kolom pewawancara tidak boleh kosong." placeholder="Pewawancara" value="<?php echo $evkin->pewawancara ?>">
			</div>
		</div>
		<div class="form-group">
			<label for="tanggal" class="col-sm-3 control-label">Tanggal</label>
			<div class="col-sm-5">
				<input type="text" class="form-control datepicker" data-format="dd-mm-yyyy" id="tanggal" name="data[tanggal]" data-validate="required" data-message-required="Kolom tanggal tidak boleh kosong." placeholder="Tanggal" value="<?php echo date_reverse($evkin->tanggal) ?>">
			</div>
		</div>
		<div class="form-group">
			<label for="no_urut" class="col-sm-3 control-label">No. Urut Kelompok</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="no_urut" name="data[no_urut]" placeholder="No. Kelompok" value="<?php echo $evkin->no_urut ?>">
			</div>
		</div>
		<div class="form-group">
			<label for="nama" class="col-sm-3 control-label">Nama Kelompok</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="nama" name="data[nama]" placeholder="Nama Kelompok" value="<?php echo $evkin->nama ?>">
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
					<option value="<?php echo $provinsi->provinsi_code ?>" <?php echo $provinsi->provinsi_code == $evkin->provinsi_id ? "selected" : "" ?>><?php echo $provinsi->provinsi_code ?> - <?php echo $provinsi->provinsi_name ?></option>
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

		<h3>1. Kelembagaan Kelompok</h3>
		<hr>
		<h4>1.1 Apakah Kelompok memiliki Struktur pengelola sebagai Berikut?</h4>
		<div class="form-group">
			<label for="struktur_ketua_opsi" class="col-sm-3 control-label">Ketua Kelompok?</label>
			<div class="col-sm-2">
				<select class="form-control" id="struktur_ketua_opsi" name="data[detail][struktur][ketua][opsi]">
					<option value="a" <?php echo $evkin->detail['struktur']['ketua']['opsi'] == 'a' ? "selected" : "" ?>>Ada</option>
					<option value="b" <?php echo $evkin->detail['struktur']['ketua']['opsi'] == 'b' ? "selected" : "" ?>>Tidak Ada</option>
				</select>
			</div>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="struktur_ketua_keterangan" name="data[detail][struktur][ketua][keterangan]" placeholder="Keterangan" value="<?php echo $evkin->detail['struktur']['ketua']['keterangan'] ?>">
			</div>
		</div>
		<div class="form-group">
			<label for="struktur_bendahara_opsi" class="col-sm-3 control-label">Bendahara?</label>
			<div class="col-sm-2">
				<select class="form-control" id="struktur_bendahara_opsi" name="data[detail][struktur][bendahara][opsi]">
					<option value="a" <?php echo $evkin->detail['struktur']['bendahara']['opsi'] == 'a' ? "selected" : "" ?>>Ada</option>
					<option value="b" <?php echo $evkin->detail['struktur']['bendahara']['opsi'] == 'b' ? "selected" : "" ?>>Tidak Ada</option>
				</select>
			</div>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="struktur_bendahara_keterangan" name="data[detail][struktur][bendahara][keterangan]" placeholder="Keterangan" value="<?php echo $evkin->detail['struktur']['bendahara']['keterangan'] ?>">
			</div>
		</div>
		<div class="form-group">
			<label for="struktur_sekertaris_opsi" class="col-sm-3 control-label">Sekertaris?</label>
			<div class="col-sm-2">
				<select class="form-control" id="struktur_sekertaris_opsi" name="data[detail][struktur][sekertaris][opsi]">
					<option value="a" <?php echo $evkin->detail['struktur']['sekertaris']['opsi'] == 'a' ? "selected" : "" ?>>Ada</option>
					<option value="b" <?php echo $evkin->detail['struktur']['sekertaris']['opsi'] == 'b' ? "selected" : "" ?>>Tidak Ada</option>
				</select>
			</div>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="struktur_sekertaris_keterangan" name="data[detail][struktur][sekertaris][keterangan]" placeholder="Keterangan" value="<?php echo $evkin->detail['struktur']['sekertaris']['keterangan'] ?>">
			</div>
		</div>
		<div class="form-group">
			<label for="struktur_pemasaran_opsi" class="col-sm-3 control-label">Seksi Pemasaran?</label>
			<div class="col-sm-2">
				<select class="form-control" id="struktur_pemasaran_opsi" name="data[detail][struktur][pemasaran][opsi]">
					<option value="a" <?php echo $evkin->detail['struktur']['pemasaran']['opsi'] == 'a' ? "selected" : "" ?>>Ada</option>
					<option value="b" <?php echo $evkin->detail['struktur']['pemasaran']['opsi'] == 'b' ? "selected" : "" ?>>Tidak Ada</option>
				</select>
			</div>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="struktur_pemasaran_keterangan" name="data[detail][struktur][pemasaran][keterangan]" placeholder="Keterangan" value="<?php echo $evkin->detail['struktur']['pemasaran']['keterangan'] ?>">
			</div>
		</div>
		<div class="form-group">
			<label for="struktur_peralatan_opsi" class="col-sm-3 control-label">Seksi Peralatan?</label>
			<div class="col-sm-2">
				<select class="form-control" id="struktur_peralatan_opsi" name="data[detail][struktur][peralatan][opsi]">
					<option value="a" <?php echo $evkin->detail['struktur']['peralatan']['opsi'] == 'a' ? "selected" : "" ?>>Ada</option>
					<option value="b" <?php echo $evkin->detail['struktur']['peralatan']['opsi'] == 'b' ? "selected" : "" ?>>Tidak Ada</option>
				</select>
			</div>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="struktur_peralatan_keterangan" name="data[detail][struktur][peralatan][keterangan]" placeholder="Keterangan" value="<?php echo $evkin->detail['struktur']['peralatan']['keterangan'] ?>">
			</div>
		</div>
		<div class="form-group">
			<div class="col-sm-3">
				<input type="text" class="form-control" id="struktur_pengelola_lainnya_nama" name="data[detail][struktur][pengelola_lainnya][nama]" placeholder="Lainnya" value="<?php echo $evkin->detail['struktur']['pengelola_lainnya']['nama'] ?>">
			</div>
			<div class="col-sm-2">
				<select class="form-control" id="struktur_pengelola_lainnya_opsi" name="data[detail][struktur][pengelola_lainnya][opsi]">
					<option value="a" <?php echo $evkin->detail['struktur']['pengelola_lainnya']['opsi'] == 'a' ? "selected" : "" ?>>Ada</option>
					<option value="b" <?php echo $evkin->detail['struktur']['pengelola_lainnya']['opsi'] == 'b' ? "selected" : "" ?>>Tidak Ada</option>
				</select>
			</div>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="struktur_pengelola_lainnya_keterangan" name="data[detail][struktur][pengelola_lainnya][keterangan]" placeholder="Keterangan" value="<?php echo $evkin->detail['struktur']['pengelola_lainnya']['keterangan'] ?>">
			</div>
		</div>
		<h4>1.2 Apakah Tim 3 Tungku berperan dalam?</h4>
		<div class="form-group">
			<label for="struktur_perencanaan_opsi" class="col-sm-3 control-label">Perencanaan Bersama Masyarakat?</label>
			<div class="col-sm-2">
				<select class="form-control" id="struktur_perencanaan_opsi" name="data[detail][struktur][perencanaan][opsi]">
					<option value="a" <?php echo $evkin->detail['struktur']['perencanaan']['opsi'] == 'a' ? "selected" : "" ?>>Berperan</option>
					<option value="b" <?php echo $evkin->detail['struktur']['perencanaan']['opsi'] == 'b' ? "selected" : "" ?>>Tidak Berperan</option>
				</select>
			</div>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="struktur_perencanaan_keterangan" name="data[detail][struktur][perencanaan][keterangan]" placeholder="Keterangan" value="<?php echo $evkin->detail['struktur']['perencanaan']['keterangan'] ?>">
			</div>
		</div>
		<div class="form-group">
			<label for="struktur_mkpp_opsi" class="col-sm-3 control-label">MKPP?</label>
			<div class="col-sm-2">
				<select class="form-control" id="struktur_mkpp_opsi" name="data[detail][struktur][mkpp][opsi]">
					<option value="a" <?php echo $evkin->detail['struktur']['mkpp']['opsi'] == 'a' ? "selected" : "" ?>>Berperan</option>
					<option value="b" <?php echo $evkin->detail['struktur']['mkpp']['opsi'] == 'b' ? "selected" : "" ?>>Tidak Berperan</option>
				</select>
			</div>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="struktur_mkpp_keterangan" name="data[detail][struktur][mkpp][keterangan]" placeholder="Keterangan" value="<?php echo $evkin->detail['struktur']['mkpp']['keterangan'] ?>">
			</div>
		</div>
		<div class="form-group">
			<label for="struktur_mkp1_opsi" class="col-sm-3 control-label">MKP I?</label>
			<div class="col-sm-2">
				<select class="form-control" id="struktur_mkp1_opsi" name="data[detail][struktur][mkp1][opsi]">
					<option value="a" <?php echo $evkin->detail['struktur']['mkp1']['opsi'] == 'a' ? "selected" : "" ?>>Berperan</option>
					<option value="b" <?php echo $evkin->detail['struktur']['mkp1']['opsi'] == 'b' ? "selected" : "" ?>>Tidak Berperan</option>
				</select>
			</div>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="struktur_mkp1_keterangan" name="data[detail][struktur][mkp1][keterangan]" placeholder="Keterangan" value="<?php echo $evkin->detail['struktur']['mkp1']['keterangan'] ?>">
			</div>
		</div>
		<div class="form-group">
			<label for="struktur_mkp2_opsi" class="col-sm-3 control-label">MKP II?</label>
			<div class="col-sm-2">
				<select class="form-control" id="struktur_mkp2_opsi" name="data[detail][struktur][mkp2][opsi]">
					<option value="a" <?php echo $evkin->detail['struktur']['mkp2']['opsi'] == 'a' ? "selected" : "" ?>>Berperan</option>
					<option value="b" <?php echo $evkin->detail['struktur']['mkp2']['opsi'] == 'b' ? "selected" : "" ?>>Tidak Berperan</option>
				</select>
			</div>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="struktur_mkp2_keterangan" name="data[detail][struktur][mkp2][keterangan]" placeholder="Keterangan" value="<?php echo $evkin->detail['struktur']['mkp2']['keterangan'] ?>">
			</div>
		</div>
		<div class="form-group">
			<label for="struktur_mkst_opsi" class="col-sm-3 control-label">MKST?</label>
			<div class="col-sm-2">
				<select class="form-control" id="struktur_mkst_opsi" name="data[detail][struktur][mkst][opsi]">
					<option value="a" <?php echo $evkin->detail['struktur']['mkst']['opsi'] == 'a' ? "selected" : "" ?>>Berperan</option>
					<option value="b" <?php echo $evkin->detail['struktur']['mkst']['opsi'] == 'b' ? "selected" : "" ?>>Tidak Berperan</option>
				</select>
			</div>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="struktur_mkst_keterangan" name="data[detail][struktur][mkst][keterangan]" placeholder="Keterangan" value="<?php echo $evkin->detail['struktur']['mkst']['keterangan'] ?>">
			</div>
		</div>
		<div class="form-group">
			<label for="struktur_pemantauan_opsi" class="col-sm-3 control-label">Pemantauan Pelaksanaan?</label>
			<div class="col-sm-2">
				<select class="form-control" id="struktur_pemantauan_opsi" name="data[detail][struktur][pemantauan][opsi]">
					<option value="a" <?php echo $evkin->detail['struktur']['pemantauan']['opsi'] == 'a' ? "selected" : "" ?>>Berperan</option>
					<option value="b" <?php echo $evkin->detail['struktur']['pemantauan']['opsi'] == 'b' ? "selected" : "" ?>>Tidak Berperan</option>
				</select>
			</div>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="struktur_pemantauan_keterangan" name="data[detail][struktur][pemantauan][keterangan]" placeholder="Keterangan" value="<?php echo $evkin->detail['struktur']['pemantauan']['keterangan'] ?>">
			</div>
		</div>

		<h3>2. Dinamika Kelompok Tani</h3>
		<hr>
		<h4>2.1 Rencana Kerja Operasional</h4>
		<div class="form-group">
			<label for="operasional_tpkk_opsi" class="col-sm-3 control-label">Apakah TPKK Memiliki Rencana Kerja?</label>
			<div class="col-sm-2">
				<select class="form-control" id="operasional_tpkk_opsi" name="data[detail][operasional][tpkk][opsi]">
					<option value="a" <?php echo $evkin->detail['operasional']['tpkk']['opsi'] == 'a' ? "selected" : "" ?>>Ada</option>
					<option value="b" <?php echo $evkin->detail['operasional']['tpkk']['opsi'] == 'b' ? "selected" : "" ?>>Tidak Ada</option>
				</select>
			</div>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="operasional_tpkk_keterangan" name="data[detail][operasional][tpkk][keterangan]" placeholder="keterangan" value="<?php echo $evkin->detail['operasional']['tpkk']['keterangan'] ?>">
			</div>
		</div>
		<h5>Dasar penyusunan rencana kerja?</h5>
		<div class="form-group">
			<label for="operasional_pnpm_opsi" class="col-sm-3 control-label">Program PNPM?</label>
			<div class="col-sm-2">
				<select class="form-control" id="operasional_pnpm_opsi" name="data[detail][operasional][pnpm][opsi]">
					<option value="a" <?php echo $evkin->detail['operasional']['pnpm']['opsi'] == 'a' ? "selected" : "" ?>>Ya</option>
					<option value="b" <?php echo $evkin->detail['operasional']['pnpm']['opsi'] == 'b' ? "selected" : "" ?>>Tidak</option>
				</select>
			</div>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="operasional_pnpm_keterangan" name="data[detail][operasional][pnpm][keterangan]" placeholder="keterangan" value="<?php echo $evkin->detail['operasional']['pnpm']['keterangan'] ?>">
			</div>
		</div>
		<div class="form-group">
			<label for="operasional_tujuan_opsi" class="col-sm-3 control-label">Tujuan Kelompok?</label>
			<div class="col-sm-2">
				<select class="form-control" id="operasional_tujuan_kelompok_opsi" name="data[detail][operasional][tujuan_kelompok][opsi]">
					<option value="a" <?php echo $evkin->detail['operasional']['tujuan_kelompok']['opsi'] == 'a' ? "selected" : "" ?>>Ya</option>
					<option value="b" <?php echo $evkin->detail['operasional']['tujuan_kelompok']['opsi'] == 'b' ? "selected" : "" ?>>Tidak</option>
				</select>
			</div>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="operasional_tujuan_kelompok_keterangan" name="data[detail][operasional][tujuan_kelompok][keterangan]" placeholder="keterangan" value="<?php echo $evkin->detail['operasional']['tujuan_kelompok']['keterangan'] ?>">
			</div>
		</div>
		<div class="form-group">
			<label for="operasional_permasalahan_opsi" class="col-sm-3 control-label">Permasalahan?</label>
			<div class="col-sm-2">
				<select class="form-control" id="operasional_permasalahan_opsi" name="data[detail][operasional][permasalahan][opsi]">
					<option value="a" <?php echo $evkin->detail['operasional']['permasalahan']['opsi'] == 'a' ? "selected" : "" ?>>Ya</option>
					<option value="b" <?php echo $evkin->detail['operasional']['permasalahan']['opsi'] == 'b' ? "selected" : "" ?>>Tidak</option>
				</select>
			</div>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="operasional_permasalahan_keterangan" name="data[detail][operasional][permasalahan][keterangan]" placeholder="keterangan" value="<?php echo $evkin->detail['operasional']['permasalahan']['keterangan'] ?>">
			</div>
		</div>
		<div class="form-group">
			<div class="col-sm-3">
				<input type="text" class="form-control" id="operasional_dasar_rencana_lainnya_nama" name="data[detail][operasional][dasar_rencana_lainnya][nama]" placeholder="lainnya" value="<?php echo $evkin->detail['operasional']['dasar_rencana_lainnya']['nama'] ?>">
			</div>
			<div class="col-sm-2">
				<select class="form-control" id="operasional_dasar_rencana_lainnya_opsi" name="data[detail][operasional][dasar_rencana_lainnya][opsi]">
					<option value="a" <?php echo $evkin->detail['operasional']['dasar_rencana_lainnya']['opsi'] == 'a' ? "selected" : "" ?>>Ya</option>
					<option value="b" <?php echo $evkin->detail['operasional']['dasar_rencana_lainnya']['opsi'] == 'b' ? "selected" : "" ?>>Tidak</option>
				</select>
			</div>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="operasional_dasar_rencana_lainnya_keterangan" name="data[detail][operasional][dasar_rencana_lainnya][keterangan]" placeholder="keterangan" value="<?php echo $evkin->detail['operasional']['dasar_rencana_lainnya']['keterangan'] ?>">
			</div>
		</div>
		<h5>Apakah Rencana kerja yang telah disusun memuat?</h5>
		<div class="form-group">
			<label for="operasional_pelaksanaan_opsi" class="col-sm-3 control-label">Pelaksanaan Kegiatan Kelompok?</label>
			<div class="col-sm-2">
				<select class="form-control" id="operasional_pelaksanaan_opsi" name="data[detail][operasional][pelaksanaan][opsi]">
					<option value="a" <?php echo $evkin->detail['operasional']['pelaksanaan']['opsi'] == 'a' ? "selected" : "" ?>>Ada</option>
					<option value="b" <?php echo $evkin->detail['operasional']['pelaksanaan']['opsi'] == 'b' ? "selected" : "" ?>>Tidak Ada</option>
				</select>
			</div>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="operasional_pelaksanaan_keterangan" name="data[detail][operasional][pelaksanaan][keterangan]" placeholder="keterangan" value="<?php echo $evkin->detail['operasional']['pelaksanaan']['keterangan'] ?>">
			</div>
		</div>
		<div class="form-group">
			<label for="operasional_tindak_lanjut_opsi" class="col-sm-3 control-label">Tindak Lanjut Permasalahan Yang Dihadapi?</label>
			<div class="col-sm-2">
				<select class="form-control" id="operasional_tindak_lanjut_opsi" name="data[detail][operasional][tindak_lanjut][opsi]">
					<option value="a" <?php echo $evkin->detail['operasional']['tindak_lanjut']['opsi'] == 'a' ? "selected" : "" ?>>Ada</option>
					<option value="b" <?php echo $evkin->detail['operasional']['tindak_lanjut']['opsi'] == 'b' ? "selected" : "" ?>>Tidak Ada</option>
				</select>
			</div>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="operasional_tindak_lanjut_keterangan" name="data[detail][operasional][tindak_lanjut][keterangan]" placeholder="keterangan" value="<?php echo $evkin->detail['operasional']['tindak_lanjut']['keterangan'] ?>">
			</div>
		</div>
		<div class="form-group">
			<label for="operasional_tujuan_opsi" class="col-sm-3 control-label">Tujuan Kegiatan?</label>
			<div class="col-sm-2">
				<select class="form-control" id="operasional_tujuan_kegiatan_opsi" name="data[detail][operasional][tujuan_kegiatan][opsi]">
					<option value="a" <?php echo $evkin->detail['operasional']['tujuan_kegiatan']['opsi'] == 'a' ? "selected" : "" ?>>Ada</option>
					<option value="b" <?php echo $evkin->detail['operasional']['tujuan_kegiatan']['opsi'] == 'b' ? "selected" : "" ?>>Tidak Ada</option>
				</select>
			</div>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="operasional_tujuan_kegiatan_keterangan" name="data[detail][operasional][tujuan_kegiatan][keterangan]" placeholder="keterangan" value="<?php echo $evkin->detail['operasional']['tujuan_kegiatan']['keterangan'] ?>">
			</div>
		</div>
		<div class="form-group">
			<label for="operasional_waktu_opsi" class="col-sm-3 control-label">Waktu Pelaksanaan Kegiatan?</label>
			<div class="col-sm-2">
				<select class="form-control" id="operasional_waktu_opsi" name="data[detail][operasional][waktu][opsi]">
					<option value="a" <?php echo $evkin->detail['operasional']['waktu']['opsi'] == 'a' ? "selected" : "" ?>>Ada</option>
					<option value="b" <?php echo $evkin->detail['operasional']['waktu']['opsi'] == 'b' ? "selected" : "" ?>>Tidak Ada</option>
				</select>
			</div>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="operasional_waktu_keterangan" name="data[detail][operasional][waktu][keterangan]" placeholder="keterangan" value="<?php echo $evkin->detail['operasional']['waktu']['keterangan'] ?>">
			</div>
		</div>
		<div class="form-group">
			<label for="operasional_rencana_opsi" class="col-sm-3 control-label">Rencana Peningkatan Usaha Tani?</label>
			<div class="col-sm-2">
				<select class="form-control" id="operasional_rencana_opsi" name="data[detail][operasional][rencana][opsi]">
					<option value="a" <?php echo $evkin->detail['operasional']['rencana']['opsi'] == 'a' ? "selected" : "" ?>>Ada</option>
					<option value="b" <?php echo $evkin->detail['operasional']['rencana']['opsi'] == 'b' ? "selected" : "" ?>>Tidak Ada</option>
				</select>
			</div>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="operasional_rencana_keterangan" name="data[detail][operasional][rencana][keterangan]" placeholder="keterangan" value="<?php echo $evkin->detail['operasional']['rencana']['keterangan'] ?>">
			</div>
		</div>
		<div class="form-group">
			<label for="operasional_biaya_opsi" class="col-sm-3 control-label">Biaya?</label>
			<div class="col-sm-2">
				<select class="form-control" id="operasional_biaya_opsi" name="data[detail][operasional][biaya][opsi]">
					<option value="a" <?php echo $evkin->detail['operasional']['biaya']['opsi'] == 'a' ? "selected" : "" ?>>Ada</option>
					<option value="b" <?php echo $evkin->detail['operasional']['biaya']['opsi'] == 'b' ? "selected" : "" ?>>Tidak Ada</option>
				</select>
			</div>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="operasional_biaya_keterangan" name="data[detail][operasional][biaya][keterangan]" placeholder="keterangan" value="<?php echo $evkin->detail['operasional']['biaya']['keterangan'] ?>">
			</div>
		</div>
		<div class="form-group">
			<label for="operasional_penanggungjawab_opsi" class="col-sm-3 control-label">Penanggungjawab Kegiatan?</label>
			<div class="col-sm-2">
				<select class="form-control" id="operasional_penanggungjawab_opsi" name="data[detail][operasional][penanggungjawab][opsi]">
					<option value="a" <?php echo $evkin->detail['operasional']['penanggungjawab']['opsi'] == 'a' ? "selected" : "" ?>>Ada</option>
					<option value="b" <?php echo $evkin->detail['operasional']['penanggungjawab']['opsi'] == 'b' ? "selected" : "" ?>>Tidak Ada</option>
				</select>
			</div>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="operasional_penanggungjawab_keterangan" name="data[detail][operasional][penanggungjawab][keterangan]" placeholder="keterangan" value="<?php echo $evkin->detail['operasional']['penanggungjawab']['keterangan'] ?>">
			</div>
		</div>
		<div class="form-group">
			<div class="col-sm-3">
				<input type="text" class="form-control" id="operasional_memuat_lainnya_nama" name="data[detail][operasional][memuat_lainnya][nama]" placeholder="lainnya" value="<?php echo $evkin->detail['operasional']['memuat_lainnya']['nama'] ?>">
			</div>
			<div class="col-sm-2">
				<select class="form-control" id="operasional_memuat_lainnya_opsi" name="data[detail][operasional][memuat_lainnya][opsi]">
					<option value="a" <?php echo $evkin->detail['operasional']['memuat_lainnya']['opsi'] == 'a' ? "selected" : "" ?>>Ada</option>
					<option value="b" <?php echo $evkin->detail['operasional']['memuat_lainnya']['opsi'] == 'b' ? "selected" : "" ?>>Tidak Ada</option>
				</select>
			</div>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="operasional_memuat_lainnya_keterangan" name="data[detail][operasional][memuat_lainnya][keterangan]" placeholder="keterangan" value="<?php echo $evkin->detail['operasional']['memuat_lainnya']['keterangan'] ?>">
			</div>
		</div>
		<div class="form-group">
			<label for="operasional_sesuai_opsi" class="col-sm-3 control-label">Kesesuaian Rencana Kerja Dengan Pelaksanaan?</label>
			<div class="col-sm-2">
				<select class="form-control" id="operasional_sesuai_opsi" name="data[detail][operasional][sesuai][opsi]">
					<option value="a" <?php echo $evkin->detail['operasional']['sesuai']['opsi'] == 'a' ? "selected" : "" ?>>Sesuai</option>
					<option value="b" <?php echo $evkin->detail['operasional']['sesuai']['opsi'] == 'b' ? "selected" : "" ?>>Tidak Sesuai</option>
				</select>
			</div>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="operasional_sesuai_keterangan" name="data[detail][operasional][sesuai][keterangan]" placeholder="Keterangan" value="<?php echo $evkin->detail['operasional']['sesuai']['keterangan'] ?>">
			</div>
		</div>
		<h5>Bila tidak sesuai apa penyebabnya?</h5>
		<div class="form-group">
			<label for="operasional_sdm_opsi" class="col-sm-3 control-label">Sumber Daya Manusia?</label>
			<div class="col-sm-2">
				<select class="form-control" id="operasional_sdm_opsi" name="data[detail][operasional][sdm][opsi]">
					<option value="a" <?php echo $evkin->detail['operasional']['sdm']['opsi'] == 'a' ? "selected" : "" ?>>Ya</option>
					<option value="b" <?php echo $evkin->detail['operasional']['sdm']['opsi'] == 'b' ? "selected" : "" ?>>Tidak</option>
				</select>
			</div>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="operasional_sdm_keterangan" name="data[detail][operasional][sdm][keterangan]" placeholder="keterangan" value="<?php echo $evkin->detail['operasional']['sdm']['keterangan'] ?>">
			</div>
		</div>
		<div class="form-group">
			<label for="operasional_keuangan_opsi" class="col-sm-3 control-label">Kendala Keuangan?</label>
			<div class="col-sm-2">
				<select class="form-control" id="operasional_keuangan_opsi" name="data[detail][operasional][keuangan][opsi]">
					<option value="a" <?php echo $evkin->detail['operasional']['keuangan']['opsi'] == 'a' ? "selected" : "" ?>>Ya</option>
					<option value="b" <?php echo $evkin->detail['operasional']['keuangan']['opsi'] == 'b' ? "selected" : "" ?>>Tidak</option>
				</select>
			</div>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="operasional_keuangan_keterangan" name="data[detail][operasional][keuangan][keterangan]" placeholder="keterangan" value="<?php echo $evkin->detail['operasional']['keuangan']['keterangan'] ?>">
			</div>
		</div>
		<div class="form-group">
			<label for="operasional_sarana_opsi" class="col-sm-3 control-label">Sarana?</label>
			<div class="col-sm-2">
				<select class="form-control" id="operasional_sarana_opsi" name="data[detail][operasional][sarana][opsi]">
					<option value="a" <?php echo $evkin->detail['operasional']['sarana']['opsi'] == 'a' ? "selected" : "" ?>>Ya</option>
					<option value="b" <?php echo $evkin->detail['operasional']['sarana']['opsi'] == 'b' ? "selected" : "" ?>>Tidak</option>
				</select>
			</div>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="operasional_sarana_keterangan" name="data[detail][operasional][sarana][keterangan]" placeholder="keterangan" value="<?php echo $evkin->detail['operasional']['sarana']['keterangan'] ?>">
			</div>
		</div>
		<div class="form-group">
			<div class="col-sm-3">
				<input type="text" class="form-control" id="operasional_penyebab_lainnya_nama" name="data[detail][operasional][penyebab_lainnya][nama]" placeholder="lainnya" value="<?php echo $evkin->detail['operasional']['penyebab_lainnya']['nama'] ?>">
			</div>
			<div class="col-sm-2">
				<select class="form-control" id="operasional_penyebab_lainnya_opsi" name="data[detail][operasional][penyebab_lainnya][opsi]">
					<option value="a" <?php echo $evkin->detail['operasional']['penyebab_lainnya']['opsi'] == 'a' ? "selected" : "" ?>>Ya</option>
					<option value="b" <?php echo $evkin->detail['operasional']['penyebab_lainnya']['opsi'] == 'b' ? "selected" : "" ?>>Tidak</option>
				</select>
			</div>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="operasional_penyebab_lainnya_keterangan" name="data[detail][operasional][penyebab_lainnya][keterangan]" placeholder="keterangan" value="<?php echo $evkin->detail['operasional']['penyebab_lainnya']['keterangan'] ?>">
			</div>
		</div>
		<h4>2.2 Pertemuan Kelompok</h4>
		<hr>
		<h5>Pokok Bahasan dalam pertemuan?</h5>
		<div class="form-group">
			<label for="pertemuan_perencanaan_opsi" class="col-sm-3 control-label">Perencanaan Kegiatan?</label>
			<div class="col-sm-2">
				<select class="form-control" id="pertemuan_perencanaan_opsi" name="data[detail][pertemuan][perencanaan][opsi]">
					<option value="a" <?php echo $evkin->detail['pertemuan']['perencanaan']['opsi'] == 'a' ? "selected" : "" ?>>Ya</option>
					<option value="b" <?php echo $evkin->detail['pertemuan']['perencanaan']['opsi'] == 'b' ? "selected" : "" ?>>Tidak</option>
				</select>
			</div>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="pertemuan_perencanaan_keterangan" name="data[detail][pertemuan][perencanaan][keterangan]" placeholder="keterangan" value="<?php echo $evkin->detail['pertemuan']['perencanaan']['keterangan'] ?>">
			</div>
		</div>
		<div class="form-group">
			<label for="pertemuan_pelaksanaan_opsi" class="col-sm-3 control-label">Pelaksanaan Kegiatan?</label>
			<div class="col-sm-2">
				<select class="form-control" id="pertemuan_pelaksanaan_opsi" name="data[detail][pertemuan][pelaksanaan][opsi]">
					<option value="a" <?php echo $evkin->detail['pertemuan']['pelaksanaan']['opsi'] == 'a' ? "selected" : "" ?>>Ya</option>
					<option value="b" <?php echo $evkin->detail['pertemuan']['pelaksanaan']['opsi'] == 'b' ? "selected" : "" ?>>Tidak</option>
				</select>
			</div>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="pertemuan_pelaksanaan_keterangan" name="data[detail][pertemuan][pelaksanaan][keterangan]" placeholder="keterangan" value="<?php echo $evkin->detail['pertemuan']['pelaksanaan']['keterangan'] ?>">
			</div>
		</div>
		<div class="form-group">
			<label for="pertemuan_permasalahan_opsi" class="col-sm-3 control-label">Permasalahan?</label>
			<div class="col-sm-2">
				<select class="form-control" id="pertemuan_permasalahan_opsi" name="data[detail][pertemuan][permasalahan][opsi]">
					<option value="a" <?php echo $evkin->detail['pertemuan']['permasalahan']['opsi'] == 'a' ? "selected" : "" ?>>Ya</option>
					<option value="b" <?php echo $evkin->detail['pertemuan']['permasalahan']['opsi'] == 'b' ? "selected" : "" ?>>Tidak</option>
				</select>
			</div>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="pertemuan_permasalahan_keterangan" name="data[detail][pertemuan][permasalahan][keterangan]" placeholder="keterangan" value="<?php echo $evkin->detail['pertemuan']['permasalahan']['keterangan'] ?>">
			</div>
		</div>
		<div class="form-group">
			<div class="col-sm-3">
				<input type="text" class="form-control" id="pertemuan_bahasan_lainnya_nama" name="data[detail][pertemuan][bahasan_lainnya][nama]" placeholder="lainnya" value="<?php echo $evkin->detail['pertemuan']['bahasan_lainnya']['nama'] ?>">
			</div>
			<div class="col-sm-2">
				<select class="form-control" id="pertemuan_bahasan_lainnya_opsi" name="data[detail][pertemuan][bahasan_lainnya][opsi]">
					<option value="a" <?php echo $evkin->detail['pertemuan']['bahasan_lainnya']['opsi'] == 'a' ? "selected" : "" ?>>Ya</option>
					<option value="b" <?php echo $evkin->detail['pertemuan']['bahasan_lainnya']['opsi'] == 'b' ? "selected" : "" ?>>Tidak</option>
				</select>
			</div>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="pertemuan_bahasan_lainnya_keterangan" name="data[detail][pertemuan][bahasan_lainnya][keterangan]" placeholder="keterangan" value="<?php echo $evkin->detail['pertemuan']['bahasan_lainnya']['keterangan'] ?>">
			</div>
		</div>
		<div class="form-group">
			<label for="pertemuan_pertemuan_opsi" class="col-sm-3 control-label">Apakah Kelompok Melakukan Pertemuan?</label>
			<div class="col-sm-2">
				<select class="form-control" id="pertemuan_pertemuan_opsi" name="data[detail][pertemuan][pertemuan][opsi]">
					<option value="a" <?php echo $evkin->detail['pertemuan']['pertemuan']['opsi'] == 'a' ? "selected" : "" ?>>Ya</option>
					<option value="b" <?php echo $evkin->detail['pertemuan']['pertemuan']['opsi'] == 'b' ? "selected" : "" ?>>Tidak</option>
				</select>
			</div>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="pertemuan_pertemuan_keterangan" name="data[detail][pertemuan][pertemuan][keterangan]" placeholder="keterangan" value="<?php echo $evkin->detail['pertemuan']['pertemuan']['keterangan'] ?>">
			</div>
		</div>
		<div class="form-group">
			<label for="pertemuan_rutinitas_opsi" class="col-sm-3 control-label">Apakah Pertemuan Dilaksanakan Secara?</label>
			<div class="col-sm-2">
				<select class="form-control" id="pertemuan_rutinitas_opsi" name="data[detail][pertemuan][rutinitas][opsi]">
					<option value="a" <?php echo $evkin->detail['pertemuan']['rutinitas']['opsi'] == 'a' ? "selected" : "" ?>>Rutin</option>
					<option value="b" <?php echo $evkin->detail['pertemuan']['rutinitas']['opsi'] == 'b' ? "selected" : "" ?>>Tidak Rutin</option>
				</select>
			</div>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="pertemuan_rutinitas_keterangan" name="data[detail][pertemuan][rutinitas][keterangan]" placeholder="Keterangan" value="<?php echo $evkin->detail['pertemuan']['rutinitas']['keterangan'] ?>">
			</div>
		</div>
		<div class="form-group">
			<label for="pertemuan_frekuensi_opsi" class="col-sm-3 control-label">Frekuensi Pertemuan?</label>
			<div class="col-sm-2">
				<select class="form-control" id="pertemuan_frekuensi_opsi" name="data[detail][pertemuan][frekuensi][opsi]">
					<option value="a" <?php echo $evkin->detail['pertemuan']['frekuensi']['opsi'] == 'a' ? "selected" : "" ?>>1 kali sebulan</option>
					<option value="b" <?php echo $evkin->detail['pertemuan']['frekuensi']['opsi'] == 'b' ? "selected" : "" ?>>1 kali per 2 bulan</option>
					<option value="c" <?php echo $evkin->detail['pertemuan']['frekuensi']['opsi'] == 'c' ? "selected" : "" ?>>1 kali per 3 bulan</option>
				</select>
			</div>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="pertemuan_frekuensi_keterangan" name="data[detail][pertemuan][frekuensi][keterangan]" placeholder="Keterangan" value="<?php echo $evkin->detail['pertemuan']['frekuensi']['keterangan'] ?>">
			</div>
		</div>
		<div class="form-group">
			<label for="jumlah_anggota" class="col-sm-3 control-label">Jumlah Anggota Yang Aktif Mengikuti Pertemuan Dalam 6 Bulan Terakhir?</label>
			<div class="col-sm-4">
				<div>Laki-laki</div>
				<input type="text" class="form-control" id="jumlah_anggota" name="data[jumlah_lk]" placeholder="Laki-laki" value="<?php echo $evkin->jumlah_lk ?>">
			</div>
			<div class="col-sm-4">
				<div>Perempuan</div>
				<input type="text" class="form-control" id="jumlah_anggota" name="data[jumlah_p]" placeholder="Perempuan" value="<?php echo $evkin->jumlah_p ?>">
			</div>
		</div>
		<h4>2.3 Administrasi dan Kesekretariatan</h4>
		<hr>
		<div class="form-group">
			<label for="administrasi_plang_opsi" class="col-sm-3 control-label">Keberadaan Plang Program?</label>
			<div class="col-sm-2">
				<select class="form-control" id="administrasi_plang_opsi" name="data[detail][administrasi][plang][opsi]">
					<option value="a" <?php echo $evkin->detail['administrasi']['plang']['opsi'] == 'a' ? "selected" : "" ?>>Ada</option>
					<option value="b" <?php echo $evkin->detail['administrasi']['plang']['opsi'] == 'b' ? "selected" : "" ?>>Tidak Ada</option>
				</select>
			</div>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="administrasi_plang_keterangan" name="data[detail][administrasi][plang][keterangan]" placeholder="keterangan" value="<?php echo $evkin->detail['administrasi']['plang']['keterangan'] ?>">
			</div>
		</div>
		<div class="form-group">
			<label for="administrasi_papan_opsi" class="col-sm-3 control-label">Keberadaan Papan Program?</label>
			<div class="col-sm-2">
				<select class="form-control" id="administrasi_papan_opsi" name="data[detail][administrasi][papan][opsi]">
					<option value="a" <?php echo $evkin->detail['administrasi']['papan']['opsi'] == 'a' ? "selected" : "" ?>>Ada</option>
					<option value="b" <?php echo $evkin->detail['administrasi']['papan']['opsi'] == 'b' ? "selected" : "" ?>>Tidak Ada</option>
				</select>
			</div>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="administrasi_papan_keterangan" name="data[detail][administrasi][papan][keterangan]" placeholder="keterangan" value="<?php echo $evkin->detail['administrasi']['papan']['keterangan'] ?>">
			</div>
		</div>
		<div class="form-group">
			<label for="administrasi_kotak_saran_opsi" class="col-sm-3 control-label">Keberadaan Kotak Saran?</label>
			<div class="col-sm-2">
				<select class="form-control" id="administrasi_kotak_saran_opsi" name="data[detail][administrasi][kotak_saran][opsi]">
					<option value="a" <?php echo $evkin->detail['administrasi']['kotak_saran']['opsi'] == 'a' ? "selected" : "" ?>>Ada</option>
					<option value="b" <?php echo $evkin->detail['administrasi']['kotak_saran']['opsi'] == 'b' ? "selected" : "" ?>>Tidak Ada</option>
				</select>
			</div>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="administrasi_kotak_saran_keterangan" name="data[detail][administrasi][kotak_saran][keterangan]" placeholder="keterangan" value="<?php echo $evkin->detail['administrasi']['kotak_saran']['keterangan'] ?>">
			</div>
		</div>
		<div class="form-group">
			<label for="administrasi_papan_pengumuman_opsi" class="col-sm-3 control-label">Apakah Kelompok Memiliki Papan Pengumuman?</label>
			<div class="col-sm-2">
				<select class="form-control" id="administrasi_papan_pengumuman_opsi" name="data[detail][administrasi][papan_pengumuman][opsi]">
					<option value="a" <?php echo $evkin->detail['administrasi']['papan_pengumuman']['opsi'] == 'a' ? "selected" : "" ?>>Ada</option>
					<option value="b" <?php echo $evkin->detail['administrasi']['papan_pengumuman']['opsi'] == 'b' ? "selected" : "" ?>>Tidak Ada</option>
				</select>
			</div>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="administrasi_papan_pengumuman_keterangan" name="data[detail][administrasi][papan_pengumuman][keterangan]" placeholder="keterangan" value="<?php echo $evkin->detail['administrasi']['papan_pengumuman']['keterangan'] ?>">
			</div>
		</div>
		<div class="form-group">
			<label for="administrasi_fungsi_papan_opsi" class="col-sm-3 control-label">Fungsi Dan Manfaat Papan Pengumuman?</label>
			<div class="col-sm-2">
				<select class="form-control" id="administrasi_fungsi_papan_opsi" name="data[detail][administrasi][fungsi_papan][opsi]">
					<option value="a" <?php echo $evkin->detail['administrasi']['fungsi_papan']['opsi'] == 'a' ? "selected" : "" ?>>Berfungsi</option>
					<option value="b" <?php echo $evkin->detail['administrasi']['fungsi_papan']['opsi'] == 'b' ? "selected" : "" ?>>Tidak Berfungsi</option>
				</select>
			</div>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="administrasi_fungsi_papan_keterangan" name="data[detail][administrasi][fungsi_papan][keterangan]" placeholder="keterangan" value="<?php echo $evkin->detail['administrasi']['fungsi_papan']['keterangan'] ?>">
			</div>
		</div>
		<h5>Buku Administrasi</h5>
		<div class="form-group">
			<label for="administrasi_buku_tamu_opsi" class="col-sm-3 control-label">Buku Tamu?</label>
			<div class="col-sm-2">
				<select class="form-control" id="administrasi_buku_tamu_opsi" name="data[detail][administrasi][buku_tamu][opsi]">
					<option value="a" <?php echo $evkin->detail['administrasi']['buku_tamu']['opsi'] == 'a' ? "selected" : "" ?>>Ada</option>
					<option value="b" <?php echo $evkin->detail['administrasi']['buku_tamu']['opsi'] == 'b' ? "selected" : "" ?>>Tidak Ada</option>
				</select>
			</div>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="administrasi_buku_tamu_keterangan" name="data[detail][administrasi][buku_tamu][keterangan]" placeholder="keterangan" value="<?php echo $evkin->detail['administrasi']['buku_tamu']['keterangan'] ?>">
			</div>
		</div>
		<div class="form-group">
			<label for="administrasi_buku_anggota_opsi" class="col-sm-3 control-label">Buku Anggota?</label>
			<div class="col-sm-2">
				<select class="form-control" id="administrasi_buku_anggota_opsi" name="data[detail][administrasi][buku_anggota][opsi]">
					<option value="a" <?php echo $evkin->detail['administrasi']['buku_anggota']['opsi'] == 'a' ? "selected" : "" ?>>Ada</option>
					<option value="b" <?php echo $evkin->detail['administrasi']['buku_anggota']['opsi'] == 'b' ? "selected" : "" ?>>Tidak Ada</option>
				</select>
			</div>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="administrasi_buku_anggota_keterangan" name="data[detail][administrasi][buku_anggota][keterangan]" placeholder="keterangan" value="<?php echo $evkin->detail['administrasi']['buku_anggota']['keterangan'] ?>">
			</div>
		</div>
		<div class="form-group">
			<label for="administrasi_buku_notulen_opsi" class="col-sm-3 control-label">Buku Notulensi Rapat?</label>
			<div class="col-sm-2">
				<select class="form-control" id="administrasi_buku_notulen_opsi" name="data[detail][administrasi][buku_notulen][opsi]">
					<option value="a" <?php echo $evkin->detail['administrasi']['buku_notulen']['opsi'] == 'a' ? "selected" : "" ?>>Ada</option>
					<option value="b" <?php echo $evkin->detail['administrasi']['buku_notulen']['opsi'] == 'b' ? "selected" : "" ?>>Tidak Ada</option>
				</select>
			</div>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="administrasi_buku_notulen_keterangan" name="data[detail][administrasi][buku_notulen][keterangan]" placeholder="keterangan" value="<?php echo $evkin->detail['administrasi']['buku_notulen']['keterangan'] ?>">
			</div>
		</div>
		<div class="form-group">
			<label for="administrasi_buku_inventaris_opsi" class="col-sm-3 control-label">Buku Inventaris Barang?</label>
			<div class="col-sm-2">
				<select class="form-control" id="administrasi_buku_inventaris_opsi" name="data[detail][administrasi][buku_inventaris][opsi]">
					<option value="a" <?php echo $evkin->detail['administrasi']['buku_inventaris']['opsi'] == 'a' ? "selected" : "" ?>>Ada</option>
					<option value="b" <?php echo $evkin->detail['administrasi']['buku_inventaris']['opsi'] == 'b' ? "selected" : "" ?>>Tidak Ada</option>
				</select>
			</div>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="administrasi_buku_inventaris_keterangan" name="data[detail][administrasi][buku_inventaris][keterangan]" placeholder="keterangan" value="<?php echo $evkin->detail['administrasi']['buku_inventaris']['keterangan'] ?>">
			</div>
		</div>
		<div class="form-group">
			<label for="administrasi_buku_hadir_opsi" class="col-sm-3 control-label">Daftar Hadir Rapat/kegiatan?</label>
			<div class="col-sm-2">
				<select class="form-control" id="administrasi_buku_hadir_opsi" name="data[detail][administrasi][buku_hadir][opsi]">
					<option value="a" <?php echo $evkin->detail['administrasi']['buku_hadir']['opsi'] == 'a' ? "selected" : "" ?>>Ada</option>
					<option value="b" <?php echo $evkin->detail['administrasi']['buku_hadir']['opsi'] == 'b' ? "selected" : "" ?>>Tidak Ada</option>
				</select>
			</div>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="administrasi_buku_hadir_keterangan" name="data[detail][administrasi][buku_hadir][keterangan]" placeholder="keterangan" value="<?php echo $evkin->detail['administrasi']['buku_hadir']['keterangan'] ?>">
			</div>
		</div>
		<h5>Buku Keuangan</h5>
		<div class="form-group">
			<label for="administrasi_buku_kas_opsi" class="col-sm-3 control-label">Buku Kas Tunai?</label>
			<div class="col-sm-2">
				<select class="form-control" id="administrasi_buku_kas_opsi" name="data[detail][administrasi][buku_kas][opsi]">
					<option value="a" <?php echo $evkin->detail['administrasi']['buku_kas']['opsi'] == 'a' ? "selected" : "" ?>>Ada</option>
					<option value="b" <?php echo $evkin->detail['administrasi']['buku_kas']['opsi'] == 'b' ? "selected" : "" ?>>Tidak Ada</option>
				</select>
			</div>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="administrasi_buku_kas_keterangan" name="data[detail][administrasi][buku_kas][keterangan]" placeholder="keterangan" value="<?php echo $evkin->detail['administrasi']['buku_kas']['keterangan'] ?>">
			</div>
		</div>
		<div class="form-group">
			<label for="administrasi_buku_bank_opsi" class="col-sm-3 control-label">Buku Bank?</label>
			<div class="col-sm-2">
				<select class="form-control" id="administrasi_buku_bank_opsi" name="data[detail][administrasi][buku_bank][opsi]">
					<option value="a" <?php echo $evkin->detail['administrasi']['buku_bank']['opsi'] == 'a' ? "selected" : "" ?>>Ada</option>
					<option value="b" <?php echo $evkin->detail['administrasi']['buku_bank']['opsi'] == 'b' ? "selected" : "" ?>>Tidak Ada</option>
				</select>
			</div>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="administrasi_buku_bank_keterangan" name="data[detail][administrasi][buku_bank][keterangan]" placeholder="keterangan" value="<?php echo $evkin->detail['administrasi']['buku_bank']['keterangan'] ?>">
			</div>
		</div>
		<h5>Pencatatan Buku Keuangan</h5>
		<div class="form-group">
			<label for="administrasi_transaksi_opsi" class="col-sm-3 control-label">Apakah Setiap Transaksi Sesuai Dengan RPD?</label>
			<div class="col-sm-2">
				<select class="form-control" id="administrasi_transaksi_opsi" name="data[detail][administrasi][transaksi][opsi]">
					<option value="a" <?php echo $evkin->detail['administrasi']['transaksi']['opsi'] == 'a' ? "selected" : "" ?>>Sesuai</option>
					<option value="b" <?php echo $evkin->detail['administrasi']['transaksi']['opsi'] == 'b' ? "selected" : "" ?>>Tidak Sesuai</option>
				</select>
			</div>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="administrasi_transaksi_keterangan" name="data[detail][administrasi][transaksi][keterangan]" placeholder="keterangan" value="<?php echo $evkin->detail['administrasi']['transaksi']['keterangan'] ?>">
			</div>
		</div>
		<div class="form-group">
			<label for="administrasi_tepat_waktu_opsi" class="col-sm-3 control-label">Setiap Transaksi Di Catat Tepat Waktu?</label>
			<div class="col-sm-2">
				<select class="form-control" id="administrasi_tepat_waktu_opsi" name="data[detail][administrasi][tepat_waktu][opsi]">
					<option value="a" <?php echo $evkin->detail['administrasi']['tepat_waktu']['opsi'] == 'a' ? "selected" : "" ?>>Ya</option>
					<option value="b" <?php echo $evkin->detail['administrasi']['tepat_waktu']['opsi'] == 'b' ? "selected" : "" ?>>Tidak</option>
				</select>
			</div>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="administrasi_tepat_waktu_keterangan" name="data[detail][administrasi][tepat_waktu][keterangan]" placeholder="keterangan" value="<?php echo $evkin->detail['administrasi']['tepat_waktu']['keterangan'] ?>">
			</div>
		</div>
		<div class="form-group">
			<label for="administrasi_dokumentasi_transaksi_opsi" class="col-sm-3 control-label">Apakah Bukti Transaksi Didokumentasikan?</label>
			<div class="col-sm-2">
				<select class="form-control" id="administrasi_dokumentasi_transaksi_opsi" name="data[detail][administrasi][dokumentasi_transaksi][opsi]">
					<option value="a" <?php echo $evkin->detail['administrasi']['dokumentasi_transaksi']['opsi'] == 'a' ? "selected" : "" ?>>Ya</option>
					<option value="b" <?php echo $evkin->detail['administrasi']['dokumentasi_transaksi']['opsi'] == 'b' ? "selected" : "" ?>>Tidak</option>
				</select>
			</div>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="administrasi_dokumentasi_transaksi_keterangan" name="data[detail][administrasi][dokumentasi_transaksi][keterangan]" placeholder="keterangan" value="<?php echo $evkin->detail['administrasi']['dokumentasi_transaksi']['keterangan'] ?>">
			</div>
		</div>
		<div class="form-group">
			<label for="administrasi_bukti_transaksi_opsi" class="col-sm-3 control-label">Apakah Setiap Transaksi Disertai Dengan Bukti Sah?</label>
			<div class="col-sm-2">
				<select class="form-control" id="administrasi_bukti_transaksi_opsi" name="data[detail][administrasi][bukti_transaksi][opsi]">
					<option value="a" <?php echo $evkin->detail['administrasi']['bukti_transaksi']['opsi'] == 'a' ? "selected" : "" ?>>Ya</option>
					<option value="b" <?php echo $evkin->detail['administrasi']['bukti_transaksi']['opsi'] == 'b' ? "selected" : "" ?>>Tidak</option>
				</select>
			</div>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="administrasi_bukti_transaksi_keterangan" name="data[detail][administrasi][bukti_transaksi][keterangan]" placeholder="keterangan" value="<?php echo $evkin->detail['administrasi']['bukti_transaksi']['keterangan'] ?>">
			</div>
		</div>
		<div class="form-group">
			<label for="administrasi_rekapitulasi_opsi" class="col-sm-3 control-label">TPK Membuat Rekapitulasi  Pencatatan? (laporan Penggunaan Dana - Bulanan)</label>
			<div class="col-sm-2">
				<select class="form-control" id="administrasi_rekapitulasi_opsi" name="data[detail][administrasi][rekapitulasi][opsi]">
					<option value="a" <?php echo $evkin->detail['administrasi']['rekapitulasi']['opsi'] == 'a' ? "selected" : "" ?>>Ya</option>
					<option value="b" <?php echo $evkin->detail['administrasi']['rekapitulasi']['opsi'] == 'b' ? "selected" : "" ?>>Tidak</option>
				</select>
			</div>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="administrasi_rekapitulasi_keterangan" name="data[detail][administrasi][rekapitulasi][keterangan]" placeholder="keterangan" value="<?php echo $evkin->detail['administrasi']['rekapitulasi']['keterangan'] ?>">
			</div>
		</div>
		<h5>Laporan</h5>
		<div class="form-group">
			<label for="administrasi_laporan_opsi" class="col-sm-3 control-label">Ketepatan  Penyerahan Laporan Bulanan? (selama Min. 6 Bulan Terakhir)</label>
			<div class="col-sm-2">
				<select class="form-control" id="administrasi_laporan_opsi" name="data[detail][administrasi][laporan][opsi]">
					<option value="a" <?php echo $evkin->detail['administrasi']['laporan']['opsi'] == 'a' ? "selected" : "" ?>>Tepat waktu</option>
					<option value="b" <?php echo $evkin->detail['administrasi']['laporan']['opsi'] == 'b' ? "selected" : "" ?>>Tidak tepat waktu</option>
				</select>
			</div>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="administrasi_laporan_keterangan" name="data[detail][administrasi][laporan][keterangan]" placeholder="keterangan" value="<?php echo $evkin->detail['administrasi']['laporan']['keterangan'] ?>">
			</div>
		</div>

		<h3>3. Kegiatan Usaha Tani</h3>
		<hr>
		<h4>3.1 Teknik Budidaya</h4>
		<div class="form-group">
			<label for="kegiatan_kegiatan_kelompok_opsi" class="col-sm-3 control-label">Kelompok Tani Sudah Melaksanakan Teknik?</label>
			<div class="col-sm-2">
				<select class="form-control" id="kegiatan_kegiatan_kelompok_opsi" name="data[detail][kegiatan][kegiatan_kelompok][opsi]">
					<option value="a" <?php echo $evkin->detail['kegiatan']['kegiatan_kelompok']['opsi'] == 'a' ? "selected" : "" ?>>Sudah</option>
					<option value="b" <?php echo $evkin->detail['kegiatan']['kegiatan_kelompok']['opsi'] == 'b' ? "selected" : "" ?>>Belum</option>
				</select>
			</div>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="kegiatan_kegiatan_kelompok_keterangan" name="data[detail][kegiatan][kegiatan_kelompok][keterangan]" placeholder="keterangan" value="<?php echo $evkin->detail['kegiatan']['kegiatan_kelompok']['keterangan'] ?>">
			</div>
		</div>
		<h5>Jika Belum apa penyebabnya?</h5>
		<div class="form-group">
			<label for="kegiatan_sdm_kelompok_opsi" class="col-sm-3 control-label">Sumber Daya Manusia?</label>
			<div class="col-sm-2">
				<select class="form-control" id="kegiatan_sdm_kelompok_opsi" name="data[detail][kegiatan][sdm_kelompok][opsi]">
					<option value="a" <?php echo $evkin->detail['kegiatan']['sdm_kelompok']['opsi'] == 'a' ? "selected" : "" ?>>Ya</option>
					<option value="b" <?php echo $evkin->detail['kegiatan']['sdm_kelompok']['opsi'] == 'b' ? "selected" : "" ?>>Tidak</option>
				</select>
			</div>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="kegiatan_sdm_kelompok_keterangan" name="data[detail][kegiatan][sdm_kelompok][keterangan]" placeholder="keterangan" value="<?php echo $evkin->detail['kegiatan']['sdm_kelompok']['keterangan'] ?>">
			</div>
		</div>
		<div class="form-group">
			<label for="kegiatan_keuangan_kelompok_opsi" class="col-sm-3 control-label">Kendala Keuangan?</label>
			<div class="col-sm-2">
				<select class="form-control" id="kegiatan_keuangan_kelompok_opsi" name="data[detail][kegiatan][keuangan_kelompok][opsi]">
					<option value="a" <?php echo $evkin->detail['kegiatan']['keuangan_kelompok']['opsi'] == 'a' ? "selected" : "" ?>>Ya</option>
					<option value="b" <?php echo $evkin->detail['kegiatan']['keuangan_kelompok']['opsi'] == 'b' ? "selected" : "" ?>>Tidak</option>
				</select>
			</div>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="kegiatan_keuangan_kelompok_keterangan" name="data[detail][kegiatan][keuangan_kelompok][keterangan]" placeholder="keterangan" value="<?php echo $evkin->detail['kegiatan']['keuangan_kelompok']['keterangan'] ?>">
			</div>
		</div>
		<div class="form-group">
			<label for="kegiatan_sarana_kelompok_opsi" class="col-sm-3 control-label">Sarana?</label>
			<div class="col-sm-2">
				<select class="form-control" id="kegiatan_sarana_kelompok_opsi" name="data[detail][kegiatan][sarana_kelompok][opsi]">
					<option value="a" <?php echo $evkin->detail['kegiatan']['sarana_kelompok']['opsi'] == 'a' ? "selected" : "" ?>>Ya</option>
					<option value="b" <?php echo $evkin->detail['kegiatan']['sarana_kelompok']['opsi'] == 'b' ? "selected" : "" ?>>Tidak</option>
				</select>
			</div>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="kegiatan_sarana_kelompok_keterangan" name="data[detail][kegiatan][sarana_kelompok][keterangan]" placeholder="keterangan" value="<?php echo $evkin->detail['kegiatan']['sarana_kelompok']['keterangan'] ?>">
			</div>
		</div>
		<div class="form-group">
			<div class="col-sm-3">
				<input type="text" class="form-control" id="kegiatan_penyebab_lainnya_kelompok_nama" name="data[detail][kegiatan][penyebab_lainnya_kelompok][nama]" placeholder="lainnya" value="<?php echo $evkin->detail['kegiatan']['penyebab_lainnya_kelompok']['nama'] ?>">
			</div>
			<div class="col-sm-2">
				<select class="form-control" id="kegiatan_penyebab_lainnya_kelompok_opsi" name="data[detail][kegiatan][penyebab_lainnya_kelompok][opsi]">
					<option value="a" <?php echo $evkin->detail['kegiatan']['penyebab_lainnya_kelompok']['opsi'] == 'a' ? "selected" : "" ?>>Ya</option>
					<option value="b" <?php echo $evkin->detail['kegiatan']['penyebab_lainnya_kelompok']['opsi'] == 'b' ? "selected" : "" ?>>Tidak</option>
				</select>
			</div>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="kegiatan_penyebab_lainnya_kelompok_keterangan" name="data[detail][kegiatan][penyebab_lainnya_kelompok][keterangan]" placeholder="keterangan" value="<?php echo $evkin->detail['kegiatan']['penyebab_lainnya_kelompok']['keterangan'] ?>">
			</div>
		</div>
		<div class="form-group">
			<label for="kegiatan_kegiatan_masyarakat_opsi" class="col-sm-3 control-label">Masyarakat Melaksanakan Teknik-teknik Dasar Budidaya Yang Dianjurkan?</label>
			<div class="col-sm-2">
				<select class="form-control" id="kegiatan_kegiatan_masyarakat_opsi" name="data[detail][kegiatan][kegiatan_masyarakat][opsi]">
					<option value="a" <?php echo $evkin->detail['kegiatan']['kegiatan_masyarakat']['opsi'] == 'a' ? "selected" : "" ?>>Sudah</option>
					<option value="b" <?php echo $evkin->detail['kegiatan']['kegiatan_masyarakat']['opsi'] == 'b' ? "selected" : "" ?>>Belum</option>
				</select>
			</div>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="kegiatan_kegiatan_masyarakat_keterangan" name="data[detail][kegiatan][kegiatan_masyarakat][keterangan]" placeholder="keterangan" value="<?php echo $evkin->detail['kegiatan']['kegiatan_masyarakat']['keterangan'] ?>">
			</div>
		</div>
		<h5>Jika Belum apa penyebabnya?</h5>
		<div class="form-group">
			<label for="kegiatan_sdm_masyarakat_opsi" class="col-sm-3 control-label">Sumber Daya Manusia?</label>
			<div class="col-sm-2">
				<select class="form-control" id="kegiatan_sdm_masyarakat_opsi" name="data[detail][kegiatan][sdm_masyarakat][opsi]">
					<option value="a" <?php echo $evkin->detail['kegiatan']['sdm_masyarakat']['opsi'] == 'a' ? "selected" : "" ?>>Ya</option>
					<option value="b" <?php echo $evkin->detail['kegiatan']['sdm_masyarakat']['opsi'] == 'b' ? "selected" : "" ?>>Tidak</option>
				</select>
			</div>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="kegiatan_sdm_masyarakat_keterangan" name="data[detail][kegiatan][sdm_masyarakat][keterangan]" placeholder="keterangan" value="<?php echo $evkin->detail['kegiatan']['sdm_masyarakat']['keterangan'] ?>">
			</div>
		</div>
		<div class="form-group">
			<label for="kegiatan_keuangan_masyarakat_opsi" class="col-sm-3 control-label">Kendala Keuangan?</label>
			<div class="col-sm-2">
				<select class="form-control" id="kegiatan_keuangan_masyarakat_opsi" name="data[detail][kegiatan][keuangan_masyarakat][opsi]">
					<option value="a" <?php echo $evkin->detail['kegiatan']['keuangan_masyarakat']['opsi'] == 'a' ? "selected" : "" ?>>Ya</option>
					<option value="b" <?php echo $evkin->detail['kegiatan']['keuangan_masyarakat']['opsi'] == 'b' ? "selected" : "" ?>>Tidak</option>
				</select>
			</div>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="kegiatan_keuangan_masyarakat_keterangan" name="data[detail][kegiatan][keuangan_masyarakat][keterangan]" placeholder="keterangan" value="<?php echo $evkin->detail['kegiatan']['keuangan_masyarakat']['keterangan'] ?>">
			</div>
		</div>
		<div class="form-group">
			<label for="kegiatan_sarana_masyarakat_opsi" class="col-sm-3 control-label">Sarana?</label>
			<div class="col-sm-2">
				<select class="form-control" id="kegiatan_sarana_masyarakat_opsi" name="data[detail][kegiatan][sarana_masyarakat][opsi]">
					<option value="a" <?php echo $evkin->detail['kegiatan']['sarana_masyarakat']['opsi'] == 'a' ? "selected" : "" ?>>Ya</option>
					<option value="b" <?php echo $evkin->detail['kegiatan']['sarana_masyarakat']['opsi'] == 'b' ? "selected" : "" ?>>Tidak</option>
				</select>
			</div>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="kegiatan_sarana_masyarakat_keterangan" name="data[detail][kegiatan][sarana_masyarakat][keterangan]" placeholder="keterangan" value="<?php echo $evkin->detail['kegiatan']['sarana_masyarakat']['keterangan'] ?>">
			</div>
		</div>
		<div class="form-group">
			<div class="col-sm-3">
				<input type="text" class="form-control" id="kegiatan_penyebab_lainnya_masyarakat_nama" name="data[detail][kegiatan][penyebab_lainnya_masyarakat][nama]" placeholder="lainnya" value="<?php echo $evkin->detail['kegiatan']['penyebab_lainnya_masyarakat']['nama'] ?>">
			</div>
			<div class="col-sm-2">
				<select class="form-control" id="kegiatan_penyebab_lainnya_masyarakat_opsi" name="data[detail][kegiatan][penyebab_lainnya_masyarakat][opsi]">
					<option value="a" <?php echo $evkin->detail['kegiatan']['penyebab_lainnya_masyarakat']['opsi'] == 'a' ? "selected" : "" ?>>Ya</option>
					<option value="b" <?php echo $evkin->detail['kegiatan']['penyebab_lainnya_masyarakat']['opsi'] == 'b' ? "selected" : "" ?>>Tidak</option>
				</select>
			</div>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="kegiatan_penyebab_lainnya_masyarakat_keterangan" name="data[detail][kegiatan][penyebab_lainnya_masyarakat][keterangan]" placeholder="keterangan" value="<?php echo $evkin->detail['kegiatan']['penyebab_lainnya_masyarakat']['keterangan'] ?>">
			</div>
		</div>
		<div class="form-group">
			<label for="kegiatan_persentase" class="col-sm-3 control-label">Jika Sudah Berapa Persen?</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="kegiatan_persentase" name="data[detail][kegiatan][persentase]" placeholder="Persentase" value="<?php echo $evkin->detail['kegiatan']['persentase'] ?>">
			</div>
		</div>
		<h4>3.2 Hasil Produksi Pertanian/Perkebunan/peternakan/pengolahan hasil</h4>
		<h5>Sebelum Program PNPM Mpd Pertanian</h5>
		<div class="form-group">
			<label for="produksi_budidaya_sebelum_opsi" class="col-sm-3 control-label">Dalam Satu Tahun Dilaksanakan Budidaya?</label>
			<div class="col-sm-2">
				<select class="form-control" id="produksi_budidaya_sebelum_opsi" name="data[detail][produksi][budidaya_sebelum][opsi]">
					<option value="a" <?php echo $evkin->detail['produksi']['budidaya_sebelum']['opsi'] == 'tidak' ? "selected" : "" ?>>Tidak Ada</option>
					<option value="a" <?php echo $evkin->detail['produksi']['budidaya_sebelum']['opsi'] == 'a' ? "selected" : "" ?>>1 Kali setahun</option>
					<option value="b" <?php echo $evkin->detail['produksi']['budidaya_sebelum']['opsi'] == 'b' ? "selected" : "" ?>>2 Kali setahun</option>
					<option value="c" <?php echo $evkin->detail['produksi']['budidaya_sebelum']['opsi'] == 'c' ? "selected" : "" ?>>3 Kali setahun</option>
				</select>
			</div>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="produksi_budidaya_sebelum_keterangan" name="data[detail][produksi][budidaya_sebelum][keterangan]" placeholder="Keterangan" value="<?php echo $evkin->detail['produksi']['budidaya_sebelum']['keterangan'] ?>">
			</div>
		</div>
		<div class="form-group">
			<label for="produksi_hasil_sebelum_opsi" class="col-sm-3 control-label">Hasil Yang Didapat Dalam Satu Kali Produksi?</label>
			<div class="col-sm-4">
				<input type="text" class="form-control" id="produksi_hasil_sebelum_keterangan" name="data[detail][produksi][hasil_sebelum][opsi]" placeholder="Hasil Produksi" value="<?php echo $evkin->detail['produksi']['hasil_sebelum']['opsi'] ?>">
			</div>
			<div class="col-sm-4">
				<input type="text" class="form-control" id="produksi_hasil_sebelum_keterangan" name="data[detail][produksi][hasil_sebelum][keterangan]" placeholder="Keterangan" value="<?php echo $evkin->detail['produksi']['hasil_sebelum']['keterangan'] ?>">
			</div>
		</div>
		<div class="form-group">
			<label for="produksi_harga_sebelum_opsi" class="col-sm-3 control-label">Harga Penjualan?</label>
			<div class="col-sm-4">
				<input type="text" class="form-control" id="produksi_harga_sebelum_keterangan" name="data[detail][produksi][harga_sebelum][opsi]" placeholder="Hasil Produksi" value="<?php echo $evkin->detail['produksi']['harga_sebelum']['opsi'] ?>">
			</div>
			<div class="col-sm-4">
				<input type="text" class="form-control" id="produksi_harga_sebelum_keterangan" name="data[detail][produksi][harga_sebelum][keterangan]" placeholder="Keterangan" value="<?php echo $evkin->detail['produksi']['harga_sebelum']['keterangan'] ?>">
			</div>
		</div>
		<h5>Setelah Program PNPM Mpd Pertanian</h5>
		<div class="form-group">
			<label for="produksi_budidaya_setelah_opsi" class="col-sm-3 control-label">Dalam Satu Tahun Dilaksanakan Budidaya?</label>
			<div class="col-sm-2">
				<select class="form-control" id="produksi_budidaya_setelah_opsi" name="data[detail][produksi][budidaya_setelah][opsi]">
					<option value="a" <?php echo $evkin->detail['produksi']['budidaya_setelah']['opsi'] == 'tidak' ? "selected" : "" ?>>Tidak Ada</option>
					<option value="a" <?php echo $evkin->detail['produksi']['budidaya_setelah']['opsi'] == 'a' ? "selected" : "" ?>>1 Kali setahun</option>
					<option value="b" <?php echo $evkin->detail['produksi']['budidaya_setelah']['opsi'] == 'b' ? "selected" : "" ?>>2 kali setahun</option>
					<option value="c" <?php echo $evkin->detail['produksi']['budidaya_setelah']['opsi'] == 'c' ? "selected" : "" ?>>3 kali setahun</option>
				</select>
			</div>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="produksi_budidaya_setelah_keterangan" name="data[detail][produksi][budidaya_setelah][keterangan]" placeholder="Keterangan" value="<?php echo $evkin->detail['produksi']['budidaya_setelah']['keterangan'] ?>">
			</div>
		</div>
		<div class="form-group">
			<label for="produksi_hasil_setelah_opsi" class="col-sm-3 control-label">Hasil Yang Didapat Dalam Satu Kali Produksi?</label>
			<div class="col-sm-4">
				<input type="text" class="form-control" id="produksi_hasil_setelah_keterangan" name="data[detail][produksi][hasil_setelah][opsi]" placeholder="Hasil Produksi" value="<?php echo $evkin->detail['produksi']['hasil_setelah']['opsi'] ?>">
			</div>
			<div class="col-sm-4">
				<input type="text" class="form-control" id="produksi_hasil_setelah_keterangan" name="data[detail][produksi][hasil_setelah][keterangan]" placeholder="Keterangan" value="<?php echo $evkin->detail['produksi']['hasil_setelah']['keterangan'] ?>">
			</div>
		</div>
		<div class="form-group">
			<label for="produksi_harga_setelah_opsi" class="col-sm-3 control-label">Harga Penjualan?</label>
			<div class="col-sm-4">
				<input type="text" class="form-control" id="produksi_harga_setelah_keterangan" name="data[detail][produksi][harga_setelah][opsi]" placeholder="Hasil Produksi" value="<?php echo $evkin->detail['produksi']['harga_setelah']['opsi'] ?>">
			</div>
			<div class="col-sm-4">
				<input type="text" class="form-control" id="produksi_harga_setelah_keterangan" name="data[detail][produksi][harga_setelah][keterangan]" placeholder="Keterangan" value="<?php echo $evkin->detail['produksi']['harga_setelah']['keterangan'] ?>">
			</div>
		</div>

		<h3>4. Kontribusi Masyarakat</h3>
		<hr>
		<div class="form-group">
			<label for="kontribusi_dana_opsi" class="col-sm-3 control-label">Dana</label>
			<div class="col-sm-2">
				<select class="form-control" id="kontribusi_dana_opsi" name="data[detail][kontribusi][dana][opsi]">
					<option value="a" <?php echo $evkin->detail['kontribusi']['dana']['opsi'] == 'a' ? "selected" : "" ?>>Ya</option>
					<option value="b" <?php echo $evkin->detail['kontribusi']['dana']['opsi'] == 'b' ? "selected" : "" ?>>Tidak</option>
				</select>
			</div>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="kontribusi_dana_keterangan" name="data[detail][kontribusi][dana][keterangan]" placeholder="keterangan" value="<?php echo $evkin->detail['kontribusi']['dana']['keterangan'] ?>">
			</div>
		</div>
		<div class="form-group">
			<label for="kontribusi_tenaga_opsi" class="col-sm-3 control-label">Tenaga</label>
			<div class="col-sm-2">
				<select class="form-control" id="kontribusi_tenaga_opsi" name="data[detail][kontribusi][tenaga][opsi]">
					<option value="a" <?php echo $evkin->detail['kontribusi']['tenaga']['opsi'] == 'a' ? "selected" : "" ?>>Ya</option>
					<option value="b" <?php echo $evkin->detail['kontribusi']['tenaga']['opsi'] == 'b' ? "selected" : "" ?>>Tidak</option>
				</select>
			</div>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="kontribusi_tenaga_keterangan" name="data[detail][kontribusi][tenaga][keterangan]" placeholder="keterangan" value="<?php echo $evkin->detail['kontribusi']['tenaga']['keterangan'] ?>">
			</div>
		</div>
		<div class="form-group">
			<label for="kontribusi_material_opsi" class="col-sm-3 control-label">Material</label>
			<div class="col-sm-2">
				<select class="form-control" id="kontribusi_material_opsi" name="data[detail][kontribusi][material][opsi]">
					<option value="a" <?php echo $evkin->detail['kontribusi']['material']['opsi'] == 'a' ? "selected" : "" ?>>Ya</option>
					<option value="b" <?php echo $evkin->detail['kontribusi']['material']['opsi'] == 'b' ? "selected" : "" ?>>Tidak</option>
				</select>
			</div>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="kontribusi_material_keterangan" name="data[detail][kontribusi][material][keterangan]" placeholder="keterangan" value="<?php echo $evkin->detail['kontribusi']['material']['keterangan'] ?>">
			</div>
		</div>
		<div class="form-group">
			<div class="col-sm-3">
				<input type="text" class="form-control" id="kontribusi_lainnya_nama" name="data[detail][kontribusi][lainnya][nama]" placeholder="lainnya" value="<?php echo $evkin->detail['kontribusi']['lainnya']['nama'] ?>">
			</div>
			<div class="col-sm-2">
				<select class="form-control" id="kontribusi_lainnya_opsi" name="data[detail][kontribusi][lainnya][opsi]">
					<option value="a" <?php echo $evkin->detail['kontribusi']['lainnya']['opsi'] == 'a' ? "selected" : "" ?>>Ya</option>
					<option value="b" <?php echo $evkin->detail['kontribusi']['lainnya']['opsi'] == 'b' ? "selected" : "" ?>>Tidak</option>
				</select>
			</div>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="kontribusi_lainnya_keterangan" name="data[detail][kontribusi][lainnya][keterangan]" placeholder="keterangan" value="<?php echo $evkin->detail['kontribusi']['lainnya']['keterangan'] ?>">
			</div>
		</div>

		<h3>5. Kemitraan</h3>
		<hr>
		<h4>5.1 Apakah Aparat Kampung berperan dalam?</h4>
		<div class="form-group">
			<label for="kemitraan_perencanaan_opsi" class="col-sm-3 control-label">Perencanaan Bersama Masyarakat</label>
			<div class="col-sm-2">
				<select class="form-control" id="kemitraan_perencanaan_opsi" name="data[detail][kemitraan][perencanaan][opsi]">
					<option value="a" <?php echo $evkin->detail['kemitraan']['perencanaan']['opsi'] == 'a' ? "selected" : "" ?>>Berperan</option>
					<option value="b" <?php echo $evkin->detail['kemitraan']['perencanaan']['opsi'] == 'b' ? "selected" : "" ?>>Tidak Berperan</option>
				</select>
			</div>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="kemitraan_perencanaan_keterangan" name="data[detail][kemitraan][perencanaan][keterangan]" placeholder="Keterangan" value="<?php echo $evkin->detail['kemitraan']['perencanaan']['keterangan'] ?>">
			</div>
		</div>
		<div class="form-group">
			<label for="kemitraan_mkpp_opsi" class="col-sm-3 control-label">MKPP</label>
			<div class="col-sm-2">
				<select class="form-control" id="kemitraan_mkpp_opsi" name="data[detail][kemitraan][mkpp][opsi]">
					<option value="a" <?php echo $evkin->detail['kemitraan']['mkpp']['opsi'] == 'a' ? "selected" : "" ?>>Berperan</option>
					<option value="b" <?php echo $evkin->detail['kemitraan']['mkpp']['opsi'] == 'b' ? "selected" : "" ?>>Tidak Berperan</option>
				</select>
			</div>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="kemitraan_mkpp_keterangan" name="data[detail][kemitraan][mkpp][keterangan]" placeholder="Keterangan" value="<?php echo $evkin->detail['kemitraan']['mkpp']['keterangan'] ?>">
			</div>
		</div>
		<div class="form-group">
			<label for="kemitraan_mkp1_opsi" class="col-sm-3 control-label">MKP I</label>
			<div class="col-sm-2">
				<select class="form-control" id="kemitraan_mkp1_opsi" name="data[detail][kemitraan][mkp1][opsi]">
					<option value="a" <?php echo $evkin->detail['kemitraan']['mkp1']['opsi'] == 'a' ? "selected" : "" ?>>Berperan</option>
					<option value="b" <?php echo $evkin->detail['kemitraan']['mkp1']['opsi'] == 'b' ? "selected" : "" ?>>Tidak Berperan</option>
				</select>
			</div>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="kemitraan_mkp1_keterangan" name="data[detail][kemitraan][mkp1][keterangan]" placeholder="Keterangan" value="<?php echo $evkin->detail['kemitraan']['mkp1']['keterangan'] ?>">
			</div>
		</div>
		<div class="form-group">
			<label for="kemitraan_mkp2_opsi" class="col-sm-3 control-label">MKP II</label>
			<div class="col-sm-2">
				<select class="form-control" id="kemitraan_mkp2_opsi" name="data[detail][kemitraan][mkp2][opsi]">
					<option value="a" <?php echo $evkin->detail['kemitraan']['mkp2']['opsi'] == 'a' ? "selected" : "" ?>>Berperan</option>
					<option value="b" <?php echo $evkin->detail['kemitraan']['mkp2']['opsi'] == 'b' ? "selected" : "" ?>>Tidak Berperan</option>
				</select>
			</div>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="kemitraan_mkp2_keterangan" name="data[detail][kemitraan][mkp2][keterangan]" placeholder="Keterangan" value="<?php echo $evkin->detail['kemitraan']['mkp2']['keterangan'] ?>">
			</div>
		</div>
		<div class="form-group">
			<label for="kemitraan_mkst_opsi" class="col-sm-3 control-label">MKST</label>
			<div class="col-sm-2">
				<select class="form-control" id="kemitraan_mkst_opsi" name="data[detail][kemitraan][mkst][opsi]">
					<option value="a" <?php echo $evkin->detail['kemitraan']['mkst']['opsi'] == 'a' ? "selected" : "" ?>>Berperan</option>
					<option value="b" <?php echo $evkin->detail['kemitraan']['mkst']['opsi'] == 'b' ? "selected" : "" ?>>Tidak Berperan</option>
				</select>
			</div>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="kemitraan_mkst_keterangan" name="data[detail][kemitraan][mkst][keterangan]" placeholder="Keterangan" value="<?php echo $evkin->detail['kemitraan']['mkst']['keterangan'] ?>">
			</div>
		</div>
		<div class="form-group">
			<label for="kemitraan_pemantauan_opsi" class="col-sm-3 control-label">Pemantauan Pelaksanaan</label>
			<div class="col-sm-2">
				<select class="form-control" id="kemitraan_pemantauan_opsi" name="data[detail][kemitraan][pemantauan][opsi]">
					<option value="a" <?php echo $evkin->detail['kemitraan']['pemantauan']['opsi'] == 'a' ? "selected" : "" ?>>Berperan</option>
					<option value="b" <?php echo $evkin->detail['kemitraan']['pemantauan']['opsi'] == 'b' ? "selected" : "" ?>>Tidak Berperan</option>
				</select>
			</div>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="kemitraan_pemantauan_keterangan" name="data[detail][kemitraan][pemantauan][keterangan]" placeholder="Keterangan" value="<?php echo $evkin->detail['kemitraan']['pemantauan']['keterangan'] ?>">
			</div>
		</div>
		<div class="form-group">
			<label for="kemitraan_mitra_opsi" class="col-sm-3 control-label">Apakah Kelompok Tani Anda Telah Bekerja Sama Dengan Mitra  Atau Lembaga Lainnya Dalam Upaya Meningkatkan Produktivitas? Bila  "ya" (pertanyaan ),  Mitra Yang Terlibat Adalah</label>
			<div class="col-sm-2">
				<select class="form-control" id="kemitraan_mitra_opsi" name="data[detail][kemitraan][mitra][opsi]">
					<option value="a" <?php echo $evkin->detail['kemitraan']['mitra']['opsi'] == 'a' ? "selected" : "" ?>>Ya</option>
					<option value="b" <?php echo $evkin->detail['kemitraan']['mitra']['opsi'] == 'b' ? "selected" : "" ?>>Tidak</option>
				</select>
			</div>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="kemitraan_mitra_keterangan" name="data[detail][kemitraan][mitra][keterangan]" placeholder="keterangan" value="<?php echo $evkin->detail['kemitraan']['mitra']['keterangan'] ?>">
			</div>
		</div>
		<div class="form-group">
			<label for="kemitraan_uptd_kecamatan_opsi" class="col-sm-3 control-label">UPTD Kecamatan</label>
			<div class="col-sm-2">
				<select class="form-control" id="kemitraan_uptd_kecamatan_opsi" name="data[detail][kemitraan][uptd_kecamatan][opsi]">
					<option value="a" <?php echo $evkin->detail['kemitraan']['uptd_kecamatan']['opsi'] == 'a' ? "selected" : "" ?>>Ya</option>
					<option value="b" <?php echo $evkin->detail['kemitraan']['uptd_kecamatan']['opsi'] == 'b' ? "selected" : "" ?>>Tidak</option>
				</select>
			</div>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="kemitraan_uptd_kecamatan_keterangan" name="data[detail][kemitraan][uptd_kecamatan][keterangan]" placeholder="keterangan" value="<?php echo $evkin->detail['kemitraan']['uptd_kecamatan']['keterangan'] ?>">
			</div>
		</div>
		<div class="form-group">
			<label for="kemitraan_pendamping_kampung_opsi" class="col-sm-3 control-label">Pendamping Kampung Pertanian</label>
			<div class="col-sm-2">
				<select class="form-control" id="kemitraan_pendamping_kampung_opsi" name="data[detail][kemitraan][pendamping_kampung][opsi]">
					<option value="a" <?php echo $evkin->detail['kemitraan']['pendamping_kampung']['opsi'] == 'a' ? "selected" : "" ?>>Ya</option>
					<option value="b" <?php echo $evkin->detail['kemitraan']['pendamping_kampung']['opsi'] == 'b' ? "selected" : "" ?>>Tidak</option>
				</select>
			</div>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="kemitraan_pendamping_kampung_keterangan" name="data[detail][kemitraan][pendamping_kampung][keterangan]" placeholder="keterangan" value="<?php echo $evkin->detail['kemitraan']['pendamping_kampung']['keterangan'] ?>">
			</div>
		</div>
		<div class="form-group">
			<label for="kemitraan_bpmd_distrik_opsi" class="col-sm-3 control-label">BPMD Distrik</label>
			<div class="col-sm-2">
				<select class="form-control" id="kemitraan_bpmd_distrik_opsi" name="data[detail][kemitraan][bpmd_distrik][opsi]">
					<option value="a" <?php echo $evkin->detail['kemitraan']['bpmd_distrik']['opsi'] == 'a' ? "selected" : "" ?>>Ya</option>
					<option value="b" <?php echo $evkin->detail['kemitraan']['bpmd_distrik']['opsi'] == 'b' ? "selected" : "" ?>>Tidak</option>
				</select>
			</div>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="kemitraan_bpmd_distrik_keterangan" name="data[detail][kemitraan][bpmd_distrik][keterangan]" placeholder="keterangan" value="<?php echo $evkin->detail['kemitraan']['bpmd_distrik']['keterangan'] ?>">
			</div>
		</div>
		<div class="form-group">
			<label for="kemitraan_pendamping_distrik_opsi" class="col-sm-3 control-label">Pendamping Distrik Pertanian</label>
			<div class="col-sm-2">
				<select class="form-control" id="kemitraan_pendamping_distrik_opsi" name="data[detail][kemitraan][pendamping_distrik][opsi]">
					<option value="a" <?php echo $evkin->detail['kemitraan']['pendamping_distrik']['opsi'] == 'a' ? "selected" : "" ?>>Ya</option>
					<option value="b" <?php echo $evkin->detail['kemitraan']['pendamping_distrik']['opsi'] == 'b' ? "selected" : "" ?>>Tidak</option>
				</select>
			</div>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="kemitraan_pendamping_distrik_keterangan" name="data[detail][kemitraan][pendamping_distrik][keterangan]" placeholder="keterangan" value="<?php echo $evkin->detail['kemitraan']['pendamping_distrik']['keterangan'] ?>">
			</div>
		</div>
		<div class="form-group">
			<label for="kemitraan_penyuluh_opsi" class="col-sm-3 control-label">Penyuluh Pertanian</label>
			<div class="col-sm-2">
				<select class="form-control" id="kemitraan_penyuluh_opsi" name="data[detail][kemitraan][penyuluh][opsi]">
					<option value="a" <?php echo $evkin->detail['kemitraan']['penyuluh']['opsi'] == 'a' ? "selected" : "" ?>>Ya</option>
					<option value="b" <?php echo $evkin->detail['kemitraan']['penyuluh']['opsi'] == 'b' ? "selected" : "" ?>>Tidak</option>
				</select>
			</div>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="kemitraan_penyuluh_keterangan" name="data[detail][kemitraan][penyuluh][keterangan]" placeholder="keterangan" value="<?php echo $evkin->detail['kemitraan']['penyuluh']['keterangan'] ?>">
			</div>
		</div>
		<div class="form-group">
			<label for="kemitraan_bpmd_kabupaten_opsi" class="col-sm-3 control-label">BPMD Kabupaten</label>
			<div class="col-sm-2">
				<select class="form-control" id="kemitraan_bpmd_kabupaten_opsi" name="data[detail][kemitraan][bpmd_kabupaten][opsi]">
					<option value="a" <?php echo $evkin->detail['kemitraan']['bpmd_kabupaten']['opsi'] == 'a' ? "selected" : "" ?>>Ya</option>
					<option value="b" <?php echo $evkin->detail['kemitraan']['bpmd_kabupaten']['opsi'] == 'b' ? "selected" : "" ?>>Tidak</option>
				</select>
			</div>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="kemitraan_bpmd_kabupaten_keterangan" name="data[detail][kemitraan][bpmd_kabupaten][keterangan]" placeholder="keterangan" value="<?php echo $evkin->detail['kemitraan']['bpmd_kabupaten']['keterangan'] ?>">
			</div>
		</div>
		<div class="form-group">
			<div class="col-sm-3">
				<input type="text" class="form-control" id="kemitraan_lainnya_nama" name="data[detail][kemitraan][lainnya][nama]" placeholder="lainnya" value="<?php echo $evkin->detail['kemitraan']['lainnya']['nama'] ?>">
			</div>
			<div class="col-sm-2">
				<select class="form-control" id="kemitraan_lainnya_opsi" name="data[detail][kemitraan][lainnya][opsi]">
					<option value="a" <?php echo $evkin->detail['kemitraan']['lainnya']['opsi'] == 'a' ? "selected" : "" ?>>Ya</option>
					<option value="b" <?php echo $evkin->detail['kemitraan']['lainnya']['opsi'] == 'b' ? "selected" : "" ?>>Tidak</option>
				</select>
			</div>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="kemitraan_lainnya_keterangan" name="data[detail][kemitraan][lainnya][keterangan]" placeholder="keterangan" value="<?php echo $evkin->detail['kemitraan']['lainnya']['keterangan'] ?>">
			</div>
		</div>

		<h3>5. Keberlanjutan Kelompok Tani</h3>
		<hr>
		<div class="form-group">
			<label for="keberlanjutan_bantuan_opsi" class="col-sm-3 control-label">Apakah Ada Bantuan Pendanaan Dari Institusi Desa Atau Lainnya</label>
			<div class="col-sm-2">
				<select class="form-control" id="keberlanjutan_bantuan_opsi" name="data[detail][keberlanjutan][bantuan][opsi]">
					<option value="a" <?php echo $evkin->detail['keberlanjutan']['bantuan']['opsi'] == 'a' ? "selected" : "" ?>>Ada</option>
					<option value="b" <?php echo $evkin->detail['keberlanjutan']['bantuan']['opsi'] == 'b' ? "selected" : "" ?>>Tidak Ada</option>
				</select>
			</div>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="keberlanjutan_bantuan_keterangan" name="data[detail][keberlanjutan][bantuan][keterangan]" placeholder="keterangan" value="<?php echo $evkin->detail['keberlanjutan']['bantuan']['keterangan'] ?>">
			</div>
		</div>
		<div class="form-group">
			<label for="keberlanjutan_dana_desa_opsi" class="col-sm-3 control-label">Alokasi Dana Desa (ADD)</label>
			<div class="col-sm-2">
				<select class="form-control" id="keberlanjutan_dana_desa_opsi" name="data[detail][keberlanjutan][dana_desa][opsi]">
					<option value="a" <?php echo $evkin->detail['keberlanjutan']['dana_desa']['opsi'] == 'a' ? "selected" : "" ?>>Ada</option>
					<option value="b" <?php echo $evkin->detail['keberlanjutan']['dana_desa']['opsi'] == 'b' ? "selected" : "" ?>>Tidak Ada</option>
				</select>
			</div>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="keberlanjutan_dana_desa_keterangan" name="data[detail][keberlanjutan][dana_desa][keterangan]" placeholder="keterangan" value="<?php echo $evkin->detail['keberlanjutan']['dana_desa']['keterangan'] ?>">
			</div>
		</div>
		<div class="form-group">
			<label for="keberlanjutan_institusi_lain_opsi" class="col-sm-3 control-label">Institusi Lain</label>
			<div class="col-sm-2">
				<select class="form-control" id="keberlanjutan_institusi_lain_opsi" name="data[detail][keberlanjutan][institusi_lain][opsi]">
					<option value="a" <?php echo $evkin->detail['keberlanjutan']['institusi_lain']['opsi'] == 'a' ? "selected" : "" ?>>Ada</option>
					<option value="b" <?php echo $evkin->detail['keberlanjutan']['institusi_lain']['opsi'] == 'b' ? "selected" : "" ?>>Tidak Ada</option>
				</select>
			</div>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="keberlanjutan_institusi_lain_keterangan" name="data[detail][keberlanjutan][institusi_lain][keterangan]" placeholder="keterangan" value="<?php echo $evkin->detail['keberlanjutan']['institusi_lain']['keterangan'] ?>">
			</div>
		</div>
		<br>

		<div class="form-group">
			<label for="pembinaan_pjo_kabupaten" class="col-sm-3 control-label">PJO Kabupaten</label>
			<div class="col-sm-6">
				<input type="text" class="form-control" name="data[detail][pembinaan][pjo_kabupaten]" id="pembinaan_pjo_kabupaten" placeholder="PJO Kabupaten" value="<?php echo $evkin->detail['pembinaan']['pjo_kabupaten'] ?>">
			</div>
		</div>
		<div class="form-group">
			<label for="pembinaan_ketua" class="col-sm-3 control-label">Ketua Kelompok Tani</label>
			<div class="col-sm-6">
				<input type="text" class="form-control" name="data[detail][pembinaan][ketua]" id="pembinaan_ketua" placeholder="Ketua Kelompok Tani" value="<?php echo $evkin->detail['pembinaan']['ketua'] ?>">
			</div>
		</div>
		<div class="form-group">
			<label for="pembinaan_pendamping" class="col-sm-3 control-label">Pendamping Distrik</label>
			<div class="col-sm-6">
				<input type="text" class="form-control" name="data[detail][pembinaan][pendamping]" id="pembinaan_pendamping" placeholder="Pendamping Distrik" value="<?php echo $evkin->detail['pembinaan']['pendamping'] ?>">
			</div>
		</div>


		<div class="form-group">
			<div class="col-sm-5 col-sm-offset-2">
				<button type="submit" class="btn btn-lg btn-success"><i class="entypo-check"></i> Simpan</button>
				<a href="<?php echo base_url('evkin') ?>" class="btn btn-lg btn-red pull-right"><i class="entypo-back"></i> Kembali</a>
			</div>
		</div>
	</form>

	<script type="text/javascript">
		jQuery(document).ready(function($){
			$('#kabupaten_id').select2({
				allowClear: false,
				minimumResultsForSearch: 10,
				ajax: {
					url: "<?php echo base_url('evkin/get_lokasi') ?>",
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
					url: "<?php echo base_url('evkin/get_lokasi') ?>",
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
					url: "<?php echo base_url('evkin/get_lokasi') ?>",
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
				if(this.selected) {
					$("#field-nama").slideUp();
					$("#field-nama-lain").slideDown();
				}
				else{
					$("#field-nama").slideDown();
					$("#field-nama-lain").slideUp();
				}
			});

			<?php if(!empty($evkin->kabupaten)): ?> $('#kabupaten_id').select2('data', <?php echo json_encode($evkin->kabupaten) ?>); <?php endif ?>
			<?php if(!empty($evkin->kecamatan)): ?> $('#kecamatan_id').select2('data', <?php echo json_encode($evkin->kecamatan) ?>); <?php endif ?>
			<?php if(!empty($evkin->desa)): ?> $('#desa_id').select2('data', <?php echo json_encode($evkin->desa) ?>); <?php endif ?>
		});
	</script>
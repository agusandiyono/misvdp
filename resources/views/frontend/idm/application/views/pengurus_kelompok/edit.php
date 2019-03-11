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
			<label for="nama" class="col-sm-3 control-label">Nama<span class="text-danger">*</span></label>
			<div class="col-sm-5">
				<input type="text" class="form-control" name="data[nama]" id="nama" data-validate="required" data-message-required="Kolom nama tidak boleh kosong." placeholder="Nama" value="<?php echo $pengurus->nama ?>">
			</div>
		</div>
		<div class="form-group">
			<label for="jabatan" class="col-sm-3 control-label">Jabatan di Kelompok<span class="text-danger">*</span></label>
			<div class="col-sm-5">
				<input type="text" class="form-control" name="data[jabatan]" id="jabatan" data-validate="required" data-message-required="Kolom jabatan tidak boleh kosong." placeholder="Jabatan di Kelompok" value="<?php echo $pengurus->jabatan ?>">
			</div>
		</div>
		<div class="form-group">
			<label for="jenis_kelamin" class="col-sm-3 control-label">Jenis Kelamin<span class="text-danger">*</span></label>
			<div class="col-sm-5">
				<select name="data[jenis_kelamin]" class="form-control" id="jenis_kelamin">
					<option value="laki-laki" <?php echo $pengurus->jenis_kelamin == "laki-laki" ? "selected" : "" ?>>Laki-laki</option>
					<option value="perempuan" <?php echo $pengurus->jenis_kelamin == "perempuan" ? "selected" : "" ?>>Perempuan</option>
				</select>
			</div>
		</div>
		<div class="form-group">
			<label for="pendidikan" class="col-sm-3 control-label">Pendidikan Terakhir<span class="text-danger">*</span></label>
			<div class="col-sm-5">
				<select name="data[pendidikan]" class="form-control" id="pendidikan">
					<option value="SD" <?php echo $pengurus->pendidikan == "SD" ? "selected" : "" ?>>SD</option>
					<option value="SMP" <?php echo $pengurus->pendidikan == "SMP" ? "selected" : "" ?>>SMP</option>
					<option value="SMA" <?php echo $pengurus->pendidikan == "SMA" ? "selected" : "" ?>>SMA</option>
					<option value="D1" <?php echo $pengurus->pendidikan == "D1" ? "selected" : "" ?>>D1</option>
					<option value="D2" <?php echo $pengurus->pendidikan == "D2" ? "selected" : "" ?>>D2</option>
					<option value="D3" <?php echo $pengurus->pendidikan == "D3" ? "selected" : "" ?>>D3</option>
					<option value="S1/D4" <?php echo $pengurus->pendidikan == "S1/D4" ? "selected" : "" ?>>S1/D4</option>
					<option value="S2" <?php echo $pengurus->pendidikan == "S2" ? "selected" : "" ?>>S2</option>
					<option value="S3" <?php echo $pengurus->pendidikan == "S3" ? "selected" : "" ?>>S3</option>
				</select>
			</div>
		</div>
		<div class="form-group">
			<label for="pelatihan" class="col-sm-3 control-label">Jenis Pelatihan yang Pernah diikuti<span class="text-danger">*</span></label>
			<div class="col-sm-5">
				<textarea class="form-control" name="data[pelatihan]" rows="5"><?php echo $pengurus->pelatihan ?></textarea>
			</div>
		</div>
		<div class="form-group">
			<label for="frekuensi_pelatihan" class="col-sm-3 control-label">Frekuensi Pelatihan<span class="text-danger">*</span></label>
			<div class="col-sm-5">
				<textarea class="form-control" name="data[frekuensi_pelatihan]" rows="5"><?php echo $pengurus->frekuensi_pelatihan ?></textarea>
			</div>
		</div>

		<div class="form-group">
			<div class="col-sm-5 col-sm-offset-2">
				<button type="submit" class="btn btn-lg btn-success"><i class="entypo-check"></i> Simpan</button>
				<a href="<?php echo base_url('kegiatan') ?>" class="btn btn-lg btn-red pull-right"><i class="entypo-back"></i> Kembali</a>
			</div>
		</div>
	</form>
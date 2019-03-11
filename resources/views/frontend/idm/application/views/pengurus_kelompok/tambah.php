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
				<input type="text" class="form-control" name="data[nama]" id="nama" data-validate="required" data-message-required="Kolom nama tidak boleh kosong." placeholder="Nama">
			</div>
		</div>
		<div class="form-group">
			<label for="jabatan" class="col-sm-3 control-label">Jabatan di Kelompok<span class="text-danger">*</span></label>
			<div class="col-sm-5">
				<input type="text" class="form-control" name="data[jabatan]" id="jabatan" data-validate="required" data-message-required="Kolom jabatan tidak boleh kosong." placeholder="Jabatan di Kelompok">
			</div>
		</div>
		<div class="form-group">
			<label for="jenis_kelamin" class="col-sm-3 control-label">Jenis Kelamin<span class="text-danger">*</span></label>
			<div class="col-sm-5">
				<select name="data[jenis_kelamin]" class="form-control" id="jenis_kelamin">
					<option value="laki-laki">Laki-laki</option>
					<option value="perempuan">Perempuan</option>
				</select>
			</div>
		</div>
		<div class="form-group">
			<label for="pendidikan" class="col-sm-3 control-label">Pendidikan Terakhir<span class="text-danger">*</span></label>
			<div class="col-sm-5">
				<select name="data[pendidikan]" class="form-control" id="pendidikan">
					<option value="SD">SD</option>
					<option value="SMP">SMP</option>
					<option value="SMA">SMA</option>
					<option value="D1">D1</option>
					<option value="D2">D2</option>
					<option value="D3">D3</option>
					<option value="S1/D4">S1/D4</option>
					<option value="S2">S2</option>
					<option value="S3">S3</option>
				</select>
			</div>
		</div>
		<div class="form-group">
			<label for="pelatihan" class="col-sm-3 control-label">Jenis Pelatihan yang Pernah diikuti<span class="text-danger">*</span></label>
			<div class="col-sm-5">
				<textarea class="form-control" name="data[pelatihan]" rows="5"></textarea>
			</div>
		</div>
		<div class="form-group">
			<label for="frekuensi_pelatihan" class="col-sm-3 control-label">Frekuensi Pelatihan<span class="text-danger">*</span></label>
			<div class="col-sm-5">
				<textarea class="form-control" name="data[frekuensi_pelatihan]" rows="5"></textarea>
			</div>
		</div>

		<div class="form-group">
			<div class="col-sm-5 col-sm-offset-2">
				<button type="submit" class="btn btn-lg btn-success"><i class="entypo-check"></i> Simpan</button>
				<a href="<?php echo base_url('kegiatan') ?>" class="btn btn-lg btn-red pull-right"><i class="entypo-back"></i> Kembali</a>
			</div>
		</div>
	</form>
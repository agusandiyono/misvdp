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
			<label for="jenis" class="col-sm-3 control-label">Jenis Dokumen<span class="text-danger">*</span></label>
			<div class="col-sm-5">
				<div id="field-jenis">
					<select name="data[jenis]" class="form-control" id="jenis" placeholder="Jenis Dokumen">
						<option value="modul">Modul</option>
						<option value="buku">Buku</option>
						<option value="penggunaan">Pedoman Penggunaan</option>
						<option value="juknis">Juknis</option>
						<option value="juklak">Juklak</option>
						<option value="lainnya">Lainnya</option>
					</select>
				</div>
			</div>
		</div>
		<div class="form-group">
			<label for="nama" class="col-sm-3 control-label">Nama Dokumen<span class="text-danger">*</span></label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="nama" name="data[nama]" data-validate="required" data-message-required="Kolom nama dokumen kegiatan tidak boleh kosong." placeholder="Nama Dokumen">
			</div>
		</div>
		<div class="form-group">
			<label for="tanggal" class="col-sm-3 control-label">Tanggal<span class="text-danger">*</span></label>
			<div class="col-sm-5">
				<input type="text" class="form-control datepicker" data-format="dd-mm-yyyy" id="tanggal" name="data[tanggal]" data-validate="required" data-message-required="Kolom tanggal tidak boleh kosong." placeholder="Tanggal">
			</div>
		</div>
		<div class="form-group">
			<label for="dokumen" class="col-sm-3 control-label">Dokumen<span class="text-danger">*</span></label>
			<div class="col-sm-9">
				<input type="file" class="form-control file2 inline btn btn-primary" id="dokumen" name="dokumen" data-label="<i class='glyphicon glyphicon-circle-arrow-up'></i> &nbsp;Upload Dokumen" />
			</div>
		</div>
		

		<div class="form-group">
			<div class="col-sm-5 col-sm-offset-2">
				<button type="submit" class="btn btn-lg btn-success"><i class="entypo-check"></i> Simpan</button>
				<a href="<?php echo base_url('kegiatan') ?>" class="btn btn-lg btn-red pull-right"><i class="entypo-back"></i> Kembali</a>
			</div>
		</div>
	</form>
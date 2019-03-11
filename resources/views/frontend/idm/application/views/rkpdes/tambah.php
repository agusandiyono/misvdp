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
			<div class="col-sm-5">
				<input type="text" name="data[kabupaten_id]" class="form-control" id="kabupaten_id" placeholder="Kabupaten" <?php echo !empty($this->session->userdata('kabupaten_id')) ? 'readonly' : "" ?>>
			</div>
		</div>
		<div class="form-group">
			<label for="kecamatan_id" class="col-sm-3 control-label">Kecamatan<span class="text-danger">*</span></label>
			<div class="col-sm-5">
				<input type="text" name="data[kecamatan_id]" class="form-control" id="kecamatan_id" placeholder="Kecamatan" <?php echo !empty($this->session->userdata('kecamatan_id')) ? 'readonly' : "" ?>>
			</div>
		</div>
		<div class="form-group">
			<label for="desa_id" class="col-sm-3 control-label">Desa<span class="text-danger">*</span></label>
			<div class="col-sm-5">
				<input type="text" name="data[desa_id]" class="form-control" id="desa_id" placeholder="Desa" <?php echo !empty($this->session->userdata('desa_id')) ? 'readonly' : "" ?>>
			</div>
		</div>
		<div class="form-group">
			<label for="jumlah_dana_desa" class="col-sm-3 control-label">Jumlah Dana Desa</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="jumlah_dana_desa" name="data[jumlah_dana_desa]" placeholder="Jumlah Dana Desa">
			</div>
		</div>
		<div class="form-group">
			<label for="jumlah_alokasi_dana_desa" class="col-sm-3 control-label">Jumlah Alokasi Dana Desa</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="jumlah_alokasi_dana_desa" name="data[jumlah_alokasi_dana_desa]" placeholder="Jumlah Alokasi Dana Desa">
			</div>
		</div>
		<div class="form-group">
			<label for="jenis" class="col-sm-3 control-label">Jenis Kegiatan Pertanian</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="jenis" name="data[jenis]" placeholder="Jenis Kegiatan Pertanian">
			</div>
		</div>
		<div class="form-group">
			<label for="volume" class="col-sm-3 control-label">Volume</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="volume" name="data[volume]" placeholder="Volume">
			</div>
		</div>
		<div class="form-group">
			<label for="nilai" class="col-sm-3 control-label">Nilai</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="nilai" name="data[nilai]" placeholder="Nilai">
			</div>
		</div>
		<div class="form-group">
			<label for="sumber_dana_desa" class="col-sm-3 control-label">Sumber Dana Desa</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="sumber_dana_desa" name="data[sumber_dana_desa]" placeholder="Sumber Dana Desa">
			</div>
		</div>
		<div class="form-group">
			<label for="sumber_alokasi_dana_desa" class="col-sm-3 control-label">Sumber Alokasi Dana Desa</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="sumber_alokasi_dana_desa" name="data[sumber_alokasi_dana_desa]" placeholder="Sumber Alokasi Dana Desa">
			</div>
		</div>
		<div class="form-group">
			<label for="pengelola" class="col-sm-3 control-label">Pengelola Dana Desa</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="pengelola" name="data[pengelola]" placeholder="Pengelola Dana Desa">
			</div>
		</div>
		<div class="form-group">
			<label for="keterangan" class="col-sm-3 control-label">Keterangan</label>
			<div class="col-sm-5">
				<textarea class="form-control" name="data[keterangan]" id="keterangan" rows="5"></textarea>
			</div>
		</div>

		<div class="form-group">
			<div class="col-sm-5 col-sm-offset-2">
				<button type="submit" class="btn btn-lg btn-success"><i class="entypo-check"></i> Simpan</button>
				<a href="<?php echo base_url('rkpdes') ?>" class="btn btn-lg btn-red pull-right"><i class="entypo-back"></i> Kembali</a>
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
					url: "<?php echo base_url('rkpdes/get_lokasi') ?>",
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
			//	minimumInputLength: 3,
				allowClear: false,
				minimumResultsForSearch: 10,
				ajax: {
					url: "<?php echo base_url('rkpdes/get_lokasi') ?>",
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
			//	minimumInputLength: 3,
				allowClear: false,
				minimumResultsForSearch: 10,
				ajax: {
					url: "<?php echo base_url('rkpdes/get_lokasi') ?>",
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
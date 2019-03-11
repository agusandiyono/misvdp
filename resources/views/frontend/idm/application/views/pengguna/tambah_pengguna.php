	<?php if ($validation_errors = validation_errors()) : ?>
        <div class="alert alert-danger"><?php echo $validation_errors;?></div>
    <?php endif;?>
    <?php if (isset($error)): ?>
        <div class="alert alert-danger"><?php echo $error;?></div>
    <?php endif;?>
	<form role="form" method="post" class="form-horizontal form-groups-bordered validate">
		<input type="hidden" name="<?php echo $this->security->get_csrf_token_name() ?>" id="csrf" value="<?php echo $this->security->get_csrf_hash() ?>" />
		<div class="form-group">
			<label for="no_pendamping" class="col-sm-3 control-label">Nomor Pendamping</label>
			<div class="col-sm-5">
				<input type="text" name="data[no_pendamping]" class="form-control" id="no_pendamping" data-validate="required" data-message-required="Kolom nomor pendamping tidak boleh kosong." placeholder="Nomor Pendamping" value="<?php echo set_value('data[no_pendamping]') ?>" readonly>
			</div>
		</div>
		<div class="form-group">
			<label for="provinsi_id" class="col-sm-3 control-label">Provinsi</label>
			<div class="col-sm-5">
				<select name="data[provinsi_id]" class="form-control" id="provinsi_id" placeholder="Provinsi">
					<option></option>
				<?php foreach ($list_provinsi as $provinsi): ?>
					<option value="<?php echo $provinsi->provinsi_code ?>"><?php echo $provinsi->provinsi_code ?> - <?php echo $provinsi->provinsi_name ?></option>
				<?php endforeach ?>
				</select>
			</div>
		</div>
		<div class="form-group">
			<label for="kabupaten_id" class="col-sm-3 control-label">Kabupaten</label>
			<div class="col-sm-5">
				<input type="text" name="data[kabupaten_id]" class="form-control" id="kabupaten_id" placeholder="Kabupaten">
			</div>
		</div>
		<div class="form-group">
			<label for="kecamatan_id" class="col-sm-3 control-label">Kecamatan</label>
			<div class="col-sm-5">
				<input type="text" name="data[kecamatan_id]" class="form-control" id="kecamatan_id" placeholder="Kecamatan">
			</div>
		</div>
		<div class="form-group">
			<label for="desa_id" class="col-sm-3 control-label">Desa</label>
			<div class="col-sm-5">
				<input type="text" name="data[desa_id]" class="form-control" id="desa_id" placeholder="Desa">
			</div>
		</div>
		<div class="form-group">
			<label for="username" class="col-sm-3 control-label">Username</label>
			<div class="col-sm-5">
				<input type="text" name="data[username]" class="form-control" id="username" data-validate="required" data-message-required="Kolom username tidak boleh kosong." placeholder="Username" value="<?php echo set_value('data[username]') ?>">
			</div>
		</div>
		<div class="form-group">
			<label for="first-name" class="col-sm-3 control-label">Nama Depan</label>
			<div class="col-sm-5">
				<input type="text" name="data[first_name]" class="form-control" id="first-name" data-validate="required" data-message-required="Kolom nama depan tidak boleh kosong." placeholder="Nama Depan" value="<?php echo set_value('data[first_name]') ?>">
			</div>
		</div>
		<div class="form-group">
			<label for="last-name" class="col-sm-3 control-label">Nama Belakang</label>
			<div class="col-sm-5">
				<input type="text" name="data[last_name]" class="form-control" id="last-name" data-validate="required" data-message-required="Kolom nama belakang tidak boleh kosong." placeholder="Nama Belakang" value="<?php echo set_value('data[last_name]') ?>">
			</div>
		</div>
		<div class="form-group">
			<label for="email" class="col-sm-3 control-label">Email</label>
			<div class="col-sm-5">
				<input type="text" name="data[email]" class="form-control" id="email" data-validate="required,email" data-message-required="Kolom email tidak boleh kosong." data-message-email="Masukkan alamat email yang valid." placeholder="Email" value="<?php echo set_value('data[email]') ?>">
			</div>
		</div>
		<div class="form-group">
			<label for="password" class="col-sm-3 control-label">Password</label>
			<div class="col-sm-5">
				<input type="password" name="data[password]" class="form-control" id="password" data-validate="required,minlength[6]" data-message-required="Kolom password tidak boleh kosong." placeholder="Password">
			</div>
		</div>
		<div class="form-group">
			<label for="confirm_password" class="col-sm-3 control-label">Ulangi Password</label>
			<div class="col-sm-5">
				<input type="password" name="confirm_password" class="form-control" id="confirm_password" data-validate="required,minlength[6],equalTo[#password]" data-message-required="Kolom ulangi password tidak boleh kosong." placeholder="Ulangi Password">
			</div>
		</div>
		<div class="form-group">
			<label for="edit_saran" class="col-sm-3 control-label">&nbsp;</label>
			<div class="col-sm-5">
				<div class="checkbox checkbox-replace color-blue">
					<input type="checkbox" name="data[edit_saran]" id="edit_saran">
					<label>Dapat mengedit saran seluruh kegiatan yang dicover</label>
				</div>
			</div>
		</div>
		<div class="form-group">
			<label class="col-sm-3 control-label">Hak Akses</label>
			<div class="col-sm-5">
				<select name="group" class="form-control">
				<?php
                    foreach ($user_group as $group) {
                        echo '<option value="'.$group->id.'">'.ucfirst($group->name).'</option>';
                    }
                ?>
				</select>
			</div>
		</div>
		<div class="form-group">
			<label class="col-sm-3 control-label">Status</label>
			<div class="col-sm-5">
				<select name="status" class="form-control">
					<option value="1">Aktif</option>
					<option value="0">Tidak Aktif</option>
				</select>
			</div>
		</div>
		<div class="form-group">
			<div class="col-sm-5 col-sm-offset-2">
				<button type="submit" class="btn btn-lg btn-success"><i class="entypo-check"></i> Simpan</button>
				<a href="<?php echo base_url($this->router->fetch_class()) ?>" class="btn btn-lg btn-red pull-right"><i class="entypo-back"></i> Kembali</a>
			</div>
		</div>
	</form>
	<script>
		jQuery(document).ready(function($){
			$('#provinsi_id').select2({
				allowClear: true,
				minimumResultsForSearch: 10
			});
			$('#kabupaten_id').select2({
				minimumInputLength: 3,
				allowClear: true,
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
				minimumInputLength: 3,
				allowClear: true,
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
				minimumInputLength: 3,
				allowClear: true,
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

			$('#provinsi_id,#kabupaten_id,#kecamatan_id,#desa_id').on("select2-selecting", function(e) {
				$.get("<?php echo base_url('pengguna/get_no_pendamping') ?>", {where: $(this).attr("id"), value: e.val}, function(response){
					if(response){
						$('#no_pendamping').val(response);
					}
				});
			});

			$('#provinsi_id,#kabupaten_id,#kecamatan_id,#desa_id').on("select2-clearing", function(e) {
				var no_pendamping = $("#no_pendamping").val().split('.');

				if($(this).attr("id") == "provinsi_id"){
					$("#no_pendamping").val("");
				}
				else if($(this).attr("id") == "kabupaten_id"){
					no_pendamping.splice(1,1);
					$("#no_pendamping").val(no_pendamping.join("."));
				}
				else if($(this).attr("id") == "kecamatan_id"){
					no_pendamping.splice(2,1);
					$("#no_pendamping").val(no_pendamping.join("."));
				}
				else if($(this).attr("id") == "desa_id"){
					no_pendamping.splice(3,1);
					$("#no_pendamping").val(no_pendamping.join("."));
				}
			});
		});
	</script>
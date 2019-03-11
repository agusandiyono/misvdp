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
				<input type="text" class="form-control" id="no_pendamping" placeholder="Nomor Pendamping" disabled="disabled" value="<?php echo $user->no_pendamping ?>">
			</div>
		</div>
		<div class="form-group">
			<label for="provinsi_id" class="col-sm-3 control-label">Provinsi</label>
			<div class="col-sm-5">
				<select name="data[provinsi_id]" class="form-control" id="provinsi_id" placeholder="Provinsi">
					<option></option>
				<?php foreach ($list_provinsi as $provinsi): ?>
					<option value="<?php echo $provinsi->provinsi_code ?>" <?php echo $provinsi->provinsi_code == $user->provinsi_id ? "selected" : "" ?>><?php echo $provinsi->provinsi_code ?> - <?php echo $provinsi->provinsi_name ?></option>
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
				<input type="text" class="form-control" id="username" placeholder="Username" disabled="disabled" value="<?php echo $user->username ?>">
			</div>
		</div>
		<div class="form-group">
			<label for="first-name" class="col-sm-3 control-label">Nama Depan</label>
			<div class="col-sm-5">
				<input type="text" name="data[first_name]" class="form-control" id="first-name" placeholder="Nama Depan" value="<?php echo $user->first_name ?>">
			</div>
		</div>
		<div class="form-group">
			<label for="last-name" class="col-sm-3 control-label">Nama Belakang</label>
			<div class="col-sm-5">
				<input type="text" name="data[last_name]" class="form-control" id="last-name" placeholder="Nama Belakang" value="<?php echo $user->last_name ?>">
			</div>
		</div>
		<div class="form-group">
			<label for="email" class="col-sm-3 control-label">Email</label>
			<div class="col-sm-5">
				<input type="text" name="data[email]" class="form-control" id="email" placeholder="Email" value="<?php echo $user->email ?>">
			</div>
		</div>
		<div class="form-group">
			<label for="password" class="col-sm-3 control-label">Password</label>
			<div class="col-sm-5">
				<input type="password" name="data[password]" class="form-control" id="password" data-validate="minlength[6]" data-message-minlength="Password minimal 6 karakter." placeholder="Password">
				<p class="text-danger">Password biarkan kosong jika tidak diubah.</p>
			</div>
		</div>
		<div class="form-group">
			<label for="confirm_password" class="col-sm-3 control-label">Ulangi Password</label>
			<div class="col-sm-5">
				<input type="password" name="confirm_password" class="form-control" id="confirm_password" data-validate="minlength[6],equalTo[#password]" data-message-minlength="Password minimal 6 karakter." placeholder="Ulangi Password">
				<p class="text-danger">Password biarkan kosong jika tidak diubah.</p>
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
                        if($current_group->id == $group->id){
                        	echo '<option value="'.$group->id.'" selected>'.ucfirst($group->name).'</option>';
                        }
                        else{
                        	echo '<option value="'.$group->id.'">'.ucfirst($group->name).'</option>';
                        }
                    }
                ?>
				</select>
			</div>
		</div>
		<div class="form-group">
			<label class="col-sm-3 control-label">Status</label>
			<div class="col-sm-5">
				<select name="status" class="form-control">
					<option value="1" <?php echo ($user->active == 1? "selected":"") ?>>Aktif</option>
					<option value="0" <?php echo ($user->active == 0? "selected":"") ?>>Tidak Aktif</option>
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

			<?php if(!empty($user->kabupaten)): ?> $('#kabupaten_id').select2('data', <?php echo json_encode($user->kabupaten) ?>); <?php endif ?>
			<?php if(!empty($user->kecamatan)): ?> $('#kecamatan_id').select2('data', <?php echo json_encode($user->kecamatan) ?>); <?php endif ?>
			<?php if(!empty($user->desa)): ?> $('#desa_id').select2('data', <?php echo json_encode($user->desa) ?>); <?php endif ?>
		});
	</script>
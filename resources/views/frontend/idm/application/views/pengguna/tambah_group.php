	<?php if ($validation_errors = validation_errors()) : ?>
        <div class="alert alert-danger"><?php echo $validation_errors;?></div>
    <?php endif;?>
    <?php if (isset($error)): ?>
        <div class="alert alert-danger"><?php echo $error;?></div>
    <?php endif;?>
	<form role="form" method="post" class="form-horizontal form-groups-bordered validate">
		<input type="hidden" name="<?php echo $this->security->get_csrf_token_name() ?>" id="csrf" value="<?php echo $this->security->get_csrf_hash() ?>" />	
		<div class="form-group">
			<label for="name" class="col-sm-3 control-label">Nama Group</label>
			<div class="col-sm-5">
				<input type="text" name="data[name]" class="form-control" id="name" data-validate="required" data-message-required="Kolom nama group tidak boleh kosong." placeholder="Nama Group" value="<?php echo set_value('data[name]') ?>">
			</div>
		</div>
		<div class="form-group">
			<label for="description" class="col-sm-3 control-label">Deskripsi Group</label>
			<div class="col-sm-5">
				<textarea name="data[description]" class="form-control autogrow" id="description" data-validate="required" data-message-required="Kolom deskripsi group tidak boleh kosong." placeholder="Deskripsi Group" rows="5"><?php echo set_value('data[description]') ?></textarea>
			</div>
		</div>
		<div class="form-group">
			<div class="col-sm-5 col-sm-offset-2">
				<button type="submit" class="btn btn-lg btn-success"><i class="entypo-check"></i> Simpan</button>
				<a href="<?php echo base_url($this->router->fetch_class().'#list-group') ?>" class="btn btn-lg btn-red pull-right"><i class="entypo-back"></i> Kembali</a>
			</div>
		</div>
	</form>
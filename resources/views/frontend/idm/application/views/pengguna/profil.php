	<?php if ($this->session->flashdata('success_message')) : ?>
        <div class="alert alert-success"><?php echo $this->session->flashdata('success_message'); ?></div>
    <?php endif;?>
    <?php if ($this->session->flashdata('error_message')) : ?>
        <div class="alert alert-danger"><?php echo $this->session->flashdata('error_message'); ?></div>
    <?php endif;?>
	<?php if ($validation_errors = validation_errors()) : ?>
        <div class="alert alert-danger"><?php echo $validation_errors;?></div>
    <?php endif;?>
    <?php if (isset($error)): ?>
        <div class="alert alert-danger"><?php echo $error;?></div>
    <?php endif;?>
    <form role="form" method="post" class="form-horizontal form-groups-bordered validate">
		<div class="form-group">
			<label for="no_pendamping" class="col-sm-3 control-label">Nomor Pendamping</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="no_pendamping" placeholder="Nomor Pendamping" disabled="disabled" value="<?php echo $user->no_pendamping ?>">
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
			<div class="col-sm-5 col-sm-offset-2">
				<button type="submit" class="btn btn-lg btn-success"><i class="entypo-check"></i> Simpan</button>
				<a href="<?php echo base_url() ?>" class="btn btn-lg btn-red pull-right"><i class="entypo-back"></i> Kembali</a>
			</div>
		</div>
	</form>

	<script>
		jQuery(document).ready(function($){
			var counterInformal = <?php echo isset($biodata['informal']) ? count($biodata['informal']) : 0 ?>,
				counterOrganisasi = <?php echo isset($biodata['organisasi']) ? count($biodata['organisasi']) : 0 ?>,
				counterPengalaman = <?php echo isset($biodata['pengalaman']) ? count($biodata['pengalaman']) : 0 ?>,
				counterKemampuan = <?php echo isset($biodata['kemampuan']) ? count($biodata['kemampuan']) : 0 ?>;
			$('#add-informal').click(function(){
				var fieldInformal = '<div class="form-group"><label class="col-sm-2 control-label"></label><div class="col-sm-3"><input type="text" name="biodata[informal]['+counterInformal+'][tahun]" class="form-control" data-validate="required" placeholder="Tahun"></div><div class="col-sm-5"><textarea name="biodata[informal]['+counterInformal+'][keterangan]" cols="30" rows="5" class="form-control" data-validate="required" placeholder="Keterangan"></textarea></div><div class="col-sm-2"><a href="javascript:;" class="btn btn-red btn-icon icon-left pull-right hapus-informal"><i class="entypo-cancel"></i>Hapus</a></div></div>';

				$(fieldInformal).insertBefore(".pendidikan-informal");

				counterInformal++;
			});
			$('#add-organisasi').click(function(){
				var fieldOrganisasi = '<div class="form-group"><label class="col-sm-2 control-label"></label><div class="col-sm-3"><input type="text" name="biodata[organisasi]['+counterOrganisasi+'][tahun]" class="form-control" data-validate="required" placeholder="Tahun"></div><div class="col-sm-5"><textarea name="biodata[organisasi]['+counterOrganisasi+'][keterangan]" cols="30" rows="5" class="form-control" data-validate="required" placeholder="Keterangan"></textarea></div><div class="col-sm-2"><a href="javascript:;" class="btn btn-red btn-icon icon-left pull-right hapus-organisasi"><i class="entypo-cancel"></i>Hapus</a></div></div>';

				$(fieldOrganisasi).insertBefore(".organisasi");

				counterOrganisasi++;
			});
			$('#add-pengalaman').click(function(){
				var fieldPengalaman = '<div class="form-group"><label class="col-sm-3"></label><div class="col-sm-5"><input type="text" name="biodata[pengalaman]['+counterPengalaman+']" class="form-control" data-validate="required" placeholder="Pengalaman Kerja"></div><div class="col-sm-2"><a href="javascript:;" class="btn btn-red btn-icon icon-left pull-right hapus-pengalaman"><i class="entypo-cancel"></i>Hapus</a></div></div>';

				$(fieldPengalaman).insertBefore(".pengalaman");

				counterPengalaman++;
			});
			$('#add-kemampuan').click(function(){
				var fieldKemampuan = '<div class="form-group"><label class="col-sm-3"></label><div class="col-sm-5"><input type="text" name="biodata[kemampuan]['+counterKemampuan+']" class="form-control" data-validate="required" placeholder="Kemampuan"></div><div class="col-sm-2"><a href="javascript:;" class="btn btn-red btn-icon icon-left pull-right hapus-kemampuan"><i class="entypo-cancel"></i>Hapus</a></div></div>';

				$(fieldKemampuan).insertBefore(".kemampuan");

				counterKemampuan++;
			});

			$(document).on('click', ".hapus-informal, .hapus-organisasi, .hapus-kemampuan, .hapus-pengalaman", function(){
				$(this).closest(".form-group").remove();
			});

			$('#form-biodata').on('submit', function(e) {
				var requiredField = $(this).find("[data-validate]");

				requiredField.each(function () {
				    $(this).rules("add", {
				        required: true
				    });
				});
			});
		});
	</script>
	<?php if ($this->session->flashdata('success_message')) : ?>
        <div class="alert alert-success"><?php echo $this->session->flashdata('success_message'); ?></div>
    <?php endif;?>
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
				<input type="text" name="data[name]" class="form-control" id="name" data-validate="required" data-message-required="Kolom nama group tidak boleh kosong." placeholder="Nama Group" value="<?php echo $group->name ?>">
			</div>
		</div>
		<div class="form-group">
			<label for="description" class="col-sm-3 control-label">Deskripsi Group</label>
			<div class="col-sm-5">
				<textarea name="data[description]" class="form-control autogrow" id="description" data-validate="required" data-message-required="Kolom deskripsi group tidak boleh kosong." placeholder="Deskripsi Group" rows="5"><?php echo $group->description ?></textarea>
			</div>
		</div>
		<div class="form-group">
			<div class="col-sm-8 col-sm-offset-2">			
				<h4>Hak akses group</h4>
				<table class="table table-condensed table-bordered table-hover table-striped">
					<thead>
						<tr>
							<th>Hak Akses</th>
							<th></th>
						</tr>
					</thead>
					<tbody>
						<tr class="full-access">
							<td>
								<h4>Full Akses Manager</h4>
								<p class="text-danger">Dapat mengakses seluruh fitur manager</p>
							</td>
							<td>
								<div class="checkbox checkbox-replace color-blue">
									<input type="checkbox" id="full-access" name="access[all][]" value="all" <?php echo (isset($access['all']) ? 'checked="checked"':'') ?>>
								</div>
							</td>
						</tr>
						<tr class="manager">
							<td>
								<h4>Akses Halaman Aplikasi</h4>
								<p class="text-danger">Dapat mengakses sebagian/keseluruhan fitur aplikasi</p>
							</td>
							<td>
								<div class="checkbox checkbox-replace color-blue">
									<input type="checkbox" class="access manager" name="access[manager_access][]" id="manager-access" value="view" <?php echo (isset($access['manager_access']['view']) ? 'checked="checked"':'') ?> <?php echo (isset($access['agent_access']) ? 'disabled="disabled"':'') ?>>
								</div>
							</td>
						</tr>
						<tr class="sub-manager">
							<td><h4><strong>Data Kegiatan</strong></h4></td>
							<td></td>
						</tr>
						<tr class="sub-manager sub-permission">
							<td><h4>Lihat Data Kegiatan</h4></td>
							<td>
								<div class="checkbox checkbox-replace color-blue">
									<input type="checkbox" class="access" name="access[kegiatan][]" value="view" <?php echo (isset($access['kegiatan']['view']) ? 'checked="checked"':'') ?>>
								</div>
							</td>
						</tr>
						<tr class="sub-manager sub-permission">
							<td><h4>Tambah Data Kegiatan</h4></td>
							<td>
								<div class="checkbox checkbox-replace color-blue">
									<input type="checkbox" class="access" name="access[kegiatan][]" value="add" <?php echo (isset($access['kegiatan']['add']) ? 'checked="checked"':'') ?>>
								</div>
							</td>
						</tr>
						<tr class="sub-manager sub-permission">
							<td><h4>Edit Data Kegiatan</h4></td>
							<td>
								<div class="checkbox checkbox-replace color-blue">
									<input type="checkbox" class="access" name="access[kegiatan][]" value="edit" <?php echo (isset($access['kegiatan']['edit']) ? 'checked="checked"':'') ?>>
								</div>
							</td>
						</tr>
						<tr class="sub-manager sub-permission">
							<td><h4>Hapus Data Kegiatan</h4></td>
							<td>
								<div class="checkbox checkbox-replace color-blue">
									<input type="checkbox" class="access" name="access[kegiatan][]" value="delete" <?php echo (isset($access['kegiatan']['delete']) ? 'checked="checked"':'') ?>>
								</div>
							</td>
						</tr>
						<tr class="sub-manager">
							<td><h4><strong>Data Profil Kelompok</strong></h4></td>
							<td></td>
						</tr>
						<tr class="sub-manager sub-permission">
							<td><h4>Lihat Data Profil Kelompok</h4></td>
							<td>
								<div class="checkbox checkbox-replace color-blue">
									<input type="checkbox" class="access" name="access[profil_kelompok][]" value="view" <?php echo (isset($access['profil_kelompok']['view']) ? 'checked="checked"':'') ?>>
								</div>
							</td>
						</tr>
						<tr class="sub-manager sub-permission">
							<td><h4>Tambah Data Profil Kelompok</h4></td>
							<td>
								<div class="checkbox checkbox-replace color-blue">
									<input type="checkbox" class="access" name="access[profil_kelompok][]" value="add" <?php echo (isset($access['profil_kelompok']['add']) ? 'checked="checked"':'') ?>>
								</div>
							</td>
						</tr>
						<tr class="sub-manager sub-permission">
							<td><h4>Edit Data Profil Kelompok</h4></td>
							<td>
								<div class="checkbox checkbox-replace color-blue">
									<input type="checkbox" class="access" name="access[profil_kelompok][]" value="edit" <?php echo (isset($access['profil_kelompok']['edit']) ? 'checked="checked"':'') ?>>
								</div>
							</td>
						</tr>
						<tr class="sub-manager sub-permission">
							<td><h4>Hapus Data Profil Kelompok</h4></td>
							<td>
								<div class="checkbox checkbox-replace color-blue">
									<input type="checkbox" class="access" name="access[profil_kelompok][]" value="delete" <?php echo (isset($access['profil_kelompok']['delete']) ? 'checked="checked"':'') ?>>
								</div>
							</td>
						</tr>
						<tr class="sub-manager">
							<td><h4><strong>Data Evaluasi Kinerja</strong></h4></td>
							<td></td>
						</tr>
						<tr class="sub-manager sub-permission">
							<td><h4>Lihat Data Evaluasi Kinerja</h4></td>
							<td>
								<div class="checkbox checkbox-replace color-blue">
									<input type="checkbox" class="access" name="access[evkin][]" value="view" <?php echo (isset($access['evkin']['view']) ? 'checked="checked"':'') ?>>
								</div>
							</td>
						</tr>
						<tr class="sub-manager sub-permission">
							<td><h4>Tambah Data Evaluasi Kinerja</h4></td>
							<td>
								<div class="checkbox checkbox-replace color-blue">
									<input type="checkbox" class="access" name="access[evkin][]" value="add" <?php echo (isset($access['evkin']['add']) ? 'checked="checked"':'') ?>>
								</div>
							</td>
						</tr>
						<tr class="sub-manager sub-permission">
							<td><h4>Edit Data Evaluasi Kinerja</h4></td>
							<td>
								<div class="checkbox checkbox-replace color-blue">
									<input type="checkbox" class="access" name="access[evkin][]" value="edit" <?php echo (isset($access['evkin']['edit']) ? 'checked="checked"':'') ?>>
								</div>
							</td>
						</tr>
						<tr class="sub-manager sub-permission">
							<td><h4>Hapus Data Evaluasi Kinerja</h4></td>
							<td>
								<div class="checkbox checkbox-replace color-blue">
									<input type="checkbox" class="access" name="access[evkin][]" value="delete" <?php echo (isset($access['evkin']['delete']) ? 'checked="checked"':'') ?>>
								</div>
							</td>
						</tr>
						<tr class="sub-manager">
							<td><h4><strong>Data Pengurus Kelompok</strong></h4></td>
							<td></td>
						</tr>
						<tr class="sub-manager sub-permission">
							<td><h4>Lihat Data Pengurus Kelompok</h4></td>
							<td>
								<div class="checkbox checkbox-replace color-blue">
									<input type="checkbox" class="access" name="access[pengurus_kelompok][]" value="view" <?php echo (isset($access['pengurus_kelompok']['view']) ? 'checked="checked"':'') ?>>
								</div>
							</td>
						</tr>
						<tr class="sub-manager sub-permission">
							<td><h4>Tambah Data Pengurus Kelompok</h4></td>
							<td>
								<div class="checkbox checkbox-replace color-blue">
									<input type="checkbox" class="access" name="access[pengurus_kelompok][]" value="add" <?php echo (isset($access['pengurus_kelompok']['add']) ? 'checked="checked"':'') ?>>
								</div>
							</td>
						</tr>
						<tr class="sub-manager sub-permission">
							<td><h4>Edit Data Pengurus Kelompok</h4></td>
							<td>
								<div class="checkbox checkbox-replace color-blue">
									<input type="checkbox" class="access" name="access[pengurus_kelompok][]" value="edit" <?php echo (isset($access['pengurus_kelompok']['edit']) ? 'checked="checked"':'') ?>>
								</div>
							</td>
						</tr>
						<tr class="sub-manager sub-permission">
							<td><h4>Hapus Data Pengurus Kelompok</h4></td>
							<td>
								<div class="checkbox checkbox-replace color-blue">
									<input type="checkbox" class="access" name="access[pengurus_kelompok][]" value="delete" <?php echo (isset($access['pengurus_kelompok']['delete']) ? 'checked="checked"':'') ?>>
								</div>
							</td>
						</tr>
						<tr class="sub-manager">
							<td><h4><strong>Data Dokumen</strong></h4></td>
							<td></td>
						</tr>
						<tr class="sub-manager sub-permission">
							<td><h4>Lihat Data Dokumen</h4></td>
							<td>
								<div class="checkbox checkbox-replace color-blue">
									<input type="checkbox" class="access" name="access[dokumen][]" value="view" <?php echo (isset($access['dokumen']['view']) ? 'checked="checked"':'') ?>>
								</div>
							</td>
						</tr>
						<tr class="sub-manager sub-permission">
							<td><h4>Tambah Data Dokumen</h4></td>
							<td>
								<div class="checkbox checkbox-replace color-blue">
									<input type="checkbox" class="access" name="access[dokumen][]" value="add" <?php echo (isset($access['dokumen']['add']) ? 'checked="checked"':'') ?>>
								</div>
							</td>
						</tr>
						<tr class="sub-manager sub-permission">
							<td><h4>Edit Data Dokumen</h4></td>
							<td>
								<div class="checkbox checkbox-replace color-blue">
									<input type="checkbox" class="access" name="access[dokumen][]" value="edit" <?php echo (isset($access['dokumen']['edit']) ? 'checked="checked"':'') ?>>
								</div>
							</td>
						</tr>
						<tr class="sub-manager sub-permission">
							<td><h4>Hapus Data Dokumen</h4></td>
							<td>
								<div class="checkbox checkbox-replace color-blue">
									<input type="checkbox" class="access" name="access[dokumen][]" value="delete" <?php echo (isset($access['dokumen']['delete']) ? 'checked="checked"':'') ?>>
								</div>
							</td>
						</tr>
						<tr class="sub-manager">
							<td><h4><strong>Data RKPDES</strong></h4></td>
							<td></td>
						</tr>
						<tr class="sub-manager sub-permission">
							<td><h4>Lihat Data RKPDES</h4></td>
							<td>
								<div class="checkbox checkbox-replace color-blue">
									<input type="checkbox" class="access" name="access[rkpdes][]" value="view" <?php echo (isset($access['rkpdes']['view']) ? 'checked="checked"':'') ?>>
								</div>
							</td>
						</tr>
						<tr class="sub-manager sub-permission">
							<td><h4>Tambah Data RKPDES</h4></td>
							<td>
								<div class="checkbox checkbox-replace color-blue">
									<input type="checkbox" class="access" name="access[rkpdes][]" value="add" <?php echo (isset($access['rkpdes']['add']) ? 'checked="checked"':'') ?>>
								</div>
							</td>
						</tr>
						<tr class="sub-manager sub-permission">
							<td><h4>Edit Data RKPDES</h4></td>
							<td>
								<div class="checkbox checkbox-replace color-blue">
									<input type="checkbox" class="access" name="access[rkpdes][]" value="edit" <?php echo (isset($access['rkpdes']['edit']) ? 'checked="checked"':'') ?>>
								</div>
							</td>
						</tr>
						<tr class="sub-manager sub-permission">
							<td><h4>Hapus Data RKPDES</h4></td>
							<td>
								<div class="checkbox checkbox-replace color-blue">
									<input type="checkbox" class="access" name="access[rkpdes][]" value="delete" <?php echo (isset($access['rkpdes']['delete']) ? 'checked="checked"':'') ?>>
								</div>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
		<div class="form-group">
			<div class="col-sm-5 col-sm-offset-2">
				<button type="submit" class="btn btn-lg btn-success"><i class="entypo-check"></i> Simpan</button>
				<a href="<?php echo base_url($this->router->fetch_class().'#list-group') ?>" class="btn btn-lg btn-red pull-right"><i class="entypo-back"></i> Kembali</a>
			</div>
		</div>
	</form>

	<script>
		jQuery(document).ready(function($){
			<?php echo (!isset($access['manager_access']) ? '$(".sub-manager").hide();':'') ?>

			$('#full-access').click(function(){
				if(this.checked) {
			        $('.access').each(function() {
			        	$('.sub-manager').hide('medium');
			            $(this).attr("disabled", true);
			            $(this).parent().addClass('disabled');
			            $(this).parent().parent().removeClass('checked');
			        });
			    }
			    else{
			    	$('.access').each(function() {
			            $(this).attr("disabled", false);
			            $(this).parent().removeClass('disabled');
			        });
			    }
			});
			$('#manager-access').click(function(){
				if(this.checked) {
			        $('.sub-manager').show('medium');
		            $('.sub-manager .access').attr("disabled", false);
		            $('.agent .checkbox').removeClass('checked');
		            $('.agent .cb-wrapper').addClass('disabled');
		            $('.agent .access').attr("disabled", true);
			    }
			    else{
			    	$('.sub-manager').hide('medium');
		            $('.sub-manager .checkbox').removeClass('checked');
		            $('.sub-manager .access, .agent .access').attr("disabled", true);
		            $('.agent .cb-wrapper').removeClass('disabled');
			    }
			});
			$('#agent-access').click(function(){
				if(this.checked) {
			        $('.sub-manager').hide('medium');
					$('.manager .checkbox, .sub-manager .checkbox').removeClass('checked');
		            $('.manager .access, .sub-manager .access').attr("disabled", true);
		            $('.manager .cb-wrapper, .sub-manager .cb-wrapper').addClass('disabled');
			    }
			    else{
		            $('.manager .access, .sub-manager .access').attr("disabled", false);
		            $('.manager .cb-wrapper, .sub-manager .cb-wrapper').removeClass('disabled');
			    }
			});
		});
	</script>
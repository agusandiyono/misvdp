		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 class="modal-title"><strong>Impor Pengurus Kelompok</strong></h4>
				</div>
				<form role="form" method="post" class="form-horizontal form-groups-bordered validate" enctype="multipart/form-data">
					<div class="modal-body">
						<div class="alert alert-danger"><strong><i class="entypo-info-circled"></i> Perhatian!</strong> Pastikan terlebih dahulu bahwasanya data yang akan diimpor sudah sesuai dengan format yang telah disediakan untuk menghindari adanya kerusakan data.</div>
						<input type="hidden" name="where" value="<?php echo $where ?>">
						<p><input type="file" class="form-control file2 inline btn btn-primary" id="file" name="file" data-label="<i class='glyphicon glyphicon-circle-arrow-up'></i> &nbsp;Upload File" /></p>
						<p><strong>Ekstensi file yang diperbolehkan adalah xls dan xlsx.</strong></p>
						<p><strong><a href="<?php echo base_url('uploads/Format Impor Pengurus Kelompok.xlsx') ?>">Klik untuk download format impor pengurus kelompok.</a></strong></p>
					</div>
					<div class="modal-footer">
						<button type="submit" class="btn btn-success pull-left btn-delete"><i class="entypo-upload"></i> Impor</button>
						<button type="button" class="btn btn-danger" data-dismiss="modal"><i class="entypo-cancel-circle"></i> Batal</button>
					</div>
				</form>
			</div>
		</div>
		<script>
			jQuery(document).ready(function($){
				$("input.file2[type=file]").each(function(i, el)
				{
					var $this = $(el),
						label = attrDefault($this, 'label', 'Browse');

					$this.bootstrapFileInput(label);
				});
			});
		</script>
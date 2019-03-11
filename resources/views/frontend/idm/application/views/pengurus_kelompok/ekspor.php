		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 class="modal-title"><strong>Ekspor Pengurus Kelompok</strong></h4>
				</div>
				<form role="form" method="post" class="form-horizontal form-groups-bordered validate" enctype="multipart/form-data">
					<div class="modal-body">
						<input type="hidden" name="where" value="<?php echo $where ?>">
					</div>
					<div class="modal-footer">
						<button type="submit" class="btn btn-success pull-left btn-delete"><i class="entypo-download"></i> Ekspor</button>
						<button type="button" class="btn btn-danger" data-dismiss="modal"><i class="entypo-cancel-circle"></i> Batal</button>
					</div>
				</form>
			</div>
		</div>
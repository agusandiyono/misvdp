		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 class="modal-title"><strong>Ekspor IDM</strong></h4>
				</div>
				<form role="form" method="post" class="form-horizontal form-groups-bordered validate" enctype="multipart/form-data">
					<div class="modal-body">
						<input type="hidden" name="where" value="<?php echo $where ?>">
						<div class="form-group input-laporan date-range">
							<label for="dari" class="col-sm-3 control-label">Dari Tanggal</label>
							<div class="col-sm-6">
								<input type="text" class="form-control datepicker" data-format="dd-mm-yyyy" id="dari" name="dari" data-validate="required" data-message-required="Kolom dari tanggal tidak boleh kosong." placeholder="Dari Tanggal">
							</div>
						</div>
						<div class="form-group input-laporan date-range">
							<label for="sampai" class="col-sm-3 control-label">Sampai Tanggal</label>
							<div class="col-sm-6">
								<input type="text" class="form-control datepicker" data-format="dd-mm-yyyy" id="sampai" name="sampai" data-validate="required" data-message-required="Kolom dari tanggal tidak boleh kosong." placeholder="Dari Tanggal">
							</div>
						</div>
						<div class="form-group">
							<label for="provinsi_id" class="col-sm-3 control-label">Provinsi</label>
							<div class="col-sm-6">
								<?php if(!empty($this->session->userdata('provinsi_id'))): ?>
									<input type="hidden" name="provinsi" value="<?php echo $this->session->userdata('provinsi_id') ?>" />
								<?php endif ?>
								<select name="provinsi" class="form-control" id="provinsi_id" placeholder="Provinsi" <?php echo !empty($this->session->userdata('provinsi_id')) ? 'disabled' : "" ?>>
									<option></option>
								<?php foreach ($list_provinsi as $provinsi): ?>
									<option value="<?php echo $provinsi->provinsi_code ?>" <?php echo $provinsi->provinsi_code == $this->session->userdata('provinsi_id') ? "selected" : "" ?>><?php echo $provinsi->provinsi_code ?> - <?php echo $provinsi->provinsi_name ?></option>
								<?php endforeach ?>
								</select>
							</div>
						</div>
						<div class="form-group">
							<label for="kabupaten_id" class="col-sm-3 control-label">Kabupaten</label>
							<div class="col-sm-6">
								<input type="text" name="kabupaten" class="form-control" id="kabupaten_id" placeholder="Kabupaten" <?php echo !empty($this->session->userdata('kabupaten_id')) ? 'readonly' : "" ?>>
							</div>
						</div>
						<div class="form-group">
							<label for="kecamatan_id" class="col-sm-3 control-label">Kecamatan</label>
							<div class="col-sm-6">
								<input type="text" name="kecamatan" class="form-control" id="kecamatan_id" placeholder="Kecamatan" <?php echo !empty($this->session->userdata('kecamatan_id')) ? 'readonly' : "" ?>>
							</div>
						</div>
						<div class="form-group">
							<label for="desa_id" class="col-sm-3 control-label">Desa</label>
							<div class="col-sm-6">
								<input type="text" name="desa" class="form-control" id="desa_id" placeholder="Desa" <?php echo !empty($this->session->userdata('desa_id')) ? 'readonly' : "" ?>>
							</div>
						</div>
					</div>
					<div class="modal-footer">
						<button type="submit" class="btn btn-success pull-left btn-delete"><i class="entypo-download"></i> Ekspor</button>
						<button type="button" class="btn btn-danger" data-dismiss="modal"><i class="entypo-cancel-circle"></i> Batal</button>
					</div>
				</form>
			</div>
		</div>
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

				$(".datepicker").each(function(i, el){
					var $this = $(el),
						opts = {
							format: attrDefault($this, 'format', 'mm/dd/yyyy'),
							startDate: attrDefault($this, 'startDate', ''),
							endDate: attrDefault($this, 'endDate', ''),
							daysOfWeekDisabled: attrDefault($this, 'disabledDays', ''),
							startView: attrDefault($this, 'startView', 0),
							rtl: rtl(),
							autoclose: true
						},
						$n = $this.next(),
						$p = $this.prev();

					$this.datepicker(opts);

					if($n.is('.input-group-addon') && $n.has('a'))
					{
						$n.on('click', function(ev)
						{
							ev.preventDefault();

							$this.datepicker('show');
						});
					}

					if($p.is('.input-group-addon') && $p.has('a'))
					{
						$p.on('click', function(ev)
						{
							ev.preventDefault();

							$this.datepicker('show');
						});
					}
				});

				<?php if(!empty($this->session->userdata('kabupaten_id'))): ?> $('#kabupaten_id').select2('data', <?php echo json_encode(array('id'=>$this->session->userdata('kabupaten_id'), 'text'=>$this->session->userdata('kabupaten'))) ?>); <?php endif ?>
				<?php if(!empty($this->session->userdata('kecamatan_id'))): ?> $('#kecamatan_id').select2('data', <?php echo json_encode(array('id'=>$this->session->userdata('kecamatan_id'), 'text'=>$this->session->userdata('kecamatan'))) ?>); <?php endif ?>
				<?php if(!empty($this->session->userdata('desa_id'))): ?> $('#desa_id').select2('data', <?php echo json_encode(array('id'=>$this->session->userdata('desa_id'), 'text'=>$this->session->userdata('desa'))) ?>); <?php endif ?>
				
				validateModal();
			});
		</script>
<?php if ($this->session->flashdata('success_message')) : ?>
    <div class="alert alert-success"><?php echo $this->session->flashdata('success_message'); ?></div>
<?php endif;?>
<?php if ($this->session->flashdata('error_message')) : ?>
    <div class="alert alert-danger"><?php echo $this->session->flashdata('error_message'); ?></div>
<?php endif;?>
	<p>
<?php if($this->permission->check_permission($modules, 'add')): ?>
		<a class="btn btn-blue btn-icon icon-left" href="<?php echo base_url('kegiatan/tambah'); ?>">
			<i class="entypo-plus"></i>
			Tambah Data
		</a> &nbsp;
		<button class="btn btn-blue btn-icon icon-left" data-load-remote="<?php echo base_url('kegiatan/modal/impor'); ?>" data-toggle="modal" data-target="#modal_global">
			<i class="entypo-upload"></i>
			Impor Data
		</button> &nbsp;
		<button class="btn btn-blue btn-icon icon-left" data-load-remote="<?php echo base_url('kegiatan/modal/ekspor'); ?>" data-toggle="modal" data-target="#modal_global">
			<i class="entypo-download"></i>
			Ekspor Data
		</button> &nbsp;
<?php endif ?>
	</p>
	<table class="table table-bordered datatable" id="list-kegiatan">
		<thead>
			<tr>
				<th>No.</th>
				<th>Kabupaten</th>
				<th>Kecamatan</th>
				<th>Desa</th>
				<th>Tanggal</th>
				<th>Aksi</th>
			</tr>
		</thead>
		<tbody>
		<?php if(!empty($list_kegiatan)): ?>
			<?php foreach ($list_kegiatan as $kegiatan): ?>
				<tr>
					<td></td>
					<td><?php echo $kegiatan->kabupaten; ?></td>
					<td><?php echo $kegiatan->kecamatan; ?></td>
					<td><?php echo $kegiatan->desa; ?></td>
					<td><?php echo $kegiatan->tanggal; ?></td>

					</td>
					<td>
						<a class="btn btn-blue btn-sm" href="<?php echo base_url('kegiatan/detail/'.$kegiatan->id); ?>" title="Detail Kegiatan" target="_blank">
							<i class="entypo-newspaper"></i>
						</a>
					<?php if($this->permission->check_permission($modules, 'all') || ($this->permission->check_permission($modules, 'edit') && $kegiatan->id_operator == $this->session->userdata('user_id'))): ?>
						<a class="btn btn-green btn-sm" href="<?php echo base_url('kegiatan/edit/'.$kegiatan->id); ?>" title="Edit">
							<i class="entypo-pencil"></i>
						</a>
					<?php endif; ?>
					<?php if($this->permission->check_permission($modules, 'all') || ($this->permission->check_permission($modules, 'delete') && $kegiatan->id_operator == $this->session->userdata('user_id'))): ?>
						<button class="btn btn-danger btn-sm delete-trigger" data-href="<?php echo base_url('kegiatan/hapus/'.$kegiatan->id); ?>" data-toggle="modal" data-target="#confirm-delete" title="Hapus Kegiatan">
							<i class="entypo-cancel"></i>
						</button>
					<?php endif; ?>
					</td>
				</tr>
			<?php endforeach; ?>
		<?php else: ?>
			<tr>
				<td colspan="6">Belum ada data kegiatan untuk saat ini.</td>
			</tr>
		<?php endif ?>
		</tbody>
	</table>

	<script>
		jQuery(document).ready(function($){
			var responsiveHelper;
			var breakpointDefinition = {
			    tablet: 1024,
			    phone : 480
			};

	<?php if(!empty($list_kegiatan)): ?>
		<?php if($this->permission->check_module($modules, 'kegiatan')): ?>
			tableKegiatan = $("#list-kegiatan");

			tableKegiatan.dataTable({
		        "order": [[ 1, 'desc' ]],
				fnPreDrawCallback: function () {
			        if (!responsiveHelper) {
			            responsiveHelper = new ResponsiveDatatablesHelper(tableKegiatan, breakpointDefinition);
			        }
			    },
			    fnRowCallback  : function (nRow, aData, iDisplayIndex, iDisplayIndexFull) {
			        responsiveHelper.createExpandIcon(nRow);
			    },
			    fnDrawCallback : function (oSettings) {
			        responsiveHelper.respond();
			        if ( oSettings.bSorted || oSettings.bFiltered )
		            {
		                for ( var i=0, iLen=oSettings.aiDisplay.length ; i<iLen ; i++ )
		                {
		                    $('td:eq(0)', oSettings.aoData[ oSettings.aiDisplay[i] ].nTr ).html( i+1 );
		                }
		            }
			        $('#confirm-delete').on('show.bs.modal', function(e) {
			            $(this).find('.btn-delete').attr('href', $(e.relatedTarget).data('href'));
			        });
			    }
			});
		<?php endif ?>
	<?php endif ?>
		});
	</script>
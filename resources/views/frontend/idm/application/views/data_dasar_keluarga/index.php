<?php if ($this->session->flashdata('success_message')) : ?>
    <div class="alert alert-success"><?php echo $this->session->flashdata('success_message'); ?></div>
<?php endif;?>
<?php if ($this->session->flashdata('error_message')) : ?>
    <div class="alert alert-danger"><?php echo $this->session->flashdata('error_message'); ?></div>
<?php endif;?>
<?php if($this->permission->check_permission($modules, 'add')): ?>
	<p>
		<a class="btn btn-blue btn-icon icon-left" href="<?php echo base_url('data_dasar_keluarga/tambah'); ?>">
			<i class="entypo-plus"></i>
			Tambah Data IDM
		</a>
	</p>
<?php endif ?>
	<table class="table table-bordered datatable" id="list-data-dasar-keluarga">
		<thead>
			<tr>
				<th>No.</th>
				<th>Nama Informan</th>
				<th>Jabatan</th>
				<th>Kabupaten</th>
				<th>Kecamatan</th>
				<th>Desa</th>
				<th>Aksi</th>
			</tr>
		</thead>
		<tbody>
		<?php if(!empty($list_data)): ?>
			<?php foreach ($list_data as $data): ?>
				<tr>
					<td></td>
					<td><?php echo $data->nomor_kartu_keluarga; ?></td>
					<td><?php echo $data->nama_kepala_keluarga; ?></td>
					<td><?php echo $data->kabupaten; ?></td>
					<td><?php echo $data->kecamatan; ?></td>
					<td><?php echo $data->desa; ?></td>
					<td>
						<a class="btn btn-blue btn-sm" href="<?php echo base_url('data_dasar_keluarga/detail/'.$data->id); ?>" title="Detail Data Dasar Keluarga" target="_blank">
							<i class="entypo-newspaper"></i>
						</a>
					<?php if($this->permission->check_permission($modules, 'all') || ($this->permission->check_permission($modules, 'edit') && $data->id_operator == $this->session->userdata('user_id'))): ?>
						<a class="btn btn-green btn-sm" href="<?php echo base_url('data_dasar_keluarga/edit/'.$data->id); ?>" title="Edit">
							<i class="entypo-pencil"></i>
						</a>
					<?php endif; ?>
					<?php if($this->permission->check_permission($modules, 'all') || ($this->permission->check_permission($modules, 'delete') && $data->id_operator == $this->session->userdata('user_id'))): ?>
						<button class="btn btn-danger btn-sm delete-trigger" data-href="<?php echo base_url('data_dasar_keluarga/hapus/'.$data->id); ?>" data-toggle="modal" data-target="#confirm-delete" title="Hapus Dokumen">
							<i class="entypo-cancel"></i>
						</button>
					<?php endif; ?>
					</td>
				</tr>
			<?php endforeach; ?>
		<?php else: ?>
			<tr>
				<td colspan="7">Belum ada data dasar keluarga untuk saat ini.</td>
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

	<?php if(!empty($list_data)): ?>
		<?php if($this->permission->check_module($modules, 'data_dasar_keluarga')): ?>
			tableKeluarga = $("#list-data-dasar-keluarga");

			tableKeluarga.dataTable({
		        "order": [],
				fnPreDrawCallback: function () {
			        if (!responsiveHelper) {
			            responsiveHelper = new ResponsiveDatatablesHelper(tableKeluarga, breakpointDefinition);
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
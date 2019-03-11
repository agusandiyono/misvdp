<?php if ($this->session->flashdata('success_message')) : ?>
    <div class="alert alert-success"><?php echo $this->session->flashdata('success_message'); ?></div>
<?php endif;?>
<?php if ($this->session->flashdata('error_message')) : ?>
    <div class="alert alert-danger"><?php echo $this->session->flashdata('error_message'); ?></div>
<?php endif;?>
	<p>
<?php if($this->permission->check_permission($modules, 'add')): ?>
		<a class="btn btn-blue btn-icon icon-left" href="<?php echo base_url('pengurus_kelompok/tambah'); ?>">
			<i class="entypo-plus"></i>
			Tambah pengurus kelompok
		</a> &nbsp;
		<button class="btn btn-blue btn-icon icon-left" data-load-remote="<?php echo base_url('pengurus_kelompok/modal/impor'); ?>" data-toggle="modal" data-target="#modal_global">
			<i class="entypo-upload"></i>
			Impor pengurus kelompok
		</button> &nbsp;
		<button class="btn btn-blue btn-icon icon-left" data-load-remote="<?php echo base_url('pengurus_kelompok/modal/ekspor'); ?>" data-toggle="modal" data-target="#modal_global">
			<i class="entypo-download"></i>
			Ekspor pengurus kelompok
		</button> &nbsp;
<?php endif ?>
	</p>
	<table class="table table-bordered datatable" id="list-pengurus-kelompok">
		<thead>
			<tr>
				<th>No.</th>
				<th>Nama</th>
				<th>Jabatan</th>
				<th>Jenis Kelamin</th>
				<th>Pendidikan Terakhir</th>
				<th>Aksi</th>
			</tr>
		</thead>
		<tbody>
		<?php if(!empty($list_pengurus_kelompok)): ?>
			<?php foreach ($list_pengurus_kelompok as $pengurus): ?>
				<tr>
					<td></td>
					<td><?php echo $pengurus->nama; ?></td>
					<td><?php echo $pengurus->jabatan; ?></td>
					<td><?php echo ucfirst($pengurus->jenis_kelamin); ?></td>
					<td><?php echo $pengurus->pendidikan; ?></td>
					<td>
					<?php if($this->permission->check_permission($modules, 'edit')): ?>
						<a class="btn btn-green btn-sm" href="<?php echo base_url('pengurus_kelompok/edit/'.$pengurus->id); ?>" title="Edit">
							<i class="entypo-pencil"></i>
						</a>
					<?php endif; ?>
					<?php if($this->permission->check_permission($modules, 'delete')): ?>
						<button class="btn btn-danger btn-sm delete-trigger" data-href="<?php echo base_url('pengurus_kelompok/hapus/'.$pengurus->id); ?>" data-toggle="modal" data-target="#confirm-delete" title="Hapus Kegiatan">
							<i class="entypo-cancel"></i>
						</button>
					<?php endif; ?>
					</td>
				</tr>
			<?php endforeach; ?>
		<?php else: ?>
			<tr>
				<td colspan="6">Belum ada data pengurus kelompok untuk saat ini.</td>
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

	<?php if(!empty($list_pengurus_kelompok)): ?>
		<?php if($this->permission->check_module($modules, 'pengurus_kelompok')): ?>
			tableKegiatan = $("#list-pengurus-kelompok");

			tableKegiatan.dataTable({
		        "order": [],
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
<?php if ($this->session->flashdata('success_message')) : ?>
    <div class="alert alert-success"><?php echo $this->session->flashdata('success_message'); ?></div>
<?php endif;?>
<?php if ($this->session->flashdata('error_message')) : ?>
    <div class="alert alert-danger"><?php echo $this->session->flashdata('error_message'); ?></div>
<?php endif;?>
<?php if($this->permission->check_permission($modules, 'add')): ?>
	<p>
		<a class="btn btn-blue btn-icon icon-left" href="<?php echo base_url('dokumen/tambah'); ?>">
			<i class="entypo-plus"></i>
			Tambah Dokumen
		</a>
	</p>
<?php endif ?>
	<table class="table table-bordered datatable" id="list-dokumen">
		<thead>
			<tr>
				<th>No.</th>
				<th>Nama Dokumen</th>
				<th>Jenis Dokumen</th>
				<th>Tanggal</th>
				<th>Aksi</th>
			</tr>
		</thead>
		<tbody>
		<?php if(!empty($list_dokumen)): ?>
			<?php foreach ($list_dokumen as $dokumen): ?>
				<tr>
					<td></td>
					<td><?php echo $dokumen->nama; ?></td>
					<td class="text-center">
					<?php
						if($dokumen->jenis == "modul") echo 'Modul';
						elseif($dokumen->jenis == "buku") echo 'Buku';
						elseif($dokumen->jenis == "penggunaan") echo 'Pedoman Penggunaan';
						elseif($dokumen->jenis == "juknis") echo 'Juknis';
						elseif($dokumen->jenis == "juklak") echo 'Juklak';
						elseif($dokumen->jenis == "lainnya") echo 'Lainnya';
					?>
					</td>
					<td data-order="<?php echo $dokumen->tanggal; ?>"><?php echo date_reverse($dokumen->tanggal); ?></td>
					<td>
						<a class="btn btn-blue btn-sm" href="<?php echo base_url('uploads/dokumen/'.$dokumen->dokumen); ?>" title="Download Dokumen" target="_blank">
							<i class="entypo-download"></i>
						</a>
					<?php if($this->permission->check_permission($modules, 'all') || ($this->permission->check_permission($modules, 'edit') && $dokumen->id_operator == $this->session->userdata('user_id'))): ?>
						<a class="btn btn-green btn-sm" href="<?php echo base_url('dokumen/edit/'.$dokumen->id); ?>" title="Edit">
							<i class="entypo-pencil"></i>
						</a>
					<?php endif; ?>
					<?php if($this->permission->check_permission($modules, 'all') || ($this->permission->check_permission($modules, 'delete') && $dokumen->id_operator == $this->session->userdata('user_id'))): ?>
						<button class="btn btn-danger btn-sm delete-trigger" data-href="<?php echo base_url('dokumen/hapus/'.$dokumen->id); ?>" data-toggle="modal" data-target="#confirm-delete" title="Hapus Dokumen">
							<i class="entypo-cancel"></i>
						</button>
					<?php endif; ?>
					</td>
				</tr>
			<?php endforeach; ?>
		<?php else: ?>
			<tr>
				<td colspan="6">Belum ada data dokumen untuk saat ini.</td>
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

	<?php if(!empty($list_dokumen)): ?>
		<?php if($this->permission->check_module($modules, 'dokumen')): ?>
			tableDokumen = $("#list-dokumen");

			tableDokumen.dataTable({
		        "order": [],
				fnPreDrawCallback: function () {
			        if (!responsiveHelper) {
			            responsiveHelper = new ResponsiveDatatablesHelper(tableDokumen, breakpointDefinition);
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
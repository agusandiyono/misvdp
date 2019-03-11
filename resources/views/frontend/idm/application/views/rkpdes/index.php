<?php if ($this->session->flashdata('success_message')) : ?>
    <div class="alert alert-success"><?php echo $this->session->flashdata('success_message'); ?></div>
<?php endif;?>
<?php if ($this->session->flashdata('error_message')) : ?>
    <div class="alert alert-danger"><?php echo $this->session->flashdata('error_message'); ?></div>
<?php endif;?>
	<p>
<?php if($this->permission->check_permission($modules, 'add')): ?>
		<a class="btn btn-blue btn-icon icon-left" href="<?php echo base_url('rkpdes/tambah'); ?>">
			<i class="entypo-plus"></i>
			Tambah RKPDES
		</a> &nbsp;
		<button class="btn btn-blue btn-icon icon-left" data-load-remote="<?php echo base_url('rkpdes/modal/impor'); ?>" data-toggle="modal" data-target="#modal_global">
			<i class="entypo-upload"></i>
			Impor RKPDES
		</button> &nbsp;
		<button class="btn btn-blue btn-icon icon-left" data-load-remote="<?php echo base_url('rkpdes/modal/ekspor'); ?>" data-toggle="modal" data-target="#modal_global">
			<i class="entypo-download"></i>
			Ekspor RKPDES
		</button> &nbsp;
<?php endif ?>
	</p>
	<table class="table table-bordered datatable" id="list-rkpdes">
		<thead>
			<tr>
				<th>No.</th>
				<th>Kabupaten</th>
				<th>Kecamatan</th>
				<th>Desa</th>
				<th>Jumlah Dana Desa</th>
				<th>Jumlah Alokasi Dana Desa</th>
				<th>Jenis Kegiatan Pertanian</th>
				<th>Sumber Dana Desa</th>
				<th>Sumber Alokasi Dana Desa</th>
				<th>Persentase</th>
				<th>Pengelola Dana Desa</th>
				<th>Aksi</th>
			</tr>
		</thead>
		<tbody>
		<?php if(!empty($list_rkpdes)): ?>
			<?php foreach ($list_rkpdes as $rkpdes): ?>
				<tr>
					<td></td>
					<td><?php echo $rkpdes->kabupaten_name; ?></td>
					<td><?php echo $rkpdes->kecamatan_name; ?></td>
					<td><?php echo $rkpdes->desa_name; ?></td>
					<td><?php echo price_format($rkpdes->jumlah_dana_desa); ?></td>
					<td><?php echo price_format($rkpdes->jumlah_alokasi_dana_desa); ?></td>
					<td><?php echo $rkpdes->jenis; ?></td>
					<td><?php echo price_format($rkpdes->sumber_dana_desa); ?></td>
					<td><?php echo price_format($rkpdes->sumber_alokasi_dana_desa); ?></td>
					<td><?php echo $rkpdes->persentase; ?>%</td>
					<td><?php echo $rkpdes->pengelola; ?></td>
					<td>
						<a class="btn btn-blue btn-sm" href="<?php echo base_url('rkpdes/detail/'.$rkpdes->id); ?>" title="Detail RKPDES" target="_blank">
							<i class="entypo-newspaper"></i>
						</a>
					<?php if($this->permission->check_permission($modules, 'all') || ($this->permission->check_permission($modules, 'edit') && $rkpdes->id_operator == $this->session->userdata('user_id'))): ?>
						<a class="btn btn-green btn-sm" href="<?php echo base_url('rkpdes/edit/'.$rkpdes->id); ?>" title="Edit">
							<i class="entypo-pencil"></i>
						</a>
					<?php endif; ?>
					<?php if($this->permission->check_permission($modules, 'all') || ($this->permission->check_permission($modules, 'delete') && $rkpdes->id_operator == $this->session->userdata('user_id'))): ?>
						<button class="btn btn-danger btn-sm delete-trigger" data-href="<?php echo base_url('rkpdes/hapus/'.$rkpdes->id); ?>" data-toggle="modal" data-target="#confirm-delete" title="Hapus RKPDES">
							<i class="entypo-cancel"></i>
						</button>
					<?php endif; ?>
					</td>
				</tr>
			<?php endforeach; ?>
		<?php else: ?>
			<tr>
				<td colspan="12">Belum ada data RKPDES untuk saat ini.</td>
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

	<?php if(!empty($list_rkpdes)): ?>
		<?php if($this->permission->check_module($modules, 'rkpdes')): ?>
			tableRkpdes = $("#list-rkpdes");

			tableRkpdes.dataTable({
		        "order": [],
				fnPreDrawCallback: function () {
			        if (!responsiveHelper) {
			            responsiveHelper = new ResponsiveDatatablesHelper(tableRkpdes, breakpointDefinition);
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
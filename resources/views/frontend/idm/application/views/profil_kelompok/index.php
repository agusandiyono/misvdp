<?php if ($this->session->flashdata('success_message')) : ?>
    <div class="alert alert-success"><?php echo $this->session->flashdata('success_message'); ?></div>
<?php endif;?>
<?php if ($this->session->flashdata('error_message')) : ?>
    <div class="alert alert-danger"><?php echo $this->session->flashdata('error_message'); ?></div>
<?php endif;?>
	<p>
<?php if($this->permission->check_permission($modules, 'add')): ?>
		<a class="btn btn-blue btn-icon icon-left" href="<?php echo base_url('profil_kelompok/tambah'); ?>">
			<i class="entypo-plus"></i>
			Tambah profil kelompok
		</a> &nbsp;
		<button class="btn btn-blue btn-icon icon-left" data-load-remote="<?php echo base_url('profil_kelompok/modal/impor'); ?>" data-toggle="modal" data-target="#modal_global">
			<i class="entypo-upload"></i>
			Impor profil kelompok
		</button> &nbsp;
		<button class="btn btn-blue btn-icon icon-left" data-load-remote="<?php echo base_url('profil_kelompok/modal/ekspor'); ?>" data-toggle="modal" data-target="#modal_global">
			<i class="entypo-download"></i>
			Ekspor profil kelompok
		</button> &nbsp;
<?php endif ?>
	</p>
	<table class="table table-bordered datatable" id="list-profil-kelompok">
		<thead>
			<tr>
				<th>No.</th>
				<th>No. Kelompok</th>
				<th>Pewawancara</th>
				<th>Tanggal</th>
				<th>Nama Kelompok</th>
				<th>Bidang Kegiatan</th>
				<th>Jumlah Anggota</th>
				<th>Status</th>
				<th>Aksi</th>
			</tr>
		</thead>
		<tbody>
		<?php if(!empty($list_profil_kelompok)): ?>
			<?php foreach ($list_profil_kelompok as $profil): ?>
				<tr>
					<td></td>
					<td><?php echo $profil->no_kelompok; ?></td>
					<td><?php echo $profil->pewawancara; ?></td>
					<td data-order="<?php echo $profil->tanggal; ?>"><?php echo date_reverse($profil->tanggal); ?></td>
					<td><?php echo $profil->nama; ?></td>
					<td>
					<?php
						if($profil->bidang_kegiatan == "pertanian") echo "Pertanian-Tan. Pangan";
						elseif($profil->bidang_kegiatan == "perkebunan") echo "Perkebunan";
						elseif($profil->bidang_kegiatan == "buah") echo "Buah-Buahan";
						elseif($profil->bidang_kegiatan == "peternakan") echo "Peternakan";
						elseif($profil->bidang_kegiatan == "perikanan") echo "Perikanan";
						elseif($profil->bidang_kegiatan == "hasil") echo "Pengolahan Hasil";
					?>
					</td>
					<td class="text-center">
						<p><div class="label label-info">Laki-laki: <?php echo $profil->jumlah_lk ?></div></p>
						<p><div class="label label-secondary">Perempuan: <?php echo $profil->jumlah_p ?></div></p>
					</td>
					<td class="text-center">
					<?php
						if($profil->status == "aktif"){
							echo '<div class="label label-success">Aktif</div>';
						}
						else{
							echo '<div class="label label-danger">Tidak Aktif</div>';
						}
					?>
					</td>
					<td>
						<a class="btn btn-blue btn-sm" href="<?php echo base_url('profil_kelompok/detail/'.$profil->id); ?>" title="Detail Kegiatan" target="_blank">
							<i class="entypo-newspaper"></i>
						</a>
					<?php if($this->permission->check_permission($modules, 'edit')): ?>
						<a class="btn btn-green btn-sm" href="<?php echo base_url('profil_kelompok/edit/'.$profil->id); ?>" title="Edit">
							<i class="entypo-pencil"></i>
						</a>
					<?php endif; ?>
					<?php if($this->permission->check_permission($modules, 'delete')): ?>
						<button class="btn btn-danger btn-sm delete-trigger" data-href="<?php echo base_url('profil_kelompok/hapus/'.$profil->id); ?>" data-toggle="modal" data-target="#confirm-delete" title="Hapus Kegiatan">
							<i class="entypo-cancel"></i>
						</button>
					<?php endif; ?>
					</td>
				</tr>
			<?php endforeach; ?>
		<?php else: ?>
			<tr>
				<td colspan="6">Belum ada data profil kelompok untuk saat ini.</td>
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

	<?php if(!empty($list_profil_kelompok)): ?>
		<?php if($this->permission->check_module($modules, 'profil_kelompok')): ?>
			tableKegiatan = $("#list-profil-kelompok");

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
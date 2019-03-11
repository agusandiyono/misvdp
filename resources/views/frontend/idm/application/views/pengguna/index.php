	<?php if ($this->session->flashdata('success_message')) : ?>
        <div class="alert alert-success"><?php echo $this->session->flashdata('success_message'); ?></div>
    <?php endif;?>
    <?php if ($this->session->flashdata('error_message')) : ?>
        <div class="alert alert-danger"><?php echo $this->session->flashdata('error_message'); ?></div>
    <?php endif;?>
	<ul class="nav nav-tabs">
		<?php if($this->permission->check_module($modules, 'user')): ?>
		<li class="active">
			<a href="#list-pengguna" data-toggle="tab">
				<span class="visible-xs"><i class="entypo-user"></i></span>
				<span class="hidden-xs">List Pengguna</span>
			</a>
		</li>
		<?php endif ?>
		<?php if($this->permission->check_module($modules, 'user_group')): ?>
		<li <?php echo (!$this->permission->check_module($modules, 'user') ? 'class="active"':'') ?>>
			<a href="#list-group" data-toggle="tab">
				<span class="visible-xs"><i class="entypo-users"></i></span>
				<span class="hidden-xs">Grup Pengguna</span>
			</a>
		</li>
		<?php endif ?>
	</ul>

	<div class="tab-content">
	<?php if($this->permission->check_module($modules, 'user')): ?>
		<div class="tab-pane active" id="list-pengguna">
			<a href="<?php echo base_url('pengguna/tambah_pengguna') ?>" class="btn btn-blue btn-icon icon-left">
				<i class="entypo-user-add"></i>
				Tambah Pengguna
			</a>
			<table class="table table-bordered datatable" id="user">
				<thead>
					<tr>
						<th>Username</th>
						<th>Nama Depan</th>
						<th data-hide="phone,tablet">Nama Belakang</th>
						<th data-hide="phone">User Group</th>
						<th>Aksi</th>
					</tr>
				</thead>
			</table>
		</div>
	<?php endif ?>
	<?php if($this->permission->check_module($modules, 'user_group')): ?>
		<div class="tab-pane <?php echo (!$this->permission->check_module($modules, 'user') ? 'active':'') ?>" id="list-group">
			<a href="<?php echo base_url('pengguna/tambah_group') ?>" class="btn btn-blue btn-icon icon-left">
				<i class="entypo-user-add"></i>
				Tambah Group Pengguna
			</a>
			<table class="table table-bordered datatable" id="user_group">
				<thead>
					<tr>
						<th>Nama Group</th>
						<th>Deskripsi</th>
						<th>Aksi</th>
					</tr>
				</thead>
			</table>
		</div>
	<?php endif ?>
	</div>

	<script type="text/javascript">
		jQuery(document).ready(function($){
			var responsiveHelper,responsiveHelper2;
			var breakpointDefinition = {
			    tablet: 1024,
			    phone : 480
			};
			var tableContainer;

		<?php if($this->permission->check_module($modules, 'user')): ?>
			tableUser = $("#user");

			tableUser.dataTable({
				"ajax": "<?php echo base_url('pengguna/ajx/users') ?>",
				"deferRender": true,
			    fnPreDrawCallback: function () {
			        if (!responsiveHelper) {
			            responsiveHelper = new ResponsiveDatatablesHelper(tableUser, breakpointDefinition);
			        }
			    },
			    fnRowCallback  : function (nRow, aData, iDisplayIndex, iDisplayIndexFull) {
			        responsiveHelper.createExpandIcon(nRow);
			    },
			    fnDrawCallback : function (oSettings) {
			        responsiveHelper.respond();
			        $('#confirm-delete').on('show.bs.modal', function(e) {
			            $(this).find('.btn-delete').attr('href', $(e.relatedTarget).data('href'));
			        });
			    }
			});
		<?php endif ?>
		<?php if($this->permission->check_module($modules, 'user_group')): ?>
			tableGroup = $("#user_group");
			tableGroup.dataTable({
				"ajax": "<?php echo base_url('pengguna/ajx/users_groups') ?>",
				"deferRender": true,
			    fnPreDrawCallback: function () {
			        if (!responsiveHelper2) {
			            responsiveHelper2 = new ResponsiveDatatablesHelper(tableGroup, breakpointDefinition);
			        }
			    },
			    fnRowCallback  : function (nRow, aData, iDisplayIndex, iDisplayIndexFull) {
			        responsiveHelper2.createExpandIcon(nRow);
			    },
			    fnDrawCallback : function (oSettings) {
			        responsiveHelper2.respond();
			        $('#confirm-delete').on('show.bs.modal', function(e) {
			            $(this).find('.btn-delete').attr('href', $(e.relatedTarget).data('href'));
			        });
			    }
			});
		<?php endif ?>
		});
		
	</script>
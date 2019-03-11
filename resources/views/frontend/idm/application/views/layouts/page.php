<?php
    $active_menu = $this->router->fetch_class();

    if($active_menu == "home"){
    	$active_menu = "dashboard";
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<meta name="viewport" content="width=device-width, initial-scale=1.0" />

	<base href="<?php echo base_url() ?>" />

	<link rel="shortcut icon" href="assets/images/favicon.png" type="image/png">

	<title><?php echo $template['title'] ?> | Sistem Informasi Indeks Desa Membangun (IDM) </title>

	<link rel="stylesheet" href="assets/css/icons/entypo/css/entypo.css" type="text/css">
	<link rel="stylesheet" href="assets/css/icons/font-awesome/css/font-awesome.min.css" type="text/css">
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Noto+Sans:400,700,400italic" type="text/css">
	<link rel="stylesheet" href="assets/css/bootstrap.css" type="text/css">
	<link rel="stylesheet" href="assets/css/core.css" type="text/css">
	<link rel="stylesheet" href="assets/css/theme.css" type="text/css">
	<link rel="stylesheet" href="assets/css/forms.css" type="text/css">
	<link rel="stylesheet" href="assets/css/custom.css" type="text/css">
	<link rel="stylesheet" href="assets/js/select2/select2.css" type="text/css">
	<link rel="stylesheet" href="assets/js/select2/select2-bootstrap.css" type="text/css">
	<link rel="stylesheet" href="assets/js/datatables/responsive/css/datatables.responsive.css" type="text/css">
	
	<link rel="stylesheet" href="assets/plugins/datatables/buttons.dataTables.min.css" />
    <link rel="stylesheet" href="assets/plugins/datatables/fixedHeader/fixedHeader.dataTables.min.css" />
    <link rel="stylesheet" href="assets/plugins/datatables/fixedHeader/jquery.dataTables.min.css" />

	<script src="assets/js/jquery.min.js"></script>
	<script>$.noConflict();</script>

	<!--[if lt IE 9]><script src="assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

	<!--[if lt IE 9]>
		<script src="html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<script src="http://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body class="page-body">
	<div class="page-container">
		<div class="sidebar-menu">
			<div class="sidebar-menu-inner">
				<header class="logo-env">
					<div class="logo">
						<a href="<?php echo base_url() ?>">
							<img src="assets/images/logo-kemendesa.png" width="100" alt="" />&nbsp;

						</a>

					</div>
					<div class="sidebar-collapse">
						<a href="#" class="sidebar-collapse-icon">
							<i class="entypo-menu"></i>
						</a>
					</div>
					<div class="sidebar-mobile-menu visible-xs">
						<a href="#" class="with-animation">
							<i class="entypo-menu"></i>
						</a>
					</div>
				</header>
				<ul id="main-menu" class="main-menu">
					<li <?php if($active_menu == "dashboard") echo 'class="active"' ?>>
						<a href="<?php echo base_url() ?>">
							<i class="fa fa-home"></i>
							<span class="title" >Dashboard</span>
						</a>
					</li>
					<li <?php if(in_array($active_menu, array('ipd', 'idm'))) echo 'class="opened active"' ?>>
						<a href="#">
							<i class="fa fa-bar-chart-o"></i>
							<span class="title">Data Desa</span>
						</a>
						<ul>
              <?php if($this->permission->check_module(array('ipd'))): ?>
							<li <?php if($active_menu == "ipd") echo 'class="active"' ?>>
								<a href="<?php echo base_url('ipd') ?>">
									<i class="fa fa-calendar"></i>
									<span class="title">Data IPD 2014</span>
								</a>
							</li>
							<?php endif ?>
							<?php if($this->permission->check_module(array('idm'))): ?>
							<li <?php if($active_menu == "idm") echo 'class="active"' ?>>
								<a href="<?php echo base_url('idm') ?>">
									<i class="fa fa-calendar"></i>
									<span class="title">Data IDM 2015</span>
								</a>
							</li>
							<li <?php if($active_menu == "idm") echo 'class="active"' ?>>
								<a href="<?php echo base_url('desa') ?>">
									<i class="fa fa-calendar"></i>
									<span class="title">Data Perkembangan Desa</span>
								</a>
							</li>
							<?php endif ?>
						</ul>
					</li>

					<?php if($this->permission->check_module(array('kegiatan'))): ?>
					<li <?php if($active_menu == "kegiatan") echo 'class="active"' ?>>
						<a href="<?php echo base_url('kegiatan') ?>">
							<i class="fa fa-calendar"></i>
							<span class="title" font>Entry Data</span>
						</a>
					</li>
					<?php endif ?>
					
					<?php if($this->permission->check_module(array('data_dasar_keluarga'))): ?>
					<li <?php if($active_menu == "data_dasar_keluarga") echo 'class="active"' ?>>
						<a href="<?php echo base_url('data_dasar_keluarga') ?>">
							<i class="fa fa-users"></i>
							<span class="title">Entry Data IDM</span>
						</a>
					</li>
					<?php endif ?>
					<?php if($this->permission->check_module(array('dokumen'))): ?>
					<li <?php if($active_menu == "dokumen") echo 'class="active"' ?>>
						<a href="<?php echo base_url('dokumen') ?>">
							<i class="fa fa-book"></i>
							<span class="title">Dokumen</span>
						</a>
					</li>
					<?php endif ?>
					<?php if($this->permission->check_module(array('user', 'user_group'))): ?>
					<li <?php if($active_menu == "pengguna") echo 'class="active"' ?>>
						<a href="<?php echo base_url('pengguna') ?>">
							<i class="fa fa-user"></i>
							<span class="title">Pengguna</span>
						</a>
					</li>
					<?php endif ?>
				</ul>
			</div>
		</div>
		<div class="main-content">
			<div class="row">
				<div class="col-md-12 clearfix">
					<ul class="user-info pull-right pull-none-xsm">
						<li class="profile-info dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">
								Selamat datang, <strong><?php echo $this->session->userdata('first_name'); ?></strong>
							</a>
							<ul class="dropdown-menu">
								<li class="caret"></li>
								<li>
									<a href="<?php echo base_url('profil') ?>">
										<i class="entypo-user"></i>
										Edit Profil
									</a>
								</li>
								<li>
									<a href="<?php echo base_url('auth/keluar');?>">
										<i class="entypo-logout right"></i>
										Keluar
									</a>
								</li>
							</ul>
						</li>
					</ul>
				</div>
			</div>
			<hr />
		<?php if(!empty($breadcrumb)): ?>
			<ol class="breadcrumb bc-3" >
				<li>
					<a href="<?php echo base_url(); ?>"><i class="entypo-home"></i>Dashboard</a>
				</li>
				<li <?php echo ($this->router->fetch_method() == 'index'? 'class="active"':'') ?>>
					<?php echo ($this->router->fetch_method() == 'index'? '<strong>':'<a href="'.base_url($this->router->fetch_class()).'">') ?><?php echo ucwords(str_replace('_', ' ', $this->router->fetch_class())); ?><?php echo ($this->router->fetch_method() == 'index'? '</strong>':'</a>') ?>
				</li>
			<?php if($this->router->fetch_method() != 'index'): ?>
				<li class="active">
					<strong><?php echo ucwords(str_replace('_', ' ', $this->router->fetch_method())); ?></strong>
				</li>
			<?php endif ?>
			</ol>
		<?php endif ?>
			<div class="row">
				<div class="col-md-12">
					<?php echo $template['body']; ?>
				</div>
			</div>
		</div>
	</div>
	<div id="modal_global" class="modal fade" role="dialog" data-backdrop="static"></div>
	<div class="modal fade" id="confirm-delete">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 class="modal-title">Konfirmasi Hapus Data</h4>
				</div>

				<div class="modal-body">
					<h4>Apa anda yakin akan menghapus data ini?</h4>
					<h4 class="text-danger">Perhatian! Data yang telah dihapus tidak dapat dikembalikan lagi.</h4>
				</div>

				<div class="modal-footer">
					<a class="btn btn-success pull-left btn-delete"><i class="entypo-check"></i> Hapus Data</a>
					<button type="button" class="btn btn-danger" data-dismiss="modal"><i class="entypo-cancel-circle"></i> Batal</button>
				</div>
			</div>
		</div>
	</div>

	<script type="text/javascript" src="assets/js/main-gsap.js"></script>
	<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="assets/js/joinable.js"></script>
	<script type="text/javascript" src="assets/js/resizeable.js"></script>
	<script type="text/javascript" src="assets/js/jquery.validate.min.js"></script>
	<script type="text/javascript" src="assets/js/select2/select2.min.js"></script>
	<script type="text/javascript" src="assets/js/bootstrap-datepicker.js"></script>
	<script type="text/javascript" src="assets/js/jquery.dataTables.min.js"></script>
	<script type="text/javascript" src="assets/js/dataTables.bootstrap.js"></script>
	<script type="text/javascript" src="assets/js/datatables/lodash.min.js"></script>
	<script type="text/javascript" src="assets/js/datatables/responsive/js/datatables.responsive.js"></script>
	<script type="text/javascript" src="assets/js/ckeditor/ckeditor.js"></script>
	<script type="text/javascript" src="assets/js/fileinput.js"></script>
	<script type="text/javascript" src="assets/js/typeahead.min.js"></script>
	<script type="text/javascript" src="assets/js/jquery.bootstrap.wizard.min.js"></script>
	<script type="text/javascript" src="assets/js/jquery.multi-select.js"></script>
	<script type="text/javascript" src="assets/js/jquery.inputmask.bundle.min.js"></script>
	<script type="text/javascript" src="assets/js/printThis.js"></script>
	<script type="text/javascript" src="http://maps.google.com/maps/api/js?key=AIzaSyB2VYAfOoQTuPAFNGdj-TNeO2E4WsueXZI&language=ID"></script>
	<script type="text/javascript" src="assets/js/api.js"></script>
	<script type="text/javascript" src="assets/js/main.js"></script>
	<script type="text/javascript" src="assets/js/tableToExcel.js"></script>
	
	  <!-- Datatable -->
    <script src="assets/plugins/datatables/dataTables.buttons.min.js"></script>
    <script src="assets/plugins/datatables/buttons.html5.min.js"></script>
    <script src="assets/plugins/datatables/buttons.print.min.js"></script>
    <script src="assets/plugins/datatables/buttons.flash.min.js"></script>
    <script src="assets/plugins/datatables/jszip.min.js"></script>
    <script src="assets/plugins/datatables/pdfmake.min.js"></script>
</body>
</html>

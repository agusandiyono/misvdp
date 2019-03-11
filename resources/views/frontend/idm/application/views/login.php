	<script>
		var baseurl = '<?php echo base_url("auth/autentikasi") ?>';
	</script>

	<div class="login-container">
		<div class="login-header login-caret">
			<div class="login-content">
				<a href="<?php echo base_url(); ?>" class="logo">
					<img src="assets/images/logo-kemendesa.png" alt="" /> &nbsp;
				</a>
				<h1 style="color: #fff;">Sistem Informasi Indeks Desa Membangun (IDM)</h1>
				<div class="login-progressbar-indicator">
					<h3>43%</h3>
					<span>Autentikasi...</span>
				</div>
			</div>
		</div>
		<div class="login-progressbar">
			<div></div>
		</div>
		<div class="login-form">
			<div class="login-content">
				<div class="form-login-error"></div>
				<form method="post" role="form" id="form_login">
					<input type="hidden" name="<?php echo $this->security->get_csrf_token_name() ?>" id="csrf" value="<?php echo $this->security->get_csrf_hash() ?>" />
					<input type="hidden" name="redirect" id="redirect" value="<?php echo ($this->input->get('redirect')? urldecode($this->input->get('redirect', TRUE)) : ''); ?>">
					<div class="form-group">
						<div class="input-group">
							<div class="input-group-addon">
								<i class="entypo-user"></i>
							</div>
							<input type="text" class="form-control" name="username" id="username" placeholder="Nama Pengguna" autocomplete="off" />
						</div>
					</div>
					
					<div class="form-group">
						<div class="input-group">
							<div class="input-group-addon">
								<i class="entypo-key"></i>
							</div>
							<input type="password" class="form-control" name="password" id="password" placeholder="Password" autocomplete="off" />
						</div>
					</div>
					
					<div class="form-group">
						<button type="submit" class="btn btn-primary btn-block btn-login">
							<i class="entypo-login"></i>
							Masuk
						</button>
					</div>
				</form>
				
				<div class="login-bottom-links">
					&copy; <?php echo date('Y') ?> Kementerian Desa 2017
				</div>
			</div>
		</div>
	</div>
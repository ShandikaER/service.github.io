
<body class="img js-fullheight" style="background-image: url(<?= base_url('assets/auth/') ?>images/bg.jpg);">
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">Gilang Service</h2>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-6 col-lg-4">
					<div class="login-wrap p-0">
						<h3 class="mb-4 text-center">Welcome Back!</h3>
						<?= $this->session->flashdata('message'); ?>
						<form class="user" method="post" action="<?= base_url('auth'); ?>" class="signin-form">
							<div class="form-group">
								<input type="text" class="form-control form-control-user" value="<?= set_value('email'); ?>" id="email" name="email" placeholder="Masukkan Alamat Email">
								<?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
							</div>
							<div class="form-group">
								<input type="password" class="form-control form-control-user" value="<?= set_value('nama'); ?>" name="password" id="password" placeholder="Password">
								<?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
								<span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
							</div>
							<div class="form-group">
								<button type="submit" class="form-control btn btn-primary submit px-3">Sign In</button>
							</div>
							<div class="text-md-center">
									<p>Belum Punya akun?</p>
									<a href="<?= base_url('Auth/registrasi') ?>" class="btn btn-danger px-3">Register</a>
								</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
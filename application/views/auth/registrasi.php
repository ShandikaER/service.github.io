

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
						<h3 class="mb-4 text-center">Buat Akun!</h3>
						<form class="user" method="post" action="<?= base_url('Auth/register'); ?>" class="signin-form">
							<div class="form-group">
								<input type="text" class="form-control form-control-user" value="<?= set_value('nama'); ?>" name="nama" id="nama" placeholder="Nama Lengkap">
								<?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
							</div>
							<div class="form-group">
								<input type="text" class="form-control form-control-user" value="<?= set_value('email'); ?>" name="email" id="email" placeholder="Email">
								<?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
							</div>
							<div class="form-group row">
								<div class="col-sm-6 mb-3 mb-sm-0">
									<input type="password" class="form-control form-control-user" value="<?= set_value('password1'); ?>" name="password1" id="password1" placeholder="Password">
									<?= form_error('password1', '<small class="text-danger pl-3">', '</small>'); ?>
								</div>
								<div class="col-sm-6">
									<input type="password" class="form-control form-control-user" name="password2" id="password2" placeholder="Ulangi Password">
								</div>
							</div>
							<div class="form-group">
								<button type="submit" class="form-control btn btn-primary submit px-3">Daftar Akun</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>


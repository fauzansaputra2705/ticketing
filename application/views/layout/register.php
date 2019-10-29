<?php echo form_open('Welcome/register'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
	<title>Register &mdash; Stisla</title>

	<!-- General CSS Files -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
		integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
		integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

	<!-- CSS Libraries -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/selectric@1.13.0/public/selectric.css">

	<!-- Template CSS -->
	<link rel="stylesheet" href="<?php echo base_url() ?>/assets/css/style.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>/assets/css/components.css">

	<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.js'></script>
</head>

<body>
	<div id="app">
		<section class="section">
			<div class="container mt-5">
				<div class="row">
					<div class="col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-8 offset-lg-2 col-xl-8 offset-xl-2">
						<div class="login-brand">
							<img src="<?php echo base_url() ?>/assets/img/stisla-fill.svg" alt="logo" width="100"
								class="shadow-light rounded-circle">
						</div>
						<?php if (validation_errors()) : ?>
      <div class="col-md-12">
        <div class="alert alert-danger" role="alert">
          <?= validation_errors() ?>
        </div>
      </div>
    <?php endif; ?>
    <?php if (isset($error)) : ?>
      <div class="col-md-12">
        <div class="alert alert-danger" role="alert">
          <?= $error ?>
        </div>
      </div>
    <?php endif; ?>
						<div class="card card-primary">
							<div class="card-header">
								<h4>Register</h4>
							</div>

							<div class="card-body">
								<div class="row">
									<div class="col-6">
										<label for="nama_penumpang">Nama Lengkap</label>
										<input type="text" class="form-control" name="nama_penumpang" value=""
											placeholder="Enter a Nama Lengkap">
										<p class="help-block">Wajib Di isi</p>
									</div>
									<div class="col-6">
										<label for="username">Username</label>
										<input type="text" class="form-control" id="username" name="username"
											placeholder="Enter a username">
										<p class="help-block">At least 4 characters, letters or numbers only</p>

									</div>
								</div>

								<div class="form-group">
									<label for="email">Email</label>
									<input type="email" class="form-control" id="email" name="email" placeholder="Enter your email">
									<p class="help-block">A valid email address</p>

									<div class="invalid-feedback">
									</div>
								</div>

								<div class="row">
									<div class="form-group col-6">
										<label for="password">Password</label>
										<input type="password" class="form-control" id="password" name="password"
											placeholder="Enter a password">
										<div id="pwindicator" class="pwindicator">
											<div class="bar"></div>
											<div class="label"></div>
										</div>
										<p class="help-block">At least 6 characters</p>

									</div>
									<div class="form-group col-6">
										<label for="password_confirm">Confirm password</label>
										<input type="password" class="form-control" id="password_confirm" name="password_confirm"
											placeholder="Confirm your password">
										<p class="help-block">Must match your password</p>

									</div>
								</div>

								<div class="row">
									<div class="form-group col-6">
										<label>Jenis Kelamin</label>
										<br>
										<div class="form-check form-check-inline">
											<input class="form-check-input" type="radio" name="jenis_kelamin" id="inlineRadio1"
												value="Laki - Laki">
											<label class="form-check-label" for="inlineRadio1">Laki - Laki</label>
										</div>
										<div class="form-check form-check-inline">
											<input class="form-check-input" type="radio" name="jenis_kelamin" id="inlineRadio2"
												value="Perempuan">
											<label class="form-check-label" for="inlineRadio2">Perempuan</label>
										</div>

									</div>
									<div class="form-group col-6">
										<label>Telepone</label>
										<input type="number" class="form-control" name="telephone" value="">
										<p class="help-block">Wajib Di isi</p>

									</div>
									<div class="form-group">
										<button type="submit" class="btn btn-primary btn-lg">
											Register
										</button>
										<a href="<?php echo site_url('Welcome/login') ?>" class="btn btn-warning btn-lg">
											Kembali </a>
									</div>
								</div>
								<div class="simple-footer">
									Copyright &copy; 2019
								</div>
							</div>

							<!-- General JS Scripts -->
							<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.slim.js'></script>
							<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
								integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
								crossorigin="anonymous"></script>
							<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
								integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
								crossorigin="anonymous"></script>
							<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js">
							</script>
							<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
							<script src="<?php echo base_url() ?>/assets/js/stisla.js"></script>

							<!-- JS Libraies -->
							<script src='https://cdnjs.cloudflare.com/ajax/libs/pwstrength-bootstrap/3.0.5/pwstrength-bootstrap.js'></script>
							<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

							<!-- Template JS File -->
							<script src="<?php echo base_url() ?>/assets/js/scripts.js"></script>
							<script src="<?php echo base_url() ?>/assets/js/custom.js"></script>

							<!-- Page Specific JS File -->
							<script src="<?php echo base_url() ?>/assets/js/page/auth-register.js"></script>
</body>

</html>
<?php echo form_close();  ?>

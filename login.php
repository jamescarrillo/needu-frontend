<!DOCTYPE html>
<html>
<head>
	<?php include('include/head.php'); ?>
</head>
<body>
	<div class="login-wrap customscroll d-flex align-items-center flex-wrap justify-content-center pd-20">
		<div class="login-box bg-white box-shadow pd-30 border-radius-5">
			<img src="vendors/images/img-needu/logo.png" alt="login" class="login-img pt-10" style="height: 50px !important; max-width: 160px !important">
			<h3 class="text-center font-weight-bold mb-30">Login</h3>
			<form>
				<div class="input-group custom input-group-lg">
					<input type="text" class="form-control" placeholder="Usuario">
					<div class="input-group-append custom">
						<span class="input-group-text"><i class="fa fa-user" aria-hidden="true"></i></span>
					</div>
				</div>
				<div class="input-group custom input-group-lg">
					<input type="password" class="form-control" placeholder="**********">
					<div class="input-group-append custom">
						<span class="input-group-text"><i class="fa fa-lock" aria-hidden="true"></i></span>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-7">
						<div class="input-group">
							<!--
								use code for form submit
								<input class="btn btn-outline-primary btn-lg btn-block" type="submit" value="Sign In">
							-->
							<a class="btn btn-outline-primary btn-lg btn-block" href="index.php">Iniciar Sesión</a>
						</div>
					</div>
					<div class="col-sm-5">
						<div class="forgot-password padding-top-5"><a href="forgot-password.php">¿Olvidaste tu Contraseña?</a></div>
					</div>
					<div class="col-12">
						<div class="text-center font-weight-bold padding-top-5"><a href="register-selected.php">¿No tienes una cuenta?. Regístrate</a></div>
					</div>
				</div>
			</form>
		</div>
	</div>
	<?php include('include/script.php'); ?>
</body>
</html>
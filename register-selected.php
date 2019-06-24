<!DOCTYPE html>
<html>
<head>
	<?php include('include/head.php'); ?>
</head>
<body>
	<div class="login-wrap customscroll d-flex align-items-center flex-wrap justify-content-center pd-20">
		<div class="login-box bg-white box-shadow pd-30 border-radius-5">
			<img src="vendors/images/img-needu/logo.png" alt="login" class="login-img pt-10" style="height: 50px !important; max-width: 160px !important">
			<h3 class="font-weight-bold text-center mb-30">¿Soy un?</h3>
			<form>
				<div class="row">
					<div class="col-12">
						<div class="input-group">
							<a class="btn btn-outline-primary btn-lg btn-block" href="register-user.php">Usuario</a>
						</div>
					</div>
					<div class="col-12">
						<div class="input-group">
							<a class="btn btn-outline-primary btn-lg btn-block" href="register-psicologo.php">Psicólogo</a>
						</div>
					</div>
					<div class="col-12">
						<div class="text-center font-weight-bold padding-top-5"><a href="login.php">Iniciar Sesión</a></div>
					</div>
				</div>
			</form>
		</div>
	</div>
	<?php include('include/script.php'); ?>
</body>
</html>
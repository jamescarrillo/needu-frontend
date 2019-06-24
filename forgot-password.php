<!DOCTYPE html>
<html>
<head>
	<?php include('include/head.php'); ?>
</head>
<body>
	<div class="login-wrap customscroll d-flex align-items-center flex-wrap justify-content-center pd-20">
		<div class="login-box bg-white box-shadow pd-30 border-radius-5">
			<img src="vendors/images/img-needu/logo.png" alt="login" class="login-img pt-10" style="height: 50px !important; max-width: 160px !important">
			<h3 class="font-weight-bold text-center mb-30">¿Olvidaste tu Contraseña?</h3>
			<form>
				<p>Ingresa tu email para recuperar tu cuenta</p>
				<div class="input-group custom input-group-lg">
					<input type="text" class="form-control" placeholder="Email">
					<div class="input-group-append custom">
						<span class="input-group-text"><i class="fa fa-envelope-o" aria-hidden="true"></i></span>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-5">
						<div class="input-group">
							<!--
								use code for form submit
								<input class="btn btn-primary btn-lg btn-block" type="submit" value="Submit">
							-->
							<a class="btn btn-primary btn-lg btn-block" href="index.php">Enviar</a>
						</div>
					</div>
					<div class="col-sm-7">
						<div class="forgot-password">
							<a href="login.php" class="btn btn-outline-primary btn-lg btn-block mr-2">Iniciar Sesión</a>
						</div>
					</div>
				<div>
			</form>
		</div>
	</div>
	<?php include('include/script.php'); ?>
</body>
</html>
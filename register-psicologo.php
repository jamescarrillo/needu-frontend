<!DOCTYPE html>
<html>
<head>
	<?php include('include/head.php'); ?>
</head>
<body>
	<div class="login-wrap customscroll d-flex align-items-center flex-wrap justify-content-center pd-20">
		<div class="login-box bg-white box-shadow pd-30 border-radius-5">
			<img src="vendors/images/img-needu/logo.png" alt="login" class="login-img pt-10" style="height: 50px !important; max-width: 160px !important">
			<h3 class="font-weight-bold text-center mb-20">Datos Personales</h3>
			<form>
				<div class="input-group custom input-group-lg">
					<input type="password" class="form-control" placeholder="Nombre Completo">
					<div class="input-group-append custom">
						<span class="input-group-text"><i class="fa fa-user" aria-hidden="true"></i></span>
					</div>
				</div>
				<div class="input-group custom input-group-lg">
					<input type="password" class="form-control" placeholder="Colegiatura">
					<div class="input-group-append custom">
						<span class="input-group-text"><i class="fa fa-id-card" aria-hidden="true"></i></span>
					</div>
				</div>
				<div class="input-group custom input-group-lg">
					<input type="password" class="form-control" placeholder="Teléfono/Celular">
					<div class="input-group-append custom">
						<span class="input-group-text"><i class="fa fa-phone" aria-hidden="true"></i></span>
					</div>
				</div>
				<div class="input-group custom input-group-lg">
					<input type="password" class="form-control" placeholder="Usuario">
					<div class="input-group-append custom">
						<span class="input-group-text"><i class="fa fa-user" aria-hidden="true"></i></span>
					</div>
				</div>
				<div class="input-group custom input-group-lg">
					<input type="password" class="form-control" placeholder="Contraseña">
					<div class="input-group-append custom">
						<span class="input-group-text"><i class="fa fa-lock" aria-hidden="true"></i></span>
					</div>
				</div>
				<div class="row">
					<div class="col-12">
						<div class="input-group">
							<a class="btn btn-primary btn-lg btn-block" href="index.php">Finalizar Registro</a>
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
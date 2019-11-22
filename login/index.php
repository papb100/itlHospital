<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Inicio de sesión</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- bootstrap 4-->
	<link rel="stylesheet" type="text/css" href="../plugins/bootstrap/css/bootstrap.min.css">
	<!-- fontawesome -->
	<link rel="stylesheet" href="../plugins/fontawesome-free-5.8.1-web/css/all.min.css">
	<!-- Estilo personalizado -->
	<link rel="stylesheet" type="text/css" href="../css/estilos.css">
	<!-- bootstrap-toggle-master -->
	<link href="../plugins/bootstrap-toggle-master/css/bootstrap-toggle.css" rel="stylesheet">
	<link href="../plugins/bootstrap-toggle-master/stylesheet.css" rel="stylesheet">
	<!-- animate -->
	<link rel="stylesheet" href="../plugins/animate/animate.css">

</head>
<body class="login">

	<header class="hLogin animated fadeIn">
		<p>Empresa/Institucion</p>
	</header>
		
	<div class="container animated fadeInLeft" >
		<div class="row justify-content-md-center">
			<div class="col-md-auto login-box borde sombra">
				<h3 class="tLogin animated fadeIn delay-1s tPrincipal">Iniciar Sesión</h3>

				<form id="frmIngreso" method="post" action="verificar.php" class="formLogin">
					<div class="col-md-12">
						<label for="" class="colorLetra espLetra">Nombre de usuario:</label>
							<div class="form-group has-feedback salto">
								<input type="text" name="username" placeholder="Usuario" class="form-control " autofocus required>
								<span class="glyphicon glyphicon-user form-control-feedback colorLetra" ></span>
							</div>
					</div>
					<div class="col-md-12">
						<label for="" class="colorLetra espLetra">Contraseña:</label>
						<div class="form-group has-feedback salto">
							<input type="password" name="pass" placeholder="Password" class="form-control " required>
							<span class="glyphicon glyphicon-lock form-control-feedback colorLetra" ></span>
						</div>
					</div>
					<div class="container-fluid">
						<div class="row">
							<div class="col-md-12 ">
								<!-- <span class="cContra">
									<label class="colorLetra espLetra"> Cambiar Contraseña &nbsp;</label>
									<input data-onstyle="default" id="chkContra" data-on="Si" data-off="No" type="checkbox" checked data-toggle="toggle" data-size="mini" value='no' data-style="colorSecundario">
								</span> -->
								<a class="btn  btn-form  pull-left animated fadeIn delay-1s" id="btnIngresar">
			              			<i class="fas fa-hospital"></i>
			              			TRIAGE
		              			</a>

		              			<button type="submit" class="btn  btn-form  pull-right animated fadeIn delay-1s" id="btnIngresar">
			              			<i class="fas fa-key"></i>
			              			Ingresar
		              			</button>
	              			</div><!-- col -->
	            		</div><!-- row -->
					</div><!-- container-fluid -->
				</form>
			</div><!-- col -->			
		</div><!-- row -->
		
	</div><!-- container -->

	<div class="wave animated fadeIn">
		<svg viewBox="0 0 500 150" preserveAspectRatio="none" class="onda">
			<path  d="M-13.26,98.97 C133.46,174.97 328.72,52.58 505.92,97.98 L500.00,150.00 L0.00,150.00 Z" class="estiloOnda">
			</path>
		</svg>
	</div>	
	<!-- jquery -->
	<script src="../plugins/jQuery/jQuery-2.1.4.min.js"></script>
	<!-- bootstrap -->
	<script src="../plugins/bootstrap/js/bootstrap.min.js"></script>
	<!-- preloaders -->
	<script src="../plugins/Preloaders/jquery.preloaders.js"></script>
	<!-- bootstrap-toggle-master -->
	<script src="../plugins/bootstrap-toggle-master/doc/script.js"></script>
    <script src="../plugins/bootstrap-toggle-master/js/bootstrap-toggle.js"></script>
</body>
</html>
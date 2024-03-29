<?php  
include'../sesiones/verificar_sesion.php';
include'../funciones/menuActivo.php';
include'combos.php';
// variable que establece el menu activo.
$opa="B";
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Administración</title>
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
	<!-- alertify -->
	<link href="../plugins/alertifyjs/css/alertify.css" rel="stylesheet">	
	<link href="../plugins/alertifyjs/css/themes/default.css" rel="stylesheet">
	<!-- DataTables -->	
	<link rel="stylesheet" href="../plugins/datatables/dataTables.bootstrap.css">	
	<!-- animate -->
	<link rel="stylesheet" href="../plugins/animate/animate.css">
	<!-- select2 -->
	<link rel="stylesheet" href="../plugins/select2/select2.css">
</head>
<body>
	<header>
		<!-- encabezado -->
		<?php include'../layout/encabezado.php';?>
		<!-- encabezado -->
	</header><!-- /header -->	
	<div class="container-fluid tamContenido" >
		<div class="row">
			<div class="col-xs-0 col-sm-3 col-md-2 col-lg-2 vertical">
			<!-- sidebar -->
			<?php include'menu.php';?>
			<!-- sidebar -->
			</div>
			<div class="col-xs-12 col-sm-9 col-md-10 col-lg-10 cont">
			   <div class="titulo borde sombra">
			        <h3 class="animated zoomIn tPrincipal">Nuevo Paciente</h3>
			   </div>	
			   <div class="contenido borde sombra" style="padding-right:18px;">
				   <div class="container-fluid">
					<!-- Elementos -->
					<div class="formulario animated  slideInUp">
						<form role="form" class="interno" method="post" action="guardar.php">

							<div class="encabezado">
								Pacientes
							</div>

							<div class="cuerpo">
								<div class="row">
									<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
										<div class="form-group">
											<label>nhc :</label>
											<input type="number" name="nhc" id="nhc" class="form-control" required autofocus placeholder="# nhc">
										</div>
									</div>
									<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
										<div class="form-group">
											<label>Nombre :</label>
											<input type="text" name="nom" class="form-control" required autofocus placeholder="# Nombre">
										</div>
									</div>
									<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
										<div class="form-group">
											<label>Apellido Paterno :</label>
											<input type="text" name="apep" class="form-control" required autofocus placeholder="# Apellido paterno">
										</div>
									</div>
									<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
										<div class="form-group">
											<label>Apellido Materno :</label>
											<input type="text" name="apem" class="form-control" required autofocus placeholder="# Apellido materno">
										</div>
									</div>
									<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
										<div class="form-group">
											<label>Dirección :</label>
											<input type="text" name="dire" class="form-control" required autofocus placeholder="# Dirección">
										</div>
									</div>
									<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
										<div class="form-group">
											<label>Telefono :</label>
											<input type="text" name="tel" class="form-control" required autofocus placeholder="# Telefono">
										</div>
									</div>
									<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
										<div class="form-group">
											<label>Correo :</label>
											<input type="text" name="corre" class="form-control" required autofocus placeholder="# Correo">
										</div>
									</div>
									<div class="col-xs-12 col-sm-12 col-md-4 col-lg-6">
										<div class="form-group">
											<label>Religion :</label>
											<select name="idReligion" class="form-control select2" style="width: 100%;">
											<?
												for($i=0;$i<$num1;$i++) 
												{
												$id=mysql_result($combo1,$i,'id_religion');
												$religion=mysql_result($combo1,$i,'nombre_religion');
												echo "<option value=\"$id\" >$religion</option>";
												}
											?> 
											</select>
										</div>
									</div>
									<div class="col-xs-12 col-sm-12 col-md-4 col-lg-6">
										<div class="form-group">
											<label>Tipo de sangre :</label>
											<select name="tsangre" class="form-control select2" style="width: 100%;">
												<option value="O-">O-</option>
												<option value="O+">O+</option>
												<option value="A-">A-</option>
												<option value="A+">A+</option>
												<option value="B-">B-</option>
												<option value="B+">B+</option>
												<option value="AB-">AB-</option>
												<option value="AB+">AB+</option>
											</select>
										</div>
									</div>
								</div>
							</div>

							<div class="pie">
									<button id="btnPaciente" type="submit" class="btn btn-form">Guardar Datos</button>
							</div>

						</form>
					</div>
					<!-- Elementos -->
					</div>
			   </div>	
			</div>			
		</div>
	</div>
	<footer class="fondo">
	<?php include'../layout/pie.php';?>
	</footer>

	<!-- SCRIPT JAVASCRIPT -->

	<!-- jquery -->
	<script src="../plugins/jQuery/jQuery-2.1.4.min.js"></script>
	<!-- alertify -->
	<script src="../plugins/alertifyjs/alertify.js"></script>
	<!-- bootstrap -->
	<script src="../plugins/bootstrap/js/bootstrap.min.js"></script>
	<!-- preloaders -->
	<script src="../plugins/Preloaders/jquery.preloaders.js"></script>
	<!-- bootstrap-toggle-master -->
	<script src="../plugins/bootstrap-toggle-master/doc/script.js"></script>
	<script src="../plugins/bootstrap-toggle-master/js/bootstrap-toggle.js"></script>
	<!-- Scripts personalizados -->
	<script src="../js/menu.js"></script>
	<script src="../js/precarga.js"></script>
	<script src="../js/salir.js"></script>
	<script src="../js/contra.js"></script>
	<script src="funciones.js"></script>
    <!-- Select2 -->
	<script src="../plugins/select2/select2.full.min.js"></script>
	

	<script>
		$(function () {
			$(".select2").select2();
			
		});
	</script> 

</body>
</html>
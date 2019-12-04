<?php  
include'../sesiones/verificar_sesion.php';
include'../funciones/menuActivo.php';

// variable que establece el menu activo.
$opa="A";

$fechaSistema=date("Y-m-d"); 
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
			        <h3 class="animated zoomIn tPrincipal">Reportes de Urgencias</h3>
			   </div>	
			   <div class="contenido borde sombra" style="padding-right:18px;">
				   <div class="container-fluid">
					<!-- Elementos -->
					<div class="row">

						<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
							<div class="formulario animated  slideInUp">
								<form role="form" class="interno" method="get" target="_blank" action="pdfUrgTalta.php">

									<div class="encabezado">
										Alta de urgencias
									</div>

									<div class="cuerpo">
										<div class="row">
											<div class="col-xs-12">
												<div class="form-group">
													<label>Tipo de Alta :</label>
													<select name="tipoAlta" class="form-control select2" style="width: 100%;">
														<option value="Alta Voluntaria">Alta Voluntaria</option>
														<option value="Curación-mejoria">Curación-mejoria</option>
														<option value="Error Administrativo">Error Administrativo</option>
														<option value="Fallecimiento">Fallecimiento</option>
														<option value="Hospitalizacion">Hospitalizacion</option>
														<option value="Traslado a otro hospital">Traslado a otro hospital</option>
														<option value="Otras Causas">Otras Causas</option>
													</select>
												</div>
											</div>
											<div class="col-xs-12">
												<div class="form-group">
													<label>Fecha Inicial:</label>
													<input type="date" name="fechaInicial" class="form-control" value="<?php echo $fechaSistema ?>">
												</div>
											</div>
											<div class="col-xs-12">
												<div class="form-group">
													<label>Fecha Final:</label>
													<input type="date" name="fechaFinal" class="form-control" value="<?php echo $fechaSistema ?>">
												</div>
											</div>
										</div>
									</div>

									<div class="pie">
											<button type="submit" class="btn btn-form">Imprimir Listado</button>
									</div>

								</form>
							</div>
						</div>

						<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
							<div class="formulario animated  slideInUp">
								<form role="form" class="interno" method="get" target="_blank" action="pdfUrgNivel.php">

									<div class="encabezado">
										Triage
									</div>

									<div class="cuerpo">
										<div class="row">
											<div class="col-xs-12">
												<div class="form-group">
													<label>Nivel de urgencia :</label>
													<select name="nivel" class="form-control select2" style="width: 100%;">
														<option value="0">Sin Clasificar</option>
														<option value="1">Nivel 1 - Reanimacón</option>
														<option value="2">Nivel 2 - Emergencia</option>
														<option value="3">Nivel 3 - Urgencia</option>
														<option value="4">Nivel 4 - Prioritario</option>
														<option value="5">Nivel 5 - No Urgente</option>
													</select>
												</div>
											</div>
											<div class="col-xs-12">
												<div class="form-group">
													<label>Fecha Inicial:</label>
													<input type="date" name="fechaInicial" class="form-control" value="<?php echo $fechaSistema ?>">
												</div>
											</div>
											<div class="col-xs-12">
												<div class="form-group">
													<label>Fecha Final:</label>
													<input type="date" name="fechaFinal" class="form-control" value="<?php echo $fechaSistema ?>">
												</div>
											</div>
										</div>
									</div>

									<div class="pie">
											<button type="submit" class="btn btn-form">Imprimir Listado</button>
									</div>

								</form>
							</div>
						</div>

						<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
							<div class="formulario animated  slideInUp">
								<form role="form" class="interno" method="get" target="_blank" action="pdfUrgGenero.php">

									<div class="encabezado">
										Genero del Paciente
									</div>

									<div class="cuerpo">
										<div class="row">
											<div class="col-xs-12">
												<div class="form-group">
													<label>Sexo :</label>
													<select name="sexo" class="form-control select2" style="width: 100%;">
														<option value="M">Masculino</option>
														<option value="F">Femenino</option>
													</select>
												</div>
											</div>
											<div class="col-xs-12">
												<div class="form-group">
													<label>Fecha Inicial:</label>
													<input type="date" name="fechaInicial" class="form-control" value="<?php echo $fechaSistema ?>">
												</div>
											</div>
											<div class="col-xs-12">
												<div class="form-group">
													<label>Fecha Final:</label>
													<input type="date" name="fechaFinal" class="form-control" value="<?php echo $fechaSistema ?>">
												</div>
											</div>
										</div>
									</div>

									<div class="pie">
											<button type="submit" class="btn btn-form">Imprimir Listado</button>
									</div>

								</form>
							</div>
						</div>

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
    <!-- Select2 -->
	<script src="../plugins/select2/select2.full.min.js"></script>
	
	<script>
		$(function () {
			$(".select2").select2();
			
		});
	</script> 

</body>
</html>
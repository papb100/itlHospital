<?php  
include'../sesiones/verificar_sesion.php';
include'../funciones/menuActivo.php';
include'combos.php';
// variable que establece el menu activo.
$opa="B";
$fecha=date("Y-m-d"); 
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
			        <h3 class="animated zoomIn tPrincipal">Nueva Persona</h3>
			   </div>	
			   <div class="contenido borde sombra" style="padding-right:18px;">
				   <div class="container-fluid">
					<!-- Elementos -->
					<div class="formulario animated  slideInUp">
						<form role="form" class="interno" method="post" action="guardar.php">

							<div class="encabezado">
								Personas
							</div>

							<div class="cuerpo">
								<div class="row">
									<div class="col-xs-12 col-sm-12 col-md-12 col-lg-4">
										<div class="form-group">
											<label>Nombre :</label>
											<input type="text" name="nombre" class="form-control" required autofocus placeholder="Nombre Persona">
										</div>
									</div>
									<div class="col-xs-12 col-sm-12 col-md-12 col-lg-4">
										<div class="form-group">
											<label>Apellido Paterno :</label>
											<input type="text" name="apPat" class="form-control" required autofocus placeholder="Apellido Paterno Persona">
										</div>
									</div>
									<div class="col-xs-12 col-sm-12 col-md-12 col-lg-4">
										<div class="form-group">
											<label>Apellido Materno :</label>
											<input type="text" name="apMat" class="form-control" required autofocus placeholder="Apellido Materno Persona">
										</div>
									</div>
									<div class="col-xs-4 col-sm-4 col-md-4 col-lg-2">
										<div class="form-group">
											<label>Sexo :</label>
											<select name="sex" class="form-control select2" style="width: 100%;">
                                                <option value="M">Masculino</option>
                                                <option value="F">Femenino</option>
                                            </select>
										</div>
									</div>
									<div class="col-xs-4 col-sm-4 col-md-4 col-lg-2">
										<div class="form-group">
											<label>Estado Civil :</label>
											<select name="eCivil" class="form-control select2" style="width: 100%;">
                                                <option value="Solter@">Solter@</option>
                                                <option value="Casad@">Casad@</option>
                                                <option value="Divorciad@">Divorciad@</option>
                                                <option value="Viud@">Viud@</option>
                                            </select>
										</div>
									</div>
									<div class="col-xs-12 col-sm-12 col-md-12 col-lg-2">
										<div class="form-group">
											<label>Teléfono :</label>
											<input type="number" name="telefono" class="form-control" required autofocus placeholder="# Teléfono">
										</div>
									</div>
									<div class="col-xs-12 col-sm-12 col-md-12 col-lg-2">
										<div class="form-group">
											<label>RFC :</label>
											<input type="text" name="rfc" class="form-control" required autofocus placeholder="RFC Persona">
										</div>
									</div>
									<div class="col-xs-12 col-sm-8 col-md-4 col-lg-4">
										<div class="form-group">
											<label>Fecha de Nacimiento :</label>
											<input type="date" name="fNac" class="form-control" value="<?php echo $fecha;?>" required>
										</div>
									</div>
									<div class="col-xs-4 col-sm-4 col-md-4 col-lg-6">
										<div class="form-group">
											<label>Correo :</label>
											<input type="email" name="email" class="form-control" required placeholder="Correo Persona">
										</div>
									</div>
									<div class="col-xs-4 col-sm-4 col-md-4 col-lg-3">
										<div class="form-group">
											<label>Colonia :</label>
											<input type="text" name="col" class="form-control" required placeholder="Colonia Persona">
										</div>
									</div>
									<div class="col-xs-4 col-sm-4 col-md-4 col-lg-3">
										<div class="form-group">
											<label>Calle :</label>
											<input type="text" name="street" class="form-control" required placeholder="Calle Persona">
										</div>
									</div>
									<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
										<div class="form-group">
											<label>Número :</label>
											<input type="number" name="numCasa" class="form-control" required placeholder="# Casa Persona">
										</div>
									</div>
									<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
										<div class="form-group">
											<label>Municipio :</label>
											<select name="municipio" class="form-control select2" style="width: 100%;">
											<?
												for($i=0;$i<$num2;$i++) 
												{
												$id=mysql_result($combo2,$i,'id_municipio');
												$municipio=mysql_result($combo2,$i,'municipio');
												echo "<option value=\"$municipio\" >$municipio</option>";
												}
											?> 
											</select>
										</div>
									</div>
									<div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
										<div class="form-group">
											<label>Estado :</label>
											<select name="estado" class="form-control select2" style="width: 100%;">
											<?
												for($i=0;$i<$num3;$i++) 
												{
												$id=mysql_result($combo3,$i,'id_estado');
												$estado=mysql_result($combo3,$i,'estado');
												echo "<option value=\"$estado\" >$estado</option>";
												}
											?> 
											</select>
										</div>
									</div>
								</div>
							</div>

							<div class="pie">
									<button type="submit" class="btn btn-form">Guardar Datos</button>
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
    <!-- Select2 -->
	<script src="../plugins/select2/select2.full.min.js"></script>

	<script>
		$(function () {
			$(".select2").select2();
			
		});
	</script> 

</body>
</html>
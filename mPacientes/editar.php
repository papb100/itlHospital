<?php
include'../conexion/conexion.php';
include'combos.php';
$id=$_GET['id'];

mysql_query("SET NAMES utf8");
$consulta=mysql_query("SELECT
							id_paciente,
							nhc,
							nombre,
							ap_paterno,
							ap_materno,
							direccion,
							telefono,
							correo,
							religiones.id_religion,
							religiones.nombre_religion,
							tipo_sangre
						FROM
							pacientes
						INNER JOIN religiones ON religiones.id_religion=pacientes.id_religion
						WHERE id_paciente=$id",$conexion) or die (mysql_error());

$row=mysql_fetch_row($consulta);

$id         = $row[0];
$nhc  = $row[1];
$nom = $row[2];
$apep   = $row[3];
$apem      = $row[4];
$dire      = $row[5];
$tel      = $row[6];
$correo      = $row[7];
$idRel      = $row[8];
$rel      = $row[9];
$tsangre      = $row[10];

$opa="A";
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
			        <h3 class="animated zoomIn tPrincipal">Editar Paciente</h3>
			   </div>	
			   <div class="contenido borde sombra" style="padding-right:18px;">
				   <div class="container-fluid">
					<!-- Elementos -->
					<div class="formulario animated  slideInUp">
						<form role="form" class="interno" method="post" action="actualizar.php">

							<div class="encabezado">
								Pacientes
							</div>
							<input type="hidden" name="ide" value="<?php echo $id?>">
							<div class="cuerpo">
								<div class="row">
								<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
										<div class="form-group">
											<label>nhc :</label>
											<input type="numeric" name="nhc" class="form-control" required autofocus placeholder="# nhc" value="<?php echo $nhc?>">
										</div>
									</div>
									<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
										<div class="form-group">
											<label>Nombre :</label>
											<input type="text" name="nom" class="form-control" required autofocus placeholder="# Nombre" value="<?php echo $nom?>">
										</div>
									</div>
									<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
										<div class="form-group">
											<label>Apellido Paterno :</label>
											<input type="text" name="apep" class="form-control" required autofocus placeholder="# Apellido paterno" value="<?php echo $apep?>">
										</div>
									</div>
									<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
										<div class="form-group">
											<label>Apellido Materno :</label>
											<input type="text" name="apem" class="form-control" required autofocus placeholder="# Apellido materno" value="<?php echo $apem?>">
										</div>
									</div>
									<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
										<div class="form-group">
											<label>Dirección :</label>
											<input type="text" name="dire" class="form-control" required autofocus placeholder="# Dirección" value="<?php echo $dire?>">
										</div>
									</div>
									<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
										<div class="form-group">
											<label>Telefono :</label>
											<input type="text" name="tel" class="form-control" required autofocus placeholder="# Telefono" value="<?php echo $tel?>">
										</div>
									</div>
									<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
										<div class="form-group">
											<label>Correo :</label>
											<input type="text" name="corre" class="form-control" required autofocus placeholder="# Correo" value="<?php echo $correo?>">
										</div>
									</div>
									<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
										<div class="form-group">
											<label>Religion :</label>
											<select name="idReligion" class="form-control select2" style="width: 100%;">
											<option value="<?php echo $idRel?>" ><?php echo $rel?></option>
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
									<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
										<div class="form-group">
											<label>Tipo de sangre :</label>
											<input type="text" name="tsangre" class="form-control" required autofocus placeholder="# Tipo de sangre" value="<?php echo $tsangre?>">
										</div>
									</div>
								</div>
							</div>

							<div class="pie">
									<button type="submit" class="btn btn-form">Actualizar Datos</button>
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
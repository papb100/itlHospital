<?php
include'../conexion/conexion.php';
include'combos.php';
$id=$_GET['id'];

mysql_query("SET NAMES utf8");
$consulta=mysql_query("SELECT
							id_medico,
							cedula,
							trabajadores.id_trabajador,
							(SELECT CONCAT(ap_paterno,' ',ap_materno,' ',nombre) FROM personas WHERE 	personas.id_persona=trabajadores.id_persona) as Trabajador,
							especialista,
							especialidades.id_especialidad,
							especialidades.nombre_especialidad
						FROM
							medicos
						INNER JOIN trabajadores ON trabajadores.id_trabajador=medicos.id_trabajador
						INNER JOIN especialidades ON especialidades.id_especialidad=medicos.id_especialidad
						WHERE id_medico=$id",$conexion) or die (mysql_error());

$row=mysql_fetch_row($consulta);

$id         = $row[0];
$cedula  = $row[1];
$idTrabajador = $row[2];
$trabajador   = $row[3];
$especialista      = $row[4];
$res=($especialista==1)?"Si":"No";
// switch ($especialista) {
// 	case '1':
// 		$res = "Si";
// 		break;
// 	case '0':
// 		$res = "No";
// 		break;
// 	default:
// 		# code...
// 		break;
// }
$idEspecialidad	    = $row[5];
$Especialidad       = $row[6];

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
			        <h3 class="animated zoomIn tPrincipal">Editar Medico</h3>
			   </div>	
			   <div class="contenido borde sombra" style="padding-right:18px;">
				   <div class="container-fluid">
					<!-- Elementos -->
					<div class="formulario animated  slideInUp">
						<form role="form" class="interno" method="post" action="actualizar.php">

							<div class="encabezado">
								Medicos
							</div>
							<input type="hidden" name="ide" value="<?php echo $id?>">
							<div class="cuerpo">
								<div class="row">
									<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
										<div class="form-group">
											<label>Cedula :</label>
											<input type="text" name="clave" class="form-control" required autofocus placeholder="# Cedula" value="<?php echo $cedula?>">
										</div>
									</div>
									<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
										<div class="form-group">
											<label>Medico :</label>
											<select name="idTrabajador" class="form-control select2" style="width: 100%;">
											<option value="<?php echo $idTrabajador?>" ><?php echo $trabajador?></option>
											<?
												for($i=0;$i<$num1;$i++) 
												{
												$id=mysql_result($combo1,$i,'idTrabajador');
												$usuario=mysql_result($combo1,$i,'Persona');
												echo "<option value=\"$id\" >$usuario</option>";
												}
											?> 
											</select>
										</div>
									</div>
									<div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
										<div class="form-group">
											<label>Especialista :</label>
											<select name="esp" class="form-control select2" style="width: 100%;">
											<option value="<?php echo $especialista ?>"><?php echo $res ?></option>
											 	<option value="1">SI</option>
											 	<option value="0">No</option>
											</select>
										</div>
									</div>
									<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
										<div class="form-group">
											<label>Especialidad :</label>
											<select name="idEspecialidad" class="form-control select2" style="width: 100%;">
											<option value="<?php echo $idEspecialidad?>" ><?php echo $Especialidad?></option>
											<?
												for($i=0;$i<$num2;$i++) 
												{
												$id=mysql_result($combo2,$i,'id_especialidad');
												$usuario=mysql_result($combo2,$i,'nombre_especialidad');
												echo "<option value=\"$id\" >$usuario</option>";
												}
											?> 
											</select>
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
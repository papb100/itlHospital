<?php
include'../conexion/conexion.php';
include'combos.php';
$id=$_GET['id'];

mysql_query("SET NAMES utf8");
$consulta=mysql_query("SELECT
							id_usuario,
							nombre_usuario,
							trabajadores.id_persona,
							(SELECT CONCAT(ap_paterno,' ',ap_materno,' ',nombre) FROM personas WHERE personas.id_persona=trabajadores.id_persona) as Trabajador,
							contra
						FROM
							usuarios
						INNER JOIN trabajadores ON trabajadores.id_trabajador=usuarios.id_trabajador
						WHERE id_usuario=$id",$conexion) or die (mysql_error());

$row=mysql_fetch_row($consulta);

$id         = $row[0];
$nomUsuario = $row[1];
$idPersona  = $row[2];
$nomPersona = $row[3];
$contra     = $row[4];

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
			        <h3 class="animated zoomIn tPrincipal">Editar Usuarios</h3>
			   </div>	
			   <div class="contenido borde sombra" style="padding-right:18px;">
				   <div class="container-fluid">
					<!-- Elementos -->
					<div class="formulario animated  slideInUp">
						<form role="form" class="interno" method="post" action="actualizar.php">

							<div class="encabezado">
								Usuarios
							</div>

							<input type="hidden" name="ide" value="<?php echo $id?>">
							<input type="text" value="<?php echo $idPersona;?>">

							<div class="cuerpo">
								<div class="row">
									<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
										<div class="form-group">
											<label>Persona :</label>
											<select disabled name="idPersona" class="form-control select2" style="width: 100%;">
											<option value="<?php echo $idPersona?>" ><?php echo $nomPersona?></option>
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
									
									<div class="col-xs-12 col-sm-4 col-md-4 col-lg-3">
										<div class="form-group">
											<label>Usuario :</label>
											<input type="text" name="nomUsuario" class="form-control" required autofocus placeholder="Usuario..." value="<?php echo $nomUsuario?>">
										</div>
									</div>

									<div class="col-xs-12 col-sm-4 col-md-4 col-lg-3">
										<div class="form-group">
											<label>Contraseña :</label>
											<input type="text" name="clave" class="form-control" required autofocus placeholder="Contraseña..." value="<?php echo $contra?>">
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
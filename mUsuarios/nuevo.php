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
			        <h3 class="animated zoomIn tPrincipal">Nuevo Usuario</h3>
			   </div>	
			   <div class="contenido borde sombra" style="padding-right:18px;">
				   <div class="container-fluid">
					<!-- Elementos -->
					<div class="formulario animated  slideInUp">
						<form role="form" class="interno" method="post" action="guardar.php">

							<div class="encabezado">
								Usuarios
							</div>

							<div class="cuerpo">
								<div class="row">
									
									
									<div class="col-xs-12 col-sm-4 col-md-4 col-lg-12">
										<div class="form-group">
											<label>Nombre de usuario :</label>
											<input type="text" name="nomUsuario" class="form-control" required autofocus placeholder="Usuario...">
										</div>
									</div>
									<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
										<div class="form-group">
											<label>Trabajador :</label>
											<select name="idTrabajador" class="form-control select2" style="width: 100%;">
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
									<div class="col-xs-12 col-sm-4 col-md-4 col-lg-12">
										<div class="form-group">
											<label>Contraseña :</label>
											<input type="password" name="contra" class="form-control" required autofocus placeholder="Contraseña...">
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

	<div class="modal fade" id="miModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
					<h3 class="modal-title  tPrincipal">Información de usuario</h3>
				</div>
				<div class="modal-body animated flipInX">
						<img src="../imagenes/avatar.jpg" class="img-thumbnail mImg">
						<h4 class="tPrincipal colorLetra centrar">
							Plantilla base
						</h4>

						<h4 class="tPrincipal colorLetra centrar">
							MGTI. Pablo Adrián Perez Briseño
						</h4>

						<h4 class="tPrincipal colorLetra centrar">
							Empresa / Institución
						</h4>
				</div>
			</div>
		</div>
	</div>
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
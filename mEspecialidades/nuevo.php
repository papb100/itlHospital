<?php  
include'../sesiones/verificar_sesion.php';
include'../funciones/menuActivo.php';

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
			        <h3 class="animated zoomIn tPrincipal">Nueva Especialidad</h3>
			   </div>	
			   <div class="contenido borde sombra" style="padding-right:18px;">
				   <div class="container-fluid">
					<!-- Elementos -->
					<div class="formulario animated  slideInUp">
						<form role="form" class="interno" method="post" action="guardar.php">

							<div class="encabezado">
								Especialidades
							</div>

							<div class="cuerpo">
								<div class="row">
									<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
										<div class="form-group">
											<label>Especialidad :</label>
											<input type="text" name="espe" class="form-control" required autofocus placeholder="Escribe una nueva especialidad...">
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
	
	<script type= "text/javascript">
		$(document).ready(function() {
			$('#example1').DataTable( {
				"language"                : {
						// "url"          : "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Spanish.json"
						"url"             : "../plugins/datatables/langauge/Spanish.json"
					},
				"order"                   : [[ 0, "asc" ]],
				"paging"                  : true,
				"ordering"                : true,
				"info"                    : true,
				"responsive"              : true,
				"searching"               : true,
				"pagingType"              : "full_numbers",
				stateSave                 : false,
				dom                      : 'Bfrtip',
				lengthMenu               : [
					[ 10, 25, 50, -1 ],
					[ '10 Registros', '25 Registros', '50 Registros', 'Todos' ],
				],
				columnDefs                : [ {
					// targets           : 0,
					// visible           : false
				}],
				buttons                  : [

						{
							extend       : 'excel',
							text         : "<i class='far fa-file-excel'></i> Exportar a Excel",
							className    : 'btn btn-form  btn-flat',
							title        : 'Lista',
							exportOptions: {
								columns  : ':visible'
							}
						},
						{
							extend       : 'pdf',
							text         : "<i class='far fa-file-pdf'></i> Crear PDF",
							className    : 'btn btn-form  btn-flat',
							title        : 'Lista',
							exportOptions: {
								columns  : ':visible'
							}
						},
						{
							text         : "<i class='far fa-file'></i> Nuevo Registro",
							className    : 'btn btn-form  btn-flat',
							action       : function (  ) {
								window.location="nuevo.php"
							},
							counter      : 1
						},
				]
			} );
		} );
	</script>

	<script>
		$(function () {
			$(".select2").select2();
			
		});
	</script> 

</body>
</html>
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
	<!-- animate -->
	<link rel="stylesheet" href="../plugins/animate/animate.css">
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
			<?php include'../layout/sidebar.php';?>
			<!-- sidebar -->
			</div>

			<div class="col-xs-12 col-sm-9 col-md-10 col-lg-10 cont">
			   	<div class="titulo borde sombra">
			        <h3 class="animated zoomIn tPrincipal">Panel de control</h3>
			   	</div>	
			   	<div class="contenido borde sombra" style="padding-right:18px;">
					<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
						<!-- Inicio item del acoordeon -->
			   			<div class="panel panel-default">
							<div class="panel-heading" role="tab" id="heading1">
								<h4 class="panel-title">
									<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse1" aria-expanded="true" aria-controls="collapse1">
										Administración del Sistema
									</a>
								</h4>
							</div>

							<div id="collapse1" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="heading1">
						
								<div class="panel-body">
									<div class="row">
										<div class="col-xs-12 col-sm-4 col-md-3 col-lg-2">
											<div class="caja animated flipInX">
												<i class="fas fa-user-friends"></i>
												<p><a href="../mPersonas/index.php" class="cenlace">Personas</a></p>
											</div>
										</div>
										<div class="col-xs-12 col-sm-4 col-md-3 col-lg-2">
											<div class="caja animated flipInX">
												<i class="fas fa-users"></i>
												<p><a href="../mUsuarios/index.php" class="cenlace">Usuarios</a></p>
											</div>
										</div>
									</div>
								</div>

							</div>
						</div>
						<!-- Fin item del acoordeon -->
						<!-- Inicio item del acoordeon -->
						<div class="panel panel-default">
							<div class="panel-heading" role="tab" id="heading2">
								<h4 class="panel-title">
									<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse2" aria-expanded="true" aria-controls="collapse2">
										Datos Laborales
									</a>
								</h4>
							</div>

							<div id="collapse2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading2">
						
								<div class="panel-body">
									<div class="row">
										<div class="col-xs-12 col-sm-4 col-md-3 col-lg-2">
											<div class="caja animated flipInX">
												<i class="fas fa-user-tie"></i>
												<p><a href="../mTrabajadores/index.php" class="cenlace">Trabajadores</a></p>
											</div>
										</div>
										<div class="col-xs-12 col-sm-4 col-md-3 col-lg-2">
											<div class="caja animated flipInX">
												<i class="fas fa-user-shield"></i>
												<p><a href="../mAdministrativos/index.php" class="cenlace">Administrativos</a></p>
											</div>
										</div>
										<div class="col-xs-12 col-sm-4 col-md-3 col-lg-2">
											<div class="caja animated flipInX">
												<i class="fas fa-user-md"></i>
												<p><a href="../mMedicos/index.php" class="cenlace">Médicos</a></p>
											</div>
										</div>
										<div class="col-xs-12 col-sm-4 col-md-3 col-lg-2">
											<div class="caja animated flipInX">
												<i class="fas fa-user-clock"></i>
												<p><a href="../mChoferes/index.php" class="cenlace">Choferes</a></p>
											</div>
										</div>
										<div class="col-xs-12 col-sm-4 col-md-3 col-lg-2">
											<div class="caja animated flipInX">
												<i class="fas fa-user-nurse"></i>
												<p><a href="../mEnfermeros/index.php" class="cenlace">Enfermeros</a></p>
											</div>
										</div>
										<div class="col-xs-12 col-sm-4 col-md-3 col-lg-2">
											<div class="caja animated flipInX">
												<i class="fas fa-user-tag"></i>
												<p><a href="../mTiposTrabajadores/index.php" class="cenlace">Tipos de Trabajadores</a></p>
											</div>
										</div>
									</div>
								</div>

							</div>
						</div>
						<!-- Fin item del acoordeon -->
						<!-- Inicio item del acoordeon -->
						<div class="panel panel-default">
							<div class="panel-heading" role="tab" id="heading3">
								<h4 class="panel-title">
									<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse3" aria-expanded="true" aria-controls="collapse3">
										Catálogos Generales
									</a>
								</h4>
							</div>

							<div id="collapse3" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading3">
						
								<div class="panel-body">
									<div class="row">
										<div class="col-xs-12 col-sm-4 col-md-3 col-lg-2">
											<div class="caja animated flipInX">
												<i class="fas fa-ambulance"></i>
												<p><a href="../mAmbulancias/index.php" class="cenlace">Ambulancias</a></p>
											</div>
										</div>
										<div class="col-xs-12 col-sm-4 col-md-3 col-lg-2">
											<div class="caja animated flipInX">
												<i class="fas fa-bed"></i>
												<p><a href="../mCamas/index.php" class="cenlace">Camas</a></p>
											</div>
										</div>
										<div class="col-xs-12 col-sm-4 col-md-3 col-lg-2">
											<div class="caja animated flipInX">
												<i class="fas fa-clinic-medical"></i>
												<p><a href="../mConsultorios/index.php" class="cenlace">Consultorios</a></p>
											</div>
										</div>
										<div class="col-xs-12 col-sm-4 col-md-3 col-lg-2">
											<div class="caja animated flipInX">
												<i class="fas fa-layer-group"></i>
												<p><a href="../mDepartamentos/index.php" class="cenlace">Departamentos</a></p>
											</div>
										</div>
										<div class="col-xs-12 col-sm-4 col-md-3 col-lg-2">
											<div class="caja animated flipInX">
												<i class="fas fa-stethoscope"></i>
												<p><a href="../mEspecialidades/index.php" class="cenlace">Especialidades</a></p>
											</div>
										</div>

										<div class="col-xs-12 col-sm-4 col-md-3 col-lg-2">
											<div class="caja animated flipInX">
												<i class="fas fa-hospital-alt"></i>
												<p><a href="../mHospitales/index.php" class="cenlace">Hospitales</a></p>
											</div>
										</div>
										<div class="col-xs-12 col-sm-4 col-md-3 col-lg-2">
											<div class="caja animated flipInX">
												<i class="fas fa-user-injured"></i>
												<p><a href="../mPacientes/index.php" class="cenlace">Pacientes</a></p>
											</div>
										</div>
										<div class="col-xs-12 col-sm-4 col-md-3 col-lg-2">
											<div class="caja animated flipInX">
												<i class="fas fa-bookmark"></i>
												<p><a href="../mPuestos/index.php" class="cenlace">Puestos</a></p>
											</div>
										</div>
										<div class="col-xs-12 col-sm-4 col-md-3 col-lg-2">
											<div class="caja animated flipInX">
												<i class="fas fa-bible"></i>
												<p><a href="../mReligiones/index.php" class="cenlace">Religiones</a></p>
											</div>
										</div>
									</div>
								</div>

							</div>
						</div>
						<!-- Fin item del acoordeon -->
						<!-- Inicio item del acoordeon -->
						<div class="panel panel-default">
							<div class="panel-heading" role="tab" id="heading4">
								<h4 class="panel-title">
									<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse4" aria-expanded="true" aria-controls="collapse4">
										Urgencias
									</a>
								</h4>
							</div>

							<div id="collapse4" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading4">
						
								<div class="panel-body">
									<div class="row">
										<div class="col-xs-12 col-sm-4 col-md-3 col-lg-2">
											<div class="caja animated flipInX">
												<i class="fas fa-laptop-medical"></i>
												<p><a href="../mUrgIngresarPaciente/index.php" class="cenlace">Ingresar Paciente</a></p>
											</div>
										</div>
										<div class="col-xs-12 col-sm-4 col-md-3 col-lg-2">
											<div class="caja animated flipInX">
												<i class="fas fa-comment-medical"></i>
												<p><a href="../mUrgAtenderPaciente/index.php" class="cenlace">Atender Paciente</a></p>
											</div>
										</div>
										<div class="col-xs-12 col-sm-4 col-md-3 col-lg-2">
											<div class="caja animated flipInX">
												<i class="fas fa-file-medical"></i>
												<p><a href="../mUrgListaIngresados/index.php" class="cenlace">Ingresados</a></p>
											</div>
										</div>
										<div class="col-xs-12 col-sm-4 col-md-3 col-lg-2">
											<div class="caja animated flipInX">
												<i class="fas fa-notes-medical"></i>
												<p><a href="../mUrgFicha/index.php" class="cenlace">Ficha de Alta</a></p>
											</div>
										</div>
										<div class="col-xs-12 col-sm-4 col-md-3 col-lg-2">
											<div class="caja animated flipInX">
												<i class="fas fa-notes-medical"></i>
												<p><a href="../mUrgReportes/index.php" class="cenlace">Reportes</a></p>
											</div>
										</div>
									</div>
								</div>

							</div>
						</div>
						<!-- Fin item del acoordeon -->
						<!-- Inicio item del acoordeon -->
						<div class="panel panel-default">
							<div class="panel-heading" role="tab" id="heading4">
								<h4 class="panel-title">
									<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse4" aria-expanded="true" aria-controls="collapse4">
										Módulos Especialidades
									</a>
								</h4>
							</div>

							<div id="collapse4" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading4">
						
								<div class="panel-body">
									<div class="row">
										<div class="col-xs-12 col-sm-4 col-md-3 col-lg-2">
											<div class="caja animated flipInX">
												<i class="fas fa-calendar-alt"></i>
												<p><a href="../mAmbulancias/index.php" class="cenlace">Agendas</a></p>
											</div>
										</div>
										<div class="col-xs-12 col-sm-4 col-md-3 col-lg-2">
											<div class="caja animated flipInX">
												<i class="fas fa-money-check-alt"></i>
												<p><a href="../mCamas/index.php" class="cenlace">Descuentos</a></p>
											</div>
										</div>
										<div class="col-xs-12 col-sm-4 col-md-3 col-lg-2">
											<div class="caja animated flipInX">
												<i class="fas fa-procedures"></i>
												<p><a href="../mConsultorios/index.php" class="cenlace">Hospitalizados</a></p>
											</div>
										</div>
										<div class="col-xs-12 col-sm-4 col-md-3 col-lg-2">
											<div class="caja animated flipInX">
												<i class="fas fa-truck-moving"></i>
												<p><a href="../mDepartamentos/index.php" class="cenlace">Traslados</a></p>
											</div>
										</div>
									</div>
								</div>

							</div>
						</div>
						<!-- Fin item del acoordeon -->
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

</body>
</html>
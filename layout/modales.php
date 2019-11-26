<!-- MODALES -->
<!-- Informacion de usuario -->
<div class="modal fade" id="modalInfo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
				<h3 class="modal-title  tPrincipal">Información de usuario</h3>
			</div>
			<div class="modal-body animated flipInX">
					<img src="../imagenes/avatar.png" class="img-thumbnail mImg">
					<h4 class="tPrincipal colorLetra centrar">
						Equipo # 
					</h4>

					<h4 class="tPrincipal colorLetra centrar">
						<?php echo $nLargo ?>
					</h4>

					<h4 class="tPrincipal colorLetra centrar">
						<?php echo $empInstitucion ?>
					</h4>
			</div>
		</div>
	</div>
</div>
<!-- Cambio de Contraseña -->
<div class="modal fade" id="modalContra" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
				<h3 class="modal-title  tPrincipal">Cambiar contraseña actual</h3>
			</div>
			<div style="padding-right:5px;">
				   <div class="container-fluid">
					<!-- Elementos -->
					<div class="formulario animated  fadeIn">
						<form role="form" class="interno" method="post" action="../inicio/actualizarContra.php">

							<div class="encabezado">
								Cambiar contraseña
							</div>

							<div class="cuerpo">
								<div class="row">
									<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
										<div class="form-group">
											<label>Contraseña :</label>
											<input type="password" id="inpContra" name="contra" class="form-control" required autofocus placeholder="Escribe la nueva contraseña">
										</div>
									</div>
									<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
										<div class="form-group">
											<label>Verificar contraseña :</label>
											<input type="password" id="inpVcontra" name="vContra" class="form-control"  autofocus placeholder="Vuelve a escribir la contraseña">
										</div>
									</div>
								</div>
							</div>

							<div class="pie">
									<button value=0 type="button" disabled id="btnVerContra" class="btn btn-form pull-left">
										<i id="icoVerContra" class="far fa-eye-slash"></i>
									</button>
									<button type="submit" disabled  id="btnActualizarContra" class="btn btn-form">
										Actualizar Datos
									</button>
							</div>

						</form>
					</div>
					<!-- Elementos -->
					</div>
			   </div>
		</div>
	</div>
</div>
<!-- Cambio de Contraseña -->
<div class="modal fade" id="modalDatos" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
				<h3 class="modal-title  tPrincipal">Cambiar mis datos personales</h3>
			</div>
			<div style="padding-right:5px;">
				   <div class="container-fluid">
					<!-- Elementos -->
					<div class="formulario animated  fadeIn">
						<form role="form" class="interno" method="post" action="../inicio/actualizarDatos.php">

							<div class="encabezado">
								Datos Personales
							</div>

							<div class="cuerpo">
								<div class="row">
									<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
										<div class="form-group">
											<label>Nombre :</label>
											<input type="text" name="contra" class="form-control" required autofocus placeholder="Escribe tú nombre">
										</div>
									</div>
								</div>
							</div>

							<div class="pie">
									<button type="submit" disabled   class="btn btn-form">
										Actualizar Datos
									</button>
							</div>

						</form>
					</div>
					<!-- Elementos -->
					</div>
			   </div>
		</div>
	</div>
</div>
<!-- MODALES -->
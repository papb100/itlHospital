<?php  
include'../conexion/conexion.php';
include'../sesiones/verificar_sesion.php';
include'../mPersonas/combos.php';
$idPersona= $_SESSION["s_idPersona"];

mysql_query("SET NAMES utf8");
$consulta=mysql_query("SELECT
							id_persona,
							nombre,
                            ap_paterno,
                            ap_materno,
                            sexo,
                            ecivil,
                            telefono,
                            rfc,
                            correo,
                            fecha_nac,
                            colonia,
                            calle,
                            numero,
                            municipio,
                            estado,
                            activo,
                            fecha_registro,
                            hora_registro
							FROM
							personas
						WHERE id_persona=$idPersona",$conexion) or die (mysql_error());

$row=mysql_fetch_row($consulta);

$id = $row[0];
$nombre = $row[1];
$apPaterno = $row[2];
$apMaterno = $row[3];
$sexo = $row[4];
$eCivil = $row[5];
$telefono = $row[6];
$rfc = $row[7];
$correo = $row[8];
$fecha_nac = $row[9];
$colonia = $row[10];
$calle = $row[11];
$numero = $row[12];
$municipio = $row[13];
$estado = $row[14];


$genero=($sexo == 'M')?'Masculino':'Femenino';

if($eCivil == 'Solter@'){
	$civil = 'Solter@';
}else{
	if($eCivil == 'Casad@'){
		$civil = 'Casad@';
	}else{
		if($eCivil == 'Divorciad@'){
			$civil = 'Divorciad@';
		}else{
			$civil = 'Viud@';
		}
	}
}

$opa="A";

?>
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
								<div class="col-xs-12 col-sm-12 col-md-12 col-lg-4">
										<div class="form-group">
											<label>Nombre :</label>
											<input type="text" name="nombre" class="form-control" required autofocus placeholder="Nombre Persona" value="<?php echo $nombre ?>">
										</div>
									</div>
									<div class="col-xs-12 col-sm-12 col-md-12 col-lg-4">
										<div class="form-group">
											<label>Apellido Paterno :</label>
											<input type="text" name="apPat" class="form-control" required autofocus placeholder="Apellido Paterno Persona" value="<?php echo $apPaterno ?>">
										</div>
									</div>
									<div class="col-xs-12 col-sm-12 col-md-12 col-lg-4">
										<div class="form-group">
											<label>Apellido Materno :</label>
											<input type="text" name="apMat" class="form-control" required autofocus placeholder="Apellido Materno Persona" value="<?php echo $apMaterno ?>">
										</div>
									</div>
									<div class="col-xs-4 col-sm-4 col-md-4 col-lg-2">
										<div class="form-group">
											<label>Sexo :</label>
											<select name="sex" class="form-control select2" style="width: 100%;">
												<option value="<?php echo $sexo?>"><?php echo $genero?></option>
                                                <option value="M">Masculino</option>
                                                <option value="F">Femenino</option>
                                            </select>
										</div>
									</div>
									<div class="col-xs-4 col-sm-4 col-md-4 col-lg-2">
										<div class="form-group">
											<label>Estado Civil :</label>
											<select name="eCivil" class="form-control select2" style="width: 100%;">
												<option value="<?php echo $civil?>"><?php echo $eCivil?></option>
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
											<input type="number" name="telefono" class="form-control" required autofocus placeholder="# Teléfono" value="<?php echo $telefono?>">
										</div>
									</div>
									<div class="col-xs-12 col-sm-12 col-md-12 col-lg-2">
										<div class="form-group">
											<label>RFC :</label>
											<input type="text" name="rfc" class="form-control" required autofocus placeholder="RFC Persona" value="<?php echo $rfc?>">
										</div>
									</div>
									<div class="col-xs-12 col-sm-8 col-md-4 col-lg-4">
										<div class="form-group">
											<label>Fecha de Nacimiento :</label>
											<input type="date" name="fNac" class="form-control" required value="<?php echo $fecha_nac?>">
										</div>
									</div>
									<div class="col-xs-4 col-sm-4 col-md-4 col-lg-6">
										<div class="form-group">
											<label>Correo :</label>
											<input type="email" name="email" class="form-control" required placeholder="Correo Persona" value="<?php echo $correo?>">
										</div>
									</div>
									<div class="col-xs-4 col-sm-4 col-md-4 col-lg-3">
										<div class="form-group">
											<label>Colonia :</label>
											<input type="text" name="col" class="form-control" required placeholder="Colonia Persona" value="<?php echo $colonia?>">
										</div>
									</div>
									<div class="col-xs-4 col-sm-4 col-md-4 col-lg-3">
										<div class="form-group">
											<label>Calle :</label>
											<input type="text" name="street" class="form-control" required placeholder="Calle Persona" value="<?php echo $calle?>">
										</div>
									</div>
									<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
										<div class="form-group">
											<label>Número :</label>
											<input type="number" name="numCasa" class="form-control" required placeholder="# Casa Persona" value="<?php echo $numero?>">
										</div>
									</div>
									<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
										<div class="form-group">
											<label>Municipio :</label>
											<select name="municipio" class="form-control select2" style="width: 100%;">
												<option value="<?php echo $municipio?>"><?php echo $municipio?></option>
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
												<option value="<?php echo $estado?>"><?php echo $estado?></option>
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
									<button type="submit" class="btn btn-form">
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
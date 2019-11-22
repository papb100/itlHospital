<?php
include'../conexion/conexion.php';
include'../sesiones/verificar_sesion.php';

$idPersonat       = $_POST['idPersona'];
$fIngreso         = $_POST['fingreso'];
$cveTrabajador    = $_POST['clave'];
$idTipoTrabajador = $_POST['idTipoTrabajador'];
$idDepartamento   = $_POST['idDepartamento'];
$idPuesto         = $_POST['idPuesto'];

$fecha=date("Y-m-d"); 
$hora=date ("h:i:s");

$activo=1;

$idPersona= $_SESSION["s_idPersona"];

mysql_query("SET NAMES utf8");
$insertar=mysql_query("INSERT INTO trabajadores (
                            id_persona,
                            clave_trabajador,
                            id_tipo_trabajador,
                            id_departamento,
                            id_puesto,
                            fecha_ingreso,
                            activo,
                            fecha_registro,
                            hora_registro,
                            usuario_registro
                        )
                        VALUES(
                            '$idPersonat',
                            '$cveTrabajador',
                            '$idTipoTrabajador',
                            '$idDepartamento',
                            '$idPuesto',
                            '$fIngreso',
                            $activo,
                            '$fecha',
                            '$hora',
                            $idPersona
                        )",$conexion) or die (mysql_error());
?>
<script>
	window.location="index.php"
</script>
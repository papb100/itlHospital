<?php
include'../conexion/conexion.php';
include'../sesiones/verificar_sesion.php';

$Nhc    = $_POST['nhc'];
$Nombre    = $_POST['nom'];
$Apepat    = $_POST['apep'];
$Apemat    = $_POST['apem'];
$Direccion    = $_POST['dire'];
$Telefono    = $_POST['tel'];
$Correo    = $_POST['corre'];
$idRel = $_POST['idReligion'];
$Tiposangre    = $_POST['tsangre'];


$fecha=date("Y-m-d"); 
$hora=date ("h:i:s");

$activo=1;

$idPersona= $_SESSION["s_idPersona"];

mysql_query("SET NAMES utf8");
$insertar=mysql_query("INSERT INTO pacientes (
                            nhc,
                            nombre,
                            ap_paterno,
                            ap_materno,
                            direccion,
                            telefono,
                            correo,
                            id_religion,
                            tipo_sangre,
                            activo,
                            fecha_registro,
                            hora_registro,
                            usuario_registro
                        )
                        VALUES(
                            '$Nhc',
                            '$Nombre',
                            '$Apepat',
                            '$Apemat',
                            '$Direccion',
                            '$Telefono',
                            '$Correo',
                            $idRel,
                            '$Tiposangre',
                            $activo,
                            '$fecha',
                            '$hora',
                            $idPersona
                        )",$conexion) or die (mysql_error());
?>
<script>
	window.location="index.php"
</script>
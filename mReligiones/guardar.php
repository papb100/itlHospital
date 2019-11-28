<?php
include'../conexion/conexion.php';
include'../sesiones/verificar_sesion.php';

$nomReligion      = $_POST['reli'];

$fecha=date("Y-m-d"); 
$hora=date ("h:i:s");

$activo=1;

$idPersona= $_SESSION["s_idPersona"];

mysql_query("SET NAMES utf8");
$insertar=mysql_query("INSERT INTO religiones (
                            nombre_religion,
                            fecha_registro,
                            hora_registro,
                            usuario_registro,
                            activo
                        )
                        VALUES(
                            '$nomReligion',
                            '$fecha',
                            '$hora',
                            $idPersona,
                            $activo
                        )",$conexion) or die (mysql_error());
?>
<script>
	window.location="index.php"
</script>
<?php
include'../conexion/conexion.php';
include'../sesiones/verificar_sesion.php';

$nombrePuesto=$_POST['puesto'];

$fecha=date("Y-m-d"); 
$hora=date ("h:i:s");

$activo=1;

$idPersona= $_SESSION["s_idPersona"];

mysql_query("SET NAMES utf8");
$insertar=mysql_query("INSERT INTO puestos (
                            nombre_puesto,
                            activo,
                            fecha_registro,
                            hora_registro,
                            usuario_registro
                        )
                        VALUES(
                            '$nombrePuesto',
                            $activo,
                            '$fecha',
                            '$hora',
                            1
                        )",$conexion) or die (mysql_error());
?>
<script>
	window.location="index.php"
</script>

<?php
include'../conexion/conexion.php';
include'../sesiones/verificar_sesion.php';

$v=$_GET['valor'];
$id=$_GET['id'];

$contrario=($v==1)?0:1;

mysql_query("SET NAMES utf8");
$actualizar=mysql_query("UPDATE usuarios 
                            SET activo=$contrario 
                        WHERE id_usuario=$id",$conexion) or die (mysql_error());
?>
<script>
	window.location="index.php"
</script>
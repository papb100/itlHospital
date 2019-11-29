<?php
include'../conexion/conexion.php';
include'../sesiones/verificar_sesion.php';


$idPersona= $_SESSION["s_idPersona"];
$cont = $_POST["contra"];

$contraMD5 = md5($cont);

mysql_query("SET NAMES utf8");
$actualizar=mysql_query("UPDATE usuarios 
                            SET contra='$contraMD5'
                        WHERE id_usuario=$idPersona",$conexion) or die (mysql_error());
?>
<script>
	window.location="index.php"
</script>
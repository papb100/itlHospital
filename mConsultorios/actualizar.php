<?php
include'../conexion/conexion.php';
include'../sesiones/verificar_sesion.php';

$id=$_POST['ide'];
$nombreConsu=$_POST['consu'];
$Area=$_POST['area'];

$fecha=date("Y-m-d"); 
$hora=date ("h:i:s");

$activo=1;

$idPersona= $_SESSION["s_idPersona"];

mysql_query("SET NAMES utf8");
$actualizar=mysql_query("UPDATE consultorios 
                            SET nombre_consultorio='$nombreConsu',
                                area='$Area',
                                fecha_registro='$fecha',
                                hora_registro='$hora',
                                usuario_registro=$idPersona
                        WHERE id_consultorio=$id",$conexion) or die (mysql_error());
?>
<script>
	window.location="index.php"
</script>
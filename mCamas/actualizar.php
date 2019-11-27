<?php
include'../conexion/conexion.php';
include'../sesiones/verificar_sesion.php';

$id=$_POST['ide'];

$espe    = $_POST['espe'];
$nomcama = $_POST['num_cama'];


$fecha=date("Y-m-d"); 
$hora=date ("h:i:s");

$activo=1;

$idPersona= $_SESSION["s_idPersona"];

mysql_query("SET NAMES utf8");
$actualizar=mysql_query("UPDATE camas 
                            SET id_especialiadad='$espe',
                                no_cama='$nomcama',
                                fecha_registro='$fecha',
                                hora_registro='$hora',
                                usuario_registro=$idPersona
                        WHERE id_cama=$id",$conexion) or die (mysql_error());
?>
<script>
	window.location="index.php"
</script>
<?php
include'../conexion/conexion.php';
include'../sesiones/verificar_sesion.php';

$espe    = $_POST['espe'];
$numcama = $_POST['num_cama'];


$fecha=date("Y-m-d"); 
$hora=date ("h:i:s");

$activo=1;

$idPersona= $_SESSION["s_idPersona"];

mysql_query("SET NAMES utf8");
$insertar=mysql_query("INSERT INTO camas (
                            id_especialiadad,
                            no_cama,
                            activo,
                            fecha_registro,
                            hora_registro,
                            usuario_registro
                        )
                        VALUES(
                            '$espe',
                            '$numcama',
                            $activo,
                            '$fecha',
                            '$hora',
                            $idPersona
                        )",$conexion) or die (mysql_error());
?>
<script>
	window.location="index.php"
</script>
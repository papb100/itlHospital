<?php
include'../conexion/conexion.php';
include'../sesiones/verificar_sesion.php';

$nomConsultorio      = $_POST['consu'];
$Area        = $_POST['area'];

$fecha=date("Y-m-d"); 
$hora=date ("h:i:s");

$activo=1;

$idPersona= $_SESSION["s_idPersona"];

mysql_query("SET NAMES utf8");
$insertar=mysql_query("INSERT INTO consultorios (
                            nombre_consultorio,
                            area,
                            activo,
                            fecha_registro,
                            hora_registro,
                            usuario_registro
                        )
                        VALUES(
                            '$nomConsultorio',
                            '$Area',
                            $activo,
                            '$fecha',
                            '$hora',
                            $idPersona
                        )",$conexion) or die (mysql_error());
?>
<script>
	window.location="index.php"
</script>
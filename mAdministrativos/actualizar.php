<?php
include'../conexion/conexion.php';
include'../sesiones/verificar_sesion.php';

$id=$_POST['ide'];

$carrera    = $_POST['carrera'];
$nomtrabajador = $_POST['idTrabajador'];

$fecha=date("Y-m-d"); 
$hora=date ("h:i:s");

$activo=1;

$idPersona= $_SESSION["s_idPersona"];

mysql_query("SET NAMES utf8");
$actualizar=mysql_query("UPDATE administrativos 
                            SET carrera='$carrera',
                                id_trabajador='$nomtrabajador',
                                fecha_registro='$fecha',
                                hora_registro='$hora',
                                usuario_registro=$idPersona
                        WHERE id_administrativo=$id",$conexion) or die (mysql_error());
?>
<script>
	window.location="index.php"
</script>
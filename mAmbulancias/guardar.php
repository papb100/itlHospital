<?php
include'../conexion/conexion.php';
include'../sesiones/verificar_sesion.php';

$num_ambulancia=$_POST['numAmb'];
$modelo_ambulancia=$_POST['modAmb'];
$desc_ambulancia=$_POST['descAmb'];

$fecha=date("Y-m-d"); 
$hora=date ("h:i:s");

$activo=1;

$idPersona= $_SESSION["s_idPersona"];

mysql_query("SET NAMES utf8");
$insertar=mysql_query("INSERT INTO ambulancias (
                            num_ambulancia,
                            modelo_ambulancia,
                            descripcion_ambulancia,
                            activo,
                            fecha_registro,
                            hora_registro,
                            usuario_registro
                        )
                        VALUES(
                            '$num_ambulancia',
                            '$modelo_ambulancia',
                            '$desc_ambulancia',
                            $activo,
                            '$fecha',
                            '$hora',
                            $idPersona
                        )",$conexion) or die (mysql_error());
?>
<script>
	window.location="index.php"
</script>

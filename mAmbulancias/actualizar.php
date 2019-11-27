<?php
include'../conexion/conexion.php';
include'../sesiones/verificar_sesion.php';

$id=$_POST['ide'];
$num_ambulancia=$_POST['numAmb'];
$modelo_ambulancia=$_POST['modAmb'];
$desc_ambulancia=$_POST['descAmb'];

$fecha=date("Y-m-d"); 
$hora=date ("h:i:s");

$activo=1;

$idPersona= $_SESSION["s_idPersona"];

mysql_query("SET NAMES utf8");
$actualizar=mysql_query("UPDATE ambulancias 
                            SET num_ambulancia='$num_ambulancia',
                                modelo_ambulancia='$modelo_ambulancia',
                                descripcion_ambulancia='$desc_ambulancia',
                                fecha_registro='$fecha',
                                hora_registro='$hora',
                                usuario_registro=$idPersona
                        WHERE id_ambulancia=$id",$conexion) or die (mysql_error());
?>
<script>
	window.location="index.php";
</script>
<?php
include'../conexion/conexion.php';
include'../sesiones/verificar_sesion.php';

$id=$_POST['ide'];

$fIngreso=$_POST['fingreso'];
$clave=$_POST['clave'];
$idTipo=$_POST['idTipoTrabajador'];
$idDepa=$_POST['idDepartamento'];
$idPuesto=$_POST['idPuesto'];
$funcion          = $_POST['funcion'];

$fecha=date("Y-m-d"); 
$hora=date ("h:i:s");

$activo=1;

$idPersona= $_SESSION["s_idPersona"];

mysql_query("SET NAMES utf8");
$actualizar=mysql_query("UPDATE trabajadores 
                            SET fecha_ingreso='$fIngreso',
                                clave_trabajador='$clave',
                                id_tipo_trabajador='$idTipo',
                                id_departamento=$idDepa,
                                id_puesto=$idPuesto,
                                fecha_registro='$fecha',
                                hora_registro='$hora',
                                usuario_registro=$idPersona,
                                funcion_trabajador='$funcion'
                        WHERE id_trabajador=$id",$conexion) or die (mysql_error());
?>
<script>
	window.location="index.php"
</script>
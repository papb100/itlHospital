<?php
include'../conexion/conexion.php';
include'../sesiones/verificar_sesion.php';

$nom_hospital=$_POST['nomHos'];
$dir=$_POST['dir'];
$tel=$_POST['tel'];

$fecha=date("Y-m-d"); 
$hora=date ("h:i:s");

$activo=1;

$idPersona= $_SESSION["s_idPersona"];

mysql_query("SET NAMES utf8");
$insertar=mysql_query("INSERT INTO hospitales (
                            nombre_hospital,
                            direccion,
                            telefono,
                            activo,
                            fecha_registro,
                            hora_registro,
                            usuario_registro
                        )
                        VALUES(
                            '$nom_hospital',
                            '$dir',
                            '$tel',
                            $activo,
                            '$fecha',
                            '$hora',
                            $idPersona
                        )",$conexion) or die (mysql_error());
?>
<script>
	window.location="index.php"
</script>

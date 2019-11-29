<?php
include'../conexion/conexion.php';
include'../sesiones/verificar_sesion.php';


$nomUsuario    = $_POST['nomUsuario'];
$idTrabajador       = $_POST['idPersona'];
$contra         = $_POST['contra'];

$fecha=date("Y-m-d"); 
$hora=date ("h:i:s");

$activo=1;

$idPersona= $_SESSION["s_idPersona"];

mysql_query("SET NAMES utf8");
$insertar=mysql_query("INSERT INTO usuarios (
                            nombre_usuario,
                            id_trabajador,
                            contra,
                            activo,
                            fecha_registro,
                            hora_registro,
                            usuario_registro
                        )
                        VALUES(
                            '$nomUsuario',
                            '$idTrabajador',
                            '$contra',
                             $activo,
                            '$fecha',
                            '$hora',
                            $idPersona
                        )",$conexion) or die (mysql_error());
?>
<script>
	window.location="index.php"
</script>
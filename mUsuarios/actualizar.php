<?php
include'../conexion/conexion.php';
include'../sesiones/verificar_sesion.php';

$id=$_POST['ide'];

$nomUsuario    = $_POST['nomUsuario'];
$idTrabajador       = $_POST['idTrabajador'];
$contra         = $_POST['contra'];
$fecha=date("Y-m-d"); 
$hora=date ("h:i:s");

$activo=1;
$idPersona= $_SESSION["s_idPersona"];

mysql_query("SET NAMES utf8");
$actualizar=mysql_query("UPDATE usuarios 
                            SET 
                            nombre_usuario = '$nomUsuario',
                            id_trabajador =  '$idTrabajador',
                            contra =  '$contra',
                            activo =  $activo,
                             fecha_registro =  '$fecha',
                             hora_registro = '$hora',
                            usuario_registro =  $idPersona

                            
                        WHERE id_usuario=$id",$conexion) or die (mysql_error());
           
                                    
?>
<script>
	window.location="index.php"
</script>
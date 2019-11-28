<?php
include'../conexion/conexion.php';
include'../sesiones/verificar_sesion.php';

$id=$_POST['ide'];
$nom_hospital=$_POST['nomHos'];
$dir=$_POST['dir'];
$tel=$_POST['tel'];

$fecha=date("Y-m-d"); 
$hora=date ("h:i:s");


$idPersona= $_SESSION["s_idPersona"];

mysql_query("SET NAMES utf8");
$actualizar=mysql_query("UPDATE hospitales 
                            SET nombre_hospital='$nom_hospital',
                                direccion='$dir',
                                telefono='$tel',
                                fecha_registro='$fecha',
                                hora_registro='$hora',
                                usuario_registro=$idPersona
                        WHERE id_hospital=$id",$conexion) or die (mysql_error());
?>
<script>
	window.location="index.php";
</script>
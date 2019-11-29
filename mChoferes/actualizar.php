<?php
include'../conexion/conexion.php';
include'../sesiones/verificar_sesion.php';

$id=$_POST['ide'];
$numLic=$_POST['numLic'];
$idTra=$_POST['idTra'];

$fecha=date("Y-m-d"); 
$hora=date ("h:i:s");


$idPersona= $_SESSION["s_idPersona"];

mysql_query("SET NAMES utf8");
$actualizar=mysql_query("UPDATE choferes 
                            SET num_licencia='$numLic',
                                id_trabajador='$idTra',
                                fecha_registro='$fecha',
                                hora_registro='$hora',
                                usuario_registro=$idPersona
                        WHERE id_chofer=$id",$conexion) or die (mysql_error());
?>
<script>
	window.location="index.php";
</script>
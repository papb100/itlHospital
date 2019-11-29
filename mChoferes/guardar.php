<?php
include'../conexion/conexion.php';
include'../sesiones/verificar_sesion.php';

$numLic=$_POST['numLic'];
$idTra=$_POST['idTra'];

$fecha=date("Y-m-d"); 
$hora=date ("h:i:s");

$activo=1;

$idPersona= $_SESSION["s_idPersona"];

mysql_query("SET NAMES utf8");
$insertar=mysql_query("INSERT INTO choferes (
                            num_licencia,
                            id_trabajador,
                            activo,
                            fecha_registro,
                            hora_registro,
                            usuario_registro
                        )
                        VALUES(
                            '$numLic',
                            '$idTra',
                            $activo,
                            '$fecha',
                            '$hora',
                            $idPersona
                        )",$conexion) or die (mysql_error());
?>
<script>
	window.location="index.php"
</script>

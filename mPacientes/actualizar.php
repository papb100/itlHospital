<?php
include'../conexion/conexion.php';
include'../sesiones/verificar_sesion.php';

$id=$_POST['ide'];

$Nhc    = $_POST['nhc'];
$Nombre    = $_POST['nom'];
$Apepat    = $_POST['apep'];
$Apemat    = $_POST['apem'];
$Direccion    = $_POST['dire'];
$Telefono    = $_POST['tel'];
$Correo    = $_POST['corre'];
$idRel = $_POST['idReligion'];
$Tiposangre    = $_POST['tsangre'];

$fecha=date("Y-m-d"); 
$hora=date ("h:i:s");

$activo=1;

$idPersona= $_SESSION["s_idPersona"];

mysql_query("SET NAMES utf8");
$actualizar=mysql_query("UPDATE pacientes 
                            SET nhc='$Nhc',
                                nombre='$Nombre',
                                ap_paterno='$Apepat',
                                ap_materno='$Apemat',
                                direccion='$Direccion',
                                telefono='$Telefono',
                                correo='$Correo',
                                id_religion=$idRel,
                                tipo_sangre='$Tiposangre',
                                activo=$activo,
                                fecha_registro='$fecha',
                                hora_registro='$hora',
                                usuario_registro=$idPersona
                        WHERE id_paciente=$id",$conexion) or die (mysql_error());
?>
<script>
	window.location="index.php"
</script>
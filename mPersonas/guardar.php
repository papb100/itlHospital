<?php
include'../conexion/conexion.php';
include'../sesiones/verificar_sesion.php';

$nombre       = $_POST['nombre'];
$apPaterno         = $_POST['apPat'];
$apMaterno    = $_POST['apMat'];
$sexo = $_POST['sex'];
$eCivil   = $_POST['eCivil'];
$telefono         = $_POST['telefono'];
$rfc = $_POST['rfc'];
$correo = $_POST['email'];
$fecha_nac = $_POST['fNac'];
$colonia = $_POST['col'];
$calle = $_POST['street'];
$numero = $_POST['numCasa'];
$municipio = $_POST['municipio'];
$estado = $_POST['estado'];

$fecha=date("Y-m-d"); 
$hora=date ("h:i:s");

$activo=1;

$idPersona= $_SESSION["s_idPersona"];

mysql_query("SET NAMES utf8");
$insertar=mysql_query("INSERT INTO personas (
                            nombre,
                            ap_paterno,
                            ap_materno,
                            sexo,
                            ecivil,
                            telefono,
                            rfc,
                            correo,
                            fecha_nac,
                            colonia,
                            calle,
                            numero,
                            municipio,
                            estado,
                            activo,
                            fecha_registro,
                            hora_registro,
                            usuario_registro
                        )
                        VALUES(
                            '$nombre',
                            '$apPaterno',
                            '$apMaterno',
                            '$sexo',
                            '$eCivil',
                            $telefono,
                            '$rfc',
                            '$correo',
                            '$fecha_nac',
                            '$colonia',
                            '$calle',
                            $numero,
                            '$municipio',
                            '$estado',
                            $activo,
                            '$fecha',
                            '$hora',
                            $idPersona
                        )",$conexion) or die (mysql_error());
?>
<script>
	window.location="index.php"
</script>
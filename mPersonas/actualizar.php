<?php
include'../conexion/conexion.php';
include'../sesiones/verificar_sesion.php';

$id=$_POST['ide'];
$nombre=$_POST['nombre'];
$apPaterno=$_POST['apPat'];
$apMaterno=$_POST['apMat'];
$sexo=$_POST['sex'];
$eCivil=$_POST['eCivil'];
$telefono=$_POST['telefono'];
$rfc=$_POST['rfc'];
$correo=$_POST['email'];
$fechaNac=$_POST['fNac'];
$colonia=$_POST['col'];
$calle=$_POST['street'];
$nCasa=$_POST['numCasa'];
$municipio=$_POST['municipio'];
$estado=$_POST['estado'];

$fecha=date("Y-m-d"); 
$hora=date ("h:i:s");

$activo=1;

$idPersona= $_SESSION["s_idPersona"];

mysql_query("SET NAMES utf8");
$actualizar=mysql_query("UPDATE personas 
                            SET nombre='$nombre',
                                ap_paterno='$apPaterno',
                                ap_materno='$apMaterno',
                                sexo='$sexo',
                                ecivil='$eCivil',
                                telefono=$telefono,
                                rfc='$rfc',
                                correo='$correo',
                                fecha_nac='$fechaNac',
                                colonia='$colonia',
                                calle='$calle',
                                numero=$nCasa,
                                municipio='$municipio',
                                estado='$estado',
                                fecha_registro='$fecha',
                                hora_registro='$hora',
                                usuario_registro=$idPersona
                        WHERE id_persona=$id",$conexion) or die (mysql_error());
?>
<script>
	window.location="index.php"
</script>
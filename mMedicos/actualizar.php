<?php
include'../conexion/conexion.php';
include'../sesiones/verificar_sesion.php';

$id=$_POST['ide'];

$cedula    = $_POST['clave'];
$idTrabajador = $_POST['idTrabajador'];
$especialista = $_POST['esp'];
// switch ($especialista) {
//     case '1':
//         $especialista=1;
//         break;
//     case '2':
//         $especialista=1;
//         break;
        
//     default:
//         # code...
//         break;
// }
$idEsp = $_POST['idEspecialidad'];

$fecha=date("Y-m-d"); 
$hora=date ("h:i:s");

$activo=1;

$idPersona= $_SESSION["s_idPersona"];

mysql_query("SET NAMES utf8");
$actualizar=mysql_query("UPDATE medicos 
                            SET cedula='$cedula',
                                id_trabajador='$idTrabajador',
                                especialista='$especialista',
                                id_especialidad=$idEsp,
                                activo=$activo,
                                fecha_registro='$fecha',
                                hora_registro='$hora',
                                usuario_registro=$idPersona
                        WHERE id_medico=$id",$conexion) or die (mysql_error());
?>
<script>
	window.location="index.php"
</script>
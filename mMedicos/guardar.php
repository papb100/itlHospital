<?php
include'../conexion/conexion.php';
include'../sesiones/verificar_sesion.php';

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
$insertar=mysql_query("INSERT INTO medicos (
                            cedula,
                            id_trabajador,
                            especialista,
                            id_especialidad,
                            activo,
                            fecha_registro,
                            hora_registro,
                            usuario_registro
                        )
                        VALUES(
                            '$cedula',
                            '$idTrabajador',
                            '$especialista',
                            '$idEsp',
                            $activo,
                            '$fecha',
                            '$hora',
                            $idPersona
                        )",$conexion) or die (mysql_error());
?>
<script>
	window.location="index.php"
</script>
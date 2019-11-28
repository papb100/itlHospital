<?
include'../conexion/conexion.php';

mysql_query("SET NAMES utf8");
//Combo especialidad
$combo1 = mysql_query("SELECT
							trabajadores.id_trabajador AS idTrabajador,
							concat(personas.ap_paterno,' ',personas.ap_materno,' ',personas.nombre) AS Persona,
							clave_trabajador
							FROM
							trabajadores
							LEFT JOIN enfermeros ON trabajadores.id_trabajador = enfermeros.id_trabajador
							INNER JOIN personas ON personas.id_persona = trabajadores.id_persona
							WHERE
							trabajadores.activo = 1
							ORDER BY
							trabajadores.id_trabajador",$conexion);
$num1=mysql_num_rows($combo1);
//Combo especialidad

?>
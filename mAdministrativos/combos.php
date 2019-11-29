<?
include'../conexion/conexion.php';

mysql_query("SET NAMES utf8");
//Combo especialidad
$combo1 = mysql_query("SELECT
							trabajadores.id_trabajador AS idTrabajador,
							concat(personas.ap_paterno,' ',personas.ap_materno,' ',personas.nombre) AS Persona,
							trabajadores.id_trabajador
						FROM
							trabajadores
						LEFT JOIN administrativos ON trabajadores.id_trabajador = 	administrativos.id_trabajador
						INNER JOIN personas ON personas.id_persona = trabajadores.id_persona
						WHERE
							trabajadores.funcion_trabajador = 'Administrativo'
						AND trabajadores.activo = 1
						AND
							ISNULL(administrativos.carrera)
						ORDER BY Persona",$conexion);
$num1=mysql_num_rows($combo1);
//Combo especialidad

?>
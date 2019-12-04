<?
include'../conexion/conexion.php';

mysql_query("SET NAMES utf8");
//Combo personas
$combo1 = mysql_query("SELECT
						trabajadores.id_trabajador AS idTrabajador,
						concat(personas.ap_paterno,' ',personas.ap_materno,' ',personas.nombre) AS Persona,
						clave_trabajador
						FROM
						trabajadores
						LEFT JOIN usuarios ON trabajadores.id_trabajador = usuarios.id_trabajador
						INNER JOIN personas ON personas.id_persona = trabajadores.id_persona
						WHERE
							ISNULL(usuarios.id_trabajador)
						AND
							trabajadores.activo = 1
						ORDER BY
						trabajadores.id_trabajador",$conexion);
$num1=mysql_num_rows($combo1);
?>
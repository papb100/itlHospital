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
						LEFT JOIN medicos ON trabajadores.id_trabajador = medicos.id_trabajador
						INNER JOIN personas ON personas.id_persona = trabajadores.id_persona
						WHERE
							ISNULL(medicos.cedula)
						AND trabajadores.activo = 1
						ORDER BY
							trabajadores.id_trabajador",$conexion);
$num1=mysql_num_rows($combo1);
//Combo personas
//Combo tipo trabajador
$combo2 = mysql_query("SELECT
							id_especialidad,
							nombre_especialidad
						FROM
							especialidades
						WHERE
							activo = 1",$conexion);
$num2=mysql_num_rows($combo2);
//Combo tipo trabajador

?>
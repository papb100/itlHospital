<?
include'../conexion/conexion.php';

mysql_query("SET NAMES utf8");
//Combo especialidad
$combo1 = mysql_query("SELECT
							trabajadores.id_trabajador AS idTrabajador,
							concat(personas.ap_paterno,' ',personas.ap_materno,' ',personas.nombre) AS Persona,
							enfermeros.cedula
						FROM
							trabajadores
						LEFT JOIN enfermeros ON trabajadores.id_trabajador = enfermeros.id_trabajador
						INNER JOIN personas ON personas.id_persona = trabajadores.id_persona
						WHERE
							ISNULL(enfermeros.cedula)
						AND trabajadores.activo = 1
						AND trabajadores.funcion_trabajador = 'Enfermero'
						ORDER BY
							Persona",$conexion);
$num1=mysql_num_rows($combo1);
//Combo especialidad

?>
<?
include'../conexion/conexion.php';

mysql_query("SET NAMES utf8");
//Combo personas
$combo1 = mysql_query("SELECT
							personas.id_persona AS idPersona,
							concat(personas.ap_paterno,' ',personas.ap_materno,' ',personas.nombre) AS Persona,
							trabajadores.clave_trabajador
						FROM
							personas
						LEFT JOIN trabajadores ON personas.id_persona = trabajadores.id_persona
						WHERE
							ISNULL(trabajadores.clave_trabajador)
						AND personas.activo = 1
						ORDER BY
							personas.ap_paterno,personas.ap_materno",$conexion);
$num1=mysql_num_rows($combo1);
//Combo personas
//Combo tipo trabajador
$combo2 = mysql_query("SELECT
							id_tipo_trabajador,
							descripcion
						FROM
							tipos_trabajador
						WHERE
							activo = 1",$conexion);
$num2=mysql_num_rows($combo2);
//Combo tipo trabajador
//Combo departamentos
$combo3 = mysql_query("SELECT
							id_departamento,
							nombre_departamento
						FROM
							departamentos
						WHERE
							activo = 1",$conexion);
						$num3=mysql_num_rows($combo3);
//Combo departamentos
//Combo puestos
$combo4 = mysql_query("SELECT
							id_puesto,
							nombre_puesto
						FROM
							puestos
						WHERE
							activo = 1",$conexion);
						$num4=mysql_num_rows($combo4);
//Combo puestos
?>
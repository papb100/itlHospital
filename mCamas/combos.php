<?
include'../conexion/conexion.php';

mysql_query("SET NAMES utf8");
//Combo especialidad
$combo1 = mysql_query("SELECT
							id_especialidad,
							nombre_especialidad
						FROM
							especialidades
						WHERE
							activo = 1",$conexion);
$num1=mysql_num_rows($combo1);
//Combo especialidad

?>
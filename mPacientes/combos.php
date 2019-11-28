<?
include'../conexion/conexion.php';

mysql_query("SET NAMES utf8");
//Combo tipo trabajador
$combo1 = mysql_query("SELECT
							id_religion,
							nombre_religion
						FROM
							religiones
						where activo=1",$conexion);
$num1=mysql_num_rows($combo1);
//Combo tipo trabajador

?>
<?php
include'../conexion/conexion.php';

mysql_query("SET NAMES utf8");
//Combo tipo trabajador
$combo1 = mysql_query("SELECT
					trabajadores.id_trabajador AS idChofer,
					concat(personas.ap_paterno,' ',personas.ap_materno,' ',personas.nombre) AS Persona,
					choferes.num_licencia
					FROM
					trabajadores
					LEFT JOIN choferes ON trabajadores.id_trabajador = 	choferes.id_trabajador
					INNER JOIN personas ON personas.id_persona = trabajadores.id_persona
					WHERE
					trabajadores.funcion_trabajador = 'Chofer'
					AND trabajadores.activo = 1
					AND
					ISNULL(choferes.num_licencia)",$conexion);
$num1=mysql_num_rows($combo1);
//Combo tipo trabajador

?>
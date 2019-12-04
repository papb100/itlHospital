<!-- funcion para reiniciar contraseña -->
<?php
include'../conexion/conexion.php';
include'../sesiones/verificar_sesion.php';

$id=$_GET['id'];
$contraMD5 = md5('12345');
mysql_query("SET NAMES utf8");
$actualizar=mysql_query("UPDATE usuarios 
                            SET contra='$contraMD5'
                        WHERE id_usuario='$id'",$conexion) or die (mysql_error());
?>
<script>
	window.location="index.php"
</script>
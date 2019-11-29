<?php
include'../conexion/conexion.php';
include'../sesiones/verificar_sesion.php';

$valor    = $_POST['valor'];

$fecha=date("Y-m-d"); 
$hora=date ("h:i:s");

$activo=1;

$idPersona= $_SESSION["s_idPersona"];

mysql_query("SET NAMES utf8");
$consulta=mysql_query("SELECT
                            id_paciente
                        FROM
                            pacientes
                        WHERE NHC=$valor ",$conexion) or die (mysql_error());
$n=1;
$row=mysql_fetch_row($consulta);
$num=mysql_num_rows($consulta);
echo $num;
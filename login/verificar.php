<?php
include'../conexion/conexion.php';

$usuario = $_POST["username"];
$contra  = $_POST["pass"];

$contraMD5=md5($contra);

mysql_query("SET NAMES utf8");
$consulta=mysql_query("SELECT
                            CONCAT(personas.nombre,' ',personas.ap_paterno)  AS NOMBRE_CORTO,
                            trabajadores.clave_trabajador as CLAVE,
                            departamentos.nombre_departamento AS DEPTO,
                            (SELECT nombre_puesto FROM puestos WHERE puestos.id_puesto=trabajadores.id_puesto) AS PUESTO,
                            usuarios.nombre_usuario,
                            usuarios.contra,
                            usuarios.activo,
                            CONCAT(personas.nombre,' ',personas.ap_paterno,' ',personas.ap_materno)  AS NOMBRE_LARGO,
                            personas.id_persona
                        FROM
                            personas
                        INNER JOIN trabajadores ON          personas.id_persona=trabajadores.id_persona
                        INNER JOIN departamentos ON trabajadores.id_departamento=departamentos.id_departamento
                        INNER JOIN usuarios ON usuarios.id_trabajador = trabajadores.id_trabajador
                        WHERE
                        usuarios.nombre_usuario='".$usuario."' 
                        AND 
                        contra='".$contraMD5."' 
                        AND
                        (personas.activo=1 AND trabajadores.activo=1 AND usuarios.activo=1)",$conexion) or die (mysql_error());
					   
//Descargamos el arreglo que arroja la consulta
$row=mysql_fetch_row($consulta);
//Se cuenta el numero de filas
$num=mysql_num_rows($consulta);

if ($num==0) {
    // echo "rechazado<br>";
    ?>
    <script>
        window.location="index.php"
    </script>
    <?php
}else{
    
    //asigno un nombre a la sesi�n para poder guardar diferentes datos 
    session_name("loginUsuario"); 
    // inicio la sesi�n 
    session_start(); 
    //defino la sesi�n que demuestra que el usuario est� autorizado 
    $_SESSION["autentificado"]= "SI"; 
    //defino la fecha y hora de inicio de sesi�n en formato aaaa-mm-dd hh:mm:ss 
    $_SESSION["ultimoAcceso"]= date("Y-n-j H:i:s"); 
    
    $_SESSION["s_nombreVisita"]= $row[0]; //Nombre del visitante
    $_SESSION["s_nombreLargo"]= $row[7]; //Nombre Largo
    $_SESSION["s_idPersona"]= $row[8]; //identificador de persona

    ?>
    <script>
        window.location="../inicio/index.php"
    </script>
    <?php
}

?>
<?php 
include'../conexion/conexion.php'; 

$id=$_GET['id'];

include'../funciones/funcionEspacios.php';
include'../funciones/calcularEdad.php';
include'../funciones/fechaEspanol.php';

mysql_query("SET NAMES utf8");
$consulta=mysql_query("SELECT
                            nombre_puesto,
                            activo,
                            fecha_registro,
                            hora_registro,
                            (SELECT CONCAT(nombre,' ',ap_paterno,' ',ap_materno) FROM personas where personas.id_persona=puestos.usuario_registro) as Registro
                        FROM
                            puestos
                        WHERE
                            id_puesto = $id",$conexion) or die (mysql_error());
   
//Descargamos el arreglo que arroja la consulta
$n=1;
$row=mysql_fetch_row($consulta);

$nPuesto           = $row[0];
$status          = $row[1];
$fechaRegistro   = $row[2];
$fechaCastellano = fechaCastellano($fechaRegistro);
$horaRegistro    = $row[3];
$personaRegistro = $row[4];

$horaPmAM=date("g:i a",strtotime($horaRegistro));

if($status==1){
    $imgStatus="../imagenes/arriba.png";
    $colorStatus="activado";
}else{
    $imgStatus="../imagenes/abajo.png";
    $colorStatus="desactivado";   
}

$fechai =date("d-m-Y");

 ?>

<style type="text/css">

    table
    {
        width:  90%;
        border: solid 0px #5544DD;
        margin:auto;
    }

    hr{
    border: solid 1px #34495e;
    }

    table.borde
    {
        width:  90%;
        border: solid 1px #D8D8D8;
        margin:auto;
    }
    th
    {
        text-align: center;
        border: solid 0px #113300;
        background: #EEFFEE;
    }
    th.borde
    {
        text-align: center;
        border: solid 1px #D8D8D8;
        background: #EEFFEE;
    }


    td.borde
    {
        text-align: left;
        border: solid 1px #D8D8D8;
    }
    td.col1
    {
        border: solid 0px red;
        text-align: right;
    }

    td.titular
    {
        text-align: center;
        border: solid 1px #34495e;
        background: #ecf0f1;
        color:#34495e;
        font-weight: bold;
        text-transform: uppercase;
        letter-spacing: 3px;
        padding: 10px;

    }

    label.enfa{
        text-decoration: underline;
    }

    td.subtitular
    {
        text-align: center;
        border: solid 1px #34495e;
        background: #ffffff;
        color:#34495e;
        letter-spacing: 3px;
        padding: 8px;

    }

    td.fecha
    {
        text-align: right;
        border: solid 0px #34495e;
        background: #ffffff;
        color:#34495e;
        letter-spacing: 3px;
        padding: 18px;

    }
    /*hojas de estilo propia*/
    img{
        width: 100%;
    }

    /*letras*/
    .mchico{font-size: 9px;}.chico{font-size: 11px;}  .mediano{font-size: 15px;}  .grande{font-size:18px;}
    .subrayado{text-decoration: underline;} .firma {font-size: 13px;font-style: italic;}

    .ancho{width:20px; };

    .bajo{
        display: block;
        margin: 15px 0px 0px 0px;
        background: #ccc;
    }

    td.activado{
        background:#2ecc71;
        color:#fff;
        font-weight:bold;
    }

    td.desactivado{
        background:#e74c3c;
        color:#fff;
        font-weight:bold;
    }
</style>

<table border="0">
    <col style="width: 100%" class="col1">

    <tr>
        <td>
            <img src="../imagenes/encabezadoFicha.jpg">
        </td>
    </tr>

</table>

<table border="0">
    <col style="width: 10%">
    <col style="width: 10%">
    <col style="width: 10%">
    <col style="width: 10%">
    <col style="width: 10%">
    <col style="width: 10%">
    <col style="width: 10%">
    <col style="width: 10%">
    <col style="width: 10%">
    <col style="width: 10%">
    <!-- defino el ancho de la tabla -->
    <tr border="0">
        <td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
    </tr>

    <tr >
        <td  colspan="10" class="titular">
            Datos del puesto
        </td>
    </tr>   

    <tr >
        <td  colspan="10" class="subtitular">
             <?php echo $nPuesto; ?>
        </td>
    </tr>   

    <tr >
        <td  colspan="10" class="titular">
            Datos del registro
        </td>
    </tr>   

    <tr >
        <td  colspan="3" class="subtitular">
            <?php echo $personaRegistro; ?> 
        </td>
        <td  colspan="4" class="subtitular">
            <?php echo $fechaCastellano; ?> 
        </td>
        <td  colspan="2" class="subtitular">
            <?php echo $horaPmAM; ?> 
        </td>

        <td  colspan="1" class="subtitular <?php echo $colorStatus; ?>">
            <img width="16"  height="16" src="<?php echo $imgStatus; ?>">
        </td>
    </tr>  


    <tr >
        <td  colspan="10" class="fecha">
            <strong>Fecha de impresión:</strong> <?php echo fechaCastellano($fechai); ?>
        </td>
    </tr> 

    <tr>
        <td  colspan="10" align="center">
            <hr>
        </td>
    </tr>

</table>

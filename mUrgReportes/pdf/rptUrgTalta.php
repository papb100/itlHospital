<?php 
include'../conexion/conexion.php';

include'../funciones/funcionEspacios.php';
include'../funciones/calcularEdad.php';
include'../funciones/fechaEspanol.php';

// Variables post
$tAlta    = $_GET["tipoAlta"];
$fInicial = $_GET["fechaInicial"];
$fFinal   = $_GET["fechaFinal"];

$n=1;
mysql_query("SET NAMES utf8");
$consulta=mysql_query("SELECT
                            pacientes.nhc,
                            CONCAT(pacientes.nombre,' ',pacientes.ap_paterno,' ',pacientes.ap_materno)  AS Paciente,
                            (SELECT CONCAT(nombre,' ' ,ap_paterno) FROM medicos INNER JOIN trabajadores ON medicos.id_trabajador=trabajadores.id_trabajador
                            INNER JOIN personas ON personas.id_persona=trabajadores.id_persona  WHERE medicos.id_medico=urgencias.id_medico) AS nombre_medico,
                            urgencias.resultado_triage AS Emergencia
                        FROM
                            urgencias INNER JOIN pacientes ON urgencias.nhc=pacientes.nhc
                        WHERE
                            NOT ISNULL(alta)
                            AND  fecha_alta BETWEEN '$fInicial' AND '$fFinal'
                            AND alta='$tAlta'",$conexion) or die (mysql_error());
$fechai =date("d-m-Y");


 ?>

<style type="text/css">
table
{
    width:  90%;
    border: solid 0px #5544DD;
    margin:auto;
}

.capital{
    text-transform: capitalize;
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
    background: #bdc3c7;
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
    background: #bdc3c7;
    color:#34495e;
    letter-spacing: 3px;
    padding: 5px;

}

td.registro1
{
    text-align: center;
    border: solid 1px #34495e;
    background: #ffffff;
    color:#34495e;
    padding: 2px;

}

td.registro2
{
    text-align: center;
    border: solid 1px #34495e;
    background: #dcdde1;
    color:#34495e;
    padding: 2px;

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
.chico{font-size: 11px;}  .mediano{font-size: 15px;}  .grande{font-size:18px;}
.subrayado{text-decoration: underline;} .firma {font-size: 13px;font-style: italic;}

.ancho{width:20px; };

.bajo{
    display: block;
    margin: 15px 0px 0px 0px;
    background: #ccc;
}


</style>

<table border="0">
    <col style="width: 100%" class="col1">

    <tr>
        <td>
            <img src="../imagenes/encabezadoReporte.jpg" alt="">
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
            Tipo de Alta - <?php echo $tAlta; ?>
        </td>
    </tr>   

    <tr >
        <td  colspan="1" class="subtitular">
            <strong>#</strong> 
        </td>

        <td  colspan="1" class="subtitular">
            <u></u><strong>NHC</strong>
        </td>
        <td  colspan="3" class="subtitular">
            <u></u><strong>Paciente</strong>
        </td>
        <td  colspan="3" class="subtitular">
            <u></u><strong>Medico</strong>
        </td>
        <td  colspan="2" class="subtitular">
            <u></u><strong>Emergencia</strong>
        </td>

    </tr>  

    <?php 
      $n=1;
      while ($row=mysql_fetch_row($consulta))
      {
        $variable=$n%2;
        if ($variable==0) {
            $claseColor="registro1";
        }else{
            $claseColor="registro2";
        }

        // Descarga de Variables
        $nhc        = $row[0];
        $paciente   = $row[1];
        $medico     = $row[2];
        $emergencia = $row[3];

        ?>
        <tr >
            <td  colspan="1" class="<?php echo "$claseColor"; ?>">
                <?php echo "$n"; ?>
            </td>

            <td  colspan="1" class="<?php echo "$claseColor"; ?>">
                <u></u> <?php echo "$nhc"; ?>
            </td>

            <td  colspan="3" class="<?php echo "$claseColor"; ?>">
                <u></u> <?php echo "$paciente"; ?>
            </td>

            <td  colspan="3" class="<?php echo "$claseColor"; ?>">
                <u></u> <?php echo "$medico"; ?>
            </td>

            <td  colspan="2" class="<?php echo "$claseColor"; ?>">
                <u></u> <?php echo "$emergencia"; ?>
            </td>
        </tr>  
        <?php
        $n++;
      }
     ?>

    <tr>
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

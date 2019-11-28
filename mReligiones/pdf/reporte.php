<?php 
include'../conexion/conexion.php';

include'../funciones/funcionEspacios.php';
include'../funciones/calcularEdad.php';
include'../funciones/fechaEspanol.php';

$n=1;
mysql_query("SET NAMES utf8");
$consulta=mysql_query("SELECT
                            id_religion,
                            nombre_religion,
                            fecha_registro,
                            hora_registro
                        FROM
                            religiones
                        WHERE
                            activo=1
                        ORDER BY id_religion DESC",$conexion) or die (mysql_error());
                            
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
    <col style="width: 4%">
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
            Lista de Religiones activas
        </td>
    </tr>   

    <tr >
        <td  colspan="2" class="subtitular">
            <strong>#</strong> 
        </td>

        <td  colspan="8" class="subtitular">
            <u></u><strong>Nombre de la Religión</strong>
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

        $nomReligion=$row[1];
        $fReg=$row[2];
        $hReg=$row[3];

        ?>
        <tr >
            <td  colspan="2" class="<?php echo "$claseColor"; ?>">
                <?php echo "$n"; ?>
            </td>

            <td  colspan="8" class="<?php echo "$claseColor"; ?>">
                <u></u> <?php echo $nomReligion; ?>
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

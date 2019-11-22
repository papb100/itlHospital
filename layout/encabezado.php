<?php
include'../sesiones/verificar_sesion.php';
$visitante=$_SESSION["s_nombreVisita"];
$nLargo=$_SESSION["s_nombreLargo"];
?>

<section class="contenedor iconos fondo">

<ul class="nav-pills pull-right menu-bar">
    <li class="list-unstyled">
        <a href="#" class="color  borde animated bounceIn" id="menuV">
            <i class="fas fa-bars"></i>
        </a>
    </li>
    <li class="list-unstyled espIco">
        <a href="#" class="color borde animated bounceIn" data-toggle="modal" data-target="#miModal">
            <i class="far fa-user-circle"></i>
        </a>
    </li>
    <li class="list-unstyled espIco">
        <a href="../eCambioContra/index.php" class="color borde animated bounceIn">
            <i class="fas fa-unlock-alt"></i>
        </a>
    </li>
    <li class="list-unstyled espIco" id="icoSalir">
        <a href="#" onclick="salir();" class="color borde animated bounceIn">
            <i class="fas fa-sign-out-alt"></i>
        </a>
    </li>

    <h2 class="fondo usuario"><?php echo $visitante ?></h2>

</ul>

<h2 class="fondo  empresa">Empresa / Institución</h2>
    
</section>
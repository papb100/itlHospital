<?php  
include'../funciones/menuActivo.php'
?>
<div class="sidebar fondo borde sombra animated bounceIn" id="mnuLateral">
	<h2 class="fondo mLateral">Menú</h2>
	<ul class="menuv">
		<li class="list-unstyled icoMedia">
			<a href="../inicio/index.php" class="fasLink">
				<i class="fas fa-home fa-lg fasIco"></i> <label class="lblIco">Inicio</label>
			</a>
		</li>
		<li class="list-unstyled icoMedia">
			<a href="index.php" class="<?php echo $va1 ?> fasLink">
				<i class="fas fa-list fa-lg fasIco"></i> <label class="lblIco">Lista</label>
			</a>
		</li>
		<li class="list-unstyled icoMedia">
			<a href="nuevo.php" class="<?php echo $va2 ?> fasLink">
				<i class="fas fa-file fa-lg fasIco"></i> <label class="lblIco">	Nuevo
				</label>
			</a>
		</li>
		<li class="list-unstyled icoMedia">
			<a href="pdfReporte.php" target="_blank" class="<?php echo $va3 ?> fasLink">
				<i class="fas fa-file-pdf fa-lg fasIco"></i> <label class="lblIco"> Reporte
				</label>
			</a>
		</li >
		<li class="list-unstyled icoMedia">
			<a href="#" class="fasLink" onclick="salir();">
				<i class="fas fa-sign-out-alt fa-lg fasIco"></i> <label class="lblIco">	Salir
				</label>
			</a>
		</li >
	</ul>
</div>
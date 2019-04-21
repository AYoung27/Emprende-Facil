<?php 
session_start();
?>
<div class="col-md-12" align="center">	
	<img width="200px" height="200px" class="img-thumbnail rounded img-responsive img-hover" src="
	<?php 
	if ($_SESSION['Imagen'] == NULL || $_SESSION['Imagen'] == "") {
		echo 'img/png/014-support.png';
		} else{
			echo 'data:image/png;base64,'.base64_encode($_SESSION['Imagen']);
		}
		?>">
		<p class="text-center">
			<strong><?php echo $_SESSION['Usuario']." "; ?></strong>
			<a href="#modificarPerfil" onclick="cargarDiv('zonaContenido', 'Contenido/modificarPerfil.php')" title="Modifica tu perfil">
				<span class="glyphicon glyphicon-pencil"></span>
			</a>
		</p>
		<ul class="list-group">
			<a href="#Informacion" onclick="cargarDiv('zonaContenido', 'Contenido/informacionDeContacto.php')" class="list-group-item ">
				Perfil
			</a>
			<?php
			if ($_SESSION['TipoUsuario'] == '2') {
				echo   "<a href=\"#Inventario\" class=\"list-group-item\" onclick=\"cargarDiv('zonaContenido','Contenido/inventario.php')\"	>Inventario</a>
				<a href=\"#Estadisticas\" class=\"list-group-item\"	onclick=\"cargarDiv('zonaContenido','Contenido/estadistica.php'), $.getScript('Estilos/js/script.js')\"	>Estadística</a>
				<a href=\"#Reportes\" class=\"list-group-item\"	onclick=\"cargarDiv('zonaContenido','Contenido/reportes.php'), listarReporte(''), $.getScript('Estilos/js/script.js')\"	>Reportes</a>";		
			}?>
			<a id="enlace2" href="#Pedidos" onclick="cargarDiv('zonaContenido', 'Contenido/pedidos.php')" class="list-group-item">
				Pedidos
			</a>
			<a id="enlace3" href="#Historial" onclick="cargarDiv('zonaContenido', 'Contenido/historial.php')" class="list-group-item">
				Historial de Compra
			</a>
		</ul>
	</div>
<?php 
	session_start();
	if (empty($_SESSION)) {
		header('Location: index.php');
	}
 ?>

<!--Pagina de perfil-->

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="author" description="Abner">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
	
	<link rel="icon" type="png" href="img/png/041-online-shop.png">

	<link rel="stylesheet" href="Estilos/css/bootstrap.min.css">
	<link rel="stylesheet" href="Estilos/css/bootstrap.css">
	<link rel="stylesheet" href="Estilos/css/perfil.css">
	<link rel="stylesheet" href="Estilos/css/drag.css" />

	<!--archivos para la búsqueda con jquery-->
	<link rel="stylesheet" href="Estilos/css/style_search.css">
	<script src="Estilos/js/jq_search/jquery.js"></script>
	<script src="Estilos/js/jq_search/jquery.dataTables.min.js"></script>
	<title>Emprende Fácil</title>	
</head>

<body onload="cargarDiv('barra', 'Contenido/header.php'), cargarDiv('zonaUsuario', 'Contenido/columnaPerfil.php'), cargarDiv('zonaContenido', 'Contenido/informacionDeContacto.php'), $.getScript('Estilos/js/script.js')">
	<!--Incluido en todas las paginas, incluye la barra de navegación y sus botones-->
	<header>
		<div id="barra"></div>
	</header>
	<!--Inicio del cuerpo principal de la pagina-->
	<main role="main">
		<!--La pagina de perfil estará divida en tres zonas-->
		<div class="container-fluid mt-4">
			<div class="row">
				<!--Zona #1 Reservada para navegación del usuario-->
				<div id="zonaUsuario" class="col-md-3"></div>
				<!--Zona #2 Reservada para información del contacto y productos del usuario-->
				<div id="zonaContenido" class="col-md-7"></div>
				<!--Zona #3 Reservada para publicidad-->
				<div class="col-md-2">
					<a href="index.php" class="btn btn-md btn-success btn-block">Sube tus productos Ya</a>
					<div class="card bg-default mt-2">
						<h5 class="card-header">
							Publicidad 1
						</h5>
						<div class="card-body">
							<img class="bd-placeholder-img rounded" width="140" height="140" src="img/png/006-shopping.png">
						</div>
						<div class="card-footer">
							<p>Detalles de producto</p>
							<p><a class="btn btn-secondary" href="#" role="button">Ver más &raquo;</a></p>
						</div>
					</div>
					<div class="card bg-default mt-2">
						<h5 class="card-header">
							Publicidad 2
						</h5>
						<div class="card-body">
							<img class="bd-placeholder-img rounded" width="140" height="140" src="img/png/006-shopping.png">
						</div>
						<div class="card-footer">
							<p>Detalles de producto</p>
							<p><a class="btn btn-secondary" href="#" role="button">Ver más &raquo;</a></p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</main>
	<footer>
		<p class="mt-5 mb-3 text-muted text-center">&copy; 2018-2019</p>	
	</footer>
	<script src="Estilos/js/jquery.min.js"></script>
	<script src="Estilos/js/bootstrap.min.js"></script>
	<script src="http://code.jquery.com/jquery-1.6.3.min.js"></script>
	<script src="Estilos/js/cargarContenido.js"></script>
	<script src="Estilos/js/jquery.filedrop.js"></script>
	<script src="Estilos/js/jquery.script.js"></script>

</body>
</html>
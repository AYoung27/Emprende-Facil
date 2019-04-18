<?php 
	session_start();
 ?>
<!--Pagina de inicio-->
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="author" description="Abner Reyes, Jairo Gomez">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
	<meta name="description" content="somos el enlace entre emprendedores y proveedores. Queremos darte un gran servicio y productos de la mejor calidad de las diferentes compañías y al precio que más te convenga para que puedas emprender desde ya en tu negocio y tengas el éxito al alcance de tus manos.">
	<meta name="keywords" content="Emprender, Facil, compras en linea, ventas de materiales para emprender, plasticos , vidrios , carton, cajas, envases, etiquetas, ventas al por mayor y detalle....">
	
	<link rel="icon" type="png" href="img/png/041-online-shop.png">
	<link type="text/css" rel="stylesheet" href="css/slick.css"/>
	<link type="text/css" rel="stylesheet" href="css/slick-theme.css"/>
	<link type="text/css" rel="stylesheet" href="css/nouislider.min.css"/>
	<link type="text/css" rel="stylesheet" href="css/style.css"/>
	<link rel="stylesheet" href="Estilos/css/bootstrap.min.css">
	<link rel="stylesheet" href="Estilos/css/bootstrap.css">
	<link rel="stylesheet" href="Estilos/css/style.css">
	<link rel="stylesheet" href="Estilos/css/carousel.css">

	<!--archivos para la búsqueda con jquery-->
	<link rel="stylesheet" href="Estilos/css/style_search.css">
	<script src="Estilos/js/jq_search/jquery.js"></script>
	<script src="Estilos/js/jq_search/jquery.dataTables.min.js"></script>

	<title>Emprende Fácil</title>
	
	<!--Estilo exclusivo del carrusel-->
	<style> 
	@media screen and (max-width: 980px) {
		div#divCarrusel {
		display: none;
		}
	}

	@media screen and (max-width: 980px) {
		div#divSearch {
		margin-left: 0;
		}
	}
	.bd-placeholder-img {
		font-size: 1.125rem;
		text-anchor: middle;
	}

	@media (min-width: 768px) {
		.bd-placeholder-img-lg {
			font-size: 3.5rem;
		}
	}
</style>
</head>

<body onload="cargarDiv('barra','Contenido/header.php')">
	<!--Incluido en todas las paginas, incluye la barra de navegación y sus botones-->
	<header> 
		<div id="barra"></div>
	</header>

	<!--Inicio del cuerpo principal de la pagina-->
	<main role="main">
		<!--Carrusel informativo presentado en la pagina principal-->
		<div id="divCarrusel" class="carousel slide" data-ride="carousel" style="padding-top: 1em;">
			<ol class="carousel-indicators">
				<li data-slide-to="0" data-target="#divCarrusel" class="active"></li>
				<li data-slide-to="1" data-target="#divCarrusel"></li>
				<li data-slide-to="2" data-target="#divCarrusel"></li>
			</ol>
			

			<!--Contenido del carrusel, ampliable-->
			<div class="carousel-inner">
				<div class="carousel-item active">
					<svg width="100%" height="100%" preserveAspectRatio="xMidYMid slice" class="bd-placeholder-img" focusable="false" role="img">
						<img src="img/Carrusel/CARRUSEL1.png" >
					</svg>
					<div class="container">
							<div class="carousel-caption">
							<h4>
								<h3></h3>
							</h4>
							<p>
								
							</p>
						</div>
					</div>
				</div>
				<div class="carousel-item" >
					<svg width="100%" height="100%" class="bd-placeholder-img" preserveAspectRatio="xMidYMid slice" focusable="false" role="img">
						<img src="img/Carrusel/CARRUSEL2.png">
					</svg>
					<div class="container">
						<div class="carousel-caption">
							<h4>
								
							</h4>
							<p>
								
							</p>
						</div>
					</div>
				</div>
				<div class="carousel-item">
					<svg width="100%" height="100%" class="bd-placeholder-img" focusable="false" role="img" preserveAspectRatio="xMidYMid slice">
						<img src="img/Carrusel/CARRUSEL3.png">
					</svg>
					<div class="container">
						<div class="carousel-caption">
							<h4>
								
							</h4>
							<p>
								
							</p>
						</div>
					</div>
				</div>
			</div>


			<!--Botones de control para el carrusel-->
			<a class="carousel-control-prev" href="#divCarrusel" data-slide="prev">
				<span class="carousel-control-prev-icon"></span> 
				<span class="sr-only">Anterior</span>
			</a> 
			<a class="carousel-control-next" href="#divCarrusel" data-slide="next">
				<span class="carousel-control-next-icon"></span> 
				<span class="sr-only">Siguiente</span>
			</a>
		</div>

		<!--Contenido extra: Publicidad y otra información-->
		<div class="container marketing mt-3">
			<!--div que contiene tres tarjetas de publicidad, se puede utilizar para ampliar-->
			<div class="row">
				<div class="col-lg-4">
					<div class="card bg-default">
						<h5 class="card-header">
							Producto X
						</h5>
						<div class="card-body">
							<img class="bd-placeholder-img rounded" width="140" height="140" src="img/png/006-shopping.png">
						</div>
						<div class="card-footer">
							<p>Detalles de producto</p>
							<p><a class="btn btn-secondary" href="detalle.php" role="button">Ver más &raquo;</a></p>
						</div>
					</div>      			
				</div>
				<div class="col-lg-4">
					<div class="card bg-default">
						<h5 class="card-header">
							Producto Y
						</h5>
						<div class="card-body">
							<img class="bd-placeholder-img rounded" width="140" height="140" src="img/png/006-shopping.png">
						</div>
						<div class="card-footer">
							<p>Detalles de producto</p>
							<p><a class="btn btn-secondary" href="detalle.php" role="button">Ver más &raquo;</a></p>
						</div>
					</div>      			
				</div>
				<div class="col-lg-4">
					<div class="card bg-default">
						<h5 class="card-header">
							Producto Z
						</h5>
						<div class="card-body">
							<img class="bd-placeholder-img rounded" width="140" height="140" src="img/png/006-shopping.png">
						</div>
						<div class="card-footer">
							<p>Detalles de producto</p>
							<p><a class="btn btn-secondary" href="detalle.php" role="button">Ver más &raquo;</a></p>
						</div>
					</div>      			
				</div>
			</div>
			<div class="row">
				<div class="col-lg-4">
					<div class="card bg-default">
						<h5 class="card-header">
							Producto X
						</h5>
						<div class="card-body">
							<img class="bd-placeholder-img rounded" width="140" height="140" src="img/png/006-shopping.png">
						</div>
						<div class="card-footer">
							<p>Detalles de producto</p>
							<p><a class="btn btn-secondary" href="detalle.php" role="button">Ver más &raquo;</a></p>
						</div>
					</div>      			
				</div>
				<div class="col-lg-4">
					<div class="card bg-default">
						<h5 class="card-header">
							Producto Y
						</h5>
						<div class="card-body">
							<img class="bd-placeholder-img rounded" width="140" height="140" src="img/png/006-shopping.png">
						</div>
						<div class="card-footer">
							<p>Detalles de producto</p>
							<p><a class="btn btn-secondary" href="detalle.php" role="button">Ver más &raquo;</a></p>
						</div>
					</div>      			
				</div>
				<div class="col-lg-4">
					<div class="card bg-default">
						<h5 class="card-header">
							Producto Z
						</h5>
						<div class="card-body">
							<img class="bd-placeholder-img rounded" width="140" height="140" src="img/png/006-shopping.png">
						</div>
						<div class="card-footer">
							<p>Detalles de producto</p>
							<p><a class="btn btn-secondary" href="detalle.php" role="button">Ver más &raquo;</a></p>
						</div>
					</div>      			
				</div>
			</div>
			<hr class="featurette-divider">


			<!--Información Extra, no indispensable-->
			<div class="row featurette" style="padding-top: 3em;">
				<div class="col-md-7">
					<h2 class="featurette-heading">Beneficios de nuestro sitio web. <span class="text-muted">Te sorprenderán.</span></h2>
					<p class="lead">Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>
				</div>
				<div class="col-md-5">
				</div>
			</div>

			<hr class="featurette-divider">

			<div class="row featurette">
				<div class="col-md-7 order-md-2">
					<h2 class="featurette-heading">Inscríbete ya y<span class="text-muted"> publicita tus productos.</span></h2>
					<p class="lead">Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>
				</div>
				<div class="col-md-5 order-md-1">
				</div>
			</div>
		</div>
	</main>
	<footer>
		<p class="mt-5 mb-3 text-muted text-center">&copy; 2018-2019</p>	
	</footer>
	<script src="Estilos/js/jquery.min.js"></script>
	<script src="Estilos/js/bootstrap.min.js"></script>
	<script src="Estilos/js/scripts.js"></script>	
	<script src="Estilos/js/cargarContenido.js"></script>
	<script src="Estilos/js/slick.min.js"></script>
	<script src="Estilos/js/nouislider.min.js"></script>
	<script src="Estilos/js/jquery.zoom.min.js"></script>
	<script src="Estilos/js/main.js"></script>

</body>
</html>
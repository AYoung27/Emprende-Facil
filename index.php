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

<body>
	<!--Incluido en todas las paginas, incluye la barra de navegación y sus botones-->
	<header> 
		<nav class="navbar navbar-expand-lg navbar-dark fixed-top bg-custom">	 
			<!--El siguiente botón permanecerá oculto hasta que sea necesario, usado por responsividad-->
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#divCollapse">
				<span class="navbar-toggler-icon"></span>
			</button>

			<a class="navbar-brand" href="index.php">
				<!--Emprende Fácil-->
				<img src="img/logo/PROTOTIPO6_LOGO.png" height="35px;" style="padding-left: 1em; padding-right: 1em;">
			</a>

			<!--Todo lo incluido en este div sera ocultado en pantallas angostas-->
			<div class="collapse navbar-collapse" id="divCollapse">
				<?php 
					if (empty($_SESSION)){
						echo "<ul class=\"navbar-nav mr-auto\">
								<li class=\"nav-item\">
									<a class=\"nav-link\" href=\"registro.php\">Registrarse</a>
								</li>
								<li class=\"nav-item\">
									<a class=\"nav-link\" href=\"login.php\">Iniciar Sesión</a>
								</li>
							</ul>";	
					} else {
						echo "<ul class=\"navbar-nav mr-auto\">
								<li class=\"nav-item\">
									<a class=\"nav-link\" href=\"perfil.php\">
										Perfil
										<img class=\"img-circle img-thumbnail img-responsive\" height=\"20\" width=\"20\" src=\"img\\png\\014-support.png\"/>
									</a>
								</li>
							</ul>";
					}
				 ?>

				<!--Formulario de búsqueda que incluye dos menús desplegables-->
				<form class="form-inline mt-2 mt-md-0">
					<div class="input-group">
						<input type="search" class="form-control" id="input-search" placeholder="Buscar un producto" size="60" /> 
						<span class="input-group-addon">
							<button class="btn btn-primary" type="submit">
								<span class="glyphicon glyphicon-search"></span>
							</button>
						</span>

						<div class="content-search">
							<div class="content-table">
								<table id="table">
									<thead>
										<tr>
											<td></td>
										</tr>
									</thead>

									<tbody>
										<tr> <td> <a href="busqueda.php">Cajas</a> </td> </tr>
										<tr> <td> <a href="busqueda.php">Envases</a> </td> </tr>
										<tr> <td> <a href="busqueda.php">Etiquetas para productos</a> </td> </tr>
										<tr> <td> <a href="busqueda.php">Madera</a> </td> </tr>
										<tr> <td> <a href="busqueda.php">Impresiones</a> </td> </tr>
										<tr> <td> <a href="busqueda.php">Diseño de logos</a> </td> </tr>
										<tr> <td> <a href="busqueda.php">Metales</a> </td> </tr>
										<tr> <td> <a href="busqueda.php">Plásticos</a> </td> </tr>
										<tr> <td> <a href="busqueda.php">Equipo de oficina</a> </td> </tr>
										<tr> <td> <a href="busqueda.php">Locales</a> </td> </tr>  
									</tbody>
								</table>
							</div>
						</div>
					</div>

					<!--script para jquery en el buscador-->
					<script src="Estilos/js/jq_search/search.js"></script>


					<a href="pago.php"> <button class="btn" type="button" id="btnCarrito">
						<span class="glyphicon glyphicon-shopping-cart"></span>
					</button></a>
					<?php
						if (!empty($_SESSION)) {
							echo "<!--Menu desplegable #1-->
								<div class=\"dropdown\" style=\"margin-left:auto; margin-right:0;\">
									<button id=\"btnDespegable_1\" class=\"btn\" type=\"button\" data-toggle=\"dropdown\" data-target = \"#divDesplegable_1\" >
										<span id=\"spnMenu\" class=\"glyphicon glyphicon-bell\" style=\"color: black\"></span>
									</button>
									<div id=\"divDesplegable_1\" class=\"dropdown-menu dropdown-menu-right\" aria-labelledby=\"dropdownMenuButton\">
										<a class=\"dropdown-item\" href=\"#\">Notificación 1</a> 
										<a class=\"dropdown-item\" href=\"#\">Notificación 2</a> 
										<a class=\"dropdown-item\" href=\"#\">Notificación 3</a>
									</div>
								</div>

								<!--Menu desplegable #2-->
									<div class=\"dropdown\" style=\"margin-left:auto; margin-right:0;\">
										<button id=\"btnDesplegable_2\" class=\"btn dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" data-target = \"#divDesplegable_2\">
										</button>
										<div id=\"divDesplegable_2\" class=\"dropdown-menu dropdown-menu-right\" aria-labelledby=\"dropdownMenuButton\">
											<a class=\"dropdown-item\" href=\"perfil.php\">Perfil</a> 
											<a class=\"dropdown-item\" href=\"#\">Otro</a> 
											<a class=\"dropdown-item\" href=\"Acciones\\CerrarSesion.php\">Salir</a>
										</div>
									</div>";
						}
					?>
				</form>
			</div>
		</nav>
	</header>

	<!--Inicio del cuerpo principal de la pagina-->
	<main role="main">
		<!--Carrusel informativo presentado en la pagina principal-->
		<div id="divCarrusel" class="carousel slide" data-ride="carousel">
			<ol class="carousel-indicators">
				<li data-slide-to="0" data-target="#divCarrusel" class="active"></li>
				<li data-slide-to="1" data-target="#divCarrusel"></li>
				<li data-slide-to="2" data-target="#divCarrusel"></li>
			</ol>
			<!--Contenido del carrusel, ampliable-->
			<div class="carousel-inner">
				<div class="carousel-item active">
					<svg width="100%" height="100%" preserveAspectRatio="xMidYMid slice" class="bd-placeholder-img" focusable="false" role="img">
						<img src="img/1.jpeg" >
					</svg>
					<div class="container">
						<div class="carousel-caption">
							<h4>
								<h3><span style="font-weight: bold;"> !Emprender </span> ahora es <span style="font-weight: bold;">Fácil!</span></h3>
							</h4>
							<p>
								<br>Párrafo publicitario
							</p>
						</div>
					</div>
				</div>
				<div class="carousel-item" >
					<svg width="100%" height="100%" class="bd-placeholder-img" preserveAspectRatio="xMidYMid slice" focusable="false" role="img">
						<img src="img/2.png">
					</svg>
					<div class="container">
						<div class="carousel-caption">
							<h4>
								Espacio #2
							</h4>
							<p>
								Párrafo publicitario
							</p>
						</div>
					</div>
				</div>
				<div class="carousel-item">
					<svg width="100%" height="100%" class="bd-placeholder-img" focusable="false" role="img" preserveAspectRatio="xMidYMid slice">
						<img src="img/3.jpg">
					</svg>
					<div class="container">
						<div class="carousel-caption">
							<h4>
								Espacio #3
							</h4>
							<p>
								Párrafo publicitario
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
		<div class="container marketing">
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
							<p><a class="btn btn-secondary" href="#" role="button">Ver más &raquo;</a></p>
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
							<p><a class="btn btn-secondary" href="#" role="button">Ver más &raquo;</a></p>
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
							<p><a class="btn btn-secondary" href="#" role="button">Ver más &raquo;</a></p>
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
							<p><a class="btn btn-secondary" href="#" role="button">Ver más &raquo;</a></p>
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
							<p><a class="btn btn-secondary" href="#" role="button">Ver más &raquo;</a></p>
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
							<p><a class="btn btn-secondary" href="#" role="button">Ver más &raquo;</a></p>
						</div>
					</div>      			
				</div>
			</div>
			<hr class="featurette-divider">

			<!--Información Extra, no indispensable-->
			<div class="row featurette">
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
	<script type="text/javascript">
		function changeColor(x){
			if(x.style.color=="black"){
				x.style.color="white";
			}else{
				x.style.color="black";
			}
			return false;
		}
	</script>
</body>
</html>
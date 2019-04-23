<?php 
	session_start();
	include("Clases/Conexion.php");
	$conexion = new Conexion();
	$conexion->mysql_set_charset("utf8");

	function mostrarProducto($conexion){
		$consulta = sprintf("SELECT Cantidad, IDProducto, NombreProducto, ImagenPrincipal, PrecioActual, IDMoneda, Valoracion, tbl_categoria.NombreCategoria as NombreCategoria FROM tbl_producto, tbl_categoria WHERE tbl_producto.IDCategoria = tbl_categoria.IDCategoria ORDER BY RAND() LIMIT 4");
		$resultado = $conexion->ejecutarconsulta($consulta);
		$contador = 0;
		$iter = $conexion->cantidadRegistros($resultado);
		for ($i=0; $i < $iter; $i++) {
			if ($contador == 0) {
				echo '<div class="row">';
			}

			$data = $conexion->obtenerFila($resultado);
			$valoracion = (intval($data["Valoracion"]));

			echo '<div class="col-md-3">
					<a href="detalle.php?idp='.$data["IDProducto"].'" >
					<div class="product">
						<div class="product-img">	
								<img src="data:image/jpg;base64,'.base64_encode($data["ImagenPrincipal"]).'" alt="">';
			if ($data["Cantidad"] == 0) {
				echo '			<div class="product-label">
										<span class="new">AGOTADO</span>
								</div>';
			} elseif ($data["Cantidad"] <= 10) {
				echo '			<div class="product-label">
										<span class="new">POCOS EN INVENTARIO</span>
								</div>';
			}
			echo		'</div>
						<div class="product-body">
							<p class="product-category">'.$data["NombreCategoria"].'</p>
							<h3 class="product-name">'.$data["NombreProducto"].'</h3>
							<h4 class="product-price">'.$data["IDMoneda"].' '.$data["PrecioActual"].'
							<!--<del class="product-old-price">$990.00</del>--></h4>
							<p class="product-category">Art. en Inventario: '.$data["Cantidad"].'</p>
							<div class="product-rating">';
			for ($j=0; $j < $valoracion ; $j++) { 
				echo '			<i class="glyphicon glyphicon-star"></i>';
			}

			$valoracion = 5 - $valoracion;
			for ($k=0; $k < $valoracion; $k++) { 
				echo '			<i class="glyphicon glyphicon-star-empty"></i>';
			}
			echo '				
							</div>
							<div class="product-btns">
								<a href="detalle.php?idp='.$data["IDProducto"].'" class="quick-view"><i class="glyphicon glyphicon-list"></i><span class="tooltipp">Detalles del producto</span></a>
							</div>
						</div>
						<div class="add-to-cart">
							<button class="add-to-cart-btn" onclick="addCarrito('.$data["IDProducto"].')"><i class="glyphicon glyphicon-shopping-cart"></i>Agregar al carrito</button>
						</div>
					</div>
					</a>      			
				</div>';
		
		$contador++;
		if ($contador == 4) {
			echo '</div>';
			$contador = 0;
		}
	}
}
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

<body onload="cargarDiv('barra','Contenido/header.php'), cargarDiv('divCollapse','Contenido/notificacionesBarra.php')">
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
			<div class="col-md-12">
				<div class="section-title">
					<h3 class="title">Ofertas</h3>
				</div>
			</div>
			<!--div que contiene tres tarjetas de publicidad, se puede utilizar para ampliar-->
			<?php 
				mostrarProducto($conexion);
			 ?>
			<hr class="featurette-divider">
			<div class="col-md-12">
				<div class="section-title">
					<h3 class="title">Categorias</h3>
				</div>
			</div>
			<div class="col-md-4 col-xs-6">
						<div class="shop">
							<div class="shop-img">
								<img src="img/png/006-shopping.png" alt="">
							</div>
							<div class="shop-body">
								<h3>Cajas</h3>
								<a href="busqueda.php?q=" class="cta-btn">Buscar ahora <i class="glyphicon glyphicon-circle-arrow-right"></i></a>
							</div>
						</div>
					</div>
			<!--Información Extra, no indispensable-->
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
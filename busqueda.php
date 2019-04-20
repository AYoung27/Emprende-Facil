<?php  
include("Clases/Conexion.php");
$conexion = new Conexion();
$conexion->mysql_set_charset("utf8");
function mostrarProducto($id, $conexion){
	$consulta = sprintf("SELECT IDProducto, NombreProducto, ImagenPrincipal, PrecioActual, IDMoneda, Valoracion, tbl_categoria.NombreCategoria FROM tbl_producto, tbl_categoria WHERE tbl_producto.IDCategoria = tbl_categoria.IDCategoria AND NombreProducto LIKE '%s' ORDER BY (NombreProducto)", '%'.$conexion->antiInyeccion($id).'%');
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
					<div class="product">
						<a href="detalle.php?idp='.$data["IDProducto"].'" >
						<div class="product-img">
								<img src="data:image/jpg;base64,'.base64_encode($data["ImagenPrincipal"]).'" alt="">
						</div>
						<div class="product-body">
							<p class="product-category">'.$data["NombreCategoria"].'</p>
							<h3 class="product-name">'.$data["NombreProducto"].'</h3>
							<h4 class="product-price">'.$data["IDMoneda"].' '.$data["PrecioActual"].'
							<!--<del class="product-old-price">$990.00</del>--></h4>
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
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="author" description="Jairo">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
	
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
	<style type="text/css">
		@media screen and (max-width: 980px) {
		div.banner {
		display: none;
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

	<!--publicidad centro de pagina-->
			<div class="banner" style="text-align: center; position: absolute; padding-left: 15em; padding-top: 2em; animation-iteration-count: infinite; ">
    			<iframe src="img/Banners/banner_prot_3/banner_prot_3.html" scrolling="no" height="90" width="728"   style=" border:none; animation-iteration-count: infinite;"></iframe>
			</div>


	<!--aside , contendrá el espacio para publicidad lateral-->
	<div class="banner">
	<aside style="float: right; padding: 2em 1em;">
    	<iframe src="img/Banners/banner_prot_1/banner_prototipo1.html" scrolling="no" height="600" width="160"  style=" border:none"></iframe>
	</aside>
	</div>


	<!--fila contenedora de el panel de resultados de búsqueda-->
	<div class="row" style="padding-left: 4em; padding-right: 1em; padding-top: 10em;">
	<!--resultados de búsqueda-->
		<div class="container marketing">
		 	<?php  
				if (isset($_GET['q'])) {
					mostrarProducto($_GET['q'], $conexion);
				}
		 	?>	
 		</div>
	</div>

	<hr class="featurette-divider">
			
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
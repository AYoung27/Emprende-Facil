<?php  include("Clases/Conexion.php");
$conexion = new Conexion();
$conexion->mysql_set_charset("utf8");
function mostrarProducto($id, $conexion){
	$consulta = sprintf("SELECT NombreProducto, Descripcion, ImagenPrincipal FROM tbl_producto WHERE NombreProducto LIKE '%s'", '%'.$conexion->antiInyeccion($id).'%');
	$resultado = $conexion->ejecutarconsulta($consulta);
	$contador = 0;
	$iter = $conexion->cantidadRegistros($resultado);
	for ($i=0; $i < $iter; $i++) {
		
		if ($contador == 0) {
			echo '<div class="row" style="padding-bottom: 3em;">';
		}
		$data = $conexion->obtenerFila($resultado);
		echo '<div class="col-lg-3">
					<div class="card bg-default">
						<h5 class="card-header">
							'.$data["NombreProducto"].'
						</h5>
						<div class="card-body">
							<img class="bd-placeholder-img rounded" width="140" height="140" src="data:image/jpg;base64,'.base64_encode($data["ImagenPrincipal"]).'">
						</div>
						<div class="card-footer">
							<p>'.$data["Descripcion"].'</p>
							<p><a class="btn btn-secondary" href="detalle.php" role="button">Ver más &raquo;</a></p>
						</div>
					</div>      			
				</div>';
		
		if ($contador == 4) {
			echo '</div>';
		}

		$contador++;
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
			<div style="text-align: center; position: absolute; padding-left: 15em; padding-top: 2em; animation-iteration-count: infinite; ">
    			<iframe src="img/Banners/banner_prot_3/banner_prot_3.html" scrolling="no" height="90" width="728"   style=" border:none; animation-iteration-count: infinite;"></iframe>
			</div>


	<!--aside , contendrá el espacio para publicidad lateral-->
	<aside style="float: right; padding: 2em 1em;">
    <iframe src="img/Banners/banner_prot_1/banner_prototipo1.html" scrolling="no" height="600" width="160"  style=" border:none"></iframe>
	</aside>


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
﻿<?php 
session_start();
if (empty($_SESSION)) {
	header('Location: index.php');
} elseif (!isset($_SESSION["ID"])) {
	header('Location: index.php');
}
include("Clases/Conexion.php");
$conexion = new Conexion();
$conexion->mysql_set_charset("utf8");

function cargarDeptos($conexion)
{
	$consulta = sprintf("SELECT NombreDepartamento, IDDepartamento FROM tbl_departamentos ORDER BY IDDepartamento ASC");
	$resultado = $conexion->ejecutarconsulta($consulta);

	for ($i=0; $i < 18; $i++) {
		$data = $conexion->obtenerFila($resultado);
		echo '<option value="'.$data['IDDepartamento'].'">'.$data['NombreDepartamento'].'</option>';
	}
}

function marcarNotificacion($id, $conexion){
	$consulta = sprintf("UPDATE tbl_notificacion SET Visto = '1' WHERE IDNotificacion = '%s'", $conexion->antiInyeccion($id));
	$conexion->ejecutarconsulta($consulta);
}

function mostrarProducto($conexion){
	$consulta = sprintf("SELECT Cantidad, IDProducto, NombreProducto, ImagenPrincipal, PrecioActual, IDMoneda, Valoracion, tbl_categoria.NombreCategoria as NombreCategoria FROM tbl_producto, tbl_categoria WHERE tbl_producto.IDCategoria = tbl_categoria.IDCategoria ORDER BY RAND() LIMIT 2");
	$resultado = $conexion->ejecutarconsulta($consulta);
	$contador = 0;
	$iter = $conexion->cantidadRegistros($resultado);
	for ($i=0; $i < $iter; $i++) {
		if ($contador == 0) {
			echo '<div class="row">';
		}

		$data = $conexion->obtenerFila($resultado);
		$valoracion = (intval($data["Valoracion"]));
		echo '<div class="col-md-12">
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
		echo		'
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
		<button class="add-to-cart-btn" onclick="addCarrito('.$data["IDProducto"].')"><i class="glyphicon glyphicon-shopping-cart"></i>Agregar</button>
		</div>
		</div>
		</a>      			
		</div></div>';
	}
}


if (isset($_GET['idn'])) {
	marcarNotificacion($_GET['idn'], $conexion);
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
	<link rel="stylesheet" href="Estilos/css/drag.css">
	<link rel="stylesheet" href="Estilos/css/style.css">
	<!--archivos para la búsqueda con jquery-->
	<link rel="stylesheet" href="Estilos/css/style_search.css">
	<script src="Estilos/js/jq_search/jquery.js"></script>
	<script src="Estilos/js/jq_search/jquery.dataTables.min.js"></script>
	<title>Emprende Fácil</title>	
</head>

<body onload="cargarDiv('barra', 'Contenido/header.php'),cargarDiv('divCollapse','Contenido/notificacionesBarra.php'),cargarDiv('zonaUsuario', 'Contenido/columnaPerfil.php'), cargarDiv('zonaContenido', 'Contenido/informacionDeContacto.php')">
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
					<?php 
					if ($_SESSION['TipoUsuario'] == '1') {
						echo '<a href="#" data-toggle="modal" data-target="#modalVendedor" class="btn btn-md btn-success btn-block">Sube tus productos</a><hr>';
					}
					echo '<h6 text-align="center">Productos destacados</h6>';
					mostrarProducto($conexion);
					?>
				</div>
			</div>
		</div>

		<!--Div ventana modal-->
		<div class="modal fade" id="modalVendedor" tabindex="-1" role="dialog" aria-labelledby="Vendedor" aria-hidden="true">
			<form class="form-signin" method="post" action="Acciones/volverProveedor.php">
				<div class="modal-dialog modal-lg" role="document">
					<div class="modal-content">
						<div class="modal-header" style="text-align:center">
							<h5 class="modal-title" id="Detalles">Conviertete en un proveedor</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>			
						</div>

						<div class="modal-body">
							<p>Llena la siguiente tabla con los datos de tu empresa</p>
							<div class="form-label-group">
								<input type="text" id="txtNombreEmp" name="txtNombreEmp" class="form-control" placeholder="Nombre de la Empresa" required autofocus >
								<label for="inputEmail">Nombre de la empresa</label>
							</div>

							<div class="row">
								<div class="col-md-6 mb-3">
									<label for="country">Departamento</label>
									<select class="custom-select d-block w-100" id="optDepto" name="optDepto" onchange="cargarMun(this.value)" required>
										<option value="">Seleccionar...</option>
										<?php cargarDeptos($conexion); ?>
									</select>
								</div>
								<div class="col-md-6 mb-3" id="Municipio">

								</div>
							</div>

							<div class="form-label-group">
								<input type="text" id="txtDireccion" name="txtDireccion" placeholder="Dirección" class="form-control" required autofocus>
								<label for="inputEmail">Dirección</label>
							</div>

							<div class="form-label-group">
								<input type="text" id="txtTelefono" placeholder="Teléfono" name="txtTelefono" class="form-control" minlength="8" maxlength="8" pattern="[0-9]+" required autofocus>
								<label for="inputEmail">Teléfono</label>
							</div>

							<div class="form-label-group">
								<input type="text" id="txtRTN" name="txtRTN" class="form-control" placeholder="RTN"  minlength="6" pattern="[0-9]+" required>
								<label for="inputPassword">RTN</label>
							</div>
						</div>

						<div class="modal-footer">
							<div class="checkbox mb-3">
								<label>
									<input style="padding-top: 1em;" type="checkbox" value="remember-me" required> <a href="Contenido/politicas_proveedor.php" target="_blank"> He leído los términos y condiciones </a>
								</label>
							</div> 
							<button type="submit" class="btn btn-primary">Aceptar</button>
							<button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
						</div>
					</div>
				</div>
			</form>
		</div>		
	</main>
	<footer>
		<p class="mt-5 mb-3 text-muted text-center">&copy; 2018-2019</p>	
	</footer>
	<script src="Estilos/js/jquery.min.js"></script>
	<script src="Estilos/js/bootstrap.min.js"></script>
	<script src="http://code.jquery.com/jquery-1.6.3.min.js"></script>
	<script src="Estilos/js/cargarContenido.js"></script>
	<script src="Estilos/js/script.js"></script>
	<script src="Estilos/js/jquery.filedrop.js"></script>
	<script src="Estilos/js/jquery.script.js"></script>
	<script type="text/javascript" src="Estilos/js/chartJSgraficos/Chart.min.js"></script>
	
</body>
</html>
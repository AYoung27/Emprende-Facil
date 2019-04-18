<?php 
session_start();
if (empty($_SESSION)) {
	header('Location: index.php');
}
include("Clases/Conexion.php");
$conexion = new Conexion();
$conexion->mysql_set_charset("utf8");

function cargarDeptos($conexion)
{
	$consulta = sprintf("SELECT NombreDepartamento FROM tbl_departamentos ORDER BY IDDepartamento ASC");
	$resultado = $conexion->ejecutarconsulta($consulta);

	for ($i=0; $i < 18; $i++) { 
		echo '<option>'.$conexion->obtenerFila($resultado)[0].'</option>';
	}
}


function cargarMunicipios($conexion)
{
	$consulta = sprintf("SELECT NombreMunicipio FROM tbl_municipio ORDER BY IDMunicipio ASC");
	$resultado = $conexion->ejecutarconsulta($consulta);
	$iter = $conexion->cantidadRegistros($resultado);

	for ($i=0; $i < $iter; $i++) { 
		echo '<option>'.$conexion->obtenerFila($resultado)[0].'</option>';
	}
}

function marcarNotificacion($id, $conexion){
	$consulta = sprintf("UPDATE tbl_notificacion SET Visto = '1' WHERE IDNotificacion = '%s'", $conexion->antiInyeccion($id));
	$conexion->ejecutarconsulta($consulta);
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
						echo '<a href="#" data-toggle="modal" data-target="#modalVendedor" class="btn btn-md btn-success btn-block">Sube tus productos Ya</a>';
					}
					?>
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
								<input type="text" id="txtNombreEmp" name="txtNombreEmp" class="form-control" placeholder="Password" required autofocus >
								<label for="inputEmail">Nombre de la empresa</label>
							</div>

							<div class="row">
								<div class="col-md-6 mb-3">
									<label for="country">Departamento</label>
									<select class="custom-select d-block w-100" id="optDepto" name="optDepto" required>
										<option value="">Seleccionar...</option>
										<?php cargarDeptos($conexion); ?>
									</select>
								</div>
								<div class="col-md-6 mb-3">
									<label for="state">Estado</label>
									<select class="custom-select d-block w-100" id="optMun" name="optMun" required>
										<option value="">Seleccionar...</option>
										<?php cargarMunicipios($conexion); ?>
									</select>
								</div>
							</div>

							<div class="form-label-group">
								<input type="text" id="txtDireccion" name="txtDireccion" placeholder="Password" class="form-control" required autofocus>
								<label for="inputEmail">Dirección</label>
							</div>

							<div class="form-label-group">
								<input type="text" id="txtTelefono" placeholder="Password" name="txtTelefono" class="form-control" minlength="8" maxlength="8" pattern="[0-9]+" required autofocus>
								<label for="inputEmail">Teléfono</label>
							</div>

							<div class="form-label-group">
								<input type="text" id="txtRTN" name="txtRTN" class="form-control" placeholder="Password"  minlength="6" pattern="[0-9]+" required>
								<label for="inputPassword">RTN</label>
							</div>
						</div>

						<div class="modal-footer">
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
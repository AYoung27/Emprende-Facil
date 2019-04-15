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

	<!--archivos para la búsqueda con jquery-->
	<link rel="stylesheet" href="Estilos/css/style_search.css">
	<script src="Estilos/js/jq_search/jquery.js"></script>
	<script src="Estilos/js/jq_search/jquery.dataTables.min.js"></script>

	<title>Emprende Fácil</title>	
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

									if ($_SESSION['Imagen'] == "NULL") {
										$img = 'img/png/014-support.png';
									} else{
										$img = 'data:image/png;base64,'.base64_encode($_SESSION['Imagen']);
									}
						echo "<ul class=\"navbar-nav mr-auto\">
								<li class=\"nav-item\">
									<a class=\"nav-link\" href=\"perfil.php\">
										Perfil
										<img class=\"img-circle img-thumbnail img-responsive\" height=\"20\" width=\"20\" src=\"".$img."\"/>
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
											<a class=\"dropdown-item\" href=\"Acciones/cerrarSesion.php\">Salir</a>
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
		<!--La pagina de perfil estará divida en tres zonas-->
		<div class="container-fluid mt-4">
			<div class="row">
				<!--Zona #1 Reservada para navegación del usuario-->
				<div class="col-md-3">
					<div class="col-md-12" align="center">
						<img src="<?php 
									if ($_SESSION['Imagen'] == "NULL") {
										echo 'img/png/014-support.png';
									} else{
										echo 'data:image/png;base64,'.base64_encode($_SESSION['Imagen']);
									}
							 ?> "
						 width="200px" height="200px" class="img-thumbnail rounded img-responsive img-hover">
					</div>
					<div class="col-md-12">
						<p class="text-center"><strong><?php echo $_SESSION['Usuario']." "; ?></strong><a href="modificarPerfil.php" title="Modifica tu perfil"><span class="glyphicon glyphicon-pencil"></span></a></p>
					</div>
					<div class="col-md-12">
						<ul class="list-group">
							<a href="perfil.php" class="list-group-item list-group-item-info"	>Perfil</a>
							<?php 
								if ($_SESSION['TipoUsuario'] == '2') {
									echo "<a href=\"inventario.php\" class=\"list-group-item\"	>Inventario</a>
										<a href=\"estadisticas.php\" class=\"list-group-item\"	>Estadística</a>";		
								}
							 ?>
							<a href="Pedidos.php" class="list-group-item"	>Pedidos</a>
							<a href="historial_compra.php" class="list-group-item"	>Historial de Compra</a>
						</ul>
					</div>
				</div>

				<!--Zona #2 Reservada para información del contacto y productos del usuario-->
				<div class="col-md-7">
					<div class="col-md-12" style="border-width: 1px 1px 1px 1px; border-style: solid; border-color: lightgray;">
						<br>
						<h4 style="text-align: center;">
							Información de Contacto
						</h4>
						<p class="text-center text-muted">Correo Electrónico:</p>
						<p class="text-center text-muted">Teléfono:</p>
						<p class="text-center text-muted">Dirección:</p>

						<p class="text-center">Redes Sociales:</p>
						<div class="col-md-12 text-center">
							<ul class="list-unstyled list-inline list-social-icons">
								<a href="#">Facebook</a>
								<a href="#">Twitter</a>
								<a href="#">Google+</a>
							</ul>
						</div>
					</div>
				</div>

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
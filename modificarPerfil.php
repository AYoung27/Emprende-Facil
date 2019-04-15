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
						<p class="text-center"><strong><?php echo $_SESSION['Usuario']; ?></strong></p>
					</div>
					<div class="col-md-12">
						<ul class="list-group">
							<a href="perfil.php" class="list-group-item ">Perfil</a>
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
				<div class="col-md-9">
					<div class="col-md-12" style="border-width: 1px 1px 1px 1px; border-style: solid; border-color: lightgray;">
						<br>
						<h4 class="mb-4" style="text-align: center;">
							Modifica tu perfil
						</h4>
					</div>

                <!-- Inicio del div central parte de formulario información básica -->
									<div id="dropbox">
										<span class="message"><h6>Arrastra una imagen para subir a tu perfil</h6></span>
									</div>
			<form name="modifyProfile" id="profileForm" method="post" action="Acciones/modificarDatosUsuario.php">
                <div class="col-md-12" style="border-width: 1px 1px 0px 1px; border-style: solid; border-color: lightgrey; background: #f1f3f6;">
                	<div class="col-md-12 col-md-offset-2">
    	                
    	                    <div class="control-group form-group">
    	                        <div class="controls">
    	                        	<br >
    	                            <label><strong>Información básica</strong></label><br>
    	                            <label>Nombre</label>
    	                            	<input type="text" class="form-control" id="txtName" name="txtNombre" value="<?php echo $_SESSION['Nombre'];?>" required data-validation-required-message="Por favor introduzca su nomnbre.">
    	                            <br>
    	                         	<label>Apellido</label>
    	                            	<input type="text" class="form-control" id="txtSurname" name="txtApellido" value="<?php echo $_SESSION['Apellido'];?>" required data-validation-required-message="Por favor introduzca sus apellidos.">
    	                            <br>
    	                            <label>Correo</label>
    	                            	<input type="email" class="form-control" id="txtEmail" name="txtEmail" value=<?php echo $_SESSION['Correo'];?> required data-validation-required-message="Por favor introduzca su email.">
    	                            <p class="help-block"></p>
    	                        </div>
    	                    </div>
    	                    <div class="form-group">
        		              	<button type="submit" id="btnEnviar" class="btn btn-primary btn-lg btn-block">Actualizar</button>
                            </div>
                            <div class="form-group">
    	                	  <a href="perfil.php" class="btn btn-lg btn-danger btn-block">Cancelar</a>
                        	</div>
                            <br>
                    </div>
                </div>
            </form>
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
	<script src="http://code.jquery.com/jquery-1.6.3.min.js"></script>
	<script src="Estilos/js/jquery.filedrop.js"></script>	
    <script src="Estilos/js/script.js"></script>
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
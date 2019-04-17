	<div id="nav">
		<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-custom">	 
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
					session_start();
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

									if ($_SESSION['Imagen'] == NULL || $_SESSION['Imagen'] == "") {
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
						<button class="btn btn-primary" type="submit">
							<span class="glyphicon glyphicon-search"></span>
						</button>
						
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
	</div>
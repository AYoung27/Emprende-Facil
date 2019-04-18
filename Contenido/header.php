<style type="text/css">
</style>
<div id="nav">
	<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-custom">	 
		<!--El siguiente botón permanecerá oculto hasta que sea necesario, usado por responsividad-->
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#divCollapse">
			<span class="navbar-toggler-icon"></span>
		</button>

		<!--Emprende Fácil-->
		<a class="navbar-brand" href="index.php">
			<img src="img/logo/PROTOTIPO6_LOGO.png" height="35px;" style="padding-left: 1em; padding-right: 1em;">
		</a>
		<button class="btn btn-primary navbar-toggler"  type="button" data-toggle="collapse" data-target="#divSearch">
			<span class="glyphicon glyphicon-search my-1"></span>
		</button>
		
		<!--Todo lo incluido en este div sera ocultado en pantallas angostas-->	
		<!--Div Oculto #1 (Derecha)-->
		<div id="divSearch" class="collapse navbar-collapse header-search" style="margin-left: 5rem;">
			<form>
				<select class="input-select">
					<option value="0">Categorias</option>
					<option value="1">Category 01</option>
					<option value="1">Category 02</option>
				</select>
				<input class="input" size="60" placeholder="Buscar Producto" >
				<button class="search-btn btn-primary"><span class="glyphicon glyphicon-search"></span></button>
			</form>
		</div>
		<!--FIN Div Oculto #1-->

		<!--Div Oculto #2 (Izquierda)-->
		<div class="collapse navbar-collapse" id="divCollapse">
			<form class="form-inline ml-auto">
				<?php
					session_start();
					if (empty($_SESSION)){
						echo "<ul class=\"navbar-nav\">
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
						echo "<ul class=\"navbar-nav\">
								<li class=\"nav-item\">
									<a class=\"nav-link\" href=\"perfil.php\">Perfil
										<img class=\"img-circle img-thumbnail img-responsive\" height=\"20\" width=\"20\" src=\"".$img."\"/>
									</a>
								</li>
							</ul>";
						}
				?>
				<a class="btn ml-auto" href="pago.php">
					<span class="glyphicon glyphicon-shopping-cart"></span>
				</a>
				<?php
					if (!empty($_SESSION)) {
						echo "<!--Menu desplegable #1-->
						<div class=\"dropdown\">
						<button id=\"btnDespegable_1\" class=\"btn\"  data-toggle=\"dropdown\" data-target = \"#divDesplegable_1\" >
						<span id=\"spnMenu\" class=\"glyphicon glyphicon-bell\" style=\"color: black\"></span>
						</button>
						<div id=\"divDesplegable_1\" class=\"dropdown-menu dropdown-menu-right\" aria-labelledby=\"dropdownMenuButton\">
						<a class=\"dropdown-item\" href=\"#\">Notificación 1</a> 
						<a class=\"dropdown-item\" href=\"#\">Notificación 2</a> 
						<a class=\"dropdown-item\" href=\"#\">Notificación 3</a>
						</div>
						</div>

						<!--Menu desplegable #2-->
						<div class=\"dropdown\">
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
		<!--FIN Div Oculto #2-->
	</nav>
</div>
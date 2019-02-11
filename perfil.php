<!--Pagina de inicio-->
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
		
		<title>Emprende Fácil</title>	
	</head>

	<body>
		<!--Incluido en todas las paginas, incluye la barra de navegacion y sus botones-->
		<header> 
			<nav class="navbar navbar-expand-lg navbar-dark fixed-top bg-custom">	 
				<!--El siguiente boton permanecera oculto hasta que sea necesario, usado por responsividad-->
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#divCollapse">
					<span class="navbar-toggler-icon"></span>
				</button>

				<a class="navbar-brand" href="index.php">
					Emprende Fácil
				</a>

				<!--Todo lo incluido en este div sera ocultado en pantallas angostas-->
				<div class="collapse navbar-collapse" id="divCollapse">
					<ul class="navbar-nav mr-auto">
					</ul>
					<!--Formulario de busqueda que incluye dos menus desplegables-->
					<form class="form-inline mt-2 mt-md-0">
						<div class="input-group">
							<input class="form-control" type="search" placeholder="Buscar un producto" size="60" /> 
							<span class="input-group-addon">
								<button class="btn btn-primary" type="submit">
									<span class="glyphicon glyphicon-search"></span>
								</button>
							</span>
						</div>
						<button class="btn" type="button" id="btnCarrito">
							<span class="glyphicon glyphicon-shopping-cart"></span>
						</button>
						
						<!--Menu desplegable #1-->
						<div class="dropdown" style="margin-left:auto; margin-right:0;">
							<button id="btnDespegable_1" class="btn" type="button" data-toggle="dropdown" data-target = "#divDesplegable_1" >
								<span id="spnMenu" class="glyphicon glyphicon-bell" style="color: black"></span>
							</button>
							<div id="divDesplegable_1" class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
								<a class="dropdown-item" href="#">Notificación 1</a> 
					 			<a class="dropdown-item" href="#">Notificación 2</a> 
					 			<a class="dropdown-item" href="#">Notificación 3</a>
							</div>
						</div>

						<!--Menu desplegable #2-->
						<div class="dropdown" style="margin-left:auto; margin-right:0;">
							<button id="btnDesplegable_2" class="btn dropdown-toggle" type="button" data-toggle="dropdown" data-target = "#divDesplegable_2">
							</button>
							<div id="divDesplegable_2" class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
								<a class="dropdown-item" href="#">Perfil</a> 
								<a class="dropdown-item" href="#">Otro</a> 
								<a class="dropdown-item" href="#">Salir</a>
							</div>
						</div>
					</form>
				</div>
			</nav>
		</header>

		<!--Inicio del cuerpo principal de la pagina-->
		<main role="main">
			<!--La pagina de perfil estara divida en tres zonas-->
			<div class="container-fluid mt-4">
				<div class="row">
					<!--Zona #1 Reservada para navegacion del usuario-->
					<div class="col-md-3">
						<div class="col-md-12" align="center">
                           	<img src="img/png/014-support.png" width="200px" height="200px" class="img-thumbnail rounded img-responsive img-hover">
                        </div>
                        <div class="col-md-12">
                    	    <p class="text-center"><strong>Usuario</strong></p>
                        </div>
                        <div class="col-md-12">
                        	<ul class="list-group">
                        		<a href="perfil.php" class="list-group-item list-group-item-info"	>Perfil</a>
                        		<a href="inventario.php" class="list-group-item"	>Inventario</a>
                        		<a href="Pedidos.php" class="list-group-item"	>Pedidos</a>
                        		<a href="estadisticas.php" class="list-group-item"	>Estadistica</a>
                        		<a href="historial_compra.php" class="list-group-item"	>Historial de Compra</a>
                        	</ul>
                        </div>
                    </div>

					<!--Zona #2 Reservada para informacion del contacto y productos del usuario-->
					<div class="col-md-7">
						<div class="col-md-12" style="border-width: 1px 1px 1px 1px; border-style: solid; border-color: lightgray;">
							<br>
							<h4 style="text-align: center;">
								Informacion de Contacto
							</h4>
							<p class="text-center text-muted">Correo Electronico:</p>
							<p class="text-center text-muted">Telefono:</p>
							<p class="text-center text-muted">Direccion:</p>

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
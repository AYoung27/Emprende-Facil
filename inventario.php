<!--Inventario-->
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="author" description="Maverick">
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
							<a href="perfil.php" class="list-group-item "	>Perfil</a>
							<a href="#" class="list-group-item list-group-item-info"	>Inventario</a>
							<a href="pedidos.php" class="list-group-item "	>Pedidos</a>
							<a href="estadisticas.php" class="list-group-item"	>Estadística</a>
							<a href="historial_compra.php" class="list-group-item"	>Historial de Compra</a>
						</ul>
					</div>
				</div>

				<!--Zona #2 Reservada para informacion del contacto y productos del usuario-->
				<div class="col-md-7">
					<div class="col-md-12" style="border-width: 1px 1px 1px 1px; border-style: solid; border-color: lightgray;">
						<br>
						<h4 style="text-align: center;">
							Inventario De Mercaderia
						</h4>

						<hr>
						<div class="container">
							<!-- Nav tabs -->
							<ul class="nav nav-tabs" role="tablist">
								<li class="nav-item">
									<a class="nav-link active" data-toggle="tab" href="#existencia">Existencia</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" data-toggle="tab" href="#ventas">Ventas</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" data-toggle="tab" href="#xd">vacio</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" data-toggle="tab" href="#xdd">vacio</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" data-toggle="tab" href="#xddd">vacio</a>
								</li>
							</ul>
							
							<!-- Tab panes -->
							<div class="tab-content">
								<div id="existencia" class="container tab-pane active"><br>
									<div class="row">
										<div class="col-md-12">
											<table class="table">
												<thead>
													<tr>
														<th> Nombre Producto</th>
														<th>Disponible</th>
														<th>Fecha de vencimiento</th>
														<th>Precio</th>
													</tr>
												</thead>
												
												<tbody>
													<tr>
														<td><img src="img/png/006-shopping" width="40" height="40">Producto X</td>
														<td>si</td>
														<td>2019-03-10</td>
														<td>HNL 100.00</td>
													</tr>

													<tr>
														<td><img src="img/png/006-shopping" width="40" height="40"> </td>
														<td></td>
														<td></td>
														<td></td>

													</tr>

													<tr>
														<td><img src="img/png/006-shopping" width="40" height="40"> </td>
														<td></td>
														<td></td>
														<td></td>

													</tr>
													<tr>
														<td><img src="img/png/006-shopping" width="40" height="40"> </td>
														<td></td>
														<td></td>
														<td></td>

													</tr>

													<tr>
														<td><img src="img/png/006-shopping" width="40" height="40"> </td>
														<td></td>
														<td></td>
														<td></td>

													</tr>

													<tr>
														<td><img src="img/png/006-shopping" width="40" height="40"> </td>
														<td></td>
														<td></td>
														<td></td>
													</tr>				
													<tr>
														
													</tr>

												</tbody>
											</table>
										</div>
									</div>
								</div>
								<div id="ventas" class="container tab-pane fade"><br>
									<p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
								</div>
								<div id="xd" class="container tab-pane fade"><br>
									<h3></h3>
									<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
								</div>
								<div id="xdd" class="container tab-pane fade"><br>
									<h3></h3>
									<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
								</div>
								<div id="xddd" class="container tab-pane fade"><br>
									<h3></h3>
									<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
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
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>	
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
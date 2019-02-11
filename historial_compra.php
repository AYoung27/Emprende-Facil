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
							<a href="perfil.php" class="list-group-item ">Perfil</a>
							<a href="inventario.php" class="list-group-item"	>Inventario</a>
							<a href="pedidos.php" class="list-group-item"	>Pedidos</a>
							<a href="estadisticas.php" class="list-group-item"	>Estadística</a>
							<a href="#" class="list-group-item list-group-item-info">Historial de Compra</a>
						</ul>
					</div>
				</div>

				<!--Zona #2 Reservada para Historial de compra-->
				<div class="col-md-7">
					<div class="col-md-12 overflow-auto" style="border-width: 1px 1px 1px 1px; border-style: solid; border-color: lightgray;" >
						<br>
						<h4 style="text-align: center;">
							Historial de compras
						</h4>
						<div class="btn-group">
							<!--desplegable contenido para mostrar-->
							<div class="dropdown">

								<button class="btn  dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" data-target="#Divdesplegable_3"><span>Mostrar</span></button>
								<div class="dropdown-menu" aria-labelledby="dropdownMenuButton" id="Divdesplegable_3">
									<a class="dropdown-item" href="#">Todos</a>
									<a class="dropdown-item" href="#">Devuelto o Reembolsado</a>
									<a class="dropdown-item" href="#">Exitoso</a>
								</div>
							</div>	
							<!-- desplegable Intervalo de tiempo-->
							<div class="dropdown">

								<button class="btn  dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" data-target="#Divdesplegable_4"><span>Desde</span></button>
								<div class="dropdown-menu" aria-labelledby="dropdownMenuButton" id="Divdesplegable_4">
									<a class="dropdown-item" href="#">Últimos 3 meses</a>
									<a class="dropdown-item" href="#">Últimos 6 meses</a>
									<a class="dropdown-item" href="#">Todos disponibles</a>
								</div>
							</div>	
						</div>
						<br>
						<!--tabla para historial-->
						<div class="table-responsive">
							<table class="table">
								<thead>
									<tr>
										<th>N° de pedido</th>
										<th>Fecha</th>
										<th>Estado de la compra</th>
										<th>Detalles de la compra</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>1</td>
										<td>2019-02-02</td>
										<td>Exitoso</td>
										<td><button class="btn btn-secondary" type="button" data-toggle="modal"	data-target="#detalles_modal">ver</button></td>
									</tr>
									<tr>
										<td>2</td>
										<td>2019-01-02</td>
										<td>Reembolsado</td>
										<td><button class="btn btn-secondary" type="button" data-toggle="modal"	data-target="#detalles_modal">ver</button></td>
									</tr>
									<tr>
										<td>3</td>
										<td>2019-01-30</td>
										<td>Exitoso</td>
										<td><button class="btn btn-secondary" type="button" data-toggle="modal"	data-target="#detalles_modal">ver</button></td>
									</tr>
									<tr>
										<td>4</td>
										<td>2019-02-05</td>
										<td>Exitoso</td>
										<td><button class="btn btn-secondary" type="button" data-toggle="modal"	data-target="#detalles_modal">ver</button></td>
									</tr>
								</tbody>
							</table>
						</div>							
					</div>
				</div>

				<!--Div ventana modal-->
				<div class="modal fade" id="detalles_modal" tabindex="-1" role="dialog" aria-labelledby="Detalles" aria-hidden="true">
					<div class="modal-dialog modal-lg" role="document">
						<div class="modal-content">
							<div class="modal-header" style="text-align:center">
								<h5 class="modal-title" id="Detalles" >Detalles de la compra</h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body">			
								<div class="table-responsive">
									<table class="table">
										<thead>
											
										</thead>
										<tbody>
											<tr>
												<td><img src="img/png/006-shopping" width="40" height="40"> Producto X</td>
												<td></td>
												<td>HNL 0.00</td>
											</tr>
											<tr>
												<td><img src="img/png/006-shopping" width="40" height="40"> Producto Y</td>
												<td></td>
												<td>HNL 0.00</td>
											</tr>
											<tr>
												<td><img src="img/png/006-shopping" width="40" height="40"> Producto z</td>
												<td></td>
												<td>HNL 0.00</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
							</div>
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
	<script type="text/javascript">
		$(".dropdown-menu a").click(function(){
			$(this).parents(".dropdown").find('.btn').html($(this).text() + ' <span class="caret"></span>');
			$(this).parents(".dropdown").find('.btn').val($(this).data('value'));
		});
	</script>
</body>
</html>
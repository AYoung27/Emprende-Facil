<!--Pagina de inicio-->
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="author" description="Jairo">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
	
	<link rel="icon" type="png" href="img/png/041-online-shop.png">

	<link rel="stylesheet" href="Estilos/css/bootstrap.min.css">
	<link rel="stylesheet" href="Estilos/css/bootstrap.css">
	<link rel="stylesheet" href="Estilos/css/perfil.css">

	<!--archivos para la busqueda con jquery-->
	<link rel="stylesheet" href="Estilos/css/style_search.css">
	<script src="Estilos/js/jq_search/jquery.js"></script>
	<script src="Estilos/js/jq_search/jquery.dataTables.min.js"></script>

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
					<li class="nav-item">
						<a class="nav-link" href="registro.php">Registrarse</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="login.php">Iniciar Sesión</a>
					</li>
				</ul>
				<!--Formulario de busqueda que incluye dos menus desplegables y jquery para busqueda-->
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
										<tr> <td> <a href="busqueda.php">Plasticos</a> </td> </tr>
										<tr> <td> <a href="busqueda.php">Electronica</a> </td> </tr>
										<tr> <td> <a href="busqueda.php">Equipo de oficina</a> </td> </tr>
										<tr> <td> <a href="busqueda.php">Locales</a> </td> </tr>  
									</tbody>
								</table>
							</div>
						</div>
					</div>

					<script src="Estilos/js/jq_search/search.js"></script>

					<a href="pago.php"><button class="btn" type="button" id="btnCarrito">
						<span class="glyphicon glyphicon-shopping-cart"></span>
					</button></a>
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
							<a class="dropdown-item" href="perfil.php">Perfil</a> 
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
		<!--La pagina de perfil estara divida en dos zonas-->
		<div class="container-fluid mt-4">
			<div class="row">
				<!--Zona #1 Reservada para publicidad-->
				<div class="col-md-3" style="padding-top: 40px;">
					<div class="col-md-12" align="center">
						<img src="img/png/banner.png" width="200px" height="200px" class="img-thumbnail rounded img-responsive img-hover">
					</div>
					<br> <br> <br>
					<div class="col-md-12" align="center">
						<img src="img/png/banner.png" width="200px" height="200px" class="img-thumbnail rounded img-responsive img-hover">
					</div>
				</div>

				<!--Zona #2 Reservada para resultados de productos buscados-->
				<div class="col-md-7" style="padding-top: 40px;">
					<table border="0px" cellpadding="15%">
						<tr>
							<td><figure >
								<img src="img/Productos/Categorias/prueba/Producto1.jpg">
								<figcaption title="presione para mas detalles"><div style="text-align: center;"> Producto 1 <br> 
									<a href="#"> <input type="button" value="Ver Detalles"> </a> 
									<a href="#"> <input type="button" value="Agregar"> <input type="number" name="cantidad-pro" min="1" max="10" step="1" placeholder="0"></a> 
								</div> </figcaption>
							</figure></td>

							<td><figure>
								<img src="img/Productos/Categorias/prueba/Producto2.jpg">
								<figcaption title="presione para mas detalles"> <div style="text-align: center;"> Producto 2 <br> 
									<a href="#"> <input type="button" value="Ver Detalles"> </a> 
									<a href="#"> <input type="button" value="Agregar"> <input type="number" name="cantidad-pro" min="1" max="10" step="1" placeholder="0"></a> 
								</div> </figcaption>
							</figure> </td>

							<td><figure>
								<img src="img/Productos/Categorias/prueba/Producto3.jpg">
								<figcaption title="presione para mas detalles"> <div style="text-align: center;"> Producto 3 <br> 
									<a href="#"> <input type="button" value="Ver Detalles"> </a> 
									<a href="#"> <input type="button" value="Agregar"> <input type="number" name="cantidad-pro" min="1" max="10" step="1" placeholder="0"></a> 
								</div> </figcaption>
							</figure></td>
						</tr>
						
						<tr>
							<td><figure>
								<img src="img/Productos/Categorias/prueba/Producto4.jpg">
								<figcaption title="presione para mas detalles"> <div style="text-align: center;"> Producto 4 <br> 
									<a href="#"> <input type="button" value="Ver Detalles"> </a>
									<a href="#"> <input type="button" value="Agregar"> <input type="number" name="cantidad-pro" min="1" max="10" step="1" placeholder="0"></a>  
								</div> </figcaption>
							</figure></td>

							<td><figure>
								<img src="img/Productos/Categorias/prueba/Producto5.jpg">
								<figcaption title="presione para mas detalles"> <div style="text-align: center;"> Producto 5 <br> 
									<a href="#"> <input type="button" value="Ver Detalles"> </a> 
									<a href="#"> <input type="button" value="Agregar"> <input type="number" name="cantidad-pro" min="1" max="10" step="1" placeholder="0"></a> 
								</div> </figcaption>
							</figure></td>

							<td><figure>
								<img src="img/Productos/Categorias/prueba/Producto6.jpg">
								<figcaption title="presione para mas detalles"> <div style="text-align: center;"> Producto 6 <br> 
									<a href="#"> <input type="button" value="Ver Detalles"> </a> 
									<a href="#"> <input type="button" value="Agregar"> <input type="number" name="cantidad-pro" min="1" max="10" step="1" placeholder="0"></a> 
								</div> </figcaption>
							</figure></td>
						</tr>

						<tr>
							<td><figure>
								<img src="img/Productos/Categorias/prueba/Producto7.jpg">
								<figcaption title="presione para mas detalles"> <div style="text-align: center;"> Producto 7 <br> 
									<a href="#"> <input type="button" value="Ver Detalles"> </a> 
									<a href="#"> <input type="button" value="Agregar"> <input type="number" name="cantidad-pro" min="1" max="10" step="1" placeholder="0"></a> 
								</div> </figcaption>
							</figure></td>

							<td><figure>
								<img src="img/Productos/Categorias/prueba/Producto8.jpg">
								<figcaption title="presione para mas detalles"> <div style="text-align: center;"> Producto 8 <br> 
									<a href="#"> <input type="button" value="Ver Detalles"> </a> 
									<a href="#"> <input type="button" value="Agregar"> <input type="number" name="cantidad-pro" min="1" max="10" step="1" placeholder="0"></a> 
								</div> </figcaption>
							</figure></td>

							<td><figure>
								<img src="img/Productos/Categorias/prueba/Producto9.jpg">
								<figcaption title="presione para mas detalles"> <div style="text-align: center;"> Producto 9 <br> 
									<a href="#"> <input type="button" value="Ver Detalles"> </a>
									<a href="#"> <input type="button" value="Agregar"> <input type="number" name="cantidad-pro" min="1" max="10" step="1" placeholder="0"></a> 
								</div> </figcaption>
							</figure></td>
						</tr>

						<tr>	
							<td><figure>
								<img src="img/Productos/Categorias/prueba/Producto10.jpg">
								<figcaption title="presione para mas detalles"> <div style="text-align: center;"> Producto 10 <br> 
									<a href="#"> <input type="button" value="Ver Detalles"> </a> 
									<a href="#"> <input type="button" value="Agregar"> <input type="number" name="cantidad-pro" min="1" max="10" step="1" placeholder="0"></a> 
								</div> </figcaption>
							</figure></td>

							<td><figure>
								<img src="img/Productos/Categorias/prueba/Producto11.jpg">
								<figcaption title="presione para mas detalles"> <div style="text-align: center;"> Producto 11 <br> 
									<a href="#"> <input type="button" value="Ver Detalles"> </a> 
									<a href="#"> <input type="button" value="Agregar"> <input type="number" name="cantidad-pro" min="1" max="10" step="1" placeholder="0"></a> 
								</div> </figcaption>
							</figure></td>

							<td><figure>
								<img src="img/Productos/Categorias/prueba/Producto12.jpg">
								<figcaption title="presione para mas detalles"> <div style="text-align: center;"> Producto 12 <br> 
									<a href="#"> <input type="button" value="Ver Detalles"> </a> 
									<a href="#"> <input type="button" value="Agregar"> <input type="number" name="cantidad-pro" min="1" max="10" step="1" placeholder="0"></a> 
								</div> </figcaption>
							</figure></td>
						</tr>
					</table>
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
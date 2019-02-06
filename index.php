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
		<link rel="stylesheet" href="Estilos/css/style.css">
    	<link rel="stylesheet" href="Estilos/css/carousel.css">
		
		<title>Emprende Fácil</title>
	
		<!--Estilo exclusivo del carrusel-->
		<style> 
      		.bd-placeholder-img {
        		font-size: 1.125rem;
        		text-anchor: middle;
      		}

      		@media (min-width: 768px) {
        		.bd-placeholder-img-lg {
          			font-size: 3.5rem;
       			}
      		}
    	</style>
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
				<!--Carrusel informativo presentado en la pagina principal-->
			<div id="divCarrusel" class="carousel slide" data-ride="carousel">
				<ol class="carousel-indicators">
					<li data-slide-to="0" data-target="#divCarrusel" class="active"></li>
					<li data-slide-to="1" data-target="#divCarrusel"></li>
					<li data-slide-to="2" data-target="#divCarrusel"></li>
				</ol>
				<!--Contenido del carrusel, ampliable-->
				<div class="carousel-inner">
					<div class="carousel-item active">
						<svg width="100%" height="100%" preserveAspectRatio="xMidYMid slice" class="bd-placeholder-img" focusable="false" role="img">
							<img src="img/1.jpeg" >
						</svg>
						<div class="container">
							<div class="carousel-caption">
								<h4>
									Producto #1
								</h4>
								<p>
									Párrafo publicitario
								</p>
							</div>
						</div>
					</div>
					<div class="carousel-item" >
						<svg width="100%" height="100%" class="bd-placeholder-img" preserveAspectRatio="xMidYMid slice" focusable="false" role="img">
							<img src="img/2.png">
						</svg>
							<div class="container">
							<div class="carousel-caption">
								<h4>
									Producto #2
								</h4>
								<p>
									Párrafo publicitario
								</p>
							</div>
						</div>
					</div>
					<div class="carousel-item">
						<svg width="100%" height="100%" class="bd-placeholder-img" focusable="false" role="img" preserveAspectRatio="xMidYMid slice">
							<img src="img/3.jpg">
						</svg>
						<div class="container">
							<div class="carousel-caption">
								<h4>
									Producto #3
								</h4>
								<p>
									Párrafo publicitario
								</p>
							</div>
						</div>
					</div>
				</div>
				<!--Botones de control para el carrusel-->
				<a class="carousel-control-prev" href="#divCarrusel" data-slide="prev">
					<span class="carousel-control-prev-icon"></span> 
					<span class="sr-only">Previous</span>
				</a> 
				<a class="carousel-control-next" href="#divCarrusel" data-slide="next">
					<span class="carousel-control-next-icon"></span> 
					<span class="sr-only">Next</span>
				</a>
			</div>

			<!--Contenido extra: Publicidad y otra informacion-->
			<div class="container marketing">
				<!--div que contiene tres tarjetas de publicidad, se puede utilizar para ampliar-->
				<div class="row">
      				<div class="col-lg-4">
      					<div class="card bg-default">
							<h5 class="card-header">
								Producto X
							</h5>
							<div class="card-body">
								<img class="bd-placeholder-img rounded" width="140" height="140" src="img/png/006-shopping.png">
       						</div>
							<div class="card-footer">
								<p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut idelit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>
       							<p><a class="btn btn-secondary" href="#" role="button">Ver mas &raquo;</a></p>
							</div>
						</div>      			
					</div>
      				<div class="col-lg-4">
      					<div class="card bg-default">
							<h5 class="card-header">
								Producto Y
							</h5>
							<div class="card-body">
								<img class="bd-placeholder-img rounded" width="140" height="140" src="img/png/006-shopping.png">
       						</div>
							<div class="card-footer">
								<p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut idelit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>
       							<p><a class="btn btn-secondary" href="#" role="button">Ver mas &raquo;</a></p>
							</div>
						</div>      			
					</div>
      				<div class="col-lg-4">
      					<div class="card bg-default">
							<h5 class="card-header">
								Producto Z
							</h5>
							<div class="card-body">
								<img class="bd-placeholder-img rounded" width="140" height="140" src="img/png/006-shopping.png">
        					</div>
							<div class="card-footer">
								<p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>
       							<p><a class="btn btn-secondary" href="#" role="button">Ver mas &raquo;</a></p>
							</div>
						</div>      			
					</div>
   				</div>

				<hr class="featurette-divider">

				<!--Informacion Extra, no indispensable-->
				<div class="row featurette">
					<div class="col-md-7">
						<h2 class="featurette-heading">Beneficios de nuestro sitio web. <span class="text-muted">Te sorprenderán.</span></h2>
						<p class="lead">Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>
					</div>
					<div class="col-md-5">
					</div>
				</div>
					
				<hr class="featurette-divider">
					
				<div class="row featurette">
					<div class="col-md-7 order-md-2">
						<h2 class="featurette-heading">Inscríbete ya y<span class="text-muted"> publicita tus productos.</span></h2>
						<p class="lead">Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>
					</div>
					<div class="col-md-5 order-md-1">
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
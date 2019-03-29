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
				</ul>
				<!--Formulario de busqueda que incluye dos menus desplegables-->
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
										<tr> <td> <a href="busqueda.php">Equipo de oficina</a> </td> </tr>
										<tr> <td> <a href="busqueda.php">Locales</a> </td> </tr>  
									</tbody>
								</table>
							</div>
						</div>
					</div>

					<!--scrip para jquery en el buscador-->
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
						<p class="text-center"><strong><?php echo $_SESSION['Usuario']; ?></strong></p>
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

				<!--Zona #2 Reservada para informacion del contacto y productos del usuario-->
				<div class="col-md-7">
					<div class="col-md-12" style="border-width: 1px 1px 1px 1px; border-style: solid; border-color: lightgray;">
						<br>
						<h4 style="text-align: center;">
							Estadisticas
						</h4>
						<div class="row">
							<div class="col-md-6">

								<div class="btn-group">
									<p style="margin-right:10px">Periodo del reporte</p>
									<div class="dropdown">
										<button class="btn btn-sm  dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" data-target="#Divdesplegable_3"><span>Mensual</span></button>
										<div class="dropdown-menu" aria-labelledby="dropdownMenuButton" id="Divdesplegable_3">
											<a class="dropdown-item" href="#">Mensual</a>
											<a class="dropdown-item" href="#">Trimestral</a>
											<a class="dropdown-item" href="#">Semestral</a>
										</div>
									</div>
								</div><br><br><br>
								<div class="btn-group">	
									<p style="margin-right:10px">Seleccione Producto</p>
									<div class="dropdown">
										<button class="btn btn-sm  dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" data-target="#Divdesplegable_4"><span>Nombre de Producto</span></button>
										<div class="dropdown-menu" aria-labelledby="dropdownMenuButton" id="Divdesplegable_4">
											<a class="dropdown-item" href="#">Producto X</a>
											<a class="dropdown-item" href="#">Producto Y</a>
											<a class="dropdown-item" href="#">Producto z</a>
										</div>
									</div>
								</div><br><br><br>
								<div class="btn-group">
									<p style="margin-right:10px">Seleccionar tipo de grafico</p>
									<div class="dropdown">
										<button class="btn btn-sm  dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" data-target="#Divdesplegable_5"><span>Grafico de Barras</span></button>
										<div class="dropdown-menu" aria-labelledby="dropdownMenuButton" id="Divdesplegable_5">
											<a class="dropdown-item" href="#">Grafico de barras</a>
											<a class="dropdown-item" href="#">Grafico de pastel</a>
											<a class="dropdown-item" href="#">Graficolineas</a>
										</div>
									</div>
								</div>

							</div>
							<div class="col-md-6">
								<canvas id="myChart" width="400" height="400"></canvas>
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
	<script src="Estilos/js/jquery.min.js"></script>
	<script src="Estilos/js/bootstrap.min.js"></script>
	<script src="Estilos/js/scripts.js"></script>	
	<script type="text/javascript" src="Estilos/js/Chart.min.js"></script>
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
	<script>
		var ctx = document.getElementById("myChart").getContext('2d');
		var myChart = new Chart(ctx, {
			type: 'bar',
			data: {
				labels: ["Producto U", "Producto V", "Producto W", "Producto X", "Producto Y", "Producto Z"],
				datasets: [{
					label: '# ventas',
					data: [12, 19, 3, 5, 2, 3],
					backgroundColor: [
					'rgba(255, 99, 132, 0.2)',
					'rgba(54, 162, 235, 0.2)',
					'rgba(255, 206, 86, 0.2)',
					'rgba(75, 192, 192, 0.2)',
					'rgba(153, 102, 255, 0.2)',
					'rgba(255, 159, 64, 0.2)'
					],
					borderColor: [
					'rgba(255,99,132,1)',
					'rgba(54, 162, 235, 1)',
					'rgba(255, 206, 86, 1)',
					'rgba(75, 192, 192, 1)',
					'rgba(153, 102, 255, 1)',
					'rgba(255, 159, 64, 1)'
					],
					borderWidth: 1
				}]
			},
			options: {
				scales: {
					yAxes: [{
						ticks: {
							beginAtZero:true
						}
					}]
				}
			}
		});
	</script>
</body>
</html>
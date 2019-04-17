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

	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/chartJS/Chart.min.js"></script>



	<!--archivos para la búsqueda con jquery-->
	<link rel="stylesheet" href="Estilos/css/style_search.css">
	<script src="Estilos/js/jq_search/jquery.js"></script>
	<script src="Estilos/js/jq_search/jquery.dataTables.min.js"></script>

	<title>Emprende Fácil</title>	
	<?php
	$numbers[0] = "grafico";
	$numbers[1] = "Pastel";
	$numbers[2] = "Linea";
	?>
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
				<ul class="navbar-nav mr-auto">
				</ul>
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


					<a href="pago.php"><button class="btn" type="button" id="btnCarrito">
						<span class="glyphicon glyphicon-shopping-cart"></span>
					</button></a>

					<!--Menú desplegable #1-->
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

					<!--Menú desplegable #2-->
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
		<!--La pagina de perfil estará divida en tres zonas-->
		<div class="container-fluid mt-4">
			<div class="row">
				<!--Zona #1 Reservada para navegación del usuario-->
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

				<!--Zona #2 Reservada para información del contacto y productos del usuario-->
				<div class="col-md-7">
					<div class="col-md-12" style="border-width: 1px 1px 1px 1px; border-style: solid; border-color: lightgray;">
						<br>
						<h4 style="text-align: center;">
							Estadísticas
						</h4>
						<div class="row">
							<div class="col-md-12">

								<div class="container">
									<div class="row">
										<form class="needs-validation" novalidate>
											<div class="form-row">
												<div class="col-md-4 mb-3">
													<label class="" for="slc_categoria">Seleccione Año</label>

													<select class="custom-select " id="slc_categoria"  onChange="mostrarResultados(this.value);">
														<option selected>Elija Producto</option>
														<?php
														for($i=2000;$i<2020;$i++){
															echo '<option value="'.$i.'">'.$i.'</option>';
														}
														?>
													</select>				
												</div>

												<div class="col-md-4 mb-3">
													<label class="" for="slc_categoria">Seleccione Producto</label>
													<select class="custom-select " id="slc_categoria">
														<option selected>Elija Producto</option>
														<option value="1">Categoría X</option>
														<option value="2">Categoría Y</option>
														<option value="3">Categoría Z</option>
													</select>										
												</div>

												<div class="col-md-4 mb-3">
													<label class="" for="slc_categoria">Seleccione tipo de grafico</label>
													<select  class="custom-select " id="slc_categoria">
														<option selected>Elija Grafico</option>
														<?php
														foreach( $numbers as $value ) {
															echo '<option value="'.$value.'">'.$value.'</option>';
														}
														?>
													</select>							
												</div>
											</div>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="row">

						<div class="col-md-7" style="padding-top: 3em;"> <br> <br>
							<div class="resultados"><canvas id="graficos"></canvas></div>
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

	<style>
		.resultados{
			margin: auto;
			margin-top: 40px;
			width: 700px;
		}
	</style>









	<script>




		$(document).ready(mostrarResultados)	;
		function mostrarResultados(year){
			$('.resultados').html('<canvas id="grafico"></canvas>');
			$.ajax({
				type: 'POST',
				url: 'php/procesar.php',
				data: 'year='+year,
				dataType: 'JSON',
				success:function(response){
					var Datos = {
						labels : ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
						datasets : [
						{
                                            fillColor : 'rgba(91,228,146,0.6)', //COLOR DE LAS BARRAS
                                            strokeColor : 'rgba(57,194,112,0.7)', //COLOR DEL BORDE DE LAS BARRAS
                                            highlightFill : 'rgba(73,206,180,0.6)', //COLOR "HOVER" DE LAS BARRAS
                                            highlightStroke : 'rgba(66,196,157,0.7)', //COLOR "HOVER" DEL BORDE DE LAS BARRAS
                                            data : response
                                        }
                                        ]
                                    }
                                    var contexto = document.getElementById('grafico').getContext('2d');
                                    window.Barra = new Chart(contexto).Bar(Datos, { responsive : true });
                                    Barra.clear();
                                }
                            });
			return false;
		}
	</script>
</body>
</html>
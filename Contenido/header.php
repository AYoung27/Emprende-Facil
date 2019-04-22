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
		<div id="divSearch" class="collapse navbar-collapse header-search" style="margin-left: auto;">
			<form action="busqueda.php" method="get">
				<select class="input-select">
					<option value="0">Categorias</option>
					<option value="1">Category 01</option>
					<option value="1">Category 02</option>
				</select>
				<input class="input" id="txtBusqueda" name="q" size="60" placeholder="Buscar Producto" >
				<button class="search-btn btn-primary"><span class="glyphicon glyphicon-search"></span></button>
			</form>
		</div>
		<!--FIN Div Oculto #1-->

		<!--Div Oculto #2 (Izquierda)-->
		<div class="collapse navbar-collapse" id="divCollapse">
			
		</div>
		<!--FIN Div Oculto #2-->
	</nav>
</div>
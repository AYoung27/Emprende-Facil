<?php 
	include("../clases/Conexion.php");
	$conexion= new Conexion();
	session_start();
	if (empty($_SESSION)) {
		header('Location: index.php');
	}
 ?>		
					<div class="col-md-12">
						<div class="col-md-12" style="border-width: 1px 1px 1px 1px; border-style: solid; border-color: lightgray;">
							<br>
							<h4 style="text-align: center;">
								Inventario De Mercadería
							</h4>

							<hr>
							<div class="container">								
								<ul class="nav justify-content-center">
								  <li class="nav-item">
								    <a class="nav-link" href="#modificarProducto" onclick="cargarDiv('zonaContenido','Contenido/inventario.php')">Existencia</a>
								  </li>
								  <li class="nav-item">
								    <a class="nav-link " href="#modificarProducto" onclick="cargarDiv('zonaContenido','Contenido/agregarProducto.php')" >Agregar Producto</a>
								  </li>
								  <li class="nav-item">
								    <a class="nav-link disabled" href="#" aria-disabled="true">Modificar Producto</a>
								  </li>
								</ul>
							</div>
							<div id="" class="container"><br>
							      <div class="container">
							      		<form  method="POST" class="needs-validation" novalidate>
							      			<div class="form-row">
							      				<label>Deseas buscar un producto en tu lista</label>
							      				<div class="col-lg-12 mb-3">
							      				<input type="text" name="srcProducto" id="srcProducto" class="form-control" placeholder="Busca un producto" onkeyup="listar(this.value);">
							      					</div>
							      			</div>
							      			<hr>
	
							      			<div class="form-row" id="Producto"></div>
							      		</form>
							      </div>
							    </div>
						</div>
					</div>
						
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
							    <div class="modal fade" id="modalM" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
								  <div class="modal-dialog modal-dialog-scrollable" role="document">
								    <div class="modal-content">
								      <div class="modal-header">
								        <h5 class="modal-title" id="exampleModalScrollableTitle"> Modifica los datos de tu producto</h5>
								        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
								          <span aria-hidden="true">&times;</span>
 								       </button>
      									</div>
								      <div class="modal-body">
								      	<div class="container">
							      	<div class="row">
							      		<form enctype="multipart/form-data" method="POST" action="" class="needs-validation" novalidate>
											  <div class="form-row">
											    <div class="col-md-6 mb-3">
											      <label >Escriba un nuevo nombre para el producto</label>
											      <input type="text" class="form-control" id="txtNombreProducto" name="txtNombreProducto" placeholder="Nombre producto" value="" required size="40">
											    </div>

											    <div class="col-md-4 mb-3">
 											     <label >Asigne un nuevo Precio</label>
 											     <div class="input-group">
 											       <div class="input-group-prepend">
 											         <span class="input-group-text" id="txtPrecio">HNL</span>
 											       </div>
 											       <input type="number" class="form-control" id="txtPrecio" name="txtPrecio" placeholder="Precio" aria-describedby="precio" min="0" required>
 											     </div>
 											   </div>
 											 </div>
 											 <div class="form-row">
 											 	<div class="col-lg-6 mb-3">
 											 		<label class="" for="slcCategoria">Seleccione la nueva categoría del producto</label>
 													 <?php  
 													 	$consulta="SELECT IDCategoria, NombreCategoria FROM tbl_categoria";
 													 	$resultado=$conexion->ejecutarconsulta($consulta);
 													 ?>
 													 <select class="custom-select " name="slcCategoria" id="slcCategoria">
 													   <option selected>Elija una categoria</option>
 													   <?php 
 													   	while ($arreglo=$resultado->fetch_array()) {
 													   		echo '<option value="'.$arreglo[IDCategoria].'">'.$arreglo[NombreCategoria]."</option>";
 													   	}
 													    ?>
 													 </select>
 													 											
 											 	</div>
 											 	<div class="col-lg-6 mb-3">
 											 		<label class="" for="slcColor">Seleccione el nuevo color del producto</label>
 													 <?php  
 													 	$consulta="SELECT IDColor, NombreColor FROM tbl_color";
 													 	$resultado=$conexion->ejecutarconsulta($consulta);
 													 ?>
 													 <select class="custom-select " name="slcColor" id="slcColor">
 													   <option selected>Elija un color</option>
 													   <?php 
 													   	while ($arreglo=$resultado->fetch_array()) {
 													   		echo '<option value="'.$arreglo[IDColor].'">'.$arreglo[NombreColor]."</option>";
 													   	}
 													    ?>
 													 </select>
 													 											
 											 	</div>
 											 </div>
 											<div class="form-row">
 												<div class="col-lg-12 mb-3">
 												<label for="txtArea">Ingrese una descripcion del producto</label>
    											<textarea class="form-control" id="txtArea" name="txtArea" rows="3"></textarea>
    											</div>
 											</div>
 											<label class="" for="">Seleccione una imagenes para mostrar su producto</label>
 											 <div class="form-row">
 											  <div class=" col-md-6 mb-3 ">
   												 <input type="file" name="chsImagen" id="chsImagen" class="custom-file-input">
   												 <label class="custom-file-label" for="chsImagen">Seleccionar imagen...</label>
 											 </div>
 											 </div>
 										</form>

							      	</div>
							      </div>
								      </div>
								      <div class="modal-footer">
								        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
								        <button type="button" class="btn btn-success">Modificar Producto</button>
								      </div>
								    </div>
								  </div>
								</div>
						</div>
					</div>
						
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
								    <a class="nav-link " href="#modificarProducto" onclick="cargarDiv('zonaContenido','Contenido/inventario.php')"">Existencia</a>
								  </li>
								  <li class="nav-item">
								    <a class="nav-link " href="#modificarProducto" onclick="cargarDiv('zonaContenido','Contenido/agregarProducto.php')" >Agregar Producto</a>
								  </li>
								  <li class="nav-item">
								    <a class="nav-link disabled" href="#" aria-disabled="true">Modificar Producto</a>
								  </li>
								</ul>
							</div>
							<div id="agregar_productos" class="container"><br>
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
								      </div>
								      <div class="modal-footer">
								        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
								        <button type="button" class="btn btn-primary">Save changes</button>
								      </div>
								    </div>
								  </div>
								</div>
						</div>
					</div>
						
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
								    <a class="nav-link disabled" href="#" aria-disabled="true">Existencia</a>
								  </li>
								  <li class="nav-item">
								    <a class="nav-link" href="#agregarProducto" onclick="cargarDiv('zonaContenido','Contenido/agregarProducto.php')">Agregar Producto</a>
								  </li>
								  <li class="nav-item">
								    <a class="nav-link" href="#modificarProducto" onclick="cargarDiv('zonaContenido','Contenido/modificarProducto.php')">Modificar Producto</a>
								  </li>
								</ul>
							</div>
					<div class="tab-content">
						<div id="existencia" class="container tab-pane active"><br>
							<div class="row">
								<div class="col-md-12 table-responsive">
								 	<table class="table">
								 	<thead>
								 	   <tr>
								 	   	<th></th>
 								         <th>Nombre Producto</th>
 								         <th>Estado</th>
 								         <th>Fecha de Elaboracion</th>
 								         <th>Precio</th>
 								       </tr>
								 	</thead>
 								     
 								     <tbody>
 								     	<?php
 								     		$consulta=sprintf("SELECT nombreProducto, ");
 								     	  ?>
 								     	<tr>
 								     		<td><img src="img/png/006-shopping" width="40" height="40"></td>
 								     		<td>Producto X</td>
 								     		<td>si</td>
 								     		<td>2019-03-10</td>
 								     		<td>HNL 100.00</td>
								     	</tr>

 								     </tbody>
 								   </table>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
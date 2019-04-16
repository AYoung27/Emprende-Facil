
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

	<?php
	$numbers[0] = "grafico";
	$numbers[1] = "Pastel";
	$numbers[2] = "Linea";
	?>
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

							<select class="custom-select" id="slc_categoria" onchange="mostrarResultados(this.value)">
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
							<div class="resultados" id="resultados" style="margin: auto; margin-top: 40px; width: 700px;"><canvas id="graficos"></canvas></div>
						</div>
					</div>	

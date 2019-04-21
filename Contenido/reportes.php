	<?php 
	session_start();
	if (empty($_SESSION)) {
		header('Location: index.php');
	}
	include("../Clases/Conexion.php");
	$conexion = new Conexion();
	$conexion->mysql_set_charset("utf8");
	?>	
	<div class="col-md-12">
		<div class="col-md-12" style="border-width: 1px 1px 1px 1px; border-style: solid; border-color: lightgray;">
			<br>
			<h4 style="text-align: center;">
				Generar Reportes
			</h4>

			<hr>
			
					<div class="row">
						<div class="col-md-12 table-responsive">
							<div class="form-row">
								<label>Deseas Buscar una Venta Realizada</label>
								<div class="col-lg-12 mb-3">
									<input type="text" name="srcProducto" id="srcProducto" class="form-control" placeholder="Ingresa: Fecha ó Cliente" onkeyup="listarReporte(this.value);">
								</div>
							</div>
							<div id="reportes"> </div>

						</div>
					</div>
				
		</div>
	</div>
<?php 
include("../clases/Conexion.php");
$conexion= new Conexion();
$conexion->mysql_set_charset("utf8");
session_start();
if (empty($_SESSION)) {
	header('Location: index.php');
}
?>	

<div class="col-md-12" style="border-width: 1px 1px 1px 1px; border-style: solid; border-color: lightgray;">
	<br>
	<h4 style="text-align: center; padding-bottom: 1.5em;" >
		<span>Estadísticas De Ventas</span>
	</h4>
	<div class="row">
		<div class="col-md-12">

			<div class="container">
				<div class="row">
					

					<div class="col-md-6 mb-3">
						<label class="" for="slc_categoria">Seleccione un Año</label>

						<select class="custom-select" id="slc_Ano" onclick="mostrarResultados( this.value,document.getElementById('slcgrafico').value )">
							<option selected>Año</option>
							<?php
							for($i=2012;$i<2040;$i++){
								echo '<option value="'.$i.'">'.$i.'</option>';
							}
							?>
						</select>				
					</div>

						<!--		<div class="col-md-4 mb-3">
								<label class="" for="slcProductoo">Seleccione un producto</label>
								<?php  
								$consulta="SELECT IDProducto, NombreProducto FROM tbl_producto";
								$resultado=$conexion->ejecutarconsulta($consulta);
								?>
								<select class="custom-select " name="slcproducto" id="slcproducto" >
									<option selected>Producto...</option>
									<?php 
									while ($arreglo=$resultado->fetch_array()) {
										echo '<option value="'.$arreglo[IDProducto].'">'.$arreglo[NombreProducto]."</option>";
									}
									?>
								</select>										
							</div>-->



							<div class="col-md-6 mb-3 " >
								<label class="" for="slcGrafico">Seleccione el Tipo de Grafico</label>
								<?php  
								$consulta="SELECT IDGrafico, NombreGrafico FROM tbl_graficos";
								$resultado=$conexion->ejecutarconsulta($consulta);
								?>
								<select class="custom-select " name="slcgrafico" id="slcgrafico" onclick="mostrarResultados(document.getElementById('slc_Ano').value , this.value )">
									<option selected>Grafico</option>
									<?php 
									while ($arreglo=$resultado->fetch_array()) {
										echo '<option value="'.$arreglo[IDGrafico].'">'.$arreglo[NombreGrafico]."</option>";
									}
									?>
								</select>	
							</div>


						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="row">

			<div class="col-md-12" style="padding-top: 1em;"> <br> <br>
				<div class="resultados"><canvas id="graficos"></canvas></div>
			</div>
		</div>	


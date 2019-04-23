<?php 
	session_start();
	include("../Clases/Conexion.php");
	$conexion = new Conexion();
	$conexion->mysql_set_charset("utf8");

	function cargarInformacion($conexion)
	{
		$consulta = sprintf("SELECT NombreProveedor, Telefono, Direccion, tbl_municipio.NombreMunicipio, tbl_departamentos.NombreDepartamento FROM tbl_proveedor, tbl_municipio, tbl_departamentos WHERE IDUsuario = '%s' AND tbl_municipio.IDMunicipio = tbl_proveedor.IDMunicipio AND tbl_municipio.IDDepartamento = tbl_departamentos.IDDepartamento", $conexion->antiInyeccion($_SESSION["ID"]));
		$resultado = $conexion->ejecutarconsulta($consulta);
		$data = $conexion->obtenerFila($resultado);
		echo '<div class="col-md-12" style="border-width: 1px 1px 1px 1px; margin-top: 1rem; border-style: solid; border-color: lightgray;">
					<br>
					<h4 style="text-align: center;">Información de Contacto</h4>
					<p class="text-center text-muted">Nombre de la Empresa: '.$data["NombreProveedor"].'</p>
					<p class="text-center text-muted">Correo Electrónico: '.$_SESSION["Correo"].'</p>
					<p class="text-center text-muted">Teléfono: '.$data["Telefono"].'</p>
					<p class="text-center text-muted">Dirección: '.$data["Direccion"].', '.$data["NombreMunicipio"].', '.$data["NombreDepartamento"].'</p>	
				</div>';
	}
	if (isset($_SESSION["Proveedor"])) {
			cargarInformacion($conexion);
	}
 ?>

				<div class="col-md-12" style="border-width: 1px 1px 1px 1px; margin-top: 1rem; border-style: solid; border-color: lightgray;">
							<br>
							<h4 style="text-align: center;">
								Último Pedido Realizado
							</h4>

							<hr>
					<div class="tab-content">
						<div id="existencia" class="container tab-pane active"><br>
							<div class="row">
								<div class="col-md-12 table-responsive">
								 	<table class="table table-bordered">
								 	<thead>
								 	   <tr>
								 	   	<th>Imagen</th>
								 	   	<th>Fecha</th>
 								         <th>Nombre Producto</th>
 								         <th>Cant.</th>
 								         <th>Estado</th>
 								         <th>Total</th>
 								       </tr>
								 	</thead>
 								     
 								     <tbody>
 								     <?php
 								     	$consulta=sprintf("SELECT tbl_pedido.Cantidad, tbl_estado.NombreEstado, NombreProducto, PrecioActual, ImagenPrincipal, tbl_factura.FechaFactura FROM tbl_pedido, tbl_producto, tbl_estado, tbl_factura WHERE tbl_producto.IDProducto = tbl_pedido.IDProducto AND tbl_pedido.IDEstado = tbl_estado.IDEstado AND tbl_factura.IDFactura = tbl_pedido.IDFactura AND tbl_factura.IDUsuario = '%s' ORDER BY IDPedido DESC LIMIT 1", $conexion->antiInyeccion($_SESSION["ID"]));
 								     		$resultado=$conexion->ejecutarconsulta($consulta);
 								     		$bandera = mysqli_num_rows($resultado);
 								     		if($bandera!=0){
 								     		while($data=$conexion->obtenerfila($resultado)){
 								     			echo '<tr><td><img src=data:image/jpg;base64,'.base64_encode($data['ImagenPrincipal']).' width="60" height="60"></td>';
 								     			echo '<td>'.$data['FechaFactura'].'</td>';
 								     			echo '<td>'.$data['NombreProducto'].'</td>';
 								     			echo '<td>'.$data['Cantidad'].'</td>';
 								     			echo '<td>'.$data['NombreEstado'].'</td>';
 								     			echo '<td>HNL '.$data['PrecioActual']*$data['Cantidad'].'</td></tr>';

 								     		}
 								     	}else{
 								     		echo "<tr><td colspan=6 ><p style=\"text-align:center\">Aun no ha realizado ningun pedido</p></td>";
 								     	}

 								     ?>
 								     </tbody>
 								   </table>
								</div>
							</div>
						</div>
					</div>
				</div>
				<?php  
					if (isset($_SESSION["Proveedor"])) {
						echo '<div class="col-md-12" style="border-width: 1px 1px 1px 1px; ; margin-top: 1rem; border-style: solid; border-color: lightgray;">
							<br>
							<h4 style="text-align: center;">
								Último Pedido Recibido
							</h4>

							<hr>
					<div class="tab-content">
						<div id="existencia" class="container tab-pane active"><br>
							<div class="row">
								<div class="col-md-12 table-responsive">
								 	<table class="table table-bordered">
								 	<thead>
								 	   <tr>
								 	   	<th>Imagen</th>
 								         <th>Nombre Producto</th>
 								         <th>Cant.</th>
 								         <th>Estado</th>
 								         <th>Total</th>
 								       </tr>
								 	</thead>
 								     
 								     <tbody>';
 								     	$consulta=sprintf("SELECT tbl_pedido.Cantidad, tbl_estado.NombreEstado, tbl_estado.IDEstado, NombreProducto, PrecioActual, ImagenPrincipal, IDPedido FROM tbl_pedido, tbl_producto, tbl_estado WHERE tbl_producto.IDProducto = tbl_pedido.IDProducto AND tbl_pedido.IDEstado = tbl_estado.IDEstado AND tbl_producto.IDProveedor = '%s' ORDER BY IDPedido DESC LIMIT 1", $conexion->antiInyeccion($_SESSION["Proveedor"]));
 								     		$resultado=$conexion->ejecutarconsulta($consulta);
 								     		$bandera = mysqli_num_rows($resultado);
 								     		if($bandera!=0){
 								     		while($data = $conexion->obtenerfila($resultado)){
 								     			$consulta = sprintf("SELECT * FROM tbl_estado WHERE IDEstado != '%s' AND IDEstado BETWEEN 4 AND 6", $conexion->antiInyeccion($data['IDEstado']));
 								     			$temp = $conexion->ejecutarconsulta($consulta);

 								     			echo '<tr>
 								     					<td><img src=data:image/jpg;base64,'.base64_encode($data['ImagenPrincipal']).' width="60" height="60"></td>
 								     					<td>'.$data['NombreProducto'].'</td>
 								     					<td>'.$data['Cantidad'].'</td>
 								     					<td>
 								     						<select class="custom-select d-block w-auto" onchange="actualizarPedido(this.value, '.$data["IDPedido"].')">
 								     							<option value="'.$data['IDEstado'].'">'.$data['NombreEstado'].'</option>';
 								     			while ($data2 = $conexion->obtenerfila($temp)) {
 								     				echo '<option value="'.$data2['IDEstado'].'">'.$data2['NombreEstado'].'</option>';
 								     			}
 								     			echo			'
 								     						</select>
 								     					</td>
 								     					<td>HNL '.$data['PrecioActual']*$data['Cantidad'].'</td></tr>';

 								     		}
 								     	}else{
 								     		echo "<tr><td colspan=6 ><p style=\"text-align:center\">Aun no ha recibido ningun pedido</p></td>";
 								     	}

 								     echo'</tbody>
 								   </table>
								</div>
							</div>
						</div>
					</div>
				</div>';
					}
				?>

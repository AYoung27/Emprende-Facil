	<?php 
	include("../clases/Conexion.php");
	$conexion= new Conexion();
	session_start();
	if (empty($_SESSION)) {
		header('Location: index.php');
	}


	$sql="SELECT tbl_factura.IDFactura, tbl_usuario.Nombre , tbl_factura.FechaFactura, tbl_producto.NombreProducto, tbl_detalle_factura.Cantidad, tbl_producto.PrecioActual, tbl_detalle_factura.Total  FROM tbl_factura  
	INNER JOIN tbl_detalle_factura on tbl_detalle_factura.IDFactura=tbl_factura.IDFactura
	INNER JOIN tbl_producto on tbl_detalle_factura.IDProducto=tbl_producto.IDProducto
	INNER JOIN tbl_usuario on tbl_factura.IDUsuario = tbl_usuario.IDUsuario
	INNER JOIN tbl_proveedor on tbl_producto.IDProveedor=tbl_proveedor.IDProveedor
	WHERE  tbl_proveedor.IDProveedor=".$_SESSION['Proveedor']." and tbl_factura.IDFactura=".$_POST['idFactura']."  ORDER BY IDFactura ASC" ;


	$resultado=$conexion->ejecutarconsulta($sql);


	
	?>	
	<div class="col-md-12">
		<div class="col-md-12" style="border-width: 1px 1px 1px 1px; border-style: solid; border-color: lightgray;">
			<br>
			<h4 style="text-align: center;">
				Modifica los detalles del producto
			</h4>

			<div class="container">
				<div  class="row">
					<table class='table table-bordered'>
						<thead>
							<tr >
								<th>N.Factura</th>
								<th>Cliente</th>
								<th>Fecha</th>
								<th>Producto</th>
								<th>Cantidad</th>
								<th>Precio Unidad</th>
								<th>Total</th>
								
							</tr>

						</thead>
						<tbody>
							
							<?php 
							if ($conexion->cantidadregistros($resultado)>0) {
								while ($arreglo = $resultado->fetch_assoc()) {
									echo '<tr>
									<td>'.$arreglo['IDFactura'].'</td>
									<td>'.$arreglo['Nombre'].'</td>
									<td>'.$arreglo['FechaFactura'].'</td>
									<td>'.$arreglo['NombreProducto'].'</td>
									<td>'.$arreglo['Cantidad'].'</td>
									<td>'.$arreglo['PrecioActual'].'</td>
									<td>'.$arreglo['Total'].'</td>
																	</tr>';
								}
								ECHO "</tbody></table>";
							}else{
								echo "<tr><td colspan='4' style='text-align:center'>No Tiene Facturas Disponibles</td></tr></div>";
							}

							?>
						</tbody>

					</div>
				</div>
			</div>
		</div>		
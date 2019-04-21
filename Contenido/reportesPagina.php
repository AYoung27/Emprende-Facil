	<?php 
	include("../clases/Conexion.php");
	$conexion= new Conexion();
	session_start();
	if (empty($_SESSION)) {
		header('Location: index.php');
	}


	$sql="SELECT tbl_factura.IDFactura, tbl_producto.NombreProducto, tbl_detalle_factura.Cantidad, tbl_producto.PrecioActual, tbl_detalle_factura.Total  FROM tbl_factura  
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
			<br>
			<center>
			<img src="img/logo/PROTOTIPO5_LOGO.png" alt="EF | Emprende Facil" height="50px;" >
			</center>
			<br>
			<h4 style="text-align: center; font-weight: bold; " >
				Detalle Factura
			</h4> <hr> <br>
			<h6 style="color:#E52B2B; font-size: 12px;">(FALTA EDITAR 3 CAMPOS *NO TOCAR)</h6>
			<div class="row" > <h5 class="col-md-6">N. factura: </h5> <h5 class="col-md-6">Fecha:</h5> </div>
			<h5>Nombre Cliente:</h5>
			
			<br> <br>
			<div class="container">
				<div  class="row">
					<table class='table table-bordered'>
						<thead>
							<tr >
								
								
								
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
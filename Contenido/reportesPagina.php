	<?php 
	include("../clases/Conexion.php");
	$conexion= new Conexion();
	session_start();
	if (empty($_SESSION)) {
		header('Location: index.php');
	}





	/*CONSULTA PARA OBTENER VALORES EN LOS HISTORIALES DE COMPRA*/
	$sql="SELECT  tbl_factura.IDFactura,CONCAT(tbl_usuario.Nombre,' ',tbl_usuario.Apellido) AS Nombre,tbl_factura.FechaFactura, tbl_producto.NombreProducto, tbl_detalle_factura.Cantidad, tbl_producto.PrecioActual , tbl_factura.SubTotal, tbl_factura.ISV, tbl_factura.Total FROM tbl_factura  
	INNER JOIN tbl_detalle_factura on tbl_detalle_factura.IDFactura=tbl_factura.IDFactura
	INNER JOIN tbl_producto on tbl_detalle_factura.IDProducto=tbl_producto.IDProducto
	INNER JOIN tbl_usuario on tbl_factura.IDUsuario = tbl_usuario.IDUsuario
	INNER JOIN tbl_proveedor on tbl_producto.IDProveedor=tbl_proveedor.IDProveedor
	WHERE  tbl_factura.IDUsuario=".$_SESSION['ID']." and tbl_factura.IDFactura=".$_POST['idFactura']."  ORDER BY IDFactura ASC" ;


	$resultado=$conexion->ejecutarconsulta($sql);

	$arreglo = $conexion->obtenerFila($resultado);
	
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
			
			<div class="row" > <h5 class="col-md-6">N. factura: <?php echo $arreglo['IDFactura']; ?> </h5> <h5 class="col-md-6">Fecha: <?php echo $arreglo['FechaFactura']; ?></h5> </div>
			<h5 >Nombre Cliente: <?php echo $arreglo['Nombre']; ?></h5>
			
			
			<br> <br>
			<div class="container">
				<div  class="row">
					<table class='table table-bordered'>
						<thead>
							<tr >
								<th>Producto</th>
								<th>Cantidad</th>
								<th>Precio Unidad</th>
							</tr>

						</thead>
						<tbody>

							<?php 
							if ($conexion->cantidadregistros($resultado)>0) {
								while ($arreglo2 = $resultado->fetch_assoc()) {
									echo '<tr>
									
									<td>'.$arreglo2['NombreProducto'].'</td>
									<td>'.$arreglo2['Cantidad'].'</td>
									<td>'.$arreglo2['PrecioActual'].'</td>
									
									</tr>';
								}
								ECHO "</tbody></table>";
							}else{
								echo "<tr><td colspan='4' style='text-align:center'>No Tiene Facturas Disponibles</td></tr></div>";
							}

							;?>
						

					</table>	
				</div>			
			</div>

			<br> <br> <br> <br> <br>
			
			<h5 >Subtotal:<?php echo $arreglo['Total']; ?>  Lps.</h5> <br> 
			<h5 >ISV: <?php echo $arreglo['ISV']; ?> Lps.</h5> <br>
			<h5 >Total:  <?php echo $arreglo['Total']; ?> Lps.</h5> <br>			
		</div>


	</div>	
<?php
	session_start(); 
	include("../Clases/Conexion.php");
	$conexion = new Conexion();
	$conexion->mysql_set_charset("utf8");
 ?>

<div class="col-md-12">
				<div class="col-md-12" style="border-width: 1px 1px 1px 1px; border-style: solid; border-color: lightgray;">
							<br>
							<h4 style="text-align: center;">
								Pedidos
							</h4>

							<hr>
							<div class="container">								
								<ul class="nav justify-content-center">
								  <li class="nav-item">
								    <a class="nav-link disabled" href="#" aria-disabled="true">Hechos</a>
								  </li>
								  <?php 
								  	if (isset($_SESSION["Proveedor"])) {
								  		echo '
								  <li class="nav-item">
								    <a class="nav-link" href="#pedidosRecibidos" onclick="cargarDiv(\'zonaContenido\',\'Contenido/pedidosRecibidos.php\')">Recibidos</a>
								  </li>';
								  	}
								   ?>
								</ul>
							</div>
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
 								     	$consulta=sprintf("SELECT tbl_pedido.Cantidad, tbl_estado.NombreEstado, NombreProducto, PrecioActual, ImagenPrincipal, tbl_factura.FechaFactura FROM tbl_pedido, tbl_producto, tbl_estado, tbl_factura WHERE tbl_producto.IDProducto = tbl_pedido.IDProducto AND tbl_pedido.IDEstado = tbl_estado.IDEstado AND tbl_factura.IDFactura = tbl_pedido.IDFactura AND tbl_factura.IDUsuario = '%s' ORDER BY IDPedido DESC", $conexion->antiInyeccion($_SESSION["ID"]));
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
			</div> 

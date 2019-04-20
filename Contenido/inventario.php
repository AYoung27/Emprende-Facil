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
								    <a class="nav-link" href="#modificarProducto" onclick="cargarDiv('zonaContenido','Contenido/modificarProducto.php'),listar('')">Modificar Producto</a>
								  </li>
								</ul>
							</div>
					<div class="tab-content">
						<div id="existencia" class="container tab-pane active"><br>
							<div class="row">
								<div class="col-md-12 table-responsive">
								 	<table class="table table-bordered">
								 	<thead>
								 	   <tr>
								 	   	<th></th>
 								         <th>Nombre Producto</th>
 								         <th>Descripcion</th>
 								         <th>Cantidad</th>
 								         <th>Precio Actual</th>
 								         <th>Precio Anterior</th>
 								         <th>Categoria</th>
 								       </tr>
								 	</thead>
 								     
 								     <tbody>
 								     <?php
 								     	$consulta=sprintf("SELECT nombreProducto, Descripcion ,precioActual, PrecioAnterior,ImagenPrincipal,Cantidad,nombreCategoria FROM tbl_producto, tbl_categoria WHERE IDProveedor=".$_SESSION['Proveedor']." AND tbl_producto.IDcategoria=tbl_categoria.IDcategoria");
 								     		$resultado=$conexion->ejecutarconsulta($consulta);
 								     		$bandera=mysqli_num_rows($resultado);
 								     		if($bandera!=0){
 								     		while($data=$conexion->obtenerfila($resultado)){
 								     			echo '<tr><td><img src=data:image/jpg;base64,'.base64_encode($data['ImagenPrincipal']).' width="60" height="60"></td>';
 								     			echo '<td>'.$data['nombreProducto'].'</td>';
 								     			echo '<td>'.$data['Descripcion'].'</td>';
 								     			echo '<td>'.$data['Cantidad'].'</td>';
 								     			echo '<td>'.$data['precioActual'].'</td>';
 								     			echo '<td>'.$data['PrecioAnterior'].'</td>';
 								     			echo '<td>'.$data['nombreCategoria'].'</td></tr>';

 								     		}
 								     	}else{
 								     		echo "<tr><td colspan=6 ><p style=\"text-align:center\">Aun no hay productos en su inventario</p></td>";
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
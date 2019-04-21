	<?php 
	include("../clases/Conexion.php");
	$conexion= new Conexion();
	session_start();
	if (empty($_SESSION)) {
		header('Location: index.php');
	}

	$consulta ="SELECT NombreProducto,Descripcion,PrecioActual,Cantidad,NombreEstado,NombreColor,NombreCategoria ,tbl_producto.IDColor,tbl_producto.IDEstado,tbl_producto.IDCategoria FROM tbl_producto,tbl_estado, tbl_color,tbl_categoria WHERE tbl_producto.IDEstado= tbl_estado.IDEstado and tbl_producto.IDColor=tbl_color.IDColor and tbl_producto.IDCategoria=tbl_categoria.IDCategoria and IDProducto=".$_POST['idProducto'];
	$resultado=$conexion->ejecutarconsulta($consulta);
	$data=$conexion->obtenerfila($resultado);
	?>	
	<div class="col-md-12">
		<div class="col-md-12" style="border-width: 1px 1px 1px 1px; border-style: solid; border-color: lightgray;">
			<br>
			<h4 style="text-align: center;">
				Modifica los detalles del producto
			</h4>

			<div class="container">
				<div class="row">
					<form  method="POST" action="Acciones/modificarDatosProducto.php" class="needs-validation" novalidate>
						<input type="number" name="txtIdentificador" id="txtIdentificador" value="<?php echo $_POST['idProducto'];?>" style="display: none;">
						<div class="form-row">
							<div class="col-md-12 mb-3">
								<label >Escriba un nuevo nombre para el producto</label>
								<input type="text" class="form-control" id="txtNombreProducto" name="txtNombreProducto"  value="<?php echo $data['NombreProducto']; ?>" required size="40">
							</div>

							
						</div>
						<div class="form-row">
							<div class="col-md-6 mb-3">
								<label >Asigne una nueva cantidad disponible </label>
								<div class="input-group">
									<div class="input-group-prepend">
										<span class="input-group-text" id="txtCantidad">Unidades</span>
									</div>
									<input type="number" class="form-control" id="txtCantidad" name="txtCantidad"  aria-describedby="precio" min="0" required value="<?php echo $data['Cantidad'] ?>">
								</div>
							</div>
							<div class="col-md-6 mb-3">
								<label >Asigne un nuevo Precio</label>
								<div class="input-group">
									<div class="input-group-prepend">
										<span class="input-group-text" id="txtPrecio">HNL</span>
									</div>
									<input type="number" class="form-control" id="txtPrecio" name="txtPrecio"  aria-describedby="precio" min="0" required value="<?php echo $data['PrecioActual'] ?>">
								</div>
							</div>
						</div>
						<div class="form-row">
							<div class="col-lg-6 mb-3">
								<label class="" for="slcCategoria">Seleccione la nueva categoría del producto</label>
								<?php  
								$consulta="SELECT IDCategoria, NombreCategoria FROM tbl_categoria";
								$resultado=$conexion->ejecutarconsulta($consulta);
								?>
								<select class="custom-select " name="slcCategoria" id="slcCategoria">
									<option value="<?php echo $data['IDCategoria'];  ?>" selected><?php echo $data['NombreCategoria'];  ?></option>
									<?php 
									while ($arreglo=$resultado->fetch_array()) {
										echo '<option value="'.$arreglo[IDCategoria].'">'.$arreglo[NombreCategoria]."</option>";
									}
									?>
								</select>

							</div>
							<div class="col-lg-6 mb-3">
								<label class="" for="slcColor">Seleccione el nuevo color del producto</label>
								<?php  
								$consulta="SELECT IDColor, NombreColor FROM tbl_color";
								$resultado=$conexion->ejecutarconsulta($consulta);
								?>
								<select class="custom-select " name="slcColor" id="slcColor">
									<option value="<?php echo $data['IDColor'];  ?>"selected><?php echo $data['NombreColor'];  ?></option>
									<?php 
									while ($arreglo=$resultado->fetch_array()) {
										echo '<option value="'.$arreglo[IDColor].'">'.$arreglo[NombreColor]."</option>";
									}
									?>
								</select>

							</div>
						</div>
						<div class="form-row">
							<div class="col-lg-12 mb-3">
								<label for="txtArea">Ingrese una descripción del producto</label>
								<textarea class="form-control" id="txtArea" name="txtArea" rows="3" value><?php echo $data['Descripcion']; ?></textarea>
							</div>
						</div>
						<div class="form-row">
							<div class="col-lg-6 mb-3">
								<label class="" for="slcColor">Seleccione el estado del producto</label>
								<?php  
								$consulta="SELECT IDEstado, NombreEstado FROM tbl_Estado";
								$resultado=$conexion->ejecutarconsulta($consulta);
								?>
								<select class="custom-select " name="slcEstado" id="slcEstado">
									<option value="<?php echo $data['IDEstado'];  ?>" selected><?php echo $data['NombreEstado'];  ?></option>
									<?php 
									while ($arreglo=$resultado->fetch_array()) {
										echo '<option value="'.$arreglo[IDEstado].'">'.$arreglo[NombreEstado]."</option>";
									}
									?>
								</select>

							</div>
						</div>
						<div class="form-row mb-3" style="float: right;">
							<button type="submit" id="btnEnviar" class="btn btn-primary" onclick="confirmar()">Aceptar</button>	
						</div>
						<div class="form-row mb-3" style="float: right; margin-right: 10px;">
							<button type="button" id="btncancelar" class="btn btn-danger" onclick="cargarDiv('zonaContenido', 'Contenido/gestionarProducto.php')">Cancelar</button>	
						</div>
					</form>

				</div>
			</div>
		</div>
	</div>		
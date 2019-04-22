<?php 
	date_default_timezone_set('America/Tegucigalpa');
	include("../Clases/Conexion.php");
	$conexion = new Conexion();
	$conexion->mysql_set_charset("utf8");
	session_start();

	$fecha=date("Y-m-d");
	$consulta = sprintf("SELECT IDProducto FROM tbl_productos_carrito WHERE IDCarrito ='%s'", $conexion->antiInyeccion($_SESSION["Carrito"]));
	$resultado = $conexion->ejecutarconsulta($consulta);
	$iter = $conexion->cantidadRegistros($resultado);

	$consulta = sprintf("INSERT INTO tbl_factura(IDUsuario, FechaFactura) VALUES('%s','%s')", $conexion->antiInyeccion($_SESSION["ID"]), $conexion->antiInyeccion($fecha));
	$conexion->ejecutarconsulta($consulta);

	$consulta = sprintf("SELECT IDFactura FROM tbl_factura WHERE IDUsuario = '%s' AND FechaFactura = '%s'", $conexion->antiInyeccion($_SESSION["ID"]), $conexion->antiInyeccion($fecha));

	$id = $conexion->ejecutarconsulta($consulta);
	$id = $conexion->obtenerFila($id);
	
	for ($i=0; $i < $iter ; $i++) {
		$data = $conexion->obtenerFila($resultado);
		$consulta = sprintf("SELECT PrecioActual FROM tbl_producto WHERE IDProducto = '%s'", $conexion->antiInyeccion($data["IDProducto"]));
		$precio = $conexion->ejecutarconsulta($consulta);
		$precio = $conexion->obtenerFila($precio)["PrecioActual"];
		
		$consulta = sprintf("INSERT INTO tbl_detalle_factura(IDFactura, IDProducto, Cantidad, Total) VALUES('%s','%s','1','%s')", $conexion->antiInyeccion($conexion->antiInyeccion($id["IDFactura"])), $conexion->antiInyeccion($data["IDProducto"]), $conexion->antiInyeccion($precio));
		$conexion->ejecutarconsulta($consulta);
	}

	$consulta = sprintf("UPDATE tbl_carrito SET pagado = 1 WHERE IDCarrito ='%s'", $conexion->antiInyeccion($_SESSION["Carrito"]));
	$conexion->ejecutarconsulta($consulta);

	unset($_SESSION["Carrito"]);
 ?>
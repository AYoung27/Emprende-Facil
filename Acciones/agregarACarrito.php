<?php 
	include("../Clases/Conexion.php");
	$conexion = new Conexion();
	$conexion->mysql_set_charset("utf8");
	session_start();

	$producto = $_POST['id'];

	if (empty($_SESSION)) {
		$consulta = sprintf("INSERT INTO tbl_carrito(IDUsuario, IP) VALUES(NULL, '%s')", $conexion->ip());
		$conexion->ejecutarconsulta($consulta);

		$consulta = sprintf("SELECT IDCarrito FROM tbl_carrito WHERE IP = '%s'", $conexion->ip());
		
		$_SESSION["Carrito"] = $conexion->ejecutarconsulta($consulta)->fetch_assoc()['IDCarrito'];

		$consulta = sprintf("INSERT INTO tbl_productos_carrito(IDProducto, IDCarrito) VALUES('%s','%s')", $conexion->antiInyeccion($producto), $conexion->antiInyeccion($_SESSION["Carrito"]));

		$conexion->ejecutarconsulta($consulta);
	} else {
		if (!isset($_SESSION["ID"])) {
			$consulta = sprintf("INSERT INTO tbl_productos_carrito(IDProducto, IDCarrito) VALUES('%s','%s')", $conexion->antiInyeccion($producto), $conexion->antiInyeccion($_SESSION["Carrito"]));

			$conexion->ejecutarconsulta($consulta);
		} elseif (!isset($_SESSION["Carrito"])) {
			$consulta = sprintf("INSERT INTO tbl_carrito(IDUsuario, IP) VALUES('%s', '%s')",$conexion->antiInyeccion($_SESSION["ID"]), $conexion->ip());
			$conexion->ejecutarconsulta($consulta);

			$consulta = sprintf("SELECT IDCarrito FROM tbl_carrito WHERE IP = '%s'", $conexion->ip());
		
			$_SESSION["Carrito"] = $conexion->ejecutarconsulta($consulta)->fetch_assoc()['IDCarrito'];

			$consulta = sprintf("INSERT INTO tbl_productos_carrito(IDProducto, IDCarrito) VALUES('%s','%s')", $conexion->antiInyeccion($producto), $conexion->antiInyeccion($_SESSION["Carrito"]));

			$conexion->ejecutarconsulta($consulta);
		} else {

			$consulta = sprintf("INSERT INTO tbl_productos_carrito(IDProducto, IDCarrito) VALUES('%s','%s')", $conexion->antiInyeccion($producto), $conexion->antiInyeccion($_SESSION["Carrito"]));

			$conexion->ejecutarconsulta($consulta);
		}
	}
 ?>
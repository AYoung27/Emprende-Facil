<?php 
	include("../Clases/Conexion.php");
	$conexion = new Conexion();
	$conexion->mysql_set_charset("utf8");
	session_start();

	$producto = $_POST['id']

	if (!isset($_SESSION['Carrito'])) {
		
	}
 ?>
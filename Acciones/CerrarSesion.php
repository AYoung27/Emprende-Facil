<?php
	include("../Clases/Conexion.php");
	$conexion = new Conexion();
	session_start();
	$consulta = sprintf("UPDATE tbl_sesion set estado='0' where idusuario='%s'", $conexion->antiInyeccion($_SESSION['ID']) );
	$conexion->ejecutarconsulta($consulta);
	mysqli_close($conexion);
	session_destroy();
	header('Location: ../index.php');
  ?>
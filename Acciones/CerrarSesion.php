<?php
session_start();

if (empty($_SESSION)) {
    header('Location: ../index.php?error');
}


//	Datos para la cadena de conexion
$servername = "MySQL";
$username = "usuario1";
$database = "emprendefacil";
$password = "ZSEyqupX9iYik8NE";
	
//  Crear la conexion a MySQL
$enlace = new mysqli('localhost', $username, $password, $database);
$enlace->set_charset("utf8");
		
if (!$enlace) {
	die('No pudo conectarse: ' . mysql_error());
}

//	Cambiar el estado en la tabla usuario
$sql = "UPDATE tbl_usuario SET Estado = '0' WHERE IDUsuario = '".$_SESSION['ID']."'";
$enlace->query($sql);
mysqli_close($enlace);

session_destroy();
header('Location: ../index.php');
 ?>
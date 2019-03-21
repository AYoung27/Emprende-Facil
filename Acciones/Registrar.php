<?php
	//Verificar que se hayan recibido los datos mediante el metodo POST
	if (empty($_POST)) {
		$var = "Por favor ingrese datos en los campos de texto";
		echo "<script> alert('".$var."'); </script>";
	} else {
	    $nombre = filter_input(INPUT_POST, 'txtNombre');
    	$apellido = filter_input(INPUT_POST, 'txtApellido');
    	$correo = filter_input(INPUT_POST, 'txtCorreo');
    	$pass = sha1(filter_input(INPUT_POST, 'txtPassword'));
    	$pass2 = sha1(filter_input(INPUT_POST, 'txtPasswordRep'));

    	//Datos para la cadena de conexion
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
		$sql = "INSERT INTO tbl_usuario (Nombre, Apellido, Correo, Password) VALUES ('".$nombre."', '".$apellido."', '".$correo."','".$pass."')";
		if ($enlace->query($sql) === TRUE) {
		} else {
    		echo "Error: " . $sql . "<br>" . $enlace->error;
		}
	}
?>
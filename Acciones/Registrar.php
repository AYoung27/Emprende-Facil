<?php
	//Verificar que se hayan recibido los datos mediante el metodo POST
	if (empty($_POST)) {
		$var = "Por favor ingrese datos en los campos de texto";
		echo "<script> alert('".$var."'); </script>";
	} else { //	Si se encontraron datos, estos pasaran a variables temporales para ser almacenadas en la base de datos
	    $nombre = filter_input(INPUT_POST, 'txtNombre');
    	$apellido = filter_input(INPUT_POST, 'txtApellido');
    	$correo = filter_input(INPUT_POST, 'txtCorreo');
    	$pass = sha1(filter_input(INPUT_POST, 'txtPassword')); //	La contraseña se cifra para ser almacenada de manera segura en la base de datos

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

		//	Realizar consulta en caso de que el correo ingresado y ahaya sido registrado previamente
		$sql = "SELECT count(*) FROM tbl_usuario WHERE Correo = '".$correo."'";
		$resultado = $enlace->query($sql);						//	Obtener los datos de la consulta
		if ($resultado->fetch_assoc()['count(*)'] == '0') {		//	Verificar que no se haya registrado el correo, insertar si no hay coincidencias
			$sql = "INSERT INTO tbl_usuario (Nombre, Apellido, Correo, Password) VALUES ('".$nombre."', '".$apellido."', '".$correo."','".$pass."')";
			$enlace->query($sql);
			session_start();
			$sql = "SELECT IDUsuario, TipoUsuario FROM tbl_usuario WHERE Correo = '".$correo."'";
			$_SESSION['ID'] = $enlace->query($sql)->fetch_assoc()['IDUsuario'];
			$_SESSION['TipoUsuario'] = $enlace->query($sql)->fetch_assoc()['TipoUsuario'];
			$_SESSION['Usuario'] = $nombre." ".$apellido;
			$sql = "INSERT INTO tbl_sesion (IDUsuario, Estado) VALUES ('".$_SESSION['ID']."','1')";
			$enlace->query($sql);
			header('Location: ../index.php');
		} else {
			$var = "Este correo ya fue registrado previamente";		
			echo "<script>
					alert('".$var."'); 
  					window.location='../registro.php';
				  </script>";
		}
	}
?>
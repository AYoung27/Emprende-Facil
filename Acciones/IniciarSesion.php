<?php
	//	Verificar que se hayan recibido los datos mediante el metodo POST
	//	Si se encontraron datos, estos pasaran a variables temporales para ser almacenadas en la base de datos
	if (empty($_POST)) {
		$var = "Por favor ingrese datos en los campos de texto";
		echo "<script> alert('".$var."'); </script>";
	} else { 
		$correo = filter_input(INPUT_POST, 'txtCorreo');
		$pass = sha1(filter_input(INPUT_POST, 'txtPassword'));

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

		//	Verificar que el correo ingresado exista en el registro
		$sql = "SELECT count(*) FROM tbl_usuario WHERE Correo = '".$correo."'";
		$resultado = $enlace->query($sql);

		// En caso de existir, verificar que la contrase;a ingresada sea la misma que la almacenada
		if ($resultado->fetch_assoc()['count(*)'] == '1') {
			$sql = "SELECT Estado FROM tbl_usuario WHERE Correo = '".$correo."'";
			
			if ($enlace->query($sql)->fetch_assoc()['Estado'] == '0') {
				$sql = "SELECT Password FROM tbl_usuario WHERE Correo = '".$correo."'";
				//	En caso de que las contrase;as coincidan
				if ($pass == $enlace->query($sql)->fetch_assoc()['Password']) {
					// Crear la sesion
					session_start();
					$sql = "SELECT IDUsuario, TipoUsuario, Nombre, Apellido FROM tbl_usuario WHERE Correo = '".$correo."'";
					$_SESSION['ID'] = $enlace->query($sql)->fetch_assoc()['IDUsuario'];
					$_SESSION['TipoUsuario'] = $enlace->query($sql)->fetch_assoc()['TipoUsuario'];
					$_SESSION['Usuario'] = $enlace->query($sql)->fetch_assoc()['Nombre']." ".$enlace->query($sql)->fetch_assoc()['Apellido'];
				
					//	Cambiar el estado en la tabla usuario
					$sql = "UPDATE tbl_usuario SET Estado = '1' WHERE IDUsuario = '".$_SESSION['ID']."'";
					$enlace->query($sql);
					mysqli_close($enlace);
					header('Location: ../index.php');
				} else {
					mysqli_close($enlace);
					$var = "Las contraseñas no coinciden. ".$pass;		
					echo "<script>
							alert('".$var."'); 
  							window.location='../login.php';
				  		</script>";
				}	
			} else {
				mysqli_close($enlace);
				$var = "Error de inicio de sesion.";		
				echo "<script>
						alert('".$var."'); 
  						window.location='../login.php';
					  </script>";
			}
		}	
	}
 ?>
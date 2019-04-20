<?php  
	date_default_timezone_set('America/Tegucigalpa');
 	include("../Clases/Conexion.php");
 	$conexion = new Conexion();
 	$conexion->mysql_set_charset("utf8");

 	$correo = $_POST["txtCorreo"];
 	$password= sha1($_POST["txtPassword"]);

 	$consulta= sprintf("SELECT count(*) FROM tbl_usuario where correo='%s'", $conexion->antiInyeccion($correo));
 	$resultado=$conexion->ejecutarconsulta($consulta);

 	if ($resultado->fetch_assoc()['count(*)'] == '1') {
 		$consulta=sprintf("SELECT Estado FROM tbl_sesion where idusuario=(SELECT idusuario FROM tbl_usuario where correo='%s')",$conexion->antiInyeccion($correo));
 		$aux=$conexion->ejecutarconsulta($consulta);
 		if ($aux->fetch_assoc()['Estado']== '0') {
 			$cons= sprintf("SELECT password FROM tbl_usuario where correo='%s'", $conexion->antiInyeccion($correo));
	 		if ($password==$conexion->ejecutarconsulta($cons)->fetch_assoc()['password']) {
					session_start();
					$consulta=sprintf("SELECT idusuario, correo, tipousuario, nombre, apellido, imagen FROM tbl_usuario WHERE correo = '%s'",$conexion->antiInyeccion($correo));
					$_SESSION['ID'] = $conexion->ejecutarconsulta($consulta)->fetch_assoc()['idusuario'];
					$_SESSION['TipoUsuario']=$conexion->ejecutarconsulta($consulta)->fetch_assoc()['tipousuario'];
					if ($_SESSION['TipoUsuario'] == '2') {
						$consultaProv = sprintf("SELECT IDProveedor FROM tbl_proveedor WHERE IDUsuario = '%s'", $conexion->antiInyeccion($_SESSION['ID']));
						$_SESSION['Proveedor'] = $conexion->ejecutarconsulta($consultaProv)->fetch_assoc()['IDProveedor'];
					}
					$_SESSION['Usuario']=$conexion->ejecutarconsulta($consulta)->fetch_assoc()['nombre']." ".$conexion->ejecutarconsulta($consulta)->fetch_assoc()['apellido'];
					$_SESSION['Correo']=$conexion->ejecutarconsulta($consulta)->fetch_assoc()['correo'];
					$_SESSION['Nombre']=$conexion->ejecutarconsulta($consulta)->fetch_assoc()['nombre'];
					$_SESSION['Apellido']=$conexion->ejecutarconsulta($consulta)->fetch_assoc()['apellido'];
					$_SESSION['Imagen']=$conexion->ejecutarconsulta($consulta)->fetch_assoc()['imagen'];
					$sql = sprintf("UPDATE tbl_sesion SET Estado = '1' WHERE idusuario = '%s'",$conexion->antiInyeccion($_SESSION['ID']));
					$conexion->ejecutarconsulta($sql);

					$fecha=date("Y-m-d");
					$hora=date("G:i:s");
					$consultaB = sprintf("INSERT INTO tbl_log(evento, descripcion, fecha, hora,direccion_ip_usuario ,usuarioid) values('%s','%s','%s','%s','%s','%s')",$conexion->antiInyeccion("Inicio de sesion"),$conexion->antiInyeccion("El usuario con correo:"." ".$correo." "."ha iniciado sesion"),$conexion->antiInyeccion($fecha),$conexion->antiInyeccion($hora), $conexion->antiInyeccion($conexion->ip()),$conexion->antiInyeccion($_SESSION['ID']));
					$conexion->ejecutarconsulta($consultaB);
					
					if (isset($_SESSION["Carrito"])) {
						$consulta = sprintf("UPDATE tbl_carrito SET IDUsuario = '%s' WHERE IDCarrito = '%s'", $conexion->antiInyeccion($_SESSION["ID"]), $conexion->antiInyeccion($_SESSION["Carrito"]));
						$conexion->ejecutarconsulta($consulta);
					}
					mysqli_close($conexion->getLink());
					header('Location: ../index.php');
					
				} else {
					mysqli_close($conexion->getLink());
					$var = "password erroneo";		
					echo "<script>
							alert('".$var."'); 
  							window.location='../login.php';
				  		</script>";
				}	
 		}else {
 			$consulta = sprintf("SELECT idusuario FROM tbl_usuario where correo='%s'", $conexion->antiInyeccion($correo));
 			$id = $conexion->ejecutarconsulta($consulta)->fetch_assoc()['idusuario'];
 			$consulta = sprintf("INSERT INTO tbl_notificacion(Descripcion, Redireccion, IDUsuario) VALUES('%s','%s','%s')", $conexion->antiInyeccion("Intento de Inicio de Sesion"), $conexion->antiInyeccion("perfil.php"), $conexion->antiInyeccion($id));
 			$conexion->ejecutarconsulta($consulta);
			mysqli_close($conexion->getLink());
			$var = "Inicio de Sesion no Autorizado";		
			echo "<script>
					alert('".$var."'); 
  					window.location='../login.php';
				  </script>";
		}
 	} else {
 		$var = "El usuario no existe, registralo ahora";		
			echo "<script>
					alert('".$var."'); 
  					window.location='../registro.php';
				  </script>";
 	}

?>
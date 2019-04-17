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
					$_SESSION['Usuario']=$conexion->ejecutarconsulta($consulta)->fetch_assoc()['nombre']." ".$conexion->ejecutarconsulta($consulta)->fetch_assoc()['apellido'];
					$_SESSION['Correo']=$conexion->ejecutarconsulta($consulta)->fetch_assoc()['correo'];
					$_SESSION['Nombre']=$conexion->ejecutarconsulta($consulta)->fetch_assoc()['nombre'];
					$_SESSION['Apellido']=$conexion->ejecutarconsulta($consulta)->fetch_assoc()['apellido'];
					$_SESSION['Imagen']=$conexion->ejecutarconsulta($consulta)->fetch_assoc()['imagen'];
					$sql = sprintf("UPDATE tbl_sesion SET Estado = '1' WHERE idusuario = '%s'",$conexion->antiInyeccion($_SESSION['ID']));
					$conexion->ejecutarconsulta($sql);
					header('Location: ../index.php');

					$fecha=date("Y-m-d");
					$hora=date("G:i:s");
					$consultaB = sprintf("INSERT INTO tbl_log(evento, descripcion, fecha, hora,direccion_ip_usuario ,usuarioid) values('%s','%s','%s','%s','%s','%s')",$conexion->antiInyeccion("Inicio de sesion"),$conexion->antiInyeccion("El usuario con correo:"." ".$correo." "."ha iniciado sesion"),$conexion->antiInyeccion($fecha),$conexion->antiInyeccion($hora), $conexion->antiInyeccion($conexion->ip()),$conexion->antiInyeccion($_SESSION['ID']));
					$conexion->ejecutarconsulta($consultaB);

					mysqli_close($conexion->getLink());
					
				} else {
					mysqli_close($conexion->getLink());
					$var = "password erroneo";		
					echo "<script>
							alert('".$var."'); 
  							window.location='../login.php';
				  		</script>";
				}	
 		}else {
			mysqli_close($conexion->getLink());
			$var = "error al conectar";		
			echo "<script>
					alert('".$var."'); 
  					window.location='../login.php';
				  </script>";
		}
 	}
?>
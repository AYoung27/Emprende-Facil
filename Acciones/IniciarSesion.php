<?php  
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
					$consulta=sprintf("SELECT idusuario, tipousuario, nombre, apellido FROM tbl_usuario WHERE correo = '%s'",$conexion->antiInyeccion($correo));
					$_SESSION['ID'] = $conexion->ejecutarconsulta($consulta)->fetch_assoc()['idusuario'];
					$_SESSION['TipoUsuario']=$conexion->ejecutarconsulta($consulta)->fetch_assoc()['tipousuario'];
					$_SESSION['Usuario']=$conexion->ejecutarconsulta($consulta)->fetch_assoc()['nombre']." ".$conexion->ejecutarconsulta($consulta)->fetch_assoc()['apellido'];

					$sql = sprintf("UPDATE tbl_sesion SET Estado = '1' WHERE idusuario = '%s'",$conexion->antiInyeccion($_SESSION['ID']));
					$conexion->ejecutarconsulta($sql);
					header('Location: ../index.php');
					mysqli_close($conexion);
					
				} else {
					mysqli_close($conexion);
					$var = "password erroneo: ".$password;		
					echo "<script>
							alert('".$var."'); 
  							window.location='../login.php';
				  		</script>";
				}	
 		}else {
			mysqli_close($conexion);
			$var = "error al conectar";		
			echo "<script>
					alert('".$var."'); 
  					window.location='../login.php';
				  </script>";
		}
 	}
?>
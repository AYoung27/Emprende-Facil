<?php 
	include("../Clases/Conexion.php");
	$conexion = new Conexion();
	$conexion->mysql_set_charset("utf8");
	include("../Clases/Usuario.php");

	$nombre= $_POST["txtNombre"];
	$apellido=$_POST["txtApellido"];
	$correo=$_POST["txtCorreo"];
	$password=sha1($_POST["txtPassword"]);
	
	$reg = new registro(null,
	$nombre,
	$apellido,
	$correo,
	$password,
	null);

	

	$consulta = sprintf("SELECT count(*) FROM tbl_usuario WHERE Correo = '%s'",$conexion->antiInyeccion($correo));
		$resultado = $conexion->ejecutarconsulta($consulta);

		//	Verificar que no se haya registrado el correo, insertar si no hay coincidencias
		if ($resultado->fetch_assoc()['count(*)'] == '0') {		
			//	Realizar insercion
			$reg ->registrar($conexion);
			
			//	Crear sesion
			session_start();
			$consulta = sprintf("SELECT IDUsuario, TipoUsuario FROM tbl_usuario WHERE Correo = '%s'",$conexion->antiInyeccion($correo));
			$_SESSION['ID'] = $conexion->ejecutarconsulta($consulta)->fetch_assoc()['IDUsuario'];
			$_SESSION['TipoUsuario'] = $conexion->ejecutarconsulta($consulta)->fetch_assoc()['TipoUsuario'];
			$_SESSION['Usuario'] = $nombre." ".$apellido;
			mysqli_close($conexion);
			
			// Redirigir
			header('Location: ../index.php');

			$consulta =sprintf("INSERT INTO tbl_sesion(idusuario, estado) values('%s','%s')", $conexion->antiInyeccion($_SESSION['ID']), $conexion->antiInyeccion("0"));
			$conexion->ejecutarconsulta($consulta);
			
			
		//	En caso de encontrarse un error, se retornara a la pagina de registro
		} else {
			mysqli_close($conexion);
			$var = "Este correo ya fue registrado previamente";		
			echo "<script>
					alert('".$var."'); 
  					window.location='../registro.php';
				  </script>";
		}


 ?>
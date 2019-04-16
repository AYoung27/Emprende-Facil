<?php  
	session_start();
	date_default_timezone_set('America/Tegucigalpa');
 	include("../Clases/Conexion.php");
 	$conexion = new Conexion();
 	$conexion->mysql_set_charset("utf8");
 	$nombreEmp = $_POST["txtNombreEmp"];
 	$depto = $_POST["optDepto"];
 	$municipio = $_POST["optMun"];
 	$direccion = $_POST["txtDireccion"];
 	$telefono = $_POST["txtTelefono"];
 	$rtn = $_POST["txtRTN"];

	$sql = sprintf("UPDATE tbl_usuario SET TipoUsuario = '2' WHERE idusuario = '%s'", $conexion->antiInyeccion($_SESSION['ID']));

 	$conexion->ejecutarconsulta($sql);

	$consulta = sprintf("SELECT IDMunicipio FROM tbl_municipio WHERE NombreMunicipio = '%s' ORDER BY IDDepartamento ASC", $municipio);
	$resultado = $conexion->ejecutarconsulta($consulta);

	$consultaA = sprintf("INSERT INTO tbl_proveedor(nombreproveedor, direccion, idmunicipio, telefono, rtn, idusuario) values('%s','%s','%s','%s','%s','%s')", $conexion->antiInyeccion($nombreEmp), $conexion->antiInyeccion($direccion), $conexion->antiInyeccion($conexion->obtenerFila($resultado)[0]), $conexion->antiInyeccion($telefono), $conexion->antiInyeccion($rtn), $conexion->antiInyeccion($_SESSION['ID']));

	$conexion->ejecutarconsulta($consultaA);

 	$fecha=date("Y-m-d");
	$hora=date("G:i:s");
	
	$consultaB = sprintf("INSERT INTO tbl_log(evento, descripcion, fecha, hora,direccion_ip_usuario ,usuarioid) values('%s','%s','%s','%s','%s','%s')",$conexion->antiInyeccion("Transicion a Vendedor"),$conexion->antiInyeccion("El usuario con correo:"." ".$_SESSION['Correo']." "."se ha vuelto vendedor"),$conexion->antiInyeccion($fecha),$conexion->antiInyeccion($hora), $conexion->antiInyeccion($conexion->ip()), $conexion->antiInyeccion($_SESSION['ID']));

	$conexion->ejecutarconsulta($consultaB);

	$_SESSION['TipoUsuario']='2';
	$var = "Te has vuelto proveedor";		
					echo "<script>
							alert('".$var."'); 
  							window.location='../perfil.php';
				  		</script>";
?>

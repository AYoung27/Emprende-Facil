<?php  
include("../Clases/Conexion.php");
$conexion = new Conexion();
$conexion->mysql_set_charset("utf8");
session_start();
//Primera parte algoritmo de busqueda dinamica
function listarProductos($valor,$conexion){
	$consulta="SELECT NombreProducto,PrecioActual FROM tbl_producto WHERE NombreProducto like '%".$valor."%' and IDProveedor=".$_SESSION['Proveedor'];
	$resultado=$conexion->ejecutarconsulta($consulta);
	$arreglo=array();
	while ($re=$resultado->fetch_array(MYSQLI_NUM)) {
		$arreglo[]=$re;
	}
	return $arreglo;
	mysqli_close($conexion->getLink());

}

	$val=$_POST['val'];
	echo json_Encode(listarProductos($val,$conexion));
?>
<?php  
include("../Clases/Conexion.php");
$conexion = new Conexion();
$conexion->mysql_set_charset("utf8");
session_start();
//Primera parte algoritmo de busqueda dinamica
/*function listarProductos($valor,$conexion){
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
	echo json_Encode(listarProductos($val,$conexion));*/

   $salida="<table class='table table-bordered'>
    			<thead>
    				<tr id='titulo'>
    					<th>NombreProducto</th>
    					<th>Precio</th>
    					<th>Opciones</th>
    				</tr>

    			</thead>
    	<tbody>";
	$sql="SELECT NombreProducto,PrecioActual FROM tbl_producto WHERE NombreProducto NOT LIKE '' ORDER BY NombreProducto ASC ";
	if(isset($_POST['consulta'])){
		$sql="SELECT IDProducto,NombreProducto,PrecioActual FROM tbl_producto WHERE NombreProducto like '%".$_POST['consulta']."%' and IDProveedor=".$_SESSION['Proveedor'];
	}
	$resultado=$conexion->ejecutarconsulta($sql);
	if ($conexion->cantidadregistros($resultado)>0) {
    	

    	while ($arreglo = $resultado->fetch_assoc()) {
    		$salida.='<tr>
    					<td>'.$arreglo['NombreProducto'].'</td>
    					<td>'.$arreglo['PrecioActual'].'</td>
    					<td><a role="button"'.'class='.'"btn btn-primary mr-2"'.'href="#" onclick="modificar('.$arreglo["IDProducto"].')"><i class='.'"glyphicon glyphicon-pencil"'.'></i> Modificar</a><a role="button" class='.'"btn btn-danger"'.' href="#" onclick="eliminar('.$arreglo["IDProducto"].')"><i class='.'"glyphicon glyphicon-remove"'.'></i> Eliminar</a></td></tr>';
    	}
    	$salida.="</tbody></table>";
    }else{
    	$salida.="<tr><td colspan='3' style='text-align:center'>Aun no hay Productos en su inventario</td></tr>";
    }


    echo $salida;

    mysqli_close($conexion->getLink());

?>
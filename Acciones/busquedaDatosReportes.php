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

 $salida="<div class='col-md-12 table-responsive'>
 <table class='table table-bordered'>
 <thead>
 <tr id='titulo'>
 <th>N.Factura</th>
 <th>Cliente</th>
 <th>Fecha</th>
 <th>Total factura</th>
 <th>  </th>
 </tr>

 </thead>
 <tbody>";


 $sql="SELECT tbl_factura.IDFactura, CONCAT(tbl_usuario.Nombre,' ',tbl_usuario.Apellido) AS Nombre,tbl_factura.FechaFactura, tbl_factura.Total FROM tbl_factura
 INNER JOIN tbl_usuario on tbl_factura.IDUsuario = tbl_usuario.IDUsuario   

 WHERE  tbl_factura.IDUsuario=".$_SESSION['ID']."  ORDER BY IDFactura ASC" ;

 
 if(isset($_POST['consulta'])){
  $sql="SELECT tbl_factura.IDFactura,CONCAT(tbl_usuario.Nombre,' ',tbl_usuario.Apellido) AS Nombre, tbl_factura.FechaFactura, tbl_factura.Total  FROM tbl_factura 
  INNER JOIN tbl_usuario on tbl_factura.IDUsuario = tbl_usuario.IDUsuario 
  
  WHERE tbl_factura.IDUsuario=".$_SESSION['ID']."   ORDER BY IDFactura ASC  ";
}

/*and (Nombre like '%".$_POST['consulta']."%' OR (CONCAT(Nombre,' ',Apellido)) like '%".$_POST['consulta']."%' OR  (CONCAT(Apellido,' ',Nombre)) like '%".$_POST['consulta']."%' OR FechaFactura like '%".$_POST['consulta']."%')*/



$resultado=$conexion->ejecutarconsulta($sql);
if ($conexion->cantidadregistros($resultado)>0) {


 while ($arreglo = $resultado->fetch_assoc()) {
  $salida.='<tr>
  <td>'.$arreglo['IDFactura'].'</td>
  <td>'.$arreglo['Nombre'].'</td>
  <td>'.$arreglo['FechaFactura'].'</td>
  <td>'.$arreglo['Total'].'</td>
  <td><a style="float: right;" role="button"'.'class='.'"btn btn-primary"'.'href="#"'.' onclick=" ReportePagina('.$arreglo["IDFactura"].')"><i class='.'"glyphicon glyphicon-eye-open"'.'></i>&nbsp;Ver Detalles</a></td>
  </tr>';
}
$salida.="</tbody></table>";
}else{
  $salida.="<tr><td colspan='4' style='text-align:center'>No Tiene Facturas Disponibles</td></tr></div>";
}


echo $salida;

mysqli_close($conexion->getLink());

?>
<?php
include("../Clases/Conexion.php");






function build_report($year){
	$conexion = new Conexion();
	$conexion->mysql_set_charset("utf8");
	$total = array();
	for($i=0; $i<12; $i++){
		$month = $i+1;
		$consulta="SELECT SUM(monto_venta) AS total FROM ventas WHERE MONTH(fecha_venta) = '$month' AND YEAR(fecha_venta) = '$year' LIMIT 1";
		$resultado=$conexion->ejecutarconsulta($consulta);	
		$total[$i] = 0;
		foreach ($resultado as $key){ $total[$i] = ($key['total'] == null)? 0 : $key['total']; }
	}			 
	return $total;
}



echo json_encode(build_report($_POST['year']));

?>
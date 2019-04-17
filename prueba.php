<?php 
	include("Clases/Conexion.php");
	$conexion = new Conexion();
	$conexion->mysql_set_charset("utf8");
	
	function cargarMunicipios($conexion, $departamento)
	{
		$consulta = sprintf("SELECT IDDepartamento FROM tbl_departamentos WHERE NombreDepartamento = '%s' ORDER BY IDDepartamento ASC", $departamento);
		$resultado = $conexion->ejecutarconsulta($consulta);
		$consulta = sprintf("SELECT NombreMunicipio FROM tbl_municipio WHERE IDDepartamento = %s ORDER BY IDMunicipio ASC", $conexion->obtenerFila($resultado)[0]);
		$resultado = $conexion->ejecutarconsulta($consulta);
		$iter = $conexion->cantidadRegistros($resultado);

		for ($i=0; $i < $iter; $i++) { 
			var_dump($conexion->obtenerFila($resultado)[0]);
		}
	}

	cargarMunicipios($conexion, 'Choluteca');
 ?>
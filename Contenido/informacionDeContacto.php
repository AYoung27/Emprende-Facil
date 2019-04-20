<?php 
	session_start();
	include("../Clases/Conexion.php");
	$conexion = new Conexion();
	$conexion->mysql_set_charset("utf8");

	function cargarInformacion($conexion)
	{
		$consulta = sprintf("SELECT NombreProveedor, Telefono, Direccion, tbl_municipio.NombreMunicipio, tbl_departamentos.NombreDepartamento FROM tbl_proveedor, tbl_municipio, tbl_departamentos WHERE IDUsuario = '%s' AND tbl_municipio.IDMunicipio = tbl_proveedor.IDMunicipio AND tbl_municipio.IDDepartamento = tbl_departamentos.IDDepartamento", $conexion->antiInyeccion($_SESSION["ID"]));
		$resultado = $conexion->ejecutarconsulta($consulta);
		$data = $conexion->obtenerFila($resultado);
		echo '<div class="col-md-12" style="border-width: 1px 1px 1px 1px; margin-top: 1rem; border-style: solid; border-color: lightgray;">
					<br>
					<h4 style="text-align: center;">Información de Contacto</h4>
					<p class="text-center text-muted">Nombre de la Empresa: '.$data["NombreProveedor"].'</p>
					<p class="text-center text-muted">Correo Electrónico: '.$_SESSION["Correo"].'</p>
					<p class="text-center text-muted">Teléfono: '.$data["Telefono"].'</p>
					<p class="text-center text-muted">Dirección: '.$data["Direccion"].', '.$data["NombreMunicipio"].', '.$data["NombreDepartamento"].'</p>	
				</div>';
	}
	if (isset($_SESSION["Proveedor"])) {
			cargarInformacion($conexion);
	}
 ?>

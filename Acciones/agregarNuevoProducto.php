<?php  
include("../Clases/Conexion.php");
include("../Clases/Producto.php");
$conexion = new Conexion();
$conexion->mysql_set_charset("utf8");
session_start();

$precio = $_POST["txtPrecio"];
$nombreProducto = ucwords(strtolower($_POST["txtNombreProducto"]));
$categoria = $_POST["slcCategoria"];
$color = $_POST["slcColor"];
$descripcion = $_POST["txtArea"];

    // Verificamos si el tipo de archivo es un tipo de imagen permitido.
    // y que el tamaño del archivo no exceda los 16MB
    $permitidos = array("image/jpg", "image/jpeg", "image/gif", "image/png");
    $limite_kb = 16384;

    if (in_array($_FILES['chsImagen']['type'], $permitidos) && $_FILES['chsImagen']['size'] <= $limite_kb * 1024){
        // Archivo temporal
        $imagenTemporal = $_FILES['chsImagen']['tmp_name'];

        // Leemos el contenido del archivo temporal en binario.
        $fp = fopen($imagenTemporal, 'r+b');
        $data = fread($fp, filesize($imagenTemporal));
        fclose($fp);

        $prod= new Producto(null,$nombreProducto,$descripcion,$precio,null,null,$data,null,$color,$categoria,null,null);
		$consulta = sprintf("SELECT count(NombreProducto) FROM tbl_producto WHERE NombreProducto='%s' AND IDProveedor=(SELECT IDProveedor FROM tbl_proveedor WHERE IDUsuario='%s')",
		$conexion->antiInyeccion($nombreProducto),	
		$conexion->antiInyeccion($_SESSION['ID']));
		$resultado=$conexion->ejecutarconsulta($consulta);


		if ($resultado->fetch_assoc()['count(NombreProducto)']=='0') {
			$prod->agregar($conexion);
			header('Location: ../perfil.php');
			mysqli_close($conexion->getLink());
		}else{
			$var = "Error ";		
			echo "<script>
					alert('".$var."'); 
  					window.location='../agregarProducto.php';
				  </script>";
	}
   }else{
    	$var = "Error archivo no permitido";		
			echo "<script>
					alert('".$var."'); 
  					window.location='../agregarProducto.php';
				  </script>";   
    }





?>
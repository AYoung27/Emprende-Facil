<?php  
include("../Clases/Conexion.php");
$conexion = new Conexion();
$conexion->mysql_set_charset("utf8");
session_start();
$consulta = "DELETE FROM tbl_producto WHERE IDProducto=".$_GET['idProducto']." AND IDProveedor=".$_SESSION['Proveedor'];
$conexion->ejecutarconsulta($consulta);
echo '<script>alert("Producto Eliminado");</script>';
header("Location: ../perfil.php");
?>
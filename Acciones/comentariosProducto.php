<?php  
include("../Clases/Conexion.php");
$conexion = new Conexion();
$conexion->mysql_set_charset("utf8");
date_default_timezone_set('America/Tegucigalpa');
session_start();

$comentario=$_POST['txtComentario'];
$valoracion = $_POST['rating'];
$idProducto =$_POST['txtIdProducto'];
$fecha=date("Y-m-d");
$hora=date("G:i:s");

$consulta = sprintf("INSERT INTO tbl_comentarios_producto(IDProducto, IDUsuario, Comentario, Valoracion, Fecha, Hora) Values ('%s','%s','%s','%s','%s','%s')",
$conexion->antiInyeccion($idProducto),$conexion->antiInyeccion($_SESSION['ID']),$conexion->antiInyeccion($comentario),$conexion->antiInyeccion($valoracion),$conexion->antiInyeccion($fecha),$conexion->antiInyeccion($hora));
$conexion->ejecutarconsulta($consulta);

header('Location: ../detalle.php?idp='.$idProducto);

?>
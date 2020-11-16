<?php 
include("datos.php");
include("conex.php");
date_default_timezone_set('America/Bogota');
if (isset($_POST['nombreCliente'])){
$fecha = date("Y-m-d");
$nombre = $_POST['NombreCliente'];
$ref = $_POST['Referencia'];
$tipo = $_POST['Tipo'];
$color = $_POST['Color'];
$cantidad = $_POST['Cantidad'];
$detalle = $_POST['Detalle'];
$precio = $_POST['Precio'];

$insertVenta = "INSERT INTO ventaclientes (Fecha, NombreCliente,Referencia, Tipo, Color, Cantidad, Detalle, Precio) VALUES ('$fecha''$nombre','$ref','$tipo','$color','$cantidad','$detalle','$precio')";

$conexion = mysqli_query( $conex,$insertVenta);
if ($conex){
    echo "$nombre";
}else{
    echo "mal";
}}

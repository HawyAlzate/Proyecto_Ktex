<?php include("datos.php");
include("conex.php");
$fecha = $_POST['fecha'];
$nombre = $_POST['nombreCliente'];
$referencia = $_POST['referencia'];
$color = $_POST['color'];
$cantidad = $_POST['cantidad'];
$detalle = $_POST['detalle'];
$precio = $_POST['precio'];


if ((int)$referencia < 99) {
    $Tipo = "Body";
} else if ((int)$referencia >= 100 && (int)$referencia <= 199) {
    $Tipo = "Blusa";
} else if ((int)$referencia >= 200 && (int)$referencia <= 299) {
    $Tipo = "Vestido";
} else if ($referencia == "F-40" || $referencia == "F-60" || $referencia == "F-80") {
    $Tipo = "Falda";
}

$insertVenta = "INSERT INTO ventaclientes (Fecha, NombreCliente, Referencia, Tipo, Color, Cantidad, Detalle, Precio) VALUES ('$fecha','$nombre','$referencia','$Tipo','$color','$cantidad','$detalle','$precio')";


$T = mysqli_query($conex, $insertVenta);
echo $T;

<?php 
include("include.php");

$ref = $_POST['Ref'];
$color = $_POST['Col'];
$cantidad = $_POST['Cant'];

$resultado = "UPDATE stock_disponible SET  $color = ($color - $cantidad) WHERE  Referencia = '$ref' ";

echo mysqli_query($conex, $resultado);

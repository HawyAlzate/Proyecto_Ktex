<?php 
include("include.php");



$ref = $_POST['Ref'];
$color = $_POST['Col'];

$resultado = "SELECT $color FROM stock_disponible WHERE  Referencia = '$ref' ";

$result= mysqli_query($conex, $resultado);
$fila = mysqli_fetch_assoc($result);

echo $fila[$color];



?>
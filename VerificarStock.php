<?php

$host = "localhost";
$usuario = "root";
$clave = "1234";
$baseDatos = "inventario";
$conex = mysqli_connect($host, $usuario, $clave, $baseDatos) or die("Error al conectar a la base de datos");

$Referencia = $_POST['Ref'];
$Color = $_POST['Col'];
$Cantidad = $_POST['Cant'];

if (isset($Referencia) && isset($Color)) {

    $verificar = "SELECT $Color FROM stock_disponible where Referencia='$Referencia'";

    $action = mysqli_query($conex, $verificar);

    $datos = mysqli_fetch_array($action);
    $Col = $datos[$Color];

    $result = $Col-$Cantidad;
    echo $result;
}else{
    echo "Error";
}

<?php
include("include.php");

if (isset($_POST['bColorNuevo']) && strlen($_POST['colorNuevo']) > 1) {
    $colorNuevo = $_POST['colorNuevo'];


    $crearColor = "INSERT INTO colores (Color) values ('$colorNuevo')";
    $sentenciaColor = mysqli_query($conex, $crearColor);

    $crearColumna = "ALTER TABLE stock_disponible ADD $colorNuevo int(5) not null";

    $sentenciaColumna = mysqli_query($conex, $crearColumna);

    if ($sentenciaColor == 1 && $sentenciaColumna == 1) {
        header("location:colores.php?Rta=2");
    } else {
        header("location:colores.php?Rta=1");
    }
}else {
    header("location:colores.php");

}

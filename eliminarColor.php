<?php

include("include.php");


if (isset($_GET['Color'])) {


    $id = $_GET['id'];
    $Color = $_GET['Color'];



    $eliminarColor = "DELETE FROM colores WHERE  Color = '$Color'";

    $confirmaElimina = mysqli_query($conex, $eliminarColor);

    $eliminarColumna = "ALTER TABLE stock_disponible DROP COLUMN $Color";

    $sentenciaColumna = mysqli_query($conex, $eliminarColumna);



    if ($confirmaElimina == 1 && $sentenciaColumna == 1) {
        header("location:colores.php?Rta=6");
    } else {
        header("location:colores.php?Rta=5");
    }
}
<?php

include("include.php");


if (isset($_POST['cambiarColor'])) {


    $id = $_POST['id'];
    $ColorN = $_POST['colorNuevo'];
    $ColorV = $_POST['colorViejo'];



    $modificarColor = "UPDATE colores SET  Color = '$ColorN' WHERE  id = '$id' ";

    $confirmarCambio = mysqli_query($conex, $modificarColor);


    $modificarColumna = "ALTER TABLE stock_disponible CHANGE $ColorV $ColorN int not null";

    $sentenciaColumna = mysqli_query($conex, $modificarColumna);



    if ($confirmarCambio == 1 && $sentenciaColumna == 1) {
        header("location:colores.php?Rta=4");
    } else {
        header("location:colores.php?Rta=3");
    }
}

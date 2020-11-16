<?php

include("include.php");

if (strlen($_POST['Referencia']) >= 1) {
    $ref = $_POST['Referencia'];
    $tipo = $_POST['Tipo'];
    $desc = $_POST['Descripcion'];
    $blanco = (int) $_POST['Blanco'];
    $negro = (int) $_POST['Negro'];
    $azul = (int) $_POST['Azul'];
    $rojo = (int) $_POST['Rojo'];
    $vinotinto = (int) $_POST['Vinotinto'];
    $mostaza = (int) $_POST['Mostaza'];
    $VerdeMilitar = (int) $_POST['VerdeMilitar'];
    $AmarilloNeon = (int) $_POST['AmarilloNeon'];
    $RosaNeon = (int) $_POST['RosaNeon'];
    $NaranjaNeon = (int) $_POST['NaranjaNeon'];

    $VerificarRef = "SELECT Referencia FROM stock_disponible where Referencia = '$ref'";
    $ExisteRef = mysqli_query($conex, $VerificarRef);
    $filaExiste = mysqli_fetch_array($ExisteRef);

    if (EMPTY($filaExiste['Referencia']) == $ref) {

        $resultado = "INSERT INTO stock_disponible (Referencia, Tipo, Descripcion, Blanco, Negro, Azul, Rojo, Vinotinto, Mostaza, VerdeMilitar, AmarilloNeon, RosaNeon, NaranjaNeon) VALUES ('$ref','$tipo','$desc','$blanco','$negro','$azul','$rojo','$vinotinto','$mostaza','$VerdeMilitar', '$AmarilloNeon', '$RosaNeon', '$NaranjaNeon')";

        $accion = mysqli_query($conex, $resultado);
        echo $accion;

        mysqli_close($conex);
    } else {
        echo "2";
    }
}

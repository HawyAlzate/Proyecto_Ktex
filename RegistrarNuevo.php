<?php

include("include.php");

if (strlen($_POST['Referencia']) > 1) {
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
    $PaloDeRosa = (int) $_POST['PaloDeRosa'];
    $Lila = (int) $_POST['Lila'];
    $Otro = (int) $_POST['Otro'];

    $VerificarExistencia = "SELECT Referencia FROM stock_disponible";
    $ExisteRef = mysqli_query($conex, $VerificarExistencia);
    $filaExiste = mysqli_fetch_array($ExisteRef);
    echo $filaExiste['Referencia'];
   
    if ($filaExiste['Referencia'] != $ref ) {

        $resultado = "INSERT INTO stock_disponible (Referencia, Tipo, Descripcion, Blanco, Negro, Azul, Rojo, Vinotinto, Mostaza, VerdeMilitar, PaloDeRosa, Lila, Otro) VALUES ('$ref','$tipo','$desc','$blanco','$negro','$azul','$rojo','$vinotinto','$mostaza','$VerdeMilitar', '$PaloDeRosa', '$Lila', '$Otro')";

        $accion = mysqli_query($conex, $resultado);
        echo $accion;

    } else if ($filaExiste['Referencia'] == $ref) {
        echo "Referencia Existente";
        
        mysqli_close($conex);
    }
} else {
    echo "Referencia sin ingresar";
}

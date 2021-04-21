<?php
include("include.php");


$Referencia = $_POST['Referencia'];

if (isset($_POST['Referencia'])) {

    $EnviarEntrada = "SELECT * FROM stock_disponible WHERE Referencia = '$Referencia'";

    

    $Resultado = mysqli_query($conex, $EnviarEntrada);

    if (mysqli_num_rows($Resultado) > 0) {
        $Ciclo = mysqli_fetch_assoc($Resultado);


        $B = $Ciclo['Blanco'];
        $N = $Ciclo['Negro'];
        $A = $Ciclo['Azul'];
        $R = $Ciclo['Rojo'];
        $V = $Ciclo['Vinotinto'];
        $M = $Ciclo['Mostaza'];
        $VM = $Ciclo['VerdeMilitar'];
        $PR = $Ciclo['PaloDeRosa'];
        $L = $Ciclo['Lila'];
        $O = $Ciclo['Otro'];


        $blanco = $B + (int) $_POST['Blanco'];
        $negro = $N + (int) $_POST['Negro'];
        $azul = $A + (int) $_POST['Azul'];
        $rojo = $R + (int) $_POST['Rojo'];
        $vinotinto = $V + (int) $_POST['Vinotinto'];
        $mostaza = $M + (int) $_POST['Mostaza'];
        $VerdeMilitar = $VM + (int) $_POST['VerdeMilitar'];
        $PaloDeRosa = $PR + (int) $_POST['PaloDeRosa'];
        $Lila = $L + (int) $_POST['Lila'];
        $Otro = $O + (int) $_POST['Otro'];


        $resultado = "UPDATE stock_disponible SET  Blanco='$blanco' , Negro='$negro', Azul='$azul', Rojo='$rojo', Vinotinto='$vinotinto', Mostaza='$mostaza', VerdeMilitar='$VerdeMilitar', PaloDeRosa='$PaloDeRosa', Lila ='$Lila', Otro='$Otro' WHERE Referencia='$Referencia'";

        $accion = mysqli_query($conex, $resultado);
        echo $accion;
    }
} else {
    echo "Sin Datos";
}

<?php
include("include.php");


$Referencia = $_POST['Referencia'];





if (strlen($_POST['Referencia']) >= 1) {

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
        $AN = $Ciclo['AmarilloNeon'];
        $RN = $Ciclo['RosaNeon'];
        $NN = $Ciclo['NaranjaNeon'];


        $blanco = $B + (int) $_POST['Blanco'];
        $negro = $N + (int) $_POST['Negro'];
        $azul = $A + (int) $_POST['Azul'];
        $rojo = $R + (int) $_POST['Rojo'];
        $vinotinto = $V + (int) $_POST['Vinotinto'];
        $mostaza = $M + (int) $_POST['Mostaza'];
        $VerdeMilitar = $VM + (int) $_POST['VerdeMilitar'];
        $AmarilloNeon = $AN + (int) $_POST['AmarilloNeon'];
        $RosaNeon = $RN + (int) $_POST['RosaNeon'];
        $NaranjaNeon = $NN + (int) $_POST['NaranjaNeon'];


        $resultado = "UPDATE stock_disponible SET  Blanco='$blanco' , Negro='$negro', Azul='$azul', Rojo='$rojo', Vinotinto='$vinotinto', Mostaza='$mostaza', VerdeMilitar='$VerdeMilitar', AmarilloNeon='$AmarilloNeon', RosaNeon ='$RosaNeon', NaranjaNeon='$NaranjaNeon' WHERE Referencia='$Referencia'";

        $accion = mysqli_query($conex, $resultado);
        echo $accion;
    }
} else {
    echo "Sin Datos";
}

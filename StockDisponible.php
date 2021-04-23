<?php
include("include.php");


$sumaTotal = "SELECT SUM(Blanco+Negro+Azul+Rojo+Vinotinto+Mostaza+VerdeMilitar+PaloDeRosa+Lila+Otro) as CantidadTotal FROM stock_disponible";
$query = "SELECT * FROM stock_disponible order by Referencia";

function SumaColor($conex, $Color, $color)
{

    $SumarColor = "SELECT  SUM($Color) AS $color from stock_disponible";

    $Resultado = mysqli_query($conex, $SumarColor);
    $ColorTotal = mysqli_fetch_assoc($Resultado);
    return $ColorTotal[$color];
}
$Color1 = SumaColor($conex, $Negro, $negro);
$Color2 = SumaColor($conex, $Blanco, $blanco);
$Color3 = SumaColor($conex, $Rojo, $rojo);
$Color4 = SumaColor($conex, $Azul, $azul);
$Color5 = SumaColor($conex, $Vinotinto, $vinotinto);
$Color6 = SumaColor($conex, $Mostaza, $mostaza);
$Color7 = SumaColor($conex, $VerdeMilitar, $verdemilitar);
$Color8 = SumaColor($conex, $PaloDeRosa, $paloderosa);
$Color9 = SumaColor($conex, $Lila, $lila);
$Color10 = SumaColor($conex, $Otro, $otro);


$salida = "";




if (isset( $_POST['consulta'])) {
    $a = $_POST['consulta'];

    function SumarColor($conex, $Color, $color, $a)
    {

        $SumarColor = "SELECT  SUM($Color) AS $color from stock_disponible where Referencia like '$a%' or Tipo like '%$a%'or Descripcion like '%$a%'";

        $Resultado = mysqli_query($conex, $SumarColor);
        $ColorTotal = mysqli_fetch_assoc($Resultado);
        return $ColorTotal[$color];
    }
    $Color1 = SumarColor($conex, $Negro, $negro, $a);
    $Color2 = SumarColor($conex, $Blanco, $blanco, $a);
    $Color3 = SumarColor($conex, $Rojo, $rojo, $a);
    $Color4 = SumarColor($conex, $Azul, $azul, $a);
    $Color5 = SumarColor($conex, $Vinotinto, $vinotinto, $a);
    $Color6 = SumarColor($conex, $Mostaza, $mostaza, $a);
    $Color7 = SumarColor($conex, $VerdeMilitar, $verdemilitar, $a);
    $Color8 = SumarColor($conex, $PaloDeRosa, $paloderosa, $a);
    $Color9 = SumarColor($conex, $Lila, $lila, $a);
    $Color10 = SumarColor($conex, $Otro, $otro, $a);


    $query = "SELECT * FROM stock_disponible where Referencia like '$a%' or Tipo like '%$a%'or Descripcion like '%$a%'";
    $resulado = mysqli_query($conex, $query);

    if (mysqli_num_rows($resulado) > 0) {

        while ($fila = mysqli_fetch_assoc($resulado)) {

            $suma = $fila['Blanco'] + $fila['Negro'] + $fila['Azul'] + $fila['Rojo'] +  $fila['Vinotinto'] + $fila['Mostaza'] + $fila['VerdeMilitar'] + $fila['PaloDeRosa'] + $fila['Lila'] + $fila['Otro'];
            $salida .= "<tr>
            <td>" . $fila['Referencia'] . "</td>
            <td>" . $fila['Tipo'] . "</td>
            <td>" . $fila['Descripcion'] . "</td>
            <td>" . $fila['Negro'] . "</td>
            <td>" . $fila['Blanco'] . "</td>
            <td>" . $fila['Rojo'] . "</td>
            <td>" . $fila['Azul'] . "</td>
            <td>" . $fila['Vinotinto'] . "</td>
            <td>" . $fila['Mostaza'] . "</td>
            <td>" . $fila['VerdeMilitar'] . "</td>
            <td>" . $fila['PaloDeRosa'] . "</td>
            <td>" . $fila['Lila'] . "</td>
            <td>" . $fila['Otro'] . "</td>
            <td>" . $suma . "</td></tr>";
        }
        
        $sumaTotal = "SELECT SUM(Blanco+Negro+Azul+Rojo+Vinotinto+Mostaza+VerdeMilitar+PaloDeRosa+ Lila+ Otro) as CantidadTotal FROM stock_disponible where Referencia like '$a%' or Tipo like '%$a%'or Descripcion like '%$a%'";
        $datosTotal = mysqli_query($conex, $sumaTotal);
        $DatoTotal = mysqli_fetch_array($datosTotal);

        $salida .= "<tr>
        <th colspan='3'>Cantidad Total</th>
        <th>" . $Color1 . "</th>
        <th>" . $Color2 . "</th>
        <th>" . $Color3 . "</th>
        <th>" . $Color4 . "</th>
        <th>" . $Color5 . "</th>
        <th>" . $Color6 . "</th>
        <th>" . $Color7 . "</th>
        <th>" . $Color8 . "</th>
        <th>" . $Color9 . "</th>
        <th>" . $Color10 . "</th>
        <th style='color:red; font-size:2em'>" . $DatoTotal['CantidadTotal'] . "</th></tr></tbody>";
    }
    echo $salida;
}



$resulado = mysqli_query($conex, $query);

if (mysqli_num_rows($resulado) > 0) {

    while ($fila = mysqli_fetch_assoc($resulado)) {

        $suma = $fila['Blanco'] + $fila['Negro'] + $fila['Azul'] + $fila['Rojo'] +  $fila['Vinotinto'] + $fila['Mostaza'] + $fila['VerdeMilitar'] + $fila['PaloDeRosa'] + $fila['Lila'] + $fila['Otro'];
        $salida .= "<tr>
        <td>" . $fila['Referencia'] . "</td>
        <td>" . $fila['Tipo'] . "</td>
        <td>" . $fila['Descripcion'] . "</td>
        <td>" . $fila['Negro'] . "</td>
        <td>" . $fila['Blanco'] . "</td>
        <td>" . $fila['Rojo'] . "</td>
        <td>" . $fila['Azul'] . "</td>
        <td>" . $fila['Vinotinto'] . "</td>
        <td>" . $fila['Mostaza'] . "</td>
        <td>" . $fila['VerdeMilitar'] . "</td>
        <td>" . $fila['PaloDeRosa'] . "</td>
        <td>" . $fila['Lila'] . "</td>
        <td>" . $fila['Otro'] . "</td>
        <td>" . $suma . "</td>
        </tr>
        ";
    }

    $datosTotal = mysqli_query($conex, $sumaTotal);
    $DatoTotal = mysqli_fetch_array($datosTotal);
    
    
    $salida .= "<tr>
    <th colspan='3'>Cantidad Total</th>
    <th>" . $Color1 . "</th>
        <th>" . $Color2 . "</th>
        <th>" . $Color3 . "</th>
        <th>" . $Color4 . "</th>
        <th>" . $Color5 . "</th>
        <th>" . $Color6 . "</th>
        <th>" . $Color7 . "</th>
        <th>" . $Color8 . "</th>
        <th>" . $Color9 . "</th>
        <th>" . $Color10 . "</th>
    <th style='color:red; font-size:2em'>" . $DatoTotal['CantidadTotal'] . "</th></tr></tbody>";
} else {
    $salida .= "<tr><td style='color:red'>No hay datos</td></tr></tbody>";
}

echo $salida;
mysqli_close($conex);

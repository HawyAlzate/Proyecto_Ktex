<?php
$mysqli = mysqli_connect("localhost", "root", "1234", "inventario");

$query = "SELECT * FROM stock_disponible order by Referencia";
$Suma_B = "SELECT  SUM(Blanco) AS blanco from stock_disponible";
$Suma_N = "SELECT  SUM(Negro) AS negro from stock_disponible";
$Suma_A = "SELECT  SUM(Azul) AS azul from stock_disponible";
$Suma_R = "SELECT  SUM(Rojo) AS rojo from stock_disponible";
$Suma_V = "SELECT  SUM(Vinotinto) AS vinotinto from stock_disponible";
$Suma_M = "SELECT  SUM(Mostaza) AS mostaza from stock_disponible";
$Suma_VM = "SELECT  SUM(VerdeMilitar) AS verdemilitar from stock_disponible";
$Suma_AN = "SELECT  SUM(AmarilloNeon) AS amarilloneon from stock_disponible";
$Suma_RN = "SELECT  SUM(RosaNeon) AS rosaneon from stock_disponible";
$Suma_NN = "SELECT  SUM(NaranjaNeon) AS naranjaneon from stock_disponible";


$Suma_b = mysqli_query($mysqli, $Suma_B);
$suma_b = mysqli_fetch_array($Suma_b);

$Suma_n = mysqli_query($mysqli, $Suma_N);
$suma_n = mysqli_fetch_assoc($Suma_n);

$Suma_a = mysqli_query($mysqli, $Suma_A);
$suma_a = mysqli_fetch_assoc($Suma_a);

$Suma_r = mysqli_query($mysqli, $Suma_R);
$suma_r = mysqli_fetch_assoc($Suma_r);

$Suma_v = mysqli_query($mysqli, $Suma_V);
$suma_v = mysqli_fetch_assoc($Suma_v);

$Suma_m = mysqli_query($mysqli, $Suma_M);
$suma_m = mysqli_fetch_assoc($Suma_m);

$Suma_vm = mysqli_query($mysqli, $Suma_VM);
$suma_vm = mysqli_fetch_assoc($Suma_vm);

$Suma_am = mysqli_query($mysqli, $Suma_AN);
$suma_am = mysqli_fetch_assoc($Suma_am);

$Suma_rn = mysqli_query($mysqli, $Suma_RN);
$suma_rn = mysqli_fetch_assoc($Suma_rn);

$Suma_nn = mysqli_query($mysqli, $Suma_NN);
$suma_nn = mysqli_fetch_assoc($Suma_nn);

$salida = "";


$sumaTotal = "SELECT SUM(Blanco+Negro+Azul+Rojo+Vinotinto+Mostaza+VerdeMilitar+AmarilloNeon+RosaNeon+NaranjaNeon) as CantidadParcial FROM stock_disponible";

$datosTotal = mysqli_query($mysqli, $sumaTotal);
$filaTotal = mysqli_fetch_array($datosTotal);




if (isset($_POST['consulta'])) {
    $a = $_POST['consulta'];

    $query = "SELECT * FROM stock_disponible where  Referencia like '$a%' or Tipo like '%$a%'or Descripcion like '%$a%'";

    $sumaTotal = "SELECT SUM(Blanco+Negro+Azul+Rojo+Vinotinto+Mostaza+VerdeMilitar+AmarilloNeon+ RosaNeon+ NaranjaNeon) as CantidadParcial FROM stock_disponible WHERE Referencia like '%$a%'or Tipo like '%$a%'or Descripcion like '%$a%'";

    $datosTotal = mysqli_query($mysqli, $sumaTotal);
    $filaTotal = mysqli_fetch_array($datosTotal);
}
$resulado = mysqli_query($mysqli, $query);


if (mysqli_num_rows($resulado) > 0) {

    while ($fila = mysqli_fetch_assoc($resulado)) {

        $suma = $fila['Blanco'] + $fila['Negro'] + $fila['Azul'] + $fila['Rojo'] +  $fila['Vinotinto'] + $fila['Mostaza'] + $fila['VerdeMilitar'] + $fila['AmarilloNeon'] + $fila['RosaNeon'] + $fila['NaranjaNeon'];
        $salida .= "<tr>
        <td>" . $fila['Referencia'] . "</td>
        <td>" . $fila['Tipo'] . "</td>
        <td>" . $fila['Descripcion'] . "</td>
        <td>" . $fila['Blanco'] . "</td>
        <td>" . $fila['Negro'] . "</td>
        <td>" . $fila['Azul'] . "</td>
        <td>" . $fila['Rojo'] . "</td>
        <td>" . $fila['Vinotinto'] . "</td>
        <td>" . $fila['Mostaza'] . "</td>
        <td>" . $fila['VerdeMilitar'] . "</td>
        <td>" . $fila['AmarilloNeon'] . "</td>
        <td>" . $fila['RosaNeon'] . "</td>
        <td>" . $fila['NaranjaNeon'] . "</td>
        <td>" . $suma . "</td>
        </tr>
        ";
    }

    $salida .= "<tr>
    <th colspan='3'></th>
    <th>" . $suma_b['blanco'] . "</th>
    <th>" . $suma_n['negro'] . "</th>
    <th>" . $suma_a['azul'] . "</th>
    <th>" . $suma_r['rojo'] . "</th>
    <th>" . $suma_v['vinotinto'] . "</th>
    <th>" . $suma_m['mostaza'] . "</th>
    <th>" . $suma_vm['verdemilitar'] . "</th>
    <th>" . $suma_am['amarilloneon'] . "</th>
    <th>" . $suma_rn['rosaneon'] . "</th>
    <th>" . $suma_nn['naranjaneon'] . "</th>
    <td style='color:red; font-size:2em'>" . $filaTotal ['CantidadParcial'] . "</td></tr></tbody>/table>";
} else {
    $salida .= "<tr><td style='color:red'>No hay datos</td></tr></tbody>/table>";
}

echo $salida;
mysqli_close($mysqli);

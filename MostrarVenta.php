
<?php

error_reporting(0);
include("include.php");



$salida = "";
$query = "";

if (isset($_POST["Nombre"])) {
    $nombre = $_POST["Nombre"];
    $fecha = $_POST['Fecha'];

    $sumaTotal = "SELECT SUM(Cantidad * Precio) as Total FROM ventaclientes WHERE NombreCliente = '$nombre'and Fecha = '$fecha' ";

    $datosTotal = mysqli_query($conex, $sumaTotal);
    $filaTotal = mysqli_fetch_array($datosTotal);
};







if (isset($_POST['Nombre'])) {
    $nombre = $_POST['Nombre'];
    $Fecha = $_POST['Fecha'];
    $query = "SELECT * FROM ventaclientes where NombreCliente like '%$nombre%'AND Fecha = '$Fecha'";
}
$resultado = mysqli_query($conex, $query);
if (mysqli_num_rows($resultado) > 0) {


    $salida .= "
<tr>
<th>Referencia</th>
<th>Tipo</th>
<th>Color</th>
<th>Cantidad</th>
<th>Detalle</th>
<th>Precio</th>
<th>Subtotal</th>
<th>Acciónr</th>
</tr>
<tr><td></td></tr></thead>";

    while ($fila = mysqli_fetch_assoc($resultado)) {

        $salida .= "<tbody>
        <tr>
        <th>" . $fila['Referencia'] . "</th>
        <th>" . $fila['Tipo'] . "</th>
        <th>" . $fila['Color'] . "</th>
        <th>" . $fila['Cantidad'] . "</th>
        <th>" . $fila['Detalle'] . "</th>
        <th>" . $fila['Precio'] . "</th>
        <th>" . $fila['Cantidad'] * $fila['Precio'] . "</th>
        <th><a href='ModificarVenta.php?id=".$fila['id']."&Nombre=".$nombre."&Referencia=" . $fila['Referencia'] . "&Tipo=".$fila['Tipo']."&Color=" . $fila['Color'] . "&Cantidad=".$fila['Cantidad']."&Detalle=".$fila['Detalle']."&Precio=".$fila['Precio']."' class='EditarVenta'><i class='fa fa-pencil' aria-hidden='true'></i>    </a>  <a href='EliminarVenta.php?id=".$fila['id']."&Nombre=".$nombre."' class='EliminarVenta' >    <i class='fa fa-trash' aria-hidden='true' id='aEliminarVenta'></i></a></th></tr>";
    }

    $salida .= "
    <tr><td></td></tr>
    <tr>
    <td colspan='3'></td>
    <th colspan='3'class='thtotal'>TOTAL A PAGAR:</th>
    <th colspan='2'class='thtotal'>$ " . (int) $filaTotal["Total"] . ",00</th></tr></tbody></table>";
} else {
    $salida .= "<tr><td style='color:red'>No hay datos</td></tr></tbody></table>";
}


echo $salida;
mysqli_close($conex);





?><script type="text/javascript">

var aEliminarVenta = document.getElementById("aEliminarVenta");

aEliminarVenta.addEventListener("onclick", confirmarEliminar())

function confirmarEliminar(){
    
    var confirmaEliminar = confirm("¿Seguro que desea eliminar este registro?")
    if(confirmarEliminar == true){


$.ajax
    }
}



</script>
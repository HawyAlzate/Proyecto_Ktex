<?php 
$mysqli = mysqli_connect("localhost","root","1234","inventario");

$query = "SELECT * FROM clientes_mayoristas ORDER BY NombreCliente";
$salida = "";
if(isset($_POST['consulta'])){
    $a = $_POST['consulta'];
    $query = "SELECT * FROM clientes_mayoristas where  NombreCliente like '%$a%' or Ciudad like '%$a%'or Tipo like '%$a%' or Cedula like '%$a%'";
}
$resulado = mysqli_query($mysqli, $query);
if(mysqli_num_rows($resulado) > 0){
    $salida.= "<table>
    <tr>
    <th>Nombre</th>
    <th>Cédula</th>
    <th>Teléfono</th>
    <th>Dirección</th> 
    <th>Ciudad</th>
    <th>Tipo</th>
    <th>Realizar Venta</th>
    <th colspan='2'>Acción</th>
    </tr>";

    while($fila= mysqli_fetch_assoc($resulado)){

        $salida.= "<tr>
        <td>".$fila['NombreCliente']."</td>
        <td>".$fila['Cedula']."</td>
        <td>".$fila['Telefono']."</td>
        <td>".$fila['Direccion']."</td>
        <td>".$fila['Ciudad']."</td>
        <td>".$fila['Tipo']."</td>
        <td><a href='RegistrarVentaF.php?Nombre=".$fila['NombreCliente']."&Cedula=".$fila['Cedula']."' class='a_eliminar'>  <i class='fa fa-cart-plus' aria-hidden='true'></i></a></td>
        <td><a  href='ModificarCliente.php?Nombre=".$fila['NombreCliente']."&Cedula=".$fila['Cedula']."&Telefono=".$fila['Telefono']."&Direccion=".$fila['Direccion']."&Ciudad=".$fila['Ciudad']."&Tipo=".$fila['Tipo']."' class='a_modificar'><i class='fa fa-pencil' aria-hidden='true'></i>  </a><a href='EliminarCliente.php?Nombre=".$fila['NombreCliente']."&Cedula=".$fila['Cedula']."' class='a_eliminar'>  <i class='fa fa-trash' aria-hidden='true'></i></a></td>
        </tr>
        ";
    }
 $salida.= "</table>";
}else{
$salida.= "No hay datos";
}
echo $salida;
mysqli_close($mysqli);

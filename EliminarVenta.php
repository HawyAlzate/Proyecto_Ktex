<?php
include("include.php");
if(isset($_GET['Nombre'])){

$id = $_GET['id'];
$Nombre= $_GET['Nombre'];
$Eliminar = "DELETE  FROM ventaclientes  WHERE id='$id'";
$Elimina = mysqli_query($conex, $Eliminar);
mysqli_close($conex);
header("location:RegistrarVentaF.php?Nombre=$Nombre");
}


?>
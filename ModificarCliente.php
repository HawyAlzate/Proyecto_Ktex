<?php
error_reporting(0);
include("datos.php");
include("conex.php");

?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="BuscarCliente.css">

    <link rel="stylesheet" href="menu.css">
    <link rel="stylesheet" href="footer.css">

    <script src="https://kit.fontawesome.com/fa3825e370.js" crossorigin="anonymous"></script>
    <script src="jquery-3.5.1.min.js"></script>
    <title>Clientes</title>
</head>

<body>
    <nav>
        <img src="imagenes/Ktex.jpg" alt="">
        <ul>
            <li><a href="Entradas.php" target="_blank" class="menu">Agregar <i class="fas fa-plus"> </i></a> </li>
            <li><a href="StockDisponibleF.php" target="_blank" class="menu">Inventario <i class="fas fa-cubes"></i></a></li>

            <li><a href="Ventas.php" target="_blank" class="menu">Ventas <i class="fas fa-cart-arrow-down"> </i> </a> </li>
        </ul>
    </nav>
    <h1>Modificar datos del Clente:</h1>
    <div>
        <form action="" method="post">
            <table id="datos">
            
                <tr>
                    <th>Nombre</th>
                    <th>Cédula</th>
                    <th>Teléfono</th>
                    <th>Dirección</th>
                    <th>Ciudad</th>
                    <th>Tipo</th>
                </tr>
                <tr>
                    <?php
                    include("include.php");
                    $NombreCliente = $_GET['Nombre'];

                    $Consulta = "SELECT * FROM clientes_mayoristas WHERE NombreCliente = '$NombreCliente'";
                    $TraerDatos = mysqli_query($conex, $Consulta);
                    if (mysqli_num_rows($TraerDatos) > 0) {
                        $fila = mysqli_fetch_assoc($TraerDatos);
                    }
                    ?>
                    <th><input type="text" name="Nombre" value="<?php echo $fila['NombreCliente'] ?>"></th>
                    <th><input type="text" name="Cedula" value="<?php echo $fila['Cedula'] ?>"></th>
                    <th><input type="text" name="Telefono" value="<?php echo $fila['Telefono'] ?>"></th>
                    <th><input type="text" name="Direccion" value="<?php echo $fila['Direccion'] ?>"></th>
                    <th><input type="text" name="Ciudad" value="<?php echo $fila['Ciudad'] ?>"></th>
                    <th><label><select name="Tipo">
                                <option value="Mayorista">Mayorista</option>
                                <option value="Minorista">Minorista</option></label></th>
                </tr>



            </table>
            <input type="submit" name="modificar" value="Confirmar" class="InputModificar">
            <input type="submit" name="cancelar" value="Cancelar">

        </form>
        <?php
        if (isset($_POST['modificar'])) {

            $NombreCliente = $_POST['Nombre'];
            echo $NombreCliente;
            $Cedula = $_POST['Cedula'];
            $Telefono = $_POST['Telefono'];
            $Direccion = $_POST['Direccion'];
            $Ciudad = $_POST['Ciudad'];
            $Tipo = $_POST['Tipo'];

            $modificar = "UPDATE  clientes_mayoristas SET  NombreCliente = '$NombreCliente', Cedula = '$Cedula', Telefono = '$Telefono', Direccion = '$Direccion', Ciudad = '$Ciudad', Tipo = '$Tipo' WHERE NombreCliente = '$NombreCliente'";
            $consulta = mysqli_query($conex, $modificar);
            header("location:BuscarClientes.php");
        } else if (isset($_POST['cancelar'])) {
            header("location:BuscarClientes.php");
        }

        ?>
    </div>
    <?php
    include("footer.php") ?>
</body>

</html>
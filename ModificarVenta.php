<?php
include("include.php");
$colores = ["Blanco", "Negro", "Azul", "Rojo", "Vinotinto", "Mostaza", "VerdeMilitar", "AmarilloNeon", "RosaNeon", "NaranjaNeon"];
$tipo = ["Body", "Blusa", "Vestido", "Falda"];
date_default_timezone_set('America/Bogota');
$fecha = date("Y-m-d")
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="menu.css">
    <link rel="stylesheet" href="ventas.css">
    <link rel="stylesheet" href="footer.css">
    <script src="https://kit.fontawesome.com/fa3825e370.js" crossorigin="anonymous"></script>


    <script src="jquery-3.5.1.min.js"></script>
    <script src="BuscarClienteParaVenta.js"></script>
    <title>Ventas K-tex</title>
</head>

<body>

    <nav>
        <img src="imagenes/Ktex.jpg" alt="">
        <ul>
            <li><a href="Entradas.php" target="_blank" class="menu">Agregar <i class="fas fa-plus"> </i></a> </li>
            <li><a href="StockDisponibleF.php" target="_blank" class="menu">Inventario <i class="fas fa-cubes"></i></a></li>
            <li><a href="BuscarClientes.php" target="_blank" class="menu">Clientes <i class="fas fa-user-tie"></i></a></li>
        </ul>
    </nav>
    <h1>Ventas</h1>
    <section>

        <div>
            <h2 class="h2carrito">Modificar compra <i class="fas fa-cart-plus"></i></h2>
            <div>

                <form action="" method="$_POST">
                    <table>
                        <tr>
                            <th>Referencia</th>
                            <th>Tipo</th>
                            <th>Color</th>
                            <th>Cantidad</th>
                            <th>Detalle</th>
                            <th>Precio</th>
                        </tr>
                        <tr>
                            <td colspan="6"><br></td>
                        </tr>
                        <tr>
                            <?php
                            include("include.php");
                            
                                $id = $_GET['id'];


                                $Consulta = "SELECT * FROM ventaclientes WHERE id = '$id'";
                                $TraerDatos = mysqli_query($conex, $Consulta);
                                if (mysqli_num_rows($TraerDatos) > 0) {
                                    $fila = mysqli_fetch_assoc($TraerDatos);
                                }
                            
                            ?>
                            <th hidden><input type="text" name="id" value="<?php echo $fila['id'] ?>"></th>
                            <th><input type="text" name="Referencia" value="<?php echo $fila['Referencia'] ?>"></th>
                            <th><input type="text" name="Tipo" value="<?php echo $fila['Tipo'] ?>"></th>
                            <td><select name="Color" id="Col">
                                    <?php
                                    for ($i = 0; $i <= 9; $i++) {
                                        echo "<option value='$colores[$i]'>$colores[$i]</option>";
                                    }
                                    ?>
                            </td>
                            <th><input type="number" name="Cantidad" value="<?php echo $fila['Cantidad'] ?>"></th>
                            <th><input type="text" name="Detalle" value="<?php echo $fila['Detalle'] ?>"></th>
                            <th><input type="text" name="Precio" value="<?php echo $fila['Precio'] ?>"></th>
                        </tr>
                    </table>
                    <div class="divSubmit">
                        <button class="buttonAgregar" name="modificar">Modificar<button>
                        <input type="submit" class="buttonAgregar" value="Cancelar" name="cancelar">
                    </div>
                </form>

            </div>

        </div>

    </section>
    <?php

    if (isset($_POST['modificar'])) {
        $id = $_POST['id'];
        $Referencia = $_POST['Referencia'];
        $Tipo = $_POST['Tipo'];
        $Color = $_POST['Color'];
        $Cantidad = $_POST['Cantidad'];
        $Detalle = $_POST['Detalle'];
        $Precio = $_POST['Precio'];

        echo $id;
        $modificar = "UPDATE  ventaclientes  SET   Referencia = '$Referencia', Tipo = '$Tipo', $Color = '$Color', Cantidad = '$Cantidad', Detalle = '$Detalle', Precio = '$Precio' WHERE id = '$id'";

        $consulta = mysqli_query($conex, $modificar);
    } else if (isset($_POST['cancelar'])) {
        header("location:RegistrarVentaF.php");
    } else {
        echo "no";
        
       /* header("location:RegistrarVentaF.php?Nombre=".$_GET['Nombre']."");*/
    }

    include("footer.php");
    ?>
</body>

</html>
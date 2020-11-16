<?php
error_reporting(0);
include("include.php");

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
    <h1>Vas a eliminar a::</h1>
    <div>
        <h2><?php echo $_GET['Nombre'] ?></h2>
        <form action="" method="POST">
        <input type="submit" name="eliminar" value="Eliminar">
        <input type="submit" name="cancelar" value="Cancelar"></form>
    </div>
    <?php
    if (isset($_POST['eliminar'])) {
        $Nombre = $_GET["Nombre"];
        $Cedula = $_GET['Cedula'];
        $eliminar = "DELETE FROM clientes_mayoristas WHERE  NombreCliente = '$Nombre' and Cedula = '$Cedula'";
        $consulta = mysqli_query($conex, $eliminar);
        header("location:BuscarClientes.php");

    }else if (isset($_POST['cancelar'])){
        header("location:BuscarClientes.php");
    }

    ?>
    <?php
    include("footer.php") ?>
</body>

</html>
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
    <script src="BuscarCliente.js"></script>
    <title>Clientes</title>
</head>

<body>
    <nav>
        <img src="imagenes/Ktex.jpg" alt="">
        <ul>
            <li><a href="Entradas.php" target="_blank" class="menu">Agregar <i class="fas fa-plus"> </i></a> </li>
            <li><a href="StockDisponibleF.php" target="_blank" class="menu">Inventario <i class="fas fa-cubes"></i></a></li>

            <li><a href="RegistrarVentaF.php" target="_blank" class="menu">Ventas <i class="fas fa-cart-arrow-down"> </i> </a> </li>
        </ul>
    </nav>
    <h1>Listado de Clientes</h1>
    <div>
        <form method="post">
            <p class="pBusqueda">Buscar cliente por:</p>
            <a href="RegistrarCliente.php" target="_blank" rel="noopener noreferrer" class="a_AgregarC">Agregar Cliente <i class="fas fa-plus"> </i></a><br /><br />
            <input type="text" id="buscar"" />
        </form>
        <br><br><br>

        <table id="datos">




            </table>

    </div>
    <?php
    include("footer.php") ?>
</body>

</html>
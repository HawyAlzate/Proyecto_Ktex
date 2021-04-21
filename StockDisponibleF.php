<?php
include("colores.php")
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="StockDisponible.css">
    <link rel="stylesheet" href="menu.css">
    <link rel="stylesheet" href="footer.css">
    <script src="jquery-3.5.1.min.js"></script>
    <script src="https://kit.fontawesome.com/fa3825e370.js" crossorigin="anonymous"></script>
    <title>Inventario K-tex</title>
</head>

<body>

    <h1>INVENTARIO EN BODEGA</h1>
    <div class="flexContainer">

        <nav>
            <img src="imagenes/Ktex.jpg" alt="">
            <ul>
                <li><a href="Entradas.php" target="_blank" class="link">Agregar <i class="fas fa-plus"> </i> </a> </li>
                <li><a href="RegistrarVentaF.php" target="_blank" class="link">Ventas <i class="fas fa-cart-arrow-down"> </i> </a> </li>
                <li><a href="BuscarClientes.php" target="_blank" class="link">Clientes <i class="fas fa-user-tie"></i></a></li>
            </ul>
        </nav>
        <section>
            <form method="post">
                <h2>Buscar producto:</h2>
                <input type="text" id="buscar">
            </form>
            <table class="table" id="body">
                <tr>
                    <th rowspan="2">Referencia</th>
                    <th rowspan="2">Diseño</th>
                    <th rowspan="2">Descripción</th>

                    <th colspan="10">Color</th>
                    <th rowspan="2">Cantidad Parcial</th>
                </tr>
                <tr>
                    <?php foreach ($colores as $color) {
                        echo "<th>" . $color . "</th>";
                    }
                    ?>
                </tr>
                <tbody id="inventario">

                </table>
        </section>
    </div>
    <script src="StockDisponible.js"></script>
 <?php include("footer.php")?>
</body>

</html>
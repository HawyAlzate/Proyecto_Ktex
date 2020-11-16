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
    <nav>
        <img src="imagenes/Ktex.jpg" alt="">
        <ul>
            <li><a href="Entradas.php" target="_blank" class="menu">Agregar <i class="fas fa-plus"> </i> </a> </li>
            <li><a href="RegistrarVentaF.php" target="_blank" class="menu">Ventas <i class="fas fa-cart-arrow-down"> </i> </a> </li>
            <li><a href="BuscarClientes.php" target="_blank" class="menu">Clientes <i class="fas fa-user-tie"></i></a></li>
        </ul>
    </nav>
    <div>
        <h1>Inventario Bodega</h1>
    </div>
    <section>
        <article class="articleAll">

            <div class="divBody">

                

                <form method="post">
                    <h2>Buscar producto:</h2>
                    <input type="text" id="buscar"" />
                </form>
                <br><br><br>
				<table class=" table" id="body">
                    <tr>
                        <th rowspan="2">Referencia</th>
                        <th rowspan="2">Tipo</th>
                        <th rowspan="2">Descripción</th>

                        <th colspan="10">Color</th>
                        <th rowspan="2">Cantidad Parcial</th>
                    </tr>
                    <tr>
                        <th>Blanco</th>
                        <th>Negro</th>
                        <th>Azul</th>
                        <th>Rojo</th>
                        <th>Vinotinto</th>
                        <th>Mostaza</th>
                        <th>Verde Militar</th>
                        <th>Amarillo Neón</th>
                        <th>Rosa Neón</th>                        
                        <th>Naranja Neón</th>
                    </tr>
                    <tbody id="inventario">
        </article>
    </section>
    <script src="StockDisponible.js"></script>

</body>

</html>
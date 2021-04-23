<?php/*
include("include.php");
include("colores.php");
error_reporting(0);
*/
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <script src="jquery-3.5.1.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="Entradas.css">
    <link rel="stylesheet" href="menu.css">
    <link rel="stylesheet" href="footer.css">
    <script src="https://kit.fontawesome.com/fa3825e370.js" crossorigin="anonymous"></script>
    <!--<script src="Entradas.js"></script>-->
    <title>Entradas Ktex</title>
</head>

<body>


    <h1>REGISTRO DE INVENTARIO</h1>

    <div class="divContainerAll">

        <nav>

            <img src="imagenes/Ktex.jpg" alt="logo">
            <ul>
                <li><a href="StockDisponibleF.php" target="_blank" class="link">Inventario  <i class="fas fa-cubes"></i></a> </li>
                <li><a href="RegistrarVentaF.php" target="_blank" class="link">Ventas  <i class="fas fa-cart-arrow-down"></i></a></li>
                <li><a href="BuscarClientes.php" target="_blank" class="link">Clientes  <i class="fas fa-user-tie"></i></a></li>
                <li><a href="colores.php" target="_blank" class="link">Colores  <i class="fa fa-eyedropper" aria-hidden="true"></i></a></li>
            </ul>
        </nav>

        <div class="divContainer">



            <section>

                

                <h2>Ingresar a Bodega</h2>
                <form action="" method="post" id="FormEntradaC">
                    <table>
                        <tr>
                            <th>Referencia</th>

                            <?php

                            foreach ($colores as $color) {
                                echo "<th>" . $color . "</th>";
                            }
                            ?>
                        </tr>
                        <tr>
                            <td>
                                <input type="text" name="Referencia" id="Ref">
                            </td>

                            <?php

                            foreach ($colores as $color) {
                                echo "<td><input type= 'text' name=" . str_replace(' ', '', $color) . " id=" . str_replace(' ', '', $color) . " id=" . str_replace(' ', '', $color) . "></td>";
                            }
                            ?>

                        </tr>
                    </table>
                    <div class="divSubmit">
                        <input type="submit" value="Agregar Cantidad" name="agregarC" id="AgregarEntrada" class="Boton">
                        <input type="submit" value="Eliminar Cantidad" name="eliminarC" id="EliminarEntrada" class="Boton">
                    </div>
                </form>
                <div id="alerta"></div>

            </section>

            <section>
                <h2>Registrar Nueva Referencia</h2>
                <form action="" method="post" id="FormAgregarN">
                    <table>
                        <tr>
                            <th>Referencia</th>
                            <th style="width:70px">Diseño</th>
                            <th>Descripción</th>
                            <?php foreach ($colores as $color) {
                                echo "<th>" . $color . "</th>";
                            }
                            ?>
                        </tr>
                        <tr>
                            <td>
                                <input type="text" name="Referencia" require>
                            </td>
                            <td style="width:70px">
                                <select name="Tipo">
                                    <option value="Body">Body</option>
                                    <option value="Blusa">Blusa</option>
                                    <option value="Vestido">Vestido</option>
                                    <option value="Falda">Falda</option>
                            </td>
                            <td>
                                <input type="text" name="Descripcion">
                            </td>
                            <?php

                            foreach ($colores as $color) {
                                echo "<td><input type= 'text' name=" . str_replace(' ', '', $color) . " id=" . str_replace(' ', '', $color) . "></td>";
                            }
                            ?>
                        </tr>
                    </table>
                    <input type="submit" value="Agregar Referencia" name="agregarN" id="AgregarN" class="Boton">
                </form>
                <div id="Anuncio">

                </div>


            </section>
        </div>
    </div>
    <?php include("footer.php") ?>
</body>

</html>
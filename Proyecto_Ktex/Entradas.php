<?php
include("include.php");
error_reporting(0);
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <script src="jquery-3.5.1.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="Entradas.css">
    <link rel="stylesheet" href="bootstrap-3.4.1-dist/css/bootstrap-theme.css">
    <link rel="stylesheet" href="bootstrap-3.4.1-dist/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="menu.css">
    <link rel="stylesheet" href="footer.css">
    <script src="https://kit.fontawesome.com/fa3825e370.js" crossorigin="anonymous"></script>
    <script src="Entradas.js"></script>
    <title>Entradas K-tex</title>
</head>

<body>
    <nav>
        <img src="imagenes/Ktex.jpg" alt="">
        <ul>
            <li><a href="StockDisponibleF.php" target="_blank" class="menu">Inventario <i class="fas fa-cubes"></i></a> </li>
            <li><a href="RegistrarVentaF.php" target="_blank" class="menu">Ventas <i class="fas fa-cart-arrow-down"></i></a></li>
            <li><a href="BuscarClientes.php" target="_blank" class="menu">Clientes <i class="fas fa-user-tie"></i></a></li>
        </ul>
    </nav>

    <h1 class="h1">Ingreso a Bodega</h1>

    <div class="div_all">
        <div>
            <section>
                <h2>Agregar a inventario</h2>
                <form action="" method="post" id="FormEntradasC">
                    <table>
                        <tr>
                            <th>Referencia</th>
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
                        <tr>
                            <th>
                                <input type="text" name="Referencia" id="Ref">
                            </th>
                            <th>
                                <input type="text" name="Blanco" id="Blanco">
                            </th>
                            <th>
                                <input type="text" name="Negro" id="Negro">
                            </th>
                            <th>
                                <input type="text" name="Azul" id="Azul">
                            </th>
                            <th>
                                <input type="text" name="Rojo" id="Rojo">
                            </th>
                            <th>
                                <input type="text" name="Vinotinto" id="Vinotinto">
                            </th>
                            <th>
                                <input type="text" name="Mostaza" id="Mostaza">
                            </th>
                            <th>
                                <input type="text" name="VerdeMilitar" id="VerdeMilitar">
                            </th>
                            <th>
                                <input type="text" name="AmarilloNeon" id="AmarilloNeon">
                            </th>
                            <th>
                                <input type="text" name="RosaNeon" id="RosaNeon">
                            </th>
                            <th>
                                <input type="text" name="NaranjaNeon" id="NaranjaNeon">
                            </th>
                        </tr>
                    </table>
                    <input type="submit" value="Agregar" name="agregarC" id="AgregarC">
                </form>
                <div id="alerta">

        </div>
            </section>

        </div>

        <div class="nuevo">
            <section class="Nuevo">
                <h2>Nueva Referencia</h2>
                <form action="" method="post" id="FormAgregarN">
                    <table>
                        <tr>
                            <th>Referencia</th>
                            <th>Tipo</th>
                            <th>Descripción</th>
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
                        <tr>
                            <th>
                                <input type="text" name="Referencia" require>
                            </th>
                            <th>
                                <select name="Tipo">
                                    <option value="Body">Body</option>
                                    <option value="Blusa">Blusa</option>
                                    <option value="Vestido">Vestido</option>
                                    <option value="Falda">Falda</option>
                            </th>
                            <th>
                                <input type="text" name="Descripcion">
                            </th>
                            <th>
                                <input type="text" name="Blanco" id="Blanco">
                            </th>
                            <th>
                                <input type="text" name="Negro" id="Negro">
                            </th>
                            <th>
                                <input type="text" name="Azul" id="Azul">
                            </th>
                            <th>
                                <input type="text" name="Rojo" id="Rojo">
                            </th>
                            <th>
                                <input type="text" name="Vinotinto" id="Vinotinto">
                            </th>
                            <th>
                                <input type="text" name="Mostaza" id="Mostaza">
                            </th>
                            <th>
                                <input type="text" name="VerdeMilitar" id="VerdeMilitar">
                            </th>
                            <th>
                                <input type="text" name="AmarilloNeon" id="AmarilloNeon">
                            </th>
                            <th>
                                <input type="text" name="RosaNeon" id="RosaNeon">
                            </th>
                            <th>
                                <input type="text" name="NaranjaNeon" id="NaranjaNeon">
                            </th>
                        </tr>
                    </table>
                    <input type="submit" value="Agregar" name="agregarN" id="AgregarN">
                </form><div id="Anuncio">

</div>
                
            </section>
        </div>
    </div>
    <?php include("footer.php") ?>
</body>

</html>
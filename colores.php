<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script src="jquery-3.5.1.min.js"></script>
    <script src="https://kit.fontawesome.com/fa3825e370.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="Colores.css">
    <link rel="stylesheet" href="menu.css">
    <title>Colores</title>
</head>

<body>


    <h1>GESTIÓN DE COLORES</h1>
    <div class="divAll">
        <nav>

            <img src="imagenes/Ktex.jpg" alt="logo">
            <ul>
                <li><a href="StockDisponibleF.php" target="_blank" class="link">Inventario <i class="fas fa-cubes"></i></a> </li>
                <li><a href="RegistrarVentaF.php" target="_blank" class="link">Ventas <i class="fas fa-cart-arrow-down"></i></a></li>
                <li><a href="BuscarClientes.php" target="_blank" class="link">Clientes <i class="fas fa-user-tie"></i></a></li>
                <li><a href="Entradas.php" target="_blank" class="link">Agregar <i class="fas fa-plus"> </i></a> </li>
            </ul>
        </nav>
        <form action="crearColor.php" method="post">
            <table>
                <thead>
                    <tr>
                        <th>
                            COLORES
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include("include.php");

                    $traerColores = "SELECT * FROM colores";
                    $datos = mysqli_query($conex, $traerColores);
                    while ($array = mysqli_fetch_assoc($datos)) {

                        echo "<tr>
                    <td><input type='text' name='" . $array['Color'] . "' id='Color' value='" . $array['Color']  . "' disabled><a href='cambiarColor.php?id=" . $array['id'] . "&Color=" . $array['Color'] . " '><i class='fa fa-pencil-square-o' aria-hidden='true'></i></a><a href='eliminarColor.php?id=" . $array['id'] . "&Color=" . $array['Color'] . "'><i class='fa fa-trash' aria-hidden='true' id='bEliminarColor'></i></a></td>
                </tr>";
                    }
                    ?>
                </tbody>
            </table>
            <div class="divColorNuevo">
                <button type="submit" name="bColorNuevo">Agregar Color <i class="fas fa-plus"> </i></button>
                <input type="text" name="colorNuevo" id="colorNuevo">
                <?php
                if (!isset($_GET['Rta'])) {
                    echo "";
                } else if ($_GET['Rta'] == 2) {
                    echo "<p style='color:#fff3dc; padding:15px; background: green'>¡Color agregado Correctamente!</p>";
                } else if ($_GET['Rta'] == 1) {
                    echo "<p style='color:#fff3dc; padding:15px; background:#ff8119'>¡Ocurrió un error. No se agregó el color!</p>";
                } else if ($_GET['Rta'] == 3) {
                    echo "<p style='color:#fff3dc; padding:15px; background:#ff8119'>¡Ocurrió un error. No se modificó el color!</p>";
                } else if ($_GET['Rta'] == 4) {
                    echo "<p style='color:#fff3dc; padding:15px; background:green'>¡Color modificado correctamente!</p>";
                } else if ($_GET['Rta'] == 5) {
                    echo "<p style='color:#fff3dc; padding:15px; background:#ff8119'>¡Ocurrió un error. No se eliminó el color!</p>";
                } else if ($_GET['Rta'] == 6) {
                    echo "<p style='color:#fff3dc; padding:15px; background:green'>¡Color eliminado correctamente!</p>";
                }

                ?>
            </div>
        </form>
    </div>

    <script>
        $(document).ready(function() {
                    $("#bEliminarColor").on('click', function(e) {
                            alert("hola")

                            var Color = document.getElementById("#Color");
                            var confirma = confirm("Eliminar color" + Color)
                            if (confirma == true) {
                                alert("Se eliminará el color")
                            } else if (confirma == false) {
                                e.preventDefault();
                            }

                        })
                    })
    </script>
</body>

</html>
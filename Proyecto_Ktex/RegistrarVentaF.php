<?php
error_reporting(0);
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

        <h2 class="h2Facturacion">Facturación</h2>

        <form action="" id="formVentas" method="post">
            <label for="">Cliente: </label>
            <input type="text" class="inputCliente" name="nombreCliente" id="Nombre" value="<?php echo $_GET['Nombre'] ?>">
            <input type="button" value="Buscar Ventas del Cliente" id="BuscarClienteVenta">

            <p id="data"></p>


            <label for="" class="labelFech">Fecha: <input type="datetime" name="fecha" class="inputFecha" value="<?= $fecha ?>" id="Fecha"></label>
            <table>
                <tr>
                    <td colspan="4" class="tdVacio"><br></td>
                </tr>
                <tr>
                    <th>Referencia</th>
                    <th>Color</th>
                    <th>Cantidad</th>
                    <th>Detalle</th>
                    <th>Precio</th>
                </tr>
                <tr>
                    <td><input type="text" name="referencia" id="Ref">
                    </td>
                    <td><select name="color" id="Col">
                            <?php
                            for ($i = 0; $i <= 9; $i++) {
                                echo "<option value='$colores[$i]'>$colores[$i]</option>";
                            }
                            ?>
                    </td>
                    <td><input type="number" name="cantidad" id="Cant"></td>
                    <td><INPUT type="text" name="detalle" id="Det">
                    </td>
                    <td><input id="monedaInput" name="precio" type="text">
                    <td></td>
                </tr>
            </table>
            <script>
                /*
                $(document).on('keyup', '#monedaInpu', function monedaChange(cif = 3, dec = 2) {
                    // tomamos el valor que tiene el input
                    let inputNum = document.getElementById('monedaInput').value
                    // Lo convertimos en texto
                    inputNum = inputNum.toString()
                    // separamos en un array los valores antes y después del punto
                    inputNum = inputNum.split('.')
                    // evaluamos si existen decimales
                    if (!inputNum[1]) {
                        inputNum[1] = '00'
                    }

                    let separados
                    // se calcula la longitud de la cadena
                    if (inputNum[0].length > cif) {
                        let uno = inputNum[0].length % cif
                        if (uno === 0) {
                            separados = []
                        } else {
                            separados = [inputNum[0].substring(0, uno)]
                        }
                        let posiciones = parseInt(inputNum[0].length / cif)
                        for (let i = 0; i < posiciones; i++) {
                            let pos = ((i * cif) + uno)
                            console.log(uno, pos)
                            separados.push(inputNum[0].substring(pos, (pos + 3)))
                        }
                    } else {
                        separados = [inputNum[0]]
                    }

                    document.getElementById('monedaInput').value = '$' + separados.join(',') + '.' + inputNum[1]
                });
           */
            </script>
            <div class="divSubmit">
                <button type="submit" class="buttonAgregar" id="buttonAgregar" value="Agregar" name="agregar"><i class="fas fa-cart-plus" hidden></i> Agregar</button>
            </div>
        </form>
        <div id="alerta">

        </div>
        <div id="Unidadesexistentes"></div>

        <script src="BuscarClienteVenta.js"></script>
        <script src="jquery.min.js"></script>
        <script src="RegistratVenta.js"></script>
        <script type="text/javascript">
            $(document).ready(function() {
                VentaCliente();
                $("#buttonAgregar").on('click', function(e) {
                    e.preventDefault();
                    VerificarStock();

                })
            })
        </script>
        <div>
            <h2 class="h2carrito">Carrito <i class="fas fa-cart-plus"></i></h2>
            <div>

                <form action="">
                    <table>

                        <thead id="contenido">

                    </table>
                </form>

            </div>
        </div>

    </section>
    <?php
    include("footer.php");
    ?>
</body>

</html>
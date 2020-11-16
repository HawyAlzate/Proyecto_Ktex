<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Registrar.css">
    <script src="jquery-3.5.1.min.js"></script>
    <title>Registrar Cliente</title>
</head>

<body>
    <h1>Registrar Cliente</h1>
    <div>
        <form action="" method="post" class="formRegistrarCliente">
            <Label>Nombre: <input type="text" name="nombre" required></Label><br><br>
            <Label>Cédula: <input type="number" name="cedula" required></Label><br><br>
            <Label>Teléfono: <input type="number" name="telefono" required></Label><br><br>
            <Label>Dirección: <input type="text" name="direccion" required></Label><br><br>
            <Label>Ciudad: <input type="text" name="ciudad" required></Label><br><br>
            <label>Tipo: <select name="tipo" required>
                    <option value="Mayorista">Mayorista</option>
                    <option value="Minorista">Minorista</option></label>
            <input type="submit" value="Registrar" class="ButtonRegistrar" name="buttonRegistrar">
        </form>

        <?php
        include("datos.php");
        include("conex.php");


        if (isset($_POST['buttonRegistrar'])) {

            $nombre = $_POST['nombre'];
            $cedula = $_POST['cedula'];
            $telefono = $_POST['telefono'];
            $direccion = $_POST['direccion'];
            $ciudad = $_POST['ciudad'];
            $tipo = $_POST['tipo'];

            $registrar = "INSERT INTO clientes_mayoristas VALUES ('$nombre','$cedula','$telefono','$direccion','$ciudad','$tipo')";
            if ($registro = mysqli_query($conex, $registrar)) {
                echo "<p style='color:black;background:#02facd;padding:5px;width:300px'>Cliente registrado exitosamente!!</p>";
                header("location:BuscarClientes.php");
            } else {
                echo "<p style='color:black;background:#fa8b37;padding:5px;width:300px'>Error de conexión!</p>";
            };
            mysqli_close($conex);
        }




        ?>
    </div>
</body>

</html>
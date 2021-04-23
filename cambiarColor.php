<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script src="https://kit.fontawesome.com/fa3825e370.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="cambiarcolor.css">
    <link rel="stylesheet" href="menu.css">
    <title>Modificar Color</title>
</head>

<body>


    <h1>GESTIÓN DE COLORES</h1>
    <div class="divAll">
        <form action="cambiodeColor.php" method="post">
            <table>
                <tbody>
                    <?php

                    $ColorACambiar = $_GET['Color'];
                    $id = $_GET['id'];

                            echo "<tr>
                            <td><input type='hidden' name='colorViejo' value='" . $ColorACambiar  . "' >
                                <input type='hidden' name='id' value='" .$id . "'></td>
                            </tr>
                            
                            <tr>
                            <td><label>Color Nuevo:  </label><input type='text' name='colorNuevo'  value='' autofocus>
                                <input type='hidden' name='id' value='" .$id. "'></td>
                            </tr>";
                        
                    
                    ?>
                </tbody>
            </table>
            <button type="submit" name="cambiarColor">Aceptar cambio<i class="fa fa-check-square-o" aria-hidden="true"></i></button>

        </form>
    </div>
</body>

</html>
<!doctype html>
<html lang="es">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    
    <title>Taller</title>
</head>
<body>
    <?php
        $Marca = $_GET['Marca'];
        $Modelo = $_GET['Modelo'];
        $Año = $_GET['Año'];
        $Matricula = $_GET['Matricula'];
        $id_cliente = $_GET['id_cliente'];

        // Establezco conexión
        require 'conexion.php';

        // Verificar si el cliente existe en la tabla cliente
        $verificarCliente = $mysqli->query("SELECT id_cliente FROM cliente WHERE id_cliente = '$id_cliente'");

        if ($verificarCliente->num_rows > 0) {
            // El cliente existe, ahora inserta el registro en coches
            $sql = "INSERT INTO coches (id_coche, id_cliente, Marca, Modelo, Año, Matricula) 
                    VALUES ('', '$id_cliente', '$Marca', '$Modelo', '$Año', '$Matricula')";

            // Ejecuto la sentencia y guardo el resultado
            $resultado = $mysqli->query($sql);

            if ($resultado) {
                echo '<br><p class="alert alert-primary">REGISTRO AGREGADO</p>';
            } else {
                echo '<br><p class="alert alert-danger">REGISTRO NO AGREGADO</p>';
            }
        } else {
            // Si el cliente no existe, muestra un mensaje de error
            echo '<br><p class="alert alert-danger">ERROR: Cliente no encontrado. Registro no agregado.</p>';
        }
    ?>
    <br>
    <!-- Enlace para regresar a la lista de coches del cliente actual -->
    <p><a href="coche.php?id_cliente=<?php echo $id_cliente; ?>" class="btn btn-primary">Regresar</a></p>
</body>
</html>

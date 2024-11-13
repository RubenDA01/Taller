<!doctype html>
<html lang="es">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    
    <title>Registrar Servicio</title>
</head>
<body>
    <?php
        // Obtener los datos enviados desde el formulario
        $Tipo_Servicio = $_GET['Tipo_Servicio'];
        $Precio = $_GET['Precio'];
        $Fecha = $_GET['Fecha'];
        $id_coche = $_GET['id_coche'];
        $id_cliente = $_GET['id_cliente'];

        // Establezco conexión
        require 'conexion.php';

        // Verificar si el coche existe en la tabla coches
        $verificarCoche = $mysqli->query("SELECT id_coche FROM coches WHERE id_coche = '$id_coche'");

        if ($verificarCoche->num_rows > 0) {
            // El coche existe, ahora inserta el registro en servicios
            $sql = "INSERT INTO servicios (id_servicio, id_coche, Tipo_servicio, Precio, Fecha) 
                    VALUES ('', '$id_coche', '$Tipo_Servicio', '$Precio', '$Fecha')";

            // Ejecutar la sentencia y verificar el resultado
            $resultado = $mysqli->query($sql);

            if ($resultado) {
                echo '<br><p class="alert alert-primary">SERVICIO AGREGADO</p>';
            } else {
                echo '<br><p class="alert alert-danger">ERROR: Servicio no agregado</p>';
            }
        } else {
            // Si el coche no existe, muestra un mensaje de error
            echo '<br><p class="alert alert-danger">ERROR: Coche no encontrado. Servicio no agregado.</p>';
        }
    ?>
    <br>
    <!-- Enlace para regresar a la lista de servicios del coche actual -->
    <p><a href="servicio.php?id_coche=<?php echo $id_coche; ?>&id_cliente=<?php echo $id_cliente; ?>" class="btn btn-primary">Regresar</a></p>
</body>
</html>

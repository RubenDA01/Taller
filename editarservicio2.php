<!doctype html>
<html lang="es">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    
    <title>Editar Servicio</title>
</head>
<body>
    <?php
    // Verificar si los datos han sido enviados a través de GET
    if (isset($_GET['id_servicio']) && isset($_GET['id_coche']) && isset($_GET['id_cliente']) && isset($_GET['Tipo_servicio']) && isset($_GET['Precio']) && isset($_GET['Fecha'])) {
        $id_servicio = $_GET['id_servicio'];     // Obtener el id del servicio
        $id_coche = $_GET['id_coche'];           // Obtener el id del coche
        $id_cliente = $_GET['id_cliente'];       // Obtener el id del cliente
        $Tipo_servicio = $_GET['Tipo_servicio']; // Obtener el tipo de servicio
        $Precio = $_GET['Precio'];               // Obtener el precio
        $Fecha = $_GET['Fecha'];                 // Obtener la fecha

        // Establecer la conexión
        require 'conexion.php';

        // Preparar la sentencia SQL para la actualización
        $sql = "UPDATE servicios SET Tipo_servicio='$Tipo_servicio', Precio='$Precio', Fecha='$Fecha' WHERE id_servicio=$id_servicio";

        // Ejecutar la sentencia
        if ($mysqli->query($sql) === TRUE) {
            echo '<br><p class="alert alert-primary">SERVICIO MODIFICADO</p>';
        } else {
            echo '<br><p class="alert alert-danger">ERROR AL MODIFICAR EL SERVICIO</p>';
        }
    } else {
        echo '<br><p class="alert alert-danger">Faltan datos para actualizar el servicio</p>';
    }
    ?>

    <br>
    <!-- Enlace para regresar a la lista de servicios del coche específico -->
    <p><a href="servicio.php?id_coche=<?php echo $id_coche; ?>&id_cliente=<?php echo $id_cliente; ?>" class="btn btn-primary">Regresar</a></p>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>

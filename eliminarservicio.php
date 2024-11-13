<!doctype html>
<html lang="es">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="estilos.css">
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    
    <title>Talleres Benito</title>
</head>
<body>
    <?php
        // Obtener los IDs del servicio, coche y cliente desde los parámetros GET
        $id_servicio = $_GET['id_servicio'];
        $id_coche = $_GET['id_coche'];
        $id_cliente = $_GET['id_cliente'];

        // Establecer conexión
        require 'conexion.php';

        // Preparar la sentencia SQL para eliminar el servicio
        $sqlBorrar = "DELETE FROM servicios WHERE id_servicio=$id_servicio";

        // Ejecutar la sentencia SQL y guardar el resultado
        $resultadoBorrar = $mysqli->query($sqlBorrar);

        // Verificar el resultado de la eliminación
        if($resultadoBorrar > 0){
    ?>
            <br>
            <p class="alert alert-primary">SERVICIO ELIMINADO</p>
    <?php
        } else {
    ?>
            <br>
            <p class="alert alert-danger">ERROR: Servicio no eliminado</p>
    <?php
        }
    ?>
    <br>
    <!-- Enlace para regresar a la lista de servicios del coche actual, incluyendo id_cliente -->
    <p><a href="servicio.php?id_coche=<?php echo $id_coche; ?>&id_cliente=<?php echo $id_cliente; ?>" class="btn btn-primary">Regresar</a></p>

</body>
</html>

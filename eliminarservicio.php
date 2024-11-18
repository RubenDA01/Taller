<!doctype html>
<html lang="es">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="estilos.css">
    <link rel="icon" href="images/icono.png" type="image/png">
    
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
				<div class='alert alert-success text-center' role='alert'>
				<strong>Éxito:</strong> Servicio eliminado correctamente.
				</div>
                <p><a href="servicio.php?id_coche=<?php echo $id_coche; ?>&id_cliente=<?php echo $id_cliente; ?>" class="btn btn-success">Regresar</a></p>
    <?php
        } else {
    ?>
            <br>
				<div class='alert alert-danger text-center' role='alert'>
				<strong>Error:</strong> Ha habido un error al eliminar el servicio.
				</div>
				<p><a href="servicio.php?id_coche=<?php echo $id_coche; ?>&id_cliente=<?php echo $id_cliente; ?>" class="btn btn-danger">Regresar</a></p>
    <?php
        }
    ?>

</body>
</html>

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
    // Verificar si los datos han sido enviados a través de GET
    if (isset($_GET['id_coche']) && isset($_GET['id_cliente']) && isset($_GET['Marca']) && isset($_GET['Modelo']) && isset($_GET['Año']) && isset($_GET['Matricula'])) {
        $id_coche = $_GET['id_coche'];         // Obtener el id del coche
        $id_cliente = $_GET['id_cliente'];      // Obtener el id del cliente
        $Marca = $_GET['Marca'];                // Obtener la marca
        $Modelo = $_GET['Modelo'];              // Obtener el modelo
        $Año = $_GET['Año'];                    // Obtener el año
        $Matricula = $_GET['Matricula'];        // Obtener la matrícula

        // Establecer la conexión
        require 'conexion.php';

        // Preparar la sentencia SQL para la actualización
        $sql = "UPDATE coches SET Marca='$Marca', Modelo='$Modelo', Año='$Año', Matricula='$Matricula' WHERE id_coche=$id_coche";

        // Ejecutar la sentencia
        if ($mysqli->query($sql) === TRUE) {

            echo "<br>
            <div class='alert alert-success text-center' role='alert'>
				<strong>Éxito:</strong> El coche ha sido modificado correctamente.
				<br>
			</div>";
            ?>
            <p><a href="coche.php?id_cliente=<?php echo $id_cliente; ?>" class="btn btn-success">Regresar</a></p>
            <?php

        } else {

            echo "<br>
            <div class='alert alert-success text-center' role='alert'>
				<strong>Error:</strong> Ha habido un error al modificar el coche.
				<br>
			</div>";
            ?>
            <p><a href="coche.php?id_cliente=<?php echo $id_cliente; ?>" class="btn btn-danger">Regresar</a></p>
            <?php

        }
    } else {
        echo '<br><p class="alert alert-danger">Faltan datos para actualizar el registro</p>';
    }
    ?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>

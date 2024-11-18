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
                echo '<br>
				<div class="alert alert-success text-center" role="alert">
				<strong>Éxito:</strong> El servicio ha sido registrado correctamente
				</div>'
				?>
                <p><a href="servicio.php?id_coche=<?php echo $id_coche; ?>&id_cliente=<?php echo $id_cliente; ?>" class="btn btn-success">Regresar</a></p>;
                <?php
            } else {
                echo '<br>
				<div class="alert alert-danger text-center" role="alert">
				<strong>Error:</strong> Ha ocurrido un error al registrar el servicio.
				</div>'
                ?>
                <p><a href="servicio.php?id_coche=<?php echo $id_coche; ?>&id_cliente=<?php echo $id_cliente; ?>" class="btn btn-danger">Regresar</a></p>;
                <?php
            }
        } else {
            // Si el coche no existe, muestra un mensaje de error
            echo '<br><p class="alert alert-danger">ERROR: Coche no encontrado. Servicio no agregado.</p>';
        }
    ?>
    <br>

</body>
</html>

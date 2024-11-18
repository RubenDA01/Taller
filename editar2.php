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
    if (isset($_GET['id_cliente']) && isset($_GET['Nombre_cliente']) && isset($_GET['Telefono']) && isset($_GET['Correo'])) {
        $id = $_GET['id_cliente'];          // Obtener el id del cliente
        $Nombre_cliente = $_GET['Nombre_cliente'];  // Obtener el nombre
        $Telefono = $_GET['Telefono'];            // Obtener el teléfono
        $Correo = $_GET['Correo'];               // Obtener el correo

        // Establecer la conexión
        require 'conexion.php';

        // Preparar la sentencia SQL para la actualización
        $sql = "UPDATE cliente SET Nombre_cliente='$Nombre_cliente', Telefono='$Telefono', Correo='$Correo' WHERE id_cliente=$id";

        // Ejecutar la sentencia
        if ($mysqli->query($sql) === TRUE) {
            echo "<br>
            <div class='alert alert-success text-center' role='alert'>
				<strong>Éxito:</strong> El cliente ha sido modificado correctamente.
				<br>
			</div>
            <p><a href='index.php' class='btn btn-success'>Regresar</a></p>";
        } else {
            echo "<br>
            <div class='alert alert-success text-center' role='alert'>
				<strong>Error:</strong> Ha habido un error al modificar el cliente.
				<br>
			</div>
            <p><a href='index.php' class='btn btn-danger>Regresar</a></p>";
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

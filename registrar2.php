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
        $Nombre_cliente = $_GET['Nombre_cliente'];
        $Telefono = $_GET['Telefono'];
        $Correo = $_GET['Correo'];

        // Establezco conexión
        require 'conexion.php';

        // Verificar si el correo ya existe
        $verificarCorreo = $mysqli->query("SELECT Correo FROM cliente WHERE Correo = '$Correo'");

        if ($verificarCorreo->num_rows > 0) {
            // Si el correo ya existe, mostrar mensaje de error
            echo '<br>
            <div class="alert alert-danger text-center" role="alert">
            <strong>Error:</strong> El correo ya está registrado. Por favor, usa otro correo.
            </div>';
            ?>
            <p><a href="index.php" class="btn btn-danger">Regresar</a></p>
            <?php
        } else {
            // Si no existe, proceder a insertar el registro
            $sql = "INSERT INTO cliente (id_cliente, Nombre_cliente, Telefono, Correo) 
                    VALUES ('', '$Nombre_cliente', '$Telefono', '$Correo')";

            // Ejecutar la sentencia y guardar el resultado
            $resultado = $mysqli->query($sql);

            if ($resultado) {
                echo '<br>
                <div class="alert alert-success text-center" role="alert">
                <strong>Éxito:</strong> El cliente ha sido registrado correctamente.
                </div>';
                ?>
                <p><a href="index.php" class="btn btn-success">Regresar</a></p>
                <?php
            } else {
                echo '<br>
                <div class="alert alert-danger text-center" role="alert">
                <strong>Error:</strong> Ha ocurrido un error al registrar el cliente.
                </div>';
                ?>
                <p><a href="index.php" class="btn btn-danger">Regresar</a></p>
                <?php
            }
        }
    ?>
</body>
</html>

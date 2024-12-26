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
        $Marca = $_GET['Marca'];
        $Modelo = $_GET['Modelo'];
        $Año = $_GET['Año'];
        $Matricula = strtoupper($_GET['Matricula']); // Convertir matrícula a mayúsculas
        $id_cliente = $_GET['id_cliente'];

        // Establezco conexión
        require 'conexion.php';

        // Verificar si el cliente existe en la tabla cliente
        $verificarCliente = $mysqli->query("SELECT id_cliente FROM cliente WHERE id_cliente = '$id_cliente'");

        if ($verificarCliente->num_rows > 0) {
            // Verificar si la matrícula ya existe en la tabla coches
            $verificarMatricula = $mysqli->query("SELECT Matricula FROM coches WHERE Matricula = '$Matricula'");

            if ($verificarMatricula->num_rows > 0) {
                // Si la matrícula ya existe, muestra un mensaje de error
                echo '<br>
                <div class="alert alert-danger text-center" role="alert">
                <strong>Error:</strong> La matrícula ya está registrada. Por favor, usa otra.
                </div>'
                ?>
                <p><a href="coche.php?id_cliente=<?php echo $id_cliente; ?>" class="btn btn-danger">Regresar</a></p>;
                <?php
            } else {
                // Si no existe, inserta el registro en coches
                $sql = "INSERT INTO coches (id_coche, id_cliente, Marca, Modelo, Año, Matricula) 
                        VALUES ('', '$id_cliente', '$Marca', '$Modelo', '$Año', '$Matricula')";

                // Ejecuto la sentencia y guardo el resultado
                $resultado = $mysqli->query($sql);

                if ($resultado) {
                    echo '<br>
                    <div class="alert alert-success text-center" role="alert">
                    <strong>Éxito:</strong> El coche ha sido registrado correctamente
                    </div>'
                    ?>
                    <p><a href="coche.php?id_cliente=<?php echo $id_cliente; ?>" class="btn btn-success">Regresar</a></p>;
                    <?php
                } else {
                    echo '<br>
                    <div class="alert alert-danger text-center" role="alert">
                    <strong>Error:</strong> Ha ocurrido un error al registrar el coche.
                    </div>'
                    ?>
                    <p><a href="coche.php?id_cliente=<?php echo $id_cliente; ?>" class="btn btn-danger">Regresar</a></p>;
                    <?php
                }
            }
        } else {
            // Si el cliente no existe, muestra un mensaje de error
            echo '<br><p class="alert alert-danger">ERROR: Cliente no encontrado. Registro no agregado.</p>';
        }
    ?>

</body>
</html>


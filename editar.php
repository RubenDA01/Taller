<?php
$id = $_GET['id_cliente'];
// Establecer la conexión
require 'conexion.php';

// Preparar la sentencia SQL
$sql = "SELECT * FROM cliente WHERE id_cliente=$id";

// Ejecutar la sentencia y obtener el resultado
$resultado = $mysqli->query($sql);

// Guardar el registro obtenido en la variable $fila
$fila = $resultado->fetch_assoc();
?>

<!doctype html>
<html lang="es">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    
    <title>Editar Cliente</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <h1>Editar Cliente</h1>
        </div>

        <div class="row">
            <div class="col-md-8">
                <!-- Formulario para editar datos del cliente -->
                <form id="registro" name="registro" autocomplete="off" action="editar2.php" method="GET">
                    <!-- Incluir el id del cliente de forma oculta -->
                    <input type="hidden" name="id_cliente" id="id_cliente" value="<?php echo $fila['id_cliente']; ?>">

                    <!-- Campo para el nombre -->
                    <div class="form-group">
                        <label for="Nombre_cliente">Nombre</label>
                        <input type="text" name="Nombre_cliente" id="Nombre_cliente" class="form-control" 
                               placeholder="Introduce el nombre" required value="<?php echo $fila['Nombre_cliente']; ?>">
                    </div>

                    <!-- Campo para el teléfono -->
                    <div class="form-group">
                        <label for="Telefono">Teléfono</label>
                        <input type="number" name="Telefono" id="Telefono" class="form-control" 
                               placeholder="Introduce el teléfono" required value="<?php echo $fila['Telefono']; ?>">
                    </div>

                    <!-- Campo para el correo -->
                    <div class="form-group">
                        <label for="Correo">Correo</label>
                        <input type="email" name="Correo" id="Correo" class="form-control" 
                               placeholder="Introduce el correo" required value="<?php echo $fila['Correo']; ?>">
                    </div>

                    <!-- Botón para actualizar -->
                    <div class="form-group">
                        <input type="submit" value="Actualizar" class="btn btn-primary">
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>

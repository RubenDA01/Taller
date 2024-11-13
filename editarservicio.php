<?php
// Obtener los IDs del servicio y del coche desde la URL
$id_servicio = $_GET['id_servicio'];
$id_coche = $_GET['id_coche'];
$id_cliente = $_GET['id_cliente']; // También capturamos el id_cliente para redireccionar correctamente

// Establecer la conexión
require 'conexion.php';

// Preparar la sentencia SQL para seleccionar los datos del servicio
$sql = "SELECT * FROM servicios WHERE id_servicio = $id_servicio";

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
    
    <title>Editar Servicio</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <h1>Editar Servicio</h1>
        </div>

        <div class="row">
            <div class="col-md-8">
                <!-- Formulario para editar datos del servicio -->
                <form id="registro" name="registro" autocomplete="off" action="editarservicio2.php" method="GET">
                    <!-- Incluir el id del servicio, id del coche y id del cliente de forma oculta -->
                    <input type="hidden" name="id_servicio" id="id_servicio" value="<?php echo $fila['id_servicio']; ?>">
                    <input type="hidden" name="id_coche" id="id_coche" value="<?php echo $id_coche; ?>">
                    <input type="hidden" name="id_cliente" id="id_cliente" value="<?php echo $id_cliente; ?>">

                    <!-- Campo para el tipo de servicio -->
                    <div class="form-group">
                        <label for="Tipo_servicio">Tipo de Servicio</label>
                        <input type="text" name="Tipo_servicio" id="Tipo_servicio" class="form-control" 
                               placeholder="Introduce el tipo de servicio" required value="<?php echo $fila['Tipo_servicio']; ?>">
                    </div>

                    <!-- Campo para el precio -->
                    <div class="form-group">
                        <label for="Precio">Precio</label>
                        <input type="text" name="Precio" id="Precio" class="form-control" 
                               placeholder="Introduce el precio" step="0.01" min="0" max="99999.99" required value="<?php echo $fila['Precio']; ?>">
                    </div>

                    <!-- Campo para la fecha -->
                    <div class="form-group">
                        <label for="Fecha">Fecha</label>
                        <input type="date" name="Fecha" id="Fecha" class="form-control" 
                               required value="<?php echo $fila['Fecha']; ?>">
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

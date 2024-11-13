<?php
// Obtener el id del coche desde la URL
$id_coche = $_GET['id_coche'];
$id_cliente = $_GET['id_cliente']; // También capturamos el id_cliente para redireccionar correctamente

// Establecer la conexión
require 'conexion.php';

// Preparar la sentencia SQL para seleccionar los datos del coche
$sql = "SELECT * FROM coches WHERE id_coche = $id_coche";

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
    
    <title>Talleres Benito</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <h1>Editar Coche</h1>
        </div>

        <div class="row">
            <div class="col-md-8">
                <!-- Formulario para editar datos del coche -->
                <form id="registro" name="registro" autocomplete="off" action="editarcoche2.php" method="GET">
                    <!-- Incluir el id del coche y el id del cliente de forma oculta -->
                    <input type="hidden" name="id_coche" id="id_coche" value="<?php echo $fila['id_coche']; ?>">
                    <input type="hidden" name="id_cliente" id="id_cliente" value="<?php echo $id_cliente; ?>">

                    <!-- Campo para la marca -->
                    <div class="form-group">
                        <label for="Marca">Marca</label>
                        <input type="text" name="Marca" id="Marca" class="form-control" 
                               placeholder="Introduce la marca" required value="<?php echo $fila['Marca']; ?>">
                    </div>

                    <!-- Campo para el modelo -->
                    <div class="form-group">
                        <label for="Modelo">Modelo</label>
                        <input type="text" name="Modelo" id="Modelo" class="form-control" 
                               placeholder="Introduce el modelo" required value="<?php echo $fila['Modelo']; ?>">
                    </div>

                    <!-- Campo para el año -->
                    <div class="form-group">
                        <label for="Año">Año</label>
                        <input type="text" name="Año" id="Año" class="form-control" 
                               placeholder="Introduce el año" maxlength="4" pattern="\d{4}" required value="<?php echo $fila['Año']; ?>">
                    </div>

                    <!-- Campo para la matrícula -->
                    <div class="form-group">
                        <label for="Matricula">Matrícula</label>
                        <input type="text" name="Matricula" id="Matricula" class="form-control" 
                               placeholder="Introduce la matrícula" pattern="^\d{4}[A-Za-z]{3}$" maxlength="7" required value="<?php echo $fila['Matricula']; ?>">
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

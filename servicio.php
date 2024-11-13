<?php

require 'conexion.php';

// Verifica si se ha pasado un id_coche en la URL
$id_coche = $_GET['id_coche'] ?? '';  // Si no hay id_coche, lo deja vacío
$id_cliente = $_GET['id_cliente'] ?? '';  // Recupera el id_cliente de la URL si existe

// Si id_coche es válido, realiza la consulta filtrada
if ($id_coche) {
    // Selecciona solo los servicios del coche con el id_coche especificado
    $sql = "SELECT * FROM servicios WHERE id_coche = '$id_coche'";
    $resultado = $mysqli->query($sql);
} else {
    // Si no se pasa id_coche, muestra todos los servicios
    $sql = "SELECT * FROM servicios";
    $resultado = $mysqli->query($sql);
}

?>

<!doctype html>
<html lang="es">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/jquery.dataTables.min.css">
    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.4.1.min.js" ></script>
    <script src="js/bootstrap.min.js" ></script>
    <script src="js/jquery.dataTables.min.js" ></script>
    
    <title>Taller</title>
    
    <script>
        $(document).ready( function () {
            $('#tabla').DataTable();
        });
    </script>
</head>
<body>
    <div class="container">
        <div class="row">
            <h1>Servicios</h1>
        </div>
        <br>
        
        <div class="row">
            <!-- El enlace de Registrar pasa el id_coche en la URL -->
            <a href="registrarservicio.php?id_coche=<?php echo $id_coche; ?>&id_cliente=<?php echo $id_cliente; ?>" class="btn btn-primary">Registrar Servicio</a>
        </div>
        <br><br>
        
        <table id="tabla" class="display" style="width:100%">
            <thead>
                <tr>
                    <th>Id Servicio</th>
                    <th>Tipo Servicio</th>
                    <th>Precio</th>
                    <th>Fecha</th>
                    <th></th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php
                    // Mostrar los servicios correspondientes al id_coche
                    while($fila = $resultado->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>{$fila['id_servicio']}</td>";
                        echo "<td>{$fila['Tipo_servicio']}</td>";
                        echo "<td>{$fila['Precio']}</td>";
                        echo "<td>{$fila['Fecha']}</td>";
                ?>
                        <td><a href="editarservicio.php?id_servicio=<?php echo $fila['id_servicio']; ?>&id_coche=<?php echo $id_coche; ?>&id_cliente=<?php echo $id_cliente; ?>" class="btn btn-warning">Editar</a></td>
                        <td><a href="eliminarservicio.php?id_servicio=<?php echo $fila['id_servicio']; ?>&id_coche=<?php echo $id_coche; ?>&id_cliente=<?php echo $id_cliente; ?>" class="btn btn-danger">Eliminar</a></td>
                <?php
                        echo "</tr>";
                    }
                ?>
            </tbody>
        </table>
        
        <div class="row mt-4">
            <!-- Aquí pasamos el id_cliente para que se filtren los coches correctamente al volver -->
            <a href="coche.php?id_cliente=<?php echo $id_cliente; ?>" class="btn btn-secondary">Volver a Coche</a>
        </div>

    </div>
</body>
</html>

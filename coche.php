<?php

require 'conexion.php';

// Verifica si se ha pasado un id_cliente en la URL
$id_cliente = $_GET['id_cliente'] ?? '';  // Si no hay id_cliente, lo deja vacío

// Si id_cliente es válido, realiza la consulta filtrada
if ($id_cliente) {
    // Selecciona solo los coches del cliente con el id_cliente especificado
    $sql = "SELECT * FROM coches WHERE id_cliente = '$id_cliente'";
    $resultado = $mysqli->query($sql);
} else {
    // Si no se pasa id_cliente, muestra todos los coches
    $sql = "SELECT * FROM coches";
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
            <h1>Coches</h1>
        </div>
        <br>
        
        <div class="row">
            <!-- El enlace de Registrar pasa el id_cliente en la URL -->
            <a href="registrarcoche.php?id_cliente=<?php echo $id_cliente; ?>" class="btn btn-primary">Registrar</a>
        </div>
        <br><br>
        
        <table id="tabla" class="display" style="width:100%">
            <thead>
                <tr>
                    <th>Id Coche</th>
                    <th>Marca</th>
                    <th>Modelo</th>
                    <th>Año</th>
                    <th>Matrícula</th>
                    <th></th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php
                    // Mostrar solo los coches correspondientes al id_cliente
                    while($fila = $resultado->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>{$fila['id_coche']}</td>";
                        echo "<td>{$fila['Marca']}</td>";
                        echo "<td>{$fila['Modelo']}</td>";
                        echo "<td>{$fila['Año']}</td>";
                        echo "<td>{$fila['Matricula']}</td>";
                ?>
                        <td><a href="servicio.php?id_cliente=<?php echo $fila['id_cliente']; ?>" class="btn btn-primary">Servicio</a></td>
                        <td><a href="editarcoche.php?id_coche=<?php echo $fila['id_coche']; ?>&id_cliente=<?php echo $id_cliente; ?>" class="btn btn-warning">Editar</a></td>
                        <td><a href="eliminarcoche.php?id_coche=<?php echo $fila['id_coche']; ?>&id_cliente=<?php echo $id_cliente; ?>" class="btn btn-danger">Eliminar</a></td>

                <?php
                        echo "</tr>";
                    }
                ?>
            </tbody>
        </table>
        
        <div class="row mt-4">
            <a href="index.php" class="btn btn-secondary">Volver a Inicio</a>
        </div>

    </div>
</body>
</html>

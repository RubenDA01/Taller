<?php

require 'conexion.php';

// Seleccionamos todos los datos de la tabla alumnos
$sql = "SELECT * FROM cliente";

$resultado = $mysqli->query($sql);

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
			} );
		</script>
		
		
	</head>
	<body>
		<div class="container">
			<div class="row">
				<h1>Clientes</h1>
			</div>
			<br>
			
			<div class="row">
				<a href="registrar.php" class="btn btn-primary">Registrar</a>
			</div>
			<br>
			<br>
			
			<table id="tabla" class="display" style="width:100%">
				<thead>
					<tr>
						<th>Id</th>
						<th>Nombre</th>
						<th>Teléfono</th>
						<th>Correo</th>
						<th></th>
						<th></th>
						<th></th>
					</tr>
				</thead>
				<tbody>
					<?php
						while($fila = $resultado->fetch_assoc()){
							echo "<tr>";
							echo "<td>$fila[id_cliente]</td>";
							echo "<td>$fila[Nombre_cliente]</td>";
							echo "<td>$fila[Telefono]</td>";
							echo "<td>$fila[Correo]</td>";
					?>
							<td><a href="coche.php?id=<?php echo $fila['id_cliente']; ?>" class="btn btn-primary">Coche</a></td>
							<td><a href="editar.php?id=<?php echo $fila['id_cliente']; ?>" class="btn btn-warning">Editar</a></td>
							<td><a href="eliminar.php?id=<?php echo $fila['id_cliente']; ?>" class="btn btn-danger">Eliminar</a></td>
					<?php							
							echo "</tr>";
						}
					?>
				</tbody>
			</table>
			
		</div>
	</div>
	
	
</body>
</html>
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
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
    	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
   		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.7.2/font/bootstrap-icons.css">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

		<link rel="stylesheet" href="estilos.css">
		<link rel="stylesheet" href="css/jquery.dataTables.min.css">
		<link rel="icon" href="images/icono.png" type="image/png">

		
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/jquery.dataTables.min.css">
		
		<!-- Optional JavaScript -->
		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script src="js/jquery-3.4.1.min.js" ></script>
		<script src="js/bootstrap.min.js" ></script>
		<script src="js/jquery.dataTables.min.js" ></script>
		
		<title>Talleres Benito</title>
		
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
		<script src="js/jquery.dataTables.min.js"></script>
		<script>
			$(document).ready( function () {
				$('#tabla').DataTable();
			} );
		</script>
		
		
	</head>
	<body>
		<div class="container">
			<div class="row">
				<h1 class="text-light">Coches</h1>
			</div>
			<br>
			
			<div class="row">
				<a href="registrar.php" class="btn btn-primary"><i class="bi bi-plus-circle"></i> Registrar Cliente</a>
			</div>
			<br>
			<br>
			
			<table id="tabla" class="table table-striped table-bordered" style="width:100%">
				<thead class="table table-dark table-striped">
					<tr>
						<th class="text-light" >Id</th>
						<th class="text-light" >Nombre</th>
						<th class="text-light" >Teléfono</th>
						<th class="text-light" >Correo</th>
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
							<td><a href="coche.php?id_cliente=<?php echo $fila['id_cliente']; ?>" class="btn btn-primary"><i class="bi bi-car-front"></i> Coche</a></td>
							<td><a href="editar.php?id_cliente=<?php echo $fila['id_cliente']; ?>" class="btn btn-warning"><i class='bi bi-pencil-square'></i> Editar</a></td>
							<td><a href="eliminar.php?id_cliente=<?php echo $fila['id_cliente']; ?>" class="btn btn-danger"><i class='bi bi-trash-fill'></i> Eliminar</a></td>
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
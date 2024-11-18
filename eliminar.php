<!doctype html>
<html lang="es">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="estilos.css">
		<link rel="stylesheet" href="css/jquery.dataTables.min.css">
		<link rel="icon" href="images/icono.png" type="image/png">

		<script src="js/jquery-3.4.1.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/jquery.dataTables.min.js"></script>
			
		<title>Talleres Benito</title>
	</head>
	<body>
		<?php
			$id = $_GET['id_cliente'];

			//Establezco conexión
			require 'conexion.php';
			
			//Preparo la sentencia SQL
			$sqlBorrar = "DELETE FROM cliente WHERE id_cliente=$id";

			//Ejecutamos sentencia y guardamos resultado
			$resultadoBorrar = $mysqli->query($sqlBorrar);

			if($resultadoBorrar>0){
		?>
				<br>
				<div class='alert alert-success text-center' role='alert'>
				<strong>Éxito:</strong> Cliente eliminado correctamente.
				</div>
				<p><a href="index.php" class="btn btn-success">Regresar</a></p>
		<?php
			} else {
		?>
				<br>
				<div class='alert alert-danger text-center' role='alert'>
				<strong>Error:</strong> Ha habido un error al eliminar el cliente.
				</div>
				<p><a href="index.php" class="btn btn-danger">Regresar</a></p>
		<?php
			}
		?>
	</body>
</html>
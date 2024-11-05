<!doctype html>
<html lang="es">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="css/bootstrap.min.css">
		
		<title>Taller</title>
	</head>
	<body>
		<?php
			// $id = $_POST['id'];
			$Nombre_cliente = $_POST['Nombre_cliente'];
			$Telefono = $_POST['Telefono'];
			$Correo = $_POST['Correo'];

			//Establezco conexión
			require 'conexion.php';

			//Preparo la sentencia SQL
			$sql = "UPDATE cliente SET Nombre_cliente='$Nombre_cliente', Telefono='$Telefono', Correo='$Correo' WHERE id=$id";

			//Ejecutamos sentencia y guardamos resultado
			$resultado = $mysqli->query($sql);

			if($resultado>0){
		?>
				<br>
				<p class="alert alert-primary">REGISTRO MODIFICADO</p>
		<?php
			} else {
		?>
				<br>
  				<p class="alert alert-danger">REGISTRO NO MODIFICADO</p>
		<?php
			}
		?>
			<br>
			<p><a href="index.php" class="btn btn-primary">Regresar</a></p>
	</body>
</html>


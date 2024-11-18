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
			$Nombre_cliente = $_GET['Nombre_cliente'];
			$Telefono = $_GET['Telefono'];
			$Correo = $_GET['Correo'];
			// $id_cliente = $_POST['id_cliente'];
			
			//Establezco conexión
			require 'conexion.php';

			//Preparo la sentencia SQL
			$sql = "INSERT INTO cliente (id_cliente,Nombre_cliente,Telefono,Correo) VALUES ('','$Nombre_cliente','$Telefono','$Correo')";

			//Ejecuto la sentencia y guardo el resultado
			$resultado = $mysqli->query($sql);

			if($resultado>0){
		?>
				<br>
				<div class='alert alert-success text-center' role='alert'>
				<strong>Éxito:</strong> El cliente ha sido registrado correctamente
				</div>
				<p><a href="index.php" class="btn btn-success">Regresar</a></p>
  					

		<?php
			} else {
		?>
				<br>
				<div class='alert alert-danger text-center' role='alert'>
				<strong>Error:</strong> Ha ocurrido un error al registrar el cliente.
				</div>
				<p><a href="index.php" class="btn btn-danger">Regresar</a></p>
		<?php		
			}
		?>

	</body>
</html>
<!doctype html>
<html lang="es">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="stylesheet" href="estilos.css">
		
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
				<p class="alert alert-primary">REGISTRO AGREGADO</p>
  					

		<?php
			} else {
		?>
				<br>
  				<p class="alert alert-danger">REGISTRO NO AGREGADO</p>
		<?php		
			}
		?>
			<br>
			<p><a href="index.php" class="btn btn-primary">Regresar</a></p>
	</body>
</html>
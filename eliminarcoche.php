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
			$id_coche = $_GET['id_coche'];
			$id_cliente = $_GET['id_cliente'];

			//Establezco conexión
			require 'conexion.php';
			
			//Preparo la sentencia SQL
			$sqlBorrar = "DELETE FROM coches WHERE id_coche=$id_coche";

			//Ejecutamos sentencia y guardamos resultado
			$resultadoBorrar = $mysqli->query($sqlBorrar);

			if($resultadoBorrar>0){
		?>
				<br>
				<p class="alert alert-primary">REGISTRO ELIMINADO</p>
		<?php
			} else {
		?>
				<br>
				<p class="alert alert-danger">REGISTRO NO ELIMINADO</p>
		<?php
			}
		?>
			<br>
			<p><a href="coche.php?id_cliente=<?php echo $id_cliente; ?>" class="btn btn-primary">Regresar</a></p>

	</body>
</html>
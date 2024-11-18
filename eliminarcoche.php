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
				<div class='alert alert-success text-center' role='alert'>
				<strong>Éxito:</strong> Coche eliminado correctamente.
				</div>
				<p><a href="coche.php?id_cliente=<?php echo $id_cliente; ?>" class="btn btn-success">Regresar</a></p>
		<?php
			} else {
		?>
				<br>
				<div class='alert alert-danger text-center' role='alert'>
				<strong>Error:</strong> Ha habido un error al eliminar el coche.
				</div>
				<p><a href="coche.php?id_cliente=<?php echo $id_cliente; ?>" class="btn btn-danger">Regresar</a></p>
		<?php
			}
		?>

	</body>
</html>
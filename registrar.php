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
		<div class="container">
			<div class="row">
				<h1 class="text-light">Registrar Clientes</h1>
			</div>
			
			<div class="row">
				<div class="col-md-8">
					<!-- Completar atributos de form -->
					<form action="registrar2.php" id="registro" name="registro" autocomplete="off" method="get">
						<!-- <div class="form-group"> -->
							<!-- Nombre -->
							<!-- <label for="nombre">Id Cliente</label>
							<input type="number" name="id_cliente" id="id_cliente" class="form-control" placeholder="Se inserta solo" disabled>
						</div> -->
						
						<div class="form-group">
							<!-- Nombre -->
							<label for="nombre" class="text-light">Nombre</label>
							<input type="text" name="Nombre_cliente" id="Nombre_cliente" class="form-control" placeholder="Introduce el nombre" required>
						</div>
						<!-- Este es el campo de entrada para el número de teléfono, solo acepta 9 dígitos con el pattern -->
						<div class="form-group">
							<!-- Teléfono -->
							<label for="Telefono" class="text-light">Teléfono</label>
							<input type="text" name="Telefono" id="Telefono" class="form-control" placeholder="Introduce el teléfono" maxlength="9" pattern="\d{9}" required>
						</div>
						
						<div class="form-group">
							<!-- Nombre -->
							<label for="nombre" class="text-light">Correo</label>
							<input type="email" name="Correo" id="Correo" class="form-control" placeholder="Introduce el correo" required>
						</div>
						
						<div class="form-group">
							<!-- Registrar -->
							<input type="submit" value="Registrar" class="btn btn-primary">
						</div>
					</form>
				</div>
			</div>
		</div>
		
		<!-- Optional JavaScript -->
		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script src="js/jquery-3.4.1.min.js" ></script>
		<script src="js/bootstrap.min.js" ></script>
	</body>
</html>				
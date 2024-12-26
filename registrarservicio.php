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
        // Obtener id_coche y id_cliente desde GET o establecerlo vacío si no está presente
        $id_coche = isset($_GET['id_coche']) ? htmlspecialchars($_GET['id_coche']) : '';
        $id_cliente = isset($_GET['id_cliente']) ? htmlspecialchars($_GET['id_cliente']) : '';
    ?>
    
    <div class="container">
        <div class="row">
            <h1 class="text-light">Registrar Servicio</h1>
        </div>
        
        <div class="row">
            <div class="col-md-8">
                <form action="registrarservicio2.php" id="registro" name="registro" autocomplete="off" method="get">
                    
                    <!-- Campo oculto para enviar el ID del coche -->
                    <input type="hidden" name="id_coche" value="<?php echo $id_coche; ?>">
                    <input type="hidden" name="id_cliente" value="<?php echo $id_cliente; ?>">

                    <div class="form-group">
                        <label for="Tipo_Servicio" class="text-light">Tipo de Servicio</label>
                        <input type="text" name="Tipo_Servicio" id="Tipo_Servicio" class="form-control" placeholder="Introduce el tipo de servicio" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="Precio" class="text-light">Precio</label>
                        <input type="number" name="Precio" id="Precio" class="form-control" placeholder="Introduce el precio" step="0.01" min="0" max="99999.99" required oninput="validarPrecio(this)">
                    </div>

                    <script>
                        function validarPrecio(input) {
                            if (input.value < 0) {
                                alert("El precio no puede ser negativo.");
                                input.value = ''; // Limpia el valor si es negativo
                            }
                        }
                    </script>
                    
                    <div class="form-group">
                        <label for="Fecha" class="text-light">Fecha</label>
                        <input type="date" name="Fecha" id="Fecha" class="form-control" required>
                    </div>
                    
                    <div class="form-group">
                        <input type="submit" value="Registrar" class="btn btn-primary">
                    </div>
                </form>
            </div>
        </div>
    </div>
    
    <!-- Optional JavaScript -->
    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>

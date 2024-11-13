<!doctype html>
<html lang="es">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    
    <title>Registrar Servicio</title>
</head>
<body>
    <?php
        // Obtener id_coche desde GET o establecerlo vacío si no está presente
        $id_coche = isset($_GET['id_coche']) ? htmlspecialchars($_GET['id_coche']) : '';
    ?>
    
    <div class="container">
        <div class="row">
            <h1>Registrar Servicio</h1>
        </div>
        
        <div class="row">
            <div class="col-md-8">
                <form action="registrarservicio2.php" id="registro" name="registro" autocomplete="off" method="get">
                    
                    <!-- Campo oculto para enviar el ID del coche -->
                    <input type="hidden" name="id_coche" value="<?php echo $id_coche; ?>">

                    <div class="form-group">
                        <label for="Tipo_Servicio">Tipo de Servicio</label>
                        <input type="text" name="Tipo_Servicio" id="Tipo_Servicio" class="form-control" placeholder="Introduce el tipo de servicio" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="Precio">Precio</label>
                        <input type="number" name="Precio" id="Precio" class="form-control" placeholder="Introduce el precio" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="Fecha">Fecha</label>
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

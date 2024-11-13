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
        // Obtener id_cliente desde GET o establecerlo vacío si no está presente
        $id_cliente = isset($_GET['id_cliente']) ? htmlspecialchars($_GET['id_cliente']) : '';
    ?>
    
    <div class="container">
        <div class="row">
            <h1>Registrar coche</h1>
        </div>
        
        <div class="row">
            <div class="col-md-8">
                <form action="registrarcoche2.php" id="registro" name="registro" autocomplete="off" method="get">
                    
                    <!-- Campo oculto para enviar el ID del cliente -->
                    <input type="hidden" name="id_cliente" value="<?php echo $id_cliente; ?>">

                    <div class="form-group">
                        <label for="Marca">Marca</label>
                        <input type="text" name="Marca" id="Marca" class="form-control" placeholder="Introduce la marca" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="Modelo">Modelo</label>
                        <input type="text" name="Modelo" id="Modelo" class="form-control" placeholder="Introduce el modelo" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="Año">Año</label>
                        <input type="text" name="Año" id="Año" class="form-control" placeholder="Introduce el año" maxlength="4" pattern="\d{4}" required>
                    </div>

                    <div class="form-group">
                        <label for="Matricula">Matrícula</label>
                        <input type="text" name="Matricula" id="Matricula" class="form-control" placeholder="Introduce la matrícula" pattern="^\d{4}[A-Za-z]{3}$" maxlength="7" required>
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

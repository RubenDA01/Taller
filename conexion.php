<?php
    // Nos conectamos a la base de datos, que se especifica en la ultima parte
    $mysqli = new mysqli("localhost", "root", "", "taller");
    if($mysqli->connect_errno){
        echo "Fallo al conectar a MySQL: (", $mysqli->connect_errno, ") " , $mysqli->connect_error;
    }    
?>
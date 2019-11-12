<?php
    
    $server = "localhost";
    $user = "easternpablo";
    $password = "pThIHF6r@@##";
    $database = "concesionario";
    
    $conexion = mysqli_connect($server, $user, $password, $database);
    
    if(mysqli_connect_errno()){
        echo "No se ha establecido conexion con la base de datos.";
        die("Error: ".mysqli_connect_error());
    }else{
        mysqli_query($conexion, " SET NAMES 'utf8' ");
    }
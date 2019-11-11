<?php
    
    $server = "localhost";
    $user = "easternpablo";
    $password = "pThIHF6r@@##";
    $database = "concesionario";
    
    $conexion = new mysqli($server,$user,$password,$database);
    
    if($conexion -> connect_errno){
        echo "No se ha establecido conexion con la base de datos.";
        die("Error: ".$conexion -> connect_error);
    }else{
        $conexion -> set_charset("utf8");
    }
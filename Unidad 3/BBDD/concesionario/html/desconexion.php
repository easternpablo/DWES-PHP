<?php
    
    require_once 'conexion.php';
    
    if($conexion){
        mysqli_close($conexion);
        session_destroy();
        header("Location: index.php");
    }else{
        echo "No se ha podido cerrar la sesión";
    }
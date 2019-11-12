<?php
    
    require_once 'conexion.php';
    
    if($conexion){
        mysqli_close($conexion);
    }else{
        echo "No se ha podido cerrar la sesión";
    }
<?php

    require_once 'conexion.php';
    
    if(isset($_GET['borrarid'])){
        
        $id = $_GET['borrarid'];
        
        $sql = " DELETE FROM Coches WHERE id=$id ";
        $delete = mysqli_query($conexion, $sql);
        
        if($delete){
            header("Location: listar_coches.php");
        }else{
            echo "Error: ". mysqli_error($conexion);
        }
        
    }else{
        echo "No se reconocen los campos.<br>";
    }
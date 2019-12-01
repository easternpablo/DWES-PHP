<?php
    
    require_once 'conexion.php';
    
    if(isset($_GET['borrarid'])){
        
        $id = $_GET['borrarid'];
        
        $sql = " DELETE FROM entradas WHERE id=$id ";
        $delete = mysqli_query($conexion, $sql);
        
        if($delete){
            header("Location: ../html/principal.php");
        }else{
            echo "Error: ". mysqli_error($conexion);
        }
        
    }else{
        echo "No se reconocen los campos.<br>";
    }
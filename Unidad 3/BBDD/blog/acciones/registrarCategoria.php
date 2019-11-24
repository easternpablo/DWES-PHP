<?php

    require_once 'conexion.php';
    
    $categoria = isset($_POST['categoria']) ? mysqli_real_escape_string($conexion,trim($_POST['categoria'])):false;
    $erroresCategoria = Array();
    
    if(empty($_POST['categoria'])){
        $erroresCategoria['categoria'] = "Error al insertar una categoria";
    }
    
    if(count($erroresCategoria)==0){
        
        $sql = " INSERT INTO categorias (nombre) VALUES ('$categoria') ";
        $insert = mysqli_query($conexion,$sql);
        
        if($insert){
            header("Location: ../html/formCategoria.php");
        }else{
            echo "Error: ".mysqli_error($conexion);
        }
        
    }else{
        $_SESSION['erroresCategoria'] = $erroresCategoria;
        header("Location: ../html/formCategoria.php");
    }
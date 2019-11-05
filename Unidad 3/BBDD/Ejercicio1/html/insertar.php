<?php
            
    require_once 'conexion.php';
    
    $modelo = isset($_POST['modelo']) ? mysqli_real_escape_string($conexion,trim($_POST['modelo'])):false;
    $marca = isset($_POST['marca']) ? mysqli_real_escape_string($conexion,trim($_POST['marca'])):false;
    $precio = (int)$_POST['precio'];
    $stock = (int)$_POST['stock'];
    $errores = Array();
        
    if(empty($modelo)){
        $errores['modelo'] = "Error en el campo modelo";
    }
    
    if(empty($marca)){
        $errores['marca'] = "Error en el campo marca";
    }
    
    if(empty($precio)){
        $errores['precio'] = "Error en el campo precio";
    }
    
    if(empty($stock)){
        $errores['stock'] = "Error en el campo stock";
    }
    
    if(count($errores)==0){
            
        $sql = " INSERT INTO Coches (modelo,marca,precio,stock) VALUES('$modelo','$marca',$precio,$stock) ";
        $insert = mysqli_query($conexion,$sql);
                    
        if($insert){
            header("Location: listar_coches.php");
        }else{
            echo "Error: ". mysqli_error($conexion);
        } 
    }
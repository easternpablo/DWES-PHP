<?php
            
    require_once 'conexion.php';
    
    if(isset($_POST['modelo'],$_POST['marca'],$_POST['precio'],$_POST['stock']) &&
             $_POST['modelo'] != "" && $_POST['marca'] != "" && $_POST['precio'] != "" && $_POST['stock'] != ""){
           
        $modelo = $_POST['modelo'];
        $marca = $_POST['marca'];
        $precio = $_POST['precio'];
        $stock = $_POST['stock'];
                    
        $sql = " INSERT INTO Coches (modelo,marca,precio,stock) VALUES('$modelo','$marca','$precio','$stock') ";
        $insert = mysqli_query($conexion,$sql);
                    
        if($insert){
            header("Location: listar_coches.php");
        }else{
            echo "Error: ". mysqli_error($conexion);
        }
              
    }else{
        echo "No se reconocen los campos.";
    }
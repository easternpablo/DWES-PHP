<?php

    require_once 'conexion.php';
    
    $email = isset($_POST['emailRegistro']) ? mysqli_real_escape_string($conexion,trim($_POST['emailRegistro'])):false;
    $nombre = isset($_POST['nombreRegistro']) ? mysqli_real_escape_string($conexion,trim($_POST['nombreRegistro'])):false;
    $apellidos = isset($_POST['apellidosRegistro']) ? mysqli_real_escape_string($conexion,trim($_POST['apellidosRegistro'])):false;
    $password = isset($_POST['passwordRegistro']) ? mysqli_real_escape_string($conexion,trim($_POST['passwordRegistro'])):false;
    $erroresRegistro = Array();
    
    if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
        $erroresRegistro['emailRegistro'] = "Error en el campo email.<br>";
    }
    
    $password_segura = password_hash($password,PASSWORD_BCRYPT,['cost'=>4]);
    
    if(count($erroresRegistro)==0){
        
        $sql = " INSERT INTO usuarios (nombre,apellidos,email,password,fecha) VALUES ('$nombre','$apellidos','$email','$password_segura',CURDATE()) ";
        $insert = mysqli_query($conexion,$sql);
        
        if($insert){
            header("Location: ../html/index.php");
        }else{
            echo "Error: ".mysqli_error($conexion);
        }
        
    }else{
        $_SESSION['erroresRegistro'] = $erroresRegistro;
        header("Location: ../html/index.php");
    }
    
    
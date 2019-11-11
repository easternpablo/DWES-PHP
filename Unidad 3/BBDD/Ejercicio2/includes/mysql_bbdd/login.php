<?php
    
    require_once 'conexion.php';
    
    $email = isset($_POST['email']) ? mysqli_real_escape_string($conexion,trim($_POST['email'])):false;
    $contraseña = isset($_POST['password']) ? mysqli_real_escape_string($conexion,trim($_POST['password'])):false;
    $errores = Array();
    
    if(empty($email) || !filter_var($email,FILTER_VALIDATE_EMAIL)){
        $errores['email'] = "Error no puedes dejar el campo email vacio.<br>";
    }
    
    if(empty($contraseña)){
        $errores['password'] = "Error no puedes dejar el campo email vacio.<br>";
    }
    
    if(count($errores)==0){
        
        $passwordObtenido = " SELECT contraseña FROM Usuarios WHERE email='$email' ";
        $verify = password_verify($contraseña, $passwordObtenido);
        
        if($verify){
            header("Location: ../../../Ejercicio1/html/index.php");
        }else{
            echo "Error: no existe dicho usuario.<br>";
        }
    }
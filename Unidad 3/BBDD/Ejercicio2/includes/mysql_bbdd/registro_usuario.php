<?php
    
    require_once 'conexion.php';
    
    $email = isset($_POST['email']) ? mysqli_real_escape_string($conexion,trim($_POST['email'])):false;
    $contraseña1 = isset($_POST['password1']) ? mysqli_real_escape_string($conexion,trim($_POST['password1'])):false;
    $contraseña2 = isset($_POST['password2']) ? mysqli_real_escape_string($conexion,trim($_POST['password2'])):false;
    $nombre = isset($_POST['nombre']) ? mysqli_real_escape_string($conexion,trim($_POST['nombre'])):false;
    $apellidos = isset($_POST['apellidos']) ? mysqli_real_escape_string($conexion,trim($_POST['apellidos'])):false;
    $edad = (int)$_POST['edad'];
    $direccion = isset($_POST['direccion']) ? mysqli_real_escape_string($conexion,trim($_POST['direccion'])):false;
    $errores = Array();
    
    if(empty($email) || !filter_var($email,FILTER_VALIDATE_EMAIL)){
        $errores['email'] = "Error en el campo email.<br>";
    }
    
    if(empty($contraseña1)){
        $errores['password1'] = "Error en el campo contraseña.<br>";
    }
    
    if(empty($contraseña2)){
        $errores['password2'] = "Error en el campo repetir contraseña.<br>";
    }
    
    if($contraseña1 != $contraseña2){
        $errores['password1'] = "Error las contraseñas deben ser las mismas.<br>";
        $errores['password2'] = "Error las contraseñas deben ser las mismas.<br>";
    }else{
        $contraseña_segura = password_hash($contraseña1, PASSWORD_BCRYPT, ['cost'=>4]);
    }
    
    if(count($errores)==0){
        
        $sql = " INSERT INTO Usuarios (email,contraseña,nombre,apellidos,edad,direccion) VALUES ('$email','$contraseña_segura','$nombre','$apellidos',$edad,'$direccion') ";
        $insert = $conexion -> query($sql);
        
        if($insert){
            header("Location: ../../html/index.php");
        }else{
            echo "Error: ".$conexion->connect_error;
        }
        
    }
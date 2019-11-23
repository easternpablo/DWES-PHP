<?php
    
    require_once 'conexion.php';
    
    $usuario = isset($_POST['user']) ? mysqli_real_escape_string($conexion,trim($_POST['user'])):false;
    $email = isset($_POST['email']) ? mysqli_real_escape_string($conexion,trim($_POST['email'])):false;
    $password1 = isset($_POST['password1']) ? mysqli_real_escape_string($conexion,trim($_POST['password1'])):false;
    $password2 = isset($_POST['password2']) ? mysqli_real_escape_string($conexion,trim($_POST['password2'])):false;
    $nombre = isset($_POST['nombre']) ? mysqli_real_escape_string($conexion,trim($_POST['nombre'])):false;
    $apellidos = isset($_POST['apellidos']) ? mysqli_real_escape_string($conexion,trim($_POST['apellidos'])):false;
    $edad = (int)$_POST['edad'];
    $direccion = isset($_POST['direccion']) ? mysqli_real_escape_string($conexion,trim($_POST['direccion'])):false;
    $erroresRegistro = Array();
    
    if(empty($usuario)){
        $erroresRegistro['user'] = "Error en el campo usuario.<br>";
    }
    
    if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
        $erroresRegistro['email'] = "Error en el campo email.<br>";
    }
    
    if(empty($password1)){
        $erroresRegistro['password1'] = "Error en el campo contraseña.<br>";
    }
    
    if(empty($password2)){
        $erroresRegistro['password2'] = "Error en el campo repetir contraseña.<br>";
    }
    
    if($password1 != $password2){
        $erroresRegistro['password1'] = "Error las contraseñas deben ser las mismas.<br>";
        $erroresRegistro['password2'] = "Error las contraseñas deben ser las mismas.<br>";
    }else{
        $password_segura = password_hash($password1,PASSWORD_BCRYPT,['cost'=>4]);
    }
    
    if(count($erroresRegistro)==0){
        
        $sql = " INSERT INTO Usuarios (usuario,email,password,nombre,apellidos,edad,direccion) VALUES ('$usuario','$email','$password_segura','$nombre','$apellidos',$edad,'$direccion') ";
        $insert = mysqli_query($conexion,$sql);
        
        if($insert){
            header("Location: index.php");
        }else{
            echo "Error: ".mysqli_error($conexion);
        }
        
    }else{
        $_SESSION['erroresRegistro'] = $erroresRegistro;
        header("Location: index.php");
    }
    
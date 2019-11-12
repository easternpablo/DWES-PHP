<?php
    
    require_once 'conexion.php';
    
    $email = isset($_POST['emailLogin']) ? mysqli_real_escape_string($conexion,trim($_POST['emailLogin'])):false;
    $contraseña = isset($_POST['passwordLogin']) ? mysqli_real_escape_string($conexion,trim($_POST['passwordLogin'])):false;
    $errores = Array();
    
    if(empty($email) || !filter_var($email,FILTER_VALIDATE_EMAIL)){
        $errores['emailLogin'] = "Error en el campo email.<br>";
    }
    
    if(empty($contraseña)){
        $errores['passwordLogin'] = "Error en el campo contraseña.<br>";
    }
    
    if(count($errores)==0){
        
        $sql = " SELECT * FROM Usuarios WHERE email='$email' ";
        $consulta = mysqli_query($conexion,$sql);
        $tupla = mysqli_fetch_assoc($consulta);
        $verify = password_verify($contraseña, $tupla['contraseña']);
       
        if($verify == true){
            header("Location: principal.php");
        }else{
            header("Location: principal.php");
        }
    }
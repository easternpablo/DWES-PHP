<?php

    require_once 'conexion.php';
    
    $email = isset($_POST['emailLogin']) ? mysqli_real_escape_string($conexion,trim($_POST['emailLogin'])):false;
    $password = isset($_POST['passwordLogin']) ? mysqli_real_escape_string($conexion,trim($_POST['passwordLogin'])):false;
    $erroresLogin = Array();
    
    if(empty($email)){
        $erroresLogin['emailLogin'] = "El campo email no puede quedar vacío.";
    }else if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
        $erroresLogin['emailLogin'] = "El campo email no es correcto.";
    }
    
    if(empty($password)){
        $erroresLogin['passwordLogin'] = "El campo contraseña no puede quedar vacío.";
    }
    
    if(count($erroresLogin)==0){
        
        $sql = " SELECT password FROM usuarios WHERE email='$email' ";
        $consulta = mysqli_query($conexion,$sql);
        $fila = mysqli_fetch_assoc($consulta);
        $verify = password_verify($password, $fila['password']);
        
        if($verify == true){
            $_SESSION['usuario'] = $email;
            header("Location: ../html/principal.php");
        }else{
            $erroresLogin['usuario'] = "El usuario está mal puesto o no existe.";
            header("Location: ../html/index.php");
        }
        
    }else{
        $_SESSION['erroresLogin'] = $erroresLogin;
        header("Location: ../html/index.php");       
    }
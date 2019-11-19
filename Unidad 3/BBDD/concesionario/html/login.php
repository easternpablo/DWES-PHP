<?php
    
    require_once 'conexion.php';
    
    $usuario = isset($_POST['userLogin']) ? mysqli_real_escape_string($conexion,trim($_POST['userLogin'])):false;
    $password = isset($_POST['passwordLogin']) ? mysqli_real_escape_string($conexion,trim($_POST['passwordLogin'])):false;
    $erroresLogin = Array();
    
    if(empty($usuario)){
        $erroresLogin['userLogin'] = "Error en el campo usuario.<br>";
    }
    
    if(empty($password)){
        $erroresLogin['passwordLogin'] = "Error en el campo contraseña.<br>";
    }
    
    if(count($erroresLogin)==0){
        
        $sql = " SELECT password FROM Usuarios WHERE usuario='$usuario' ";
        $consulta = mysqli_query($conexion,$sql);
        $fila = mysqli_fetch_assoc($consulta);
        $verify = password_verify($password, $fila['password']);
        
        if($verify == true){
            $_SESSION['usuario'] = $usuario;
            header("Location: principal.php");
        }else{
            $erroresLogin['usuario'] = "El usuario está mal puesto o no existe.";
            header("Location: index.php");
        }
    }else{
        $_SESSION['erroresLogin'] = $erroresLogin;
        header("Location: index.php");       
    }
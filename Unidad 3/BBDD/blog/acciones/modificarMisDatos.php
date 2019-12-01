<?php

    require_once 'conexion.php';
    
    $id = (int)$_POST['id'];
    $nombre = isset($_POST['nombre']) ? mysqli_real_escape_string($conexion,trim($_POST['nombre'])):false;
    $apellidos = isset($_POST['apellidos']) ? mysqli_real_escape_string($conexion,trim($_POST['apellidos'])):false;
    $email = isset($_POST['email']) ? mysqli_real_escape_string($conexion,trim($_POST['email'])):false;
    $erroresModificacion = Array();
    
    if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
        $erroresModificacion['email'] = "Error en el campo email.";
    }
    
    if(empty($email)){
        $erroresModificacion['email'] = "Error no puedes dejar el campo email vacío.";
    }
    
    if(empty($nombre)){
        $erroresModificacion['nombre'] = "Error no puedes dejar el campo nombre vacío.";
    }
    
    if(empty($apellidos)){
        $erroresModificacion['apellidos'] = "Error no puedes dejar el campo apellidos vacío.";
    }
    
    if(count($erroresModificacion)==0){
            
        $sql = " UPDATE usuarios SET nombre='$nombre', apellidos='$apellidos', email='$email' WHERE id='$id' ";
        $_SESSION['usuario'] = $email;
        $update = mysqli_query($conexion,$sql);
                    
        if($update){
            header("Location: ../html/principal.php");
        }else{
            echo "Error: ". mysqli_error($conexion);
        }
        
    }else{
        $_SESSION['erroresModificacion'] = $erroresModificacion;
        header("Location: ../html/formMisDatos.php");
    }
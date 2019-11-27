<?php

    require_once 'conexion.php';
    
    $entradasErrores = Array();
    $titulo = isset($_POST['titulo']) ? mysqli_real_escape_string($conexion,trim($_POST['titulo'])):false;
    $descripcion = isset($_POST['descripcion']) ? mysqli_real_escape_string($conexion,trim($_POST['descripcion'])):false;
    
    if(isset($_SESSION['usuario'])){
       $userEmail = $_SESSION['usuario'];
       $sqlUser = " SELECT id FROM usuarios WHERE email='$userEmail' ";
       $consultaUser = mysqli_query($conexion,$sqlUser);
       $fila = mysqli_fetch_assoc($consultaUser);
       $usuario_id = $fila['id'];
    }
    
    if(isset($_POST['selectCategoria'])){
        $categoria = $_POST['selectCategoria'];
    }else if($_POST['selectCategoria']==0){
        $entradasErrores['selectCategoria'] = "Error no tienes ninguna categoría seleccionada.";
    }
 
    if(empty($titulo)){
        $entradasErrores['titulo'] = "Error en el campo título.";
    }
    
    if(count($entradasErrores)==0){
        
        $sqlInsert = " INSERT INTO entradas (usuario_id,categoria_id,titulo,descripcion,fecha) VALUES ($usuario_id,$categoria,'$titulo','$descripcion',CURDATE()) ";
        $insert = mysqli_query($conexion,$sqlInsert);
        
        if($insert){
            header("Location: ../html/formEntrada.php");
        }else{
            echo "Error: ".mysqli_error($conexion);
        }
        
    }else{
        $_SESSION['erroresCategoria'] = $erroresCategoria;
        header("Location: ../html/formEntrada.php");
    }
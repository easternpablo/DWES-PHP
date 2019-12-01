<?php

    require_once 'conexion.php';
    
    $arrayErrores = Array();
    $id = (int)$_POST['identificador'];
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
        var_dump($categoria);
    }else if($_POST['selectCategoria']==0){
        $arrayErrores['selectCategoria'] = "Error no tienes ninguna categoría seleccionada.";
    }
    
    if(empty($titulo)){
        $arrayErrores['titulo'] = "Error en el campo título.";
    }
    
    if(count($arrayErrores)==0){
        
        $sql = " UPDATE entradas SET usuario_id=$usuario_id, categoria_id=$categoria, titulo='$titulo', descripcion='$descripcion', fecha='CURDATE()' WHERE id=$id ";
        $update = mysqli_query($conexion,$sql);
        
        if($update){
            header("Location: ../html/principal.php");
        }else{
            echo "Error: ". mysqli_error($conexion);
        }
    }else{
        $_SESSION['arrayErrores'] = $arrayErrores;
        header("Location: ../html/formModificarEntrada.php");
    }

<?php

    require_once 'conexion.php';
    
    $titulo = isset($_POST['titulo']) ? mysqli_real_escape_string($conexion,trim($_POST['titulo'])):false;
    $descripcion = isset($_POST['descripcion']) ? mysqli_real_escape_string($conexion,trim($_POST['descripcion'])):false;
    
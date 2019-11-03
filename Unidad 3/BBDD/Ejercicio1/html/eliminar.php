<?php

    require_once 'conexion.php';
    
    if(isset($_POST['identificador']) && $_POST['identificador'] != ""){
        
        $id = $_POST['identificador'];
        
        $sql = " DELETE FROM Coches WHERE id='$id' ";
        $delete = mysqli_query($conexion, $sql);
        
        if($delete){
            echo "El registro se ha eliminado correctamente.<br>";
            echo "<a href='index.php'>Volver</a>";
        }else{
            echo "Error: ". mysqli_error($conexion);
        }
        
    }else{
        echo "No se reconocen los campos.<br>";
    }


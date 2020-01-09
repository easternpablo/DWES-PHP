<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Ejercicio 1</title>
    </head>
    <body>
        <?php
            
            session_start();
            
            require_once 'models/Database.php';
            require_once 'helpers/utils.php';
            require_once 'controllers/UsuariosController.php';
            
            if(!isset($_GET['c']) || !isset($_GET['a'])){
                $controlador = new UsuariosController();
                $controlador->index();
            }else{
                $nombre_controlador = $_GET['c'].'Controller';
                if(class_exists($nombre_controlador)){
                    $controlador = new $nombre_controlador();
                    if(method_exists($controlador, $_GET['a'])){
                        $action = $_GET['a'];
                        $controlador->$action();
                    }else{
                       echo "La página que buscas no existe"; 
                    }
                }else{
                    echo "La página que buscas no existe";
                }
            }
        
        ?>
    </body>
</html>

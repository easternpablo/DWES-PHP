<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Gestión de alumnos</title>
        <link rel="icon" href="assets/img/855601.png">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    </head>
    <body>
        <?php
            
            session_start();
            
            require_once 'models/Database.php';
            require_once 'helpers/utils.php';
            require_once 'controllers/UsuariosController.php';
            require_once 'controllers/NotasController.php';
            
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

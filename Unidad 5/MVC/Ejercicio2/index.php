<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Pizzería - Main</title>
        <link rel="icon" href="assets/img/pizza.png">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    </head>
    <body>
        <?php
            
            session_start();
            
            require_once 'models/pizzeriaDB.php';
            require_once 'controllers/OfertasController.php';
            
            if(!isset($_GET['c']) || !isset($_GET['a'])){
                $controlador = new OfertasController();
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

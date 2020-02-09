<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Tienda Online - Gameworkshop</title>
        <link rel="icon" href="assets/img/carrito.png"/>
        <link rel="stylesheet" href="assets/css/estilos.css"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    </head>
    <body>
        <?php
            
            session_start();         
            require_once 'models/database.php';
            require_once 'controllers/ProductosController.php';
            require_once 'controllers/CategoriasController.php';
            require_once 'controllers/UsuariosController.php';
            
            require_once 'views/layout/header.php';
            require_once 'views/layout/NavBar.php';
            require_once 'views/layout/aside.php';
            
            if(!isset($_GET['c']) || !isset($_GET['a'])){
                $controlador = new ProductosController();
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
            
            require_once 'views/layout/piePagina.php';
        ?>
    </body>
</html>

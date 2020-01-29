<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Pizzería - Main</title>
        <link rel="icon" href="assets/img/pizza.png">
        <link rel="stylesheet" href="assets/css/estilos.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    </head>
    <body>
        <div class="container-fluid">
        <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
                <!-- Brand/logo -->
                <a class="navbar-brand" href="#">
                    <img src="assets/img/pizza-sabrosa.png" alt="logo" style="width:40px;">
                </a>
                <!-- Links -->
                <ul class="navbar-nav">
                  <li class="nav-item">
                    <a class="nav-link" href="index.php?c=Ofertas&&a=TodasOfertas">Listar Ofertas</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="#"><span> | </span></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="index.php?c=Ofertas&&a=NuevaOferta">Insertar Ofertas</a>
                  </li>
                </ul>
       </nav><br>
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
            <div class="row fixed-bottom pie mt-5">
                <p class="bg-basic text-white text-center col">&copy;PizzeríaVilches</p><br>
            </div>
       </div>
    </body>
</html>

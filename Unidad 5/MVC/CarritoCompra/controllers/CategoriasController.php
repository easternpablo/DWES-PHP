<?php

require_once 'models/CategoriasModel.php';

class CategoriasController {
    
    function index(){
        require_once 'views/categoria/gestionarCategoria.php';
    }
    
    public static function MostrarTodo(){
        $categoria = new CategoriasModel();
        $todasCategoria = $categoria->get_all();
        return $todasCategoria;
    }
    
    function crear(){
        require_once 'views/categoria/registroCategoria.php';
    }
    
    function CrearCategoria(){
        if(!isset($_POST['submit'])){
            require_once 'views/categoria/registroCategoria.php';
        }else{
            $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : false;
            if($nombre){               
                $categoria = new CategoriasModel($nombre);
                $grabar = $categoria->save();
                if($grabar){
                    $_SESSION['register'] = "complete";
                    header("location: index.php");
                }else{
                    $_SESSION['register'] = "failed";
                }
            }else{
                $_SESSION['register'] = "failed";
            }
        }
    }
}
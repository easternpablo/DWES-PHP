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
    
    public function verProductos(){
        if(isset($_GET['id'])){
            $id = $_GET['id'];
            $categoria = new CategoriasModel();
            $categoria->setId($id);
            $selectCategory = $categoria->get_one_category();
            $productos = new ProductosModel();
            $productos->setCategoria_id($id);
            $todosProductos = $productos->get_all_products();
        }
        require_once 'views/categoria/visualizarProductosCategoria.php';
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
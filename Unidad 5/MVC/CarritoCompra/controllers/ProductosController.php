<?php

require_once 'models/ProductosModel.php';

class ProductosController {
    
    public function index(){
        $productos = new ProductosModel();
        $producto = $productos->getRandom(5);
        require_once 'views/producto/productosDestacados.php';
    }
    
    function gestionProductos(){
        require_once 'views/producto/gestionarProducto.php';
    }
    
    function borrarProducto(){
        if(!isset($_GET['id'])){
            require_once 'views/producto/gestionarProducto.php';
        }else{
            $id = $_GET['id'];
            if($id){
                $producto = new ProductosModel();
                $producto->setId($id);
                $borrado = $producto->delete();
                if($borrado){
                    $_SESSION['remove'] = "complete";
                    require_once 'views/producto/gestionarProducto.php';
                }else{
                    $_SESSION['remove'] = "failed";
                }
            }else{
                $_SESSION['remove'] = "failed";
            } 
        }
    }
    
    function agregar(){
        require_once 'views/producto/registroProducto.php';
    }
    
    function agregarProducto(){
        if(!isset($_POST['submit'])){
            require_once 'views/producto/registroProducto.php';
        }else{
            $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : false;
            $categoria = isset($_POST['categoria']) ? $_POST['categoria'] : false;
            $descripcion = isset($_POST['descripcion']) ? $_POST['descripcion'] : false;
            $precio = isset($_POST['precio']) ? $_POST['precio'] : false;
            $stock = isset($_POST['stock']) ? $_POST['stock'] : false;
            $oferta = isset($_POST['oferta']) ? $_POST['oferta'] : false;
            if(isset($_FILES['imagen'])){
                $file = $_FILES['imagen'];
                $filename = $file['name'];
                $mimetype = $file['type'];
                if($mimetype == "image/jpg" || $mimetype == "image/jpeg" || $mimetype == "image/png" || $mimetype == "image/gif"){
                    if(!is_dir('uploads/img')){
                        mkdir('uploads/img', 0777, true);
                    }
                    move_uploaded_file($file['tmp_name'], "uploads/img/".$filename);                        
                }
                if($categoria && $nombre && $descripcion && $precio && $stock && $oferta && $filename){               
                    $producto = new ProductosModel($categoria,$nombre,$descripcion,$precio,$stock,$oferta,$filename);
                    $grabar = $producto->save();
                    if($grabar){
                        $_SESSION['register'] = "complete";
                        header("Location: index.php");
                    }else{
                        $_SESSION['register'] = "failed";
                    }
                }else{
                    $_SESSION['register'] = "failed";
                }
            }
        }
    }
    
    public static function MostrarTodo(){
        $producto = new ProductosModel();
        $todosProducto = $producto->get_all();
        return $todosProducto;
    }
}
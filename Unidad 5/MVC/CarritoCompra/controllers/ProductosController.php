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
    
    public static function MostrarTodo(){
        $producto = new ProductosModel();
        $todosProducto = $producto->get_all();
        return $todosProducto;
    }
}
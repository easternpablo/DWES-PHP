<?php

require_once 'models/ProductosModel.php';

class CarritoController{
    
    public function index(){
        require_once 'views/carrito/visualizarCarrito.php';
    }
    
    public function añadirAlCarrito(){
        if(isset($_GET['id'])) {
            $id = $_GET['id'];
        } else {
            header('location: index.php');
        }
        
        if(isset($_SESSION['carrito'])) {
            $contador = 0;
            foreach($_SESSION['carrito'] as $indice => $elemento) {
                if($elemento['id_producto'] == $id) {
                    $_SESSION['carrito'][$indice]['unidades']++;
                    $contador++;
                }
            }
        }
        
        if (!isset($contador) || $contador == 0) {
            $producto = new ProductosModel();
            $producto->setId($id);
            $producto = $producto->get_one();
            if (isset($producto) && is_object($producto)) {
                $_SESSION['carrito'][] = array(
                    "id_producto" => $producto->id,
                    'precio' => $producto->precio,
                    'unidades' => 1,
                    'producto' => $producto
                );
            }
        }
        
        require_once 'views/carrito/visualizarCarrito.php';
    }
}
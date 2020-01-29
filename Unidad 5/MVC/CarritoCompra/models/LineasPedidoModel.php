<?php

class LineasPedidoModel extends Database {
    
    private $id, $pedido_id, $producto_id, $unidades;
    private $conexion;
    
    public function __construct($pedido_id=null,$producto_id=null,$unidades=null) {
        $this->conexion = parent::conectar();
        if(isset($pedido_id)){$this->pedido_id=$pedido_id;}
        if(isset($producto_id)){$this->producto_id=$producto_id;}
        if(isset($unidades)){$this->unidades=$unidades;}
    }
    
    function getId() {
        return $this->id;
    }

    function getPedido_id() {
        return $this->pedido_id;
    }

    function getProducto_id() {
        return $this->producto_id;
    }

    function getUnidades() {
        return $this->unidades;
    }

    function getConexion() {
        return $this->conexion;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setPedido_id($pedido_id) {
        $this->pedido_id = $pedido_id;
    }

    function setProducto_id($producto_id) {
        $this->producto_id = $producto_id;
    }

    function setUnidades($unidades) {
        $this->unidades = $unidades;
    }

    function setConexion($conexion) {
        $this->conexion = $conexion;
    }
}
<?php

class ProductosModel extends Database {
    
    private $id, $categoria_id, $nombre, $descripcion, $precio, $stock, $oferta, $fecha, $imagen;
    private $conexion;
    
    public function __construct($categoria_id=null,$nombre=null,$descripcion=null,$precio=null,$stock=null,$oferta=null,$imagen=null) {
        $this->conexion = parent::conectar();
        if(isset($categoria_id)){$this->categoria_id=$categoria_id;}
        if(isset($nombre)){$this->nombre=$nombre;}
        if(isset($descripcion)){$this->descripcion=$descripcion;}
        if(isset($precio)){$this->precio=$precio;}
        if(isset($stock)){$this->stock=$stock;}
        if(isset($oferta)){$this->oferta=$oferta;}
        if(isset($imagen)){$this->imagen=$imagen;}
    }
    
    function getId() {
        return $this->id;
    }

    function getCategoria_id() {
        return $this->categoria_id;
    }

    function getNombre() {
        return $this->nombre;
    }

    function getDescripcion() {
        return $this->descripcion;
    }

    function getPrecio() {
        return $this->precio;
    }

    function getStock() {
        return $this->stock;
    }

    function getOferta() {
        return $this->oferta;
    }

    function getFecha() {
        return $this->fecha;
    }

    function getImagen() {
        return $this->imagen;
    }

    function getConexion() {
        return $this->conexion;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setCategoria_id($categoria_id) {
        $this->categoria_id = $categoria_id;
    }

    function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    function setDescripcion($descripcion) {
        $this->descripcion = $descripcion;
    }

    function setPrecio($precio) {
        $this->precio = $precio;
    }

    function setStock($stock) {
        $this->stock = $stock;
    }

    function setOferta($oferta) {
        $this->oferta = $oferta;
    }

    function setFecha($fecha) {
        $this->fecha = $fecha;
    }

    function setImagen($imagen) {
        $this->imagen = $imagen;
    }

    function setConexion($conexion) {
        $this->conexion = $conexion;
    }
}
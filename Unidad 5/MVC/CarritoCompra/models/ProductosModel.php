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
    
    public function getRandom($limit){
        $sql = " SELECT * FROM productos WHERE stock > 0 ORDER BY RAND() LIMIT {$limit}; ";
        $result = $this->conexion->query($sql);
        return $result;
    }
    
    public function save(){
        $sql = $this->conexion->exec(" INSERT INTO productos VALUES(null,'{$this->getCategoria_id()}','{$this->getNombre()}','{$this->getDescripcion()}','{$this->getPrecio()}','{$this->getStock()}','{$this->getOferta()}',CURDATE(),'{$this->getImagen()}'); ");
        $resultado = false;
        if($sql){
            $resultado = true;
        }
        return $resultado;
    }
    
    public function delete(){
        $sql = $this->conexion->exec(" DELETE FROM productos WHERE id='{$this->getId()}' ");
        $resultado = false;
        if($sql){
            $resultado = true;
        }
        return $resultado;
    }
    
    function get_all(){
        $sql = $this->conexion->query(" SELECT * FROM productos ");
        return $sql;
    }
    
    function get_one(){
        $sql = $this->conexion->query(" SELECT * FROM productos WHERE id='{$this->getId()}' ");
        return $sql->fetchObject();
    }
    
    function get_all_products(){
        $sql = " SELECT prod.*, cat.nombre FROM productos prod, categorias cat "
              ." WHERE cat.id=prod.categoria_id "
              ." AND prod.categoria_id='{$this->getCategoria_id()}' ";
        $consulta = $this->conexion->query($sql);
        return $consulta;
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
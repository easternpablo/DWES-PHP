<?php

class CategoriasModel extends Database{
    
    private $id, $nombre;
    private $conexion;
    
    public function __construct($nombre=null) {
        $this->conexion = parent::conectar();
        if(isset($nombre)){$this->nombre=$nombre;}
    }
    
    function get_all(){
        $sql = $this->conexion->query(" SELECT * FROM categorias ");
        return $sql;
    }
    
    function save(){
        $sql = $this->conexion->exec(" INSERT INTO categorias VALUES(null,'{$this->getNombre()}'); ");
        $resultado = false;
        if($sql){
            $resultado = true;
        }
        return $resultado;
    }
    
    function getId() {
        return $this->id;
    }

    function getNombre() {
        return $this->nombre;
    }

    function getConexion() {
        return $this->conexion;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    function setConexion($conexion) {
        $this->conexion = $conexion;
    }
}
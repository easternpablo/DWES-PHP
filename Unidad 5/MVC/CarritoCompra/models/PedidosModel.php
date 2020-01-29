<?php

class PedidosModel extends Database {
    
    private $id, $usuario_id, $provincia, $localidad, $direccion, $coste, $estado, $fecha, $hora;
    private $conexion;
    
    public function __construct($usuario_id=null,$provincia=null,$localidad=null,$direccion=null,$coste=null,$estado=null,$hora=null) {
        $this->conexion = parent::conectar();
        if(isset($usuario_id)){$this->usuario_id=$usuario_id;}
        if(isset($provincia)){$this->provincia=$provincia;}
        if(isset($localidad)){$this->localidad=$localidad;}
        if(isset($direccion)){$this->direccion=$direccion;}
        if(isset($coste)){$this->coste=$coste;}
        if(isset($estado)){$this->estado=$estado;}
        if(isset($hora)){$this->hora=$hora;}
    }
    
    function getId() {
        return $this->id;
    }

    function getUsuario_id() {
        return $this->usuario_id;
    }

    function getProvincia() {
        return $this->provincia;
    }

    function getLocalidad() {
        return $this->localidad;
    }

    function getDireccion() {
        return $this->direccion;
    }

    function getCoste() {
        return $this->coste;
    }

    function getEstado() {
        return $this->estado;
    }

    function getFecha() {
        return $this->fecha;
    }

    function getHora() {
        return $this->hora;
    }

    function getConexion() {
        return $this->conexion;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setUsuario_id($usuario_id) {
        $this->usuario_id = $usuario_id;
    }

    function setProvincia($provincia) {
        $this->provincia = $provincia;
    }

    function setLocalidad($localidad) {
        $this->localidad = $localidad;
    }

    function setDireccion($direccion) {
        $this->direccion = $direccion;
    }

    function setCoste($coste) {
        $this->coste = $coste;
    }

    function setEstado($estado) {
        $this->estado = $estado;
    }

    function setFecha($fecha) {
        $this->fecha = $fecha;
    }

    function setHora($hora) {
        $this->hora = $hora;
    }

    function setConexion($conexion) {
        $this->conexion = $conexion;
    }
}
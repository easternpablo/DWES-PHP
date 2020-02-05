<?php

class UsuariosModel extends Database {
    
    private $id, $nombre, $apellidos, $email, $password, $rol, $imagen;
    private $conexion;
    
    public function __construct($nombre=null,$apellidos=null,$email=null,$password=null,$rol=null,$imagen=null) {
        $this->conexion = parent::conectar();
        if(isset($nombre)){$this->nombre=$nombre;}
        if(isset($apellidos)){$this->apellidos=$apellidos;}
        if(isset($email)){$this->email=$email;}
        if(isset($password)){$this->password=$password;}
        if(isset($rol)){$this->rol=$rol;}
        if(isset($imagen)){$this->imagen=$imagen;}
    }
    
    public function login($email){
        $consulta = $this->conexion->query(" SELECT * FROM usuarios WHERE email='$email' ");
        return $consulta;
    }

    public function save(){
        $guardar = $this->conexion->exec(" INSERT INTO usuarios VALUES(null,'{$this->getNombre()}','{$this->getApellidos()}','{$this->getEmail()}','{$this->getPassword()}','{$this->getRol()}','{$this->getImagen()}'); ");
        $resultado = false;
        if($guardar){
            $resultado = true;
        }
        return $resultado;
    }
    
    public function get_user_id($id){
        $consulta = $this->conexion->query(" SELECT * FROM usuarios WHERE id=$id ");
        return $consulta;
    }
    
    function getId() {
        return $this->id;
    }

    function getNombre() {
        return $this->nombre;
    }

    function getApellidos() {
        return $this->apellidos;
    }

    function getEmail() {
        return $this->email;
    }

    function getPassword() {
        return $this->password;
    }

    function getRol() {
        return $this->rol;
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

    function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    function setApellidos($apellidos) {
        $this->apellidos = $apellidos;
    }

    function setEmail($email) {
        $this->email = $email;
    }

    function setPassword($password) {
        $this->password = $password;
    }

    function setRol($rol) {
        $this->rol = $rol;
    }

    function setImagen($imagen) {
        $this->imagen = $imagen;
    }

    function setConexion($conexion) {
        $this->conexion = $conexion;
    }
}
<?php

class UsuariosModel extends Database{
    
    private $id, $nombre, $apellidos, $email, $password, $fecha;
    private $conn;
    
    public function __construct($nombre=null, $apellidos=null, $email=null, $password=null) {
        $this->conn = parent::conectaDB();
        if(isset($nombre)){$this->nombre=$nombre;}
        if(isset($apellidos)){$this->apellidos=$apellidos;}
        if(isset($email)){$this->email=$email;}
        if(isset($password)){$this->password=$password;}
    }
    
    public function get_all(){
        $consulta = $this->conn->query(" SELECT * FROM Usuarios ORDER BY id DESC ");
        return $consulta;
    }
    
    public function save(){
        $sql = " INSERT INTO Usuarios VALUES(null,'{$this->getNombre()}','{$this->getApellidos()}','{$this->getEmail()}','{$this->getPassword()}',CURDATE());";
        $save = $this->conn->exec($sql);
        $resultado = false;
        if($save){
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

    function getApellidos() {
        return $this->apellidos;
    }

    function getEmail() {
        return $this->email;
    }

    function getPassword() {
        return $this->password;
    }

    function getFecha() {
        return $this->fecha;
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

    function setFecha($fecha) {
        $this->fecha = $fecha;
    }  
}
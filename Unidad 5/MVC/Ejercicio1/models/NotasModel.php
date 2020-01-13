<?php

    class NotasModel extends Database{
        
        private $id, $usuario_id, $titulo, $descripcion, $fecha;
        private $conn;
        
        function __construct($usuario_id=null, $titulo=null, $descripcion=null) {
            $this->conn = parent::conectaDB();
            if(isset($usuario_id)){$this->usuario_id = $usuario_id;}
            if(isset($titulo)){$this->titulo = $titulo;}
            if(isset($descripcion)){$this->descripcion = $descripcion;}
        }
        
        public function get_all(){
            $consulta = $this->conn->query(" SELECT * FROM Notas ORDER BY id DESC ");
            return $consulta;
        }
        
        public function save(){
            $sql = " INSERT INTO Notas VALUES(null,'{$this->getUsuario_id()}','{$this->getTitulo()}','{$this->getDescripcion()}',CURDATE());";
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

        function getUsuario_id() {
            return $this->usuario_id;
        }

        function getTitulo() {
            return $this->titulo;
        }

        function getDescripcion() {
            return $this->descripcion;
        }

        function getFecha() {
            return $this->fecha;
        }

        function getConn() {
            return $this->conn;
        }

        function setId($id) {
            $this->id = $id;
        }

        function setUsuario_id($usuario_id) {
            $this->usuario_id = $usuario_id;
        }

        function setTitulo($titulo) {
            $this->titulo = $titulo;
        }

        function setDescripcion($descripcion) {
            $this->descripcion = $descripcion;
        }

        function setFecha($fecha) {
            $this->fecha = $fecha;
        }

        function setConn($conn) {
            $this->conn = $conn;
        }
    }

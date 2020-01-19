<?php

    class OfertasModel extends Database{
        
        private $id, $titulo, $imagen, $descripcion;
        private $conn;
        
        public function __construct($titulo=null, $imagen=null, $descripcion=null) {
            $this->conn = parent::conectaDB();
            if(isset($titulo)){$this->titulo=$titulo;}
            if(isset($imagen)){$this->imagen=$imagen;}
            if(isset($descripcion)){$this->descripcion=$descripcion;}
        }
        
        public function save(){
            
        }
        
        function getId() {
            return $this->id;
        }

        function getTitulo() {
            return $this->titulo;
        }

        function getImagen() {
            return $this->imagen;
        }

        function getDescripcion() {
            return $this->descripcion;
        }

        function getConn() {
            return $this->conn;
        }

        function setId($id) {
            $this->id = $id;
        }

        function setTitulo($titulo) {
            $this->titulo = $titulo;
        }

        function setImagen($imagen) {
            $this->imagen = $imagen;
        }

        function setDescripcion($descripcion) {
            $this->descripcion = $descripcion;
        }

        function setConn($conn) {
            $this->conn = $conn;
        }
    }
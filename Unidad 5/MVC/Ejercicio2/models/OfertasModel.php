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
            $sql = " INSERT INTO oferta VALUES(null,'{$this->getTitulo()}','{$this->getImagen()}','{$this->getDescripcion()}'); ";
            $guardado = $this->conn->exec($sql);
            $resultado = false;
            if($guardado){
                $resultado = true;
            }
            return $resultado;
        }
        
        public function delete(){
            $sql = " DELETE FROM oferta WHERE id={$this->getId()} ";
            $borrado = $this->conn->exec($sql);
            $resultado = false;
            if($borrado){
                $resultado = true;
            }
            return $resultado;
        }
        
        public function editWithImage($id){
            $sql = " UPDATE oferta SET titulo='{$this->getTitulo()}',descripcion='{$this->getDescripcion()}'";
            if($this->getImagen() != null){
                $sql .= ", imagen='{$this->getImagen()}'";
            }
            $sql .= " WHERE id=$id; ";
            $editado = $this->conn->exec($sql);
            $resultado = false;
            if($editado){
                $resultado = true;
            }
            return $resultado;
        }
        
        public function editWithoutImage($id){
            $sql = " UPDATE oferta SET titulo='{$this->getTitulo()}',descripcion='{$this->getDescripcion()}' WHERE id=$id; ";
            $editado = $this->conn->exec($sql);
            $resultado = false;
            if($editado){
                $resultado = true;
            }
            return $resultado;
        }
        
        public function get_all_sales(){
            $consulta = $this->conn->query( " SELECT * FROM Oferta ORDER BY id");
            return $consulta;
        }
        
        public function get_sale_id($id){
            $consulta = $this->conn->query(" SELECT * FROM Oferta WHERE id=$id");
            return $consulta;
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
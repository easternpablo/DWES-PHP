<?php

require_once 'models/CategoriasModel.php';

class CategoriasController {
    
    function index(){
        require_once 'views/main.php';
    }
    
    function MostrarTodo(){
        $categoria = new CategoriasModel();
        $todasCategoria = $categoria->get_all();
        $categorias = $todasCategoria->fetchObject();
        require_once('views/main.php');
    }
}
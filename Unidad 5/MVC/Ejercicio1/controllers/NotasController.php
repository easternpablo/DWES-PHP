<?php

    require_once('models/NotasModel.php');
    
    class NotasController{
        
        public function index(){
            require_once('views/usuario/principal.php');
        }
        
        public function TodasNotas(){
            $nota = new NotasModel();
            $todasNotas = $nota->get_all();
            require_once('views/nota/TodasNotasView.php');
        }
        
        public function MostrarNotasId(){
            if(!isset($_GET['iduser'])){
                require_once('views/usuario/TodosUsuariosView.php');               
            }else{
                $id = $_GET['iduser'];
                $nota = new NotasModel();
                $nota->setUsuario_id($id);
                $notasUser = $nota->get_all_id();
                require_once('views/nota/MostrarNotasUserView.php');
            }
        }
        
        public function save(){
            if(!isset($_POST['submit'])){
                require_once('views/nota/CrearNotaView.php');
            }else{
                $usuario_id = isset($_POST['usuarioid']) ? $_POST['usuarioid'] : false;
                $titulo = isset($_POST['titulo']) ? $_POST['titulo'] : false;
                $descripcion = isset($_POST['descripcion']) ? $_POST['descripcion'] : false;
                if($usuario_id && $titulo && $descripcion){
                    $nota = new NotasModel($usuario_id,$titulo,$descripcion);
                    $save = $nota->save();
                    if($save){
                        $_SESSION['register'] = "complete";
                        $this->index();
                    }else{
                        $_SESSION['register'] = "failed";
                    }
                }else{
                    $_SESSION['register'] = "failed";
                }
            }
        }
    }


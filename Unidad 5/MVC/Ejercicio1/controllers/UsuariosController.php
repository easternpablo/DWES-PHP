<?php

    require_once('models/UsuariosModel.php');
    
    class UsuariosController{
        
        public function index(){
            require_once('views/usuario/principal.php');
        }
        
        public function TodosUsuarios(){
            $usuario = new UsuariosModel();
            $todosUsuarios = $usuario->get_all();
            require_once('views/usuario/TodosUsuariosView.php');
        }
        
        public function save(){
            if(!isset($_POST['submit'])){
                require_once('views/usuario/CrearUsuarioView.php');
            }else{
                $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : false;
                $apellidos = isset($_POST['apellidos']) ? $_POST['apellidos'] : false;
                $email = isset($_POST['email']) ? $_POST['email'] : false;
                $password = isset($_POST['password']) ? $_POST['password'] : false;
                if($nombre && $apellidos && $email && $password){
                    $usuario = new UsuariosModel($nombre,$apellidos,$email,$password);
                    $save = $usuario->save();
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
        
        public function delete(){
            if(!isset($_GET['idDelete'])){
                require_once('views/usuario/TodosUsuariosView.php');               
            }else{
                $id = $_GET['idDelete'];
                if($id){
                    $usuario = new UsuariosModel();
                    $usuario->setId($id);
                    $delete = $usuario->delete();
                    if($delete){
                        $_SESSION['remove'] = "complete";
                        $this->TodosUsuarios();
                    }else{
                        $_SESSION['remove'] = "failed";
                    }
                }else{
                    $_SESSION['remove'] = "failed";
                }
            }
        }
    }
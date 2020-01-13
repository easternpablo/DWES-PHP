<?php

    require_once('models/NotasModel.php');
    
    class NotasController{
        
        
        public function TodasNotas(){
            $nota = new NotasModel();
            $todasNotas = $nota->get_all();
            require_once('views/notas/TodasNotasView.php');
        }
        
        /*public function save(){
            if(isset($_POST)){
                $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : false;
                $apellidos = isset($_POST['apellidos']) ? $_POST['apellidos'] : false;
                $email = isset($_POST['email']) ? $_POST['email'] : false;
                $password = isset($_POST['password']) ? $_POST['password'] : false;
                if($nombre && $apellidos && $email && $password){
                    $usuario = new UsuariosModel($nombre,$apellidos,$email,$password);
                    $save = $usuario->save();
                    if($save){
                        $_SESSION['register'] = "complete";
                    }else{
                        $_SESSION['register'] = "failed";
                    }
                }else{
                    $_SESSION['register'] = "failed";
                }
            }
            header("Location:index.php?c=Usuarios&a=registro");
        }*/
    }


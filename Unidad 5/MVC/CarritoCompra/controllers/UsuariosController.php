<?php

require_once 'models/UsuariosModel.php';

class UsuariosController {
    
    function index(){
        require_once 'views/main.php';
    }
    
    function LoginUsuario(){
        if(!isset($_POST['submit'])){
            require_once 'views/main.php';
        }else{
            $email = isset($_POST['email']) ? $_POST['email'] : false;
            $password = isset($_POST['pwd']) ? $_POST['pwd'] : false;
            $usuario = new UsuariosModel();
            $user = $usuario->login($email, $password);
            if($user){
                $rol = $usuario->getRol();
                $_SESSION['rol'] = $rol;
                $nombre = $usuario->getNombre();
                $_SESSION['nombre'] = $nombre;
                require_once '';
            }else{
                $_SESSION['login'] = "failed";
            }
        }
    }
            
    function RegistrarUsuario(){
        if(!isset($_POST['submit'])){
            require_once 'views/main.php';
        }else{
            $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : false;
            $apellidos = isset($_POST['apellidos']) ? $_POST['apellidos'] : false;
            $email = isset($_POST['emailR']) ? $_POST['emailR'] : false;
            $password = isset($_POST['pwdR']) ? $_POST['pwdR'] : false;
            $rol = isset($_POST['rol']) ? $_POST['rol'] : false;
            if(isset($_FILES['imagen'])){
                $file = $_FILES['imagen'];
                $filename = $file['name'];
                $mimetype = $file['type'];
                if($mimetype == "image/jpg" || $mimetype == "image/jpeg" || $mimetype == "image/png" || $mimetype == "image/gif"){
                    if(!is_dir('uploads/img')){
                        mkdir('uploads/img', 0777, true);
                    }
                    move_uploaded_file($file['tmp_name'], "uploads/img/".$filename);                        
                }
            }
            if($nombre && $apellidos && $email && $password && $rol && $filename){               
                $usuario = new UsuariosModel($nombre,$apellidos,$email,$password,$rol,$filename);
                $grabar = $usuario->save();
                if($grabar){
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

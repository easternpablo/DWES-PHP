<?php

    require_once 'models/OfertasModel.php';
    
    class OfertasController{
        
        public function index(){
            require_once 'views/main.php';
        }
        
        public function TodasOfertas(){
            $oferta = new OfertasModel();
            $todasOfertas = $oferta->get_all_sales();
            require_once 'views/ofertas/TodasOfertasView.php';
        }
        
        public function OfertaId(){
            if(!isset($_GET['idoferta'])){
                require_once 'views/ofertas/TodasOfertasView.php';
            }else{
                $id = $_GET['idoferta'];
                $oferta = new OfertasModel();
                $oferta->setId($id);
                $ofertaId = $oferta->get_sale_id();
                require_once 'views/ofertas/OfertaIdView.php';
            }
        }
        
        public function NuevaOferta(){
            if(!isset($_GET['idoferta'])){
                $this->GrabarOferta();
            }else{
                require_once 'views/ofertas/CrearOfertaView.php';
            }
        }
        
        public function GrabarOferta(){
            if(!isset($_POST['submit'])){
                require_once 'views/ofertas/CrearOfertaView.php';
            }else{
                $titulo = isset($_POST['titulo']) ? $_POST['titulo'] : false;
                $descripcion = isset($_POST['descripcion']) ? $_POST['descripcion'] : false;
                if(isset($_FILES['imagen'])){
                    $file = $_FILES['imagen'];
                    $filename = $file['name'];
                    $mimetype = $file['type'];
                    if($mimetype == "image/jpg" || $mimetype == "image/jpeg" || $mimetype == "image/png" || 
                        $mimetype == "image/gif"){
                        if(!is_dir('uploads/img')){
                            mkdir('uploads/img', 0777, true);
                        }
                        move_uploaded_file($file['tmp_name'], "uploads/img/".$filename);
                        if($titulo && $filename && $descripcion){
                            $oferta = new OfertasModel($titulo,$filename,$descripcion);
                            $grabar = $oferta->save();
                            var_dump($grabar);
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
        }
        
        public function BorrarOferta(){
            if(!isset($_GET['idoferta'])){
                require_once 'views/ofertas/TodasOfertasView.php';
            }else{
                $id = $_GET['idoferta'];
                if($id){
                    $oferta = new OfertasModel();
                    $oferta->setId($id);
                    $borrado = $oferta->delete();
                    if($borrado){
                        $_SESSION['remove'] = "complete";
                        $this->TodasOfertas();
                    }else{
                        $_SESSION['remove'] = "failed";
                    }
                }else{
                    $_SESSION['remove'] = "failed";
                }              
            }
        }
    }
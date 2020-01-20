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
        
        public function GuardarOferta(){
            
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
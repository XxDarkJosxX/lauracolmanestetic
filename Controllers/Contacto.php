<?php 
    class Contacto extends Controllers{
        public function __construct() {
            parent::__construct();
           
        }
        public function contacto(){

        
            $data['page_tag'] = "Contacto";
            $data['page_title']= "";
            $data['page_name'] = "contacto";
            $data['page_js'] = "functioncontacto.js";
            $this->views->getview($this,"contacto",$data);
        }


    }
?>
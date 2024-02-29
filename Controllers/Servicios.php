<?php 
    class Servicios extends Controllers{
        public function __construct() {
            parent::__construct();
           
        }
        public function servicios(){

        
            $data['page_tag'] = "Servicios";
            $data['page_title']= "";
            $data['page_name'] = "Servicios";
            $data['page_js'] = "functionservicioss.js";
            $this->views->getview($this,"servicios",$data);
        }


    }
?>
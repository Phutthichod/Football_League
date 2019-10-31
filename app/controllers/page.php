<?php
    class page extends Controller{
        function __construct(){

        }
        public function page(){
            // $this->data = $this->getData();
            $this->sidebar = 'page';
            require "views/page2/index.php";
        }
        
    }
?>
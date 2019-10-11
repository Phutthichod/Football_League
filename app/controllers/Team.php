<?php
    class Team extends Controller{
        function __construct(){

        }
        public function index(){
            $this->data = $this->getData();
            require "views/Team/index.php";
        }
        public function addData(){
            $name = $_POST["name"];
            $icon = $_POST["icon"];
            $data = ["NTEAM" => $name , "ITEAM" => $icon];
            $this->data = $this->model->addData($data);
            $this->index();
        }
        public function getData(){
           return $this->model->getData();
        }
        public function deleteData(){
            $id = $_POST['id'];
            $this->data = $this->model->deleteData($id);
            $this->index();
        }
        public function updateData(){
            $id = $_POST['id'];
            $name = $_POST["name"];
            $icon = $_POST["icon"];

            $where = "TID = $id";
            $data = ["NTEAM" => $name,"ITEAM" => $icon];
            $this->data = $this->model->updateData( $data, $where);
            $this->index();
        }
    }
?>
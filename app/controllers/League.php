<?php
    class League extends Controller{
        function __construct(){

        }
        public function index(){
            // $this->data = $this->getData();
            $this->sidebar = 'staff';
            require "views/League/index.php";
        }
        public function addData(){
            $name = $_POST["name"];
            $icon = $_POST["icon"];
            $color = $_POST["color"];
            $data = ["NLeague" => $name , "ILeague" => $icon ,  "CLeague" => $color];
            $this->data = $this->model->addData($data);
            header('Location: '.URL);
        }
        public function getData(){
           return $this->model->getData();
        }
        public function deleteData(){
            $id = $_POST['id'];
            $where = "LID = $id";
            $this->data = $this->model->deleteData($where);
            echo json_encode($this->getData());
        }
        public function updateData(){
            $id = $_POST['id'];
            $name = $_POST["name"];
            $icon = $_POST["icon"];
            $color = $_POST["color"];
            
            $where = "LID = $id";
            $data = ["NLeague" => $name , "ILeague" => $icon , "CLeague" => $color];
            $this->data = $this->model->updateData($data, $where);
            header('Location: '.URL);
        }
    }
?>
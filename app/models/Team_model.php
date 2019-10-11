<?php
    class Team_model extends Model{
        public function __construct() {
            parent::__construct();
            $this->table = "league";
        }
        public function addData($data){
            $this->db->insert($this->table,$data);
        }
        public function getData(){
            $sql = "Select * From $this->table";
            return $this->db->selectAll($sql);
        }
        public function deleteData($id){
            $this->db->delete($id);
        }
        public function updateData( $data, $where){
            $this->db->update($this->table, $data, $where);
        }
    }
?>
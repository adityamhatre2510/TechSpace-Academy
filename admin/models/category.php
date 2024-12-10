<?php

class CategoryModel {
    private $db;

    public function __construct() {
        $this->db = new Database();
    }

    public function getById($id) {
        $sql = "SELECT * FROM categories WHERE id = '".$id."'";
        $result = $this->db->query($sql);
        return $result->fetch_assoc();
    }

    public function getAll() {
        $sql = "SELECT * FROM categories";
        $result = $this->db->query($sql);
        $data = array();

        if($result->num_rows > 0) {
            while($row = $result->fetch_object()) {
                array_push($data, $row);
            }
        }

        return $data;
    }

    public function save($data) {
        
    }

    public function update($data) {
        
    }

    public function approve($data) {
        
    }

    public function delete($data) {
        
    }

    public function __destruct() {
        $this->db->close();
    }
}

?>
<?php

class UserModel {
    private $db;

    public function __construct() {
        $this->db = new Database();
    }

    public function getById($id) {
        $sql = "SELECT * FROM users WHERE id = '".$id."'";
        $result = $this->db->query($sql);
        return $result->fetch_assoc();
    }

    public function checkUser($data) {
        $sql = "SELECT id, first_name, last_name, email, user_role FROM users WHERE status=1 and user_role IN ('ADMIN', 'INSTRUCTOR') and email = '".$data['email']."' and password = '".$data['password']."'";
        $result = $this->db->query($sql);
        return $result->fetch_assoc();
    }

    public function getActiveInstructors() {
        $sql = "SELECT id, first_name, last_name FROM users WHERE user_role = 'INSTRUCTOR' and status = 1";
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

    public function delete($data) {
        
    }

    public function __destruct() {
        $this->db->close();
    }
}

?>
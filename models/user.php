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

    public function isExists($data=null) {
        $sql = "SELECT id, first_name, last_name, email, user_role FROM users WHERE email = '".$data['email']."'";
        $result = $this->db->query($sql);
        return $result->fetch_assoc();
    }

    public function checkUser($data) {
        $sql = "SELECT id, first_name, last_name, email, user_role FROM users WHERE status=1 and user_role IN ('STUDENT') and email = '".$data['email']."' and password = '".$data['password']."'";
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
        unset($data['id']);
        $sql = "INSERT INTO users (first_name, last_name, email, password, user_role, status) VALUES ('".$data['first_name']."', '".$data['last_name']."', '".$data['email']."', '".$data['password']."', '".$data['user_role']."', 1)";        
        $result = $this->db->save($sql);
        return $result;
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
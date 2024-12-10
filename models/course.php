<?php

class CourseModel {
    private $db;

    public function __construct() {
        $this->db = new Database();
    }

    public function getById($id = 0) {
        $sql = "SELECT courses.*, CONCAT(users.first_name, users.last_name) as instructor_name, categories.name as category_name FROM courses LEFT JOIN categories ON categories.id = courses.category_id LEFT JOIN users ON courses.instructor_id = users.id WHERE courses.id = ".(int)$id;
        $result = $this->db->query($sql);
        return $result->fetch_object();
    }

    public function getAll() {
        $sql = "SELECT courses.*, CONCAT(users.first_name, users.last_name) as instructor_name, categories.name as category_name FROM courses LEFT JOIN categories ON categories.id = courses.category_id LEFT JOIN users ON courses.instructor_id = users.id";
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
        $sql="INSERT INTO courses (".implode(", ", array_keys($data)).") VALUES ('".implode("', '", arraY_values($data))."')";
        $result = $this->db->save($sql);
        return $result;
    }

    public function update($id, $data) {
        unset($data['id']);
        $sql = "UPDATE courses SET ";
        
        $update_sql = array();
        foreach($data as $k=>$v) {
            array_push($update_sql, $k . " = '" . $v . "'");
        } 
        
        $sql .= implode(", ", $update_sql)." WHERE id = ".(int)$id;

        $result = $this->db->save($sql);
        return $result;        
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
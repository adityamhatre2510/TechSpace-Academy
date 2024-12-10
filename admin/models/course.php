<?php

class CourseModel {
    private $db;

    public function __construct() {
        $this->db = new Database();
    }

    public function getById($id = 0) {
        $sql = "SELECT courses.*, CONCAT(users.first_name, users.last_name) as instructor_name, categories.name as category_name FROM courses LEFT JOIN categories ON categories.id = courses.category_id LEFT JOIN users ON courses.instructor_id = users.id WHERE courses.id = '".$id."'";
        $result = $this->db->query($sql);
        return $result->fetch_assoc();
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
        // $sql = "INSERT INTO courses (`title`, `image`, `introduction`, `category_id`, `cost_price`, `selling_price`, `rating`, `instructor_id`, `description`, `certification`, `learning_outcomes`, `status`, `total_lectures`, `total_quizzes`, `course_duration`, `course_term`, `skill_level`, `course_language`, `students_enrolled`, `assessments_marked`) VALUES (
        //     '".$data['title']."', '".$data['image']."', '".$data['introduction']."', ".(int)$data['category_id'].", ".(int)$data['cost_price'].", ".(int)$data['selling_price'].", ".(int)$data['rating'].", ".(int)$data['instructor_id'].", '".$data['description']."', '".$data['certification']."', '".$data['learning_outcomes']."', '".$data['status']."', ".(int)$data['total_lectures'].", ".(int)$data['total_quizzes'].", ".(int)$data['course_duration'].", '".$data['course_term']."', '".$data['skill_level']."', '".$data['course_language']."', ".(int)$data['students_enrolled'].", ".(int)$data['assessments_marked']."
        // )";        
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
            array_push($update_sql, $k . " = '" . addslashes($v) . "'");
        } 
        
        $sql .= implode(", ", $update_sql)." WHERE id = ".(int)$id;

        $result = $this->db->save($sql);

        // $sql = "UPDATE courses SET title = ?, image = ?, introduction = ?, category_id = ?, cost_price = ?, selling_price = ?, rating = ?, instructor_id = ?, description = ?, certification = ?, learning_outcomes = ?, status = ?, total_lectures = ?, total_quizzes = ?, course_duration = ?, course_term = ?, skill_level = ?, course_language = ?, students_enrolled = ?, assessments_marked";
        // $stmt = $this->db->prepare($sql);
        // $stmt->bind_param("sssi", $name, $email, $password, $id);
        // $stmt->execute();


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
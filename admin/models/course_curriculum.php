<?php

class CourseCurriculumModel {
    private $db;

    public function __construct() {
        $this->db = new Database();
    }

    public function getById($id = 0) {
        $sql = "SELECT * FROM course_curriculum WHERE id = '".$id."'";
        $result = $this->db->query($sql);
        return $result->fetch_assoc();
    }

    public function getByCourseId($course_id = 0) {
        $sql = "SELECT * FROM course_curriculum WHERE course_id = '".$course_id."'";
        $result = $this->db->query($sql);
        $data = array(
            'level'=>array(0=>''),
            'title'=>array(0=>''),
            'duration'=>array(0=>'')
        );

        if($result->num_rows > 0) {
            $i = 0;
            while($row = $result->fetch_object()) {
                $data['level'][$i] = $row->level;
                $data['title'][$i] = $row->title;
                $data['duration'][$i] = $row->duration;
                $i++;
            }
        }

        return $data;
    }

    public function getAll() {
        $sql = "SELECT * FROM course_curriculum";
        $result = $this->db->query($sql);
        $data = array();

        if($result->num_rows > 0) {
            while($row = $result->fetch_object()) {
                array_push($data, $row);
            }
        }

        return $data;
    }

    public function save($course_id=0, $data) {  
        $sql = "DELETE FROM course_curriculum WHERE course_id = ".(int)$course_id;
        $this->db->query($sql);

        for($i=0; $i<count($data['level']); $i++) {
            if($data['level'][$i]) {
                $sql = "INSERT INTO course_curriculum (course_id, level, title, duration, status) VALUES (".(int)$course_id.", '".$data['level'][$i]."', '".$data['title'][$i]."', '".$data['duration'][$i]."', 1)";
                $this->db->query($sql);
            }
        }
        return true;
    }

    public function __destruct() {
        $this->db->close();
    }
}

?>
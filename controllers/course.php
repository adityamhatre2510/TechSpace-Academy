<?php
include_once './models/course.php';
include_once './models/category.php';
include_once './models/user.php';
include_once './models/course_curriculum.php';

class CourseController {
    private $course_model;
    private $category_model;
    private $user_model;
    private $terms;
    private $course_curriculam;

    public function __construct() {
        $this->course_model = new CourseModel();
        $this->category_model = new CategoryModel();
        $this->user_model = new UserModel();
        $this->course_curriculam = new CourseCurriculumModel();        
        $this->terms = (object) array(
            array("id"=>"WINTER", "name"=>"WINTER"),
            array("id"=>"SUMMER", "name"=>"SUMMER"),
            array("id"=>"FALL", "name"=>"FALL"),
        );
        $this->terms = json_decode(json_encode($this->terms), FALSE);
    }

    public function index() {
        $courses = $this->course_model->getAll(); 
        require_once './views/courses.php';
    }

    public function showCourse($id = 0) {
        $course = $this->course_model->getById($id);
        $curriculams = $this->course_curriculam->getAll(array("course_id"=>$id));

        $all_curriculams = array();
        foreach($curriculams as $curriculam) {
            $all_curriculams[$curriculam->level][] = array('title' => $curriculam->title, 'duration' => $curriculam->duration);
        }
        require_once './views/courses-details.php';
    }
}
?>
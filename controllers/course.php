<?php
include_once './models/course.php';
include_once './models/category.php';
include_once './models/user.php';
include_once './models/course_curriculum.php';

class CourseController {
    private $model;
    private $category_model;
    private $user_model;
    private $terms;
    private $course_curriculam;

    public function __construct() {
        $this->model = new CourseModel();
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
        $courses = $this->model->getAll(); 
        require_once './views/courses.php';
    }

    public function showCourse($id = 0) {
        $course = $this->model->getById($id);
        require_once './views/courses-details.php';
    }
}
?>
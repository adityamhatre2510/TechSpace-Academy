<?php
include_once './models/course.php';
include_once './models/category.php';
include_once './models/user.php';
include_once './models/course_curriculum.php';

class HomeController {
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
        $courses = $this->course_model->getAll(array("limit"=> 5));
        require_once './views/home.php';
    }

    public function about() {
        require_once './views/about.php';
    }

    public function contact() {
        require_once './views/contact.php';
    }

    public function faqs() {
        require_once './views/faqs.php';
    }
}
?>
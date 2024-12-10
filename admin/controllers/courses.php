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
    private $course_curriculam_model;

    public function __construct() {
        $this->model = new CourseModel();
        $this->category_model = new CategoryModel();
        $this->user_model = new UserModel();
        $this->course_curriculam_model = new CourseCurriculumModel();        
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

    public function addCourse() {
        $url = ROOT_PATH."/courses/add";
        $course_data = array();
        $curriculum_data = array(
            'level'=>array(0=>''),
            'title'=>array(0=>''),
            'duration'=>array(0=>'')
        );
        
        if($_SERVER["REQUEST_METHOD"] == "POST") {
            $course_data = $_REQUEST;
            $curriculum_data = $course_data['course_curriculum'];
            unset($course_data['course_curriculum']);
            $result = $this->model->save($course_data);
            if($result['insert_id'] > 0 && $result['error'] == null) {
                $this->course_curriculam_model->save($result['insert_id'], $curriculum_data);
            }
        }        
        
        $categories = $this->category_model->getAll();
        $instructors = $this->user_model->getActiveInstructors();        
        $terms = $this->terms;

        $curriculum_data = json_decode(json_encode($curriculum_data), FALSE);

        require_once './views/add_course.php';
    }

    public function editCourse($id = 0) {
        $url = ROOT_PATH."/courses/edit/".$id;
        $course_data = array();
        $curriculum_data = array(
            'level'=>array(0=>''),
            'title'=>array(0=>''),
            'duration'=>array(0=>'')
        );

        if($_SERVER["REQUEST_METHOD"] == "POST" && $id > 0) {
            $course_data = $_REQUEST;
            $curriculum_data = $course_data['course_curriculum'];
            unset($course_data['course_curriculum']);
            $result = $this->model->update($id, $course_data);
            if($result['error'] == null) {
                $this->course_curriculam_model->save($id, $curriculum_data);
            }
        } else {
            $course_data = $this->model->getById($id);
            $curriculum_records = $this->course_curriculam_model->getByCourseId($id);

            if($curriculum_records) {
                $curriculum_data = $curriculum_records;
            }
        }

        $categories = $this->category_model->getAll();
        $instructors = $this->user_model->getActiveInstructors();
        $terms = $this->terms;        
        $curriculum_data = json_decode(json_encode($curriculum_data), FALSE);

        require_once './views/add_course.php';
    }
}
?>
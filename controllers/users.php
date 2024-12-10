<?php
include_once './models/user.php';

class UserController {
    private $model;

    public function __construct() {
        $this->model = new UserModel();
    }

    public function profile() {
        require_once './views/profile.php';
    }

    public function register() {
        if($_SERVER["REQUEST_METHOD"] == "POST") {
            $user_data = $_REQUEST;
            $_REQUEST['user_role'] = "STUDENT";
            $isUserExists = 0;//$this->model->isExists($_REQUEST);
            if($isUserExists && $isUserExists['id'] > 0) {
                $_SESSION['err_msg'] = "User already exists.";
            } else {
                $result = $this->model->save($_REQUEST);
                if($result['insert_id'] > 0 && $result['error'] == null) {
                    //$_SESSION['success_msg'] = "Register Successfully";
                    header('Location: '.ROOT_PATH.'/login');
                    exit();
                } else {
                    $_SESSION['err_msg'] = "Error while registration";
                }
            }
        }

        require_once './views/register.php';
    }

    public function forgetPassword() {
        require_once './views/forget-password.php';
    }

    public function login() {
        if($_SERVER["REQUEST_METHOD"] == "POST") {
            $isLoggedIn = $this->model->checkUser($_POST);
            if(!$isLoggedIn) {
                $_SESSION['err_msg'] = "Invalid Credentials";
            } else {
                $_SESSION['is_user_login'] = true;
                $_SESSION['user'] = $isLoggedIn;
                $_SESSION['success_msg'] = "Login Successfully";
                header('location: ./');
                exit();
            }
        }
        
        require_once './views/login.php';
    }

    public function logout() {
        session_unset();
        $_SESSION['message'] = "Logout successfully.";
        header('Location:'.ROOT_PATH.'/login');
        exit();
    }

    public function index() {
        if(isset($_SESSION['is_user_login'])) {
            header('Location: ./profile');
            exit();
        } else {
            header('Location: ./login');
            exit();
        }
    }
}
?>
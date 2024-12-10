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

    public function login() {

        if($_SERVER["REQUEST_METHOD"] == "POST") {
            $isLoggedIn = $this->model->checkUser($_POST);
            if(!$isLoggedIn) {
                $_SESSION['err_msg'] = "Invalid Credentials";
            } else {
                $_SESSION['is_admin_login'] = true;
                $_SESSION['admin'] = $isLoggedIn;
                $_SESSION['success_msg'] = "Login Successfully";
                header('Location: ./');
                exit();
            }
        }

        require_once './views/login.php';
    }

    public function logout() {
        session_unset();
        $_SESSION['message'] = "Logout successfully.";
        header('location:./');
        exit();
    }

    public function index() {
        if(isset($_SESSION['is_admin_login'])) {
            header('Location: ./dashboard');
            exit();
        } else {
            header('Location: ./login');
            exit();
        }
    }
}
?>
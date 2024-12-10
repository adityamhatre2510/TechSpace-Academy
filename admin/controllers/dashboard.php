<?php
class DashboardController {
    public function __construct() {
        isLogin();
    }
    public function index() {
        require_once './views/dashboard.php';
    }
}
?>
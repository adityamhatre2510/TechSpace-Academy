<?php
// Start the session
session_start();

function isLogin() {
    if(!isset($_SESSION['is_admin_login'])) {
        header("location: ./login");
        die();
    }
}

function displayMessage() {
    if (isset($_SESSION["err_msg"])) {
	    return '<div class="alert alert-danger">'.$_SESSION["err_msg"].'</div>';
	    unset($_SESSION["err_msg"]);
	}

    if (isset($_SESSION["success_msg"])) {
	    return '<div class="alert alert-success">'.$_SESSION["success_msg"].'</div>';
	    unset($_SESSION["success_msg"]);
	}
}

function checkAccess($action=null) {
    $access = $_SESSION['admin']['user_role'];
    $isAllowed = false;

    switch ($access) {
        case "STUDENT":
            $isAllowed = false;
            break;
        case "INSTRUCTOR":
            $isAllowed = array_search($action, ["CREATE", "EDIT", "APPROVE"]) > -1?true:false;
            break;
        case "ADMIN":
            $isAllowed = true;
            break;
        default:
            $isAllowed = false;
            break;
    }

    return $isAllowed;
}

?>
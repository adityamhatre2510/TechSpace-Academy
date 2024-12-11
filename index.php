<?php
require_once "./lib/config.php";
require_once BASE_URL."/lib/session.php";
require_once BASE_URL."/lib/db.php";
require_once BASE_URL."/lib/router.php";

$router = new Router(require_once BASE_URL.'/routes.php');
?>

<!DOCTYPE html>
<html lang="en">
    <!-- Header -->
    <?php require_once BASE_URL.'/includes/header.php'; ?>
    <body id="bg">
        <div class="page-wraper">
            <!-- <div id="loading-icon-bx"></div> -->
            
            <?php
            if(isset($_SESSION['error_request']) && !$_SESSION['error_request']) {
                //<!-- Navigation -->
                require_once BASE_URL.'/includes/navigation.php';
                
                //<!-- Content -->
                $router->route();

                //<!-- Footer -->
                require_once BASE_URL.'/includes/footer.php';                
            } else {
                //<!-- Error 404 Content -->
                $_SESSION['error_request'] = false;
                $router->route();
            }
            ?>
        </div>
        <?php
        //<!-- Internal / External JavaScripts -->
        require_once BASE_URL.'/includes/js_scripts.php';
        ?>
    </body>
</html>

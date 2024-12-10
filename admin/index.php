<?php
require_once "./lib/config.php";
require_once "./lib/session.php";
require_once "./lib/db.php";
require_once "./lib/router.php";

$router = new Router(require_once './routes.php');
?>

<!DOCTYPE html>
<html lang="en">
    <!-- Header -->
    <?php require_once BASE_URL.'/includes/header.php'; ?>

    <body class="ttr-opened-sidebar ttr-pinned-sidebar">
        
        <?php
        $content = $router->route();

        if(isset($_SESSION['error_request']) && !$_SESSION['error_request']) { 
            //<!-- Navigation -->
            if(!isset($_SESSION['is_admin_login'])) {
                //<!-- Content -->
                echo $content;
            } else {
                require_once BASE_URL.'/includes/navigation.php';

                //<!-- Left Navigation -->
                require_once BASE_URL.'/includes/left_navigation.php';
                
                //<!-- Content -->
                echo $content;

                //<!-- Footer -->
                require_once BASE_URL.'/includes/footer.php';
            }
        } else {
            //<!-- Error 404 Content -->
            $_SESSION['error_request'] = false;
            echo $content;
        }
        ?>

        <!-- Internal / External JavaScripts -->
        <?php //require_once './includes/js_scripts.php'; ?>
    </body>
</html>
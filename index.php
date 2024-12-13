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
            //<!-- Navigation -->
            require_once BASE_URL.'/includes/navigation.php';
            
            //<!-- Content -->
            $router->route();

            //<!-- Footer -->
            require_once BASE_URL.'/includes/footer.php'; 
            ?>
        </div>
        <?php
        //<!-- Internal / External JavaScripts -->
        require_once BASE_URL.'/includes/js_scripts.php';
        ?>
    </body>
</html>

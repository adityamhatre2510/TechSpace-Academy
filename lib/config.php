<?php
error_reporting(1);

define("BASE_URL", dirname(__DIR__));
define("ROOT_PATH", "");
define("ADMIN_PATH", "/admin");
define("CURRENCY", "CAD");

define("DB_HOST", "group2-techspace-academy-rds.czptxhzjxjrt.us-east-1.rds.amazonaws.com");
define("DB_USERNAME", "admin");
define("DB_PASSWORD", "techspaceacademy2");
define("DB_NAME", "techspace_academy");

function dd($data=null, $e=0) {
    echo '<pre>';
    print_r($data);
    echo '</pre>';
    !$e? exit: '';
}
?>

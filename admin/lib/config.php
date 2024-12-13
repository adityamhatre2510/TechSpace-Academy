<?php
error_reporting(E_ALL);
ini_set("display_errors", 0);

define("BASE_URL", dirname(__DIR__));
define("ROOT_PATH", "http://localhost/CLOUDCOMPUTING/TechProject/admin");
define("CURRENCY", "CAD");

define("DB_HOST", "localhost");
define("DB_USERNAME", "root");
define("DB_PASSWORD", "");
define("DB_NAME", "techspace_academy");

function dd($data=null, $e=0) {
    echo '<pre>';
    print_r($data);
    echo '</pre>';
    !$e? exit: '';
}
?>

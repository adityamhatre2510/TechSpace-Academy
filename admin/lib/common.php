<?php
$_GLOBALS["error_request"] = false;

require_once './controllers/home.php';
require_once './controllers/users.php';

function getUrl() {
    $urlArray = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
    $segments = explode('/', $urlArray);
    $numSegments = count($segments); 
    $currentSegment = $segments[$numSegments - 1];
    return $currentSegment;
}

function getContentFile() {
    $currentSegment = getUrl();
    switch ($currentSegment) {
        case '':       
        case 'home':
            $view = new HomeController();
            //$view = './views/' . $currentSegment . 'home.php';
            break;
        case 'login':
            $view = new UsersController();
            break;
        case 'about':
        case 'contact':
        case 'faqs':
        case 'register':
        case 'forget-password':
        case 'courses':
        case 'courses-details':
            $view = './views/' . $currentSegment . '.php';
            break;
        default:
            http_response_code(404);
            $_GLOBALS["error_request"] = true;
            $view = './views/404.php';
            break;
    }

    return $view;
}
<?php
require_once './controllers/dashboard.php';
require_once './controllers/courses.php';
require_once './controllers/error.php';
require_once './controllers/users.php';

class Router {
    
    private $routes;

    public function __construct(array $routes) {
        $this->routes = $routes;
    }

    public function route() {
        $path = preg_replace('#[^/]+/?$#', '', $_SERVER['PHP_SELF']);
        $url = str_replace($path, '/', $_SERVER['REQUEST_URI']);
        
        foreach ($this->routes as $route => $handler) {
            $pattern = $this->buildPattern($route);

            if (preg_match($pattern, $url, $matches)) {
                array_shift($matches); // Remove the full match
                $this->invokeControllerAction($handler, $matches);
                return;
            }
        }

        // Handle 404 - Route not found
        $this->handle404();
    }

    private function buildPattern($route) {
        return '#^' . preg_replace('/\{(\w+)\}/', '(?P<$1>[^/]+)', $route) . '$#';
    }

    private function invokeControllerAction($handler, $params) {
        list($controllerName, $action) = explode('@', $handler);        
        $controller = new $controllerName();
        $this->callControllerAction($controller, $action, $params);
    }

    private function callControllerAction($controller, $action, $params) {
        $reflectionMethod = new ReflectionMethod($controller, $action);
        $methodParameters = $reflectionMethod->getParameters();

        $resolvedParams = [];
        foreach ($methodParameters as $param) {
            $paramName = $param->getName();
            $resolvedParams[] = $params[$paramName] ?? null;
        }

        $reflectionMethod->invokeArgs($controller, $resolvedParams);
    }

    private function handle404() {
        // Handle the 404 error
        $_SESSION['error_request'] = true;
        $this->invokeControllerAction("ErrorController@index", "/404");
        return;
    }
}

?>
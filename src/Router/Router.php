<?php
class Router {
    private $routes = [
        'home' => '../src/Controllers/HomeController.php',
        '404' => '../src/Views/Errors/404.php'
    ];
    public function route() {
        $requestedRoute = filter_input(INPUT_GET, 'route', FILTER_SANITIZE_SPECIAL_CHARS);
        $requestedRoute = isset($requestedRoute) ? (array_key_exists($requestedRoute, $this->routes) ? $requestedRoute : '404' ) : 'home';
        return $this->routes[$requestedRoute];
    }
}
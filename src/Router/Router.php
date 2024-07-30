<?php
namespace App\Router;
use App\Controllers\HomeController;

class Router {
    private $routes = [
        'home' => '../src/Controllers/HomeController.php',
        '404' => '../src/Views/Errors/404.php'
    ];
    public function route($requestedRoute) {
        echo 'router.php  <br>';
        $requestedRoute = isset($requestedRoute) ? (array_key_exists($requestedRoute, $this->routes) ? $requestedRoute : '404' ) : 'home';
        switch ($requestedRoute) {
            case 'home':
                $route= $this->routes[$requestedRoute];
                $controller = new HomeController();
                $controller->index();
                break;
            case '404':
                $requestedRoute = '404';
                break;
        }
    }
}
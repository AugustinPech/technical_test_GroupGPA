<?php
namespace App\Router;

// use App\Controllers\HomeController;
// echo 'router.php  <br>';

class Router {
    private $routes = [
        'home' => '../src/Controllers/HomeController.php',
        'category'=> '../src/Controllers/CategoryCatalogController.php',
        'product' => '../src/Controllers/ProductController.php',
        '404' => '../src/Views/errors/error404.tpl.php'
    ];
    public function route($requestedRoute, $requestedCategory, $requestedProductId) {
        $requestedRoute = isset($requestedRoute) ? (array_key_exists($requestedRoute, $this->routes) ? $requestedRoute : '404' ) : 'home';
        // var_dump($requestedRoute);
        switch ($requestedRoute) {
            case 'home':
                $route= $this->routes[$requestedRoute];
                require_once $route;
                $controller = new \App\Controllers\HomeController();
                $controller->index();
                break;
            case 'category':
                $route= $this->routes[$requestedRoute];
                require_once $route;
                $controller = new \App\Controllers\CategoryCatalogController();
                $controller->productsFromCategory($requestedCategory);
                break;
            case 'product':
                $route= $this->routes[$requestedRoute];
                require_once $route;
                $controller = new \App\Controllers\ProductController();
                $controller->productDetail($requestedProductId);
                break;
            case '404':
                $route= $this->routes[$requestedRoute];
                require_once $route;
                break;
        }
    }
}
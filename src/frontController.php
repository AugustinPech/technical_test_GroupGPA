<?php
use App\Router\Router;
echo 'frontcontroller.php  <br>';
require_once 'Router/Router.php';

$requestedRoute = filter_input(INPUT_GET, 'route', FILTER_SANITIZE_SPECIAL_CHARS);
$requestedCategory = filter_input(INPUT_GET, 'category', FILTER_SANITIZE_SPECIAL_CHARS);
$router = new Router();
$router->route($requestedRoute, $requestedCategory);
<?php
echo 'frontcontroller.php  <br>';
require_once 'Router/Router.php';

$router = new Router();
include $router->route();
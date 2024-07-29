<?php
    require 'Controllers/APIController.php';

    $api = new ApiController();
    $categories = $api->get('/products/categories');
    print_r($categories);

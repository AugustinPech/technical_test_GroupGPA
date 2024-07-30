<?php
namespace App\Models;

use App\Controllers\APIController;

class Category {
    public function listCategories() {
        $api= new ApiController();
        $categories = $api->get('/products/categories');
        return $categories;
    }
}
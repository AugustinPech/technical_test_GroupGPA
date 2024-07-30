<?php
namespace App\Models;

// use App\Controllers\APIController;

class Category {
    public function listCategories() {
        $api= new \App\Controllers\ApiController();
        $categories = $api->get('/products/categories');
        return $categories;
    }
    public function listProductsByCategory($category) {
        $api= new \App\Controllers\ApiController();
        $products = $api->get('/products/category/'.$category);
        return $products;
    }
        
}
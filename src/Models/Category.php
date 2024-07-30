<?php
namespace App\Models;
// echo 'Category.php  <br>';
// use App\Controllers\APIController;

class Category {
    public function listCategories() {
        $api= new \App\Controllers\APIController();
        $categories = $api->get('/products/categories');
        return $categories;
    }
    public function listProductsByCategory($category) {
        $api= new \App\Controllers\APIController();
        $products = $api->get('/products/category/'.$category);
        return $products;
    }
        
}
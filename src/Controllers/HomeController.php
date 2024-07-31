<?php
namespace App\Controllers;
// echo 'homecontroller.php <br>';

// use App\Models\Category;
class Homecontroller
{
    private $category;
    private $products;
    public function index()
    {
        $this->category = new \App\Models\Category();
        $this->products = new \App\Models\Product();
        $listCategories =  $this->category->listCategories();
        $listAllProducts = $this->products->allProducts();
        include __DIR__ . '/../Views/home.tpl.php';
    }
}

<?php

namespace App\Controllers;
echo 'CategoryCatalogController.php  <br>';
class CategoryCatalogController {
    private $categoryModel;
    public function productsFromCategory ($category) {
        $this->categoryModel = new \App\Models\Category();
        $listProducts =  $this->categoryModel->listProductsByCategory($category);
        include __DIR__ . '/../Views/categoryCatalog.tpl.php';
    }
}
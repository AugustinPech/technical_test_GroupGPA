<?php

namespace App\Controllers;

class ProductController {
    private $productModel;
    public function productDetail($id) {
        $this->productModel = new \App\Models\Product();
        $product =  $this->productModel->detailsofOneProduct($id);
        include __DIR__ . '/../Views/productDetail.tpl.php';
    }
}
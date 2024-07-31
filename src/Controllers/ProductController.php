<?php

namespace App\Controllers;
// echo 'ProductController.php <br>';
class ProductController {
    private $productModel;
    public function productDetail($id) {
        $this->productModel = new \App\Models\Product();
        $product =  $this->productModel->detailsOfOneProduct($id);
        // $card = $this->productModel->productCardElement($id);
        $starRate = $this->productModel->displayRate($product);
        include __DIR__ . '/../Views/productPage.tpl.php';
    }
}
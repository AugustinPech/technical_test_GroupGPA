<?php

namespace  App\Models;

class Product {
    public function detailsOfOneProduct($id) {
        $product = new \App\Controllers\APIController();
        $product = $product->get('/products/' . $id);
        return $product;
    }
}
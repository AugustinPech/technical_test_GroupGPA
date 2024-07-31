<?php

namespace  App\Models;
// echo 'Product.php <br>';

class Product
{
    private $api;
    public function detailsOfOneProduct($id)
    {
        $this->api = new \App\Controllers\APIController();
        $product = $this->api->get('/products/' . $id);
        return $product;
    }
    public function displayRate($product)
    {
        $rate = $product['rating']['rate'];

        $fullStars = floor($rate);
        $laststar = ($rate - $fullStars) >= 0.5 ? 1 : 0;

        $emptyStars = 5 - $fullStars - $laststar;

        $starRate = '';

        for ($i = 0; $i < ($fullStars + $laststar); $i++) {
            $starRate .= '&#9733;';
        }
        for ($i = 0; $i < $emptyStars; $i++) {
            $starRate .= '&#9734;';
        }

        return $starRate;
    }

    public function allProducts()
    {
        $this->api = new \App\Controllers\APIController();
        $allproducts = $this->api->get('/products');
        return $allproducts;
    }
    public function getNumberOfProducts($number)
    {
        $this->api = new \App\Controllers\APIController();
        $numberOfProducts = $this->api->get('/products/'.$number);
        return $numberOfProducts;
    }
}

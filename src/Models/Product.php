<?php

namespace  App\Models;
// echo 'Product.php <br>';

class Product
{
    public function detailsOfOneProduct($id)
    {
        $product = new \App\Controllers\APIController();
        $product = $product->get('/products/' . $id);
        return $product;
    }
    public function displayRate ($product) {
        $rate = $product['rating']['rate'];
        
        $fullStars = floor($rate);
        $laststar= ($rate - $fullStars) >= 0.5 ? 1 : 0;

        $emptyStars = 5 - $fullStars - $halfStars;

        $starRate = '';

        for ($i = 0; $i < ($fullStars+$laststar); $i++) {
            $starRate .= '&#9733;';
        }
        for ($i = 0; $i < $emptyStars; $i++) {
            $starRate .= '&#9734;';
        }
        
        return $starRate;
    }
}
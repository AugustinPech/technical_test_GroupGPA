<?php
echo 'productPage.tpl.php <br>';
$metatitle = $product['title'];
$metadescription = $product['description'];
$metakeywords = $product['category'].', '.$product['title'].', product';

// TODO : include Head
// TODO : include Header
// var_dump ($product);
?>

<div>
    <h1><?= $product['title'] ?></h1>
    <p><?= $product['description'] ?></p>
    <p>Price: <?= $product['price'] ?></p>
    <p>category: <?= $product['category'] ?></p>
    <p>rating: <?= var_dump($product['rating']) ?></p>
</div>

<?php
// TODO : include Footer
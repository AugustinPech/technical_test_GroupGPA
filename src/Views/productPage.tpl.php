<?php
echo 'productPage.tpl.php <br>';
$metatitle = $product['title'];
$metadescription = $product['description'];
$metakeywords = $product['category'].', '.$product['title'].', product';

require_once 'layouts/head.tpl.php';
require_once 'layouts/header.tpl.php';
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
require_once 'layouts/footer.tpl.php';
<?php
echo 'categoryCatalog.tpl.php <br>';
$metatitle = $category.' Catalog';
$metadescription = 'This shows the products available in the '.$category.' category';
$metakeywords = $category.', catalog, products';

require_once 'layouts/head.tpl.php';
require_once 'layouts/header.tpl.php';
?>

<div>
    <h1><?= $category ?> Catalog</h1>
    <p>Here are the products available in the <?= $category ?> category:</p>
    <ul>
        <?php
        // var_dump($listProducts[0]);
        foreach ($listProducts as $product) : ?>
            <li>
                <a href="?route=product&product=<?= $product['id'] ?>">
                    <?= $product['title'] ?>
                </a>
            </li>
        <?php endforeach; ?>
    </ul>
</div>

<?php
require_once 'layouts/footer.tpl.php';
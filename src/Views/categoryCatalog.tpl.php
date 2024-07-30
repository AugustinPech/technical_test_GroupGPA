<?php
// echo 'categoryCatalog.tpl.php <br>';
$metatitle = $category . ' Catalog';
$metadescription = 'This shows the products available in the ' . $category . ' category';
$metakeywords = $category . ', catalog, products';

require_once 'layouts/head.tpl.php';
require_once 'layouts/header.tpl.php';
?>

<div class="">
    <h1><?= $category ?> Catalog</h1>
    <p>Here are the products available in the <?= $category ?> category:</p>
    <div id="carouselCatalog" class="carousel slide">
        <div class="carousel-inner">
            <?php foreach ($listProducts as $index => $product) : ?>
                <div class="carousel-item <?php echo ($index === 0) ? 'active' : ''; ?>" style="margin: 0px; width:100%">
                    <div class="d-block col-12 d-flex flex-row justify-content-center">
                        <?php include 'productCard.tpl.php'; ?>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
        <button id="carouselButton" class="carousel-control-prev" type="button" data-bs-target="#carouselCatalog" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button id="carouselButton" class="carousel-control-next" type="button" data-bs-target="#carouselCatalog" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <div id="flexCatalog" class="gap-1 flex-row justify-content-center align-items-center flex-wrap px-4">
        <?php foreach ($listProducts as $index => $product) : ?>
            <?php include 'productCard.tpl.php'; ?>
        <?php endforeach; ?>
    </div>
</div>
<?php
require_once 'layouts/footer.tpl.php';

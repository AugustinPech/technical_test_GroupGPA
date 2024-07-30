<?php
// echo 'productPage.tpl.php <br>';
$metatitle = $product['title'];
$metadescription = $product['description'];
$metakeywords = $product['category'] . ', ' . $product['title'] . ', product';

$rate = $product['rating']['rate'];
$count = $product['rating']['count'];

// var_dump($product['rating']);
// var_dump($product);


require_once 'layouts/head.tpl.php';
require_once 'layouts/header.tpl.php';
?>
<div class="text-secondary text-truncate">
    <a class="link-secondary" style="text-decoration: none;" href="?route=category&category=<?= $product['category'] ?>"><?= $product['category'] ?></a> > <?= $product['title'] ?>
</div>
<div class="p-2 gap-4 d-flex flex-column flex-md-row justify-content-between align-items-stretch">
    <div class=" d-flex flex-column justify-content-between align-items-center" style="min-width: 30%;">
        <img id="" src="<?= $product['image']; ?>" class="" alt="<?= $product['title']; ?>" style="max-width:100%; max-height: 400px">
    </div>

    <div class=" d-flex flex-column justify-content-start align-items-stretch" style="min-width: 40%">
        <div class="border-bottom">
            <h1 class="h2"><?= $product['title'] ?></h1>
            <p title="<?= $rate ?>/5"><?= $starRate ?> <?= $count ?> avis</p>
        </div>
        <p><?= $product['description'] ?></p>
    </div>

    <div class=" d-flex flex-column justify-content-between align-items-stretch" style="min-width: 20%">
        <div class="border-bottom">
            <span class="h1"><?= $product['price'] ?> €</span>
        </div>

        <p title="">Livraison gratuite <a class="link-dark" style="text-decoration: none;" href="#noteLivraison">*</a></p>

        <p>Ou Livraison accélérée</p>

        <p>Livré chez Group-GPA</p>

        <form title="fake" action="">
            <div class="d-flex gap-2 flex-column justify-content-between align-items-stretch">
                <label for="quantity">Quantité</label>
                <input type="number" name="quantity" id="quantity" min="1" max="10" value="1">
                <button class="btn btn-warning">Ajouter au panier</button>
                <button class="btn btn-warning">Acheter</button>
            </div>
        </form>
        <div style="overflow-x: auto;">
            <table class="table table-bordered table-striped">
                <thead class="table-light">
                    <tr>
                        <th scope="col">Informations</th>
                        <th scope="col">Détails</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Expédié par</td>
                        <td>Fakestore Logistique</td>
                    </tr>
                    <tr>
                        <td>Vendu par</td>
                        <td>Fakestore</td>
                    </tr>
                    <tr>
                        <td>Paiement</td>
                        <td>Carte bancaire, PayPal</td>
                    </tr>
                    <tr>
                        <td>Retour</td>
                        <td>30 jours pour retourner</td>
                    </tr>
                    <tr>
                        <td>Garantie</td>
                        <td>1 an</td>
                    </tr>
                    <tr>
                        <td>Disponibilité</td>
                        <td>En stock</td>
                    </tr>
                    <tr>
                        <td>Livraison</td>
                        <td>Standard 5-7 jours, Express 2-3 jours</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<div id="noteLivraison">
    <p class="blockquote-footer">* Sous conditions</p>
</div>

<?php
require_once 'layouts/footer.tpl.php';

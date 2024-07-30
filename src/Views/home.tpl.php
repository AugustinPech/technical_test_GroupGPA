<?php
echo 'home.tpl.php <br>';
$metatitle = 'HomePage';
$metadescription = 'This is the homepage of the website';
$metakeywords = 'homepage, home, page';

// TODO : include Head
// TODO : include Header
?>

<div>
    <h1>Home Page</h1>
    <p>Welcome to the homepage of the website.</p>
    <p>Here are the categories of products available:</p>
    <ul>
        <?php
        foreach ($listCategories as $id => $name) : ?>
            <li><a href="?route=category&category=<?= $name ?>"><?= $name ?></a></li>
        <?php endforeach; ?>
    </ul>
</div>
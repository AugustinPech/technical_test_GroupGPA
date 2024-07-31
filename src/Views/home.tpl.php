<?php
// echo 'home.tpl.php <br>';
$metatitle = 'HomePage';
$metadescription = 'This is the homepage of the website';
$metakeywords = 'homepage, home, page';

require_once 'layouts/head.tpl.php';
require_once 'layouts/header.tpl.php';
?>
<div class="d-flex flex-column justify-content-center align-items-stretch">
    <div class="d-flex flex-row justify-content-center">
        <h1>FakeStore</h1>
    </div>
    <div class="d-flex flex-row justify-content-around">
        <p>
            Welcome to the homepage of the website.
        </p>
        <p>
            Welcome to the homepage of the website.
        </p>
    </div>
</div>

<div class=" w-100 d-flex flex-column flex-md-row  justify-content-between">
    <aside id="sidebar" class="col-md-3 d-md-block bg-light sidebar">
        <div class="border-bottom h2">
            Filters
        </div>
        <div class="list-group-item">
            <h6>Category</h6>
            <select class="form-select" id="categoryFilter">
                <?php foreach ($listCategories as $name) : ?>
                    <option><?= $name ?></op>
                    <?php endforeach; ?>
            </select>
        </div>
        <div class="list-group-item">
            <h6>Price Range</h6>
            <input type="range" class="form-range" min="0" max="1000" step="10" id="priceFilter">
            <span id="priceRangeDisplay">0 - 1000</span>
        </div>
        <div class="list-group-item">
            <h6>Rating</h6>
            <select class="form-select" id="ratingFilter">
                <option value="">All Ratings</option>
                <option value="4">4 stars & up</option>
                <option value="3">3 stars & up</option>
                <option value="2">2 stars & up</option>
                <option value="1">1 star & up</option>
            </select>
        </div>
    </aside>
    <div class="col-12 col-md-9 d-flex flex-row flex-wrap justify-content-around" >
        <?php foreach ($listAllProducts as $product) : ?>
            <?php include 'productCard.tpl.php'; ?>
        <?php endforeach; ?>
    </div>
</div>


<div class="container-fluid">
    <div class="row">
        <!-- Sidebar -->
        <nav id="sidebar" class="col-md-3 col-lg-2 d-md-block bg-light sidebar">
            <div class="position-sticky">
                <div class="list-group list-group-flush">
                    <div class="list-group-item">
                        <h5>Filters</h5>
                    </div>
                    <div class="list-group-item">
                        <h6>Category</h6>
                        <select class="form-select" id="categoryFilter">
                            <option value="">All Categories</option>
                            <option value="electronics">Electronics</option>
                            <option value="fashion">Fashion</option>
                            <option value="home">Home</option>
                        </select>
                    </div>
                    <div class="list-group-item">
                        <h6>Price Range</h6>
                        <input type="range" class="form-range" min="0" max="1000" step="10" id="priceFilter">
                        <span id="priceRangeDisplay">0 - 1000</span>
                    </div>
                    <div class="list-group-item">
                        <h6>Rating</h6>
                        <select class="form-select" id="ratingFilter">
                            <option value="">All Ratings</option>
                            <option value="4">4 stars & up</option>
                            <option value="3">3 stars & up</option>
                            <option value="2">2 stars & up</option>
                            <option value="1">1 star & up</option>
                        </select>
                    </div>
                </div>
            </div>
        </nav>

        <!-- Main content -->
        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h2">Product Listing</h1>
            </div>

            <div class="row" id="productList">
                <!-- Example Product Card -->
                <div class="col-md-4 mb-4" data-category="electronics" data-price="499" data-rating="4">
                    <div class="card">
                        <img src="https://via.placeholder.com/150" class="card-img-top" alt="Product Image">
                        <div class="card-body">
                            <h5 class="card-title">Product 1</h5>
                            <p class="card-text">Price: $499</p>
                            <p class="card-text">Rating: ⭐⭐⭐⭐</p>
                        </div>
                    </div>
                </div>
                <!-- Add more product cards here with appropriate data-category, data-price, and data-rating attributes -->
            </div>
        </main>
    </div>
</div>

<!-- Include Bootstrap JS and Popper.js from a CDN (optional for other components) -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.min.js"></script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const categoryFilter = document.getElementById('categoryFilter');
        const priceFilter = document.getElementById('priceFilter');
        const ratingFilter = document.getElementById('ratingFilter');
        const priceRangeDisplay = document.getElementById('priceRangeDisplay');
        const productList = document.getElementById('productList');

        function filterProducts() {
            const category = categoryFilter.value;
            const price = priceFilter.value;
            const rating = ratingFilter.value;

            Array.from(productList.children).forEach(product => {
                const productCategory = product.getAttribute('data-category');
                const productPrice = parseInt(product.getAttribute('data-price'), 10);
                const productRating = parseInt(product.getAttribute('data-rating'), 10);

                const categoryMatch = !category || productCategory === category;
                const priceMatch = productPrice <= price;
                const ratingMatch = !rating || productRating >= rating;

                if (categoryMatch && priceMatch && ratingMatch) {
                    product.style.display = '';
                } else {
                    product.style.display = 'none';
                }
            });
        }

        categoryFilter.addEventListener('change', filterProducts);
        priceFilter.addEventListener('input', () => {
            priceRangeDisplay.textContent = `0 - ${priceFilter.value}`;
            filterProducts();
        });
        ratingFilter.addEventListener('change', filterProducts);

        filterProducts(); // Initial filter
    });
</script>


<?php
require_once 'layouts/footer.tpl.php';

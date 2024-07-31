<div class="rounded card m-2 flex-column justify-content-between align-items-center" style="width: 300px;height: 400px;" data-category="<?= $product['category']; ?>" data-price="<?= $product['price']?>" data-rating="<?= $product['rating']['rate']?>">
  <div class="border-bottom p-2 w-80 d-flex flex-column align-items-center justify-content-center" style="height:60%; width: 80%;">
    <img id="productImg" src="<?= $product['image']; ?>" class="card-img-top" alt="<?= $product['title']; ?>" style="max-width: 60%;">
  </div>
  <div class="blockquote card-body w-100 d-flex flex-column justify-content-between" style="height:60%;">
    <h5 class="card-title text-truncate w-100""><?= $product['title']; ?></h5>
    <p class=" card-text text-truncate w-100""><?= $product['description']; ?></p>
      <div class="blockquote-footer">
        <a class="text-black" style="text-decoration:none" href="?route=category&category=<?= $product['category']; ?>"><?= $product['category']; ?></a>
      </div>
      <div class="d-flex flex-row justify-content-around">
        <a href="?route=product&product=<?= $product['id'] ?>" class=" col-5 btn btn-outline-warning bg-secondary">See more</a>
        <button class="col-5 btn btn-warning"><?= $product['price'] ?> €</button>
      </div>
  </div>
</div>
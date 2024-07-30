<div class="rounded card mx-5 my-2 d-flex flex-column justify-content-between align-items-center" style="width: 300px;height: 400px;">
  <div class="p-2 w-80 d-flex flex-column align-items-center justify-content-center" style="height:60%; width: 80%;">
    <img id="productImg" src="<?= $product['image']; ?>" class="card-img-top" alt="<?= $product['title']; ?>" style="max-width: 60%;">
  </div>
  <div class="card-body w-100 d-flex flex-column justify-content-around" style="height:60%;">
    <h5 class="card-title text-truncate w-100""><?= $product['title']; ?></h5>
    <p class="card-text text-truncate w-100""><?= $product['description']; ?></p>
    <div class="d-flex flex-row justify-content-around">
      <a href="?route=product&product=<?= $product['id'] ?>" class=" col-5 btn btn-primary">See more</a>
      <button class="col-5 btn btn-danger"><?= $product['price'] ?> €</button>
    </div>
  </div>
</div>
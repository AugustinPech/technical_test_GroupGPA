</main>

<div class=" my-3 py-3 border-top border-secondary" style="width:100vw">
    <div class="d-flex flex-wrap flex-md-nowrap justify-content-around">
        <div class="text-center">
            <img class="col-2" src="images/assurance.png"/>
            <div>100% Securisé</div>
        </div>
        <div class="text-center">
            <img class="col-2" src="images/logistics-delivery (1).png"/>
            <div>Livraison Gratuite</div>
        </div>
        <div class="text-center">
            <img class="col-2" src="images/logistics-delivery.png"/>
            <div>Retour Gratuit</div>
        </div>
        <div class="text-center">
            <img class="col-2" src="images/service-client.png"/>
            <div>Support 24/7</div>
        </div>
    </div>
</div>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js"></script>
<section class="">
  <!-- Footer -->
  <footer class="bg-body-tertiary text-center text-md-start ">
    <!-- Grid container -->
    <div class="container p-4 ">
      <!--Grid row-->
      <div class="row">
        <!--Grid column-->
        <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
          <h5 class="text-uppercase">FakeStore</h5>

          <p>
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iste atque ea quis
            molestias.
          </p>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
          <h5 class="text-uppercase">Links</h5>

          <ul class="list-unstyled mb-0">
            <li>
              <a class="nav-link active" aria-current="page" href="?route=home">Home</a>
            </li>
          </ul>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <?php if (isset($listCategories)) : ?>
          
        <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
          <h5 class="text-uppercase mb-0">Categories</h5>

          <ul class="list-unstyled">
            <?php
              foreach ($listCategories as $id => $name) : ?>
                <li>
                  <a class="text-black" style="text-decoration:none" href="?route=category&category=<?= $name ?>"><?= $name ?></a>
                </li>
            <?php endforeach; ?>
          </ul>
        </div>
        <?php endif; ?>
        <!--Grid column-->
      </div>
      <!--Grid row-->
    </div>
    <!-- Grid container -->

    <!-- Copyright -->
    <div class="text-center p-3 bg-primary text-white" style="background-color: rgba(0, 0, 0, 0.05);">
      © 2024 Copyright:
      <a class="text-white" href="#">fakestore.com</a>
    </div>
    <!-- Copyright -->
  </footer>
  <!-- Footer -->
</section>
</body>
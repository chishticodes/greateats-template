<?php include "partials/header.php" ?>


<!-- nav-bar started -->
<section class="nav-bar">
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#"><img class="d-inline-block" src="./img/great-eats-logo.png" width="200" alt="great eats logo"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="index.php">Home</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="about.php">About Us</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="menu.php">Menu</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="#">Contact Us</a>
        </li>
      </ul>

    </div>
    <div class="me-5">
      <form class="d-flex">
        <input type="text" name="search" class="form-control ms-auto">
        <button type="submit" class="btn btn-primary ms-2">Search</button>
        <button class="btn btn-success ms-2 cart-btn"><i class="fas fa-shopping-cart"></i>Cart</button>
      </form>
    </div>
  </nav>
</section>
<!-- nav bar ended -->

<!-- Main Menu of Resturant -->
<section>
  <div class="container">
    <div class="row">
      <div class="col-6">
        <div class="card " style="width:25rem;">
          <!-- <img class="card-img-top " src="/img/banner-pizza.jpg"> -->
          <div class="card-body">
            <h4 class="card-title">title</h4>
            <h5 class="card-title">price</h5>
            <p class="card-text">description</p>
            <a href="#" class="btn btn-outline-primary btn-sm">Order Online</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>
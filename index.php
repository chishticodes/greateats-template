<?php include "partials/header.php" ?>
<!-- nav-bar started -->
<section class="nav-bar">
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#"><img class="d-inline-block" src="assets/img/web-img/great-eats-logo.png" width="200" alt="great eats logo"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="#">Home</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="about.php">About Us</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="menu.php">Menu</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="contact.php">Contact Us</a>
        </li>

    </div>
  </nav>
</section>
<!-- nav bar ended -->

<!-- slide show started -->
<section>
  <div id="hero-carousel" class="carousel slide">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#hero-carousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#hero-carousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#hero-carousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active c-item">
        <img src="assets/img/web-img/banner-burger.jpg" class="d-block w-100 c-img" alt="...">
        <div class="carousel-caption top-0 d-none d-md-block">
          <h2>American Bugers</h2>
          <p class="mt-4 fs-3">Our Burgers: A Taste of Magic!</p>
        </div>
      </div>
      <div class="carousel-item c-item">
        <img src="assets/img/web-img/banner-kebab.jpg" class="d-block w-100 c-img" alt="...">
        <div class="carousel-caption top-0 d-none d-md-block">
          <h2>Turkish Kebabs</h2>
          <p class="mt-4 fs-3">Our Kebab: A Culinary Adventure!</p>
        </div>
      </div>
      <div class="carousel-item c-item">
        <img src="assets/img/web-img/banner-pizza.jpg" class="d-block w-100 c-img" alt="...">
        <div class="carousel-caption top-0 d-none d-md-block">
          <h2>Italian Pizza</h2>
          <p class="mt-4 fs-3">Our Pizza: A Delicious Discovery!</p>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#hero-carousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#hero-carousel" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>











  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>

  </html>
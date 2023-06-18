<?php
include "../partials/header.php";
?>
<nav class="navbar navbar-expand-sm navbar-light bg-light mb-4">
  <div class="container">
    <a class="navbar-brand" href="#">Geat Eats</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link" href="#">main website</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<main>
  <div class="container d-flex flex-column align-items-center">
    <img src="../assets/img/web-img/great-eats-logo.png" class="w-25 mb-3" alt="">
    <h3>user name</h3>
    <form action="" class="mt-4 w-75 resize-form">
      <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control" id="email" name="email" placeholder="Enter your New Email">
      </div>
      <div class="mb-3">
        <input type="submit" name="submit" value="Update Email" class="btn btn-primary w-100">
      </div>
    </form>
  </div>
</main>

<footer class="text-center mt-5">
  Copyright &copy; 2023
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>

</html>
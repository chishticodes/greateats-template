<?php
include '../partials/header.php';
?>
<h1 class="text-center">Edit Item</h1>

<form class="resize-form">
  <div class="mb-3">
    <label for="name" class="form-label">Item Name</label>
    <input type="text" class="form-control" id="name">
  </div>
  <div class="mb-3">
    <label for="description" class="form-label">Item Description</label>
    <input type="text" class="form-control" id="description">
  </div>
  <div class="mb-3">
    <label for="price" class="form-label">Item Price</label>
    <input type="number" class="form-control" id="price">
  </div>
  <button type="submit" class="btn btn-primary">Edit Item</button>
</form>
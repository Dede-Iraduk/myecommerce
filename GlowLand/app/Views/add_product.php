<html>
<head>
  <title>GLOWLAND</title>
  <link rel="stylesheet" href="assets/css/styleaddproduct.css"> 
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css">
</head>
<div class = "addcat">
<div class = "form">
<header>
	<h1>Add Product</h1>
</header>


<form action="<?php echo base_url(); ?>/Product/store" method="post" id="category"  enctype="multipart/form-data">
  <div class="col-md-6">
    <label for="product" class="form-label">Enter Product</label>
    <input type="text" class="form-control" id="product_name" name="product_name">
  </div>
<br><br>
 <div class="col-md-6">
    <label for="product" class="form-label">Enter Product description</label>
    <input type="text" class="form-control" id="product_description" name="product_description">
  </div>
<br><br>

<div class="col-md-6">
    <label for="product" class="form-label">Price</label>
    <input type="number" class="form-control" id="unit_price" name="unit_price">
  </div>
<br><br>

<div class="col-md-6">
    <label for="product" class="form-label">Input no of quantity</label>
    <input type="number" class="form-control" id="available_quantity" name="available_quantity">
  </div>
<br><br>

   <div class="col-md-6">
    <label for="product" class="form-label">Choose an image</label>
    <input type="file" class="form-control" id="product_image" name="product_image" required>
  </div>
<br><br>

    <div class="col-md-4">
    <label for="inputstate" class="form-label">category</label>
    <select id="subcategory" class="form-select" name="subcategory">
      <option value="1">Formal(men)</option>
        <option value="2">Casual(men)</option>
    </select>
  </div>

  <br><br>
  <div class="col-md-4">
    <label for="inputstate" class="form-label">is_deleted</label>
    <select id="is_deleted" class="form-select" name="is_deleted">
      <option value="1">Deleted</option>
      <option value="2">Not Deleted</option>
    </select>
  </div>
  
  <div class="col-12">
    <button type="submit" class="btn btn-primary">Save</button>
  </div>
</form>



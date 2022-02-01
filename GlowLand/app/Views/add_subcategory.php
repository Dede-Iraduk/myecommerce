
<html>
<head>
  <title>GLOWLAND</title>
  <link rel="stylesheet" href="assets/css/styleaddsubcategory.css"> 
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css">
</head>
<div class = "addcat">
<div class = "form">

<header>
	<h1>Add Sub-Category</h1>
</header>


<form action="<?php echo base_url(); ?>/Sub_Category/store" method="post" id="subcategory">
  <div class="col-md-6">
    <label for="category" class="form-label">Enter Sub-Category</label>
    <input type="text" class="form-control" id="subcategory_name" name="subcategory_name">
  </div>



  <div class="col-md-4">
    <label for="inputstate" class="form-label">Enter Category</label>
    <select id="category" class="form-select" name="category">
      <option value="1">Men</option>
      <option value="1">Women</option>
      <option value="1">Children</option>
      <option value="1">Pets</option>
      

    </select>
  </div>

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
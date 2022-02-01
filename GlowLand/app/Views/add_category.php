<html>
<head>
  <title>GLOWLAND</title>
  <link rel="stylesheet" href="assets/css/styleaddcategory.css"> 
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css">
</head>
<div class = "addcat">
<div class = "form">

	<h1>Add Category</h1>



<form action="<?php echo base_url(); ?>/Category/store" method="post" id="category">
  <div class="col-md-6">
    <label for="category" class="form-label">Category : </label>
    <input type="text" class="form-control" id="category_name" name="category_name">
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

</div>
</div>
</html>


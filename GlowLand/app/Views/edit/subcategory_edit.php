<header>
  <h1>Update Sub-Category</h1>
</header>


<form action="<?php echo base_url(); ?>/Sub_Category/store/<?=$subcategory['subcategory_id'];?>" method="post" id="subcategory">
  <div class="col-md-6">
    <label for="category" class="form-label">Enter Sub-Category</label>
    <input type="text" class="form-control" id="subcategory_name" name="subcategory_name" <?= $subcategory['subcategory_name'] ?>>
  </div>



  <div class="col-md-4">
    <label for="inputstate" class="form-label">Enter Category</label>
    <select id="category" class="form-select" name="category">
      <option value="1">Men</option>
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
    <button type="submit" class="btn btn-primary">Upadate</button>
  </div>
</form>
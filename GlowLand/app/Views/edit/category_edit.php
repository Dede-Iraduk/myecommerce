

<header>
	<h1>Update Category</h1>
</header>


<form action="<?php echo base_url(); ?>/Category/upadate/<?=$category['category_id'];?>" method="post" id="category">
  <div class="col-md-6">
    <label for="category" class="form-label">Category</label>
    <input type="text" class="form-control" id="category_name" name="category_name" value="<?= $category['category_name'] ?>">
  </div>
  
  <div class="col-md-4">
    <label for="inputstate" class="form-label">is_deleted</label>
    <select id="is_deleted" class="form-select" name="is_deleted">
      <option value="1">Deleted</option>
      <option value="2">Not Deleted</option>
    </select>
  </div>
  
  <div class="col-12">
    <button type="submit" class="btn btn-primary">Update</button>
  </div>
</form>



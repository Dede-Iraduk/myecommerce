<header>
	<h1>Edit Product</h1>
</header>


<form action="<?php echo base_url ()?>/Product/update/<?=$product['product_id'];?>" method="POST" id="category"  enctype="multipart/form-data">


  <div class="col-md-6">
    <label for="product" class="form-label">Enter Product</label>
    <input type="text" class="form-control" id="product_name" name="product_name" value="<?= $product['product_name'] ?>" >
  </div>
<br><br>
 <div class="col-md-6">
    <label for="product" class="form-label">Enter Product description</label>
    <input type="text" class="form-control" id="product_description" name="product_description" value="<?= $product['product_description'] ?>" >
  </div>
<br><br>

<div class="col-md-6">
    <label for="product" class="form-label">Price</label>
    <input type="number" class="form-control" id="unit_price" name="unit_price" value="<?= $product['unit_price'] ?>" >
  </div>
<br><br>

<div class="col-md-6">
    <label for="product" class="form-label">Input no of quantity</label>
    <input type="number" class="form-control" id="available_quantity" name="available_quantity" value="<?= $product['available_quantity'] ?>">
  </div>
<br><br>

   <div class="col-md-6">
    <label for="product" class="form-label">Choose an image</label>
    <input type="file" class="form-control" id="product_image" value="<?= $product['product_image'] ?>" name="product_image" >
  </div>
<br><br>

    <div class="col-md-4">
    <label for="inputstate" class="form-label">Subcategory</label>
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
    <button type="submit" class="btn btn-primary">Update</button>
  </div>
</form>


<div class="col-md-12">
  
  <img src="<?= base_url('Uploads/'.$product['product_image'])?> " class="w-100" alt="Product Image">
</div>








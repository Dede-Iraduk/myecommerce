<header>
	<h1>Our Products</h1>
</header>




<div class="container-fluid">
 
  <div class="row">
    <div class="col">
 <?php if(session()->getFlashdata('status')):?>
                    <div class="alert alert-warning">
                       <?= session()->getFlashdata('status') ?>
                    </div>
                <?php endif;?>

                <div class="card">
                	
                	<div class="card-header">
                		
                		<h4>Products Data

                			<a href="/product" class="btn btn-primary btn-sm float-end">ADD PRODUCT</a></h4>
<div class="card-body">
	<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Description</th>
        <th scope="col">Subcategory</th>
      <th scope="col">Unit Price</th>
      <th scope="col">Available Quantity</th>
      <th scope="col">Added by</th>
      <th scope="col">Image</th>

    </tr>
  </thead>
  <tbody>

  	<?php foreach($products as $item) : ?>
    <tr>
    	<td><?= $item['product_id']?></td>
    	<td><?= $item['product_name']?></td>
    	<td><?= $item['product_description']?></td>
    	<td><?= $item['subcategory_id']?></td>
    	<td><?= $item['unit_price']?></td>
    	<td><?= $item['available_quantity']?></td>
    	<td><?= $item['added_by']?></td>
    	<td>
    		<img src="<?= "Uploads/".$item['product_image'];?>" height="100px" width="100px" alt="image">
    	</td>

    	<td>
    		<a href="<?= base_url('products/edit/'.$item['product_id']) ?>" class="btn btn-success btn-sm">EDIT</a>

    		<a href="<?= base_url('products/delete/'.$item['product_id']) ?>" class="btn btn-danger">Delete</a>
    	</td>
    </tr>

<?php endforeach; ?>
  </tbody>
</table>

</div>

                	</div>
                </div>
    </div>
    
  </div>


</div>
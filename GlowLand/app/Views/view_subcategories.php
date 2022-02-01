<header>
	<h1>Our Categories</h1>
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
                		
                		<h4>Category Data

                			<a href="/add_subcategory" class="btn btn-primary btn-sm float-end">ADD CATEGORY</a></h4>
<div class="card-body">
	<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Sub-Category</th>
          <th scope="col">Category</th>
      <th scope="col">is_deleted</th>
    </tr>
  </thead>
  <tbody>

  	<?php foreach($subcategories as $item) : ?>
    <tr>
    	<td><?= $item['subcategory_id']?></td>
    	<td><?= $item['subcategory_name']?></td>
      <td><?= $item['category']?></td>
    	<td><?php

       $is_deleted=$item['is_deleted'];

       if ($is_deleted==0) {
        
        echo "Not_Deleted";
       }else {

echo "Deleted";
       }



     ?></td>

    	<td>
    		<a href="<?= base_url('subcategories/edit/'.$item['subcategory_id']) ?>" class="btn btn-success btn-sm">EDIT</a>

    		<a href="<?= base_url('subcategories/delete/'.$item['subcategory_id']) ?>" class="btn btn-danger">Delete</a>
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








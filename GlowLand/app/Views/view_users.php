<header>
	<h1>Our Users</h1>
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
                		
                		<h4>USERS Data

                			<a href="/add_user" class="btn btn-primary btn-sm float-end">ADD USERS</a></h4>
<div class="card-body">
	<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Firstname</th>
      <th scope="col">Lastname</th>
        <th scope="col">Email</th>
      <th scope="col">Gender</th>
      <th scope="col">Role</th>
      <th scope="col">Password</th>
      <th scope="col">is_deleted</th>

    </tr>
  </thead>
  <tbody>

  	<?php foreach($users as $item) : ?>
    <tr>
    	<td><?= $item['userid']?></td>
    	<td><?= $item['firstname']?></td>
    	<td><?= $item['lastname']?></td>
    	<td><?= $item['email']?></td>
    	<td><?= $item['gender']?></td>
    	<td><?php 


      $role=$item['role'];
      if ($role==0) {
        echo "ADMINISTRATOR";
      }else{

        echo"USER/CLIENT";
      }



    ?></td>
    	<td><?= $item['password']?></td>
    	<td>
    		<?php 

$is_deleted=$item['is_deleted'];

if ($is_deleted==0) {
  echo "Not_deleted";
  // code...
}else{

  echo "Deleted";
}
        ?>
    	</td>

    	<td>
    		<a href="<?= base_url('user/edit/'.$item['userid']) ?>" class="btn btn-success btn-sm">EDIT</a>

    		<a href="<?= base_url('user/delete/'.$item['userid']) ?>" class="btn btn-danger">Delete</a>
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
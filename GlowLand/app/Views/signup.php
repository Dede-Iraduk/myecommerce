
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="Assets/CSS/styleregisteradmin.css">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <title>Registration Page</title>
</head>
<body>

  <header>
  <nav class="navbar navbar-expand-sm bg-dark">

  <!-- Links -->
  <ul class="navbar-nav">
    <li class="nav-item">
              
       <a href="/signin">Login</a>
    </li>
    <li class="nav-item">
    <a href="/signup">Register</a>
    </li>
   
  </ul>

</nav>
  </header>

<div class="container">
   <?php if(isset($validation)):?>
                <div class="alert alert-warning">
                   <?= $validation->listErrors() ?>
                </div>
                <?php endif;?>

<div class="register_page">
  <div class="form">
<!-- <form action="<?php echo base_url(); ?>/store" method="post" id="signup"> -->
<form action="/store" method="post" id="signup">
  
    <h1>SIGN UP</h1>
    <!-- <h2>Fill in your details so as to register with us:</h2> -->

  <!-- <label for="firstname"><b>FirstName</b></label> -->
    <input type="text" placeholder="Enter Firstname" required name="firstname"id="firstname" ><br><br>

    <!-- <label for="lastname"><b>LastName</b></label> -->
    <input type="text" placeholder="Enter Lastname" required name="lastname"  id="lastname" ><br><br>



    <!-- <label for="email"><b>Email</b></label> -->
    <input type="email" placeholder="Enter email" required name="email" id="email" ><br><br>

   <!-- <label for="gender">Gender</label> -->
<select name="gender" id="gender" required>
  <option value="Male">Male</option>
  <option value="Female">Female</option>
  <option value="Other">Other</option>
</select>

<br><br>

  <!-- <label for="password"><b>Password</b></label> -->
    <input type="password" placeholder="Enter Password" required name="password" id="password" >

    <!-- <label for="password2"><b> Confirm Password</b></label> -->

    <input type="password" placeholder="Repeat Password" required name="password2" id="password2" ><br><br>

       <!-- <p>By creating an account you agree to <a href="#">Terms & Privacy</a> -->
      <!-- <br><br> -->
      <button type="submit" class="registerbtn">Register</button><br><br>

      Have an account?<a href="/signin">Login</a></p>
  
</form>

</div>
</div>

</body>
</html>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9.17.2/dist/sweetalert2.min.js"></script>

<script>
    $(function() {

        $('signup').validate();

        // Ajax form submission with image
        $('signup').on('submit', function(e) {

            e.preventDefault();

            var formData = new FormData(this);
        

            $.ajax({
                url: "<?= site_url('store') ?>",
                type: "POST",
                cache: false,
                data: formData,
                processData: false,
                contentType: false,
                dataType: "JSON",
                success: function(data) {
                    if (data.success == true) {
                        Swal.fire('Saved!', '', 'success')
                    }
                },
                error: function(jqXHR, textStatus, errorThrown) {
                    alert('Error at add data');
                }
            });
        });
    });
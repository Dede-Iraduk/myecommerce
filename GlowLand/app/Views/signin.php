

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">

<link rel="stylesheet" type="text/css" href="Assets/CSS/stylelogin.css">
    <title>Login Page</title>

</head>
<body>
    <header>
        <!-- <img class="logo" src="<?php echo base_url('Assets/IMAGES/image1.jpg')?>" width="50" height="50"> -->
    </header>

    <div class="container" align="center">
   
    
    <div class="container-xxl">

          <?php if(session()->getFlashdata('msg')):?>
                    <div class="alert alert-warning">
                       <?= session()->getFlashdata('msg') ?>
                    </div>
                <?php endif;?>


<form action="<?php echo base_url(); ?>/SigninController/loginAuth " method="POST">
<div class= "login_page">
<div class="form">
<h1>SIGN IN</h1>

<div class="new">
    <!-- <label for="email"><b>Email</b></label> -->
    <input type="email" placeholder="Enter Email" name="email" id="email" required><br><br>
</div>


    <!-- <label for="password"><b>Password</b></label> -->
    <input type="password" placeholder="Enter Password" name="password" id="password" required><br><br>


    <button type="submit">LOGIN</button>


</form>

Don't have an account? <a href="/signup" class="link-info">Create one</a></p>

</div>

</div>
</div>
</div>

</body>
</html>











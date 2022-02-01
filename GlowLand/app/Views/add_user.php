
<header>
  
  <h1>Add USER</h1>

</header>



<form action="<?php echo base_url(); ?>/SignupController/admin_store" method="post" id="signup">
  <div class="register">
    <h1>SIGN UP</h1>
    <h2>Fill in your details so as to register with us:</h2>

  <label for="firstname"><b>FirstName</b></label>
    <input type="text" placeholder="Enter Firstname" required name="firstname" id="firstname" ><br><br>

    <label for="lastname"><b>LastName</b></label>
    <input type="text" placeholder="Enter Lastname" required name="lastname" id="lastname" ><br><br>



    <label for="email"><b>Email</b></label>
    <input type="email" placeholder="Enter email" required name="email" id="email" ><br><br>

   <label for="gender">Gender</label>
<select name="gender" id="gender" required>
  <option value="Male">Male</option>
  <option value="Female">Female</option>
  <option value="Other">Other</option>
</select>

<br><br>

  <label for="password"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" required name="password" id="password" >

    <label for="password2"><b> Confirm Password</b></label>

    <input type="password" placeholder="Repeat Password" required name="password2" id="password2" ><br><br>


<p><strong>Note :</strong> indicate whether the user or admin</p>

         <label for="role">Role</label>
<select name="role" id="role" required>
  <option value="0">ADMINISTRATOR</option>
  <option value="1">USER</option>

</select>

      <br><br>
      <button type="submit" class="registerbtn">Register</button><br><br>

    
  
</form>
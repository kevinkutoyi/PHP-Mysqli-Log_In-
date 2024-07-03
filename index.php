<?php

//  echo readfile('header.php');
include_once 'header.php';

?>

<form action="/includes/signup.inc.php" method="POST" style="border:1px solid #ccc">
  <div class="container">
    <h1>Sign Up</h1>
    <p>Fill this form to register</p>
    <hr>
    <br>

    <label for="email"><b>Name</b></label>
    <input type="text" placeholder="Enter Name" name="fullname">
    <br>

    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email>
    <br>

    <label for="uname"><b>Uid</b></label>
    <input type="text" placeholder="Enter username" name="username">
    <br>

    <label for="password"><b>Password</b></label>
    <input type="password" placeholder="Password" name="pwd">
    <br>

    <label for="passwordrepeat"><b>Password</b></label>
    <input type="password" placeholder="Password" name="pwdrepeat">
    <br>

    <label>
      <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
    </label>
    <br>

    <p>By creating an account you agree to stated <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

    <div class="clearfix">
      <button type="button" class="cancelbtn">Cancel</button>
      <button type="submit" name="submit" class="signupbtn">Sign Up</button>
    </div>
  </div>
</form>



<?php

include_once 'footer.php';

?>
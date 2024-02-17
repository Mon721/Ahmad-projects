<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head><title>Login Form</title>
<head><script src="https://www.google.com/recaptcha/api.js"></script>
  <!-- Your code -->
</head><link rel="stylesheet" type="text/css" href="style1.css"></head>
<body style="background: #128184 ">
	<div class="header"><h2>Login_Page</h2></div>

    <form method="post" action="login.php">
      <div class="input"><label>Username</label><input type="text" name="username"  value="<?php echo $username; ?>"></div>
      <div class="input"><label>Password</label><input type="password" name="password"  value="<?php echo $password; ?>"></div>
      <div class="g-recaptcha" data-sitekey="6LeMmwwpAAAAAF6Fxvwy6RkH4wMRsZOF14tSPlV_"></div>
      
      <?php include('errors.php');?>

        <button type="submit" class="btn" name="login">Login</button>
        <p>Not have acount?<a href="Register.php">Sign_Up</a></p>
	</form>
  <script>
 <!-- Replace the variables below. -->
</body>
</html>
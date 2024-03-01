<?php include('server.php'); ?>
<!DOCTYPE html>
<html>
<head>
  <title>Register Page</title>
   <link rel="stylesheet" type="text/css" href="register.css">
</head>
<body>
 <div class="header">
   <h3>Register</h3>
 </div>
  <form method="post" action="register.php">
    <?php include('errors.php'); ?>
    <div class="input-group">
      <label>Username</label>
      <input type="text" name="username" value="<?php echo $username; ?>">
    </div>
    <div class="input-group">
      <label>Email</label>
      <input type="email" name="email" value="<?php echo $email; ?>">
    </div>
    <div class="input-group">
      <label>Password</label>
      <input type="text" name="password_1">
    </div>
    <div class="input-group">
      <label>Confirm Password</label>
      <input type="text" name="password_2">
    </div>
    <div class="input-group">
      <button type="submit" name="register" class="btn">Register</button>
    </div>
    <p>
      Already have an account? <a href="login.php">Sign in</a>
    </p>
  </form>
</body>
</html>
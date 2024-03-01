<?php include('server.php'); ?>
<!DOCTYPE html>
<html>
<head>
  <title>Login Page</title>
   <link rel="stylesheet" type="text/css" href="register.css">
</head>
<body>
 <div class="header">
   <h3>Login</h3>
 </div>

  <form method="post" action="register.php">
    <?php include('errors.php'); ?>
    <div class="input-group">
      <label>Username</label>
      <input type="text" name="username">
    </div>
    <div class="input-group">
      <label>Password</label>
      <input type="text" name="password">
    </div>
    <div class="input-group">
      <button type="submit" name="login" class="btn">login</button>
    </div>
    <p>
      Don't have an account? <a href="register.php">Sign up</a>
    </p>
  </form>
</body>
</html>
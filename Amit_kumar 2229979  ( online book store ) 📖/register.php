<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="header">
  	<h2>Register</h2>
  </div>

  <?php
  // Check if the form is submitted
  if (isset($_POST['reg_user'])) {
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"]; // Store password in plain text

    $sql = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password')";

    if ($db->query($sql) === TRUE) {
        echo '<script>alert("Registration successful!");</script>';
    } else {
        echo "Error: " . $sql . "<br>" . $db->error;
    }
  }
  ?>

  <form method="post" action="">
  	<div class="input-group">
  	  <label>Username</label>
  	  <input type="text" name="username" required>
  	</div>
  	<div class="input-group">
  	  <label>Email</label>
  	  <input type="email" name="email" required>
  	</div>
  	<div class="input-group">
  	  <label>Password</label>
  	  <input type="password" name="password" required>
  	</div>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_user">Register</button>
  	</div>
  	<p>
  		Already a member? <a href="login.php">Sign in</a>
  	</p>
  </form>
</body>
</html>

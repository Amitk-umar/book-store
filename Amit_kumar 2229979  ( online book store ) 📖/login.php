<?php
include('server.php');

// Check if the form is submitted
if (isset($_POST['login_user'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Retrieve user data from the database
    $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    $result = $db->query($query);

    // Check if a user with the provided credentials exists
    if ($result->num_rows == 1) {
        echo '<script>alert("Login successful!");</script>';
		echo "<script>window.location.href ='index.php';</script>";
            exit(0);
    } else {
        echo '<script>alert("Incorrect username or password.");</script>';
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login system PHP and MySQL</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="header">
        <h2>Login</h2>
    </div>

    <form method="post" action="index.html">
        <div class="input-group">
            <label>Username</label>
            <input type="text" name="username" required>
        </div>
        <div class="input-group">
            <label>Password</label>
            <input type="password" name="password" required>
        </div>
        <div class="input-group">
            <button type="submit" class="btn" name="login_user">Login</button>
        </div>
        <p>
            Not yet a member? <a href="register.php">Sign up</a>
        </p>
    </form>
</body>
</html>

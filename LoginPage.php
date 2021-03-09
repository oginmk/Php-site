<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/loginStyle.css">
</head>
<body>

<h2>Login Form</h2>

<form action="PHP/login.php" method="post">
    <div class="container">
        <label for="email"><b>Email</b></label>
        <input type="text" placeholder="Enter Email" name="email" required>

        <label for="pass"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="pass" required>

        <button type="submit" name="submitB">Login</button>
    </div>
</form>
<div class="container signin">
    <p>Dont have an account? <a href="Register.php">Register</a>.</p>
</div>
<?php
 if(isset($_GET["success"])){
     if ($_GET['success']==1){
         echo '<p>Successful Creation!</p>';
         echo '<p>You can now log in </p>';
     }
 }
 if(isset($_GET["error"])){
     if ($_GET['error']=="Invalid"){
         echo '<p>INVALID LOGIN CREDENTIALS</p>';
         echo '<p>TRY AGAIN</p>';
     }
     if ($_GET['error']=="noLogin"){
         echo '<p>Please Login</p>';
         session_regenerate_id();
     }
 }
?>
</body>
</html>

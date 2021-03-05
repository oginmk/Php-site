<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/loginStyle.css">
</head>
<body>

<h2>Login Form</h2>

<form action="PHP/login.php" method="post">
    <div class="container">
        <label for="uname"><b>Username</b></label>
        <input type="text" placeholder="Enter Username" id="uname" required>

        <label for="pass"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" id="pass" required>

        <button type="submit">Login</button>
    </div>
</form>
<?php
 if(isset($_GET["success"])){
     if ($_GET['success']==1){
         echo '<p>Successful Creation!</p>';
         echo '<p>You can now log in </p>';
     }
 }
?>
</body>
</html>

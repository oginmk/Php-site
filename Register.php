<?php
include 'PHP/register.php'
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Register</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/registerStylesheet.css">
</head>
<body>

<form action="PHP/register.php" method="post">
    <div class="container">

        <h1>Register</h1>
        <p>Please fill in this form to create an account.</p>
        <hr>
        <?php
        if(isset($_GET["error"]) OR (isset($_SESSION['searchMEM']))){
            if ($_GET['error']=="password"){
                echo '<p>Passwords don\'t match!!!</p>';
                echo '<p>Try Again</p>';
            }elseif($_GET['error']=="email"){
                echo '<p>Not a valid email!!!</p>';
                echo '<p>Try Again</p>';
            }elseif($_GET['error']=="passShort"){
                echo '<p>Password is too short!!!</p>';
                echo '<p>Try Again</p>';
            }elseif($_GET['error']=="userExists"){
                echo '<p>User Already exists!!!</p>';
                echo '<p>Try Again</p>';
            }elseif($_GET['error']=="Error"){
                echo '<p>Invalid Username!!!</p>';
                echo '<p>Try Again</p>';
            }elseif(isset($_SESSION['searchMEM'])){
                session_regenerate_id();
                header('location: ../PHP/search.php');
                exit();
            }
        }

        ?>
        <label for="name"><b>Name</b></label>
        <input type="text" placeholder="Enter Name" name="name" id="name" required>

        <label for="email"><b>Email</b></label>
        <input type="text" placeholder="Enter Email" name="email" id="email" required>


        <label for="psw"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="psw" id="psw" required>

        <label for="psw-repeat"><b>Repeat Password</b></label>
        <input type="password" placeholder="Repeat Password" name="psw-repeat" id="psw-repeat" required>
        <label for="devtype"><b>Choose your preferred developer type</b></label>
        <br>
        <select name="developerType" id="devtype">
            <option value="1">Front End Developer</option>
            <option value="11" >- Angular</option>
            <option value="111" >&nbsp;&nbsp;- AngularJS</option>
            <option value="112" >&nbsp;&nbsp;- Angular 2</option>
            <option value="12" >- React</option>
            <option value="121">&nbsp;&nbsp;- React native</option>
            <option value="13">- Vue</option>
            <option value="2">Back End Developer</option>
            <option value="21">- PHP</option>
            <option value="211" >&nbsp;&nbsp;- Symfony</option>
            <option value="2111" >&nbsp;&nbsp;&nbsp;&nbsp;- Silex</option>
            <option value="212" >&nbsp;&nbsp;- Laravel</option>
            <option value="2121" >&nbsp;&nbsp;&nbsp;&nbsp;- Lumen</option>
            <option value="22">- NodeJS</option>
            <option value="221" >&nbsp;&nbsp;- Express</option>
            <option value="222" >&nbsp;&nbsp;- NestJS</option>
        </select>
        <br>
        <hr>

        <button type="submit" class="registerbtn" name="kopce123">Register</button>
    </div>
</form>

<div class="container signin">
    <p>Already have an account? <a href="LoginPage.php">Sign in</a>.</p>
</div>

</body>
</html>
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
        if(isset($_GET["error"])){
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
            <option value="FrontEnd">Front End Developer</option>
            <option value="Angular" >- Angular</option>
            <option value="AngularJS" >&nbsp;&nbsp;- AngularJS</option>
            <option value="Angular2" >&nbsp;&nbsp;- Angular 2</option>
            <option value="React" >- React</option>
            <option value="reactNative">&nbsp;&nbsp;- React native</option>
            <option value="Vue">- Vue</option>
            <option value="BackEnd" class="option">Back End Developer</option>
            <option value="PHP">- PHP</option>
            <option value="Symfony" >&nbsp;&nbsp;- Symfony</option>
            <option value="Silex" >&nbsp;&nbsp;&nbsp;&nbsp;- Silex</option>
            <option value="Laravel" >&nbsp;&nbsp;- Laravel</option>
            <option value="Lumen" >&nbsp;&nbsp;&nbsp;&nbsp;- Lumen</option>
            <option value="NodeJS">- NodeJS</option>
            <option value="Express" >&nbsp;&nbsp;- Express</option>
            <option value="NestJS" >&nbsp;&nbsp;- NestJS</option>
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
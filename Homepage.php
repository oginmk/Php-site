<?php
session_start();

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="navbar">
    <?php
    if (isset($_SESSION['nameUser'])) {
        $name = $_SESSION['nameUser'];
        echo "<a href='PHP/logout.php'>Logout</a>";
    } else {
       echo "<a href='LoginPage.php'>Login</a>";

       echo '<a href="Register.php">Register</a>';
    }
    ?>


    <div class="container-search">
        <form action="PHP/search.php" method="post">
            <label for="devtype">Choose your preferred developer type</label>
            <select name="developerType" id="devtype">
                <option value="FrontEnd" class="option">Front End Developer</option>
                <option value="Angular">- Angular</option>
                <option value="AngularJS">&nbsp;&nbsp;- AngularJS</option>
                <option value="Angular2">&nbsp;&nbsp;- Angular 2</option>
                <option value="React">- React</option>
                <option value="reactNative">&nbsp;&nbsp;- React native</option>
                <option value="Vue">- Vue</option>
                <option value="BackEnd" class="option">Back End Developer</option>
                <option value="PHP">- PHP</option>
                <option value="Symfony">&nbsp;&nbsp;- Symfony</option>
                <option value="Silex">&nbsp;&nbsp;&nbsp;&nbsp;- Silex</option>
                <option value="Laravel">&nbsp;&nbsp;- Laravel</option>
                <option value="Lumen">&nbsp;&nbsp;&nbsp;&nbsp;- Lumen</option>
                <option value="NodeJS">- NodeJS</option>
                <option value="Express">&nbsp;&nbsp;- Express</option>
                <option value="NestJS">&nbsp;&nbsp;- NestJS</option>
            </select>
            <input type="text" placeholder="Search.." name="search">
            <button type="submit" name="searchButton">Submit</button>
        </form>
    </div>
</div>
<div style="padding-left: 20px">
    <h2>Hello</h2>
    <!--   <h3>This is the basic homepage for my PHP project</h3> -->
</div>
</body>
</html>
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
                <option value="1" class="option">Front End Developer</option>
                <option value="11">- Angular</option>
                <option value="111">&nbsp;&nbsp;- AngularJS</option>
                <option value="112">&nbsp;&nbsp;- Angular 2</option>
                <option value="12">- React</option>
                <option value="121">&nbsp;&nbsp;- React native</option>
                <option value="13">- Vue</option>
                <option value="2" class="option">Back End Developer</option>
                <option value="21">- PHP</option>
                <option value="211">&nbsp;&nbsp;- Symfony</option>
                <option value="2111">&nbsp;&nbsp;&nbsp;&nbsp;- Silex</option>
                <option value="212">&nbsp;&nbsp;- Laravel</option>
                <option value="2121">&nbsp;&nbsp;&nbsp;&nbsp;- Lumen</option>
                <option value="22">- NodeJS</option>
                <option value="221">&nbsp;&nbsp;- Express</option>
                <option value="222">&nbsp;&nbsp;- NestJS</option>
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
<div id="results">
<?php
require 'PHP/Functions.php';
if(isset($_GET["search"])){
    if ($_GET['search']=='yes') {
        $test = $_SESSION['vardrump'];
        echo '<div id="print1">';
        PrintTRee1($test);
        echo '</div>';

    }
}
?>
</div>
</body>
</html>
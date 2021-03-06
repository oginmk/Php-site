<?php
include 'dbh.inc.php';
require_once 'dbh.inc.php';
require_once 'Functions.php';
$host = "localhost";
$port = 3306;
$dbname = 'users';
$DBusername = 'root';
$DBpass = '';

$connection = mysqli_connect($host,$DBusername,$DBpass,$dbname);
if (isset($_POST["kopce123"])) {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $password = $_POST["psw"];
    $passrepeat = $_POST["psw-repeat"];
    $selected = $_POST["developerType"];

    if (strcmp($password, $passrepeat)!=0){
        header('location: ../Register.php?error=password');
        exit();
    }
    if (email_check($email)==false){
        header('location: ../Register.php?error=email');
        exit();
    }
    if (!strlen(trim($password))>6){
        header('location: ../Register.php?error=passShort');
        exit();
    }else{
        create_user($connection,$name,$email,trim($password),$selected);
    }
}else {
    echo "it doesn't work";
}
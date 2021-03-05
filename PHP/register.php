<?php
if (isset($_POST["kopce123"])) {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $password = $_POST["psw"];
    $passrepeat = $_POST["psw-repeat"];
    $selected = $_POST["developerType"];
    require_once 'dbh.inc.php';
    require_once 'Functions.php';

//    if (!pwd_match($password,$passrepeat)){
//        header('location: ../Register.php?error=passwords');
//        exit();
//    }
//    if (!email_match($conn,$email)){
//        header('location: ../Register.php?error=email');
//        exit();
//    }
//    create_user($name,$email,$password,$selected);


} else {
    echo "it doesn't work";
}
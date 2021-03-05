<?php
include 'dbh.inc.php';
function password_check($password,$passrepeat){
    if (strcmp($password,$passrepeat)){
        return true;
    }else
        return false;
}
function email_check($email){
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        return false;
    }else return true;
}

function create_user($connection,$name,$email,$password,$selected){
    $password = password_hash($password,PASSWORD_DEFAULT);
    $query = "INSERT INTO usersInfo (nameUser,email,password,developerType) VALUES('$name', '$email', '$password', '$selected')";
    mysqli_query($connection, $query);

    header('location: ../LoginPage.php?success=1');
    exit();
}
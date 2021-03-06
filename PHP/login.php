<?php
session_start();
require_once 'Functions.php';
$connection = myconnect();
//proverka dali postoi post
if (isset($_POST["submitB"])){
    //Zemanje na info za userot
    $email = $_POST["email"];
    $password = $_POST["pass"];
    if (email_check($email)==false){
        header('location: ../LoginPage.php?error=Invalid');
        exit();
    }
    $sql= "SELECT id,password,nameUser,email FROM usersinfo WHERE email = '$email' LIMIT 1";
    $quer = mysqli_query($connection,$sql);

//proverka dali postoi
    $row = mysqli_fetch_array($quer);
    if (mysqli_num_rows($quer) == 1){
//        nesho session start i redirect vo home page
        $passwordtemp = $row['password'];
        $id = $row['id'];
        $nameUser = $row['nameUser'];
        $email = $row['email'];
        $statement = password_verify($password,$passwordtemp);
        if ($statement==true){
            $_SESSION['nameUser']=$nameUser;
            $_SESSION['email']=$email;
            header('location: ../Homepage.php');
            exit();
        }
    }else{
        header('location: ../LoginPage.php?error=Invalid');
        exit();
        }
}
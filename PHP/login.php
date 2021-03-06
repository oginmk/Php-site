<?php
session_start();
require_once 'Functions.php';
$host = "localhost";
$port = 3306;
$dbname = 'users';
$DBusername = 'root';
$DBpass = '';

$connection = mysqli_connect($host,$DBusername,$DBpass,$dbname);
//proverka dali postoi post
if (isset($_POST["submitB"])){
    //Zemanje na info za userot
    $email = $_POST["email"];
    $password = $_POST["pass"];
    if (email_check($email)==false){
        header('location: ../Register.php?error=email');
        exit();
    }
    $sql= "SELECT id,password,nameUser FROM usersinfo WHERE email = '$email' LIMIT 1";
    $quer = mysqli_query($connection,$sql);

//proverka dali postoi
    $row = mysqli_fetch_array($quer);
    if (mysqli_num_rows($quer) == 1){
//        nesho session start i redirect vo home page
        $passwordtemp = $row['password'];
        $id = $row['id'];
        $nameUser = $row['nameUser'];
        $statement = password_verify($password,$passwordtemp);
        if ($statement==true){
            $_SESSION['nameUser']=$nameUser;
            header('location: ../Homepage.php');
            exit();
        }
    }else{
        header('location: ../LoginPage.php?error=Invalid');
        exit();
        }
}
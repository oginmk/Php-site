<?php
require_once 'Functions.php';
session_start();
$connection = myconnect();
if (isset($_POST['searchButton']) OR (isset($_SESSION['searchMEM']))){
    if(isset($_SESSION['nameUser'])){
        $email = $_SESSION['email'];
        $name = $_SESSION['nameUser'];
        if(isset($_SESSION['searchMEM'])){
            $search = $_SESSION['searchMEM'];
            $select = $_SESSION['selectMEM'];
            unset($_SESSION['searchMEM']);
            unset($_SESSION['selectMEM']);
        }else{
            $select = $_POST['developerType'];
            $search = $_POST['search'];
        }
        unset($_SESSION['data']);
        $qry = mysqli_query($connection, "SELECT * FROM usersInfo WHERE (nameUser LIKE '%$search%') OR (email LIKE '%$search%') ");
        $data = mysqli_fetch_all($qry);
        $_SESSION['data'] = $data;
        header('location: ../Homepage.php?search=yes');

    }else{
        $_SESSION['searchMEM'] = $_POST['search'];
        $_SESSION['selectMEM'] = $_POST['developerType'];
        header('location: ../LoginPage.php?error=noLogin');
    }
}
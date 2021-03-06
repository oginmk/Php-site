<?php
require_once 'Functions.php';
session_start();
$connection = myconnect();
if (isset($_POST['searchButton'])){
    $select = $_POST['developerType'];
    $email = $_SESSION['email'];
    $name = $_SESSION['nameUser'];
    $search = $_POST['search'];
    unset($_SESSION['data']);
    $qry = mysqli_query($connection,"SELECT * FROM usersInfo WHERE (nameUser LIKE '%$search%') OR (email LIKE '%$search%') ");
    $data = mysqli_fetch_all($qry);
    $_SESSION['data']=$data;
    header('location: ../Homepage.php?search=yes');
}
<?php
require_once 'Functions.php';
session_start();
$connection = myconnect();
if (isset($_POST['searchButton'])){
    $select = $_POST['developerType'];
    $email = $_SESSION['email'];
    $name = $_SESSION['nameUser'];
    $search = $_POST['search'];
    var_dump($search);

    $qry = mysqli_query($connection,"SELECT nameUser,email FROM usersInfo WHERE (nameUser LIKE '%$search%') OR (email LIKE '%$search%') ");
    $data = mysqli_fetch_array($qry);
    var_dump($data);
};
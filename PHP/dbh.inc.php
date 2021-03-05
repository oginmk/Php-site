<?php
$host = "localhost";
$port = 3306;
$dbname = 'users';
$DBusername = 'root';
$DBpass = '';

$connection = mysqli_connect($host,$DBusername,$DBpass,$dbname);
if(!$connection){
    die("COnnection failed: " .mysqli_connect_error());
}else
    echo 'it works!!';

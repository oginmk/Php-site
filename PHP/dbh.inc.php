<?php
$host = "localhost";
$port = 3306;
$dbname = 'users';
$DBusername = 'root';
$DBpass = '';

$connection = mysqli_connect($host,$DBusername,$DBpass,$dbname);
if(!$connection){
    die("Connection failed: " .mysqli_connect_error());
}

<?php
include 'dbh.inc.php';
function myconnect()
{
    $host = "localhost";
    $port = 3306;
    $dbname = 'users';
    $DBusername = 'root';
    $DBpass = '';
    return mysqli_connect($host, $DBusername, $DBpass, $dbname);
}


function email_check($email)
{
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        return false;
    } else return true;
}

function create_user($connection, $name, $email, $password, $selected)
{
    print_r("ugabuga");
    $password = password_hash($password, PASSWORD_DEFAULT);
    $query = "INSERT INTO usersInfo (nameUser,email,password,developerType) VALUES('$name', '$email', '$password', '$selected')";
    if (!(mysqli_query($connection, $query))) {
        header('location: ../Register.php?error=Error');
        exit();
    } else {
        header('location: ../LoginPage.php?success=1');
        exit();
    }
}

function getFirstDigit($number)
{
    while ($number > 10) {
        $number = $number / 10;
    }

    ///110 -> 11 -> 1 ;
    return $number;
}

function changeCount(array &$rows, $id)
{
    foreach ($rows as $row) {
        $dolzina = strlen((string)$id);
        $prvaBrojka = $id;
        if ($row[$prvaBrojka] == $prvaBrojka) {
            $row['count'] +=1;
            if ($dolzina>0){
                $id2 = $id%(pow(10,$dolzina));
                changeCount($row[$id], $id2);
            }
        }
    }
}
//
//    $dolzina = strlen($kategorija);
//
//    while ($dolzina>1){
//        $id = $kategorija[0];
//            changeCount($rows,$id);
//            $kategorija= substr($kategorija,1);
//            $dolzina = strlen($kategorija);
//    }
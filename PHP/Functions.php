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
// changes count value of the structure , and inserts name of dev in designated structure
function changeCount(&$rows, $id, $name)
{
    foreach ($rows as &$row) {
        if (is_array($row)) {
            $dolzina = strlen((string)$id);
            if ($dolzina == 1) {
                $prvaBrojka = $id;
            } else if ($dolzina > 1) {
                $prvaBrojka = floor($id / (pow(10, $dolzina - 1)));
            } else
                break;
            if (isset($row['category_id'])) {
                if ($row['category_id'] == $prvaBrojka) {
                    $row['count'] += 1;
                    $dolzina = $dolzina-1;
                    if ($dolzina >= 1) {
                        $id2 = $id % (pow(10, $dolzina));

                        if (isset($row['category_id'])) {
                            changeCount($row, $id2,$name);
                        }
                    }else
                    {
                        array_push($row['developer_name'],$name);
                    }
                }
            }
        }
    }
}
// prints structure tree
function PrintTRee1(&$rows){
    foreach ($rows as &$row){
        if (is_array($row)){
            if (isset($row['count'])) {
                if ($row['count'] > 0) {
                    if (!empty($row['developer_name'])){
                        $myarr = implode(', ',$row['developer_name']);
                        echo '<ul><div id="div1">' . $row["category_value"] . ' ' . '('.$row['count'].')'.'</div>';
                        $myarr = implode(', ',$row['developer_name']);
                        echo ' <div id="div2"> '.$myarr.' </div>';
                        PrintTRee1($row);
                        echo '</ul>';
                    }else {
                        echo '<ul>' . $row["category_value"] . ' '.'(' . $row['count'].')';
                        PrintTRee1($row);
                        echo '</ul>';
                    }
                }
            }
        }
    }
}
//function for printing only username with /ul/
function PrintTRee2(&$rows){
    foreach ($rows as &$row){
        if (is_array($row)){
            if (isset($row['count'])) {
                if ($row['count'] > 0) {
                    if (!empty($row['developer_name'])){
                        $myarr = implode(', ',$row['developer_name']);
                        echo '<ul id="ul2"> <div id="div2"> '.$myarr.' </div>';
                        PrintTRee2($row);
                        echo '</ul>';
                    }else {
                        echo '<ul id="ul2">'.'<br>';
                        PrintTRee2($row);
                        echo '</ul>';

                    }
                }
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
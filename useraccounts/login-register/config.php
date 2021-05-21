<?php
$sname = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "clinic_useraccounts";

$conn = mysqli_connect($sname, $db_user, $db_pass, $db_name);

if(!$conn){
    echo "Connection failed!";
}

?>
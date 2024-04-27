<?php

$sname = "locahost";
$uname = "root";
$password = "";
$db_name = "new_wave";

$conn = mysqli_connect($sname,$uname,$password,$db_name);

if(!$conn){
    echo "Connection failed!";
    exist();
}

?>
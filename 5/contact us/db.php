<?php


$conn =new mysqli("localhost","root","","new_wave");

if($conn->connect_error){
    echo "connection failed!";
    exist();
}


?>
<?php
$dbhost = "localhost:3306";
$username = "root";
$password = "";
$dbname = "new_wave";
// Create connection
$conn =  mysqli_connect($dbhost, $username, $password,$dbname);
// Check connection
if ($conn->connect_error) {
 die("Connection failed: " . $conn->connect_error);
}

?>

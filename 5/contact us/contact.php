<?php
require 'db.php';

if(isset($_POST['Submit']))
{
    $name = $_POST['name'];
    $email = $_POST['email'];
    $description = $_POST['description'];



$sql = "INSERT INTO contact_us (name,email,description) VALUES ('$name','$email','$description')";

if($conn->query($sql))
{
    echo "Inserted successfully!";
}else {
   echo "Error!";

}
// $conn->close();

}

?>

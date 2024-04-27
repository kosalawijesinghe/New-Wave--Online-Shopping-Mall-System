<?php
session_start();
include "db.php";

if(isset($_POST['Submit']))
    {
        $Cart_ID = $_POST['Cart_ID'];
        $Product_ID = $_POST['Product_ID'];
        $No_of_Products = $_POST['No_of_Products'];
        $Customer_ID = $_POST['Customer_ID'];
    }


$sql = "insert into items" Cart(Cart_ID,Product_ID,No_of_Products,Customer_ID)values('$Cart_ID','$Product_ID','$No_of_Products','$Customer_ID');
$result = $conn->query($sql);

if($result == true){
    echo "Record creates successfully!";
}
else{
    echo "Error!";
}
mysqli_query($conn,$sql)
mysqli_close($conn);
?>